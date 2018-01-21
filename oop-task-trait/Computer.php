<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 21.01.18
 * Time: 12:11
 */
declare(strict_types=1);

class Computer
{
    private $isTurnOn = false;

    public function switch()
    {
        $this->isTurnOn = !$this->isTurnOn;
    }
}
