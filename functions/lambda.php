<?php
declare(strict_types=1);
system('clear');

$sayHello = function(string $name): string
{
    return "Hello, {$name}!" . PHP_EOL;
};

echo $sayHello('Diana');