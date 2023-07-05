<?php
echo "<h1 style='color:red;text-align:center'> 01_classe_objet_instance_visibilité </h1>";

class Panier {
    // La classe  représente le plan de construction . Dans une classe,on peut définir des propriétés ou attributs (variables) et des méthodes (fonctions). Pour déclarer une classe, on utilise le mot-clé class suivi du nom de la classe(la première lettre en Majuscule) et d'une paire d'accolades.

    // Déclaration des propriétés ou attributs (variables) 
    /* 
         - public : accessible partout . C'est-à-dire qu'on peut accéder à cette propriété à l'intérieur de la classe mais aussi à l'extérieur de la classe.

        - protected : accessible uniquement dans la classe où elle est déclarée et dans les classes héritières(On verra ça dans un prochain chapitre).

        - private : accessible uniquement dans la classe où elle est déclarée.

        Public, Protected, Private représentent les niveaux de visibilité des propriétés et des méthodes. On parle d'encapsulation.
    */
    public $nbProduit =7;
    protected $qtt=0;
    private $prix='10€';

    // Déclaration des méthodes (fonctions)

    /* 
    Une méthode est une fonction déclarée à l'intérieur d'une classe. 
    */

    private function affichageArticle(){
        //après 100 lignes de traitements
        return "Voici les articles";
    }

    public function ajouterArticle(){
        //après 100 lignes de traitements
        return "L'article a été ajouté";
    }

    protected function retirerArticle(){
        //après 100 lignes de traitements
        return "L'article a été retiré";
    }



}

// Création d'un objet (ou instance) de la classe Panier
/* 
Un objet est une instance d'une classe. C'est-à-dire qu'un objet est issu d'une classe.L'objet à les mêmes propriétés et méthodes que la classe. 

Pour créer un objet, on utilise le mot-clé new suivi du nom de la classe et d'une paire de parenthèses.

*/
$panier1 = new Panier;

//Affiche les propriétés de l'objet $panier1
var_dump($panier1);

// Pour voir les méthodes de la classe Panier :

var_dump(get_class_methods($panier1)); // get_class_methods() est une fonction prédéfinie qui permet de voir les méthodes publiques d'une classe.

// Pour voir les propriétés de la classe Panier :

$panier1->nbProduit = 5; // On affecte la valeur 5 à la propriété nbProduit de l'objet $panier1.

echo "<br>";

echo $panier1->nbProduit; // On affiche la valeur de la propriété nbProduit de l'objet $panier1.
echo "<br>";

//echo $panier1->qtt; //!\\ ERREUR : On ne peut pas accéder à la propriété qtt de l'objet $panier1 car elle est protected

//echo $panier1->prix; //!\\ ERREUR : On ne peut pas accéder à la propriété prix de l'objet $panier1 car elle est private

echo $panier1->ajouterArticle(); // On peut accéder à la méthode ajouterArticle() de l'objet $panier1 car elle est public

//echo $panier1->retirerArticle(); //!\\ ERREUR : On ne peut pas accéder à la méthode retirerArticle() de l'objet $panier1 car elle est protected

//echo $panier1->affichageArticle(); //!\\ ERREUR : On ne peut pas accéder à la méthode affichageArticle() de l'objet $panier1 car elle est private

echo "<br>";
$panierx = new Panier;
var_dump($panierx);

echo "<br>";
echo $panierx->nbProduit;
