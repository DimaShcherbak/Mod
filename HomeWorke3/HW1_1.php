<?php
function read($a)
{
	$doc = fopen("Textdoc.txt","r");
   return ($doc);
}


function write($b)
{
	$n=1;
	$doc1 = read($a);
	$result = fopen("result.txt","w");
	while(!feof($doc1)){
	$a = fgets($doc1);
	if($n%2 != 0){
    fwrite($result, $a);
    }
$n ++;
}
}
write ($b);