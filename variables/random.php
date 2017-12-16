<?php

system('clear');

for ($i = 0; $i <= 10; $i++) {
    
    do {
        $rand = rand(0, 1000);
    } while ($rand % 2);

    echo "Random: ", $rand, PHP_EOL;
}