<?php
/*
$key = strtolower(readline("Entrez la clé :"));
$sentence = strtolower(readline("Entrez votre phrase"));
*/
$key = "vigenere";
$sentence = "il faut coder cette phrase";

$crypto = "";
$k = 0;
for($i=0;$i<strlen($sentence);$i++){
    if($k == strlen($key)){
        $k = 0;
    }
    if(ord($sentence[$i]) != 32){
        $pos = ord($sentence[$i]) - ord("a") -1;
        echo "POSITION : ".$pos."\n";
        $ascii_key = ord($key[$k]);
        echo "Key : ".$k."\n";
        echo "asci clé :".$ascii_key."\n";
        $decalage = $pos + $ascii_key;
        echo " dec :".$decalage."\n";
        $k++;
    }else{
        $decalage = 32;
        $k--;
    }

    if($decalage > 122){
        $decalage = ($decalage - 122) + ord("a");
    }
    echo "dec finale :".$decalage."\n";
    $crypto .= chr($decalage);
    
}
echo $crypto;

