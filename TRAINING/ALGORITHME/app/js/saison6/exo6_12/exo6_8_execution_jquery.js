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

    var array_nums = [];

    for( var i=0;i<total;i++){
        array_nums.push(parseInt($('#number-'+i).val()));
    }

    var positif = 0;
    var negatif = 0;

    array_nums.forEach(function(num){
        if(num < 0){
            negatif += 1;
        }else{
            positif += 1;
        }
    })

    $('#result-negatif').text("Vous avez entré "+negatif+" valeur(s) négative(s)");
    $('#result-positif').text("Vous avez entré "+positif+" valeur(s) positive(s)");

})