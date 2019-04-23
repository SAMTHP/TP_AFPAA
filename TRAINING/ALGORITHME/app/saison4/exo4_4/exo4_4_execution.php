<?php

$choice = $_POST['choice'];
$price = 0;
for($i=0;$i<$choice;$i++){
    if($i <= 10){
        $price += 0.1;
    }elseif($i>10 && $i<=30){
        $price += 0.09;
    }else{
        $price += 0.08;
    }
}

echo " Vous allez payer $price €";