<?php

namespace App;

class Invoice
{

    protected array $data = [];

    public float $amount;

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return null;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        var_dump('isset');
        return array_key_exists($name, $this->data);
    }

    public function __unset($name)
    {
        var_dump('unset');
        unset($this->data[$name]);
    }
}
