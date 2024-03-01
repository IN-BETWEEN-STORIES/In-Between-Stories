function animateClock() {
    const clock = document.getElementById("phase1_jam");
    const sectionHeight = document.getElementById("phase1").offsetHeight;

    gsap.from("#phase1_jam", {
        top: clock.offsetTop + sectionHeight * 0.1,
        ease: "power1.out",
        scrollTrigger: {
            trigger: "#phase1_tanaman_depan",
            start: "47% bottom",
            end: "47% 60%",
            scrub: 1,
        },
    });

    gsap.utils.toArray(".jarum_jam").forEach((needle) => {
        gsap.from(needle, {
            top: needle.offsetTop + sectionHeight * 0.1,
            ease: "power1.out",
            scrollTrigger: {
                trigger: "#phase1_tanaman_depan",
                start: `47% bottom`,
                end: `47% 60%`,
                scrub: 1,
                // markers: true,
            },
        });
    });
}

animateClock();
