<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 13.01.18
 * Time: 14:47
 */
declare(strict_types=1);

class CustomerFactory
{
    public static function chooseCustomer(string $customerType): Customer
    {
        if ($customerType === 'gentle') {
            return new GentleCustomer();
        } elseif ($customerType === 'chaotic') {
            return new ChaoticCustomer();
        } else return new Customer();
    }
}