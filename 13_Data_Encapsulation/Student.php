<?php
class Student
{
    private $id;
    private $name;
    private $class;

    public function setId($id)
    {
        return $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setClass($class)
    {
        return $this->class = $class;
    }

    public function getClass()
    {
        return $this->class;
    }
}

$student1 = new Student();
$student1->setId(45);
$student1->setName("Ranjan");
$student1->setClass("VII");
echo $student1->getId() . PHP_EOL;
echo $student1->getName() . PHP_EOL;
echo $student1->getClass() . PHP_EOL;
