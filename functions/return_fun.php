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

echo sum(4,4), PHP_EOL;