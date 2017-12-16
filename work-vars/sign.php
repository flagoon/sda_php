<?php 
    $variableToCheck = -5;
    $condition = ($variableToCheck < 0) ? 'ujemna.' : 'dodatnia.';
    echo 'Liczba jest ' . $condition, PHP_EOL;