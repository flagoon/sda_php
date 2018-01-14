<?php
declare(strict_types=1);

class Customer
{
    /**
     * Status of the customer, can be basic or premium.
     *
     * @var string
     */
    public $status = 'basic';

    /**
     * Age of the customer
     *
     * @var integer
     */
    public $age;

    protected $name;

    public function __construct(int $age=0)
    {
        $this->age = $age;
    }

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
