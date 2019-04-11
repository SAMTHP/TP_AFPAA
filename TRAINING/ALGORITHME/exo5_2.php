<?php

echo "Secton A : \n";
echo "\n";
$choice = null;
$flag = false;
$i = 0;
while($choice < 10 || $choice > 20){
    if($choice < 10 ){
        if($i == 0){
            echo "";
        }else{
            echo "Plus grand !\n";
        }
    }elseif($choice > 20){
        echo "Plus petit !\n";
    }
    $choice = readline("Choisissez un nombre : \n");
    $i++;
}
$flag = true;
echo "Bravo, vous avez trouvé un nombre valide !\n";
echo "\n";
echo "Secton B : \n";
echo "\n";

if($flag){
    $random = rand(1,100);
    //echo $random."\n";
    $choice_2 = "";
    $e = 0;
    while($choice_2 != $random){
        if($choice_2 < $random ){
            if($e == 0){
                echo "";
            } else {
                echo "Plus grand !\n";
            }
        }elseif($choice_2 > $random){
            echo "Plus petit !\n";
        }
        $choice_2 = readline("Choisissez un nombre : \n");
        $e++;
    }
    echo "Bravo, vous avez trouvé un nombre valide !\n";
    echo "\n";
}