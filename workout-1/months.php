<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.01.18
 * Time: 22:01
 */
declare(strict_types=1);
system("clear");

$months = ['styczen', 'luty', 'marzec', 'kwiecien', 'maj', 'czerwiec', 'lipiec', 'sierpien', 'wrzesien', 'pazdziernik', 'listopad', 'grudzien'];

echo "<++++foreach++++>" . PHP_EOL;
foreach ($months as $month) {
    echo "{$month} ";
}

echo PHP_EOL . "<++++for+loop++++>" . PHP_EOL;
for ($i = 0; $i < count($months); $i++) {
    echo "$months[$i] ";
}

echo PHP_EOL . "<++++while++++>" . PHP_EOL;
while ($months) {
    echo array_shift($months) . " ";
}

echo PHP_EOL . "<++++for+loop++++>" . PHP_EOL;