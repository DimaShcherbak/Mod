<?php
define("KONST", 100);
$i = 2;
while (true) {
$mas = range(2, $i);
foreach ($mas as $value) {
	if ($i%$value==0) $kol++;

}
if($kol==1) {
	echo $i .PHP_EOL;
	$kolxxx+=1;
	
    }
    $i++;
	$kol=0;
    if($kolxxx==KONST) break;
}
