<?php
declare(strict_types=1);
system('clear');

/** @param $number integer number to show fibonacci for this position. */
/** @param $number integer number to show fibonacci for this position. */
function fibonacci(int $number): float
{
    if($number <= 2) {
        return 1;
    }

    return fibonacci($number - 2) + fibonacci($number - 1);

    // f(5) = f(4) + f(3);  =>  5
    // f(4) = f(3) + f(2);  =>  3
    // f(3) = f(2) + f(1);  =>  2
    // f(2) = f(1) + 1;     =>  1
    // f(1) = 1             =>  1
}

echo fibonacci(15) . PHP_EOL;