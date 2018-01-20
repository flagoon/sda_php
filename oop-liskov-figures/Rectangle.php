<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 20.01.18
 * Time: 12:35
 */

class Rectangle implements AreaCalculableInterface
{
    protected $width;
    protected $height;

    /**
     * @return int area of rectangle
     */
    public function calcArea(): float
    {
        return $this->width * $this->height;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }
}
