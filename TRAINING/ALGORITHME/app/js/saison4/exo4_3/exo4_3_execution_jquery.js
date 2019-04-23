$("#submit").click(function () {
    var hour = parseInt($('#hour').val());
    var min = parseInt($('#minutes').val());
    var sec = parseInt($('#secondes').val());

    function generateFuture(hour,min,sec){
        var new_sec = sec + 1;
        var array_future = [];
    
        if(new_sec >= 60){
            var rest = new_sec - 60;
            var new_min = min += 1;
            if(new_min == 60){
                new_min = 0;
                hour += 1;
            } else if(new_min > 60){
                new_min = 1;
                hour += 1;
            }
            array_future.push(hour,new_min,rest);
        } else {
            array_future.push(hour,min,new_sec);
        }
        return array_future;
    }
    
    function showNewHour(array){
        $('#sentence-result').text("Dans une seconde il sera : ");
        if(array[2] < 10){
            if(array[1] < 10 && array[0] < 10) {
                $('#result').text("0"+array[0]+":"+"0"+array[1]+":0"+array[2]);
            } else if(array[1] < 10){
                $('#result').text(array[0]+":"+"0"+array[1]+":0"+array[2]);
            } else if(array[0] < 10){
                $('#result').text("0"+array[0]+":"+array[1]+":0"+array[2]);
            }else {
                $('#result').text(array[0]+":"+array[1]+":0"+array[2]);
            }
        } else if(array[0] < 10){
            $('#result').text("0"+array[0]+":"+array[1]+":"+array[2]);
        } else if(array[1] < 10){
            $('#result').text(array[0]+":"+"0"+array[1]+":"+array[2]);
        } else {
            $('#result').text(array[0]+":"+array[1]+":"+array[2]);
        }
    }
    
    array_future = generateFuture(hour,min,sec);
    showNewHour(array_future);
    
})