document.getElementById("submit").onclick = function () {
    var array_tarif = ["bleu","vert","orange","rouge"];

    var age = document.getElementById('age').value;

    var date_permis = document.getElementById('permis').value;
    var duree_permis = 2019 - date_permis;

    var ask_accident = document.getElementById('accident').value;

    var accident = false;
    if(ask_accident == "o"){
        accident = true;
    }
    if(accident){
        var nbre_accident = document.getElementById('nbr-accident').value;
    }

    if(age < 25 && duree_permis < 2 && !accident){
        var index_section = 3;
        document.getElementById('result').innerText = "Votre tarif sera défini selon le barème de la section "+array_tarif[index_section];
        var new_index_section = index_section -= 1;
        document.getElementById('avantage').innerText = "Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème "+array_tarif[new_index_section];
    } else if(age < 25 && duree_permis < 2 && accident){
        document.getElementById('result').innerText = "Votre profil ne nous permet pas de vous assurer";
    } else if(age < 25 && duree_permis >= 2 && !accident ){
        var index_section = 2;
        document.getElementById('result').innerText = "Votre tarif sera défini selon le barème de la section "+array_tarif[index_section];
        var new_index_section = index_section -= 1;
        document.getElementById('avantage').innerText = "Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème "+array_tarif[new_index_section];
    } else if(age >= 25 && duree_permis < 2 && !accident ){
        var index_section = 2;
        document.getElementById('result').innerText = "Votre tarif sera défini selon le barème de la section "+array_tarif[index_section];
        var new_index_section = index_section -= 1;
        document.getElementById('avantage').innerText = "Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème "+array_tarif[new_index_section];
    } else if(age < 25 && duree_permis >= 2 && nbre_accident <= 1){
        var index_section = 3;
        document.getElementById('result').innerText = "Votre tarif sera défini selon le barème de la section "+array_tarif[index_section];
        var new_index_section = index_section -= 1;
        document.getElementById('avantage').innerText = "Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème "+array_tarif[new_index_section];
    } else if(age < 25 && duree_permis >= 2 && nbre_accident > 1){
        document.getElementById('result').innerText = "Votre profil ne nous permet pas de vous assurer";
    } else if(age >= 25 && duree_permis < 2 && nbre_accident <= 1){
        var index_section = 3;
        document.getElementById('result').innerText = "Votre tarif sera défini selon le barème de la section "+array_tarif[index_section];
        var new_index_section = index_section -= 1;
        document.getElementById('avantage').innerText = "Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème "+array_tarif[new_index_section];
    } else if(age >= 25 && duree_permis < 2 && nbre_accident > 1){
        document.getElementById('result').innerText = "Votre profil ne nous permet pas de vous assurer";
    } else if(age >= 25 && duree_permis >= 2 && !accident){
        var index_section = 1;
        document.getElementById('result').innerText = "Votre tarif sera défini selon le barème de la section "+array_tarif[index_section];
        var new_index_section = index_section -= 1;
        document.getElementById('avantage').innerText = "Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème "+array_tarif[new_index_section];
    } else if(age >= 25 && duree_permis >= 2 && nbre_accident <= 1){
        var index_section = 2;
        document.getElementById('result').innerText = "Votre tarif sera défini selon le barème de la section "+array_tarif[index_section];
        var new_index_section = index_section -= 1;
        document.getElementById('avantage').innerText = "Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème "+array_tarif[new_index_section];
    } else if(age >= 25 && duree_permis >= 2 && nbre_accident > 1 && nbre_accident <= 2){
        var index_section = 3;
        document.getElementById('result').innerText = "Votre tarif sera défini selon le barème de la section "+array_tarif[index_section];
        var new_index_section = index_section -= 1;
        document.getElementById('avantage').innerText = "Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème "+array_tarif[new_index_section];
    } else if(age >= 25 && duree_permis >= 2 && nbre_accident >  2){
        document.getElementById('result').innerText = "Votre profil ne nous permet pas de vous assurer";
    }
}