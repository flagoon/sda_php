<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.01.18
 * Time: 21:51
 */

declare(strict_types=1);
system("clear");

for ($i = 1; $i <= 10; $i++) {
    if (!($i % 2)) {
        echo $i . PHP_EOL;
    }
}