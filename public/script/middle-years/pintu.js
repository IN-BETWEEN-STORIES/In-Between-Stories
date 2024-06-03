$(document).ready(function(){
    // save the initial position of the image
    // var maurenInitPos = $("#phase1_orang_bawah3").position();
    // var pintuInitPos = $("#phase1_pintu").position();
    // var kalungBiruInitPos = $("#phase1_kalung_biru").position();
    // var kalungPinkInitPos = $("#phase1_kalung_pink").position();
    // var tanganBawahInitPos = $("#phase1_tangan_bawah").position();
    // var bungaInitPos = $("#phase1_bunga").position();


    function hidePintu() {
        $("#phase1_orang_bawah3").css({
            translate : "40vw",
            transition: "3s ease-in-out"
        });
        $("#phase1_pintu").css({
            translate : "40vw",
            transition: "2.8s ease-in-out"
        });
        $("#phase1_kalung_biru").css({
            translate : "40vw",
            transition: "2.8s ease-in-out"
        });
        $("#phase1_kalung_pink").css({
            translate : "40vw",
            transition: "2.8s ease-in-out"
        });
        $("#phase1_tangan_bawah").css({
            translate : "40vw",
            transition: "3.3s ease-in-out"
        });
        $("#phase1_bunga").css({
            translate : "40vw",
            transition: "3.3s ease-in-out"
        });

        
    }

    function showPintu() {
        $("#phase1_orang_bawah3").css({
            translate: "0vw",
            transition: "2.6s ease-in-out"
        });
        $("#phase1_pintu").css({
            translate: "0vw",
            transition: "2.8s ease-in-out"
        });
        $("#phase1_kalung_biru").css({
            translate: "0vw",
            transition: "2.8s ease-in-out"
        });
        $("#phase1_kalung_pink").css({
            translate: "0vw",
            transition: "2.8s ease-in-out"
        });
        $("#phase1_tangan_bawah").css({
            translate: "0vw",
            transition: "3.3s ease-in-out"
        });
        $("#phase1_bunga").css({
            translate: "0vw",
            transition: "3.3s ease-in-out"
        });

    }
    
    $("#phase1_orang_bawah3").on("click", function(){
        hidePintu();
    });

    $("#dummy_pintu").on("click", function(){
        showPintu();
        console.log("clicked");
    });
});