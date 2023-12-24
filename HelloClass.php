<?php
/*
*Define Class
* Define $content as Properties of Class
* Define hello() method in class
*/
class HelloClass
{
    public $content;
    function hello($testArgument)
    {
        echo "Hello Class from the hello() method " . $testArgument . " " . $this->content . PHP_EOL;
    }
}
$content1 = new HelloClass();
$content1->content = "Test";
$content1->hello("debcsu");
echo "$content1->content is the Content Property" . PHP_EOL;
$content2 = new HelloClass();
$content2->content = "New Content";
$content2->hello("testArgument");
