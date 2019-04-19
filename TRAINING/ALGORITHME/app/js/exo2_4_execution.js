
var sentence = "belle marquise, vos beaux yeux me font mourir d'amour";
var array_sentence = sentence.split(" ");


var array_sentence_reverse = array_sentence.reverse();
var array_sentence_sort = array_sentence;
var array_sentence_shuffle = array_sentence;

var sentence_reverse = "";
for(var i = 0; i < array_sentence.length; i++){
    sentence_reverse +=  array_sentence_reverse[i] + " ";
}

array_sentence_sort.sort();
var sentence_sort = "";
for(var i = 0; i < array_sentence.length; i++){
    sentence_sort += array_sentence_sort[i] + " ";
}

var sentence_desort = "";
for(var i = array_sentence.length - 1; i >= 0; i--){
    sentence_desort += array_sentence_sort[i] + " ";
}


var j, x, i;
for (i = array_sentence.length - 1; i > 0; i--) {
    j = Math.floor(Math.random() * (i + 1));
    x = array_sentence_shuffle[i];
    array_sentence_shuffle[i] = array_sentence_shuffle[j];
    array_sentence_shuffle[j] = x;
}

var sentence_shuffle = "";
for(var i = 0; i < array_sentence.length; i++){
    sentence_shuffle += array_sentence_shuffle[i] + " ";
}

document.getElementById("first").onclick = function(){
    document.getElementById("result").innerHTML = "<strong>Phrase inversée :</strong> " + sentence_reverse;
}

document.getElementById("two").onclick = function(){
    document.getElementById("result").innerHTML = "<strong>Mots rangés par ordre alphabétique :</strong> " + sentence_sort;
}

document.getElementById("three").onclick = function(){
    document.getElementById("result").innerHTML = "<strong>Mots rangés de manière décroissante :</strong> " + sentence_desort;
}

document.getElementById("four").onclick = function(){
    document.getElementById("result").innerHTML = "<strong>Mots rangés au hasard :</strong> " + sentence_shuffle;
}