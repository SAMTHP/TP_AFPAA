<?php

$a1 = [];
$a2 = [];

for($i=0;$i<$_POST['total-1'];$i++){
	array_push($a1, $_POST['tab-1-num-'.$i]);
}

for($i=0;$i<$_POST['total-2'];$i++){
	array_push($a1, $_POST['tab-2-num-'.$i]);
}

$a3 = [];
$c1 = count($a1);
$c2 = count($a2);

$max = 0;

if($c1 > $c2){
	$max = $c1;
}else {
	$max = $c2;
}

for($i=0; $i < $max; $i++){
	if($i < $c1){
		$a3[$i] = $a1[$i];
	}
	if($i < $c2){
		$a3[($i + $c2)-1] = $a2[$i];
	}
}

var_dump($a3);