document.getElementById("submit").onclick = function () {
    var choice = parseInt(document.getElementById('choice').value);

    var i = 1;
    var show = "";
    document.getElementById('sentence').innerText = "Les dix prochains nombres sont : \n";
    while(i<=10){
        choice += 1;
        show += choice + " ";
        i++;
    }

    document.getElementById('result').innerText = show;

}