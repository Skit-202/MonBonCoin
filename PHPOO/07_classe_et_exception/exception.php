<?php

/* 
 le try permet de tester une instruction qui peut générer une exception(erreur) et le catch permet de gérer l'exception c'est à dire de définir le comportement à adopter en cas d'erreur
 
*/
// Fonction qui calcule la division de deux nombres

function division($numerateur, $denominateur)
{
   try
   {
        if($denominateur == 0)
            {
                throw new Exception("Division par zéro ! <br>");
            }
            else
            {
                $resultat = $numerateur / $denominateur;
                echo "Le résultat de la division est : " . $resultat;
            }
   }catch(Exception $e)
   {
       echo "Une exception a été levée. Message d'erreur : " . $e->getMessage();
   }
}

// Appel de la fonction division
division(10, 0);
echo "<hr>";
division(10, 2);

echo "<hr>";
// Connexion à la base de données
try{
    
    // Déclaration des variables de configuration
    $host = "localhost";
    $dbname = "cours-poo";
    $username ="root";
    $password = "";

    $dsn = "mysql:host=$host;dbname=$dbname";

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ];
    
    $pdo = new PDO($dsn, $username, $password, $options);

    //echo "Connexion réussie à la base de données";

    //var_dump($pdo);

    // Requête SQL

    $stmt = $pdo->prepare("SELECT * FROM etudiant WHERE age > :age");
    $stmt->bindValue(":age", 20, PDO::PARAM_INT);
    $stmt->execute();

    $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);


    foreach($etudiants as $etudiant)
    {
        foreach($etudiant as $key => $value)
        {
            echo $key . " : " . $value . "<br>";
        }
        echo "<hr>";
    }




}catch(PDOException $e)
{
    echo "Erreur lors de la connexion à la base de données. Message d'erreur : " . $e->getMessage() . "code : " . $e->getCode() . " dans le fichier " . $e->getFile() . " à la ligne " . $e->getLine();
}