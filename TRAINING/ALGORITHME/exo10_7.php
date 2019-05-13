<?php

$file = 'toto.txt';
$newfile = 'tutu.txt';

copy($file, $newfile);

if (!copy($file, $newfile)) {
    echo "La copie $file du fichier a échoué...\n";
}

$tutu = fopen('tutu.txt','a+');
$tata = fopen('tata.txt','a+');

$array_register = [];

while(!feof($tata)){
    // LECTURE
    $register = fgets($tata);
    // AFFICHAGE DU RESULTAT
    if(!empty($register)){
        array_push($array_register, strtolower($register));
    }
}

foreach($array_register as $person){
    fputs($tutu, $person);
}

