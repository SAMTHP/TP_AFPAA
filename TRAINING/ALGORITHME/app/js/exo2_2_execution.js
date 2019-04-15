document.getElementById("submit").onclick = function(){
    var choice = document.getElementById("choice").value;
    var num_carre = choice * choice;
    
    document.getElementById("result").innerHTML = "<h2>Résultat :</h2>"+choice+" au carré donne : "+num_carre+"</p>";
};
