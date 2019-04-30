document.getElementById("result").style.display = "none";

document.getElementById("submit").onclick = function () {

    var array = [];

    for(var i=0;i<10;i++){
        array.push(document.getElementById('index-'+i).value);
    }
    console.log(array);
    var index = (array.length)-1;
    array.forEach(function (value){
        console.log(value);
        array[index] = value;
        index--;
    })

    for(var i=0;i<10;i++){
        document.getElementById("i-"+i).innerText = array[i];
    }

    document.getElementById("result").style.display = "block";

}

