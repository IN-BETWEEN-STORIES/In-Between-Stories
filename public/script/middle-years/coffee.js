function animateCoffeePour() {
    gsap.to("#phase1_pour", {
        yPercent: 20,
        scrollTrigger: {
            trigger: "#phase1_pour",
            start: "30% top",
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
            e.style.translate = "100vw 0";
            e.style.transition = "1.5s ease-in-out";
        });
    });
});

placeholder.addEventListener("click", () =>
    coffeeGroup.forEach((elem) => {
        elem.style.translate = "0";
        elem.style.transition = "1.5s ease-out";
    })
);
