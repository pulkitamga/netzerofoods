<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>:: Home ::</title>
    <link rel="icon" href="assets/images/fevicon.png" type="assets/images/png" sizes="13x13">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet"
        type="text/css">
    <link href="./assets/css/global.css" rel="stylesheet" type="text/css">

</head>

<body>


    <!-------------Header---------->
    <div class="header fixed">
        <div class="header-mid">
            <div class="container">
                <div class="header-row">
                    <div class="logo-top">
                        <a href="#"><img src="assets/images/logo.png" alt="" /></a>
                    </div>
                    <div class="header-right">
                        <div class="menu-col" id='cssmenu'>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About us</a>
                                    <!-- <ul>
                                    <li><a href="#">Recipe</a></li>
                                    <li><a href="#">Mission & Vision</a></li>
                                    <li><a href="#">How it work</a></li>
                                </ul> -->
                                </li>
                                <li><a href="/apply-pitch">Apply for a pitch</a></li>
                                <li><a href="/market-location" class="active">Market locations</a></li>
                                <li><a href="/contact" class="cont-btn">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="r-nav">
                            <ul>
                                <li><a href="#"><img src="assets/images/icon1.png" alt="" /></a></li>
                                <li><a href="#"><img src="assets/images/icon2.png" alt="" /></a></li>
                                <li><a href="#"><img src="assets/images/icon3.png" alt="" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @yield('content')

    <!-------------Footer---------->
    <footer class="footer">
        <div class="container">
            <a href="#"><img src="assets/images/logo.png" alt="" /></a>
            <p><a href="#">sales@netzerofoods.com</a> | <a href="#">+(201) 596-3738</a> | <span>11 Leuning St. South
                    Hackensack, NJ 07606</span> | <span>&copy; Copyright 2024 - Net Zero Foods</span></p>
            <p class="sl">
                <a href="#"><img src="assets/images/icon2.png" alt="" /></a>
                <a href="#"><img src="assets/images/icon3.png" alt="" /></a>
            </p>
            <p class="fl">
                <a href="#">F.A.Q.</a> |
                <a href="#">Terms and Conditions</a> |
                <a href="#">Shipping and Returns</a> |
                <a href="#">Privacy Policy</a>
            </p>
        </div>
    </footer>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script src="./assets/js/main.js"></script>
    <script type="text/javascript">
    $('[data-fancybox="gallery"]').fancybox({
        buttons: [
            "slideShow",
            "thumbs",
            "zoom",
            "fullScreen",
            "share",
            "close"
        ],
        loop: false,
        protect: true
    });
    </script>
</body>

</html>