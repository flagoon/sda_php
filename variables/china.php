<?php

$china = ['Małpa','Kogut','Pies','Świnia','Szczur','Bawół','Tygrys','Królik','Smok','Wąż','Koń','Owca'];

$rok = readline("Podaj rok urodzenia: ");

$znak = $rok % 12;

echo "Jesteś spod znaku {$china[$znak]}", PHP_EOL;