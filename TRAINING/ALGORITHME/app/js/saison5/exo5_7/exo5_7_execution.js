document.getElementById("submit").onclick = function () {
    var choice = parseInt(document.getElementById('choice').value);
    var result = 1;

    for(var i = 1;i<=choice;i++){
        result *= i;
    }

    document.getElementById('sentence').innerText = "La factorielle de "+ choice +" :"; 
    document.getElementById('result').innerText = result;

}