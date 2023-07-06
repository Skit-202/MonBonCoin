<?php
//l'autoloader permet d'automatiser le require des classes nécessaire à l'application
class Autoload
{
    public static function inclusionAuto($className)
    {
        require_once __DIR__ . "/" . str_replace('\\', DIRECTORY_SEPARATOR, $className) . ".php";
    }
}

spl_autoload_register(array("Autoload", "inclusionAuto"));
