<?php

define("KONST", 5);
for($n=1; $n<=100; $n++ ) {
	// echo $n .PHP_EOL;
	if($n%KONST==0) $kol5 +=1;
}
echo $kol5. PHP_EOL;
	
// 	$mas = range(1, 100);
// 	foreach ($mas as $value) {
// 		if ($value %KONST == 0) $kol5 +=1;

// 	}
// echo $kol5 .PHP_EOL;
// print_r($mas);