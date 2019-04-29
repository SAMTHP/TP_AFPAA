document.getElementById('form').style.display = "none";

document.getElementById("submit").onclick = function () {
    
    var tx = 1.0275;
    
    var money = parseInt(document.getElementById('begin-money').value);

    var array_saving = [];

    function generateSaving(tx,money,array_saving){
        new_money = money;

        for(var i=0;i<20;i++){
            new_money *= tx;
            array_saving[i+1] = new_money;
        }

        return array_saving;
    }

    var array = generateSaving(tx,money,array_saving);

    document.getElementById('form').style.display = "block";
    
    document.getElementById("submit-year").onclick = function () {
           
        var choice_year = document.getElementById('year').value;

        function showSaving(array,choice_year){
            var show = 0;
            array.forEach(function(money,year){
                if(choice_year == year){
                    show = money;
                }
            })
         
            document.getElementById('result').innerText = "Lors de la fin de la "+choice_year+" ° année, vous aurez accumulé "+show+" € ";
        }
         
        showSaving(array,choice_year);
         
    }

}

