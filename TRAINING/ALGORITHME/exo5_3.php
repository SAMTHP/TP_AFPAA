<?php

$choice = readline("Ecrivez un nombre : \n");
$i = 1;
echo "Les dix prochains nombres sont : \n";
while($i<=10){
    $add = 1;
    $choice += $add;
    echo $choice." ";
    $i++;
}