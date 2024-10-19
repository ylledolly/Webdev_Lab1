
<!-- resources/views/welcome.blade.php -->
@extends('Components.Layout')

@section('title', 'Welcome Page')

@section('content')
    <input type="checkbox" id="check">
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
@endsection 