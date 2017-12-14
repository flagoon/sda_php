<?php

/**
 * Skrypt zawiera kilka ćwiczeniowych funkcji operujących na stringach.
 *
 * Przykład użycia:
 * 1. Zdefiniuj zmienną $stringToTest na ciąg znaków, który chcesz przetestować.
 * 2. Wywołuj kolejne funkcje zgodnie z ich dokumentacją.
 * 3. Uruchom skrypt w konsoli: php -f letters.php
 */

declare(strict_types=1);

/** this will clear the terminal */
system('clear');


/**
 * this variable will hold text to use in functions
 * @var $stringToTest string
 */
$stringToTest = "Żółć";

/**
 * it's an array of variable types, to check what article should echo return
 * @var $types array
 */
$types = ['object', 'array', 'integer'];


// this condition is checking what article should be used.
in_array(gettype($stringToTest), $types) ? $a = "an" : $a = "a";

if (gettype($stringToTest) != 'string') {
  echo "This should be a string, not $a " . gettype($stringToTest), PHP_EOL ;
} else if (strlen($stringToTest) > 0) {
  removeLastLetter($stringToTest);
  appendLetters($stringToTest, 's');
  insertLetters($stringToTest, 'my');
  removeFirstLetter($stringToTest);
  reverseText($stringToTest);
  textUpperCase($stringToTest);
  textLowerCase($stringToTest);
  dotsInjection($stringToTest);
} else {
  echo "String should have at least one character", PHP_EOL;
}


/**
 * Dodanie do tekstu na końcu ciągu znaków.
 *
 * @param string $text Tekst, do którego dodajemy ciąg znaków.
 * @param string $letters Ciąg znaków do dodania.
 *
 * @return string Tekst z dodanymi literami.
 */
function appendLetters(string $text, string $letters): string
{
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $text .= $letters;
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;

    return $text;
}

/**
 * Usunięcie ostatniej litery z podanego ciągu znaków.
 *
 * @param string $text Tekst, z którego usuniemy ostatnią literę.
 *
 * @return string Tekst bez ostatniej litery.
 */
function removeLastLetter(string $text): string
{
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $text = mb_substr($text, 0, mb_strlen($text) - 1);
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;

    return $text;
}

/**
 * Insert letters before given string
 *
 * @param string $text this is our given text
 *
 * @param string $letters this is letters that will be put before our word
 */
function insertLetters(string $text, string $letters) {
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $newText = $letters . ' ' . $text;
    echo "After ", __FUNCTION__, ": ", $newText, PHP_EOL;
}

/**
 * Remove fist letter from given string.
 *
 * @param string $text this is our given string
 */
function removeFirstLetter(string $text) {
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $text = mb_substr($text, 1, strlen($text));
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;
}

/**
 * Function that reverse given string.
 *
 * @param string $text this is our given string.
 */
function reverseText(string $text) {
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;

    // there is no mb_strrev function, so please accept my workarround :)
    for ($i = mb_strlen($text); $i >= 0; $i--) {
      $arr[] = mb_substr($text, $i, 1);
    }
    $text = join($arr, "");
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;
}

/**
 * this function is changing all small letter in given string to uppercase
 * it's returning uppercase string to use it in next function
 *
 * @param string $text it's a given string
 */
function textUpperCase(string $text) {
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $text = strtoupper($text);
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;
    return $text;
}

/**
 * this function is changing all big letter in given string to lowercase
 *
 * @param string $text it's a given string
 */
function textLowerCase(string $text) {
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $text = strtolower($text);
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;
}

/**
 * this function insert dots between letters of given word
 *
 * @param string $text is a given word
 */
function dotsInjection(string $text) {
  echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;

  // a loop to split string and then join it with dots
  for ($i = 0; $i < mb_strlen($text); $i++) {
    $arr[] = mb_substr($text, $i, 1);
  }
  $text = join($arr, ".");
  echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;
}