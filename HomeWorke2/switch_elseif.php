<?php
echo "Введите данные!\n";

$handle = fopen ("php://stdin","r");
$mark = fgets($handle);

if ($mark == 2)
	echo "I am better";
elseif ($mark == 3) 
	echo "Ok";
elseif ($mark == 4)
	echo "I am good";
elseif ($mark == 5)
	echo "YeeWhaa";
else echo "error";
    echo "\n"; 