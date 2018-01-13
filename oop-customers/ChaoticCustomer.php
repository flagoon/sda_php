<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 13.01.18
 * Time: 09:52
 */
declare(strict_types=1);

class ChaoticCustomer extends Customer
{
    public function getDiscount(): int
    {
        return 5;
    }

    public function askForDiscount(): void
    {
        echo $this->name . ": Can I ask the manager for a discount?" . PHP_EOL;
    }
}