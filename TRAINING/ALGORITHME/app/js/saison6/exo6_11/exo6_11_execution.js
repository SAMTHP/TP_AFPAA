document.getElementById("submit").onclick = function () {
    var array_1 = [];
    var array_2 = [];

    for(var i=1;i<=4;i++){
        array_1.push( parseInt(document.getElementById('tab1_'+i).value));
    }

    for(var i=1;i<=2;i++){
        array_2.push( parseInt(document.getElementById('tab2_'+i).value));
    }

    var toon = 0;

    array_2.forEach(function(num){
        array_1.forEach(function(value){
            toon += num * value;
        })
    })

    document.getElementById('title').innerText = "Le toon sera de :";
    document.getElementById('result').innerText = toon;
}