$("#submit").click(function () {
    var array_1 = [];
    var array_2 = [];

    for(var i=1;i<=4;i++){
        array_1.push( parseInt($('#tab1_'+i).val()));
    }

    for(var i=1;i<=2;i++){
        array_2.push( parseInt($('#tab2_'+i).val()));
    }

    var toon = 0;

    array_2.forEach(function(num){
        array_1.forEach(function(value){
            toon += num * value;
        })
    })

    $("#title").text("Le toon sera de :");
    $("#result").text(toon);
    
})