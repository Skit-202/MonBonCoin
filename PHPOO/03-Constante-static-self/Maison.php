<?php

class Maison
{
	private static $nbPiece = 7; 
	public static $espaceTerrain = '500m²'; 
	public $couleur = 'blanc'; 
	const HAUTEUR = '10m';
	private $nbPorte = 10;

	public static function getNbPiece()
	{
		return self::$nbPiece;
	}
	
	public function getNbPorte()
	{
		return $this->nbPorte;
	}
}
// TODO : En utilisant la class Maison, répondez aux questions suivantes :

// 1- Quel est le nombre de pièces de la maison?
echo "Le nombre de pièces de la maison est : " . Maison::getNbPiece() . "<br>";

//2- Quelle est la superficie du terrain ?
echo "La superficie du terrain est : " . Maison::$espaceTerrain . "<br>";

//3- Quelle est la hauteur de la maison
echo "La hauteur de la maison est : " . Maison::HAUTEUR . "<br>";

//4- Créer un objet Maison(instancier la classe)
$maison1 = new Maison();

// 5- Quelle est la couleur de cette maison que vous aviez instancier ?
echo "La couleur de la maison est : " . $maison1->couleur . "<br>";

// 6- Quelle est le nombre de porte cette maison que vous aviez instancier ?
echo "Le nombre de porte de la maison est : " . $maison1->getNbPorte() . "<br>";

/* 
NOTE: 

$objet->element   => Accéder à un élément d'un objet à l'extérieur de la classe
$this->element    => Accéder à un élément d'un objet à l'intérieur de la classe

class::element    => Accéder à un élément statique à l'extérieur de la classe
self::element     => Accéder à un élément statique à l'intérieur de la classe


Question à se poser :
    - Est-ce que l'élément est statique ?
        Si oui(Self:: ou class::)
            -Est-ce que je suis à l'intérieur de la classe ?
                Si oui(self::)
                Si non(class::)
        Si non($this-> ou $objet->)
            -Est-ce que je suis à l'intérieur de la classe ?
                Si oui($this->)
                Si non($objet->)
    

*/
