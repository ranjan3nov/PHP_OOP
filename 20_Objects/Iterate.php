<?php

class Posts
{
    public $post;
    public $hasPost = true;

    function __construct($post)
    {
        $this->post = $post;
    }
    function hello()
    {
        echo "hello";
    }
}
$post1 = new Posts("This is the First Posts");

foreach ($post1 as $key => $value) { 
    echo $key . '=>' . $value . PHP_EOL;
}

echo PHP_EOL;
var_dump($post1);
