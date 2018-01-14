<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 14.01.18
 * Time: 13:42
 */

interface CustomerInterface
{
    public static function askForRenew();
    public function askForInvoice(int $invoiceId);
}
