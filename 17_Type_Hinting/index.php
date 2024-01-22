<?php

declare(strict_types=1);

class University
{
    private $name;
    
    function getName(): string
    {
        return $this->name;
    }
    function setName(string $name): void
    {
        $this->name = $name;
    }
}

class Student extends  University
{
    private $studentID = "";
    private $studentName = "";

    function setDetails(array $students): void
    {
        $this->studentID = $students['id'];
        $this->studentName = $students['name'];
    }
}
$uniObj = new University();
$uniObj->setName("GKV University");
$stObj = new Student();
$student = ['id' => 1, 'name' => 'Jane'];
$stObj->setDetails($student);
var_dump($stObj);
