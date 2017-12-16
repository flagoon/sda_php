<?php 
    $variableToCheck = -5.0;
    if (gettype($variableToCheck) == integer || gettype($variableToCheck) == double) {
        $condition = ($variableToCheck < 0) ? 'UJEMNA.' : 'DODATNIA.';
        echo 'Liczba ' . $variableToCheck . ' jest ' . $condition, PHP_EOL;
    } else {
        echo "Variable should be a number.";
    }
    