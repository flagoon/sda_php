<?php
declare(strict_types=1);

/**
 * Headers for fetchers.
 */

header('Content-Type: application/json;charset=UTF-8');
header('Access-Control-Allow-Origin: *');

// get list of files from folder.
$files = glob('../resources/posters/*');

$exportArr = [];

foreach ($files as $file) {
    $poster = $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/' . $file;
    array_push($exportArr, $poster);
}

if (count($exportArr) > 0) {
    echo json_encode($exportArr);
} else {
    echo json_encode("no data");
}