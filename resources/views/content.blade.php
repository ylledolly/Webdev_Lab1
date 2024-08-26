<!-- resources/views/content.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/content.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <input type="checkbox" id="check">

    <!-- Navigation Bar -->
    <section>
        <div class="navbar">
            <div class="logo"><span>ꓘ</span>D</div>
            <ol class="mainmenu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About me</a></li>
                <li><a href="{{ url('/content') }}" class="active">Portfolio</a></li>
                <li><a href="{{ url('/contact') }}">Contact me</a></li>
            </ol>
            <label for="check" class="fa-solid fa-bars"></label>
        </div>
    </section>

    <!-- section for the portfolio content -->
    <section class="portfolioSec" id="portfolioSec">

        <div class="profile-pic">
            <div class="image-container">
                <img src="{{ asset('images/me2.png') }}" alt="picture" class="front-image">
                <img src="{{ asset('images/me3.png') }}" alt="picture" class="back-image">
            </div>
        </div>
        
        <div class="portfoliotext-center">
            <h1><span>My </span>Portfolio</h1>
            <p>Explore a diverse collection of endeavors each representing a unique chapter of my learning and growth. 
                As you navigate these pages, you'll encounter projects that showcase my individual exploration of interests 
                and skills, as well as collaborative efforts where I've worked alongside my peers to bring ideas 
                to life and achieve shared objectives.</p>
        </div>

        <div class="portfolio-content">
            <div class="row">
                <img src="{{ asset('images/pcso lotto craze.png') }}" onclick="openImage(0)">
                <div class="row-main">
                    <div class="row-text">
                        <h5>PCSO Lotto Craze</h5>
                    </div>
                    <div class="row-icon">

                    </div>
                    <h4>C Language Program</h4>
                </div>
            </div>
            <div class="row">
                <img src="{{ asset('images/specialcalcu.png') }}" onclick="openImage(1)">
                <div class="row-main">
                    <div class="row-text">
                        <h5>Special Calculator</h5>
                    </div>
                    <div class="row-icon">

                    </div>
                    <h4>Java Project</h4>
                </div>
            </div>
            <div class="row">
                <img src="{{ asset('images/weconnect.png') }}" onclick="openImage(2)">
                <div class="row-main">
                    <div class="row-text">
                        <h5>WeConnect Front-end Application</h5>
                    </div>
                    <div class="row-icon">

                    </div>
                    <h4>HTML & CSS</h4>
                </div>
            </div>
            <div class="row">
                <img src="{{ asset('images/resume.png') }}" onclick="openImage(3)">
                <div class="row-main">
                    <div class="row-text">
                        <h5>Resume</h5>
                    </div>
                    <div class="row-icon">

                    </div>
                    <h4>HTML & CSS</h4>
                </div>
            </div>
            <div class="row">
                <img src="{{ asset('images/ecommerce.png') }}" onclick="openImage(4)">
                <div class="row-main">
                    <div class="row-text">
                        <h5>E-Commerce</h5>
                    </div>
                    <div class="row-icon">

                    </div>
                    <h4>HTML & CSS</h4>
                </div>
            </div>
            <div class="row">
                <img src="{{ asset('images/inventory.png') }}" onclick="openImage(5)">
                <div class="row-main">
                    <div class="row-text">
                        <h5>Hardware Inventory Management</h5>
                    </div>
                    <div class="row-icon">

                    </div>
                    <h4>Java</h4>
                </div>
            </div>
            <div class="row">
                <img src="{{ asset('images/payslip.png') }}" onclick="openImage(6)">
                <div class="row-main">
                    <div class="row-text">
                        <h5>Payslip Generator</h5>
                    </div>
                    <div class="row-icon">

                    </div>
                    <h4>Java</h4>
                </div>
            </div>
            <div class="row">
                <img src="{{ asset('images/dsa.png') }}" onclick="openImage(7)">
                <div class="row-main">
                    <div class="row-text">
                        <h5>Data Structure & Algorithms Interface</h5>
                    </div>
                    <div class="row-icon">

                    </div>
                    <h4>C</h4>
                </div>
            </div>
        </div>
    </section>
    <div class="footer">
        <div class="copyright">
            <p>2024 Karylle Dollesin, All Right Reserved.</p>
        </div>
    </div>
    <!-- For pop up image slider -->
    <div id="myModal" class="modal">
        <span class="close" onclick="closeImage()">&times;</span>
        <img class="modal-content" id="img01">
        <!-- Buttons for next and previous -->
        <button class="prev" onclick="plusSlides(-1)"><i class="fas fa-chevron-left"></i></button>
        <button class="next" onclick="plusSlides(1)"><i class="fas fa-chevron-right"></i></button>
    </div>

    <script src="{{ asset('js/portfolioJS.js') }}"></script>
</body>
</html>
