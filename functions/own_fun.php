<?php
declare(strict_types = 1);
system('clear');

/**
 * function to echo formatted family name
 * 
 * @param string $familyName nazwisko
 * @param int $year rok urodzenia
 */
function printFamilyName(string $familyName, int $year): void 
{
    echo "Name: {$familyName}. Born: {$year}", PHP_EOL;
}

printFamilyName("Kochanek", 1980);
printFamilyName("Kowalski", 2019);