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
    function helloTeacher()
    {
        echo "Hello from $this->teacherName" . PHP_EOL;
    }

    function getUniversityName()
    {
        return $this->UniversityName;
    }
}

$teacher1 = new Teacher();
$teacher1->helloTeacher();
$teacher1->helloUniversity();
$teacher1->getUniversityName();

// echo $teacher1->teacherName . PHP_EOL;
// echo $teacher1->UniversityName . PHP_EOL;
