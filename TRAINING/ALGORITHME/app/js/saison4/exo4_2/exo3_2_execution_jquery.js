$("#submit").click(function () {
    // Choice
    var choice1 = $("#choice1").val();
    var choice2 = $("#choice2").val();

    // Set result
    if((choice1 * choice2) < 0){
        $("#result").text("Le produit des deux nombres est négatif");
    }else if((choice1 * choice2) > 0){
        $("#result").text("Le produit des deux nombres est positif");
    }else if((choice1 * choice2) == 0){
        $("#result").text("Pas compris :(");
    }
})