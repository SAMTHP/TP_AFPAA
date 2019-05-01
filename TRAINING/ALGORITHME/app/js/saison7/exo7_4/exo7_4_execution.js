document.getElementById("result").style.display = "none";

document.getElementById("submit").onclick = function () {

    var tab = ["126","159","355","678"];

    var element = document.getElementById('element').value;

    var flag = false;

    for(var i=0;i<tab.length;i++){
        if(tab[i] == element){
            tab.splice(i,1);
            flag = true;
        }
    }

    var indexTab = tab.keys();
    
    for(var i = 0; i<tab.length;i++){
        var newElement = document.createElement('tr');
        newElement.id = 'elem-'+i;
        document.getElementById('show').appendChild(newElement);
    }

    var e = 0;

    for(let val of indexTab){
        document.getElementById('elem-'+e).innerHTML = "<th scope='row'>"+val+"</th><td>"+tab[e]+"</td>";
        e++;
    }

    if(flag){
        document.getElementById("result").style.display = "block";
    } else {
        var message = "La valeur que vous avez demandé n'existe pas";
        document.getElementById('error').innerHTML = "<strong>"+message+"</strong>";
        document.getElementById("result").style.display = "none";
    }
   
}
