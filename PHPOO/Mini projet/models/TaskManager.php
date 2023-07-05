<?php
require_once("Task.php");
require_once("Database.php");

class TaskManager
{
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getTasks() 
    {
        $tasks =[];
        $stmt = $this->db->prepare("SELECT * FROM task ORDER BY createdAt DESC");
        if ($stmt->execute()){
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $tasks[] = new Task($row["id"], $row["title"], $row["description"], $row["createdAt"]);
            }
        }
    }
}