<?php
/*
Calculate the Employee Salary
*/
class Employee
{
    private $id;
    private $name;
    private $workingHoursPerDay = 8;
    private $hourlyRate = 15;
    private $totalLeaveTaken;
    private $workingDays;

    function __construct($id, $name, $totalLeaveTaken)
    {
        $this->id = $id;
        $this->name = $name;
        $this->totalLeaveTaken = $totalLeaveTaken;
    }
    function getSalaryAmount($totalDays)
    {
        // This is a special variable to access the property of a class
        $this->workingDays = $totalDays - $this->totalLeaveTaken;

        $salary = $this->workingDays * $this->workingHoursPerDay * $this->hourlyRate;
        return $salary;
    }
    function getName()
    {
        return $this->name;
    }
    function getWorkingDays()
    {
        return $this->workingDays;
    }
    function getTotalLeaveTaken()
    {
        return $this->totalLeaveTaken;
    }
    function getID()
    {
        return $this->id;
    }
}
$emp1 = new Employee(301, "Abhya, raj", 10);

$salary = $emp1->getSalaryAmount(30);
echo "Employee ID :-" . $emp1->getID() . PHP_EOL .
    "Name :- " . $emp1->getname() . PHP_EOL .
    "Leave Taken :- " . $emp1->gettotalLeaveTaken() . PHP_EOL .
    "Working Days:- " . $emp1->getworkingDays() . PHP_EOL .
    "Total Salary :- " . $salary . PHP_EOL;
