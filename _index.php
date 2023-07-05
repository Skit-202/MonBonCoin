<?php

use App\Db;
use Models\AnnoncesModel;
use Models\CategoriesModel;
use Models\UsersModel;

require_once("autoloader.php");

//$categories = CategoriesModel::findAll();

//var_dump($categories);

//$categorie = CategoriesModel::findById([2]);
//var_dump($categorie);

//$categorieByName = CategoriesModel::findByName(array("maison"));

//var_dump($categorieByName);

// $newcat = CategoriesModel::create(["informatique"]);
// var_dump($newcat);

// $catUpdate = CategoriesModel::update(["materiel informatique", 4]);

// $catDel = CategoriesModel::delete([1]);

//$users = UsersModel::findAll();
//print_r($users);

//$user = UsersModel::findById([2]);
//var_dump($user);

/*$user = UsersModel::findByLogin(["admin@gmail.com"]);

var_dump($userLogin);

*/$pass = password_hash("1234", PASSWORD_BCRYPT);/*
$data = ["test@gmail.com", $pass, "prenomTest", "nomTest", "mon adresse", 75011, "paris","06666666"];
$newUser = UsersModel::create($data);*/

$data = ["test@gmail.com", $pass, "prenomTest", "nomTest", "rue de paris", 75011,"Marseille", "065548181", 4];

$userUpdate = UsersModel::update($data);
var_dump($data);

//UsersModel::Delete([5]);

echo "<br><br>";

$order = "price DESC";
$limit = "LIMIT 1";

//$annonces = AnnoncesModel::findAll();
//var_dump($annonces);

$annonce = AnnoncesModel::findById([1]);
var_dump($annonce);

echo "<br><br>";
$annonces = AnnoncesModel::findByUser([3]);

var_dump($annonces);

$order = "price ASC";
$annonceVehicule = AnnoncesModel::findByIdCat([3],$order);
var_dump($annonceVehicule);

/*$data = [3,19, "iphone XXI", "128Go vert", 600, "img/iphone.jpg"];
AnnoncesModel::create($data);*/

$data = [3,19, "iphone XXI", "128Go vert", 600, "img/iphone.jpg", 1];
AnnoncesModel::update($data);

AnnoncesModel::delete([5]);