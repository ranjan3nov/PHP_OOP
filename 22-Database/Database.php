<?php
require_once("config/config.php");
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PWD;
    private $dbname = DB_NAME;

    private $connection;
    private $error;
    private $stmt;
    private $dbConnected;

    public function __construct()
    {
        // SET PDO Connection
        $dsn = 'mysql:host=' . $this->host . ':dbname=' . $this->dbname;
        $option = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try {
            $this->connection = new PDO($dsn, $this->user, $this->pass);
            $this->dbConnected = true;
        } catch (PDOException $e) {
            $this->error = $e->getMessage() . PHP_EOL;
            $this->dbConnected = false;
        }
    }

    public function getError()
    {
        return $this->error;
    }
    public function isConnected()
    {
        return $this->dbConnected;
    }
    // prepare statement
    public function query($query)
    {
        $this->stmt = $this->connection->prepare($query);
    }
    // Exectue the prepare statement
    public function execute()
    {
        return $this->stmt->execute();
    }
    public function resultset()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    // Get Record Row Count
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
    // get single record
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
}
