<?php

// $big = [
//     'small' => [
//         'key' => 'value'
//     ],
// ];

// var_export($big);
// echo PHP_EOL, $big['small']['key'], PHP_EOL;

// $big['small']['key'] = 'new_value';

// echo PHP_EOL, $big['small']['key'], PHP_EOL;

// unset($big['small']['key']);

// echo PHP_EOL, $big['small']['key'], PHP_EOL;

// var_export($big);

// var_dump($big);

$cars = [
    'volvo' => [
        'xc90', 'xc60', 'v60',
    ],
    'skoda' => [
        'felicia' => [
            'hatchback', 'kombi', 'pickup',
        ],
    ],
];
echo PHP_EOL;
var_export(isset($cars['mercedes']));
echo PHP_EOL;