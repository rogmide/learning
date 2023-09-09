<?php

namespace App\CoffeMakers;

trait LatteTrait
{
    public function makeLatte()
    {
        echo static::class . ' is making latte' . PHP_EOL;
    }
}
