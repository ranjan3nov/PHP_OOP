<?php
class Test
{
    public $name = "";
    function getName()
    {
        return $this->name;
    }
    function setName($name)
    {
        $this->name = $name;
    }
}
$test = new Test();
$test->setName("Ranjan");
// echo $test->getName() . PHP_EOL;

// How to change the properties from outside the class
$person2 = new Test();
$person2->setName("Abhay");
echo $person2->getName();
echo $test->getName() . PHP_EOL;
