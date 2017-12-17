<?php
declare(strict_types = 1);
system('clear');

/**
 * function to echo formatted family name
 * 
 * @param string $familyName nazwisko
 */
function printFamilyName(string $familyName): void 
{
    echo "Name: $familyName", PHP_EOL;
}

printFamilyName("Kochanek");
printFamilyName("Kowalski");