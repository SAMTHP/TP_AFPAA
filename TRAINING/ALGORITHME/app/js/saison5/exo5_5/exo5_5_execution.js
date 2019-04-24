document.getElementById("submit").onclick = function () {
    var choice = parseInt(document.getElementById('choice').value);

    document.getElementById('sentence').innerText = "Table de "+choice;
    for(var i=1; i <=10; i++){
        var result = choice * i;
        document.getElementById("result-"+i).innerText = choice+" x "+i+" = "+result;
    }

}