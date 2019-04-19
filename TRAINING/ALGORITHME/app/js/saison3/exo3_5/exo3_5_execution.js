document.getElementById("submit").onclick = function () {
    // Choice
    var choice1 = document.getElementById("choice1").value;
    var choice2 = document.getElementById("choice2").value;

    // Set result
    if((choice1 * choice2) < 0){
        document.getElementById("result").innerText = "Le produit des deux nombres est négatif";
    }else if((choice1 * choice2) > 0){
        document.getElementById("result").innerText = "Le produit des deux nombres est positif";
    }else if((choice1 * choice2) == 0){
        document.getElementById("result").innerText = "Le produit des deux nombres est nul";
    }
}