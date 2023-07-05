<?php

class Societe 
{
    public $adresse;
    public $ville;
    public $cp;

    public function __construct()
    {
        $this->adresse = '1 rue du Paradis';
        $this->ville = 'Paris';
        $this->cp = '75001';
    }


    // !!! __toString() est une méthode magique qui s'exécute automatiquement lorsqu'on essaie d'afficher un objet avec echo ou print. Elle doit absolument renvoyer une chaine de caractères.
    public function __toString()
    {
        return '<strong>' . $this->adresse . '</strong><br>' . $this->cp . ' ' . $this->ville . '<br>';
    }

    public function __invoke($x)
    {
        echo 'Appel de la méthode magique __invoke : ' . $x . '<br>';
    }

    public function __call($nom, $arguments)
    {
        echo 'Tentative d\'appel de la méthode ' . $nom . ' qui n\'existe pas. Les arguments étaient : ' . implode('-', $arguments) . '<br>';
    }

    public static function __callStatic($nom, $arguments)
    {
        echo 'Tentative d\'appel de la méthode statique ' . $nom . ' qui n\'existe pas. Les arguments étaient : ' . implode('-', $arguments) . '<br>';
    }

    public function __get($nom)
    {
        echo 'Tentative d\'accès à la propriété ' . $nom . ' qui n\'existe pas.<br>';
    }

    // !!! This method is called when writing data to inaccessible  properties.
    public function __set($nom, $valeur)
    {
        echo 'Tentative d\'affectation à la propriété ' . $nom . ' de la valeur ' . $valeur . ' qui n\'existe pas.<br>';
    }

    public function __isset($nom)
    {
        echo 'Tentative d\'accès à la propriété ' . $nom . ' qui n\'existe pas.<br>';
    }

    public function __unset($nom)
    {
        echo 'Tentative de suppression de la propriété ' . $nom . ' qui n\'existe pas.<br>';
    }

    public function __sleep()
    {
        echo 'Appel de la méthode magique __sleep()<br>';
        return ['adresse', 'ville'];
    }

    public function __wakeup()
    {
        echo 'Appel de la méthode magique __wakeup()<br>';
    }

    public function __clone()
    {
    echo 'Appel
        de la méthode magique __clone()<br>';
    }

    public function __destruct()
    {
        echo '<br> Appel de la méthode magique __destruct()<br>';
    }

    public function __debugInfo()
    {
        echo 'Appel de la méthode magique __debugInfo()<br>';
    }

    public function __serialize(): array
    {
        echo 'Appel de la méthode magique __serialize()<br>';
        return ['adresse', 'ville'];
    }
   
   
}

$societe = new Societe;

$societe->vil = "Lyon"; // Tentative d'affectation à la propriété vil de la valeur Lyon qui n'existe pas.
echo $societe->vil; // Tentative d'accès à la propriété vil qui n'existe pas.
echo var_dump($societe);

echo $societe; // Appel de la méthode magique __toString

$societe(10); // Appel de la méthode magique __invoke : 10
$societe->methodeInexistante(1, 2, 3); // Tentative d'appel de la méthode methodeInexistante qui n'existe pas. Les arguments étaient : 1-2-3
Societe::methodeInexistante(1, 2, 3); // Tentative d'appel de la méthode statique methodeInexistante qui n'existe pas. Les arguments étaient : 1-2-3

$societe->adresse = 'Nouvelle adresse'; // Tentative d'affectation à la propriété adresse de la valeur Nouvelle adresse qui n'existe pas.
echo $societe->adresse; // Tentative d'accès à la propriété adresse qui n'existe pas.
echo "<br>";

// unset($societe->adresse); // Tentative de suppression de la propriété adresse qui n'existe pas.

// __sleep() et __wakeup()
// __sleep() est appelée juste avant la sérialisation, elle doit retourner un tableau contenant le nom des propriétés à sérialiser. __wakeup() est appelée juste après la désérialisation.

// __clone()
// __clone() est appelée lorsqu'on clone un objet avec le mot clé clone. Elle permet par exemple de remettre des propriétés à zéro ou de faire des copies de propriétés qui sont des objets.

// __destruct()
// __destruct() est appelée lorsqu'un objet est détruit, c'est-à-dire lorsqu'il n'y a plus aucune référence sur cet objet. Elle permet par exemple de fermer une connexion à la base de données ou un fichier.

// unset($societe); // Appel de la méthode magique __destruct()

// Appel de la méthode magique __debugInfo()
// var_dump($societe);

// echo "$societe"; // Appel de la méthode magique __toString()

echo(serialize($societe)); // Appel de la méthode magique __serialize()


// Les methodes magiques sont des methodes qui s'executent automatiquement dans des cas 
// precis. Elles sont precedees de 2 underscores. Elles ne peuvent pas etre appelees
//  directement. Elles sont appelees par PHP.