<?php 

function monAutoload($classe) {
    require_once $classe . '.class.php';
}

spl_autoload_register('monAutoload');

//spl_autoload_register() est une fonction prédéfinie de PHP qui permet d'enregistrer une fonction qui sera appelée à chaque fois qu'une classe sera instanciée. Cette fonction prend en paramètre le nom de la fonction à appeler. Cette fonction doit prendre en paramètre le nom de la classe à charger. Dans notre cas, nous avons créé une fonction monAutoload() qui prend en paramètre le nom de la classe à charger. Cette fonction charge le fichier de la classe en question. Nous avons ensuite enregistré cette fonction avec spl_autoload_register().