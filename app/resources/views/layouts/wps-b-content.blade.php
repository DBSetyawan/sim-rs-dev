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
        <link crossorigin="" href="{{ asset('css/pweb-box-design.css') }}" rel="stylesheet"></link>

    <title>Custom Boxes &amp; Custom Packaging | Design your own boxes | PT. KOP</title>
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
        <link crossorigin="" href="{{ asset('packlane-assets/app-bundle.css')}}" rel="stylesheet">
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
            box-shadow: 0 0 25px 0 rgba(5, 151, 230, 0.748);
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
            box-shadow: 0 0 80px 20px rgba(5, 151, 230, 0.748);
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
            box-shadow: 0 0 80px 0 rgba(5, 151, 230, 0.748);
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
            box-shadow: 0 0 80px 0 rgba(5, 151, 230, 0.748);
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
            box-shadow: 0 0 80px 0 rgba(5, 151, 230, 0.748);
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
            box-shadow: 0 0 80px 0 rgba(5, 151, 230, 0.748);
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
            background-color: #0909bd
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

<body class="page" style="position: sticky;top: 0;" >
    <header class="header " id="main-header-js" style=" position: sticky;top: 0;">
        <div class="nav-container">

            <div class="logo-container">
                <a class="header-logo " href="{{ route('dashboard') }}">
                    <picture><img alt="Packlane" src="{{ asset('KOP/LogotypeKOP-01.jpg') }}"></picture>
                </a>
            </div>
  
            <div class="nav-bar__item nav-bar__item--menu-toggle">
                <picture><img alt="Menu" id="hamburger-js" src="https://assets.packlane.com/images/hamburger.svg">
                </picture>
            </div>
  
            <nav id="nav-bar-js" class="nav-bar" style="position: sticky; top: 0;">
              <ul class="nav-bar__menu">
                  <a class="nav-bar__menu--close">
                      <picture><img alt="Menu" id="hamburger-close-js"
                              src="https://assets.packlane.com/images/hamburger-white.svg"></picture>
                  </a>
                  <a class="nav-bar__item nav-bar__item--link " href="{{ route('dashboard') }}" id="design-box-link-js">Dashboard</a>
                  <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js ">
                      <a class="nav-bar__item nav-bar__item--link ">
                          Service And Treatment
                          <span data-rotate="down"
                              class="nav-bar__dropdown-chevron rotate pcon-chevron-down rotate-down"></span>
                      </a>
  
                      <ul class="nav-dropdown">
                          <a class="nav-dropdown__link" href="{{ route('oss.id')}}">One Stop Service </a>
                          <a class="nav-dropdown__link" href="{{ route('plotter.id')}}">Plotter & Mock Up </a>
                          <a class="nav-dropdown__link" href="{{ route('gmg.id')}}">GMG Color Printing</a>
                          <a class="nav-dropdown__link" href="{{ route('hembos.id')}}">Hotprint & Emboss</a>
                          <a class="nav-dropdown__link" href="{{ route('membos.id')}}">Micro Emboss</a>
                          <a class="nav-dropdown__link" href="{{ route('uv.id')}}">UV Spot</a>
                          <a class="nav-dropdown__link" href="{{ route('packlane_plus')}}">Products and services </a>
                          <a class="nav-dropdown__link" href="{{ route('request_quote') }}">Volume discounts</a>
                      </ul>
                  </li>
                  <a class="nav-bar__item nav-bar__item--link " href="{{ route('shiplane') }}">Shiplane</a>
                  <a class="nav-bar__item nav-bar__item--link " href="{{ route('inspirations') }}">Inspiration</a>
                  <a class="nav-bar__item nav-bar__item--link " href="{{ route('customers') }}">Customers</a>
                  <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js ">
                      <a class="nav-bar__item nav-bar__item--link ">
                          About
                          <span data-rotate="down" class="nav-bar__dropdown-chevron rotate pcon-chevron-down rotate-down"></span>
                      </a>
                      <ul class="nav-dropdown">
                          <a class="nav-dropdown__link" href="{{ route('company') }}">Company</a>
                          <a class="nav-dropdown__link" href="{{ route('blogs') }}">Blog</a>
                          <a class="nav-dropdown__link" href="{{ route('cvm.id') }}">Vision & Mission</a>
                          <a class="nav-dropdown__link" href="{{ route('ca_certificates.id') }}">Company Archivement & Certificates</a>
                          <a class="nav-dropdown__link" href="{{ route('partnership.id') }}">Partnership</a>
                          <a class="nav-dropdown__link" href="{{ route('ourteam.id') }}">Our Team</a>
                          <a class="nav-dropdown__link" href="{{ route('woy.id') }}">We Offer You</a>
                          <a class="nav-dropdown__link" href="{{ route('wbad.id') }}">We Build A Design</a>
                          <a class="nav-dropdown__link" href="{{ route('faq') }}">FAQ</a>
                          <a class="nav-dropdown__link" href="{{ route('prf_scs.id') }}">Contact Us</a>
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
                              <a class="nav-dropdown__link" href="#">Username, {{ Auth::user()->name }}</a>
                              <a class="nav-dropdown__link" href="{{ url('/') }}">My Orders</a>
                          @if(Auth::user()->accessable == "admin")
                              <a class="nav-dropdown__link" href="{{ route('mst.evt.id') }}">Panel Admin</a>
                          @endif
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
    </header> <!-- #main-header -->
    <div class="container flash-container">
    </div>

    @yield('content')
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
				<div class="fs-footer" style="background: #060606;
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
<script src=" {{ asset('js/packlane_web.box_designer.new-9c8634f1dd18c5697a9e7a0b61bcf81d.js')}}"></script>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>
