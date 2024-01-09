<?php

// Example of self keywords To access the Static property
class Calculator
{
    static public $result;
    static function add($a, $b)
    {
        self::$result = $a + $b;
    }
}
Calculator::add(5, 8);
echo Calculator::$result . PHP_EOL;
Calculator::add(70, 89);
echo Calculator::$result . PHP_EOL;
