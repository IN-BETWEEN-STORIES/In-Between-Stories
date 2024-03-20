$(document).ready(function () {
    var shown = false;

    function showText() {
        // $("#phase1_kertasText").css({
        //     left: "0",
        //     transition: "left 1s ease-in-out",
        // });

        $("#phase1_kertasText").addClass("show-text-paper");

    }

    function hideText() {
        $("#phase1_kertasText").removeClass("show-text-paper");
        $("#phase1_kertasText").css({
            left: "-100%",
            transition: "left 3s ease-in-out",
        });

    }

    gsap.from("#phase1_kertasText", {
        scrollTrigger: {
            trigger: "#phase1_kertasText",
            start: "20% bottom",
            end: "50% top",
            scrub: true,
            // markers: true,
        },
        x: "-7%",
        duration: 5,
    });

    $("#phase1_kertasText").on("click", function (e) {
        if (shown) {
            hideText();
            return;
        }
        showText();
        shown = true;
    });
});
