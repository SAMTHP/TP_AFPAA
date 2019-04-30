document.getElementById("result").style.display = "none";

document.getElementById("submit-1").onclick = function () {

    var array = [];

    for(var i=0;i<10;i++){
        array.push(parseInt(document.getElementById('index-'+i).value));
    }

    // TRI PAR INSERTION :

    // BOUCLE PRINCIPALE : LE POINT DE DEPART SE DECALE A CHAQUE TOUR
    for(var i=0;i<array.length;i++){
        posmini = i;

        for(var j=i+1;j<array.length;j++){ 
                if(array[j] > array[posmini]){
                    posmini = j;
                }
        }

        temp = array[posmini];
        array[posmini] = array[i];
        array[i] = temp;
    }

    for(var i=0;i<10;i++){
        document.getElementById("i-"+i).innerText = array[i];
    }

    document.getElementById("result").style.display = "block";

    document.getElementById("title").innerText = "TRI PAR SELECTION";
}

document.getElementById("submit-2").onclick = function () {
    
    var array2 = [];

    for(var i=0;i<10;i++){
        array2.push(parseInt(document.getElementById('index-'+i).value));
    }
    
    // TRI A BULLE :

    flag = true;
    // TANT QUE LE DRAPEAU EST VRAI
    while(flag){
        flag = false;
        for(var i=0;i<(array2.length)-1;i++){
                if(array2[i] < array2[i+1]){
                    temp2 = array2[i];
                    array2[i] = array2[i+1];
                    array2[i+1] = temp2;
                    flag = true;
                }
        }
    }
    
    for(var i=0;i<10;i++){
        document.getElementById("i-"+i).innerText = array2[i];
    }

    document.getElementById("result").style.display = "block";
    
    document.getElementById("title").innerText = "TRI A BULLE";
}