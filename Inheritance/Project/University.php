<?php
class University
{

    public $universityName;
    public $universityAddress;
    public $licenseNo;

    function __construct($universityName, $universityAddress, $licenseNo)
    {
        $this->universityName = $universityName;
        $this->universityAddress = $universityAddress;
        $this->licenseNo = $licenseNo;
    }
    function printUniversityDetail()
    {
        echo "University Name : $this->universityName " . PHP_EOL;
        echo "University Address : $this->universityAddress " . PHP_EOL;
        echo "University License No : $this->licenseNo " . PHP_EOL;
    }
}
