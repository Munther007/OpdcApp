<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>نبذة عن الشركة</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,400;0,700;1,400;1,700&display=swap");

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        ::selection {
            background: #f8955c20;
        }

        html {
            scroll-behavior: smooth;
            --color-font: #dcdcdc;
            --color-accent: #f8955c;
        }

        body {
            background: #28292b;
            color: #dcdcdc;
            font-family: "Cormorant", serif;
            position: relative;
            top: 0;
            height: 100%;
            border: 1px solid transparent;
            overflow-x: hidden;
        }

        .page-wrap a {
        }

        .page-wrap > a {
            font-style: italic;
            font-weight: 500;
            font-size: 18px;
            line-height: 100%;
            color: var(--color-font);

            text-decoration: none;
            position: fixed;
            display: flex;
            flex-direction: row;
            align-items: center;
            opacity: 0.8;
            padding: 8px;
            transition: all 0.3s ease;
        }

        .page-wrap > a:hover {
            opacity: 1;
            color: var(--color-accent);
        }

        .page-wrap > a:hover > span {
            width: 90px;
        }

        .page-wrap > a[href="#"] {
            top: 0;
            left: 260px;
            transform-origin: top left;
            transform: rotate(90deg);
            padding-left: 0;
        }

        .page-wrap > a[href="#footer"] {
            bottom: 0;
            right: 260px;
            transform-origin: bottom right;
            transform: rotate(90deg);
            flex-direction: row-reverse;
            padding-right: 0;
        }

        .page-wrap > a > span {
            width: 80px;
            height: 1px;
            background: var(--color-font);
            transition: all 0.3s ease;
        }

        .page-wrap > a[href="#"] > span {
            margin-right: 16px;
        }

        .page-wrap > a[href="#footer"] > span {
            margin-left: 16px;
        }

        .page-main > .img-wrapper {
            width: 100vw;
            height: 50vh;
            position: relative;
            background-image: url("https://images.unsplash.com/photo-1537255263864-b779ce1854ff");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            position: absolute;
            z-index: -1;
            top: 0;
        }

        .page-main > .img-wrapper::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: linear-gradient(
                180deg,
                rgba(40, 41, 43, 0) 0%,
                rgba(40, 41, 43, 0.0208296) 4.7%,
                rgba(40, 41, 43, 0.0439704) 8.9%,
                rgba(40, 41, 43, 0.0704) 12.8%,
                rgba(40, 41, 43, 0.101096) 16.56%,
                rgba(40, 41, 43, 0.137037) 20.37%,
                rgba(40, 41, 43, 0.1792) 24.4%,
                rgba(40, 41, 43, 0.228563) 28.83%,
                rgba(40, 41, 43, 0.286104) 33.84%,
                rgba(40, 41, 43, 0.3528) 39.6%,
                rgba(40, 41, 43, 0.42963) 46.3%,
                rgba(40, 41, 43, 0.51757) 54.1%,
                rgba(40, 41, 43, 0.6176) 63.2%,
                rgba(40, 41, 43, 0.730696) 73.76%,
                rgba(40, 41, 43, 0.857837) 85.97%,
                #28292b 100%
            );
        }

        .page-main {
            top: 0;
        }

        .page-main > article {
            max-width: 550px;
            width: 100%;
            z-index: 1;
            margin: 20vh auto 160px;
        }

        .page-main > article > h1 {
            font-weight: 400;
            font-size: 180px;
            line-height: auto;
            margin-bottom: 32px;
        }

        .page-main > article > h2 {
            font-style: italic;
            font-weight: 400;
            font-size: 48px;
            line-height: auto;
            margin-bottom: 32px;
        }

        .page-main > article p {
            font-weight: 400;
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 24px;
        }

        .page-main > article blockquote {
            font-weight: 700;
            font-size: 24px;
            line-height: 1.5;
            margin-bottom: 24px;
            position: relative;
            margin: 40px 0px 40px 32px;
        }

        .page-main > article blockquote::before {
            position: absolute;
            content: "";
            width: 4px;
            height: 100%;
            background: var(--color-font);
            margin-left: -32px;
        }

        footer {
            display: flex;
            flex-direction: column;
            background: #222325;
            height: auto;
            justify-content: center;
            align-items: center;
            padding-top: 160px;
            padding-bottom: 160px;
        }

        footer > .footer-wrapper {
            max-width: 550px;
            width: 100%;
        }

        footer > .footer-wrapper > h3 {
            font-weight: 400;
            font-size: 80px;
            line-height: 100%;
            margin-bottom: 80px;
        }

        footer > .footer-wrapper > .navs-wrapper > nav {
            margin-bottom: 60px;
        }

        footer > .footer-wrapper > .navs-wrapper > nav:last-of-type {
            margin-bottom: 0;
        }

        footer > .footer-wrapper > .navs-wrapper > nav > h4 {
            font-style: italic;
            font-weight: 400;
            font-size: 48px;
            line-height: 100%;
            margin-bottom: 24px;
        }

        footer > .footer-wrapper > .navs-wrapper > nav > ul > li {
            font-weight: 400;
            font-size: 18px;
            line-height: 1.2;
            margin-bottom: 8px;
            list-style-type: none;
        }

        footer > .footer-wrapper > .navs-wrapper > nav > ul > li a {
            color: inherit;
            text-decoration: none;
            transition: all 0.2s ease;
            transition: all 0.6s ease;
        }

        footer > .footer-wrapper > .navs-wrapper > nav > ul > li a:hover {
            color: var(--color-accent);
            margin-left: 8px;
        }

        @media only screen and (max-width: 1200px) {
            .page-wrap > a[href="#"] {
                left: 120px;
            }

            .page-wrap > a[href="#footer"] {
                right: 120px;
            }
        }

        @media only screen and (max-width: 900px) {
            .page-wrap > a[href="#"] {
                left: 80px;
            }

            .page-wrap > a[href="#footer"] {
                right: 80px;
            }

            footer > .footer-wrapper > h3 {
                font-size: 72px;
            }
        }

        @media only screen and (max-width: 768px) {
            .page-wrap > a[href="#"] {
                left: 56px;
            }

            .page-wrap > a[href="#footer"] {
                right: 56px;
            }

            .page-main > article {
                width: 100%;
                padding: 48px;
                margin-bottom: 10vh;
            }

            .page-main > article > h1 {
                font-size: 120px;
            }

            .page-main > article > h2 {
                font-size: 32px;
            }

            footer > .footer-wrapper > h3 {
                font-size: 64px;
            }

            footer {
                display: flex;
                flex-direction: column;
                width: 100%;
                padding: 10vh 48px;
            }
        }

        @media only screen and (max-width: 550px) {
            .page-wrap > a[href="#"] {
                left: 32px;
            }

            .page-wrap > a[href="#footer"] {
                right: 32px;
            }

            .page-main > article > h1 {
                font-size: 120px;
            }

            .page-main > article > h2 {
                font-size: 32px;
            }

            .page-main > article {
                padding: 48px;
            }

            footer > .footer-wrapper > h3 {
                font-size: 56px;
            }
        }

    </style>
