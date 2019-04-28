$("#title").hide();
$("#result").hide();

$("#submit").click(function () {
    var array_1 = [];
    var array_2 = [];
    var array_3 = [];

    for(var i=1;i<=9;i++){
        array_1.push( parseInt($('#tab1_'+i).val()));
        array_2.push( parseInt($('#tab2_'+i).val()));
        
        $('#t1_'+i).text($('#tab1_'+i).val());
        $('#t2_'+i).text($('#tab2_'+i).val());

    }

    for(var i=0;i<array_1.length;i++){
        array_3[i] = array_1[i] + array_2[i];
    }

    var range = 1;
    array_3.forEach(function(sum){
        $('#s_'+range).text(sum);
        range += 1;
    })

    $("#title").show();
    $("#result").show();
    
})