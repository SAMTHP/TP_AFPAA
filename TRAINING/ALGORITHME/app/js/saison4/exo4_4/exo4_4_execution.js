document.getElementById("submit").onclick = function () {
    var choice = document.getElementById('choice').value;
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

    document.getElementById('result').innerText = "Vous allez payer "+price+" €";
}