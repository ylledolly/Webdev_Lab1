let currentSlide = 0;

function changeSlide(direction) {
    const slides = document.querySelectorAll('.slide');
    slides[currentSlide].classList.remove('active');
    
    currentSlide += direction;

    if (currentSlide < 0) {
        currentSlide = slides.length - 1; // Wrap to last slide
    } else if (currentSlide >= slides.length) {
        currentSlide = 0; // Wrap to first slide
    }

    slides[currentSlide].classList.add('active');
    updateSliderPosition();
}

function updateSliderPosition() {
    const slides = document.querySelector('.slides');
    slides.style.transform = `translateX(-${currentSlide * 100}%)`;
}

