<?php
function choiceSection(){
    $choice_section = $_POST['choice'];
    if($choice_section == "1"){
        $choice = "alimentaire";
    } elseif($choice_section == "2") {
        $choice = "electronique";
    }else {
        die;
    }
    return $choice;
}

// Appel de la fonction
$section = choiceSection();