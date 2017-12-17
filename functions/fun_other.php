<?php

$countries = ['Russia', 'Italy', true, 4.4];

$serializeData = serialize($countries);

echo $serializeData, PHP_EOL;

