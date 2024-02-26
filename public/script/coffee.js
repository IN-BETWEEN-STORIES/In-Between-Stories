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