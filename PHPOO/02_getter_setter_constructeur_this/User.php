<?php

// TODO : Créez une classe User ayant la propriété private $prenom un constructeur.essayer de renseigner l'attribut prenom sans changer l'extérieur de la classe.

class User 
{
 private string $prenom;

 public function __construct($p)
{
    $this->setPrenom($p);
}

 public function setPrenom(string $p)
 {
     $this->prenom = $p;
 }

public function getPrenom()
{
    return $this->prenom;
}

}

$user = new User("Luc");

echo "Bonjour " . $user->getPrenom() . " !";
