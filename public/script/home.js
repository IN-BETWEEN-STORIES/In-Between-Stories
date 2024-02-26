function dragElement(elmnt) {
    var pos1 = 0,
        pos2 = 0,
        pos3 = 0,
        pos4 = 0;
    if (document.getElementById(elmnt.id)) {
        /* if present, the header is where you move the DIV from:*/
        document.getElementById(elmnt.id).onmousedown = dragMouseDown;
        document.getElementById(elmnt.id).ontouchstart = dragMouseDown;
    } else {
        /* otherwise, move the DIV from anywhere inside the DIV:*/
        elmnt.onmousedown = dragMouseDown;
    }

    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        // get the mouse cursor position at startup:
        pos3 = e.clientX ? e.clientX : e.touches[0].clientX;
        pos4 = e.clientY ? e.clientY : e.touches[0].clientY;
        document.onmouseup = closeDragElement;
        document.ontouchend = closeDragElement;
        // call a function whenever the cursor moves:
        document.onmousemove = elementDrag;
        document.ontouchmove = elementDrag;
    }

    function elementDrag(e) {
        e = e || window.event;
        e.preventDefault();
        // calculate the new cursor position:
        pos1 = pos3 - (e.clientX ? e.clientX : e.touches[0].clientX);
        pos2 = pos4 - (e.clientY ? e.clientY : e.touches[0].clientY);
        pos3 = e.clientX ? e.clientX : e.touches[0].clientX;
        pos4 = e.clientY ? e.clientY : e.touches[0].clientY;
        // set the element's new position:
        elmnt.style.top = elmnt.offsetTop - pos2 + "px";
        elmnt.style.left = elmnt.offsetLeft - pos1 + "px";
    }

    function closeDragElement() {
        /* stop moving when mouse button is released:*/
        document.onmouseup = null;
        document.onmousemove = null;
        document.ontouchend = null;
    }
}

$(document).ready(function () {
    // Store the original position of the element
    var originalPosition = $("#phase1_jam").position().left;
    console.log("ori pos: " + originalPosition);

    // Set the --original-position CSS custom property
    $("#phase1_tgn_jam").css("--original-position", originalPosition);

    // tgn pegang jam slide to right on click
    $(".phase1_tgn_jam").on("click", function (e) {
        $(".phase1_tgn_jam").addClass("slide-right");
        $(".phase1_tgn_jam").removeClass("slide-left");
    });

    $("#dummy1").on("click", function () {
        // Store the original position of the element
        var newPosition = $("#phase1_jam").position().left;
        console.log("new pos: " + newPosition);
        $("#phase1_tgn_jam").css("--new-position", newPosition);

        $(".phase1_tgn_jam").addClass("slide-left");
        $(".phase1_tgn_jam").removeClass("slide-right");

        setTimeout(function () {
            $(".phase1_tgn_jam").removeClass("slide-left");
        }, 1500);
    });
});

gsap.registerPlugin(ScrollTrigger);

function animateDrawerItem(items) {
    items.forEach((item) => {
        gsap.from("#" + item, {
            yPercent: 80,
            scrollTrigger: {
                trigger: "#" + item,
                start: "top bottom",
                end: "top bottom",
                scrub: 1,
            },
        });
    });
}

function animateCoffeePour() {
    gsap.to("#phase1_pour", {
        yPercent: 20,
        ease: "power1.inOut",
        scrollTrigger: {
            trigger: "#phase1_pour",
            start: "top bottom",
            end: "bottom top",
            scrub: 1,
        },
    });
}

function animateClock() {
    gsap.from("#phase1_jam", {
        yPercent: 50,
        ease: "power1.out",
        scrollTrigger: {
            trigger: "#phase1_jam",
            start: "top bottom",
            end: "top center",
            scrub: 1,
        },
    });

    gsap.utils.toArray(".jarum_jam").forEach((needle) => {
        gsap.from(needle, {
            yPercent: 300,
            ease: "power1.out",
            scrollTrigger: {
                trigger: "#phase1_jam",
                start: "center bottom",
                end: "center center",
                scrub: 1,
            },
        });
    });
}

animateCoffeePour();
animateDrawerItem([
    "phase1_kertas_laci_1",
    "phase1_kertas_laci_2",
    "phase1_kertas_laci_3",
    "phase1_kertas_laci_4",
]);
animateClock();