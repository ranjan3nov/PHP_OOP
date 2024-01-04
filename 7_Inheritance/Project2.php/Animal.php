<?php
class Animal
{
    protected $name;
    protected $hunt = false;

    function doesHunting()
    {
        if ($this->hunt) {
            echo "Yest, It Hunts" . PHP_EOL;
        } else {
            echo "No, It does not Hunts" . PHP_EOL;
        }
    }
}
class Dog extends Animal
{
    function __construct($name, $hunt)
    {
        $this->name = $name;
        $this->hunt = $hunt;
    }
    function makeSound()
    {
        echo "Woof Woof !!!! " . PHP_EOL;
    }
}
class Tiger extends Animal
{
    function __construct($name, $hunt)
    {
        $this->name = $name;
        $this->hunt = $hunt;
    }
    function makeSound()
    {
        echo "Grrrrr GrrrRRRR !!!! " . PHP_EOL;
    }
}

$dog = new Dog("Jack", false);
$dog->makeSound();
$dog->doesHunting();

$tiger = new Tiger("Bengali Tiger", True);
$tiger->makeSound();
$tiger->doesHunting();
