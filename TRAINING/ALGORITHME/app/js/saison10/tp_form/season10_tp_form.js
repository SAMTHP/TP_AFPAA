$(document).ready(function(){
    // Show pseudo code
    $("#btn-pc").click(function(){
        $.get("../../saison10/tp_form/tp_form_pc.php", function(view){
            $("#algo").html(view); 
        })
    })
    // Show algo in js
    $("#btn-js").click(function(){
        $.get("../../saison10/tp_form/tp_form_js.php", function(view){
            $("#algo").html(view); 
        })
        $.get("../../saison10/tp_form/tp_form_execution_form_js.html", function(view){
            $("#execution").html(view); 
        })
    })
    // Show algo in jquery
    $("#btn-jquery").click(function(){
        $.get("../../saison10/tp_form/tp_form_jquery.php", function(view){
            $("#algo").html(view); 
        })
        $.get("../../saison10/tp_form/tp_form_execution_form_jquery.html", function(view){
            $("#execution").html(view); 
        })
    })
})


