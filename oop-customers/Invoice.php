<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 14.01.18
 * Time: 15:07
 */

class Invoice
{
    protected $invoiceId;
    protected $sellDate;
    protected $customer;

    public function setInvoiceID(int $id): void
    {
        $this->invoiceId = $id;
    }

    public function setDate(string $date):void
    {
        $this->sellDate = $date;
    }

    /**
     * Function that checks if NIP, name and last name is set and if so, it create $customer variable in Invoice.
     * @param $customer Customer
     */
    public function setCustomer(Customer $customer): void
    {
        try {
            $customer->getNIP();
            $customer->getName();
            $customer->getSurname();
        } catch (Error $error) {
            exit($error);
        }
        $this->customer = $customer;
    }
}
