<?php

system("clear");

$price = readline("Podaj cenę od 0 - 999: ");

$hundreds = (int)($price / 100);
$tens = (int)(($price - $hundreds * 100) / 10);
$single = (int)($price - $hundreds * 100 - $tens * 10);

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
    "0" => "",
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
    "0" => "",
];

if (10 > $price) {
    $singleArr["0"] = "zero";
    echo $singleArr[$single], zlote($single), PHP_EOL;
} elseif (20 > $price && 10 <= $price) {
    echo $tensArr[1][$single], "złotych", PHP_EOL;
} elseif (100 > $price && 20 <= $price)  {
    echo "{$tensArr[$tens]}{$singleArr[$single]}", zlote($single),  PHP_EOL;
} elseif (1000 > $price && 100 <= $price) {
    echo "{$hundredsArr[$hundreds]}{$tensArr[$tens]}{$singleArr[$single]}", zlote($single), PHP_EOL;
}

function zlote($lastCypher) 
{
    if ($lastCypher === 0 || ($lastCypher > 4 && $lastCypher <= 9)) {
        return "złotych";
    } elseif ($lastCypher > 1 && $lastCypher < 5) {
        return "złote";
    } else {
        if ($price > 10) {
            return "złoty";
        } else {
            return "złotych";
        }
        
    }
}

// jede   naście
// dwa   naście
// trzy   naście
// czter   naście
// piet   naście
// szes   naście
// siedem   naście
// osiem   naście
// dziewiet   naście