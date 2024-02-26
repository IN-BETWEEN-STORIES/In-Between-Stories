gsap.registerPlugin(ScrollTrigger);

const MOVEMENT = {
    LEFT: "left",
    RIGHT: "right",
};

(() => {
    const elements = [
        {
            target: document.getElementById("phase1_kertas_jatuh_3"),
            oscillationCount: 4,
            oscillationFirstMovement: MOVEMENT.LEFT,
            oscillationMagnitude: { left: -3, right: 3.5 },
            rotationMagnitude: { clockwise: 25, counterClockwise: -23 },
            end: 400,
            endTopPos: 67,
        },
        {
            target: document.getElementById("phase1_kertas_jatuh_4"),
            oscillationCount: 4,
            oscillationFirstMovement: MOVEMENT.RIGHT,
            oscillationMagnitude: { left: -3, right: 3.5 },
            rotationMagnitude: { clockwise: 14, counterClockwise: -28 },
            start: 80,
            endTopPos: 72,
        },
        {
            target: document.getElementById("phase1_kertas_jatuh_5"),
            oscillationCount: 3,
            oscillationFirstMovement: MOVEMENT.RIGHT,
            oscillationMagnitude: { left: -2.5, right: 3 },
            rotationMagnitude: { clockwise: 10, counterClockwise: -24 },
        },
        {
            target: document.getElementById("phase1_kertas_jatuh_6"),
            oscillationCount: 1,
            oscillationFirstMovement: MOVEMENT.RIGHT,
            oscillationMagnitude: { left: -0, right: 3 },
            rotationMagnitude: { clockwise: 0, counterClockwise: -25 },
            start: 57,
            end: 300,
        },
        {
            target: document.getElementById("phase1_kertas_jatuh_7"),
            oscillationCount: 3,
            oscillationFirstMovement: MOVEMENT.LEFT,
            oscillationMagnitude: { left: -2.5, right: 3 },
            rotationMagnitude: { clockwise: 10, counterClockwise: -24 },
            start: 70,
            end: 300,
            endTopPos: 69,
        },
    ];

    elements.forEach((element) => {
        initFallingAnimation(element);
    });

    // paper 2
    const config = {
        scrollTrigger: {
            trigger: "#phase1_kertas_jatuh_2",
            start: "top 40%",
            end: "500% top",
            scrub: 0.3,
            ease: "power2.out",
        },
    };
    const tl = gsap.timeline(config);

    const id = "#phase1_kertas_jatuh_2";
    const paper2TopPos = getElementPosition(document.querySelector(id), "top");
    const paper2LeftPos = getElementPosition(
        document.querySelector(id),
        "left"
    );
    console.log(paper2TopPos);
    tl.set(id, { transformOrigin: "50% 80%" })
        .to(id, {
            rotation: -10,
            top: `${paper2TopPos + 2.5}%`,
            left: `${paper2LeftPos - 3}%`,
            duration: 1,
        })
        .to(id, { rotation: -55, duration: 1 })
        .to(id, {
            top: `${paper2TopPos + 9}%`,
            left: `${paper2LeftPos - 6}%`,
            rotation: -75,
            zIndex: 4,
            duration: 2,
        })
        .to(id, {
            top: `${paper2TopPos + 35}%`,
            left: `${paper2LeftPos - 9}%`,
            rotation: -10,
            duration: 11,
        });
})();

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

function initFallingAnimation(element) {
    const startTopPos = getElementPosition(element.target, "top");
    const endTopPos = element.endTopPos || 75.0;
    const leftPos = getElementPosition(element.target, "left");
    const oscillationCount = element.oscillationCount || 5;
    const oscillationMagnitude = element.oscillationMagnitude || {
        left: 3,
        right: 2.5,
    };
    const rotationMagnitude = element.rotationMagnitude || {
        clockwise: 24,
        counterClockwise: -10,
    };
    const oscillationFirstMovement =
        element.oscillationFirstMovement || MOVEMENT.RIGHT;
    const hopRange = (endTopPos - startTopPos) / oscillationCount;

    const config = {
        scrollTrigger: {
            trigger: `#${element.target.id}`,
            start: `top ${element.start || 70}%`,
            end: `${element.end || 250}% top`,
            scrub: 0.3,
            ease: "power2.out",
        },
    };
    const tl = gsap.timeline(config);

    for (let i = 1; i <= oscillationCount; i++) {
        let movement, rotation;
        if (i % 2 === 1) {
            movement = oscillationFirstMovement;
            rotation =
                oscillationFirstMovement === MOVEMENT.RIGHT
                    ? rotationMagnitude.counterClockwise
                    : rotationMagnitude.clockwise;
        } else if (oscillationFirstMovement === MOVEMENT.RIGHT) {
            movement = MOVEMENT.LEFT;
            rotation = rotationMagnitude.clockwise;
        } else {
            movement = MOVEMENT.RIGHT;
            rotation = rotationMagnitude.counterClockwise;
        }

        tl.to(`#${element.target.id}`, {
            top: `${startTopPos + hopRange * i}%`,
            left: `${leftPos + oscillationMagnitude[movement]}%`,
            zIndex: 12,
            rotation: rotation,
            duration: 1,
        });
    }
}
