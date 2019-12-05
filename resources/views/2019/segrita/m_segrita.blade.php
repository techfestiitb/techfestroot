<!DOCTYPE HTML>
<html>
<head>
    <script type="text/javascript">
        if (screen.width >= 992) {
            document.location = "/segreta";
        }
    </script>
    <meta charset="utf-8">
    <meta property="og:url" content="https://techfest.org/" />
    <meta property="" content="https://techfest.org/" />
    <meta property="og:title" content=" Techfest, IIT Bombay Asia's Largest Science and Technology Festival" />
    <meta property="og:image" content="https://techfest.org/2019/share.png" />
    <link rel="shortcut icon" type="image/x-icon" href="/2019/ca/images/favicon_logo.png" />
    <meta name="description" content="Techfest, IIT Bombay Asia's Largest Science and Technology Festival">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Techfest">
    <meta name="keywords" content="">
    <meta name="viewport" content= "width=device-width, user-scalable=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="/2019/ca/images/favicon_logo.png" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="/2019/homepage/js/jquery.onepage-scroll.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href='/2019/homepage/css/onepage-scroll.css' rel='stylesheet' type='text/css'>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style >
        body{
        }
        .footer_left {
            bottom: -4.1vh;
            width: 32vw;
            position: fixed;
            z-index: 8;
        }
        .footer_right {
            transform: rotateY(180deg);
            right: 0;
            bottom: -4.1vh;
            width: 32vw;
            position: fixed;
            z-index: 8;
        }
        .footer_center {
            left: 34.7vw;
            bottom: 0px;
            width: 32vw;
            position: fixed;
            z-index: 8;
        }
        body{
            font-family: Lato;
            background-color: #275E80; /* For browsers that do not support gradients */
            background-image: linear-gradient(#275E80 , #2C2F7A);
        }
        .center_image {
            position: absolute;
            left: calc( 50% - 9.4% );
            top: calc(50% - 20.85% );
            width: 18.87%;

        }
        .contactus_heading{
            position: absolute;
            left: calc( 50% - 9.4% );
            top: calc(35% - 20.85% );
            width: 18.87%;
            background-color: black;
            border-radius: 10px;
        }

        .center_right_top {
            position: absolute;
            left: calc( 50% + 6% );
            bottom: 55%;
            width: 18.94%;
            height: 20.72%;
        }

        .center_right_bottom {
            position: absolute;
            left: calc( 50% + 6% );
            top: 51%;
            width: 18.94%;
            height: 20.72%;
        }

        .center_left_top {
            position: absolute;
            right: calc( 50% + 6% );
            bottom: 55%;
            width: 18.94%;
            height: 20.72%;
        }
        .center_left_bottom {
            position: absolute;
            right: calc( 50% + 6% );
            top: 51%;
            width: 18.94%;
            height: 20.72%;
        }

        .center_right_ex_top {
            position: absolute;
            left: calc( 50% + 20% );
            bottom: 67%;
            width: 18.94%;
            height: 20.72%;
        }
        .center_right_ex_bottom {
            position: absolute;
            left: calc( 50% + 20% );
            top: 64%;
            width: 18.94%;
            height: 20.72%;
        }

        .center_left_ex_top {
            position: absolute;
            right: calc( 50% + 20% );
            bottom: 67%;
            width: 18.94%;
            height: 20.72%;
        }
        .center_left_ex_bottom {
            position: absolute;
            right: calc( 50% + 20% );
            top: 64%;
            width: 18.94%;
            height: 20.72%;
        }

        @media (max-width:1800px) and (min-width: 1400px){
            .outer_box{
                transform: scale(0.9);
                position: absolute;
                left: calc( 50vw - 800px);
                top: calc( 50vh - 315.5px);
                width: 1600px;
                height: 631px;
                /*background-color: yellow;*/
            }
        }

        @media (max-width:1400px) and (min-width: 1100){
            .outer_box{
                transform: scale(0.9);
                position: absolute;
                left: calc( 50vw - 550px);
                top: calc( 50vh - 217px);
                width: 1100px;
                height: 434px;
                background-color: yellow;
            }
        }

        .outer_box{
            transform: scale(0.9);
            position: absolute;
            left: calc( 50vw - 900px);
            top: calc( 50vh - 355px);
            width: 1800px;
            height: 710px;
            /*background-color: yellow;*/
        }
        .center_right_ex{
            position: absolute;
            left: calc( 50% + 26% );
            top: calc( 50% - 12% ) ;
            width: 16.55%;
            height: 20.72%;
        }
        .center_left_ex{
            position: absolute;
            right: calc( 50% + 26% );
            top: calc( 50% - 12% ) ;
            width: 16.55%;
            height: 20.72%;
        }
        .bottom_ex{
            position: absolute;
            right: calc( 50% - 17.305% );
            top: calc( 50% + 27% ) ;
            width: 34.61%;
            height: 20.72%;
        }
        .background_layer {
            position: absolute;
            width: 120vw;
            left: -10vw;
            top: calc(50vh - 60vw);
            /*transform: scale(0.9);*/
            opacity: 0.2;
            animation: rotate reverse 300s infinite linear;
        }
        .header {
            width: 100%;
            position: fixed;
            z-index: 1;
            top:0;
            left:0;
        }



        .topright{
            top:0px;
            right:0px;
            width: 33%;
            text-align: right;
            padding-right: 2%;
        }
        .topright_links {
            padding-top: 2.5%;
            line-height: 3.9vh;
        }
        .topleft{
            top:0px;
            left:0px;
            width: 33%;
            text-align: left;
            padding-left: 2%;
        }
        .topleft_links{
            padding-top: 2.5%;
            line-height: 3.9vh;
        }
        .bottomright{
            bottom: -2.1vh;
            right: 8vh;
            height: 11%;
            width: 26%;
        }
        .bottomleft{
            bottom: -1vh;
            left:0px;
            height: 10%;
            width: 30%;
            padding-left: 2%;

        }
        .bottomleft_link{
            text-align: left;
            line-height: 3.9vh;
        }
        .bottomcentre{
            left: calc(50% - 30vh);
            bottom:5px;
            width: 60vh;
            color: white;
            text-align: center;

        }
        .topcentre{
            top: 0.7%;
            left: 43%;
            max-width: 24%;
            max-height: 50px;

        }

        .footer_left {
            bottom: -4.1vh;
            width: 32vw;
            position: fixed;
            z-index: 8;
        }
        .footer_right {
            transform: rotateY(180deg);
            right: 0;
            bottom: -4.1vh;
            width: 32vw;
            position: fixed;
            z-index: 8;
        }
        .footer_center {
            left: 34.7vw;
            bottom: 0px;
            width: 32vw;
            position: fixed;
            z-index: 8;
        }
        .center_notification {
            right: 2vw;
            bottom: 0.9vh;
            position:fixed;
            text-align: center;
            width: 25vw;
            color: white!important;
            font-size: 20px;
            z-index:10000;
        }
    </style>

    <style>
        body{
            font-family: Lato;
            background-color: #275E80; /* For browsers that do not support gradients */
            background-image: linear-gradient(#275E80 , #2C2F7A);
        }

        .wrapper {
            height: 100% !important;
            height: 100%;
            margin: 0 auto;
            overflow: hidden;
        }




    </style>
    <script>
        $(document).ready(function(){
            $(".main").onepage_scroll({
                sectionContainer: "section",
                responsiveFallback: 600,
                loop: false
            });
        });

    </script>
    <style>
        .box{
            position:fixed;
            z-index: 20;

        }
        .links {
            font-size: 1.2vw;
            color: white!important;
            letter-spacing: 1px;
        }

        .topright{
            top:0px;
            right:0px;
            width: 33%;
            text-align: right;
            padding-right: 2%;
        }
        .topright_links {
            padding-top: 2.5%;
            line-height: 3.9vh;
        }
        .topleft{
            top:0px;
            left:0px;
            width: 33%;
            text-align: left;
            padding-left: 2%;
        }
        .topleft_links{
            padding-top: 2.5%;
            line-height: 3.9vh;
        }
        .bottomright{
            bottom: -2.1vh;
            right: 8vh;
            height: 11%;
            width: 26%;
        }
        .bottomleft{
            bottom: -1vh;
            left:0px;
            height: 10%;
            width: 30%;
            padding-left: 2%;

        }
        .bottomleft_link{
            text-align: left;
            line-height: 3.9vh;
        }
        .bottomcentre{
            left: calc(50% - 30vh);
            bottom:5px;
            width: 60vh;
            color: white;
            text-align: center;

        }
        .topcentre{
            top: 0.7%;
            left: 43%;
            max-width: 24%;
            max-height: 50px;

        }
        .logo {
            height: 5.2vh;
        }


        .header {
            width: 100%;
            position: fixed;
            z-index: 8;
        }
        .footer_left {
            bottom: -4.1vh;
            width: 32vw;
            position: fixed;
            z-index: 8;
        }
        .footer_right {
            transform: rotateY(180deg);
            right: 0;
            bottom: -4.1vh;
            width: 32vw;
            position: fixed;
            z-index: 8;
        }
        .footer_center {
            left: 34.7vw;
            bottom: 0px;
            width: 32vw;
            position: fixed;
            z-index: 8;
        }
        .center_notification {
            right: 2vw;
            bottom: 2.8vh;
            position:fixed;
            text-align: center;
            width: 25vw;
            color: white!important;
            font-size: 20px;
            z-index:10000;
        }
        .blinking{
            animation:blinkingText1 2.1s infinite;
        }
        @keyframes blinkingText1{
            0%{     color: white;    }
            50%{   opacity:0;
                color: white;}
            51%{color:white;}

        }
        i {
            padding: 5px;
            size: 27px;
        }
        a{
            color: white!important;
        }

        @-webkit-keyframes rotate {

            to {
                -webkit-transform: rotateZ(359deg);
            }
        }
        .background {
            position: absolute;
            width: 100vw;
            height: -webkit-fill-available;

        }
        .background_layer {
            position: absolute;
            width: 120vw;
            left: -10vw;
            top: calc(50vh - 60vw);
            /*transform: scale(0.9);*/
            opacity: 0.2;
            animation: rotate reverse 300s infinite linear;

        }
        .mandala{
            left: 31.5vw;
            width: 37vw;
            position: absolute;
            margin: auto;
            top: calc(50vh - 18.5vw);

            animation: rotate 60s infinite linear;

        }
        .page1:hover #mandala_1 {
            animation: axis_1 4s;
            animation-iteration-count: 3;
        }

        @keyframes axis_1 {
            to {
                transform: rotateX(180deg) ;
            }
        }
        .page1:hover #mandala_2 {
            animation: axis_2 4s;
            animation-iteration-count: 3;
        }

        @keyframes axis_2 {
            to {
                transform: rotateY(180deg);
            }
        }
        .page1:hover #mandala_3 {
            animation: axis_3 4s;
            animation-iteration-count: 3;
        }

        @keyframes axis_3 {
            to {
                transform: rotateY(180deg) rotateX(180deg);
            }
        }
        .page1:hover #mandala_4 {
            animation: axis_4 4s;
            animation-iteration-count: 3;
        }

        @keyframes axis_4 {
            to {
                transform: rotateY(180deg) rotateX(-180deg);
            }
        }
        .page1:hover #mandala_6 {
            animation: speed 4s;
            animation-play-state: inherit;

            animation-iteration-count: infinite;
        }

        @keyframes speed {
            to {
                transform: rotatez(360deg);
            }
        }


        .black_blurr {
            transform: scale(1.8);
        }
        .left_eye {
            position: absolute;
            top: calc(50vh - 19.2vw);
            width: 30vw;
            left: 9.9vw;
            -webkit-user-drag: none;
        }
        .right_eye {
            position: absolute;
            top: calc(50vh - 19.2vw);
            width: 30vw;
            right: 9.9vw;
            -webkit-user-drag: none;

        }

        .page1:hover #right_eye {
            animation: bounce_right 2s;
            animation-iteration-count: infinite;
        }

        .page1:hover #left_eye {
            animation: bounce_left 2s;
            animation-iteration-count: infinite;
        }

        @keyframes bounce_right {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            20% {transform: translateX(30px);}
            50% {transform: translateX(20px);}
        }
        @keyframes bounce_left {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            20% {transform: translateX(-30px);}
            50% {transform: translateX(-20px);}
        }
    </style>
    <style>
        .guine_box{
            padding-top: 13.1vh;
            padding-bottom: 15.2vh;
            text-align: right;

        }
        a:hover {
            text-shadow: #ffffff 0px 0px 4px;
            color: #ffffff!important;
            text-decoration: none;
        }
    </style>
    <script>
        $(document).ready(function(){
            $(".main").onepage_scroll({
                sectionContainer: "section",
                responsiveFallback: 600,
                loop: false
            });
        });

    </script>
    <style>
        .box{
            position:fixed;
            z-index: 20;

        }
        .links {
            font-size: 1.2vw;
            color: white!important;
            letter-spacing: 1px;
        }

        .topright{
            top:0px;
            right:0px;
            width: 33%;
            text-align: right;
            padding-right: 2%;
        }
        .topright_links {
            padding-top: 2.5%;
            line-height: 3.9vh;
        }
        .topleft{
            top:0px;
            left:0px;
            width: 33%;
            text-align: left;
            padding-left: 2%;
        }
        .topleft_links{
            padding-top: 2.5%;
            line-height: 3.9vh;
        }
        .bottomright{
            bottom: -2.1vh;
            right: 8vh;
            height: 11%;
            width: 26%;
        }
        .bottomleft{
            bottom: -1vh;
            left:0px;
            height: 10%;
            width: 30%;
            padding-left: 2%;

        }
        .bottomleft_link{
            text-align: left;
            line-height: 3.9vh;
        }
        .bottomcentre{
            left: calc(50% - 30vh);
            bottom:5px;
            width: 60vh;
            color: white;
            text-align: center;

        }
        .topcentre{
            top: 0.7%;
            left: 43%;
            max-width: 24%;
            max-height: 50px;

        }
        .logo {
            height: 5.2vh;
        }


        .header {
            width: 100%;
            position: fixed;
            z-index: 8;
        }
        .footer_left {
            bottom: -4.1vh;
            width: 32vw;
            position: fixed;
            z-index: 8;
        }
        .footer_right {
            transform: rotateY(180deg);
            right: 0;
            bottom: -4.1vh;
            width: 32vw;
            position: fixed;
            z-index: 8;
        }
        .footer_center {
            left: 34.7vw;
            bottom: 0px;
            width: 32vw;
            position: fixed;
            z-index: 8;
        }
        .center_notification {
            right: 2vw;
            bottom: 0.9vh;
            position:fixed;
            text-align: center;
            width: 25vw;
            color: white!important;
            font-size: 20px;
            z-index:10000;
        }
        .blinking{
            animation:blinkingText1 2.1s infinite;
        }
        @keyframes blinkingText1{
            0%{     color: white;    }
            50%{   opacity:0;
                color: white;}
            51%{color:white;}

        }
        i {
            padding: 5px;
            size: 27px;
        }
        a{
            color: white!important;
        }

        @-webkit-keyframes rotate {

            to {
                -webkit-transform: rotateZ(359deg);
            }
        }
        .background {
            position: absolute;
            width: 100vw;
            height: -webkit-fill-available;

        }
        .background_layer {
            position: absolute;
            width: 120vw;
            left: -10vw;
            top: calc(50vh - 60vw);
            /*transform: scale(0.9);*/
            opacity: 0.2;
            animation: rotate reverse 300s infinite linear;

        }
        .mandala{
            left: 31.5vw;
            width: 37vw;
            position: absolute;
            margin: auto;
            top: calc(50vh - 18.5vw);

            animation: rotate 60s infinite linear;

        }
        .page1:hover #mandala_1 {
            animation: axis_1 4s;
            animation-iteration-count: 3;
        }

        @keyframes axis_1 {
            to {
                transform: rotateX(180deg) ;
            }
        }
        .page1:hover #mandala_2 {
            animation: axis_2 4s;
            animation-iteration-count: 3;
        }

        @keyframes axis_2 {
            to {
                transform: rotateY(180deg);
            }
        }
        .page1:hover #mandala_3 {
            animation: axis_3 4s;
            animation-iteration-count: 3;
        }

        @keyframes axis_3 {
            to {
                transform: rotateY(180deg) rotateX(180deg);
            }
        }
        .page1:hover #mandala_4 {
            animation: axis_4 4s;
            animation-iteration-count: 3;
        }

        @keyframes axis_4 {
            to {
                transform: rotateY(180deg) rotateX(-180deg);
            }
        }
        .page1:hover #mandala_6 {
            animation: speed 4s;
            animation-play-state: inherit;

            animation-iteration-count: infinite;
        }

        @keyframes speed {
            to {
                transform: rotatez(360deg);
            }
        }


        .black_blurr {
            transform: scale(1.8);
        }
        .left_eye {
            position: absolute;
            top: calc(50vh - 19.2vw);
            width: 30vw;
            left: 9.9vw;
            -webkit-user-drag: none;
        }
        .right_eye {
            position: absolute;
            top: calc(50vh - 19.2vw);
            width: 30vw;
            right: 9.9vw;
            -webkit-user-drag: none;

        }

        .page1:hover #right_eye {
            animation: bounce_right 2s;
            animation-iteration-count: infinite;
        }

        .page1:hover #left_eye {
            animation: bounce_left 2s;
            animation-iteration-count: infinite;
        }

        @keyframes bounce_right {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            20% {transform: translateX(30px);}
            50% {transform: translateX(20px);}
        }
        @keyframes bounce_left {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            20% {transform: translateX(-30px);}
            50% {transform: translateX(-20px);}
        }
    </style>
</head>
<body style="overflow: hidden;">

<div class="" style="text-align: center;">
    <div style="position: absolute; top: 25vh; width: 100%; text-align: center;background-color: white ">
        <h1 style="font-size: 80px; ">COMING <br> SOON</h1>
        <h1 style="font-size: 50px; background-color: white ">Tune in 6pm on 12th of October for Segreta 2019</h1>
    </div>
</div>

</body>
</html>