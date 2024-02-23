<?php

class Posts
{
    public $post;

    function __construct($post)
    {
        $this->post = $post;
    }
}

$post1 = new Posts("This is the First Post.");
$post2 = $post1; // Copy by Reference
$post1->post = "Post 1  is Modified";
// echo "Printng Post 2 " . $post2->post . PHP_EOL;

$post2->post = "Post 2 is Modified";
// echo "Printng Post 1 " . $post1->post . PHP_EOL;
// Cloning
$post3 = new Posts("This is the First Post form post 3.");
$post4 = clone $post3; // Cloning
$post3->post = "Post 3  is Modified";
echo "Printng Post 4 " . $post4->post . PHP_EOL;

$post4->post = "Post 4  is Modified";
echo "Printng Post 3 " . $post3->post . PHP_EOL;