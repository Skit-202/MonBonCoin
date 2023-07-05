<?php
// heritage en cascade


class A
{
    public function __construct()
    {
        echo "constructeur de A<br>";
    }

    public function test()
    {
        echo "test de A<br>";
    }
    public function test2()
    {
        echo "test2 de A<br>";
    }

    public function test3()
    {
        echo "test3 de A<br>";
    }
}
class B extends A
{
    public function test()
    {
        echo "test de B<br>";
    }

    public function test3()
    {
        echo "test3 de B<br>";
    }
}
class C extends B
{
    public function __construct()
    {
        echo "constructeur de C<br>";
    }

    public function test()
    {
        echo "test de C<br>";
    }
}
class D extends C{}

    
$d = new D();

$d->test();
$d->test2();
$d->test3();

$b = new B();

echo "<pre>", var_dump (get_class_methods($d)), "</pre>";

// resumé
// 1. Si on instancie un objet de la classe D, le constructeur de C est appelé
// 2. Si on instancie un objet de la classe D, la méthode test() de C est appelée
// 3. Si on instancie un objet de la classe D, la méthode test2() de A est appelée
// 4. Si on instancie un objet de la classe D, la méthode test3() de B est appelée
// 5. Si on instancie un objet de la classe B, la méthode test() de B est appelée
// 6. Si on instancie un objet de la classe B, la méthode test2() de A est appelée
// 7. Si on instancie un objet de la classe B, la méthode test3() de B est appelée

// On peu surcharger une méthode en modifiant son comportement dans une classe fille
// On peu heriter en cascade