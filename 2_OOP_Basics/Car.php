<?php
/*
    *Class Name First Letter Should be start with capital Letter
    *File Name Should match with the Class Name.
    *For Good Practice One File Should Have One Class
    *'class' is the keyword used to define the class
*/
class Car
{
    public $name;
    public $color;

    function setName($name1)
    {
        $this->name = $name1;
    }

    function setColor($color1)
    {
        $this->color = $color1;
    }
}
$sportsCar = new Car();
$sportsCar->setName(name1: "Ferarri");
$sportsCar->setColor(color1: "Red");

$modernCar = new car();
$modernCar->setName(name1: "BMW");
$modernCar->setColor(color1: "Blue");

$budgetCar = new car();
$budgetCar->setName(name1: "Suzuki");
$budgetCar->setColor(color1: "Alto");

// echo $cars
