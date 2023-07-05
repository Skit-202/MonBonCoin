<?php

final class User{
    
        public function __construct(
            private string $name,
        ){}
    
        public function getName()
        {
            return $this->name;
        }
}

// class User2 extends User{
    
// }

class User2{
    public function __construct(
        private string $name,
    ){}

    final public function getName()
    {
        return $this->name;
    }

}

class Premium extends User2{
    public function sayHello()
    {
        echo  "Hello ", $this->getName();
    }
}


$premium = new Premium("Lior");

echo $premium->getName();
echo "<br>";
echo "<br>";
$premium->sayHello();


// une classe finale ne peut pas être héritée
// une méthode finale ne peut pas être surchargée
// une méthode finale peut être héritée
