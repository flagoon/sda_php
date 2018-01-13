<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 13.01.18
 * Time: 10:48
 */

class GentleCustomer extends Customer
{
    public function getDiscount(): int
    {
        return 30;
    }

    public function askForDiscount(): void
    {
        echo $this->name . ": Hey Criss, what's my discount, bitch?";
    }
}