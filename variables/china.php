<?php

$china = ['Małpa','Kogut','Pies','Świnia','Szczur','Bawół','Tygrys','Królik','Smok','Wąż','Koń','Owca'];

$rok = readline("Podaj rok urodzenia: ");

$znak = $rok % 12;

echo "Jesteś spod znaku {$china[$znak]}", PHP_EOL;

switch ($znak) {
    case 0:
        echo "{$china[$znak]}";
        break;
    case 1:
        echo "{$china[$znak]}";
        break;   
    case 2:
        echo "{$china[$znak]}";
        break;
    case 3:
        echo "{$china[$znak]}";
        break; 
    case 4:
        echo "{$china[$znak]}";
        break;
    case 5:
        echo "{$china[$znak]}";
        break;  
    case 6:
        echo "{$china[$znak]}";
        break;
    case 7:
        echo "{$china[$znak]}";
        break; 
    case 8:
        echo "{$china[$znak]}";
        break;   
    case 9:
        echo "{$china[$znak]}";
        break;
    case 10:
        echo "{$china[$znak]}";
        break; 
    case 11:
        echo "{$china[$znak]}";
        break;
    case 12:
        echo "{$china[$znak]}";
        break; 
    default:
        echo "Coś poszło nie tak!";
        break;
}

echo PHP_EOL;