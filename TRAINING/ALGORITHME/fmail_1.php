<?php

// OUVERTURE DU FICHIER EN LECTURE ET ECRITURE
$sales_note = fopen('exo10_9.txt', 'a+');

$day = readline("Entrez le jour : ");
$day = str_pad($day, 10, " ", STR_PAD_BOTH);

$name = readline("Entrez le nom : ");
$name = str_pad($name, 14, " ", STR_PAD_BOTH);

$day_sale = readline("Entrez le montant de la vente : ");
$day_sale = str_pad($day_sale, 10, " ", STR_PAD_BOTH);

$devise = readline("Entrez la devise : ");
$devise = str_pad($devise, 10, " ", STR_PAD_BOTH);


$new_dealer = $day.$name.$day_sale.$devise;

$line = fputs($sales_note, $new_dealer."\n");

// FERMETURE DU FICHIER
fclose($sales_note);