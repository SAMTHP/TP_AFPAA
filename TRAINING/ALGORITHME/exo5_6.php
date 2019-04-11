<?php
$choice = readline("Choisissez un nombre : \n");
for($i=1; $i <=$choice; $i++){
	$result += $i;
}
echo "\n";
echo "Somme des entiers : \n";
echo  $result;