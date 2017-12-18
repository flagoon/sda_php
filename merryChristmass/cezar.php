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
        $outputString .= $cipherText[$i];
    } else {
        $outputString .= $cipherText[$i];
    }
}

echo $outputString;

echo PHP_EOL;