<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 21.01.18
 * Time: 12:11
 */
declare(strict_types=1);
require_once "Computer.php";
require_once "TurnOnApplication.php";
require_once "TakeOutside.php";

class Laptop extends Computer
{
    use TurnOnApplication, TakeOutside;
}
