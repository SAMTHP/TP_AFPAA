$("#submit").click(function () {
    var array_tarif = ["bleu","vert","orange","rouge"];

    var age = $('#age').val();

    var date_permis = $('#permis').val();
    var duree_permis = 2019 - date_permis;

    var ask_accident = $('#accident').val();

    var accident = false;
    if(ask_accident == "o"){
        accident = true;
    }
    if(accident){
        var nbre_accident = $('#nbr-accident').val();
    }

    if(age < 25 && duree_permis < 2 && !accident){
        var index_section = 3;
        $('#result').text("Votre tarif sera défini selon le barème de la section "+array_tarif[index_section]);
        var new_index_section = index_section -= 1;
        $('#avantage').text("Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème "+array_tarif[new_index_section]);
    } else if(age < 25 && duree_permis < 2 && accident){
        $('#result').text("Votre profil ne nous permet pas de vous assurer");
    } else if(age < 25 && duree_permis >= 2 && !accident ){
        var index_section = 2;
        $('#result').text("Votre tarif sera défini selon le barème de la section "+array_tarif[index_section]);
        var new_index_section = index_section -= 1;
        $('#avantage').text("Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème "+array_tarif[new_index_section]);
    } else if(age >= 25 && duree_permis < 2 && !accident ){
        var index_section = 2;
        $('#result').text("Votre tarif sera défini selon le barème de la section "+array_tarif[index_section]);
        var new_index_section = index_section -= 1;
        $('#avantage').text("Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème "+array_tarif[new_index_section]);
    } else if(age < 25 && duree_permis >= 2 && nbre_accident <= 1){
        var index_section = 3;
        $('#result').text("Votre tarif sera défini selon le barème de la section "+array_tarif[index_section]);
        var new_index_section = index_section -= 1;
        $('#avantage').text("Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème "+array_tarif[new_index_section]);
    } else if(age < 25 && duree_permis >= 2 && nbre_accident > 1){
        $('#result').text("Votre profil ne nous permet pas de vous assurer");
    } else if(age >= 25 && duree_permis < 2 && nbre_accident <= 1){
        var index_section = 3;
        $('#result').text("Votre tarif sera défini selon le barème de la section "+array_tarif[index_section]);
        var new_index_section = index_section -= 1;
        $('#avantage').text("Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème "+array_tarif[new_index_section]);
    } else if(age >= 25 && duree_permis < 2 && nbre_accident > 1){
        $('#result').text("Votre profil ne nous permet pas de vous assurer");
    } else if(age >= 25 && duree_permis >= 2 && !accident){
        var index_section = 1;
        $('#result').text("Votre tarif sera défini selon le barème de la section "+array_tarif[index_section]);
        var new_index_section = index_section -= 1;
        $('#avantage').text("Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème "+array_tarif[new_index_section]);
    } else if(age >= 25 && duree_permis >= 2 && nbre_accident <= 1){
        var index_section = 2;
        $('#result').text("Votre tarif sera défini selon le barème de la section "+array_tarif[index_section]);
        var new_index_section = index_section -= 1;
        $('#avantage').text("Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème "+array_tarif[new_index_section]);
    } else if(age >= 25 && duree_permis >= 2 && nbre_accident > 1 && nbre_accident <= 2){
        var index_section = 3;
        $('#result').text("Votre tarif sera défini selon le barème de la section "+array_tarif[index_section]);
        var new_index_section = index_section -= 1;
        $('#avantage').text("Dans cinq ans votre tarif sera plus avantageux, et sera dans le barème "+array_tarif[new_index_section]);
    } else if(age >= 25 && duree_permis >= 2 && nbre_accident >  2){
        $('#result').text("Votre profil ne nous permet pas de vous assurer");
    }
})