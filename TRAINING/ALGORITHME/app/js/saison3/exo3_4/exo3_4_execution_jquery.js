$("#submit").click(function () {
    // Choice
    var choice = $("#choice").val();

    // Set result
    if(choice < 0){
        $("#result").text("Votre nombre est négatif");
    }else if(choice > 0){
        $("#result").text("Votre nombre est positif");
    }else if(choice == 0){
        $("#result").text("Votre nombre est nul");
    }
})