<?php

// OUVERTURE DU FICHIER EN LECTURE ET ECRITURE
$dealer_note = fopen('exo10_9.txt', 'a+');

$array_dealer = [];

while(!feof($dealer_note)){
    // LECTURE
    $register = fgets($dealer_note);
    // AFFICHAGE DU RESULTAT
    if(!empty($register)){
        array_push($array_dealer, $register);
    }
}

$array_name = [];
$array_dealer_result = [];

for($i=1;$i<count($array_dealer);$i++){
    $name = substr($array_dealer[$i],10,16);
    $sale = substr($array_dealer[$i],23,33);

    $name = trim($name);
    $sale = trim($sale);

    array_push($array_dealer_result, [$name => $sale]);
}

$total = 0;
$i = 0;
foreach($array_dealer_result as $elem){
    $temp = $elem;
    print_r($temp);
    for($i=0;$elem<count($elem);$i++){
        /*if($name == ){

        }*/
    }

}

//array_push($array_dealer_result, $total);
//print_r($array_dealer_result);