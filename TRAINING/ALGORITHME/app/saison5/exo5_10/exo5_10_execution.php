<?php

define('BR',"<br>");

function returnMoney($paiement,$sum){
    $array_coin_value = [10,5,1];
    $array_coin_given = [];

    $diff = $paiement - $sum;

    while($diff != 0){
        foreach($array_coin_value as $value){
            while($value <= $diff){
                $diff -= $value;
                array_push($array_coin_given, $value);
            }
        }
    }
    return $array_coin_given;
}

function showMoney($array_coin_money){
    $diff = array_sum($array_coin_money);


    echo "Montant rendu : $diff €".BR;
    echo "Détails coupures :".BR;
    foreach($array_coin_money as $coin){
        if($coin == 10 ){
            echo "10 euros".BR;
        }elseif($coin == 5){
            echo "5 euros".BR;
        }elseif($coin == 1){
            echo "1 euro".BR;
        }
    }
}

$flag = true;

if(isset($_GET['show'])){

    // Prices of products
    $price_apple = 2;
    $price_milk = 1;
    $price_iphone = 689;
    $price_pc = 869;

    // Save quantities
    $quantity_apple = intval($_POST['quantity-apple']);
    $quantity_milk = intval($_POST['quantity-milk']);
    $quantity_iphone = intval($_POST['quantity-iphone']);
    $quantity_pc = intval($_POST['quantity-pc']);

    // Calculate price
    $total_apple = $quantity_apple * $price_apple;
    $total_milk = $quantity_milk * $price_milk;
    $total_iphone = $quantity_iphone * $price_iphone;
    $total_pc = $quantity_pc * $price_pc;

    // Total order
    $total_order = $total_apple + $total_milk + $total_iphone + $total_pc;

    echo "Vous devez régler $total_order €";
}

if(isset($_GET['price'])){
    $apple = $_GET['apple'];
    $milk = $_GET['milk'];
    $iphone = $_GET['iphone'];
    $pc = $_GET['pc'];

    $sum = $apple + $milk + $iphone + $pc;

}

if(isset($_POST['choice'])){
    $flag = false;
    $paiement = $_POST['choice'];

    // Calculate money which are returned after paiement
    $return_money = returnMoney($paiement,$sum);

    // Showing money returned
    showMoney($return_money);
}

