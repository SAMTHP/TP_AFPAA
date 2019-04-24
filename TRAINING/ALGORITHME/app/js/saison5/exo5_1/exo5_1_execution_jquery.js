$("#submit").click(function () {
    var choice = $('#choice').val();

    if(choice < 1 || choice > 3){
        $('#result').text("Mauvais nombre, essayez encore !");
    } else{
        $('#result').text("Bravo, vous avez trouvé un nombre valide !");
    }
    
})