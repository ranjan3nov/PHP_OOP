<?php
class Student
{
    public $name = "";
    public $class = "";

    function getName()
    {
        return $this->name;
    }
    function getClass()
    {
        return $this->class;
    }
    function setDetails($name, $class)
    {
        $this->name = $name;
        $this->class = $class;
    }
    function printDetails()
    {
        echo 'The ' . $this->getname() . ' studies in class ' . $this->getClass();
    }
}
$student1 = new Student();
$student2 = new Student();
$student1->setDetails("Abhay", '5th');
$student2->setDetails("Melodi", '9th');
echo $student1->printDetails() . PHP_EOL;
echo $student2->printDetails() . PHP_EOL;
