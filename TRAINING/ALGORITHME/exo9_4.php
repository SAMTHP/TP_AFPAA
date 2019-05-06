<?php

$vowel = ["a","e","i","o","u","y"];

$sentence = "Je teste combien de voyelles je peux trouver dans cette phrase";
$count = 0;
for($e=0;$e<count($vowel);$e++){
    for($i = 0;$i<strlen($sentence);$i++){
        if($sentence[$i] == $vowel[$e]){
            $count++;
        }
    }
}

$count2 = 0;
for($e=0;$e<count($vowel);$e++){
    $pos = strpos($sentence, $vowel[$e]);
    
    if($pos){
        echo "------------ $pos \n";
        $count2++;
    }
}

echo $count."\n";
echo $count2;
