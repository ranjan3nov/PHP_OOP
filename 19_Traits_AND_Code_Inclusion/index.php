<?php

trait DatabaseHelper
{

    function getRecords()
    {
        echo "Here are the Your Records" . PHP_EOL;
    }
}

trait StringHelper
{
    function removeSpaces($str)
    {
        return trim($str);
    }
}
class Student
{
    use DatabaseHelper;
    use StringHelper;
    function ConnectDB()
    {
        $this->getRecords();
        echo $this->removeSpaces("     this      is a test");
    }
}

$student1 = new Student();
$student1->ConnectDB();
