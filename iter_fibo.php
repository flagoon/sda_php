<?php
declare(strict_types=1);
system('clear');

/**
 * @param $number integer, number of Fibonacci interations. It returns float as for bigger numbers it's not integer.
 */
function iter_fibo(int $number): float {
    $prevResult = 0;
    $nextResult = 1;

    // This conditions are needed for functions with parameter smaller than 2.
    if($number === 0) {
        return 0;
    } elseif ($number === 1) {
        return 1;
    } else {
        for ($i = 0; $i <= $number - 2; $i++) {
            $result = $prevResult + $nextResult;
            $prevResult = $nextResult;
            $nextResult = $result;
        }
    }
    return $result;
}

echo iter_fibo(3) . PHP_EOL;