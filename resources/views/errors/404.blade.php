<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 | Page Not Found | Techfest 2018-19</title>
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="{{asset('2018/pinball.png')}}">
    <meta property="og:url" content="https://techfest.org/404">
    @if(isset($name))
    <meta property="og:description" content="{{$name or ''}} made a highscore of {{$score or ''}} on Techfest's 404 page!">
    @else
        <meta property="og:description" content="Well the page you were searching for could not be found, but hey why not play this game and challenge your friends with a highscore">
    @endif
    <meta property="og:title" content="404 | Page Not Found | Techfest 2018-19">
    <meta property="og:site_name" content="Techfest 2018-19">
    <link rel="stylesheet" href="https://techfest.org/css/app.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Hind');

        *, *::before, *::after {
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            overflow: hidden;
        }
        .row{
            width: 100%;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            color: #dee2e6;
            background-color: #212529;
            font-family: 'Hind', sans-serif;
        }
        .relative{
            position: relative;
        }
        .container1 {
            text-align: center;
            position: relative;
            line-height: 0;
        }

        .score {
            position: absolute;
            top: 10px;
            line-height: 1;
        }
        .share_1{
            display:none;
        }
        .score span {
            font-size: 3.25rem;
        }

        .current-score {
            left: calc(50% - 230px);
        }

        .high-score {
            text-align: right;
            right: calc(50% - 230px);
        }

        .trigger {
            appearance: none;
            position: absolute;
            width: 80px;
            height: 80px;
            bottom: 10px;
            border: 0;
            border-radius: 50%;
            color: inherit;
            background-color: #e64980;
            text-align: center;
            line-height: 80px;
            font-size: 1.25rem;
            text-transform: inherit;
            cursor: pointer;
            user-select: none;
            outline: none;
        }

        .left-trigger {
            left: calc(50% - 230px);
        }

        .right-trigger {
            right:calc(50% - 180px)
        }

        canvas {
            overflow: hidden;
            border-radius: 5px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.75);
        }

        /* responsive scaling, because pinball tables are tall */
        @media (min-height: 0px) {
            .container1 { position: absolute; }
        }
        @media(max-height: 400px){
            .container1{
                left: -34%;
                top: -20%;
                transform: scale(0.25);
            }
        }
        .w-sm-100vw{
            min-width: 500px !important;
        }
        @media(max-width: 776px) {
            .share_1{
                z-index: 9999900;
                text-align: center;
                display:block;
                position: absolute;
                top:10px;
                left:0;
                right:0;
                margin:auto;
                color: white !important;
            }
        }
        @media (min-height: 400px) {
            .container1 { transform: scale(0.5); }
        }
        @media (min-height: 600px) {
            .pl-md-5{
                padding-left:2rem;
            }
            .container1 { transform: scale(0.75); }
        }
        @media (min-height: 800px) {
            .container1 { transform: scale(1); }
        }
        .nodisp{
            display:none;
        }
        .share-fb{
            display:none;
            position: absolute;
            top:10px;
            left:50%;
            transform: tanslateX(-50%);
        }
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-81222017-1');</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="mobile-share">
    <a href="https://www.facebook.com/sharer/sharer.php?u=techfest.org" target="_blank" class="share_1">Share on Facebook</a>
</div>
<div class="row h-100 w-auto m-auto pl-md-5">
    <div class="col-md-4 d-flex align-items-center">
        <div class="wrapper d-none d-md-block ">
            <div class="display-1">404</div>
            <div class="h2 text-warning">Page Not Found</div>
            <h4>And finally you are here, a 404 page where you can play, enjoy and challenge your inmates to break your high scores</h4>
            <div class="w-100 mt-1 mb-1">
                <input id="name" type="text" placeholder="YOUR NAME" class="w-75 pt-3 pb-3">
            </div>
            <a href="https://www.facebook.com/sharer/sharer.php?u=techfest.org" class="share btn btn-primary btn-lg w-75 nodisp" target="_blank">
                Share on Facebook
            </a>
        </div>
    </div>
    <div class="col-sm-12 col-md-8 relative w-sm-100vw h-100 d-flex align-items-center justify-content-between">
        <div class="container1 m-auto">
            <div class="score current-score">
                score<br><span></span>
            </div>
            <div class="score high-score">
                high score<br><span></span>
            </div>
            <button class="trigger left-trigger">tap!</button>
            <button class="trigger right-trigger">tap!</button>
        </div>
    </div>
