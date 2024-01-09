<?php

// This keywords does not work in static methods
class Calculator
{
    static public $result;
    static function add($a, $b)
    {
        $result = $a + $b;
        return $result;
    }
}
Calculator::$result = Calculator::add(5, 8);

echo Calculator::$result . PHP_EOL;
echo Calculator::add(70, 89) . PHP_EOL;
