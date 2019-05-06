
$(document).ready(function(){
    // Show pseudo code
    $("#btn-pc").click(function(){
        $.get("../../saison9/exo9_4/exo9_4_pc.php", function(view){
            $("#algo").html(view); 
        })
    })
    // Show algo in php
    $("#btn-php").click(function(){
        $.get("../../saison9/exo9_4/exo9_4_php.php", function(view){
            $("#algo").html(view); 
        })
        $.get("../../saison9/exo9_4/exo9_4_execution_form.php", function(view){
            $("#execution").html(view); 
        })
        
    })
    // Show algo in js
    $("#btn-js").click(function(){
        $.get("../../saison9/exo9_4/exo9_4_js.php", function(view){
            $("#algo").html(view); 
        })
        $.get("../../saison9/exo9_4/exo9_4_execution_form_js.html", function(view){
            $("#execution").html(view); 
        })
    })
    // Show algo in jquery
    $("#btn-jquery").click(function(){
        $.get("../../saison9/exo9_4/exo9_4_jquery.php", function(view){
            $("#algo").html(view); 
        })
        $.get("../../saison9/exo9_4/exo9_4_execution_form_jquery.html", function(view){
            $("#execution").html(view); 
        })
    })
})


