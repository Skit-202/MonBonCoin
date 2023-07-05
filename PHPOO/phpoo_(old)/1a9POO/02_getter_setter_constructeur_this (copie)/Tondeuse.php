<?php


// instancier la classe
//  var_dump(instance de la classe);

// attripuer une valeur à une propriété
// $instance->propriété = valeur;

// accéder à une propriété
// $instance->propriété;

// accéder à une méthode
// $instance->methode();

// rendre les propriétés privées
// $instance->propriété = valeur; // ne fonctionne plus
// mettre des getters et des setters
// $instance->setPropriete(valeur);

// définir un constructeur
// $instance = new Classe($param1, $param2);



class Tondeuse{
    public int $hauteurCoupe;
    public int $largeurCoupe;


    public function faireDegrade(){
        echo "Je fais un dégradé";
    }

    // modifier la function tondre pour qu'elle affiche "Je tonds à une hauteur de $hauteurCoupe  mm
    // et une largeur de $largeurCoupe mm"
    public function tondre(){
        echo "Je tonds à une hauteur de $this->hauteurCoupe mm et une largeur de $this->largeurCoupe mm";
    }

}

$tondeuse = new Tondeuse();

echo "<pre>";
var_dump($tondeuse);
echo "</pre>";

// get_classe_methods permet d'afficher les méthodes d'une classe
echo "<pre>";
var_dump(get_class_methods($tondeuse));
echo "</pre>";

// get_class_vars permet d'afficher les propriétés d'une classe

$tondeuse->hauteurCoupe = 3;
$tondeuse->largeurCoupe = 50;

echo "<pre>";
var_dump($tondeuse);
echo "</pre>";


$tondeuse->hauteurCoupe = 30;
$tondeuse->largeurCoupe = 50;

echo "<pre>";
var_dump($tondeuse);
echo "</pre>";