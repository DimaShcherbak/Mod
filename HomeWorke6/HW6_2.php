<?php
 $mas1 = ['sol', 'stul', 'vodka', 'seledka', 'pivo'];
 $sam2 = ['lusterko', 'merlin', 'scoi', 'kolbasa', 'rim'];
 // $roo = [bkkj, aefafa, afajkgkgkgkk, gukgukhk];
 function comparison($mas, $sam) // comparison в переводе СРАВНЕНИЕ просто название функции
 {
 	if(count($mas) == count($sam)) {
 		foreach ($mas as $value) {
 			$temp1[] .= iconv_strlen($value);
 			// print_r($temp1);
 		}
 		foreach ($sam as $value) {
 			$temp2[] .= iconv_strlen($value);
 			// print_r($temp2);
 		}
 		// $rez_temp[] = array();
 		for($i = 0; $i < count($mas); $i++){
 			$rez_temp[] = abs($temp1[$i] - $temp2[$i]);

 			// array_push($rez_temp, abs($temp1[$i] - $temp2[$i]));
 			// print_r($rez_temp);
 		} 			
 		
 	}
 	else echo "Сравниваемые массвы не равны !!";
 	return $rez_temp;
 }
 print_r(comparison($mas1,$sam2));
