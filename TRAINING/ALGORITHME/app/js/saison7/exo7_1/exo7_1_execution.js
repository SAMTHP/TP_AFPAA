document.getElementById("submit").onclick = function () {

    var array_nums = [];

    for(var i=1;i<=9;i++){
        array_nums.push(parseInt(document.getElementById('choice-'+i).value));
    }
    
    flag = false;
    for(var i=0;i<9;i++){
        if(i != 8){
            if(array_nums[i+1] == array_nums[i] + 1 ){
                flag = true;
            } else{
                flag = false;
                break;
            }
        }
    }
    
    if(flag){
        document.getElementById('result').innerText = "Les éléments du tableaux sont tous consécutifs avec un interval régulier à + 1.";
    } else {
        document.getElementById('result').innerText = "Les éléments du tableaux ne sont pas consécutifs.";
    }
    
}
