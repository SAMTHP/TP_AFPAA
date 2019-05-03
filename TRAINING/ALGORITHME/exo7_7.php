<?php
$start = microtime();

$a1 = [1,2,3];
$a2 = [4,5,6,7];
$a3 = [];
//$c1 = count($a1);
//$c2 = count($a2);

$max = 0;

if(count($a1)> count($a2)){
	$max = count($a1);
}else {
	$max = count($a2);
}

for($i=0; $i < $max; $i++){
	if($i < count($a1)){
		$a3[$i] = $a1[$i];
	}
	if($i < count($a2)){
		$a3[$i + count($a2)] = $a2[$i];
	}
	
}

$ender = microtime();
$timer = $ender - $start;
 echo  $timer;
//print_r($a3);
