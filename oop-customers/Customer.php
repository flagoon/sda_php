<?php
declare(strict_types=1);
system('clear');

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
    protected $surname;
    protected $nip;

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

    public function setSurname(string $surname):void
    {
        $this->surname = $surname;
    }

    public function setNIP(string $nip):void
    {
        $this->nip = $nip;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }
    
    public function getNIP(): string
    {
        return $this->nip;
    }

    public function askForDiscount(): void
    {
        echo $this->name . ": Can you tell me my discount, please?" . PHP_EOL;
    }

    public static function getClassName(): void
    {
        echo "My name is " . get_called_class() . PHP_EOL;
    }

    public function askForInvoice(int $invoiceId): Invoice
    {
        $invoice = new Invoice();
        $invoice->setInvoiceID($invoiceId);

        $helpDate = new DateTime;
        $invoice->setDate($helpDate->format('Y-m-d'));
        $invoice->setCustomer($this);
        return $invoice;
    }
}
