<?php
class Bank
{
    private $accNo;
    private $name;
    private $balance = 0;

    function __construct($accNo, $name)
    {
        $this->accNo = $accNo;
        $this->name = $name;
    }
    function depositAmount($amt)
    {
        $this->balance = +$amt;
        echo "Successfully Deposited Amount : $amt" . PHP_EOL;
        return $this;
    }
    function deductAmount($amt)
    {
        if ($this->balance <= 0) {
            echo "NO Balance in the Account " . PHP_EOL;
            return;
        } else if ($this->balance < $amt) {
            echo "Insufficient Account Balance" . PHP_EOL;
            return;
        }
        $this->balance -= $amt;
        echo "Amt Deducted : $amt " . PHP_EOL;
        return $this;
    }
    function checkBalance()
    {
        echo "Your Current Account Balance:  $this->balance" . PHP_EOL;
        return $this;
    }
}

$newAcc1 = new Bank(69400201004952, "Ranjan");

$newAcc1->checkBalance();
$newAcc1->depositAmount(600)->checkBalance();
$newAcc1->deductAmount(50)->checkBalance();
// $newAcc1->deductAmount(2000)->checkBalance();
// $newAcc1->checkBalance();
