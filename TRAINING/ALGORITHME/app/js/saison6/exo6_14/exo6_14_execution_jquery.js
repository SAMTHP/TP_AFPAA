$("#submit").click(function () {
    var moyenne_classe = 14;

    var array_notes = {
        PHP: parseInt($('#php').val()),
        JS: parseInt($('#js').val()),
        JQUERY: parseInt($('#jquery').val()),
        HTML: parseInt($('#html').val()),
        CSS: parseInt($('#css').val()),
        SQL: parseInt($('#sql').val()),
        UML: parseInt($('#uml').val()),
        REACT: parseInt($('#react').val()),
        NODE: parseInt($('#node').val())
    };

    var array_notes_convert = Object.values(array_notes);

    var course = "";
    var sentence = "";
    var diff = 0;

    array_notes_convert.forEach(function(note, cursus){
        if(cursus == 0){
            course = "PHP";
        } else if(cursus == 1){
            course = "JS";
        } else if(cursus == 2){
            course = "JQUERY";
        } else if(cursus == 3){
            course = "HTML";
        } else if(cursus == 4){
            course = "CSS";
        } else if(cursus == 5){
            course = "SQL";
        } else if(cursus == 6){
            course = "UML";
        } else if(cursus == 7){
            course = "REACT";
        } else if(cursus == 8){
            course = "NODE";
        }

        diff = note - moyenne_classe;
        
        if(note > moyenne_classe){
            sentence += "Votre note de <strong>" + course + "</strong> est supérieur a la moyenne de classe, avec une différence de " + diff + " ! <br><hr>";
        }
        
    })

    $('#result').html(sentence);
    
})