$("#submit").click(function () {

    var array_nums = [];

    for(var i=1;i<=9;i++){
        array_nums.push(parseInt($('#choice-'+i).val()));
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
        $('#result').text("Les éléments du tableaux sont tous consécutifs avec un interval régulier à + 1.");
    } else {
        $('#result').text("Les éléments du tableaux ne sont pas consécutifs.");
    }

})
