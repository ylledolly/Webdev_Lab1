document.getElementById('rocket-launch').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default link behavior

    var rocketContainer = document.getElementById('rocket-container');
    rocketContainer.style.display = 'block';

    setTimeout(function() {
        rocketContainer.style.display = 'none';
        // Scroll to the about me section
        var aboutMeSection = document.getElementById('about-me-section');
        if (aboutMeSection) {
            aboutMeSection.scrollIntoView({ behavior: 'smooth' });
        } else {
            window.location.href = "about"; // Fallback if there is no about me section
        }
    }, 3000); // Adjust the duration (in milliseconds) for the rocket animation
});
