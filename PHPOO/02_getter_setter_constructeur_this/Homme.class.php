<?php 
echo "<h1 style='color:red;text-align:center'> 2-Getter-Setter-Constructeur-This </h1>";

// TODO 1: Créer une classe Homme avec les propriétés private nom, prenom, age et sexe.

class Homme {
    private string $nom;
    private string $prenom;
    private int $age;
    private string $sexe;

    // Un constructeur est une méthode qui s'éxécute automatiquement lors de l'instanciation. Pour déclarer un constructeur, il faut utiliser le mot clé __construct.

    public function __construct()
    {
        echo 'Je suis le constructeur de la classe Homme';
    }

    /* 
    GETTER / SETTER

    Le setter ou mutateur est une méthode qui permet de modifier la valeur d'une propriété.Sa synhtaxe est la suivante : setNomDeLaPropriete($valeur)

    */

    public function setNom(string $n) {
        $n = trim($n); // trim() permet de supprimer les espaces en début et fin de chaîne
        $n = ucfirst($n); // ucfirst() permet de mettre la première lettre en majuscule
        
        if(strlen($n) > 2 && strlen($n) < 30) {
            $this->nom = $n;
        } else {
            echo 'Le nom doit contenir entre 2 et 30 caractères';
        }
    }

    // Le getter ou accesseur est une méthode qui permet de récupérer la valeur d'une propriété. Sa syntaxe est la suivante : getNomDeLaPropriete() . Il ne prend aucun paramètre et retourne la valeur de la propriété.
    public function getNom() {
        return $this->nom;
    }

    // TODO 2: Faire le getter et le setter sur l'age . L'age doit être compris entre 18 et 65 ans.Si l'age n'est pas compris entre 18 et 65 ans, afficher un message d'erreur.

    public function setAge(int $a){
        $a = trim($a); 


    if ($a >= 18 && $a < 65){
        $this->age = $a;
    } else {
            echo "Vous n'entrez pas dans la tranche d'age" ;
        }
    }

    public function getAge(){
        return $this->age;
    }

}

    // This représente l'objet en cours d'utilisation. Il permet d'accéder aux propriétés et aux méthodes de l'objet en cours d'utilisation. C'est-à-dire que l'objet à l'intérieur de la classe est représenté par $this.

$homme1 = new Homme;

$homme1->setNom('toto');

$homme1->setAge(25);

echo  "<br> l'objet homme1 a pour nom : " . $homme1->getNom() . " et pour age : " . $homme1->getAge() . " ans.";

