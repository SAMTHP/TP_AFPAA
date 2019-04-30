$("#result").hide();

$("#submit-1").click(function () {

    var array = [];

    for(var i=0;i<10;i++){
        array.push(parseInt($('#index-'+i).val()));
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
        $("#i-"+i).text(array[i]);
    }

    $("#result").show();

    $("#title").text("TRI PAR SELECTION");
})

$("#submit-2").click(function () {
    
    var array2 = [];

    for(var i=0;i<10;i++){
        array2.push(parseInt($('#index-'+i).val()));
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
        $("#i-"+i).text(array2[i]);
    }

    $("#result").show();

    $("#title").text("TRI A BULLE");
})