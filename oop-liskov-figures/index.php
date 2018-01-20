<?php
declare(strict_types=1);
system("clear");
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 20.01.18
 * Time: 12:53
 */

require_once 'Rectangle.php';
require_once 'Square.php';

$rect = new Rectangle();
$rect->setHeight(5);
$rect->setWidth(3);
echo "Area of rectangle is: {$rect->calcAreaOf()}" . PHP_EOL;

$sqr = new Square();
$sqr->setHeight(5);
$sqr->setWidth(3);
echo "Area of square is: {$sqr->calcAreaOf()}" . PHP_EOL;


function getArea(Rectangle $rectangle): int
{
    $rectangle->setWidth(2);
    $rectangle->setHeight(3);

    return $rectangle->calcAreaOf();
}

$newR = new Rectangle();
$newS = new Square();
echo getArea($newR) . PHP_EOL;
echo getArea($newS) . PHP_EOL;