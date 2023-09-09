<?php

namespace App\CoffeMakers;

trait CappuccinoTrait
{
    public function makeCappuccino()
    {
        echo static::class . ' is making cappuccino' . PHP_EOL;
    }
}
