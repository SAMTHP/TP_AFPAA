document.getElementById("submit").onclick = function () {

    var tab = [];

    for(var i=1;i<=6;i++){
        tab.push(parseInt(document.getElementById('num-'+i).value));
    }

    var min = tab[0];
    var max = tab[0];

    for(var i=0;i<(tab.length)-1;i++){
        if(tab[i] < min){
            min = tab[i];
        } else if(tab[i] > max){
            max = tab[i];
        }
    }

    var gap = max - min;

    document.getElementById('max').innerText = "Valeur max : "+max;
    document.getElementById('min').innerText = "Valeur min : "+min;
    document.getElementById('gap').innerText = "Ecart le plus grand : "+gap;
   
}
