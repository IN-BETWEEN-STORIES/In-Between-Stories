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

coffeeGroup.forEach((elem) => {
    elem.addEventListener("click", () => {
        coffeeGroup.forEach((e) => {
            e.style.transform = "translateX(100vw)";
            e.style.transition = "1.5s ease-in-out";
        });
    });
});

placeholder.addEventListener("click", () =>
    coffeeGroup.forEach((elem) => {
        elem.style.transform = "translateX(0)";
        elem.style.transition = "1.5s ease-out";
    })
);
