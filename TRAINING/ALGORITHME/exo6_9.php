<?php
$array = [];
for($i=1;$i<=10;$i++){
	$array[$i] = $i;
}
print_r($array);
foreach($array as $num){
	$sum += $num;
}

echo "La somme des valeurs du tableau est : $sum";
