gsap.registerPlugin(MotionPathPlugin);
gsap.registerPlugin(CustomEase)

// CustomEase.create("custom", "M0,0 C0,0 0.18,0.22 0.402,0.459 0.441,0.502 0.469,0.581 0.51,0.622 0.543,0.655 0.61,0.687 0.644,0.718 0.672,0.744 0.685,0.811 0.713,0.834 0.758,0.873 0.88,0.965 0.946,1 0.968,1.011 1,1 1,1")

let firstFlower = false;
let gedungLebah1 = false, flower1Lebah1 = false, flower2Lebah1 = false;
let flower1Lebah4 = false, flower2Lebah4 = false;
let count = 0, count1 = 0, count2 = 0;
let tween, tween2, tween3, tween4;


// gsap.registerEase("pauseAt", function (percent) {
//     // Pause the animation at 50% progress for 1 second
//     if (percent < 0.5) {
//         return percent;
//     } else {
//         return 0.5; // Pauses the animation at 50% progress
//     }
// });



function createTween() {
    let progress = tween ? tween.progress() : 0;
    const bounds = [0.512, 0.515]
    const bounds1 = [0.76, 0.763]
    const bounds2 = [0.997, 1]

    tween && tween.progress(0).kill();
    tween = gsap.to("#phase1_lebah_4_atas", {
        duration: 6,
        ease: "none",
        motionPath: {
            path: "#pathLebah4Atas",
            align: "#pathLebah4Atas",
            alignOrigin: [0.5, 0.5]
        },
        repeat: -1,
        onUpdate: function () {
            let progress = tween.progress();
            // console.log(progress)
            if (progress >= bounds[0] && progress <= bounds[1]) {
                tween.progress(bounds[1])
                tween.pause();
                setTimeout(() => {
                    tween.play();
                }, 500);
            } else if (progress >= bounds1[0] && progress <= bounds1[1]) {
                tween.progress(bounds1[1])
                tween.pause();
                setTimeout(() => {
                    tween.play();
                }, 500);
            } else if (progress >= bounds2[0] && progress <= bounds2[1]) {
                tween.progress(bounds2[1])
                tween.pause();
                setTimeout(() => {
                    tween.play();
                }, 500);
            }
        }
    })
    tween.progress(progress);
}


function createTween2() {
    let progress = tween2 ? tween2.progress() : 0;
    const bounds = [0.45, 0.453]
    const bounds1 = [0.62, 0.623]
    const bounds2 = [0.202, 0.205]
    tween2 && tween2.progress(0).kill();
    tween2 = gsap.to("#phase1_lebah_1", {
        duration: 8,
        ease: "none",
        motionPath: {
            path: "#pathLebah1",
            align: "#pathLebah1",
            alignOrigin: [0.5, 0.5],
        },
        repeat: -1,
        onUpdate: function () {
            let progress = tween2.progress();
            // console.log(progress)
            if (progress >= bounds[0] && progress <= bounds[1]) {
                tween2.progress(bounds[1])
                tween2.pause();
                setTimeout(() => {
                    tween2.play();
                }, 500);
            } else if (progress >= bounds1[0] && progress <= bounds1[1]) {
                tween2.progress(bounds1[1])
                tween2.pause();
                setTimeout(() => {
                    tween2.play();
                }, 500);
            } else if (progress >= bounds2[0] && progress <= bounds2[1]) {
                tween2.progress(bounds2[1])
                tween2.pause();
                setTimeout(() => {
                    tween2.play();
                }, 500);
            }
        }
    })
    tween2.progress(progress);
}

