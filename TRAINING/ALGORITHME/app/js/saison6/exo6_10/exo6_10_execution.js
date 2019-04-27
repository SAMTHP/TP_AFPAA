document.getElementById("title").style.display = "none";
document.getElementById("result").style.display = "none";

document.getElementById("submit").onclick = function () {
    var array_1 = [];
    var array_2 = [];
    var array_3 = [];

    for(var i=1;i<=9;i++){
        array_1.push( parseInt(document.getElementById('tab1_'+i).value));
        array_2.push( parseInt(document.getElementById('tab2_'+i).value));
        
        document.getElementById('t1_'+i).innerText = document.getElementById('tab1_'+i).value;
        document.getElementById('t2_'+i).innerText = document.getElementById('tab2_'+i).value;

    }

    for(var i=0;i<array_1.length;i++){
        array_3[i] = array_1[i] + array_2[i];
    }

    var range = 1;
    array_3.forEach(function(sum){
        document.getElementById('s_'+range).innerText = sum;
        range += 1;
    })

    document.getElementById("title").style.display = "block";
    document.getElementById("result").style.display = "block";

}