<?php
class Database
{
    function getConnecton()
    {
        echo "Parent" . PHP_EOL;
    }
}

class OracleDatabase extends Database
{
    function getConnecton()
    {
        echo "Child" . PHP_EOL;
    }
}

$obj2 = new Database;
$obj1 = new OracleDatabase();

$obj2->getConnecton();
$obj1->getConnecton();
