<?php

$choice = readline("Choisisez un nombre : \n");
echo "\n";
echo "Table de $choice :\n";
echo "\n";
for($i=1; $i <10; $i++){
	$result = $choice * $i;
	echo "$choice x $i = $result\n";
}