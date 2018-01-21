<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 21.01.18
 * Time: 10:30
 */
declare(strict_types=1);

trait GiveLuckTrait
{
    private $luckAmount;

    public function increaseLuckAmount(int $luckAmount): void
    {
        $this->luckAmount += $luckAmount;
    }

    /**
     * @return int
     */
    public function getLuckAmount(): int
    {
        return $this->luckAmount;
    }
}
