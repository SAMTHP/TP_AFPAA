<?php

// 1 : on ouvre le fichier
$monfichier = fopen('compteur.txt', 'r+');

// 2 : on fera ici nos opérations sur le fichier...

// LECTURE : On lit la premiere ligne du fichier
//$ligne = fgets($monfichier);

// ECRITURE : 
$addLigne = fputs($monfichier, "Texte à écrire2 \n");
/*
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues

// OUVERTURE DU FICHIER EN LECTURE
$example = fopen('exemple.txt', 'r');

while(!feof($example)){
    // LECTURE
    $ligne = fgets($example);
    // CHANGEMENT DE CARACTERE
    $new_ligne= str_replace("/", " ", $ligne);
    // AFFICHAGE DU RESULTAT
    echo $new_ligne;
}
fclose($example);*/

// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);
 
//echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';