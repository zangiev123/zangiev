<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <link rel="stylesheet" href="/resources/css/style.css">
    <title>Document</title>
</head>
<body>
    <!--Шапка-->
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">True Games</div>
                <nav class="nav">
                    <a class="nav__link" href="/public">О нас</a>
                    <a class="nav__link" href="/public/catalog">Католог</a>
                    <a class="nav__link" href="">Где нас найти?</a>
                    <a class="nav__link" href="">Регистрация</a>
                    <a class="nav__link" href="">Вход</a>
                </nav>
            </div>
        </div>
    </header>
    @yield('header')
<!--Шапка-->
<!--главная страница-->
<!--главная страница-->
=======
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Road+Rage&family=Roboto:wght@300&display=swap" 
    rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS glowing icons</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">kjuj</div>
            
            <nav class="nav">
                <a class="nav__link active" href="index3.html">О нас</a>
                <a class="nav__link" href="index2.html">Католог</a>
                <a class="nav__link" href="index3.html">Телефон</a>
                <a class="nav__link" href="index3.html">Поддержка</a>
                <a class="nav__link" href="index1.html">Вход</a>
            </nav>
        </div>
    </div>
</header>

<div class="intro">
    <div class="container">
        <div class="intro__inner">
            <h2 class="intro__subtitle"></h2>
            <h1 class="intro__title">111</h1>
            
            <a class="btn" href="#">111</a>

            
        </div>
    </div>
<style>
body{
    margin: 0;
    font-family: 'Roboto', sans-serif;

    font-size: 15px;
    line-height: 1.6;
    color: #000;
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
}

.container1{
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 2000px;
    width: 100%;
    height: 100vh;
    background-color:#000;
    -webkit-background-size: cover;
    background-size: cover;
    line-height: 1;
}

.container2{
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 2000px;
  width: 100%;
  height: 100vh;
  background-color: #000;
  -webkit-background-size: cover;
  background-size: cover;
  line-height: 1;
}

/*intro*/
.intro{
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    height: 100vh;
    background-color:#ffffff;
    /*выравнивание по всей площади*/
    -webkit-background-size: cover;
    background-size: cover;
    line-height: 1;
       
}

.intro__inner{ 
    width: 100%;
    max-width: 880px;
    width: 0 auto;   
    text-align: center;
    margin: 0 auto;
}

.intro__title{
    color: #000;
    font-size: 60px;
    font-weight: 700;
    text-transform: uppercase;
    text-align: center;
    line-height: 1;
    
}

.intro__title:after{
    content: "";
    display: block;
    width: 210px;
    height: 3px;
    margin: 20px auto 20px;

    background-color: #000;


}

.intro__subtitle{
    font-size: 72px;
    color: #000;
    font-family: 'Road Rage', cursive;
    text-align: center;

}

/*Header*/
.header{
    width: 100%;
    padding-top: 30px;

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
    color: #000;
}
/*Nav*/
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
    
    color: #000;
    text-decoration: none;

    transition: color 0.2s linear;

}

.nav__link:after{
    content: "";
    display: block;
    width: 100%;
    height: 3px;
    opacity: 0;

    
    background-color: #000;

    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1;
    transition: opacity 0.2s linear;
}

.nav__link:hover{
    color: #000;

}


.nav__link:hover:after{
    opacity: 1;
}

/*Button*/
.btn{
    display: inline-block;
    vertical-align: top;
    padding: 10px 15px;

    position: absolute;
    bottom: 0px;

    border: 3px solid #000;
    font-size: 16px;
    font-weight: 700;
    color: #000
    text-transform: uppercase;
    text-decoration: none;
    transition:  background 0.2s
    linear, color 0.2s linear;

    
}

.btn:hover{
    background-color: rgb(30, 255, 0);
    color: rgb(255, 0, 0);
}
</style>
>>>>>>> 633cfdf08b1a2dd18314d33a4bbd431a70e0f297
</body>
</html>