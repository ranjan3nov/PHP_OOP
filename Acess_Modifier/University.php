<?php

class University
{
    function hello()
    {
        echo "Inside University Class" . PHP_EOL;
    }
}
class Teacher extends University
{
    function hello()
    {
        echo "Inside Teacher Class" . PHP_EOL;
        parent::hello();
    }
}

$teacher = new Teacher();
$teacher->hello();
