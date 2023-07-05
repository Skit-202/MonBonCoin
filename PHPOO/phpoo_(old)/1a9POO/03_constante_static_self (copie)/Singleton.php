<?php

class Singleton
{
    private static $instance = null;

    private function __construct(
        private string $name,
    ) {}  // interdit l'instanciation de l'objet
     
    private function __clone() {} // interdit le clonage de l'objet
   

    public static function getInstance($name)
    {
        if (is_null(self::$instance)) {
            self::$instance = new Singleton($name);
        }
        return self::$instance;
    }

    public function getName()
    {
        return $this->name;
    }
}

$singleton = Singleton::getInstance('Lior');

echo $singleton->getName(); // Lior
echo "<br>";

$singleton2 = Singleton::getInstance('Roger');

echo $singleton2->getName(); // Lior
echo "<br>";


$singleton3 = Singleton::getInstance('Jony');

echo $singleton3->getName(); // Lior
echo "<br>";


echo "<br>";
