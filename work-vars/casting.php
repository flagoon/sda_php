<?php
    $variableToCase = 123.5675;
    if (gettype((double)$variableToCase) == 'double') {
        echo (int)$variableToCase, PHP_EOL;
    } else {
        echo 'I can\'t work with without numbers.', PHP_EOL;
    }