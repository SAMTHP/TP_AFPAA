<?php
// Prices of products
$price_apple = 1;
$price_milk = 1.5;
$price_iphone = 689;
$price_pc = 869;

// Coeff TVA
$TVA_5 = 1.055;
$TVA_20 = 1.2;

// Save quantities
$quantity_apple = intval($_POST['quantity-apple']);
$quantity_milk = intval($_POST['quantity-milk']);
$quantity_iphone = intval($_POST['quantity-iphone']);
$quantity_pc = intval($_POST['quantity-pc']);

// Calculate price HT
$total_apple_HT = $quantity_apple * $price_apple;
$total_milk_HT = $quantity_milk * $price_milk;
$total_iphone_HT = $quantity_iphone * $price_iphone;
$total_pc_HT = $quantity_pc * $price_pc;

// Total HT
$total_HT = $total_apple_HT + $total_milk_HT  + $total_iphone_HT + $total_pc_HT ;

// Calculate price TTC
$total_apple_TTC = $total_apple_HT * $TVA_5;
$total_milk_TTC = $total_milk_HT * $TVA_5;
$total_iphone_TTC = $total_iphone_HT * $TVA_20;
$total_pc_TTC = $total_pc_HT * $TVA_20;

// Total TTC
$total_TTC = $total_apple_TTC + $total_milk_TTC + $total_iphone_TTC + $total_pc_TTC;