document.getElementById('form-submit').style.display = "none";

document.getElementById("submit").onclick = function () {

    var total = parseInt(document.getElementById('choice').value);

    for(var i = 0; i < total; i++){
        var newInput = document.createElement('div');
        newInput.id = 'num-'+i;
        document.getElementById('form').appendChild(newInput);

    }

    for(var i = 0; i < total; i++){
        var range = i + 1;
        document.getElementById('num-'+i).innerHTML = "<table class='table table-dark'><tr><th scope='row'>"+range+"° nombre :</th><td><input type='number' class='form-control' id='number-"+i+"'></td><input type='hidden' class='form-control' id='total' value='"+total+"'></tr></table>";
    }

    document.getElementById('form-submit').style.display = "block";

    
}


document.getElementById("submit-form").onclick = function () {

    var total = document.getElementById('total').value;
    console.log(total);
    var array_nums = [];

    for( var i=0;i<total;i++){
        console.log(document.getElementById('number-'+i));
        array_nums.push(parseInt(document.getElementById('number-'+i).value));
    }

    console.log(array_nums);
    var positif = 0;
    var negatif = 0;

    array_nums.forEach(function(num){
        if(num < 0){
            negatif += 1;
        }else{
            positif += 1;
        }
    })

    document.getElementById('result-negatif').innerText = "Vous avez entré "+negatif+" valeur(s) négative(s)";
    document.getElementById('result-positif').innerText = "Vous avez entré "+positif+" valeur(s) positive(s)";

}