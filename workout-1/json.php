<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 12.01.18
 * Time: 22:30
 */
declare(strict_types=1);
system("clear");

$range_number = range(1, 10);
$range_letter = range('z', 'h');

echo json_encode($range_letter) . PHP_EOL;
echo json_encode($range_number) . PHP_EOL;