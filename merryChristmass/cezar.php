<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 18.12.17
 * Time: 20:25
 */

declare(strict_types=1);
system('clear');

/**
 * This variable checks if $cipherText is...
 * @var $isCorrect boolean
 */
$isCorrect = false;

/** @var $cipherText string to cipher*/
$cipherText = readline("Co chcesz zaszyfrować, Brutusie: ");

do {
    $isCorrect = true;
} while ($isCorrect);

for ($i = 0; $i < mb_strlen($cipherText); $i++) {
    echo chr(ord(mb_substr($cipherText, $i, 1))+13), PHP_EOL;
}

echo PHP_EOL;