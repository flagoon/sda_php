<?php

system('clear');

$strings = ['Navicat', 'Category', 'Catharsis'];

foreach ($strings as $string) {
    if (mb_stripos($string, 'cat') > -1) {
        echo "Pozycja: ",$string, " ", mb_stripos($string, 'cat'), PHP_EOL;
    }

    echo "Długość: ", $string, " ", strlen($string), PHP_EOL;

    if (mb_stripos($string, 'cat') > -1) {
        $newString = mb_ereg_replace ('/cat/gi', 'dog', $string);
        echo "Zamienniono: ", $newString, " ", PHP_EOL;
    }
    echo "**************************", PHP_EOL;
}