document.getElementById("submit").onclick = function () {
    // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LE NOMBRE
    var num = parseInt(document.getElementById('num').value);

    // TEST SI LE NOMBRE EST IMPAIR
    if(num % 2 == 0){
        // AFFICHAGE DU RESULTAT
        document.getElementById('result').innerHTML = "Ce nombre est pair";
    }else{
        // AFFICHAGE DU RESULTAT
        document.getElementById('result').innerHTML =  "Ce nombre est impair";
    }
    
}