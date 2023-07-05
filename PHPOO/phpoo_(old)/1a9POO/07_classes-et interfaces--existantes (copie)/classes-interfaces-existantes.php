<?php

echo "<h1>Classes et interfaces existantes</h1>";

// ----------------------------------------------------------------
echo "<pre>";
print_r(get_declared_classes());
echo "</pre>";


// stdClass =class standard 

// $object = new stdClass();

echo "<pre>";

$arr = [
    "name" => "toto",
    "age" => 25
];

$obj = (object) $arr;
echo $obj->name;
echo "<br>";
echo $obj->age;
echo "<br>";