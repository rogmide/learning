<?php

namespace App\CoffeMakers;

trait LatteTrait
{

    protected string $milkType = 'whole-milk';
    public static $foo;


    public function makeLatte()
    {
        echo static::class . ' is making latte with ' . $this->milkType  . PHP_EOL;
    }

    public static function Foox()
    {
        echo 'Foo Bar';
    }

    public function setMilkType($milkType)
    {
        $this->milkType = $milkType;
        return $this;
    }
}
