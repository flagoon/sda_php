<?php

$alcohols = ['beer', 'wine', 'whisky', 'vodka',];

echo "Liczba elementów tablicy: ", count($alcohols), PHP_EOL;

var_export($alcohols);

echo PHP_EOL;

$last = array_pop($alcohols);
echo "Ostatni element: ", $last, PHP_EOL;

var_export($alcohols);

echo PHP_EOL;

array_push($alcohols, "bimber");

$newAlcohols = array_chunk($alcohols, 3);

echo PHP_EOL;

var_export($newAlcohols);