$(document).ready(function(){
    // save the initial position of the image
    var initialPosition = $("#phase1_foto_kiri").position();

    function hideMaureen() {
        $("#phase1_foto_kiri").css({
            left: "100%",
            transition: "2s ease-in-out"
        });

        $("#phase1_foto_kiri_hidden").css({
            left: "100%",
            transition: "2s ease-in-out"
        });

        setTimeout(() => {
            $('#dummymaureen').css('z-index', 10);
        }, 700);
    }

    function showMaureen() {
        $('#dummymaureen').attr('style', '');
        $("#phase1_foto_kiri").css({
            left: initialPosition.left + "px",
            transition: "2s ease-in-out"
        });

        $("#phase1_foto_kiri_hidden").css({
            left: initialPosition.left + "px",
            transition: "2s ease-in-out"
        });
    }
    
    $("#phase1_foto_kiri_hidden").on("click", function(){
        hideMaureen();
    });

    $("#dummymaureen").on("click", function(){
        showMaureen();
    });
});