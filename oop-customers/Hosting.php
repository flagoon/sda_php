<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 14.01.18
 * Time: 12:47
 */
declare(strict_types=1);

class Hosting extends AbstractProduct
{
    public function order(): void
    {
        echo "Hosting zamówiony." . PHP_EOL;
    }
}
