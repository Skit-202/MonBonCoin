<?php 
/* 
Une interface est une liste de méthodes qui n'ont pas de contenu.Elle permet de garantir que les classes qui l'implémentent possèdent les mêmes méthodes.

On ne peut pas instancier une interface.

Une interface ne peut pas contenir de propriétés.

Une classe peut implémenter plusieurs interfaces avec le mot-clé implements.

Une interface définit un contrat qui garantit que les classes qui l'implémentent possèdent les mêmes méthodes.Alors qu'une classe abstraite sert de modèle pour les classes filles et peut fournir une implémentation de base.

Pour créer une interface, on doit réfléchir en terme de comportement et non en terme d'entité. Par exemple, on peut créer une interface "Roulant" qui contient la méthode "rouler". Cette interface pourra être implémentée par les classes "Voiture", "Vélo", "Moto", etc.

Pour créer une interface, on utilise le mot-clé interface.
*/

interface Roulant // Création d'une interface
{
    public function rouler(); // Déclaration d'une méthode abstraite
}

//$roulant = new Roulant(); // Erreur : on ne peut pas instancier une interface

// les classes qui implémentent une interface doivent implémenter toutes les méthodes abstraites de l'interface
class Voiture implements Roulant
{
   public function rouler() 
   {
         echo 'Je roule en voiture';
   }
}

// une interface peut hériter d'une autre interface
interface Camion extends Roulant 
{
    public function transporter();
}

// Ici on implémente l'interface Camion qui hérite de l'interface Roulant, donc on doit implémenter les méthodes abstraites de ces deux interfaces (rouler et transporter)
class semiRemorque implements Camion
{
    public function rouler() 
    {
        echo 'Je roule en semi-remorque';
    }
    
    public function transporter() 
    {
        echo 'Je transporte des marchandises';
    }
}

// Implémenter plusieurs interfaces

interface premierInterface
{
    public function methode1();
}

interface deuxiemeInterface
{
    public function methode2();
}

// Je peux implémenter plusieurs interfaces avec le mot-clé implements à conditions que les méthodes abstraites des interfaces n'aient pas le même nom.
class maClasse implements premierInterface, deuxiemeInterface
{
    public function methode1()
    {
        echo 'Je suis la méthode 1';
    }
    
    public function methode2()
    {
        echo 'Je suis la méthode 2';
    }
}
/// On peut aussi hériter d'interfaces
interface troisiemeInterface extends premierInterface, deuxiemeInterface 
{
    public function methode3();
}

class secondeClass implements troisiemeInterface
{
    public function methode1()
    {
        echo 'Je suis la méthode 1';
    }
    
    public function methode2()
    {
        echo 'Je suis la méthode 2';
    }
    
    public function methode3()
    {
        echo 'Je suis la méthode 3';
    }
}