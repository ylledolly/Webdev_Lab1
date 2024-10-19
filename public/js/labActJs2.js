let currentSlide3 = 0;

function changeSlide3(direction) {
    const slides3 = document.querySelectorAll('.slide3');
    slides3[currentSlide3].classList.remove('active');
    
    currentSlide3 += direction;

    if (currentSlide3 < 0) {
        currentSlide3 = slides3.length - 1; // Wrap to last slide
    } else if (currentSlide3 >= slides3.length) {
        currentSlide3 = 0; // Wrap to first slide
    }

    slides3[currentSlide3].classList.add('active');
    updateSliderPosition3();
}

function updateSliderPosition3() {
    const slides3 = document.querySelector('.slides3');
    slides3.style.transform = `translateX(-${currentSlide3 * 100}%)`;
}

