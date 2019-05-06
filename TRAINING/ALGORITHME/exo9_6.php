<?php
$first_sentence = $_POST['sentence'];
$sentence = $first_sentence;

$crypto = "";
for($i=0;$i<strlen($sentence);$i++){
    $asc = ord($sentence[$i]);
    if(ord($sentence[$i]) != 32){
        $decalage = $asc + 1;
    } else {
        $decalage = $asc;
    }
    $crypto .= chr($decalage);
    
}

$sentence = $crypto;

