<?php

namespace App\CoffeMakers;

class AllInOneCoffeeMaker extends CoffeeMaker
{
    use LatteTrait;
    use CappuccinoTrait;

    // If we have methos with the same name
    // we can use AS to rename the method with a new name
    // and dont give any conflict
    // use CappuccinoTrait {
    //     CappuccinoTrait::makeCappuccino as makeOriginalCapp;
    // }
}
