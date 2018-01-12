<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.01.18
 * Time: 22:15
 */
declare(strict_types=1);
system("clear");

/**
 * @var array of numbers $range
 */
$range = range(0,50);

foreach ($range as $key => $number) {
    echo "{$number} ";
    if ($key % 2) {
        echo " |" . PHP_EOL;
    }
}

echo PHP_EOL;