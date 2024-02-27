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

    // start tgn pegang jam
    // Store the original position of the element
    var originalPosition = $("#phase1_jam").position().left;
    console.log("ori pos: " + originalPosition);

    // Set the --original-position CSS custom property
    $("#phase1_tgn_jam").css("--original-position", originalPosition);

    // tgn pegang jam slide to right on click
    $(".phase1_tgn_jam").on("click", function () {
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
    // end tgn pegang jam

    function zoom(tas1, tas2, tas3) {
        animation1 = 'hoveringAnimation1 12s infinite ease-in-out'
        animation2 = 'hoveringAnimation2 20s infinite ease-in-out'
        animation3 = 'hoveringAnimation3 15s infinite ease-in-out'

        if ((tas1).hasClass('zoomed-in')) {
            if (tas1.is('#phase1_tas_ijo')) {
                $(tas1).css('animation', animation1);
            }
            else if (tas1.is('#phase1_tas_merah')) {
                $(tas1).css('animation', animation2);
            }
            else if (tas1.is('#phase1_tas_orange')) {
                $(tas1).css('animation', animation3);
            }

            // zoom out tas ijo, orange
            // $(tas2).css('animation', 'none');
        }
        else {
            $(tas1).css('animation', 'none');
        }
        $(tas1).toggleClass('zoomed-in');

    }
    tasIjo = $('#phase1_tas_ijo')
    tasMerah = $('#phase1_tas_merah')
    tasOrange = $('#phase1_tas_orange')

    tasIjo.on('click', function(){
        zoom(tasIjo, tasMerah, tasOrange)
    })
    tasMerah.on('click', function(){
        zoom(tasMerah, tasOrange, tasIjo)
    })
    tasOrange.on('click', function(){
        zoom(tasOrange, tasIjo, tasMerah)
    })

});