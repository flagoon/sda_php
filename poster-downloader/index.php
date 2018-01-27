<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 27.01.18
 * Time: 09:34
 */

require_once './src/Helper.php';

// $config = yaml_parse_file( './config.yml');
// var_export($config);

exit();

$helper = new Helper;

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

$linkList = [];

$urlLocationPosters = 'https://cytaty.eu/img/sda/posters/';
preg_match_all('/href="([0-9]+)\.jpg"/', file_get_contents($urlLocationPosters),$linkList);

$helper->clearImgFolder('posters');
$helper->clearImgFolder('shots');
$imgSaveDir = './src/posters';
$shotsSaveDir = './src/shots';

foreach($linkList[1] as $link) {
    $date = new DateTime();
    file_put_contents(
        './src/posters.txt',
        $date->format('Y-m-d H:i:s.u')
        . ' start downloading poster of '
        . $titleArray[$link - 1] . '.'
        . PHP_EOL,
        FILE_APPEND
    );
    $poster = file_get_contents($urlLocationPosters . $link . '.jpg');
    file_put_contents($imgSaveDir . '/'. $helper->removeSpaces($titleArray[$link - 1]) . '.jpg', $poster);
    $date = new DateTime();
    file_put_contents(
        './src/posters.txt',
        $date->format('Y-m-d H:i:s.u')
        . ' download stopped.'
        . PHP_EOL,
        FILE_APPEND
    );
}

$shotList = [];
$urlLocationShots = 'https://cytaty.eu/img/sda/shots/';
preg_match_all('/href="([0-9]+)\.jpg"/', file_get_contents($urlLocationShots),$shotList);

foreach ($shotList[1] as $shots) {
    $date = new DateTime();
    file_put_contents(
        './src/shots.txt',
        $date->format('Y-m-d H:i:s.u')
        . ' start downloading shot of '
        . $titleArray[$shots - 1] . '.'
        . PHP_EOL,
        FILE_APPEND
    );
    $shot = file_get_contents($urlLocationShots . $shots . '.jpg');
    file_put_contents($shotsSaveDir . '/'. $helper->removeSpaces($titleArray[$shots - 1]) . '.jpg', $shot);
    $date = new DateTime();
    file_put_contents(
        './src/shots.txt',
        $date->format('Y-m-d H:i:s.u')
        . ' download stopped.'
        . PHP_EOL,
        FILE_APPEND
    );
}
