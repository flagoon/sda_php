<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 24.03.18
 * Time: 22:12
 */
declare(strict_types=1);
namespace Flagoon;
class XmlParser implements ParsableInterface
{

    public function parse(array $values):string
    {
        $xml = '';
        foreach ($values as $key => $value) {
            $xml .= "<{$key}>$value</$key>" . PHP_EOL;
        }
        return $xml;
    }
}