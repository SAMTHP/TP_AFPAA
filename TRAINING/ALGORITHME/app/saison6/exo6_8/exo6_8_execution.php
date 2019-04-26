<?php

define('BR',"<br>");

$array_nums = [];

for($i=0;$i<$_POST['total'];$i++){
	array_push($array_nums, $_POST['number-'.$i]);
}

$positif = 0;
$negatif = 0;

foreach($array_nums as $num){
	if($num < 0){
		$negatif += 1;
	}else{
		$positif += 1;
	}
}

echo "Vous avez entré $negatif valeur(s) négative(s)".BR;
echo "Vous avez entré $positif valeur(s) positive(s)".BR;
