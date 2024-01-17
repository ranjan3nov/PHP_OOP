<?php
/*
Calculate the Employee Salary
*/
class Employee
{
    public $id;
    public $name;
    public $workingHoursPerDay = 8;
    public $hourlyRate = 15;
    public $totalLeaveTaken;
    public $workingDays;

    function getSalaryAmount($totalDays)
    {
        // This is a special variable to access the property of a class
        $this->workingDays = $totalDays - $this->totalLeaveTaken;

        $salary = $this->workingDays * $this->workingHoursPerDay * $this->hourlyRate;
        return $salary;
    }
}
$emp1 = new Employee();
$emp1->id = 1;
$emp1->name = "John";
$emp1->totalLeaveTaken = 7;
$emp1->workingDays = 10;
$salary = $emp1->getSalaryAmount(30);
echo "Employee ID :- $emp1->id" . PHP_EOL .
    "Name :- $emp1->name" . PHP_EOL .
    "Leave Taken :- $emp1->totalLeaveTaken" . PHP_EOL .
    "Working Days:- $emp1->workingDays" . PHP_EOL .
    "Total Salary :- $salary" . PHP_EOL;
