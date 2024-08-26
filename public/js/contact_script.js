// script.js

(function () {
    emailjs.init("YOUR_USER_ID"); // Initialize EmailJS with your user ID
})();
    
document.getElementById('messageform').addEventListener('submit', function(event) {
    event.preventDefault();
    // Fetch form values
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    // Send email
    emailjs.send("YOUR_SERVICE_ID", "YOUR_TEMPLATE_ID", {
        from_name: name,
        from_email: email,
        message: message
    }).then(function(response) {
        console.log('Email sent:', response);
        alert('Message sent successfully. Thank you!');
        // Clear form fields
        document.getElementById('contact-form').reset();
    }, function(error) {
        console.error('Email error:', error);
        alert('Error sending message.');
    });
});
