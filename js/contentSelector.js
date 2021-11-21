$(document).ready(function(){
  $("#inicio").on("click", function(){
    $("#inicio").show("swing");
    $("#proyecto").hide("linear");
    $("#proyecto").hide("linear");
    });
  $("#proyecto").on("click", function(){
    $("#inicio").show("linear");
    $("#proyecto").hide("swing");
    $("#proyecto").hide("linear");
    });
  $("#contacto").on("click", function(){
    $("#inicio").show("linear");
    $("#proyecto").hide("linear");
    $("#proyecto").hide("swing");
    });
});