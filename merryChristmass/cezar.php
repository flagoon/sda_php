<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 18.12.17
 * Time: 20:25
 */

declare(strict_types=1);
system('clear');


/** @var $cipherText string to cipher*/
$cipherText = readline("Co chcesz zaszyfrować, Brutusie: ");

/** @var $outputString string that will be echo as a result. */
$outputString = "";

for ($i = 0; $i < strlen($cipherText); $i++) {

    /** Ceasar cipher works only on letters a-z and A-Z. This function
     *  checks if character is correct with this condition and then cipher it.
     *  If not, character will not be cipher.
     */
    if (preg_match("/[a-zA-Z]/", $cipherText[$i])) {
        $outputString .= cipherMeGently($cipherText[$i]);
    } else {
        $outputString .= $cipherText[$i];
    }
}

function cipherMeGently(string $char): string {

    /** @var $asciiChar integer holding ASCII information about character. */
    $asciiChar = ord($char);
    if (($asciiChar > 64 && $asciiChar < 78) || ($asciiChar > 96 && $asciiChar < 110)) {
        return chr($asciiChar + 13);
    } else {
        return chr($asciiChar - 13);
    }
}
echo "*****ZASZYFROWANA WIADOMOŚĆ TO*****" . PHP_EOL;
echo $outputString;

echo PHP_EOL;