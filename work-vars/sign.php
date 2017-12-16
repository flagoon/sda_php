<?php 
    $variableToCheck = -5.0;
    if (gettype($variableToCheck) == integer || gettype($variableToCheck) == double) {
        $condition = ($variableToCheck < 0) ? 'ujemna.' : 'dodatnia.';
        echo 'Liczba jest ' . $condition, PHP_EOL;
    }
    