<?php


class account
{
    private $number;
    private $name;
    private $balance;

    public function __construct($newNumber, $newName, $newBalance)
    {
        $this->number = $newNumber;
        $this->name = $newName;
        $this->balance = $newBalance;
    }

    public function credit($a)
    {
        $this->balance = $this->balance + $a;
    }

    public function debit($a)
    {
        $this->balance = $this->balance - $a;
    }

    public function balance()
    {
        return $this->balance;
    }

    public function showAccount()
    {
        echo $this->balance . "\n";
    }

    public function tenPercent()
    {
        $this->balance = $this->balance * 1.10;
    }

    public function giveTo($recAcc, $amount)
    {
        $this->balance = $this->balance - $amount;
        $recAcc->balance = $recAcc->balance + $amount;
    }

}