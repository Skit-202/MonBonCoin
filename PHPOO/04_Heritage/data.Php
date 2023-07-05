<?php

class personne
{
    protected string $nom;
    protected string $prenom;

    public function __construct(string $nom, string $prenom) 
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}

class client extends personne
{
    private string $adresse;

    public function __construct(string $nom, string $prenom,string $adres) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adres;
    }

    public function getCoordonnee() 
    {
        $this->adresse = $adresse;
    }
}