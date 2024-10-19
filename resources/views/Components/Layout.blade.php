<!-- resources/views/Components/Layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <input type="checkbox" id="check">

    <!-- Navbar -->
    <section>
        <div class="navbar">
            <div class="logo"><span>ꓘ</span>D</div>
            <ol class="mainmenu">
                <li><a href="{{ url('/welcome') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About me</a></li>
                <li><a href="{{ url('/content') }}">Portfolio</a></li>
                <li><a href="{{ url('/contact') }}" class="active">Contact me</a></li>
            </ol>
            <label for="check" class="fa-solid fa-bars"></label>
        </div>
    </section>

    <!-- Content -->
    <main>
        <!-- This is where the content of the child views will be displayed -->
        @yield('content') <!--call the webpages to display its content-->
    </main>

    <!-- Footer -->
    @if(!isset($hideNavAndFooter) || !$hideNavAndFooter)
        <footer class="footer">
            <div class="copyright">
                <p>2024 Karylle Dollesin, All Right Reserved.</p>
            </div>
        </footer>
    @endif

    <script src="{{ asset('javascript/script.js') }}"></script>
</body>
</html>
