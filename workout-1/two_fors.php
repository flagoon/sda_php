<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.01.18
 * Time: 22:10
 */
declare(strict_types=1);
system("clear");

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "{$i} * {$j} = " . $i * $j . PHP_EOL;
    }
}