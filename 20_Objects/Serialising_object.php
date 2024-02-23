<?php

class Posts
{
    public $post;

    function __construct($post)
    {
        $this->post = $post;
    }
}

// $post1 = new Posts("This is the First Post");
// $serialised = serialize($post1);
// echo $serialised;
// file_put_contents("20_Objects/post.txt", $serialised);

$unserialised = file_get_contents("20_Objects/post.txt");
$post2 = unserialize($unserialised);
echo $post2->post;
