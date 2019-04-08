// Affichage valeur des boutons sur le display

class Calculatrice
{   

    choice = [];

    Choice() {
        var array = this.choice;

        $('#one').click(function(){

            $('#text').text($('#text').text()+$('#one').text());
            array.push($('#one').text());
           
        })
        
        $('#two').click(function(){
            $('#text').text($('#text').text()+$('#two').text());
            array.push($('#two').text());
        })
        
        $('#three').click(function(){
            $('#text').text($('#text').text()+$('#three').text());
            array.push($('#three').text());
        })
        
        $('#four').click(function(){
            $('#text').text($('#text').text()+$('#four').text());
            array.push($('#four').text());
        })
        $('#five').click(function(){
            $('#text').text($('#text').text()+$('#five').text());
            array.push($('#five').text());
        })
        
        $('#six').click(function(){
            $('#text').text($('#text').text()+$('#six').text());
            array.push($('#six').text());
        })
        
        $('#seven').click(function(){
            $('#text').text($('#text').text()+$('#seven').text());
            array.push($('#seven').text());
        })
        
        $('#eight').click(function(){
            $('#text').text($('#text').text()+$('#eight').text());
            array.push($('#eight').text());
        })
        
        $('#nine').click(function(){
            $('#text').text($('#text').text()+$('#nine').text());
            array.push($('#nine').text());
        })
        
        $('#zero').click(function(){
            $('#text').text($('#text').text()+$('#zero').text());
            array.push($('#zero').text());
        })
        
        $('#add').click(function(){
            $('#text').text($('#add').text());
            array.push($('#add').text());
        })
        
        $('#less').click(function(){
            $('#text').text($('#less').text());
            array.push($('#less').text());
        })
        
        $('#multiply').click(function(){
            $('#text').text($('#multiply').text());
            array.push($('#multiply').text());
        })
        
        $('#divise').click(function(){
            $('#text').text($('#divise').text());
            array.push($('#divise').text());
        })
        
        $('#point').click(function(){
            $('#text').text($('#point').text());
            array.push($('#point').text());
        })
        
        $('#reset').click(function(){
            $('#text').text("0");
        })
    }
    
    getChoice()
    {
        return this.choice;
    }

    operation(array)
    {    
        var result = parseInt(array[0],10)  + parseInt(array[2],10);
        $('#text').text(result);
        console.log(result);
    }
}

var calculatrice = new Calculatrice();
var choice = calculatrice.Choice();

var getChoice = calculatrice.getChoice();


$('#result').click(function(){
    calculatrice.operation(getChoice);
});

$('#reset').click(function(){
    
    calculatrice = new Calculatrice();
    calculatrice.choice = [];
    choice = calculatrice.Choice();
    getChoice = calculatrice.getChoice();
})
