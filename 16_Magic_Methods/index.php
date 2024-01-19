<?php

// _set and _get -> Invoked when we try to set or get the protected or private propertiesF

// _call -> Invoked when undefined method is called

// _toString -> Invoked when we try to print an object

//  _debuginfo -> Invoked when var_dump method is used to print the object

// Magic methods are defualt methods are avilable for any class and invoked automatically depending on triggers

class Student
{

    private $id;
    private $name;

    function __set($id, $value)
    {
        echo "Set Methods are not found so this is called" . PHP_EOL;

        echo $id . PHP_EOL;
        echo $value . PHP_EOL;
    }

    function __get($id)
    {
        echo "Get Methods is not found " . PHP_EOL;

        echo $id . PHP_EOL;
    }
}

$std = new Student;
$std->id = "Test";
echo $std->id . PHP_EOL;
