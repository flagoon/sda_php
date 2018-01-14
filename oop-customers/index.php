<?php
declare(strict_types=1);
system("clear");

require_once 'CustomerInterface.php';
require_once 'Customer.php';
require_once 'GentleCustomer.php';
require_once 'ChaoticCustomer.php';
require_once 'CustomerFactory.php';
require_once 'Invoice.php';

// create new customer, Zenek.
$zenek = CustomerFactory::chooseCustomer(CustomerFactory::GENTLE, 1980);
$zenek->setName('Zenek');
$zenek->setSurname('Wiaderko');
$zenek->setNIP('12-32-512-112');
var_export($zenek->askForInvoice(1));