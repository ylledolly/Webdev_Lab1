
<!-- resources/views/contactus.blade.php -->
@extends('Components.Layout')

@section('title', 'Portfolio')

@section('content')
<section class="portfolioSec" id="portfolioSec">
    <div class="profile-pic">
        <div class="image-container">
            <img src="{{ asset('images/me2.png') }}" alt="picture" class="front-image">
            <img src="{{ asset('images/me3.png') }}" alt="picture" class="back-image">
        </div>
    </div>

    <div class="portfoliotext-center">
        <div class="portfolio-header">
            <h1><span>My </span>Portfolio</h1>
            <a href="{{ route('laboratory.activities') }}" class="nav-button">
                <i class="fas fa-flask"></i> Laboratory Activities
            </a>
        </div>
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
    <!-- For pop up image slider -->
    <div id="myModal" class="modal">
    <span class="close" onclick="closeImage()">&times;</span>
    <img class="modal-content" id="img01">
    <!-- Buttons for next and previous -->
    <button class="prev" onclick="plusSlides(-1)"><i class="fas fa-chevron-left"></i></button>
    <button class="next" onclick="plusSlides(1)"><i class="fas fa-chevron-right"></i></button>
    </div>

    <script src="{{ asset('js/portfolioJS.js') }}"></script>
@endsection
