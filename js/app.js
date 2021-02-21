$(document).ready(function(){
    $("#btn").on("click", function(){
        $(".transcription").load("php/ajaxapp.php",{"id":$("#number").html()});
    })
})