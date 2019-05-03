
$("#submit").click(function () {

    var tab = [];

    for(var i=1;i<=6;i++){
        tab.push(parseInt($('#num-'+i).val()));
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

    $('#max').text("Valeur max : "+max);
    $('#min').text("Valeur min : "+min);
    $('#gap').text("Ecart le plus grand : "+gap);
})
