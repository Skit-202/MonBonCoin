<?php 

echo "Bonjour";
//die(); // alias de exit() : die() permet d'arrêter l'exécution du script

$fruit = [
    'pomme',
    'poire',
    'banane',
    'fraise'
];

var_dump($fruit);
// Cast ou transformation de type permet de changer le type d'une variable en un autre

$fruitObj = (object) $fruit; // $fruitObj est un objet de type stdClass
var_dump($fruitObj);

// je crée un objet vide de type stdClass qui est la classe mère en PHP
$monObjet = new stdClass(); 
$monObjet->nom = "Toto";
var_dump($monObjet);


// get_declared_classes() permet de lister toutes les classes prédéfinies en PHP
echo "<pre>";
print_r(get_declared_classes());
echo "</pre>";



echo "<hr>";
//get_declared_interfaces() permet de lister toutes les interfaces prédéfinies en PHP

echo "<pre>";
print_r(get_declared_interfaces());
echo "</pre>";