<?php
declare(strict_types = 1);
system('clear');

$names = ['Zenek', 'Bożena', "Kriss"];
$greetings = "Hi";
$hellos = array_map(
    function(string $name) use ($greetings): string {
    return "{$greetings}, {$name}!";
}, $names);

var_export($hellos);