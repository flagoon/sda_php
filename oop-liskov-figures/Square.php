<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 20.01.18
 * Time: 12:36
 */

class Square extends Rectangle
{
    public function setHeight(int $height): void
    {
        $this->height = $height;
        $this->width = $height;
    }

    public function setWidth(int $width): void
    {
        $this->height = $width;
        $this->width = $width;
    }
}
