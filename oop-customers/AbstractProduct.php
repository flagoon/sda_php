<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 14.01.18
 * Time: 12:46
 */
declare(strict_types=1);
system('clear');

abstract class AbstractProduct
{
    protected $status;
    protected $price;

    abstract public function order();
    abstract public function changeStatus(string $status);

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}
