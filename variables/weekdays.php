<?php

$weekdays = [
    'pl' => [
        'monday' => 'poniedziałek',
        'theusday' => 'wtorek',
        'wednesday' => 'środa',
        'thursday' => 'czwartek',
        'friday' => 'piątek',
        'saturday' => 'sobota',
        'sunday' => 'niedziela',
    ],
    'de' => [
        'monday' => 'Montag',
        'theusday' => 'Dienstag',
        'wednesday' => 'Mittwoch',
        'thursday' => 'Donnerstag',
        'friday' => 'Freitag',
        'saturday' => 'Samstag',
        'sunday' => 'Sonntag',
    ],
];

$checkWeekday = 'monday';

$result = isset($weekdays['pl'][$checkWeekday]) ? 'Istnieje!' : 'Nie istnieje!';
$result2 = isset($weekdays['de'][$checkWeekday]) ? 'Seht gut!' : 'Sehd schlecht!';
$result3 = isset($weekdays['it'][$checkWeekday]) ? 'Burdello BumBum!' : 'Sorry, we can\'t find translation';

echo $result, PHP_EOL;
echo $result2, PHP_EOL;
echo $result3, PHP_EOL;