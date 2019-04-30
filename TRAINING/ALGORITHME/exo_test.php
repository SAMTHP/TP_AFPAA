<?php

$array = [11,10,9,8,7,6,5,4,3,2,1];

for($i=0;$i<10;$i++){
    $posmini = $i;
    echo "posmini = i : $posmini = $i\n";
    for($j=$i+1;$i<11;$i++){
        if($array[$j]<$array[$posmini]){
            $posmini = $j;
            echo "posmini = j : $posmini = $j \n";
        }
    }

    $temp = $array[$posmini];
    echo "temp = array[posmini] : $temp = $array[$posmini] \n";

    $array[$posmini] = $array[$i];
    echo "array[posmini] = array[i] : $array[$posmini] = $array[$i] \n";
    
    $array[$i] = $temp; 
    echo "array[i] = temp : $array[$i] = $temp \n";
}

print_r($array);