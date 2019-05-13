<?php
define('BR',"<br>");

// OUVERTURE DU FICHIER EN LECTURE ET ECRITURE
$address_note = fopen('exo10_3.txt', 'a+');

$name = readline("Entrez le nom : ");
$name = str_pad($name, 14, " ", STR_PAD_BOTH);

$age = readline("Entrez l'age : ");
$age = str_pad($age, 14, " ", STR_PAD_BOTH);

$city = readline("Entrez la ville : ");
$city = str_pad($city, 14, " ", STR_PAD_BOTH);

$new_person = $name.$age.$city;

$line = fputs($address_note, $new_person."\n");

// FERMETURE DU FICHIER
fclose($address_note);
