<?php 
/* 
Une classe abstraite est une classe qui ne peut pas être instanciée. 

Elle sert de modèle pour d'autres classes qui en hériteront. 

Elle contient au moins une méthode abstraite. 

Une méthode abstraite est une méthode qui n'a pas de contenu. 

Elle est déclarée, mais n'est pas définie. Elle ne peut exister que dans une classe abstraite. 

Lorqu'on hérite d'une classe abstract, on doit obligatoirement redéfinir toutes les méthodes abstraites de la classe parente.

Pour déclarer une classe abstraite, il faut utiliser le mot clé abstract devant le mot clé class.
*/

// class abstraite
abstract class Joueur
{
    public function seConnecter()
    {
        return $this->etreMajeur();
    }

    abstract public function etreMajeur(); // méthode abstraite

    abstract public function pays(); // méthode abstraite
}

//$joueur1 = new Joueur; // erreur : on ne peut pas instancier une classe abstraite

class JoueurFr extends Joueur
{
    public function etreMajeur() // obligation de redéfinir la méthode abstraite
    {
        return 18;
    }

    public function pays()
    {
        return 'France';
    }
}

$joueur1 = new JoueurFr;
echo "L'age du joueur est " . $joueur1->etreMajeur() . " ans et il habite en " . $joueur1->pays() . '<br>';