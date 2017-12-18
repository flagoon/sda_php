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