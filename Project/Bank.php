<?php
class Bank
{
    public $accNo;
    public $name;
    public $balance = 0;
    function depositAmount($amt)
    {
        $this->balance = +$amt;
        echo "Successfully Deposited Amount : $amt" . PHP_EOL . "New Balance is : $this->balance" . PHP_EOL;
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
        echo "$amt is Deducted, Current Balance is : $this->balance " . PHP_EOL;
    }
    function checkBalance()
    {
        echo "Your Account Balance:  $this->balance" . PHP_EOL;
    }
}

$newAcc1 = new Bank();
$newAcc1->accNo = "69400201004952";
$newAcc1->name = "Alok Ranjan";
$newAcc1->balance = 1000;

$newAcc1->checkBalance();
$newAcc1->depositAmount(600);
$newAcc1->deductAmount(50);
$newAcc1->checkBalance();
