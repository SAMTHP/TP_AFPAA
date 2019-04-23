$("#submit").click(function () {
    var age = $('#age').val();
    var sexe = $('#gender').val();
    console.log(age,sexe);
    if(sexe == "h" && age >= 20){
        $('#result').text("Vous êtes imposable !");
    } else if(sexe == "f" && age >= 18 && age <= 35){
        $('#result').text("Vous êtes imposable !");
    } else {
        $('#result').text("Vous n'êtes pas imposable !");
    }
})