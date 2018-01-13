<?php
declare(strict_types=1);

require_once 'Customer.php';
require_once 'ChaoticCustomer.php';

$customer = new Customer();
$customer->setName('Marian');
echo "Customer: " . $customer->getName() . PHP_EOL;
echo "Discount: " . $customer->getDiscount() . PHP_EOL;
var_export($customer);

echo PHP_EOL . "<+++++++++++++++++++++++>" . PHP_EOL;

$rudolf = new ChaoticCustomer();
$rudolf->setName('Marian');
echo "Customer: " . $rudolf->getName() . PHP_EOL;
echo "Discount: " . $rudolf->getDiscount() . PHP_EOL;
var_export($rudolf);