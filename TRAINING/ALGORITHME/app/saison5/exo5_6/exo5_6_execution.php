<?php
define('BR',"<br>");

$choice = $_POST['choice'];
$result = 0;

for($i=1;$i <= $choice; $i++){
	$result += $i;
}

echo "La somme des entiers de $choice : ".BR;
echo  $result;