// Section A
$("#submit").click(function () {
    var choice = $('#choice').val();
    if(choice < 10 || choice > 20){
        if(choice < 10 ){
            $('#result').text("Plus grand !");
            
        } else if(choice > 20){
            $('#result').text("Plus petit !");
            
        } 
    } else {
        $('#result').text("Bravo, vous avez trouvé un nombre valide !");
    }

})

// Section B
var random = Math.floor(Math.random() * 101) + 1;
var e = 1;

$("#submit-b").click(function () {
    var choice_2 = $('#choice-b').val();

    if(choice_2 != random){
        if(choice_2 < random ){
            $('#result-b').text("Plus grand !");
        }else if(choice_2 > random){
            $('#result-b').text("Plus petit !");
        }
        e += 1;
    } else {
        $('#result-b').text("Bravo, vous avez trouvé le nombre valide au bout du "+e+" ° coup(s)!");
    }
})