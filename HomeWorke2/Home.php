<?php
echo "Если Вы хотите уйти пораньше нажмите 1!\n";
$handle = fopen ("php://stdin","r");
$answer = fgets($handle);

echo ($answer ==1) ? "До свидания !!!" : "Тогда продолжайте!!" ;
echo "\n";