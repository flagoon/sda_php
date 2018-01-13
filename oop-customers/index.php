<?php
declare(strict_types=1);
system("clear");

require_once 'Customer.php';
require_once 'ChaoticCustomer.php';
require_once 'GentleCustomer.php';

$customer = new Customer();
$customer->setName('Marian');
echo "Customer: " . $customer->getName() . PHP_EOL;
echo "Discount: " . $customer->getDiscount() . PHP_EOL;
echo $customer->askForDiscount() . PHP_EOL;
var_export($customer);

echo PHP_EOL . "<+++++++++++++++++++++++>" . PHP_EOL;

$rudolf = new ChaoticCustomer();
$rudolf->setName('Stefan');
echo "\e[31mCustomer: " . $rudolf->getName() . PHP_EOL;
echo "Discount: " . $rudolf->getDiscount() . PHP_EOL;
echo $rudolf->askForDiscount() . "\e[0m" . PHP_EOL;
var_export($rudolf);

echo PHP_EOL . "<+++++++++++++++++++++++>" . PHP_EOL;

$zenek = new GentleCustomer();
$zenek->setName('Zenek');
echo "\e[32mCustomer: " . $zenek->getName() . PHP_EOL;
echo "Discount: " . $zenek->getDiscount() . PHP_EOL;
echo $zenek->askForDiscount() . "\e[0m" . PHP_EOL;
var_export($zenek);