<?php
$array_1 = [];
$array_2 = [];
$array_3 = [];

for($i=1;$i<=9;$i++){
	array_push($array_1, $_POST['tab1_'.$i]);
	array_push($array_2, $_POST['tab2_'.$i]);
}

for($i=0;$i<count($array_1);$i++){
	$array_3[$i] = $array_1[$i] + $array_2[$i];
}

var_dump($array_3);