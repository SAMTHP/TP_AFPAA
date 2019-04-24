<?php

if(isset($_POST['choice'])){
    $choice = $_POST['choice'];
    if($choice < 10 || $choice > 20){
        if($choice < 10 ){
            echo "Plus grand !";
            $flag = false;
        } elseif($choice > 20){
            echo "Plus petit !";
            $flag = false;
        } 
    } else {
        $flag = true;
        echo "Bravo, vous avez trouvé un nombre valide !";
    }
}
