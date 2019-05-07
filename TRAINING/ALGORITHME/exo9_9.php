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
        echo "ASCII sentene[i] : ".ord($sentence[$i])."\n";
        echo "ASCII a : ".ord("a")."\n";
        $start = ord($sentence[$i]);
        $end = ord("a");
        $pos = $start - $end;
        echo "POSITION : ".$pos."\n";
        echo "---------------------------\n";
        $ascii_key = ord($key[$k]);
        echo "INDEX CLE: ".$k."\n";
        echo "asci clé :".$ascii_key."\n";
        $decalage = $pos + $ascii_key;
        echo "---------------------------\n";
        echo "dec :".$decalage."\n";
        $k++;
        
    }else{
        $decalage = 32;
        
    }

    if($decalage > 122){
        $decalage = ($decalage - 122) + ord("a")-1;
    }
    echo "dec finale :".$decalage."\n";
    echo "---------------------------\n";
    echo "---------------------------\n";
    $crypto .= chr($decalage);
    
}
echo $crypto;

