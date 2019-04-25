<?php
session_start();
$random = $_GET['rand'];

if(isset($_POST['choice'])){
    $choice = $_POST['choice'];
    if($choice < 10 || $choice > 20){
        if($choice < 10 ){
            echo "Section A : Plus grand !";
            $flag = true;
        } elseif($choice > 20){
            echo "Section A : Plus petit !";
            $flag = true;
        } 
    } else {
        $flag = false;
        echo "Section A : Bravo, vous avez trouvé un nombre valide !";
    }
}
    
$form = true;

if(isset($_POST['choice-2'])){
    $_SESSION['tour'];
    $_SESSION['tour'] += 1;
    $choice_2 = $_POST['choice-2'];
    if($choice_2 != $random){    
        if($choice_2 < $random ){
            echo "Section B : Plus grand !\n";
            echo $_SESSION['tour'];
        }elseif($choice_2 > $random){
            echo "Section B : Plus petit !\n";
            echo $_SESSION['tour'];
        }
    } else {
        $form = false;
        echo "Section B : Bravo, vous avez trouvé un nombre valide au bout du ".$_SESSION['tour']." ° coup(s)!\n";
        $_SESSION['tour'] = 0;
    }    
} 
