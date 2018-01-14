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
    const GENTLE = 'gentle';
    const CHAOTIC = 'chaotic';

    public static function chooseCustomer(string $customerType, $year = 2000): Customer
    {
        $age = date('Y') - $year;
        if ($customerType === self::GENTLE) {
            return new GentleCustomer($age);
        } elseif ($customerType === self::CHAOTIC) {
            return new ChaoticCustomer($age);
        } else {
            return new Customer($age);
        }
    }
}
