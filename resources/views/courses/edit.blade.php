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

<body>

<div class="contact1">
    <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt>
            <img src="{{asset("images/course.gif")}}" alt="IMG">
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
        <form class="contact1-form validate-form" dir="rtl" action="{{route("courses.update" , $course->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <span class="contact1-form-title">
					أضافة دليل دورات جديد
				</span>

            <div class="wrap-input1 validate-input" data-validate = "موقع الدورات مطلوب">
                <input class="input1" type="text" for="location" id="location" name="location" value="{{$course->location}}" placeholder="موقع الدورات ">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate = "جدول الدورات مطلوب">
                <input class="input1" type="file" for="image" id="image" name="image" value="{{$course->image}}" placeholder="جدول الدورات">
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
