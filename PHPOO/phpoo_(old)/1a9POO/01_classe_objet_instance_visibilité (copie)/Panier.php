<?php


// on peut définir des propriétés et des méthodes dans une classe
// Une classe est un plan de construction qui regroupe des propriétés et des méthodes
// Une propriété est une variable appartenant à la classe
// Une méthode est une fonction appartenant à la classe
// L'objet peut accéder à ses propriétés et ses méthodes
// L'objet est isolé des autres objet
// l'objet est le résultat de l'instanciation
// L'instanciation est l'action qui consiste à créer un objet
// Un objet est une instance de la classe créé par le mot clé new
// on peut appeler une méthode ou une propriété d'une classe avec l'opérateur ->

class Panier
{

    // Propriétés (visibilité: public, protected ou private)
    public $nbProduit; // Propriété (par défaut public)
    
    // Méthodes (visibilité: public, protected ou private)
    public function ajouterProduit() {
        // Traiter l'ajout du produit
        return 'Le produit a été ajouté';
    }
    
    public function retirerProduit() {
        // Traiter le retrait du produit
        return 'Le produit a été retiré';
    }
    
    public function affichagePanier() {
        // Traiter l'affichage du panier
        return 'Voici les produits dans le panier';
    }
}
// new Panier(); // Instanciation de la classe Panier
$panier = new Panier(); // Instanciation de la classe Panier


echo '<pre>'; var_dump($panier); echo '</pre>'; // Affichage du contenu de l'objet $panier
echo '<pre>'; var_dump(get_class_methods($panier)); echo '</pre>'; // Affichage des méthodes de l'objet $panier
echo '<pre>'; var_dump(get_class_vars('Panier')); echo '</pre>'; // Affichage des propriétés de la classe Panier

$panier2 = new Panier(); // Instanciation de la classe Panier
echo '<pre>'; var_dump($panier2); echo '</pre>'; // Affichage du contenu de l'objet $panier2
echo '<pre>'; var_dump(get_class_methods($panier2)); echo '</pre>'; // Affichage des méthodes de l'objet $panier2
 echo '<pre>'; var_dump(get_class_vars('Panier')); echo '</pre>'; // Affichage des propriétés de la classe Panier

 
 $panier->nbProduit = 5; // Affectation de la valeur 5 à la propriété $nbProduit de l'objet $panier 
    echo '<pre>'; var_dump($panier); echo '</pre>'; // Affichage du contenu de l'objet $panier
    echo '<pre>'; var_dump($panier2); echo '</pre>'; // Affichage du contenu de l'objet $panier2

echo  $panier->ajouterProduit(); // Appel de la méthode ajouterProduit() de l'objet $panier    

// resumé
// Une classe est un plan de construction qui regroupe des propriétés et des méthodes
// Un objet est une instance de la classe créé par le mot clé new
// L'instanciation est l'action qui consiste à créer un objet
// L'objet est le résultat de l'instanciation
// Une propriété est une variable appartenant à la classe
// Une méthode est une fonction appartenant à la classe
// L'objet peut accéder à ses propriétés et ses méthodes
// L'objet est isolé des autres objet
// 
// Niveau de visibilité des propriétés et des méthodes
// public : accessible de partout
// protected : accessible depuis la classe où elle est déclarée et les classes héritières
// private : accessible uniquement depuis la classe où elle est déclarée
//