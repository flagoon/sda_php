<?php

$countries = [
    'name' => 'Russia',
    'capitol' => 'Moscow', 
    'hasPresident' => true, 
    'prisons' => 4.4];

$serializeData = serialize($countries);

echo $serializeData, PHP_EOL;

$jsonData = json_encode($countries);

echo $jsonData, PHP_EOL;