function createTween3() {
    let progress = tween3 ? tween3.progress() : 0;
    const bounds = [0, 0.003]
    const bounds1 = [0.25, 0.253]
    tween3 && tween3.progress(0).kill();
    tween3 = gsap.to("#phase1_lebah_4", {
        duration: 8,
        ease: "none",
        motionPath: {
            path: "#pathLebah4",
            align: "#pathLebah4",
            alignOrigin: [0.5, 0.5]
        },
        repeat: -1,
        onUpdate: function () {
            let progress = tween3.progress();
            // console.log(progress)
            if (progress >= bounds[0] && progress <= bounds[1]) {
                tween3.progress(bounds[1])
                tween3.pause();
                setTimeout(() => {
                    tween3.play();
                }, 500);
            } else if (progress >= bounds1[0] && progress <= bounds1[1]) {
                tween3.progress(bounds1[1])
                tween3.pause();
                setTimeout(() => {
                    tween3.play();
                }, 500);
            }
        }
    })
    tween3.progress(progress);
}

function createTween4() {
    let progress = tween4 ? tween4.progress() : 0;
    const bounds = [0.54, 0.543]
    tween4 && tween4.progress(0).kill();
    tween4 = gsap.to("#phase1_lebah_2_atas", {
        duration: 8,
        ease: "none",
        motionPath: {
            path: "#pathLebah2Atas",
            align: "#pathLebah2Atas",
            alignOrigin: [0.5, 0.5],
            // autoRotate: true,
        },
        repeat: -1,
        onUpdate: function () {
            let progress = tween4.progress();
            // console.log(progress)
            if (progress >= bounds[0] && progress <= bounds[1]) {
                tween4.progress(bounds[1])
                tween4.pause();
                setTimeout(() => {
                    tween4.play();
                }, 500);
            }
        }
    })
    tween4.progress(progress);
}

function pauseBee4Atas() {
    tween.pause();
    if (count == 2) {
        firstFlower = true
        count = 0;
    } else {
        count += 1
        firstFlower = false
    }
    // console.log(firstFlower);
    // console.log(count);
    if (firstFlower) {
        setTimeout(pauseBee4Atas, 2050);
    } else {
        setTimeout(pauseBee4Atas, 1225);
    }
    setTimeout(() => {
        tween.play();
    }, 500);

}

function pauseBee1() {
    tween2.pause();
    if (count1 == 0) {
        count1 += 1;
        flower1Lebah1 = true;
        flower2Lebah1 = false;
        gedungLebah1 = false;
    } else if (count1 == 1) {
        count1 += 1;
        flower2Lebah1 = true;
        flower1Lebah1 = false;
        gedungLebah1 = false;
    } else {
        count1 = 0;
        gedungLebah1 = true;
        flower1Lebah1 = false;
        flower2Lebah1 = false;
    }
    if (flower1Lebah1) {
        setTimeout(pauseBee1, 1500);
    } else if (flower2Lebah1) {
        setTimeout(pauseBee1, 1200);
    } else {
        setTimeout(pauseBee1, 2800);
    }
    setTimeout(() => {
        tween2.play();
    }, 500);
}

function pauseBee4() {
    tween3.pause();
    if (count2 == 0) {
        count2 = 1;
        flower2Lebah4 = false
        flower1Lebah4 = true
    } else {
        count2 = 0
        flower1Lebah4 = false
        flower2Lebah4 = true
    }
    // console.log(firstFlower);
    // console.log(count);
    if (flower1Lebah4) {
        setTimeout(pauseBee4, 3400);
    } else {
        setTimeout(pauseBee4, 1600);
    }
    setTimeout(() => {
        tween3.play();
    }, 500);
}

function pauseBee2Atas() {
    tween4.pause();
    setTimeout(pauseBee2Atas, 4500);
    setTimeout(() => {
        tween4.play()
    }, 500);
}

function handleResize() {
    createTween();
    createTween2();
    createTween3();
    createTween4();
}

handleResize();
// setTimeout(pauseBee4Atas, 1550);
// setTimeout(pauseBee1, 800);
// setTimeout(pauseBee4, 1050);
// setTimeout(pauseBee2Atas, 2150)


window.addEventListener("resize", handleResize);



