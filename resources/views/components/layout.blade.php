<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <title>Chillzone</title>
</head>
<body>
    <header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo"><a href="/">Chillzone</a></div>

            <nav class="nav">
                <a class="nav__link active" href="/">Home</a>
                <a class="nav__link" href="/Games">Games</a>
                <a class="nav__link" href="/Rules">Rules</a>
                <a class="nav__link" href="/Contact">Contact</a>
                <a class="nav__link" href="/registration">Registration</a>
                <a class="nav__link" href="route('inner')">Inner</a>
            </nav>
        </div>
    </div>
</header>
<script src="./js/Scripts.js"></script>
{{$slot}}
</body>
</html>
