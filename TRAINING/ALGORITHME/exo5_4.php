<?php

$choice = readline("Ecrivez un nombre : \n");
echo "Les dix prochains nombres sont : \n";

for($i=1;$i<=10;$i++){
    $add = 1;
    $choice += $add;
    echo $choice." ";
}