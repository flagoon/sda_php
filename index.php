<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 24.03.18
 * Time: 22:10
 */
declare(strict_types=1);
require_once __DIR__ . "/vendor/autoload.php";

$toJsonParser = new \Flagoon\ArrayParser(new \Flagoon\JsonParser());
$toXmlParser = new \Flagoon\ArrayParser(new \Flagoon\XmlParser());
$toPlainParser = new \Flagoon\ArrayParser(new \Flagoon\PlainParser());

echo $toJsonParser->parse(["test"=>1]);