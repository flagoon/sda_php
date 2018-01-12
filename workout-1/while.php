<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.01.18
 * Time: 21:47
 */
declare(strict_types = 1);
system("clear");

$i = 10;
while ($i) {
    echo "{$i} ";
    $i--;
}

echo PHP_EOL . "<++++++++++++++++++>" . PHP_EOL;

$i = 1;
while ($i <= 10) {
    echo "{$i} ";
    ++$i;
}

echo PHP_EOL;