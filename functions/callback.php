<?php
declare(strict_types = 1);
system('clear');

$names = ['Zenek', 'Bożena', "Kriss"];

$sayHello = array_map(function(string $name): string {
    return "Hello {$name}!";
}, $names);

var_export($sayHello);