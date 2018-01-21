<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 21.01.18
 * Time: 10:27
 */
declare(strict_types=1);
namespace Flagoon;


use Monolog\Logger;
use Monolog\Handler\StreamHandler;


class Baker extends Profession
{
    public function bake(): string
    {

        $log = new Logger('baker');
        $log->pushHandler(new StreamHandler('loli.log', Logger::WARNING));

        $log->warning('Foo');
        $log->error('Bar');
        return "Bread";
    }
}
