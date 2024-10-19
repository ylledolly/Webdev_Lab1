let currentSlide2 = 0;

function changeSlide2(direction) {
    const slides2 = document.querySelectorAll('.slide2');
    slides2[currentSlide2].classList.remove('active');
    
    currentSlide2 += direction;

    if (currentSlide2 < 0) {
        currentSlide2 = slides2.length - 1; // Wrap to last slide
    } else if (currentSlide2 >= slides2.length) {
        currentSlide2 = 0; // Wrap to first slide
    }

    slides2[currentSlide2].classList.add('active');
    updateSliderPosition2();
}

function updateSliderPosition2() {
    const slides2 = document.querySelector('.slides2');
    slides2.style.transform = `translateX(-${currentSlide2 * 100}%)`;
}

