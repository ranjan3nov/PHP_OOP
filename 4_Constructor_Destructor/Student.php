<?php
class Student
{
    public $name = "Nirmal ";
    public $class = "2nd ";

    function __construct($name = "", $class = "")
    {
        if ($name) {
            $this->name = $name;
            $this->class = $class;
        }
    }
    function printDetails()
    {
        echo $this->name . 'is studing in ' . $this->class . 'class.' . PHP_EOL;
    }

    function __destruct()
    {
        echo "I am  destructor" . PHP_EOL;
    }
}
$student1 = new Student("Ranjan", "5th");
$student1->printDetails();

$student2 = new Student();
$student2->printDetails();
