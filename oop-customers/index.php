<?php
declare(strict_types=1);

require_once 'Customer.php';
require_once 'ChaoticCustomer.php';

$customer = new ChaoticCustomer();
$customer->setName('Marian');
echo $customer->getDiscount() . PHP_EOL;
var_export($customer);