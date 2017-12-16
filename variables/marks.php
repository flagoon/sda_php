<?php

system('clear');

$uczniowie = [
    "Zuzia" => [
        "j. polski" => 5,
        "biologia" => 5,
        "j. angielski" => 5,
        "historia" => 5,
    ],
    "Alicja" => [
        "j. polski" => 3,
        "biologia" => 2,
        "j. angielski" => 4,
        "historia" => 5,
    ],
    "Bobik" => [
        "j. polski" => 5,
        "biologia" => 2,
        "j. angielski" => 2,
        "historia" => 4,
    ],
];

$arraySize = count($uczniowie);

foreach ($uczniowie as $uczen => $oceny) {
    echo "Uczen: \033[33m$uczen\033[0m", PHP_EOL;
    echo "\033[40m*************************\033[0m", PHP_EOL;
    
    foreach ($oceny as $przedmiot => $ocena) {
        echo " $przedmiot $ocena";
        $spaceVar = 22 - mb_strlen($przedmiot) - mb_strlen($ocena);
        
        for ($i = 0; $i < $spaceVar; $i++) {
            echo " ";
        }
        echo "\033[40m*\033[0m", PHP_EOL;
    }

    echo PHP_EOL;
}
