<?php

// OUVERTURE DU FICHIER EN LECTURE ET ECRITURE
$note = fopen('exo10_8.txt', 'a+');

$array_register = [];

while(!feof($note)){
    // LECTURE
    $register = fgets($note);
    // AFFICHAGE DU RESULTAT
    if(!empty($register)){
        array_push($array_register, strtolower($register));
    }
}

$count = 0;

for($i=1;$i<count($array_register);$i++){
    $mail = substr($array_register[$i],14,33);

    $mail = trim($mail);

    for($j=0;$j<strlen($mail);$j++){
        if($mail[$j] == "@"){
            $count++;
            echo "$array_register[$i] : 1@\n";
        }
        if($mail[$j] == "@" && $count > 1){
            echo "$array_register[$i] : 2@\n";
            $array_register[$i] = "";
        }
    }
    
    if($count < 1){
        $array_register[$i] = "";
    }

    $count = 0;

}



print_r($array_register);

ftruncate($note, 0);

foreach($array_register as $person){
    if(!empty($person)){
        fputs($note, $person);
    }
}
