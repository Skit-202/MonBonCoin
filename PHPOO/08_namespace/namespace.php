<?php 

/* 
Un namespace est un moyen de ranger les classes, les fonctions et les constantes dans des espaces de noms virtuels.

Un namespace permet d'éviter les conflits de noms entre les classes, les fonctions et les constantes.

Pour déclarer un namespace, on utilise le mot clé namespace suivi du nom du namespace.

*/

// déclaration d'un namespace nommé A\myspace
namespace A\myspace;

class PDO 
{
    public function show()
    {
        echo "Je suis la classe PDO du namespace A\myspace <br>";
    }
}
$name = new PDO;
$name->show();

echo __NAMESPACE__ . "<br>"; // Affiche le namespace courant

$pdo = new \PDO("mysql:host=localhost;dbname=cours-poo", "root", "");
var_dump($pdo); // Affiche l'objet PDO de PHP
