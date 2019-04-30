<?php

$array = [];
$array2 = [];

for($i=0;$i<10;$i++){
	array_push($array, $_POST['index-'.$i]);
	array_push($array2, $_POST['index-'.$i]);
}



// TRI PAR INSERTION :

// BOUCLE PRINCIPALE : LE POINT DE DEPART SE DECALE A CHAQUE TOUR
for($i=0;$i<count($array);$i++){
    // ON CONSIDERE PROVISOIREMENT QUE $ARRAY[$I] est le plus petit élément
    $posmini = $i;
    // ON EXAMINE TOUS LES ELEMENTS SUIVANTS
    for($j=$i+1;$j<count($array);$j++){
            // TEST SI L'ELEMENT SUIVANT EST SUPERIEUR AU POINT DE DEPART 
            if($array[$j] > $array[$posmini]){
                // ALORS ON RECUPERE L'INDEX QUI CORRESPOND A L'ELEMENT INFERIEUR
                $posmini = $j;
            }
    }
    
    // A CET ENDROIT ON SAIT MAINTENANT Où EST LE PLUS PETIT ELEMENT
    // IL NE RESTE PLUS QU'A AFFICHER LA PERMUTATION
    
    // TEMP RECUPERE LA VALEUR SUPERIEUR
    $temp = $array[$posmini];
    
    // ON PERMUTE L'ELEMENT INFERIEUR DANS SON NOUVEL EMPLACEMENT
    $array[$posmini] = $array[$i];
    
    // ON PERMUTE L'ELEMENT SUPERIEUR DANS SON NOUVEL EMPLACEMENT
    $array[$i] = $temp;

    // ON A PLACE CORRECTEMENT L'ELEMENT NUMERO I, ON PASSE A PRESENT AU SUIVANT
}

// TRI A BULLE :

$flag = true;
// TANT QUE LE DRAPEAU EST VRAI
while($flag){
    $flag = false;
    for($i=0;$i<count($array2)-1;$i++){
            if($array2[$i] < $array2[$i+1]){
                $temp2 = $array2[$i];
                $array2[$i] = $array2[$i+1];
                $array2[$i+1] = $temp2;
                $flag = true;
            }
    }
}
