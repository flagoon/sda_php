<?php 

$fruits = ['Apple', 'Orange', 'Plum'];
$box = [];

for ($i = 0; $i < 2; ++$i) {
    foreach ($fruits as $fruit) {
        $boxMax =2;

        while ($boxMax) {
            if ($fruit === 'Orange') {
                continue 2; //continue pomija iteracje pętli dwa w zwyż
            }
            $box[] = $fruit;
            --$boxMax;
        }
    }
}

var_export($box);