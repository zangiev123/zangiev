<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/style2.css">
    <title>True Games</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">True Games</div>

                <nav class="nav">
                    <a class="nav__link active" href="#">О нас</a>
                    <a class="nav__link" href="#">Католог</a>
                    <a class="nav__link" href="#">Где нас найти?</a>
                    <a class="nav__link" href="#">Регистрация</a>
                    <a class="nav__link" href="#">Вход</a>
                </nav>
            </div>
        </div>
    </header>
@yield('main_content')
<style>
body{
    margin: 0;
    font-family: 'Roboto', sans-serif;

    font-size: 15px;
    line-height: 1.6;
    color: #ffffff;
}
*,
*:before,
*:after {
    box-sizing: border-box;
}

h1, h2, h3, h4, h5, h6 {
    margin: 0;
}

/*container*/
.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    color: #ffffff;
}

.header{
    width: 100%;
    padding-top: 30px;
    background-color: #000;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}

.header__inner{
    display: flex;
    justify-content: space-between;
    align-items: center;

}

.header__logo{
    font-size: 30px;
    font-weight: 700;
    color: #ffffff;
}

.nav{
    font-size: 14px;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;

}

.nav__link{
    display: inline-block;
    vertical-align:top;
    margin: 0 15px;
    position: relative;

    color: #ffffff;
    text-decoration: none;

    transition: color 0.2s linear;

}


.nav__link:after{
    content: "";
    display: block;
    width: 100%;
    height: 3px;
    opacity: 0;


    background-color: #ffffff;

    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1;
    transition: opacity 0.4s linear;
}

.nav__link:hover{
    color: #ffffff;

}

.nav__link:hover:after{
    opacity: 1;
}
</style>
</body>
</html>
