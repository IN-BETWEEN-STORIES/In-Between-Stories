const lightbulbOn = document.getElementById("lightbulb-on");
const lightbulbOff = document.getElementById("lightbulb-off");

// preload dimmed lightbulb image
const dimmedLightbulb = new Image();
dimmedLightbulb.src = "/assets/home/lampu redup.jpg";

const LIGHTBULB_STATE = {
    OFF: 0,
    HALF: 1,
    ON: 2,
};

let lightbulbState = LIGHTBULB_STATE.OFF;

function toggleLightbulb(event, newLightbulbState = null) {
    console.log(newLightbulbState);
    if (newLightbulbState === null) {
        lightbulbState =
            (lightbulbState + 1) % Object.keys(LIGHTBULB_STATE).length;
    } else {
        lightbulbState = newLightbulbState;
    }

    if (lightbulbState == LIGHTBULB_STATE.OFF) {
        lightbulbOn.style.opacity = 0;
        lightbulbOff.style.opacity = 1;
    } else if (lightbulbState == LIGHTBULB_STATE.HALF) {
        lightbulbOff.style.opacity = 0;
        lightbulbOn.src = "/assets/home/lampu redup.jpg";
        lightbulbOn.style.opacity = 1;
    } else {
        lightbulbOff.style.opacity = 0;
        lightbulbOn.src = "/assets/home/lampu nyala.jpg";
        lightbulbOn.style.opacity = 1;
    }
}

document
    .getElementById("lightbulb-placeholder")
    .addEventListener("click", toggleLightbulb);

// scroll trigger
const lightbulbPlaceholderId = "#lightbulb-placeholder";
gsap.from(lightbulbPlaceholderId, {
    scrollTrigger: {
        trigger: lightbulbPlaceholderId,
        start: "60% top",
        onEnter: () => toggleLightbulb(null, LIGHTBULB_STATE.ON),
    },
});
