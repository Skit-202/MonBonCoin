<?php
namespace Controllers;

use Models\UsersModel;



class UsersController extends MainController{

    public static function connexion(){
        // pour gere les erreurs on utilise une variable $errMsg initialiser à vide
        $errMsg = "";
        var_dump($_POST);
        // traitement du formulaire
        if (!empty($_POST["login"]) && !empty($_POST["password"])) {
        $user = UsersModel::findByLogin([$_POST["login"]]);
        if (!$user) {
            $errMsg = "Login ou mot de pass incorrect";
        }else{
             $pass = $_POST["password"];
            // var_dump($user);
             if(password_verify($pass, $user["password"])){
                // $errMsg = "ok";
                $_SESSION["user"] = [
                    "role" => $user["role"],
                    "id" => $user["id_user"],
                    "login" => $user["login"],
                    "firstName" => $user["firstName"],

                ];
                header("location: ". SITEBASE);
             }
           //$user = UsersModel::findByLogin([$_POST["login"]]);
         //$errMsg = !$user ? "Login ou mot de passe incorrect" : "";
         
        }
    }elseif(!empty($_POST)){
        $errMsg = "Merci de remplir tous les champs";
        
    }

        self::render("users/connexion",[
            "title" => "Connexion",
            "errMsg" => $errMsg
        ]);
    }

    public static function inscription(){
        
        self::render("user/inscription",[
            "title" => "Inscription"
        ]);
    }
}