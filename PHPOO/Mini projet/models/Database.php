<?php

class Database
{
    private string $host = "localhost";
    private string $dbname ="gestionnaire_taches";
    private string $username = "root";
    private string $password = "";
    private $pdo;
    private static $instance = null;

    private function __construct()
    {
        try{
            $dsn = "mysql:host=".$this->host.";dbname=".$this->dbname;
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            die("Un problème est survenu lors de la connexion à la base de données : ".$e->getMessage());
        }
    }

    public static function getInstance(): Database
    {
        if (self::$instance == null){
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->pdo;
    }
}
$db = Database::getInstance()->getConnection();
var_dump($db);
