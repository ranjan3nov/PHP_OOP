<?php
// TightCoupling
class Course
{
    public $cid;
    public $lidObj;
    function __construct($cid, $lid)
    {
        $this->cid = $cid;
        $this->lidObj = new Lesson($lid);
    }
}

class Lesson extends Course
{
    public $lidObj;
    function __construct($lid)
    {
        $this->lidObj = $lid;
    }
    function showLessons()
    {
        echo "Here are the lessons" . PHP_EOL;
    }
}

$course = new Course(1, 100);
// $lesson = new Lesson(100);