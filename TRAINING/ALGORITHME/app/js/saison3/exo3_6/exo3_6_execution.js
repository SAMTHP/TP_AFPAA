document.getElementById("submit").onclick = function () {
    var age = document.getElementById("choice").value;

    if(age >= 6 && age <= 7){
        document.getElementById("result").innerText = "Vous êtes poussin";
    }else if(age >= 8 && age <= 9){
        document.getElementById("result").innerText = "Vous êtes pupille";
    }else if(age >= 10 && age <= 11){
        document.getElementById("result").innerText = "Vous êtes minime";
    }else if(age >= 12){
        document.getElementById("result").innerText = "Vous êtes cadet";
    }else{
        document.getElementById("result").innerText = "Vous êtes un babyyyyyy !!!";
    }
}