<?php 
declare(strict_types=1);
system('clear');

function factorial(int $number): int
{
    if ($number === 1) {
        return 1;
    }
    return factorial($number - 1) * $number;
}

echo factorial(5), PHP_EOL;