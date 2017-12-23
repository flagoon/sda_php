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
$palindromCandidate = "abccbaAAXXSSAXAZZ";

/**
 * check if the word is a palindrom. It check first and last letter, and if it's the same, then
 * run it recursively for next letter.
 *
 * @param $stringToTest string which will be tested.
 */
function palindromTest(string $stringToTest): bool
{
    if (mb_strlen($stringToTest) < 2) {
        return true;
    }
    $firstLetter = mb_substr($stringToTest, 0, 1);
    $lastLetter = mb_substr($stringToTest, strlen($stringToTest)-1, 1);
    if ($firstLetter === $lastLetter) {
        return palindromTest(mb_substr($stringToTest, 1, strlen($stringToTest) - 2));
    } else {
        return false;
    }
}

/**
 * this function will iterate through the letters in word and check if it's a palindrom.
 *
 * @param $stringToIterate string that will be tested for all possible palindroms.
 */
function iterateThroughWord(string $stringToIterate): void
{
    for ($i = 0; $i < mb_strlen($stringToIterate) - 1; $i++) {
        $j = 0;
        do {
            // this variable holds a part of string that is tested by palindromTest function.
            $paliTest = mb_substr($stringToIterate, $j, mb_strlen($stringToIterate) - $i);
            if (palindromTest($paliTest)) {
                echo mb_strtoupper($paliTest) . " is a palindrom." . PHP_EOL;
            }
        } while ($i != $j++);
    }
}


iterateThroughWord($palindromCandidate);
