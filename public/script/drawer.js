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

const kertasBawah = document.querySelectorAll(".kertas_bawah");
const kertasHitam = document.getElementById("phase1_kertas_laci_3");
kertasBawah.forEach((e) => {
    e.addEventListener("click", () => {
        if (!kertasHitam.classList.contains("bring-to-center")) {
            kertasHitam.classList.add("bring-to-center");
        } else {
            kertasHitam.classList.remove("bring-to-center");
            kertasHitam.style.transform = "translate(0%, 0%) rotate(0deg)";
            kertasHitam.style.transition = "transform 1s ease-in-out";
            kertasHitam.style.zIndex = "9";

            setTimeout(() => {
                kertasHitam.style.transition = "none";
            }, 1000);
        }
    });
});
