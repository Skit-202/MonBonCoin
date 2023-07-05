<?php

// faire un constructeur qui prend en paramètre le nom de l'animal
// faire une méthode qui affiche le nom de l'animal
// faire une méthode qui affiche le nombre de patte de l'animal
// changer le nombre de patte de l'animal
// changer le nom de l'animal

// instancier la classe
// afficher le nombre de patte de l'animal
// afficher le nom de l'animal

//  mettre les properties en private
// retester & ajuster le code

class Animal 
{
    private int $nbPatte = 4;
    private string $name;
    
    public function __construct($name)
    {
        // $this se referre à l'instance  de la classe 
    echo "La classe Animal a été instanciée <br>";

        $this->name = $name;
    }



    public function afficheNbPatte()
    {
        echo $this->nbPatte;
    }

    
    public function setName($name){
        $name = ucfirst($name);
        // sécurité
        if (is_string($name) && strlen($name) > 2 && strlen($name) < 20) {
            $this->name = $name;
        }else{
            echo "Le nom de l'animal doit être une chaine de caractère entre 2 et 20 caractères";
        }
    }


    public function getName()
    {
        return $this->name;
    }

}

// Instanciation de la classe Animal
// $animal1 est un objet de la classe Animal
$animal1 = new Animal("Girafe");
$animal2 = new Animal("Girafe");

echo "<br>";
var_dump($animal1);
echo "<br>";
var_dump($animal2);
echo "<br>";

echo $animal1->nbPatte . "<br>";

$animal1->afficheNbPatte();


echo "<br>";

echo $animal1->getName() . "<br>";

echo "<br>";

$animal1->setName("c");

var_dump($animal1);