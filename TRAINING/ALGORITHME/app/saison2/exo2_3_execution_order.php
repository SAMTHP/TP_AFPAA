<?php
require_once "exo2_3_execution_showProducts.php";

// Generate tabProduts
$tab_product_section = showProducts($section,$tab_products);

function generateOrder($section,$tab_product_section,$tab_products,$tab_order){
    echo "-----------".BR;
    echo "Commandes :".BR;
    echo "-----------".BR;
    echo BR;

    foreach($tab_product_section as $element){
        if(isset($tab_products[$section][$element]['unite'])){
            echo "Produit : ".$element.BR;
            require_once "exo2_3_execution_form_order.php";
            if($_POST['quantity']){
                $quantity = $_POST['quantity'];
            }
            
            if(isset($quantity)){
                if($quantity > $tab_products[$section][$element]['stock'] || ($quantity < 0)){
                    echo BR;
                    echo "La quantité demandée ne nous permet pas de répondre à vos attentes ".BR;
                    echo BR;
                    generateOrder($section,$tab_product_section,$tab_products,$tab_order);
                }
            }
        } else {
            echo "Produit : ".$element.BR;
            require_once "exo2_3_execution_form_order.php";
            if($_POST['quantity']){
                $quantity = $_POST['quantity'];
            }
            if(isset($quantity)){
                if($quantity > $tab_products[$section][$element]['stock'] || ($quantity < 0)){
                    echo BR;
                    echo "La quantité demandée ne nous permet pas de répondre à vos attentes ".BR;
                    echo BR;
                    generateOrder($section,$tab_product_section,$tab_products,$tab_order);
                }
            }
        }

        // Reduce quantity from tab_products
        $tab_products[$section][$element]['stock'] -= $quantity;
        
        // Calculate prices in correlation with the quantity which have been choosen
        $price_TTC = ($tab_products[$section][$element]['prix HT'] * (1+($tab_products[$section]['TTC']/100))) * $quantity;
        array_push($tab_order, [$element => [ "Quantité" => $quantity,"Prix" => $price_TTC]]);
    }

    $tab_total_TTC = [];

    echo BR;
    echo "--------------------------------".BR;
    echo "Impression du ticket de caisse :".BR;
    echo "--------------------------------".BR;
    echo BR;
    echo "Section : $section".BR;
    foreach($tab_order as $array_product){
        foreach($array_product as $ref => $infos){
            echo "------------------------".BR;
            echo "Produit : $ref ".BR;
            foreach($infos as $key => $value){
                
                if($key == "Prix"){
                    echo "=> $key"." TTC : $value €".BR;
                    array_push($tab_total_TTC, $value);
                } else {
                    echo "=> $key : $value ".BR;
                }
            }
            echo "------------------------".BR;
        }
    }
    $total = array_sum($tab_total_TTC);
    echo BR;
    echo "Total de la commande : $total € TTC".BR;
}

generateOrder($section,$tab_product_section,$tab_products,$tab_order);