</div>
<script src="{{asset('/2018/Cyclothon/js/jquery-2.2.3.min.js')}}"></script>
<script src="https://cdn.rawgit.com/schteppe/poly-decomp.js/1ef946f1/build/decomp.min.js"></script>
<script src="https://cdn.rawgit.com/liabru/matter-js/0895d81f/build/matter.min.js"></script>
<script src="https://cdn.rawgit.com/liabru/matter-attractors/c470ed42/build/matter-attractors.min.js"></script>
<script>
    (() => {
        var _0x894d=["\x75\x73\x65","\x30\x20\x30\x20\x30\x20\x32\x35\x30\x20\x31\x39\x20\x32\x35\x30\x20\x32\x30\x20\x32\x33\x31\x2E\x39\x20\x32\x35\x2E\x37\x20\x31\x39\x36\x2E\x31\x20\x33\x36\x2E\x39\x20\x31\x36\x31\x2E\x37\x20\x35\x33\x2E\x33\x20\x31\x32\x39\x2E\x35\x20\x37\x34\x2E\x36\x20\x31\x30\x30\x2E\x32\x20\x31\x30\x30\x2E\x32\x20\x37\x34\x2E\x36\x20\x31\x32\x39\x2E\x35\x20\x35\x33\x2E\x33\x20\x31\x36\x31\x2E\x37\x20\x33\x36\x2E\x39\x20\x31\x39\x36\x2E\x31\x20\x32\x35\x2E\x37\x20\x32\x33\x31\x2E\x39\x20\x32\x30\x20\x32\x36\x38\x2E\x31\x20\x32\x30\x20\x33\x30\x33\x2E\x39\x20\x32\x35\x2E\x37\x20\x33\x33\x38\x2E\x33\x20\x33\x36\x2E\x39\x20\x33\x37\x30\x2E\x35\x20\x35\x33\x2E\x33\x20\x33\x39\x39\x2E\x38\x20\x37\x34\x2E\x36\x20\x34\x32\x35\x2E\x34\x20\x31\x30\x30\x2E\x32\x20\x34\x34\x36\x2E\x37\x20\x31\x32\x39\x2E\x35\x20\x34\x36\x33\x2E\x31\x20\x31\x36\x31\x2E\x37\x20\x34\x37\x34\x2E\x33\x20\x31\x39\x36\x2E\x31\x20\x34\x38\x30\x20\x32\x33\x31\x2E\x39\x20\x34\x38\x30\x20\x32\x35\x30\x20\x35\x30\x30\x20\x32\x35\x30\x20\x35\x30\x30\x20\x30\x20\x30\x20\x30","\x30\x20\x30\x20\x32\x30\x20\x30\x20\x37\x30\x20\x31\x30\x30\x20\x32\x30\x20\x31\x35\x30\x20\x30\x20\x31\x35\x30\x20\x30\x20\x30","\x35\x30\x20\x30\x20\x36\x38\x20\x30\x20\x36\x38\x20\x31\x35\x30\x20\x35\x30\x20\x31\x35\x30\x20\x30\x20\x31\x30\x30\x20\x35\x30\x20\x30","\x30\x20\x30\x20\x31\x38\x30\x20\x31\x32\x30\x20\x30\x20\x31\x32\x30\x20\x30\x20\x30","\x31\x38\x30\x20\x30\x20\x31\x38\x30\x20\x31\x32\x30\x20\x30\x20\x31\x32\x30\x20\x31\x38\x30\x20\x30","\x23\x32\x31\x32\x35\x32\x39","\x23\x34\x39\x35\x30\x35\x37","\x23\x31\x35\x61\x61\x62\x66","\x23\x66\x61\x62\x30\x30\x35","\x23\x66\x66\x66\x33\x62\x66","\x23\x65\x36\x34\x39\x38\x30","\x23\x64\x65\x65\x32\x65\x36","\x2E\x63\x75\x72\x72\x65\x6E\x74\x2D\x73\x63\x6F\x72\x65\x20\x73\x70\x61\x6E","\x2E\x68\x69\x67\x68\x2D\x73\x63\x6F\x72\x65\x20\x73\x70\x61\x6E","\x2E\x73\x68\x61\x72\x65","\x63\x72\x65\x61\x74\x65","\x45\x6E\x67\x69\x6E\x65","\x77\x6F\x72\x6C\x64","\x62\x6F\x75\x6E\x64\x73","\x79","\x67\x72\x61\x76\x69\x74\x79","\x2E\x63\x6F\x6E\x74\x61\x69\x6E\x65\x72\x31","\x78","\x6D\x61\x78","\x42\x41\x43\x4B\x47\x52\x4F\x55\x4E\x44","\x52\x65\x6E\x64\x65\x72","\x72\x75\x6E","\x52\x75\x6E\x6E\x65\x72","\x6E\x65\x78\x74\x47\x72\x6F\x75\x70","\x42\x6F\x64\x79","\x76\x61\x6C","\x23\x6E\x61\x6D\x65","\x6B\x65\x79\x75\x70","\x61\x64\x64","\x57\x6F\x72\x6C\x64","\x6C\x65\x66\x74","\x75\x70","\x64\x6F\x77\x6E","\x72\x69\x67\x68\x74","\x70\x61\x64\x64\x6C\x65","\x70\x61\x64\x64\x6C\x65\x4C\x65\x66\x74","\x50\x41\x44\x44\x4C\x45","\x74\x72\x61\x70\x65\x7A\x6F\x69\x64","\x42\x6F\x64\x69\x65\x73","\x62\x72\x69\x63\x6B","\x72\x65\x63\x74\x61\x6E\x67\x6C\x65","\x63\x6F\x6D\x70","\x70\x61\x64\x64\x6C\x65\x4C\x65\x66\x74\x43\x6F\x6D\x70","\x68\x69\x6E\x67\x65","\x63\x69\x72\x63\x6C\x65","\x67\x72\x6F\x75\x70","\x63\x6F\x6C\x6C\x69\x73\x69\x6F\x6E\x46\x69\x6C\x74\x65\x72","\x66\x6F\x72\x45\x61\x63\x68","\x76\x61\x6C\x75\x65\x73","\x63\x6F\x6E","\x43\x6F\x6E\x73\x74\x72\x61\x69\x6E\x74","\x72\x6F\x74\x61\x74\x65","\x70\x61\x64\x64\x6C\x65\x52\x69\x67\x68\x74","\x70\x61\x64\x64\x6C\x65\x52\x69\x67\x68\x74\x43\x6F\x6D\x70","\x70\x69\x6E\x62\x61\x6C\x6C","\x50\x49\x4E\x42\x41\x4C\x4C","\x63\x6F\x6C\x6C\x69\x73\x69\x6F\x6E\x53\x74\x61\x72\x74","\x70\x61\x69\x72\x73","\x6C\x61\x62\x65\x6C","\x62\x6F\x64\x79\x42","\x72\x65\x73\x65\x74","\x62\x6F\x64\x79\x41","\x62\x75\x6D\x70\x65\x72","\x6F\x6E","\x45\x76\x65\x6E\x74\x73","\x62\x65\x66\x6F\x72\x65\x55\x70\x64\x61\x74\x65","\x76\x65\x6C\x6F\x63\x69\x74\x79","\x6D\x69\x6E","\x73\x65\x74\x56\x65\x6C\x6F\x63\x69\x74\x79","\x70\x6F\x73\x69\x74\x69\x6F\x6E","\x63\x61\x6E\x76\x61\x73","\x4D\x6F\x75\x73\x65","\x4D\x6F\x75\x73\x65\x43\x6F\x6E\x73\x74\x72\x61\x69\x6E\x74","\x6B\x65\x79\x64\x6F\x77\x6E","\x77\x68\x69\x63\x68","\x62\x6F\x64\x79","\x6D\x6F\x75\x73\x65\x75\x70\x20\x74\x6F\x75\x63\x68\x65\x6E\x64","\x6D\x6F\x75\x73\x65\x64\x6F\x77\x6E\x20\x74\x6F\x75\x63\x68\x73\x74\x61\x72\x74","\x2E\x6C\x65\x66\x74\x2D\x74\x72\x69\x67\x67\x65\x72","\x2E\x72\x69\x67\x68\x74\x2D\x74\x72\x69\x67\x67\x65\x72","\x73\x65\x74\x50\x6F\x73\x69\x74\x69\x6F\x6E","\x73\x65\x74\x41\x6E\x67\x75\x6C\x61\x72\x56\x65\x6C\x6F\x63\x69\x74\x79","\x66\x69\x6C\x6C\x53\x74\x79\x6C\x65","\x72\x65\x6E\x64\x65\x72","\x42\x55\x4D\x50\x45\x52\x5F\x4C\x49\x54","\x42\x55\x4D\x50\x45\x52","\x74\x65\x78\x74","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x74\x65\x63\x68\x66\x65\x73\x74\x2E\x6F\x72\x67\x2F\x34\x30\x34\x2F","\x62\x74\x6F\x61","\x2F","\x49","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x77\x77\x77\x2E\x66\x61\x63\x65\x62\x6F\x6F\x6B\x2E\x63\x6F\x6D\x2F\x73\x68\x61\x72\x65\x72\x2F\x73\x68\x61\x72\x65\x72\x2E\x70\x68\x70\x3F\x75\x3D","\x68\x72\x65\x66","\x61\x74\x74\x72","\x2E\x73\x68\x61\x72\x65\x5F\x31","","\x66\x61\x64\x65\x49\x6E","\x2E\x6E\x6F\x64\x69\x73\x70","\x66\x61\x64\x65\x4F\x75\x74","\x72\x61\x6E\x64\x6F\x6D","\x4F\x55\x54\x45\x52","\x66\x72\x6F\x6D\x50\x61\x74\x68","\x56\x65\x72\x74\x69\x63\x65\x73","\x66\x72\x6F\x6D\x56\x65\x72\x74\x69\x63\x65\x73","\x72\x65\x73\x74\x69\x74\x75\x74\x69\x6F\x6E","\x23\x66\x66\x66","\x57\x65\x6C\x6C\x20\x74\x68\x65\x20\x70\x61\x67\x65\x20\x79\x6F\x75\x20\x77\x65\x72\x65\x20\x73\x65\x61\x72\x63\x68\x69\x6E\x67\x20\x66\x6F\x72\x20\x63\x6F\x75\x6C\x64\x20\x6E\x6F\x74\x20\x62\x65\x20\x66\x6F\x75\x6E\x64\x2C\x20\x62\x75\x74\x20\x68\x65\x79\x20\x77\x68\x79\x20\x6E\x6F\x74\x20\x70\x6C\x61\x79\x20\x74\x68\x69\x73\x20\x67\x61\x6D\x65\x20\x61\x6E\x64\x20\x63\x68\x61\x6C\x6C\x65\x6E\x67\x65\x20\x79\x6F\x75\x72\x20\x66\x72\x69\x65\x6E\x64\x73\x20\x77\x69\x74\x68\x20\x61\x20\x68\x69\x67\x68\x73\x63\x6F\x72\x65","\x75\x69","\x46\x42","\x6C\x6F\x61\x64","\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72"];Matter[_0x894d[0]](MatterAttractors);const PATHS={DOME:_0x894d[1],DROP_LEFT:_0x894d[2],DROP_RIGHT:_0x894d[3],APRON_LEFT:_0x894d[4],APRON_RIGHT:_0x894d[5]};const COLOR={BACKGROUND:_0x894d[6],OUTER:_0x894d[7],INNER:_0x894d[8],BUMPER:_0x894d[9],BUMPER_LIT:_0x894d[10],PADDLE:_0x894d[11],PINBALL:_0x894d[12]};const GRAVITY=0.75;const WIREFRAMES=false;const BUMPER_BOUNCE=1.5;const PADDLE_PULL=0.002;const MAX_VELOCITY=50;let $currentScore=$(_0x894d[13]);let $highScore=$(_0x894d[14]);let $shareBtn=$(_0x894d[15]);let currentScore,highScore,name;let engine,world,render,pinball,stopperGroup;let leftPaddle,leftUpStopper,leftDownStopper,isLeftPaddleUp;let rightPaddle,rightUpStopper,rightDownStopper,isRightPaddleUp;function load(){init();createStaticBodies();createPaddles();createPinball();createEvents()}function init(){engine= Matter[_0x894d[17]][_0x894d[16]]();world= engine[_0x894d[18]];world[_0x894d[19]]= {min:{x:0,y:0},max:{x:500,y:800}};world[_0x894d[21]][_0x894d[20]]= GRAVITY;render= Matter[_0x894d[26]][_0x894d[16]]({element:$(_0x894d[22])[0],engine:engine,options:{width:world[_0x894d[19]][_0x894d[24]][_0x894d[23]],height:world[_0x894d[19]][_0x894d[24]][_0x894d[20]],wireframes:WIREFRAMES,background:COLOR[_0x894d[25]]}});Matter[_0x894d[26]][_0x894d[27]](render);let _0xe611x1d=Matter[_0x894d[28]][_0x894d[16]]();Matter[_0x894d[28]][_0x894d[27]](_0xe611x1d,engine);stopperGroup= Matter[_0x894d[30]][_0x894d[29]](true);currentScore= 0;highScore= 0;isLeftPaddleUp= false;isRightPaddleUp= false}$(_0x894d[32])[_0x894d[33]](function(){name= $(_0x894d[32])[_0x894d[31]]();updateScore(currentScore)});function createStaticBodies(){Matter[_0x894d[35]][_0x894d[34]](world,[boundary(250,-30,500,100),boundary(250,830,500,100),boundary(-30,400,100,800),boundary(530,400,100,800),path(239,86,PATHS.DOME),wall(140,140,20,40,COLOR.INNER),wall(225,140,20,40,COLOR.INNER),wall(310,140,20,40,COLOR.INNER),bumper(105,250),bumper(225,250),bumper(345,250),bumper(165,340),bumper(285,340),wall(440,520,20,560,COLOR.OUTER),path(25,360,PATHS.DROP_LEFT),path(425,360,PATHS.DROP_RIGHT),wall(120,510,20,120,COLOR.INNER),wall(330,510,20,120,COLOR.INNER),wall(60,529,20,160,COLOR.INNER),wall(390,529,20,160,COLOR.INNER),wall(93,624,20,98,COLOR.INNER,-0.96),wall(357,624,20,98,COLOR.INNER,0.96),path(79,740,PATHS.APRON_LEFT),path(371,740,PATHS.APRON_RIGHT),reset(225,50),reset(465,30)])}function createPaddles(){leftUpStopper= stopper(160,591,_0x894d[36],_0x894d[37]);leftDownStopper= stopper(140,743,_0x894d[36],_0x894d[38]);rightUpStopper= stopper(290,591,_0x894d[39],_0x894d[37]);rightDownStopper= stopper(310,743,_0x894d[39],_0x894d[38]);Matter[_0x894d[35]][_0x894d[34]](world,[leftUpStopper,leftDownStopper,rightUpStopper,rightDownStopper]);let _0xe611x20=Matter[_0x894d[30]][_0x894d[29]](true);let _0xe611x21={};_0xe611x21[_0x894d[40]]= Matter[_0x894d[44]][_0x894d[43]](170,660,20,80,0.33,{label:_0x894d[41],angle:1.57,chamfer:{},render:{fillStyle:COLOR[_0x894d[42]]}});_0xe611x21[_0x894d[45]]= Matter[_0x894d[44]][_0x894d[46]](172,672,40,80,{angle:1.62,chamfer:{},render:{visible:false}});_0xe611x21[_0x894d[47]]= Matter[_0x894d[30]][_0x894d[16]]({label:_0x894d[48],parts:[_0xe611x21[_0x894d[40]],_0xe611x21[_0x894d[45]]]});_0xe611x21[_0x894d[49]]= Matter[_0x894d[44]][_0x894d[50]](142,660,5,{isStatic:true,render:{visible:false}});Object[_0x894d[54]](_0xe611x21)[_0x894d[53]]((_0xe611x22)=>{_0xe611x22[_0x894d[52]][_0x894d[51]]= _0xe611x20});_0xe611x21[_0x894d[55]]= Matter[_0x894d[56]][_0x894d[16]]({bodyA:_0xe611x21[_0x894d[47]],pointA:{x:-29.5,y:-8.5},bodyB:_0xe611x21[_0x894d[49]],length:0,stiffness:0});Matter[_0x894d[35]][_0x894d[34]](world,[_0xe611x21[_0x894d[47]],_0xe611x21[_0x894d[49]],_0xe611x21[_0x894d[55]]]);Matter[_0x894d[30]][_0x894d[57]](_0xe611x21[_0x894d[47]],0.57,{x:142,y:660});let _0xe611x23={};_0xe611x23[_0x894d[40]]= Matter[_0x894d[44]][_0x894d[43]](280,660,20,80,0.33,{label:_0x894d[58],angle:-1.57,chamfer:{},render:{fillStyle:COLOR[_0x894d[42]]}});_0xe611x23[_0x894d[45]]= Matter[_0x894d[44]][_0x894d[46]](278,672,40,80,{angle:-1.62,chamfer:{},render:{visible:false}});_0xe611x23[_0x894d[47]]= Matter[_0x894d[30]][_0x894d[16]]({label:_0x894d[59],parts:[_0xe611x23[_0x894d[40]],_0xe611x23[_0x894d[45]]]});_0xe611x23[_0x894d[49]]= Matter[_0x894d[44]][_0x894d[50]](308,660,5,{isStatic:true,render:{visible:false}});Object[_0x894d[54]](_0xe611x23)[_0x894d[53]]((_0xe611x22)=>{_0xe611x22[_0x894d[52]][_0x894d[51]]= _0xe611x20});_0xe611x23[_0x894d[55]]= Matter[_0x894d[56]][_0x894d[16]]({bodyA:_0xe611x23[_0x894d[47]],pointA:{x:29.5,y:-8.5},bodyB:_0xe611x23[_0x894d[49]],length:0,stiffness:0});Matter[_0x894d[35]][_0x894d[34]](world,[_0xe611x23[_0x894d[47]],_0xe611x23[_0x894d[49]],_0xe611x23[_0x894d[55]]]);Matter[_0x894d[30]][_0x894d[57]](_0xe611x23[_0x894d[47]],-0.57,{x:308,y:660})}function createPinball(){pinball= Matter[_0x894d[44]][_0x894d[50]](0,0,14,{label:_0x894d[60],collisionFilter:{group:stopperGroup},render:{fillStyle:COLOR[_0x894d[61]]}});Matter[_0x894d[35]][_0x894d[34]](world,pinball);launchPinball()}function createEvents(){Matter[_0x894d[70]][_0x894d[69]](engine,_0x894d[62],function(_0xe611x26){let _0xe611x27=_0xe611x26[_0x894d[63]];_0xe611x27[_0x894d[53]](function(_0xe611x28){if(_0xe611x28[_0x894d[65]][_0x894d[64]]=== _0x894d[60]){switch(_0xe611x28[_0x894d[67]][_0x894d[64]]){case _0x894d[66]:launchPinball();break;case _0x894d[68]:pingBumper(_0xe611x28[_0x894d[67]]);break}}})});Matter[_0x894d[70]][_0x894d[69]](engine,_0x894d[71],function(_0xe611x26){Matter[_0x894d[30]][_0x894d[74]](pinball,{x:Math[_0x894d[24]](Math[_0x894d[73]](pinball[_0x894d[72]][_0x894d[23]],MAX_VELOCITY),-MAX_VELOCITY),y:Math[_0x894d[24]](Math[_0x894d[73]](pinball[_0x894d[72]][_0x894d[20]],MAX_VELOCITY),-MAX_VELOCITY)});if(pinball[_0x894d[75]][_0x894d[23]]> 450&& pinball[_0x894d[72]][_0x894d[20]]> 0){Matter[_0x894d[30]][_0x894d[74]](pinball,{x:0,y:-10})}});Matter[_0x894d[35]][_0x894d[34]](world,Matter[_0x894d[78]][_0x894d[16]](engine,{mouse:Matter[_0x894d[77]][_0x894d[16]](render[_0x894d[76]]),constraint:{stiffness:0.2,render:{visible:false}}}));$(_0x894d[81])[_0x894d[69]](_0x894d[79],function(_0xe611x29){if(_0xe611x29[_0x894d[80]]=== 37){isLeftPaddleUp= true}else {if(_0xe611x29[_0x894d[80]]=== 39){isRightPaddleUp= true}}});$(_0x894d[81])[_0x894d[69]](_0x894d[33],function(_0xe611x29){if(_0xe611x29[_0x894d[80]]=== 37){isLeftPaddleUp= false}else {if(_0xe611x29[_0x894d[80]]=== 39){isRightPaddleUp= false}}});$(_0x894d[84])[_0x894d[69]](_0x894d[83],function(_0xe611x29){isLeftPaddleUp= true})[_0x894d[69]](_0x894d[82],function(_0xe611x29){isLeftPaddleUp= false});$(_0x894d[85])[_0x894d[69]](_0x894d[83],function(_0xe611x29){isRightPaddleUp= true})[_0x894d[69]](_0x894d[82],function(_0xe611x29){isRightPaddleUp= false})}function launchPinball(){updateScore(0);Matter[_0x894d[30]][_0x894d[86]](pinball,{x:465,y:765});Matter[_0x894d[30]][_0x894d[74]](pinball,{x:0,y:-25+ rand(-2,2)});Matter[_0x894d[30]][_0x894d[87]](pinball,0)}function pingBumper(bumper){updateScore(currentScore+ 10);bumper[_0x894d[89]][_0x894d[88]]= COLOR[_0x894d[90]];setTimeout(function(){bumper[_0x894d[89]][_0x894d[88]]= COLOR[_0x894d[91]]},100)}function updateScore(_0xe611x2e){currentScore= _0xe611x2e;$currentScore[_0x894d[92]](currentScore);highScore= Math[_0x894d[24]](currentScore,highScore);$highScore[_0x894d[92]](highScore);let _0xe611x2f=_0x894d[93]+ window[_0x894d[94]](name)+ _0x894d[95]+ window[_0x894d[94]](highScore);let _0xe611x30=_0x894d[93]+ window[_0x894d[94]](_0x894d[96])+ _0x894d[95]+ window[_0x894d[94]](highScore);let _0xe611x31=_0x894d[97]+ encodeURI(_0xe611x2f);let _0xe611x32=_0x894d[97]+ encodeURI(_0xe611x30);$(_0x894d[15])[_0x894d[99]](_0x894d[98],_0xe611x31);$(_0x894d[100])[_0x894d[99]](_0x894d[98],_0xe611x32);if($(_0x894d[32])[_0x894d[31]]()!== _0x894d[101]){$(_0x894d[103])[_0x894d[102]]()}else {$(_0x894d[103])[_0x894d[104]]()}}function rand(_0xe611x34,_0xe611x35){return Math[_0x894d[105]]()* (_0xe611x35- _0xe611x34)+ _0xe611x34}function boundary(_0xe611x37,_0xe611x38,_0xe611x39,_0xe611x3a){return Matter[_0x894d[44]][_0x894d[46]](_0xe611x37,_0xe611x38,_0xe611x39,_0xe611x3a,{isStatic:true,render:{fillStyle:COLOR[_0x894d[106]]}})}function wall(_0xe611x37,_0xe611x38,_0xe611x39,_0xe611x3a,_0xe611x3c,_0xe611x3d= 0){return Matter[_0x894d[44]][_0x894d[46]](_0xe611x37,_0xe611x38,_0xe611x39,_0xe611x3a,{angle:_0xe611x3d,isStatic:true,chamfer:{radius:10},render:{fillStyle:_0xe611x3c}})}function path(_0xe611x37,_0xe611x38,path){let _0xe611x3f=Matter[_0x894d[108]][_0x894d[107]](path);return Matter[_0x894d[44]][_0x894d[109]](_0xe611x37,_0xe611x38,_0xe611x3f,{isStatic:true,render:{fillStyle:COLOR[_0x894d[106]],strokeStyle:COLOR[_0x894d[106]],lineWidth:1}})}function bumper(_0xe611x37,_0xe611x38){let bumper=Matter[_0x894d[44]][_0x894d[50]](_0xe611x37,_0xe611x38,25,{label:_0x894d[68],isStatic:true,render:{fillStyle:COLOR[_0x894d[91]]}});bumper[_0x894d[110]]= BUMPER_BOUNCE;return bumper}function stopper(_0xe611x37,_0xe611x38,_0xe611x41,_0xe611x42){let _0xe611x43=(_0xe611x41=== _0x894d[36])?_0x894d[48]:_0x894d[59];return Matter[_0x894d[44]][_0x894d[50]](_0xe611x37,_0xe611x38,40,{isStatic:true,render:{visible:false},collisionFilter:{group:stopperGroup},plugin:{attractors:[function(_0xe611x44,_0xe611x45){if(_0xe611x45[_0x894d[64]]=== _0xe611x43){let _0xe611x46=(_0xe611x41=== _0x894d[36])?isLeftPaddleUp:isRightPaddleUp;let _0xe611x47=(_0xe611x42=== _0x894d[37]&& _0xe611x46);let _0xe611x48=(_0xe611x42=== _0x894d[38]&&  !_0xe611x46);if(_0xe611x47|| _0xe611x48){return {x:(_0xe611x44[_0x894d[75]][_0x894d[23]]- _0xe611x45[_0x894d[75]][_0x894d[23]])* PADDLE_PULL,y:(_0xe611x44[_0x894d[75]][_0x894d[20]]- _0xe611x45[_0x894d[75]][_0x894d[20]])* PADDLE_PULL}}}}]}})}function reset(_0xe611x37,_0xe611x39){return Matter[_0x894d[44]][_0x894d[46]](_0xe611x37,781,_0xe611x39,2,{label:_0x894d[66],isStatic:true,render:{fillStyle:_0x894d[111]}})}shareToFB= ()=>{window[_0x894d[114]][_0x894d[113]]({description:_0x894d[112]})};window[_0x894d[116]](_0x894d[115],load,false)    })();
</script>
</body>
</html>
