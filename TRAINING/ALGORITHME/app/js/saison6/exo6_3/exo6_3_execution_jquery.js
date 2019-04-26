$("#submit").click(function () {
    var array_notes = {
        PHP: parseInt(document.getElementById('php').value),
        JS: parseInt(document.getElementById('js').value),
        JQUERY: parseInt(document.getElementById('jquery').value),
        HTML: parseInt(document.getElementById('html').value),
        CSS: parseInt(document.getElementById('css').value),
        SQL: parseInt(document.getElementById('sql').value),
        UML: parseInt(document.getElementById('uml').value),
        REACT: parseInt(document.getElementById('react').value),
        NODE: parseInt(document.getElementById('node').value)
    };

    $('#title').html("<h6>Affichage du tableau contenant les notes : </h6>");
    $('#result').text(Object.entries(array_notes));
    
})