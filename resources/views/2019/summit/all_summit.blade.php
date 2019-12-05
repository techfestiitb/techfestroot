<!DOCTYPE html>
<html lang="en">
<head>
    <title>Summit| Techfest, IIT Bombay</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--===============================================================================================-->
    <link rel="shortcut icon" type="image/x-icon" href="/2019/ca/images/favicon_logo.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/initiatives/pato/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/initiatives/pato/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/initiatives/pato/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/initiatives/pato/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/initiatives/pato/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
{{--    <link rel="stylesheet" type="text/css" href="/2019/initiatives/pato/vendor/animsition/css/animsition.min.css">--}}
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/initiatives/pato/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/initiatives/pato/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/initiatives/pato/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/initiatives/pato/vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/initiatives/pato/css/util.css">
    <link rel="stylesheet" type="text/css" href="/2019/initiatives/pato/css/main.css">
    <!--===============================================================================================-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>
</head>
<body class="animsition">

<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
            <div class="wrap_header trans-0-3">
                <!-- Logo -->
                <div class="logo">
                    <a href="/">
                        <img src="/2019/tf_date.png" alt="IMG-LOGO" data-logofixed="/2019/tf_date.png">
                    </a>
                </div>



                <!-- Social -->
                <div class="social flex-w flex-l-m p-r-20">

                    <a href="https://www.facebook.com/iitbombaytechfest/"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/Techfest_IITB"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/techfest_iitbombay/"><i class="fa fa-instagram m-l-21" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Welcome -->
<section class="section-welcome bg1-pattern p-t-120">

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                @if($errors->any())
                    <p class="m2-txt1 p-b-46">
                        {{$errors->first()}}
                    </p>
                @endif
            </div>
            <div class="col-md-6 p-t-45 p-b-30">
                <div class="wrap-text-welcome t-center">
						<span class="tit2 t-center">
                            Industry 4.0 Summit
						</span>
                    <p class="t-center m-b-22 size3 m-l-r-auto">
                        Use of Artificial Intelligence (AI), Machine Learning (ML), and Internet of Things (IoT) in boosting Industrial Production
                    </p>
                    <p>Come & network with your peers and see the latest technologies & solutions to make manufacturing smarter. Join us at IIT Bombay, at the India's largest gathering for the 4th Industrial Revolution.<br></p>

                    <a href="/industrysummit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10 t-center" target="_blank" style="margin:auto">
                        Visit Website
                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                    <img src="/2019/summit/images/main.jpg" alt="IMG-OUR">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome -->
<section class="section-welcome bg1-pattern ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-b-30">
                <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                    <img src="/2019/summit/images/8306.jpeg" alt="IMG-OUR">
                </div>
            </div>
            <div class="col-md-6 p-t-45 p-b-30">
                <div class="wrap-text-welcome t-center">
						<span class="tit2 t-center">
                            International Media Summit
						</span>
                    <p class="t-center m-b-22 size3 m-l-r-auto">
                        A forum to discuss trending issues of the digital world such as fake news and digitalisation of conventional media.
                    </p>
                    <p>Come, see the advent of the digital age in Media and its far-reaching effects in our daily lives. Join us at IIT Bombay, at Techfest’s very first International Media Summit.<br></p>

                    <a href="/mediasummit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10" target="_blank" style="margin:auto">
                        Visit Website
                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                    </a>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- Sign up -->
{{--<div class="section-signup bg1-pattern  p-b-85">--}}
{{--    <form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">--}}
{{--			<span class="txt5 m-10">--}}
{{--				Register for Newsletters--}}
{{--			</span>--}}

{{--        <div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">--}}
{{--            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email Adrress">--}}
{{--            <i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>--}}
{{--        </div>--}}

{{--        <!-- Button3 -->--}}
{{--        <button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">--}}
{{--            Register Email--}}
{{--        </button>--}}
{{--    </form>--}}
{{--</div>--}}


<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>




<!--===============================================================================================-->
<script type="text/javascript" src="/2019/initiatives/pato/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
{{--<script type="text/javascript" src="/2019/initiatives/pato/vendor/animsition/js/animsition.min.js"></script>--}}
<!--===============================================================================================-->
<script type="text/javascript" src="/2019/initiatives/pato/vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="/2019/initiatives/pato/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/2019/initiatives/pato/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/2019/initiatives/pato/vendor/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="/2019/initiatives/pato/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/2019/initiatives/pato/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="/2019/initiatives/pato/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/2019/initiatives/pato/vendor/parallax100/parallax100.js"></script>
<script type="text/javascript">
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="/2019/initiatives/pato/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/2019/initiatives/pato/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script src="/2019/initiatives/pato/js/main.js"></script>

</body>
</html>
