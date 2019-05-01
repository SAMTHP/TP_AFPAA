$("#result").hide();

$("#submit").click(function () {

    var tab = ["126","159","355","678"];

    var element = $('#element').val();

    var flag = false;

    for(var i=0;i<tab.length;i++){
        if(tab[i] == element){
            tab.splice(i,1);
            flag = true;
        }
    }

    var indexTab = tab.keys();
    
    for(var i = 0; i<tab.length;i++){
        var newElement = $("<tr id='elem-"+i+"'></tr>");
        newElement.appendTo($('#show'));
    }

    var e = 0;

    for(let val of indexTab){
        $('#elem-'+e).html("<th scope='row'>"+val+"</th><td>"+tab[e]+"</td>");
        e++;
    }

    if(flag){
        $("#result").show();
    } else {
        var message = "La valeur que vous avez demandé n'existe pas";
        $('#error').html("<strong>"+message+"</strong>");
        $("#result").hide();
    }
})
