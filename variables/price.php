<?php
declare(strict_types = 1);

// $correct integer for breaking out of loop.
$correct = 0;

// $pricePrompt string better communicate with user, that don't understand simple commands.
$pricePrompt = "Podaj cenę od 0 - 999: ";

do {
    system('clear');
    // $price string holds the value of price
    $price = readline($pricePrompt);
    $pricePrompt = "Musiasz podać LICZBĘ z przedzialu 0 - 999: ";

    if (is_numeric($price) && $price >= 0 && $price < 1000) {
        $correct = 1;
    }

} while (!$correct);

/**
 * @var $hundreds integer number of hundreds.
 */
$hundreds = (int)($price / 100);

/**
 * @var $tens integer number of tens.
 */
$tens = (int)(($price - $hundreds * 100) / 10);

/**
 * @var $single integer number of singles.
 */
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

$currencyName = [
    "0" => "złotych",
    "1" => "złotych",
    "2" => "złote",
    "3" => "złote",
    "4" => "złote",
    "5" => "złotych",
    "6" => "złotych",
    "7" => "złotych",
    "8" => "złotych",
    "9" => "złotych",
];

if (mb_strlen($price) === 1) {
    $singleArr["0"] = "zero";
}

function printHundreds(int $number, array $arr): void
{
    echo "{$arr[$number]}";
}

function printTens(int $tens, int $singles, array $arr): void
{
    if (1 === $tens) {
        echo "{$arr[1][$singles]}złotych";
    } else {
        echo "{$arr[$tens]}";
    }
}

function printSingles(int $number, array $arr): void
{
    echo "{$arr[$number]}";
}

printHundreds($hundreds, $hundredsArr);

printtens($tens, $single, $tensArr);

if (!($tens === 1)) {
    printSingles($single, $singleArr);
}

if ($tens !== 1) {
    echo $currencyName[$single];
}