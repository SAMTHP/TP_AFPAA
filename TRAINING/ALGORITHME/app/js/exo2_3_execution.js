document.getElementById("submit").onclick = function(){

    // Prices of products
    var price_apple = 1;
    var price_milk = 1.5;
    var price_iphone = 689;
    var price_pc = 869;

    // Coeff TVA
    var TVA_5 = 1.055;
    var TVA_20 = 1.2;

    // Save quantities
    var quantity_apple = document.getElementById('quantity-apple').value;
    var quantity_milk = document.getElementById('quantity-milk').value;
    var quantity_iphone = document.getElementById('quantity-iphone').value;
    var quantity_pc = document.getElementById('quantity-pc').value;

    // Calculate price HT
    var total_apple_HT = quantity_apple * price_apple;
    var total_milk_HT = quantity_milk * price_milk;
    var total_iphone_HT = quantity_iphone * price_iphone;
    var total_pc_HT = quantity_pc * price_pc;

    // Total HT
    var total_HT = total_apple_HT + total_milk_HT  + total_iphone_HT + total_pc_HT ;

    // Calculate price TTC
    var total_apple_TTC = total_apple_HT * TVA_5;
    var total_milk_TTC = total_milk_HT * TVA_5;
    var total_iphone_TTC = total_iphone_HT * TVA_20;
    var total_pc_TTC = total_pc_HT * TVA_20;

    // Total TTC
    var total_TTC = total_apple_TTC + total_milk_TTC + total_iphone_TTC + total_pc_TTC;

    // Show results
    document.getElementById("apple-quantity").innerText = quantity_apple;
    document.getElementById("price-apple-ht").innerText = total_apple_HT + " €";
    document.getElementById("price-apple-ttc").innerText = total_apple_TTC + " €";
    document.getElementById("milk-quantity").innerText = quantity_milk;
    document.getElementById("price-milk-ht").innerText = total_milk_HT + " €";
    document.getElementById("price-milk-ttc").innerText = total_milk_TTC + " €";
    document.getElementById("iphone-quantity").innerText = quantity_iphone;
    document.getElementById("price-iphone-ht").innerText = total_iphone_HT + " €";
    document.getElementById("price-iphone-ttc").innerText = total_iphone_TTC + " €";
    document.getElementById("pc-quantity").innerText = quantity_pc;
    document.getElementById("price-pc-ht").innerText = total_pc_HT + " €";
    document.getElementById("price-pc-ttc").innerText = total_pc_TTC + " €";
    document.getElementById("total-ht").innerText = total_HT + " €";
    document.getElementById("total-ttc").innerText = total_TTC + " €";

    document.getElementById("result").style.display = "block";
    

};
