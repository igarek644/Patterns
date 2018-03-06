<?php
declare(strict_types = 1);

include "autoload.php";

$toGetHome = new GetHome(new Bus());
$toGetHome->GetHome();

$toGetHome->setStrategy(new Taxi());
$toGetHome->GetHome();

$toGetHome->setStrategy(new Car());
$toGetHome->GetHome();