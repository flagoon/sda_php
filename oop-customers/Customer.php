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

    /**
     * Function to show name of the customer.
     * @return string
     * @throws Error when customer name is not set.
     */
    public function getName(): string
    {
        if (!(isset($this->name))) {
            throw new Error("\e[31mThere is no name for the invoice!\e[0m");
        } else {
            return $this->name;
        }
    }

    /**
     * Function to show last name of the customer.
     * @return string
     * @throws Error when customer last name is not set.
     */
    public function getSurname(): string
    {
        if (!(isset($this->surname))) {
            throw new Error("\e[31mThere is no lastname for the invoice!\e[0m");
        } else {
            return $this->surname;
        }
    }

    /**
     * Function to show NIP of the customer.
     * @return string
     * @throws Error when customer NIP is not set.
     */
    public function getNIP(): string
    {
        if (!(isset($this->nip))) {
            throw new Error("\e[31mThere is not NIP!\e[0m");
        } else {
            return $this->nip;
        }
    }

    public function askForDiscount(): void
    {
        echo $this->name . ": Can you tell me my discount, please?" . PHP_EOL;
    }

    public static function getClassName(): void
    {
        echo "My name is " . get_called_class() . PHP_EOL;
    }

    /**
     * Function is creating invoice object.
     * @param $invoiceId integer. Number of integer.
     * @return Invoice
     */
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
