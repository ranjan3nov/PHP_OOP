<?php

abstract class Shape
{
    protected $color = '';

    abstract function calculateArea();

    public function getColor()
    {
        return $this->color;
    }
}

class Rectangle extends Shape
{
    public $length;
    public $breadth;

    function __construct($color, $length, $breadth)
    {
        $this->length = $length;
        $this->breadth = $breadth;
        $this->color  = $color;
    }

    function calculateArea()
    {
        return $this->length * $this->breadth;
    }
}

class Circle extends Shape
{
    public $radius;

    function __construct($color, $radius)
    {
        $this->color = $color;
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return $this->radius * 3.14;
    }
}


$rec = new Rectangle("Red", 10, 30);
echo "Area of rectangle = " . $rec->calculateArea() . PHP_EOL;
echo "Color of rectangle = " . $rec->getColor() . PHP_EOL;

$circ = new Circle("Blue", 10);
echo "Area of Circle = " . $circ->calculateArea() . PHP_EOL;
echo "Color of  = " . $circ->getColor() . PHP_EOL;
