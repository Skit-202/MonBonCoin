<?php
namespace Controllers;

use Models\UsersModel;



class UsersController extends MainController{
    public static function connexion(){
        self::render("users/connexion",[
            "title" => "Connexion"
        ]);
    }
}