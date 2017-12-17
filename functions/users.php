<?php
declare(strict_types = 1);
system('clear');

$users = [
    [
        "name" => "Arkadiusz",
        "birthYear" => 1977,
        "hobby" => "stamps",
        "sport" => "basketball",
        "occupation" => "programmer",
        "status" => "hidden",
    ],
    [
        "name" => "Nadia",
        "birthYear" => 1988,
        "hobby" => "sport",
        "sport" => "volleyball",
        "occupation" => "singer",
        "status" => "activated",
    ],
    [
        "name" => "Klara",
        "birthYear" => 1988,
        "hobby" => "sport",
        "sport" => "volleyball",
        "occupation" => "programmer",
        "status" => "disabled",
    ],
    [
        "name" => "Juliusz",
        "birthYear" => 1984,
        "hobby" => "sport",
        "sport" => "sqush",
        "occupation" => "programmer",
        "status" => "activated",
    ],
 ];

    $newUsers = [];

    foreach($users as $user) {
        if ($user["status"] === "hidden") {
            continue;
        } 
        if ($user["status"] === "disabled") {
            continue;
        }
        if ($user["birthYear"] < 1987) {
            continue;
        }

        $newUsers[] = $user;
    }
    //  $filtredArray = array_filter($users, function($strings) {
    //     foreach($strings as $string) {
    //         if (($strings["status"] === "disabled" 
    //         || $strings["status"] === "disabled") 
    //         && $string["birthYear"] < 1987) {
    //             echo gettype($strings);
    //             return $strings;
    //         };
    //     } 
    // });

    var_export($newUsers);