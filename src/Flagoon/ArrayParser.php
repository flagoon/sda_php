<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 24.03.18
 * Time: 22:11
 */
declare(strict_types=1);
namespace Flagoon;

class ArrayParser implements ParsableInterface
{
    private $parseType;

    public function __construct(ParsableInterface $parser)
    {
        $this->parseType = $parser;
    }

    public function parse(array $array):string
    {
        return $this->parseType->parse($array);
    }
}
