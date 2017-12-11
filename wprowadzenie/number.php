<?php
$x = -2;

if (!is_int($x)) {
    echo "Podaj liczbę całkowitą.", PHP_EOL;
} else {
    $type = ($x >= 0 && $x < 10) ? 'Cyfra ' : 'Liczba';
    
    $result = ($x % 2 == 0) ? 'parzysta' : 'nieparzysta';
    
    echo "$type $x jest " . $result . ".", PHP_EOL;
}

