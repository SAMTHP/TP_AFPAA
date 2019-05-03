$('#form-submit').hide();

$("#submit-total").click(function () {

    var total_1 = parseInt($('#tab-1').val());
    var total_2 = parseInt($('#tab-2').val());

    for(var i = 0; i < total_1; i++){
        var newInput = $("<div id='tab-1-num-"+i+"'></div>");
        newInput.appendTo($('#form-1'));
    }

    for(var i = 0; i < total_2; i++){
        var newInput = $("<div id='tab-2-num-"+i+"'></div>");
        newInput.appendTo($('#form-2'));
    }

    for(var i = 0; i < total_1; i++){
        var range = i + 1;
        $('#tab-1-num-'+i).html("<table class='table table-dark'><tr><th scope='row'>"+range+"° nombre :</th><td><input type='number' class='form-control' id='tab-1-number-"+i+"'></td><input type='hidden' class='form-control' id='total-1' value='"+total_1+"'></tr></table>");
    }

    for(var i = 0; i < total_2; i++){
        var range = i + 1;
        $('#tab-2-num-'+i).html("<table class='table table-dark'><tr><th scope='row'>"+range+"° nombre :</th><td><input type='number' class='form-control' id='tab-2-number-"+i+"'></td><input type='hidden' class='form-control' id='total-2' value='"+total_2+"'></tr></table>");
    }

    $('#title-tab-1').html("<h5> TABLEAU 1 : </h5>");
    $('#title-tab-2').html("<h5> TABLEAU 2 : </h5>");

    $('#form-submit').show();

    
})


$("#submit-form").click(function () {

    var total_1 = parseInt($('#total-1').val());
    var total_2 = parseInt($('#total-2').val());

    var a1 = [];
    var a2 = [];
    var a3 = [];

    for( var i=0;i<total_1;i++){
        a1.push(parseInt($('#tab-1-number-'+i).val()));
    }

    for( var i=0;i<total_2;i++){
        a2.push(parseInt($('#tab-2-number-'+i).val()));
    }

    var c1 = a1.length;
    var c2 = a2.length;

    var max = 0;

    if(c1 > c2){
        max = c1;
    }else {
        max = c2;
    }

    for(var i=0; i < max; i++){
        if(i < c1){
            a3[i] = a1[i];
        }
        if(i < c2){
            a3[(i + c2)-1] = a2[i];
        }
    }

    console.log(a3);

    function dump(obj) {
        var out = '';
        for (var i in obj) {
            out += " ["+i+"]" + " => " + typeof(obj[i]) +" <span style='color:red;'>'"+ obj[i] + "'</span> (length="+obj[i].toString().length+")\n";
        }

        var pre = $("<pre>"+out+"</pre>");
        pre.appendTo($('#result'));
    }

    var total_index = total_1+total_2;
    
    $('#title-tab-3').html("<h5> TABLEAU 3 : </h5>");
    $('#dump').html("<i>array (size="+total_index+")</i>");
    dump(a3);

})