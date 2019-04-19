$("#submit").click(function () {
    var name_1 = $("#choice1").val();
    var name_2 = $("#choice2").val();
    var name_3 = $("#choice3").val();

    var array_names = [];

    array_names.push(name_1, name_2, name_3);

    var array_sort_names = [];

    array_sort_names.push(name_1, name_2, name_3);

    array_sort_names.sort();

    if(array_sort_names[0] == array_names[0] && array_sort_names[1] == array_names[1] && array_sort_names[2] == array_names[2]){
        $("#result").text("Vos noms sont rangés par ordre alphabétique");
    } else {
        $("#result").text("Vos noms ne sont pas rangés par ordre alphabétique");
    }
})