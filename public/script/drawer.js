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
animateDrawerItem([
    "phase1_kertas_laci_1",
    "phase1_kertas_laci_2",
    "phase1_kertas_laci_3",
    "phase1_kertas_laci_4",
]);