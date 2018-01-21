<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 21.01.18
 * Time: 10:30
 */
declare(strict_types=1);
namespace Flagoon;

trait GiveLuckTrait
{
    private $luckAmount;

    public function setLuckAmount(int $luckAmount): void
    {
        $this->luckAmount = $luckAmount;
    }

    /**
     * @return int
     */
    public function getLuckAmount(): int
    {
        return $this->luckAmount;
    }
}
