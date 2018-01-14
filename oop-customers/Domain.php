<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 14.01.18
 * Time: 12:48
 */
declare(strict_types=1);

class Domain extends AbstractProduct
{
    public function order()
    {
        echo "Domain zamówione." . PHP_EOL;
    }
}
