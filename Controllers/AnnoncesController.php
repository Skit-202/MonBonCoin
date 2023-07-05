<?php
namespace Controllers;

use Models\AnnoncesModel;

class AnnoncesController extends MainController{
    public static function annonces(){
        $annonces = AnnoncesModel::findAll();
       // var_dump($annonces);
       self::render('annonces/annonces',['titre'=>'toutes les annonces', 'annonces' => $annonces]);
    }
}