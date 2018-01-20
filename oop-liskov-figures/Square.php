<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 20.01.18
 * Time: 12:36
 */

class Square implements AreaCalculableInterface
{

    private $length;

    public function setLength(int $length): void
    {
        $this->length = $length;
    }

    public function calcArea(): float
    {
        return $this->length * $this->length;
    }
}
