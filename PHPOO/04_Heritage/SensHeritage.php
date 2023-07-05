<?php

class A
{
    public function test1()
    {
        return "test1";
    }
}
class B extends A
{
    public function test2()
    {
        return "test2";
    }
}
class C extends B
{
    public function test3()
    {
        return "test3";
    }
}

$c = new C;
echo $c->test1()."<br>";
echo $c->test2()."<br>";
echo $c->test3()."<br>";

echo "<hr>";
echo "<pre>";
print_r(get_class_methods("c"));
echo "</pre>";