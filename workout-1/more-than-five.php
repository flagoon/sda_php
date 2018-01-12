<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.01.18
 * Time: 21:54
 */
declare(strict_types=1);
system("clear");

for ($i = 1; $i <= 10; $i++) {
    if($i < 5) {
        continue;
    }

    echo "{$i} is ";
    if($i % 2) {
        echo "odd number. " . PHP_EOL;
    } else {
        echo "even number. " . PHP_EOL;
    }
}