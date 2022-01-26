<?php

echo "Fruit Class"."<br>";
class Fruit{
    public $name; // property of the class fruit
    public $color;

    function setName($name){ // method of the class
        $this -> name = $name;
    }

    function getName(){
        return $this -> name;
    }
}

$apple = new Fruit("Apple","Red");
$banana = new Fruit("Banana","Yellow");

$apple -> setName("Apple");
$banana -> setName("Banana");

echo $apple -> getName();
echo "<br>";
echo $banana -> getName();

?>