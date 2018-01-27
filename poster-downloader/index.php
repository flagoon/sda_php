<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 27.01.18
 * Time: 09:34
 */

require_once './src/Helper.php';

$helper = new Helper;

$titleArray = [
    'Pirates of the Caribbean Dead Men Tell No Talse',
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

$helper->clearImgFolder('posters');
$helper->clearImgFolder('shots');
$imgSaveDir = './src/posters';
$shotsSaveDir = './src/shots';

$urlLocationPosters = 'https://cytaty.eu/img/sda/posters/';
$urlLocationShots = 'https://cytaty.eu/img/sda/shots/';

for ($i = 1; $i <= 12; $i++) {
    $date = new DateTime();
    file_put_contents(
        './src/posters.txt',
        $date->format('Y-m-d H:i:s.u')
        . ' start downloading poster of '
        . $titleArray[$i - 1] . '.'
        . PHP_EOL,
        FILE_APPEND
    );
    $poster = file_get_contents($urlLocationPosters . $i . '.jpg');
    file_put_contents($imgSaveDir . '/'. $titleArray[$i - 1] . '.jpg', $poster);
    $date = new DateTime();
    file_put_contents(
        './src/posters.txt',
        $date->format('Y-m-d H:i:s.u')
        . ' download stopped.'
        . PHP_EOL,
        FILE_APPEND
    );
}

for ($i = 1; $i <= 12; $i++) {
    $date = new DateTime();
    file_put_contents(
        './src/shots.txt',
        $date->format('Y-m-d H:i:s.u')
        . ' start downloading shot of '
        . $titleArray[$i - 1] . '.',
        FILE_APPEND
    );
    $shot = file_get_contents($urlLocationShots . $i . '.jpg');
    file_put_contents($shotsSaveDir . '/'. $titleArray[$i - 1] . '.jpg', $shot);
    $date = new DateTime();
    file_put_contents(
        './src/shots.txt',
        $date->format('Y-m-d H:i:s.u')
        . ' download stopped.'
        . PHP_EOL,
        FILE_APPEND
    );
}
