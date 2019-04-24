
$(document).ready(function(){
    // Show pseudo code
    $("#btn-pc").click(function(){
        $.get("../../saison5/exo5_8/exo5_8_pc.php", function(view){
            $("#algo").html(view); 
        })
    })
    // Show algo in php
    $("#btn-php").click(function(){
        $.get("../../saison5/exo5_8/exo5__php.php", function(view){
            $("#algo").html(view); 
        })
        $.get("../../saison5/exo5_8/exo5_8_execution_form.php", function(view){
            $("#execution").html(view); 
        })
        
    })
    // Show algo in js
    $("#btn-js").click(function(){
        $.get("../../saison5/exo5_8/exo5_8_js.php", function(view){
            $("#algo").html(view); 
        })
        $.get("../../saison5/exo5_8/exo5_8_execution_form_js.html", function(view){
            $("#execution").html(view); 
        })
    })
    // Show algo in jquery
    $("#btn-jquery").click(function(){
        $.get("../../saison5/exo5_8/exo5_8_jquery.php", function(view){
            $("#algo").html(view); 
        })
        $.get("../../saison5/exo5_8/exo5_8_execution_form_jquery.html", function(view){
            $("#execution").html(view); 
        })
    })
})


