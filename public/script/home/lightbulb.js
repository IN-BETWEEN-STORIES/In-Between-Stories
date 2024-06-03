const lightbulbOn = document.getElementById("lightbulb-on");
const lightbulbOff = document.getElementById("lightbulb-off");

const LIGHTBULB_STATE = {
    OFF: 0,
    HALF: 1,
    ON: 2,
};

let lightbulbState = LIGHTBULB_STATE.OFF;

function toggleLightbulb() {
    lightbulbState = (lightbulbState + 1) % Object.keys(LIGHTBULB_STATE).length;

    if (lightbulbState == LIGHTBULB_STATE.OFF) {
        lightbulbOn.style.opacity = 0;
        lightbulbOff.style.opacity = 1;
    } else if (lightbulbState == LIGHTBULB_STATE.HALF) {
        lightbulbOff.style.opacity = 0;
        lightbulbOn.src = "/assets/home/lampu redup.jpg";
        lightbulbOn.style.opacity = 1;
    } else {
        console.log("3");
        lightbulbOff.style.opacity = 0;
        lightbulbOn.src = "/assets/home/lampu nyala.jpg";
        lightbulbOn.style.opacity = 1;
    }
}

document.getElementById('lightbulb-placeholder').addEventListener('click', toggleLightbulb);
