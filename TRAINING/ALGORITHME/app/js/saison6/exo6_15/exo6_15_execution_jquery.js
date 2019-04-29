$('#form').style.display = "none";

$("#submit").click(function () {
    var tx = 1.0275;
    
    var money = parseInt($('#begin-money').val());

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

    $('#form').style.display = "block";
    
    $("#submit-year").click(function () {
           
        var choice_year = $('#year').val();

        function showSaving(array,choice_year){
            var show = 0;
            array.forEach(function(money,year){
                if(choice_year == year){
                    show = money;
                }
            })
         
            $('#result').innerText = "Lors de la fin de la "+choice_year+" ° année, vous aurez accumulé "+show+" € ";
        }
         
        showSaving(array,choice_year);
         
    })
    
})