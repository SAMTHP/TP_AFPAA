<?php

$array_1 = [4,8,7,9,1,5,4,6];
$array_2 = [7,6,5,2,1,3,7,4];
$array_3 = [];

for($i=0;$i<count($array_1);$i++){
	$array_3[$i] = $array_1[$i] + $array_2[$i];
}

print_r($array_3);