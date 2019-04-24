document.getElementById("submit").onclick = function () {
    var choice = parseInt(document.getElementById('choice').value);

    var show = "";
    document.getElementById('sentence').innerText = "Les dix prochains nombres sont : \n";
    for(var i = 1;i<=10;i++){
        choice += 1;
        show += choice + " ";
    }

    document.getElementById('result').innerText = show;

}