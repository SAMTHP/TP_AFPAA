<?php

// OUVERTURE DU FICHIER EN LECTURE ET ECRITURE
$address_note = fopen('exo10_8.txt', 'a+');

$name = readline("Entrez le nom : ");
$name = str_pad('SAMI', 14, " ", STR_PAD_BOTH);

$age = readline("Entrez l'age : ");
$age = str_pad('samir_615_live.fr', 20, " ", STR_PAD_BOTH);

$new_person = $name.$age;

$line = fputs($address_note, $new_person."\n");

// FERMETURE DU FICHIER
fclose($address_note);
