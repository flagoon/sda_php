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

/**
 * Simple function to return a difference of two numbers
 * 
 * @param int $a [opt] first number to differentiate
 * @param int $b [opt] second number to differentiate
 * @return int result of difference
 */
function diff(int $a = 0, int $b = 0): int
{
    return $a - $b;
}

/**
 * Simple function to return a multiply of two numbers
 * 
 * @param int $a [opt] first number to multiply
 * @param int $b [opt] second number to multiply
 * @return int result of multiply
 */
function multi(int $a = 0, int $b = 0): int
{
    return $a * $b;
}

/**
 * Simple function to return a devision of two numbers
 * 
 * @param int $a [opt] first number to division
 * @param int $b [opt] second number to division
 * @return int result of division
 */
function div(int $a = 0, int $b = 0): float
{ 
    if ($b === 0) {
        die("Can't divide by 0" . PHP_EOL);
    }

    return $a / $b;
}

echo div(3, 0), PHP_EOL;