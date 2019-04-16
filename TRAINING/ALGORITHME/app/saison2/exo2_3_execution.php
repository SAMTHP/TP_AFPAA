<?php

class Order {

    private $tab_products = [
        "alimentaire" => [
            "TTC" => 5.5,
            "pommes" => [
                "prix HT" => 3,
                "stock" => 10,
                "unite" => "kilo"
            ],
            "lait" => [
                "prix HT" => 2,
                "stock" => 15,
                "unite" => "litre"
            ]
        ],
        "electronique" => [
            "TTC" => 20,
            "iphones 8s" => [
                "prix HT" => 765,
                "stock" => 12
            ],
            "pc lenovo legion i7" => [
                "prix HT" => 860,
                "stock" => 15
            ]
        ]
    ];
    
    private $tab_order = [
        "produit" => [
    
        ]
    ];
    
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

    public function getTabProducts(){
        return $this->tab_products;
    }

    public function getTabOrder(){
        return $this->tab_order;
    }
    
    public function showProducts($section,$tab_products){
        $tab_product_section = [];
        echo "------------------------------------------\n";
        echo "Les produits de la section $section sont : \n";
        echo "------------------------------------------\n";
        echo "\n";
        foreach($tab_products[$section] as $key => $value){
            if($key != $tab_products[$section]["TTC"]){
                if(gettype($tab_products[$section][$key]) == "array"){
                    echo "Produit : $key \n";
                    foreach($tab_products[$section][$key] as $element => $result){
                        if($element == "prix HT"){
                            echo "=> ".$element." : ".$result." €\n";
                        } else {
                            echo "=> ".$element." : ".$result."\n";
                        }
                    }
                    echo "\n";
                }
            }
            echo "-- -- -- -- -- --\n";
            if($key != "TTC"){
                array_push($tab_product_section, $key);
            }
        }
        echo "**** Le taux de TVA des produits de la section $section est de ".$tab_products[$section]['TTC']."% ****\n";
        echo "\n";
        return $tab_product_section;
    }
    
    public function generateOrder($section,$tab_product_section,$tab_products,$tab_order){
        echo "-----------\n";
        echo "Commandes : \n";
        echo "-----------\n";
        echo "\n";
    
        foreach($tab_product_section as $element){
            if(isset($tab_products[$section][$element]['unite'])){
                $quantity = $_POST['quantity'];
                if($quantity > $tab_products[$section][$element]['stock'] || ($quantity < 0)){
                    echo "\n";
                    echo "La quantité demandée ne nous permet pas de répondre à vos attentes \n";
                    echo "\n";
                    self::generateOrder($section,$tab_product_section,$tab_products,$tab_order);
                }
            } else {
                $quantity = $_POST['quantity'];
                if($quantity > $tab_products[$section][$element]['stock'] || ($quantity < 0)){
                    echo "\n";
                    echo "La quantité demandée ne nous permet pas de répondre à vos attentes \n";
                    echo "\n";
                    self::generateOrder($section,$tab_product_section,$tab_products,$tab_order);
                }
            }

            // Reduce quantity from tab_products
            $tab_products[$section][$element]['stock'] -= $quantity;
            
            // Calculate prices in correlation with the quantity which have been choosen
            $price_TTC = ($tab_products[$section][$element]['prix HT'] * (1+($tab_products[$section]['TTC']/100))) * $quantity;
            array_push($tab_order, [$element => [ "Quantité" => $quantity,"Prix" => $price_TTC]]);
        }
    
        $tab_total_TTC = [];
    
        echo "\n";
        echo "--------------------------------\n";
        echo "Impression du ticket de caisse :\n";
        echo "--------------------------------\n";
        echo "\n";
        echo "Section : $section\n";
        foreach($tab_order as $array_product){
            foreach($array_product as $ref => $infos){
                echo "------------------------\n";
                echo "Produit : $ref \n";
                foreach($infos as $key => $value){
                    
                    if($key == "Prix"){
                        echo "=> $key"." TTC : $value €\n";
                        array_push($tab_total_TTC, $value);
                    } else {
                        echo "=> $key : $value \n";
                    }
                }
                echo "------------------------\n";
            }
        }
        $total = array_sum($tab_total_TTC);
        echo "\n";
        echo "Total de la commande : $total € TTC\n";
    
    }

}

$order = new Order();
$section = $order->choiceSection();
$tab_products = $order->getTabProducts();
$tab_product_section = $order->showProducts($section,$tab_products);
$tab_order = $order->getTabOrder();
$order->generateOrder($section,$tab_product_section,$tab_products,$tab_order);

 