<?php
interface Animal
{
    public function makeSound();
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo "Bark Bark" . PHP_EOL;
    }
}

class Cat implements Animal
{
    public function makeSound()
    {
        echo "Meow Meow " . PHP_EOL;
    }
}

$myobj = new Cat();
$myobj->makeSound();

$myobj1 = new Dog();
$myobj1->makeSound();
