<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/accessDenied.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Oh-oh!</title>
</head>
<body>
    <div class="header">
        <div class="logo"><span>ꓘ</span>D</div>
    </div>
    <div class="denied-box">
        <img src="{{ asset('images/error303.png') }}" alt="">
        <p>Sorry, You are not authorized to access this site.</p>
        <button class="back-button" onclick="history.back()">Go Back</button>
    </div>
</body>
</html>