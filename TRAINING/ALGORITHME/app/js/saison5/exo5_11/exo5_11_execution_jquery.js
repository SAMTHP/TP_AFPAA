$("#submit").click(function () {

    var n = $('#n').val();
    var p = $('#p').val();

    var nf = 1;
    for(var i=1; i <=n; i++){
        nf *= i;
    }

    var pf = 1;
    for(var i=1; i <= p; i++){
        pf *= i;
    }

    var n_less_pf = 1;
    for(var i=1; i <=(n-p); i++){
        n_less_pf *= i;
    }

    var x = nf / n_less_pf;
    var y = nf / (pf * n_less_pf);

    $('#x').text("Dans l'ordre :  une chance sur " + x + " de gagner");
    $('#y').text("Dans le désordre :  une chance sur " + y + " de gagner");

})
