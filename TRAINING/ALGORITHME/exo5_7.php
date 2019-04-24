<?php
$choice = readline("Choisissez un nombre : \n");
$result = 1;
for($i=1; $i <=$choice; $i++){
	$result *= $i;
}
echo "\n";
echo "La factorielle de $choice est: \n";
echo  $result;
