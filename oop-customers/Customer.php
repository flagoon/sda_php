<?php
declare(strict_types=1);

class Customer
{
    protected $name;

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

    public function askForDiscount(): void
    {
        echo $this->name . ": Can you tell me my discount, please?" . PHP_EOL;
    }

    public static function getClassName(): void
    {
        echo "My name is " . get_called_class() . PHP_EOL;
    }
}
