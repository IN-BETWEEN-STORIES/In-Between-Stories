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
animateCoffeePour();

// Slide right on click
const coffeeGroup = document.querySelectorAll(".coffee_grp");
const placeholder = document.getElementById("coffee_grp_placeholder");

function togglePosition() {
    coffeeGroup.forEach((e) => {
        e.classList.toggle("slide-right");
    });
}

coffeeGroup.forEach((elem) => {
    elem.addEventListener("click", () => togglePosition());
});

placeholder.addEventListener("click", () => togglePosition());
