// dragElement(document.getElementById("phase1_clock"));

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

// let tween = gsap.from("#phase1_clock", {
//     scrollTrigger: {
//         trigger: "#phase1_clock",
//         start: "top center",
//         scrub: 1,
//         // immediateRender: false,
//     },
//     x: -50,
// });

$(document).ready(function () {

    // Store the original position of the element
    var originalPosition = $('#phase1_jam').position().left;
    console.log('ori pos: ' + originalPosition);

    // Set the --original-position CSS custom property
    $('#phase1_tgn_jam').css('--original-position', originalPosition);

    // tgn pegang jam slide to right on click
    $('#tgn_jam_container').on('click', function () {
        $('.phase1_tgn_jam').addClass('slide-right');
        $('.phase1_tgn_jam').removeClass('slide-left');
    });

    $('#dummy1').on('click', function () {
        // Store the original position of the element
        var newPosition = $('#phase1_jam').position().left;
        console.log('new pos: ' + newPosition);
        $('#phase1_tgn_jam').css('--new-position', newPosition);

        $('.phase1_tgn_jam').addClass('slide-left');
        $('.phase1_tgn_jam').removeClass('slide-right');
    });
});