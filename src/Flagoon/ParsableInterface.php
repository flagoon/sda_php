<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 24.03.18
 * Time: 22:12
 */
declare(strict_types=1);
namespace Flagoon;

interface ParsableInterface
{
    public function parse(array $array): string;
}
