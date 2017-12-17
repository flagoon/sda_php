<?php
declare(strict_types=1);
system('clear');

function sum(int $a = 0, int $b = 0): int
{
    return $a + $b;
}

echo sum(4,4), PHP_EOL;