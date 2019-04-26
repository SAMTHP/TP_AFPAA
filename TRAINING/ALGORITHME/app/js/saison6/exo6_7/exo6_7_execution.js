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

    var array_notes_convert = Object.values(array_notes);

    var sum = 0;

    array_notes_convert.forEach(function(note){
        sum += note;
    })

    moyenne = sum / array_notes_convert.length;
    
    document.getElementById('title').innerHTML = "<h6>Moyenne générale : </h6>";
    document.getElementById('result').innerText = "Votre moyenne est de " + moyenne + "/20";

}