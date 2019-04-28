$("#submit").click(function () {
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

    var sum = 0;

    array_notes_convert.forEach(function(note){
        sum += note;
    })

    moyenne = sum / array_notes_convert.length;

    $('#title').html("<h6>Moyenne générale : </h6>");
    $('#result').text("Votre moyenne est de " + moyenne + "/20");
    
})