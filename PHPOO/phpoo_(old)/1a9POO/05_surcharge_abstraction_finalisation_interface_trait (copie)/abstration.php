<?php

// la classe abstraite ne peut pas être instanciée
// elle sert de modèle aux classes qui en héritent
// elle peut contenir des méthodes abstraites qui seront obligatoirement redéfinies dans les classes qui héritent de la classe abstraite
// une classe abstraite peut contenir des méthodes normales
// seule une classe abstraite peut contenir des méthodes abstraites

// dans une class fille qui herite d'une méthode abstraite, on est obligé de redéfinir la méthode abstraite

abstract class Joueur
{
    protected $prenom;
    protected $age;
    
    public function __construct($prenom, $age)
    {
        $this->prenom = $prenom;
        $this->age = $age;
        $this->seConnecter();

    }

   abstract protected function etreMajeur(int $age):bool; // Une méthode abstraite n'a pas de contenu, elle est déclarée mais n'est pas définie. Elle est obligatoirement redéfinie dans les classes qui héritent de la classe abstraite

    public function seConnecter()
    {
        if ($this->etreMajeur($this->age)){
            echo "Vous êtes connecté";
        }
        else{
            echo "Vous n'êtes pas majeur";
        }
    }
}

class JoueurFr extends Joueur
{
   

    public function etreMajeur(int $age):bool
    {
        return $age >= 18;
    }
}

class JoueurUS extends Joueur
{
    public function __construct($prenom, $age)
    {
        parent::__construct($prenom, $age);
        echo "<br>Constructeur de la classe JoueurUS";
    }

    public function etreMajeur(int $age):bool
    {
        return $age >= 21;
    }
}


$joueur1 = new JoueurFr('Jean', 25);
echo '<pre>'; var_dump($joueur1); echo '</pre>';

$joueur2 = new JoueurUS('Jack', 17);
echo '<pre>'; var_dump($joueur2); echo '</pre>';
