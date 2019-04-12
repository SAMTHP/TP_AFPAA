<?php

$tab_products = [
    "pomme_1" => 1,
    "ordinateur_2" => 650,
    "jean_levis_3" => 77,
    "vélo_4" => 399
];

function showProducts($tab_products){
    echo "\n";
    echo "Produits en magasin : \n";
    echo "\n";
    foreach($tab_products as $key => $value){
        echo $key." : ".$value."€\n"; 
    }
    echo "\n";
}

function buying($tab_products){
    $array_buying = [];
    $continue = "o";
    while($continue == "o"){
        $choice = readline("Tapez la clé du produit qui vous intéresse (1 à 4) :\n");
        if($choice < 1 || $choice > 4){
            echo "Nous n'avons pas compris, votre choix. Fin du programme !\n";
            die;
        }

        // set index
        if($choice == 1){
            $index = "pomme_1";
        } elseif($choice == 2){
            $index = "ordinateur_2";
        } elseif($choice == 3){
            $index = "jean_levis_3";
        } elseif($choice == 4){
            $index = "vélo_4";
        }

        $quantity = readline("Saisissez la quantité pour le produit selectionné : \n");
        $price = $tab_products[$index];
        $sum = $quantity * $price;
        array_push($array_buying, $sum);
        $continue = readline("Voulez vous continuer ? (o/n) \n");
    }
    return array_sum($array_buying);
}

function paiement($sum){
    $num = 0;
    while($num < $sum){
        $cash = readline("Inscrivez le montant pour régler vos achats de $sum € : \n");
        $num = $cash;
        if($cash < $sum){  
            echo "Montant insuffisant ! \n";
            paiement($sum);
        }
    }
    return $cash;
}

function returnMoney($paiement,$sum){
    $array_coin_value = [10,5,1];
    $array_coin_given = [];

    $diff = $paiement - $sum;

    $i = 0;
    while($diff != 0){
        foreach($array_coin_value as $value){
            if($value <= $diff){
                $diff -= $value;
                array_push($array_coin_given, $value);
            }
        }
    }

    return $array_coin_given;

}

showProducts($tab_products);
$sum = buying($tab_products);
$paiement = paiement($sum);
$return_money = returnMoney($paiement,$sum);
print_r($return_money);