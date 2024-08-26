<!-- resources/views/contact.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <input type="checkbox" id="check">
    <section>
        <div class="navbar">
            <div class="logo"><span>ꓘ</span>D</div>
            <ol class="mainmenu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About me</a></li>
                <li><a href="{{ url('/content') }}">Portfolio</a></li>
                <li><a href="{{ url('/contact') }}" class="active">Contact me</a></li>
            </ol>
            <label for="check" class="fa-solid fa-bars"></label>
        </div>
    </section>

    <div class="container">
        <main class="row">
            <section class="col left">
                    <div class="contacttext-center">
                        <h1>Get in <span>Touch</span></h1>
                    </div>

                    <div class="contactInfo">
                        <div class="iconGroup">
                            <div class="iconItem">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="details">
                                <h4><span>PHONE</span></h4>
                                <span>09380405669</span>
                            </div>
                        </div>

                        <div class="iconGroup">
                            <div class="iconItem">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="details">
                                <h4><span>LOCATION</span></h4>
                                <span>Central 2, Abuyog, Sorsogon City</span>
                            </div>
                        </div>
                    </div>

                    <div class="socialmedia">
                        <a href="https://www.facebook.com/karylle.dollesin" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/mocnyyyyy" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://github.com/ylledolly" target="_blank"><i class="fa-brands fa-github"></i></a>
                    </div>
            </section>

            <section class="col right center-content">
                <form id="messageform">
                    <div class="inputGroup halfWidth">
                        <input type="text" id="name" placeholder="Your name" required>
                        <input type="email" id="email" placeholder="Email Address" required>
                        <textarea name="" id="message" cols="30" rows="10" placeholder="Write your message here" required></textarea>
                        <input type="submit" name="" value="Send Message" class="send-btn">
                    </div>
                </form>
                <script src="{{ asset('js/contact_script.js') }}"></script>
            </section>
        </main>
    </div>
    <div class="footer">
        <div class="copyright">
            <p>2024 Karylle Dollesin, All Right Reserved.</p>
        </div>
    </div>

</body>
</html>