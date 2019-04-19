document.getElementById("submit").onclick = function () {
    // Choice
    var choice = document.getElementById("choice").value;

    // Set result
    if(choice < 0){
        document.getElementById("result").innerText = "Votre nombre est négatif";
    }else if(choice > 0){
        document.getElementById("result").innerText = "Votre nombre est positif";
    }else if(choice == 0){
        document.getElementById("result").innerText = "Pas compris :(";
    }
}