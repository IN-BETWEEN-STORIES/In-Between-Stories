const video = document.getElementById("tv-video");
const VideoState = {
    PLAY: "play",
    PAUSE: "pause",
};

function toggleVideo(video, videoState) {
    if (videoState === VideoState.PLAY) {
        video.play();
        video.muted = false;
    } else {
        video.muted = true;
        video.pause();
    }
}

const tvToggle = document.getElementById("tv-toggle");
tvToggle.addEventListener("click", () => {
    toggleVideo(video, video.muted ? VideoState.PLAY : VideoState.PAUSE);
});

// const videoId = "#tv-video";
// gsap.from(videoId, {
//     scrollTrigger: {
//         trigger: videoId,
//         start: "42% center",
//         end: "58% center",
//         onEnter: () => toggleVideo(video, VideoState.PLAY),
//         onEnterBack: () => toggleVideo(video, VideoState.PLAY),
//         onLeave: () => toggleVideo(video, VideoState.PAUSE),
//         onLeaveBack: () => toggleVideo(video, VideoState.PAUSE),
//     },
// });
