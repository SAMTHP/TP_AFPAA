$("#submit").click(function(){
    var choice = $("#choice").val();
    var num_carre = choice * choice;

    $("#result").html("<h2>Résultat :</h2>"+choice+" au carré donne : "+num_carre+"</p>");
})