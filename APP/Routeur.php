<?php
namespace App;

use Controllers\AnnoncesController;
use Controllers\MainController;
use Controllers\UsersController;

class Routeur{
    public function app(){
        // On test le routeur
        // echo 'le routeur fonctionne';

        // Récupération de l'url
        $request = $_SERVER['REQUEST_URI'];
     // var_dump($request);
        // On supprime tout le debut ("/monBonCoin/public") de $request
        $nb = strlen(SITEBASE);
       // echo $nb;
        $request = substr($request, $nb);
       // echo '<br>';
       // echo $request;
        $request = explode("?", $request);
       // var_dump($request);
        $request = $request[0];
        //echo $request;

        // On définit les routes du projet
        switch ($request) {
            case '':
                // echo 'page d\'accueil affiche les deux dernières annonces';
                AnnoncesController::annonces('date DESC', 'LIMIT 2');
                break;
            case 'annonces':
                //echo 'toutes les annonces';
                AnnoncesController::annonces();
                break;
            case 'annonceDetail':
                //echo 'affichage d\'une annonce';
                $id = $_GET["id"];
                AnnoncesController::detail($id);
                break;
            case 'annonceAjout':
                echo 'ajout d\'une annonce';
                break;
            case 'annonceModif':
                echo "modification d'une annonce";
                break;
            case 'annonceSupp':
                echo "suppression d'une annonce";
                break;
            case 'annonceConfirm':
                echo 'confirmation de suppression';
                break;
            case 'panier':
                echo 'votre panier';
                break;
            case 'inscription':
                //echo 'inscription';
                break;
            case 'connexion':
                //echo 'connexion';
                UsersController::connexion();
                break;
            case 'deconnexion':
                // echo 'deconnexion';
                // supprimer les donnees user de $_SESSION
                unset($_SESSION["user"]);
                header("location: ". SITEBASE);
                break;
            case 'profil':
                echo 'profil';
                break;
            default:
                echo 'cette page n\'existe pas 404';
                break;
        }
    }
}