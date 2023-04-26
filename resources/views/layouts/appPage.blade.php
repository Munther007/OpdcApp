<!doctype html>
<html lang="ar">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("images/logo1.png")}}"/>
    <link rel="stylesheet" href="{{asset("css/home-style.css")}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta name="theme-color" content="#1885ed">
    <title>شركة توزيع المنتجات النفطية</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap');
        @import url("https://fonts.googleapis.com/css?family=Montserrat:400,400i,700");
        @import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");

        * {
            padding: 0;
            margin: 0;
        }


        .menu {
            padding: 0;
            margin: 0;
            width: 100%;
            height: 13vh;
            background-color: #6f79ff;
            position: absolute;
            z-index: 9;
            top: -13vh;
            transition: all ease-in-out 0.3s;
        }

        .open {
            top: 0;
        }

        .menu-center {
            width: 1080px;
            height: 100%;
            margin: 0 auto;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }


        .menu-center a {
            color: #FBFBFB;
            font-family: 'Montserrat', serif;
            font-size: 1em;
            font-weight: 200;
            text-decoration: none;
            margin-right: 20px;
            transition: color ease-in-out 0.3s;
        }

        .menu-center a:hover {
            color: rgb(48,76,76);
        }

        .menu-center a:active {
            transform: translate(0.5px, 0.5px);
        }

        #touch-btn {
            background-color: rgb(48,76,76);
            border-radius: 25px;
            padding: 17px;
            text-align: center;
            border: 1px solid rgb(48,76,76);
            transition: all ease-in-out 0.3s;
        }

        #touch-btn:hover {
            color: black;
            border: 1px solid rgb(48,76,76);
            background-color: #FBFBFB;
        }

        .header {
            height: 80vh;
        }

        .img-slider {
            height: 80vh;
            width: 100%;
            position: absolute;
            background-color: #6f79ff;;
            z-index: -1;
            overflow: hidden;
        }

        .img-slider figure {
            position: relative;
            width: 400%;
            margin: 0;
            left: 0;
            animation: 20s img-slider-anm infinite;
        }

        @keyframes img-slider-anm {
            0% {left: 0;}
            19% {left: 0;}
            24% {left: -100%;}
            45% {left: -100%;}
            50%  {left: -200%;}
            70% {left: -200%;}
            75% {left: -300%;}
            95% {left: -300%;}
            100% {left: 0;}
        }

        .sld {
            width: 25%;
            height: 80vh;
            float: left;
        }

        .one {
            background-image: url("public/images/landing1.png");
        ;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .two {
            background-image: url("public/images/landing2.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .three {
            background-image: url("public/images/landing3.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .four {
            background-image: url("public/images/landing4.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .owerlap {
            height: 80vh;
        }

        .hamburger {
            height: 60px;
            width: 60px;
            margin: 4vh 0 0 0;
            align-self: flex-start;
            cursor: pointer;
            z-index: 10;
            transition: all ease-in-out 0.3s;
        }

        .hamburger .line {
            height: 6px;
            width: 60px;
            background-color: #6f79ff;;
            border-radius: 50px;
            display: block;
            margin-bottom:10px;
            transition: all ease-in-out 0.5s;
        }


        .hamburger .line2 {
            height: 6px;
            width: 45px;
            background-color: #6f79ff;;
            border-radius: 50px;
            display: block;
            margin-bottom: 10px;
            transition: all ease-in-out 0.3s;
        }

        .hamburger .line3 {
            height: 6px;
            width: 30px;
            background-color: #6f79ff;;
            border-radius: 50px;
            display: block;
            margin-bottom: 10px;
            transition: all ease-in-out 0.5s;
        }

        .hamburger.active .line2 {
            transform: translateX(-50px);
            background-color: transparent;
        }

        .hamburger.active .line {
            transform: rotate(45deg) translate(37px, -22px);
            width: 45px;
        }

        .hamburger.active:hover .line {
            background-color: rgb(48,76,76);
            width: 45px;
        }

        .hamburger.active .line3 {
            transform: rotate(-45deg) translate(44px, 15px);
            width: 45px;
        }

        .hamburger.active:hover .line3 {
            background-color: rgb(48,76,76);
            width: 45px;
        }


        .hamburger:hover .line {
            width: 30px;
        }

        .hamburger:hover .line2 {
            width: 45px;
        }

        .hamburger:hover .line3 {
            width: 60px;
        }


        .center {
            height: 80vh;
            width: 1080px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        .bottomheader {
            margin: auto 0 15vh 0;
            display: flex;
            justify-content: space-between;
        }

        .bottomheader h2 {
            color: #FBFBFB;
            font-size: 4em;
            font-family: 'Exo 2', sans-serif;
        }

        .slider {
            height: 15px;
            width: 200px;
            margin-top: auto;
            margin-bottom: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .slider h5 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1em;
            font-weight: 200;
            color: #FBFBFB;
        }

        #prog-num::before {
            font-family: 'Montserrat', sans-serif;
            font-size: 1em;
            font-weight: 200;
            color: #FBFBFB;
            content: "01";
            animation: progress-num-animation;
            animation-duration: 20s;
            animation-iteration-count: infinite;
        }

        @keyframes progress-num-animation {
            0% {content: "01";}
            19% {content: "01";}
            24% {content: "02";}
            45% {content: "02";}
            50%  {content: "03";}
            70% {content: "03";}
            75% {content: "04";}
            95% {content: "04";}
            100% {content: "01";}
        }


        .progres-bar {
            width: 150px;
            height: 2px;
            background-color: #484848;
        }

        #progress {
            width: 0px;
            height: 2px;
            background-color: #FBFBFB;
            animation-name: progress-animation;
            animation-duration: 20s;
            animation-iteration-count: infinite;
        }

        @keyframes progress-animation {
            0% {
                width: 25%;
            }
            19% {
                width: 25%;
            }
            24% {
                width: 50%;
            }
            45% {
                width: 50%;
            }
            50% {
                width: 75%;
            }
            70% {
                width: 75%;
            }
            75% {
                width: 100%;
            }
            95% {
                width: 100%;
            }
            100% {
                width: 25%;
            }
        }
    </style>
</head>
<body dir="rtl">

<div class="menu">
    <div class="menu-center">
        <a href="{{route('books.index')}}">التعاميم الأدارية</a>
        <a href="{{route('laws.index')}}">القوانين العراقية</a>
        <a href="{{route('programs.index')}}">البرامج المكتبية</a>
        <a href="{{route('posts.index')}}">منشورات مفيدة</a>
        <a href="{{route('courses.index')}}">دورات تدريبية</a>
        <a href="{{route('phones.index')}}">دليل الهاتف</a>
        <a href="/login" id="touch-btn">تسجيل الدخول</a>
    </div>


</div>

<div class="owerlap">
    <div class="center">
        <div class="hamburger">
            <div class="line"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

        <div class="sect sect--padding-top mb-4">
            <div class="container mb-4">
                <main class="main ml-8 mr-8 mb-8" style="margin-bottom: 300px; margin-top: 100px ">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</div>



{{--</head>--}}
{{--<body dir="rtl">--}}
{{--<header class="header">--}}
{{--    <div class="container header__container" style="text-align: right;">--}}
{{--        <div class="header__logo"><img class="header__img" src="{{asset("images/logo1.png")}}" style="height: 80px; width: 80px" alt="">--}}
{{--            <h1 class="header__title">Munther<span class="header__light">.amer</span></h1>--}}
{{--        </div>--}}
{{--        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">--}}
{{--            <span class="sr-only">Toggle navigation</span>--}}
{{--            <span class="icon-bar"></span>--}}
{{--            <span class="icon-bar"></span>--}}
{{--            <span class="icon-bar"></span>--}}
{{--        </button>--}}

{{--        <div class="header__menu">--}}
{{--            <nav id="navbar" class="header__nav collapse">--}}
{{--                <ul class="header__elenco">--}}
{{--                    <li class="header__el "><a href="" class="header__link"></a></li>--}}
{{--                    <li class="header__el mr-5"><a href="/" class="header__link">الصفحة الرئيسية</a></li>--}}
{{--                    <li class="header__el"><a href="{{route('books.index')}}" class="header__link">التعاميم الأدارية</a></li>--}}
{{--                    <li class="header__el"><a href="{{route('laws.index')}}" class="header__link">القوانين العراقية</a></li>--}}
{{--                    <li class="header__el"><a href="{{route('programs.index')}}" class="header__link">البرامج المكتبية</a></li>--}}
{{--                    <li class="header__el"><a href="{{route('phones.index')}}" class="header__link">دليل الهاتف</a></li>--}}
{{--                    <li class="header__el"><a href="#contact" class="header__link">أتصل بنا</a></li>--}}
{{--                    <li class="header__el header__el--blue"><a href="/login" class="btn btn--white">تسجيل دخول</a></li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}


{{--<div class="sect sect--padding-top">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="site">--}}
{{--                    <h1 class="site__title">Fast paced way to grow your business</h1>--}}
{{--                    <h2 class="site__subtitle">Manage analytics like a boss</h2>--}}
{{--                    <div class="site__box-link">--}}
{{--                        <a class="btn btn--width"  href="">Pricing</a>--}}
{{--                        <a class="btn btn--revert btn--width" href="">Contact</a>--}}
{{--                    </div>--}}
{{--                    <img class="site__img" src="https://image.ibb.co/c7grYb/image3015.png">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="sect sect--padding-bottom">--}}
{{--    <div class="container">--}}
{{--        <h3  style="text-align: center">--}}
{{--            الخدمات التي يوفرها الموقع--}}
{{--        </h3>--}}
{{--        <div class="row row--center">--}}

{{--            <br>--}}
{{--        </div>--}}
{{--        <center>--}}
{{--            <div class="row row--center row--margin justify-content-center">--}}

{{--                <div class="col-md-3 col-sm-3 price-box price-box--blue">--}}
{{--                    <div class="price-box__wrap">--}}
{{--                        <div class="price-box__img"></div>--}}
{{--                        <h1 class="price-box__title">--}}
{{--                            التعاميم<br>الأدارية--}}
{{--                        </h1>--}}
{{--                        <div class="price-box__btn">--}}
{{--                            <a class="btn btn--blue btn--width" href="{{route('books.index')}}">تصفحها من هنا</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--                <div class="col-md-3 col-sm-3 price-box price-box--violet">--}}
{{--                    <div class="price-box__wrap">--}}
{{--                        <div class="price-box__img"></div>--}}
{{--                        <h1 class="price-box__title">--}}
{{--                            القوانين<br>العراقية--}}
{{--                        </h1>--}}
{{--                        <div class="price-box__btn">--}}
{{--                            <a class="btn btn--violet btn--width" href="{{route('laws.index')}}">تصفحها من هنا</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3 col-sm-3 price-box price-box--blue">--}}
{{--                    <div class="price-box__wrap">--}}
{{--                        <div class="price-box__img"></div>--}}
{{--                        <h1 class="price-box__title">--}}
{{--                            البرامج<br>المكتبية--}}
{{--                        </h1>--}}
{{--                        <div class="price-box__btn">--}}
{{--                            <a class="btn btn--blue btn--width" href="{{route('programs.index')}}">تصفحها من هنا</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3 col-sm-3 price-box price-box--violet">--}}
{{--                    <div class="price-box__wrap">--}}
{{--                        <div class="price-box__img"></div>--}}
{{--                        <h1 class="price-box__title">--}}
{{--                            دليل <br>الهاتف--}}
{{--                        </h1>--}}
{{--                        <div class="price-box__btn">--}}
{{--                            <a class="btn btn--violet btn--width" href="{{route('phones.index')}}">تصفحها من هنا</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </center>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="sect sect--white">--}}
{{--</div>--}}

{{--<center>--}}
{{--    <div class="sect sect--white">--}}
{{--        <div class="card">--}}
{{--            <div class="circle">--}}
{{--                <div class="content" style="text-align: right">--}}
{{--                    <h2> منذر عامر مجيد</h2>--}}
{{--                    <h2>مهندس أقدم</h2>--}}
{{--                    <p>حاصل على شهادتي الدبلوم الفني من معهد التدريب النفطي/بغداد وشهادة البكالوريوس في هندسة تقنية الحاسبات من كلية دجلة الجامعة</p>--}}
{{--                    <a href="">facebook</a>--}}
{{--                    <a href="">linkedln</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <img src="{{asset("images/emp.png")}}"  alt="">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</center>--}}




{{--<div class="sect sect--white">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <h1 class="row__title">--}}
{{--                Success Stories--}}
{{--            </h1>--}}
{{--            <h2 class="row__sub">Companies you <span class="row__sub--light">(will)</span> propably know</h2>--}}
{{--        </div>--}}
{{--        <div class="row row--margin row--text-center">--}}
{{--            <div class="col-md-8 col-sm-10 col-xs-12 row__carousel">--}}
{{--                <div id="myCarousel" class="carousel slide" data-ride="carousel">--}}
{{--                    <!-- Indicators -->--}}
{{--                    <ol class="carousel-indicators">--}}
{{--                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
{{--                        <li data-target="#myCarousel" data-slide-to="1"></li>--}}
{{--                        <li data-target="#myCarousel" data-slide-to="2"></li>--}}
{{--                    </ol>--}}

{{--                    <!-- Wrapper for slides -->--}}
{{--                    <div class="carousel-inner">--}}
{{--                        <div class="item active">--}}
{{--                            <div class="item__content">--}}
{{--                                <img class="item__img" src="https://cdn.worldvectorlogo.com/logos/slack-1.svg" alt="Slack"><span class="item__name">slack</span>--}}
{{--                                <p class="item__description">--}}
{{--                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="item__avatar"></div>--}}
{{--                            <p class="item__people">Josh Doe</p>--}}
{{--                            <p class="item__occupation">Ceo of Google</p>--}}
{{--                        </div>--}}

{{--                        <div class="item">--}}
{{--                            <div class="item__content">--}}
{{--                                <img class="item__img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Google-favicon-2015.png/150px-Google-favicon-2015.png" alt="Google"><span class="item__name">google</span>--}}
{{--                                <p class="item__description">--}}
{{--                                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="item__avatar"></div>--}}
{{--                            <p class="item__people">Mary Tompson</p>--}}
{{--                            <p class="item__occupation">Ceo of Dribbble</p>--}}
{{--                        </div>--}}

{{--                        <div class="item">--}}
{{--                            <div class="item__content">--}}
{{--                                <img class="item__img" src="https://www.hrexaminer.com/wp-content/uploads/2016/10/2016-10-11-hrexaminer-stackoverflow-6-xxl-sq-250px.png" alt="Stackoverflow"><span class="item__name">stackoverflow</span>--}}
{{--                                <p class="item__description">--}}
{{--                                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="item__avatar"></div>--}}
{{--                            <p class="item__people">Andrew Palmer</p>--}}
{{--                            <p class="item__occupation">Ceo of Slack</p>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                    <!-- Left and right controls -->--}}
{{--                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">--}}
{{--                        <img class="carousel-control__img" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjQ5NCAzMS40OTQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMxLjQ5NCAzMS40OTQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPHBhdGggZD0iTTEwLjI3Myw1LjAwOWMwLjQ0NC0wLjQ0NCwxLjE0My0wLjQ0NCwxLjU4NywwYzAuNDI5LDAuNDI5LDAuNDI5LDEuMTQzLDAsMS41NzFsLTguMDQ3LDguMDQ3aDI2LjU1NCAgYzAuNjE5LDAsMS4xMjcsMC40OTIsMS4xMjcsMS4xMTFjMCwwLjYxOS0wLjUwOCwxLjEyNy0xLjEyNywxLjEyN0gzLjgxM2w4LjA0Nyw4LjAzMmMwLjQyOSwwLjQ0NCwwLjQyOSwxLjE1OSwwLDEuNTg3ICBjLTAuNDQ0LDAuNDQ0LTEuMTQzLDAuNDQ0LTEuNTg3LDBsLTkuOTUyLTkuOTUyYy0wLjQyOS0wLjQyOS0wLjQyOS0xLjE0MywwLTEuNTcxTDEwLjI3Myw1LjAwOXoiIGZpbGw9IiM2Zjc5ZmYiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg=="  alt=""/>--}}

{{--                    </a>--}}
{{--                    <a class="right carousel-control" href="#myCarousel" data-slide="next">--}}
{{--                        <img class="carousel-control__img" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjQ5IDMxLjQ5IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMS40OSAzMS40OTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8cGF0aCBkPSJNMjEuMjA1LDUuMDA3Yy0wLjQyOS0wLjQ0NC0xLjE0My0wLjQ0NC0xLjU4NywwYy0wLjQyOSwwLjQyOS0wLjQyOSwxLjE0MywwLDEuNTcxbDguMDQ3LDguMDQ3SDEuMTExICBDMC40OTIsMTQuNjI2LDAsMTUuMTE4LDAsMTUuNzM3YzAsMC42MTksMC40OTIsMS4xMjcsMS4xMTEsMS4xMjdoMjYuNTU0bC04LjA0Nyw4LjAzMmMtMC40MjksMC40NDQtMC40MjksMS4xNTksMCwxLjU4NyAgYzAuNDQ0LDAuNDQ0LDEuMTU5LDAuNDQ0LDEuNTg3LDBsOS45NTItOS45NTJjMC40NDQtMC40MjksMC40NDQtMS4xNDMsMC0xLjU3MUwyMS4yMDUsNS4wMDd6IiBmaWxsPSIjNmY3OWZmIi8+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo="  alt=""/>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="sect sect--white sect--no-padding">--}}
{{--    <div class="container">--}}
{{--        <div class="row row--center">--}}
{{--            <div class="col-md-3 col-xs-6 col-sm-6 partner">--}}
{{--                <a href="#" class="partner__link">--}}
{{--                    <img class="partner_img" src="https://image.ibb.co/mOtHRw/fblogo.png" alt="">--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-md-3  col-xs-6 col-sm-6 partner">--}}
{{--                <a href="#" class="partner__link">--}}
{{--                    <img class="partner_img" src="https://image.ibb.co/nfpXRw/twitterlogo.png" alt="">--}}
{{--                </a>--}}
{{--            </div>--}}


{{--            <div class="col-md-3 col-xs-6 col-sm-6 partner">--}}
{{--                <a href="#" class="partner__link">--}}
{{--                    <img class="partner_img" src="https://image.ibb.co/imgOYb/googlelogo.png" alt="">--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-md-3 col-xs-6 col-sm-6 partner">--}}
{{--                <a href="#" class="partner__link">--}}
{{--                    <img class="partner_img" src="https://image.ibb.co/ebGAeG/dribbblelogo.png" alt="">--}}
{{--                </a>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--        <div class="row row--center">--}}
{{--            <div class="col-md-3 col-xs-6 col-sm-6 partner">--}}
{{--                <a href="#" class="partner__link">--}}
{{--                    <img class="partner_img" src="https://image.ibb.co/npV8Yb/gitlogo.png" alt="">--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-md-3 col-xs-6 col-sm-6 partner">--}}
{{--                <a href="#" class="partner__link">--}}
{{--                    <img class="partner_img" src="https://image.ibb.co/cGyZ6w/stacklogo.png" alt="">--}}
{{--                </a>--}}
{{--            </div>--}}


{{--            <div class="col-md-3 col-xs-6 col-sm-6 partner">--}}
{{--                <a href="#" class="partner__link">--}}
{{--                    <img class="partner_img" src="https://image.ibb.co/ij03zG/inlogo.png" alt="">--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-md-3 col-xs-6 col-sm-6 partner">--}}
{{--                <a href="#" class="partner__link">--}}
{{--                    <img class="partner_img" src="https://image.ibb.co/ekqdzG/codepenlogo.png" alt="">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="sect sect--white">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <h1 class="row__title">--}}
{{--                Our blog--}}
{{--            </h1>--}}
{{--            <h2 class="row__sub">Sneak peeks from our writings</h2>--}}
{{--        </div>--}}

{{--        <div class="row row--margin">--}}
{{--            <div class="col-md-6 article-pre__col">--}}
{{--                <a href="#" class="article-pre ">--}}
{{--                    <div class="article-pre__img article-pre__img--first"></div>--}}
{{--                    <h2 class="article-pre__info">--}}
{{--                        <span class="article-pre__cat">Protips • </span><span class="article-pre__aut"> by Ann Timothy</span> <span class="article-pre__date"> - 5 mins read</span>--}}
{{--                    </h2>--}}
{{--                    <h1 class="article-pre__title">How to improve analytics using few tools in Bricks<span class="article-pre__arrow--purple"> →</span></h1>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-md-6 article-pre__col">--}}
{{--                <a href="#" class="article-pre ">--}}
{{--                    <div class="article-pre__img article-pre__img--second"></div>--}}
{{--                    <h2 class="article-pre__info">--}}
{{--                        <span class="article-pre__cat">Pricing • </span><span class="article-pre__aut"> by Josh Ford</span> <span class="article-pre__date"> - 5 mins read</span>--}}
{{--                    </h2>--}}
{{--                    <h1 class="article-pre__title">Rich Thornett & Dan Coderholm about Dribbble in early 2009<span class="article-pre__arrow--purple">→</span></h1>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6 article-pre__col">--}}
{{--                <a href="#" class="article-pre ">--}}
{{--                    <div class="article-pre__img article-pre__img--fourth"></div>--}}
{{--                    <h2 class="article-pre__info">--}}
{{--                        <span class="article-pre__cat">Success Stories • </span><span class="article-pre__aut"> by Andrew Lincoln</span> <span class="article-pre__date"> - 5 mins read</span>--}}
{{--                    </h2>--}}
{{--                    <h1 class="article-pre__title">Steward Butterfield told us about his startup Slack<span class="article-pre__arrow--purple"> →</span></h1>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-md-6 article-pre__col">--}}
{{--                <a href="#" class="article-pre ">--}}
{{--                    <div class="article-pre__img article-pre__img--third"></div>--}}
{{--                    <h2 class="article-pre__info">--}}
{{--                        <span class="article-pre__cat">Protips • </span><span class="article-pre__aut"> by Ann Timothy</span> <span class="article-pre__date"> - 5 mins read</span>--}}
{{--                    </h2>--}}
{{--                    <h1 class="article-pre__title">How to improve analytics using few tools in Bricks<span class="article-pre__arrow--purple"> →</span></h1>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="sect sect--padding-bottom">--}}
{{--    <div class="container" dir="rtl">--}}
{{--        <div class="row">--}}
{{--            <h1 class="row__title ">--}}
{{--                أتصل بنا </h1> <br>--}}

{{--            <h2 class="row__sub mr-3 mt-2">ولا تتردد في طرح أي أسئلة</h2>--}}
{{--        </div>--}}
{{--        <div class="row row--margin">--}}
{{--            <div class="col-md-1"></div>--}}
{{--            <div class="col-md-4 ">--}}
{{--                <div class="contacts" style="text-align: right" >--}}
{{--                    <a href="#" class="contacts__link"> <space></space><img src="{{asset("images/logo1.png")}}" style="height: 50px; width: 50px" alt="">--}}
{{--                        <h1 class="contacts_title-ag">Eng.<span class="contacts--light"> Munther Amer</span></h1></a>--}}
{{--                    <p class="contacts__address" dir="rtl">--}}
{{--                        شركة توزيع المنتجات النفطية<br>--}}
{{--                        هيأة الدراسات والتخطيط والمتابعة<br>--}}
{{--                        قسم تقنية المعلومات والاتصالات <br>--}}
{{--                        شعبة الأنترنت وتكنولوجيا المعلومات--}}
{{--                    </p>--}}
{{--                    <p class="contacts__info">--}}
{{--                        tel. <a href="#" class="contacts__info-link">+9647500143437</a>--}}
{{--                    </p>--}}
{{--                    <p class="contacts__info">--}}
{{--                        email. <a href="#"class="contacts__info-link">munther_dev@opdc.oil.gov.iq</a>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-6">--}}
{{--                <form id="contact" class="form" action="/" method="post" dir="rtl" >--}}
{{--                    @csrf--}}
{{--                    @method('POST')--}}
{{--                    <div class="form-group">--}}
{{--                        <div class="form__field--half">--}}
{{--                            <input type="text" name="office" for="office" id="office"  placeholder="موقع العمل*" class="form__field form__text"/>--}}
{{--                        </div>--}}
{{--                        <div class="form__field--half">--}}
{{--                            <input type="text" name="name" for="office" id="office" placeholder="الأسم*" class="form__field form__text"/>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <div class="form__field--half">--}}
{{--                            <input type="email" name="email" for="email" id="email" placeholder="البريد الالكتروني*" class="form__field form__text"/>--}}
{{--                        </div>--}}
{{--                        <div class="form__field--half">--}}
{{--                            <input type="text" name="phone" for="phone" id="phone" placeholder="رقم الهاتف" class="form__field form__text"/>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <textarea type="text" name="message" for="message" id="message" placeholder="أترك لنا رسالتك*" class="form__field form__textarea"></textarea>--}}
{{--                        <button class="btn btn--up btn--width mb-5 mt-2" style="position: initial;" type="submit">أرسال</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <div class="col-md-1"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--    </div>--}}
{{--</div>--}}

<div class="sect sect--violet mt-10" style="margin-top: 400px" >
        <img src="{{asset("images/footer.png")}}"  class="career-img" style="margin-top: 200px;" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
{{--                <h1 class="career_title">Oh! Your have digged our website in search for the new job?</h1>--}}
{{--                <h1 class="career_sub">We will pleased to have you onboard! Check open positions.</h1>--}}
{{--                <a href="#" class="btn btn--white btn--width">Careers</a>--}}
            </div>
        </div>
    </div>

</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-xs-6">
{{--                <img class="footer__img" src="https://image.ibb.co/kcVou6/path3000.png" alt="">--}}
                <h1 class="footer__title">Eng.<span class="footer__light">Munther Amer</span></h1>
            </div>
            <div class="col-md-10 col-xs-6">
                <div class="footer__social">
                    <a href="#" class="footer__social-l">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYxMiA2MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDYxMiA2MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNjEyLDExNi4yNThjLTIyLjUyNSw5Ljk4MS00Ni42OTQsMTYuNzUtNzIuMDg4LDE5Ljc3MmMyNS45MjktMTUuNTI3LDQ1Ljc3Ny00MC4xNTUsNTUuMTg0LTY5LjQxMSAgICBjLTI0LjMyMiwxNC4zNzktNTEuMTY5LDI0LjgyLTc5Ljc3NSwzMC40OGMtMjIuOTA3LTI0LjQzNy01NS40OS0zOS42NTgtOTEuNjMtMzkuNjU4Yy02OS4zMzQsMC0xMjUuNTUxLDU2LjIxNy0xMjUuNTUxLDEyNS41MTMgICAgYzAsOS44MjgsMS4xMDksMTkuNDI3LDMuMjUxLDI4LjYwNkMxOTcuMDY1LDIwNi4zMiwxMDQuNTU2LDE1Ni4zMzcsNDIuNjQxLDgwLjM4NmMtMTAuODIzLDE4LjUxLTE2Ljk4LDQwLjA3OC0xNi45OCw2My4xMDEgICAgYzAsNDMuNTU5LDIyLjE4MSw4MS45OTMsNTUuODM1LDEwNC40NzljLTIwLjU3NS0wLjY4OC0zOS45MjYtNi4zNDgtNTYuODY3LTE1Ljc1NnYxLjU2OGMwLDYwLjgwNiw0My4yOTEsMTExLjU1NCwxMDAuNjkzLDEyMy4xMDQgICAgYy0xMC41MTcsMi44My0yMS42MDcsNC4zOTgtMzMuMDgsNC4zOThjLTguMTA3LDAtMTUuOTQ3LTAuODAzLTIzLjYzNC0yLjMzM2MxNS45ODUsNDkuOTA3LDYyLjMzNiw4Ni4xOTksMTE3LjI1Myw4Ny4xOTQgICAgYy00Mi45NDcsMzMuNjU0LTk3LjA5OSw1My42NTUtMTU1LjkxNiw1My42NTVjLTEwLjEzNCwwLTIwLjExNi0wLjYxMi0yOS45NDQtMS43MjFjNTUuNTY3LDM1LjY4MSwxMjEuNTM2LDU2LjQ4NSwxOTIuNDM4LDU2LjQ4NSAgICBjMjMwLjk0OCwwLDM1Ny4xODgtMTkxLjI5MSwzNTcuMTg4LTM1Ny4xODhsLTAuNDIxLTE2LjI1M0M1NzMuODcyLDE2My41MjYsNTk1LjIxMSwxNDEuNDIyLDYxMiwxMTYuMjU4eiIgZmlsbD0iIzcyOTNiMyIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo="  alt=""/>
                    </a>
                    <a href="#" class="footer__social-l">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDk2LjEyNCA5Ni4xMjMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDk2LjEyNCA5Ni4xMjM7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNNzIuMDg5LDAuMDJMNTkuNjI0LDBDNDUuNjIsMCwzNi41Nyw5LjI4NSwzNi41NywyMy42NTZ2MTAuOTA3SDI0LjAzN2MtMS4wODMsMC0xLjk2LDAuODc4LTEuOTYsMS45NjF2MTUuODAzICAgYzAsMS4wODMsMC44NzgsMS45NiwxLjk2LDEuOTZoMTIuNTMzdjM5Ljg3NmMwLDEuMDgzLDAuODc3LDEuOTYsMS45NiwxLjk2aDE2LjM1MmMxLjA4MywwLDEuOTYtMC44NzgsMS45Ni0xLjk2VjU0LjI4N2gxNC42NTQgICBjMS4wODMsMCwxLjk2LTAuODc3LDEuOTYtMS45NmwwLjAwNi0xNS44MDNjMC0wLjUyLTAuMjA3LTEuMDE4LTAuNTc0LTEuMzg2Yy0wLjM2Ny0wLjM2OC0wLjg2Ny0wLjU3NS0xLjM4Ny0wLjU3NUg1Ni44NDJ2LTkuMjQ2ICAgYzAtNC40NDQsMS4wNTktNi43LDYuODQ4LTYuN2w4LjM5Ny0wLjAwM2MxLjA4MiwwLDEuOTU5LTAuODc4LDEuOTU5LTEuOTZWMS45OEM3NC4wNDYsMC44OTksNzMuMTcsMC4wMjIsNzIuMDg5LDAuMDJ6IiBmaWxsPSIjNzI5M2IzIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg=="  alt=""/>
                    </a>

                    <a href="#" class="footer__social-l">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDQzOC41MzMgNDM4LjUzMyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDM4LjUzMyA0MzguNTMzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTQwOS4xMzMsMTA5LjIwM2MtMTkuNjA4LTMzLjU5Mi00Ni4yMDUtNjAuMTg5LTc5Ljc5OC03OS43OTZDMjk1LjczNiw5LjgwMSwyNTkuMDU4LDAsMjE5LjI3MywwICAgYy0zOS43ODEsMC03Ni40Nyw5LjgwMS0xMTAuMDYzLDI5LjQwN2MtMzMuNTk1LDE5LjYwNC02MC4xOTIsNDYuMjAxLTc5LjgsNzkuNzk2QzkuODAxLDE0Mi44LDAsMTc5LjQ4OSwwLDIxOS4yNjcgICBjMCwzOS43OCw5LjgwNCw3Ni40NjMsMjkuNDA3LDExMC4wNjJjMTkuNjA3LDMzLjU5Miw0Ni4yMDQsNjAuMTg5LDc5Ljc5OSw3OS43OThjMzMuNTk3LDE5LjYwNSw3MC4yODMsMjkuNDA3LDExMC4wNjMsMjkuNDA3ICAgczc2LjQ3LTkuODAyLDExMC4wNjUtMjkuNDA3YzMzLjU5My0xOS42MDIsNjAuMTg5LTQ2LjIwNiw3OS43OTUtNzkuNzk4YzE5LjYwMy0zMy41OTYsMjkuNDAzLTcwLjI4NCwyOS40MDMtMTEwLjA2MiAgIEM0MzguNTMzLDE3OS40ODUsNDI4LjczMiwxNDIuNzk1LDQwOS4xMzMsMTA5LjIwM3ogTTIxOS4yNywzMS45NzdjNDcuMjAxLDAsODguNDEsMTUuNjA3LDEyMy42MjEsNDYuODJsLTMuNTY5LDQuOTkzICAgYy0xLjQyNywyLjAwMi00Ljk5Niw1Ljg1Mi0xMC43MDQsMTEuNTY1Yy01LjcwOSw1LjcwOC0xMS45NDMsMTEuMTM2LTE4LjY5OSwxNi4yNzRjLTYuNzYyLDUuMTQtMTUuOTQsMTAuOTkyLTI3LjU1NSwxNy41NTkgICBjLTExLjYxMSw2LjU2Ny0yMy45ODIsMTIuMzI4LTM3LjExNywxNy4yNzZjLTIxLjg4Ny00MC4zNTUtNDUuMjk2LTc2LjcwOS03MC4yMzEtMTA5LjA2NCAgIEMxOTAuMDU1LDMzLjc4NCwyMDQuODA1LDMxLjk3NywyMTkuMjcsMzEuOTc3eiBNNzIuNTI0LDEwMy4wNmMxOC4yNzEtMjMuMDI2LDQwLjUzNy00MC43Myw2Ni44MDYtNTMuMSAgIGMyMy42MDEsMzEuNDA1LDQ2LjgyLDY3LjM4MSw2OS42NjIsMTA3LjkyMWMtNTcuODYyLDE1LjIyNy0xMTUuNTMyLDIyLjg0MS0xNzMuMDE0LDIyLjgzOCAgIEM0Mi4wNzIsMTUxLjk4LDU0LjI1MywxMjYuMDkxLDcyLjUyNCwxMDMuMDZ6IE00NC41NCwyODYuNzk0Yy04LjM3Ni0yMS40MTItMTIuNTYzLTQzLjkyMy0xMi41NjMtNjcuNTI3ICAgYzAtMi42NjYsMC4wOTgtNC42NjUsMC4yODYtNS45OTZjNjguOTA1LDAsMTMyLjk1NS04Ljg0OCwxOTIuMTQ5LTI2LjU1M2M2LjA5MiwxMS44LDExLjEzNiwyMi4zNjQsMTUuMTMzLDMxLjY5MyAgIGMtMC43NzEsMC4zOC0xLjk5OSwwLjgwNi0zLjcxMywxLjI4M2MtMS43MTksMC40NzYtMi45NTMsMC44MDYtMy43MjEsMC45OTlsLTEwLjU2MSwzLjcxMSAgIGMtNy4yMzYsMi42NjYtMTYuNzA4LDcuMjM1LTI4LjQwOSwxMy43MDNjLTExLjcwNCw2LjQ3OC0yNC4xMjMsMTQuMTgyLTM3LjI1NywyMy4xM2MtMTMuMTM0LDguOTQ5LTI2LjY5NiwyMC43OTctNDAuNjg0LDM1LjU1MyAgIGMtMTMuOTksMTQuNzUtMjUuNzQzLDMwLjU5MS0zNS4yNiw0Ny41M0M2NC43MTMsMzI3LjM4MSw1Mi45MTQsMzA4LjIsNDQuNTQsMjg2Ljc5NHogTTIxOS4yNyw0MDYuNTYgICBjLTQ0LjU0LDAtODQuMzItMTQuMjc3LTExOS4zNDMtNDIuODI1bDQuMjgzLDMuMTQyYzYuNjYxLTE0LjY2LDE2LjQ2Mi0yOC43NDYsMjkuNDA4LTQyLjI1NyAgIGMxMi45NDQtMTMuNTExLDI1LjQxLTI0LjQxMywzNy40MDEtMzIuNjk1YzExLjk5MS04LjI3NCwyNS4wMjgtMTYuMDc3LDM5LjExNS0yMy40MTRjMTQuMDg0LTcuMzIzLDIzLjY5MS0xMS45OTEsMjguODM1LTEzLjk4MyAgIGM1LjE0LTEuOTk4LDkuMjMzLTMuNTcyLDEyLjI3OC00LjcxNmwwLjU2OC0wLjI4N2gwLjU3NWMxOC42NDcsNDguOTE2LDMxLjk3Nyw5Ni4zMTMsMzkuOTY4LDE0Mi4xODQgICBDMjY4Ljc1Niw0MDEuNjExLDI0NC4zOTcsNDA2LjU1NywyMTkuMjcsNDA2LjU2eiBNMzc2Ljg3NiwzMjAuNDc5Yy0xNC4wODYsMjEuNzk2LTMxLjY5NiwzOS44MzQtNTIuODE3LDU0LjEwNCAgIGMtNy44MS00My43NzYtMTkuOTg1LTg4LjQxNS0zNi41NDktMTMzLjkwMmMzNy44NzctNS45MDcsNzYuOC0zLjE0MiwxMTYuNzcxLDguMjc0ICAgQzQwMC4wOTIsMjc0Ljg0MSwzOTAuOTU1LDI5OC42ODcsMzc2Ljg3NiwzMjAuNDc5eiBNNDAzLjcwNiwyMTYuNjk4Yy0xLjkwMy0wLjM3OC00LjI4NS0wLjgxLTcuMTM5LTEuMjgzICAgYy0yLjg1NC0wLjQ3My02LjMzMS0xLjA0Ny0xMC40MjQtMS43MTNjLTQuMDg3LTAuNjY2LTguNjYyLTEuMjgzLTEzLjcwMi0xLjg1NWMtNS4wNDUtMC41NzEtMTAuNDIxLTEuMDkzLTE2LjEzNi0xLjU2OSAgIGMtNS43MDgtMC40NzgtMTEuOC0wLjg1NS0xOC4yNjgtMS4xNDNjLTYuNDc5LTAuMjg0LTEzLjA0Mi0wLjQyOC0xOS43MDUtMC40MjhjLTYuNjU2LDAtMTMuNjU3LDAuMTkzLTIwLjk4MSwwLjU3MSAgIGMtNy4zMjYsMC4zNzUtMTQuNDE0LDEuMDQ5LTIxLjI2NSwxLjk5OWMtMC41NzUtMC45NTMtMS4yODctMi41MjQtMi4xNDMtNC43MTRjLTAuODU1LTIuMTg3LTEuNDc5LTMuODU1LTEuODQ4LTQuOTk3ICAgYy0zLjYyMS03Ljk5NC03LjgxLTE3LjAzNi0xMi41NzMtMjcuMTIxYzEzLjEzNC01LjMzMywyNS42NTItMTEuNDY5LDM3LjU1NS0xOC40MThjMTEuODkyLTYuOTQ5LDIxLjQwMi0xMy4xMzEsMjguNTQ0LTE4LjU1NSAgIGM3LjEzOS01LjQzLDEzLjg5NS0xMS4xODgsMjAuMjctMTcuMjc3YzYuMzc5LTYuMDksMTAuNTEzLTEwLjMyMywxMi40MjMtMTIuNzAzYzEuOTA2LTIuMzg0LDMuNzEzLTQuNzE0LDUuNDI0LTYuOTk1bDAuMjg3LTAuMjg4ICAgYzI3Ljc4OCwzMy44OCw0MS45NzQsNzIuODk3LDQyLjUzOCwxMTcuMDU5TDQwMy43MDYsMjE2LjY5OHoiIGZpbGw9IiM3MjkzYjMiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K"  alt=""/>
                    </a>

                    <a href="" class="footer__social-l">
                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDQzMC4xMTcgNDMwLjExNyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDMwLjExNyA0MzAuMTE3OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggaWQ9IkxpbmtlZEluIiBkPSJNNDMwLjExNywyNjEuNTQzVjQyMC41NmgtOTIuMTg4VjI3Mi4xOTNjMC0zNy4yNzEtMTMuMzM0LTYyLjcwNy00Ni43MDMtNjIuNzA3ICAgYy0yNS40NzMsMC00MC42MzIsMTcuMTQyLTQ3LjMwMSwzMy43MjRjLTIuNDMyLDUuOTI4LTMuMDU4LDE0LjE3OS0zLjA1OCwyMi40NzdWNDIwLjU2aC05Mi4yMTljMCwwLDEuMjQyLTI1MS4yODUsMC0yNzcuMzJoOTIuMjEgICB2MzkuMzA5Yy0wLjE4NywwLjI5NC0wLjQzLDAuNjExLTAuNjA2LDAuODk2aDAuNjA2di0wLjg5NmMxMi4yNTEtMTguODY5LDM0LjEzLTQ1LjgyNCw4My4xMDItNDUuODI0ICAgQzM4NC42MzMsMTM2LjcyNCw0MzAuMTE3LDE3Ni4zNjEsNDMwLjExNywyNjEuNTQzeiBNNTIuMTgzLDkuNTU4QzIwLjYzNSw5LjU1OCwwLDMwLjI1MSwwLDU3LjQ2MyAgIGMwLDI2LjYxOSwyMC4wMzgsNDcuOTQsNTAuOTU5LDQ3Ljk0aDAuNjE2YzMyLjE1OSwwLDUyLjE1OS0yMS4zMTcsNTIuMTU5LTQ3Ljk0QzEwMy4xMjgsMzAuMjUxLDgzLjczNCw5LjU1OCw1Mi4xODMsOS41NTh6ICAgIE01LjQ3Nyw0MjAuNTZoOTIuMTg0di0yNzcuMzJINS40NzdWNDIwLjU2eiIgZmlsbD0iIzcyOTNiMyIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo="  alt=""/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script >
    $("#myCarousel").carousel({
        interval: false
    });
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>



{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">--}}

{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}

{{--    <!-- Styles -->--}}
{{--    <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}

{{--    @livewireStyles--}}

{{--    <!-- Scripts -->--}}
{{--    <script src="{{ mix('js/app.js') }}" defer></script>--}}
{{--</head>--}}
{{--<body class="font-sans antialiased" dir="rtl">--}}
{{--<x-jet-banner></x-jet-banner>--}}

{{--<div class="min-h-screen bg-gray-100">--}}
{{--@include('layouts.nav.web.navigation-menu')--}}

{{--<!-- Page Heading -->--}}
{{--    @if (isset($header))--}}
{{--        <header class="bg-white shadow">--}}
{{--            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                {{ $header }}--}}
{{--            </div>--}}
{{--        </header>--}}
{{--@endif--}}

{{--<!-- Page Content -->--}}
{{--    <main>--}}
{{--        @yield('content')--}}
{{--    </main>--}}
{{--</div>--}}

{{--@stack('modals')--}}

{{--@livewireScripts--}}

{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
{{--</body>--}}

{{--</html>--}}
