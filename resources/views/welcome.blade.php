<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <input type="checkbox" id="check">
        <section>
            <div class="navbar">
                <div class="logo"><span>ꓘ</span>D</div>
                <ol class="mainmenu">
                    <li><a href="{{ url('/') }}" class="active">Home</a></li>
                    <li><a href="{{ url('/about') }}">About me</a></li>
                    <li><a href="{{ url('/content') }}">Portfolio</a></li>
                    <li><a href="{{ url('/contact') }}">Contact me</a></li>
                </ol>
                <label for="check" class="fa-solid fa-bars"></label>
            </div>
            <section class="home">
                <div class="home-container">
                    <div class="animated-text">
                        <h1>I am<span></span></h1>
                    </div>
                    <p>Welcome to my digital space where creativity meets code! This is my corner of the internet where you can explore my projects, ideas, 
                        and all things related to the IT field. I’m a junior BSIT student, excited to share my journey and innovations with you. 🚀</p>
                        
                    <p>Pleasure to meet you, and let's make some digital magic together! 💻🪄</p>

                    <div class="icon">
                        <a href="https://www.facebook.com/karylle.dollesin" target="_blank">
                            <i class="fa-brands fa-facebook-f"><span></span></i>
                        </a><br>
                        <a href="https://www.instagram.com/mocnyyyyy" target="_blank">
                            <i class="fa-brands fa-instagram"><span></span></i>
                        </a><br>
                        <a href="mailto: dollesinkarylle@gmail.com" target="_blank">
                            <i class="fa-solid fa-envelope"><span></span></i>
                        </a><br>
                        <a href="https://github.com/ylledolly" target="_blank">
                            <i class="fa-brands fa-github"><span></span></i>
                        </a><br>
                    </div>
                    <a href="{{ url('/about') }}" class="btn" id="rocket-launch">INTERACT WITH ME</a>

                    <div id="rocket-container">
                        <div id="rocket"></div>
                        <div id="smoke1" class="smoke"></div>
                        <div id="smoke2" class="smoke"></div>
                    </div>
                    <script src="{{ asset('js/rocket-animation.js') }}"></script>

                </div>
                <div class="image_container">
                    <img src="{{ asset('images/me1.png') }}" alt="user pic">
                </div>
            </section>
        </section>       
</body>
</html>