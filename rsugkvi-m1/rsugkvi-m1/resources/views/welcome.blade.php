<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/resources/css/style.css">
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
            <a class="header__logo" href="{{route('Onas')}}">True Games</a>
                <nav class="nav">

                    <a class="nav__link" href="/public">О нас</a>
                        <a class="nav__link" href="/public/catalog">Католог</a>
                        <a class="nav__link" href="/public/mesto">Где нас найти?</a>
                        <a class="nav__link" href="">Корзина</a>

                @if (Route::has('login'))

                    @auth
                        <a href="{{ url('/home') }}" class="nav__link">Выйти</a>
                    @else
                        <a href="{{ route('login') }}" class="nav__link">Войти</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav__link">Зарегестрироваться</a>
                    @endif
                    @endauth
             </nav>
            </div>
        </div>
            @endif
        </header>
        <div class="page">
@yield('header')
        </div>
    </body>
</html>
