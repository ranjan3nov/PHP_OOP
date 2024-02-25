<?php
require_once("Database.php");
$db = new Database();
echo $db->isConnected() ? "Connected" : "Failed" . PHP_EOL;
echo $db->getError() . PHP_EOL;
