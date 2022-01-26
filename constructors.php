<?php
echo "Constructors Function";
echo "<br>";

class Fruit{
    public $name;
    public $color;

    function __construct($name,$color){
        $this -> name = $name;
        $this -> color = $color;
    }

    function getName(){
        return $this -> name;
    }

    function getColor(){
        return $this -> color;
    }
}

$berry = new Fruit("Berry","Red");
echo $berry -> getName();
echo "<br>";
echo $berry -> getColor();
?>