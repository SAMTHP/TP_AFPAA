document.getElementById("submit").onclick = function () {
    var age = document.getElementById('age').value;
    var sexe = document.getElementById('gender').value;
    console.log(age,sexe);
    if(sexe == "h" && age >= 20){
        document.getElementById('result').innerText = "Vous êtes imposable !";
    } else if(sexe == "f" && age >= 18 && age <= 35){
        document.getElementById('result').innerText = "Vous êtes imposable !";
    } else {
        document.getElementById('result').innerText = "Vous n'êtes pas imposable !";
    }
}