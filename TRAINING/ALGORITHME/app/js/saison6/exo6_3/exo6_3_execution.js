document.getElementById("submit").onclick = function () {
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

    document.getElementById('title').innerHTML = "<h6>Affichage du tableau contenant les notes : </h6>";
    document.getElementById('result').innerText = Object.entries(array_notes);

}