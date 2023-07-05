<?php 
/* 
__clone() est une méthode magique qui est appelée automatiquement lorsqu'on essaie de cloner un objet
*/

class Personne 
{
    public string $nom;
    public string $prenom;

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function show(){
        echo "Je suis $this->prenom $this->nom<br>";
    }

    public function __clone()
    {
        $this->prenom = 'Clone de ' . $this->prenom . '<br>';
    }
}

$personne1 = new Personne('Doe', 'John');
$personne1->show();

$personne2 = clone $personne1;
$personne2->show();
