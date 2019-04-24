document.getElementById("submit").onclick = function () {
    var choice = document.getElementById('choice').value;

    if(choice < 1 || choice > 3){
        document.getElementById('result').innerText = "Mauvais nombre, essayez encore !";
    } else{
        document.getElementById('result').innerText = "Bravo, vous avez trouvé un nombre valide !";
    }

}