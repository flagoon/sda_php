<?php
$a = 3;
include_once 'another.php';
require_once 'another.php';
#require 'another.php';

echo $a, PHP_EOL;