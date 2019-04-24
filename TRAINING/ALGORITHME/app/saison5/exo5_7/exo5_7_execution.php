<?php
define('BR',"<br>");

$choice = $_POST['choice'];
$result = 1;

for($i=1; $i <=$choice; $i++){
	$result *= $i;
}

echo "La factorielle de $choice est :";
echo  $result;