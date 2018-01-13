<?php
declare(strict_types=1);

class Customer
{
    private $name;

    public function getDiscount(): int
    {
        return 20;
    }

    public function setName(string $name):void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function askForDiscount(): string
    {
        return "Can you tell me my discount, please?";
    }
}