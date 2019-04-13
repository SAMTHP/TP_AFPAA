<?php

$total_value = readline("Combien de valeurs voulez vous stocker ?\n");
$array_nums = [];

for($i=0;$i<$total_value;$i++){
	$index = $i+1;
	$num = readline("Entrez votre $index nombre : \n");
	array_push($array_nums, $num);
}

foreach($array_nums as $num){
	if($num < 0){
		$negatif += 1;
	}else{
		$positif += 1;
	}
}

echo "\n";
echo "Vous avez entré $negatif valeur(s) négative(s) \n";
echo "Vous avez entré $positif valeur(s) positive(s) \n";