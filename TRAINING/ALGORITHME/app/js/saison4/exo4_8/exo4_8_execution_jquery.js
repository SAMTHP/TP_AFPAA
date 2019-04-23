$("#submit").click(function () {
    var day = $('#day').val();

    var month = $('#month').val();

    var year = $('#year').val();

    // ANALYZE OF YEAR IN ORDER TO KNOW IF IS LEAP YEAR OR NO
    function analyzeYear(year){
        var flag = false;

        if(year % 4 == 0 && year % 100 != 0){
            flag = true;
        } else if(year % 400 == 0){
            flag = true;
        } else{
            flag = false;
        }
        return flag;
    }

    function dateValidation(month,day,flag){
        if(flag){
            if(month == 2 && day <= 29){
                $('#result').text("La date est valide");
            } else if(month == 2 && day > 29){
                $('#result').text("La date est non valide");
            } else {
                $('#result').text("La date est valide");
            }
        } else {
            if(month == 2 && day <= 28){
                $('#result').text("La date est valide");
            } else if(month == 2 && day > 28){
                $('#result').text("La date est non valide");
            } else {
                $('#result').text("La date est valide");
            }
        }
    }

    var flag = analyzeYear(year);
    dateValidation(month,day,flag);
})