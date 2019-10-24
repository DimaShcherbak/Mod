<?php
echo "Введите номер квартиры!\n";
$handle = fopen ("php://stdin","r");
$numkv = fgets($handle);
$f = 5;
$kkf = 4;
$kp = ceil($numkv/($f*$kkf));
echo "подезд - ";
echo  $kp .PHP_EOL;
$numkv = ceil(($numkv - ((($kp-1)*$f*$kkf)))/4);
echo "этаж - ";
echo $numkv;