<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 21.01.18
 * Time: 10:28
 */

class ChimneySweep extends Profession
{
    use GiveLuckTrait;

    private function sweep()
    {
        return "Chimney is cleaned!";
    }
}
