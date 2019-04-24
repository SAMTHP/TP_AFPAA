<?php
define('BR',"<br>");

$choice = $_POST['choice'];

echo "Table de $choice :".BR;
for($i=1; $i <=10; $i++){
	$result = $choice * $i;
	echo "$choice x $i = $result".BR;
}