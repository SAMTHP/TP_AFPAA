document.getElementById('form-submit').style.display = "none";

document.getElementById("submit-total").onclick = function () {

    var total_1 = parseInt(document.getElementById('tab-1').value);
    var total_2 = parseInt(document.getElementById('tab-2').value);

    for(var i = 0; i < total_1; i++){
        var newInput_1 = document.createElement('div');
        newInput_1.id = 'tab-1-num-'+i;
        document.getElementById('form-1').appendChild(newInput_1);
    }

    for(var i = 0; i < total_2; i++){
        var newInput_2 = document.createElement('div');
        newInput_2.id = 'tab-2-num-'+i;
        document.getElementById('form-2').appendChild(newInput_2);
    }

    for(var i = 0; i < total_1; i++){
        var range = i + 1;
        document.getElementById('tab-1-num-'+i).innerHTML = "<table class='table table-dark'><tr><th scope='row'>"+range+"° nombre :</th><td><input type='number' class='form-control' id='tab-1-number-"+i+"'></td><input type='hidden' class='form-control' id='total-1' value='"+total_1+"'></tr></table>";
    }

    for(var i = 0; i < total_2; i++){
        var range = i + 1;
        document.getElementById('tab-2-num-'+i).innerHTML = "<table class='table table-dark'><tr><th scope='row'>"+range+"° nombre :</th><td><input type='number' class='form-control' id='tab-2-number-"+i+"'></td><input type='hidden' class='form-control' id='total-2' value='"+total_2+"'></tr></table>";
    }

    document.getElementById('title-tab-1').innerHTML = "<h5> TABLEAU 1 : </h5>";
    document.getElementById('title-tab-2').innerHTML = "<h5> TABLEAU 2 : </h5>";
    document.getElementById('form-submit').style.display = "block";

}


document.getElementById("submit-form").onclick = function () {

    var total_1 = parseInt(document.getElementById('total-1').value);
    var total_2 = parseInt(document.getElementById('total-2').value);

    var a1 = [];
    var a2 = [];
    var a3 = [];

    for( var i=0;i<total_1;i++){
        a1.push(parseInt(document.getElementById('tab-1-number-'+i).value));
    }

    for( var i=0;i<total_2;i++){
        a2.push(parseInt(document.getElementById('tab-2-number-'+i).value));
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
        
    function dump(obj) {
        var out = '';
        for (var i in obj) {
            out += " ["+i+"]" + " => " + typeof(obj[i]) +" <span style='color:red;'>'"+ obj[i] + "'</span> (length="+obj[i].toString().length+")\n";
        }
    
        var pre = document.createElement('pre');
        pre.innerHTML = out;
        document.getElementById('result').appendChild(pre)
    }

    var total_index = a3.length;
    
    document.getElementById('title-tab-3').innerHTML = "<h5> TABLEAU 3 : </h5>";
    document.getElementById('dump').innerHTML = "<i>array (size="+total_index+")</i>";
    dump(a3);
}