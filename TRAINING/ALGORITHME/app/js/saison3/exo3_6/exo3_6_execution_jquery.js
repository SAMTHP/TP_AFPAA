$("#submit").click(function () {
    var age = $("#choice").val();

    if(age >= 6 && age <= 7){
        $("#result").text("Vous êtes poussin");
    }else if(age >= 8 && age <= 9){
        $("#result").text("Vous êtes pupille");
    }else if(age >= 10 && age <= 11){
        $("#result").text("Vous êtes minime");
    }else if(age >= 12){
        $("#result").text("Vous êtes cadet");
    }else{
        $("#result").text("Vous êtes un babyyyyyy !!!");
    }
})