<?php

// private est un mot clé qui permet de restreindre l'accès à une propriété ou une méthode
// Une propriété ou une méthode privée ne peut être appelée que depuis l'intérieur de la classe
// Une propriété ou une méthode privée ne peut pas être appelée depuis l'extérieur de la classe

// les setters permettent de contrôler les données affectées aux propriétés
// les getters permettent d' obtenir les données retournées par les propriétés
// getter et setters sont des conventions de nommage utilisées en POO

class Membre
{

    // Propriétés (visibilité: public, protected ou private)
    // on peut typer les propriétés depuis PHP 7
        private string $nom;
        private string $prenom;

    // constructeur
    // le constructeur est une méthode magique qui s'exécute automatiquement au moment de l'instanciation
    public function __construct(
        string $prenom, 
        string $nom
    ) {
        $this->setPrenom($prenom);
        $this->setNom($nom);
    }
   
   


    private function checkAndFormatName($arg) {
        $arg = strip_tags($arg); // On supprime les balises HTML
        $arg = trim($arg); // On supprime les espaces en début et en fin de chaîne
        // une regex est une expression régulière qui permet de vérifier le format d'une chaîne de caractères
        $arg = preg_replace('/[^a-zA-Z0-9]/', '', $arg); // On supprime les caractères spéciaux
        $arg = ucfirst(strtolower($arg)); // On met la première lettre en majuscule et le reste en minuscule    
        if(strlen($arg) < 2 || strlen($arg) > 20) {
            die("Erreur, la longueur du prénom doit être comprise entre 2 et 20 caractères inclus");
        };
        return $arg;
    }

    // les setters permettent de contrôler les données affectées aux propriétés
    public function setPrenom(string $arg) 
    { // On peut définir une valeur par défaut à un argument
       $this->prenom = $this->checkAndFormatName($arg);

    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setNom($arg) {
        $this->nom = $this->checkAndFormatName($arg);
    }

    public function getNom() {

        return $this->nom;
    }

    
   


}

$membre = new Membre( "Robert", "Redford"); // Instanciation de la classe Membre
// echo  $membre->pseudo = 'Lior'; // Erreur : Impossible d'accéder à un élément private depuis l'extérieur de la classe 
var_dump($membre); // On peut voir les propriétés private mais pas y accéder
// echo $membre->nom; // Erreur : Impossible d'accéder à un élément private depuis l'extérieur de la classe
// $membre->prenom = 'Chamla'; // Erreur : Impossible d'accéder à un élément private depuis l'extérieur de la classe

// $membre->setPrenom("Lior"); // Lior
$membre->setPrenom(" L i*-o   r lkjf feof qkj   \=  ' DELETE * from   "); // Lior
$membre->setNom('Chamla'); // Chamla
echo "<br>";
echo $membre->getPrenom() . '<br>'; // Lior
echo $membre->getNom() . '<br>'; // Chamla

// 

// $membre->prenom = 'Lior'; // Erreur : Impossible d'accéder à un élément private depuis l'extérieur de la classe
// $membre->nom = 'Chamla'; // Erreur : Impossible d'accéder à un élément private depuis l'extérieur de la classe

$membre2 = new Membre(nom:"     Federer *-", prenom:"   Rog   /er"); // Instanciation de la classe Membre

echo $membre2->getPrenom() . '<br>'; // Roger
echo $membre2->getNom() . '<br>'; // Federer


// résumé
// Une classe est un plan de construction qui regroupe des propriétés et des méthodes
// Un objet est une instance de la classe créé par le mot clé new
// L'instanciation est l'action qui consiste à créer un objet
// L'objet est le résultat de l'instanciation
// Une propriété est une variable appartenant à la classe
// Une méthode est une fonction appartenant à la classe
// Le mot clé $this représente l'objet en cours de manipulation
// Le constructeur est une méthode qui s'exécute automatiquement au moment de l'instanciation
// Le constructeur est utile pour initialiser des propriétés
// Le constructeur est facultatif
// Le constructeur est une méthode magique

// Les getters et les setters sont des méthodes permettant de contrôler l'accès aux propriétés
// Les getters permettent de récupérer la valeur d'une propriété
// Les setters permettent de modifier la valeur d'une propriété
// Les getters et les setters sont obligatoires si les propriétés sont en private
// Les getters et les setters sont facultatifs si les propriétés sont en public
// Les getters et les setters sont facultatifs si les propriétés sont en protected
// Les getters et les setters sont facultatifs si les propriétés sont en private et que l'on 
// utilise le constructeur pour initialiser les propriétés
// Les getters et les setters sont facultatifs si les propriétés sont en private et que l'on
//  utilise le constructeur pour initialiser les propriétés et que l'on utilise les méthodes
//  magiques __get() et __set() pour contrôler l'accès aux propriétés