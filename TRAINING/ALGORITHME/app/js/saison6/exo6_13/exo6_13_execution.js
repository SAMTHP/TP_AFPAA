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
    var array_num = [];

    for( var i=0;i<total;i++){
        console.log(document.getElementById('number-'+i));
        array_num.push(parseInt(document.getElementById('number-'+i).value));
    }

    var max = 0;

    for(var i=0; i<array_num.length;i++){
        if(i > 0 && (array_num[i] > array_num[i-1]) ){
            if(max > array_num[i]){
                max = max;
            } else {
                max = array_num[i];
            }
        }else if(i > 0 && array_num[i-1] > array_num[i]){
            if(max > array_num[i-1]){
                max = max;
            } else {
                max = array_num[i-1];
            }
        }
    }

    document.getElementById("result-max").innerText = "La valeur la plus haute que vous avez renseigné est "+max+".";

    array_num.forEach(function(value, key){
        if(value == max){
            pos = key + 1;
            document.getElementById("result-position").innerText = "Ce nombre a été saisi à la "+ pos +"° position.";
        }
    })

}