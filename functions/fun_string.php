<?php

system('clear');

$strings = ['Navicat', 'Category', 'Catharsis'];

foreach ($strings as $string) {
    if (stripos($string, 'cat') > -1) {
        echo "Pozycja: ",$string, " ", stripos($string, 'cat'), PHP_EOL;
    }

    echo "Długość: ", $string, " ", strlen($string), PHP_EOL;

    if (stripos($string, 'cat') > -1) {
        $newString = str_replace('cat', 'dog', strtolower($string));
        echo "Zamienniono: ", $newString, " ", PHP_EOL;
    }
    echo "**************************", PHP_EOL;
}