<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="{{ asset('style.css') }}" rel="stylesheet" type="text/css" >
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
                <a class="nav__link" href="{{route('news', app()->getLocale()) }}">{{ __('News') }}</a>
                <a class="nav__link" href="{{route('rules', app()->getLocale()) }}">{{ __('Rules') }}</a>
                <a class="nav__link" href="{{route('contact', app()->getLocale()) }}">{{ __('Contact') }}</a>
                @if (!Auth::check())
                <a class="nav__link" href="{{route('user.registration',app()->getLocale()) }}">{{ __('Registration') }}</a>
                <a class="nav__link" href="{{route('user.login',app()->getLocale()) }}">{{ __('Login') }}</a>
                @else
                <a class="nav__link" href="{{route('user.private',app()->getLocale()) }}">{{ __('My Profile') }}</a>
                <a class="nav__link" href="{{ route('user.logout', app()->getLocale()) }}">{{ __('Logout') }}</a>
                @endif
                <a class="nav__link" href ="/en" class="nav-link">EN</a>
                <a class="nav__link" href ="/lv" class="nav-link">LV</a>
            </nav>
        </div>
    </div>
</header>
<script src="{{ asset('Scripts.js') }}"></script>
{{$slot}}
</body>
</html>
