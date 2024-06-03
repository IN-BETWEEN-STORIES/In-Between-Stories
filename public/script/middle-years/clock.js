/**
 *
 * @param {Element} element
 * @param {string} position
 * @returns {number}
 */
function getElementPosition(element, position) {
    const className = Array.from(element.classList).filter((className) =>
        className.includes(`${position}-[`)
    )[0];
    const positionValue = className.substring(
        position.length + 2,
        className.length - 2
    );

    return parseFloat(positionValue);
}

function animateClock() {
    const clock = document.getElementById("phase1_jam");
    const sectionHeight = document.getElementById("phase1").offsetHeight;

    gsap.from("#phase1_jam", {
        top: `${getElementPosition(clock, "top") + 8}%`,
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
            top: `${getElementPosition(needle, "top") + 8}%`,
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
