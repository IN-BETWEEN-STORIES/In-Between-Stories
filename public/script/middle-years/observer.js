// Options for the Intersection Observer
const options = {
    root: null, // Use the viewport as the root
    rootMargin: "100%", // No margin around the viewport
    threshold: 0, // 10% of the element must be visible
};

// Callback function to handle intersection changes
const callback = (entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            // Load the image by replacing the data-src attribute with src
            const lazyImage = entry.target;
            lazyImage.src = lazyImage.dataset.src;
            // Remove the 'lazy-load' class to prevent re-triggering
            lazyImage.classList.remove("lazy-load");
            // Unobserve the image once loaded
            observer.unobserve(lazyImage);
        }
    });
};

// Create a new Intersection Observer instance
const observer = new IntersectionObserver(callback, options);

// Select all elements with the 'lazy-load' class
const lazyImages = document.querySelectorAll(".lazy-load");

// Observe each lazy-loaded image
lazyImages.forEach((image) => {
    observer.observe(image);
});
