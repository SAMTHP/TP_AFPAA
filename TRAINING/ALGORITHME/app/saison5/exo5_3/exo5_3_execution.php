<?php
define('BR',"<br>");

$choice = $_POST['choice'];
$i = 1;
echo "Les dix prochains nombres sont : ".BR;
while($i<=10){
    $choice += 1;
    echo $choice." ";
    $i++;
}