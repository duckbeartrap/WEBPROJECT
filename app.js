$(document).ready(function(){
    $("#log").click(function(){
        $("#reg").removeClass("selected");
        $("#log").addClass("selected");
        $("#regform").addClass("hidden");
        $("#logform").removeClass("hidden");
    });
    $("#reg").click(function(){
        $("#log").removeClass("selected");
        $("#reg").addClass("selected");
        $("#logform").addClass("hidden");
        $("#regform").removeClass("hidden");
    });
});
