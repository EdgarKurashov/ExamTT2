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
            <div class="header__logo"><a href="/">{{ __('Chillzone') }}</a></div>

            <nav class="nav">
                <a class="nav__link active" href="/">{{ __('Home') }}</a>
                <a class="nav__link" href="/Games">{{ __('Games') }}</a>
                <a class="nav__link" href="/Rules">{{ __('Rules') }}</a>
                <a class="nav__link" href="/Contact">{{ __('Contact') }}</a>
                <a class="nav__link" href="{{route('user.registration',app()->getLocale())  }}">{{ __('Registration') }}</a>
                <a class="nav__link" href="{{route('user.login',app()->getLocale()) }}">{{ __('Login') }}</a>
                <a class="nav__link" href="/inner">{{ __('Inner') }}</a>
                <a class="nav__link" href="/logout">{{ __('Logout') }}</a>
            </nav>
        </div>
    </div>
</header>
<script src="./js/Scripts.js"></script>
{{$slot}}
</body>
</html>
