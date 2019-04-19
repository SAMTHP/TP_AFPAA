document.getElementById("submit").onclick = function () {
    var name_1 = document.getElementById("choice1").value;
    var name_2 = document.getElementById("choice2").value;
    var name_3 = document.getElementById("choice3").value;

    var array_names = [];

    array_names.push(name_1, name_2, name_3);

    var array_sort_names = [];

    array_sort_names.push(name_1, name_2, name_3);

    array_sort_names.sort();

    if(array_sort_names[0] == array_names[0] && array_sort_names[1] == array_names[1] && array_sort_names[2] == array_names[2]){
        document.getElementById("result").innerText = "Vos noms sont rangés par ordre alphabétique";
    } else {
        document.getElementById("result").innerText = "Vos noms ne sont pas rangés par ordre alphabétique";
    }
}