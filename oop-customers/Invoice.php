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

    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }
}
