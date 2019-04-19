<?php
define('BR',"<br>");

$sentence = "belle marquise, vos beaux yeux me font mourir d'amour";
$array_sentence = explode(" ", $sentence);


$array_sentence_reverse = array_reverse($array_sentence);
$array_sentence_sort = $array_sentence;
$array_sentence_shuffle = $array_sentence;

echo "Affichage de la première variante : Phrase inversée ".BR;
for($i = 0; $i < count($array_sentence); $i++){
    echo $array_sentence_reverse[$i]." ";
}

echo BR;
echo BR;

sort($array_sentence_sort);
echo "Affichage de la deuxième variante : Mots rangés par odre alphabétique".BR;
for($i = 0; $i < count($array_sentence); $i++){
    echo $array_sentence_sort[$i]." ";
}

echo BR;
echo BR;

sort($array_sentence_sort);
echo "Affichage de la troisième variante : Mots rangés de manière décroissante".BR;
for($i = count($array_sentence)-1; $i >= 0; $i--){
    echo $array_sentence_sort[$i]." ";
}

echo BR;
echo BR;

shuffle($array_sentence_shuffle);
echo "Affichage de la seconde variante : Mots rangés au hasard".BR;
for($i = 0; $i < count($array_sentence); $i++){
    echo $array_sentence_shuffle[$i]." ";
}

