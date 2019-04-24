// Section A
document.getElementById("submit").onclick = function () {
        var choice = document.getElementById('choice').value;
        if(choice < 10 || choice > 20){
            if(choice < 10 ){
                document.getElementById('result').innerText = "Plus grand !";
                
            } else if(choice > 20){
                document.getElementById('result').innerText = "Plus petit !";
                
            } 
        } else {
            document.getElementById('result').innerText = "Bravo, vous avez trouvé un nombre valide !";
        }

}

// Section B
var random = Math.floor(Math.random() * 101) + 1;
var e = 1;

document.getElementById("submit-b").onclick = function () {
    var choice_2 = document.getElementById('choice-b').value;
    
    if(choice_2 != random){
        if(choice_2 < random ){
            document.getElementById('result-b').innerText = "Plus grand !";
        }else if(choice_2 > random){
            document.getElementById('result-b').innerText = "Plus petit !";
        }
        e += 1;
    } else {
        document.getElementById('result-b').innerText = "Bravo, vous avez trouvé le nombre valide au bout du "+e+" ° coup(s)!";
    }
}