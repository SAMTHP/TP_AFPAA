<?php
$choice = readline("Choisissez un nombre : \n");
for($i=1; $i <=$choice; $i++){
	$result += $i;
}
echo "\n";
echo "La somme des entiers de $choice : \n";
echo  $result;
