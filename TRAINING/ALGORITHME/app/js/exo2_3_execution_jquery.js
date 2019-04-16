$("#result").hide();
$("#submit").click(function(){

    // Prices of products
    var price_apple = 1;
    var price_milk = 1.5;
    var price_iphone = 689;
    var price_pc = 869;

    // Coeff TVA
    var TVA_5 = 1.055;
    var TVA_20 = 1.2;

    // Save quantities
    var quantity_apple = $('#quantity-apple').val();
    var quantity_milk = $('#quantity-milk').val();
    var quantity_iphone = $('#quantity-iphone').val();
    var quantity_pc = $('#quantity-pc').val();

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
    $("#apple-quantity").text(quantity_apple);
    $("#price-apple-ht").text(total_apple_HT + " €");
    $("#price-apple-ttc").text(total_apple_TTC + " €");
    $("#milk-quantity").text(quantity_milk);
    $("#price-milk-ht").text(total_milk_HT + " €");
    $("#price-milk-ttc").text(total_milk_TTC + " €");
    $("#iphone-quantity").text(quantity_iphone);
    $("#price-iphone-ht").text(total_iphone_HT + " €");
    $("#price-iphone-ttc").text(total_iphone_TTC + " €");
    $("#pc-quantity").text(quantity_pc);
    $("#price-pc-ht").text(total_pc_HT + " €");
    $("#price-pc-ttc").text(total_pc_TTC + " €");
    $("#total-ht").text(total_HT + " €");
    $("#total-ttc").text(total_TTC + " €");

    $("#result").show();

});
