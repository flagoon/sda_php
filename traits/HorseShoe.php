<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 21.01.18
 * Time: 10:26
 */

require_once "Item.php";
require_once "GiveLuckTrait.php";

class HorseShoe extends Item
{
    use GiveLuckTrait;
}