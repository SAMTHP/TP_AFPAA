<?php
define('BR',"<br>");

// OUVERTURE DU FICHIER EN LECTURE ET ECRITURE

$note = fopen('exo10_6.txt', 'a+');

$array_register = [];

while(!feof($note)){
    // LECTURE
    $register = fgets($note);
    // AFFICHAGE DU RESULTAT
    if(!empty($register)){
        array_push($array_register, strtolower($register));
    }
}

// TRI A BULLE :

$flag = true;
// TANT QUE LE DRAPEAU EST VRAI
while($flag){
    $flag = false;
    for($i=1;$i<count($array_register)-1;$i++){
            if($array_register[$i] > $array_register[$i+1]){
                $temp = $array_register[$i];
                $array_register[$i] = $array_register[$i+1];
                $array_register[$i+1] = $temp;
                $flag = true;
            }
    }
}

print_r($array_register);

ftruncate($note, 0);

foreach($array_register as $person){
    fputs($note, $person."\n");
}
