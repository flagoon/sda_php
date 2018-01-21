<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 21.01.18
 * Time: 10:26
 */
declare(strict_types=1);
namespace Flagoon;

class Coin extends Item
{
    public function bribe() : string
    {
        Return "Guard is bribed!";
    }
}