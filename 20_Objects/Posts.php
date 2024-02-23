<?php

class Posts
{
    public $post;
    public $hasPost = true;

    function __construct($post)
    {
        $this->post = $post;
    }
}
function copyObject(Posts $obj1, Posts $obj2)
{
    $obj1->post = $obj2->post;
    $obj1->hasPost = $obj2->hasPost;
}
$post1 = new Posts("This is the First Posts");
$post2 = new Posts("This is the Second Posts");

copyObject($post1, $post2);
echo $post1->post;
