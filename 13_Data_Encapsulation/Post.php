<?php
// Data encapsulation is desgine pattern
// It is an OPP Concept which means hiding the properties and make them access only via methods

// Make the properties Private and  and create a setternad getter methods for that properties
// Example

class Post
{

    private $post = "";

    public function setPost($post)
    {
        return $this->post = $post;
    }
    public function getPost()
    {
        return $this->post;
    }
}

$post1 = new Post();
$post1->setPost("This is a Data Encapsulation");
echo $post1->getPost() . PHP_EOL;
