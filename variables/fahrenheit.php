<?php
/**
 * variable to hold celsius from user
 * 
 * @var float
 */
$celsiusPrompt = readline('Podaj temperature w celcjuszach: ');

if (is_float($celsiusPrompt)) {
    $result = $celsiusPrompt * 1.8 + 32;
} else {
    $result = 'Podaj liczbę.';
}
echo $result, PHP_EOL;