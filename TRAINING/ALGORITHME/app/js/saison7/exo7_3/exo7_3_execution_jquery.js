$("#result").hide();

$("#submit").click(function () {

    var array = [];

    for(var i=0;i<10;i++){
        array.push($('#index-'+i).val());
    }

    var last_index = (array.length-1);
    var first_index = 0;
    var middle = array.length / 2;
    
    array.forEach(function (num){
        if(first_index < middle){
            temp = array[last_index];
            array[last_index] = num;
            array[first_index] = temp;
            last_index--;
           first_index++;
        }
    })

    for(var i=0;i<10;i++){
        $("#i-"+i).text(array[i]);
    }

    $("#result").show();
})
