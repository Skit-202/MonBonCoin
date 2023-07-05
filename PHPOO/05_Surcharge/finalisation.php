<?php
final class Recette
{
    public function ingredients() 
    {
        echo "Ingredients de ma recette";

    }
}

$recett1 = new Recette();
$recett1->ingredients();

class cuisson
{
    final public function tempsDeCuisson() : Returntype {
        return "Temps de cuisson : 30 minutes <br>";
    }
}

class CuissonFour extends Cuisson
{

}

$four = new CuissonFour();
echo $four->tempsDeCuisson();