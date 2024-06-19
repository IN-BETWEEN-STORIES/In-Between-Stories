document.addEventListener('DOMContentLoaded', function () {
    var triggerElements = document.querySelectorAll('.triggerPopUp');
    var popupPlaceholder = document.getElementById('popUp');
    var imagePlaceholder = document.getElementById('imagePlaceHolder');
    var likeButton = document.getElementById('likeButton');
    var slideLeft = document.getElementById('slideLeft')
    var slideRight = document.getElementById('slideRight')

    const images = [
        "foto luar 1.png",
        "foto luar 2.png",
        "foto luar 3.png",
        "foto luar 4.png",
        "foto luar 5.png",
        "foto luar 6.png",
        "foto luar 7.png",
        "foto luar 8.png",
        "foto luar 9.png",
        "foto luar 10.png",
        "foto luar 11.png",
    ]

    const liked = Array(images.length).fill(0);

    popupPlaceholder.addEventListener('click', function (event) {
        if (event.target !== likeButton) {
            closePopUp();
        }
    });

    triggerElements.forEach(function (element) {
        element.addEventListener('dblclick', function () {
            showPopup(element);
        });
    });

    likeButton.addEventListener('dblclick', function (event) {
        event.stopPropagation();
        likeButtonFunction()
    })

    slideLeft.addEventListener('click', function (event) {
        event.stopPropagation()
        slideLeftFunction()
    })

    slideRight.addEventListener('click', function (event) {
        event.stopPropagation()
        slideRightFunction()
    })

    function showPopup(element) {
        var image = document.getElementById('imagePopUp')
        var imageUrl = element.src;
        var trimmedUrl = imageUrl.substring(imageUrl.indexOf("foto"));
        var decodedUrl = trimmedUrl.replace(/%20/g, ' ');
        var index = images.indexOf(decodedUrl);
        console.log(liked[index])
        if (liked[index] == 1) {
            imagePlaceholder.src = '/assets/home/Our Collection Pop Up_Like card (with black BG).png'
        } else {
            imagePlaceholder.src = '/assets/home/Our Collection Pop Up_No like card (with black BG).png'
        }
        slideRight.classList.remove('hidden')
        slideLeft.classList.remove('hidden')
        if (index == 0) {
            slideLeft.classList.add('hidden')
        } else if (index == 10) {
            slideRight.classList.add('hidden')
        }
        image.src = imageUrl

        popupPlaceholder.classList.remove('hidden');
    }
    function closePopUp() {
        if (!popupPlaceholder.classList.contains('hidden')) {
            popupPlaceholder.classList.add('hidden');
        }
    }

    function likeButtonFunction() {
        var image = document.getElementById('imagePopUp');
        var imageUrl = image.src;
        var trimmedUrl = imageUrl.substring(imageUrl.indexOf("foto"));
        var decodedUrl = decodeURIComponent(trimmedUrl);
        var index = images.indexOf(decodedUrl);
        console.log(decodedUrl)
        if (liked[index] == 1) {
            imagePlaceholder.src = '/assets/home/Our Collection Pop Up_No like card (with black BG).png';
        } else {
            imagePlaceholder.src = '/assets/home/Our Collection Pop Up_Like card (with black BG).png';
        }
        liked[index] = liked[index] === 1 ? 0 : 1;
    }

    function slideLeftFunction() {
        var image = document.getElementById('imagePopUp');
        var imageUrl = image.src;
        var trimmedUrl = imageUrl.substring(imageUrl.indexOf("foto"));
        var decodedUrl = decodeURIComponent(trimmedUrl);
        var index = images.indexOf(decodedUrl);
        console.log(liked[index])
        if (liked[index - 1] == 1) {
            imagePlaceholder.src = '/assets/home/Our Collection Pop Up_Like card (with black BG).png'
        } else {
            imagePlaceholder.src = '/assets/home/Our Collection Pop Up_No like card (with black BG).png'
        }
        image.src = `/assets/home/${images[index - 1]}`;
        if (index == 1) {
            slideLeft.classList.add('hidden')
        } else if (index == 10) {
            slideRight.classList.remove('hidden')
        }
    }
    function slideRightFunction() {
        var image = document.getElementById('imagePopUp');
        var imageUrl = image.src;
        var trimmedUrl = imageUrl.substring(imageUrl.indexOf("foto"));
        var decodedUrl = decodeURIComponent(trimmedUrl);
        var index = images.indexOf(decodedUrl);
        if (liked[index + 1] == 1) {
            imagePlaceholder.src = '/assets/home/Our Collection Pop Up_Like card (with black BG).png'
        } else {
            imagePlaceholder.src = '/assets/home/Our Collection Pop Up_No like card (with black BG).png'
        }
        image.src = `/assets/home/${images[index + 1]}`;
        // console.log(decodedUrl)
        if (index == 0) {
            slideLeft.classList.remove('hidden')
        } else if (index == 9) {
            slideRight.classList.add('hidden')
        }
    }
});
