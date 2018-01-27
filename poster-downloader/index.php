<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 27.01.18
 * Time: 09:34
 */

require_once './src/Helper.php';

$helper = new Helper;

$helper->clearImgFolder('posters');
$imgSaveDir = './src/posters';

$urlLocation = 'https://cytaty.eu/img/sda/posters/';

for ($i = 1; $i <= 12; $i++) {
    $poster = file_get_contents($urlLocation . $i . '.jpg');
    file_put_contents($imgSaveDir . '/'. $i . '.jpg', $poster);
}

//$posterName = basename($urlLocation);
