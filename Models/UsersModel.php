<?php
namespace Models;

use PDO;
use App\Db;

class UsersModel extends Db{

    public static function findAll()
    {
        $request = "SELECT * FROM users";
        $response = self::getDb()->prepare($request);
        $response->execute();

        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public static function findById(array $id)
    {
        $request = "SELECT * FROM users WHERE id_user = ?";
        $response = self::getDb()->prepare($request);
        $response->execute($id);

        return $response->fetch(PDO::FETCH_ASSOC);
    }
    public static function findByLogin(array $login)
    {
        $request = "SELECT * FROM users WHERE login = ?";
        $response = self::getDb()->prepare($request);
        $response->execute($login);

        return $response->fetch(PDO::FETCH_ASSOC);
    }

    public static function create(array $data) {
        $request =  "INSERT INTO users (login, password, firstName, lastName, adress, cp, city, phone) VALUES (?,?,?,?, ?,?,?,?)";
        $response = self::getDb()->prepare($request);
        $response -> execute($data);
    }

    public static function update(array $data){
        $request = "UPDATE users SET login = ?, password = ?, firstName = ?, lastName = ?, adress = ?, cp = ?, city = ?, phone = ? WHERE id_user = ?";
        $response = self::getDb()->prepare($request);

        return $response ->execute($data);
    }

    public static function Delete(array $id){
        $request = "DELETE FROM users WHERE id_user = ?";
        $response = self::getDb()->prepare($request);

        return $response->execute($id);

       
    }
}