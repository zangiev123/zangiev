<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/сайт.css">
    <title>Document</title>
</head>
<body>
    <!--Шапка-->
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">True Games</div>

                <nav class="nav">
                    <a class="nav__link" href="index3.html">О нас</a>
                    <a class="nav__link" href="index2.html">Католог</a>
                    <a class="nav__link" href="index3.html">Где нас найти?</a>
                    <a class="nav__link" href="index3.html">Регистрация</a>
                    <a class="nav__link" href="index1.html">Вход</a>
                </nav>
            </div>
        </div>
    </header>

<!--Шапка-->
<!--главная страница-->
<div class="page">
    <div class="border">
        <div class="text_border_1">
        <h1 class="text">Главная страница</h1>
        </div>
        <div class="text_border_2">
        <h2 class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. A facere consequuntur impedit voluptatibus facilis autem nostrum vel perferendis enim fugiat dolore, quo magnam labore ex ad cupiditate, exercitationem ducimus accusantium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nihil totam esse nemo iure sint ea adipisci quidem cum odit quas expedita iusto error rem, unde qui, delectus, explicabo minus.</h2>
        </div>
    </div>
</div>
<!--главная страница-->

</body>
</html>


DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/сайт.css">
    <title>Document</title>
</head>
<body>
    <!--Шапка-->
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">True Games</div>

                <nav class="nav">
                    <a class="nav__link" href="#">О нас</a>
                    <a class="nav__link" href="#">Католог</a>
                    <a class="nav__link" href="#">Где нас найти?</a>
                    <a class="nav__link" href="#">Регистрация</a>
                    <a class="nav__link" href="#">Вход</a>
                </nav>
            </div>
        </div>
    </header>
<!--Шапка-->
<!--Каталог-->
<div class="page">
    <div class="box_name">КАТЕГОРИИ ТОВАРОВ</div>
        <div class="box">
        <a class="tip" href="#">
            <div class="tip_name">
                <img src="./img/1.jpg.jpg" alt="">Приставки</div>
        </a>
        <a class="tip" href="#">
            <div class="tip_name">
                <img src="./img/2.jpg.jpg" alt="">Игры</div>
        </a>
        <a class="tip" href="#">
            <div class="tip_name">
                <img src="./img/3.jpg.jpg" alt="">Аксессуары</div>
        </a>

    </div>
</div>
<!--Каталог-->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/сайт.css">
    <title>Document</title>
</head>
<body>
    <!--Шапка-->
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">True Games</div>

                <nav class="nav">
                    <a class="nav__link" href="#">О нас</a>
                    <a class="nav__link" href="#">Католог</a>
                    <a class="nav__link" href="#">Где нас найти?</a>
                    <a class="nav__link" href="#">Регистрация</a>
                    <a class="nav__link" href="#">Вход</a>
                </nav>
            </div>
        </div>
    </header>
    <!--Шапка-->
     <!--товары-->
    <div class="page">
        <div class="section">
            <div class="section_name">ТОВАРЫ</div>
                <div class="section_head">
                    <div class="section_catalog">
                        <a class="section_tovar"></a>
                        <a class="section_tovar"></a>
                        <a class="section_tovar"></a>
                        <a class="section_tovar"></a>
                        <a class="section_tovar"></a>
                        <a class="section_tovar"></a>
                        <a class="section_tovar"></a>
                        <a class="section_tovar"></a>
                    </div>
            </div>
        </div>
    </div>
       <!--товары-->
</body>
</html>

/*шапка*/
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
/*шапка*/

/*страница*/
.page{
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    height: 100vh;
    background-color: rgb(62, 68, 61);
    /*background: url("../images/b9a36d90547f6d643d654227cfb98b69.jpg") center
    no-repeat;*/
    /*выравнивание по всей площади*/
    -webkit-background-size: cover;
    background-size: cover;
    line-height: 1;

}
/*главная страница*/

.border{
    margin: 0 auto;
    width: 950px;
    height: 650px;
    background-color: rgb(62, 68, 61);
    border: 3px solid #000;


}


.text{
    color: #000;
}
.text_border_1{
    font-size: 35px;
    margin: 20px;
    display: flex;
    justify-content: flex-start;
    flex-direction: column;
}


.text_border_2{
    margin-top: 35px;
    line-height: 1.5;
    margin: 20px;
    display: flex;
    justify-content: flex-start;
    flex-direction: column;
}
/*главная страница*/

/*каталог*/
.box{
    margin: 0 auto;
    margin-bottom: 200px;

}

.tip{
    width: 282px;
    height: 250px;
    display: flex;
    text-align: center;
    flex-wrap: wrap;
    display: inline-block;
    margin: 0 45px 120px;
    text-decoration: none;




}

.box_name{
    margin: 0 auto 50px;

    min-width: 1200px;
    text-align: center;
    font-size: 40px;
    color: #ffffff;
    border-radius: 5px;
    background-color: #000;
    border: 3px solid #000000;
}

.tip_name{

    text-align: center;
    font-size: 25px;
    color: #ffffff;
    border: 5px solid #000000;
    background-color: #000;
    border-radius: 5px;


}

/*каталог*/


/*товары*/

.section{
    width: 1400px;
    height: 100%;
    background-color:#ffffff;
    margin: 0 auto;

}

.section_head{
    width: 100%;
    height: 150px;
    background-color: #000;

}

.section_name{
    color: #ffffff;
    font-size: 50px;
}

/*товары*/

