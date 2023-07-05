<?php
// point d'entrée

use App\Routeur;

$config = file_get_contents("../App/config.json");
$config = json_decode($config);

define("SITEBASE", $config->baseSite);

//echo SITEBASE;

define("ROOT", dirname(__DIR__));
//echo ROOT;

require_once(ROOT . DIRECTORY_SEPARATOR . "autoloader.php");

echo "bienvenue sur le site";
echo "<hr>";

$routeur = new Routeur;
$routeur->app();