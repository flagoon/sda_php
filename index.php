<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 24.03.18
 * Time: 22:10
 */
declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';

$arrayWithData = [
    "name" => "Pawel",
    "sname" => "Kochanek",
    "age" => 38,
    "city" => "Szczecin"
];

$toJsonParser = new \Flagoon\ArrayParser(new \Flagoon\JsonParser());
$toXmlParser = new \Flagoon\ArrayParser(new \Flagoon\XmlParser());
$toPlainParser = new \Flagoon\ArrayParser(new \Flagoon\PlainParser());

echo PHP_EOL;
echo $toXmlParser->parse($arrayWithData);
echo PHP_EOL;
echo $toJsonParser->parse($arrayWithData);
echo PHP_EOL;
echo PHP_EOL;
echo $toPlainParser->parse($arrayWithData);
echo PHP_EOL;
echo PHP_EOL;