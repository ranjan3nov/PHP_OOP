<?php

interface Database
{
    function openConnection();
}


class OracleDatabases implements Database
{
    function openConnection()
    {
        echo "Using the Oracel Driver ";
    }
}

class MySQLDatabases implements Database
{
    function openConnection()
    {
        echo "Using the Mysql Driver ";
    }
}
