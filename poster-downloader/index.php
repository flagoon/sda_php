<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 27.01.18
 * Time: 09:34
 */

use Flagoon\Helper;
use Flagoon\Config;
use Flagoon\Logger;
use Flagoon\FileDownloader;

require __DIR__ . '/vendor/autoload.php';

$helper = new Helper();
$posterLog = new Logger(Config::POSTER_LOG_FILE);
$shotsLog = new Logger(Config::SHOTS_LOG_FILE);
$posterDownloader = new FileDownloader('poster', $helper);
$shotDownloader = new FileDownloader('shot', $helper);

$helper->clearFolder(Config::POSTERS_SAVE_DIR);
$helper->clearFolder(Config::SHOTS_SAVE_DIR);

$postersList = $helper->extractFileNamesFromHTML(file_get_contents(Config::POSTERS_URL));

foreach ($postersList as $posterNumber) {
    $posterLog->addToLog("I started downloading "
        . Config::TITLES_ARRAY[$posterNumber - 1]);
    $posterDownloader->downloadJpg($posterNumber);
    $posterLog->addToLog("I stopped downloading "
        . Config::TITLES_ARRAY[$posterNumber - 1]);
}

$shotList = $helper->extractFileNamesFromHTML(file_get_contents(Config::SHOTS_URL));

foreach ($shotList as $shotNumber) {
    $shotsLog->addToLog("I started downloading "
        . Config::TITLES_ARRAY[$shotNumber - 1]);
    $shotDownloader->downloadJpg($shotNumber);
    $shotsLog->addToLog("I stopped downloading "
        . Config::TITLES_ARRAY[$shotNumber - 1]);
}
