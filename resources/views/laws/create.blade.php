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
            <img src="{{asset("images/logo1.png")}}" alt="IMG">
        </div>
        <form class="contact1-form validate-form" dir="rtl" action="{{route("laws.store")}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <span class="contact1-form-title">
					أضافة قانون جديد
				</span>

            <div class="wrap-input1 validate-input" data-validate = "العنوان مطلوب">
                <input class="input1" type="text" for="title" id="title" name="title" placeholder="عنوان القانون">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate = "الرقم مطلوب">
                <input class="input1" type="text" for="description" id="description" name="description" placeholder="وصف القانون">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate = "الفايل مطلوب">
                <input class="input1" type="file" for="file" id="file" name="file" >
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

