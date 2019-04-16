<?php
require_once "exo2_3_execution_tabs.php";
require_once "exo2_3_execution_section.php";

define('BR',"<br>");

function showProducts($section,$tab_products){
    $tab_product_section = [];
    echo "------------------------------------------".BR;
    echo "Les produits de la section $section sont :".BR;
    echo "------------------------------------------".BR;
    echo BR;
    foreach($tab_products[$section] as $key => $value){
        if($key != $tab_products[$section]["TTC"]){
            if(gettype($tab_products[$section][$key]) == "array"){
                echo "Produit : $key ".BR;
                foreach($tab_products[$section][$key] as $element => $result){
                    if($element == "prix HT"){
                        echo "=> ".$element." : ".$result." €".BR;
                    } else {
                        echo "=> ".$element." : ".$result.BR;
                    }
                }
                echo BR;
            }
        }
        echo "-- -- -- -- -- --".BR;
        if($key != "TTC"){
            array_push($tab_product_section, $key);
        }
    }
    echo "**** Le taux de TVA des produits de la section $section est de ".$tab_products[$section]['TTC']."% ****".BR;
    echo BR;
    return $tab_product_section;
}