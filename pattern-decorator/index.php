<?php
declare(strict_types=1);

include ('autoload.php');

$home = new Flat();
$home = new Flowers($home);
$home = new Garden($home);

echo $home->getInfo();

echo PHP_EOL;

$home2 = new Hotel();
$home2 = new Garden($home2);


echo $home2->getInfo();