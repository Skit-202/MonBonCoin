<?php

class A
{
    public function __construct()
    {
        echo "constructeur de A<br>";
    }

    public function sayHello()
    {
        return "Hello<br>";
    }
    
}

// ----------------------------------------------------------------

class B 
{
    public  $a;

    public function __construct()
    {
        $this->a = new A();
    }
}

$b = new B();

$b->a->sayHello();

// ----------------------------------------------------------------
