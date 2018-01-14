<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 14.01.18
 * Time: 13:06
 */
declare(strict_types=1);


require_once 'AbstractProduct.php';
require_once 'Hosting.php';
require_once 'Domain.php';

$hosting = new Hosting();
$hosting->order();
var_export($hosting);