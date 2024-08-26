var images = []; // Array to hold image sources
var slideIndex = 0; // Index of the current slide

// Function to open the modal and start the slideshow
function openImage(index) {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("img01");

    modal.style.display = "block"; // Display the modal
    modalImg.src = images[index]; // Set the image source
    slideIndex = index; // Update the slide index
}

// Function to close the modal
function closeImage() {
    document.getElementById("myModal").style.display = "none"; // Hide the modal
}

// Function to navigate to the next or previous slide
function plusSlides(n) {
    slideIndex += n; // Increment or decrement the slide index
    if (slideIndex >= images.length) {
        slideIndex = 0; // Reset to the first slide if reached the end
    } else if (slideIndex < 0) {
        slideIndex = images.length - 1; // Set to the last slide if reached the beginning
    }
    var modalImg = document.getElementById("img01");
    modalImg.src = images[slideIndex]; // Display the new slide
}

// Add images to the array
images.push("images/pcso lotto craze.png");
images.push("images/specialcalcu.png");
images.push("images/weconnect.png");
images.push("images/resume.png");
images.push("images/ecommerce.png");
images.push("images/inventory.png");
images.push("images/payslip.png");
images.push("images/dsa.png");
// Add more images here...
