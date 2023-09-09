<?php

require __DIR__ . '/../../vendor/autoload.php';

// If the property not exist the getter and setter will be call
$invoice = new App\Invoice();

$invoice->amount = 20;

// var_dump($invoice->process(1, 2, 3, 4));
echo '<br />';
// var_dump($invoice->__toString());

var_dump($invoice);
