<?php

class Posts
{
    public $post;

    function __construct($post)
    {
        $this->post = $post;
    }
}
// Identity Operator ~ ===
function compare1(&$obj1, &$obj2)
{
    if ($obj1 === $obj2) {
        return true;
    } else {
        return false;
    }
}
// Comparision Operator ~ ==
function compare2(&$obj1, &$obj2)
{
    if ($obj1 == $obj2) {
        return true;
    } else {
        return false;
    }
}
$post1 = new Posts("This is the First Posts");
$post2 = new Posts("This is the First Posts");

echo PHP_EOL . "Indetity Operator ------" . PHP_EOL;
echo compare1($post1, $post2) ? "SAME" : "DIFFERENT" . PHP_EOL;
echo PHP_EOL . "Comparision Operator ------" . PHP_EOL;
echo compare2($post1, $post2) ? "SAME" : "DIFFERENT" . PHP_EOL;
echo PHP_EOL . "Identity Operator on Referece------" . PHP_EOL;
$post3 = $post1;
echo compare1($post1, $post3) ? "SAME" : "DIFFERENT" . PHP_EOL;
echo PHP_EOL . "------ Identity Operator on Clone-------" . PHP_EOL;
$post4 = clone $post1;
echo compare1($post1, $post4) ? "SAME" : "DIFFERENT" . PHP_EOL;
