$("#submit").click(function () {
    var array_num = [];

    for(var i=1;i<=20;i++){
        var num = $("#choice-"+i).val();
        array_num.push(num);
    }

    var max = 0;

    for(var i=0; i<array_num.length;i++){
        if(i > 0 && (array_num[i] > array_num[i-1]) ){
            if(max > array_num[i]){
                max = max;
            } else {
                max = array_num[i];
            }
        }else if(i > 0 && array_num[i-1] > array_num[i]){
            if(max > array_num[i-1]){
                max = max;
            } else {
                max = array_num[i-1];
            }
        }
    }

    $("#result").text("La valeur la plus haute que vous avez renseigné est "+max+".");

    array_num.forEach(function(value, key){
        if(value == max){
            pos = key + 1;
            $("#result-pos").text("Ce nombre a été saisi à la "+ pos +"° position.");
        }
    })
    
})