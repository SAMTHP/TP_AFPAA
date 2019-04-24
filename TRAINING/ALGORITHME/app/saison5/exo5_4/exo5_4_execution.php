<?php
define('BR',"<br>");

$choice = $_POST['choice'];
echo "Les dix prochains nombres sont : ".BR;

for($i=1;$i<=10;$i++){
    $choice += 1;
    echo $choice." ";
}