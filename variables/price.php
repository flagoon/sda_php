<?php

system("clear");

$price = readline("Podaj cenę od 0 - 999: ");

$hundreds = (int)($price / 100);
$tens = (int)(($price - $hundreds * 100) / 10);
$single = (int)($price - $hundreds * 100 - $tens * 10);

echo "$hundreds", PHP_EOL;
echo "$tens", PHP_EOL;
echo "$single", PHP_EOL;

$hundredsArr = [
    "1" => "sto ",
    "2" => "dwieście ",
    "3" => "trzysta ",
    "4" => "czterysta ",
    "5" => "pięćset ",
    "6" => "sześćset ",
    "7" => "siedemset ",
    "8" => "osiemset ",
    "9" => "dziewięćset ",
    "0" => "",
];

$tensArr = [
    "1" => [
        "0" => "dziesięć ",
        "1" => "jedenaście ",
        "2" => "dwanaście ",
        "3" => "trzynaście ",
        "4" => "czternaście ",
        "5" => "pietnaście ",
        "6" => "szesnaście ",
        "7" => "siedemnaście ",
        "8" => "osiemnaście ",
        "9" => "dziewietnaście",
    ],
    "2" => "dwadzieścia ",
    "3" => "trzydzieści ",
    "4" => "czterdzieści ",
    "5" => "pięćdziesiąt ",
    "6" => "sześćdziesiąt ",
    "7" => "siedemdziesiąt ",
    "8" => "osiemdziesiąt ",
    "9" => "dziewiędziesiąt ",
];

$singleArr = [
    "1" => "jeden ",
    "2" => "dwa ",
    "3" => "trzy ",
    "4" => "cztery ",
    "5" => "pięć ",
    "6" => "sześć ",
    "7" => "siedem ",
    "8" => "osiem ",
    "9" => "dziewięć ",
    "0" => "zero ",
];




// jede   naście
// dwa   naście
// trzy   naście
// czter   naście
// piet   naście
// szes   naście
// siedem   naście
// osiem   naście
// dziewiet   naście