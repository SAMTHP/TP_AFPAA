<?php
define('BR',"<br>");

// OUVERTURE DU FICHIER EN LECTURE ET ECRITURE
$address_note = fopen('exo10_4.txt', 'a+');

$array_name = [];

$name = readline("Entrez le nom : ");
array_push($array_name, $name);
$name = str_pad($name, 14, " ", STR_PAD_BOTH);

$age = readline("Entrez l'age : ");
$age = str_pad($age, 14, " ", STR_PAD_BOTH);

$city = readline("Entrez la ville : ");
$city = str_pad($city, 14, " ", STR_PAD_BOTH);

$new_person = $name.$age.$city;


$line = fputs($address_note, $new_person."\n");


// FERMETURE DU FICHIER
fclose($address_note);

$note = fopen('exo10_4.txt', 'a+');

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
