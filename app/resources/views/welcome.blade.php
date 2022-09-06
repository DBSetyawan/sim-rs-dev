<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<canvas style="inset: 0px; pointer-events: none; position: fixed; z-index: 1000000000;" width="1366"
    height="657"></canvas>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
        content="Design beautiful custom boxes and packaging. Order printed mailer boxes, shipping boxes, and more. ✅Low minimums ✅Low prices ✅Fast turnaround ✅Premium quality">

    <link rel="shortcut icon" type="image/png"
        href="{{ asset('KOP/logoKOPfooter.PNG') }}">

    <title>Custom Boxes &amp; Custom Packaging | Design your own boxes | PT. KOP</title>
    {{-- <link crossorigin="" href="{{ asset('css/theme.css')}}"
        rel="stylesheet">
        <link crossorigin="" href="{{ asset('css/layers.css')}}"
        rel="stylesheet">
        <link crossorigin="" href="{{ asset('css/navigations.css')}}"
        rel="stylesheet">
        <link crossorigin="" href="{{ asset('css/components.css')}}"
        rel="stylesheet">
        <link crossorigin="" href="{{ asset('css/owl.carousel.min.css')}}"
        rel="stylesheet">
        <link crossorigin="" href="{{ asset('css/owl.carousel.default.min.css')}}"
        rel="stylesheet">
        <link crossorigin="" href="{{ asset('css/theme.animation.css')}}"
        rel="stylesheet">
        <link crossorigin="" href="{{ asset('css/settings.css')}}"
        rel="stylesheet"> --}}


            <!-- Vendor CSS -->
            <link rel="stylesheet" href="{{ asset('css/btstrapv-4.css')}}">
            <link rel="stylesheet" href="{{ asset('css/fntawesome.css')}}">
            <link rel="stylesheet" href="{{ asset('css/simple-line.icons.css')}}">
            <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{ asset('css/owl.carousel.default.min.css')}}">
            <link rel="stylesheet" href="{{ asset('css/magnific.css')}}">
    
            <!-- Theme CSS -->
            <link rel="stylesheet" href="{{ asset('css/theme.css')}}">
            <link rel="stylesheet" href="{{ asset('css/th-elements.css')}}">
            <link rel="stylesheet" href="{{ asset('css/th-blogs.css')}}">
            <link rel="stylesheet" href="{{ asset('css/th-shp.css')}}">
            <link rel="stylesheet" href="{{ asset('css/theme.animation.css')}}">
    
            <!-- Current Page CSS -->
            <link rel="stylesheet" href="{{ asset('css/settings.css')}}" media="screen">
            <link rel="stylesheet" href="{{ asset('css/layers.css')}}" media="screen">
            <link rel="stylesheet" href="{{ asset('css/navigations.css')}}" media="screen">
            <link rel="stylesheet" href="{{ asset('css/components.css')}}" media="screen">
    
            <!-- Skin CSS -->
            <link rel="stylesheet" href="{{ asset('css/defaults.css')}}">
    
            <!-- Theme Custom CSS -->
            {{-- <link rel="stylesheet" href="css/custom.css"> --}}
    
            <!-- Head Libs -->
        <script src="{{ asset('js/modernnize.js')}}"></script>
        <link crossorigin="" href="{{ asset('packlane-assets/app-bundle.css')}}"
        rel="stylesheet">
        
    <link href="https://packlane.com" rel="canonical">
    <meta
        content="At Packlane, we believe good things come in custom packages. Design small cartons, large printed shipping boxes, and everything in between."
        name="description">

    <!-- OpenGraph -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@KOP">
    <meta name="yandex-verification" content="35fa519272a729b3">

    <meta content="https://krisanthium.com" name="og:canonical">
    <meta
        content="At Packlane, we believe good things come in custom packages. Design small cartons, large printed shipping boxes, and everything in between."
        name="og:description">
    <meta
        content="{{ asset('KOP/logoKOPfooter.PNG') }}"
        name="og:image">
    <meta content="Design Your Own Custom Boxes and Packaging" name="og:title">
    <!-- End of OpenGraph -->

    <meta name="msapplication-config" content="none">
    <style type="text/css">
    </style>
    <meta http-equiv="origin-trial"
        content="A7jJ/K14TswrMYv7k08eMRw2LMhCoHtdZIlR4bsG9p1tHmBXAgq7ZMLdccBMn+RzwQkrXZM0RPFAPiVZJKofAQsAAACHeyJvcmlnaW4iOiJodHRwczovL3d3dy5waW50ZXJlc3QuY29tOjQ0MyIsImZlYXR1cmUiOiJDb252ZXJzaW9uTWVhc3VyZW1lbnQiLCJleHBpcnkiOjE2MzE2NjM5OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
    <style>
        .smile-launcher-frame-container {
            border: 0;
            box-shadow: 0 0 25px 0 rgba(0, 0, 0, .05);
            height: 60px;
            outline: 0;
            overflow: hidden;
            position: fixed;
            visibility: hidden;
            z-index: 0
        }

        .smile-launcher-frame-container.smile-launcher-animate {
            -webkit-animation: smileFadeScaleIn .2s ease-in-out !important;
            animation: smileFadeScaleIn .2s ease-in-out !important;
            -webkit-animation-delay: .15s !important;
            animation-delay: .15s !important;
            -webkit-animation-fill-mode: forwards !important;
            animation-fill-mode: forwards !important;
            transition: all .2s ease-in-out !important
        }

        .smile-launcher-frame-container.smile-no-animation {
            -webkit-animation: none !important;
            animation: none !important;
            visibility: visible
        }

        .smile-launcher-frame-container.smile-launcher-border-radius-square {
            border-radius: 0
        }

        .smile-launcher-frame-container.smile-launcher-border-radius-shaved {
            border-radius: 5px
        }

        .smile-launcher-frame-container.smile-launcher-border-radius-rounded {
            border-radius: 10px
        }

        .smile-launcher-frame-container.smile-launcher-border-radius-circular {
            border-radius: 30px
        }

        .smile-launcher-frame-container.smile-launcher-open {
            box-shadow: 0 0 80px 20px rgba(0, 0, 0, .1);
            width: 60px !important
        }

        .smile-launcher-frame-container.smile-launcher-mobile {
            width: 60px !important
        }

        .smile-launcher-frame-container .smile-launcher-frame {
            border: 0 !important;
            bottom: 0 !important;
            height: 0 !important;
            left: 0 !important;
            max-height: 100% !important;
            max-width: 100% !important;
            min-height: 100% !important;
            min-width: 100% !important;
            outline: 0 !important;
            position: absolute !important;
            right: 0 !important;
            top: 0 !important;
            visibility: visible !important;
            width: 0 !important
        }

        @-webkit-keyframes smileFadeScaleIn {
            0% {
                opacity: 0;
                transform: scale(.8);
                visibility: hidden
            }

            to {
                opacity: 1;
                transform: scale(1);
                visibility: visible
            }
        }

        @keyframes smileFadeScaleIn {
            0% {
                opacity: 0;
                transform: scale(.8);
                visibility: hidden
            }

            to {
                opacity: 1;
                transform: scale(1);
                visibility: visible
            }
        }

        #SmileUIPanelContainer .grecaptcha-badge {
            bottom: 60px !important;
            box-shadow: none !important;
            width: 0 !important
        }

        .smile-panel-frame-container {
            -webkit-animation: smileFadeSlideUp .2s ease-in !important;
            animation: smileFadeSlideUp .2s ease-in !important;
            border: 0;
            box-shadow: 0 0 80px 0 rgba(0, 0, 0, .12);
            max-height: 600px;
            outline: 0;
            overflow: hidden;
            position: fixed;
            width: 360px;
            z-index: 1
        }

        .smile-panel-frame-container.smile-panel-exit-active {
            -webkit-animation: smileFadeSlideDown .2s ease-in !important;
            animation: smileFadeSlideDown .2s ease-in !important
        }

        .smile-panel-frame-container.smile-panel-border-radius-square {
            border-radius: 0
        }

        .smile-panel-frame-container.smile-panel-border-radius-shaved {
            border-radius: 5px
        }

        .smile-panel-frame-container.smile-panel-border-radius-rounded {
            border-radius: 10px
        }

        .smile-panel-frame-container.smile-panel-border-radius-circular {
            border-radius: 15px
        }

        .smile-panel-frame-container .smile-panel-frame {
            border: 0;
            bottom: 0;
            height: 100%;
            left: 0;
            outline: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%
        }

        @-webkit-keyframes smileFadeSlideUp {
            0% {
                opacity: 0;
                transform: translate3d(0, 10px, 0)
            }

            to {
                opacity: 1;
                transform: translateZ(0)
            }
        }

        @keyframes smileFadeSlideUp {
            0% {
                opacity: 0;
                transform: translate3d(0, 10px, 0)
            }

            to {
                opacity: 1;
                transform: translateZ(0)
            }
        }

        @-webkit-keyframes smileFadeSlideDown {
            0% {
                opacity: 1;
                transform: translateZ(0)
            }

            to {
                opacity: 0;
                transform: translate3d(0, 10px, 0)
            }
        }

        @keyframes smileFadeSlideDown {
            0% {
                opacity: 1;
                transform: translateZ(0)
            }

            to {
                opacity: 0;
                transform: translate3d(0, 10px, 0)
            }
        }

        @media only screen and (max-height:450px),
        only screen and (max-width:450px) {
            .smile-panel-frame-container {
                border-radius: 0 !important;
                height: 100% !important;
                left: 0 !important;
                max-height: 100vh !important;
                max-width: 100vw !important;
                right: 0 !important;
                top: 0 !important;
                width: 100% !important
            }
        }

        .smile-prompt-frame-container {
            -webkit-animation: smilePromptFadeSlideUp .3s cubic-bezier(0, 0, .2, 1) !important;
            animation: smilePromptFadeSlideUp .3s cubic-bezier(0, 0, .2, 1) !important;
            border: 0;
            box-shadow: 0 0 80px 0 rgba(0, 0, 0, .12);
            outline: 0;
            overflow: hidden;
            position: fixed;
            width: 375px;
            z-index: 1
        }

        .smile-prompt-frame-container.smile-prompt-exit-active {
            -webkit-animation: smilePromptFadeSlideDown .2s cubic-bezier(.4, 0, 1, 1) !important;
            animation: smilePromptFadeSlideDown .2s cubic-bezier(.4, 0, 1, 1) !important
        }

        .smile-prompt-frame-container.smile-prompt-exit {
            opacity: 0
        }

        .smile-prompt-frame-container.smile-prompt-preview {
            position: relative
        }

        .smile-prompt-frame-container.smile-prompt-border-radius-square {
            border-radius: 0
        }

        .smile-prompt-frame-container.smile-prompt-border-radius-shaved {
            border-radius: 5px
        }

        .smile-prompt-frame-container.smile-prompt-border-radius-rounded {
            border-radius: 10px
        }

        .smile-prompt-frame-container.smile-prompt-border-radius-circular {
            border-radius: 15px
        }

        .smile-prompt-frame-container .smile-prompt-frame {
            border: 0;
            border-radius: inherit;
            bottom: 0;
            height: 100%;
            left: 0;
            outline: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%
        }

        @-webkit-keyframes smilePromptFadeSlideUp {
            0% {
                opacity: 0;
                transform: translate3d(0, 100%, 0)
            }

            50% {
                opacity: 1
            }

            to {
                opacity: 1;
                transform: translateZ(0)
            }
        }

        @keyframes smilePromptFadeSlideUp {
            0% {
                opacity: 0;
                transform: translate3d(0, 100%, 0)
            }

            50% {
                opacity: 1
            }

            to {
                opacity: 1;
                transform: translateZ(0)
            }
        }

        @-webkit-keyframes smilePromptFadeSlideDown {
            0% {
                opacity: 1;
                transform: translateZ(0)
            }

            75% {
                opacity: 1
            }

            90% {
                opacity: 0
            }

            to {
                opacity: 0;
                transform: translate3d(0, 100%, 0)
            }
        }

        @keyframes smilePromptFadeSlideDown {
            0% {
                opacity: 1;
                transform: translateZ(0)
            }

            75% {
                opacity: 1
            }

            90% {
                opacity: 0
            }

            to {
                opacity: 0;
                transform: translate3d(0, 100%, 0)
            }
        }

        @media only screen and (max-height:450px),
        only screen and (max-width:450px) {
            .smile-prompt-frame-container {
                bottom: 16px !important;
                left: 0 !important;
                margin: 0 auto;
                max-width: 100vw !important;
                right: 0 !important;
                width: calc(100vw - 32px)
            }

            .smile-prompt-frame-container.smile-prompt-preview {
                width: 375px !important
            }
        }

        .smile-nudges-frame {
            border: 0;
            overflow: hidden;
            position: fixed;
            width: 388px;
            z-index: 1
        }

        @media only screen and (max-height:375px),
        only screen and (max-width:450px) {
            .smile-nudges-frame {
                bottom: 0 !important;
                height: calc(100% - 30px);
                max-height: 100vh;
                width: 100%
            }

            .smile-nudges-frame.smile-no-launcher {
                bottom: 0 !important
            }

            .smile-nudges-frame.smile-nudges-frame-left {
                left: 0 !important
            }

            .smile-nudges-frame.smile-nudges-frame-right {
                right: 0 !important
            }
        }

        .smile-ios-overflow-scroll {
            overflow: visible !important
        }

        .smile-ios-overflow-scroll>body {
            height: 100%;
            overflow: hidden;
            position: fixed;
            width: 100%
        }

        .smile-content-loading {
            overflow: hidden;
            pointer-events: none;
            position: inherit
        }

        .smile-content-loading:before {
            -webkit-animation: spin .75s linear infinite;
            animation: spin .75s linear infinite;
            background-color: inherit;
            border: 1px solid #e6e6e6;
            border-radius: 50%;
            border-top-color: #637381;
            bottom: 0;
            content: "";
            display: block;
            height: 30px;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
            width: 30px;
            z-index: 1
        }

        .smile-content-loading:after {
            background-color: #fff;
            content: "";
            display: block !important;
            height: 100% !important;
            left: 0 !important;
            position: absolute !important;
            right: 0 !important;
            top: 0 !important;
            width: 100% !important;
            z-index: 0
        }

        .smile-loading-spinner-container {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 1
        }

        .smile-loading-spinner-container.smile-loading-spinner-hide {
            -webkit-animation: loadingSpinnerOut .35s ease-in-out;
            animation: loadingSpinnerOut .35s ease-in-out;
            -webkit-animation-delay: .3s;
            animation-delay: .3s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards
        }

        .smile-loading-spinner-container.smile-loading-spinner-hidden {
            -webkit-animation: none !important;
            animation: none !important;
            display: none !important
        }

        .smile-theme-dark .smile-content-loading:before {
            border: 1px solid #46464d;
            border-top-color: #afafb3
        }

        .smile-theme-dark .smile-content-loading:after {
            background-color: #242426
        }

        @-webkit-keyframes spin {
            0% {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        @-webkit-keyframes loadingSpinnerOut {
            0% {
                opacity: 1
            }

            95% {
                opacity: 0
            }

            to {
                display: none;
                opacity: 0
            }
        }

        @keyframes loadingSpinnerOut {
            0% {
                opacity: 1
            }

            95% {
                opacity: 0
            }

            to {
                display: none;
                opacity: 0
            }
        }

    </style>
    <style>
        .smile-launcher-frame-container {
            border: 0;
            box-shadow: 0 0 25px 0 rgba(0, 0, 0, .05);
            height: 60px;
            outline: 0;
            overflow: hidden;
            position: fixed;
            visibility: hidden;
            z-index: 0
        }

        .smile-launcher-frame-container.smile-launcher-animate {
            -webkit-animation: smileFadeScaleIn .2s ease-in-out !important;
            animation: smileFadeScaleIn .2s ease-in-out !important;
            -webkit-animation-delay: .15s !important;
            animation-delay: .15s !important;
            -webkit-animation-fill-mode: forwards !important;
            animation-fill-mode: forwards !important;
            transition: all .2s ease-in-out !important
        }

        .smile-launcher-frame-container.smile-no-animation {
            -webkit-animation: none !important;
            animation: none !important;
            visibility: visible
        }

        .smile-launcher-frame-container.smile-launcher-border-radius-square {
            border-radius: 0
        }

        .smile-launcher-frame-container.smile-launcher-border-radius-shaved {
            border-radius: 5px
        }

        .smile-launcher-frame-container.smile-launcher-border-radius-rounded {
            border-radius: 10px
        }

        .smile-launcher-frame-container.smile-launcher-border-radius-circular {
            border-radius: 30px
        }

        .smile-launcher-frame-container.smile-launcher-open {
            box-shadow: 0 0 80px 20px rgba(0, 0, 0, .1);
            width: 60px !important
        }

        .smile-launcher-frame-container.smile-launcher-mobile {
            width: 60px !important
        }

        .smile-launcher-frame-container .smile-launcher-frame {
            border: 0 !important;
            bottom: 0 !important;
            height: 0 !important;
            left: 0 !important;
            max-height: 100% !important;
            max-width: 100% !important;
            min-height: 100% !important;
            min-width: 100% !important;
            outline: 0 !important;
            position: absolute !important;
            right: 0 !important;
            top: 0 !important;
            visibility: visible !important;
            width: 0 !important
        }

        @-webkit-keyframes smileFadeScaleIn {
            0% {
                opacity: 0;
                transform: scale(.8);
                visibility: hidden
            }

            to {
                opacity: 1;
                transform: scale(1);
                visibility: visible
            }
        }

        @keyframes smileFadeScaleIn {
            0% {
                opacity: 0;
                transform: scale(.8);
                visibility: hidden
            }

            to {
                opacity: 1;
                transform: scale(1);
                visibility: visible
            }
        }

        #SmileUIPanelContainer .grecaptcha-badge {
            bottom: 60px !important;
            box-shadow: none !important;
            width: 0 !important
        }

        .smile-panel-frame-container {
            -webkit-animation: smileFadeSlideUp .2s ease-in !important;
            animation: smileFadeSlideUp .2s ease-in !important;
            border: 0;
            box-shadow: 0 0 80px 0 rgba(0, 0, 0, .12);
            max-height: 600px;
            outline: 0;
            overflow: hidden;
            position: fixed;
            width: 360px;
            z-index: 1
        }

        .smile-panel-frame-container.smile-panel-exit-active {
            -webkit-animation: smileFadeSlideDown .2s ease-in !important;
            animation: smileFadeSlideDown .2s ease-in !important
        }

        .smile-panel-frame-container.smile-panel-border-radius-square {
            border-radius: 0
        }

        .smile-panel-frame-container.smile-panel-border-radius-shaved {
            border-radius: 5px
        }

        .smile-panel-frame-container.smile-panel-border-radius-rounded {
            border-radius: 10px
        }

        .smile-panel-frame-container.smile-panel-border-radius-circular {
            border-radius: 15px
        }

        .smile-panel-frame-container .smile-panel-frame {
            border: 0;
            bottom: 0;
            height: 100%;
            left: 0;
            outline: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%
        }

        @-webkit-keyframes smileFadeSlideUp {
            0% {
                opacity: 0;
                transform: translate3d(0, 10px, 0)
            }

            to {
                opacity: 1;
                transform: translateZ(0)
            }
        }

        @keyframes smileFadeSlideUp {
            0% {
                opacity: 0;
                transform: translate3d(0, 10px, 0)
            }

            to {
                opacity: 1;
                transform: translateZ(0)
            }
        }

        @-webkit-keyframes smileFadeSlideDown {
            0% {
                opacity: 1;
                transform: translateZ(0)
            }

            to {
                opacity: 0;
                transform: translate3d(0, 10px, 0)
            }
        }

        @keyframes smileFadeSlideDown {
            0% {
                opacity: 1;
                transform: translateZ(0)
            }

            to {
                opacity: 0;
                transform: translate3d(0, 10px, 0)
            }
        }

        @media only screen and (max-height:450px),
        only screen and (max-width:450px) {
            .smile-panel-frame-container {
                border-radius: 0 !important;
                height: 100% !important;
                left: 0 !important;
                max-height: 100vh !important;
                max-width: 100vw !important;
                right: 0 !important;
                top: 0 !important;
                width: 100% !important
            }
        }

        .smile-prompt-frame-container {
            -webkit-animation: smilePromptFadeSlideUp .3s cubic-bezier(0, 0, .2, 1) !important;
            animation: smilePromptFadeSlideUp .3s cubic-bezier(0, 0, .2, 1) !important;
            border: 0;
            box-shadow: 0 0 80px 0 rgba(0, 0, 0, .12);
            outline: 0;
            overflow: hidden;
            position: fixed;
            width: 375px;
            z-index: 1
        }

        .smile-prompt-frame-container.smile-prompt-exit-active {
            -webkit-animation: smilePromptFadeSlideDown .2s cubic-bezier(.4, 0, 1, 1) !important;
            animation: smilePromptFadeSlideDown .2s cubic-bezier(.4, 0, 1, 1) !important
        }

        .smile-prompt-frame-container.smile-prompt-exit {
            opacity: 0
        }

        .smile-prompt-frame-container.smile-prompt-preview {
            position: relative
        }

        .smile-prompt-frame-container.smile-prompt-border-radius-square {
            border-radius: 0
        }

        .smile-prompt-frame-container.smile-prompt-border-radius-shaved {
            border-radius: 5px
        }

        .smile-prompt-frame-container.smile-prompt-border-radius-rounded {
            border-radius: 10px
        }

        .smile-prompt-frame-container.smile-prompt-border-radius-circular {
            border-radius: 15px
        }

        .smile-prompt-frame-container .smile-prompt-frame {
            border: 0;
            border-radius: inherit;
            bottom: 0;
            height: 100%;
            left: 0;
            outline: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%
        }

        @-webkit-keyframes smilePromptFadeSlideUp {
            0% {
                opacity: 0;
                transform: translate3d(0, 100%, 0)
            }

            50% {
                opacity: 1
            }

            to {
                opacity: 1;
                transform: translateZ(0)
            }
        }

        @keyframes smilePromptFadeSlideUp {
            0% {
                opacity: 0;
                transform: translate3d(0, 100%, 0)
            }

            50% {
                opacity: 1
            }

            to {
                opacity: 1;
                transform: translateZ(0)
            }
        }

        @-webkit-keyframes smilePromptFadeSlideDown {
            0% {
                opacity: 1;
                transform: translateZ(0)
            }

            75% {
                opacity: 1
            }

            90% {
                opacity: 0
            }

            to {
                opacity: 0;
                transform: translate3d(0, 100%, 0)
            }
        }

        @keyframes smilePromptFadeSlideDown {
            0% {
                opacity: 1;
                transform: translateZ(0)
            }

            75% {
                opacity: 1
            }

            90% {
                opacity: 0
            }

            to {
                opacity: 0;
                transform: translate3d(0, 100%, 0)
            }
        }

        @media only screen and (max-height:450px),
        only screen and (max-width:450px) {
            .smile-prompt-frame-container {
                bottom: 16px !important;
                left: 0 !important;
                margin: 0 auto;
                max-width: 100vw !important;
                right: 0 !important;
                width: calc(100vw - 32px)
            }

            .smile-prompt-frame-container.smile-prompt-preview {
                width: 375px !important
            }
        }

        .smile-nudges-frame {
            border: 0;
            overflow: hidden;
            position: fixed;
            width: 388px;
            z-index: 1
        }

        @media only screen and (max-height:375px),
        only screen and (max-width:450px) {
            .smile-nudges-frame {
                bottom: 0 !important;
                height: calc(100% - 30px);
                max-height: 100vh;
                width: 100%
            }

            .smile-nudges-frame.smile-no-launcher {
                bottom: 0 !important
            }

            .smile-nudges-frame.smile-nudges-frame-left {
                left: 0 !important
            }

            .smile-nudges-frame.smile-nudges-frame-right {
                right: 0 !important
            }
        }

        .smile-ios-overflow-scroll {
            overflow: visible !important
        }

        .smile-ios-overflow-scroll>body {
            height: 100%;
            overflow: hidden;
            position: fixed;
            width: 100%
        }

        .smile-content-loading {
            overflow: hidden;
            pointer-events: none;
            position: inherit
        }

        .smile-content-loading:before {
            -webkit-animation: spin .75s linear infinite;
            animation: spin .75s linear infinite;
            background-color: inherit;
            border: 1px solid #e6e6e6;
            border-radius: 50%;
            border-top-color: #637381;
            bottom: 0;
            content: "";
            display: block;
            height: 30px;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
            width: 30px;
            z-index: 1
        }

        .smile-content-loading:after {
            background-color: #fff;
            content: "";
            display: block !important;
            height: 100% !important;
            left: 0 !important;
            position: absolute !important;
            right: 0 !important;
            top: 0 !important;
            width: 100% !important;
            z-index: 0
        }

        .smile-loading-spinner-container {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 1
        }

        .smile-loading-spinner-container.smile-loading-spinner-hide {
            -webkit-animation: loadingSpinnerOut .35s ease-in-out;
            animation: loadingSpinnerOut .35s ease-in-out;
            -webkit-animation-delay: .3s;
            animation-delay: .3s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards
        }

        .smile-loading-spinner-container.smile-loading-spinner-hidden {
            -webkit-animation: none !important;
            animation: none !important;
            display: none !important
        }

        .smile-theme-dark .smile-content-loading:before {
            border: 1px solid #46464d;
            border-top-color: #afafb3
        }

        .smile-theme-dark .smile-content-loading:after {
            background-color: #242426
        }

        @-webkit-keyframes spin {
            0% {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        @-webkit-keyframes loadingSpinnerOut {
            0% {
                opacity: 1
            }

            95% {
                opacity: 0
            }

            to {
                display: none;
                opacity: 0
            }
        }

        @keyframes loadingSpinnerOut {
            0% {
                opacity: 1
            }

            95% {
                opacity: 0
            }

            to {
                display: none;
                opacity: 0
            }
        }

    </style>
</head>

<body class="page ">
    <div
    class="et_social_sidebar_networks et_social_visible_sidebar et_social_slideright et_social_animated et_social_rounded et_social_sidebar_flip et_social_sidebar_withcounts et_social_mobile_on et_social_sidebar_networks_right">

    <ul class="et_social_icons_container">
        <li class="et_social_instagram">
            <a href="https://www.instagram.com/krisanthiumoffsetprinting"
                class="et_social_share et_social_display_count" rel="nofollow" data-social_name="facebook"
                data-post_id="386" data-social_type="share" data-location="sidebar" data-min_count="15">
                <i class="et_social_icon et_social_icon_instagram"></i>
                <span class="et_social_overlay"></span>
            </a>
        </li>
        {{-- <li class="et_social_twitter">
            <a href="http://twitter.com/share?text=Inspiration%20Gallery&#038;url=https%3A%2F%2Fpacklane.com%2Fblog%2Finspiration-gallery"
                class="et_social_share" rel="nofollow" data-social_name="twitter" data-post_id="386"
                data-social_type="share" data-location="sidebar">
                <i class="et_social_icon et_social_icon_twitter"></i>


                <span class="et_social_overlay"></span>
            </a>
        </li>
        <li class="et_social_pinterest">
            <a href="#" class="et_social_share_pinterest" rel="nofollow" data-social_name="pinterest"
                data-post_id="386" data-social_type="share" data-location="sidebar">
                <i class="et_social_icon et_social_icon_pinterest"></i>

                <div class="et_social_count">
                    <span>3k</span>
                </div>
                <span class="et_social_overlay"></span>
            </a>
        </li>
        <li class="et_social_gmail">
            <a href="https://mail.google.com/mail/u/0/?view=cm&#038;fs=1&#038;su=Inspiration%20Gallery&#038;body=https%3A%2F%2Fpacklane.com%2Fblog%2Finspiration-gallery&#038;ui=2&#038;tf=1"
                class="et_social_share" rel="nofollow" data-social_name="gmail" data-post_id="386"
                data-social_type="share" data-location="sidebar">
                <i class="et_social_icon et_social_icon_gmail"></i>


                <span class="et_social_overlay"></span>
            </a>
        </li>
        <li class="et_social_linkedin">
            <a href="http://www.linkedin.com/shareArticle?mini=true&#038;url=https%3A%2F%2Fpacklane.com%2Fblog%2Finspiration-gallery&#038;title=Inspiration%20Gallery"
                class="et_social_share" rel="nofollow" data-social_name="linkedin" data-post_id="386"
                data-social_type="share" data-location="sidebar">
                <i class="et_social_icon et_social_icon_linkedin"></i>


                <span class="et_social_overlay"></span>
            </a>
        </li> --}}
    </ul>
    <span class="et_social_hide_sidebar et_social_icon"></span>
</div>
    <header class="header header--scrolled" id="main-header-js">
        <div class="nav-container">

            <div class="logo-container">
                <a class="header-logo " href="/">
                    <picture><img alt="Packlane" src="{{ asset('KOP/LogotypeKOP-01.jpg') }}"></picture>
                </a>
            </div>

            <div class="nav-bar__item nav-bar__item--menu-toggle">
                <picture><img alt="Menu" id="hamburger-js" src="https://assets.packlane.com/images/hamburger.svg">
                </picture>
            </div>
            <style type="text/css" id="et-social-custom-css">
                .et_monarch .et_social_sidebar_networks li,
                .et_monarch .et_social_mobile li {
                    background: #2d469e;
                }
        
                .et_monarch .et_social_sidebar_networks .et_social_icons_container li:hover,
                .et_monarch .et_social_mobile .et_social_icons_container li:hover {
                    background: #1bdfc7 !important;
                }
        
                .et_social_sidebar_border li {
                    border-color: #1bdfc7 !important;
                }
        
                .et_monarch .widget_monarchwidget .et_social_networks ul li,
                .et_monarch .widget_monarchwidget.et_social_circle li i {
                    background: #fbfbfb !important;
                }
        
                .et_monarch .widget_monarchwidget.et_social_rounded .et_social_icons_container li:hover,
                .et_monarch .widget_monarchwidget.et_social_rectangle .et_social_icons_container li:hover,
                .et_monarch .widget_monarchwidget.et_social_circle .et_social_icons_container li:hover i.et_social_icon {
                    background: #fbfbfb !important;
                }
        
                .et_monarch .widget_monarchwidget .et_social_icon,
                .et_monarch .widget_monarchwidget.et_social_networks .et_social_network_label,
                .et_monarch .widget_monarchwidget .et_social_sidebar_count {
                    color: #164f9e;
                }
        
                .et_monarch .widget_monarchwidget .et_social_icons_container li:hover .et_social_icon,
                .et_monarch .widget_monarchwidget.et_social_networks .et_social_icons_container li:hover .et_social_network_label,
                .et_monarch .widget_monarchwidget .et_social_icons_container li:hover .et_social_sidebar_count {
                    color: #1bdfc7 !important;
                }
        
            </style>
            <nav id="nav-bar-js" class="nav-bar">
                <ul class="nav-bar__menu">
                    <a class="nav-bar__menu--close">
                        <picture><img alt="Menu" id="hamburger-close-js"
                                src="https://assets.packlane.com/images/hamburger-white.svg"></picture>
                    </a>
                    <a class="nav-bar__item nav-bar__item--link " href="{{ route('welcomesdesignabox') }}" id="design-box-link-js">Design a
                        box</a>
                    <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js ">
                        <a class="nav-bar__item nav-bar__item--link ">
                            Packlane Plus
                            <span data-rotate="down"
                                class="nav-bar__dropdown-chevron rotate pcon-chevron-down rotate-down"></span>
                        </a>

                        <ul class="nav-dropdown">
                            <a class="nav-dropdown__link" href="{{route('packlane_plus')}}">Products and services </a>
                            <a class="nav-dropdown__link" href="{{ route('request_quote') }}">Volume discounts</a>
                        </ul>
                    </li>
                    <a class="nav-bar__item nav-bar__item--link " href="{{ route('shiplane') }}">Shiplane</a>
                    <a class="nav-bar__item nav-bar__item--link " href="{{ route('inspirations') }}">Inspiration</a>
                    <a class="nav-bar__item nav-bar__item--link " href="{{ route('customers') }}">Customers</a>
                    <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js ">
                        <a class="nav-bar__item nav-bar__item--link ">
                            About
                            <span data-rotate="down"
                                class="nav-bar__dropdown-chevron rotate pcon-chevron-down rotate-down"></span>
                        </a>

                        <ul class="nav-dropdown">
                            <a class="nav-dropdown__link" href="{{ route('company')}}">Company</a>
                            <a class="nav-dropdown__link" href="{{ route('blogs') }}">Blog</a>
                            <a class="nav-dropdown__link" href="{{ route('faq') }}">FAQ</a>
                            <a class="nav-dropdown__link" href="{{ route('contact_us.id') }}">Contact</a>
                        </ul>
                    </li>

                    @auth
                        <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js ">
                            <a class="nav-bar__item nav-bar__item--link ">
                              My account
                              <span data-rotate="down" class="nav-bar__dropdown-chevron rotate pcon-chevron-down rotate-down"></span>
                            </a>
                            <ul class="nav-dropdown">
                                <a class="nav-dropdown__link" href="{{ route('dashboard') }}">My Orders</a>
                                <a class="nav-dropdown__link" href="{{ route('logouts') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Sign Out
                            </a>
                            <form id="logout-form" action="{{ route('logouts') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            </ul>
                          </li>
                    @endauth
				@guest
                    <a class="nav-bar__item nav-bar__item--link " href="{{ route('auth_user.id') }}">Sign In</a>
                    <a class="nav-bar__item nav-bar__item--link  nav-bar__item--signup-link" href="{{ route('rgstr.id') }}">Sign up</a>
                    {{-- <li id="menu-item-944" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-944 et-show-dropdown et-hover"><a href="{{ route('auth_user.id') }}">Sign In</a></li> --}}
				@endguest

                </ul>
            </nav>

        </div>

    </header>
    <div class="container flash-container">
    </div>

    <div class="wrapper" id="packlane">
        <section class="hero homepage">
            <div class="hero__content">
                <div class="hero__image">
                    <picture><img
                            src="https://assets.packlane.com/BUOPLPJhijaexYOPF2qvVmy_9uv_6SmzVWrzD3kTUFw/w:1000/fn:homepage-hero/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2hvbWVwYWdlLWhlcm8uanBn.jpg">
                    </picture>
                </div>
                <div class="hero__data">
                    <div class="hero__text">
                        <h1 class="hero__title">Create custom packaging and boxes</h1>
                        <h2 class="hero__subtitle">Custom packaging and boxes can turn your brand into the total
                            package with full customization, instant quoting, and fast turnarounds.</h2>
                        <a href="#choose-style" class="btn btn--white">Choose your packaging style</a>
                    </div>
                </div>
            </div>
    
            <div class="hero__brands hero__footer">
                <h3>Trusted by over 25,000 brands</h3>
                    <ul>
                        <li><picture><img alt="Konimex" width="430px" height="37px" src="https://vpn.krisanthium.com:7070/kop/public/KOP/knmex.png"></picture>
                          </li><li><picture><img alt="Danone" width="450px" height="50px" src="https://vpn.krisanthium.com:7070/kop/public/KOP/danone-2.svg"></picture>
                            </li><li><picture><img alt="Nestle" width="690px" height="255px" src="https://vpn.krisanthium.com:7070/kop/public/KOP/Nestlé-Logo.wine.svg"></picture>
                                </li><li><picture><img alt="Nutricia" width="445px" height="9px" src="https://vpn.krisanthium.com:7070/kop/public/KOP/ntrcia.png"></picture>
                                  </li><li><picture><img alt="Maspion" width="500px" height="9px" src="https://vpn.krisanthium.com:7070/kop/public/KOP/maspion.png"></picture>
                                    </li><li><picture><img alt="Campina" width="550px" height="30px" src="https://vpn.krisanthium.com:7070/kop/public/KOP/cmpn.png"></picture>
                                      </li><li><picture><img alt="Miwon" width="450px" height="30px" src="https://vpn.krisanthium.com:7070/kop/public/KOP/logomiwon.png"></picture>
                                  </li><li><picture><img alt="Gudang garam" width="445px" height="30px" src="https://vpn.krisanthium.com:7070/kop/public/KOP/gg.png"></picture> 
                              </li><li><picture><img alt="Frisian Flag" width="580px" height="73px" src="https://vpn.krisanthium.com:7070/kop/public/KOP/frisianflag.png"></picture> 
                            </li><li><picture><img alt="Lotte" width="455px" height="9px" src="https://vpn.krisanthium.com:7070/kop/public/KOP/Lotte_logo.png"></picture> 
                              </li><li><picture><img alt="Kali sari" width="745px" height="30px" src="https://vpn.krisanthium.com:7070/kop/public/KOP/body-bus-bright-368x96.png"></picture> 
                              </li><li><picture><img alt="ABC" width="430px" height="40px" src="https://vpn.krisanthium.com:7070/kop/public/KOP/ABC_FOOD.png"></picture>
                                </li><li><picture><img alt="Manohara asri" width="595px" height="78px" src="https://vpn.krisanthium.com:7070/kop/public/KOP/logo-manohara-asri.png"></picture> 
                        </li><li><picture><img alt="Mega surya mas" width="700px" height="27px" src="https://vpn.krisanthium.com:7070/kop/public/KOP/iboe.png"></picture> 
                    </li>
                </ul>
            </div>
        </section>
    
        <section class="style" id="choose-style">
            <h2 class="sectionTitle">Choose your custom packaging style</h2>
            <ul class="style__carousel">
                <li class="styleBox box active">
                    <div class="styleBox__content">
                        <div class="styleBox__image">
                            <picture><img alt="Packlane - Mailer Box" class="styleBox__3d styleBox-mailer"
                                    loading="lazy"
                                    src="https://assets.packlane.com/U9fKEiQE5bAcyEUnISimEM6pFBQ0AJb4Co6NvtCS6IA/w:700/ext:png/fn:3d-custom-mailer-box-4d05192912461847fa77e6f162d8e10b/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzLzNkLWN1c3RvbS1tYWlsZXItYm94LTRkMDUxOTI5MTI0NjE4NDdmYTc3ZTZmMTYyZDhlMTBiLnBuZw.png"
                                    style="margin-top: 56px"></picture>
                        </div>
                        <div class="styleBox__data">
                            <a>
                                <h3 class="styleBox__name">Mailer Box</h3>
                            </a>
                            <a href="{{ route('bulkmailerboxs.id') }}" class="smallCTA--blue">Learn more</a>
                            <a href="{{ route('bulkmailerboxs.id') }}" class="btn btn--white">Meet our mailer</a>
                        </div>
                    </div>
                    <a href="/products/mailer-box">
                    </a>
                    <div class="styleBox__overlay"><a href="/products/mailer-box">
                            <div class="styleBox__image">
                                <picture><img alt="Packlane - Mailer Box" class="styleBox__icon" loading="lazy"
                                        src="https://assets.packlane.com/images/ico-m-mailer.svg"></picture>
                            </div>
                        </a>
                        <div class="styleBox__data"><a href="/products/mailer-box">
                                <h3 class="styleBox__name">Mailer Box</h3>
                            </a><a href="{{ route('bulkmailerboxs.id') }}" class="smallCTA--blue">Learn more</a>
                            <p class="styleBox__description">A durable and stylish corrugated cardboard mailer box
                                that's great for shipping. Perfect for subscription boxes, gift boxes, and
                                e-commerce packaging.</p>
                            <a href="{{ route('bulkmailerboxs.id') }}" class="btn btn--gray">Meet our mailer</a>
                        </div>
                    </div>
    
                </li>
                <li class="styleBox box">
                    <div class="styleBox__content">
                        <div class="styleBox__image">
                            <picture><img alt="Packlane - Classic Carton"
                                    class="styleBox__3d styleBox-folding-carton" loading="lazy"
                                    src="https://assets.packlane.com/WkQBDN-BdwYX8ZnidHEqweXbmrJc5cDdDjgye3QPcN0/w:700/ext:png/fn:3d-custom-folding-carton-37a254b480f3cddb55cf518895afa929/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzLzNkLWN1c3RvbS1mb2xkaW5nLWNhcnRvbi0zN2EyNTRiNDgwZjNjZGRiNTVjZjUxODg5NWFmYTkyOS5wbmc.png"
                                    style="margin-top: 40px"></picture>
                        </div>
                        <div class="styleBox__data">
                            <a>
                                <h3 class="styleBox__name">Product Box</h3>
                            </a>
                            <a href="/products/product-boxes" class="smallCTA--blue">Learn more</a>
                            <a href="{{ route('product_boxes') }}" class="btn btn--white">pilih box produkmu</a>
                        </div>
                    </div>
                    <a href="/products/product-boxes">
                    </a>
                    <div class="styleBox__overlay"><a href="/products/product-boxes">
                            <div class="styleBox__image">
                                <picture><img alt="Packlane - Classic Carton" class="styleBox__icon" loading="lazy"
                                        src="https://assets.packlane.com/images/ico-m-carton.svg"></picture>
                            </div>
                        </a>
                        <div class="styleBox__data"><a href="/products/product-boxes">
                                <h3 class="styleBox__name">Product Box</h3>
                            </a><a href="/products/product-boxes" class="smallCTA--blue">Learn more</a>
                            <p class="styleBox__description">Command attention on retail shelves with our product
                                boxes made from SBS paperboard. Perfect for beauty packaging, supplements, and
                                chocolate.</p>
                            <a href="{{ route('product_boxes') }}" class="btn btn--gray">BOX PRODUK</a>
                        </div>
                    </div>
    
                </li>
                <li class="styleBox box">
                    <div class="styleBox__content">
                        <div class="styleBox__image">
                            <picture><img alt="Packlane - Shipping Box" class="styleBox__3d styleBox-shipping-box"
                                    loading="lazy"
                                    src="https://assets.packlane.com/T5gSxiqYRa043i5PJ3mRzwaFVFhG-HiiJpE_5P4tGaY/w:700/ext:png/fn:3d-custom-shipping-box-dd24bbbca19885d1b009657b588b3a2c/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzLzNkLWN1c3RvbS1zaGlwcGluZy1ib3gtZGQyNGJiYmNhMTk4ODVkMWIwMDk2NTdiNTg4YjNhMmMucG5n.png">
                            </picture>
                        </div>
                        <div class="styleBox__data">
                            <a>
                                <h3 class="styleBox__name">Shipping Box</h3>
                            </a>
                            <a href="/products/shipping-box" class="smallCTA--blue">Learn more</a>
                            <a href="/products/shipping-box" class="btn btn--white">Meet our shipper</a>
                        </div>
                    </div>
                    <a href="/products/shipping-box">
                    </a>
                    <div class="styleBox__overlay"><a href="/products/shipping-box">
                            <div class="styleBox__image">
                                <picture><img alt="Packlane - Shipping Box" class="styleBox__icon" loading="lazy"
                                        src="https://assets.packlane.com/images/ico-m-shipper.svg"></picture>
                            </div>
                        </a>
                        <div class="styleBox__data"><a href="/products/shipping-box">
                                <h3 class="styleBox__name">Shipping Box</h3>
                            </a><a href="/products/shipping-box" class="smallCTA--blue">Learn more</a>
                            <p class="styleBox__description">Our custom corrugated cardboard shipping boxes are
                                strong and seriously durable. Perfect for shipping large or heavy items but also an
                                excellent choice to protect fragile items.</p>
                            <a href="/products/shipping-box" class="btn btn--gray">Meet our shipper</a>
                        </div>
                    </div>
    
                </li>
                <li class="styleBox box">
                    <div class="styleBox__content">
                        <div class="styleBox__image">
                            <picture><img alt="Packlane - Econoflex Shipping Box"
                                    class="styleBox__3d styleBox-econoflex" loading="lazy"
                                    src="https://assets.packlane.com/hsYYt6BxGcvGMAO8Cw0JqyI9DKX8P8tUw6c5_AYuB4Q/w:700/ext:png/fn:3d-custom-econoflex-shipping-box-6c79bd6bf17712d5212bb3dc26855623/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzLzNkLWN1c3RvbS1lY29ub2ZsZXgtc2hpcHBpbmctYm94LTZjNzliZDZiZjE3NzEyZDUyMTJiYjNkYzI2ODU1NjIzLnBuZw.png">
                            </picture>
                        </div>
                        <div class="styleBox__data">
                            <a>
                                <h3 class="styleBox__name">Econoflex Shipping Box</h3>
                            </a>
                            <a href="/products/eco-friendly-shipping-box" class="smallCTA--blue">Learn more</a>
                            <a href="/products/eco-friendly-shipping-box" class="btn btn--white">Econoflex</a>
                        </div>
                    </div>
                    <a href="/products/eco-friendly-shipping-box">
                    </a>
                    <div class="styleBox__overlay"><a href="/products/eco-friendly-shipping-box">
                            <div class="styleBox__image">
                                <picture><img alt="Packlane - Econoflex Shipping Box" class="styleBox__icon"
                                        loading="lazy"
                                        src="https://assets.packlane.com/images/ico-m-econoflex-2b27a08cf609630232f0ca0574a50029.svg">
                                </picture>
                            </div>
                        </a>
                        <div class="styleBox__data"><a href="/products/eco-friendly-shipping-box">
                                <h3 class="styleBox__name">Econoflex Shipping Box</h3>
                            </a><a href="/products/eco-friendly-shipping-box" class="smallCTA--blue">Learn more</a>
                            <p class="styleBox__description">Ultra affordable and Eco-Friendly. Our Econoflex
                                shipping boxes are made from 100% recycled and recyclable Kraft with print quality
                                that rivals flexo. They're sturdy enough for bulky items and a no-brainer for your
                                budget.</p>
                            <a href="/products/eco-friendly-shipping-box" class="btn btn--gray">Econoflex</a>
                        </div>
                    </div>
    
                </li>
            </ul>
        </section>
    
        <section class="howItWorks">
            <svg version="1.1" id="bg-circle" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="438px" height="438px"
                viewBox="0 0 438 438" enable-background="new 0 0 438 438" xml:space="preserve">
                <path id="circle" fill="none" stroke="#FCE5ED" stroke-width="40" stroke-linecap="round"
                    stroke-linejoin="round" d="M418,219
    c0,109.9-89.1,199-199,199S20,328.9,20,219S109.1,20,219,20S418,109.1,418,219L418,219z"></path>
            </svg>
    
            <svg version="1.1" id="bg-triangle" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="578px" height="411px"
                viewBox="0 0 578 411" enable-background="new 0 0 578 411" xml:space="preserve">
                <polygon id="triangle" fill="none" stroke="#D1F9F4" stroke-width="40" stroke-linecap="round"
                    stroke-linejoin="round" points="
    426.8,389.2 554.4,21.8 23.6,62 "></polygon>
            </svg>
    
            <svg version="1.1" id="bg-lines" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="575px" height="479px"
                viewBox="0 0 575 479" enable-background="new 0 0 575 479" xml:space="preserve">
                <path id="lines" fill="none" stroke="#FEF5DD" stroke-width="40" stroke-linecap="round"
                    stroke-linejoin="round" d="M20,266.6
    L376.3,20 M107.8,362.5l356.3-246.6 M198.2,458.3l356.3-246.6"></path>
            </svg>
    
            <div class="howItWorks__content">
                <h2 class="sectionTitle sectionTitle--hasSub">How it works</h2>
                <p class="section-subtitle section-subtitle--center">Select a packaging style, quantity, and choose
                    from custom or stock sizes – then start designing your custom boxes. Add customization options
                    like images, text, and any color your brand requires. As you design you'll see an instant quote
                    so you know exactly what your final order will come to.</p>
                <div class="howItWorks__container">
                    <div class="howItWorks__video">
                        {{-- <video loop="" class="demo-video" width="100%" muted="muted" playsinline="">
                            <source src="https://assets.packlane.com/images/design-demo-v3.mp4" type="video/mp4">
                        </video> --}}
                        <a href="{{ route('rgstr.id') }}" class="btn btn--white btn--video">Get started now</a>
                    </div>
                </div>
    
                <div class="iconFeatures">
                    <div class="iconFeatures__item">
                        <div class="iconFeatures__image">
                            <picture><img alt="Tiny minimums. No maximums." loading="lazy"
                                    src="https://assets.packlane.com/images/infinity-icon.svg"></picture>
                        </div>
                        <h4>Tiny minimums. No maximums.</h4>
                        <p>No matter the size of your custom packaging order, you'll get the best boxes at prices to
                            match.</p>
                    </div>
                    <div class="iconFeatures__item">
                        <div class="iconFeatures__image">
                            <picture><img alt="Instant quotes" loading="lazy"
                                    src="https://assets.packlane.com/images/ico-quote.svg"></picture>
                        </div>
                        <h4>Instant quotes</h4>
                        <p>Pick your style, design your boxes, and get an instant quote.</p>
                    </div>
                    <div class="iconFeatures__item">
                        <div class="iconFeatures__image">
                            <picture><img alt="Fast turnarounds" loading="lazy"
                                    src="https://assets.packlane.com/images/ico-fast.svg"></picture>
                        </div>
                        <h4>Fast turnarounds</h4>
                        <p>Eligible orders may ship within 10 days or less with priority turnaround options.</p>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="testimonial-video" id="video-testimonial">
            <div class="testimonial-video__inner">
                <div
                    class="container container--xlarge container--center wrapper flex flex--center space space--large">
                    <h2 class="title title--large u-text-center">
                        See how to succeed with custom packaging
                    </h2>
                    <p class="testimonial-video__copy u-text-center">
                        Watch how Father Time Bread is slicing up the competition by delivering the ultimate
                        unboxing experience with fresh bread shipped directly to customers in custom printed boxes.
                    </p>
                </div>
                <div class="testimonial-video__bg">
                    <div class="flex flex--center wrapper" data-player="">
                        <div class="testimonial-video__video-wrapper" data-play-trigger=""
                            data-video-id="HZwD5SX7a1Q">
                            {{-- <button class="testimonial-video__play-btn" data-play-button="">
                                <svg width="31px" height="36px" viewBox="0 0 31 36" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="UI" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Our-Customers" transform="translate(-851.000000, -1587.000000)">
                                            <g id="Video-1" transform="translate(-24.000000, 1007.000000)">
                                                <g id="play-button" transform="translate(841.000000, 549.000000)">
                                                    <polygon id="Triangle" fill="#F681AB"
                                                        transform="translate(52.500000, 52.500000) rotate(90.000000) translate(-52.500000, -52.500000) "
                                                        points="52.5 40 67 65 38 65"></polygon>
                                                    <polygon id="Triangle" stroke="#2E469E" stroke-width="3"
                                                        stroke-linejoin="round"
                                                        transform="translate(48.500000, 47.500000) rotate(90.000000) translate(-48.500000, -47.500000) "
                                                        points="48.5 35 63 60 34 60"></polygon>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </button> --}}
                            {{-- <div class="testimonial-video__overlay" data-video-overlay=""></div> --}}
                            {{-- <div id="video-player" class="testimonial-video__iframe"></div> --}}
                        </div>
                    </div>
                </div>
    
            </div>
        </section>
        <section class="featuredDesigns">
            <h2 class="sectionTitle sectionTitle--hasSub">Box design that inspires</h2>
            <p class="section-subtitle section-subtitle--center">We’re here to help with packaging solutions that
                make sense for businesses of any kind. Whether you’re designing custom retail packaging with your
                logo or need corrugated cardboard mailers for your ecommerce biz, there’s lots of inspiration to be
                found for your custom product packaging.</p>
            <div class="featuredDesigns__mobile">
                <div class="featuredDesigns__slides">
                    <picture><img alt="Get inspired" loading="lazy"
                            src="https://assets.packlane.com/ww7hKmlBH0xeqNwtmEa2DGPF1APADczEaoWWtd_1xbc/w:400/fn:folding-carton-boxes-7d1d60486958747f81e1cc8bf79e4aaf/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2ZvbGRpbmctY2FydG9uLWJveGVzLTdkMWQ2MDQ4Njk1ODc0N2Y4MWUxY2M4YmY3OWU0YWFmLmpwZw.jpg">
                    </picture>
                </div>
                <!-- <div class="featuredDesigns__arrow featuredDesigns__arrow--next"></div>
    <div class="featuredDesigns__arrow featuredDesigns__arrow--prev"></div> -->
            </div>
            <div class="designsGrid designsGrid--six">
                <div class="designsGrid__col designsGrid__col--left">
                    <div
                        class="designsGrid__item designsGrid__item--top designsGrid__item--left designsGrid__item--small">
                        <a href="{{ route('bulkmailerboxs.id') }}">
                            <div class="designsGrid__square">
                                <picture><img data-responsive-background-image="true" loading="lazy"
                                        src="https://assets.packlane.com/B5NzSk4-vAyoPYVRZIhQRCAMbdQIbA-LLJ9uBcjnExc/w:400/fn:mailer-box-employee-welcome-kit-2a77d778d0619d4a00bde875b2cdeea4/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL21haWxlci1ib3gtZW1wbG95ZWUtd2VsY29tZS1raXQtMmE3N2Q3NzhkMDYxOWQ0YTAwYmRlODc1YjJjZGVlYTQuanBn.jpg"
                                        style="background-image: url(&quot;https://assets.packlane.com/B5NzSk4-vAyoPYVRZIhQRCAMbdQIbA-LLJ9uBcjnExc/w:400/fn:mailer-box-employee-welcome-kit-2a77d778d0619d4a00bde875b2cdeea4/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL21haWxlci1ib3gtZW1wbG95ZWUtd2VsY29tZS1raXQtMmE3N2Q3NzhkMDYxOWQ0YTAwYmRlODc1YjJjZGVlYTQuanBn.jpg&quot;);">
                                </picture>
                                <div class="designsGrid__overlay">
                                    <div class="designsGrid__data">
                                        <h2>Mailer Box</h2>
                                        <div class="smallCTA--white">Learn More</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div
                        class="designsGrid__item designsGrid__item--top designsGrid__item--right designsGrid__item--small">
                        <a href="/products/product-boxes">
                            <div class="designsGrid__square">
                                <picture><img data-responsive-background-image="true" loading="lazy"
                                        src="https://assets.packlane.com/ww7hKmlBH0xeqNwtmEa2DGPF1APADczEaoWWtd_1xbc/w:400/fn:folding-carton-boxes-7d1d60486958747f81e1cc8bf79e4aaf/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2ZvbGRpbmctY2FydG9uLWJveGVzLTdkMWQ2MDQ4Njk1ODc0N2Y4MWUxY2M4YmY3OWU0YWFmLmpwZw.jpg"
                                        style="background-image: url(&quot;https://assets.packlane.com/ww7hKmlBH0xeqNwtmEa2DGPF1APADczEaoWWtd_1xbc/w:400/fn:folding-carton-boxes-7d1d60486958747f81e1cc8bf79e4aaf/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2ZvbGRpbmctY2FydG9uLWJveGVzLTdkMWQ2MDQ4Njk1ODc0N2Y4MWUxY2M4YmY3OWU0YWFmLmpwZw.jpg&quot;);">
                                </picture>
                                <div class="designsGrid__overlay">
                                    <div class="designsGrid__data">
                                        <h2>Product Box</h2>
                                        <div class="smallCTA--white">Learn More</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="designsGrid__item designsGrid__item--bottom designsGrid__item--large">
                        <a href="/products/shipping-box">
                            <div class="designsGrid__square">
                                <picture><img data-loading="lazy" data-responsive-background-image="true"
                                        src="https://assets.packlane.com/cFHkgbpWMkCmYpjtaKhKCJIevqIYNoSFL5Sih3nCLZE/fn:shipper-fd-koyah/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL3Byb2R1Y3RzL3NoaXBwaW5nLWJveC9zaGlwcGVyLWZkLWtveWFoLmpwZw.jpg"
                                        style="background-image: url(&quot;https://assets.packlane.com/cFHkgbpWMkCmYpjtaKhKCJIevqIYNoSFL5Sih3nCLZE/fn:shipper-fd-koyah/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL3Byb2R1Y3RzL3NoaXBwaW5nLWJveC9zaGlwcGVyLWZkLWtveWFoLmpwZw.jpg&quot;);">
                                </picture>
                                <div class="designsGrid__overlay">
                                    <div class="designsGrid__data">
                                        <h2>Shipping Box</h2>
                                        <div class="smallCTA--white">Learn More</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="designsGrid__col designsGrid__col--right">
                    <div class="designsGrid__item designsGrid__item--top designsGrid__item--large active">
                        <a href="/products/mailer-box">
                            <div class="designsGrid__square">
                                <picture><img loading="lazy"
                                        src="https://assets.packlane.com/_nVJI3BA9gYAN4CncQMGLsP8ahNEeFr3VvRwlqzgh1E/w:1000/fn:corrugated-mailer-boxes-58c22bb5a3fa58a63869dadf9b68cf7c/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2NvcnJ1Z2F0ZWQtbWFpbGVyLWJveGVzLTU4YzIyYmI1YTNmYTU4YTYzODY5ZGFkZjliNjhjZjdjLmpwZw.jpg">
                                </picture>
                                <div class="designsGrid__overlay">
                                    <div class="designsGrid__data">
                                        <h2>Mailer Box</h2>
                                        <div class="smallCTA--white">Learn More</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div
                        class="designsGrid__item designsGrid__item--bottom designsGrid__item--left designsGrid__item--small">
                        <a href="/products/shipping-box">
                            <div class="designsGrid__square">
                                <picture><img data-responsive-background-image="true" loading="lazy"
                                        src="https://assets.packlane.com/dAR5xWqiH-l85SuGDWTf4bLXYPmaL7IsCBLknNmxkoc/w:400/fn:corrugated-printed-shipping-boxes-3490fc12def12cdab95155cd05bd3f6b/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2NvcnJ1Z2F0ZWQtcHJpbnRlZC1zaGlwcGluZy1ib3hlcy0zNDkwZmMxMmRlZjEyY2RhYjk1MTU1Y2QwNWJkM2Y2Yi5qcGc.jpg"
                                        style="background-image: url(&quot;https://assets.packlane.com/dAR5xWqiH-l85SuGDWTf4bLXYPmaL7IsCBLknNmxkoc/w:400/fn:corrugated-printed-shipping-boxes-3490fc12def12cdab95155cd05bd3f6b/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2NvcnJ1Z2F0ZWQtcHJpbnRlZC1zaGlwcGluZy1ib3hlcy0zNDkwZmMxMmRlZjEyY2RhYjk1MTU1Y2QwNWJkM2Y2Yi5qcGc.jpg&quot;);">
                                </picture>
                                <div class="designsGrid__overlay">
                                    <div class="designsGrid__data">
                                        <h2>Shipping Box</h2>
                                        <div class="smallCTA--white">Learn More</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div
                        class="designsGrid__item designsGrid__item--bottom designsGrid__item--right designsGrid__item--small">
                        <a href="/products/product-boxes">
                            <div class="designsGrid__square">
                                <picture><img data-responsive-background-image="true" loading="lazy"
                                        src="https://assets.packlane.com/fOyUwoLva4q1vv7vxYwdN3YtepfIWpTgspYTDOA2nx8/w:400/fn:custom-printed-folding-cartons-e512b478f1d5c4a03420f0caf5e8de58/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2N1c3RvbS1wcmludGVkLWZvbGRpbmctY2FydG9ucy1lNTEyYjQ3OGYxZDVjNGEwMzQyMGYwY2FmNWU4ZGU1OC5qcGc.jpg"
                                        style="background-image: url(&quot;https://assets.packlane.com/fOyUwoLva4q1vv7vxYwdN3YtepfIWpTgspYTDOA2nx8/w:400/fn:custom-printed-folding-cartons-e512b478f1d5c4a03420f0caf5e8de58/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2N1c3RvbS1wcmludGVkLWZvbGRpbmctY2FydG9ucy1lNTEyYjQ3OGYxZDVjNGEwMzQyMGYwY2FmNWU4ZGU1OC5qcGc.jpg&quot;);">
                                </picture>
                                <div class="designsGrid__overlay">
                                    <div class="designsGrid__data">
                                        <h2>Product Box</h2>
                                        <div class="smallCTA--white">Learn More</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="moreAboutUs">
            <div class="mediaAndTextModule mediaAndTextModule--shortText">
                <div class="mediaAndTextModule__media">
                    <picture><img alt="More than just a pretty package" class="mediaAndTextModule__img"
                            loading="lazy"
                            src="https://assets.packlane.com/jExsMzb0DS0Q68-jPKykvLHi3XH3jOWKKesLwblbwKY/w:1000/fn:homepage-about/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2hvbWVwYWdlLWFib3V0LmpwZw.jpg">
                    </picture>
                    <div class="mediaAndTextModule__bg"></div>
                </div>
                <div class="mediaAndTextModule__data">
                    <h2>More than just a pretty package</h2>
                    <p>Customizable from the inside out, every custom printed box we create is made just for you –
                        and with your customers in mind. Make a statement in the mail or on display with an unboxing
                        experience unlike any other. Your products deserve custom packaging boxes crafted with
                        sustainable materials, impeccable print quality, and picture-perfect design. Create
                        packaging that wows no matter your use-case, business, or industry.</p>
                    <a href="https://packlane.com/about/#brilliant-boxes" class="btn btn--gray">FIND OUT WHAT MAKES
                        OUR BOXES SPECIAL</a>
                </div>
            </div>
        </section>
    
        <section class="frequently-asked-questions u-mb-80">
            <h2 class="sectionTitle sectionTitle--hasSub">Frequently Asked Questions</h2>
            <p class="section-subtitle section-subtitle--center">
                Below you'll find answers to some common questions around creating a custom box. Every order is
                little different though, so don't hesitate to <a href="/contact">reach out</a> with anything else
                you might be wondering.
            </p>
            <div class="container">
                <div class="faq-container" itemscope="" itemtype="https://schema.org/FAQPage">
    
                    <div class="faq-item" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="faq-item__title" itemprop="name">Can I get an instant quote for my order?</h3>
                        <div>
                            <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="faq-item__copy" itemprop="text">Yes, you can select your size, material,
                                    and quantity on our free 3D design tool to instantly view a quote for your
                                    project. As you upload artwork, add text, or color the background in each panel
                                    of the 3D model, you'll see your Unit Price update in real-time.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="faq-item" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="faq-item__title" itemprop="name">What packaging products can I order from
                            Packlane?</h3>
                        <div>
                            <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="faq-item__copy" itemprop="text">At Packlane, we offer a variety of
                                    packages for you to choose from and customize. Our custom packaging boxes
                                    include Shipping Boxes, Mailer Boxes, and Product Boxes. They can be ordered in
                                    both stock and custom sizes at low minimums. These box styles are perfect for
                                    either retail packaging or ecommerce deliveries. Our Mailer Box and Shipping Box
                                    cardboard products are safe to mail, while our Product Box packages are intended
                                    for display (or to be placed within a shipping-safe box when sent out for
                                    delivery). Get started with our easy-to-use box designer and create custom
                                    printed packaging boxes for your brand today.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="faq-item" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="faq-item__title" itemprop="name">What if I'm designing in Adobe Illustrator?</h3>
                        <div>
                            <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="faq-item__copy" itemprop="text">If you're building your design on one of
                                    our Illustrator templates, you can submit your file on our Dieline Upload tool
                                    and a quote for your project will be sent to you ASAP. You can also email your
                                    dieline to our customer support team and we'll send you back a quote. If you do
                                    not have packaging artwork for your box yet, you can get a rough quote by
                                    applying a solid color on any panels of our 3D design tool where you will want
                                    your design printed.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="faq-item" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="faq-item__title" itemprop="name">How does your 3D box designer work?</h3>
                        <div>
                            <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="faq-item__copy" itemprop="text">If you have individual artwork elements
                                    such as logos, images or text, you can customize your box specifications
                                    directly on our 3D design tool and receive pricing on that same page. As you
                                    build your design on the 3D box model, you will see your Unit Price update in
                                    real-time to reflect any changes that affect your project's pricing. Once you
                                    have finalized your design, you can proceed directly to checkout, save your
                                    design for later, or even share your design with friends or colleagues!</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="faq-item" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="faq-item__title" itemprop="name">What is the turnaround time on my order?</h3>
                        <div>
                            <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="faq-item__copy" itemprop="text">Our Standard turnaround for most custom
                                    packaging orders is around 10 business days and Rush turnaround is 7 business
                                    days. These turnarounds do not include transit time (1 - 7 business days
                                    depending on your location). Special custom or bulk orders may require a few
                                    extra days to get setup and produced. Please note that during extremely busy
                                    times of year some orders may take longer to complete. While delivery estimates
                                    cannot be guaranteed, all dates shown at checkout are the quickest estimate we
                                    offer. If your delivery date is time sensitive, we highly recommend choosing
                                    Rush production and expedited shipping for your box orders.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="faq-item" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="faq-item__title" itemprop="name">What happens after I place my order? Do I get a
                            proof before printing?</h3>
                        <div>
                            <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="faq-item__copy" itemprop="text">After checkout, our dedicated Prepress
                                    team will review your design for any technical concerns and send a 2D digital
                                    proof of your custom boxes to your email within 24 hours. If any changes need to
                                    be made, you can send a note directly to our Prepress team through the proof
                                    page and they'll be happy to help with finalizing your design for printing.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="faq-item" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="faq-item__title" itemprop="name">Will I see a proof for my order?</h3>
                        <div>
                            <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="faq-item__copy" itemprop="text">All new orders will receive a digital
                                    proof within 24 hours of completing the checkout process.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="faq-item" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="faq-item__title" itemprop="name">How do I know if my art is printable?</h3>
                        <div>
                            <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="faq-item__copy" itemprop="text">Our dedicated in-house Prepress team will
                                    review your custom box design for any technical concerns (artwork resolution,
                                    blurriness, splits, thin lines, and bleeds) and if found, will note them for
                                    your attention in the proof. If you're unsure of how to fix any printing
                                    concerns that are noted, our Prepress representatives are happy to help you
                                    through the process. It's important to keep in mind that our team does not check
                                    for spelling or grammar errors, nor do they provide any subjective feedback on
                                    design content.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="faq-item" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="faq-item__title" itemprop="name">Can you print inside the boxes?</h3>
                        <div>
                            <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="faq-item__copy" itemprop="text">Yes! We can print on the inside of any of
                                    our corrugated box styles. This includes Mailers, Shipping Boxes, and Tuck Tops
                                    (our secret menu product!). Product Boxes are currently limited to printing on
                                    the exterior only. You can even use our online box designer to design the inside
                                    of your custom boxes. For Shippers and Tuck Tops, we currently require a 2D
                                    dieline template be submitted for both the interior and exterior so we can set
                                    up your order as a custom order. You can also submit designs this way for our
                                    Mailer boxes, if you prefer to build on a 2D Illustrator template instead of our
                                    free 3D box design tool.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="faq-item" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="faq-item__title" itemprop="name">What choices affect my pricing?</h3>
                        <div>
                            <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="faq-item__copy" itemprop="text">As a high-volume producer with scale
                                    economies, Packlane provides the industry's most competitive prices on custom
                                    printed boxes available. Pricing is generally a factor of five things:
                                    dimensions, box style, ink coverage on the box, box material, and quantity
                                    (higher quantities = bulk savings). Custom orders of 5,000 or more can be
                                    eligible for volume discounts. If you have questions about pricing or choices
                                    that can affect your custom packaging order, our customer support team is happy
                                    to help!</p>
                            </div>
                        </div>
                    </div>
                </div><!-- FAQ Container -->
            </div>
        </section>
    
        <section class="patternBanner patternBanner--orange">
            <div class="patternBanner__content">
                <h2>Request a quote</h2>
                <p>Get a custom quote for orders of 2,000 boxes or more.</p>
                <a href="{{ route('request_quote') }}" class="btn btn--blue">Request Quote</a>
            </div>
        </section>
        <link rel="prefetch"
            href="https://assets.packlane.com/js/packlane_web.box_designer.new-37a955de44138439d8ab6804d9e77f13.js?vsn=d">
        <link rel="prefetch"
            href="https://assets.packlane.com/js/fabric.min-9e88ca1a868c7cb8e24d4f59ac9fd84f.js?vsn=d">
    </div>
    <script src="https://assets.packlane.com/js/packlane_web.page.index-ca6be41986f40c162490298080aa410b.js?vsn=d">
    </script>

    <style>

        #fs .fs-footer:before {
            border-right: 10px solid #646464;
            border-top: 16px solid transparent;
            content: "";
            display: block;
            height: 0;
            left: -10px;
            position: absolute;
            top: 0;
            width: 7px;
        }
    </style>

    <footer id="fs" style="background: #0e0e0e;
        border-top: 4px solid #0e0e0e;
        font-size: 0.9em;
        margin-top: 50px;
        padding: 70px 0 0;
        position: relative;
        clear: both;">
            <div class="container">
                <div class="row">
                    <div style="    background: #999;
                    position: absolute;
                    margin: -90px 0 0 14px;
                    padding: 10px 20px 6px 20px;">
                        <span>Get in Touch</span>
                    </div>
						<div class="col-md-12">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> Jln. Rungkut Industri III / 19, Surabaya 60293, East Java - Indonesia</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (031) 8438182</p></li>
									<li><p><i class="fa fa-fax"></i> <strong>Fax:</strong> (031) 8432186</p></li>
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:printing@krisanthium.com">printing@krisanthium.com</a></p></li>
									<li><p><i class="fa fa-external-link-square"></i> <strong>URL:</strong> <a href="index.html">www.krisanthium.com</a></p></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div style="background: #060606;
                border-top: 4px solid #060606;
                margin-top: 40px;
                padding: 30px 0 10px;">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="index.html" class="logo">
									<!--<img alt="Porto Website Template" class="img-responsive" src="img/logo-footer.png">-->
									<img alt="KOP" class="img-responsive" src="{{ asset('KOP/logoKOPf.jpg') }}">
								</a>
							</div>
							<div class="col-md-7">
								<p>© Copyright 2021. All Rights Reserved.</p>
							</div>
							<div class="col-md-4">
                            <nav id="sub-menu">
                                <a href="https://www.instagram.com/krisanthiumoffsetprinting/" class="logo">
                                    <img alt="IG KOP" class="img-responsive" src="{{ asset('KOP/icon_instagram.png') }}" width="60px">	
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <script src="{{ asset('packlane-assets/bundle-apps.js') }}"></script>
    <script src="{{ asset('packlane-assets/storefront.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.apear.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.easing.js') }}"></script>
    <script src="{{ asset('js/vendor/bts.js') }}"></script>
    <script src="{{ asset('js/vendor/common.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.stellar.js') }}"></script>
    <script src="{{ asset('js/vendor/magnific-jquery.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('js/vendor/isotype.js') }}"></script>
    <script src="{{ asset('js/vendor/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/vendor/themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('js/vendor/themepunch.revolutions.min.js') }}"></script>
    <script src="{{ asset('js/vendor/flipshow.js') }}"></script>
    <script src="{{ asset('js/view.home.js') }}"></script>
    <script src="{{ asset('js/vendor/theme.init.js') }}"></script>
    </body>
</html>
