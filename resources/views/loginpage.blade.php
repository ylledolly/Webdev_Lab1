<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Login | KD</title>
</head>
<body>
    <div class="header">
        <div class="logo"><span>ꓘ</span>D</div>
    </div>
    <main class="login-box">
        <div class="login-header">
            <header><span>Log</span>in</header>
        </div>
        <form action="/welcome" method="POST">
            @csrf
            <div class="input-box">
                <input type="text" id="name" name="name" class="input-field" placeholder="Enter your name" value="{{ old('name') }}" required pattern="[A-Za-z]+" title="Only alphabetic characters are allowed.">
            </div>
            <div class="input-submit">
                <button type="submit" class="submit-btn" id="submit">Sign In</button>
            </div>
        </form>
    </main>
</body>
</html>
