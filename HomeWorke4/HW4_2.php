<?php

$mas = [aaaaaaaaa, dddd, 7777777, fffffffffffffff, gggggg];
$mas = preg_replace('/[0-9]+/', '', $mas);
function massim($ms)
{
	foreach ($ms as $value) {
		$masmas = preg_split('//', $value, -1, PREG_SPLIT_NO_EMPTY);

		foreach ($masmas as $nv) {
			if($kol[$nv]) $kol[$nv] +=1;
			else $kol[$nv] = 1;
		
		}
	}
	return $kol;
}
print_r(massim($mas));