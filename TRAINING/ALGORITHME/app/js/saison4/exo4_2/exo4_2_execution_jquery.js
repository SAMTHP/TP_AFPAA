$("#submit").click(function () {
    var hour = parseInt($('#hour').val());
    var min = parseInt($('#minutes').val());
    console.log(hour,min);
    function generateFuture(hour,min){
        var new_min = min + 1;
        var array_future = [];
        
        if(new_min >= 60){
            var rest = new_min - 60;
            
            var new_hour = hour += 1;
            if(new_hour == 24){
                new_hour = 0;
            } else if (new_hour > 24){
                new_hour = 1;
            }
            array_future.push(new_hour, rest);
        } else {
            array_future.push(hour, new_min);
        }
        return array_future;
    }

    function showNewHour(array){

        if(array[1] < 10){
            if(array[0] < 10) {
                $("#result").html("<strong>Dans une minute il sera :</strong><br>" + "0" + array[0] + "H" + "0" + array[1]);
            } else {
                $("#result").html("<strong>Dans une minute il sera :</strong><br>" + array[0] + "H" + "0" + array[1]);
            }
        } else {
            $("#result").html("<strong>Dans une minute il sera :</strong><br>" + array[0] + "H" + array[1]);
        }
    }

    var array_future = generateFuture(hour,min);
    showNewHour(array_future);
    
})