<?php

interface Mouvement{
    const  TYPE = "mouvement";
    public function avancer():void;
    public function reculer();
    public function tourner();
    public function speedCheck():int;
}

interface Dance extends Mouvement{
    public function danser();
}


class Vehicule implements Mouvement{
    public string $name = "vehicule";

    public function avancer():void{
        echo "J'avance<br>";
    }
    public function reculer(){
        echo "Je recule<br>";
    }
    public function tourner(){
        echo "Je tourne<br>";
    }
    public function speedCheck():int{
        return 50;
    }
}

class Avion implements Mouvement{
    const TYPE = "avion"; 

    public string $name = "avion";
    public function avancer():void{
        echo "Je vole<br>";
    }
    public function reculer(){
        echo "Je vole en marche arrière<br>";
    }
    public function tourner(){
        echo "Je vole en tournant<br>";
    }
    public function speedCheck():int{
        return 1000;
    }
}

$vehicule = new Vehicule();

$vehicule->avancer();
$vehicule->reculer();
$vehicule->tourner();

echo "<br>";

// type hinting
function test(Mouvement $mouvement){
    $mouvement->avancer();
    $mouvement->reculer();
    $mouvement->tourner();
    echo $mouvement->speedCheck();
}

test($vehicule);

echo "<br>";

echo $vehicule::TYPE;

$avion = new Avion();
echo "<br>";
echo "<br>";
test($avion);
echo "<br>";
echo $avion::TYPE;


class Danseur implements Dance{
    public function avancer():void{
        echo "J'avance<br>";
    }
    public function reculer(){
        echo "Je recule<br>";
    }
    public function tourner(){
        echo "Je tourne<br>";
    }
    public function speedCheck():int{
        return 50;
    }
    public function danser(){
        echo "Je danse<br>";
    }
}

class Danseuse extends Danseur{
    public function danser(){
        echo "Je danse comme une danseuse<br>";
    }
}

// une interface est un contrat qui permet de définir des méthodes
// une interface ne peut pas être instanciée
// une interface ne peut contenir que des méthodes abstraites
// une interface ne peut contenir que des constantes 
//  une interface peut hériter d'une ou plusieurs interfaces
// une classe peut implémenter une ou plusieurs interfaces

