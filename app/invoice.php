<?php

namespace App;

class Invoice
{

    protected array $data = [];
    protected int $id = 1;
    protected string $accountNumber = '1234567890';

    public float $amount;
    public string $description;

    public function __construct($amount, $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }



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

    protected function process($amount, $description)
    {
        var_dump($amount, $description);
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this, $name)) {
            call_user_func_array([$this, $name], $arguments);
        }
    }

    public static function __callStatic($name, $arguments)
    {
        var_dump('static', $name, $arguments);
    }

    public function __toString()
    {
        return 'Hello';
    }

    public function __debugInfo()
    {
        return [
            'id' => $this->id,
            'accountNumber' => '****' . substr($this->accountNumber, -4),
        ];
    }
}
