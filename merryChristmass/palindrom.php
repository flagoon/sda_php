<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 18.12.17
 * Time: 21:35
 */

declare(strict_types=1);
system('clear');

/**
 * Main idea is as follows. I check first and last letter of the string. If they are the same
 * I will check the first and last letter of string that's between those letter. If I reach situation
 * that this substring length is equal 1 or 0, I will return true. That way I should have the longest
 * palindrom. If in some point first and last letter are different, I should return false and move
 * tested string by one place or remove last letter from it and try for shorter function.
 *
 * Easier said than code!
 */

/** @var $palindromCandidate string that we will check for palindrom elements. */
$palindromCandidate = "kajaki";

function testPalindrom($stringToTest)
{
    $strLength = strlen($stringToTest);
    echo "__{$stringToTest}__" . PHP_EOL;
    if ($strLength <= 1) {
        return $stringToTest;
    } else {
        return testPalindrom(substr($stringToTest, 1, $strLength - 2));
    }
}


function secondTry(string $string): bool
{
    if (strlen($string) < 3) {
       return true;
    }
    $firstLetter = mb_substr($string, 0,1);
    $lastLetter = mb_substr($string, strlen($string)-1, 1);
    if($firstLetter === $lastLetter) {
        return secondTry(substr($string, 1, strlen($string) - 2));
    } else {
        return false;
    }
}

if (secondTry($palindromCandidate)) {
    echo $palindromCandidate . PHP_EOL;
} else {
    echo "Not a palindrom.";
}