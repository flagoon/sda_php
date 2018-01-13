<?php
declare(strict_types=1);

require_once 'Customer.php';

$customer = new Customer();
$customer->setName('Marian');
echo $customer->getDiscount();
var_export($customer);