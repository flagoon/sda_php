<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 14.01.18
 * Time: 12:48
 */
declare(strict_types=1);

class Domain extends AbstractProduct
{
    /**
     * Order function.
     */
    public function order(): void
    {
        echo "Domain is ordered." . PHP_EOL;
    }

    /**
     * This function change status for product. For domain it can't be done.
     *
     * @param $status
     */
    public function changeStatus(string $status)
    {
        echo "Domain status can't be changed.";
    }
}
