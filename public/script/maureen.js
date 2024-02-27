$(document).ready(function(){
    // save the initial position of the image
    var initialPosition = $("#phase1_foto_kiri").position();

    function hideMaureen() {
        $("#phase1_foto_kiri").css({
            left: "100%",
            transition: "2s ease-in-out"
        });
    }

    function showMaureen() {
        $("#phase1_foto_kiri").css({
            left: initialPosition.left + "px",
            transition: "2s ease-in-out"
        });
    }
    
    $("#phase1_foto_kiri").on("click", function(){
        hideMaureen();
    });

    $("#dummymaureen").on("click", function(){
        showMaureen();
    });
});