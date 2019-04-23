<?php
define('BR',"<br>");

$array_tarif = ["bleu","vert","orange","rouge"];

$age = $_POST['age'];

$date_permis = $_POST['permis'];
$duree_permis = 2019 - $date_permis;

$ask_accident = $_POST['accident'];

$accident = false;
if($ask_accident == "o"){
    $accident = true;
}
if($accident){
    $nbre_accident = $_POST['nbr-accident'];
}

if($age < 25 && $duree_permis < 2 && !$accident){
    $index_section = 3;
    echo "Votre tarif sera défini selon le barème de la section $array_tarif[$index_section]".BR;
    $new_index_section = $index_section -= 1;
    echo "Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème $array_tarif[$new_index_section]";
} elseif($age < 25 && $duree_permis < 2 && $accident){
    echo "Votre profil ne nous permet pas de vous assurer";
} elseif($age < 25 && $duree_permis >= 2 && !$accident ){
    $index_section = 2;
    echo "Votre tarif sera défini selon le barème de la section $array_tarif[$index_section]".BR;
    $new_index_section = $index_section -= 1;
    echo "Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème $array_tarif[$new_index_section]";
} elseif($age >= 25 && $duree_permis < 2 && !$accident ){
    $index_section = 2;
    echo "Votre tarif sera défini selon le barème de la section $array_tarif[$index_section]".BR;
    $new_index_section = $index_section -= 1;
    echo "Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème $array_tarif[$new_index_section]";
} elseif($age < 25 && $duree_permis >= 2 && $nbre_accident <= 1){
    $index_section = 3;
    echo "Votre tarif sera défini selon le barème de la section $array_tarif[$index_section]".BR;
    $new_index_section = $index_section -= 1;
    echo "Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème $array_tarif[$new_index_section]";
} elseif($age < 25 && $duree_permis >= 2 && $nbre_accident > 1){
    echo "Votre profil ne nous permet pas de vous assurer";
} elseif($age >= 25 && $duree_permis < 2 && $nbre_accident <= 1){
    $index_section = 3;
    echo "Votre tarif sera défini selon le barème de la section $array_tarif[$index_section]".BR;
    $new_index_section = $index_section -= 1;
    echo "Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème $array_tarif[$new_index_section]";
} elseif($age >= 25 && $duree_permis < 2 && $nbre_accident > 1){
    echo "Votre profil ne nous permet pas de vous assurer";
} elseif($age >= 25 && $duree_permis >= 2 && !$accident){
    $index_section = 1;
    echo "Votre tarif sera défini selon le barème de la section $array_tarif[$index_section]".BR;
    $new_index_section = $index_section -= 1;
    echo "Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème $array_tarif[$new_index_section]";
} elseif($age >= 25 && $duree_permis >= 2 && $nbre_accident <= 1){
    $index_section = 2;
    echo "Votre tarif sera défini selon le barème de la section $array_tarif[$index_section]".BR;
    $new_index_section = $index_section -= 1;
    echo "Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème $array_tarif[$new_index_section]";
} elseif($age >= 25 && $duree_permis >= 2 && $nbre_accident > 1 && $nbre_accident <= 2){
    $index_section = 3;
    echo "Votre tarif sera défini selon le barème de la section $array_tarif[$index_section]".BR;
    $new_index_section = $index_section -= 1;
    echo "Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème $array_tarif[$new_index_section]";
} elseif($age >= 25 && $duree_permis >= 2 && $nbre_accident >  2){
    echo "Votre profil ne nous permet pas de vous assurer";
}