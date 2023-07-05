<?php

/* 
En programmation orientée objet, l'héritage est l'une des notions fondamentales. Elle permet de créer une classe qui hérite des propriétés et des méthodes d'une autre classe, en plus de ses propres propriétés et méthodes.

Lorsqu'une classe hérite d'une autre classe, elle hérite de toutes les méthodes publiques et protégées de cette classe. 

L'avantage de l'héritage est que vous pouvez réutiliser le code d'une classe parente.

Pour hériter d'une classe, on utilise le mot-clé extends.

Exemple : Une classe Membre et une classe Admin qui hérite de la classe Membre. Admin extends Membre.
*/

class membre
{
    public $id;
    public $pseudo;
    public $email;
    public $signature;

    public function __construct() 
    {
        echo "je suis le constructeur de la classe Membre ";
    }

    public function login()
    {
        return "Le membre se connecte !<br/>";
    }

    public function signin()
    {
        return "Le membre s'inscrit !<br/>";
    }
}

class admin extends membre
{
    public function accesBackOffice() 
    {
        return "Accès au BackOffice car je suis Admin du site !<br>";    
    }
}

$admin = new admin;

echo $admin->login();
echo $admin->accesBackOffice();