<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/resources/css/style.css">
        <title>True Gamer</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
            <div class="header__logo">True Games</div>
                <nav class="nav">
                </nav>
            </div>
        </div>
            @endif
        </header>
@yield('')
    </body>
</html>
