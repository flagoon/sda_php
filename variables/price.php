<?php

system("clear");

$price = (int)readline("Podaj cenę od 0 - 999: ");

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

if (strlen($price) === 1) {
    $singleArr["0"] = "zero";
}

function printHundreds($number, $arr) {
    echo "{$arr[$number]}";
}

function printTens($tens, $singles, $arr) {
    if (1 === $tens) {
        echo "{$arr[1][$singles]}";
    } else {
        echo "{$arr[$tens]}";
    }
}

function printSingles($number, $arr) {
    echo "{$arr[$number]}";
}

printHundreds($hundreds, $hundredsArr);

printtens($tens, $single, $tensArr);

if (!($tens === 1)) {
    printSingles($single, $singleArr);
}

if ($single === 0 || ($single > 4 && $single < 10)) {
    echo "złotych";
}

if ($price === 1) {
    echo "złoty";
}

if ($single === 1 && $price > 10) {
    echo "złotych";
}

if ($single > 1 && $single < 5 && ($price < 10 || $price > 20)) {
    echo "złote";
}

if ($single > 2 && $single < ) {

}