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

    document.getElementById('sentence').innerText = "Montant rendu : "+diff+" €";
    
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

    document.getElementById('sentence-coupure').innerText = "Détails coupures : "+coupure;
}

// Prices of products
var price_apple = 2;
var price_milk = 1;
var price_iphone = 689;
var price_pc = 869;

document.getElementById('pay').style.display = "none";

document.getElementById("submit-1").onclick = function () {

        // Save quantities
        var quantity_apple = parseInt(document.getElementById('quantity-apple').value);
        var quantity_milk = parseInt(document.getElementById('quantity-milk').value);
        var quantity_iphone = parseInt(document.getElementById('quantity-iphone').value);
        var quantity_pc = parseInt(document.getElementById('quantity-pc').value);
    
        // Calculate price
        var total_apple = quantity_apple * price_apple;
        var total_milk = quantity_milk * price_milk;
        var total_iphone = quantity_iphone * price_iphone;
        var total_pc = quantity_pc * price_pc;
    
        // Total order
        var total_order = total_apple + total_milk + total_iphone + total_pc;
        
        document.getElementById('pay').style.display = "block";
        document.getElementById('you-pay').innerText = "Vous devez régler "+total_order+" €";

}

document.getElementById("submit-2").onclick = function () {
    // Save quantities
    var quantity_apple = parseInt(document.getElementById('quantity-apple').value);
    var quantity_milk = parseInt(document.getElementById('quantity-milk').value);
    var quantity_iphone = parseInt(document.getElementById('quantity-iphone').value);
    var quantity_pc = parseInt(document.getElementById('quantity-pc').value);

    // Calculate price
    var total_apple = quantity_apple * price_apple;
    var total_milk = quantity_milk * price_milk;
    var total_iphone = quantity_iphone * price_iphone;
    var total_pc = quantity_pc * price_pc;

    // Total order
    var total_order = total_apple + total_milk + total_iphone + total_pc;

    var paiement = document.getElementById('choice').value;
    
    if(paiement < total_order){
        document.getElementById('sentence').innerText = "Veuillez renseigner un montant supérieur à <strong>"+total_order+" €</STRONG>";
    } else {
        var return_money = returnMoney(paiement,total_order);
        showMoney(return_money);
    }

}
    

        
    
    
    
