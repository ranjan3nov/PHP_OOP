<?php

abstract class Car
{
    abstract function applyBreak();

    function hello()
    {
        echo "Hello from Car Class" . PHP_EOL;
    }
}

class SportsCar extends Car
{
    function applyBreak()
    {
        echo "Apply Break from Sports Car" . PHP_EOL;
    }
}

$car1 = new SportsCar();
$car1->applyBreak();
