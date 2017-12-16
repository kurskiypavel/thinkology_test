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
    <!--<link rel="manifest" href="https://laracasts.com/favicons/manifest.json?v=XBrbNbbRQ4">
    <link rel="mask-icon" href="https://laracasts.com/favicons/safari-pinned-tab.svg?v=XBrbNbbRQ4" color="#4fb6b5">
    <link rel="shortcut icon" href="https://laracasts.com/favicons/favicon.ico?v=XBrbNbbRQ4">-->
    <!--<meta name="msapplication-config" content="https://laracasts.com/favicons/browserconfig.xml?v=XBrbNbbRQ4">-->
    <meta name="theme-color" content="#4fb6b5">
    <!--<link rel="alternate" type="application/atom+xml" title="Laracasts" href="/feed">-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700|Source+Sans+Pro" rel="stylesheet">
    <!--<script src="//www.google-analytics.com/analytics.js"></script>-->
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
        /* Copyright 2014 Evernote Corporation. All rights reserved. */

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
                        <!--<svg id="green-logo" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 792.51 102.4">
                            <path d="M103.08,445.39v65.52h35.74v13.42H87V445.39Z" transform="translate(-86.99 -435.26)"
                                  class="svg-logo-green-path"></path>
                            <path d="M191.63,445.39h14.7l34.18,78.93H223l-7.07-17.09H182.05L175,524.33H157.45Zm7.4,20.87-11.52,27.5h22.88Z"
                                  transform="translate(-86.99 -435.26)" class="svg-logo-green-path"></path>
                            <path d="M285.3,491.87h-7.85v32.45H261.37V445.39h36a23.65,23.65,0,0,1,17.26,6.9,23.17,23.17,0,0,1,7,17.31q0,9.85-6.9,15.64a30.93,30.93,0,0,1-12.36,5.84l22.15,33.23H305Zm-7.85-33.06v21.76h16.42a10.65,10.65,0,0,0,10.8-11,10.24,10.24,0,0,0-3.15-7.79,10.72,10.72,0,0,0-7.65-3Z"
                                  transform="translate(-86.99 -435.26)" class="svg-logo-green-path"></path>
                            <path d="M374.58,445.39h14.7l34.18,78.93H405.91l-7.07-17.09H365l-7.07,17.09H340.4Zm7.4,20.87-11.52,27.5h22.88Z"
                                  transform="translate(-86.99 -435.26)" class="svg-logo-green-path"></path>
                            <path d="M500.09,471.17a24.2,24.2,0,0,0-3.67-4.84q-7.07-7.24-18.09-7.24t-18.09,7.24q-7,7.18-7,18.65t7,18.68q7,7.21,18,7.21t18.09-7.24a23.49,23.49,0,0,0,3.67-4.9L515,505.46a38.79,38.79,0,0,1-6.79,8.74q-11.8,11.52-29.78,11.52t-29.92-11.55q-11.94-11.55-11.94-29.2t11.94-29.28q11.94-11.63,29.92-11.63T508,455.86a38.8,38.8,0,0,1,6.79,8.57Z"
                                  transform="translate(-86.99 -435.26)" class="svg-logo-green-path"></path>
                            <path d="M677.73,444a44.48,44.48,0,0,1,29.11,10.35l-9.46,11.41a28.39,28.39,0,0,0-9.24-5.59,30.16,30.16,0,0,0-10.24-1.75q-6.12,0-9.63,2.67a6.49,6.49,0,0,0-2.56,5.29,6.56,6.56,0,0,0,3.28,5.68q2.56,1.73,12.41,4.51,11.63,3,17.31,6.57,10,6.63,10,18.43,0,10.8-9.35,17.92-8.46,6.24-21.49,6.23a46.6,46.6,0,0,1-33-13l9-11.47a36.24,36.24,0,0,0,10.3,7.07,29.9,29.9,0,0,0,13.64,3.28q6.68,0,10.58-2.84a8.35,8.35,0,0,0,3.51-6.62,7.28,7.28,0,0,0-3.56-6.29q-2.62-1.78-12.13-4.45-12.19-3.51-17.14-6.4-10.3-6.07-10.3-17.59A20.53,20.53,0,0,1,657,450.46Q665.21,444,677.73,444Z"
                                  transform="translate(-86.99 -435.26)" class="svg-logo-green-path"></path>
                            <path d="M730.16,445.39h64.13v13.3h-24v65.63H754.09V458.7H730.16Z"
                                  transform="translate(-86.99 -435.26)" class="svg-logo-green-path"></path>
                            <path d="M848.49,444a44.47,44.47,0,0,1,29.11,10.35l-9.46,11.41a28.36,28.36,0,0,0-9.24-5.59,30.16,30.16,0,0,0-10.24-1.75q-6.12,0-9.63,2.67a6.49,6.49,0,0,0-2.56,5.29,6.56,6.56,0,0,0,3.29,5.68q2.56,1.73,12.41,4.51,11.63,3,17.31,6.57,10,6.63,10,18.43,0,10.8-9.35,17.92-8.46,6.24-21.49,6.23a46.6,46.6,0,0,1-33-13l9-11.47a36.23,36.23,0,0,0,10.3,7.07,29.91,29.91,0,0,0,13.64,3.28q6.68,0,10.58-2.84a8.35,8.35,0,0,0,3.51-6.62,7.28,7.28,0,0,0-3.56-6.29Q856.56,494,847,491.37q-12.19-3.51-17.14-6.4-10.3-6.07-10.3-17.59a20.53,20.53,0,0,1,8.18-16.92Q836,444,848.49,444Z"
                                  transform="translate(-86.99 -435.26)" class="svg-logo-green-path"></path>
                            <path id="arrow"
                                  d="M549.44,537.66V504.75h12v13.78L621,489.74a29.75,29.75,0,0,0,4.21-2.31,15.41,15.41,0,0,0-1.36-.88l-62.42-31.73v19.93h-12V435.26L629.58,476c2.95,1.62,9.73,6.09,9,12.45-.68,6.09-8.18,10.27-12.67,12.24l-76.49,37Z"
                                  transform="translate(-86.99 -435.26)" class="svg-logo-black-path"></path>
                            <path d="M579.77,499H535a4.08,4.08,0,1,1,0-8.16h44.75a4.08,4.08,0,1,1,0,8.16Z"
                                  transform="translate(-86.99 -435.26)" class="svg-logo-black-path"></path>
                            <path d="M525.91,499h-8.23a4.08,4.08,0,1,1,0-8.16h8.23a4.08,4.08,0,1,1,0,8.16Z"
                                  transform="translate(-86.99 -435.26)" class="svg-logo-green-path"></path>
                            <path d="M544.14,488.13h-8.23a4.08,4.08,0,0,1,0-8.16h8.23a4.08,4.08,0,1,1,0,8.16Z"
                                  transform="translate(-86.99 -435.26)" class="svg-logo-green-path"></path>
                            <path d="M596.19,488.14H553.44a4.08,4.08,0,1,1,0-8.16h42.75a4.08,4.08,0,0,1,0,8.16Z"
                                  transform="translate(-86.99 -435.26)" class="svg-logo-black-path"></path>
                        </svg>-->
                        <img id="thinkology_logo"
                             src="wp-content/themes/wplms/images/icons/illustrator_no_grad_row.png">
                    </a></div>
                <div class="nav-center flex mr-2">

                </div>
                <span class="nav-toggle"><span></span> <span></span> <span></span></span>
                <div class="nav-right nav-menu">
                    <!--kurskii-->
                    <!--<a href="/register" class="vbpregister nav-item is-bold in-caps" style="color: #4d545d">
                        Новый

                    </a>-->

                    <!--kurskii-->
                    <!--<a href="/login" class="nav-item is-bold color-primary in-caps">
                        Войти
                    </a>-->
                    <!--<a href="login" rel="nofollow" class="smallimg vbplogin nav-item is-bold color-primary in-caps">
                        Войти
                    </a>-->
                </div>
            </div>
        </nav>
        <nav class="nav-bottom  is-hidden-tablet ">
            <div class="container">
                <ul class="is-flex-tablet nav-menu">
                    <!--<li class="is-hidden-tablet">
                        <form method="GET" action="/search" class="nav-search-form is-flex">
                            <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" class="is-hidden-mobile"
                                 style="width: 30px;"><title>search</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="search-icon" fill="#cacaca">
                                        <path d="M11.1921711,12.6063847 C10.0235906,13.4815965 8.5723351,14 7,14 C3.13400675,14 0,10.8659932 0,7 C0,3.13400675 3.13400675,0 7,0 C10.8659932,0 14,3.13400675 14,7 C14,8.5723351 13.4815965,10.0235906 12.6063847,11.1921711 L14.0162265,12.6020129 C14.6819842,12.4223519 15.4217116,12.5932845 15.9484049,13.1199778 L18.7795171,15.95109 C19.5598243,16.7313971 19.5646685,17.9916807 18.7781746,18.7781746 C17.997126,19.5592232 16.736965,19.5653921 15.95109,18.7795171 L13.1199778,15.9484049 C12.5960188,15.4244459 12.4217025,14.6840739 12.6018353,14.0160489 L11.1921711,12.6063847 Z M7,12 C9.76142375,12 12,9.76142375 12,7 C12,4.23857625 9.76142375,2 7,2 C4.23857625,2 2,4.23857625 2,7 C2,9.76142375 4.23857625,12 7,12 Z"></path>
                                    </g>
                                </g>
                            </svg>
                            <input type="search" id="search" placeholder="ЧТО ВЫ ХОТИТЕ ВЫУЧИТЬ ДАЛЬШЕ?" name="q"
                                   class="input">
                            <button type="submit" class="button is-primary in-caps is-hidden-mobile">
                                Search
                            </button>
                        </form>
                    </li>-->
                    <!--<li class="is-hidden-tablet"><a href="/login" class="nav-bottom-link"><span
                                    class="nav-bottom-title">Войти</span></a></li>
                    <li class="is-hidden-tablet"><a href="/join" class="nav-bottom-link"><span class="nav-bottom-title">Новый</span></a>
                    </li>-->
                    <li><a href="/all-courses" class="nav-bottom-link "><span class="icon icon-catalog"></span> <span
                                    class="nav-bottom-title">Каталог</span></a></li>
                    <li><a href="/all-courses" class="nav-bottom-link "><span class="icon icon-series"></span> <span
                                    class="nav-bottom-title">Эпизоды</span></a></li>
                    <li>
                        <div class="dropdown w-100">
                            <div class="is-vertically-centered">
                                <button class="button has-dropdown w-100"><a href="#" class="nav-bottom-link "><span
                                                class="icon icon-skills"></span> <span
                                                class="nav-bottom-title">Навыки</span></a></button>
                            </div>
                            <div class="dropdown-menu" style="min-width: 250px;">
                                <ul>
                                    <li class="dropdown-item"><a href="/php" class=" is-flex"><span class="flex">PHP</span>
                                            <span class="is-circle icon" style="color: rgb(136, 147, 189);"></span></a>
                                    </li>
                                    <li class="dropdown-item"><a href="/laravel" class=" is-flex"><span
                                                    class="flex">Laravel</span> <span class="is-circle icon"
                                                                                      style="color: rgb(237, 108, 99);"></span></a>
                                    </li>
                                    <li class="dropdown-item"><a href="/testing" class=" is-flex"><span
                                                    class="flex">Тестирование</span> <span class="is-circle icon"
                                                                                           style="color: rgb(144, 206, 148);"></span></a>
                                    </li>
                                    <li class="dropdown-item"><a href="/front-end" class=" is-flex"><span
                                                    class="flex">Front-End</span> <span class="is-circle icon"
                                                                                        style="color: rgb(171, 170, 67);"></span></a>
                                    </li>
                                    <li class="dropdown-item"><a href="/tooling" class=" is-flex"><span
                                                    class="flex">Инструменты</span> <span class="is-circle icon"
                                                                                          style="color: rgb(239, 103, 51);"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="/shop" class="nav-bottom-link "><span class="icon icon-apparel"></span> <span
                                    class="nav-bottom-title">Apparel</span></a></li>
                    <li><a href="/discuss" class="nav-bottom-link "><span class="icon icon-discuss"></span> <span
                                    class="nav-bottom-title">Discussions</span></a></li>
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
                             style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;"><!--<a href="/join" class="button is-default is-primary mr-1-tablet mb-1-mobile w-100-mobile">Начать</a>-->
                            <a href="/all-courses"
                               class="button is-success is-default is-outlined mb-1-mobile w-100-mobile">Смотреть
                                Все</a></div>
                    </div>
                </div>
                <!--<svg id="header-person" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 708.66 425.197"
                     enable-background="new 0 0 708.66 425.197" xml:space="preserve"><g>
                        <path fill="#EDF7F7" d="M572.143,405.655c-8.816-112.585-102.962-201.198-217.814-201.198
		                c-114.848,0-208.995,88.613-217.814,201.198H572.143z"></path>
                        <g>
                            <g>
                                <path fill="#51AFB2" d="M420.405,287.075c-2.917-6.086-7.046-7.237-7.046-7.237l-40.819-9.417l-18.184,3.595l-0.053,0.082v-0.082
				    l-18.184-3.595l-40.821,9.417c0,0-4.127,1.151-7.043,7.237c-2.051,4.28-13.447,30.195-21.571,52.961
				    c4.397,0.428,14.347,1.624,28.186,4.585v61.034h59.433h0.053h59.432v-61.034c13.84-2.961,23.79-4.157,28.188-4.585
				    C433.851,317.271,422.455,291.355,420.405,287.075z"></path>
                                <g>
                                    <path fill="#EFDBB5" d="M259.091,365.305c-4.104,20.642,5.46,29.243,15.448,40.351h20.331v-61.034
					c-13.838-2.961-23.789-4.157-28.186-4.585C263.255,349.641,260.409,358.685,259.091,365.305z"></path>
                                    <path fill="#EFDBB5" d="M449.565,365.305c-1.315-6.62-4.161-15.664-7.59-25.269c-4.397,0.428-14.348,1.624-28.188,4.585v61.034
					h20.33C444.107,394.548,453.672,385.946,449.565,365.305z"></path>
                                </g>
                            </g>
                            <path fill="#EFDBB5" d="M335.454,243.047v25.949c0,10.424,8.45,18.876,18.875,18.876c10.428,0,18.878-8.452,18.878-18.876v-25.949
			        H335.454z"></path>
                            <g>
                                <path fill="#E7C6A2" d="M354.328,244.47c-7.614,0-14.409,1.722-18.875,4.419v15.147c4.465,2.694,11.261,4.418,18.875,4.418
				c7.615,0,14.412-1.724,18.878-4.418v-15.147C368.74,246.191,361.943,244.47,354.328,244.47z"></path>
                            </g>
                            <path fill="#441D1A" d="M422.216,152.362c-3.077-17.282-13.77-27.828-13.77-27.828l-12.606,5.519
			c9.838,10.073,15.906,23.839,15.906,39.028c0,1.609-0.087,3.197-0.217,4.772l0.011-0.002l-0.036,0.297
			c-0.079,0.912-0.183,1.816-0.311,2.715l-6.292,54.747c24.717-11.997,29.323-50.542,29.323-50.542
			C431.295,178.58,425.289,169.645,422.216,152.362z"></path>
                            <path fill="#EFDBB5" d="M411.54,173.852l-0.011,0.002c0.13-1.575,0.217-3.163,0.217-4.772c0-30.862-25.017-55.879-55.877-55.879
			c-30.864,0-55.88,25.017-55.88,55.879c0,1.609,0.084,3.197,0.217,4.772l-0.011-0.002l0.032,0.276
			c0.085,0.943,0.192,1.878,0.322,2.808l7.014,61.018c1.392,12.359,12.709,22.475,25.147,22.475h23.16h23.155
			c12.438,0,23.753-10.115,25.146-22.475l7.022-61.089c0.128-0.898,0.231-1.803,0.311-2.715L411.54,173.852z"></path>
                            <g>
                                <path fill="#E7C6A2" d="M407.312,147.264c0,0,0.002-0.011,0.005-0.016c-2.15-5.062-5.028-9.738-8.497-13.905
				c-24.825-0.387-75.155-0.563-75.155-0.563s-3.38-1.031-8.186-2.293c-5.011,5.243-9.008,11.456-11.688,18.334
				c0.384,0.268,0.75,0.527,1.148,0.8C363.729,190.126,407.312,147.264,407.312,147.264z"></path>
                            </g>
                            <path fill="#562725" d="M306.068,149.141c0,0,2.344,10.4,6.591,14.938c0,0-9.096,5.562-11.871,14.939l6.046,52.592
			c0,0-17.238-4.75-31.007-46.787c0,0,7.538-7.418,8.27-20.599c0.734-13.181,7.765-28.121,14.207-31.783
			c0,0,0.44-14.94,6.884-20.358c6.444-5.418,1.61,6.299,1.61,6.299s12.744-13.913,45.553-17.429
			c32.811-3.518,61.513,3.222,61.513,3.222s4.744,37.066-24.312,49.358C341.481,173.875,306.068,149.141,306.068,149.141z"></path>
                            <g>
                                <circle fill="#353D51" cx="331.103" cy="191.242" r="4.906"></circle>
                                <circle fill="#898E99" cx="332.463" cy="190.126" r="1.75"></circle>
                            </g>
                            <g>
                                <circle fill="#353D51" cx="379.485" cy="191.242" r="4.906"></circle>
                                <circle fill="#898E99" cx="378.125" cy="190.126" r="1.75"></circle>
                            </g>
                            <path fill="#E7C6A2"
                                  d="M346.399,238.734c0,0,16.27-0.352,29.083-8.734C375.482,230,365.8,244.365,346.399,238.734z"></path>
                            <path fill="#351210" d="M404.676,141.909c0.968,1.732,1.854,3.515,2.637,5.354c3.322-5.311,5.128-12.049,6.036-16.559
			c-0.635-0.938-1.238-1.768-1.793-2.501C410.125,132.856,407.953,137.617,404.676,141.909z"></path>
                            <g>
                                <g>
                                    <g>
                                        <path fill="#441D1A" d="M341.695,182.14c-0.23,0.314-0.848,0.302-1.369-0.031c0,0-0.276-0.177-0.76-0.487
						c-0.466-0.353-1.22-0.644-2.083-1.088c-1.758-0.785-4.228-1.538-6.755-1.513c-2.522-0.021-5.021,0.663-6.776,1.444
						c-0.875,0.398-1.578,0.783-2.057,1.07c-0.467,0.299-0.731,0.47-0.731,0.47c-0.494,0.338-1.021,0.359-1.254,0.047l-2.007-2.312
						c-0.236-0.316,0.102-1.003,0.735-1.434c0,0,0.338-0.223,0.934-0.601c0.602-0.361,1.478-0.844,2.57-1.338
						c2.18-0.973,5.343-1.853,8.598-1.826c3.261-0.029,6.413,0.932,8.575,1.904c1.061,0.532,1.987,0.919,2.539,1.324
						c0.578,0.368,0.908,0.579,0.908,0.579c0.629,0.402,0.953,0.991,0.723,1.305L341.695,182.14z"></path>
                                    </g>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <g>
                                        <path fill="#441D1A" d="M390.433,182.104c-0.23,0.315-0.848,0.302-1.369-0.031c0,0-0.276-0.177-0.76-0.487
						c-0.466-0.353-1.22-0.644-2.083-1.088c-1.759-0.785-4.229-1.538-6.755-1.513c-2.522-0.021-5.021,0.663-6.775,1.444
						c-0.876,0.399-1.578,0.784-2.058,1.07c-0.467,0.299-0.73,0.471-0.73,0.471c-0.494,0.338-1.021,0.359-1.254,0.047l-2.008-2.312
						c-0.236-0.316,0.102-1.003,0.735-1.434c0,0,0.338-0.223,0.934-0.601c0.602-0.362,1.478-0.844,2.569-1.338
						c2.18-0.973,5.343-1.854,8.598-1.827c3.262-0.029,6.413,0.932,8.575,1.904c1.061,0.532,1.986,0.92,2.538,1.324
						c0.578,0.369,0.908,0.58,0.908,0.58c0.628,0.402,0.952,0.991,0.722,1.305L390.433,182.104z"></path>
                                    </g>
                                </g>
                            </g>
                            <path fill="#464655" d="M427.422,174.803c0,0,4.318-34.721-33.627-48.271c-0.98-0.35-1.211-3.461-0.213-3.176
			c42.981,12.28,37.981,52.55,37.981,52.55L427.422,174.803z"></path>
                            <g>
                                <path fill="#464655" d="M417.44,205.399c-0.186,1.725-1.749,2.982-3.472,2.799l-2.972-0.319
				c-1.727-0.183-2.984-1.743-2.798-3.467l3.345-31.346c0.186-1.725,1.749-2.984,3.471-2.799l2.973,0.317
				c1.723,0.185,2.985,1.744,2.801,3.469L417.44,205.399z"></path>
                                <rect x="419.098" y="175.698"
                                      transform="matrix(0.9943 0.1065 -0.1065 0.9943 22.6409 -43.8469)" fill="#D12C20"
                                      width="5.312" height="28.622"></rect>
                                <path fill="#FB503B" d="M427.349,174.086c-0.646-0.258-1.229,0.096-1.306,0.786l-3.294,30.839
				c-0.073,0.688,0.426,1.158,1.111,1.043l3.935-0.66c0.686-0.115,1.306-0.773,1.379-1.463l2.922-27.348
				c0.073-0.69-0.393-1.464-1.037-1.719L427.349,174.086z"></path>
                            </g>
                            <path fill="#464655" d="M284.314,174.803c0,0-4.318-34.721,33.625-48.271c0.981-0.35,1.213-3.461,0.213-3.176
			c-42.979,12.28-37.977,52.55-37.977,52.55L284.314,174.803z"></path>
                            <g>
                                <path fill="#464655" d="M294.296,205.399c0.185,1.725,1.747,2.982,3.47,2.799l2.974-0.319c1.724-0.183,2.981-1.743,2.798-3.467
				l-3.348-31.346c-0.184-1.725-1.744-2.984-3.468-2.799l-2.973,0.317c-1.725,0.185-2.984,1.744-2.801,3.469L294.296,205.399z"></path>
                                <rect x="287.326" y="175.698"
                                      transform="matrix(-0.9943 0.1065 -0.1065 -0.9943 598.5549 348.0466)"
                                      fill="#D12C20" width="5.312" height="28.622"></rect>
                                <path fill="#FB503B" d="M284.388,174.086c0.643-0.258,1.229,0.096,1.306,0.786l3.294,30.839c0.073,0.688-0.427,1.158-1.112,1.043
				l-3.937-0.66c-0.683-0.115-1.303-0.773-1.376-1.463l-2.922-27.348c-0.073-0.69,0.393-1.464,1.038-1.719L284.388,174.086z"></path>
                            </g>
                            <path fill="#FB503B" d="M398.891,123.497c-11.68-4.596-26.155-6.929-43.021-6.929l0,0c-16.87,0-31.344,2.333-43.024,6.929
			c-1.565,0.615-2.333,2.383-1.718,3.946c0.472,1.199,1.618,1.93,2.832,1.93c0.371,0,0.747-0.069,1.114-0.213
			c10.967-4.316,24.693-6.505,40.796-6.505l0,0c16.102,0,29.824,2.189,40.79,6.505c0.37,0.144,0.745,0.213,1.118,0.213
			c1.212,0,2.36-0.731,2.831-1.93C401.224,125.879,400.456,124.112,398.891,123.497z"></path>
                            <path fill="#E7C6A2" d="M355.767,218.27c-3.509,0-6.741-0.476-9.367-1.273c0.992,2.904,4.804,5.069,9.367,5.069
			c4.561,0,8.374-2.165,9.363-5.069C362.505,217.794,359.273,218.27,355.767,218.27z"></path>
                        </g>
                        <path fill="#F2F7F7" d="M538.528,160.628c1.422-3.241,1.294-6.86-0.175-9.914l2.883,2.17c-0.487,1.144-0.163,2.518,0.874,3.297
		c1.22,0.92,2.963,0.674,3.882-0.544c0.919-1.224,0.67-2.964-0.548-3.882c-1.038-0.782-2.444-0.714-3.413,0.07l-5.09-3.832
		c0.487-1.147,0.16-2.52-0.877-3.299c-1.033-0.781-2.443-0.713-3.407,0.07l-5.393-4.058c0.491-1.143,0.166-2.515-0.872-3.296
		c-1.222-0.92-2.964-0.675-3.883,0.545c-0.921,1.22-0.672,2.964,0.549,3.88c1.035,0.782,2.445,0.715,3.41-0.069l3.179,2.394
		c-3.339-0.569-6.854,0.306-9.575,2.571c-1.193-0.688-2.741-0.404-3.591,0.722c-0.919,1.223-0.674,2.96,0.548,3.881
		c1.221,0.917,2.962,0.674,3.881-0.546c0.711-0.943,0.719-2.191,0.126-3.136c3.046-2.463,7.179-2.99,10.706-1.507
		c-0.304,1.07,0.049,2.268,0.99,2.977c0.943,0.708,2.189,0.717,3.134,0.127c2.401,2.979,3.035,7.095,1.512,10.705
		c-1.071-0.306-2.27,0.047-2.978,0.989c-0.921,1.223-0.675,2.962,0.547,3.882c1.222,0.918,2.962,0.674,3.878-0.548
		C539.677,163.151,539.52,161.587,538.528,160.628z M544.646,152.812c0.637,0.48,0.764,1.389,0.285,2.027
		c-0.48,0.637-1.385,0.765-2.022,0.286c-0.637-0.48-0.768-1.387-0.288-2.025S544.013,152.335,544.646,152.812z M523.857,140.78
		c-0.637-0.478-0.768-1.386-0.288-2.023c0.479-0.638,1.388-0.768,2.024-0.29c0.638,0.482,0.765,1.389,0.286,2.027
		C525.399,141.132,524.489,141.259,523.857,140.78z M519.852,149.991c-0.481,0.639-1.391,0.765-2.024,0.287
		c-0.64-0.479-0.767-1.39-0.287-2.026c0.481-0.635,1.388-0.765,2.027-0.284C520.202,148.446,520.332,149.355,519.852,149.991z
		 M533.531,148.063c-0.641-0.478-0.767-1.388-0.288-2.025c0.482-0.637,1.388-0.765,2.027-0.284c0.636,0.479,0.763,1.388,0.282,2.023
		C535.074,148.415,534.166,148.542,533.531,148.063z M535.742,163.77c-0.634-0.481-0.765-1.392-0.282-2.027
		c0.478-0.636,1.389-0.763,2.022-0.284c0.637,0.479,0.765,1.387,0.285,2.024C537.287,164.119,536.38,164.248,535.742,163.77z"></path>
                        <path fill="#EDF7F7" d="M589.24,108.795c1.427-2.21,4.374-2.845,6.58-1.42c0.075,0.048,0.132,0.111,0.205,0.163
		c0.037-0.061,0.054-0.126,0.097-0.187c1.424-2.209,4.367-2.845,6.579-1.419c0.158,0.101,0.292,0.228,0.433,0.344
		c2.233-1.515,5.245-1.646,7.66-0.091c3.215,2.077,4.144,6.371,2.067,9.591c-0.119,0.184-0.249,0.359-0.382,0.529
		c2.392,1.703,3.049,4.999,1.442,7.493c-1.656,2.564-5.077,3.303-7.644,1.648c-0.085-0.055-0.161-0.115-0.242-0.175l0,0
		l-15.242-9.83c-0.042-0.026-0.088-0.04-0.133-0.067c-0.043-0.028-0.073-0.065-0.114-0.094l-0.148-0.093l0.012-0.015
		C588.422,113.69,587.877,110.912,589.24,108.795z"></path>
                        <g>
                            <path fill="#FB503B" d="M526.156,151.119l-14.159-11.377c-0.256-0.208-0.638-0.166-0.846,0.093l-20.65,25.699
			c-0.207,0.258-0.167,0.639,0.093,0.847l19.271,15.488c0.259,0.206,0.638,0.164,0.846-0.092l16.543-20.584L526.156,151.119z"></path>
                            <path fill="#D12C20" d="M522.134,157.082l5.12,4.111l-1.098-10.074l-4.113,5.118C521.838,156.493,521.877,156.875,522.134,157.082
			z"></path>
                            <path fill="#FFFFFF" d="M518.727,167.529c-0.008-0.208-0.002-3.246-0.008-3.771c-0.009-0.522-0.181-0.569-0.361-0.674
			c-0.18-0.105-2.305-1.295-2.553-1.433c-0.248-0.139-0.454-0.161-0.468,0.131c-0.014,0.265-0.186,2.998-0.223,3.599l-5.835-2.759
			l1.333-9.632c0.031-0.354,0.062-0.46-0.302-0.728c-0.364-0.267-3.243-2.212-3.449-2.35c-0.205-0.139-0.484-0.222-0.656,0.386
			c-0.176,0.609-2.418,9.679-2.487,9.94c-0.068,0.261-0.097,0.751,0.521,1.043c0.637,0.302,2.873,1.305,4.094,1.852
			c-0.239,1.395-0.728,4.229-0.753,4.673c-0.031,0.589,0.204,0.677,0.718,0.883c0.399,0.161,6.48,2.256,6.763,2.34
			c0.285,0.084,0.465,0.126,0.494-0.202c0.02-0.244,0.114-2.909,0.162-4.305c0.542,0.238,2.469,1.093,2.674,1.184
			C518.634,167.809,518.735,167.733,518.727,167.529z M508.373,162.199c-0.069-0.034-3.34-1.581-3.511-1.664
			c-0.172-0.083-0.161-0.1-0.135-0.165c0.021-0.063,2.154-9.351,2.173-9.472c0.023-0.118,0.08-0.184,0.123-0.148
			c0.041,0.034,2.769,1.851,2.861,1.919c0.096,0.068,0.071,0.079,0.057,0.163c0,0-1.388,9.08-1.412,9.239
			C508.506,162.23,508.441,162.235,508.373,162.199z M514.933,169.856c-0.011,0.103-0.003,0.181-0.18,0.123
			c-0.178-0.062-5.9-2.159-6.016-2.192c-0.115-0.033-0.197-0.075-0.179-0.328c0.018-0.253,0.587-3.962,0.587-3.962l5.771,2.591
			c0.15,0.058,0.207,0.063,0.188,0.243C515.08,166.509,514.944,169.751,514.933,169.856z M517.96,166.715
			c-0.124-0.064-2.226-1.038-2.226-1.038l0.147-3.115c0.005-0.088,0.017-0.173,0.126-0.105c0.113,0.066,1.975,1.08,2.062,1.125
			c0.09,0.042,0.168,0.073,0.16,0.269c-0.009,0.196-0.03,2.757-0.033,2.858C518.194,166.805,518.087,166.776,517.96,166.715z"></path>
                        </g>
                        <g>
                            <path fill="#FB503B" d="M160.12,242.272l-30.041,18.441c-0.548,0.334-0.723,1.06-0.382,1.605l33.471,54.525
			c0.339,0.548,1.057,0.724,1.609,0.384l40.891-25.103c0.549-0.334,0.718-1.054,0.386-1.603l-26.81-43.674L160.12,242.272z"></path>
                            <path fill="#D12C20" d="M168.388,253.514l10.855-6.664l-19.124-4.577l6.665,10.854
			C167.12,253.672,167.841,253.851,168.388,253.514z"></path>
                            <path fill="#FFFFFF" d="M185.252,266.568c-0.385-0.118-5.935-2.113-6.898-2.446c-0.961-0.328-1.158-0.043-1.468,0.219
			c-0.313,0.262-3.871,3.363-4.282,3.727c-0.419,0.355-0.595,0.724-0.069,0.943c0.476,0.201,5.357,2.296,6.428,2.76l-8.849,8.858
			l-16.729-8.734c-0.628-0.287-0.8-0.413-1.526,0.079c-0.729,0.494-6.163,4.483-6.553,4.77c-0.388,0.285-0.723,0.741,0.277,1.455
			c0.997,0.714,16.107,10.738,16.541,11.036c0.431,0.296,1.31,0.669,2.245-0.271c0.968-0.97,4.263-4.4,6.061-6.278
			c2.391,1.354,7.255,4.095,8.048,4.431c1.052,0.446,1.366,0.07,2.078-0.73c0.559-0.626,8.357-10.37,8.693-10.831
			c0.341-0.464,0.536-0.765-0.042-1.031c-0.434-0.197-5.245-2.11-7.762-3.111c0.789-0.836,3.612-3.799,3.909-4.114
			C185.702,266.926,185.632,266.683,185.252,266.568z M168.746,282.009c-0.106,0.105-5.065,5.068-5.331,5.328
			c-0.266,0.26-0.288,0.227-0.392,0.14c-0.1-0.087-15.68-10.043-15.883-10.161c-0.202-0.118-0.287-0.263-0.194-0.32
			c0.089-0.056,5.192-3.852,5.376-3.979c0.189-0.125,0.19-0.073,0.334,0.003c0,0,15.687,8.474,15.961,8.619
			C168.891,281.786,168.859,281.91,168.746,282.009z M187.027,275.023c0.182,0.084,0.329,0.121,0.103,0.408
			c-0.223,0.281-7.794,9.365-7.929,9.561c-0.138,0.194-0.271,0.309-0.719,0.113c-0.451-0.201-6.854-3.663-6.854-3.663l8.504-8.853
			c0.201-0.232,0.25-0.337,0.566-0.18C181.007,272.562,186.843,274.929,187.027,275.023z M183.264,267.436
			c-0.197,0.188-3.346,3.396-3.346,3.396l-5.602-2.309c-0.157-0.067-0.303-0.146-0.107-0.3c0.195-0.161,3.261-2.903,3.4-3.037
			c0.133-0.134,0.243-0.257,0.596-0.114c0.353,0.145,5.019,1.861,5.203,1.929C183.582,267.067,183.458,267.247,183.264,267.436z"></path>
                        </g>
                        <g>
                            <path fill="#E5EAF5" d="M486.27,19.91c-2.064-0.938-4.521-0.016-5.46,2.049l-25.514,56.153c-0.937,2.065-0.015,4.524,2.054,5.462
			l39.226,17.824c2.065,0.938,4.521,0.015,5.46-2.05l21.365-47.02l-7.037-18.746L486.27,19.91z"></path>
                            <path fill="#D4DCEE"
                                  d="M514.262,48.18l9.139,4.149l-7.037-18.746l-4.146,9.135C511.275,44.782,512.201,47.24,514.262,48.18z"></path>
                            <path fill="#7BA9D8" d="M500.397,59.797c-0.796,1.755-2.885,2.54-4.64,1.744l-34.75-15.79c-1.76-0.799-2.541-2.888-1.743-4.644
			l6.419-14.126c0.799-1.756,2.888-2.541,4.643-1.742l34.749,15.79c1.756,0.796,2.542,2.886,1.743,4.641L500.397,59.797z"></path>
                            <g>
                                <path fill="#7BA9D8" d="M482.562,79.101c-0.723-0.328-1.461-0.017-1.817,0.768c-0.353,0.715-0.088,1.505,0.616,1.826
				c0.764,0.347,1.491,0.005,1.82-0.716C483.537,80.192,483.306,79.44,482.562,79.101z"></path>
                                <path fill="#7BA9D8" d="M478.44,77.228c-0.723-0.328-1.464-0.015-1.82,0.769c-0.348,0.715-0.083,1.507,0.619,1.827
				c0.761,0.347,1.491,0.003,1.822-0.717C479.416,78.32,479.185,77.568,478.44,77.228z"></path>
                                <path fill="#7BA9D8" d="M486.683,80.973c-0.723-0.326-1.462-0.016-1.82,0.77c-0.351,0.713-0.085,1.505,0.62,1.826
				c0.762,0.346,1.49,0.005,1.819-0.717C487.658,82.064,487.427,81.312,486.683,80.973z"></path>
                                <path fill="#7BA9D8" d="M472.967,76.336l0.865-1.849c0.513-1.188,0.71-2.495-0.72-3.467l0.02-0.041
				c1.535,0.296,2.531-0.521,3.122-1.823c0.271-0.599,0.412-0.959,0.672-1.539c0.499-1.094,1.424-1.87,3.354-1.17l0.582-1.504
				c-3.083-1.276-4.686,0.217-5.359,1.702c-0.282,0.621-0.524,1.158-0.787,1.736c-0.63,1.385-1.405,1.829-3.205,1.013l-0.677,1.488
				c1.902,0.864,1.983,1.723,1.374,3.067l-0.92,1.975c-1.06,2.334-0.337,4.032,2.245,5.309l0.762-1.453
				C472.727,78.844,472.263,77.886,472.967,76.336z"></path>
                                <path fill="#7BA9D8" d="M495.76,77.995l0.785-1.666c1.049-2.313,0.336-4.033-2.263-5.287l-0.778,1.439
				c1.599,0.926,2.043,1.875,1.329,3.446l-0.689,1.507c-0.516,1.187-0.707,2.494,0.72,3.466l-0.02,0.042
				c-1.534-0.299-2.519,0.5-3.119,1.823c-0.282,0.62-0.508,1.114-0.77,1.693c-0.508,1.116-1.479,2.045-3.404,1.347l-0.584,1.502
				c3.076,1.298,4.685-0.213,5.361-1.702c0.279-0.619,0.657-1.495,0.92-2.075c0.628-1.382,1.424-1.819,3.218-1.003l0.677-1.487
				C495.244,80.177,495.159,79.316,495.76,77.995z"></path>
                            </g>
                            <g>
                                <path fill="#FFFFFF" d="M470.681,33.388c0.719-0.27,1.446-0.387,2.181-0.352c0.733,0.035,1.424,0.199,2.068,0.492
				s1.221,0.704,1.73,1.234c0.51,0.529,0.898,1.154,1.17,1.874l0.38,1.013l-2.037,0.783l-0.403-1.023
				c-0.164-0.436-0.399-0.813-0.705-1.134c-0.307-0.32-0.655-0.569-1.044-0.746c-0.39-0.177-0.807-0.275-1.249-0.296
				c-0.443-0.02-0.882,0.051-1.318,0.215c-0.43,0.148-0.804,0.376-1.124,0.683c-0.319,0.307-0.568,0.655-0.745,1.044
				c-0.178,0.39-0.276,0.806-0.297,1.249c-0.02,0.443,0.051,0.882,0.215,1.318c0.327,0.872,0.91,1.498,1.75,1.88
				c0.404,0.184,0.829,0.286,1.271,0.306c0.441,0.02,0.874-0.055,1.295-0.225l1.037-0.37l0.75,2.05l-1.014,0.38
				c-0.721,0.27-1.446,0.386-2.181,0.352c-0.734-0.036-1.424-0.2-2.068-0.493s-1.222-0.704-1.73-1.234
				c-0.51-0.53-0.9-1.154-1.169-1.874c-0.27-0.719-0.387-1.44-0.347-2.164c0.039-0.723,0.207-1.411,0.503-2.063
				c0.297-0.651,0.704-1.23,1.224-1.735C469.342,34.046,469.962,33.658,470.681,33.388z"></path>
                                <path fill="#FFFFFF" d="M489.068,39.953l-0.908,2.001l-6.092-2.768c-0.284-0.129-0.569-0.141-0.853-0.035
				c-0.283,0.106-0.49,0.302-0.619,0.586c-0.13,0.285-0.143,0.573-0.04,0.864c0.104,0.291,0.298,0.501,0.582,0.63l4.046,1.839
				c0.42,0.19,0.777,0.448,1.073,0.772s0.521,0.684,0.676,1.08c0.154,0.396,0.228,0.813,0.218,1.251
				c-0.01,0.439-0.109,0.869-0.3,1.288c-0.19,0.42-0.448,0.778-0.772,1.073c-0.324,0.296-0.688,0.519-1.092,0.67
				c-0.403,0.151-0.824,0.223-1.263,0.213c-0.438-0.009-0.868-0.109-1.288-0.3l-6.069-2.758l0.909-2l6.069,2.758
				c0.3,0.136,0.592,0.151,0.875,0.045s0.494-0.31,0.63-0.609c0.13-0.284,0.141-0.568,0.034-0.852
				c-0.105-0.283-0.31-0.494-0.609-0.629l-4.046-1.839c-0.42-0.19-0.778-0.448-1.072-0.772c-0.297-0.324-0.517-0.687-0.66-1.086
				c-0.145-0.4-0.211-0.819-0.201-1.258c0.009-0.438,0.109-0.867,0.3-1.287c0.19-0.419,0.447-0.777,0.772-1.073
				c0.324-0.295,0.682-0.518,1.075-0.664c0.392-0.148,0.807-0.216,1.247-0.207c0.438,0.009,0.866,0.109,1.286,0.3L489.068,39.953z"></path>
                                <path fill="#FFFFFF" d="M499.77,44.815l-0.908,2l-6.092-2.768c-0.284-0.129-0.569-0.141-0.853-0.035s-0.49,0.302-0.619,0.586
				c-0.13,0.285-0.143,0.573-0.04,0.864c0.104,0.29,0.298,0.501,0.582,0.63l4.046,1.839c0.42,0.19,0.777,0.448,1.073,0.772
				c0.296,0.325,0.521,0.685,0.676,1.081c0.154,0.396,0.228,0.813,0.218,1.251c-0.01,0.439-0.11,0.868-0.301,1.288
				c-0.19,0.419-0.447,0.777-0.771,1.073s-0.688,0.519-1.092,0.67c-0.403,0.151-0.824,0.223-1.263,0.213
				c-0.438-0.009-0.868-0.11-1.288-0.3l-6.069-2.758l0.909-2l6.069,2.758c0.3,0.136,0.592,0.151,0.875,0.045
				c0.283-0.106,0.494-0.31,0.63-0.609c0.13-0.284,0.141-0.568,0.034-0.852c-0.105-0.284-0.31-0.494-0.609-0.629l-4.046-1.839
				c-0.42-0.19-0.778-0.448-1.072-0.772c-0.297-0.325-0.517-0.687-0.66-1.086c-0.145-0.4-0.211-0.819-0.201-1.258
				c0.009-0.439,0.109-0.867,0.3-1.287c0.19-0.419,0.447-0.778,0.772-1.073c0.324-0.296,0.682-0.518,1.075-0.665
				c0.392-0.147,0.807-0.216,1.247-0.206c0.438,0.009,0.866,0.109,1.286,0.3L499.77,44.815z"></path>
                            </g>
                        </g>
                        <g>
                            <path fill="#E5EAF5" d="M94.85,61.818c-0.747,0.548-0.91,1.608-0.36,2.354l14.918,20.313c0.548,0.746,1.608,0.909,2.355,0.36
			l14.19-10.421c0.748-0.549,0.909-1.609,0.36-2.356l-12.49-17.008l-8.088-1.236L94.85,61.818z"></path>
                            <path fill="#D4DCEE"
                                  d="M110.519,57.488l3.304-2.427l-8.088-1.236l2.427,3.302C108.711,57.874,109.771,58.036,110.519,57.488z"></path>
                            <path fill="#7BA9D8" d="M111.89,64.752c0.465,0.634,0.328,1.538-0.308,2.003l-12.569,9.23c-0.635,0.467-1.537,0.327-2.003-0.306
			l-3.752-5.11c-0.467-0.635-0.33-1.537,0.306-2.001l12.57-9.232c0.635-0.468,1.536-0.33,2.002,0.305L111.89,64.752z"></path>
                            <g>
                                <path fill="#7BA9D8" d="M115.206,74.965c-0.261,0.192-0.298,0.518-0.089,0.802c0.186,0.267,0.52,0.331,0.773,0.144
				c0.277-0.203,0.3-0.528,0.109-0.793C115.79,74.835,115.476,74.769,115.206,74.965z"></path>
                                <path fill="#7BA9D8" d="M113.716,76.06c-0.262,0.192-0.299,0.519-0.091,0.802c0.186,0.267,0.52,0.333,0.774,0.145
				c0.276-0.202,0.3-0.532,0.108-0.792C114.299,75.93,113.985,75.861,113.716,76.06z"></path>
                                <path fill="#7BA9D8" d="M116.696,73.871c-0.261,0.191-0.298,0.519-0.088,0.803c0.183,0.266,0.519,0.33,0.773,0.143
				c0.275-0.203,0.299-0.53,0.108-0.792C117.28,73.74,116.966,73.672,116.696,73.871z"></path>
                                <path fill="#7BA9D8" d="M112.304,77.833l-0.486-0.678c-0.321-0.422-0.748-0.753-1.38-0.437l-0.01-0.014
				c0.413-0.488,0.32-1.007-0.025-1.477c-0.16-0.217-0.26-0.338-0.414-0.549c-0.292-0.396-0.384-0.881,0.252-1.428l-0.42-0.507
				c-1.071,0.844-0.859,1.712-0.465,2.25c0.166,0.224,0.308,0.418,0.462,0.627c0.367,0.501,0.371,0.867-0.279,1.343l0.394,0.539
				c0.689-0.505,1.012-0.362,1.369,0.123l0.519,0.724c0.621,0.842,1.37,0.924,2.342,0.256l-0.365-0.558
				C113.15,78.419,112.715,78.393,112.304,77.833z"></path>
                                <path fill="#7BA9D8" d="M117.448,70.04l-0.437-0.61c-0.615-0.839-1.371-0.928-2.337-0.252l0.359,0.565
				c0.649-0.384,1.076-0.351,1.493,0.216l0.4,0.546c0.32,0.421,0.746,0.75,1.378,0.437l0.011,0.015
				c-0.412,0.488-0.325,0.997,0.026,1.477c0.165,0.224,0.297,0.404,0.451,0.612c0.296,0.404,0.433,0.936-0.202,1.482l0.42,0.51
				c1.077-0.839,0.86-1.714,0.464-2.251c-0.165-0.225-0.403-0.533-0.556-0.744c-0.368-0.501-0.364-0.872,0.285-1.349l-0.395-0.537
				C118.123,70.66,117.8,70.519,117.448,70.04z"></path>
                            </g>
                            <g>
                                <path fill="#FFFFFF" d="M96.54,70.059c0.047-0.311,0.15-0.593,0.31-0.848c0.16-0.254,0.356-0.467,0.589-0.639
				c0.233-0.171,0.495-0.294,0.785-0.371c0.291-0.076,0.591-0.09,0.902-0.042l0.437,0.066l-0.128,0.883l-0.445-0.061
				c-0.188-0.03-0.37-0.021-0.545,0.024c-0.176,0.045-0.334,0.119-0.475,0.223c-0.141,0.104-0.259,0.232-0.355,0.387
				c-0.095,0.153-0.158,0.324-0.187,0.513c-0.033,0.182-0.027,0.361,0.019,0.537c0.045,0.175,0.12,0.333,0.224,0.474
				c0.103,0.142,0.232,0.259,0.385,0.355c0.154,0.096,0.325,0.159,0.513,0.187c0.375,0.057,0.716-0.025,1.02-0.248
				c0.146-0.107,0.268-0.238,0.363-0.392c0.095-0.154,0.155-0.323,0.179-0.507l0.075-0.443l0.881,0.142l-0.067,0.438
				c-0.048,0.309-0.151,0.592-0.311,0.846c-0.159,0.255-0.355,0.468-0.588,0.639c-0.233,0.171-0.495,0.295-0.786,0.37
				c-0.291,0.076-0.592,0.09-0.901,0.043c-0.311-0.048-0.591-0.151-0.841-0.31c-0.25-0.158-0.461-0.355-0.635-0.592
				c-0.173-0.235-0.297-0.496-0.375-0.782C96.507,70.667,96.492,70.369,96.54,70.059z"></path>
                                <path fill="#FFFFFF" d="M102.554,64.816l0.531,0.724l-2.204,1.619c-0.103,0.075-0.164,0.174-0.182,0.297
				c-0.02,0.121,0.009,0.234,0.085,0.337c0.076,0.103,0.176,0.166,0.3,0.187c0.124,0.021,0.238-0.006,0.341-0.082l1.464-1.075
				c0.151-0.111,0.315-0.188,0.49-0.229s0.347-0.049,0.52-0.025s0.335,0.083,0.49,0.172c0.155,0.091,0.288,0.213,0.399,0.365
				c0.111,0.151,0.188,0.315,0.228,0.489c0.041,0.175,0.048,0.349,0.021,0.523c-0.027,0.174-0.085,0.338-0.177,0.492
				c-0.091,0.155-0.212,0.288-0.364,0.399l-2.196,1.612l-0.532-0.724l2.196-1.612c0.108-0.08,0.172-0.182,0.19-0.303
				c0.019-0.123-0.011-0.238-0.091-0.346c-0.076-0.104-0.175-0.164-0.297-0.183c-0.122-0.019-0.237,0.012-0.346,0.092l-1.464,1.075
				c-0.152,0.111-0.315,0.188-0.49,0.228c-0.175,0.041-0.348,0.047-0.519,0.018c-0.171-0.028-0.334-0.088-0.489-0.179
				s-0.288-0.213-0.399-0.364c-0.112-0.152-0.187-0.314-0.228-0.489c-0.041-0.175-0.048-0.347-0.022-0.516
				c0.026-0.169,0.084-0.331,0.175-0.486c0.091-0.154,0.212-0.287,0.364-0.398L102.554,64.816z"></path>
                                <path fill="#FFFFFF" d="M106.425,61.973l0.531,0.724l-2.204,1.618c-0.103,0.076-0.164,0.175-0.182,0.298
				c-0.02,0.121,0.009,0.234,0.085,0.337c0.076,0.103,0.175,0.166,0.3,0.187c0.124,0.021,0.237-0.006,0.341-0.082l1.463-1.075
				c0.152-0.111,0.316-0.188,0.49-0.229s0.347-0.049,0.52-0.025c0.172,0.024,0.335,0.083,0.49,0.172
				c0.154,0.091,0.287,0.213,0.399,0.365c0.111,0.151,0.187,0.314,0.228,0.489s0.047,0.349,0.021,0.523
				c-0.027,0.174-0.086,0.338-0.177,0.492c-0.091,0.155-0.212,0.288-0.364,0.399l-2.195,1.612l-0.532-0.724l2.196-1.612
				c0.108-0.08,0.172-0.182,0.191-0.303c0.019-0.123-0.012-0.238-0.091-0.346c-0.076-0.104-0.175-0.164-0.297-0.183
				c-0.123-0.019-0.238,0.012-0.346,0.092l-1.464,1.075c-0.151,0.112-0.315,0.188-0.49,0.228c-0.174,0.041-0.348,0.047-0.519,0.018
				c-0.17-0.028-0.334-0.088-0.489-0.179s-0.287-0.213-0.398-0.364c-0.112-0.152-0.188-0.314-0.229-0.489
				c-0.041-0.175-0.048-0.347-0.022-0.516s0.084-0.331,0.175-0.486c0.091-0.154,0.213-0.287,0.364-0.399L106.425,61.973z"></path>
                            </g>
                        </g>
                        <g>
                            <path fill="#E9E9E1" d="M331.587,29.353l-8.11-7.195l-19.399,1.162c-0.354,0.021-0.626,0.328-0.604,0.681l1.466,24.482
			l27.694-1.659L331.587,29.353z"></path>
                            <path fill="#DCDAD0"
                                  d="M324.577,29.772l7.01-0.419l-8.11-7.195l0.42,7.011C323.918,29.521,324.223,29.794,324.577,29.772z"></path>
                            <g>
                                <path fill="#E5B15E" d="M311.983,40.233l-0.064-1.272c-0.062-0.806-0.337-1.584-1.407-1.706l-0.001-0.027
				c0.934-0.283,1.244-1.024,1.19-1.916c-0.022-0.411-0.054-0.651-0.076-1.046c-0.045-0.749,0.24-1.448,1.507-1.623l-0.117-0.999
				c-2.075,0.192-2.523,1.483-2.461,2.5c0.026,0.424,0.046,0.792,0.07,1.188c0.057,0.948-0.241,1.421-1.472,1.495l0.062,1.017
				c1.301-0.078,1.597,0.373,1.653,1.293l0.067,1.357c0.097,1.597,0.991,2.324,2.791,2.274l-0.006-1.022
				C312.581,41.688,312.044,41.293,311.983,40.233z"></path>
                                <path fill="#E5B15E" d="M325.044,34.5l-0.056-1.147c-0.094-1.583-0.991-2.325-2.788-2.259l-0.01,1.021
				c1.153,0.045,1.671,0.44,1.736,1.515l0.062,1.032c0.062,0.805,0.338,1.582,1.409,1.704v0.029
				c-0.932,0.285-1.244,1.011-1.192,1.914c0.025,0.427,0.048,0.767,0.071,1.162c0.045,0.764-0.218,1.56-1.485,1.735l0.118,1
				c2.074-0.18,2.521-1.484,2.46-2.502c-0.025-0.424-0.074-1.017-0.098-1.414c-0.058-0.947,0.255-1.421,1.484-1.494l-0.059-1.018
				C325.395,35.854,325.097,35.404,325.044,34.5z"></path>
                            </g>
                            <g>
                                <path fill="#E5B15E" d="M317.742,33.273c-0.612,0.038-1.004,0.516-0.963,1.18c0.018,0.614,0.483,1.06,1.077,1.024
				c0.648-0.039,1.022-0.535,0.986-1.147C318.801,33.667,318.373,33.236,317.742,33.273z"></path>
                                <path fill="#E5B15E" d="M318.018,37.869c-0.386,0.022-0.632,0.326-0.608,0.742l0.123,2.045c0.011,0.385,0.305,0.667,0.68,0.645
				c0.407-0.025,0.643-0.337,0.619-0.723l-0.123-2.044C318.684,38.116,318.416,37.845,318.018,37.869z"></path>
                            </g>
                            <path fill="#E5B15E" d="M306.263,59.819l26.409-1.582c0.354-0.021,0.625-0.329,0.605-0.681l-0.643-10.731l-27.694,1.659
			l0.642,10.73C305.603,59.568,305.91,59.841,306.263,59.819z"></path>
                            <g>
                                <g>
                                    <path fill="#FFFFFF" d="M316.88,54.271c0.073,1.23-0.311,1.502-0.96,1.54c-0.32,0.021-0.559-0.04-0.674-0.075l-0.186-0.061
					l-0.11,1.022l0.119,0.043c0.236,0.084,0.643,0.131,0.983,0.11c1.434-0.087,2.111-0.954,2.014-2.583l-0.275-4.584l-1.181,0.072
					L316.88,54.271z"></path>
                                    <path fill="#FFFFFF" d="M321.264,52.362c-0.939-0.301-1.249-0.557-1.279-1.056c-0.024-0.383,0.236-0.849,1.037-0.896
					c0.51-0.031,0.945,0.094,1.179,0.219l0.178,0.094l0.279-1.026l-0.116-0.061c-0.182-0.093-0.7-0.304-1.551-0.252
					c-1.354,0.08-2.25,0.939-2.182,2.09c0.055,0.914,0.701,1.544,1.971,1.921c0.975,0.301,1.187,0.639,1.213,1.09
					c0.037,0.606-0.401,0.997-1.167,1.042c-0.51,0.03-1.041-0.087-1.46-0.321l-0.18-0.101l-0.264,1.045l0.103,0.061
					c0.415,0.243,1.173,0.39,1.804,0.352c1.818-0.108,2.397-1.263,2.34-2.218C323.112,53.358,322.559,52.784,321.264,52.362z"></path>
                                </g>
                            </g>
                        </g>
                        <g>
                            <path fill="#E3BB44" d="M544.04,320.445c0.257,0.273,0.511,0.454,0.79,0.205l22.147-19.86c0.276-0.247,0.303-0.679,0.052-0.955
			l-13.315-14.854c-0.25-0.278-0.68-0.303-0.959-0.054l-2.822,2.532c-0.276,0.248-0.709,0.225-0.957-0.054l-7.24-8.074
			c-0.25-0.278-0.677-0.303-0.956-0.052l-8.264,7.41c-0.279,0.248-0.614,0.735-0.75,1.083l-4.868,12.67
			c-0.135,0.349-0.037,0.854,0.22,1.125L544.04,320.445z"></path>
                            <polygon fill="#F4EFDE"
                                     points="558.893,280.57 545.434,279.837 531.237,292.562 547.398,310.588 568.69,291.498 		"></polygon>
                            <polygon fill="#CEBF8C"
                                     points="551.793,286.934 558.893,280.57 545.434,279.837 		"></polygon>
                            <g>
                                <rect x="559.019" y="285.713"
                                      transform="matrix(0.7445 -0.6676 0.6676 0.7445 -50.2563 447.5272)" fill="#D4CFB8"
                                      width="1.205" height="7.433"></rect>
                                <rect x="552.805" y="291.604"
                                      transform="matrix(-0.6677 -0.7445 0.7445 -0.6677 710.5517 901.6182)"
                                      fill="#D4CFB8" width="7.438" height="1.208"></rect>
                                <rect x="542.415" y="291.382"
                                      transform="matrix(-0.6675 -0.7446 0.7446 -0.6675 700.3788 896.7078)"
                                      fill="#D4CFB8" width="15.952" height="1.206"></rect>
                            </g>
                            <path fill="#EACE62" d="M544.926,320.51c-0.172,0.327-0.517,0.369-0.765,0.094l-19.67-21.939c-0.247-0.277-0.31-0.775-0.138-1.105
			l9.126-17.442c0.171-0.33,0.517-0.374,0.766-0.097l19.669,21.94c0.249,0.276,0.311,0.773,0.138,1.104L544.926,320.51z"></path>
                        </g>
                        <g>
                            <path fill="#E3BB44" d="M250.67,254.753c-0.273,0.207-0.53,0.333-0.744,0.064l-17.034-21.345c-0.212-0.268-0.168-0.662,0.1-0.875
			l14.313-11.421c0.267-0.213,0.662-0.171,0.874,0.098l2.172,2.721c0.213,0.266,0.607,0.312,0.875,0.097l7.781-6.208
			c0.268-0.215,0.662-0.168,0.873,0.099l6.354,7.965c0.214,0.266,0.446,0.761,0.514,1.095l2.483,12.21
			c0.067,0.335-0.1,0.778-0.372,0.985L250.67,254.753z"></path>
                            <polygon fill="#F4EFDE"
                                     points="243.291,216.397 255.585,217.78 266.501,231.459 249.129,245.318 232.758,224.799 		"></polygon>
                            <polygon fill="#CEBF8C"
                                     points="248.747,223.236 243.291,216.397 255.585,217.78 		"></polygon>
                            <g>
                                <rect x="240.727" y="220.894"
                                      transform="matrix(-0.6237 -0.7816 0.7816 -0.6237 216.4458 552.8068)"
                                      fill="#D4CFB8" width="1.107" height="6.824"></rect>
                                <rect x="240.251" y="226.739"
                                      transform="matrix(0.7818 -0.6235 0.6235 0.7818 -88.5566 201.5323)" fill="#D4CFB8"
                                      width="6.825" height="1.108"></rect>
                                <rect x="241.926" y="227.469"
                                      transform="matrix(0.7817 -0.6237 0.6237 0.7817 -87.7977 205.2312)" fill="#D4CFB8"
                                      width="14.642" height="1.108"></rect>
                            </g>
                            <path fill="#EACE62" d="M249.859,254.676c0.106,0.322,0.412,0.413,0.678,0.2l21.142-16.868c0.268-0.214,0.399-0.654,0.293-0.979
			l-5.608-17.18c-0.106-0.323-0.412-0.417-0.679-0.204l-21.143,16.87c-0.268,0.215-0.398,0.653-0.293,0.979L249.859,254.676z"></path>
                        </g>
                        <g>
                            <path fill="#D3DCEE" d="M494.562,268.646c-0.412,0.654-1.286,0.857-1.94,0.444l-38.958-24.394
			c-0.654-0.411-0.857-1.282-0.446-1.939l18.04-28.805c0.411-0.657,1.282-0.857,1.938-0.447l38.957,24.394
			c0.655,0.414,0.854,1.282,0.443,1.943L494.562,268.646z"></path>
                            <path fill="#464655" d="M493.639,266.115c-0.293,0.468-0.916,0.612-1.387,0.319l-36.039-22.569
			c-0.468-0.291-0.61-0.917-0.318-1.382l14.739-23.536c0.293-0.468,0.913-0.612,1.384-0.316l36.039,22.566
			c0.47,0.294,0.613,0.917,0.319,1.385L493.639,266.115z"></path>
                            <g>
                                <circle fill="#F4E07C" cx="475.589" cy="217.782" r="1.025"></circle>
                                <path fill="#E66A68" d="M473.959,215.553c-0.482-0.302-1.112-0.156-1.413,0.322c-0.302,0.481-0.155,1.114,0.321,1.414
				c0.482,0.302,1.117,0.155,1.416-0.324C474.585,216.484,474.441,215.854,473.959,215.553z"></path>
                                <circle fill="#A3DDB7" cx="477.761" cy="219.143" r="1.027"></circle>
                                <path fill="#FFFFFF" d="M507.429,236.508c-0.482-0.3-1.115-0.153-1.415,0.327c-0.3,0.479-0.156,1.111,0.323,1.412
				c0.479,0.302,1.111,0.155,1.416-0.325C508.052,237.443,507.908,236.808,507.429,236.508z"></path>
                                <circle fill="#FFFFFF" cx="509.433" cy="238.976" r="1.025"></circle>
                                <path fill="#FFFFFF" d="M503.287,233.919l-16.205-10.15c-0.479-0.3-1.111-0.154-1.412,0.323
				c-0.303,0.482-0.156,1.115,0.323,1.415l16.207,10.149c0.481,0.301,1.116,0.155,1.416-0.326
				C503.914,234.852,503.771,234.22,503.287,233.919z"></path>
                            </g>
                            <g>
                                <path fill="#E66A68" d="M493.952,249.322l-1.209-9.648c-0.058-0.448-0.465-0.763-0.909-0.708
				c-0.445,0.058-0.765,0.466-0.708,0.912l1.123,8.988l-8.573,2.914c-0.427,0.145-0.658,0.607-0.511,1.033
				c0.061,0.186,0.181,0.332,0.335,0.431c0.203,0.123,0.454,0.16,0.696,0.08l9.209-3.128
				C493.772,250.069,494.001,249.706,493.952,249.322z"></path>
                                <path fill="#E66A68" d="M481.105,232.25c-0.144-0.425-0.606-0.656-1.034-0.509l-9.206,3.127
				c-0.365,0.122-0.593,0.486-0.545,0.872l1.204,9.648c0.031,0.253,0.178,0.464,0.379,0.592c0.151,0.093,0.338,0.142,0.535,0.116
				c0.443-0.054,0.762-0.464,0.708-0.911l-1.126-8.989l8.578-2.909C481.023,233.142,481.249,232.675,481.105,232.25z"></path>
                                <path fill="#E66A68" d="M490.47,236.126c-0.274-0.354-0.79-0.418-1.146-0.144l-15.664,12.182c-0.356,0.273-0.42,0.79-0.141,1.142
				c0.056,0.077,0.132,0.145,0.208,0.191c0.283,0.179,0.654,0.171,0.934-0.046l15.664-12.178
				C490.684,236.997,490.746,236.481,490.47,236.126z"></path>
                            </g>
                        </g>
                        <g>
                            <path fill="#EDF7F7" d="M122.666,365.67l-19.131-11.979c-0.322-0.201-0.75-0.103-0.952,0.219l-8.859,14.146
			c-0.202,0.323-0.103,0.751,0.22,0.954l19.131,11.979c0.32,0.202,0.75,0.103,0.951-0.217l8.859-14.148
			C123.086,366.3,122.988,365.873,122.666,365.67z M119.652,365.147c0.148-0.236,0.458-0.308,0.694-0.161
			c0.235,0.147,0.308,0.461,0.16,0.695c-0.148,0.236-0.459,0.308-0.696,0.159C119.575,365.693,119.504,365.383,119.652,365.147z
			 M109.659,358.89c0.148-0.235,0.46-0.307,0.696-0.159l7.958,4.985c0.236,0.146,0.308,0.456,0.161,0.694
			c-0.148,0.236-0.458,0.307-0.695,0.157l-7.958-4.982C109.584,359.438,109.513,359.124,109.659,358.89z M105.35,356.19
			c0.146-0.237,0.459-0.307,0.694-0.159c0.236,0.147,0.306,0.458,0.16,0.692c-0.149,0.236-0.459,0.31-0.696,0.162
			C105.273,356.737,105.203,356.428,105.35,356.19z M104.282,355.522c0.148-0.234,0.458-0.308,0.694-0.159
			c0.236,0.148,0.308,0.458,0.16,0.695c-0.147,0.234-0.458,0.308-0.693,0.157C104.206,356.07,104.136,355.759,104.282,355.522z
			 M103.216,354.854c0.146-0.234,0.456-0.307,0.693-0.16c0.235,0.149,0.308,0.462,0.161,0.697c-0.149,0.235-0.46,0.307-0.696,0.159
			C103.138,355.401,103.067,355.092,103.216,354.854z M120.812,367.969l-7.236,11.559c-0.144,0.231-0.453,0.299-0.682,0.157
			l-17.699-11.083c-0.231-0.145-0.299-0.452-0.157-0.681l7.238-11.558c0.144-0.229,0.45-0.301,0.68-0.155l17.7,11.081
			C120.886,367.437,120.956,367.74,120.812,367.969z M121.758,366.465c-0.148,0.238-0.458,0.309-0.694,0.16
			c-0.236-0.147-0.307-0.457-0.159-0.693c0.147-0.235,0.458-0.309,0.693-0.16C121.835,365.918,121.906,366.231,121.758,366.465z"></path>
                            <path fill="#EDF7F7" d="M112.688,366.194c-0.221,0.026-0.375,0.229-0.348,0.445l0.552,4.416l-4.212,1.431
			c-0.208,0.071-0.321,0.3-0.249,0.509c0.03,0.092,0.089,0.163,0.165,0.209c0.099,0.061,0.224,0.081,0.343,0.041l4.521-1.536
			c0.181-0.062,0.292-0.24,0.269-0.429l-0.592-4.738C113.107,366.322,112.907,366.168,112.688,366.194z"></path>
                            <path fill="#EDF7F7" d="M107.169,363.405c0.209-0.072,0.323-0.302,0.251-0.507c-0.071-0.211-0.299-0.325-0.508-0.252l-4.522,1.535
			c-0.179,0.061-0.292,0.239-0.268,0.428l0.593,4.739c0.015,0.123,0.087,0.227,0.185,0.289c0.075,0.045,0.166,0.071,0.262,0.059
			c0.219-0.027,0.375-0.227,0.349-0.447l-0.552-4.415L107.169,363.405z"></path>
                            <path fill="#EDF7F7" d="M112.019,364.802c-0.135-0.177-0.388-0.207-0.562-0.071l-7.692,5.979
			c-0.174,0.136-0.207,0.387-0.071,0.562c0.029,0.04,0.065,0.071,0.104,0.094c0.14,0.089,0.321,0.084,0.458-0.02l7.694-5.983
			C112.123,365.228,112.154,364.974,112.019,364.802z"></path>
                        </g>
                        <g>
                            <g>
                                <path fill="#F8F8F8" d="M233.633,88.681l-18.863-5.936L183.34,99.133c-0.572,0.297-0.797,1.009-0.498,1.582l18.513,35.513
				l44.87-23.391L233.633,88.681z"></path>
                                <path fill="#E9E9E9" d="M214.17,158.266l42.786-22.308c0.573-0.297,0.797-1.01,0.498-1.583l-11.229-21.539l-44.87,23.391
				l11.229,21.54C212.885,158.34,213.597,158.564,214.17,158.266z"></path>
                                <path fill="#D4D4D4" d="M257.454,134.376l-11.229-21.539l-22.435,11.694l11.771,22.583l21.395-11.156
				C257.529,135.661,257.753,134.948,257.454,134.376z"></path>
                            </g>
                            <g>
                                <path fill="#B1F9FD" d="M238.541,72.357l-20.847-6.559l-34.736,18.109c-0.631,0.329-0.88,1.117-0.55,1.749l20.462,39.251
				l49.59-25.853L238.541,72.357z"></path>
                                <polygon fill="#80F5FD"
                                         points="206.604,71.58 227.666,111.981 252.46,99.054 238.541,72.357 217.694,65.798 			"></polygon>
                                <path fill="#61D4DD" d="M225.989,78.903l12.552-6.546l-20.847-6.559l6.544,12.553C224.568,78.984,225.356,79.232,225.989,78.903z
				"></path>
                                <path fill="#F9DA61" d="M217.031,149.262l47.29-24.652c0.632-0.331,0.878-1.119,0.55-1.75l-12.41-23.805l-49.59,25.853
				l12.411,23.804C215.61,149.344,216.398,149.592,217.031,149.262z"></path>
                                <path fill="#F7CE46" d="M264.871,122.859l-12.41-23.805l-24.795,12.927l13.008,24.955l23.646-12.326
				C264.952,124.278,265.199,123.491,264.871,122.859z"></path>
                            </g>
                            <g>
                                <path fill="#245DCB" d="M223.861,135.205l-4.819-9.243l2.996-1.562c1.134-0.591,1.899-0.933,2.292-1.019
				c0.602-0.138,1.204-0.067,1.803,0.212c0.6,0.276,1.091,0.783,1.474,1.52c0.296,0.567,0.44,1.099,0.438,1.592
				c-0.003,0.494-0.109,0.935-0.311,1.322c-0.202,0.385-0.448,0.7-0.739,0.943c-0.399,0.319-1.021,0.7-1.867,1.141l-1.217,0.633
				l1.819,3.487L223.861,135.205z M221.725,126.552l1.367,2.624l1.021-0.534c0.736-0.383,1.202-0.688,1.399-0.914
				c0.198-0.225,0.313-0.479,0.348-0.758c0.032-0.282-0.022-0.556-0.165-0.83c-0.175-0.335-0.419-0.562-0.73-0.679
				c-0.311-0.115-0.633-0.12-0.963-0.017c-0.246,0.074-0.704,0.285-1.376,0.636L221.725,126.552z"></path>
                                <path fill="#245DCB" d="M232.48,130.712l-4.817-9.245l1.866-0.973l1.896,3.638l3.657-1.907l-1.896-3.638l1.867-0.975l4.819,9.245
				l-1.868,0.975l-2.107-4.043l-3.657,1.908l2.107,4.042L232.48,130.712z"></path>
                                <path fill="#245DCB" d="M241.802,125.853l-4.821-9.244l2.996-1.562c1.136-0.592,1.9-0.931,2.293-1.02
				c0.601-0.136,1.202-0.066,1.802,0.213c0.599,0.276,1.09,0.784,1.475,1.521c0.295,0.567,0.441,1.098,0.437,1.592
				c-0.004,0.495-0.108,0.934-0.31,1.321c-0.202,0.387-0.449,0.7-0.739,0.943c-0.4,0.322-1.022,0.7-1.868,1.141l-1.216,0.635
				l1.818,3.487L241.802,125.853z M239.664,117.2l1.369,2.622l1.021-0.533c0.737-0.382,1.202-0.687,1.399-0.914
				c0.197-0.227,0.313-0.479,0.348-0.758c0.032-0.279-0.022-0.556-0.164-0.828c-0.177-0.337-0.42-0.564-0.731-0.68
				c-0.312-0.116-0.633-0.12-0.963-0.019c-0.246,0.076-0.704,0.287-1.377,0.639L239.664,117.2z"></path>
                            </g>
                        </g>
                        <g>
                            <path fill="#F5EEFF" d="M629.081,59.527l-22.688-18.619c-0.414-0.339-1.03-0.278-1.367,0.134l-33.794,41.182
			c-0.343,0.415-0.282,1.029,0.132,1.369l30.884,25.346c0.412,0.339,1.028,0.278,1.367-0.136l27.067-32.981L629.081,59.527z"></path>
                            <path fill="#E6DAF7"
                                  d="M622.486,69.093l8.196,6.729l-1.602-16.295l-6.729,8.198C622.013,68.139,622.071,68.754,622.486,69.093z"></path>
                            <path fill="#8064A1" d="M592.176,65.04c0.677-0.826,1.371-1.42,2.078-1.778c0.528-0.261,1.081-0.426,1.673-0.494
			c0.59-0.065,1.141-0.021,1.65,0.131c0.683,0.201,1.354,0.573,2.014,1.116c1.198,0.983,1.851,2.139,1.96,3.472
			c0.107,1.333-0.378,2.659-1.464,3.981c-1.074,1.311-2.275,2.045-3.599,2.2c-1.32,0.156-2.575-0.255-3.766-1.235
			c-1.209-0.991-1.867-2.148-1.977-3.47C590.639,67.64,591.112,66.335,592.176,65.04z M593.91,66.372
			c-0.754,0.921-1.113,1.793-1.08,2.614c0.036,0.824,0.381,1.505,1.036,2.04c0.65,0.536,1.381,0.742,2.188,0.616
			c0.806-0.128,1.596-0.662,2.368-1.604c0.766-0.932,1.129-1.794,1.097-2.587c-0.034-0.792-0.385-1.467-1.063-2.022
			c-0.676-0.553-1.409-0.769-2.202-0.644C595.459,64.908,594.678,65.437,593.91,66.372z"></path>
                            <path fill="#9BBB58" d="M601,72.284c0.681-0.826,1.374-1.419,2.082-1.778c0.524-0.264,1.083-0.426,1.67-0.493
			c0.59-0.067,1.143-0.023,1.649,0.131c0.686,0.2,1.356,0.572,2.018,1.113c1.195,0.982,1.85,2.142,1.96,3.474
			c0.107,1.331-0.381,2.66-1.467,3.982c-1.075,1.311-2.273,2.045-3.594,2.2c-1.321,0.155-2.577-0.256-3.771-1.235
			c-1.21-0.992-1.866-2.149-1.975-3.471C599.464,74.884,599.94,73.578,601,72.284z M602.738,73.618
			c-0.756,0.919-1.117,1.791-1.08,2.613c0.033,0.823,0.38,1.502,1.035,2.039c0.654,0.537,1.381,0.742,2.188,0.615
			c0.804-0.127,1.597-0.661,2.366-1.603c0.765-0.931,1.131-1.793,1.097-2.585c-0.027-0.795-0.383-1.469-1.06-2.022
			c-0.676-0.556-1.41-0.772-2.209-0.646C604.286,72.151,603.505,72.682,602.738,73.618z"></path>
                            <path fill="#4D4D4D" d="M606.867,83.813l6.667-8.124l2.636,2.161c0.994,0.818,1.612,1.392,1.849,1.721
			c0.364,0.504,0.536,1.09,0.516,1.756c-0.021,0.665-0.298,1.321-0.825,1.967c-0.412,0.499-0.846,0.845-1.306,1.036
			c-0.46,0.19-0.909,0.268-1.349,0.234c-0.437-0.034-0.823-0.139-1.167-0.313c-0.452-0.242-1.053-0.67-1.794-1.279l-1.068-0.878
			l-2.517,3.065L606.867,83.813z M614.049,78.409l-1.894,2.306l0.9,0.737c0.646,0.529,1.111,0.842,1.397,0.936
			c0.289,0.094,0.568,0.102,0.842,0.022c0.273-0.081,0.508-0.238,0.704-0.48c0.239-0.295,0.356-0.61,0.339-0.945
			c-0.014-0.334-0.135-0.634-0.363-0.899c-0.164-0.199-0.544-0.542-1.134-1.025L614.049,78.409z"></path>
                        </g>
                        <g>
                            <g>
                                <path fill="#C1C9DB" d="M136.243,203.67l-2.305,0.748c-0.274,0.089-0.575,0.024-0.79-0.168l-1.8-1.621
				c-0.331-0.301-0.358-0.81-0.06-1.142c0.299-0.332,0.81-0.359,1.141-0.06l1.453,1.309l1.862-0.604
				c0.423-0.136,0.88,0.096,1.017,0.522C136.899,203.076,136.667,203.531,136.243,203.67z"></path>
                                <path fill="#C1C9DB" d="M128.974,199.944c-0.266,0.087-0.569,0.03-0.791-0.169l-3.166-2.853c-0.332-0.297-0.358-0.811-0.059-1.14
				c0.297-0.331,0.809-0.359,1.14-0.059l3.166,2.853c0.33,0.299,0.357,0.809,0.058,1.14
				C129.225,199.825,129.104,199.901,128.974,199.944z M122.644,194.238c-0.266,0.085-0.569,0.031-0.792-0.169l-3.165-2.852
				c-0.331-0.3-0.359-0.809-0.06-1.143c0.299-0.331,0.809-0.357,1.141-0.059l3.167,2.854c0.331,0.299,0.357,0.81,0.057,1.14
				C122.894,194.12,122.773,194.195,122.644,194.238z"></path>
                                <path fill="#C1C9DB" d="M116.312,188.531c-0.266,0.089-0.567,0.032-0.792-0.168l-1.8-1.622c-0.213-0.192-0.307-0.485-0.249-0.77
				l0.505-2.368c0.094-0.438,0.52-0.716,0.959-0.623c0.437,0.093,0.714,0.521,0.621,0.96l-0.407,1.913l1.453,1.31
				c0.331,0.3,0.359,0.811,0.06,1.142C116.563,188.413,116.441,188.49,116.312,188.531z"></path>
                                <path fill="#C1C9DB" d="M115.903,180.372c-0.131,0.043-0.274,0.053-0.417,0.023c-0.437-0.094-0.713-0.523-0.622-0.96l0.888-4.167
				c0.092-0.437,0.521-0.716,0.957-0.622c0.437,0.091,0.715,0.522,0.624,0.958l-0.889,4.167
				C116.382,180.065,116.169,180.286,115.903,180.372z M117.679,172.036c-0.13,0.042-0.272,0.052-0.417,0.021
				c-0.436-0.093-0.714-0.521-0.622-0.957l0.887-4.168c0.094-0.438,0.522-0.716,0.959-0.623c0.437,0.092,0.714,0.524,0.622,0.958
				l-0.888,4.168C118.158,171.729,117.945,171.949,117.679,172.036z"></path>
                                <path fill="#C1C9DB" d="M119.455,163.7c-0.129,0.041-0.274,0.052-0.416,0.022c-0.437-0.093-0.715-0.522-0.623-0.958l0.505-2.37
				c0.062-0.283,0.267-0.511,0.541-0.6l2.306-0.75c0.424-0.136,0.879,0.096,1.017,0.521c0.138,0.425-0.096,0.879-0.519,1.016
				l-1.861,0.606l-0.409,1.913C119.934,163.394,119.72,163.614,119.455,163.7z"></path>
                                <path fill="#C1C9DB" d="M138.479,155.322l-4.054,1.317c-0.424,0.135-0.88-0.097-1.017-0.519
				c-0.137-0.426,0.096-0.882,0.518-1.019l4.054-1.316c0.425-0.137,0.88,0.095,1.018,0.519
				C139.136,154.729,138.904,155.184,138.479,155.322z M130.373,157.952l-4.055,1.315c-0.422,0.139-0.88-0.095-1.017-0.519
				c-0.138-0.424,0.095-0.88,0.52-1.018l4.053-1.313c0.423-0.14,0.88,0.092,1.019,0.518
				C131.03,157.359,130.797,157.814,130.373,157.952z"></path>
                                <path fill="#C1C9DB" d="M146.639,154.881c-0.267,0.086-0.568,0.032-0.79-0.167l-1.454-1.31l-1.861,0.602
				c-0.425,0.138-0.88-0.094-1.018-0.519c-0.137-0.423,0.094-0.879,0.519-1.018l2.305-0.747c0.273-0.091,0.576-0.024,0.79,0.168
				l1.8,1.621c0.331,0.3,0.358,0.81,0.059,1.143C146.89,154.764,146.769,154.839,146.639,154.881z"></path>
                                <path fill="#C1C9DB" d="M159.301,166.292c-0.266,0.086-0.568,0.034-0.79-0.167l-3.167-2.853
				c-0.331-0.299-0.358-0.811-0.059-1.141c0.297-0.332,0.808-0.358,1.139-0.059l3.167,2.852c0.332,0.3,0.356,0.811,0.059,1.142
				C159.554,166.175,159.43,166.25,159.301,166.292z M152.969,160.588c-0.266,0.086-0.567,0.03-0.79-0.169l-3.166-2.852
				c-0.331-0.3-0.358-0.809-0.06-1.14c0.299-0.333,0.81-0.359,1.141-0.06l3.165,2.853c0.332,0.297,0.359,0.809,0.062,1.141
				C153.221,160.47,153.1,160.545,152.969,160.588z"></path>
                                <path fill="#C1C9DB" d="M163.759,173.138c-0.131,0.044-0.272,0.053-0.416,0.022c-0.437-0.093-0.714-0.521-0.623-0.958
				l0.408-1.916l-1.454-1.309c-0.33-0.3-0.356-0.81-0.057-1.14c0.298-0.334,0.809-0.357,1.14-0.061l1.799,1.623
				c0.215,0.193,0.31,0.486,0.249,0.769l-0.505,2.369C164.238,172.832,164.025,173.053,163.759,173.138z"></path>
                                <path fill="#C1C9DB" d="M160.208,189.81c-0.131,0.042-0.273,0.05-0.417,0.022c-0.436-0.093-0.714-0.522-0.622-0.958l0.887-4.168
				c0.093-0.438,0.521-0.715,0.959-0.62c0.436,0.093,0.713,0.521,0.621,0.956l-0.888,4.168
				C160.687,189.502,160.474,189.722,160.208,189.81z M161.984,181.474c-0.131,0.043-0.273,0.053-0.417,0.022
				c-0.436-0.092-0.715-0.521-0.62-0.958l0.886-4.168c0.093-0.437,0.52-0.714,0.958-0.624c0.438,0.094,0.715,0.523,0.624,0.959
				l-0.889,4.168C162.463,181.167,162.25,181.388,161.984,181.474z"></path>
                                <path fill="#C1C9DB" d="M158.815,196.346l-2.304,0.749c-0.424,0.138-0.88-0.094-1.018-0.519c-0.137-0.423,0.095-0.88,0.518-1.019
				l1.863-0.604l0.406-1.912c0.094-0.437,0.52-0.716,0.958-0.623c0.437,0.094,0.716,0.521,0.624,0.957l-0.505,2.371
				C159.295,196.029,159.09,196.257,158.815,196.346z"></path>
                                <path fill="#C1C9DB" d="M152.458,198.41l-4.055,1.316c-0.423,0.137-0.879-0.096-1.018-0.519c-0.137-0.425,0.097-0.881,0.52-1.018
				l4.054-1.314c0.423-0.138,0.88,0.093,1.017,0.518C153.115,197.817,152.882,198.274,152.458,198.41z M144.351,201.039
				l-4.054,1.316c-0.425,0.138-0.88-0.097-1.018-0.52c-0.138-0.423,0.094-0.878,0.519-1.018l4.055-1.314
				c0.423-0.138,0.88,0.096,1.017,0.519C145.008,200.445,144.776,200.902,144.351,201.039z"></path>
                            </g>
                            <polygon fill="#ED6E6D"
                                     points="117.487,185.096 139.138,178.07 122.23,162.831 		"></polygon>
                            <polygon fill="#C75959"
                                     points="139.138,178.07 134.396,200.333 117.487,185.096 		"></polygon>
                            <polygon fill="#F5BB76"
                                     points="160.791,171.046 139.138,178.07 143.882,155.808 		"></polygon>
                            <polygon fill="#BDDF81"
                                     points="139.138,178.07 156.047,193.31 160.791,171.046 		"></polygon>
                            <polygon fill="#F7CE80"
                                     points="122.23,162.831 139.138,178.07 143.882,155.808 		"></polygon>
                            <polygon fill="#A8C675"
                                     points="134.396,200.333 139.138,178.07 156.047,193.31 		"></polygon>
                            <g>
                                <path fill="#FFFFFF" d="M122.771,162.233c-0.333-0.3-0.842-0.273-1.14,0.059c-0.299,0.331-0.273,0.84,0.058,1.138l3.601,3.245
				c0.223,0.201,0.525,0.256,0.791,0.168c0.13-0.041,0.252-0.118,0.349-0.227c0.3-0.33,0.273-0.842-0.058-1.141L122.771,162.233z"></path>
                                <path fill="#FFFFFF" d="M129.971,168.72c-0.333-0.297-0.842-0.275-1.141,0.059c-0.298,0.332-0.271,0.844,0.059,1.141l3.6,3.245
				c0.223,0.203,0.525,0.254,0.791,0.169c0.129-0.043,0.251-0.12,0.35-0.227c0.298-0.331,0.271-0.843-0.06-1.142L129.971,168.72z"></path>
                                <path fill="#FFFFFF" d="M149.505,173.858l-4.61,1.495c-0.425,0.137-0.657,0.592-0.52,1.018c0.138,0.425,0.594,0.655,1.018,0.518
				l4.61-1.494c0.424-0.139,0.656-0.594,0.519-1.019C150.385,173.952,149.928,173.719,149.505,173.858z"></path>
                                <path fill="#FFFFFF" d="M158.723,170.866l-4.609,1.496c-0.424,0.139-0.656,0.595-0.519,1.018c0.137,0.425,0.593,0.657,1.017,0.52
				l4.61-1.495c0.424-0.138,0.658-0.593,0.519-1.019C159.604,170.963,159.148,170.73,158.723,170.866z"></path>
                                <path fill="#FFFFFF" d="M140.286,176.85l-0.952,0.308l-2.163-1.948c-0.331-0.3-0.843-0.272-1.141,0.058
				c-0.298,0.332-0.271,0.843,0.059,1.143l2.163,1.948l-0.606,2.85c-0.092,0.435,0.187,0.863,0.622,0.957
				c0.144,0.032,0.286,0.023,0.417-0.021c0.266-0.085,0.479-0.308,0.543-0.599l0.606-2.85l0.953-0.308
				c0.424-0.138,0.656-0.593,0.518-1.017C141.165,176.944,140.71,176.712,140.286,176.85z"></path>
                                <path fill="#FFFFFF" d="M135.574,194.802c-0.437-0.093-0.866,0.187-0.958,0.624l-1.01,4.741
				c-0.092,0.434,0.184,0.863,0.622,0.956c0.143,0.031,0.287,0.023,0.417-0.019c0.266-0.088,0.48-0.308,0.542-0.601l1.008-4.74
				C136.288,195.326,136.011,194.898,135.574,194.802z"></path>
                                <path fill="#FFFFFF" d="M137.593,185.322c-0.439-0.091-0.864,0.187-0.957,0.624l-1.011,4.74
				c-0.091,0.437,0.186,0.866,0.622,0.958c0.144,0.031,0.287,0.022,0.417-0.02c0.265-0.087,0.477-0.308,0.541-0.601l1.009-4.741
				C138.308,185.847,138.029,185.418,137.593,185.322z"></path>
                            </g>
                        </g>
                        <g>
                            <path fill="#E7E7E8" d="M435.06,397.713c0,2.371-1.939,4.312-4.312,4.312H277.912c-2.372,0-4.312-1.941-4.312-4.312v-99.43
			c0-2.371,1.941-4.312,4.312-4.312h152.835c2.373,0,4.312,1.941,4.312,4.312V397.713z"></path>
                            <path fill="#DBDBDB" d="M427.154,396.781H281.505c-1.47,0-2.662-1.192-2.662-2.661v-92.243c0-1.469,1.192-2.664,2.662-2.664
			h145.649c1.467,0,2.663,1.195,2.663,2.664v92.243C429.817,395.589,428.621,396.781,427.154,396.781z M281.505,300.229
			c-0.91,0-1.65,0.738-1.65,1.648v92.243c0,0.907,0.74,1.647,1.65,1.647h145.649c0.908,0,1.647-0.74,1.647-1.647v-92.243
			c0-0.91-0.739-1.648-1.647-1.648H281.505z"></path>
                            <path fill="#CECECF" d="M430.747,402.025H277.912c-0.917,0-1.764-0.293-2.465-0.785v0.2c0,2.319,1.896,4.215,4.213,4.215h149.339
			c2.315,0,4.214-1.896,4.214-4.215v-0.2C432.513,401.732,431.664,402.025,430.747,402.025z"></path>
                            <g>
                                <path fill="#00B1B2" d="M369.557,346.031l-22.83-11.602v11.248h3.418v-5.676l17.779,9.034c0.134,0.076,0.263,0.163,0.388,0.254
				c-0.382,0.251-0.784,0.468-1.198,0.656l-16.966,8.201v-3.925h-3.418v9.372l-0.004,0.008l21.784-10.537
				c1.28-0.561,3.418-1.752,3.61-3.486C372.328,347.769,370.396,346.494,369.557,346.031z"></path>
                                <path fill="#00B1B2" d="M356.528,351.422c0-0.642-0.521-1.164-1.161-1.164h-12.748c-0.645,0-1.164,0.522-1.164,1.164
				s0.519,1.162,1.164,1.162h12.748C356.007,352.584,356.528,352.063,356.528,351.422z"></path>
                                <path fill="#00B1B2" d="M340.029,350.258h-2.344c-0.641,0-1.163,0.522-1.163,1.164s0.522,1.162,1.163,1.162h2.344
				c0.643,0,1.161-0.521,1.161-1.162S340.672,350.258,340.029,350.258z"></path>
                                <path fill="#00B1B2" d="M342.877,349.489h2.344c0.64,0,1.162-0.521,1.162-1.164c0-0.641-0.522-1.162-1.162-1.162h-2.344
				c-0.64,0-1.162,0.521-1.162,1.162C341.715,348.968,342.237,349.489,342.877,349.489z"></path>
                                <path fill="#00B1B2" d="M360.046,349.491c0.644,0,1.162-0.521,1.162-1.164c0-0.642-0.519-1.158-1.162-1.158h-12.175
				c-0.642,0-1.164,0.517-1.164,1.158c0,0.644,0.522,1.164,1.164,1.164H360.046z"></path>
                            </g>
                        </g>
                        <g>
                            <path fill="#F2F2F2" d="M627.563,182.741l-23.971-21.815c-0.438-0.396-1.119-0.365-1.518,0.072l-39.599,43.518
			c-0.4,0.437-0.368,1.12,0.07,1.517l32.635,29.695c0.438,0.398,1.12,0.364,1.519-0.071l31.715-34.85L627.563,182.741z"></path>
                            <path fill="#DCDAD0" d="M619.753,192.921l8.662,7.886l-0.852-18.065l-7.883,8.665
			C619.282,191.842,619.313,192.523,619.753,192.921z"></path>
                            <g>
                                <polygon fill="#41B883" points="612.564,197.573 595.024,203.122 598.9,185.137 594.4,181.042 587.971,210.873 617.062,201.668
							"></polygon>
                                <polygon fill="#35495E" points="608.362,193.748 601.613,195.882 603.104,188.961 598.9,185.137 595.024,203.122
				612.564,197.573 			"></polygon>
                            </g>
                        </g>
                        <g>
                            <path fill="#EDF7F7" d="M518.674,205.665l-9.463-1.33l-0.466-1.633l7.322-6.153l0.521,1.826l-5.176,4.485l6.741,0.981
			L518.674,205.665z"></path>
                            <path fill="#EDF7F7"
                                  d="M521.831,192.3l1.549-0.445l-1.24,15.814l-1.549,0.442L521.831,192.3z"></path>
                            <path fill="#EDF7F7" d="M532.432,196.844l-6.767-1.066l-0.521-1.825l9.471,1.345l0.466,1.633l-7.328,6.137l-0.521-1.825
			L532.432,196.844z"></path>
                        </g>
                        <g>
                            <path fill="#EDF7F7" d="M351.896,61.792l-9.455,18.602h9.166v-2.785h-4.626l7.364-14.489c0.064-0.108,0.132-0.213,0.206-0.315
			c0.205,0.31,0.383,0.638,0.539,0.976l6.682,13.826h-3.201v2.785h7.638l0.012,0.004l-8.591-17.752
			c-0.454-1.043-1.427-2.785-2.841-2.942C353.312,59.533,352.274,61.106,351.896,61.792z"></path>
                            <path fill="#EDF7F7" d="M356.292,72.41c-0.525,0-0.948,0.425-0.948,0.944v10.388c0,0.525,0.423,0.948,0.948,0.948
			c0.521,0,0.944-0.423,0.944-0.948V73.354C357.236,72.835,356.813,72.41,356.292,72.41z"></path>
                            <path fill="#EDF7F7" d="M355.344,85.854v1.909c0,0.522,0.423,0.948,0.948,0.948c0.521,0,0.944-0.426,0.944-0.948v-1.909
			c0-0.525-0.423-0.949-0.944-0.949C355.767,84.905,355.344,85.33,355.344,85.854z"></path>
                            <path fill="#EDF7F7" d="M354.714,83.533v-1.91c0-0.522-0.425-0.95-0.947-0.95c-0.522,0-0.949,0.427-0.949,0.95v1.91
			c0,0.522,0.426,0.946,0.949,0.946C354.29,84.479,354.714,84.056,354.714,83.533z"></path>
                            <path fill="#EDF7F7" d="M354.717,69.541c0-0.523-0.426-0.945-0.948-0.945c-0.524,0-0.948,0.422-0.948,0.945v9.923
			c0,0.523,0.423,0.947,0.948,0.947c0.521,0,0.948-0.424,0.948-0.947V69.541z"></path>
                        </g>
                        <path fill="#EDF7F7" d="M164.455,116.019c-1.123-2.376-3.96-3.394-6.337-2.27c-0.08,0.037-0.146,0.093-0.224,0.135
		c-0.026-0.065-0.04-0.133-0.07-0.199c-1.123-2.377-3.96-3.394-6.337-2.27c-0.17,0.078-0.318,0.187-0.473,0.283
		c-2.016-1.795-4.987-2.319-7.582-1.093c-3.463,1.636-4.945,5.77-3.309,9.234c0.095,0.2,0.199,0.39,0.308,0.576
		c-2.595,1.375-3.678,4.557-2.412,7.24c1.306,2.759,4.601,3.939,7.361,2.636c0.091-0.043,0.175-0.093,0.265-0.14l0,0l16.397-7.746
		c0.046-0.021,0.094-0.027,0.14-0.05c0.046-0.021,0.083-0.053,0.127-0.077l0.158-0.074l-0.008-0.016
		C164.628,120.981,165.529,118.296,164.455,116.019z"></path>
                        <path fill="#DAEEEF" d="M212.272,192.847c-3.581-3.579-9.386-3.579-12.966,0c-3.581,3.581-3.58,9.387,0,12.965
		c3.309,3.312,8.513,3.554,12.11,0.748l5.333,5.333c0.442,0.443,1.159,0.443,1.603,0c0.441-0.443,0.441-1.16,0-1.604l-5.333-5.332
		C215.825,201.362,215.581,196.156,212.272,192.847z M210.767,204.308c-2.75,2.749-7.206,2.749-9.956,0
		c-2.748-2.747-2.749-7.206,0-9.956c2.749-2.749,7.207-2.749,9.955,0C213.516,197.102,213.516,201.558,210.767,204.308z"></path>
                        <path fill="#EDF7F7" d="M642.788,141.453l-3.603,3.601c-0.298,0.3-0.298,0.784,0,1.083c0.3,0.298,0.784,0.298,1.084,0l3.602-3.603
		c2.431,1.896,5.945,1.731,8.182-0.504c2.417-2.418,2.417-6.341,0-8.76s-6.34-2.419-8.76,0
		C641.06,135.508,640.893,139.024,642.788,141.453z M644.312,134.288c1.854-1.856,4.865-1.856,6.724,0
		c1.858,1.858,1.858,4.87,0,6.727c-1.858,1.857-4.869,1.857-6.724,0C642.453,139.158,642.453,136.146,644.312,134.288z"></path>
                        <g>
                            <path fill="#EDF7F7" d="M603.793,258.237l-1.218,1.754l1.334,1.334l1.754-1.22c0.596,0.38,1.261,0.662,1.972,0.819l0.375,2.102
			h1.886l0.379-2.102c0.714-0.157,1.376-0.439,1.971-0.819l1.755,1.22l1.335-1.334l-1.222-1.754c0.38-0.594,0.662-1.259,0.818-1.971
			l2.101-0.378v-1.887l-2.099-0.375c-0.158-0.714-0.44-1.376-0.82-1.973l1.222-1.753L614,248.565l-1.755,1.221
			c-0.595-0.381-1.257-0.663-1.971-0.818l-0.379-2.101h-1.886l-0.375,2.101c-0.714,0.155-1.376,0.438-1.972,0.818l-1.754-1.221
			l-1.334,1.336l1.218,1.753c-0.381,0.597-0.662,1.259-0.817,1.973l-2.103,0.375v1.887l2.103,0.378
			C603.131,256.978,603.412,257.644,603.793,258.237z M608.955,252.174c1.531,0,2.769,1.241,2.769,2.771
			c0,1.531-1.237,2.772-2.769,2.772c-1.529,0-2.773-1.241-2.773-2.772C606.182,253.415,607.426,252.174,608.955,252.174z"></path>
                            <path fill="#EDF7F7" d="M619.881,268.068c0.03-0.562-0.037-1.115-0.197-1.637l1.274-1.052l-0.716-1.27l-1.561,0.542
			c-0.36-0.408-0.798-0.756-1.294-1.02l0.157-1.643l-1.401-0.393l-0.719,1.483c-0.564-0.031-1.114,0.04-1.637,0.197l-1.052-1.272
			l-1.27,0.715l0.542,1.559c-0.406,0.364-0.756,0.797-1.021,1.294l-1.643-0.156l-0.391,1.401l1.482,0.72
			c-0.031,0.56,0.04,1.114,0.2,1.638l-1.274,1.051l0.714,1.268l1.56-0.542c0.361,0.409,0.797,0.759,1.291,1.021l-0.154,1.642
			l1.401,0.392l0.72-1.48c0.561,0.031,1.113-0.041,1.639-0.2l1.049,1.273l1.271-0.711l-0.541-1.561
			c0.406-0.364,0.756-0.799,1.019-1.298l1.642,0.158l0.392-1.401L619.881,268.068z M617.219,268.379
			c-0.318,1.142-1.499,1.804-2.635,1.485c-1.143-0.321-1.802-1.501-1.486-2.64c0.321-1.141,1.501-1.801,2.639-1.48
			C616.877,266.062,617.537,267.242,617.219,268.379z"></path>
                            <path fill="#EDF7F7" d="M607.183,265.465l0.937-0.612l-0.383-0.908l-1.093,0.247c-0.216-0.305-0.481-0.568-0.795-0.784
			l0.231-1.094l-0.913-0.369l-0.596,0.943c-0.378-0.063-0.753-0.061-1.119,0.01l-0.61-0.937l-0.906,0.384l0.244,1.092
			c-0.301,0.214-0.566,0.479-0.783,0.794l-1.096-0.229l-0.368,0.915l0.944,0.594c-0.065,0.375-0.06,0.754,0.009,1.117l-0.938,0.611
			l0.387,0.908l1.089-0.247c0.215,0.303,0.479,0.571,0.796,0.786l-0.229,1.092l0.915,0.37l0.595-0.943
			c0.375,0.064,0.753,0.057,1.116-0.012l0.609,0.938l0.911-0.385l-0.248-1.09c0.302-0.213,0.569-0.48,0.784-0.794l1.095,0.229
			l0.366-0.914l-0.942-0.595C607.255,266.206,607.252,265.828,607.183,265.465z M605.378,266.589
			c-0.305,0.741-1.145,1.101-1.886,0.799c-0.746-0.3-1.104-1.145-0.802-1.888c0.303-0.741,1.147-1.099,1.889-0.797
			C605.322,265.005,605.68,265.848,605.378,266.589z"></path>
                        </g>
                        <g>
                            <path fill="#DAEEEF" d="M280.303,98.722l-0.046,1.573l1.358,0.285l0.593-1.458c0.521-0.005,1.045-0.099,1.547-0.289l1.079,1.146
			l1.166-0.761l-0.615-1.449c0.377-0.384,0.674-0.826,0.888-1.3l1.574,0.047l0.288-1.362l-1.459-0.591
			c-0.005-0.521-0.1-1.044-0.289-1.546l1.145-1.079l-0.76-1.164l-1.448,0.612c-0.384-0.377-0.824-0.674-1.301-0.887l0.048-1.575
			l-1.362-0.286l-0.592,1.459c-0.519,0.004-1.043,0.097-1.545,0.289l-1.08-1.145l-1.165,0.759l0.612,1.449
			c-0.375,0.383-0.671,0.824-0.886,1.298l-1.574-0.048l-0.287,1.363l1.459,0.59c0.007,0.521,0.098,1.044,0.289,1.549l-1.145,1.077
			l0.759,1.166l1.45-0.614C279.387,98.208,279.829,98.505,280.303,98.722z M281.048,92.899c0.946-0.618,2.21-0.351,2.826,0.594
			c0.616,0.945,0.349,2.21-0.595,2.827c-0.945,0.616-2.211,0.349-2.826-0.596C279.835,94.779,280.104,93.516,281.048,92.899z"></path>
                            <path fill="#DAEEEF" d="M294.194,98.312c-0.206-0.36-0.471-0.671-0.781-0.933l0.363-1.16l-0.953-0.499l-0.745,0.962
			c-0.389-0.105-0.796-0.146-1.209-0.107l-0.564-1.077l-1.023,0.323l0.153,1.205c-0.359,0.207-0.672,0.472-0.932,0.782l-1.161-0.363
			l-0.495,0.951l0.961,0.745c-0.104,0.388-0.145,0.798-0.109,1.21l-1.077,0.564l0.323,1.024l1.204-0.155
			c0.206,0.361,0.474,0.673,0.783,0.932l-0.362,1.162l0.951,0.496l0.744-0.963c0.39,0.106,0.798,0.147,1.211,0.108l0.563,1.079
			l1.023-0.323l-0.152-1.205c0.359-0.208,0.671-0.473,0.931-0.783l1.16,0.364l0.498-0.951l-0.961-0.745
			c0.104-0.39,0.144-0.798,0.106-1.211l1.078-0.563l-0.323-1.025L294.194,98.312z M292.677,99.576
			c0.261,0.832-0.2,1.716-1.029,1.977c-0.835,0.264-1.718-0.199-1.98-1.03c-0.262-0.832,0.201-1.715,1.034-1.978
			C291.532,98.283,292.416,98.744,292.677,99.576z"></path>
                            <path fill="#DAEEEF" d="M285.307,101.816l0.332-0.752l-0.604-0.406l-0.574,0.589c-0.254-0.101-0.525-0.158-0.806-0.165
			l-0.299-0.765l-0.713,0.138l0.013,0.823c-0.258,0.113-0.49,0.266-0.687,0.456l-0.753-0.332l-0.405,0.602l0.591,0.576
			c-0.101,0.252-0.158,0.525-0.165,0.805l-0.769,0.299l0.141,0.714l0.823-0.013c0.11,0.255,0.267,0.488,0.456,0.686l-0.333,0.754
			l0.602,0.407l0.572-0.592c0.257,0.1,0.528,0.158,0.808,0.163l0.299,0.768l0.714-0.14l-0.013-0.821
			c0.257-0.113,0.488-0.27,0.686-0.458l0.756,0.334l0.404-0.603l-0.591-0.576c0.102-0.252,0.158-0.524,0.164-0.805l0.767-0.297
			l-0.141-0.715l-0.82,0.013C285.648,102.246,285.493,102.013,285.307,101.816z M284.644,103.239
			c0.113,0.58-0.264,1.141-0.843,1.253c-0.582,0.115-1.142-0.264-1.254-0.845c-0.113-0.58,0.266-1.139,0.845-1.253
			C283.97,102.284,284.531,102.659,284.644,103.239z"></path>
                        </g>
                        <g>
                            <path fill="#D3DCEE" d="M243.726,350.335c0.102,0.596-0.301,1.163-0.897,1.266l-35.279,6.018
			c-0.594,0.103-1.164-0.301-1.266-0.897l-4.45-26.087c-0.101-0.596,0.302-1.165,0.897-1.265l35.28-6.019
			c0.595-0.102,1.164,0.301,1.265,0.896L243.726,350.335z"></path>
                            <g>
                                <circle fill="#F4E07C" cx="206.335" cy="330.613" r="0.799"></circle>
                                <circle fill="#E66A68" cx="204.367" cy="330.95" r="0.8"></circle>
                                <path fill="#A3DDB7" d="M208.169,329.491c-0.434,0.071-0.728,0.485-0.652,0.921c0.074,0.435,0.487,0.727,0.921,0.652
				c0.435-0.074,0.727-0.486,0.653-0.921C209.017,329.708,208.605,329.417,208.169,329.491z"></path>
                                <circle fill="#FFFFFF" cx="234.678" cy="325.778" r="0.799"></circle>
                                <circle fill="#FFFFFF" cx="236.989" cy="325.383" r="0.798"></circle>
                                <path fill="#FFFFFF" d="M230.797,325.63l-14.678,2.504c-0.436,0.075-0.728,0.486-0.654,0.92c0.075,0.438,0.488,0.729,0.922,0.655
				l14.679-2.503c0.436-0.077,0.729-0.49,0.654-0.923C231.646,325.848,231.233,325.556,230.797,325.63z"></path>
                            </g>
                            <path fill="#464655" d="M204.7,332.958c-0.425,0.072-0.712,0.479-0.64,0.902l3.636,21.314c0.074,0.425,0.479,0.712,0.904,0.641
			l13.905-2.373l-3.899-22.857L204.7,332.958z"></path>
                            <path fill="#FFFFFF" d="M222.506,353.442l18.735-3.196c0.424-0.071,0.711-0.478,0.64-0.903l-3.155-18.496l-19.507,3.328
			L222.506,353.442z"></path>
                            <path fill="#EA6A69" d="M237.342,327.388l-18.735,3.197l0.612,3.59l19.507-3.328l-0.48-2.817
			C238.172,327.604,237.766,327.315,237.342,327.388z"></path>
                            <rect x="220.367" y="331.219"
                                  transform="matrix(0.9858 -0.168 0.168 0.9858 -52.5958 42.0665)" fill="#C75E62"
                                  width="3.918" height="1.337"></rect>
                            <rect x="226.308" y="330.207"
                                  transform="matrix(0.9858 -0.1678 0.1678 0.9858 -52.2825 42.9929)" fill="#C75E62"
                                  width="3.917" height="1.337"></rect>
                            <rect x="232.976" y="329.065"
                                  transform="matrix(0.9856 -0.1691 0.1691 0.9856 -52.3655 44.4665)" fill="#C75E62"
                                  width="3.916" height="1.341"></rect>
                            <rect x="221.587" y="334.786"
                                  transform="matrix(0.9857 -0.1683 0.1683 0.9857 -53.8072 42.7413)" fill="#D3DCEE"
                                  width="7.452" height="8.202"></rect>
                            <rect x="221.055" y="334.831"
                                  transform="matrix(0.9857 -0.1683 0.1683 0.9857 -53.3189 42.6342)" fill="#EA6A69"
                                  width="7.454" height="1.884"></rect>
                            <rect x="230.711" y="333.231"
                                  transform="matrix(0.9858 -0.168 0.168 0.9858 -53.3332 44.1737)" fill="#D3DCEE"
                                  width="7.453" height="8.203"></rect>
                            <rect x="230.179" y="333.275"
                                  transform="matrix(0.9858 -0.1681 0.1681 0.9858 -52.8582 44.0802)" fill="#A5D9ED"
                                  width="7.453" height="1.883"></rect>
                            <rect x="223.031" y="343.783"
                                  transform="matrix(0.9857 -0.1683 0.1683 0.9857 -55.0854 43.8838)" fill="#D3DCEE"
                                  width="16.708" height="6.359"></rect>
                            <rect x="223.136" y="345.024"
                                  transform="matrix(0.9857 -0.1685 0.1685 0.9857 -55.4743 42.7481)" fill="#A3DDB7"
                                  width="1.959" height="6.359"></rect>
                            <path fill="#727484" d="M210.857,340.913l0.324,0.973l0.894-0.13l0.036-1.022c0.318-0.119,0.617-0.292,0.881-0.522l0.913,0.464
			l0.542-0.724l-0.696-0.751c0.146-0.316,0.228-0.653,0.251-0.991l0.974-0.319l-0.127-0.897l-1.023-0.037
			c-0.12-0.315-0.293-0.612-0.521-0.879l0.459-0.915l-0.724-0.541l-0.747,0.697c-0.321-0.146-0.655-0.228-0.993-0.254l-0.321-0.971
			l-0.897,0.127l-0.035,1.024c-0.318,0.116-0.616,0.29-0.882,0.519l-0.913-0.46l-0.542,0.725l0.698,0.75
			c-0.146,0.315-0.227,0.652-0.253,0.99l-0.972,0.32l0.129,0.896l1.022,0.036c0.12,0.316,0.292,0.617,0.522,0.883l-0.459,0.911
			l0.722,0.543l0.75-0.697C210.185,340.803,210.519,340.888,210.857,340.913z M210.017,337.191c0.441-0.588,1.272-0.707,1.859-0.267
			c0.586,0.441,0.706,1.275,0.266,1.861s-1.272,0.705-1.86,0.266C209.695,338.612,209.577,337.779,210.017,337.191z"></path>
                            <path fill="#727484" d="M221.315,346.464c-0.867,0.146-1.79-0.129-2.433-0.822c-1.012-1.097-0.945-2.801,0.148-3.812
			c0.399-0.37,0.881-0.593,1.38-0.677l-0.574-3.362l-0.035,0.154c-0.678,0.124-1.337,0.361-1.951,0.721l-1.657-1.251l-1.347,1.247
			l1.118,1.752c-0.405,0.58-0.692,1.221-0.865,1.887l-2.06,0.286l-0.07,1.837l2.03,0.444c0.123,0.679,0.359,1.337,0.72,1.951
			l-1.25,1.657l1.245,1.347l1.75-1.119c0.583,0.402,1.223,0.691,1.888,0.866l0.29,2.06l1.832,0.071l0.412-1.88L221.315,346.464z"></path>
                        </g>
                        <path fill="#DAEEEF" d="M616.729,330.849l-8.917-9.117c-0.505-0.52-1.337-0.528-1.854-0.023l-16.028,15.676
		c-0.516,0.504-0.527,1.337-0.017,1.854l8.915,9.12c0.502,0.514,1.334,0.521,1.851,0.019l16.03-15.677
		C617.225,332.195,617.234,331.366,616.729,330.849z M595.459,342.734c-0.324-0.329-0.319-0.859,0.008-1.18
		c0.33-0.321,0.861-0.314,1.184,0.014c0.316,0.326,0.311,0.856-0.016,1.178C596.305,343.068,595.777,343.059,595.459,342.734z
		 M601.799,345.241l-8.709-8.905l11.941-11.682l8.709,8.907L601.799,345.241z"></path>
                        <path fill="#EDF7F7" d="M90.41,223.853l-15.763,11.629c-0.396,0.293-0.481,0.858-0.188,1.257l7.983,10.822
		c0.293,0.4,0.86,0.482,1.257,0.192l5.981-4.414l1.222,1.656l-1.156,0.853l0.828,1.124l6.113-4.511l-0.829-1.121l-1.155,0.852
		l-1.223-1.653l5.982-4.414c0.396-0.293,0.482-0.857,0.187-1.259l-7.981-10.821C91.375,223.646,90.807,223.561,90.41,223.853z
		 M97.701,234.254l-15.27,11.264l-6.219-8.433l15.27-11.262L97.701,234.254z"></path>
                        <path fill="#FFFFFF" d="M527.35,367.718c-0.173,0-0.342,0.02-0.512,0.025v-4.988c0-1.583-1.294-2.876-2.876-2.876H491.58
		c-1.581,0-2.876,1.293-2.876,2.876v40.025c0,1.581,1.295,2.875,2.876,2.875h32.382c1.582,0,2.876-1.294,2.876-2.875v-9.439
		c0.17,0.008,0.339,0.025,0.512,0.025c7.082,0,12.823-5.742,12.823-12.823C540.173,373.46,534.432,367.718,527.35,367.718z
		 M527.35,388.563c-0.173,0-0.345-0.016-0.512-0.027v-15.987c0.167-0.011,0.339-0.025,0.512-0.025c4.43,0,8.021,3.59,8.021,8.02
		C535.37,384.971,531.779,388.563,527.35,388.563z"></path>
                        <g>
                            <path fill="#E6E6E6" d="M526.838,402.78v-9.439c0.17,0.008,0.339,0.025,0.512,0.025c7.082,0,12.823-5.742,12.823-12.823
			c0-7.083-5.741-12.825-12.823-12.825c-0.173,0-0.342,0.02-0.512,0.025v-4.988c0-1.583-1.294-2.876-2.876-2.876h-16.166v45.776
			h16.166C525.544,405.655,526.838,404.361,526.838,402.78z M526.838,372.549c0.167-0.011,0.339-0.025,0.512-0.025
			c4.43,0,8.021,3.59,8.021,8.02c0,4.428-3.591,8.021-8.021,8.021c-0.173,0-0.345-0.016-0.512-0.027V372.549z"></path>
                        </g>
                        <path fill="#C69C6D" d="M491.628,359.879c-1.579,0-2.873,1.293-2.873,2.876v5.062c0,1.581,1.294,2.875,2.873,2.875h0.599
		c1.583,0,2.876,1.294,2.876,2.875v1.61c0,1.582,1.295,2.877,2.875,2.877h0.596c1.582,0,2.875-1.295,2.875-2.877v-5.224
		c0-1.582,1.292-2.873,2.875-2.873h0.598c1.58,0,2.875,0.811,2.875,1.806c0,0.992,1.294,1.806,2.876,1.806h0.598
		c1.58,0,2.872-1.294,2.872-2.875v-0.271c0-1.583,1.293-2.876,2.879-2.876h0.596c1.582,0,2.874,1.293,2.874,2.876v3.694
		c0,1.583,1.291,2.876,2.873,2.876h0.599c1.582,0,2.876-1.293,2.876-2.876v-8.485c0-1.583-1.294-2.876-2.876-2.876H491.628z"></path>
                        <path fill="#A67C52" d="M510.672,370.692h0.598c1.58,0,2.872-1.294,2.872-2.875v-0.271c0-1.583,1.293-2.876,2.879-2.876h0.596
		c1.582,0,2.874,1.293,2.874,2.876v3.694c0,1.583,1.291,2.876,2.873,2.876h0.599c1.582,0,2.876-1.293,2.876-2.876v-8.485
		c0-1.583-1.294-2.876-2.876-2.876h-16.166v9.008C507.796,369.879,509.09,370.692,510.672,370.692z"></path>
                        <g>
                            <path fill="#9BBB58" d="M168.199,388.192h61.021c0.715,0,1.294,0.581,1.294,1.296s-0.58,1.295-1.294,1.295h-61.021
			c-3.385,0-6.14,2.755-6.14,6.143c0,3.385,2.755,6.141,6.14,6.141h61.021c0.715,0,1.294,0.579,1.294,1.295
			c0,0.715-0.58,1.294-1.294,1.294h-61.021c-4.822,0-8.731-3.909-8.731-8.729C159.468,392.104,163.376,388.192,168.199,388.192z"></path>
                            <path fill="#FFFFFF" d="M162.059,396.926c0-3.388,2.755-6.143,6.14-6.143h60.044v12.283h-60.044
			C164.813,403.066,162.059,400.311,162.059,396.926z"></path>
                            <rect x="174.518" y="392.938" fill="#F2F2F2" width="53.725" height="0.623"></rect>
                            <rect x="181.945" y="400.827" fill="#F2F2F2" width="40.63" height="0.622"></rect>
                            <rect x="191.264" y="397.919" fill="#F2F2F2" width="36.979" height="0.623"></rect>
                            <rect x="168.912" y="395.323" fill="#F2F2F2" width="48.888" height="0.624"></rect>
                            <polygon fill="#FB503B"
                                     points="176.801,404.766 173.219,403.066 169.639,404.766 169.639,395.323 176.801,395.323 		"></polygon>
                        </g>
                        <g>
                            <path fill="#8064A1" d="M172.659,370.729h61.02c0.716,0,1.295,0.582,1.295,1.297c0,0.714-0.579,1.296-1.295,1.296h-61.02
			c-3.386,0-6.14,2.753-6.14,6.141c0,3.385,2.754,6.14,6.14,6.14h61.02c0.716,0,1.295,0.58,1.295,1.296
			c0,0.715-0.579,1.294-1.295,1.294h-61.02c-4.821,0-8.731-3.907-8.731-8.729C163.928,374.639,167.837,370.729,172.659,370.729z"></path>
                            <path fill="#FFFFFF" d="M166.519,379.463c0-3.388,2.754-6.141,6.14-6.141h60.043v12.28h-60.043
			C169.273,385.603,166.519,382.848,166.519,379.463z"></path>
                            <rect x="178.977" y="375.474" fill="#F2F2F2" width="53.725" height="0.623"></rect>
                            <rect x="186.405" y="383.362" fill="#F2F2F2" width="40.629" height="0.624"></rect>
                            <rect x="195.725" y="380.458" fill="#F2F2F2" width="36.978" height="0.621"></rect>
                            <rect x="173.372" y="377.86" fill="#F2F2F2" width="48.888" height="0.625"></rect>
                            <polygon fill="#FB503B"
                                     points="181.26,387.647 177.68,385.946 174.099,387.647 174.099,380.458 181.26,380.458 		"></polygon>
                        </g>
                        <g>
                            <path fill="#EDF7F7" d="M659.305,291.167c-3.408-3.281-8.845-3.179-12.125,0.229c-1.309,1.358-2.116,3.074-2.329,4.961
			c-0.006,0.017-0.013,0.037-0.016,0.056c0,0.021-0.005,0.054-0.005,0.099c-0.04,0.401-0.051,0.81-0.03,1.246
			c-0.068,0.912-0.261,2.143-0.797,2.938l-1.542,1.604l-3.478,3.609c-0.188,0.198-0.183,0.514,0.014,0.706l5.633,5.424
			c0.197,0.192,0.513,0.187,0.705-0.016l3.478-3.608l1.543-1.603c0.775-0.566,2.002-0.802,2.909-0.899
			c0.421,0.002,0.827-0.022,1.239-0.079c0.02,0,0.04,0,0.05,0c0.049-0.003,0.094-0.013,0.134-0.029
			c1.867-0.287,3.539-1.154,4.846-2.512C662.812,299.888,662.711,294.447,659.305,291.167z M646.699,309.17l-4.912-4.733
			l1.047-1.086l4.915,4.729L646.699,309.17z M640.05,306.24l1.046-1.086l4.913,4.733l-1.047,1.084L640.05,306.24z M654.442,304.835
			c-0.018,0-0.037,0.003-0.051,0.008c-0.384,0.051-0.757,0.074-1.145,0.069c-0.021,0-0.04,0-0.061,0.003
			c-1.046,0.111-2.498,0.396-3.461,1.124c-0.019,0.014-0.041,0.03-0.058,0.051l-1.229,1.273l-4.912-4.731l1.227-1.275
			c0.017-0.018,0.036-0.039,0.048-0.062c0.688-0.987,0.92-2.446,0.995-3.495c0.003-0.021,0.003-0.041,0-0.06
			c-0.02-0.408-0.011-0.789,0.028-1.161c0-0.003,0-0.003,0-0.006c0.003-0.012,0.003-0.023,0.006-0.032
			c0.181-1.696,0.892-3.235,2.067-4.455c2.899-3.01,7.705-3.1,10.715-0.2c3.01,2.898,3.1,7.705,0.2,10.714
			C657.637,303.821,656.125,304.595,654.442,304.835z"></path>
                            <path fill="#EDF7F7" d="M656.94,298.904l-2.67-1.411l3.209-1.672c0.167-0.084,0.269-0.252,0.271-0.436
			c0.003-0.184-0.099-0.353-0.257-0.443l-3.396-1.879c-0.178-0.098-0.392-0.081-0.551,0.044l-4.604,3.604
			c-0.125,0.095-0.195,0.243-0.192,0.397c0.003,0.155,0.073,0.299,0.2,0.396l1.848,1.367l-2.57,2.456
			c-0.168,0.16-0.202,0.409-0.089,0.609c0.025,0.042,0.053,0.08,0.087,0.11c0.127,0.123,0.311,0.172,0.485,0.121l8.136-2.346
			c0.195-0.055,0.336-0.228,0.356-0.427C657.226,299.193,657.121,298.999,656.94,298.904z M650.383,300.648l1.529-1.464
			c0.106-0.102,0.163-0.245,0.154-0.393c-0.008-0.125-0.061-0.242-0.154-0.327c-0.015-0.015-0.028-0.028-0.049-0.041l-1.791-1.332
			l3.831-2.997l2.293,1.271l-3.231,1.681c-0.165,0.088-0.269,0.257-0.269,0.442c0,0.185,0.102,0.355,0.265,0.44l2.417,1.279
			L650.383,300.648z"></path>
                            <path fill="#EDF7F7" d="M664.713,307.046l-2.716-2.615c-0.239-0.229-0.616-0.224-0.846,0.014
			c-0.231,0.238-0.223,0.619,0.017,0.849l2.714,2.615c0.237,0.229,0.617,0.22,0.846-0.017
			C664.959,307.652,664.951,307.274,664.713,307.046z"></path>
                            <path fill="#EDF7F7" d="M646.229,289.246l-2.715-2.616c-0.234-0.23-0.613-0.225-0.845,0.015c-0.229,0.237-0.223,0.619,0.017,0.848
			l2.717,2.616c0.237,0.229,0.615,0.221,0.846-0.017C646.477,289.853,646.471,289.475,646.229,289.246z"></path>
                            <path fill="#EDF7F7" d="M660.876,289.815c0.239,0.231,0.616,0.223,0.848-0.014l2.615-2.716c0.228-0.236,0.22-0.618-0.018-0.847
			c-0.236-0.23-0.614-0.221-0.847,0.016l-2.613,2.716C660.633,289.207,660.639,289.587,660.876,289.815z"></path>
                            <path fill="#EDF7F7" d="M652.896,286.339c0.003,0.163,0.074,0.311,0.183,0.417c0.11,0.104,0.263,0.171,0.427,0.165
			c0.33-0.004,0.594-0.276,0.586-0.608l-0.07-3.766c-0.006-0.332-0.279-0.596-0.609-0.589s-0.596,0.279-0.586,0.608L652.896,286.339
			z"></path>
                            <path fill="#EDF7F7" d="M664.226,297.495c0.113,0.104,0.263,0.169,0.426,0.167l3.771-0.072c0.329-0.004,0.595-0.279,0.587-0.61
			c-0.006-0.33-0.276-0.592-0.609-0.586l-3.768,0.071c-0.33,0.004-0.593,0.279-0.59,0.61
			C664.048,297.239,664.115,297.388,664.226,297.495z"></path>
                        </g>
                        <g>
                            <path fill="#DAEEEF" d="M432.248,78.845c-3.122-2.376-7.593-1.769-9.969,1.352c-0.949,1.247-1.448,2.736-1.445,4.311
			c-0.003,0.016-0.003,0.032-0.003,0.047c0,0.018,0,0.044,0.003,0.083c0.008,0.335,0.039,0.672,0.096,1.031
			c0.031,0.756-0.008,1.79-0.372,2.497l-1.119,1.468l-2.52,3.309c-0.135,0.182-0.102,0.441,0.081,0.58l5.159,3.928
			c0.184,0.138,0.442,0.104,0.578-0.079l2.521-3.308l1.12-1.469c0.58-0.539,1.57-0.852,2.307-1.02
			c0.351-0.039,0.68-0.098,1.013-0.184c0.017-0.001,0.034-0.003,0.045-0.003c0.037-0.008,0.071-0.023,0.104-0.04
			c1.509-0.414,2.807-1.29,3.751-2.533C435.974,85.695,435.37,81.22,432.248,78.845z M423.589,94.886l-4.501-3.427l0.758-0.994
			l4.502,3.425L423.589,94.886z M417.83,93.113l0.759-0.994l4.501,3.427l-0.758,0.994L417.83,93.113z M429.555,90.572
			c-0.017,0.004-0.031,0.007-0.045,0.011c-0.309,0.081-0.615,0.135-0.934,0.17c-0.018,0.003-0.034,0.004-0.048,0.008
			c-0.855,0.19-2.022,0.565-2.747,1.255c-0.015,0.015-0.028,0.031-0.042,0.049l-0.89,1.167l-4.504-3.428l0.892-1.167
			c0.014-0.017,0.024-0.035,0.036-0.056c0.468-0.879,0.521-2.103,0.479-2.976c0-0.015,0-0.032-0.003-0.047
			c-0.059-0.336-0.084-0.649-0.09-0.959c0-0.002,0-0.003,0-0.005c0.003-0.01,0.003-0.02,0.003-0.028
			c-0.017-1.415,0.426-2.751,1.275-3.869c2.097-2.757,6.052-3.292,8.808-1.193c2.758,2.099,3.293,6.052,1.192,8.807
			C432.09,89.432,430.917,90.213,429.555,90.572z"></path>
                            <path fill="#DAEEEF" d="M431.041,85.446l-2.336-0.905l2.488-1.686c0.124-0.086,0.192-0.233,0.179-0.385
			c-0.016-0.152-0.117-0.282-0.255-0.34l-2.979-1.223c-0.154-0.063-0.329-0.028-0.448,0.09l-3.448,3.41
			c-0.091,0.091-0.137,0.219-0.121,0.349c0.02,0.126,0.093,0.238,0.205,0.305l1.65,0.949l-1.879,2.271
			c-0.121,0.146-0.127,0.357-0.014,0.509c0.021,0.034,0.051,0.062,0.081,0.084c0.115,0.088,0.273,0.11,0.411,0.052l6.478-2.714
			c0.157-0.063,0.256-0.218,0.253-0.386C431.303,85.658,431.198,85.508,431.041,85.446z M425.808,87.514l1.118-1.355
			c0.082-0.093,0.113-0.217,0.091-0.336c-0.021-0.104-0.074-0.193-0.159-0.256c-0.011-0.009-0.027-0.02-0.042-0.03l-1.604-0.923
			l2.866-2.836l2.011,0.825l-2.503,1.697c-0.126,0.086-0.194,0.235-0.175,0.389c0.016,0.151,0.117,0.284,0.26,0.338l2.116,0.822
			L425.808,87.514z"></path>
                            <path fill="#DAEEEF" d="M438.228,91.41l-2.488-1.896c-0.22-0.167-0.527-0.124-0.696,0.095c-0.166,0.218-0.124,0.528,0.097,0.696
			l2.487,1.894c0.217,0.166,0.526,0.124,0.693-0.096C438.487,91.885,438.445,91.573,438.228,91.41z"></path>
                            <path fill="#DAEEEF" d="M421.29,78.518l-2.489-1.895c-0.218-0.166-0.525-0.125-0.693,0.092c-0.165,0.221-0.122,0.531,0.095,0.698
			l2.488,1.894c0.217,0.166,0.529,0.123,0.696-0.096C421.553,78.994,421.508,78.683,421.29,78.518z"></path>
                            <path fill="#DAEEEF" d="M433.413,77.582c0.218,0.166,0.526,0.124,0.693-0.094L436.001,75c0.168-0.217,0.125-0.53-0.093-0.697
			c-0.219-0.164-0.529-0.123-0.694,0.097l-1.895,2.487C433.153,77.104,433.195,77.416,433.413,77.582z"></path>
                            <path fill="#DAEEEF" d="M426.503,75.481c0.02,0.137,0.092,0.249,0.192,0.328c0.102,0.077,0.23,0.116,0.366,0.096
			c0.273-0.036,0.463-0.286,0.426-0.559l-0.418-3.096c-0.039-0.272-0.29-0.463-0.561-0.427c-0.273,0.038-0.462,0.288-0.424,0.559
			L426.503,75.481z"></path>
                            <path fill="#DAEEEF" d="M436.91,83.585c0.101,0.078,0.231,0.116,0.366,0.098l3.098-0.421c0.273-0.035,0.465-0.287,0.428-0.56
			c-0.036-0.271-0.286-0.46-0.558-0.424l-3.101,0.42c-0.271,0.036-0.462,0.288-0.426,0.561
			C436.737,83.394,436.812,83.509,436.91,83.585z"></path>
                        </g>
                        <g>
                            <path fill="#EDF7F7" d="M34.123,150.036c-4.851,3.614-5.858,10.502-2.242,15.355c1.445,1.937,3.44,3.313,5.778,3.978
			c0.02,0.01,0.046,0.019,0.067,0.028c0.025,0.006,0.069,0.019,0.124,0.026c0.499,0.137,1.014,0.234,1.568,0.3
			c1.136,0.276,2.651,0.774,3.544,1.619l1.701,2.282l3.833,5.143c0.212,0.282,0.611,0.342,0.896,0.129l8.023-5.977
			c0.281-0.21,0.339-0.611,0.127-0.895l-3.831-5.144l-1.703-2.284c-0.552-1.097-0.592-2.695-0.526-3.861
			c0.09-0.53,0.144-1.051,0.159-1.578c0.005-0.028,0.007-0.052,0.01-0.067c0.005-0.059,0.001-0.118-0.01-0.174
			c0.029-2.411-0.719-4.707-2.16-6.64C45.867,147.423,38.977,146.417,34.123,150.036z M54.224,169.705l-7,5.218l-1.155-1.55l7-5.214
			L54.224,169.705z M49.137,177.492l-1.151-1.548l7-5.214l1.153,1.545L49.137,177.492z M50.365,159.025
			c-0.002,0.025-0.001,0.046,0,0.071c-0.014,0.49-0.062,0.968-0.149,1.456c-0.005,0.027-0.008,0.051-0.008,0.075
			c-0.078,1.346-0.025,3.238,0.692,4.606c0.016,0.027,0.034,0.056,0.052,0.084l1.354,1.818l-7,5.215l-1.354-1.819
			c-0.017-0.024-0.042-0.052-0.067-0.075c-1.105-1.071-2.896-1.669-4.207-1.983c-0.024-0.006-0.049-0.009-0.076-0.014
			c-0.521-0.059-0.998-0.152-1.459-0.276c-0.001-0.001-0.003-0.001-0.005-0.003c-0.013-0.005-0.028-0.01-0.041-0.014
			c-2.105-0.577-3.899-1.802-5.194-3.538c-3.195-4.286-2.306-10.375,1.982-13.57c4.289-3.195,10.376-2.306,13.57,1.98
			C49.755,154.778,50.414,156.851,50.365,159.025z"></path>
                            <path fill="#EDF7F7" d="M43.399,154.634l-2.338,3.077l-1.439-4.405c-0.074-0.222-0.264-0.384-0.496-0.428
			c-0.233-0.043-0.466,0.05-0.613,0.232l-3.082,3.895c-0.159,0.204-0.182,0.478-0.059,0.703l3.587,6.568
			c0.095,0.173,0.266,0.294,0.463,0.328c0.198,0.026,0.393-0.035,0.54-0.174l2.114-2.042l2.567,3.754
			c0.165,0.243,0.474,0.341,0.75,0.238c0.057-0.021,0.112-0.05,0.158-0.085c0.178-0.134,0.279-0.357,0.252-0.588l-1.263-10.762
			c-0.029-0.26-0.215-0.474-0.466-0.541C43.825,154.336,43.558,154.425,43.399,154.634z M44.235,163.277l-1.529-2.238
			c-0.105-0.156-0.276-0.257-0.463-0.277c-0.16-0.014-0.319,0.031-0.447,0.126c-0.022,0.015-0.042,0.032-0.061,0.052l-2.055,1.986
			l-2.984-5.461l2.083-2.631l1.449,4.432c0.074,0.226,0.266,0.392,0.502,0.432c0.233,0.04,0.47-0.057,0.614-0.246l2.117-2.785
			L44.235,163.277z"></path>
                            <path fill="#EDF7F7" d="M55.302,146.52l-3.87,2.881c-0.339,0.255-0.409,0.731-0.157,1.072c0.254,0.339,0.733,0.411,1.074,0.157
			l3.866-2.883c0.339-0.252,0.41-0.731,0.156-1.071S55.641,146.268,55.302,146.52z"></path>
                            <path fill="#EDF7F7" d="M28.97,166.14l-3.87,2.884c-0.338,0.252-0.41,0.731-0.158,1.07c0.255,0.339,0.735,0.409,1.075,0.158
			l3.869-2.883c0.338-0.254,0.408-0.733,0.155-1.073C29.788,165.957,29.309,165.887,28.97,166.14z"></path>
                            <path fill="#EDF7F7" d="M32.748,147.769c0.34-0.253,0.409-0.732,0.157-1.072l-2.884-3.868c-0.251-0.339-0.732-0.411-1.072-0.159
			c-0.338,0.254-0.408,0.734-0.155,1.074l2.882,3.868C31.929,147.949,32.409,148.021,32.748,147.769z"></path>
                            <path fill="#EDF7F7" d="M26.689,157.118c0.208,0.032,0.409-0.028,0.567-0.143c0.156-0.119,0.27-0.296,0.299-0.504
			c0.063-0.42-0.227-0.808-0.646-0.87l-4.771-0.697c-0.42-0.062-0.811,0.23-0.87,0.646c-0.062,0.42,0.229,0.81,0.648,0.871
			L26.689,157.118z"></path>
                            <path fill="#EDF7F7" d="M43.141,145.14c0.158-0.117,0.27-0.294,0.299-0.504l0.697-4.773c0.062-0.419-0.229-0.807-0.648-0.869
			c-0.417-0.061-0.806,0.229-0.867,0.647l-0.697,4.771c-0.063,0.421,0.23,0.81,0.648,0.872
			C42.781,145.314,42.985,145.256,43.141,145.14z"></path>
                        </g>
                        <g>
                            <path fill="#EDF7F7" d="M72.058,320.566l-6.984-11.325l3.67-2.264c1.39-0.856,2.332-1.357,2.824-1.507
			c0.754-0.23,1.525-0.196,2.313,0.104c0.789,0.299,1.462,0.899,2.016,1.801c0.43,0.696,0.665,1.359,0.704,1.985
			c0.039,0.631-0.052,1.2-0.273,1.712c-0.222,0.509-0.506,0.933-0.855,1.268c-0.479,0.444-1.237,0.985-2.272,1.627l-1.491,0.917
			l2.634,4.272L72.058,320.566z M68.542,309.747l1.981,3.215l1.251-0.771c0.902-0.556,1.469-0.987,1.699-1.293
			c0.231-0.307,0.354-0.64,0.372-0.997c0.016-0.36-0.078-0.706-0.285-1.042c-0.254-0.412-0.585-0.678-0.992-0.795
			c-0.407-0.119-0.817-0.099-1.229,0.064c-0.305,0.119-0.87,0.43-1.693,0.938L68.542,309.747z"></path>
                            <path fill="#EDF7F7" d="M82.619,314.054l-6.983-11.324l2.287-1.409l2.749,4.456l4.481-2.761l-2.75-4.458l2.287-1.412l6.983,11.327
			l-2.287,1.41l-3.054-4.953l-4.48,2.763l3.053,4.955L82.619,314.054z"></path>
                            <path fill="#EDF7F7" d="M94.039,307.014l-6.984-11.324l3.67-2.262c1.391-0.859,2.333-1.362,2.824-1.508
			c0.754-0.232,1.526-0.198,2.314,0.102c0.789,0.302,1.462,0.902,2.017,1.802c0.428,0.696,0.663,1.359,0.702,1.987
			c0.041,0.631-0.052,1.199-0.273,1.71c-0.222,0.511-0.506,0.935-0.855,1.27c-0.48,0.443-1.237,0.984-2.272,1.624l-1.492,0.919
			l2.636,4.271L94.039,307.014z M90.522,296.195l1.981,3.212l1.252-0.771c0.902-0.556,1.469-0.986,1.698-1.293
			c0.232-0.306,0.355-0.638,0.372-0.996c0.016-0.359-0.078-0.705-0.283-1.041c-0.255-0.411-0.585-0.677-0.992-0.795
			c-0.408-0.118-0.818-0.097-1.229,0.064c-0.305,0.119-0.869,0.428-1.694,0.936L90.522,296.195z"></path>
                        </g>
                        <g>
                            <path fill="#DAEEEF"
                                  d="M649.776,208.788l7.881-6.276l1.28,1.604l-6.543,5.21l3.178,3.989l-1.339,1.068L649.776,208.788z"></path>
                            <path fill="#DAEEEF" d="M660.041,213.471l-0.85-1.585c0.679-0.285,1.303-0.347,1.873-0.181c0.569,0.168,1.153,0.626,1.748,1.374
			c0.542,0.679,0.863,1.248,0.968,1.709s0.088,0.855-0.054,1.191c-0.141,0.329-0.542,0.761-1.204,1.287l-1.788,1.399
			c-0.505,0.404-0.86,0.725-1.061,0.964c-0.201,0.24-0.39,0.537-0.557,0.89l-1.197-1.506c0.067-0.122,0.18-0.29,0.333-0.505
			c0.07-0.098,0.111-0.165,0.138-0.198c-0.463-0.058-0.874-0.187-1.238-0.381c-0.36-0.193-0.677-0.462-0.942-0.798
			c-0.474-0.593-0.685-1.188-0.635-1.785c0.048-0.598,0.318-1.091,0.81-1.48c0.327-0.263,0.681-0.414,1.061-0.462
			c0.376-0.049,0.744,0.015,1.104,0.188c0.36,0.171,0.799,0.479,1.319,0.927c0.7,0.605,1.22,1,1.554,1.184l0.15-0.122
			c0.293-0.233,0.445-0.471,0.454-0.717c0.011-0.244-0.144-0.564-0.466-0.968c-0.214-0.27-0.435-0.438-0.665-0.505
			C660.669,213.323,660.385,213.349,660.041,213.471z M660.427,216.491c-0.218-0.145-0.545-0.391-0.968-0.741
			c-0.431-0.353-0.738-0.56-0.927-0.619c-0.3-0.088-0.559-0.044-0.773,0.13c-0.215,0.17-0.336,0.398-0.364,0.679
			c-0.028,0.282,0.054,0.548,0.248,0.791c0.22,0.276,0.52,0.467,0.897,0.571c0.288,0.074,0.548,0.061,0.795-0.037
			c0.161-0.064,0.427-0.241,0.79-0.531L660.427,216.491z"></path>
                            <path fill="#DAEEEF" d="M661.213,223.146l-1.215-1.522l5.756-4.581l1.129,1.414l-0.818,0.651c0.578-0.065,1.007-0.052,1.283,0.042
			c0.277,0.097,0.514,0.269,0.708,0.515c0.276,0.346,0.449,0.757,0.513,1.231l-1.703,0.583c-0.039-0.387-0.146-0.69-0.321-0.911
			c-0.169-0.214-0.372-0.349-0.606-0.402c-0.236-0.054-0.541-0.003-0.917,0.158c-0.374,0.16-1.049,0.628-2.03,1.408L661.213,223.146
			z"></path>
                            <path fill="#DAEEEF" d="M668.397,223.962l-0.853-1.58c0.684-0.288,1.307-0.349,1.879-0.183c0.566,0.17,1.15,0.627,1.746,1.374
			c0.541,0.68,0.866,1.249,0.967,1.708c0.102,0.463,0.088,0.858-0.054,1.19c-0.141,0.334-0.541,0.762-1.204,1.289l-1.788,1.399
			c-0.505,0.403-0.859,0.726-1.063,0.965c-0.2,0.24-0.384,0.536-0.552,0.889l-1.2-1.508c0.068-0.117,0.179-0.288,0.331-0.505
			c0.07-0.095,0.116-0.162,0.138-0.195c-0.459-0.059-0.871-0.188-1.235-0.381c-0.36-0.195-0.677-0.464-0.945-0.799
			c-0.47-0.592-0.682-1.188-0.635-1.785c0.054-0.598,0.322-1.089,0.815-1.483c0.327-0.259,0.678-0.413,1.056-0.46
			c0.378-0.048,0.747,0.017,1.105,0.188c0.357,0.173,0.799,0.481,1.32,0.93c0.699,0.604,1.218,0.999,1.551,1.181l0.152-0.119
			c0.294-0.232,0.445-0.473,0.454-0.715c0.008-0.245-0.146-0.567-0.465-0.97c-0.215-0.271-0.438-0.441-0.666-0.505
			C669.022,223.818,668.741,223.846,668.397,223.962z M668.786,226.984c-0.224-0.143-0.547-0.388-0.973-0.741
			c-0.426-0.349-0.736-0.556-0.925-0.616c-0.303-0.088-0.559-0.044-0.773,0.129c-0.212,0.169-0.335,0.396-0.364,0.68
			c-0.031,0.282,0.054,0.546,0.249,0.792c0.22,0.274,0.516,0.464,0.896,0.57c0.285,0.073,0.551,0.061,0.796-0.039
			c0.16-0.062,0.426-0.24,0.79-0.531L668.786,226.984z"></path>
                            <path fill="#DAEEEF" d="M669.666,233.766l3.91-6.901l1.274,1.6l-2.076,3.423l-0.73,1.097c0.315-0.115,0.522-0.196,0.621-0.235
			c0.202-0.08,0.408-0.155,0.617-0.228l3.808-1.243l1.249,1.565l-7.578,2.296L669.666,233.766z"></path>
                            <path fill="#DAEEEF" d="M677.812,240.235l0.949,1.718c-0.71,0.251-1.377,0.279-2.005,0.089c-0.627-0.188-1.189-0.6-1.694-1.23
			c-0.796-1.001-1.061-2.003-0.787-3.006c0.223-0.796,0.73-1.513,1.528-2.148c0.956-0.759,1.903-1.105,2.838-1.035
			c0.938,0.065,1.709,0.482,2.316,1.246c0.684,0.856,0.938,1.757,0.768,2.701c-0.172,0.947-0.848,1.872-2.036,2.78l-3.037-3.815
			c-0.442,0.368-0.697,0.772-0.762,1.207c-0.063,0.436,0.045,0.829,0.324,1.178c0.188,0.238,0.412,0.391,0.672,0.448
			C677.146,240.424,677.453,240.381,677.812,240.235z M679.419,239.097c0.432-0.364,0.678-0.743,0.734-1.146
			c0.056-0.397-0.037-0.753-0.285-1.063c-0.265-0.332-0.607-0.511-1.021-0.535c-0.415-0.022-0.829,0.132-1.238,0.467
			L679.419,239.097z"></path>
                            <path fill="#DAEEEF"
                                  d="M678.24,244.534l7.948-6.328l1.213,1.521l-7.948,6.329L678.24,244.534z"></path>
                        </g>
                        <path fill="#EDF7F7" d="M173.524,37.39c-1.752-1.806-4.17-2.693-6.575-2.547l2.204-1.315c0.622,0.629,1.613,0.784,2.406,0.311
		c0.933-0.557,1.239-1.769,0.683-2.702c-0.558-0.934-1.77-1.238-2.702-0.683c-0.793,0.474-1.127,1.418-0.87,2.266l-3.893,2.322
		c-0.622-0.629-1.612-0.784-2.406-0.311c-0.792,0.474-1.127,1.419-0.87,2.265l-4.119,2.458c-0.623-0.627-1.613-0.781-2.406-0.308
		c-0.932,0.556-1.239,1.768-0.682,2.702c0.557,0.933,1.768,1.239,2.702,0.682c0.793-0.473,1.126-1.419,0.869-2.264l2.431-1.452
		c-1.271,2.048-1.639,4.597-0.879,6.997c-0.773,0.6-1.003,1.695-0.489,2.558c0.558,0.933,1.77,1.24,2.702,0.682
		c0.934-0.557,1.239-1.769,0.683-2.701c-0.43-0.722-1.25-1.062-2.031-0.927c-0.803-2.668-0.04-5.529,1.883-7.454
		c0.623,0.489,1.506,0.577,2.225,0.148c0.72-0.43,1.061-1.25,0.926-2.03c2.605-0.779,5.486-0.092,7.456,1.881
		c-0.49,0.624-0.578,1.508-0.15,2.227c0.558,0.933,1.77,1.238,2.703,0.682c0.932-0.557,1.239-1.769,0.682-2.703
		C175.493,37.312,174.42,36.993,173.524,37.39z M170.021,31.263c0.487-0.292,1.119-0.131,1.41,0.356
		c0.291,0.488,0.131,1.12-0.355,1.41c-0.485,0.29-1.12,0.132-1.411-0.355C169.375,32.186,169.535,31.553,170.021,31.263z
		 M156.515,41.72c-0.488,0.292-1.121,0.133-1.412-0.355c-0.29-0.487-0.13-1.119,0.356-1.41c0.486-0.29,1.119-0.131,1.411,0.357
		C157.16,40.799,157,41.43,156.515,41.72z M161.503,46.831c0.291,0.487,0.13,1.119-0.354,1.41c-0.488,0.292-1.121,0.131-1.411-0.355
		c-0.291-0.486-0.131-1.12,0.355-1.409C160.58,46.185,161.213,46.346,161.503,46.831z M163.907,37.308
		c-0.486,0.291-1.118,0.13-1.409-0.357c-0.291-0.487-0.13-1.119,0.356-1.41c0.488-0.29,1.12-0.13,1.41,0.356
		C164.555,36.383,164.395,37.017,163.907,37.308z M174.843,40.066c-0.488,0.292-1.12,0.131-1.411-0.355
		c-0.292-0.486-0.131-1.119,0.356-1.409c0.486-0.292,1.119-0.131,1.409,0.354C175.489,39.145,175.329,39.776,174.843,40.066z"></path>
                        <path fill="#F2F7F7" d="M425.352,38.385c-1.085-3.838-3.793-6.891-7.257-8.494l4.062-0.178c0.394,1.346,1.66,2.306,3.122,2.241
		c1.72-0.077,3.057-1.537,2.983-3.257c-0.079-1.723-1.54-3.057-3.257-2.981c-1.462,0.064-2.639,1.131-2.915,2.505l-7.172,0.317
		c-0.4-1.347-1.666-2.306-3.127-2.241c-1.462,0.063-2.638,1.132-2.915,2.506l-7.592,0.335c-0.395-1.345-1.66-2.305-3.125-2.239
		c-1.717,0.075-3.058,1.535-2.98,3.255c0.076,1.719,1.537,3.059,3.257,2.982c1.465-0.064,2.637-1.131,2.914-2.506l4.481-0.198
		c-3.312,1.9-5.739,5.18-6.48,9.097c-1.531,0.259-2.675,1.615-2.607,3.203c0.08,1.721,1.538,3.056,3.258,2.981
		c1.721-0.076,3.058-1.535,2.983-3.256c-0.058-1.329-0.95-2.419-2.138-2.817c0.884-4.326,4.1-7.744,8.228-8.983
		c0.502,1.149,1.667,1.935,2.993,1.878c1.325-0.058,2.417-0.943,2.813-2.135c4.226,0.87,7.724,3.993,8.986,8.224
		c-1.15,0.504-1.937,1.668-1.878,2.994c0.076,1.721,1.534,3.059,3.255,2.983c1.721-0.076,3.058-1.535,2.983-3.257
		C428.155,39.757,426.897,38.506,425.352,38.385z M425.069,27.207c0.897-0.041,1.659,0.659,1.698,1.558
		c0.042,0.897-0.657,1.658-1.554,1.698c-0.897,0.038-1.662-0.658-1.699-1.556C423.474,28.008,424.174,27.246,425.069,27.207z
		 M398.373,31.645c-0.898,0.041-1.663-0.657-1.701-1.555c-0.04-0.897,0.66-1.661,1.553-1.7c0.901-0.039,1.663,0.659,1.7,1.557
		C399.968,30.844,399.269,31.606,398.373,31.645z M401.49,42.524c0.04,0.897-0.656,1.658-1.556,1.7
		c-0.895,0.039-1.659-0.66-1.697-1.557c-0.04-0.896,0.656-1.659,1.557-1.699C400.689,40.928,401.452,41.626,401.49,42.524z
		 M412.004,31.045c-0.901,0.04-1.663-0.659-1.701-1.557c-0.039-0.898,0.66-1.661,1.556-1.7c0.897-0.039,1.66,0.66,1.698,1.557
		C413.597,30.244,412.896,31.004,412.004,31.045z M425.184,43.111c-0.901,0.039-1.666-0.661-1.701-1.558
		c-0.039-0.895,0.657-1.658,1.553-1.697c0.897-0.04,1.66,0.657,1.702,1.555C426.776,42.308,426.076,43.071,425.184,43.111z"></path>
                        <circle fill="#E7C6A2" cx="323.665" cy="212.224" r="0.931"></circle>
                        <circle fill="#E7C6A2" cx="319.835" cy="216.996" r="0.929"></circle>
                        <circle fill="#E7C6A2" cx="327.965" cy="217.749" r="0.93"></circle>
                        <circle fill="#E7C6A2" cx="387.488" cy="212.033" r="0.931"></circle>
                        <circle fill="#E7C6A2" cx="391.317" cy="216.807" r="0.929"></circle>
                        <circle fill="#E7C6A2" cx="383.187" cy="217.557" r="0.931"></circle>
                    </g></svg>-->
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
        <!--<div class="featured-series">

        </div>-->
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
        <!--<section class="plans-section">
            <div class="container">
                <header class="column is-8 is-offset-2 has-text-centered mb-5"><img
                            src="wp-content/themes/wplms/svg-loaders/hearts.svg" class="mb-2">
                    <h3 class="heading">
                        Выберите подходящий план.
                    </h3>
                    <p class="subheading">
                        Joining takes less than a minute, and, if your peers are correct, is a pretty dang good
                        decision. If you're still on the fence, we have a plan called “monthly” - and it’s not like the
                        gym. Seriously - you can cancel in five seconds, if this isn't for
                        you.
                    </p>
                </header>
                <div class="plans columns is-multiline">
                    <div data-wow-delay="0.2s"
                         class="column is-6-tablet is-3-desktop wow fadeInDown mb-2-tablet mb-0-desktop"
                         style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                        <div class="plan  is-flex is-column">
                            <div class="plan-type">
                                <h3>Месяц</h3></div>
                            <div class="plan-price "><span class="dollar">₽</span> <span>9</span></div>
                            <p class="plan-description text">
                                Still undecided? Ease in with a monthly plan that can be canceled in ten seconds.
                            </p>
                            <div class="plan-button"><a href="/signup?plan=monthly" class="button is-padded">Start
                                    Learning</a></div>
                        </div>
                    </div>
                    <div data-wow-delay="0.4s"
                         class="column is-6-tablet is-3-desktop wow fadeInDown mb-2-tablet mb-0-desktop"
                         style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                        <div class="plan bump is-flex is-column">
                            <div class="plan-type">
                                <h3>Год</h3></div>
                            <div class="plan-price "><span class="dollar">₽</span> <span>86</span></div>
                            <p class="plan-description text">
                                This is your career we're talking about. Go all in, and save 20% off the monthly rate.
                            </p>
                            <div class="plan-button"><a href="/signup?plan=yearly" class="button is-padded">Start
                                    Learning</a></div>
                        </div>
                    </div>
                    <div data-wow-delay="0.6s"
                         class="column is-6-tablet is-3-desktop wow fadeInDown mb-2-tablet mb-0-desktop"
                         style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                        <div class="plan  is-flex is-column">
                            <div class="plan-type">
                                <h3>Навсегда</h3></div>
                            <div class="plan-price "><span class="dollar">₽</span> <span>350</span></div>
                            <p class="plan-description text">
                                We get it. Not everyone loves subscriptions. Pay once, and access Laracasts forever.
                            </p>
                            <div class="plan-button"><a href="/signup?plan=forever" class="button is-padded">Start
                                    Learning</a></div>
                        </div>
                    </div>
                    <div data-wow-delay="0.8s"
                         class="column is-6-tablet is-3-desktop wow fadeInDown mb-2-tablet mb-0-desktop"
                         style="visibility: hidden; animation-delay: 0.8s; animation-name: none;">
                        <div class="plan  is-flex is-column">
                            <div class="plan-type">
                                <h3>Команды</h3></div>
                            <div class="plan-price "><span class="dollar">₽</span> <span>300</span></div>
                            <p class="plan-description text">
                                Follow in the steps of thousands of companies who have elevated their teams to the next
                                level.
                            </p>
                            <div class="plan-button"><a href="/join-business" class="button is-padded">For My Devs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <section class="meet-jeffrey-section is-medium">
            <div class="container">
                <div class="columns">
                    <div class="column is-8 content is-medium color-white pt-4-tablet">
                        <!--<p>
                            There's a chance you may already know me! A veteran in the PHP community, I am a co-host on
                            the official <a href="http://laravelpodcast.com" target="_blank" rel="noreferrer noopener">Laravel
                                podcast</a>, have written successful books,
                            built popular packages, contributed to many open-source projects, <a
                                    href="https://www.youtube.com/watch?v=mDotS5BDqRM">spoken</a> at every Laracon
                            conference, been a guest on <a href="http://www.fullstackradio.com/28" target="_blank"
                                                           rel="noreferrer noopener">countless podcasts</a> (including
                            <a href="http://phptownhall.com/blog/2014/02/15/episode-19-jeffrey-laracasts-bdfls/">PHP
                                Town Hall</a>, <a href="http://shoptalkshow.com/episodes/005-with-jeffrey-way/">Shop
                                Talk</a>,
                            <a href="https://www.youtube.com/watch?v=ozMoUp1wU0E">No Capes</a>, and
                            <a href="http://www.fullstackradio.com/28">Full Stack Radio</a>), and have contributed to
                            the largest web dev magazines in the world.
                        </p>-->
                        <p>
                            Мы действительно хороши в преподавании всего этого. Вы ни за что не найдете скучных, вызывающих сон
                            слайдов и диаграмм на этом сайте.
                        </p>
                        <p>
                            Нет.
                        </p>
                        <p>
                            Тут мы целиком и полностью сфокусированы на коде. Вы почувствуете себя точно так, как будто
                            мы <!--<a href="/join">-->сидим с вами рядом друг с другом<!--</a>-->.
                        </p>
                        <p>
                            Присоединяйтесь к нашей толпе и мы научим вас всему что мы знаем в этой области.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--<section class="footer-section top">
            <div class="container">
                <div class="columns">
                    <div data-wow-delay=".5s" class="column is-5 wow fadeIn"
                         style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                        <h2 class="newsletter-heading pr-1-tablet has-text-centered-mobile">
                            Хотите получать обновления по почте?
                        </h2></div>
                    <div class="column is-6 is-offset-1">
                        <form id="newsletter-form" method="POST" action="/newsletters/subscribe">
                            <div class="newsletter-signup control has-addons wow lightSpeedIn"
                                 style="visibility: hidden; animation-name: none;"><input type="email" name="email"
                                                                                          placeholder="Введите ваш Email"
                                                                                          autocomplete="off"
                                                                                          required="required"
                                                                                          class="input">
                                <button type="submit" class="button is-outlined is-primary">
                                    Отправить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>-->
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
                            <!--<li><a href="/index">Lesson Index</a></li>
                            <li><a href="/shop">Shop</a></li>-->
                            <!--<li><a href="/recommended-reading">Books</a></li>-->
                            <!--<li><a href="/join">Новый</a></li>
                            <li><a href="/login">
                                    Войти
                                </a></li>-->
                        </ul>
                    </div>
                    <div class="column is-2 is-hidden-mobile">
                        <h5 class="heading is-5 in-caps">Общение</h5>
                        <ul class="footer-links-list">
                            <!--<li><a href="/discuss">Forum</a></li>
                            <li><a href="/podcast">Laracasts Snippet</a></li>
                            <li><a href="http://laravelpodcast.com">Laravel Podcast</a></li>-->
                            <li><a href="/отзывы">Отзывы</a></li>
                            <!--<li><a href="/contact">Поддержка</a></li>-->
                        </ul>
                    </div>
                    <div class="column is-2 is-hidden-mobile">
                        <h5 class="heading is-5 in-caps">Экстра</h5>
                        <ul class="footer-links-list">
                            <!--<li><a href="https://laracasts.com/stats">Статистика</a></li>-->
                            <!--<li><a href="/faq">FAQ</a></li>-->
                            <!--<li><a href="/community?orderBy=updated_at">Community Tutorials</a></li>
                            <li><a href="/feed">RSS</a></li>-->
                            <li><a href="https://hh.ru/search/vacancy?text=laravel&area=1">Получить работу</a></li>
                        </ul>
                        <ul class="zeroed footer-links-list">
                            <!--<li><a href="/privacy">Личные данные</a></li>-->
                            <!--<li><a href="/условия">Условия</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="columns hosting">
                    <div class="column is-5 is-bold has-text-centered-mobile">
                        © Thinkology 2018. Все права защищены.
                    </div>
                    <!--<div class="column is-5 is-offset-2 has-text-right is-bold is-hidden-mobile">
                        С гордостью размещены на <a href="https://forge.laravel.com">Laravel Forge</a> и <a
                                href="https://www.digitalocean.com/?refcode=d2070a2d5f35">DigitalOcean</a>.
                    </div>-->
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
    <!--<button class="pi button is-naked">π</button>-->
</div>
<!--<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>

<script>
  (function(b, o, i, l, e, r) {
    b.GoogleAnalyticsObject = l;
    b[l] || (b[l] =
      function() {
        (b[l].q = b[l].q || []).push(arguments)
      });
    b[l].l = +new Date;
    e = o.createElement(i);
    r = o.getElementsByTagName(i)[0];
    e.src = '//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e, r)
  }(window, document, 'script', 'ga'));

  ga('create', 'UA-44120322-1');
</script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="wp-content/themes/wplms/js/manifest.js"></script>
<script src="wp-content/themes/wplms/js/vendor.js"></script>
<script src="wp-content/themes/wplms/js/all.min.js"></script>
<!--<script>
  ga('send', 'pageview');

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': LARACASTS.csrfToken
    }
  });
</script>-->


</body>

</html>