</head>
<body dir="rtl">
<div class="page-wrap">
    <a href="#"><span></span>Munther Amer</a>
    <a href="#footer"><span></span>Munther Amer</a>

    <main class="page-main" id="article">
        <div class="img-wrapper"></div>
        <article>

            <h1>Bigfoot</h1>
            <h2>Fact or fiction? </h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos laborum cumque incidunt, enim ipsa dicta? Porro illo doloribus, consectetur eum exercitationem sit ipsam, est nesciunt maxime, eius animi dolor? Harum.</p>

            <p>Illo numquam, sapiente neque repellendus facere amet doloribus asperiores quia eum? Sunt vero amet neque vel? Tempora, nulla voluptatum amet autem culpa magnam debitis! Dolores esse quam amet nobis ut.</p>
            <p>Sunt excepturi in nostrum, fugiat veritatis ab sit sequi nemo aperiam deserunt temporibus, dolorem ex adipisci autem. Quasi, iure fugiat! Nulla amet doloribus velit nam tempora, soluta consequatur doloremque omnis?</p>
            <p> Aenean iaculis odio et eleifend elementum. Pellentesque porta lacus sit amet ligula tristique ornare. Ut euismod suscipit enim. Morbi eu molestie odio. Nullam pellentesque bibendum magna non aliquet. Praesent commodo metus ut dapibus sollicitudin. Etiam tristique arcu et risus venenatis egestas. Mauris quis feugiat leo. Mauris scelerisque eleifend risus a suscipit. Praesent commodo pharetra vehicula. Praesent imperdiet luctus ex eget consectetur. Sed facilisis lobortis dolor quis scelerisque. Pellentesque porta orci nec viverra semper.</p>
            <p>In nec ornare mauris. Ut bibendum libero sit amet leo finibus ornare. Donec vel ultrices velit, vel congue elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam blandit sem nisi, eget fringilla risus tristique sit amet. Ut quis dictum massa, nec tincidunt urna. Aliquam dignissim mi at eros egestas elementum. Phasellus tempor lectus id consectetur finibus. Etiam felis augue, ullamcorper sed pretium dictum, interdum sed nulla. Morbi eu ante ac tortor suscipit posuere. Praesent feugiat, dolor sed condimentum tincidunt, massa tortor congue lorem, eget sollicitudin nulla nibh sit amet justo. Pellentesque erat quam, iaculis pellentesque eros non, accumsan laoreet quam.</p>
            <blockquote>Praesent nec lacus urna. Pellentesque hendrerit turpis sed dictum vehicula. Ut in sapien odio. Sed vitae finibus nisl. Pellentesque dui nisl, condimentum facilisis feugiat nec, dictum quis nisi. Donec pellentesque ornare mauris non congue. Integer consequat nulla at odio congue luctus.</blockquote>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque lobortis mattis turpis eu commodo. Donec diam massa, convallis at ex non, finibus lacinia ipsum. Vestibulum rutrum nunc mollis condimentum mollis. Nunc at nunc mauris. Proin magna nisl, imperdiet imperdiet malesuada a, gravida ac dolor. Vivamus ex ipsum, convallis vitae egestas in, dignissim eu augue. Nullam euismod orci lectus, ut tempor mauris malesuada sit amet.</p>
        </article>
    </main>
    <footer class="page-footer" id="footer">
        <div class="footer-wrapper">
            <h3>More Resources</h3>
            <div class="navs-wrapper">
                <nav>
                    <h4>Sightings</h4>
                    <ul>
                        <li><a href="#">West Coast</a></li>
                        <li><a href="#">Great Lakes Region</a></li>
                        <li><a href="#">Southeastern US</a></li>
                        <li><a href="#">East Coast</a></li>
                    </ul>
                </nav>
                <nav>
                    <h4>Formal Studies</h4>
                    <ul>
                        <li><a href="#">Studies in the 1970s</a></li>
                        <li><a href="#">Studies in the 1990s - 2000s</a></li>
                        <li><a href="#">Contemporary Studies</a></li>
                    </ul>
                </nav>
                <nav>
                    <h4>Bigfoot in Popular Culture</h4>
                    <ul>
                        <li><a href="#">Bigfoot in Movies &amp; TV</a></li>
                        <li><a href="#">Laws about Bigfoot</a></li>
                        <li><a href="#">Share Your Story</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
