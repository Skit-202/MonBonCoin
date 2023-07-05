<?php

class Vehicle  
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private static int $nbVehicles = 0;
    private static array $vehicles = array();
   

    public function __construct(
        private string $brand, // obligatoire
        private string $model, // obligatoire
        private string $color = 'black', // facultatif
        private int $currentSpeed = 0, // facultatif
        private int $nbSeats = 5, // facultatif
        private int $nbWheels = 4, // facultatif
        private string $energy = 'fuel', // facultatif

    )
    {
        self::$nbVehicles++;
        self::$vehicles[] = $this;
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }

    }

    // getters
    public function getBrand(): string
    {
        return $this->brand;
    }
    public function getModel(): string
    {
        return $this->model;
    }
    public function getColor(): string
    {
        return $this->color;
    }   
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }    
    
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public static function getNbVehicles(): int
    {
        return self::$nbVehicles;
    }
    public static function getVehicles(): array
    {
        return self::$vehicles;
    }

    // setters
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }
    public function setModel(string $model): void
    {
        $this->model = $model;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public static function setNbVehicles(int $nbVehicles): void
    {
        self::$nbVehicles = $nbVehicles;
    }   

    // methods
    public function start(): string
    {
        $this->currentSpeed = 5;
        return "Go !";
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Faster !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function dump(): string
    {
        $dump = "Brand : " . $this->brand . "<br>";
        $dump .= "Model : " . $this->model . "<br>";
        $dump .= "Color : " . $this->color . "<br>";
        $dump .= "Current speed : " . $this->currentSpeed . "<br>";
        return $dump;
    }

   

   
    


}


$vehicule1 = new Vehicle('Peugeot', '308', energy: 'electric');
$vehicule2 = new Vehicle('Renault', 'Clio');
$vehicule3 = new Vehicle('Citroen', 'C3', 'red', energy: 'electric');
$vehicule4 = new Vehicle('Audi', 'A3');
$vehicule5 = new Vehicle('Mercedes', 'Classe A', 'grey', energy: 'electric');

echo Vehicle::getNbVehicles() . "<br>";

echo $vehicule1->dump();
echo"<br>";

echo $vehicule1->start();
echo"<br>";

echo $vehicule1->dump();
echo"<br>";

echo $vehicule1->forward();
echo"<br>";

echo $vehicule1->dump();
echo"<br>";

echo $vehicule1->brake();
echo"<br>";

echo $vehicule1->dump();
echo"<br>";

Vehicle::setNbVehicles(50);
echo Vehicle::getNbVehicles() . "<br>";

echo "<pre>";
var_dump(Vehicle::getVehicles());
echo "</pre>";

echo "<pre>";
var_dump(Vehicle::ALLOWED_ENERGIES);
echo "</pre>";

// résumé
// Une constante est une valeur qui ne peut pas être modifiée
// Une constante est définie avec le mot-clé const
// Une constante est toujours publique
// Une constante est toujours statique
// Une constante est toujours écrite en majuscules
// Une constante est toujours définie dans une classe
// Une constante est toujours accessible avec le nom de la classe suivi de :: et 
// du nom de la constante
// Une constante peut être un tableau
// Une constante peut être un tableau associatif
// Une constante peut être un tableau multidimensionnel
// Une constante peut être un objet
// Une constante peut être une expression
// Une constante peut être une constante d'une autre classe

// Opérateurs de résolution de portée
// L'opérateur de résolution de portée est ::
// Il permet d'accéder à une constante ou une propriété statique d'une classe
// Il permet d'accéder à une méthode statique d'une classe

// Le mot-clé self
// Le mot-clé self permet d'accéder à une constante ou une propriété statique d'une classe
// Le mot-clé self permet d'accéder à une méthode statique d'une classe
// Le mot-clé self est toujours suivi de ::
// Le mot-clé self est toujours suivi du nom de la constante, de la propriété ou de la méthode
// Le mot-clé self est toujours utilisé dans une méthode statique
