<?php

namespace App\CoffeMakers;

class CoffeeMaker
{
    public function makeCoffee()
    {
        echo static::class . ' is making coffee' . PHP_EOL;
    }
}
