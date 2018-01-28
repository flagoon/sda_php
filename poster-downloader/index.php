<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 27.01.18
 * Time: 09:34
 */
namespace Flagoon;

require __DIR__ . '/vendor/autoload.php';

$helper = new Helper();
$posterLog = new Logger(Config::POSTER_LOG_FILE);
$shotsLog = new Logger(Config::SHOTS_LOG_FILE);

$helper->clearFolder(Config::POSTERS_SAVE_DIR);
$helper->clearFolder(Config::SHOTS_SAVE_DIR);

$linkList = [];
preg_match_all('/href="([0-9]+)\.jpg"/', file_get_contents(Config::POSTERS_URL), $linkList);

foreach ($linkList[1] as $link) {
    $posterLog->addToLog("I started downloading " . Config::TITLES_ARRAY[$link - 1]);
    $poster = file_get_contents(Config::POSTERS_URL . $link . '.jpg');
    file_put_contents(Config::POSTERS_SAVE_DIR . '/'. $helper->sanitizeTitles(Config::TITLES_ARRAY[$link - 1]) . '.jpg', $poster);
    $posterLog->addToLog("I stopped downloading " . Config::TITLES_ARRAY[$link - 1]);
}

$shotList = [];
preg_match_all('/href="([0-9]+)\.jpg"/', file_get_contents(Config::SHOTS_URL), $shotList);

foreach ($shotList[1] as $shots) {
    $shotsLog->addToLog("I started downloading " . Config::TITLES_ARRAY[$shots - 1]);
    $shot = file_get_contents(Config::SHOTS_URL . $shots . '.jpg');
    file_put_contents(Config::SHOTS_SAVE_DIR . '/'. $helper->sanitizeTitles(Config::TITLES_ARRAY[$shots - 1]) . '.jpg', $shot);
    $shotsLog->addToLog("I stopped downloading " . Config::TITLES_ARRAY[$shots - 1]);
}
