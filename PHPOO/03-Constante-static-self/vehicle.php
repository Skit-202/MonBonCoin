<?php 

echo "<h1 style='color:red;text-align:center'> 3-Constante-Static-Self </h1>";


class Vehicule 
{
    /* 
        Une propriété static est une propriété de classe, elle est partagée par toutes les instances de la classe.
        Une propriété static est définie avec le mot-clé static.
        Elle appartient à la classe, et non à l'objet.Donc toute modification de la propriété static sera visible par toutes les instances de la classe.

        Toutes les constantes sont implicitement static.
    */
    private static $marque = "BMW";
    private static $modele = "Serie 1";
    private $couleur = "Gris Nardo";
    const ANNEE = 2023;

    
    public function getMarque()
    {
        return self::$marque; // self:: permet d'accéder à une propriété static de la classe à l'intérieur de la classe.
    }

    public function setMarque($mark)
    {
        self::$marque = $mark;
    }

    public static function getModele()
    {
        return self::$modele;
    }

    public static function setModele($mod)
    {
        self::$modele = $mod;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($color)
    {
        $this->couleur = $color;
    }
}

$v1 = new Vehicule;

var_dump($v1);

echo "Le véhicule 1 est de marque  " . $v1->getMarque() . " ,de modèle  " . Vehicule::getModele() . "  de couleur  " . $v1->getCouleur() . " et de l'année  " . Vehicule::ANNEE . ".<br><hr>";

$v2 = new Vehicule;
$v2->setMarque("Mercedes");
echo "Le véhicule 2 est de marque  " . $v2->getMarque() . " ,de modèle  " . Vehicule::getModele() . "  de couleur  " . $v2->getCouleur() . " et de l'année  " . Vehicule::ANNEE . ".<br><hr>";

echo "Le véhicule 1 est de marque  " . $v1->getMarque() . " ,de modèle  " . Vehicule::getModele() . "  de couleur  " . $v1->getCouleur() . " et de l'année  " . Vehicule::ANNEE . ".<br><hr>";

$v3 = new Vehicule;
$v3->setCouleur("Noir");
echo "Le véhicule 3 est de marque  " . $v3->getMarque() . " ,de modèle  " . Vehicule::getModele() . "  de couleur  " . $v3->getCouleur() . " et de l'année  " . Vehicule::ANNEE . ".<br><hr>";

echo "Le véhicule 1 est de marque  " . $v1->getMarque() . " ,de modèle  " . Vehicule::getModele() . "  de couleur  " . $v1->getCouleur() . " et de l'année  " . Vehicule::ANNEE . ".<br><hr>";