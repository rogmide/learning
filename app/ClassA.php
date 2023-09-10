<?php

namespace App;

class ClassA
{
    protected static string $name = 'A';

    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function foo()
    {
        echo 'foo';
    }

    public function bar()
    {
        return new class($this->x, $this->y) extends ClassA
        {
            public function __construct($x, $y)
            {
                parent::__construct($x, $y);

                $this->foo();
            }
        };
    }

    public function getName()
    {
        // var_dump(get_class($this));
        return static::$name;
    }

    public static function make()
    {
        return new static(1, 2);
    }
}
