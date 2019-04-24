document.getElementById("submit").onclick = function () {
    var choice = parseInt(document.getElementById('choice').value);
    var result = 0;

    for(var i = 1;i<=choice;i++){
        result += i;
    }

    document.getElementById('sentence').innerText = "La somme des entiers de "+ choice +" :"; 
    document.getElementById('result').innerText = result;

}