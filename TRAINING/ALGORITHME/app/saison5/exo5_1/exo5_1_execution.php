<?php

$choice = $_POST['choice'];

if($choice < 1 || $choice > 3){
    echo "Nombre non valide !";
    $flag = true;
}else{
    echo "Bravo, vous avez trouvé un nombre valide !";
    $flag = false;
}
