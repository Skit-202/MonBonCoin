<?php
/* 
La surcharge ou overriding permet de redéfinir une méthode héritée de la classe parente dans la classe enfant.C'est-à-dire que dans la classe enfant, on peut modifier le comportement d'une méthode héritée de la classe parente.

Pour surcharger une méthode, il faut que la méthode soit déclarée dans la classe parente et dans la classe enfant.


Sa syntaxe est la suivante : 
    parent::nomDeLaMethode();
*/

class A 
{
    public function calcul()
    {
        // après tout le code de la méthode
        return 101;
    }
}

class B extends A 
{
    public function calcul()
    {
       $nb = parent::calcul(); // on appelle la méthode calcul() de la classe parente

       if($nb <= 100)
       {
           return $nb * 5;
       }
       else 
       {
           return $nb * 2;
       }
    }


    public function calcul2()
    {
        $nb = parent::calcul(); // on appelle la méthode calcul() de la classe parente sans la surcharger
    }
}

$b = new B;
echo $b->calcul();