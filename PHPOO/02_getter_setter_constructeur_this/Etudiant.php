<?php
/* 
"Imaginez que vous êtes en charge de créer une classe `Etudiant` dans un système de gestion académique. Cette classe doit avoir les propriétés private : nom, prénom, âge, classe et moyenne.

Votre tâche consiste à mettre en place la classe `Etudiant` avec ces propriétés et à implémenter une méthode `sePresenter()` qui affiche les informations de l'étudiant. 

Vous devez inclure des mécanismes de validation appropriés pour éviter les erreurs lors de la définition des valeurs des propriétés. Par exemple, l'âge doit être un entier entre 18 et 30 ans, la moyenne doit être un nombre entre 0 et 20, etc

Si une erreur se produit, vous devez afficher un message d'erreur spécifique pour informer l'utilisateur de la nature de l'erreur.

Vous devez ensuite créer deux instances d'étudiants en utilisant cette classe et les faire se présenter en appelant la méthode `sePresenter()` pour chacun d'eux.

Veillez à réaliser cet exercice en utilisant uniquement les fonctionnalités de la classe `Etudiant`, sans modifier le code extérieur à la classe(passer par le constructeur)

*/

class Etudiant
{
    private string $nom;
    private string $prenom;
    private int $age;
    private string $classe;
    private float $moyenne;


    public function __construct($n,$p,$a,$c,$m = 1)
    {
        $this->setNom($n);
        $this->setPrenom($p);
        $this->setAge($a);
        $this->setClasse($c);
        $this->setMoyenne($m);
    }

    // SETTERS

    public function setNom($n){
        if(!empty($n) && is_string($n)){
            $this->nom = $n;
        }else{
            echo "Le nom est obligatoire et doit être une chaine de caractères";
        }
    }

    public function setPrenom($p){
        if(!empty($p) && is_string($p)){
            $this->prenom = $p;
        }else{
            echo "Le prénom est obligatoire et doit être une chaine de caractères";
        }
    }

    public function setAge($a)
    {
        if(!empty($a) && is_int($a) && $a >= 18 && $a <= 30){
            $this->age = $a;
        }else{
            echo "L'âge est obligatoire et doit être un entier entre 18 et 30 ans";
        }
    }

    public function setClasse($c){
        if(!empty($c) && is_string($c)){
            $this->classe = $c;
        }else{
            echo "La classe est obligatoire et doit être une chaine de caractères";
        }
    }

    public function setMoyenne($m){
        if(!empty($m) && is_numeric($m) && $m >= 0 && $m <= 20){
            $this->moyenne = $m;
        }else{
            echo "La moyenne est obligatoire et doit être un nombre entre 0 et 20";
        }
    }   


    // GETTERS

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getAge(){
        return $this->age;
    }

    public function getClasse(){
        return $this->classe;
    }

    public function getMoyenne(){
        return $this->moyenne;
    }


    public function sePresenter(){
        if(!empty($this->nom) && !empty($this->prenom) && !empty($this->age) && !empty($this->classe) && !empty($this->moyenne)){
            echo "Bonjour, je m'appelle ".$this->prenom." ".$this->nom.", j'ai ".$this->age." ans, je suis en ".$this->classe." et ma moyenne est de ".$this->moyenne.".";
        }else{
            echo "Veuillez remplir tous les champs";
        }
    }
}

$etudiant1 = new Etudiant("Dupont","Jean",25,"B2",12);
$etudiant1->sePresenter();

echo "<br>";
$etudiant2 = new Etudiant("DURAND","Marie",20,"B1",18);
$etudiant2->sePresenter();

echo "<br>";

$etudiant3 = new Etudiant("LEROY","Pierre",18,"B1");
$etudiant3->sePresenter();