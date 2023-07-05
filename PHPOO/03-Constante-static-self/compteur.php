<?php

class compteur{
    public static $nbInstanceClass = 0;
    public $nbInstanceObjet = 0;

    public function __construct() {
        self::$nbInstanceClass++;
        $this->nbInstanceObjet++;
    }
}

$compteur1 = new compteur();
$compteur2 = new compteur();
$compteur3 = new compteur();
$compteur4 = new compteur();
$compteur5 = new compteur();

echo Compteur::$nbInstanceClass;
echo Compteur::$nbInstanceObjet;