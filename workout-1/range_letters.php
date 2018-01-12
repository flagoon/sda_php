<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.01.18
 * Time: 22:25
 */
declare(strict_types=1);
system("clear");

$range = range('a', 'z');

foreach ($range as $key => $letter) {
    echo "{$letter} ";

    // if we haven't reached last letter, we will put a comma.
    if ($key <= count($range) - 2) {
        echo ", ";
    }
}

echo PHP_EOL;