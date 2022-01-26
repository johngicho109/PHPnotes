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

?>