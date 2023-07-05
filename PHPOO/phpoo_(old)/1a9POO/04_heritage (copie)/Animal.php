<?php

class Animal  
{
    public string  $id, $nom, $espece;
    
    public function __construct(){
        $this->id = uniqid();
        echo "id: $this->id<br>";
    }
    protected function manger(){
        echo "Manger";
    }
    protected function dormir(){
        echo "Dormir<br>";
    }
    
}

class Chien extends Animal
{
    public function aboyer(){
        echo "Aboyer<br>";
    }
    public function manger(){
        echo "Manger comme un chien<br>";
    }
}

class Chat extends Animal
{
    public function miauler(){
        echo "Miauler<br>";
    }
    public function miaouger(){
        // echo "Manger comme un chat<br>";
        echo  "miaou ",   $this->manger(), " comme un chat<br>";
    }
}

$chat = new Chat();
$chat->miaouger();
