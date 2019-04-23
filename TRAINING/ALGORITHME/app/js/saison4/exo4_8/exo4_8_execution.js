document.getElementById("submit").onclick = function () {
    var day = document.getElementById('day').value;

    var month = document.getElementById('month').value;

    var year = document.getElementById('year').value;

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
                document.getElementById('result').innerText = "La date est valide";
            } else if(month == 2 && day > 29){
                document.getElementById('result').innerText = "La date est non valide";
            } else {
                document.getElementById('result').innerText = "La date est valide";
            }
        } else {
            if(month == 2 && day <= 28){
                document.getElementById('result').innerText = "La date est valide";
            } else if(month == 2 && day > 28){
                document.getElementById('result').innerText = "La date est non valide";
            } else {
                document.getElementById('result').innerText = "La date est valide";
            }
        }
    }

    var flag = analyzeYear(year);
    dateValidation(month,day,flag);
}