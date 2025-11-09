<?php

abstract class shape {
    const UNIT = "cm" ;

    abstract public function area();
}

class Rectangle extends shape{
    public $width;
    public $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
    
    public function area(){
        return "The area of ​​the rectangle : " . $this->width * $this->height . self::UNIT . "<sup>2</sup>";
    }
}

class Circle extends shape{
    public $radius;
    
    public function __construct($radius){
        $this->radius = $radius;
    }

    public function area(){
        return "The area of ​​the circle : " . pi() * pow($this->radius,2) . self::UNIT . "<sup>2</sup>";
    }
}


$rectangle = new Rectangle(5,5);
echo $rectangle->area();
echo "<br>";


$circle = new Circle(135);
echo $circle->area();