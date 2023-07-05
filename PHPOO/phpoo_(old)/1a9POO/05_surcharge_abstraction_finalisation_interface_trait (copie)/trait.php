<?php

trait TPanier
{
    public $nbProduit = 1;

    public function affichageProduits()
    {
        return "Affichage des produits du panier<br>";
    }
}

// ----------------------------------------------------------------

trait TMembre
{
    public function affichageMembres()
    {
        return "Affichage des membres<br>";
    }
}

// ----------------------------------------------------------------

class Site 
{
    use TPanier, TMembre;

}


// ----------------------------------------------------------------
trait TMembre2
{
    use TPanier;

    public function affichageMembres()
    {
        return "Affichage des membres<br>";
    }
}

// ----------------------------------------------------------------
class Site2 
{
    use TMembre2;

}

$site = new Site();
echo $site->affichageMembres();
echo $site->affichageProduits();

$site2 = new Site2();
echo $site2->affichageMembres();
echo $site2->affichageProduits();


// ----------------------------------------------------------------
// ----------------------------------------------------------------
// un trait ne peut pas hériter d'une classe
// un trait peut hériter d'un ou plusieurs traits
// une classe peut user d'un ou plusieurs traits
// une classe peut hériter d'une seule classe