<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 21.01.18
 * Time: 10:26
 */
declare(strict_types=1);
namespace Flagoon;

require_once "Item.php";
require_once "GiveLuckTrait.php";

class HorseShoe extends Item
{
    use GiveLuckTrait;
}