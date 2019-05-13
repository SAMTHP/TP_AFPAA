<?php

define('BR',"<br>");

// OUVERTURE DU FICHIER EN LECTURE ET ECRITURE
$address_note = fopen('exo10_5.txt', 'a+');

$name = readline("Entrez le nom à modifier : ");
$new_name = readline("Entrez le nouveau nom : ");

$new_name = str_pad($new_name, 14, " ", STR_PAD_BOTH);

// FERMETURE DU FICHIER
fclose($address_note);

$note = fopen('exo10_5.txt', 'a+');

$array_register = [];

while(!feof($note)){
    // LECTURE
    $register = fgets($note);
    // AFFICHAGE DU RESULTAT
    if(!empty($register)){
        array_push($array_register, strtolower($register));
    }
}

for($i=1;$i<count($array_register);$i++){
    $firstname = substr($array_register[$i],0,13);
    $age = substr($array_register[$i],14,27);

    $firstname = trim($firstname);

    if($firstname == $name){

        $array_register[$i] = "";
        $array_register[$i] = $new_name.$age;
    }
}

print_r($array_register);

ftruncate($note, 0);

foreach($array_register as $person){
    fputs($note, $person."\n");
}
