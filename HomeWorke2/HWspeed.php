<?php

echo "limit\n";
$handle=fopen("php://stdin","r");
$speed=fgets($handle);

if ($speed > 60){
	echo "Very Good";
} elseif (($speed > 50) && ($speed < 60)) {
	echo "Ok :-(";
} else echo "Whaaat";