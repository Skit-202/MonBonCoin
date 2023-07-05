<?php

class A
{
    public function __construct()
    {
        echo "constructeur de A<br>";
    }

    public function calcul()
    {
        return 10;
    }
    
}   

// ----------------------------------------------------------------

class B extends A
{
    public function __construct()
    {
        echo "constructeur de B<br>";
    }

    public function calcul()
    {
        $nb = parent::calcul();
        echo $nb * 2;

    }
}

// ----------------------------------------------------------------
$b = new B();
$b->calcul();

