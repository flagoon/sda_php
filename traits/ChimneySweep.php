<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 21.01.18
 * Time: 10:28
 */
namespace Flagoon;

require_once "Profession.php";
require_once "GiveLuckTrait.php";

class ChimneySweep extends Profession
{
    use GiveLuckTrait;

    public function sweep()
    {
        return "Chimney is cleaned!";
    }
}
