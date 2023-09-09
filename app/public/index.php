<?php

require __DIR__ . '/../../vendor/autoload.php';

// If the property not exist the getter and setter will be call
// $invoice = new App\Invoice();

// $invoice->amount = 20;

// var_dump($invoice->process(1, 2, 3, 4));

// var_dump($invoice->__toString());

// var_dump($invoice);

// $classA = new \App\ClassA();
// $classb = new \App\ClassB();

// echo $classA->getName() . PHP_EOL;
// echo '<br />';
// echo $classb->getName() . PHP_EOL;
// echo '<br />';

// var_dump($classb->make());
// echo '<br />';
// var_dump($classA->make());

$coffeeMaker = new \App\CoffeMakers\CoffeeMaker();
$coffeeMaker->makeCoffee();

echo '<br />';

$latteMaker = new \App\CoffeMakers\LatteMaker;
$latteMaker->makeLatte();

echo '<br />';

$capuccinoMaker = new \App\CoffeMakers\cappuccinoMaker();
$capuccinoMaker->makeCappuccino();
