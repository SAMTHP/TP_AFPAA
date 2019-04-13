<?php

$array = [];
$nbr_value = readline("Combien de valeurs voulez vous stocker ? : \n");

for($i=1;$i<=$nbr_value; $i++){
	$num = readline("Nombre : \n");
	$num += 1;
	array_push($array, $num);
}

print_r($array);