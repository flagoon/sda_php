<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 20.01.18
 * Time: 12:35
 */

class Rectangle
{
    protected $width;
    protected $height;

    /**
     * @return int area of rectangle
     */
    public function calcAreaOf(): int
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
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }
}
