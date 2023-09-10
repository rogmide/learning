<?php

use App\ClassA;
use App\CoffeMakers\LatteMaker;
use App\Invoice;

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

// $coffeeMaker = new \App\CoffeMakers\CoffeeMaker();
// $coffeeMaker->makeCoffee();

// echo '<br />';

// $latteMaker = new \App\CoffeMakers\LatteMaker;
// $latteMaker->makeLatte();

// echo '<br />';

// $capuccinoMaker = new \App\CoffeMakers\cappuccinoMaker();
// $capuccinoMaker->makeCappuccino();


// echo '<br />';

// $allinonecoffeemaker = new \App\CoffeMakers\AllInOneCoffeeMaker();
// $allinonecoffeemaker->makeCoffee();
// $allinonecoffeemaker->makeLatte();
// $allinonecoffeemaker->makeCappuccino();

// echo '<br />';


// $latteMaker->Foo();

// \App\CoffeMakers\LatteMaker::$foo = 'foo';
// \App\CoffeMakers\AllInOneCoffeeMaker::$foo = 'bar';

// echo \App\CoffeMakers\LatteMaker::$foo . ' ' . \App\CoffeMakers\AllInOneCoffeeMaker::$foo;


// $obj = new class(1, 2, 3)
// {
//     public function __construct($x, $y, $z)
//     {
//     }
// };

// var_dump($obj);

// $obj = new ClassA(1, 2);

// var_dump($obj->bar());

$invoice1 = new Invoice(25, 'My Invoice 1');
$invoice2 = new Invoice(100, 'My Invoice 2');

echo 'invoice1 == invoice2';
var_dump($invoice1 == $invoice2);

echo 'invoice1 === invoice2';
var_dump($invoice1 === $invoice2);
