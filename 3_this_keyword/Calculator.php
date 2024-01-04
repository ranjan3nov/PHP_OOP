<?php
class Calculator
{
    public $a;
    public $b;
    public $result;
    function getA()
    {
        return $this->a;
    }
    function getB()
    {
        return $this->b;
    }
    function setA($a)
    {
        $this->a = $a;
    }
    function setB($b)
    {
        $this->b = $b;
    }
    function add()
    {
        $result = $this->a + $this->b;
        $this->result = $result;
    }
    function getResults()
    {
        $this->add();
        echo "Addition of " . $this->a . " and " . $this->b . " = " . $this->result . PHP_EOL;
    }
}
$newobj = new Calculator();
$newobj->setA(10);
$newobj->setB(90);
echo $newobj->getResults();
