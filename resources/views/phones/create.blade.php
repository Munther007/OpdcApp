<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset("images/icons/favicon.ico")}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/animate/animate.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/css-hamburgers/hamburgers.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/select2/select2.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("css/util.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("css/main.css")}}">
    <!--===============================================================================================-->
</head>
<style>
    .phone {
        position: relative;
        margin: 100px auto;
        width: 80px;
        height: 140px;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        background: #1f4568;
        -webkit-perspective: 200px;
        -moz-perspective: 200px;
        -ms-perspective: 200px;
        perspective: 200px;
    }

    .phone:before {
        position: absolute;
        top: 7px;
        left: 50%;
        margin-left: -3px;

        width: 6px;
        height: 6px;

        -webkit-border-radius: 3px;

        -moz-border-radius: 3px;
        border-radius: 3px;
        background: #6f79ff;
        content: '\0020';
    }

    .phone:after {
        position: absolute;
        bottom: 2px;
        left: 50%;
        margin-left: -6px;

        width: 12px;
        height: 12px;

        -webkit-border-radius: 6px;

        -moz-border-radius: 6px;
        border-radius: 6px;
        background: #6d809c;
        content: '\0020';
    }

    .phone .cover,
    .phone .content {
        position: absolute;
        top: 20px;
        left: 8px;
        z-index: 2;
        margin: 0;
        padding: 0;
        width: 64px;
        height: 102px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    .phone .content {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding: 13px 0 0 15px;
        background: #ffffff;
        list-style: none;
    }

    .phone .content:before,
    .phone .content:after,
    .phone .content li {
        display: block;
        margin-top: 6px;
        width: 32px;
        height: 10px;
        background: #6f79ff;
        content: '\0020';
    }

    .phone .content li:last-child {
        width: 25px;
    }

    .phone .content:before {
        width: 20px;
    }

    .phone .cover {
        -webkit-transform-origin: 100% 50%;
        -moz-transform-origin: 100% 50%;
        transform-origin: 100% 50%;
    }

    .phone .cover:nth-child(2) {
        background: #e2ffff;
        -webkit-animation: toggle1 2s;
        animation: toggle1 2s;
        -webkit-animation-timing-function: cubic-bezier(1, 0, 0, 1);
        animation-timing-function: cubic-bezier(1, 0, 0, 1);
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
    }

    .phone .cover:nth-child(3) {
        background: #6f79ff;
        -webkit-animation: toggle2 2s;
        animation: toggle2 2s;
        -webkit-animation-timing-function: cubic-bezier(1, 0, 0, 1);
        animation-timing-function: cubic-bezier(1, 0, 0, 1);
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
    }

    .phone .cover:nth-child(4) {
        background: #98ffff;
        -webkit-animation: toggle3 2s;
        animation: toggle3 2s;
        -webkit-animation-timing-function: cubic-bezier(1, 0, 0, 1);
        animation-timing-function: cubic-bezier(1, 0, 0, 1);
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
    }

    @-webkit-keyframes toggle1 {
        0% {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            transform: rotateY(0deg);
            z-index: 1;
        }
        50% {
            -webkit-transform: rotateY(102deg);
            -moz-transform: rotateY(102deg);
            transform: rotateY(102deg);
            z-index: 10;
        }
        100% {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            transform: rotateY(0deg);
            z-index: 1;
        }
    }

    @keyframes toggle1 {
        0% {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            transform: rotateY(0deg);
            z-index: 1;
        }
        50% {
            -webkit-transform: rotateY(102deg);
            -moz-transform: rotateY(102deg);
            transform: rotateY(102deg);
            z-index: 10;
        }
        100% {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            transform: rotateY(0deg);
            z-index: 1;
        }
    }

    @-webkit-keyframes toggle2 {
        0% {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            transform: rotateY(0deg);
            z-index: 5;
        }
        50% {
            -webkit-transform: rotateY(120deg);
            -moz-transform: rotateY(120deg);
            transform: rotateY(120deg);
            z-index: 5;
        }
        100% {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            transform: rotateY(0deg);
            z-index: 5;
        }
    }

    @keyframes toggle2 {
        0% {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            transform: rotateY(0deg);
            z-index: 5;
        }
        50% {
            -webkit-transform: rotateY(120deg);
            -moz-transform: rotateY(120deg);
            transform: rotateY(120deg);
            z-index: 5;
        }
        100% {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            transform: rotateY(0deg);
            z-index: 5;
        }
    }

    @-webkit-keyframes toggle3 {
        0% {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            transform: rotateY(0deg);
            z-index: 10;
        }
        50% {
            -webkit-transform: rotateY(130deg);
            -moz-transform: rotateY(130deg);
            transform: rotateY(130deg);
            z-index: 1;
        }
        100% {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            transform: rotateY(0deg);
            z-index: 10;
        }
    }

    @keyframes toggle3 {
        0% {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            transform: rotateY(0deg);
            z-index: 10;
        }
        50% {
            -webkit-transform: rotateY(130deg);
            -moz-transform: rotateY(130deg);
            transform: rotateY(130deg);
            z-index: 1;
        }
        100% {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            transform: rotateY(0deg);
            z-index: 10;
        }
    }
</style>
<body>

<div class="contact1">
    <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt>
{{--            <img src="{{asset("images/logo1.png")}}" alt="IMG">--}}

            <div class="phone">
                <ul class="content">
                    <li></li>
                    <li></li>
                </ul>
                <div class="cover"></div>
                <div class="cover"></div>
                <div class="cover"></div>
            </div>

        </div>
        <form class="contact1-form validate-form" dir="rtl" action="{{route("phones.store")}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <span class="contact1-form-title">
					أضافة رقم جديد
				</span>

            <div class="wrap-input1 validate-input" data-validate = "اسم الهيأة مطلوب">
                <input class="input1" type="text" for="pose" id="pose" name="pose" placeholder="أسم الهيأة">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate = "اسم القسم مطلوب">
                <input class="input1" type="text" for="department" id="department" name="department" placeholder="أسم القسم ">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate = "اسم الشعبة مطلوب">
                <input class="input1" type="text" for="section" id="section" name="section" placeholder="أسم الشعبة">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate = "اسم الوحدة مطلوب">
                <input class="input1" type="text" for="unit" id="unit" name="unit" placeholder="أسم الوحدة">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate = " رقم الهاتف مطلوب">
                <input class="input1" type="number" for="phone" id="phone" name="phone" placeholder="رقم الهاتف">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate = " البريد الالكتروني مطلوب">
                <input class="input1" type="email" for="email" id="email" name="email" placeholder="البريد الالكتروني">
                <span class="shadow-input1"></span>
            </div>

            <div class="container-contact1-form-btn">
                <button class="contact1-form-btn" type="submit">
						<span>
							أضافة
						</span>
                </button>
            </div>
        </form>
    </div>
</div>




<!--===============================================================================================-->
<script src="{{asset("vendor/jquery/jquery-3.2.1.min.js")}}"></script>
<!--===============================================================================================-->
<script src="{{asset("vendor/bootstrap/js/popper.js")}}"></script>
<script src="{{asset("vendor/bootstrap/js/bootstrap.min.js")}}"></script>
<!--===============================================================================================-->
<script src="{{asset("vendor/select2/select2.min.js")}}"></script>
<!--===============================================================================================-->
<script src="{{asset("vendor/tilt/tilt.jquery.min.js")}}"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
<script src="{{asset("js/main.js")}}"></script>

</body>
</html>
