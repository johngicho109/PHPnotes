<?php
class Fruit{
    public $name;
    public $color;

    public function __construct($name,$color){
        $this -> name = $name;
        $this -> color = $color;
    }

    public function intro(){
        echo "A {$this -> name} is a fruit and the color of the fruit is {$this -> color}";
    }

}

class Cherry extends Fruit {
    public $width;
    public function __construct($name,$color,$width){
        $this -> name = $name;
        $this -> color = $color;
        $this -> width = $width;
    }

    public function intro(){
        echo "This fruit is {$this -> name} and the color is {$this -> color} while the width is {$this -> width} cm";
    }
}

$cherry = new Cherry("Cherry","Red",2);
$cherry -> intro();
?>