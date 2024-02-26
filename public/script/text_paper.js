$(document).ready(function () {
    var shown = false;

    function showText() {
        $("#phase1_kertasText").css({
            left: "0",
            transition: "left 1s ease-in-out"
        });
    }

    function hideText() {
        $("#phase1_kertasText").css({
            left: "-100%",
            transition: "left 3s ease-in-out"
        });
    }
    
    gsap.from("#phase1_kertasText", {
        scrollTrigger: {
            trigger: "#phase1_kertas_laci_2",
            start: "center center",
            end: "=+700",
        },
        x: "-35%",
        duration: 5
    });

    $("#phase1_kertasText").on("click", function (e) {
        if (shown) {
            hideText();
            return;
        }
        showText();
        shown = true;
    }
    );
});