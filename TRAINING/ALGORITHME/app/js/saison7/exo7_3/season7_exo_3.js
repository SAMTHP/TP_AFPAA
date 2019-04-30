
$(document).ready(function(){
    // Show pseudo code
    $("#btn-pc").click(function(){
        $.get("../../saison7/exo7_3/exo7_3_pc.php", function(view){
            $("#algo").html(view); 
        })
    })
    // Show algo in php
    $("#btn-php").click(function(){
        $.get("../../saison7/exo7_3/exo7_3_php.php", function(view){
            $("#algo").html(view); 
        })
        $.get("../../saison7/exo7_3/exo7_3_execution_form.php", function(view){
            $("#execution").html(view); 
        })
        
    })
    // Show algo in js
    $("#btn-js").click(function(){
        $.get("../../saison7/exo7_3/exo7_3_js.php", function(view){
            $("#algo").html(view); 
        })
        $.get("../../saison7/exo7_3/exo7_3_execution_form_js.html", function(view){
            $("#execution").html(view); 
        })
    })
    // Show algo in jquery
    $("#btn-jquery").click(function(){
        $.get("../../saison7/exo7_3/exo7_3_jquery.php", function(view){
            $("#algo").html(view); 
        })
        $.get("../../saison7/exo7_3/exo7_3_execution_form_jquery.html", function(view){
            $("#execution").html(view); 
        })
    })
})


