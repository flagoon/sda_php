<?php
//error reporting
error_reporting(E_ALL);
ini_set('display_error', true);

//script body
const MAX_SLIDE_NUMBER = 99;
if (!defined("MAX_SLIDE_NUMBER")) {
    define("MAX_SLIDE_NUMBER", 666);
}

echo "Maksymalna liczba slajdów: ", MAX_SLIDE_NUMBER, PHP_EOL;