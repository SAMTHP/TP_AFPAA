
$(document).ready(function(){
    // Show pseudo code
    $("#btn-pc").click(function(){
        $.get("../../saison3/exo3_2/exo3_2_pc.php", function(view){
            $("#algo").html(view); 
        })
    })
    // Show algo in php
    $("#btn-php").click(function(){
        $.get("../../saison4/exo4_2/exo4_2_php.php", function(view){
            $("#algo").html(view); 
        })
        $.get("../../saison4/exo4_2/exo4_2_execution_form.php", function(view){
            $("#execution").html(view); 
        })
        
    })
    // Show algo in js
    $("#btn-js").click(function(){
        $.get("../../saison3/exo3_2/exo3_2_js.php", function(view){
            $("#algo").html(view); 
        })
        $.get("../../saison3/exo3_2/exo3_2_execution_form_js.html", function(view){
            $("#execution").html(view); 
        })
    })
    // Show algo in jquery
    $("#btn-jquery").click(function(){
        $.get("../../saison3/exo3_2/exo3_2_jquery.php", function(view){
            $("#algo").html(view); 
        })
        $.get("../../saison3/exo3_2/exo3_2_execution_form_jquery.html", function(view){
            $("#execution").html(view); 
        })
    })
})

console.log("test");


