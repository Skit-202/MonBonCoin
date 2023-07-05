<?php

/* 
Un pattern de conception (design pattern) est une solution à un problème de conception récurrent.Il s'agit d'une bonne pratique de programmation permettant de résoudre un problème récurrent.

Le pattern singleton est un pattern de création. Il permet de créer une classe qui ne peut être instanciée qu'une seule fois. C'est une classe qui se crée elle-même et qui ne peut être instanciée qu'une seule fois.

C'est pratique pour gérer la connexion à la BDD par exemple. On ne peut pas avoir plusieurs connexions à la BDD en même temps. On peut donc créer une classe qui gère la connexion à la BDD et qui ne peut être instanciée qu'une seule fois.
*/

class Singleton 
{
    private static $instance = null; // On stocke l'instance dans un attribut privé et statique

    private function __construct() {} // On empêche l'instanciation directe de la classe

    private function __clone() {} // On empêche le clonage de la classe

    public static function getInstance() 
    {
        // On vérifie si l'instance n'a pas déjà été créée. Si c'est le cas, on la retourne directement.
        // Sinon, on crée l'instance et on stocke l'objet créé dans l'attribut $instance.
        if(is_null(self::$instance)) { 
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}

// $singleton = new Singleton; // Erreur : on ne peut pas instancier un singleton

$singleton1 = Singleton::getInstance();
var_dump($singleton1);

$singleton2 = Singleton::getInstance();
var_dump($singleton2);