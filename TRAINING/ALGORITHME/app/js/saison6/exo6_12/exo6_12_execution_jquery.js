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
        array_nums.push(parseInt($('#number-'+i).val())+1);
    }

    for(var i = 0; i < total; i++){
        var newInput = $("<div id='int-"+i+"'></div>");
        newInput.appendTo('#result');
    }

    for(var i = 0; i < total; i++){
        var range = i + 1;
        $('#int-'+i).html("<table class='table table-dark'><tr><th scope='row'>"+range+"° nombre :</th><td>"+array_nums[i]+"</td></tr></table>");
    }

})