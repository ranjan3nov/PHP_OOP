<?php

spl_autoload_register(function ($classname) {
    echo "Loading the class: $classname" . PHP_EOL;
    require_once("$classname.php");
});

$file1 = new Library\Files();
$file1->hello();

$file2 = new Library\Database();
$file2->hello();
