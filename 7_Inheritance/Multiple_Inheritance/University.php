<?php
class University
{
    protected $UniversityName = "GKV University";
    function helloUniversity()
    {
        echo "Hello from $this->UniversityName " . PHP_EOL;
    }
}
class Teacher extends University
{
    public $teacherName = "Pankaj";
    private $workingHours = 10;
    function helloTeacher()
    {
        echo "Hello from $this->teacherName" . PHP_EOL;
    }

    function calculateSalary($perHour)
    {
        return $perHour * $this->workingHours;
    }
}
class PartTimeTeacher extends Teacher
{
    public $teacherName = "Ashish";
    private $workingHours = 8;
    function helloTeacher()
    {
        echo "Hello, $this->teacherName from PartiTimeTeacher Class" . PHP_EOL;
    }

    function calculateSalary($perHour)
    {
        return $perHour * $this->workingHours;
    }
}

$teacher1 = new PartTimeTeacher();
$teacher1->helloUniversity();
$teacher1->helloTeacher();
echo $teacher1->calculateSalary(30) . PHP_EOL;

$teacher2 = new Teacher();
$teacher2->helloUniversity();
$teacher2->helloTeacher();
echo $teacher2->calculateSalary(30) . PHP_EOL;
// echo $teacher1->teacherName . PHP_EOL;
// echo $teacher1->UniversityName . PHP_EOL;
