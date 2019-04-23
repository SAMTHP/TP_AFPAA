document.getElementById("submit").onclick = function () {
    var candidat_1 = document.getElementById('score-1').value;

    var candidat_2 = document.getElementById('score-2').value;

    var candidat_3 = document.getElementById('score-3').value;

    var candidat_4 =  document.getElementById('score-4').value;
    
    if(candidat_1 >= 50){
        document.getElementById('result').innerText = "Le premier candidat a obtenu "+candidat_1+" % des voix et est donc élu dès le premier tour !";
    } else if(candidat_1 < 12.5 ){
        document.getElementById('result').innerText = "Le premier candidat est battu car il a obtenu moins de 12.5 voix (Voix collectées : "+candidat_1+")";
    } else if (candidat_1 > candidat_4 && candidat_1 > candidat_3 && candidat_1 > candidat_4 ){
        document.getElementById('result').innerText = "Le premier candidat est retenu pour le second tour et se trouve être le favoris";
    } else{
        document.getElementById('result').innerText = "Le premier candidat est retenu pour le second tour et se trouve être dans une position défavorable";
    }
}