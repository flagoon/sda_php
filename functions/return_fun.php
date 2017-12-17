<?php
declare(strict_types=1);
system('clear');

/**
 * Simple function to return a sum of two numbers
 * 
 * @param int $a [opt] first number to sum
 * @param int $b [opt] second number to sum
 * @return int result of sum
 */
function sum(int $a = 0, int $b = 0): int
{
    return $a + $b;
}

function diff(int $a = 0, int $b = 0): int
{
    return $a - $b;
}

function multi(int $a = 0, int $b = 0): int
{
    return $a * $b;
}

function div(int $a = 0, int $b = 0): int
{
    return $a / $b;
}

echo sum(multi(div(8, 2), diff(10, 5)), diff(15, sum(3, 8))), PHP_EOL;