<?php
declare(strict_types=1);
system('clear');

function fibonacci(int $number): float
{
    // f(5) = f(4) + f(3);  =>  5
    // f(4) = f(3) + f(2);  =>  3
    // f(3) = f(2) + f(1);  =>  2
    // f(2) = f(1) + 1;     =>  1
    // f(1) = 1             =>  1
}

fibonacci(5);