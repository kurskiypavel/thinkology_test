<html class="" lang="en">

<head>
    <style type="text/css">
        .swal-icon--error {
            border-color: #f27474;
            -webkit-animation: animateErrorIcon .5s;
            animation: animateErrorIcon .5s
        }

        .swal-icon--error__x-mark {
            position: relative;
            display: block;
            -webkit-animation: animateXMark .5s;
            animation: animateXMark .5s
        }

        .swal-icon--error__line {
            position: absolute;
            height: 5px;
            width: 47px;
            background-color: #f27474;
            display: block;
            top: 37px;
            border-radius: 2px
        }

        .swal-icon--error__line--left {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            left: 17px
        }

        .swal-icon--error__line--right {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            right: 16px
        }

        @-webkit-keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }
            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }
            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @-webkit-keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        @keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        .swal-icon--warning {
            border-color: #f8bb86;
            -webkit-animation: pulseWarning .75s infinite alternate;
            animation: pulseWarning .75s infinite alternate
        }

        .swal-icon--warning__body {
            width: 5px;
            height: 47px;
            top: 10px;
            border-radius: 2px;
            margin-left: -2px
        }

        .swal-icon--warning__body,
        .swal-icon--warning__dot {
            position: absolute;
            left: 50%;
            background-color: #f8bb86
        }

        .swal-icon--warning__dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -4px;
            bottom: -11px
        }

        @-webkit-keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }
            to {
                border-color: #f8bb86
            }
        }

        @keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }
            to {
                border-color: #f8bb86
            }
        }

        .swal-icon--success {
            border-color: #a5dc86
        }

        .swal-icon--success:after,
        .swal-icon--success:before {
            content: "";
            border-radius: 50%;
            position: absolute;
            width: 60px;
            height: 120px;
            background: #fff;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal-icon--success:before {
            border-radius: 120px 0 0 120px;
            top: -7px;
            left: -33px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 60px 60px;
            transform-origin: 60px 60px
        }

        .swal-icon--success:after {
            border-radius: 0 120px 120px 0;
            top: -11px;
            left: 30px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 60px;
            transform-origin: 0 60px;
            -webkit-animation: rotatePlaceholder 4.25s ease-in;
            animation: rotatePlaceholder 4.25s ease-in
        }

        .swal-icon--success__ring {
            width: 80px;
            height: 80px;
            border: 4px solid hsla(98, 55%, 69%, .2);
            border-radius: 50%;
            box-sizing: content-box;
            position: absolute;
            left: -4px;
            top: -4px;
            z-index: 2
        }

        .swal-icon--success__hide-corners {
            width: 5px;
            height: 90px;
            background-color: #fff;
            position: absolute;
            left: 28px;
            top: 8px;
            z-index: 1;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal-icon--success__line {
            height: 5px;
            background-color: #a5dc86;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 2
        }

        .swal-icon--success__line--tip {
            width: 25px;
            left: 14px;
            top: 46px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-animation: animateSuccessTip .75s;
            animation: animateSuccessTip .75s
        }

        .swal-icon--success__line--long {
            width: 47px;
            right: 8px;
            top: 38px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-animation: animateSuccessLong .75s;
            animation: animateSuccessLong .75s
        }

        @-webkit-keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }
            54% {
                width: 0;
                left: 1px;
                top: 19px
            }
            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }
            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }
            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }
            54% {
                width: 0;
                left: 1px;
                top: 19px
            }
            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }
            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }
            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @-webkit-keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }
            65% {
                width: 0;
                right: 46px;
                top: 54px
            }
            84% {
                width: 55px;
                right: 0;
                top: 35px
            }
            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        @keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }
            65% {
                width: 0;
                right: 46px;
                top: 54px
            }
            84% {
                width: 55px;
                right: 0;
                top: 35px
            }
            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        .swal-icon--info {
            border-color: #c9dae1
        }

        .swal-icon--info:before {
            width: 5px;
            height: 29px;
            bottom: 17px;
            border-radius: 2px;
            margin-left: -2px
        }

        .swal-icon--info:after,
        .swal-icon--info:before {
            content: "";
            position: absolute;
            left: 50%;
            background-color: #c9dae1
        }

        .swal-icon--info:after {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -3px;
            top: 19px
        }

        .swal-icon {
            width: 80px;
            height: 80px;
            border-width: 4px;
            border-style: solid;
            border-radius: 50%;
            padding: 0;
            position: relative;
            box-sizing: content-box;
            margin: 20px auto
        }

        .swal-icon:first-child {
            margin-top: 32px
        }

        .swal-icon--custom {
            width: auto;
            height: auto;
            max-width: 100%;
            border: none;
            border-radius: 0
        }

        .swal-icon img {
            max-width: 100%;
            max-height: 100%
        }

        .swal-title {
            color: rgba(0, 0, 0, .65);
            font-weight: 600;
            text-transform: none;
            position: relative;
            display: block;
            padding: 13px 16px;
            font-size: 27px;
            line-height: normal;
            text-align: center;
            margin-bottom: 0
        }

        .swal-title:first-child {
            margin-top: 26px
        }

        .swal-title:not(:first-child) {
            padding-bottom: 0
        }

        .swal-title:not(:last-child) {
            margin-bottom: 13px
        }

        .swal-text {
            font-size: 16px;
            position: relative;
            float: none;
            line-height: normal;
            vertical-align: top;
            text-align: left;
            display: inline-block;
            margin: 0;
            padding: 0 10px;
            font-weight: 400;
            color: rgba(0, 0, 0, .64);
            max-width: calc(100% - 20px);
            overflow-wrap: break-word;
            box-sizing: border-box
        }

        .swal-text:first-child {
            margin-top: 45px
        }

        .swal-text:last-child {
            margin-bottom: 45px
        }

        .swal-footer {
            text-align: right;
            padding-top: 13px;
            margin-top: 13px;
            padding: 13px 16px;
            border-radius: inherit;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .swal-button-container {
            margin: 5px;
            display: inline-block;
            position: relative
        }

        .swal-button {
            background-color: #7cd1f9;
            color: #fff;
            border: none;
            box-shadow: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 14px;
            padding: 10px 24px;
            margin: 0;
            cursor: pointer
        }

        .swal-button[not:disabled

        ]
        :hover {
            background-color: #78cbf2
        }

        .swal-button:active {
            background-color: #70bce0
        }

        .swal-button:focus {
            outline: none;
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(43, 114, 165, .29)
        }

        .swal-button[disabled] {
            opacity: .5;
            cursor: default
        }

        .swal-button::-moz-focus-inner {
            border: 0
        }

        .swal-button--cancel {
            color: #555;
            background-color: #efefef
        }

        .swal-button--cancel[not:disabled

        ]
        :hover {
            background-color: #e8e8e8
        }

        .swal-button--cancel:active {
            background-color: #d7d7d7
        }

        .swal-button--cancel:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, .29)
        }

        .swal-button--danger {
            background-color: #e64942
        }

        .swal-button--danger[not:disabled

        ]
        :hover {
            background-color: #df4740
        }

        .swal-button--danger:active {
            background-color: #cf423b
        }

        .swal-button--danger:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(165, 43, 43, .29)
        }

        .swal-content {
            padding: 0 20px;
            margin-top: 20px;
            font-size: medium
        }

        .swal-content:last-child {
            margin-bottom: 20px
        }

        .swal-content__input,
        .swal-content__textarea {
            -webkit-appearance: none;
            background-color: #fff;
            border: none;
            font-size: 14px;
            display: block;
            box-sizing: border-box;
            width: 100%;
            border: 1px solid rgba(0, 0, 0, .14);
            padding: 10px 13px;
            border-radius: 2px;
            -webkit-transition: border-color .2s;
            transition: border-color .2s
        }

        .swal-content__input:focus,
        .swal-content__textarea:focus {
            outline: none;
            border-color: #6db8ff
        }

        .swal-content__textarea {
            resize: vertical
        }

        .swal-button--loading {
            color: transparent
        }

        .swal-button--loading ~ .swal-button__loader {
            opacity: 1
        }

        .swal-button__loader {
            position: absolute;
            height: auto;
            width: 43px;
            z-index: 2;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            text-align: center;
            pointer-events: none;
            opacity: 0
        }

        .swal-button__loader div {
            display: inline-block;
            float: none;
            vertical-align: baseline;
            width: 9px;
            height: 9px;
            padding: 0;
            border: none;
            margin: 2px;
            opacity: .4;
            border-radius: 7px;
            background-color: hsla(0, 0%, 100%, .9);
            -webkit-transition: background .2s;
            transition: background .2s;
            -webkit-animation: swal-loading-anim 1s infinite;
            animation: swal-loading-anim 1s infinite
        }

        .swal-button__loader div:nth-child(3n+2) {
            -webkit-animation-delay: .15s;
            animation-delay: .15s
        }

        .swal-button__loader div:nth-child(3n+3) {
            -webkit-animation-delay: .3s;
            animation-delay: .3s
        }

        @-webkit-keyframes swal-loading-anim {
            0% {
                opacity: .4
            }
            20% {
                opacity: .4
            }
            50% {
                opacity: 1
            }
            to {
                opacity: .4
            }
        }

        @keyframes swal-loading-anim {
            0% {
                opacity: .4
            }
            20% {
                opacity: .4
            }
            50% {
                opacity: 1
            }
            to {
                opacity: .4
            }
        }

        .swal-overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 0;
            overflow-y: scroll;
            background-color: rgba(0, 0, 0, .4);
            z-index: 10000;
            pointer-events: none;
            opacity: 0;
            -webkit-transition: opacity .3s;
            transition: opacity .3s
        }

        .swal-overlay:before {
            content: " ";
            display: inline-block;
            vertical-align: middle;
            height: 100%
        }

        .swal-overlay--show-modal {
            opacity: 1;
            pointer-events: auto
        }

        .swal-overlay--show-modal .swal-modal {
            opacity: 1;
            pointer-events: auto;
            box-sizing: border-box;
            -webkit-animation: showSweetAlert .3s;
            animation: showSweetAlert .3s;
            will-change: transform
        }

        .swal-modal {
            width: 478px;
            opacity: 0;
            pointer-events: none;
            background-color: #fff;
            text-align: center;
            border-radius: 5px;
            position: static;
            margin: 20px auto;
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            z-index: 10001;
            -webkit-transition: opacity .2s, -webkit-transform .3s;
            transition: opacity .2s, -webkit-transform .3s;
            transition: transform .3s, opacity .2s;
            transition: transform .3s, opacity .2s, -webkit-transform .3s
        }

        @media (max-width: 500px) {
            .swal-modal {
                width: calc(100% - 20px)
            }
        }

        @-webkit-keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }
            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }
            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        #thinkology_logo {
            max-height: 80px;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.1">
    <meta name="description" content="Лучшие PHP и Laravel скринкасты в интернете.">
    <meta property="og:site_name" content="Thinkology">
    <meta property="fb:app_id" content="511211375738022">
    <title>Лушие Laravel и PHP Скринкасты</title>
    <link rel="apple-touch-icon" sizes="180x180"
          href="wp-content/uploads/2017/11/cropped-fav123-180x180.png">
    <link rel="icon" type="image/png" href="wp-content/uploads/2017/11/cropped-fav123-32x32.png"
          sizes="32x32">
    <link rel="icon" type="image/png" href="wp-content/uploads/2017/11/fav123_16x16-fav.png
          sizes="16x16">


    <meta name="theme-color" content="#4fb6b5">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700|Source+Sans+Pro" rel="stylesheet">

    <script src="wp-content/themes/wplms/js/lib/wow.min.js"></script>
    <script>
        new WOW({
            mobile: false
        }).init();
    </script>
    <link href="wp-content/themes/wplms/css/min.css" rel="stylesheet">
    <script>
        window.LARACASTS = {
            "signedIn": false,
            "csrfToken": "Jtospvrz5x99A2L9eeb0Ixqor5v1W6EuBEXwLIb8",
            "stripeKey": "pk_live_42cAcd2OvCDs4hpErd5ZscBT",
            "user": null
        };
    </script>
    <style id="style-1-cropbar-clipper">


        .en-markup-crop-options {
            top: 18px !important;
            left: 50% !important;
            margin-left: -100px !important;
            width: 200px !important;
            border: 2px rgba(255, 255, 255, .38) solid !important;
            border-radius: 4px !important;
        }

        .en-markup-crop-options div div:first-of-type {
            margin-left: 0px !important;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111463918-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111463918-1');
</script>


</head>

<body class=" guest home">
<script id="flash-template" type="text/template">
    <div class="notification is-primary for-user">
        <a href="#" class="notification-body inherits-color" target="_blank" rel="noreferrer noopener"></a>
    </div>
</script>
<div id="root" class="page ">
    <div>
        <nav class="nav is-home">
            <div class="container">
                <div class="nav-left dont-flex mr-2"><a href="/" class="nav-item is-brand">

                        <img id="thinkology_logo"
                             src="wp-content/themes/wplms/images/icons/illustrator_no_grad_row.png">
                    </a></div>
                <div class="nav-center flex mr-2">

                </div>
                <span class="nav-toggle"><span></span> <span></span> <span></span></span>
                <div class="nav-right nav-menu">

                </div>
            </div>
        </nav>
        <nav class="nav-bottom  is-hidden-tablet ">
            <div class="container">
                <ul class="is-flex-tablet nav-menu">

                    <li><a href="/all-courses" class="nav-bottom-link "><span class="icon icon-catalog"></span> <span
                                    class="nav-bottom-title">КАТАЛОГ</span></a></li>
                    <li><a href="/php" class="nav-bottom-link "><span class="icon icon-series"></span> <span
                                    class="nav-bottom-title">PHP</span></a></li>
                    <li><a href="/laravel" class="nav-bottom-link "><span class="icon icon-series"></span> <span
                                    class="nav-bottom-title">LARAVEL</span></a></li>
                    <li><a href="/testing" class="nav-bottom-link "><span class="icon icon-apparel"></span> <span
                                    class="nav-bottom-title">ТЕСТИРОВАНИЕ</span></a></li>
                    <li><a href="/front-end" class="nav-bottom-link "><span class="icon icon-discuss"></span> <span
                                    class="nav-bottom-title">FRONT-END</span></a></li>
                    <li><a href="/tooling" class="nav-bottom-link "><span class="icon icon-discuss"></span> <span
                                    class="nav-bottom-title">ИНСТРУМЕНТЫ</span></a></li>
                </ul>
            </div>
        </nav>
        <section class="header">
            <div class="container has-text-centered">
                <div class="columns">
                    <div class="column is-10 is-offset-1">
                        <h1 data-wow-duration="2s" class="title is-1 wow fadeIn"
                            style="visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
                            Это Как <strong>Netflix</strong> для Вашей Карьеры!
                        </h1>
                        <p data-wow-delay=".4s" class="subheading pb-1 wow fadeIn"
                           style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                            Узнайте практичную, современную веб разработку через экспертные скринкасты. Большинство
                            обучающих видео скучны. Эти - нет. Готовы пойти дальше?
                        </p>
                        <div data-wow-delay=".6s" class="wow zoomIn"
                             style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                            <a href="/all-courses"
                               class="button is-success is-default is-outlined mb-1-mobile w-100-mobile">Смотреть
                                Все</a></div>
                    </div>
                </div>

                <img id="header-person" src="wp-content/themes/wplms/images/home/main_guy.png" style="max-width: 50%;">
            </div>
        </section>
        <section class="skills is-greydient bb-0">
            <div class="container">
                <div class="columns is-mobile is-multiline">
                    <div class="column is-2-tablet has-text-centered is-offset-1-tablet wow fadeInLeftBig"
                         style="visibility: visible; animation-name: fadeInLeftBig;"><a href="/laravel"><img
                                    src="wp-content/themes/wplms/images/icons/laravel-icon.png" width="55" height="70"
                                    alt="Laravel Навык" class="mb-1"></a>
                        <h4 class="title skill-heading in-caps"><a href="/laravel">Laravel</a></h4> <span
                                class="h-divider"></span>
                        <ul>
                            <li><a href="/laravel" class="button is-success is-small mb-1">
                                    15 Эпизодов
                                </a></li>
                            <li><strong class="color-primary">21</strong> <span
                                        class="color-text-lighter">Видео</span></li>
                        </ul>
                    </div>
                    <div data-wow-delay=".5s" class="column is-2-tablet has-text-centered wow fadeInUp"
                         style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><a
                                href="/php"><img src="wp-content/themes/wplms/images/icons/php-icon.png"
                                                        width="60" height="71" alt="PHP Навык" class="mb-1"></a>
                        <h4 class="title skill-heading"><a href="/php">PHP</a></h4> <span
                                class="h-divider"></span>
                        <ul>
                            <li><a href="/php" class="button is-success is-small mb-1">
                                    13 Эпизодов
                                </a></li>
                            <li><strong class="color-primary">304</strong> <span
                                        class="color-text-lighter">Видео</span></li>
                        </ul>
                    </div>
                    <div data-wow-delay=".5s" class="column is-2-tablet has-text-centered wow fadeInUp"
                         style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><a
                                href="/testing"><img src="wp-content/themes/wplms/images/icons/testing-icon.png"
                                                            width="71" height="70" alt="Навык Тестирование" class="mb-1"
                                                            style="position: relative; left: 8px;"></a>
                        <h4 class="title skill-heading in-caps"><a href="/testing">Тестирование</a></h4> <span
                                class="h-divider"></span>
                        <ul>
                            <li><a href="/testing" class="button is-success is-small mb-1">
                                    5 Эпизодов
                                </a></li>
                            <li><strong class="color-primary">79</strong> <span class="color-text-lighter">Видео</span>
                            </li>
                        </ul>
                    </div>
                    <div data-wow-delay=".5s" class="column is-2-tablet has-text-centered wow fadeInUp"
                         style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><a
                                href="/front-end"><img
                                    src="wp-content/themes/wplms/images/icons/javascript-icon.png" width="50"
                                    height="70" alt="Навык Front-End" class="mb-1"></a>
                        <h4 class="title skill-heading in-caps"><a href="/front-end">JavaScript</a></h4> <span
                                class="h-divider"></span>
                        <ul>
                            <li><a href="/front-end" class="button is-success is-small mb-1">
                                    6 Эпизодов
                                </a></li>
                            <li><strong class="color-primary">238</strong> <span
                                        class="color-text-lighter">Видео</span></li>
                        </ul>
                    </div>
                    <div class="column is-2-tablet has-text-centered wow fadeInRightBig"
                         style="visibility: visible; animation-name: fadeInRightBig;"><a href="/tooling"><img
                                    src="wp-content/themes/wplms/images/icons/tooling-icon.png" width="55" height="70"
                                    alt="Инструменты" class="mb-1"></a>
                        <h4 class="title skill-heading in-caps"><a href="/tooling">Инструменты</a></h4> <span
                                class="h-divider"></span>
                        <ul>
                            <li><a href="/tooling" class="button is-success is-small mb-1">
                                    10 Эпизодов
                                </a></li>
                            <li><strong class="color-primary">268</strong> <span
                                        class="color-text-lighter">Видео</span></li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>
        <section class="about-laracasts">
            <div class="container">
                <div class="columns">
                    <div class="column is-6">
                        <h2 class="heading wow slideInUp pr-1-tablet" style="visibility: hidden; animation-name: none;">
                            Самые лаконичные скринкасты для работающего разработчика, обновляются еженедельно.
                        </h2></div>
                    <div class="column is-6 wow slideInDown subheading content px-1"
                         style="visibility: hidden; animation-name: none;">
                        <p>
                            Тайный соус для Thinkology прост. <strong>Никаких слайдов. Нет скриптов. Только <a
                                        href="http://sublimetext.com" target="_blank">Sublime</a>.</strong>
                            Как визуальный ученик, я часто смотрел видео-уроки и засыпал. Там было столько схем и
                            маркированных списков, что ни один человек не сможет пройти!
                        </p>
                        <p>
                            При запуске Thinkology в 2014 году я всегда обращал внимание на то, чтобы сосредоточиться не на
                            академической теории, а на реальном коде и рабочем процессе.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="invest-in-yourself is-medium">
            <div class="container">
                <div class="columns">
                    <div class="column is-offset-2-desktop is-8-desktop">
                        <div class="subheading content wow fadeIn has-text-centered"
                             style="visibility: hidden; animation-name: none;">
                            <p>
                                Много образовательных ресурсов научат вас, как сделать сайт. Но как насчет тех из нас,
                                кто уже это делает все время, каждый день? Где наше дальнейшее образование? Если когда
                                и была область, которая требовала непрерывного обучения, программирование, безусловно,
                                та область.
                            </p>
                            <p><strong>Thinkology</strong> это по факту образовательный ресурс предназначенный для
                                работающиx разработчиков, строящиx веб с PHP и JavaScript. Это как <strong>Netflix для вашей
                                    карьеры</strong>!
                            </p>
                            <p data-wow-delay=".5s" class="has-text-centered mt-2 wow fade zoomIn"
                               style="visibility: hidden; animation-delay: 0.5s; animation-name: none;"><a href="/all-courses"
                                                                                                           class="button is-default is-primary">
                                    Перейти к делу
                                </a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="has-text-centered invest-in-yourself-join-button is-hidden-mobile"><a href="/all-courses"
                                                                                              class="button is-naked">
                    Осмотреться вокруг
                </a></div>
        </section>
        <section class="testimonials is-medium is-grey">
            <div class="container">
                <div class="columns has-text-centered-tablet">
                    <div class="column is-5-widescreen is-offset-7-widescreen is-6-tablet is-offset-3-tablet is-vertically-centered">
                        <div>
                            <div class="wow bounceInRight ml-1" style="visibility: hidden; animation-name: none;">
                                <h3 class="heading mb-1">
                                    Тысячи разработчиков ведут свою игру с Thinkology каждый день.
                                </h3>
                                <p class="subheading has-no-padding">
                                    “Что это еще за Thinkology и почему я должен доверять им?” Справедливый вопрос!
                                    Помогут ли сотни и сотни светящиxся одобрений?
                                </p> <a href="/отзывы" class="button is-primary is-padded">Бесчисленные Отзывы</a>
                            </div>
                            <div class="avatars"><a href="http://kroerov.ru" id="testimonial-1" target="_blank"
                                                    class="testimonial-avatar"><img
                                            src="wp-content/themes/wplms/images/reviews/vlad-restov.jpg"
                                            alt="Владимир Рестов" class="is-circle">
                                    <div class="testimony box content"><p>
                                            Thinkology это безумие!
                                        </p> <span class="name">Владимир Рестов</span> <span class="job">Kroerov</span>
                                    </div>
                                </a> <a href="https://www.milk-you.ru" id="testimonial-2" target="_blank"
                                        class="testimonial-avatar"><img
                                            src="wp-content/themes/wplms/images/reviews/ivan-stoyanov.jpg"
                                            alt="Иван Стоянов" class="is-circle">
                                    <div class="testimony box content"><p>
                                            Серьезно, Thinkology полностью сносит крышу. Вы потрясающие учителя.
                                        </p> <span class="name">Иван Стоянов</span> <span class="job">Milk You</span>
                                    </div>
                                </a> <a href="http://broweb.ru" id="testimonial-3" target="_blank"
                                        class="testimonial-avatar"><img
                                            src="wp-content/themes/wplms/images/reviews/danila-virov.jpg"
                                            alt="Данила Виров" class="is-circle">
                                    <div class="testimony box content"><p>
                                            Возможно, самые "обязательные к просмотру" скринкасты по веб-разработке в интернете.
                                        </p> <span class="name">Данила Виров</span> <span class="job">Broweb</span>
                                    </div>
                                </a> <a href="https://lifehacker.ru" id="testimonial-4" target="_blank"
                                        class="testimonial-avatar"><img
                                            src="wp-content/themes/wplms/images/reviews/petr-barn.jpg"
                                            alt="Пётр Барн" class="is-circle">
                                    <div class="testimony box content"><p>
                                            Thinkology первичный инструмент для изучения Laravel. Уроки всегда
                                            кратки и актуальны. Если вы используете Laravel, подписка - обязательна!
                                        </p> <span class="name">Пётр Барн</span> <span class="job">ЛайфХакер</span>
                                    </div>
                                </a> <a href="https://www.naumen.ru/" id="testimonial-5" target="_blank"
                                        class="testimonial-avatar"><img
                                            src="wp-content/themes/wplms/images/reviews/marat-fedoran.jpg"
                                            alt="Марат Федорян" class="is-circle">
                                    <div class="testimony box content"><p>
                                            Даже когда разрабатываю то, что я "знаю", я просматриваю на Thinkology релевантные топики.
                                            Там всегда есть что нибудь новенькое, даже если это рассматривается с другой точки зрения.
                                        </p> <span class="name">Марат Федорян</span> <span class="job">Naumen</span>
                                    </div>
                                </a> <a href="http://www.game-insight.com/ru" id="testimonial-6" target="_blank"
                                        class="testimonial-avatar"><img
                                            src="wp-content/themes/wplms/images/reviews/robert-zilber.jpg"
                                            alt="Роберт Зильбер" class="is-circle">
                                    <div class="testimony box content"><p>
                                            Лучший ресурс, чтобы узнать Laravel! Они проделали потрясающую работу. Это было
                                            именно то, что не хватало русскому сообществу.
                                        </p> <span class="name">Роберт Зильбер</span> <span class="job">GameInsight</span></div>
                                </a> <a href="https://github.com/shpakovski" id="testimonial-7" target="_blank"
                                        class="testimonial-avatar"><img
                                            src="wp-content/themes/wplms/images/reviews/vadim-shpakovski.jpg"
                                            alt="Вадим Шпаковский" class="is-circle">
                                    <div class="testimony box content"><p>
                                            Thinkology была недостающим элементом в изучении фреймворка laravel. Да были некоторые
                                            серии на других сайтах, но ни один из них не был на таком уровне.
                                        </p> <span class="name">Вадим Шпаковский</span> <span class="job"></span></div>
                                </a> <a href="https://github.com/kroitor" id="testimonial-8" target="_blank"
                                        class="testimonial-avatar"><img
                                            src="wp-content/themes/wplms/images/reviews/kroitor.jpg" alt="Игорь Кройтор"
                                            class="is-circle">
                                    <div class="testimony box content"><p>
                                            Они - единственные в своем роде своем роде репетиторы.
                                            Laravel и Thinkology, в два раза вкуснее!!
                                        </p> <span class="name">Игорь Кройтор</span> <span class="job"></span></div>
                                </a> <a href="https://github.com/alehander42" id="testimonial-9" target="_blank"
                                        class="testimonial-avatar"><img
                                            src="wp-content/themes/wplms/images/reviews/alexander-ivanov.jpg"
                                            alt="Александр Иванов" class="is-circle">
                                    <div class="testimony box content"><p>
                                            Следующий уровень для изучения Laravel!
                                        </p> <span class="name">Александр Иванов</span> <span class="job"></span>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="meet-jeffrey-section is-medium">
            <div class="container">
                <div class="columns">
                    <div class="column is-8 content is-medium color-white pt-4-tablet">

                        <p>
                            Мы действительно хороши в преподавании всего этого. Вы ни за что не найдете скучных, вызывающих сон
                            слайдов и диаграмм на этом сайте.
                        </p>
                        <p>
                            Нет.
                        </p>
                        <p>
                            Тут мы целиком и полностью сфокусированы на коде. Вы почувствуете себя точно так, как будто
                            мы сидим с вами рядом друг с другом.
                        </p>
                        <p>
                            Присоединяйтесь к нашей толпе и мы научим вас всему что мы знаем в этой области.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer-section bottom">
            <footer class="container">
                <div class="columns mb-3">
                    <div class="column is-5">
                        <h2 class="mb-3"><img src="wp-content/themes/wplms/images/logo-footer.png" alt="Thinkology"
                                              width="350" height="90"></h2>
                        <p class="footer-description is-heavy mb-3">
                            Множество ваших приятелей думают что Thinkology самая лучшая вещь на свете. Так что
                            начинайте смотреть и поднимите уровень ваших способностей в процессе.
                        </p>
                        <ul class="is-inline-flex w-100 is-justified-to-center-mobile">
                            <li><a href="http://vk.com/thinkology" target="_blank"><span
                                            class="icon is-outlined is-vertically-centered is-justified-to-center o-4"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.344 16.163h-1.867c-1.055 0-1.232-.601-2.102-1.469-.785-.785-1.22-.183-1.202.935.006.297-.141.534-.495.534-1.105 0-2.694.156-4.304-1.58-1.647-1.779-3.374-5.348-3.374-5.699 0-.208.172-.301.459-.301h1.898c.503 0 .545.249.686.568.584 1.331 1.981 4.002 2.354 2.511.214-.856.301-2.839-.615-3.01-.52-.096.396-.652 1.722-.652.33 0 .688.035 1.054.12.673.156.676.458.666.898-.034 1.666-.235 2.786.204 3.069.419.271 1.521-1.502 2.104-2.871.159-.378.191-.632.643-.632h2.322c1.216 0-.159 1.748-1.21 3.112-.847 1.099-.802 1.12.183 2.034.701.651 1.53 1.54 1.53 2.043 0 .238-.186.39-.656.39z" /></svg></span></a>
                            </li>
                            <li><a href="http://youtube.com/thinkology" target="_blank"><span
                                            class="icon is-outlined is-vertically-centered is-justified-to-center bg-black o-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" style="fill: white;"/></svg></span></a></li>
                            <li><a href="https://github.com/Thinkology" target="_blank"><span
                                            class="icon is-outlined o-4"><svg xmlns="http://www.w3.org/2000/svg"
                                                                              viewBox="0 0 16 16"><path
                                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="column is-2 is-offset-1 is-hidden-mobile">
                        <h5 class="heading is-5 in-caps">Учиться</h5>
                        <ul class="footer-links-list">
                            <li><a href="/all-courses">Каталог</a></li>
                            <li><a href="/php">PHP</a></li>
                            <li><a href="/laravel">Laravel</a></li>
                            <li><a href="/testing">Тестирование</a></li>
                            <li><a href="/front-end">Front-End</a></li>
                            <li><a href="/tooling">Инструменты</a></li>

                        </ul>
                    </div>
                    <div class="column is-2 is-hidden-mobile">
                        <h5 class="heading is-5 in-caps">Общение</h5>
                        <ul class="footer-links-list">

                            <li><a href="/отзывы">Отзывы</a></li>

                        </ul>
                    </div>
                    <div class="column is-2 is-hidden-mobile">
                        <h5 class="heading is-5 in-caps">Экстра</h5>
                        <ul class="footer-links-list">



                            <li><a href="https://hh.ru/search/vacancy?text=laravel&area=1">Получить работу</a></li>
                        </ul>
                        <ul class="zeroed footer-links-list">


                        </ul>
                    </div>
                </div>
                <div class="columns hosting">
                    <div class="column is-5 is-bold has-text-centered-mobile">
                        © Thinkology 2018. Все права защищены.
                    </div>

                </div>
            </footer>
        </section>
    </div>
    <div id="user-notifications" class="panel" style="display: none;">
        <h2 class="panel-heading has-icon">
            <svg id="icon-alarm" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"
                 class="icon">
                <path d="M0 0h24v24H0V0z" fill="none"></path>
                <path d="M10.01 21.01c0 1.1.89 1.99 1.99 1.99s1.99-.89 1.99-1.99h-3.98zm8.87-4.19V11c0-3.25-2.25-5.97-5.29-6.69v-.72C13.59 2.71 12.88 2 12 2s-1.59.71-1.59 1.59v.72C7.37 5.03 5.12 7.75 5.12 11v5.82L3 18.94V20h18v-1.06l-2.12-2.12zM16 13.01h-3v3h-2v-3H8V11h3V8h2v3h3v2.01z"></path>
            </svg>


            Уведомления
        </h2>
        <div class="panel-block p-2">
            <form method="POST" action="/discuss/notifications/mentions" class="has-text-centered"><input type="hidden"
                                                                                                          name="_method"
                                                                                                          value="DELETE">
                <input type="hidden" name="_token" value="Jtospvrz5x99A2L9eeb0Ixqor5v1W6EuBEXwLIb8">
                <button type="submit" class="button is-outlined is-primary">
                    Очистить все уведомления
                </button>
            </form>
        </div>
    </div>
    <div class="modal is-medium">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head is-primary">
                <h4 class="modal-card-title">
                    Добро пожаловать!
                </h4>
                <button class="delete"></button>
            </header>
            <div class="modal-card-body">
                <div>
                    <form role="form" method="post" action="/sessions"><input type="hidden" name="_token"
                                                                              value="Jtospvrz5x99A2L9eeb0Ixqor5v1W6EuBEXwLIb8">
                        <div class="control"><input type="email" id="email" name="email" placeholder="Email"
                                                    required="required" class="input"></div>
                        <div class="control"><input type="password" id="password" name="password" placeholder="Password"
                                                    required="required" class="input"></div>
                        <button type="submit" class="button is-primary is-submit">
                            Войти
                        </button>
                        <div class="control" style="display: none;"><span class="help is-danger">

                </span></div>
                    </form>
                </div>
            </div>
            <footer class="modal-card-foot"><a href="/join" class="is-muted in-caps mr-a fs-smaller">
                    Новый!
                </a> <a href="/password_resets/create" class="is-muted in-caps fs-smaller">
                    Забыли пароль?
                </a></footer>
        </div>
        <button class="modal-close">Закрыть</button>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="wp-content/themes/wplms/js/manifest.js"></script>
<script src="wp-content/themes/wplms/js/vendor.js"></script>
<script src="wp-content/themes/wplms/js/all.min.js"></script>



</body>

</html>
