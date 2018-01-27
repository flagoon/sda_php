<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 27.01.18
 * Time: 09:34
 */

require __DIR__ . '';

$helper = new Helper;

$helper->clearImgFolder('posters');

$urlLocation = 'https://upload.wikimedia.org/wikipedia/en/4/4f/The_Hobbit_-_The_Desolation_of_Smaug_theatrical_poster.jpg';

$poster = file_get_contents($urlLocation);
$posterName = basename($urlLocation);
$imgSaveDir = './src/posters';

file_put_contents($imgSaveDir . '/'. $posterName, $poster);

