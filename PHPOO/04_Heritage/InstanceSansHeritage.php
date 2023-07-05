<?php

class A
{
    public function direBonjour()
    {
       return "Bonjour tout le monde !";  
    }
   
}

class B 
{
    public $maVariable;

    public function __construct() {
        $this->maVariable = new A;
    }

    public function maMethode()
    {
        
    }
}