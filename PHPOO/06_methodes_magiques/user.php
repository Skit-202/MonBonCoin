<?php 
/* 
Voici un article qui parle des méthodes magiques en PHP : https://www.php.net/manual/fr/language.oop5.magic.php

https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/oriente-objet-methode-magique/

*/

class User 
{
    public string $name;
    public string $email;
    public string $address;

    // __construct() est une méthode magique qui est appelée automatiquement lors de l'instanciation d'un objet
    public function __construct()
    {
    }

    // __set() est une méthode magique qui est appelée automatiquement lorsqu'on essaie d'affecter une valeur à une propriété qui n'existe pas ou qui n'est pas accessible

    public function __set($name, $value)
    {
      echo "La propriété $name n'existe pas ou n'est pas accessible alors on l'a créée et on lui a affecté la valeur $value<br>";
    }

    // __get() est une méthode magique qui est appelée automatiquement lorsqu'on essaie d'accéder à une propriété qui n'existe pas ou qui n'est pas accessible

    public function __get($name)
    {
      echo "La propriété $name n'existe pas ou n'est pas accessible<br>";
    }


    /* 
    Voici d'autres méthodes magiques :
    __isset() est une méthode magique qui est appelée automatiquement lorsqu'on essaie de savoir si une propriété existe ou non

    __unset() est une méthode magique qui est appelée automatiquement lorsqu'on essaie de supprimer une propriété

    __call() est une méthode magique qui est appelée automatiquement lorsqu'on essaie d'appeler une méthode qui n'existe pas ou qui n'est pas accessible

    __callStatic() est une méthode magique qui est appelée automatiquement lorsqu'on essaie d'appeler une méthode statique qui n'existe pas ou qui n'est pas accessible
    
    __toString() est une méthode magique qui est appelée automatiquement lorsqu'on essaie d'afficher un objet avec echo ou print
    
    */
}

$user1 = new User();
$user1->name = 'John Doe';
$user1->email = 'john@gmai.com';
$user1->addres = '123 Main Street';

var_dump($user1);

echo $user1->names;