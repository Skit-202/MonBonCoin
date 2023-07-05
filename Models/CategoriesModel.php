<?php

namespace Models;

use PDO;
use App\Db;


class CategoriesModel extends Db
{
    public static function findAll()
    {
        $request = "SELECT * FROM categories";
        $response = self::getDb()->prepare($request);
        $response->execute();

        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById(array $id)
    {
        $request = "SELECT * FROM categories WHERE id_categorie = ?";
        $response = self::getDb()->prepare($request);
        $response->execute($id);

        return $response->fetch(PDO::FETCH_ASSOC);
    }

    public static function findByName($title){
        $request = "SELECT * FROM categories WHERE title = ?";
        $response = self::getDb()->prepare($request);
        $response->execute($title);

        return $response->fetch(PDO::FETCH_ASSOC);
    }

    public static function create(array $data) {
        $request =  "INSERT INTO categories (title) VALUE (?)";
        $response = self::getDb()->prepare($request);
        $response -> execute($data);

        return self::getDb()->lastInsertId();
    }

    public static function update(array $data){
        $request = "UPDATE categorie SET title = ? WHERE  id_categorie = ?";
        $response = self::getDb()->prepare($request);

        return $response ->execute($data);
    }

    public static function Delete(array $id){
        $request = "DELETE FROM categories WHERE id_categorie = ?";
        $response = self::getDb()->prepare($request);

        return $response->execute($id);

       
    }
}
