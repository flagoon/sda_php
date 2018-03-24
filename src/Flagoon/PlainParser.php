<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 24.03.18
 * Time: 22:12
 */
declare(strict_types=1);
namespace Flagoon;
class PlainParser implements ParsableInterface
{

    public function parse(array $values):string
    {
        $plainText = '';
        foreach ($values as $key => $value) {
            $plainText .= $key . ": " . $value . ", ";
        }
        return $plainText;
    }
}