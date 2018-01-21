<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 21.01.18
 * Time: 10:49
 */
declare(strict_types=1);
system("clear");

require_once "HorseShoe.php";
require_once "ChimneySweep.php";
require_once "Coin.php";
require_once "Baker.php";

$coin = new Flagoon\Coin();
echo $coin->bribe() . PHP_EOL;

$horseShoe = new Flagoon\HorseShoe();
$horseShoe->setLuckAmount(10);
$horseShoe->setLuckAmount(3);
echo "Your current horseshoe gives you: " . $horseShoe->getLuckAmount() . "% luck." . PHP_EOL;

$chimneySweeper = new Flagoon\ChimneySweep();
echo $chimneySweeper->sweep() . PHP_EOL;