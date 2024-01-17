<?php

abstract class Company
{
    public $name;

    abstract function setExpert($subject);

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Employee extends Company
{
    protected $subject;

    function setExpert($subject)
    {
        $this->subject = $subject;
    }
}
