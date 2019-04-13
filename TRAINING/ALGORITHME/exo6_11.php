<?php

$array_1 = [4,8,7,12];
$array_2 = [3,6];

foreach($array_2 as $num){
	foreach($array_1 as $value){
		$toon += $num * $value;
	}
}

echo "Le toon est de $toon \n";