<?php

$array_nums = [];

for($i=1;$i<=9;$i++){
	array_push($array_nums, $_POST['choice-'.$i]);
}

$flag = false;
for($i=0;$i<9;$i++){
	if($i != 8){
		if($array_nums[$i+1] == $array_nums[$i] + 1 ){
			$flag = true;
		} else{
			$flag = false;
			break;
		}
	}
}

if($flag){
	echo "Les éléments du tableaux sont tous consécutifs avec un interval régulier à + 1.";
} else {
	echo "Les éléments du tableaux ne sont pas consécutifs.";
}

