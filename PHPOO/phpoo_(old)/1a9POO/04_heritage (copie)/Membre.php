<?php

class Membre  
{
    public string  $id, $pseudo, $pswd;
    public function __construct(){
        $this->id = uniqid();
        echo "id: $this->id<br>";
    }
    public function inscription(){
        echo "Inscription<br>";
    }
    public function connexion(){
        echo "Connexion<br>";
        $this->sayHello();
    }
    private function sayHello(){
        echo "Hello<br>";
    }

    protected function sayGoodBye(){
        echo "GoodBye<br>";
    }
}

class Admin extends Membre
{
    // public function greet(){
    //     $this->sayHello();
    // }

    public function supprimerMembre(){
        echo "Supprimer Membre<br>";
        $this->sayGoodBye();
    }
    public function bannirMembre(){
        echo "Bannir Membre<br>";
        $this->sayGoodBye();
    }
}

$membre = new Membre();
$membre->inscription();
$membre->connexion();
 $admin = new Admin();
    $admin->inscription();
    $admin->connexion();
    $admin->supprimerMembre();
    $admin->bannirMembre();
 echo   $admin->id;

