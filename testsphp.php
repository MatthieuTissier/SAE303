<?php

require "account.php";

$traitacc = new Traitement("accounts");
$test = new Account("Jean", "Test", "1212122    ", "lebronjames@laposte.fr" , "0610121012", hash("sha256", "quoifeur"));
cho($test -> create($traitacc, Account::getRows()));
print_r(account::verify($traitacc, "1212122", "quoifeur"));