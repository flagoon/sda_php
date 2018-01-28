<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 27.01.18
 * Time: 09:34
 */

require __DIR__ . '/vendor/autoload.php';

$helper = new Flagoon\Helper();
$posterLog = new Flagoon\Logger('./logs/postersLog.txt');
$shotsLog = new Flagoon\Logger('./logs/shotsLog.txt');

$titleArray = [
    'Pirates of the Caribbean: Dead Men Tell No Talse',
    'Rings',
    'Blade Runner 2049',
    'Thor',
    'Get Out',
    'Star Wars the Last Jedi',
    'Okja',
    'London has Fallen',
    'The Legend of Tarzan',
    'The Founder',
    'Captain America Civil War',
    'Spectre'
];

$posterSaveDir = './resources/posters';
$shotsSaveDir = './resources/shots';

$linkList = [];

$urlLocationPosters = 'https://cytaty.eu/img/sda/posters/';
preg_match_all('/href="([0-9]+)\.jpg"/', file_get_contents($urlLocationPosters),$linkList);

foreach($linkList[1] as $link) {
    $posterLog->addToLog("I started downloading {$titleArray[$link - 1]}");
    $poster = file_get_contents($urlLocationPosters . $link . '.jpg');
    file_put_contents($posterSaveDir . '/'. $helper->removeSpaces($titleArray[$link - 1]) . '.jpg', $poster);
    $posterLog->addToLog("I stopped downloading {$titleArray[$link - 1]}");
}

$shotList = [];
$urlLocationShots = 'https://cytaty.eu/img/sda/shots/';
preg_match_all('/href="([0-9]+)\.jpg"/', file_get_contents($urlLocationShots),$shotList);

foreach ($shotList[1] as $shots) {
    $shotsLog->addToLog("I started downloading {$titleArray[$shots - 1]}");
    $shot = file_get_contents($urlLocationShots . $shots . '.jpg');
    file_put_contents($shotsSaveDir . '/'. $helper->removeSpaces($titleArray[$shots - 1]) . '.jpg', $shot);
    $shotsLog->addToLog("I started downloading {$titleArray[$shots - 1]}");
}
