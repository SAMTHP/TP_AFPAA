function returnMoney(paiement,sum){
    var array_coin_value = [10,5,1];
    var array_coin_given = [];

    var diff = paiement - sum;

    while(diff != 0){
        array_coin_value.forEach(function(value){
            while(value <= diff){
                diff -= value;
                array_coin_given.push(value);
            }
        })
    }
    return array_coin_given;
}

function showMoney(array_coin_money){
    diff = 0;

    array_coin_money.forEach(function(value){
        diff += value;
    })

    $('#sentence').text("Montant rendu : "+diff+" €");

    var coupure = "";

    array_coin_money.forEach(function(coin){
        if(coin == 10 ){
            coupure += "10 euros, ";
        }else if(coin == 5){
            coupure += "5 euros, ";
        }else if(coin == 1){
            coupure += "1 euro, ";
        }
    })

    $('#sentence-coupure').text("Détails coupures : "+coupure);
}

// Prices of products
var price_apple = 2;
var price_milk = 1;
var price_iphone = 689;
var price_pc = 869;

$('#pay').hide();

$("#submit-1").click(function () {

    // Save quantities
    var quantity_apple = parseInt($('#quantity-apple').val());
    var quantity_milk = parseInt($('#quantity-milk').val());
    var quantity_iphone = parseInt($('#quantity-iphone').val());
    var quantity_pc = parseInt($('#quantity-pc').val());

    // Calculate price
    var total_apple = quantity_apple * price_apple;
    var total_milk = quantity_milk * price_milk;
    var total_iphone = quantity_iphone * price_iphone;
    var total_pc = quantity_pc * price_pc;

    // Total order
    var total_order = total_apple + total_milk + total_iphone + total_pc;

    $('#pay').show();
    $('#you-pay').text("Vous devez régler "+total_order+" €");

})

$("#submit-2").click( function () {
    // Save quantities
    var quantity_apple = parseInt($('#quantity-apple').val());
    var quantity_milk = parseInt($('#quantity-milk').val());
    var quantity_iphone = parseInt($('#quantity-iphone').val());
    var quantity_pc = parseInt($('#quantity-pc').val());

    // Calculate price
    var total_apple = quantity_apple * price_apple;
    var total_milk = quantity_milk * price_milk;
    var total_iphone = quantity_iphone * price_iphone;
    var total_pc = quantity_pc * price_pc;

    // Total order
    var total_order = total_apple + total_milk + total_iphone + total_pc;

    var paiement = $('#choice').val();

    if(paiement < total_order){
        $('#sentence').html("Veuillez renseigner un montant supérieur à <strong>"+total_order+" €</STRONG>");
    } else {
        var return_money = returnMoney(paiement,total_order);
        showMoney(return_money);
    }

})