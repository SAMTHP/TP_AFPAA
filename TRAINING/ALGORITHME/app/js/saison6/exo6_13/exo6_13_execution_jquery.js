$('#form-submit').hide();

$("#submit").click(function () {

    var total = parseInt($('#choice').val());

    for(var i = 0; i < total; i++){
        var newInput = $("<div id='num-"+i+"'></div>");
        newInput.appendTo($('#form'));

    }

    for(var i = 0; i < total; i++){
        var range = i + 1;
        $('#num-'+i).html("<table class='table table-dark'><tr><th scope='row'>"+range+"° nombre :</th><td><input type='number' class='form-control' id='number-"+i+"'></td><input type='hidden' class='form-control' id='total' value='"+total+"'></tr></table>");
    }

    $('#form-submit').show();

    
})


$("#submit-form").click(function () {

    var total = $('#total').val();

    var array_num = [];

    for( var i=0;i<total;i++){
        array_num.push(parseInt($('#number-'+i).val()));
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

    $("#result-max").text("La valeur la plus haute que vous avez renseigné est "+max+".");

    array_num.forEach(function(value, key){
        if(value == max){
            pos = key + 1;
            $("#result-position").text("Ce nombre a été saisi à la "+ pos +"° position.");
        }
    })

})