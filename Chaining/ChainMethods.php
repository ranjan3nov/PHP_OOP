<?php
class ChainMethods
{
    public $name;

    function method1()
    {
        echo "hello from method1" . PHP_EOL;
        $this->name = "Chain Methods";
        return $this;
    }

    function method2()
    {
        echo "hello from method2 $this->name" . PHP_EOL;
    }
}

$cm = new ChainMethods();
$cm->method1()->method2();
