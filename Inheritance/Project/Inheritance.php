<?php

declare(strict_types=1);
require_once "University.php";
require_once "Teacher.php";

$university1 = new University("GKV University ", "Haridwar", "BB011");
$teacher1 = new Teacher("Pawan", 50, "Physics", $university1);

$university2 = new University("Garhwal University ", "Haridwar", "BB011");
$teacher2 = new Teacher("Harendra", 54, " Math", $university2);

$teacher1->printTeacherDetails();
$teacher1->printUniversityDetail();

echo "-----------------------------------" . PHP_EOL;

$teacher2->printTeacherDetails();
$teacher2->printUniversityDetail();
