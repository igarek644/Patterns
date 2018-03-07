<?php
include 'autoload.php';

$invoker = new Invoker();

$dog = new Dog();

$commandEat = new EatCommand($dog);
$commandRun = new RunCommand($dog);
$commandSleep = new SleepCommand($dog);

$invoker->setCommand($commandSleep, 'Sleep');
$invoker->setCommand($commandEat, 'Eat');
$invoker->setCommand($commandRun, 'Run');

$invoker->executeCommand('Run');
$invoker->executeCommand('Eat');
$invoker->executeCommand('Sleep');