<?php 
/* 
Les traits ont été introduits en PHP 5.4.0 pour résoudre le problème de l'héritage car une classe ne peut hériter que d'une seule classe.

un trait est un ensemble de méthodes qui peuvent être importées dans une classe. On peut importer plusieurs traits dans une classe.

pour déclarer un trait, on utilise le mot-clé trait.

pour importer un trait dans une classe, on utilise le mot-clé use.

on ne peut pas instancier un trait.
*/

trait Order
{
    public function validateOrder()
    {
        return 'Votre commande a été validée <br>';
    }
}

trait Payment
{
    public function proceedPayment()
    {
        return 'Votre paiement a été accepté <br>';
    }
}

// un trait peut importer un autre trait
trait OrderProcessing
{
    // on importe les traits Order et Payment
    use Order, Payment; 
}

//$order = new OrderProcessing();// Erreur fatale : on ne peut pas instancier un trait

class Member
{
    // on importe le trait OrderProcessing
    use OrderProcessing; 

    // OU use Order, Payment; 
}

$member = new Member();
echo $member->validateOrder(); 
echo $member->proceedPayment();

echo '<hr>';

/* 
Si dans une classe on importe un trait et que dans ce trait on a une méthode qui a le même nom qu'une méthode de la classe, alors la méthode de la classe écrase la méthode du trait.
*/

trait MemberStatus
{
    public function getMemberStatus()
    {
        return 'Vous êtes membre <br>';
    }
}

class User
{
    use MemberStatus;
    public function getMemberStatus()
    {
        return 'Vous êtes admin <br>';
    }
}

$user = new User();
echo $user->getMemberStatus(); 