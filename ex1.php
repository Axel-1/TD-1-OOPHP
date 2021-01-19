<?php

include "accountClass.php";

$account1 = new account(1, "Dupont", 2000.0);
$account2 = new account(2, "Durand", 400.0);
$account3 = new account(3, "Lajoie", 20000.0);

$account1->tenPercent();
$account2->tenPercent();
$account3->tenPercent();

$account1->showAccount();
$account2->showAccount();
$account3->showAccount();

$account3->giveTo($account1, 5000);
$account2->credit($account3->balance());
$account3->debit($account3->balance());

$account1->showAccount();
$account2->showAccount();
$account3->showAccount();