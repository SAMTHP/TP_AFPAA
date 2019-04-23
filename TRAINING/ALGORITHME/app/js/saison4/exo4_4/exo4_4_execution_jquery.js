$("#submit").click(function () {
    var choice = $('#choice').val();
    var price = 0;

    for(var i=0;i<choice;i++){
        if(i <= 10){
            price += 0.1;
        }else if(i>10 && i<=30){
            price += 0.09;
        }else{
            price += 0.08;
        }
    }

    $('#result').text("Vous allez payer "+price+" €");
    
})