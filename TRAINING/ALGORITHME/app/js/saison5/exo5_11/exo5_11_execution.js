document.getElementById('submit').onclick = function () {

    var n = document.getElementById('n').value;
    var p = document.getElementById('p').value;

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
    var y = x / pf;

    document.getElementById('x').innerText = "Dans l'ordre :  une chance sur " + x + " de gagner";
    document.getElementById('y').innerText = "Dans le désordre :  une chance sur " + y + " de gagner";

}
        
    
    
    
