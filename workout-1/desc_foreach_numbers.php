<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.01.18
 * Time: 21:35
 */
declare(strict_types=1);
system("clear");

$numbers = [1,2,3,4,5,6,7,8,9,10];
foreach ($numbers as $key => $number) {
    echo $numbers[9 - $key] . PHP_EOL;
}