<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
        content="See why over 25,000 brands trust Packlane to help them grow and build successful businesses. Find out how custom packaging can work for your brilliant brand.">

    <link rel="shortcut icon" type="image/png"
    href="{{ asset('KOP/logoKOPfooter.PNG') }}">

    <title>Customer Stories | KOP</title>

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

    <!-- OpenGraph -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@packlane" />
    <meta name="yandex-verification" content="35fa519272a729b3" />
    <!-- End of OpenGraph -->

    <meta name="msapplication-config" content="none" />

    <!-- Google Tag Manager -->

    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WXCJ48C');

    </script>

    <!-- End Google Tag Manager -->
    <script src="{{ asset('packlane-assets/rollbar.js') }}"></script>

    <script id="packlane-globals">
        var PACKLANE = {
            "action": "index",
            "assetPath": "https://assets.packlane.com/",
            "barePage": false,
            "campaign": null,
            "controller": "testimonial",
            "csrfToken": "SWE-GTgEOhl7YF0oeiACPid3Kz4eMhx5xVJhBNPaMU5O3lziiEOwtHQ3",
            "environment": "prod",
            "inventoryId": null,
            "ip_address": "103.150.111.75",
            "isProduction": true,
            "orderId": null,
            "request_path": "/customers",
            "scriptTagId": "packlane-globals",
            "version": "b5b1ba6ff8cd5090bb86e792deccf8a39a33b636"
        };
        // temporary place for initial data for redux store
        // used to init store when calling `createStore(reduceers, initialState)`
        // if not `:store_init` in `conn`, just sets `STORE_INIT` to `null`
        var STORE_INIT = "e30=";

    </script>

</head>

<body data-controller="testimonial" data-action="index" class="testimonial " id="index"
    data-csrf="SWE-GTgEOhl7YF0oeiACPid3Kz4eMhx5xVJhBNPaMU5O3lziiEOwtHQ3">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXCJ48C" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="header " id="main-header-js">
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

            <nav id="nav-bar-js" class="nav-bar">
                <ul class="nav-bar__menu">
                  <a class="nav-bar__menu--close">
          <picture><img alt="Menu" id="hamburger-close-js" src="https://assets.packlane.com/images/hamburger-white.svg"></picture>
                  </a>
                  <a class="nav-bar__item nav-bar__item--link " href="{{ route('dashboard') }}" id="design-box-link-js">Design a box</a>
                  <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js ">
                    <a class="nav-bar__item nav-bar__item--link ">
                      Packlane Plus
                      <span data-rotate="down" class="nav-bar__dropdown-chevron rotate pcon-chevron-down rotate-down"></span>
                    </a>
          
                    <ul class="nav-dropdown">
                      <a class="nav-dropdown__link" href="{{ route('packlane_plus')}}">Products and services </a>
                      <a class="nav-dropdown__link" href="{{ route('request_quote') }}">Volume discounts</a>
                    </ul>
                  </li>
                  <a class="nav-bar__item nav-bar__item--link " href="{{ route('shiplane') }}">Shiplane</a>
                  <a class="nav-bar__item nav-bar__item--link " href=" {{ route('inspirations') }}">Inspiration</a>
                  <a class="nav-bar__item nav-bar__item--link " href="{{ route('customers') }}">Customers</a>
                  <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js ">
                    <a class="nav-bar__item nav-bar__item--link ">
                      About
                      <span data-rotate="down" class="nav-bar__dropdown-chevron rotate pcon-chevron-down rotate-down"></span>
                    </a>
          
                    <ul class="nav-dropdown">
                      <a class="nav-dropdown__link" href="{{ route('company') }}">Company</a>
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
                    {{-- <li id="menu-item-944" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-944"><a href="{{ route('auth_user.id') }}">Sign In</a></li> --}}
                @endguest
          
                </ul>
              </nav>

        </div>

    </header>


    <div class="container flash-container">


    </div>

    <main>
        <div class="testimonial-wrapper">
            <div id="app">
                <header class="customer-header">
                    <div class="container container--xxlarge container--center">
                        <div class="header__column flex flex--justify flex--middle">
                            <div
                                class="header__content-column flex__column wrapper flex__column--12 flex__column--5@large space space--large">
                                <svg xmlns="http://www.w3.org/2000/svg" width="144" height="147" viewBox="0 0 144 147">
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path fill="#f681ab"
                                                        d="M73.985 100.757c-1.725 1.744-4.11 2.73-6.603 2.73-2.493 0-4.878-.986-6.602-2.73L36.204 75.956c-5.614-5.437-7.007-13.743-3.457-20.621 2.653-5.137 7.693-8.725 13.546-9.645 5.853-.92 11.806.942 15.999 5.003l5.09 4.902 5.091-4.931c4.193-4.061 10.145-5.923 15.999-5.003 5.853.92 10.893 4.508 13.545 9.644 3.55 6.878 2.158 15.185-3.456 20.621z" />
                                                </g>
                                                <g>
                                                    <path fill="none" stroke="#25379c" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="50" stroke-width="4"
                                                        d="M84.392 99.307a8.846 8.846 0 0 1-12.78 0L47.83 74.506a17.875 17.875 0 0 1-3.346-20.621v0a17.844 17.844 0 0 1 28.591-4.641l4.927 4.9v0l4.927-4.93a17.844 17.844 0 0 1 28.591 4.641v0a17.875 17.875 0 0 1-3.345 20.621z" />
                                                </g>
                                                <g>
                                                    <path fill="none" stroke="#25379c" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="50" stroke-width="4"
                                                        d="M20.47 30.803v44.962c0 21.985 9.611 51.965 51.17 67.986a17.686 17.686 0 0 0 12.71 0c41.541-15.991 51.17-46.19 51.17-67.986V30.803a8.776 8.776 0 0 0-5.121-8.043 127.934 127.934 0 0 0-52.404-10.694A127.934 127.934 0 0 0 25.591 22.76a8.776 8.776 0 0 0-5.12 8.043z" />
                                                </g>
                                            </g>
                                            <g transform="rotate(-37 -249 -366.5)">
                                                <path fill="#fad143"
                                                    d="M5.67 6.63l28.303.034.033 28.283-28.302-.034z" />
                                            </g>
                                            <g>
                                                <path fill="#00e2c7"
                                                    d="M127.5 133c9.113 0 16.5-7.387 16.5-16.5s-7.387-16.5-16.5-16.5-16.5 7.387-16.5 16.5 7.387 16.5 16.5 16.5z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <h1 class="title title--xlarge">Our customers</h1>
                                <p class="header__copy">
                                    See why over 25,000 brands trust Packlane to help them grow and build successful
                                    businesses. Find out how custom packaging can work for your brilliant brand.
                                </p>
                            </div>
                            <div
                                class="header__tiles-wrapper wrapper flex__column flex__column--12 flex__column--6@large">
                                <ul class="header__tiles" data-tiles>
                                    <li class="header__tile header__tile--yellow flex flex--center flex--middle">
                                        <!-- Loreal -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 89 17">
                                            <path
                                                d="M2.1 14.1V2.8H.4v12.7h11.4v-1.4H2.1zm6.5-6.7h1.3l2.4-4.5h-1.9L8.6 7.4zM21.7 15c3.5 0 6.7-2.8 6.7-6.3s-2.7-6.5-6.5-6.5-6.6 3-6.6 6.5c-.1 3.5 2.9 6.3 6.4 6.3zM21.8.7c5.1 0 8.7 3.6 8.7 8 0 4.6-3.8 7.9-8.7 7.9-4.7 0-8.6-3.2-8.6-7.9-.1-4.4 3.4-8 8.6-8zm18.6 8.1c.9 0 1.9-.2 2.4-1 .3-.5.4-1.3.2-1.8-.3-.8-1.1-1.5-2.5-1.5h-6.1v4.3h6zm1.6 1.5c1.1 1.7 3.9 5.2 3.9 5.2h-2.3l-3.8-5.3h-5.2v5.3h-1.8V2.8h8c2.7 0 4.2 1.4 4.4 3.7-.1.9-.3 3-3.2 3.8zm29 .4l-3-6.1-3 6.1h6zm-1.8-7.9l6.5 12.7h-2.1l-1.7-3.3h-7.7l-1.6 3.3h-2.2l6.5-12.7h2.3zm7.5 0v12.7h11.4v-1.4h-9.7V2.8h-1.7zM54 .8l-1.5 1.7L57.3.8H54zm-5.9 2h11.3v1.4H50v4h7.1v1.4H50V14h9.4v1.4H48.1V2.8z"
                                                fill="#2e469e" /></svg>

                                    </li>
                                    <li class="header__tile header__tile--turquoise flex flex--center flex--middle">
                                        <!-- shopify -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 25">
                                            <path
                                                d="M71.6 6.3s-2.2 5.6-3.2 8.7h-.1c-.1-1-.9-8.7-.9-8.7h-3.7l2.1 11.6c.1.3 0 .4-.1.6-.4.8-1.1 1.6-1.9 2.1-.7.5-1.4.8-2 1l1 3c.7-.2 2.2-.7 3.4-1.9 1.6-1.5 3.1-3.8 4.6-7.1l4.3-9.3h-3.5zm-8.5-.1h-2.5l.1-.6c.2-1.2.9-2.3 2.1-2.3.6 0 1.1.2 1.1.2l.7-2.8S64 .4 62.7.4c-1.3 0-2.5.4-3.4 1.2-1.2 1-1.8 2.5-2 4l-.1.6h-1.6l-.5 2.7h1.6l-1.9 10h3.5l1.9-10h2.4l.5-2.7zm-15 12.7h3.5L54 6.3h-3.5l-2.4 12.6zM53 .9c-1.1 0-2 .9-2 2 0 1 .7 1.8 1.7 1.8h.1c1.1 0 2-.7 2.1-2 0-1-.8-1.8-1.9-1.8zM40.9 16.5c2 0 3.3-3.2 3.3-5.5 0-.9-.3-1.9-1.4-1.9-1.2 0-2.4 1.5-2.8 3.7l-.6 3.3c0-.1.6.4 1.5.4zM44.4 6C47 6 48 8.1 48 10.6c0 4.3-2.7 8.6-6.9 8.6-1.3 0-2.1-.5-2.1-.5h-.1l-1 5.2h-3.5l2.5-13c.3-1.5.6-3.4.7-4.7h3.1L40.5 8h.1c-.1.1 1.3-2 3.8-2zM28.6 16.4c1.9 0 2.9-3.3 2.9-5.5 0-1-.4-2.1-1.7-2.1-1.9 0-3 3.3-3 5.3.1 1.3.6 2.3 1.8 2.3zM30.4 6c3.3 0 4.8 2.4 4.8 4.9 0 4.4-2.8 8.2-7.1 8.2-3.2 0-4.9-2.2-4.9-4.9.1-4.3 2.9-8.2 7.2-8.2zm-11 0c-1.6 0-2.8.7-3.7 1.9h-.1L17 .8h-3.5L10.1 19h3.5l1.2-6.3c.5-2.3 1.7-3.8 2.8-3.8.8 0 1.1.5 1.1 1.3 0 .5-.1 1.1-.2 1.6l-1.3 7.1h3.5l1.4-7.4c.2-.8.3-1.7.3-2.3 0-2-1.1-3.2-3-3.2zM6.7 11.4c1.4.8 2.5 1.9 2.5 3.4 0 2.8-2.3 4.4-5.4 4.4-2.2 0-3.5-.9-3.5-.9l.9-2.5s1.4.8 2.9.8c1 0 1.5-.5 1.5-1.2 0-.6-.4-1.1-1.5-1.7-1.3-.8-2.3-1.8-2.3-3.2C1.8 8 3.9 6.3 7 6.3c2.2 0 3 .6 3 .6l-.7 2.5s-1-.5-2.2-.5c-1 0-1.6.5-1.6 1.2-.2.4.3.8 1.2 1.3z"
                                                fill="#2e469e" /></svg>

                                    </li>
                                    <li class="header__tile header__tile--pink flex flex--center flex--middle">
                                        <!-- Halo Top -->
                                        <svg id="Layer_3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46.8 48.8">
                                            <style>
                                                .st0 {
                                                    fill: #2e469e
                                                }

                                            </style>
                                            <path class="st0"
                                                d="M5.8 13l1.6.9-.9 1.6-1.6-.9-.6 1.1 4 2.3.7-1.1-1.6-.9.9-1.6 1.6.9.6-1.1-4.1-2.3m3.3-3.4l1.5 4.8 1-.8-.3-.9 1.4-1.2.8.5 1-.9-4.4-2.4-1 .9zm1.4.7l1.3.7-.8.7-.5-1.4zm6-1.1l-1.3-3.4-1.2.4 1.6 4.4 3.4-1.2-.4-1-2.1.8zm5.7-4.9c-1.4 0-2.4 1.1-2.3 2.5 0 1.4 1.1 2.4 2.5 2.3 1.4 0 2.4-1.1 2.3-2.5-.1-1.4-1.2-2.4-2.5-2.3m.1 3.7c-.7 0-1.1-.5-1.2-1.3 0-.8.4-1.3 1.1-1.4.7 0 1.1.5 1.2 1.3 0 .9-.4 1.4-1.1 1.4m12-.4l-4-2-.5.9 1.4.7-1.6 3.2 1.1.6L33 6.7l1.5.7.4-.9zm3.3 2.8c-1-1-2.4-1-3.4 0s-1 2.5 0 3.4c1 1 2.4 1 3.4 0s1-2.5 0-3.4m-.9 2.5c-.6.6-1.2.6-1.7.1s-.4-1.2.1-1.7c.6-.6 1.2-.6 1.7-.1.5.4.5 1.1-.1 1.7m4.9 3.2l-.9-1.8-4.2 2.1.6 1.1 1.3-.7.4.7c.5 1.1 1.4 1.5 2.3 1 .9-.4 1.1-1.3.5-2.4m-1.1 1.4c-.4.2-.6.1-.9-.4l-.3-.7 1.1-.5.3.7c.2.4.1.7-.2.9M17.9 12.7c-.4.2-.7.1-.9-.4-.2-.5-.1-.8.3-1 .4-.2.5-.1.6.1 0 .1 0 .2-.1.2-.1.1-.2 0-.4 0 0 0-.1 0-.1.1-.2.1-.2.2-.1.5.2.3.3.4.5.3.2-.1.3-.2.4-.4l.1.1c.1.2-.1.4-.3.5M19.2 11.1h-.3c-.1.1-.1.2-.1.3l.2.5h.3l.1.2-.7.3-.1-.3.2-.1-.2-.7-.3-.1v-.1l.5-.4.1.4c.1-.3.1-.4.3-.5.2-.1.2 0 .3.1-.2.2-.2.3-.3.4M20.5 11.8c-.5.1-.7-.1-.8-.6-.1-.5.1-.8.5-.9.4-.1.6 0 .7.4v.3l-.9.2c.1.3.2.4.5.3.2 0 .4-.2.5-.3v.1c0 .3-.2.4-.5.5m-.3-1.2c-.2.1-.3.1-.2.4l.6-.2c-.1-.2-.2-.2-.4-.2M22.5 11.5c-.2 0-.2 0-.3-.2-.1.1-.2.3-.4.3s-.4-.1-.4-.3c0-.3.2-.5.8-.6v-.1c0-.1-.1-.2-.3-.2-.1 0-.3.1-.3.1v.1s-.1.1-.2.1h-.1c0-.3.3-.5.6-.5.4 0 .6.1.6.4l.1.6c0 .1 0 .1.1.1h.1v.1c-.1 0-.2.1-.3.1m-.4-.7c-.4.1-.5.2-.5.4 0 .1.1.2.2.2s.3-.1.3-.1v-.5zM24.7 11.5v-.3h.2v-.6c0-.2-.1-.3-.2-.3-.2 0-.3 0-.3.1v.7l.2.1v.2h-.7v-.3h.1v-.6c0-.2 0-.3-.2-.3s-.3 0-.3.1v.7l.2.1v.2H23V11h.2v-.7l-.2-.2V10l.6-.2v.3c.1-.1.2-.3.4-.2.2 0 .4.1.4.3.1-.2.3-.3.5-.2.3 0 .4.2.4.5v.6l.2.1v.2M26.2 11.8c-.5-.1-.6-.4-.5-.9.1-.5.4-.7.9-.6.4.1.5.3.5.7l-.1.2-1-.2c-.1.3 0 .4.3.5h.6v.1c-.2.2-.4.2-.7.2m.2-1.2c-.2 0-.3 0-.4.3l.6.1c.1-.3.1-.4-.2-.4M28.3 11.3c-.1 0-.2-.1-.2-.2-.1 0-.2.1-.3.2l-.2.5.2.2-.1.2-.7-.3.1-.3.2.1.2-.7-.2-.2v-.1h.6l-.1.4c.2-.2.3-.3.5-.2.2.1.2.2.1.3.1.1 0 .1-.1.1M30.1 12l-.2-.1-.8.8-.2.2c-.3.3-.5.3-.7.2-.2-.1-.3-.2-.2-.4.1-.1.1-.1.2-.1.1.1.2.1.1.3.1 0 .2 0 .4-.2l.1-.1-.1-.1.1-1.1-.2-.2.1-.2.6.3-.1.2-.1-.1-.1 1.1.6-.7-.1-.1.1-.2.6.3M36.1 25.5c0 .6-.4 2.3-1 3.2 0 0-.1-.5 0-.9.1-.7.2-1.4.2-2.1v-.6c0-3.2-1.4-6.2-3.6-8.3-.6-.6-1.3-1.1-2-1.5-.1 0-.1-.1-.2-.1-1.7-1-3.8-1.6-5.9-1.6-6.5 0-11.8 5.1-11.8 11.4 0 .4 0 .9.1 1.3.1.8.2 1.5.5 2.3v.1c-.9-.8-1.4-2-1.5-2.4 0-.1-.2-.1-.3-.1-2.8.8-3.8 5.5 1 7.9 2.7 1.3 2 5.8 3.9 6.1 2.9.4 2.9 6.9 5.5 5 1.3-.9 1.8-5.3 3.7-4 2.7 1.8 2.9-2.5 4.5-2.4 1.4.1 1.8-.7 2.7-2 .7-1 .6-2.8 2.4-2.8 6-.2 5.3-8.8 1.8-8.5m-16-5.4h6.6V22h-6.6v-1.9zm6.6 12.5h-2.2v-1.8h-2.3v1.8H20V24h2.2v4.9h2.3V24h2.2v8.6z" />
                                        </svg>

                                    </li>
                                    <li class="header__tile header__tile--pink flex flex--center flex--middle">
                                        <!-- Benefit -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 25">
                                            <path
                                                d="M63.9 7.8c-.6.1-1.2.1-1.8.1-.3 0-.3-.1-.3.3 0 .1 0 .2.1.1h.6c.1 0 .2 0 .2.2v10.1c0 .1 0 .2-.2.2h-2v.4c0 .1.1 0 .2 0H67c.3 0 .2.1.3-.3 0-.1 0-.2-.2-.2h-1.8c-.3 0-.3 0-.3-.3V7.1c-.4.5-.7.6-1.1.7m7.4.7c0-.2 0-.2.2-.2h3.6c.1-.1 0-.3 0-.4s-.1-.1-.2-.1h-3.4c-.3 0-.2 0-.2-.2V4.2c0-.1 0-.2-.1-.2s-.2 0-.3.2c-.1.6-.2 1.1-.5 1.6-.4 1-1.2 1.7-2.3 1.9-.5.1-.9.1-1.4.1-.2 0-.2.1-.2.3 0 .1 0 .2.2.2h2c.3 0 .2 0 .2.2v8.6c0 1.1.6 1.9 1.6 2.2.6.2 1.2.2 1.8.2 1.2-.1 2.2-.7 2.6-1.9.1-.2.1-.2-.1-.2-.2-.1-.2 0-.3.2 0 .1-.1.3-.2.4-.4.7-1.1 1.2-2 1.1-.7 0-1.1-.3-1.2-1V13.3c.2-1.6.2-3.1.2-4.8m-25.2 3.4h2.2c.2 0 .3 0 .3-.3V11c0-.6-.1-1.3-.3-1.8-.3-.8-.9-1.4-1.8-1.4-.9-.1-1.6.2-2.1.9-.2.3-.3.5-.4.8-.2.7-.2 1.5-.2 2.2 0 .1.1.1.2.1.7.1 1.4.1 2.1.1m1.4.5H44c-.2 0-.2.1-.2.2v3.3c0 .6.1 1.3.4 1.9.4.8 1 1.2 1.9 1.3 2.4.3 4.3-1.2 4.8-3.5.1-.3.2-.3.4-.3.1 0 .1.1 0 .2-.1.5-.3 1-.5 1.5-1 1.8-2.8 2.7-4.8 2.5-1.3-.1-2.4-.6-3.3-1.6-.8-.8-1.2-1.8-1.5-2.9-.5-2.1 0-4.1 1.4-5.9.7-.8 1.5-1.5 2.5-1.8 1.2-.4 2.4-.1 3.5.6 1.3.9 2.1 2.1 2.5 3.6 0 .1 0 .3.1.4 0 .2-.1.3-.2.3h-.2c-1 .2-2.2.2-3.3.2m-26.6-.5h2.2c.1 0 .3 0 .3-.2 0-.7 0-1.3-.1-1.9-.1-.5-.3-1.1-.7-1.5-.6-.6-1.4-.6-2.1-.4-.8.1-1.3.7-1.5 1.6-.3.8-.2 1.6-.2 2.4 0 .1.1.1.2.1.4 0 1.1-.1 1.9-.1m1.3.5h-3.4c-.2 0-.2.1-.2.2v3.2c0 .6.1 1.2.4 1.8.4.8 1 1.3 1.9 1.4 2.4.3 4.4-1.2 4.8-3.5 0-.1 0-.2.1-.2h.4c.1 0 0 .1 0 .1-.4 2-1.7 3.6-3.7 4-1.8.4-3.4 0-4.7-1.2-1-.9-1.5-2-1.7-3.3-.4-2.2.2-4.2 1.7-6 .6-.7 1.3-1.2 2.2-1.4 1.1-.3 2.2-.2 3.1.4 1.5.9 2.4 2.2 2.8 3.9.1.5.1.6-.5.6h-3.2m31.2-4.5c-.3 0-.2.2-.2.3 0 .2.1.2.2.2h2.2c.1 0 .2 0 .1.2-.1.3-.2.5-.3.8-.8 2.6-1.5 5.2-2.2 7.9-.4 1.6-.9 3.3-1.5 4.9-.3.7-.6 1.4-1.1 1.9-.3.3-.7.5-1.1.5-.2 0-.3 0-.4-.2s.1-.3.2-.4c.4-.3.4-1 .1-1.4-.3-.4-1-.5-1.5-.3s-.8.8-.7 1.3c.1.6.7 1.2 1.3 1.3.8.1 1.6 0 2.3-.5.6-.4 1-.9 1.4-1.4 1-1.4 1.8-2.9 2.4-4.6 1.2-3.2 2.2-6.6 3.3-9.8 0-.1.1-.2.3-.2H60.5V8c0-.1-.1 0-.2 0h-2c-.1 0-.2 0-.1-.1.4-1.2.7-2.4 1.2-3.5.5-.9.9-1.9 1.7-2.6.2-.2.5-.5.8-.6.2-.1.4-.1.6-.1.2 0 .2.2.1.3l-.1.1c-.5.6-.2 1.5.4 1.9.4.3 1.1.3 1.5 0s.6-.9.4-1.5c-.2-.7-.9-1.1-1.7-1.2-.7 0-1.4.2-2 .5-1.1.6-2 1.4-2.8 2.4-1.1 1.3-1.8 2.7-2.4 4.3-.1.1-.1.2-.3.2h-1.1c-.3-.2-.7-.2-1.1-.2m-23.9 0h-2.6c-.3 0-.3 0-.3.3 0 .1 0 .2.2.2h1.8c.1 0 .2 0 .2.2v10.1c0 .1 0 .2-.2.2h-1.8c-.2 0-.2.1-.2.2 0 .2 0 .2.2.2H33c.1 0 .1 0 .1-.1v-.1c0-.1 0-.2-.2-.2h-1.7c-.1 0-.2 0-.2-.2V11c.3-.6.7-1.3 1.2-1.8.7-.7 1.5-1.2 2.5-1.3.9-.1 1.5.3 1.7 1.1.1.2.1.5.1.8v9c0 .1 0 .2-.2.2h-2v.4c0 .1.1 0 .2 0H40.9c.1 0 .1 0 .1-.1v-.2c0-.1 0-.2-.2-.2H39c-.2 0-.2 0-.2-.2V10c-.1-1-.6-1.7-1.5-2.1-.5-.2-1.1-.3-1.6-.4-1.1-.1-2 .1-2.9.8-.7.5-1.2 1.1-1.6 1.8 0 .1 0 .1-.1.2V7.4c-.6.4-.8.5-1.6.5m-18 5.5c0-.6 0-1.5-.1-2.3-.1-.7-.2-1.4-.5-2.1s-.8-1.1-1.5-1.2c-.9-.2-1.8 0-2.6.5-1.3.9-2 2.1-2 3.7 0 1.2-.1 2.4 0 3.7.1 1 .4 1.8 1.1 2.4.9.9 2 1.1 3.2 1 1-.1 1.6-.7 1.9-1.6.1-.3.2-.6.2-.9.3-1 .3-2 .3-3.2M4.8.7v9.4c.1 0 .1-.1.1-.2.5-1.2 1.3-2 2.6-2.4 1.1-.5 2.1-.3 3.2.2 1.5.7 2.5 2 3.1 3.6.8 2.3.4 4.4-1.1 6.3-1.2 1.4-2.7 2.1-4.6 1.9-1.4-.1-2.5-.9-3.2-2.1 0-.1-.1-.1-.1-.2-.1.1 0 .1 0 .2V19c0 .1 0 .2-.2.2h-4c-.1 0-.2 0-.2-.2v-.1c0-.1 0-.1.1-.1h1.6c.1 0 .2 0 .2-.2V2c0-.1 0-.2-.2-.2H.5c-.1 0-.2 0-.2-.2s0-.2.2-.2H3c.9-.1 1.4-.3 1.8-.7"
                                                fill="#2e469e" /></svg>

                                    </li>
                                    <li class="header__tile header__tile--yellow flex flex--center flex--middle">
                                        <!-- Edelman -->
                                        <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 216 108">
                                            <style>
                                                .st0 {
                                                    fill: #2e469e;
                                                    display: block
                                                }

                                                .st1 {
                                                    fill: #fff
                                                }

                                            </style>
                                            <path class="st0" d="M2.3 54.8l49.4 49.4V54.8H2.3" />
                                            <path class="st1" d="M51.7 104.2l49.4-49.4H51.7v49.4" />
                                            <path opacity=".75" fill="#2e469e" d="M51.7 104.2l49.4-49.4H51.7v49.4" />
                                            <path class="st1" d="M51.7 54.8h49.4L51.7 5.4v49.4" />
                                            <path opacity=".5" fill="#2e469e" d="M51.7 54.8h49.4L51.7 5.4v49.4" />
                                            <path class="st0"
                                                d="M110.7 64.9v-19h14.2v3.2h-10.3v4.2h9.6v3.2h-9.6v5.2h10.6v3.2h-14.5M140.2 64.9h-3.4v-2c-.6.8-1.2 1.4-2 1.8-.8.4-1.5.6-2.3.6-1.6 0-2.9-.6-4.1-1.9-1.1-1.3-1.7-3.1-1.7-5.3 0-2.3.6-4.1 1.7-5.3 1.1-1.2 2.5-1.8 4.2-1.8 1.5 0 2.9.6 4 1.9V46h3.6v18.9m-9.8-7.2c0 1.5.2 2.5.6 3.2.6.9 1.4 1.4 2.5 1.4.8 0 1.6-.4 2.1-1.1.6-.7.9-1.8.9-3.2 0-1.6-.3-2.7-.9-3.4-.6-.7-1.3-1-2.2-1-.9 0-1.6.3-2.2 1-.5.7-.8 1.8-.8 3.1zM150.8 60.6l3.7.6c-.5 1.3-1.2 2.3-2.2 3-1 .7-2.3 1-3.8 1-2.4 0-4.2-.8-5.3-2.4-.9-1.3-1.4-2.8-1.4-4.8 0-2.3.6-4.1 1.8-5.4 1.2-1.3 2.7-1.9 4.5-1.9 2.1 0 3.7.7 4.9 2 1.2 1.4 1.7 3.4 1.7 6.2h-9.2c0 1.1.3 1.9.9 2.5.6.6 1.3.9 2.1.9.6 0 1.1-.2 1.4-.5.4-.1.7-.6.9-1.2m.3-3.7c0-1.1-.3-1.9-.8-2.4-.5-.6-1.2-.8-1.9-.8-.8 0-1.5.3-2 .9-.5.6-.8 1.4-.8 2.4h5.5zM156.7 45.9h3.6v19h-3.6zM162.9 51.1h3.4V53c1.2-1.5 2.6-2.2 4.3-2.2.9 0 1.6.2 2.3.5.6.4 1.2.9 1.6 1.6.6-.7 1.3-1.3 2-1.6.7-.4 1.5-.5 2.2-.5 1 0 1.9.2 2.6.6.7.4 1.2 1 1.6 1.8.3.6.4 1.5.4 2.9v8.8h-3.6V57c0-1.4-.1-2.3-.4-2.6-.3-.5-.9-.8-1.6-.8-.5 0-1 .2-1.4.5-.5.3-.8.8-1 1.4-.2.6-.3 1.5-.3 2.9V65h-3.6v-7.6c0-1.3-.1-2.2-.2-2.6-.1-.4-.3-.7-.6-.9-.3-.2-.7-.3-1.1-.3-.6 0-1.1.1-1.5.5-.4.3-.8.7-1 1.3-.2.6-.3 1.5-.3 2.8v6.7H163V51.1M188.5 55.4l-3.3-.6c.4-1.3 1-2.3 1.9-3 .9-.6 2.3-1 4.1-1 1.6 0 2.8.2 3.6.6.8.4 1.4.9 1.7 1.5.3.6.5 1.7.5 3.3l-.1 4.3c0 1.2.1 2.1.2 2.7.1.6.4 1.2.7 1.8h-3.6c-.1-.2-.2-.6-.4-1.1-.1-.2-.1-.4-.1-.4-.6.6-1.3 1.1-2 1.4-.7.3-1.5.5-2.3.5-1.4 0-2.5-.4-3.4-1.2-.8-.8-1.2-1.7-1.2-2.9 0-.8.2-1.5.5-2.1.4-.6.9-1.1 1.6-1.4.7-.3 1.6-.6 2.9-.8 1.7-.3 2.9-.6 3.6-.9v-.4c0-.7-.2-1.2-.5-1.5-.4-.3-1-.5-2-.5-.6 0-1.2.1-1.5.4-.3.2-.6.6-.9 1.3m5 2.9c-.5.2-1.2.3-2.2.6-1 .2-1.7.4-2 .6-.5.3-.7.8-.7 1.3s.2 1 .6 1.3c.4.4.9.6 1.4.6.7 0 1.3-.2 1.9-.6.4-.3.7-.7.9-1.2.1-.3.1-.9.1-1.8v-.8zM212.3 64.9h-3.7v-7c0-1.5-.1-2.5-.2-2.9-.1-.4-.4-.8-.8-1-.4-.2-.8-.4-1.3-.4-.6 0-1.2.2-1.7.5-.5.4-.9.8-1 1.4-.2.6-.3 1.6-.3 3.2v6.2h-3.6V51.1h3.4v2c1.2-1.5 2.7-2.3 4.5-2.3.8 0 1.6.1 2.2.4.7.3 1.2.7 1.5 1.1.4.4.6 1 .7 1.5.1.6.2 1.4.2 2.4v8.7" />
                                            <path class="st0"
                                                d="M110.7 64.9v-19h14.2v3.2h-10.3v4.2h9.6v3.2h-9.6v5.2h10.6v3.2h-14.5M140.2 64.9h-3.4v-2c-.6.8-1.2 1.4-2 1.8-.8.4-1.5.6-2.3.6-1.6 0-2.9-.6-4.1-1.9-1.1-1.3-1.7-3.1-1.7-5.3 0-2.3.6-4.1 1.7-5.3 1.1-1.2 2.5-1.8 4.2-1.8 1.5 0 2.9.6 4 1.9V46h3.6v18.9m-9.8-7.2c0 1.5.2 2.5.6 3.2.6.9 1.4 1.4 2.5 1.4.8 0 1.6-.4 2.1-1.1.6-.7.9-1.8.9-3.2 0-1.6-.3-2.7-.9-3.4-.6-.7-1.3-1-2.2-1-.9 0-1.6.3-2.2 1-.5.7-.8 1.8-.8 3.1zM150.8 60.6l3.7.6c-.5 1.3-1.2 2.3-2.2 3-1 .7-2.3 1-3.8 1-2.4 0-4.2-.8-5.3-2.4-.9-1.3-1.4-2.8-1.4-4.8 0-2.3.6-4.1 1.8-5.4 1.2-1.3 2.7-1.9 4.5-1.9 2.1 0 3.7.7 4.9 2 1.2 1.4 1.7 3.4 1.7 6.2h-9.2c0 1.1.3 1.9.9 2.5.6.6 1.3.9 2.1.9.6 0 1.1-.2 1.4-.5.4-.1.7-.6.9-1.2m.3-3.7c0-1.1-.3-1.9-.8-2.4-.5-.6-1.2-.8-1.9-.8-.8 0-1.5.3-2 .9-.5.6-.8 1.4-.8 2.4h5.5zM156.7 45.9h3.6v19h-3.6zM162.9 51.1h3.4V53c1.2-1.5 2.6-2.2 4.3-2.2.9 0 1.6.2 2.3.5.6.4 1.2.9 1.6 1.6.6-.7 1.3-1.3 2-1.6.7-.4 1.5-.5 2.2-.5 1 0 1.9.2 2.6.6.7.4 1.2 1 1.6 1.8.3.6.4 1.5.4 2.9v8.8h-3.6V57c0-1.4-.1-2.3-.4-2.6-.3-.5-.9-.8-1.6-.8-.5 0-1 .2-1.4.5-.5.3-.8.8-1 1.4-.2.6-.3 1.5-.3 2.9V65h-3.6v-7.6c0-1.3-.1-2.2-.2-2.6-.1-.4-.3-.7-.6-.9-.3-.2-.7-.3-1.1-.3-.6 0-1.1.1-1.5.5-.4.3-.8.7-1 1.3-.2.6-.3 1.5-.3 2.8v6.7H163V51.1M188.5 55.4l-3.3-.6c.4-1.3 1-2.3 1.9-3 .9-.6 2.3-1 4.1-1 1.6 0 2.8.2 3.6.6.8.4 1.4.9 1.7 1.5.3.6.5 1.7.5 3.3l-.1 4.3c0 1.2.1 2.1.2 2.7.1.6.4 1.2.7 1.8h-3.6c-.1-.2-.2-.6-.4-1.1-.1-.2-.1-.4-.1-.4-.6.6-1.3 1.1-2 1.4-.7.3-1.5.5-2.3.5-1.4 0-2.5-.4-3.4-1.2-.8-.8-1.2-1.7-1.2-2.9 0-.8.2-1.5.5-2.1.4-.6.9-1.1 1.6-1.4.7-.3 1.6-.6 2.9-.8 1.7-.3 2.9-.6 3.6-.9v-.4c0-.7-.2-1.2-.5-1.5-.4-.3-1-.5-2-.5-.6 0-1.2.1-1.5.4-.3.2-.6.6-.9 1.3m5 2.9c-.5.2-1.2.3-2.2.6-1 .2-1.7.4-2 .6-.5.3-.7.8-.7 1.3s.2 1 .6 1.3c.4.4.9.6 1.4.6.7 0 1.3-.2 1.9-.6.4-.3.7-.7.9-1.2.1-.3.1-.9.1-1.8v-.8zM212.3 64.9h-3.7v-7c0-1.5-.1-2.5-.2-2.9-.1-.4-.4-.8-.8-1-.4-.2-.8-.4-1.3-.4-.6 0-1.2.2-1.7.5-.5.4-.9.8-1 1.4-.2.6-.3 1.6-.3 3.2v6.2h-3.6V51.1h3.4v2c1.2-1.5 2.7-2.3 4.5-2.3.8 0 1.6.1 2.2.4.7.3 1.2.7 1.5 1.1.4.4.6 1 .7 1.5.1.6.2 1.4.2 2.4v8.7" />
                                        </svg>

                                    </li>
                                    <li class="header__tile header__tile--turquoise flex flex--center flex--middle">
                                        <!-- DH -->
                                        <svg id="Layer_3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.1 48.3">
                                            <style>
                                                .st0 {
                                                    fill: #2e469e;
                                                    display: block
                                                }

                                            </style>
                                            <path class="st0" d="M3.6 3v42.2h36V3h-36zm34.2 40.5H5.3V4.8h32.5v38.7z" />
                                            <path class="st0"
                                                d="M12.3 23.7h18.4v1.7H12.3zM25.4 29.6v9.2h-1.7v-3.9h-4.2v3.9h-1.8v-9.2h1.8v3.5h4.2v-3.5zM21.1 10.4h-3.5v9.2H21c2.5 0 4.6-2.1 4.6-4.6.1-2.5-2-4.6-4.5-4.6zm0 7.5h-1.7v-5.7h1.7c1.6 0 2.9 1.3 2.9 2.8s-1.4 2.9-2.9 2.9z" />
                                        </svg>

                                    </li>
                                    <li class="header__tile header__tile--yellow flex flex--center flex--middle">
                                        <!-- Moo -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
                                            <path
                                                d="M219.7 272.1l27.8-53.8c.9-2.1 2.4-3.3 4.8-3.3 2.7 0 4.8 1.8 4.8 4.8v65c0 2.7-1.8 5.1-4.8 5.1-3.3 0-5.1-2.4-5.1-5.1v-45.4l-22.1 42.4c-1.8 2.7-3.9 3.3-5.4 3.3-1.2 0-3.6-.3-5.4-3.3l-22.1-42.4v45.4c0 2.7-1.8 5.1-5.1 5.1-3 0-4.8-2.4-4.8-5.1v-64.7c0-3.3 2.1-4.8 4.8-4.8 2.4 0 3.6 1.2 4.8 3.3l27.8 53.5zm86 9.1c-15.7 0-28.7-12.7-28.7-28.7 0-15.7 12.7-28.7 28.7-28.7 15.7 0 28.7 12.7 28.7 28.7s-13 28.7-28.7 28.7m38.4-28.8c0-21.2-17.2-38.4-38.4-38.4s-38.4 17.2-38.4 38.4 17.2 38.4 38.4 38.4c21.1 0 38.4-17.2 38.4-38.4m47.5 28.8c-15.7 0-28.7-12.7-28.7-28.7 0-15.7 12.7-28.7 28.7-28.7 15.7 0 28.7 12.7 28.7 28.7s-13 28.7-28.7 28.7m38.4-28.8c0-21.2-17.2-38.4-38.4-38.4s-38.4 17.2-38.4 38.4 17.2 38.4 38.4 38.4 38.4-17.2 38.4-38.4m-320.7 46.3c9.4 0 17.8-4.2 23.6-11.5 3.9-5.1 6.1-11.5 6.1-18.2 0-2.1-.3-3.9-.6-6.1-1.2-6.7-6.4-18.2-15.1-33.6-6.7-11.8-12.4-20.3-12.4-20.3l-1.5-2.1-1.2 1.8s-5.7 8.8-12.4 20.3c-9.1 15.4-14.2 26.9-15.1 33.6-.3 2.1-.6 3.9-.6 6.1 0 6.7 2.1 12.7 6.1 18.2 5.3 7.6 13.7 11.8 23.1 11.8m0 10.3c-12.4 0-23.6-5.4-31.2-15.4-5.4-7-8.2-15.1-8.2-23.9 0-2.7.3-5.4.9-7.9 1.5-8.8 7.9-23 19.4-42.7 8.5-14.5 15.4-25.4 15.7-25.4.6-1.2 1.5-2.7 3.3-2.7 1.8 0 2.7 1.5 3.6 2.7 0 0 7.3 10.9 15.7 25.4 11.5 19.7 17.8 33.9 19.4 42.7.6 2.4.9 5.1.9 7.9 0 8.8-2.7 16.9-8.2 23.9-7.7 9.6-19.2 15.4-31.3 15.4"
                                                fill="#2e489d" /></svg>

                                    </li>
                                    <li class="header__tile header__tile--turquoise flex flex--center flex--middle">
                                        <!-- Everlane -->
                                        <svg id="Layer_3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.5 17.1">
                                            <style>
                                                .st0 {
                                                    fill: #2e469e
                                                }

                                            </style>
                                            <path class="st0"
                                                d="M3.2 13.6V3.5h8.1v2h-6v2h4v2h-4v2h6.1v2H3.2zM20 13.6L16 3.5h2.2l2.9 7.2L24 3.5h2l-4 10.1h-2zM31.2 13.6V3.5h8.1v2h-6.1v2h4v2h-4v2h6.1v2h-8.1zM52.6 9.2l1.4 4.4h-2l-1.3-4h-3.5v4h-2V3.5h6c.8 0 1.6.3 2.2.9.6.6.9 1.3.9 2.2-.1 1-.7 2-1.7 2.6zm-5.5-1.7h4c.3 0 .5-.1.7-.3.2-.2.3-.4.3-.7 0-.6-.4-1-1-1h-4v2zM60.1 13.6V3.5h2v8.1h5v2h-7zM79.3 11.6h-4.1l-.8 2h-2.2l4-10.1h2l4 10.1H80l-.7-2zm-.9-2l-1.3-3.1-1.3 3.1h2.6zM96.2 3.5v10.1h-2l-5-6.7v6.7h-2V3.5h2l5 6.7V3.5h2zM102.3 13.6V3.5h8.1v2h-6.1v2h4v2h-4v2h6.1v2h-8.1z" />
                                        </svg>

                                    </li>
                                    <li class="header__tile header__tile--pink flex flex--center flex--middle">
                                        <!-- Yesto -->
                                        <svg id="Layer_3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59.9 19.7">
                                            <style>
                                                .st0 {
                                                    fill: #2e469e
                                                }

                                            </style>
                                            <path class="st0"
                                                d="M42.6 7.3v4.1c0 .3.2.5.5.5h2.2v1.9H43c-1.3 0-2.4-1.1-2.4-2.4V3.6h1.9v1.9h2.7v1.9h-2.6zM39.4 10.2c0 1.9-1.5 3.5-3.9 3.5h-6.4v-2.4h6.4c.9 0 1.4-.5 1.4-1.1 0-2.4-7.5-.9-7.5-5.6 0-1.8 1.5-3.3 3.3-3.3h6v3h-.3c-.1-.4-.6-.6-1.2-.6h-4.3c-.5 0-.9.4-.9.9-.1 2.4 7.4.5 7.4 5.6zM50 5.3c-2.3 0-4.2 1.9-4.2 4.3s1.9 4.3 4.2 4.3c2.3 0 4.2-1.9 4.2-4.3S52.4 5.3 50 5.3zm0 6.6c-1.2 0-2.2-1.1-2.2-2.4 0-1.3 1-2.4 2.2-2.4 1.2 0 2.2 1.1 2.2 2.4 0 1.4-1 2.4-2.2 2.4zM28.6 8.6c0-.3.1-.6.1-1 0-.5-.1-1-.2-1.5-.7-2.9-3.5-5.1-6.6-4.9-3.3.2-5.9 2.9-6 6.1-.2 3.7 2.7 6.7 6.3 6.7 2.2 0 4.1-1.1 5.3-2.8l-1.2-.8c-.5-.3-1.1-.3-1.5.1-.7.6-1.6 1-2.6 1-1.8 0-3.3-1.3-3.8-3h10.2zm-10-2.5c.6-1.5 2-2.5 3.6-2.5s3 1 3.6 2.5h-7.2zM4 1.6v-.3h3.1v7.2c0 1.7.8 3.2 2.8 3.2s2.7-2 2.7-3.1V1.3H15v8.5c0 6-3.5 8.6-7.7 8.6 0-1.9 1.9-3.9 2.9-4.4-.5.1-1.8 0-3-.7-1.4-.6-2.6-2-2.6-4.3V2.6c0-.4-.2-1-.6-1zM55.1 13c.1-.1.2-.2.2-.3 0-.1 0-.2-.1-.2-.1-.1-.1-.1-.2-.1h-.5v1h.2V13h.2l.1.1.1.2h.3l-.3-.3zm-.4-.2v-.3h.3c.1 0 .1.1.1.1 0 .1-.1.1-.1.1h-.3z" />
                                            <path class="st0"
                                                d="M54.9 12c.4 0 .8.4.8.8s-.4.8-.8.8-.8-.4-.8-.8.4-.8.8-.8m0-.1c-.5 0-.9.4-.9.9s.4.9.9.9.9-.4.9-.9c.1-.5-.4-.9-.9-.9z" />
                                        </svg>

                                    </li>
                                    <li class="header__tile header__tile--pink flex flex--center flex--middle">
                                        <!-- Anomalie -->
                                        <svg viewBox="0 0 76 25" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="#2e469e">
                                                <path
                                                    d="M3.8 14l1-2.5 1 2.5m-4.6 2.2h1.6l.4-1h3.1l.4 1h1.6L5.1 8.6h-.5zM17.8 16.4h.5V8.8h-1.5v4.4l-4.4-4.6h-.5v7.6h1.6v-4.4M26.1 15c-1.4 0-2.4-1-2.4-2.5 0-1.4 1-2.5 2.4-2.5s2.4 1 2.4 2.5c0 1.4-1 2.5-2.4 2.5m0 1.4c2.2 0 4-1.6 4-3.9 0-2.2-1.8-3.9-4-3.9s-4 1.7-4 3.9 1.8 3.9 4 3.9zM33.9 16.2h1.5v-4l1.9 2.4h.5l1.9-2.4v4h1.5V8.6h-.5l-3.2 4.1-3.1-4.1h-.5M47.3 14l1-2.5 1 2.5m-4.6 2.2h1.6l.4-1h3.1l.4 1h1.6l-3.3-7.6H48zM55.4 16.2h4.8v-1.3h-3.3V8.8h-1.5M63.9 8.8h1.5v7.5h-1.5zM69.6 16.2h5.2v-1.3h-3.7V13h2.6v-1.3h-2.6v-1.6h3.5V8.8h-5" />
                                            </g>
                                        </svg>

                                    </li>
                                    <li class="header__tile header__tile--yellow flex flex--center flex--middle">
                                        <!-- Sendoso -->
                                        <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 324 72">
                                            <style>
                                                .st0 {
                                                    fill: #2e489d
                                                }

                                            </style>
                                            <path class="st0"
                                                d="M74 26.6c-14.1 0-24.6 11.1-24.7 25.9 0 10 7.1 18.6 21.7 18.7 9.7 0 17.2-5.5 17.2-5.5L84.7 55s-6.5 4.3-12.7 4.3c-5.3 0-8.3-2.8-8.3-7.6l26.9.1s1.6-4.5 1.6-8.3c0-10-6.1-16.8-18.2-16.9zm4.2 16.9H65.6c1.3-3.4 4-6.1 8.1-6.1 2.9 0 4.5 2 4.5 4.6.1.5 0 1.5 0 1.5zM126.5 26.8c-5.9 0-11.8 3.5-14.3 7.3h-.2s.7-2.1 1.1-4.2l.4-2.2H99.7l-8.4 42.6 14.3.1 3.7-18.8c1.2-6.2 6-11.7 11.6-11.7 2.6 0 3.8 1.1 3.8 3.7 0 .6-.1 1.5-.3 2.5l-4.9 24.5 14.3.1 5.3-26.8c.3-1.7.6-3.3.6-4.7.2-9.1-5.8-12.4-13.2-12.4zM180 11.4l-3.5 17.4c-.2.8-.3 1.9-.3 1.9h-.2c-2.4-2.9-7.2-3.8-10.7-3.8-12.7 0-23.9 10.4-24 26.2 0 11.1 6.1 18.3 16.5 18.3 4.8 0 9.4-2.3 12.3-6.2h.2s-.3 1.1-.5 2.4l-.6 2.8h13.4l11.7-59.1-14.3.1zm-17.5 48.3c-4.1 0-6.7-2.9-6.7-7.6 0-8.4 5.8-13.1 10.7-13.1 4.6 0 6.6 3.5 6.6 7.5 0 8.1-6 13.2-10.6 13.2zM217.3 27.1c-13.3 0-26.6 10.4-26.6 25.4 0 11.7 9.2 19.1 22 19.2 13.2 0 26.6-10.3 26.6-25.4 0-11.6-9.2-19.1-22-19.2zm-4.4 32.7c-4.5 0-7.8-2.9-7.8-7.9 0-7.8 6.3-12.9 12-12.9 4.5 0 7.8 3.1 7.7 8.1 0 7.9-6.1 12.7-11.9 12.7zM255.9 41.1c0-1.6 2.6-2.2 4.6-2.2 6.4 0 9.9 3.1 9.9 3.1l6.2-9.7s-5.8-4.9-16-4.9c-9.1 0-17.9 5.5-17.9 13.8 0 12.6 16.8 13.3 16.8 17.1 0 1.5-2.4 2.1-4.6 2.1-6.4 0-10.7-3.8-10.7-3.8l-7.1 9.2s7.3 6.2 17.8 6.3c10.7 0 18-5.4 18-13.7 0-13-17-14-17-17.3zM302 27.4c-13.3 0-26.6 10.4-26.6 25.4 0 11.7 9.2 19.1 22 19.2 13.2 0 26.6-10.3 26.6-25.4 0-11.6-9.2-19.1-22-19.2zm-4.4 32.7c-4.5 0-7.8-2.9-7.8-7.9 0-7.8 6.3-12.9 12-12.9 4.5 0 7.8 3.1 7.7 8.1 0 7.9-6.1 12.7-11.9 12.7z" />
                                            <path class="st0"
                                                d="M72 15.8L54.8 0l-1.7 8.5-23-.1C19 8.3 7.2 15.1 7.1 27.8c0 10.8 8.9 15.6 15.4 19 3.6 1.9 6.8 3.6 6.8 5.5 0 4.4-6.1 4.4-6.4 4.4l-19.7.1L0 71.9l22.6.1c12.9 0 23.1-8.5 23.1-19.5 0-10.9-8.9-15.5-15.4-18.9-3.7-1.9-7-3.6-7-5.7 0-3.3 4.4-4.3 6.5-4.3l20.3.1-1.6 8.2L72 15.8z" />
                                        </svg>

                                    </li>
                                    <li class="header__tile header__tile--turquoise flex flex--center flex--middle">
                                        <!-- Fathertime Bread -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 506.3 200">
                                            <style>
                                                .st2 {
                                                    display: inline
                                                }

                                                .st4 {
                                                    fill: #96763d
                                                }

                                                .st5 {
                                                    fill: #927134
                                                }

                                                .st8,
                                                .st9 {
                                                    display: inline;
                                                    fill: #f1d784
                                                }

                                                .st9 {
                                                    fill: #faf1a9
                                                }

                                                .st10,
                                                .st11,
                                                .st12 {
                                                    display: inline;
                                                    fill: #046f52
                                                }

                                                .st11,
                                                .st12 {
                                                    fill: #35af66
                                                }

                                                .st12 {
                                                    fill: #eec870
                                                }

                                                .st13,
                                                .st14,
                                                .st15 {
                                                    display: inline;
                                                    fill: #f4e091
                                                }

                                                .st14,
                                                .st15 {
                                                    fill: #72caf3
                                                }

                                                .st15 {
                                                    fill: #977638
                                                }

                                                .st16 {
                                                    fill: #fff
                                                }

                                                .st16,
                                                .st17 {
                                                    display: inline
                                                }

                                                .st17,
                                                .st18 {
                                                    fill: #b1e890
                                                }

                                                .st20 {
                                                    display: inline;
                                                    fill: #534321
                                                }

                                                .st22,
                                                .st23,
                                                .st24 {
                                                    display: inline;
                                                    fill: #efcc71
                                                }

                                                .st23,
                                                .st24 {
                                                    fill: #f8eb97
                                                }

                                                .st24 {
                                                    fill: #0373c1
                                                }

                                                .st25 {
                                                    fill: #046f52
                                                }

                                                .st26 {
                                                    fill: none
                                                }

                                                .st30,
                                                .st31 {
                                                    display: inline;
                                                    fill: #efb657
                                                }

                                                .st31 {
                                                    fill: #fcf5c0
                                                }

                                                .st32 {
                                                    fill: #f3c860
                                                }

                                                .st33 {
                                                    fill: #eec870
                                                }

                                                .st34 {
                                                    fill: #fdca50
                                                }

                                                .st35 {
                                                    fill: #facd61
                                                }

                                                .st37 {
                                                    fill: #f6d483
                                                }

                                                .st38 {
                                                    display: inline;
                                                    fill: #6c4104
                                                }

                                                .st39,
                                                .st40,
                                                .st41 {
                                                    display: inline;
                                                    fill: #042824
                                                }

                                                .st40,
                                                .st41 {
                                                    fill: #17303e
                                                }

                                                .st41 {
                                                    fill: #034b5c
                                                }

                                                .st42,
                                                .st43,
                                                .st44 {
                                                    display: inline;
                                                    fill: #482504
                                                }

                                                .st43,
                                                .st44 {
                                                    fill: #f9da99
                                                }

                                                .st44 {
                                                    fill: #975902
                                                }

                                                .st45,
                                                .st46,
                                                .st48 {
                                                    display: inline;
                                                    fill: #011112
                                                }

                                                .st46,
                                                .st48 {
                                                    fill: #02513d
                                                }

                                                .st48 {
                                                    fill: #f2d37b
                                                }

                                                .st52 {
                                                    fill: #115b82
                                                }

                                                .st54 {
                                                    display: inline
                                                }

                                                .st54,
                                                .st55 {
                                                    fill: #2b97bf
                                                }

                                                .st56 {
                                                    fill: #2f4a9c
                                                }

                                            </style>
                                            <g id="Layer_1" class="st0 d-none">
                                                <radialGradient id="SVGID_1_" cx="283.839" cy="-44.712" r="195.335"
                                                    gradientTransform="matrix(1 0 0 .7232 0 -12.374)"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset=".468" stop-color="#fefcc2" />
                                                    <stop offset=".577" stop-color="#f6edaa" />
                                                    <stop offset=".753" stop-color="#ecd989" />
                                                    <stop offset=".901" stop-color="#e5cc75" />
                                                    <stop offset="1" stop-color="#e3c86e" />
                                                </radialGradient>
                                                <circle cx="291.2" cy="18" r="229.5" fill="url(#SVGID_1_)" />
                                                <path
                                                    d="M291.2 171.8c-84.8 0-153.8-69-153.8-153.8 0-84.8 69-153.8 153.8-153.8C376-135.9 445-66.9 445 18c0 84.8-69 153.8-153.8 153.8zm0-305.5c-83.6 0-151.6 68-151.6 151.6s68 151.6 151.6 151.6 151.6-68 151.6-151.6-68-151.6-151.6-151.6z"
                                                    fill="#917034" />
                                                <g class="st2">
                                                    <path class="st4"
                                                        d="M291.2 248.5c-61.6 0-119.5-24-163-67.5C84.6 137.4 60.6 79.5 60.6 18s24-119.5 67.5-163c43.6-43.5 101.5-67.5 163-67.5s119.5 24 163 67.5c43.5 43.6 67.5 101.5 67.5 163s-24 119.5-67.5 163-101.3 67.5-162.9 67.5zm0-458.9C165.2-210.4 62.8-108 62.8 18s102.4 228.4 228.4 228.4S519.5 143.9 519.5 18 417.1-210.4 291.2-210.4z" />
                                                    <path class="st4"
                                                        d="M291.2 241.3c-59.7 0-115.8-23.2-158-65.4S67.8 77.6 67.8 18 91-97.8 133.2-140s98.3-65.4 158-65.4 115.8 23.2 158 65.4 65.4 98.3 65.4 158-23.2 115.8-65.4 158c-42.3 42.1-98.4 65.3-158 65.3zm0-444.5C169.2-203.2 70-104 70 18c0 122 99.2 221.2 221.2 221.2 122 0 221.2-99.2 221.2-221.2 0-122-99.3-221.2-221.2-221.2z" />
                                                    <path class="st4" d="M513.5 18.1h7.2v2.2h-7.2z" />
                                                    <path transform="rotate(-7.805 516.051 -4.51)" class="st4"
                                                        d="M512.4-5.6h7.2v2.2h-7.2z" />
                                                    <path transform="rotate(-13.195 512.406 -27.971)" class="st4"
                                                        d="M508.8-29.1h7.3v2.2h-7.3z" />
                                                    <path transform="rotate(-18.648 506.344 -50.877)" class="st4"
                                                        d="M502.8-52h7.2v2.2h-7.2z" />
                                                    <path transform="rotate(-23.709 497.964 -73.07)" class="st4"
                                                        d="M494.4-74.2h7.2v2.2h-7.2z" />
                                                    <path transform="rotate(-30.399 487.24 -94.388)" class="st4"
                                                        d="M483.6-95.5h7.2v2.2h-7.2z" />
                                                    <path transform="rotate(-36.628 474.358 -114.2)" class="st4"
                                                        d="M470.8-115.3h7.2v2.2h-7.2z" />
                                                    <path transform="rotate(-41.688 459.43 -132.734)" class="st4"
                                                        d="M455.8-133.8h7.2v2.2h-7.2z" />
                                                    <path transform="rotate(-46.921 442.619 -149.683)" class="st4"
                                                        d="M439-150.8h7.2v2.2H439z" />
                                                    <path transform="rotate(-54.318 424.173 -164.643)" class="st4"
                                                        d="M420.6-165.7h7.2v2.2h-7.2z" />
                                                    <path transform="rotate(-61.092 404.331 -177.572)" class="st4"
                                                        d="M400.7-178.7h7.2v2.2h-7.2z" />
                                                    <path transform="rotate(-66.096 383.162 -188.427)" class="st4"
                                                        d="M379.6-189.5h7.2v2.2h-7.2z" />
                                                    <path transform="rotate(-71.355 360.979 -196.94)" class="st4"
                                                        d="M357.4-198h7.2v2.2h-7.2z" />
                                                    <path transform="rotate(-78.293 338 -203.082)" class="st4"
                                                        d="M334.4-204.2h7.2v2.2h-7.2z" />
                                                    <path transform="rotate(-12.88 243.635 -202.94)" class="st4"
                                                        d="M242.5-206.5h2.2v7.2h-2.2z" />
                                                    <path transform="rotate(-17.591 220.786 -196.766)" class="st4"
                                                        d="M219.7-200.3h2.2v7.2h-2.2z" />
                                                    <path transform="rotate(-25.048 198.67 -188.172)" class="st4"
                                                        d="M197.6-191.8h2.2v7.2h-2.2z" />
                                                    <path transform="rotate(-31.311 177.51 -177.284)" class="st4"
                                                        d="M176.4-180.9h2.2v7.2h-2.2z" />
                                                    <path transform="rotate(-38.103 157.713 -164.321)" class="st4"
                                                        d="M156.6-167.9h2.2v7.2h-2.2z" />
                                                    <path transform="rotate(-44.599 139.394 -149.338)" class="st4"
                                                        d="M138.3-152.9h2.2v7.2h-2.2z" />
                                                    <path transform="rotate(-49.5 122.64 -132.462)" class="st4"
                                                        d="M121.5-136.1h2.2v7.2h-2.2z" />
                                                    <path transform="rotate(-53.921 107.85 -114.046)" class="st4"
                                                        d="M106.7-117.6h2.2v7.2h-2.2z" />
                                                    <path transform="rotate(-58.689 94.966 -94.045)" class="st4"
                                                        d="M93.9-97.6h2.2v7.2h-2.2z" />
                                                    <path transform="rotate(-64.887 84.4 -73.12)" class="st4"
                                                        d="M83.3-76.7h2.2v7.2h-2.2z" />
                                                    <path transform="rotate(-70.967 75.985 -50.918)" class="st4"
                                                        d="M74.9-54.5h2.2v7.2h-2.2z" />
                                                    <path transform="rotate(-76.338 70 -28.15)" class="st4"
                                                        d="M68.9-31.7h2.2v7.2h-2.2z" />
                                                    <path transform="rotate(-84.798 66.42 -4.773) scale(1.00002)"
                                                        class="st4" d="M65.3-8.4h2.2v7.2h-2.2z" />
                                                    <path class="st4" d="M61.7 17.9h7.2v2.2h-7.2z" />
                                                </g>
                                                <g class="st2">
                                                </g>
                                                <radialGradient id="SVGID_2_" cx="283.296" cy="-42.295" r="203.232"
                                                    gradientTransform="matrix(.9999 -.01346 .01225 .9095 .544 -.014)"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset=".242" stop-color="#fefcff" />
                                                    <stop offset=".343" stop-color="#fefbfb" stop-opacity=".837" />
                                                    <stop offset=".436" stop-color="#fcf7f0" stop-opacity=".688" />
                                                    <stop offset=".525" stop-color="#faf0de" stop-opacity=".545" />
                                                    <stop offset=".612" stop-color="#f7e7c4" stop-opacity=".405" />
                                                    <stop offset=".697" stop-color="#f4dba2" stop-opacity=".267" />
                                                    <stop offset=".78" stop-color="#efcc79" stop-opacity=".134" />
                                                    <stop offset=".801" stop-color="#eec86e" stop-opacity=".1" />
                                                </radialGradient>
                                                <circle cx="291.2" cy="18" r="213.8" opacity=".5"
                                                    fill="url(#SVGID_2_)" />
                                                <radialGradient id="SVGID_3_" cx="291.023" cy="120.5" r="233.898"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#29a1cf" />
                                                    <stop offset="1" stop-color="#2568a4" />
                                                </radialGradient>
                                                <path
                                                    d="M523 28v14.7l6.8 9s30 20.8 30 54.2-34.3 58.4-34.3 60.6c0 2.2-1.6 18.8-1.6 18.8l-51.1.4s-75.5 73.4-184.4 73.4-176.2-73.4-176.2-73.4l-52-1.3-2-18-23.7-22.8-10.3-27.2 2-33L38.9 63l14.3-12 4.7-4.3.6-18.7H523z"
                                                    fill="url(#SVGID_3_)" />
                                                <path class="st8"
                                                    d="M561.3 98.2c-.1-1.2-.3-2.4-.4-3.6-.4-2.5-.9-4.9-1.5-7.3-.9-3.7-2.1-7.3-3.7-10.8-1.7-3.9-3.8-7.5-6.3-11-2.4-3.2-4.9-6.4-7.8-9.2-1-1-2-1.8-3-2.8-.6-.6-1.3-1.2-2-1.6-.2-.2-.3-.4-.5-.5-1.9-1.4-3.8-2.8-5.8-4.3-.4-.3-.9-.7-1.3-1.1-.9-.9-1.4-2-1.4-3.3V29.3c0-.7 0-1.3-.2-2-.4-1.4-1.3-2.3-2.8-2.4H359.9c-.4 0-.7.1-1.1-.1l-.1.1h-.1c-2.3.1-4.7.1-7 0-.4.1-.7.1-1.1 0-.3.1-.7.1-1 0h-.6c-.3 0-.7.1-1 .1H200.4c-.3 0-.6 0-.9-.1-.3.1-.6.1-.8 0-.5.1-1.1.1-1.6 0-.5 0-.9.1-1.4.1h-33.6-81.9c-.6 0-1.1 0-1.7-.1-.4 0-.7.1-1.1.1H59.6c-.7 0-1.3-.1-2 0-1.3.2-2.3.8-2.6 2.2-.1.5-.2 1-.2 1.5V38c0 .8 0 1.6.1 2.4.1.7 0 1.3 0 2-.1 2-1.1 3.5-2.6 4.8-.8.7-1.8 1.3-2.7 2-.9.7-2 1.2-2.8 2.1-1.2.7-2.2 1.6-3.2 2.5-3.3 3.1-6.5 6.3-9.2 10-1.7 2.4-3.5 4.8-4.9 7.4-1.7 3.2-3.3 6.5-4.6 10-1.2 3.4-2.1 6.9-2.9 10.4-.4 2-.8 4.1-1 6.2-.2 1.6-.1 3.3-.5 4.8-.1 3.9 0 7.8.5 11.7.4 2.9.9 5.8 1.6 8.7 1.3 5.5 3.2 10.8 5.7 15.9 1.7 3.3 3.6 6.5 5.9 9.5 1.7 2.3 3.5 4.5 5.5 6.5 2.2 2.2 4.5 4.3 6.9 6.2 2 1.5 4.1 3.1 6.3 4.4.2.2.3.4.5.6 1 .9 1.5 2 1.4 3.4v15.3c.1 1.7 1 2.6 2.6 3.1.7.2 1.3.2 2 .3.5 0 1 0 1.5.1 1.5.3 3 .3 4.6.3h40.4c2.9 0 5.5.9 7.8 2.7 2.9 2.2 5.7 4.4 8.6 6.6 4.9 3.7 9.9 7.4 14.8 11 .9.7 1.7 1.5 2.8 1.9.2.2.4.4.7.6 1.6 1.1 3.1 2.3 4.7 3.4 4.6 3.2 9.4 6.3 14.2 9.3 6 3.7 12.2 7.2 18.5 10.4 5.6 2.9 11.3 5.5 17.1 7.9.5.2.9.4 1.4.6 2.7 1.1 9.1 3.8 18.5 6.7h.1l.9.3c2.2.7 4.5 1.4 6.9 2.1l3.3.9c4.1 1.1 8.3 2.1 12.5 3 3.3.7 6.7 1.4 10 1.9 2.2.3 4.4.8 6.6 1.1 1.8.3 3.5.5 5.3.7 1.4.2 2.7.2 4.1.4 2.2.3 4.3.5 6.5.6h.8c2.6.4 5.3.4 7.9.5 2.5.1 5 .1 7.5.1 5.3 0 10.6.1 15.9-.3 2.4-.2 4.9-.4 7.3-.4h.6c1.6-.2 3.2-.4 4.9-.5 1.4-.1 2.8-.2 4.3-.4 2.7-.3 5.4-.7 8.2-1.1 2.9-.4 5.7-.8 8.6-1.4 4.8-.9 9.6-1.9 14.3-3 6-1.4 11.9-3.1 17.8-5 9.5-3 18.7-6.6 27.7-10.8 7.1-3.3 14-6.9 20.7-10.8 6.5-3.8 12.8-7.8 18.9-12.2 1.7-1.2 3.4-2.3 4.9-3.6.3-.2.6-.3.9-.5 3.2-2.4 6.4-4.7 9.6-7.1 5.5-4.1 11-8.3 16.5-12.4 2.5-1.9 5.3-2.9 8.5-2.9 7.3.1 14.7.1 22 0 7.8-.1 15.6.3 23.4-.3.9-.1 1.7-.2 2.6-.3 1.1-.2 1.9-.9 2.3-2 .2-.7.3-1.4.3-2.1 0-4.3 0-8.7-.1-13 0-1.9.7-3.4 1.8-4.7.2-.3.5-.5.7-.8.2-.1.5-.2.7-.4.7-.5 1.3-1 1.9-1.5 3-2.2 5.9-4.5 8.6-7.1 1.7-1.7 3.5-3.4 5-5.3 1.7-2.1 3.4-4.3 4.9-6.6 1.6-2.5 3-5.1 4.2-7.8 1.5-3 2.5-6.2 3.4-9.5 1-3.5 1.7-7.1 2.2-10.7.2-1.6.2-3.1.5-4.7.2-4.9.5-9.4-.1-13.9zm-40.8-66.8c.6 0 .7.1.7.8v8.9c0 1.5 0 2.9.3 4.4.5 2.1 1.5 3.8 2.9 5.3 1.1 1.1 2.4 2.1 3.8 2.8 1.4 1.1 2.9 2.2 4.3 3.3.1.1.2.2.3.2l.1.1c.1 0 .1.1.2.2 1.7 1.6 3.4 3.1 5 4.7 8.1 8.1 13.3 17.9 15.7 29 1 4.3 1.4 8.7 1.4 13 0 2.1 0 4.2-.1 6.3-.5 11.5-3.7 22.1-10.1 31.6-3.3 5-7.4 9.2-11.9 13.1-1.7 1.4-3.5 2.8-5.4 4.1-1.2.9-2.4 1.8-3.3 2.9-.3.4-.7.7-.9 1.2-.9.8-1.4 1.9-1.7 3-.6 2-1 4-.8 6.2.3 2.8.2 5.6.1 8.4v.6c0 .3-.2.5-.5.5-.9.1-1.7.1-2.6.1-10 .1-20.1.1-30.1.1-3.5 0-6.9-.1-10.4-.1-4.6 0-8.9 1.2-12.6 4-3.1 2.3-6.1 4.7-9.2 7l-21 15.6c-.3.2-.6.4-.8.7-.1.2-.2.4-.3.5.1.1.3.1.4.2-.1 0-.3-.1-.4-.2-.5 0-.7.3-.9.7-1 1.5-2.5 2.3-4.1 2.9-.3.1-.4-.2-.4-.5-.1 0-.4 0-.4-.2s.2-.1.4-.1c0-.3.2-.6.3-.9h-.6c-.5 0-.7.3-.9.7-.3.5-.7.9-1.3 1.2-.4.2-.8.1-1.1-.1-.2-.1-.3-.3-.2-.5.2-.7.6-1.4.4-2.2 0-.1.2-.2.3-.3.5-.4 1-.8 1.6-1.2.3-.2.5-.5.5-.9-.2-.5-.4-.9-1-1-.4-.1-.8-.4-1.2-.6-.5-.3-.7-.2-.9.3-.1.4-.2.7-.6.7-.1.5.2 1 .3 1.5.1.7 0 1.3-.7 1.7-.6.3-.9.8-.6 1.5.1.3-.1.5-.4.5-1.3.2-2.2-.6-2.2-1.9 0-.4.1-.8.3-1.2h-.7c-.4.6-.5 1.2-.3 1.9.2.8.6 1.6 1.4 1.9.6.3 1 .8 1.3 1.4.2.4.6.7.9 1 .5.5.5.6-.1 1s-1.3.8-1.9 1.2c-.2.3-.5.5-.8.5-.3.1-.6.2-.8.4-8.3 5-16.8 9.6-25.6 13.6-.1.5-.2 1-.3 1.4-.2.8-.8 1.1-1.6.9-.8-.2-1.6-.4-2.5-.5-.2.4-.7.3-.9.7.5.6.7 1.2.7 2 0 1.3-.7 2.1-1.6 2.8-.3.2-.7.1-1-.1-.3-.1-.6 0-.7.4-.1 1.2-1.2 1.5-2 1.9-.2.1-.6 0-.9 0-.3 0-.6-.2-.9-.2-1-.2-1-.2-1.4.7-.1.1-.1.3-.1.4-.5 1.1-1.3 1.6-2.4 1.3-.7-.2-1.3-.5-2.1-.3-.3.1-.5-.2-.6-.4-.2-.4-.4-.7-.4-1.1-.1-.7-.2-1.3-.7-1.8-1 .3-1.9.6-2.9.9-.5.2-1.1.3-1.6.5-1.1.5-2.2.9-3.3 1.2-.1.3 0 .6.3.8 1.2.6 2.3 1.1 3.6.8h.2c.1 0 .2.1.2.2s0 .2-.1.3c-.3.1-.6.3-1 .4-.3.1-.6 0-.9 0-.2 0-.4 0-.5.2 0 .2.1.4.2.5.3.4.7.7 1 1.1v.3c-.1.1-.3.2-.4.2-.3 0-.4-.2-.6-.4-.3-.2-.4-.6-.8-.6-.3.4 0 1-.3 1.5-.7-.2-.6-.9-.8-1.4-.3-.5-.4-1-.9-1.4-.6.4-.9 1.3-1.9 1.3.4-1 .8-2 .2-3-.2 0-.4.1-.5.1-.2.1-.5.2-.7.3-.6.3-.9.7-1.1 1.4-.2.8-.5 1.6-.8 2.4 0 .1-.1.1-.2.1s-.2-.1-.2-.2c-.2-.5-.4-1-.5-1.6 0-.5-.1-.6-.7-.5-.3 0-.4-.2-.5-.4h-.4c-.1.1-.3.1-.4.2-.7 0-1.4.3-2.1.5-5.2 1.4-10.5 2.6-15.8 3.6-.5.1-1.1.2-1.6.4-.9.2-1.7.4-2.6.5-.6.1-1.2.4-1.9.3-.2 0-.5.1-.7.1-.3.3-.7.2-1.1.2-1.2 0-2.3.3-3.5.4-3.5.4-7 .9-10.6 1.3h-.5c-.6.1-1.1.2-1.7.1-.4.3-.9.3-1.3.2-.7.1-1.3.2-2 .1-.5.3-1.1.2-1.6.2-.9.1-1.7.3-2.6.1-.5.3-1.1.2-1.7.2-2.9.3-5.8.4-8.7.4-6.2.2-12.3.1-18.5-.1-3.8-.2-7.6-.4-11.4-.8-3.2-.4-6.5-.6-9.7-1-2.9-.4-5.8-.9-8.8-1.3-.5-.1-1-.2-1.5-.2-1.5.1-2.9-.2-4.2-.8-3.2-.7-6.5-1.4-9.7-2.2-2.6-.6-5.2-1.3-7.8-2-3.1-.9-22.2-6.6-37.4-13.8 0 0 0-.1.1-.1-6.8-3.1-13.4-6.6-19.9-10.4-1.9-1.1-3.7-2.2-5.5-3.3-.3-.2-.6-.3-.9-.5-.2 0-.5 0-.7.1-.6.1-.6.1-.7-.5v-.5c-.6-.5-1.3-1-2.1-1.3-.3.1-.6.4-1 .1-.2-.2-.4-.4-.7-.3-1.3.2-1.8-.9-2.6-1.6-.3-1.2-1.4-1.4-2.3-1.7-1.4-.5-2.5-1.4-3.4-2.4-.2-.2-.3-.4-.4-.6-.2-.3-.5-.4-.8-.4v-.5c-3.6-2.6-7.2-5.2-10.7-7.8-6.2-4.6-12.3-9.2-18.4-13.9-.4-.3-.7-.5-1.1-.8-3.5-2.7-7.6-3.8-12-3.8-4.6 0-9.2.1-13.8.1-8.9 0-17.8-.1-26.8-.1-1 0-1.9-.1-2.9-.1-.6 0-.7-.2-.7-.8v-1.1c0-3.1-.1-6.2.1-9.3.1-1.7-.2-3.4-.6-5-.2-.7-.4-1.4-.9-1.9-.5-1.1-1.3-2.1-2.3-2.8-.8-.6-1.6-1.3-2.5-1.8-12-7.9-20.2-18.8-24.7-32.5-1.7-5.2-2.8-10.4-3.1-15.8-.1-2-.2-4.1-.2-6.1.1-10.5 2.7-20.4 7.8-29.7 4.5-8.3 10.7-15.1 18.3-20.6.6-.4 1.1-.9 1.7-1.3 3.7-2.5 6-5.8 6.5-10.4.1-.9.1-1.8 0-2.7-.3-2.7-.3-5.4-.2-8.1 0-.6.1-.7.7-.7l458.3-.3z" />
                                                <path class="st9"
                                                    d="M197.6 243c-.1-.4-.4-.5-.7-.7-.2-.2-.6-.4-.6-.6-.1-1-.6-1.3-1.5-.9-.1 0-.3 0-.4-.1-1-.7-1.7-1.6-1.6-2.9.1-.8.3-1.4.9-1.8.2-.1.4-.3.6-.5.1-.1.1-.2.1-.3 0-.1-.1-.1-.2-.1-.5 0-.9 0-1.4.1-.9.3-1.8.5-2.6.7-.8.2-1.4-.1-1.6-.9-.3-.9-.3-1.8.3-2.6.6-.5.9-1.2 1.6-1.6 1.1-.3 2.2-.3 3.5-.8-1.1-.2-1.9-.2-2.8.1-.6.2-1.3.2-1.9.1-.5-.7-.6-1.6-.8-2.4-.2-.9.2-1.6 1.1-1.8 1-.2 1.9-.1 2.9.2.8.2 1.6.5 2.5.7-.4-.6-.9-1-1.5-1.4-.4-.3-.7-.6-1-1-.3-.5-.3-.9.1-1.4.4-.5.9-1 1.3-1.4.8.1 1.5 0 2.2-.3h.1v.1c.3.3.6.2.9.1.1-.3.3-.4.6-.5.7-.2 1.5-.3 2.2-.5.4-.1.8-.2 1.2-.2 1.2-.1 1.9.5 2.2 1.7.1.3.1.6.1.9.1.6.2.7.8.5.6-.1 1.1-.4 1.5-.7.6-.4 1.3-.6 2-.8.9-.2 1.3 0 1.8.7.2.2.3.5.4.8.2.4.4.5.8.4.5-.2.8 0 1 .5.2.4.4.8.7 1.2.4.5.6 1.2.6 1.8-.1.8-.1 1.6-.9 2.2-.3.2-.6.3-.9.4-.4.2-.9.3-1.2.8.3.6.9.5 1.4.7.5.1 1 .3 1.5.4 1.4.4 2 1.5 2.2 2.8.1.4-.1.8-.5 1-.2.1-.4.2-.6.2-.9.3-1 .2-.8 1.3.1.4.1.7.2 1 .1.5.1.9-.4 1.2-.5.3-.7.7-.9 1.1-.2.4-.5.6-1 .7-1 0-1.9 0-2.7-.7-.3-.3-.6-.2-.6.2-.2 1-.7 1.8-.7 2.8 0 .2-.2.5-.3.7-.2.4-.5.6-1 .5-.8-.1-1.5.1-2.1.7-.7-.1-1.3-.3-1.8-.7-.2-.6-.4-1.2-.6-1.9-.1-.4-.4-.5-.7-.3-1.2.2-2.1.5-3 .5zm3.4-16.9h-.8c-.7.1-1.5.1-2 .6-1 .7-1.7 1.7-1.5 3 .2 1.8.5 3.6 2.3 4.7.2.1.4.4.6.5 1.3 1.1 2.7 1.6 4.3 1 .4-.1.8-.3 1.2-.4 1.5-.5 2.6-2.4 2.4-3.9-.2-1.2-.5-2.3-1.4-3.1-.5-.5-1-.8-1.5-1.2-1.1-.9-2.3-1.2-3.6-1.2zm5.5 13.7c.2-1.1-.3-2.1-.6-3.1-.1-.3-.3-.4-.6-.3-.2.1-.4.1-.6.2-.9.1-1.4.7-1.6 1.6-.3 1.1-.5 2.3-1 3.3-.2.5-.2 1.1-.1 1.6.3 1 .9 1.3 1.8 1 .5-.2 1-.5 1.6-.5.2 0 .4-.2.4-.4.2-1.2.9-2.2.7-3.4zm.1-4.2c.2.6.4 1.1.6 1.6.4.9 1 1.8 1.8 2.5s1.5.6 2.2-.2c.2-.2.3-.5.6-.7.5-.3.5-.7.3-1.2-.1-.3 0-.6-.1-.9-.1-.4-.2-.8-.6-1l-2.4-1.8c-.3-.3-.7-.2-.9.2-.4.7-.9 1.2-1.5 1.5zm-16.2-.9c2-.4 4-.9 5.9-1.3.1 0 .2-.2.2-.4-.1-.4-.1-.8-.3-1.2-.3-.9-.6-1.2-1.6-1.1-1.2.1-2.4.4-3.6.6-.2 0-.4.1-.5.2-.5.6-1.1 1.2-1.4 2-.2.5.2 1.2.8 1.2h.5zm11.8 3.2c.1-.4-.1-.7-.5-.8-.7-.2-1.4-.6-2.2-.5-.6.1-.7.8-1.1 1.2l-.4.4c-.6.7-.9 1.6-1.2 2.4-.1.2 0 .4.1.6.7.6 1.4 1.2 2.4.6.1-.1.3-.1.4-.1.9-.4 1.6-1 1.9-2 .3-.7.4-1.2.6-1.8zm6.1-7.6c.9-.5 1.9-.9 2.8-1.4.4-.2.6-.5.6-1 .2-1-.1-1.9-.8-2.7-.3-.4-.6-.4-1-.1-.8.6-1.4 1.3-2.3 1.8-.4.2-.9.3-1 .6-.2.5.4.7.7 1.1.2.2.3.5.4.8.1.3.2.6.6.9zm-12.6-8.2c-.8 0-1.7.4-2.3 1-.4.4-.4.7 0 1 .6.5 1.3 1 1.9 1.5 1.5 1.1 1.5 1.1 2.9-.1.2-.2.4-.4.2-.7-.5-1-1-1.9-1.9-2.6-.2 0-.5-.1-.8-.1zm-2.1 15.7c0 .4.1.8.3 1.2.5.9.8 1 1.7.4.3-.2.6-.4.8-.7.5-1 1.1-1.9 1.9-2.7.1-.1.1-.3.1-.4-.1-.5-.9-1-1.3-.8-1.1.6-2.2 1.3-3.2 2.1-.1.2-.3.5-.3.9zm2.4-9c0-.3-.1-.6-.4-.7-.5-.2-.9-.4-1.4-.6-1.2-.6-2.4-.7-3.7-1-.5-.1-.9.1-1.3.4-.3.3-.1.6 0 1 .3 1.3.6 1.5 1.9 1.2.1 0 .3-.1.4-.1 1-.2 1.9-.2 2.9.1l.9.3c.4 0 .7-.2.7-.6zm4.9-7.6c-.7-.1-1.4.3-2.3.4-.3 0-.5.5-.2.7.6.6.9 1.3 1.3 2.1.2.5.6.7 1.1.8.3.1.6 0 .9 0 .8 0 1.3-.5 1.1-1.2-.1-.6-.3-1.3-.5-1.9-.3-.8-.5-.9-1.4-.9zm7 1.6c-.1 0-.3 0-.4.1-1 .4-2.1.8-3.1 1.3-.3.1-.5.4-.6.6-.4.6-.5.8.2 1.2l.9.6c.3.2.6.2.9.1 1-.5 2-1 2.8-1.8.5-.5.3-1.6-.4-1.9-.1-.2-.2-.2-.3-.2zm4.9 12.2c.8 0 1-.4.8-1.1-.1-.6-.5-1-1.1-1.2-1-.3-2-.7-3-1-.2-.1-.4-.1-.6 0-.3 0-.5.1-.5.4-.1.3.1.7.4.7.9.1 1.5.6 2.1 1.2.3.3.7.5 1.1.8.2.1.5.2.8.2z" />
                                                <path class="st10"
                                                    d="M212 248.4c.6-.6 1.1-1.2 1.6-1.8-.1-.4-.4-.3-.6-.3-.7 0-1.3 0-1.9-.4-.1 0-.2-.2-.1-.2 0-.2.2-.2.3-.2 1.7.3 3.1-.4 4.6-1.5-.4-.3-.8-.1-1.1-.2-.8-.1-1.5-.2-2.1-.8-.1-.1-.2-.2-.1-.3 0-.2.2-.2.4-.2.5 0 1.1.5 1.6.1h.4c1.1.7 2.2.9 3.5.8 0 .1 0 .2-.1.3-.7 0-1.1.4-1.5.9-.3.4-.5.9-1 1.1-.8.4-1.2 1.2-2 1.6-.4.2-.8.6-.9 1.2-.4.2-.7 0-1-.1z" />
                                                <path class="st11"
                                                    d="M212.9 248.7c.1-.5.5-1 .9-1.2.8-.4 1.3-1.2 2-1.6.5-.2.7-.7 1-1.1.4-.5.8-1 1.5-.9.2.1.3.2.5.3-1 .1-1.1.9-1.3 1.6-.1.6.1 1.1.3 1.6.1.1.1.3-.1.4-.1.1-.3 0-.4 0-.5-.3-.8-.8-1.3-1.3-.5.6-.8 1.3-1 2-.1.3-.2.6-.3.8-.7.2-1.2-.3-1.8-.6z" />
                                                <path class="st8" d="M428.1 212.6z" />
                                                <path class="st12"
                                                    d="M419.7 218.8c.1-.3 0-.5-.2-.7-1.6-1.3-2.4-3.1-3-5-.2-.6-.4-1.3-.6-1.9-.3-.8-.5-1.7-.5-2.5-.1-1.2-.2-2.3-.4-3.5-.3-1.8-.2-3.6-.1-5.3.1-1.7.1-3.5.2-5.2 0-.5-.1-1-.6-1.3-.9-.6-1.3-1.6-1.6-2.5-.1-.5-.3-.8-.7-1.1-.7-.4-1-1.1-1.1-1.9-.1-.7-.2-1.4-.1-2.1.2-1.2.3-2.5.8-3.6.8-1.9 1.4-3.8 2.5-5.5.1-.2.3-.4.5-.6.2-.2.4-.1.5.1.2.4.3.7.5 1.1.1.3.3.5.7.5.2-.3.1-.6 0-.9-.4-1.6-.2-3.1.3-4.7.1-.4.3-.6.7-.6.3 0 .3-.2.3-.4.1-1.9 1.1-3.3 2.1-4.8.1-.2.4-.2.6-.2.2.7.4 1.3 1.2 1.7 0-.8-.3-1.4-.1-2.1.4-1.4 1-2.7 1.9-3.8.4-.5.7-.6.9-.4.3.3 0 .6-.1.8-.3 1-.2 1.8.7 2.5.2-.4-.1-.7-.1-.9-.2-1.1 0-2.1.5-3.1.8-1.5 1.9-2.8 3.3-3.7.4-.2.8-.5 1.1-.8 1-1 1.9-2 2.1-3.5 0-.1.2-.3.3-.2.2 0 .3.1.3.3 0 .9-.3 1.7-.9 2.4-.6.8-1.3 1.6-2.1 2.2-.9.6-1 1.5-.8 2.4.1.2.3.4.5.2 1.8-1.5 3.8-2.8 4.9-5 .5-1 1.2-1.9 2.1-2.6.2-.2.4-.4.7-.4.1 0 .2.1.2.1v.1c0 .1-.1.2-.1.3-1.2 1-2 2.3-2.8 3.6-.6 1.1-1.5 2-2.5 2.7-.5.4-1 .7-1.4 1.1-.3.3-.7.6-1 1-.3.3-.3.7 0 1.2.9-1.1 2.2-1.6 3.5-2.1 1.7-.6 2.7-1.7 3.4-3.2l.9-1.8c.3-.5.6-1 .9-1.4l.3-.3h.3c.2.1.2.3.1.4-.8 1-1.2 2.1-1.8 3.2-.7 1.2-.9 2.3-.6 3.6.2 1-.1 2-.8 2.8-.4.5-.7 1-1.2 1.3-.5.3-.5.7-.5 1.2 0 .7 0 1.5-.4 2.1-.3.5-.8.8-1 1.3-.2.5-.3 1.1-.6 1.6-.1.1-.2.3-.3.4-1.3 2-2.5 4.1-4 6-.2.3-.5.6-.5.9-.3 1.3-1 2.3-1.5 3.5-.2.5-.5 1-.8 1.3-.8.7-.8 1.6-.8 2.5 0 .1.1.2.2.2h.3c.5-.5 1-1 1.5-1.6 2.1-2.5 4.1-5.2 6.4-7.6 1.5-1.6 3-3.1 4.8-4.3 2-1.3 4-2.4 6.1-3.5.7-.4 1.5-.7 2.1-1.2 1.9-1.4 3.9-1.8 6.2-1.6h1.4c.3.1.6.1.9 0 .3.1.5.1.8-.2 1 .2 1.8-.2 2.4-.9.2-.3.4-.6.7-.8.8-.7 1.7-.8 2.7-.4.2.1.4.2.3.5-.1.3-.3.3-.6.3-.2-.1-.4-.1-.6-.1-.6-.1-1.1.1-1.5.6-.2.3-.5.5-.7.8-.4.7-1 1.1-1.8 1.4-.3 0-.5 0-.8.2-.7-.1-1.3 0-2 0-.3-.1-.6-.1-.9-.2-1.8-.3-3.5 0-5.2.9-1.1.6-2.1 1.5-3 2.4-.9.9-1.7 1.7-2.7 2.5-1.1.9-2.2 1.8-3.4 2.6-1.3 1-2.2 2.3-2.8 3.8-.6 1.5-1.1 3-1.4 4.5-.3 1.1-.7 2.2-1.3 3.3-1.3 2.2-3 4.1-5 5.7-1.9 1.6-3.7 3.2-5.1 5.2-1 1.4-2 2.9-2.5 4.5-.7 2.2-1.3 4.5-1.1 6.9 0 .6.1 1.2.1 1.8 0 2.2.8 4.2 1.6 6.2.1.3.3.6.6.6-.3.4-.6.6-.9.7zm4-32.1c.1-.1.1-.2.2-.4.1-.1 0-.2 0-.2-.2-.2-.2 0-.3 0-.1 0-.1.2-.1.2-.2.3-.4.6-.3 1.1.2-.2.4-.5.5-.7zm6.3-15.1c-1.2 0-2.4.5-3.5.8-1.3.3-2 1.3-2.8 2.2-.1.2 0 .6.3.6s.5.1.8 0c1.3-.4 2.7-.7 3.7-1.7.5-.5 1.3-.9 1.5-1.9.2 0 .2-.1.1-.1s-.1.1-.1.1zm-8.2 17.7c-1 .7-2 1.2-3.3 1h-.2c-.2.1-.4.2-.2.4.5.6.2 1.1-.3 1.6s-1 .8-1.7 1.1c-.4.1-.6.4-.5.8v.8c-.2 4.4-.5 8.7.2 13.1.2 1.1.3 2.3.9 3.6v-2.2c0-1.4-.2-2.7-.2-4.1 0-4.3.9-8.4 3.1-12.1.7-1.2 1.4-2.5 2.1-3.7.2-.3.5-.7.7-1-.3.1-.6.3-.6.7zm20.7-19.2l-.9.3c-.9.5-1.9 1-2.8 1.6-1.3.8-2.6 1.6-3.7 2.6-1.8 1.6-3.2 3.5-4.9 5.2l-.1.1-3.6 4.5c-.9 1.1-1.8 2.1-2.5 3.2-1.3 1.9-2.4 3.9-3.6 5.9-1 1.7-1.8 3.5-2.2 5.5-.2 1-.4 2.1-.6 3.1-.3 1.2-.1 2.5 0 3.7.2-.5.4-1 .5-1.6.5-2 1.2-4 2.5-5.7.8-1.2 1.7-2.3 2.7-3.3 1.6-1.8 3.5-3.2 5.3-4.9 2-1.9 3.4-4.2 4.1-6.9.5-1.7 1-3.4 1.7-5.1.6-1.4 1.4-2.6 2.6-3.5 1.6-1.2 3.2-2.5 4.8-3.7.3-.1.7-.4.7-1h.1v-.1l-.1.1zm-23.6 10.7c.4 1 .3 1.7.3 2.5v1.1c.1.4.5.7.9.6 1.1-.3 2.1-.7 3-1.5 1.2-1 1.8-2.3 2.4-3.7.1-.1.1-.3-.1-.4-.1-.1-.3 0-.4 0-.6.2-1.2.5-1.9.5-.3 0-.5.1-.7.3-.9.9-2 1.1-3.5.6zm-4.3-3.4c-.5.9-1 1.8-1.3 2.8-.2.9-.3 1.8.1 2.7.3.6.7 1.2 1.1 1.8 0 .1.2.1.3.1.1 0 .2-.1.2-.2v-.3c-.1-.9.2-1.6.9-2.1.4-.3.6-.7.8-1.1.3-.6.2-1.2.1-1.8-.1-.5-.5-.6-.8-.8-.5-.3-.9-.7-1.4-1.1zm-2.3 5.5c-.5.9-.5 1.9-.7 2.8-.1.6-.1 1.2 0 1.8.1.8.4 1.5 1.3 1.7h.4c.8-.7 1.6-1.4 2.3-2.2.3-.3.2-.5-.1-.7-1.2-.6-2-1.5-2.5-2.7-.1-.3-.2-.6-.7-.7zm15.5-24.1c-1.2.9-1.7 1.9-2.1 2.9-.4.9-.4 1.7-.1 2.6.2.5.5 1.1.2 1.7l.1.2h.3c.6-.5 1.3-1 1.3-1.9 0-.2.1-.4.2-.6.4-.6.3-1.2.4-1.9.1-.9-.4-1.8-.3-3zm-8.3 15.4c.1-1 .5-1.8 1.1-2.6.2-.3.3-.6.5-.9.6-.9.2-1.8-.3-2.6-.3-.6-.8-.6-1.2 0-1.1 1.4-1.3 4.3-.4 5.9 0 .1 0 .1.3.2zm16-13.3v-.3-.2c0-.3-.4-.4-.6-.2-1.1 1.1-2.2 2.1-3.2 3.2-.2.2-.3.6-.4 1-.1.2 0 .5.2.7.2.1.4.1.6 0 .5-.3 1-.5 1.5-.8 1.1-.7 2-1.6 1.9-3.4zm-2.6 4.8c-1.2.3-2.3.8-3.3 1.4-.4.2-.7.6-.9 1-.3.7-.2 1 .5 1.3.7.2 1.2-.1 1.8-.3.7-.2 1.2-.6 1.5-1.2.4-.6.7-1.3.4-2.2zm-14.3 17.5c.1-.6-.3-1-.3-1.6-.1-.4-.4-.5-.6-.2-.6.6-1.3 1.2-1.8 1.8-.5.5-.4 1.4.2 1.9.2.2.4.3.6.4.6.3 1.1.2 1.4-.4.3-.6.6-1.2.5-1.9zm6.4-12.5c.1 0 .4 0 .6-.2.9-.5 1.7-1.1 2.1-2.1.3-.6.4-1.2.1-1.9-.2-.4-.4-.5-.7-.2l-2.4 2.4c-.3.3-.5.8-.6 1.2 0 .5.3.8.9.8zm-6.3 18c-.1.7.3 1.1 1 .8.3-.1.6-.2.8-.4 1.3-1 2.1-2.3 2.4-3.9 0-.1-.1-.3-.2-.4-.1 0-.3 0-.4.1-.4.3-.7.7-1.2 1-.8.5-1.4 1.3-2.1 2-.2.3-.3.5-.3.8zm-.5-9.9c.4-.1.6-.4.8-.6.2-.2.3-.4.2-.7-.2-.6-.2-1.2-.3-1.8-.1-.9-.5-1.6-1.2-2.2-.2-.1-.5-.2-.5 0-.1.6-.6 1.2-.3 1.9.1.3.1.6.2.9.1.9.4 1.7 1.1 2.5zm4.1-12.5c0 1 .1 1.4.5 2 .4.6.7.6 1.1.1.2-.3.5-.5.7-.8.5-.6.5-1.1 0-1.6s-.9-1-1.2-1.6c-.2-.4-.4-.3-.7.1-.2.5-.5 1.2-.4 1.8zm.9 6.1c0-.7-.3-.9-.9-.7-.7.3-1.1.9-1.6 1.3-.5.5-.6 1.1-.4 1.7.2.7.8 1 1.4.7.5-.2 1-.6 1.2-1.1.2-.6.2-1.3.3-1.9zm4.2 3.5c-1.1.3-2 .5-2.9.8-.4.1-.7.3-1.1.5-.5.2-.6.7-.5 1.2 0 .3.2.6.5.6.5 0 1 0 1.4-.3 1.1-.7 2.1-1.4 2.6-2.8zm-9.7 12.7v-.1c-.2-.5-.3-1.2-.8-1.4-.5-.2-.8.5-1.2.8-.3.2-.5.5-.7.7-.4.5-.4.9.1 1.3.5.5 1.2.5 2 .1.4-.2.6-.5.6-1.4zm11.2-22.1c.5.1.8-.2 1.1-.4.5-.3.6-.3.4-1-.1-.4 0-.7.1-1 .3-.6.6-1.2 1.1-1.6.4-.3.8-.6 1-1.2-.8-.1-1.3.4-1.8.7-.4.2-.7.6-.9 1 0 .1-.1.2-.1.3 0 .6-.4 1.1-.6 1.7-.4.4-.6.9-.3 1.5zm-8.7 13.7h.3c1.4-.1 2.2-1.3 1.6-2.5-.4-.9-.6-.8-1.2-.2-.6.6-1.1 1.2-1.7 1.7-.2.2-.3.4-.2.7.1.3.4.3.6.3h.6zm10.2-10.1h-2.3c-.4 0-.7.1-1 .3-.7.7-1.7 1-2.6 1.2-.6.2-.6.2-.4 1 .5-.2 1-.5 1.5-.7.5-.2 1.1-.4 1.6-.5.6-.2 1.2-.3 1.8-.5.3-.2 1-.1 1.4-.8z" />
                                                <path class="st12"
                                                    d="M453.4 171.4h.3c.2 0 .4 0 .5.2.1.2 0 .4-.2.5-.9.5-1.4 1.3-1.9 2.2-.1.2-.2.4.1.5.1.1.3.1.4.1.4 0 .6-.3.9-.5 2.7-2 5.6-3.4 8.9-4.2.6-.2 1.1-.1 1 .1-.1.4-.5.4-.8.5-.9.3-1.8.6-2.8.9-2.4.8-4.4 2.2-6.4 3.6-.2.2-.3.4-.2.7 0 .2.1.4.1.6 0 .1.1.3.2.4.5-.2.6-.7.9-1 1.7-1.6 3.6-2.7 5.9-3 .7-.1 1.4-.4 2-.7 1.7-.8 3.4-1.5 5.2-1.8.5-.1 1.1-.1 1.7-.2.3 0 .6 0 .7.2.2.4.4.4.7.3l1.5-.3c.1 0 .3.1.3.3 0 .1-.1.2-.1.3-.4.1-.9.3-1.3.4-2.6.6-5 1.7-7.4 2.8-.7.3-.9.9-1.2 1.5-.1.2 0 .4.3.4 1.4 0 2.7 0 3.9-.9.6-.5 1.4-.8 2.2-1 1.1-.2 2.3-.4 3.4-.9.2-.1.4-.1.5.2.1.2-.1.4-.3.5-.9.4-1.8.6-2.8.8-.5.1-1 .2-1.5.4-.6.2-1.1.5-1.4 1.1-.6 1.2-1.7 1.9-2.8 2.5-.9.5-1.7.9-2.7 1.1-.7.2-1.3.5-1.7 1.1-.2.3-.5.5-.7.8.2.2.4.2.6.2.1 0 .3.1.4.2.1.2-.1.4-.3.5-.1 0-.2.1-.3.1-2.6.8-5 2.3-7.3 3.8-.8.5-1.6 1.1-2.1 1.9l-.1.1c-1.6 2-1.6 2-3.3 3.1.3.4.7.4 1.1.4.2 0 .3.1.3.3.1.3-.1.4-.3.4-.2.1-.5.1-.7.1-1.1.1-2 .5-2.8 1.1-.5.3-1 .6-1.4.9-.8.5-1.6.7-2.5.6-.8-.1-1.5.2-2 .8-.4.4-1.1.6-1.3 1.2 0 .1-.1.2-.1.3v.3c0 .1.1.1.2.1 1.1-.8 2.4-1.1 3.7-1.4 1.1-.2 1.9-.9 2.8-1.4.9-.5 1.7-1.1 2.6-1.7.2-.1.5-.2.7-.3.1 0 .2.1.2.1 0 .1.1.2 0 .3-.1.1-.2.3-.3.3-.4.3-.8.5-1.2.7-2.6 1.6-2.6 1.6-4.1 4.3-.8 1.4-1.9 2.4-3.4 2.9-.7.2-.7.6-.7 1.1-.1.1-.2.2-.1.3.1.1.2 0 .3-.1.5-.1.8-.6 1.3-.7.1 0 .3-.1.4.1.1.2.1.4-.1.5l-.9.6-2.4 1.8c-.4.3-.7.7-.9 1.2-.3.7-.8 1.3-1.1 2-.1.3-.1.5.2.6-.1.2-.2.4-.3.5-.5 0-.7.3-.9.7-1 1.5-2.5 2.3-4.1 2.9-.3.1-.4-.2-.4-.5v-.3c.3 0 .6 0 .9-.2 1.9-.9 3.4-2.3 4-4.4.1-.1.2-.1.1-.1 0 0 0 .1-.1.1-.5 0-.8.3-1.2.5-.4.2-.8.5-1.2.5.1-.8.7-1 1.2-1.4.5-.3 1.2-.4 1.7-1.2.1-.1 0-.1-.1 0l-.1.1h.3s.1 0 .1-.1c0 0 0-.1-.2 0-1.4.5-2.7.4-3.9.4-.8 0-1.1.3-1.1 1.1v1.4h-.6v-.7c-.1-.4-.2-.4-.6-.3-.1 0-.2.1-.3.1-.2-.5-.4-.9-1-1-.4-.1-.8-.4-1.2-.6-.5-.3-.7-.2-.9.3-.1.4-.2.7-.6.7-.1-.9-.7-1.5-1.4-2.1-.2-.2-.4-.1-.6.2-.1.1-.2.3-.2.4-.1 1.3-.7 2.5-1.3 3.7h-.7c0-.1.1-.3.1-.4.6-1.5 1.3-2.9 1.3-4.5v-.1c.1-.3.4-.5.7-.4.4.1.6.5 1.2.5-.2-1.3.6-2.4 1.2-3.5.1-.1.1-.2.2-.3.5-.9.9-1.8.9-2.9 0-.3.1-.5.1-.7.1-.3.3-.4.6-.3.1 0 .2.1.3.1.4.4.7.2 1-.1.5-.6 1.1-1.1 1.5-1.7.7-1 1.4-2.1 2.1-3.2.3-.6.6-1.2 1-1.7.1-.1.2-.2.4-.2s.3.1.3.3c0 .3.1.6.2.9 1 1.9 1.6 3.9 1.1 6 .4.2.7-.1.9-.2 1-.4 1-.4.2-1.2-.9-1-1-2-.3-3.2.2-.4.2-.7.1-1.2-.5-1.2-.1-2.2.8-3 .3-.3.6-.7 1-1 1.2-.9 2.2-1.9 3.1-3.2l.2-.2c.2-.2.5-.1.6.1.4.7.4.7.9.2.3-.2.5-.5.8-.7 1-.8 2-1.6 2.6-2.8 0-.1.1-.2.2-.2.1-.1.3-.1.4 0 .1.2.2.3.3.5.1.3.1.6.2.9.1.3.1.6.1.9v.9c0 .3-.5.4-.2.7.8-.4.8-.4.8-.9 0-.3-.1-.5-.2-.7-.1-.5-.2-.9 0-1.4.4-.8.6-1.6 1.2-2.3.5-.6 1.1-1.2 1.6-1.8.8-.8 1.5-1.8 1.9-2.9.8-1.7 1.6-2.9 2.8-3.9zm1.7 5.1c-.2.1-.2.1-.1.1 0 0 .1 0 .1-.1h.1v-.1l-.1.1zm-20.9 24.2c0 .3-.1.5-.3.6-.7.4-1.3.7-2.1.6-.4 0-.6.3-.5.7.1.3.3.5.7.3.8-.3 1.5-.5 2.3-.6.4 0 .8-.2 1.1-.4.1-.1.2-.2.2-.4-.3-.4-.6-.9-1.4-.8 0-.3.1-.5.3-.7.3-.3.6-.7.8-1.1.1-.2.2-.5 0-.7-.2-.2-.4-.2-.7-.1-.2.1-.5.1-.7.2-.9.4-1.8.9-2.5 1.7-.2.2-.3.5-.1.8.2.3.4.4.8.4.3 0 .6-.1.9-.2.4-.2.8-.4 1.2-.3zm27.7-26c-.2 0-.5 0-.6.1-1.4.6-2.8 1.1-4.2 1.8-.5.2-.9.5-1.3.8-.3.2-.4.5-.3.8.1.3.4.5.7.5.2 0 .4 0 .6-.1.9-.3 1.7-.6 2.5-1 1.2-.7 2.1-1.6 2.6-2.9v-.1c0-.1-.1.1 0 .1zm-35 26c.3.1.7.1 1 .2.3 0 .5-.2.4-.4-.2-.9-.3-1.8-.3-2.7 0-.3-.4-.4-.6-.2-.5.4-.6.6-.4 1.1.1.2.2.5.3.7.1.4-.1.7-.5.7 0-.8-.4-1.3-1.1-1.6-.2.7-.3 1.3-.6 1.9-.3.6-.6 1.2-1 1.7-.5.8-.8 1.7-.7 2.7.1.6.1.7.7.8.5 0 .9.1 1.3.6.3.3.7.6 1.1.8.3.2.6.2.9 0 .2-.1.4-.3.6-.5.5-.5 1-1.1 1.6-1.7 1.1-1.2 1.2-2.3.5-3.9-1.4.3-2.5 1.2-3.5 2.3-.1.2-.3.3-.4.4-.4.3-.9.6-1.4.9 0 0-.2 0-.3-.1-.1-.1-.1-.2 0-.3.5-.6.9-1.4 1.6-1.8.7-.4.9-.9.8-1.6zm5.1-7.8c-.7.9-1.5 1.8-2.2 2.7-.7 1-1.2 2.1-1.1 3.4.1.8.5 1.2 1.3.7.1-.1.2-.1.3-.1 1.5-.3 1.8-1.6 2.4-2.7 0-1.3.3-2.7-.7-4zm15.7-9.4s.2 0 .5-.1c2.1-.6 3.5-2 4.7-3.6.1-.2.2-.4.2-.6 0-.2-.1-.3-.3-.3h-.3L448 181c-.5.2-.9.7-1.2 1.1-.2.3-.2.5 0 .8.1.5.3.7.9.6zm-5.1 6.5c.8.2 1.5-.3 1.9-1 .3-.5.6-1.1.8-1.6.1-.4.5-.8.2-1.1-.4-.5-.8 0-1.2.1-.5.1-.9.6-1.5.6-.9 0-1.2.5-1.4 1.3-.6 1.3-.4 1.7 1.2 1.7zm-5.4 11.3c.1 0 .4 0 .6-.1 1.3-.8 2.5-1.7 3-3.2.1-.4 0-.6-.4-.6-1.3.2-2.6.4-3.4 1.6-.2.3-.4.4-.7.6-.4.2-.6.6-.5 1 .1.5.5.6.9.7h.5zm1.3-9.9v-.7c0-.3-.4-.4-.6-.2-.6.5-1.1 1.1-1.7 1.5-.5.4-.9.8-1.3 1.3-.5.7-.5 1 0 1.8.2.3.6.4.9.3 1.6-.5 2.7-2.2 2.7-4zm-7.4 14.8c2.2-.2 3.9-1.3 5.1-3.2 0-.1.1-.2 0-.3 0-.1-.2-.1-.3-.1-1 .3-2.1.5-3.1.8-1.3.3-2.1 1.2-2.8 2.2-.1.2 0 .4.2.5.4.1.6.1.9.1zm9.4-11.7c.2 0 .4-.1.7-.2 1.1-.5 2.1-1.2 3.1-1.8.2-.1.6-.1.5-.4 0-.1-.3-.3-.4-.4-.4-.2-.8-.2-1.1-.4-.8-.4-1.4-.2-2.1.2-.8.4-1.2 1.2-1.5 2-.3.4.3 1 .8 1zm9.6-8.1c-1-.1-1.8.1-2.6.5-1.4.7-2.1 2.1-3.1 3.3-.1.1 0 .3 0 .4.1.1.3.2.4.2.9-.2 1.8-.4 2.5-1.1 1-.9 1.8-2.1 2.8-3.3zm-10.7-.4c-.1 0-.2-.1-.2 0-1.3 1.3-2.6 2.5-3.9 3.8-.3.3-.4.7-.3 1.1.1.4.5.6.9.4.8-.4 1.5-1.1 1.9-1.9.2-.5.5-.9 1-1 .4-.1.5-.5.6-.8.1-.6.1-1.1 0-1.6zm18.3-4.7c-1.3-.3-3-.1-4.1.4-.7.3-1.4.8-2.2 1-.4.1-.7.4-1 .7-.1.1-.1.3.1.4.3.1.6.1.9.1 1.7-.2 3.4-.8 4.9-1.5.5-.3 1-.6 1.4-1.1zm7.7-4.7c-1.6-.2-2.9.1-4.1.6-1 .4-1.9 1.1-2.8 1.7-.1 0-.1.2-.1.3 0 .1.2.1.2.1.4 0 .8.1 1.2 0 2-.6 3.8-1.3 5.6-2.7zm-16.7 7.6c-.1 0-.4 0-.5.1-.6.5-1.3 1-1.6 1.8v.3c0 .1.1.1.3.1 1.3-.6 2.7-.8 4.1-1.1.7-.2 1.5-.2 2.2-.7.1-.1.2-.2.1-.4 0-.1-.2-.1-.3-.1-1.2.4-2.5.4-3.7 0h-.6zm20.5-13.3c-.1-.2-.4-.2-.5-.2-1.2.3-2.4.4-3.5.9-1.5.6-2.9 1.5-4.5 1.9 0 0-.1 0-.1.1s-.1.2-.1.3c0 .1.2.1.2.1.8-.2 1.6-.3 2.3-.5 1.8-.7 3.7-1.5 5.5-2.2.2-.2.4-.3.7-.4zm-24.6 11.4c-1.2 1.1-2.1 2.2-3.3 2.9-.3.2-.4.5-.3.8 0 .1.1.3.2.4.1.1.3.1.4 0 .8-.5 1.5-.9 2.3-1.4.6-.3.9-.8.8-1.5-.1-.3-.1-.6-.1-1.2zm9.6-1.6c.5-.3 1.3-.2 2-.2h.6c.3-.1.7-.1.8-.4.1-.4-.4-.4-.6-.5-.4-.1-.9-.3-1.3-.3s-.7-.2-.8-.6c-.1-.2 0-.5-.3-.4-.1 0-.2.2-.3.3l-.6 1.5c-.2.4 0 .6.5.6zm-5.7-1c.2.2.4.1.6.1.7-.3 1.4-.7 2.2-1.1.7-.3 1-.8 1.2-1.5.1-.2.1-.4-.1-.6-.2-.1-.4-.1-.5.1-.8.8-1.7 1.4-2.6 2-.3.3-.7.6-.8 1zm7.5-3.6c.1 0 .2 0 .3-.1.9-.4 1.8-.8 2.6-1.2l.3-.3c.1-.2.1-.4 0-.6-.1-.1-.3-.1-.4-.1-1 .4-1.9.9-2.8 1.6l-.2.2v.3c.1.1.1.2.2.2zm-16 12.3c-.3.5-.4.7-.5 1-.4.6-.3 1.3-.3 2 0 .1.2.3.3.3.5-.1.7-.5 1-.8.2-.2.1-.5 0-.7-.3-.5-.4-.9-.5-1.8zm12.2-13.3c-.1-.1-.1-.2-.2-.2h-.1c-.5.3-.5.8-.7 1.3 0 0 0 .1.1.1h.1c.4-.2.7-.6.8-1.2z" />
                                                <path class="st9"
                                                    d="M370.3 230.7c.2-.1.4-.1.6-.2.3-.2.8 0 .8-.5 0-.4-.5-.4-.8-.5-.5-.1-.9-.3-1.3-.6-.7-.4-.8-1.1-.9-1.9-.1-.6 0-1.2.3-1.8.3-.6.8-1.1 1-1.7.1-.2.4-.5.6-.4.8.3 1.1-.2 1.3-.8 0-.1.1-.3.2-.4.5-.7 1-.9 1.9-.7.7.2 1.4.4 2 .8.5.3 1.1.5 1.7.7.3.1.5-.1.5-.3.1-.8.2-1.5.5-2.2.7-.7 1.6-.8 2.5-.6 1 .2 2 .4 2.9.6.2 0 .3.2.4.4.3.2.6.2.9-.1 0-.1.1-.1.2-.1.7.3 1.5.3 2.2.3.4.5.9.9 1.3 1.4.4.4.5.9.1 1.4-.2.3-.5.6-.8.9l-1.2.9c-.6.1-.9.5-1.4 1.2.8-.4 1.3-.5 1.7-.9 1.1-.2 2.1-.7 3.3-.7.5 0 1 0 1.5.1.7.2 1.2.9 1 1.6-.2.9-.4 1.8-.9 2.6-.7.1-1.4 0-2.1-.2-1.1-.3-1.5-.2-2.4.1 1.2.2 2.2.5 3.3.7 1 .7 1.6 1.7 2.2 2.7-.1.5-.2 1-.3 1.4-.2.8-.8 1.1-1.6.9-.8-.2-1.6-.4-2.5-.5-.9-.3-1.7-.7-2.9-.5.7.6 1.3 1 2 1.2.5.6.7 1.2.7 2 0 1.3-.7 2.1-1.6 2.8-.3.2-.7.1-1-.1-.3-.1-.6 0-.7.4-.1 1.2-1.2 1.5-2 1.9-.2.1-.6 0-.9 0-.3 0-.6-.2-.9-.2-1-.2-1-.2-1.4.7-.1.1-.1.3-.1.4-.5 1.1-1.3 1.6-2.4 1.3-.7-.2-1.3-.5-2.1-.3-.3.1-.5-.2-.6-.4-.2-.4-.4-.7-.4-1.1-.1-.7-.2-1.3-.7-1.8 0-.4.1-.8-.2-1.1-.3 0-.5.2-.6.3-.4.3-.9.5-1.4.7-.9.3-1.8-.1-2.2-.9-.2-.4-.5-.7-.9-1-.4-.2-.5-.6-.4-1.1.1-.2.1-.5.2-.7.1-.4.3-.9.1-1.3-.2-.4-.7-.3-1.1-.5 0 0-.1 0-.1-.1-.5-.3-.7-.6-.6-1.3.2-1.3.8-2.3 2.2-2.7.3.1.8-.2 1.3-.2zm14.4-1.8c0-1.4-.7-2.5-1.8-3-1.7-.7-3.5-.7-5.2.2-.7.4-1.4 1-2.1 1.5-1 .8-1.5 1.9-1.7 3.2-.1.5-.1 1.1.1 1.7.4.8.7 1.8 1.6 2.1 1.2.5 2.4 1.2 3.8.9.1 0 .2-.1.3-.1 1.7-.3 2.7-1.6 3.7-2.7 1-1 1.1-2.5 1.3-3.8zm-5.2 12.8c-.1-.3-.1-.6-.2-.9-.3-.6-.4-1.1-.6-1.7-.2-.7-.4-1.4-.6-2-.3-1.1-1.4-1.2-2.2-1.3-.6-.1-.5.7-.7 1.2-.5 1.1-.4 2.2-.3 3.3.1.8.4 1.7.7 2.5.6.2 1.2.5 1.8.7 0 0 .1 0 .1.1.9.3 1.5 0 1.8-.9.1-.4.1-.7.2-1zm-10.2-3.8c.1 0 .3.2.4.4.2.2.4.5.6.7.5.7 1.3.8 2 .3.4-.3.7-.7 1-1.1.8-.9 1.1-2 1.5-3.2-.7-.4-1.2-.9-1.5-1.6-.1-.3-.5-.4-.8-.2-.3.2-.6.5-1 .7-1.4 1-2.5 2-2.2 4zm15.4-5.2c1.9.5 3.7.9 5.6 1.4.3.1.6 0 .9.1.8.1 1.3-.9.9-1.5-.4-.5-.8-1.1-1.2-1.6-.1-.1-.3-.3-.5-.3-1.3-.2-2.6-.5-3.9-.6-.8-.1-1.1.2-1.3.9-.2.4-.3.9-.5 1.6zm-.1 7.5c0-.1-.1-.3-.1-.4-.3-1.5-1.4-2.5-2.3-3.7-.2-.2-.5-.3-.7-.2-.6.2-1.3.3-1.9.6-.3.1-.5.4-.4.7.1.4.2.9.3 1.3.3 1.4 1.1 2.3 2.5 2.7.9.3 1.8 0 2.4-.7.1-.1.1-.2.2-.3zm-11.4-10.5c.5-.9.7-1.8 1.5-2.4.2-.2.2-.5-.1-.6-1.1-.5-2-1.3-3-2.1-.1-.1-.1-.2-.2-.2-.3-.2-.6-.1-.8.1-.7.8-1.1 1.7-.9 2.8.1.4.2.7.5.9l3 1.5zm15-6.7c0-.1 0-.2-.1-.3-.6-.9-1.5-1.2-2.5-1.2-.3 0-.6.1-.8.3-.8.7-1.4 1.6-1.9 2.6-.1.2 0 .4.1.5.1.1.2.2.4.3.4.3.7.7 1.1.8.6.2.8-.5 1.2-.8.7-.5 1.4-1 2.1-1.6.2-.1.4-.3.4-.6zm-.5 14.3c.1-.5-.2-.9-.5-1.2-.9-.7-1.9-1.4-2.9-1.9-.1 0-.2-.1-.3-.1-.4-.1-.9.3-1.1.7-.1.3 0 .5.2.7.7.7 1.3 1.5 1.7 2.3.2.5.6.8 1.1 1.1.6.4 1 .3 1.4-.3.2-.4.4-.8.4-1.3zm.7-9.1c.6 0 1.1.1 1.6.2 1.5.4 1.7.2 2.1-1.3 0-.1.1-.2.1-.3.1-.4 0-.6-.5-.8-.3-.1-.7-.3-1-.2-1.8.3-3.4.8-5 1.6-.3.2-.4.6-.3.9.1.3.4.4.7.3.8-.2 1.6-.5 2.3-.4zm-8.4-3.6c.9.1 1.6-.3 1.9-1.2.1-.4.4-.7.6-1.1.2-.3.4-.5.5-.7.1-.2 0-.5-.2-.5-.9-.2-1.9-.5-2.8-.4-.5 0-.8.3-.9.7-.2.6-.3 1.2-.5 1.8-.1.9.2 1.4 1.4 1.4zm-4 1.5c.1 0 .2 0 .3-.1.5-.3.9-.6 1.4-.9.1-.1.2-.3.1-.4-.2-.6-.5-1.1-1.1-1.3-.6-.2-1.1-.5-1.7-.7-.4-.2-.8-.3-1.3-.5-.2 0-.4 0-.6.1-.7.3-.9 1.4-.4 1.9.8.8 1.8 1.4 2.9 1.9h.4zm-7.6 8.2c.6.1.9 0 1.1-.2.3-.2.7-.5 1-.7.6-.6 1.3-1.1 2.2-1.2.2 0 .3-.2.3-.4.1-.4-.2-.7-.6-.7-1.5.2-2.8.7-4.1 1.4-.5.3-.6.9-.6 1.5 0 .1.1.3.3.3h.4z" />
                                                <path class="st13"
                                                    d="M419.9 209.9c.5-1.2 1.2-2.3 1.3-3.7 0-.1.1-.3.2-.4.1-.3.3-.4.6-.2.6.6 1.3 1.2 1.4 2.1-.1.5.2 1 .3 1.5.1.7 0 1.3-.7 1.7-.6.3-.9.8-.6 1.5.1.3-.1.5-.4.5-1.3.2-2.2-.6-2.2-1.9-.3-.4-.1-.8.1-1.1z" />
                                                <path class="st10"
                                                    d="M366.1 243.3c-.1.3 0 .6.3.8 1.2.6 2.3 1.1 3.6.8h.2c.1 0 .2.1.2.2s0 .2-.1.3c-.3.1-.6.3-1 .4-.3.1-.6 0-.9 0-.2 0-.4 0-.5.2 0 .2.1.4.2.5.3.4.7.7 1 1.1v.3c-.1.1-.3.2-.4.2-.3 0-.4-.2-.6-.4-.3-.2-.4-.6-.8-.6-.3.4 0 1-.3 1.5-.7-.2-.6-.9-.8-1.4-.3-.5-.4-1-.9-1.4-.6.4-.9 1.3-1.9 1.3.4-1 .8-2 .2-3 0-.1 0-.2.1-.3.9.3 1.6-.2 2.4-.5z" />
                                                <path class="st13"
                                                    d="M426.9 208.4c.1 0 .2-.1.3-.1.4-.1.6-.1.6.3v3.1c-.5 0-.7.3-.9.7-.3.5-.7.9-1.3 1.2-.4.2-.8.1-1.1-.1-.2-.1-.3-.3-.2-.5.2-.7.6-1.4.4-2.2 0-.1.2-.2.3-.3.5-.4 1-.8 1.6-1.2.1-.3.3-.5.3-.9z" />
                                                <path class="st10"
                                                    d="M366.1 243.3c-.8.3-1.5.8-2.5.5-.5-.5-.9-1-1.5-1.3-.3-.6-.6-1.2-.8-1.7.3.1.7.2 1 .4 1.3.7 2.6.8 3.9.1.4-.2.5-.2.4.4 0 .4.2.6.5.6.2 0 .5 0 .7-.1.5-.2 1-.1 1.5 0-.9.5-2 .9-3.2 1.1z" />
                                                <path class="st13"
                                                    d="M430.6 209c.5 0 .8-.3 1.2-.5.4-.2.8-.5 1.2-.5-.6 2.2-2.1 3.5-4 4.4-.3.1-.6.1-.9.2 0-.3.2-.6.3-.9.8-.9 1.5-1.8 2.2-2.7z" />
                                                <path class="st12"
                                                    d="M430.6 209c-.7.9-1.4 1.8-2.2 2.7h-.6v-1.5c.3 0 .7.1.9-.3.2-.2.5-.4.7-.6.4-.3.8-.4 1.2-.3z" />
                                                <path class="st14"
                                                    d="M387.9 235.3c-.7-.2-1.3-.5-2-1.2 1.2-.1 2 .2 2.9.5-.1.5-.6.4-.9.7z" />
                                                <path class="st8" d="M331.8 251.5c.3-.2.7-.3 1.1-.2-.3.3-.7.2-1.1.2z" />
                                                <path class="st13"
                                                    d="M428.1 212.6v.3c-.1 0-.4 0-.4-.2.1-.1.3-.1.4-.1z" />
                                                <path class="st15" d="M363 244.3s.1 0 0 0c.1 0 0 0 0 0z" />
                                                <path class="st8"
                                                    d="M357.6 245.9c.1-.1.2-.2.4-.2-.1.1-.3.2-.4.2zM532.8 57.1c-.2 0-.2-.1-.3-.2.2 0 .2.1.3.2zM533.1 57.3c-.1 0-.2-.1-.2-.2.1.1.2.1.2.2z" />
                                                <path class="st12"
                                                    d="M147.8 208.5v-.1c-.5-1.4-1.1-2.7-2.2-3.7-.7-.7-1.6-1.2-2.4-1.8-.3-.2-.6-.4-.8-.7-.1-.1-.1-.3-.1-.4.1-.2.3-.2.5-.1.5.2.9.7 1.4.8.2-.2.1-.5.1-.7 0-.3-.1-.6-.5-.7-1.7-.5-2.9-1.6-3.7-3.2-1.3-2.4-1.3-2.4-3.7-3.9l-1.8-1.2c-.1-.1-.1-.3 0-.4.1-.1.2-.1.3-.1.2 0 .4.1.6.2.9.6 1.8 1.2 2.7 1.7 1.2.8 2.4 1.5 3.9 1.7.7.1 1.3.4 1.8.7.3.2.6.3 1 .6.1-.7-.2-1.2-.6-1.4l-1.2-.9c-.5-.3-1-.5-1.6-.4-1 .1-1.8-.2-2.6-.7-.3-.2-.5-.3-.8-.5-1.1-.9-2.3-1.4-3.8-1.5-.2 0-.4-.1-.6-.2-.1 0-.1-.2-.1-.3 0-.1.1-.2.1-.3.4-.2.9-.1 1.2-.5 0-.1-.1-.2-.1-.2-.9-.3-1.5-1-2.1-1.7-2.3-2.7-2.3-2.7-5.5-4.6-1.6-.9-3.2-1.8-5-2.4-.2-.1-.4-.1-.5-.3-.1-.1-.1-.3-.1-.4 0-.1.1-.1.2-.2.2 0 .4-.1.7-.1-.8-.9-1.4-1.8-2.6-2.1-1.2-.3-2.4-.9-3.5-1.6-.7-.4-1.3-.8-1.7-1.5-.6-1.1-1.6-1.5-2.7-1.8l-2.7-.6c-.3-.1-.6-.2-.8-.4-.1 0-.1-.2-.1-.3 0-.1.1-.2.2-.2.2 0 .4 0 .6.1.9.3 1.8.5 2.7.7.9.2 1.7.4 2.4.9 1.4 1 2.9 1.2 4.6 1.1-.3-.9-.6-1.6-1.5-2-2.5-1.1-5-2.2-7.7-2.8-.2 0-.4-.1-.6-.1-.2-.1-.4-.2-.4-.4 0-.3.3-.3.5-.3.3 0 .6.1.9.2.5.1 1 .3 1.3-.3.1-.1.5-.1.7-.1 1.1 0 2.2.3 3.3.6.7.2 1.4.5 2 .7 1.4.6 2.8 1.2 4.3 1.5 2.3.5 4.1 1.7 5.6 3.5.1.1.2.3.4.2.1-.1.2-.2.2-.4.1-.1.1-.3.1-.4.1-.4-.1-.6-.4-.9-2.5-1.9-5.3-3.3-8.3-4.1-.4-.1-.9-.3-1.3-.4-.1-.1-.2-.2-.2-.4.1-.1.2-.3.4-.2l1.2.3c3 .8 5.7 2.1 8.2 4 .9.7 1.8 1.3 2.3 2.3.2-.2.2-.4.1-.6-.7-1.5-1.4-3-2.8-3.9-.1-.1-.1-.3-.1-.4.1-.2.3-.2.5-.2.5.2 1 .6 1.3 1 .6.8 1.2 1.6 1.5 2.5.6 1.5 1.5 2.7 2.6 3.7 0 .5.5.6.7.9 1.1 1.3 1.9 2.7 1.4 4.4v.2c-.1.7-.1.7 1 1-.8-1.3-.3-2.5 0-3.7.1-.4.6-.5.8-.1.8 1.5 2.3 2.3 3.4 3.5.2.2.3.4.6.3 0-.1.1-.2.1-.3.3-.7.6-.8.9-.3.9 1.2 1.9 2.3 3.1 3.2.4.3.7.7 1.1 1.1.9.8 1.1 1.8.7 2.9-.2.5-.2.8.1 1.3.8 1 .4 2-.2 3-.2.3-.7.4-.8.9.6.4 1.2.7 1.9.7-.2-2 0-3.5.7-5.2.3-.6.7-1.1.7-1.8 0-.2.4-.2.5-.1.2.3.3.5.5.8.8 1.5 1.7 2.9 2.7 4.3.5.6 1 1.2 1.5 1.7.3.3.6.5 1 .2.1-.1.2-.1.3-.1.3-.1.6.1.7.4 0 .1.1.2.1.3-.1 1.4.5 2.6 1.3 3.7.6 1 1.2 2 1.1 3.2.5.1.7-.3 1-.4.5-.2 1-.1 1 .5 0 1.3.5 2.4 1 3.5.2.4.3.9.6 1.3.6 1.2.4 2.3-.4 3.3-.3.4-.6.7-1 .9-.2.1-.4.2-.5.3-.3.8-1 1.4-1.6 2-.2.2 0 .5.1.7-.3.1-.6.4-1 .1-.2-.2-.4-.4-.7-.3-1.3.2-1.8-.9-2.6-1.6-.3-1.2-1.4-1.4-2.3-1.7-1.4-.5-2.5-1.4-3.4-2.4-.2-.2-.3-.4-.4-.6-.2-.3-.5-.4-.8-.4-.2-.3-.2-.4-.1-.6zM126 175.3v.1h.1l-.1-.1c-.9-1.3-2.1-1.9-3.6-2.3-.2 0-.3.1-.3.2v.3l.4.4c.8.4 1.7.9 2.6 1.3.3 0 .6 0 .9.1zm7 3.7c.1.2.1.2.1.1.1-.1 0-.1-.1-.1-.1-.1-.1-.3-.2-.4-1.1-1.1-2.5-1.7-3.6-2.8h-.3c-.1 0-.1.2-.1.3 0 .6.3 1.1.8 1.4 1.1.6 2.1 1.4 3.4 1.5zm15.7 26.9c-.1-.1-.1-.2-.2-.2-.1-.1-.2 0-.2.1l.1.1h.3c.1.3.3.5.5.6.9.4 1.8 1 2.6 1.6.2.2.4.3.6.4.2.1.4.1.5-.2.1-.6.1-1.2 0-1.8-.1-.6-.7-.9-1.3-.7-.7.3-1.3.5-2 .1-.3-.1-.6 0-.9 0zm-13.8-20.5c0 .2.1.2.1.1s-.1-.1-.1-.1c0-.6-.6-.9-.9-1.4-.5-.8-1.1-1-1.9-.7-1.2.4-2.4.4-3.6 0h-.3s-.1 0-.1.1v.1c.3.3.7.5 1 .6 1.8.5 3.8.6 5.6 1.3h.2zm18.6 26.3c.1.1.1.2.1.1.1 0 0-.1-.1-.1-.4-.6-.8-1.3-1.2-1.9-.9-1.2-2-2.2-3.6-2.4l-.1-.1c0 .1.1.1.1.2.7 2.4 2.4 3.8 4.8 4.2zm-7.3-14.7c0-.1-.1-.2-.1-.1s.1.1.1.1c-.2 1.3.5 2.1 1.5 2.7.4.3.9.5 1.4.6.4.1.7 0 .9-.4.2-.3.1-.6-.2-1-.9-1-2.1-1.7-3.6-1.9zm-.9 4.9c0-.1-.1-.2-.1-.1s0 .1.1.1v.3c1.2 1.9 3 2.8 5.2 3.1.2 0 .6.1.7-.2.2-.3-.1-.5-.3-.8-.5-.8-1.2-1.4-2.1-1.7-1.1-.3-2.3-.6-3.5-.7zm-25.4-28.2l-.1-.1c0 .1 0 .1.1.1 0 .4 0 .7.3 1 1.2 1.5 2.8 2.4 4.7 2.9.2.1.5 0 .7 0 .3 0 .4-.3.4-.5 0-.3-.1-.6-.3-.8l-.9-.6c-1.6-.7-3.3-1.4-4.9-2zm20.5 22.7c0-.1-.1-.2-.1-.1s0 .1.1.1c.4 1.9 1.7 2.9 3.3 3.8.3.2.7.2 1 .1.9-.2 1.1-.9.6-1.6-1.3-1.5-2.8-2.5-4.9-2.3zm-12-18.4c-.1-.1-.1-.2-.1-.1s.1.1.1.1c-.1.5.1 1 .4 1.4 1.3 1.6 2.9 2.7 4.9 3.1.4.1.7 0 .9-.3.2-.3.2-.7 0-1-.2-.3-.4-.6-.8-.7-1.6-.9-3.4-1.9-5.4-2.5zm28.2 26.2c-.1-.2-.1-.4-.2-.5-1-1.1-2.1-2.2-3.4-3-.4-.3-1-.3-1.3-.7-.2-.2-.4 0-.4.2-.1.6 0 1.3-.2 2-.1.2.1.5.2.7.7.9 1.4 1.8 2.2 2.7.5.5 1.1.9 1.9.2.1-.1.4-.1.6-.2.3-.4.4-.8.6-1.4zm2.6 7.8c.7.1 1.3.2 1.8-.2.9-.6 1.1-1.5.7-2.6-.4-1.1-.9-2.3-1.3-3.4-.1-.4-.2-.8-.6-1-.2-.1-.9.4-1.1.9-.1.2-.1.4-.2.6-.4.9-.2 1.8-.3 2.7 0 .4.1.8.5 1 .6.4.8 1 .5 2zm-9.7-20.2c-.6 1-.7 1.8-.8 2.7-.1 1.5.4 2.8 1.7 3.7.5.3 1.1.6 1.6.8.2.1.4 0 .5-.2.1-.2.2-.4.2-.6.2-1.4-.2-2.6-1.1-3.7-.8-.7-1.4-1.6-2.1-2.7zm-10.5-2.7c.3 0 .5 0 .8-.1.7-.2 1-.9.6-1.5-.5-.8-1-1.5-2.1-1.6-.6 0-1.1-.4-1.7-.7-.2-.1-.5-.2-.7 0-.2.2 0 .4 0 .6.1.7.5 1.2.8 1.8.5 1.1 1.2 1.5 2.3 1.5zm4.4.4c-.8 1.2-.5 2.3.1 3.3.6.9 1.4 1.5 2.3 2 .1.1.3 0 .4-.1.6-.6.7-1.3.4-2.1-.2-.4-.4-.7-.8-.9-.9-.7-1.6-1.4-2.4-2.2zm12.2 7.9c-1 1-1.3 1.7-1.1 2.8 0 .2.1.4.3.5.6.4.9 1.1 1.3 1.6.5.6 1.2 1.1 1.3 2 0 .2.4.2.5 0 .1-.2.2-.4.2-.5.2-.8-.1-1.5-.6-2.2-.8-1.2-1.5-2.5-1.9-4.2zm-13.7-4.7v-.3c-.4-1.2-1.2-2-2.4-2.4-.1-.1-.3-.1-.4 0-.7.4-1.5.5-2.3.8-.2.1-.2.4 0 .5.9.5 1.7 1.1 2.6 1.6.5.3 1 .4 1.5.6.5.2 1-.2 1-.8zm12.1 14.7c-.3 1.8-.2 3.1.9 4.4.5.6 1 .9 1.7.8.6-.1.8-.4.7-.9-.2-.6-.7-1-.4-1.7 0-.1-.1-.3-.2-.4-1-.6-1.8-1.2-2.7-2.2zm-22.7-21.9c.5.6 1 1.1 1.3 1.6.4.7 1 1.1 1.5 1.7.7.7 1.6.8 2.4 1.1.2.1.4-.1.5-.3.1-.2 0-.3-.1-.4-.4-.4-.8-.9-1.1-1.4-.6-.8-1.3-1.5-2.2-1.9-.6-.3-1.3-.6-2.3-.4zm10.7-.5c-.3.8 0 1.5.2 2.2 0 .1.2.3.3.3.5.1.7.5 1 .9.6.8 1.1 1.6 2 2 .4.2.8 0 .9-.5.1-.6-.2-1.1-.5-1.5-.4-.6-2.9-2.7-3.9-3.4zm-18.5-4.7c2.2 1.5 4.3 2.2 6.5 2.6.3.1.6 0 .9-.1.2 0 .2-.2.1-.3-.3-.2-.5-.5-.8-.6-.9-.3-1.6-.8-2.5-1.1-1.3-.5-2.6-.8-4.2-.5zm-.3-2.2c-.7-.4-1.5-.7-2.1-1.2-1.3-1-2.7-1.2-4.2-1.3-.2 0-.4 0-.4.4 2 1.3 4.1 2.5 6.7 2.1zm-11-8.3c.3.4.6.4.9.5 1.4.4 2.6 1 3.9 1.6 1.2.5 2.4.9 3.6 1.1.1 0 .2 0 .3-.1.1-.1 0-.3-.2-.4-1.4-.5-2.7-1.1-4-1.7-.6-.3-1.2-.5-1.9-.6-.8-.1-1.7-.6-2.6-.4zm24.5 12.6c-.1.5.1.9.5 1.2.9.9 1.9 1.5 3 2h.3c.2-.1.1-.3.1-.4-.2-.3-.3-.7-.6-.9l-2.7-2.4c-.1-.1-.4 0-.5.2-.1.1-.1.2-.1.3zm-13.1-3.4c1.3.8 2.7.3 3.9.8.1 0 .3 0 .5-.1-.1-.6-.4-1.1-.7-1.5-.2-.4-.3-.5-.8-.2-.3.2-.6.3-1 .3-.6.1-1.2.3-1.9.7zm23.1 21.1c-.4 0-.7.3-.7.5 0 .3.2.5.4.5l3.3.9c.2.1.4-.1.4-.4 0-.4-.1-.7-.6-.7-1 0-1.8-.2-2.5-.8-.1.1-.2 0-.3 0zm-5.2-12.1c-.3.4-.2 1-.6 1.4-.2.2-.2.5 0 .7l.6.6c.1.1.3.2.4.1.1-.1.2-.2.2-.4.2-.9.2-1.7-.6-2.4zM160.9 217.2c.3-.1.5-.2.7-.6.2-.6.5-1.1.7-1.7.3.1.5.3.3.7-.2.5.1.6.5.7 0 .4-.4.7-.7.9-.3.3-.3.6 0 .9-.2 0-.5 0-.7.1-.6.1-.6.1-.7-.5-.1-.1-.1-.3-.1-.5zM201 226.1c1.3 0 2.5.3 3.5 1.2.5.4 1.1.8 1.5 1.2.8.9 1.2 2 1.4 3.1.2 1.4-.9 3.4-2.4 3.9-.4.1-.8.2-1.2.4-1.7.6-3.1.1-4.3-1-.2-.2-.3-.4-.6-.5-1.8-1.1-2-2.9-2.3-4.7-.2-1.3.5-2.2 1.5-3 .6-.4 1.3-.5 2-.6h.9zm2.2 7.9l.2.2c.1 0 .3 0 .4-.1.4-.4.5-.8.7-1.3.1-.3-.1-.5-.4-.6-.2-.1-.4 0-.5.2-.1.6-.2 1.2-.4 1.6z" />
                                                <path class="st16"
                                                    d="M206.5 239.8c.2 1.2-.5 2.2-.7 3.4 0 .2-.2.4-.4.4-.6.1-1.1.4-1.6.5-1 .3-1.6-.1-1.8-1-.1-.5-.2-1.1.1-1.6.5-1.1.7-2.2 1-3.3.2-.9.7-1.5 1.6-1.6.2 0 .4-.1.6-.2.3-.1.5 0 .6.3.3.9.8 1.9.6 3.1zM206.6 235.6c.6-.4 1.1-.8 1.4-1.5.2-.4.5-.5.9-.2l2.4 1.8c.3.3.5.6.6 1 .1.3 0 .6.1.9.2.5.2.9-.3 1.2-.2.1-.4.4-.6.7-.6.9-1.4.9-2.2.2-.8-.7-1.3-1.5-1.8-2.5-.1-.4-.3-1-.5-1.6zM190.4 234.7h-.4c-.6 0-1-.6-.8-1.2.3-.8.9-1.3 1.4-2 .1-.1.4-.2.5-.2l3.6-.6c1-.1 1.3.2 1.6 1.1l.3 1.2c0 .1-.1.3-.2.4-2 .4-4 .9-6 1.3zM202.2 237.9c-.2.6-.3 1.2-.5 1.8-.2 1-1 1.6-1.9 2-.1.1-.3.1-.4.1-1 .6-1.7-.1-2.4-.6-.2-.1-.2-.3-.1-.6.2-.9.6-1.7 1.2-2.4.1-.2.3-.3.4-.4.4-.4.5-1.1 1.1-1.2.8-.1 1.5.3 2.2.5.3.1.4.4.4.8zM208.3 230.3c-.3-.2-.4-.5-.5-.8-.1-.3-.2-.6-.4-.8-.3-.4-.8-.6-.7-1.1.1-.4.6-.5 1-.6.9-.4 1.5-1.2 2.3-1.8.4-.3.7-.3 1 .1.6.8.9 1.6.8 2.7-.1.4-.2.8-.6 1-1.1.3-2 .8-2.9 1.3zM195.7 222.1c.3 0 .6.1.8.3.8.7 1.4 1.6 1.9 2.6.1.3 0 .5-.2.7-1.4 1.2-1.4 1.2-2.9.1-.6-.5-1.3-1-1.9-1.5-.4-.3-.4-.6 0-1 .6-.8 1.5-1.2 2.3-1.2zM193.6 237.8c0-.4.1-.7.4-1 1-.9 2-1.5 3.2-2.1.4-.2 1.2.3 1.3.8 0 .1 0 .3-.1.4-.8.8-1.4 1.7-1.9 2.7-.2.3-.5.5-.8.7-.8.6-1.2.5-1.7-.4-.2-.3-.4-.7-.4-1.1zM196 228.8c0 .4-.4.7-.7.6l-.9-.3c-.9-.3-1.9-.3-2.9-.1-.1 0-.3.1-.4.1-1.3.2-1.5.1-1.9-1.2-.1-.3-.4-.7 0-1 .4-.3.8-.5 1.3-.4 1.2.3 2.5.4 3.7 1 .4.2.9.4 1.4.6.3.1.5.3.4.7zM200.9 221.2c.9 0 1.1.1 1.4.8.2.6.4 1.3.5 1.9.1.7-.3 1.2-1.1 1.2h-.9c-.5-.1-.9-.3-1.1-.8-.3-.7-.7-1.5-1.3-2.1-.2-.3-.1-.7.2-.7.8 0 1.6-.4 2.3-.3zM207.9 222.8c.1 0 .2 0 .3.1.7.4.9 1.4.4 1.9-.8.8-1.8 1.3-2.8 1.8-.3.1-.6.1-.9-.1l-.9-.6c-.7-.4-.6-.6-.2-1.2.1-.3.4-.5.6-.6 1-.5 2-.9 3.1-1.3h.4z" />
                                                <path class="st17"
                                                    d="M189.6 216.3c0 .2-.2.4.1.5 2 .9 3.5 2.6 5.5 3.5.4.2.7.4.8.9-.7.2-1.5.3-2.2.3 0-.2.1-.4-.1-.6-.3-.2-.5-.5-.8-.7-1.4-1-2.9-2-4.6-2.7-.2-.1-.5-.1-.7-.1-.1-.2 0-.4.2-.5l1.8-.6z" />
                                                <path class="st16"
                                                    d="M212.8 235c-.3 0-.6 0-.9-.2-.4-.3-.8-.5-1.1-.8-.6-.5-1.2-1-2.1-1.2-.3 0-.4-.4-.4-.7.1-.3.2-.4.5-.4h.6c1 .3 2 .6 3 1 .6.2.9.5 1.1 1.2.3.7.1 1.1-.7 1.1z" />
                                                <path class="st8" d="M196.1 221.3c.3 0 .6 0 .9.1-.3.1-.6.2-.9-.1z" />
                                                <path class="st10"
                                                    d="M214.9 242.7c0-.2-.1-.5-.1-.7.2 0 .4 0 .6.1 1 .4 2 .4 3.1 0 .2-.1.5 0 .7-.1-.2.4-.3.8-.5 1.1l-.3.3c-1.3.2-2.4 0-3.5-.7z" />
                                                <path class="st16"
                                                    d="M510 172.9c.6-1.1 1.1-2 1.6-2.9.2-.4.5-.6 1-.6s.7.1.7.6v5.5c0 .3-.3.5-.7.4-.3 0-.5-.1-.5-.4v-2.1-.5c0-.1-.1-.2-.2-.2s-.2 0-.3.1c-.3.6-.7 1.2-1 1.7-.2.4-.8.4-1 0-.3-.5-.6-1.1-.9-1.6-.1-.2-.2-.4-.5-.4 0 1 0 1.9-.1 2.8 0 .3-.2.4-.5.5-.5.1-.8-.1-.8-.6V170c0-.3 0-.5.3-.7.3-.1 1-.1 1.2.1.2.2.3.5.5.8.2 1.1.6 1.8 1.2 2.7zM505.2 170.1c0 .4-.1.6-.4.7-.5.1-1.1-.2-1.5.2-.4.4-.1 1.1-.2 1.6v2.8c0 .5-.2.7-.6.7-.5 0-.6-.1-.6-.6v-2.9-1.2c0-.3-.2-.5-.5-.5-.4 0-.8 0-1.2-.1-.3 0-.4-.3-.4-.6s0-.5.3-.6h4.5c.5-.1.6.1.6.5z" />
                                                <path class="st9"
                                                    d="M392.9 203.9c-.4-.6-1-.8-1.5-1.3-.7-.6-1.3-1.3-1.2-2.3 0-.4-.1-.6-.5-.9-.6-.4-.7-1.1-.5-1.8.1-.3.2-.7.4-1 .8-1.1 1.8-1.8 3.2-1 .2.1.4.2.5.3.3.3.6.2.9-.1.2-.2.5-.3.8-.5.2 0 .4 0 .6.1.9.5 1.7.5 2.4-.4.1-.2.4-.3.6-.4.7-.4 1.3-.3 1.7.4.3.5.6.6 1.1.6.6 0 1.1.2 1.5.7.2.2.4.3.6.4 1.8.5 2.6 1.9 2.9 3.6.6.2 1.2.3 1.8.5 1.5.5 2.1 1.9 1.5 3.3-.1.3-.3.5-.5.9.9.5 1.5 1.3 2.2 2.1.4.4.5.9.3 1.4-.2.6-.4 1.1-.7 1.7-.3.7-.3.8.4 1.2 1.7 1.1 1.5.8.9 3-.3.9-.8 1.5-1.6 1.7-.8.2-1 .7-1.1 1.4-.1.5-.2 1-.4 1.5-.3.8-.7 1-1.5.8-.5-.1-.9-.3-1.2-.6-1-1-2.2-1.8-3-3-.3.4-.1.6 0 .9.2.7.5 1.5.7 2.2.3.6.3 1.3.2 2 0 .6-.4 1-1.1 1.1-1.5.2-2.6-.4-3.2-1.8-.6-1.2-1.1-2.4-1.2-3.8 0-.1-.1-.3-.3-.3-.1 0-.2.1-.2.2-.2.7-.5 1.3-1 1.8-.3.3-.7.4-1.1.3-.5-.1-1-.2-1.5-.4-.9-.2-1.1-.5-1-1.6 0-.1.1-.2.1-.3.1-.2 0-.4-.2-.5l-1.8-.6c-.7-.4-1.2-1-1.3-1.8-.1-.7-.5-1.1-1.1-1.3-.6-.3-1.1-.8-.9-1.6v-.3c0-.1-.1-.2-.2-.2-.2-.1-.3 0-.4.1-.3.9-1 1.1-1.7 1.3-.8.3-1.7.3-2.6.3-.2 0-.5-.1-.6.3.3.5.9.7 1.3 1l.9.6c.2.2.4.5.3.8-.1 1.2-1.1 2.1-2.3 2.2-.5 0-1 0-1.5-.2-.9-.2-1.8-.6-2.7-1.1-.2.8 0 1.5 0 2.2.1.7-.3 1.4-.4 2.1-.1 0-.3 0-.4.1-1.1.5-2.2.3-3.3-.1-.6-.2-1-.6-1.2-1.1-.1-.3-.1-.7-.5-.9-.6.5-1.2 1-1.8 1.6-.6.5-1.2.6-1.9.3-.4-.1-.9-.3-1.3-.4-.7-.3-.8-.6-.7-1.3.1-.6.5-1.1.3-1.8.3-.1.3-.4.3-.7.1-.2.4-.5.1-.8-.7.6-1.5 1.2-2.2 1.8-.2 0-.3 0-.3.3h-.4c-.9 0-1.8-.3-2.6-.7-.9-.4-1.1-1.1-.6-2 .2-.4.5-.6.8-.9.2-.2.4-.3.3-.7-1.4-.2-2.9-.4-3.8-1.9v-.8c.3-1.1 1.1-1.7 2.2-1.8.2 0 .3-.1.4-.1.1 0 .3-.1.3-.3 0-.2-.2-.2-.3-.3-.1 0-.2-.1-.3-.1-1.2-.3-2.1-.9-2.6-2.1 0-.4-.1-.8-.1-1.2.3-1.1 1-1.6 2.2-1.5h.8c.4 0 1 .2 1.1-.2.2-.5-.5-.7-.7-1-.1-.1-.1-.2-.2-.2-1.5-1.4-1.7-2.9-.8-4.7.3-.7.5-.8 1.3-.7.2 0 .5.1.8.2v-1.7c0-1.1.8-1.8 1.9-1.6.6.1 1.1.4 1.5.7.3.3.6.5.9.8 1.3-.7 1.3-.7 3.3-.2-.1-1.1-.1-1.3.3-1.8.4-.6.9-.8 1.6-.7 1.9.4 3.3 1.3 4 3.1.1.2.1.3.3.6.5-.5.8-1 1.1-1.5.5-.8 1.2-1.4 2.1-1.7 1-.3 2.1-.6 3.1-.8h.6c.1 0 .2.1.2.2s0 .2-.1.3c-.7.4-1.4.7-2.1.8-.4.1-.7.1-.9.5-.1.2-.2.3-.2.6.1.3.3.2.5.2.6-.1 1.2-.1 1.8.2.6.2.8.6.8 1.2 0 .7-.2 1.3-.6 2 1.5.3 2.2 1.5 3.3 2.2.5.3.7.9.5 1.5-.1.5-.4 1-.8 1.3-.4.3-.7.5-1.1.8.3.5.8.4 1.2.6.7.4 1.2.9 1.1 1.8-.1.6 0 1.1.2 1.6.2.6.1.8-.4 1.1-.3.2-.5.3-.9.5.5.3.9.5 1.4.8.3-.8.9-1.5.9-2.5 0-.8.4-1.6.7-2.3.3-.9.9-1.2 1.8-.9.4.1.8.3 1.2.4.1.1.3.1.4.2.4.2.7.7 1.2.4-.2-.4-.6-.6-.9-.8-.4.3-.5.3-.6.2zm5.2.1c-.6 0-.9.2-1.3.7-1 1.7-.7 3.5.4 5.2.1.1.2.3.4.3.7 0 1 .5 1.1 1 .2.7.8 1 1.4 1 .6 0 1.3 0 1.9-.4.5-.3 1-.7 1.2-1.3.4-.9.8-1.8 1.1-2.8.3-1 0-1.7-.6-2.4-1-1-2.1-1.7-3.5-2.1-.5-.1-1.1-.2-1.6.2-.2.2-.4.4-.5.6zm-18.6.9v-1.1c0-.3-.1-.6-.3-.8-.5-.5-1-1.1-1.5-1.5-1.6-1.2-3.7-1.1-5.2.2l-1.2.9c-.3.2-.6.5-.9.8-.4.5-.6 1-.3 1.7.3.9.4 1.9 1.2 2.6.1.1.2.3.2.4.7 1.5 2 1.9 3.4 1.8 1.6 0 2.9-1 3.9-2.2.4-.8.9-1.8.7-2.8zm-5.2 7.4c0-.4 0-.7-.1-1 0-.1-.1-.3-.2-.4-.6-.1-1.3-.3-1.9-.3-.1 0-.3.1-.4.2-.4.4-.8.8-1 1.3-.3.6-.5 1.2-.7 1.8-.5 1.3-.9 2.7-1.4 4-.1.3-.1.5.1.7.3.4 1.4.6 1.8.4 1.4-.7 2.6-1.6 3-3.3.2-.8.5-1.6.7-2.5 0-.2.1-.6.1-.9zm-10.2-8.6s0 .1 0 0h-3.2c-.9 0-1.3.6-1 1.4.2.5.5.8 1 1.1.6.4 1.4.4 2 .7.8.5 1.5.5 2.3 0 .7-.5 1.5-.6 2.3-.5h1.4c.2 0 .4-.2.3-.4-.4-1.5-.9-2.3-2.4-2.3h-2.7zm13.8 13c0-1.2 0-2.3-.3-3.5-.3-1-.9-1.7-1.5-2.4-.3-.3-.8-.1-.9.3 0 .1-.1.3-.1.4.1 1.3-.1 2.5-.6 3.7-.1.3-.2.7-.3 1-.2.9-.1 1.7.3 2.5.1.2.3.5.5.5.6.2 1.2.4 1.9.4.5-.1.9-.3.9-.9.2-.6.1-1.3.1-2zm-14-5c.9.1 2 0 2.8-.8l.1-.1c1.1-.2 1.7-1.1 2.3-1.9.2-.3.3-.6.5-1 .1-.2 0-.5-.3-.5-1.2-.1-2.3-.3-3.4.2-1.4.7-2.8 1.2-4.3 1.5-.1 0-.3.1-.4.1-.4.2-.7.4-.7.9 0 .6.2.8.7 1.1.8.5 1.6.6 2.7.5zm18.8 4.6h.7c.7 0 1-.5 1.2-1 .1-.2 0-.4-.2-.5-.2-.2-.4-.3-.6-.4-1.2-.8-2.4-1.6-3.3-2.9-.4-.5-.9-1-1.4-1.4-.3-.3-.7-.4-1.1-.4-.4 0-.7.1-.9.5-.1.3.1.5.3.7.1.1.2.3.3.4.5.7 1 1.4 1 2.4 0 .3.2.7.4 1 .8.9 1.9 1.7 3.6 1.6zm.6-18c-.1 0-.3 0-.4.1-.5.3-1 .6-1.3 1-.6.7-1.2 1.4-1.8 2-.3.3-.3.6 0 .9.4.4.6 1 .7 1.5.1.4.3.5.6.3 1-.9 2.2-1.6 3.6-1.9.7-.2 1.2-.6 1.6-1.1.3-.4.3-.7-.1-1-.5-.4-1.1-.8-1.5-1.3-.4-.4-.8-.5-1.4-.5zm25.3 12.5c.4 0 .7 0 1-.1.1 0 .3-.1.4-.2.3-.7.7-1.5.7-2.3 0-.1 0-.3-.1-.4-.3-.4-.6-.9-.9-1.2-.6-.6-1.4-.9-2.2-.6-2.2.8-1.7.1-2.3 2.5-.1.2-.1.4-.2.6-.1.4 0 .7.4.9.9.5 2.1.7 3.2.8zm-46.3-13.5c-.5.8-.7 1.5-.3 2.3.8 1.4 2 2.6 3.6 3.1.2.1.4.1.6 0 .5-.3 1 0 1.5.1.4.1.7.3 1.1.5.3.1.6-.1.6-.4v-.6c-.2-.8-.8-1.4-1.5-1.8-.6-.4-1.2-.7-1.8-1.1-1.3-.7-2.5-1.4-3.8-2.1zm43 13.5h-.8c-.2 0-.4.1-.5.3-.1.2-.1.4.1.6.2.2.5.5.8.7 1.2 1 2.5 1.9 3.7 2.9.3.2.6.4 1 .2.2-.1.5-.1.7-.2.8-.1 1.5-1.5 1.3-2.3 0-.1-.1-.2-.1-.3-.5-.4-.9-.9-1.6-1.1-1.6-.4-3.1-.7-4.6-.8zm-7.8 1.3c0-.1-.1-.3-.1-.4-.3-.5-.6-1-.8-1.4-1.1-2.2-.9-1.7-2-.1-.7 1-1.3 1.9-2.4 2.4-.3.1-.6.2-.6.6-.1.4 0 .8.3 1.1.3.4.7.7 1.2.9.5.2.9.2 1.4-.1 1.2-.7 2.1-1.8 3-2.8-.1 0-.1-.1 0-.2zm2.8 1h-.3c-.8 0-.9.1-1 .8 0 .4 0 .8.1 1.2.1.6.4 1.2.4 1.8.1 1.3.7 2.4 1.2 3.6.3.8 1.1 1.2 2 1.1.3 0 .5-.2.5-.5.1-.8-.2-1.6-.5-2.3-.5-1.2-1-2.3-1.1-3.6l-.3-1.5c-.1-.3-.3-.5-.7-.5 0-.1-.1-.1-.3-.1zm-13.5-6.6v-.9c.1-.7-.3-1.2-.9-1.4-.9-.3-1.8-.5-2.7.1-.6.4-1.3.7-2 1-.2.1-.4.2-.5.3-.3.2-.3.9 0 1.1 1.4.8 2.8 1.4 4.4 1.3 1.5-.1 1.7-.3 1.7-1.5zm-22 9.5c.6 0 1.1-.2 1.6-.6l1.5-1.5c.3-.3.5-.7 1.1-.7.3 0 .4-.3.4-.6.3-1 .8-1.9 1.5-2.6.1-.1.1-.2.2-.2.1-.2 0-.8-.3-.9-.3-.2-.4.1-.6.3l-.6.9c-.4.5-.8 1-1.4 1.3-1 .5-1.9 1.2-2.9 1.6-.6.2-1.1.6-1.6 1-.2.2-.5.4-.6.7-.2.4-.1.8.3 1 .4.2.9.4 1.4.3zm43.3 3c.2-.5.3-1 .5-1.5.3-.6.1-1.1-.4-1.4-1.4-1.1-2.8-2.1-4.1-3.4-.3-.3-.6-.4-1-.3-.5.1-.8.5-.5 1 .3.5.6 1 .9 1.6.6 1 1.3 2 2.2 2.7.7.5 1.3 1.2 2.4 1.3zm-43.7-23.9c-.1.9.3 1.7.9 2.3.5.5 1 1 1.7 1.3 1.3.6 2.4 1.4 3.2 2.5.1.2.3.3.5.1.1-.1.1-.3.1-.4 0-.1-.1-.3-.2-.4-1-2.1-2.5-3.9-4-5.7-.4-.4-.8-.7-1.4-.8-.4-.1-.7.2-.8.6v.5zm12 2.3c.1-.6-.2-1.3-.3-2-.3-1.3-1.7-2.5-3.1-2.6h-.5c-.5.1-.8.6-.4 1 .4.5.8 1 1.2 1.6.7 1.1 1.4 2.1 1.3 3.5v.5c0 .3.2.4.5.5.5 0 .8 0 1-.6.2-.7.3-1.3.3-1.9zm6.7-1.9c0-.3-.2-.6-.6-.6-.7-.1-1.3 0-1.9.5-1.3 1-2.3 2.3-3.2 3.6-.3.4-.2 1.1.2 1.4.5.4 1 .5 1.4-.1.9-1.1 2-2 3-3 .2-.3.5-.5.7-.8.3-.3.4-.6.4-1zm12.8 8.9c.3-1.4-.1-2.4-.5-3.4-.4-.8-.8-1.5-1.1-2.4-.3-.9-1.1-1.6-1.9-2.1-.6-.4-1.3-.3-1.8.3-.3.4-.5.8-.5 1.2 0 .5.1.7.6.8 1.2.3 2.1 1 3 1.7.6.4 1 1 1.2 1.7.4.6.6 1.2 1 2.2zm-11.8 6.7h1.2c.5 0 .9-.1 1.3-.4.3-.2.3-.6 0-.8-.3-.2-.7-.3-1-.4-1.7-.6-3.6-.7-5.3-1.2-.2-.1-.5 0-.8 0-.2 0-.3.3-.2.5.9 1.2 2.1 2.2 3.7 2.3h1.1zm10.2-2.8c-.1-.1-.1-.2-.2-.2-1.5.2-2.9.3-4.4.5-.6.1-.9.7-.6 1.3.2.3.3.6.3 1 .1.9.8 1.3 1.6.9.9-.4 1.6-.8 2.1-1.7.3-.5.7-1 1-1.5.2 0 .2-.2.2-.3zm11.1-8.1c0-.1 0-.2-.1-.4-.3-.7-.7-1.5-1.5-1.9-.6-.3-.8-.3-.8.4 0 1.1-.2 2.2-.9 3.1-.8 1-.7 1.2.5 1.7.1.1.3.2.4.2.2 0 .4 0 .6-.1 1-.6 1.6-1.7 1.8-3zm-33 .1c.5 0 1-.5 1-1-.1-1.1-.5-2.1-1.2-2.9-.7-1-1.8-1.3-2.9-1.4-.3 0-.6.3-.5.6 0 0 0 .1.1.1 1.1 1.5 2.1 3 3.2 4.4 0 .1.2.2.3.2zm36.5 2.9c0-.8-.2-1.2-1-1.5-.8-.3-1.3-.2-1.8.4l-1.5 2.1c-.2.3-.3.5-.1.8.3.4.6.6 1 .4.7-.3 1.5-.6 2.3-.8.7-.1 1.1-.6 1.1-1.4zm-10.8-1.3c-.1-.3-.2-.8-.3-1.2-.2-.9-.4-1.9-.7-2.8-.2-.9-.9-1.2-1.7-1.3-.3-.1-.6.1-.8.3-.2.2 0 .5.1.7.8 1.7 1.7 3.3 2.2 5.2 0 0 0 .1.1.1.1.2.3.2.5.1.3-.3.6-.6.6-1.1zm-3.2 4.7c-1.2-.6-2.3-1.2-3.4-1.7-.1-.1-.3-.1-.4-.2-.3-.1-.6 0-.8.3-.2.4-.3.8-.4 1.3-.3 1.3-.3 1.3 1 1.1h.6c1.2.2 2.3-.1 3.4-.8zm3.2 6.9c-.2 0-.3 0-.4.1-.8.7-1.6 1.6-2.5 2.2-.5.3-.6.9-.7 1.5 0 .2.1.4.3.5.2.1.5.1.7.3.8.4 1.4-.1 1.6-.7.5-1.4.8-2.6 1-3.9zm4.3-14.7c-.3-.5-.2-1.1-.3-1.7 0-.1-.2-.3-.3-.3-.2-.1-.4 0-.5.2-.1.2-.2.4-.3.5-.2 1-.6 1.9-1 2.9-.2.4-.2.8-.3 1.2 0 .2 0 .4.2.5.2.1.5.1.7 0 .1 0 .2-.1.2-.2.4-.6.7-1.1 1-1.7.3-.4.4-.9.6-1.4zm-3.5 1.4c.5-.5.5-1.2.8-1.8.5-.9.2-1.8-.1-2.6-.1-.2-.3-.3-.5-.2-.5.2-.8.6-1.1 1-.2.4 0 .7.1 1 .2.6.3 1.2.4 1.8 0 .2.1.5.4.8zm-4.5 2.9c0-.1 0-.2-.1-.3-.4-1.4-1.5-2.1-2.7-2.6h-.3c-.1.1-.1.3-.1.4 0 .1.1.3.2.4.7.8 1.4 1.5 2.2 2.1.2.1.4.2.5.2.1.1.2 0 .3-.2zm-15.1-9.1c-.6.8-.9 1.5-1.3 2.2 0 .1 0 .2.1.3 0 0 .2 0 .2-.1.3-.3.6-.6.8-.9.4-.4.4-.8.2-1.5z" />
                                                <path class="st17"
                                                    d="M391.7 215.7l1.8.6c.2.1.3.2.2.5-.3 0-.6 0-.9.2-1.6.7-3 1.6-4.4 2.6-.3.2-.5.5-.8.7-.2.2-.1.4 0 .6-.8.1-1.5 0-2.2-.3.1-.4.4-.7.8-.9 2-.9 3.5-2.6 5.5-3.5.2-.1 0-.3 0-.5z" />
                                                <path class="st14"
                                                    d="M391 230.1c-1.1-.2-2.1-.4-3.3-.7 1-.3 1.4-.4 2.4-.1.7.2 1.4.3 2.1.2-.1.3-.4.3-.6.3-.2 0-.4 0-.6.3zM387.4 225.8c-.4.4-.9.5-1.7.9.5-.7.8-1.1 1.4-1.2l.3.3z" />
                                                <g class="st2">
                                                    <path class="st18"
                                                        d="M362.6 230.4zM362.1 230.3c.2.2.3.2.6.1 0-.2-.2-.4-.4-.4h-.2c-.1.1-.1.2 0 .3z" />
                                                    <path class="st18"
                                                        d="M370.8 229.5c-.5-.1-.9-.3-1.3-.6-.3.1-.6.2-.9.2-1.8-.1-3.7-.1-5.5-.2-.2-.3-.6-.2-.8-.4-.3-.3-.5-.2-.8-.1-.6.2-1.1.6-1.7.5-.1 0-.2-.1-.3-.1v-.3c.5-.7 1.1-1.3 1.6-2 .4-.5.9-.5 1.4-.4.7.1 1.4.3 1.9.2-.4-.1-1 .1-1.5-.4-.2-.2-.3-.6 0-.8.4-.4 1-.5 1.6-.7-.5 0-.9-.1-1.3-.1 0-.1-.1-.3-.1-.3.5-.6.7-1.4 1.5-1.6 0-.6.6-1 .7-1.6-.1-.4.1-.9-.3-1.2-.7 1.1-1.4 2.1-2.1 3.2-.9 1.3-1.8 2.7-3.1 3.8-.4.5-.8.9-1.2 1.4-.2.3-.6.4-.6.8-.8.7-1.5 1.5-2.2 2.3-1.6 1.9-3.2 3.8-5.2 5.3-1.3 1-2.6 2.1-4.1 2.9-.1.1-.3.3-.5.1-.2-.2 0-.3.1-.5.2-.4.4-.7.6-1.1.7-1.2 1.4-2.4 1.8-3.7.6-1.7 1.3-3.4 1.8-5.2.1-.5.3-1.1.6-1.6.8-1.6 1.8-2.8 3.8-2.8.2 0 .2 0 .2-.1-.3-.4-.9-.1-1.1-.6.1-.1.2-.3.4-.4.6-.4 1.2-.7 1.9-.9.2 0 .4 0 .6-.2.1-.1 0-.4.1-.5l1-1c-.1 0-.3 0-.4-.1-.2.2-.3.2-.5 0 0 0 .1-.2.1-.4-.1-.3.3-.5 0-.8-.4.9-1.2 1.3-2 1.7l-.3.3c-.3.1-.5 0-.5-.3V220.4h-.1-.1c-.2 1-.8 1.8-1.4 2.6-.1.3-.2.6-.4.8-.1.1-.2.1-.3.1-.1 0-.2-.1-.2-.2v-.7c-.1-.2-.2-.5 0-.7h-.1-.1v.4l-1.2 2.7c0 .3.1.6-.3.8 0 1.3-.4 2.6-.9 3.8 0 .3 0 .6-.3.8.1.2 0 .3-.1.4-.1.2-.1.5-.2.7-.1.2-.1.5-.3.4-.3 0-.2-.4-.2-.6v-.4l-.1.1c.1.2.1.4 0 .6.1.3-.1.4-.3.5-1.1 2.1-3.2 2.5-5.2 3.1-.2.1-.3-.1-.3-.3 0-.2 0-.4.1-.6.4-1.1 1.3-1.8 2.3-2.4.1 0 .1-.1.2-.1h-.2c-.4-.2-.4-.4-.1-.6.3-.2.7-.4 1-.7.5-.3 1-.7 1.2-1.4-.5.4-.9.7-1.3 1-.4.3-.9.5-1.4.6-.2 0-.4-.1-.4-.4.1-.7.4-1.2.7-1.9.5-1.2 1.2-2.2 2.6-2.6 0 0 .1-.1.1-.2-.2-.1-.4-.2-.5-.2-.7-.2-.7-.2-.7-.8 0-.7.1-1.3-.4-1.9.4 1.3-.1 2.3-.8 3.4 0 .3-.1.5-.5.3-.1-.2-.2-.4-.2-.6-.2.2-.1.5-.4.5l-.6 2.7c-.1.3-.5.4-.7.2-.4-.3-.6-.7-.7-1.2-.2-.8 0-1.5.1-2.3-.4.2-.5.7-.5 1.1-.1.5-.6.7-.7 1.1.1.1.1.1 0 .2.4.4.7.8 1.2 1.2.7.7.9 1.4.5 2.3-.1.1-.1.3-.2.4-.1.2-.2.5-.5.5-.2 0-.3-.2-.5-.4-.3-.5-.6-1-.9-1.4-.2-.3-.3-.5-.7-.6 0 .2 0 .3.1.5 0 .5 0 .5-.7.7.5.4 1 .8 1.4 1.2.6.6 1.1 1.2 1.2 2 0 .1 0 .2-.1.2s-.2.1-.3 0c-.4-.3-.8-.7-1.2-1 .2.4.5.7.8 1 .6.6 1 1.4 1.3 2.2.4 1.2.7 2.4 1.4 3.5-.7.6-1.5 1-2.1 1.6-.6.6-1.2 1.3-1.7 1.9-.8.9-1.6 1.7-2.4 2.6-.5.6-1 1.2-1.5 1.7-.6.6-1.1 1.2-1.5 1.9.7.1 1.3-.2 1.9-.3.9-.1 1.7-.3 2.6-.5h-.6c-.2 0-.3-.2-.3-.3.2-.6.3-1.2.7-1.7 1.2-1.8 2.5-3.4 4.5-4.5.4-.2.8-.4 1.3-.4 2.1-.1 4.1-.4 6.1-1.2l2.4-.9c1.2-.5 2.5-.6 3.8-.5 1.7 0 2.9.8 3.3 2.8.4-1.2-.4-1.7-.9-2.6.8 0 1.3.4 1.7.8.3.3.5.7.6 1.2.1 1.1-.5 1.9-1.6 2.3-.2.1-.5.2-.7.3 0 .3.1.5.5.4.6 0 .7 0 .7.5 0 .6.3 1.1.5 1.6 0 .1.1.2.2.2s.2-.1.2-.1c.3-.8.6-1.6.8-2.4.2-.6.5-1.1 1.1-1.4-.3 0-.6 0-.7-.4 0-.5-.2-1-.1-1.5 0-.5.4-.3.6-.2-.3-.6-.6-1.2-.8-1.7-.1-.1-.2-.1-.3-.2-.2-.1-.5-.1-.5-.4 0-.7 0-.7-.6-.8h-.2l-1.8.3c-.3 0-.6.3-.8-.1-.1-.3.1-.6.3-.8.4-.6 1-1.1 1.6-1.8-1.2.3-2 .8-2.5 1.8-.3.6-.7 1-1.3 1.2-.1 0-.3 0-.4-.1 0-.1 0-.2.1-.3.2-.2.4-.5.6-.7.3-.4.6-.8.5-1.4-.6.3-.8 1.1-1.5 1.2-.3-.5-.1-.9-.2-1.3-.1.3-.3.7-.5 1-.3.7-.8 1.2-1.3 1.6-.7.6-1.3.8-1.5.5-.3-.6.4-.8.5-1.3-.7.3-1.1.8-1.3 1.4-.4 1-1.2 1.5-2.1 1.8-1.1.4-2.2.7-3.4.7-.1 0-.3 0-.3-.2 0-.1 0-.2.1-.3.3-.3.6-.5.9-.8 3.3-2.4 6.4-5.1 9.2-8 .7-.7 1.5-1.3 2.4-1.6.5-.2.9-.4 1.5-.6-.3 0-.5 0-.7-.1-.3-.1-.4-.3-.3-.5.3-.5.6-.9 1.2-1 1.1-.2 2.3-.2 3.4 0 0-.1.1-.2.1-.2.2-.1.5-.1.7-.1 2.2 0 4.5.1 6.7.5.3.1.7.1.8.6.2-.1.4-.1.6-.2.3-.2.8 0 .8-.5-.6.4-1 .3-1.4.2zm-26.9 11.4c-.5.6-.8.6-1.1-.1-.2-.5-.4-1-.5-1.4-.1-.3-.1-.6-.2-.9-.1-1.9 1.3-2.8 3-2.1.2.1.4.3.7.2 0-.2-.2-.3-.3-.5-.2-.2-.7-.2-.5-.6.1-.3.5-.3.8-.3h.9c.1 0 .3.1.2.3 0 .1 0 .3-.1.4-.3 1-.8 2-1.5 2.8-.4.8-.9 1.5-1.4 2.2z" />
                                                    <path class="st18"
                                                        d="M347.8 231.4c0 .1 0 .1 0 0 0 .1 0 .1 0 0 .1.1 0 0 0 0z" />
                                                </g>
                                                <path class="st14"
                                                    d="M343.5 226.7c-.2.2-.1.5-.4.5 0-.3-.1-.7-.1-1-.1-.3-.2-.5-.4-.9.7.3 1.1.7.9 1.4zM344.2 226.9c0 .3-.1.5-.5.3.2-.2.3-.3.5-.3z" />
                                                <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse"
                                                    x1="291.182" y1="221.189" x2="310.881" y2="221.189">
                                                    <stop offset="0" stop-color="#e4a747" />
                                                    <stop offset=".634" stop-color="#f5c85d" />
                                                    <stop offset=".817" stop-color="#f4c65c" />
                                                    <stop offset=".901" stop-color="#f0be57" />
                                                    <stop offset=".966" stop-color="#e9b24e" />
                                                    <stop offset="1" stop-color="#e4a747" />
                                                </linearGradient>
                                                <path
                                                    d="M307.8 220.3c-2.7-.7-8.9-3.3-11.8-6.7.2.2.4.4.3.8-1 .5-2.1 1-2.9 1.9 0 .5.1.9.7.9.3 0 .5.2.4.5-.4 1.2-.2 2.5-.2 3.8 0 .3 0 .6-.2.9-.1.1-.2.2-.4.2s-.3-.1-.3-.3c0-.2 0-.4-.1-.6 0-.3-.2-.2-.4-.3-.6-.2-.9-.7-.7-1.3.2-.4.5-.6.5-1.1l-1.2.3c-.6 1.1-.5 2.3-.2 3.4.4 1.5 1.1 3 2.5 3.8.3.2.6.1.7-.3.2-.8.4-1.7.7-2.5 0-.1.2-.3.3-.2.1.1.2.3.2.4l-.6 2.7c-.1.7-.1.7.6 1.1.4.2.7.4 1.2.3.5-1.6 1-3.2 1.3-4.9.1-.4.1-.8.4-1.1 0-.1.2-.1.3-.1.2 0 .3.2.3.3 0 .4-.1.8-.2 1.2-.4 1.5-.8 3-1.2 4.4-.1.6-.1.6.5.8.1.1.3.1.4.2 1.5.2 2.9-.3 4.4 0 .1 0 .3-.1.3-.2.1-.2.3-.3.5-.3.2-.5.2-.5.7-.3l.9-.3c.1-.3.2-.5.4-.6.2-.2.1-.4-.1-.5-.3-.1-.6-.1-.9-.2-.4-.1-.5-.5-.5-.9s.3-.6.6-.8c.4-.2.7-.1 1 .2.2.3.4.7.6 1 .1-.2.2-.3.2-.3-.1-.8.2-1.3 1-1.5.8-.1.8-.8 1.1-1.1-.3-.4-.6-.8-1-1.2-.1-.1-.1-.3-.1-.4 0-.1.2-.2.4-.2.4.1.9.2 1.3.2 0-.3.2-.6.6-.5l.6-.3c-.9.1-1.9-.1-2.9-.3zm-5.8.1c0-.3 0-.5.3-.6.3-.1.7-.1 1 .2.4.4.6.9.5 1.6 0 .1 0 .3-.3.4-.2.1-.3-.1-.4-.2l-.1-.1c-.1-.1-.2-.1-.3-.1-.2-.1-.5 0-.7-.3v-.9zm-6.7-3.2c-.1 0-.3-.1-.3-.3.2-.6 1.2-1 1.7-.6.3.3.6.6.6 1-.6-.1-1.2-.4-2-.1zm4.5 2.7c-.1.3-.2.5-.4.7-.2.3-.4.3-.7-.1-.1-.2-.2-.3-.4-.4-.5-.2-.6-.3-.5-.6 0 0 0-.1.1-.1.1-.4.6-.7.2-1.1-.3-.2-.6.3-.9.5-.1 0-.2 0-.3.1 0-.1-.1-.3-.1-.4.1-.4.6-.7.6-1.2.8 0 1.4.4 1.8 1.1.2.4.5.6 1 .6h.6c.7.2.9.5.9 1.2 0 .4.2.9-.2 1.2-.4.4-.7-.3-1-.3-.6-.2-.6-.7-.7-1.2zm3.3 6.3c-.3-.1-.7-.1-1-.1h-1.4c-.4 0-.5-.3-.5-.6v-1.1c0-.3.4-.5.7-.3.3.2.5.4.7-.1.1-.2.3-.3.4-.4.3-.3.6-.2.9 0 .7.5 1.1 1.1 1 2.1-.1.5-.2.6-.8.5zm2.4-3.2c-.4-.1-.6-.5-1.1-.4-.1 0-.2-.2-.2-.3-.1-.5-.1-.9.1-1.3 0-.1.1-.1.2-.1s.2.1.2.1c.1.3.1.6.2 1.1.1-.4.2-.6.3-.8 0-.1.1-.1.2-.1s.2.1.2.1l.3 1.5c0 .1-.2.3-.4.2z"
                                                    fill="url(#SVGID_4_)" />
                                                <path class="st14"
                                                    d="M278.5 219.7c-.8-.3-1.5-.6-2.3-.9-1.4-.5-2.6-1.2-3.7-2.1-1.7-1.4-2.7-3.3-2.7-5.6v-2.3c-.1-2.2.9-4 2.3-5.6.7-.7 1.4-1.5 2.4-1.8 2.7-1 5.7.2 6.9 2.8.6 1.3 1.1 2.6 1.7 4.1.2-.6.3-1.1.4-1.6.4-1.4.9-2.8 1.7-4.1.9-1.3 2-2.1 3.4-2.7.1-.1.3-.1.4-.1 1.8-.4 2.8.4 2.9 2.3.1 1.9.1 3.8-.4 5.6-.5 1.8-1 3.5-1.4 5.3l-.9 4.5c-.6 0-1.2.1-1.9.1-.5-.1-.9 0-1.4 0-2.4.3-4.8.9-7 1.9.1.1-.1.1-.4.2z" />
                                                <path class="st20"
                                                    d="M280.8 220.1c.2 2.7.8 5.4 1.6 8 .2.5.3 1.1.6 1.5-.1.1-.2.3-.3.4-.2.1-.4.1-.6.2-1.5 1.2-2 2.8-2.1 4.6 0 .7.5 1.2 1.3 1.3.8.1 1.5 0 2.1-.6.5-.2.9-.6 1.2-1 .3.1.4.2.6.5.6 1.1 1.3 2.3 2 3.4-1.7.7-3.4 1.1-5.2 1.3-.5.1-.8.3-1 .7-.3.7-.7 1.5-1 2.2-.1.3-.3.5-.6.7-1.9.8-3.8 1.5-5.7 2.2-.1.1-.3 0-.4-.2 0-.1 0-.2.1-.3.4-.4 1-.6 1.5-.8 1-.4 2.1-.9 3.1-1.2.7-.2 1.1-.6 1.4-1.3.2-.6.5-1.2.8-1.8.1-.2.2-.3.3-.5.4-.7.4-1.3 0-2-.5-.7-.8-1.4-1.2-2.1-1.7-3-2.6-6.2-3.3-9.6-.2-.9-.3-1.9-.3-2.9 0-.6-.1-1.1-.1-1.7.4-.5 1-.7 1.5-1 .5-.3 1-.4 1.4-.8.3 0 .5-.1.7-.1.6.5 1.1.6 1.6.9z" />
                                                <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse"
                                                    x1="270.163" y1="230.109" x2="293.672" y2="230.109">
                                                    <stop offset="0" stop-color="#f3b53a" />
                                                    <stop offset="1" stop-color="#f5c85a" />
                                                </linearGradient>
                                                <path
                                                    d="M289.1 237.8c-.7.2-1.3.5-2 .7-.7-1.1-1.3-2.3-2-3.4-.1-.2-.3-.4-.6-.5.4-.5.8-1.1 1-1.7.4-1.2.7-2.3 0-3.5.2-.3.3-.6.2-1-.1-.2-.2-.4-.4-.4s-.4.1-.4.3c0 .2-.1.5-.1.7-.6.1-1.2.3-1.8.4-.4-.4-.5-1-.6-1.5-.8-2.6-1.4-5.3-1.6-8 .4 0 .7-.1 1 0 .7.2 1.5.2 2.2.2 1.2.1 2.4-.1 3.6-.3.5 2.6 1.2 5.2 2.1 7.8.9 2.6 2 5.1 3.9 7.2-.3.3-.6.5-.9.8-.4.2-.5.5-.6 1-.1.7-.2.7-.8.3-.2-.1-.4-.1-.5 0-.3.2-.5.3-.8.5-.4 0-.6.2-.9.4zm-15.4-15.7c-.1 0-.2 0-.3.1l-1.8 1.2c-.1.1-.2.3-.1.4.5.4.2.7-.1 1-.5.5-1 1-1.3 1.7.1.7.2 1.4.4 2.1.6 2 1.3 3.9 2 5.9.5 1.5 1.3 3 2.2 4.3.4.2.7.4 1.1.5.8.3 1.7.2 2.4.9.1.1.2.1.3 0 .6-.4 1.2.2 1.8 0 .1-.2.2-.3.3-.5.4-.7.4-1.3 0-2-.5-.7-.8-1.4-1.2-2.1-1.7-3-2.6-6.2-3.3-9.6-.2-.9-.3-1.9-.3-2.9 0-.6-.1-1.1-.1-1.7-.7.3-1.2.9-2 .7z"
                                                    fill="url(#SVGID_5_)" />
                                                <path class="st20"
                                                    d="M293.7 235c-1.9-2.1-3-4.5-3.9-7.2-.9-2.5-1.6-5.1-2.1-7.8 0 0 .1 0 .1-.1.7-.4.7-.4.4-1-.3-.4-.5-.8-.5-1.4.6 0 1.2-.1 1.9-.1.6.1 1.1.2 1.7.3 0 .1 0 .3.1.4.2.2.3.4.5.6 0 .2-.1.4-.1.6-.6 1.1-.5 2.3-.2 3.4.4 1.5 1.1 3 2.5 3.8.3.2.6.1.7-.3.2-.8.4-1.7.7-2.5 0-.1.2-.3.3-.2.1.1.2.3.2.4l-.6 2.7c-.1.7-.1.7.6 1.1.4.2.7.4 1.2.3.5-1.6 1-3.2 1.3-4.9.1-.4.1-.8.4-1.1 0-.1.2-.1.3-.1.2 0 .3.2.3.3 0 .4-.1.8-.2 1.2-.4 1.5-.8 3-1.2 4.4-.1.6-.1.6.5.8.1.1.3.1.4.2 0 0 0 .1-.1.1-.3.6-.7 1.1-.7 1.7 0 .7.5 1.3.9 1.9.5.9 1.1 1.8 1.6 2.8.7 1.2 1 2.4 1.3 3.7 0 .2 0 .4-.3.4-.1 0-.3-.1-.4-.2l-.3-.9c-.2-.6-.3-1.3-.7-1.9-.9-1.6-1.8-3.3-2.7-4.8-.4-.1-.6.2-.7.3-.6.6-1.1 1.2-1.7 1.8-.2.3-.3.5-.1.8.8 1.3 1.7 2.6 2.5 3.8.3.5.6 1 .9 1.6.1.2.2.5.1.7 0 .1-.1.1-.2.2h-.1c-.1-.1-.2-.2-.3-.4-1-1.9-2.3-3.6-3.4-5.4-.2-.3-.2-.3-.9 0zM299.1 203.6v.5c0 .2.2.4.4.3.2-.1.5-.2.7-.3 1.3-.7 2.5-.7 3.8-.2.1.1.3.1.4.2 1.7.6 2.5 1.8 2.5 3.6 0 .7.1 1.4 0 2.1-.1 2.2-1.7 3.9-3.9 4-1.6.1-3-.6-4-1.9-.7-.9-1.1-2.1-1.1-3.3v-1.8c-.7 0-1.3-.4-1.9-.3 0-.3-.4-.5-.6-.7-.2-.2-.3-.4-.4-.6-.1-.2-.1-.4.1-.5.1-.1.3-.1.4 0 .3.1.5.3.8.5.4.2.8.1 1-.3.1-.2 0-.4.1-.6 0-.1.2-.4.2-.4.5 0 .9-.5 1.5-.3zm3.6 9.5c-.3-.5-.5-.7-.6-1-.6-1.4-.6-2.8-.1-4.1.2-.6.6-1.1 1.3-1.1.7 0 1 .6 1.3 1.2.4 1 .5 2.1.3 3.1-.1.4-.4.8-.3 1.3.8-.4 1.2-1.1 1.4-1.9.3-.9.2-1.9.2-2.9 0-.6-.3-.9-.9-1.1-.9-.2-1.8-.5-2.7-.6-1-.1-2-.1-3 0-.5.1-.8.3-.9.9-.2.9-.2 1.7 0 2.6.2.9.6 1.9 1.3 2.5.7.6 1.5 1 2.7 1.1zm.7-2.8c0 .2.1.4.1.6.1.2.2.4.4.3.1 0 .3-.1.4-.2.3-.3.3-.7.2-1.1 0-.3-.1-.5-.4-.5-.3 0-.5.1-.6.4 0 .1-.1.3-.1.5zM270.2 226.4c.1.7.2 1.4.4 2.1.6 2 1.3 3.9 2 5.9.5 1.5 1.3 3 2.2 4.3-1.1-.2-2.1-.7-3.1-1.2s-2.1-.8-3.2-.7c-.5 0-.9 0-1.4-.1-.2 0-.4-.1-.4-.4-.1-.2 0-.4.2-.5.4-.3.8-.5 1.2-.7.4-.2.6-.5.4-1-1-2.9-.1-5.4 1.7-7.7zM313.3 202.2l-.1.1c-.3.3-.3.9-.8.7-.6-.2-.1-.7-.1-1.1.9-1.5 1.7-3 2.3-4.6.3-.4.5-.9.8-1.3.9-1.7 1.8-3.4 2.8-5.1.2-.4.4-.7.7-1 .3-.4.8-.5 1.2-.2 1.6 1.5 3.6 2.4 5.4 3.7 1.1.7 2.3 1.4 3.4 2.1.5.3.5.4.2.8-.4.5-.6.6-1.1.2-2.6-1.7-5.1-3.4-7.6-5.1-.3-.2-.5-.6-1-.7-.6.6-.9 1.3-1.3 2-1.6 3-3.1 6-4.6 9-.2.2-.2.4-.2.5zM308.6 201.2l-.3.3c-.2.3-.4.4-.6.1-.3-.4-.7-.5-1.2-.5.7-.2.8-.2.6-.7-.7-2-1.6-3.9-2.6-5.7-.3-.6-.5-.6-1.1-.4-1.8.7-3.7 1.4-5.5 2.1-.9.4-1.8.8-2.6 1.2-.6.3-.7.3-1.1-.3-.2-.2-.3-.4-.4-.6 0-.4.3-.4.5-.5 2.2-.8 4.5-1.7 6.7-2.5.6-.2 1.3-.4 1.9-.6 1.5-.4 1.6-.4 2.3.9 1.1 2 2 4.1 2.8 6.2.1.3.2.7.7.7-.1.2-.1.3-.1.3z" />
                                                <path class="st13"
                                                    d="M305.6 227.7c.1-.3.2-.5.4-.6.2-.2.1-.4-.1-.5-.3-.1-.6-.1-.9-.2-.4-.1-.5-.5-.5-.9s.3-.6.6-.8c.4-.2.7-.1 1 .2.2.3.4.7.6 1 .1-.2.2-.3.2-.3-.1-.8.2-1.3 1-1.5.8-.1.8-.8 1.1-1.1-.3-.4-.6-.8-1-1.2-.1-.1-.1-.3-.1-.4 0-.1.2-.2.4-.2.4.1.9.2 1.3.2h.2c.1.2.4.4.3.4-.3.5.2 1.3-.6 1.7-.2.1-.1.4-.1.6 0 .3-.3.4-.5.5-.5 0-.7.3-.7.7v.7c-.3 0-.5 0-.5.4 0 .5-.3.6-.7.4-.1 0-.2-.1-.3-.1-.2 0-.3.2-.3.3.6.5.3.8-.2 1.1-.2.1-.2.6-.6.4-.2-.1-.2-.4-.2-.7.2.1.2 0 .2-.1z" />
                                                <path class="st20"
                                                    d="M308.4 226.1v-.7c0-.5.2-.8.7-.7.1 1.3.4 2.6.7 3.9l.3 1.8c.1.3-.1.6-.3.8-1.7 1.7-3.1 3.7-4.4 5.8-.1.1-.2.3-.3.3-.1.1-.2.1-.3 0-.2 0-.3-.2-.3-.3.1-.6.4-1 .7-1.5 1.1-1.6 2.1-3.1 3.4-4.5.4-.5.6-.9.4-1.5-.1-1.1-.4-2.2-.6-3.4zM289.1 237.8c.2-.3.5-.4.9-.4-.1 2.1-.3 4.2-.6 6.2-.1.6-.3 1.1-.8 1.4-.7.5-1.3.9-2.1 1.3-1.2.6-2.4 1.2-3.5 1.8-.1.1-.3 0-.4-.1v-.4c.1-.3.5-.4.7-.5 1.1-.6 2.2-1.1 3.2-1.7.5-.3.9-.6 1.4-.9.3-.2.5-.5.5-.9.5-1.9.7-3.8.7-5.8z" />
                                                <path class="st22"
                                                    d="M291.6 219.3c0-.2.1-.4.1-.6.2-.1.3-.3.2-.5 0-.1-.3-.1-.4-.1h-.3c0-.1 0-.3-.1-.4-.1-.2-.2-.5-.1-.7.1-.2.3-.3.6-.4.6-.3 1.1-.3 1.7-.3 0 .5.1.9.7.9.3 0 .5.2.4.5-.4 1.2-.2 2.5-.2 3.8 0 .3 0 .6-.2.9-.1.1-.2.2-.4.2s-.3-.1-.3-.3c0-.2 0-.4-.1-.6 0-.3-.2-.2-.4-.3-.6-.2-.9-.7-.7-1.3.2-.4.5-.6.5-1.1l.3-.3c.1 0 .3-.1.4-.1.1 0 .1-.2.1-.2-.1-.2-.2-.1-.3 0-.1.1-.1.3-.1.4l-.3.3c-.3 0-.7.1-1.1.2z" />
                                                <path class="st20"
                                                    d="M304.1 228.2c.2-.5.2-.5.7-.3.2.6.4 1.3.5 1.9.2 1 .2 1.8-.3 2.8-.8 1.3-1.6 2.6-2.1 4.1 0 0 0 .1-.1.1s-.2.1-.3.1c-.1 0-.2-.1-.2-.2-.1-.5.2-.9.4-1.3.5-.9.9-1.9 1.5-2.8.6-.9.7-1.9.3-2.9-.2-.5-.3-1-.4-1.5z" />
                                                <path class="st12"
                                                    d="M132.7 165.1c1.4.3 2.6.8 3.7 1.6.6.5 1.3.8 2 1.2 1.4.8 2.8 1.5 4.2 2.3 2.7 1.5 5.1 3.6 7.1 5.9 2.8 3.3 5.5 6.6 8.3 10 .1.1.2.2.2.3 0 0 .1 0 .1-.1 0-.2 0-.3-.2-.3-.1-1-.7-1.9-.7-3 0-.2-.3-.4-.4-.6-.6-.6-1-1.4-1.4-2.2-.4-1-1-1.9-1.2-3-.1-.3-.3-.5-.5-.8-1.4-1.9-2.6-3.9-3.9-5.9-.1-.2-.2-.3-.3-.5-.3-.5-.4-1-.6-1.5-.2-.5-.7-.9-1-1.3-.4-.7-.5-1.4-.5-2.2 0-.4-.2-.7-.5-1-2-2.2-2.3-2.3-1.9-5.3.1-.6 0-1.1-.3-1.6-.8-1.4-1.3-2.9-2.2-4.2-.1-.1 0-.3.1-.4.1 0 .2 0 .3.1.5.3.8.8 1 1.3.3.5.5 1 .7 1.5.2.5.5.9.7 1.4.6 1.1 1.4 1.8 2.5 2.3.4.2.8.4 1.3.5.9.4 1.9.8 2.5 1.6.1.1.2.1.3 0l.2-.2c.1-.3 0-.6-.2-.9-.4-.6-1-1-1.6-1.4-.9-.7-1.8-1.3-2.5-2.2-.2-.3-.5-.5-.6-.9-.9-1.4-1.7-2.9-3-4-.1-.1-.1-.3 0-.4.1-.1.2-.1.3-.1l.9.6c.7.7 1.4 1.5 1.8 2.4.8 1.4 1.9 2.5 3.1 3.5.4.4.9.7 1.3 1 .2.2.4.5.8.3.3-.2.2-.6.2-.8.1-.7-.2-1.3-.8-1.7-.8-.6-1.5-1.3-2.2-2.1-.6-.7-.9-1.5-.9-2.4 0-.2.1-.4.3-.4.1 0 .3.1.3.2.4 2.1 1.7 3.4 3.4 4.4.7.4 1.3 1 1.8 1.6.2.3.5.5.7.8.3.6.6 1.3 1 1.9.2 1.1.1 2.1-.2 3.5.9-.8 1.3-1.5 1.1-2.5-.1-.4-.2-.8-.4-1.1.1 0 .2-.1.3-.1 1.6 1.5 2.6 3.4 2.5 5.6 0 .1 0 .3.1.4.5 0 .6-.5.8-.8.1-.1.1-.3.2-.4.1-.2.4-.2.5 0 1 1.5 2.1 2.9 2.1 4.8 0 .4.2.5.6.5.4 0 .5.3.5.6.5 1.6.6 3.2.2 4.8-.1.2-.1.4-.1.6 0 0 0 .1.1.2.6-.2.8-.7 1-1.2.1-.3.1-.7.5-.7.5-.1.5.4.8.6.1.1.1.2.2.3 1.5 2.9 2.8 5.9 3.2 9.1.1.9-.1 1.7-.3 2.6-.1.5-.5.9-.9 1.2-.4.2-.6.5-.7 1-.3 1.1-.8 2.2-1.9 2.9-.2.1-.3.4-.3.6v1.1c.1 2.1.2 4.2.2 6.3.1 2.7-.1 5.3-.6 7.9-.3 1.9-.8 3.7-1.8 5.3-.5 0-1-.4-1.6-.3.3-1.8.5-3.5.5-5.3 0-4.1-1.2-7.8-3.7-11.1-1.5-1.9-3.2-3.6-5-5.1-1.4-1.1-2.6-2.4-3.7-3.8-1.3-1.7-2.3-3.5-2.7-5.6-.4-1.6-.9-3.1-1.5-4.6-.5-1.2-1.3-2.3-2.4-3.1-.7-.5-1.3-1.1-2-1.6-1.7-1.2-3.2-2.6-4.7-4.1-1.1-1.1-2.3-2.1-3.9-2.5-1.2-.5-2.4-.6-3.6-.4-1.2.2-2.3.1-3.5-.1-.8-.1-1.4-.5-1.9-1.1l-.6-.9c-.5-.7-1.2-1-2-.8-.1 0-.3.1-.4.1-.2 0-.3-.1-.3-.2-.1-.2 0-.4.2-.5 1-.4 1.9-.3 2.7.4.3.3.5.6.8.9.4.5.9.8 1.6.9 1.4.2 2.8.4 4.3.1.6.1 1.3.4 2 .3zm26.4 22.4c.1.5.4 1 .8 1.4.7 1.3 1.5 2.6 2.2 3.8 1.1 2.1 1.9 4.3 2.4 6.6.6 2.8.6 5.6.4 8.4-.1 1-.1 2-.2 3.1.2-.2.3-.2.3-.3.5-1.4.7-2.9.8-4.3.2-1.6.5-3.2.4-4.9-.2-2.7-.2-5.4-.3-8.1 0-.4-.1-.7-.5-.8-.7-.3-1.4-.7-1.9-1.3-.3-.4-.4-.7-.1-1.2.2-.4.1-.6-.3-.5-1 .2-1.9-.1-2.7-.7-.5-.5-1-.8-1.3-1.2zm-3.1-8.9v-.1h-.1c0 .1 0 .1.1.1.1.5.2 1 .4 1.5.9 2.1 2.5 3.4 4.8 3.9.6.1.9-.1.9-.7.1-1-.1-1.9.3-2.9.1-.2-.2-.5-.5-.4-.9.4-1.7.1-2.5-.4-1-.7-2.2-.8-3.4-1zm-16.5-9.1c-.1-.1-.1-.2-.2-.2-.1-.1-.2 0-.2.1l.1.1h.3c0 .6.3.9.7 1.2 1.2 1 2.5 2.1 3.8 3.1 1.4 1 2.5 2.3 3.2 3.8.7 1.4 1.1 2.8 1.5 4.3.4 1.6.9 3.1 1.8 4.5.5.7 1.1 1.4 1.5 2.1.6.9 1.4 1.7 2.2 2.3 1.2.9 2.2 2.1 3.5 3 .7.5 1 1.2 1.6 1.8 2 2.3 3.6 4.9 4.2 8 .1.4.1.8.5 1.2.2-1.8 0-3.5-.3-5.1-.4-1.8-.8-3.6-1.7-5.2-.7-1.2-1.3-2.5-2-3.8-1.4-2.5-3-5-4.9-7.1-.6-.7-1.3-1.4-1.9-2.2-1.7-2.2-3.5-4.3-5.5-6.3-1.8-1.9-3.9-3.3-6.1-4.6-.7-.5-1.4-.9-2.1-1zm27.2 14.5c.3-.4.6-.8.8-1.2.5-.8.8-1.7.7-2.7-.1-1.4-.7-2.5-1.4-3.7-.1-.1-.3-.1-.4 0-.5.5-1 1-1.4 1.6-.7.8-.7 1.7 0 2.5.1.2.3.3.4.4.7.6 1 1.4 1 2.3 0 .2-.1.5.3.8zm2.3-2.2c-.3.7-.7 1.2-1 1.8-.4.9-1.1 1.4-2 1.7-.2.1-.5-.1-.6.3.2.4.5.7.9.9.6.3 1 .8 1.5 1.3.6.6.9.7 1.4 0 .3-.4.6-.9.6-1.5s.1-1.1 0-1.7c-.2-.8-.2-1.8-.8-2.8zm-13-19.6c0-1.3-.8-3.1-1.7-3.8l-.1-.1c-.2-.1-.3 0-.4.1-.2.2-.1.5-.2.7-.4 1.5-.5 2.9.3 4.2 0 .9.7 1.4 1.4 1.9h.3c.1 0 .1-.2.1-.2-.2-.5 0-1 .2-1.5 0-.4.1-.8.1-1.3zm1.5 12.2c.1 0 .3-.1.4-.2.1-.1 0-.3-.1-.4-.3-.4-.7-.8-1-1.3-.2-.3-.5-.5-.8-.6-1.4-.5-2.8-.9-4.2-1.2-.2 0-.3 0-.4.2 0 .1 0 .3.1.4 1.5 1.9 3.6 2.8 6 3.1zm2.8-5.7c0 .7.1 1.4.5 1.9.5.7 1 1.3 1.2 2.1 0 .1.1.1.2.2.1 0 .2-.1.2-.1.4-1 .8-2 .5-3.1-.2-.9-.6-1.8-1.2-2.6-.2-.4-.7-.4-1 0-.3.4-.5 1-.4 1.6zm-7.3-.6c0-1-.6-1.6-1.4-2-.9-.5-1.9-.9-2.9-1.4-.2-.1-.4.1-.4.3.1.4.2.9.3 1.3.5 1.7 2.5 2.6 4.1 1.9.2.1.3 0 .3-.1zm-7.1-8.1c-.1.9.3 1.6.7 2.3.4.6.9 1.1 1.7 1.1.3 0 .5.3.7.5.3.2.6.5.9.2.3-.2.2-.7.2-1 0-.2-.2-.4-.3-.5l-3.2-3.2c-.1-.1-.2-.1-.3-.1-.2 0-.3 0-.4.2v.5zm12.8 24c-.2.1-.3.2-.3.4.2.8.5 1.5.9 2.2.4.7 1 1.3 1.7 1.7.4.3.8.5 1.3.4.5-.1.7-.4.6-.8-.3-.9-.8-1.6-1.6-2.1s-1.5-1-2.2-1.6c-.1-.2-.3-.2-.4-.2zm7.1-.9c0-.3 0-.6-.3-.9l-1.1-1.1c-.3-.3-.6-.9-1-.8-.6.1-.2.8-.3 1.2-.1.3-.1.6-.2.9-.1.8.1 1.5.7 2.1.1.1.3.2.5.3.7 0 1.7-.9 1.7-1.7zm-12.3-16.8c-.1.8.2 1.5.8 2 .3.2.5.5.8.7.3.3.7.5 1.2.7.6.2 1-.2.9-.8-.1-.7-.3-1.3-.9-1.7-.6-.4-1.1-.9-1.6-1.4-.2-.2-.4-.3-.6-.5-.2-.1-.5 0-.5.2 0 .3 0 .5-.1.8zm5.8-.8c-.3-.7-.2-1.6-.8-2.3-.1-.1-.5-.2-.5 0-.2.7-.8 1.2-1.3 1.7-.5.6-.5 1.1 0 1.6.2.3.5.5.7.8.6.7.7.7 1.2 0 .4-.4.4-1 .7-1.8zM163 178c1.4-1.3 1.4-2.8 1.6-4.3v-.5c-.1-.5-.4-1-.6-.9-.5.1-.7.4-.8.8v.1c-.6 1-.5 2.2-.8 3.4-.1.2 0 .4.2.6 0 .3.1.5.4.8zm-4.6-6.1v.9c.1.6.3 1.2.8 1.6.4.4.9.3 1.4.1.4-.2.5-.6.5-1 0-.5-.1-1-.5-1.4-.3-.3-.6-.7-1-.9-.3-.2-.6-.5-.9-.4-.4.1-.3.6-.3.9v.2zm2.8 7.4h.5c.6 0 .9-.6.6-1-.6-.8-1.3-1.5-2.1-2.2-.2-.1-.5 0-.6.2-.2.4-.3.8-.4 1.1v.4c.4 1.1.9 1.5 2 1.5zm-7.1-4.2c.3.9.9 1.6 1.7 2.2.6.4 1.3.8 2.1.7.3 0 .5-.2.5-.5.1-.8-.2-1.4-1-1.6-1-.3-2.1-.6-3.2-.9 0 0 0 .1-.1.1zm11.3 14.3c.4 0 .7 0 .9-.2.6-.4.7-.8.2-1.3l-1.3-1.3c-.7-.7-.8-.6-1.3.3-.1.1-.1.3-.2.4-.5 1.4.1 1.8 1.2 2.1h.5zm-14.5-24.7c.6.4 1.1.6 1.5.9.2.1.4-.1.4-.3-.1-.5-.2-1.1-.6-1.5-.3-.5-.6-.9-.6-1.5 0-.4-.3-.6-.5-.9-.4-.5-1-.7-1.5-.9-.2-.1-.4-.2-.5.1 0 .1 0 .3.1.4.3.3.5.6.8.9.9.7 1.3 1.6.9 2.8zm6.5 7c.1-.8.1-.9-.3-1-1-.2-1.9-.6-2.7-1.3-.3-.2-.5-.3-.8-.3h-2.4c0 .4.2.4.4.5.7.2 1.3.5 2 .7 1.3.3 2.6.8 3.8 1.4z" />
                                                <path class="st9"
                                                    d="M211.4 194.6c.4 0 .9-.1 1.2.1.9.7 1.4.3 2-.4.4-.4.9-.6 1.5-.7 1-.1 1.8.5 1.8 1.6v1.6c.4.2.7-.1 1.1-.1.5 0 .8.1.9.6.2.6.4 1.2.5 1.7.2.9-.1 1.6-.6 2.3-.5.7-1.1 1.3-1.7 1.9.1.4.4.3.6.3h1.8c1.1.1 1.6.6 1.7 1.8 0 1.3-.7 2.3-1.8 2.7h-.1c-.4.3-1 0-1.2.7.4.3.8.3 1.3.4.5.2 1 .4 1.2.8.7 1.3.4 2.3-.9 2.9-.5.3-1.1.3-1.6.5-.3.1-.6.1-.9.1-.1.4.2.6.5.8.4.3.7.7.9 1.2.2.6.1 1-.4 1.4-.2.2-.4.3-.7.4-.8.3-1.6.6-2.5.6h-.3c0-.2-.2-.3-.3-.3-.6-.5-1.3-1-1.9-1.5-.1-.1-.3-.1-.3.1 0 .1 0 .2.1.3 0 .3-.1.6.3.7-.2.6.2 1.2.3 1.8.1.7 0 1.1-.7 1.3-.4.2-.9.3-1.3.4-.7.2-1.3.1-1.9-.4-.6-.5-1.2-1.1-1.8-1.6-.4.2-.4.6-.5.9-.2.6-.6.9-1.2 1.1-.7.2-1.5.4-2.3.3-1.1-.1-1.7-.6-1.8-1.7v-1.1c0-.6.2-1.1 0-1.7-.9.4-1.7.8-2.7 1-.4.1-.9.2-1.4.2-1.3 0-2.2-.8-2.4-2.1-.1-.5 0-.8.4-1.1.5-.4 1-.7 1.5-1 .2-.1.4-.3.6-.5 0-.4-.3-.3-.6-.3-1 0-2-.1-3-.4-.6-.2-1-.4-1.2-1-.1-.2-.2-.4-.4-.3-.1.1-.2.2-.2.3.2 1-.4 1.5-1.2 1.9-.4.2-.7.4-.7.9-.1.9-.6 1.6-1.4 2.1l-1.8.6c-.2.1-.3.2-.2.5.2.3.2.6.2.9 0 .4-.2.7-.6.8-.7.2-1.5.4-2.2.6-.3.1-.5-.1-.7-.2-.5-.4-.9-.9-1-1.5 0-.1-.1-.3-.2-.4-.1-.1-.1-.2-.3-.1-.1 0-.2.1-.2.2-.2 1.3-.6 2.5-1.2 3.6-.7 1.4-1.7 2-3.2 1.8-.7-.1-1.1-.5-1.2-1.2 0-.7 0-1.3.2-2 .4-.9.7-1.9.9-2.9-1 1.1-2.1 1.9-3.1 2.9-.3.3-.6.5-1 .6-1.1.3-1.5 0-1.9-1l-.3-.9c-.1-1-.4-1.7-1.6-1.9-.6-.1-1-.7-1.2-1.3-.1-.1-.1-.3-.1-.4-.5-1.9-.7-1.7.8-2.7.1-.1.2-.2.4-.3.3-.2.3-.4.2-.8-.3-.7-.5-1.3-.8-2-.2-.5-.1-.9.2-1.3.7-.7 1.3-1.6 2.2-2.1.1-.5-.2-.7-.4-1-.7-1.3.2-3 1.4-3.2.6-.2 1.3-.4 1.9-.5.1-.6.3-1.2.6-1.7.3-.6.7-1 1.2-1.3.7-.5 1.6-.6 2.2-1.3.1-.1.4-.2.6-.2.8 0 1.3-.2 1.7-.9.2-.4.9-.5 1.4-.2.5.2 1 .6 1.3 1 .3.3.6.4.9.2.3-.1.5-.3.8-.4h.5c1.5.4 1.5.4 2.8-.1.7-.2 1.3-.2 1.9.3.8.6 1.2 1.4 1.4 2.3.1.5-.1 1.1-.5 1.3-.4.3-.5.6-.5 1 0 .8-.4 1.5-1 2-.8.6-1.5 1.2-2.3 1.8-.2.2-.4.3-.6.5 0 0-.1.2 0 .2.1.1.2.1.3.1.3-.1.6-.3 1-.5.5-.2.9-.5 1.4-.6 1-.3 1.6-.1 1.9.9.3 1 .8 1.9.7 2.9 0 .3.1.5.3.7.2.4.4.7.6 1.1.4-.2.9-.5 1.3-.7l-.3-.3c-.3-.2-.8-.3-1-.7-.2-.4.1-.8.2-1.2.1-.3.1-.7 0-1.1-.2-1 .4-1.6 1.2-2.1.4-.2.8-.1 1.1-.6-.3-.2-.7-.4-1-.7-.4-.3-.7-.6-.8-1.1-.3-.8-.2-1.4.5-1.9.5-.3 1-.7 1.4-1.2.4-.5 1.1-.5 1.6-.8.3-.4-.1-.6-.2-.8-.1-.4-.2-.9-.2-1.4 0-.4.3-.7.7-.9.7-.3 1.4-.3 2.1-.2.3 0 .4-.3.3-.5-.2-.4-.5-.6-.9-.7-.8-.1-1.5-.4-2.2-.7-.1-.1-.2-.2-.2-.4.1-.2.2-.2.4-.2 1.6.2 3.1.6 4.5 1.3.5.3.8.8 1.1 1.2.3.5.6 1.1 1.1 1.5.3-1 .7-1.8 1.5-2.5s1.6-1 2.6-1.2c1.3-.2 2.2.8 1.9 2.1 0 .1-.1.3 0 .4.5.4.9.3 1.2 0zm-28.2 10.1c-.1-.3-.3-.5-.6-.6-.3-.3-.6-.3-1-.3-1.9.2-3.4 1.1-4.5 2.6-.4.5-.4 1.1-.2 1.7.3.9.6 1.8 1 2.7.5 1.1 1.2 1.8 2.5 1.9.5.1 1 .1 1.5-.1.4-.2.6-.6.7-.9.2-.5.5-.9 1.1-.9.2 0 .3-.2.4-.4.2-.3.3-.6.5-.9.6-1.4.6-2.7-.2-4.1-.2-.6-.6-.8-1.2-.7zm18.7.7c-.2 1.2.3 2.3 1 3.1.8.9 1.9 1.7 3.2 1.9 1.5.3 3.1-.4 3.9-1.7.2-.3.4-.7.7-1 .2-.2.3-.5.4-.8.1-.4.2-.9.4-1.3.3-.5.1-1-.2-1.4-.3-.4-.6-.7-1-1-.4-.3-.8-.5-1.1-.8-1.4-1.3-3-1.4-4.7-.7-1 .4-1.6 1.2-2.3 2-.5.4-.3 1.1-.3 1.7zm7.2 5.8c-.4.2-1 .2-1.5.3-.3 0-.4.3-.4.6 0 .8-.1 1.5.2 2.3.3.9.5 1.7.8 2.6.1.4.4.8.7 1.2.5.5 1.1.9 1.6 1.4.6.5 1.3.5 2 .2.4-.2.5-.4.4-.8-.5-2.1-1.2-4.1-2.1-6-.2-.5-.5-1-1-1.3-.2-.4-.4-.5-.7-.5zm8.3-6.8h-2.8c-1.7 0-2.2.8-2.6 2.3-.1.2.1.4.3.5.2 0 .4.1.6 0 1.3-.1 2.5.1 3.6.8.3.2.6.3.9.1 1-.4 2-.7 3-1.1.5-.2.8-.7.9-1.1.3-.8-.1-1.3-.9-1.3-.9-.2-2-.2-3-.2zm-10.3 13.1c.1-.6-.2-1.2-.4-1.8-.4-1.2-.7-2.3-.6-3.6 0-.2 0-.4-.1-.6-.1-.3-.6-.4-.8-.2-.7.9-1.5 1.6-1.6 2.9-.1 1-.2 1.9-.2 2.9v2.3c0 .6.3.9 1 .9 2.1 0 2.5-.5 2.7-2.5v-.3zm10.4-5.2c1 0 1.9 0 2.7-.3.5-.2.7-.5.7-1s-.2-.8-.8-1c-.3-.1-.6-.1-.9-.2-1.1-.3-2.2-.5-3.1-1.1-1.2-.8-2.5-.7-3.8-.6-.4 0-.6.3-.4.6.1.3.3.6.5.9.8 1.2 2.1 1.8 3.2 2.4.6.5 1.3.3 1.9.3zm-18.9 4.6h.7c1.5-.1 3.2-1.4 3.4-2.7.2-1.1.7-2 1.3-2.9.2-.2.4-.5.2-.8-.2-.3-.5-.3-.8-.4-.4 0-.8.1-1.1.4-.5.6-1.1 1.1-1.5 1.7-.5.6-1.1 1.2-1.7 1.7-.6.5-1.2.9-1.9 1.3-.3.2-.4.5-.2.8.2.9.8 1 1.6.9zm3.3-14.4c-.1-.1-.1-.3-.2-.4-.6-.7-1.3-1.3-1.8-2-.3-.4-.8-.7-1.3-1-.3-.2-.6-.2-.9-.1-.4.1-.8.3-1 .6-.2.3-.6.6-.9.8-1 .7-1 1.1 0 1.8.3.2.7.5 1.1.6 1.4.4 2.5 1 3.6 1.9.3.3.6.2.7-.2.1-.6.3-1.2.7-1.7-.1 0-.1-.2 0-.3zm-28.9 8.9c.9-.1 2-.3 3.1-.9.4-.2.5-.5.4-.9 0-.2-.2-.5-.2-.7-.5-1.8-.5-1.8-2.3-2.4-.9-.3-1.6 0-2.2.6-.8.8-1.4 1.7-.7 3 0 .1.1.2.1.3.4 1 .4 1 1.4 1h.4zm46.1-13.5c-1 .6-1.9 1.1-2.9 1.6-.9.5-1.8 1-2.6 1.5-.9.6-1.6 1.3-1.5 2.4 0 .4.3.6.6.4.2-.1.5-.2.7-.3.7-.2 1.3-.6 2-.2.2.1.5 0 .7-.1 1.1-.4 1.8-1.3 2.6-2 .9-.9 1.2-1.9.4-3.3zM176 211.4c-1.5.1-3.1.5-4.6 1-.6.2-1 .7-1.5 1.1-.1.1-.2.4-.2.6 0 1.1.6 1.8 1.8 2.1.6.2 1 .1 1.5-.4 1.1-1 2.4-1.9 3.6-2.8.3-.2.6-.4.7-.7.2-.3 0-.7-.3-.7-.3-.2-.6-.2-1-.2zm14 2.7c0-.4-.1-.7-.4-.8-1.1-.4-1.7-1.2-2.4-2-.5-.6-.7-1.3-1.3-1.8-.7.5-.9 1.3-1.2 2-.2.4-.8.8-.7 1.3.1.5.6.8 1 1.1.6.6 1.1 1.2 1.8 1.6 1.1.7 1.7.6 2.6-.2.3-.3.7-.7.6-1.2zm-8.8-.3c-.3 0-.7-.3-1 0-.3.3-.2.7-.3 1-.3 1.4-.6 2.9-1.2 4.2-.2.4-.3.9-.5 1.3s-.2.9-.1 1.3c0 .3.2.4.5.5 1 .1 1.7-.4 2.1-1.4.8-1.7 1.1-3.6 1.5-5.4.1-.4 0-.8 0-1.2 0-.3-.3-.5-.6-.5-.2.1-.3.1-.4.2zm13.4-7c0 1.5.2 1.7 1.7 1.8h.3c1.1 0 2.1-.2 3.1-.7.5-.3 1.3-.3 1.3-1.1s-.8-.8-1.2-1.1l-1.8-.9c-.6-.3-1.1-.4-1.7-.2-1.5.4-1.6.5-1.7 2v.2zm22 9.8c.4.1.9-.2 1.4-.3.4-.2.6-.6.3-1-.2-.4-.5-.6-.9-.8-1.3-.7-2.5-1.5-3.8-2.2-.9-.5-1.6-1.1-2.1-1.9-.2-.3-.4-.6-.6-.8h-.3c-.3.2-.5.8-.3 1.1.8.8 1.3 1.8 1.7 2.9.1.2.2.4.4.4.6 0 .8.5 1.2.8.4.5.9 1 1.4 1.4.4.2.9.5 1.6.4zm-43 3c.3-.1.6-.3.8-.4 2.1-1.3 3.3-3.3 4.4-5.3.2-.4 0-.8-.5-.9-.5-.1-.9.1-1.2.5-.9 1.1-2.1 1.9-3.2 2.8-1.4 1.1-1.4 1.1-.8 2.7.1.1.1.3.1.4.1.1.2.1.4.2zm43.3-23.7v-.6c0-.6-.5-.9-1.1-.7-.6.2-1.1.6-1.4 1.1-.4.5-.8 1-1.1 1.4-.9 1.2-1.8 2.5-2.5 3.8-.1.2-.2.5-.3.7 0 .1.1.3.2.3 0 0 .2 0 .3-.1.6-.9 1.4-1.5 2.3-2 .5-.3 1-.5 1.5-.8 1.1-.6 2.1-1.5 2.1-3.1zM205 198c0 .6 0 1.2.3 1.8.2.5.4.6 1 .5.4-.1.6-.2.6-.7-.1-1.5.6-2.7 1.5-3.9.4-.5.7-1 1.1-1.5.2-.3 0-.7-.4-.8-.1 0-.3-.1-.4-.1-1.2 0-2.8 1.1-3.1 2.3-.4.8-.7 1.6-.6 2.4zm-5.9-2.5c-.7 0-1 .4-.8 1.1.2.5.5.9.9 1.2 1 1.1 2.3 1.9 3.1 3.1l.3.3c.2.1.5.1.7 0 .7-.3.9-1.1.5-1.8-.8-1.2-1.8-2.3-2.9-3.3-.5-.4-1.1-.6-1.8-.6zm-13.7 9.2c.1-.1.2-.1.2-.2.2-.5.5-1 .6-1.5.3-.9.9-1.6 1.6-2.1.9-.6 1.7-1.2 2.8-1.4.3 0 .4-.3.4-.6.1-.6-.2-1.1-.5-1.5-.5-.6-1.1-.7-1.8-.2-.8.5-1.4 1.2-1.8 2-.4.9-.8 1.7-1.2 2.6-.2.9-.5 1.8-.3 2.9zm11.7 7c.4 0 .8.1 1.2 0 .7-.1 1.5-.2 2.1-.6.6-.4 1-1 1.5-1.5.1-.1.2-.3.1-.4-.1-.1-.2-.2-.4-.2-.6-.1-1.1.2-1.6.3-1.5.2-3 .5-4.4 1-.3.1-.6.2-.8.3-.3.1-.3.6 0 .8.3.2.6.4 1 .4.4-.1.9-.1 1.3-.1zm-9.8-3c-.2.1-.3.2-.3.4.5.9 1 1.8 1.7 2.5.5.5 1.1.8 1.7 1 .6.2 1.3-.2 1.3-.9 0-.4.1-.8.3-1.1.4-.6 0-1.2-.7-1.3-.7 0-1.3-.1-2-.3-.6-.1-1.3.1-2-.3zm-7.6-5.6c0-.4-.2-.7-.4-.9-.4-.4-.6-.9-.8-1.4-.2-.6-.2-1.1-.2-1.7 0-.2.1-.5-.2-.7-.3-.1-.5.1-.7.3-.2.1-.4.2-.5.3-.5.6-1 1.2-.9 2 .2 1.1.7 2.1 1.7 2.8.1.1.3.2.4.2.6 0 1.1-.4 1.6-.8v-.1zm29.3-2.2c.3 0 .5-.3.7-.5.8-1.1 1.5-2.1 2.3-3.2l.6-.9c.1-.2.1-.4 0-.6-.1-.2-.3-.2-.5-.2-2.1.3-4 2.4-3.9 4.5-.1.5.4.9.8.9zm-34.8 1.3c-.4 0-.7.1-1 .3-.6.3-.7.8-.7 1.4 0 .6.3 1.2.8 1.3.9.2 1.8.6 2.7.9.4.1.6-.2.9-.5.2-.2.2-.5 0-.7-.5-.7-1.1-1.5-1.6-2.2-.3-.3-.6-.5-1.1-.5zm9.1.2c0 .4.1.7.3 1 .4.4.7.4.9-.1.4-1.5 1.1-3 1.8-4.3.2-.3.3-.6.5-1 .1-.3 0-.5-.2-.6-.2-.1-.4-.2-.7-.2-.7.2-1.3.5-1.6 1.3-.5 1.2-.7 2.6-1 3.9zm3 4.9c1 .3 1.6.8 2.4.8.9 0 1.7 0 2.6.2.2.1.4-.1.4-.3-.2-.7-.3-1.4-.5-2-.2-.5-.6-.7-1.1-.5-1.2.5-2.4 1.1-3.8 1.8zm-3 6.8c.2 1.2.5 2.4.9 3.6.3.9.8 1.1 1.8.8.1 0 .3-.1.4-.1.3-.1.5-.4.4-.7-.2-.5-.3-1.1-.8-1.4-.8-.5-1.5-1.2-2.2-1.9-.1-.2-.2-.4-.5-.3zm-3.7-16.7c-.1.1-.3.2-.3.3-.2 1.3-.4 2.5.4 3.6.2.3.4.7.7 1 .3.5.6.6 1 .4.3-.1.4-.4.3-.9-.5-1.3-1-2.6-1.4-4 0-.1-.2-.3-.3-.3-.1-.1-.2-.1-.4-.1zm2.8 3.4c.1-.2.2-.2.3-.3.3-1 .6-1.9.8-2.9 0-.1 0-.3-.1-.4-.3-.4-.6-.8-1.1-1-.2-.1-.4 0-.5.2-.3.7-.5 1.5-.3 2.2.2.7.6 1.5.9 2.2zm7.6 0h-.1c-1.3.5-2.5 1.2-2.8 2.7 0 .1-.1.3.1.4.1.1.3.1.4 0 1-.6 1.8-1.4 2.6-2.3.1-.1.1-.4.1-.6-.1-.1-.2-.1-.3-.2zm12.1-6c-.2.4-.2.8 0 1.1.3.5.7.9 1.2 1.1 0 0 .1 0 .1-.1l.1-.1c-.2-.3-.8-1.3-1.4-2z" />
                                                <path class="st22"
                                                    d="M162.7 213.6c.6-.1 1 .3 1.6.3-.1.7-.3 1.3-.8 1.9-.3.1-.4.3-.4.6-.4-.1-.6-.2-.5-.7.1-.3 0-.5-.3-.7 0-.5.1-1 .4-1.4z" />
                                                <path class="st14"
                                                    d="M157 160.7c.1.4.3.8.4 1.1.2.9-.1 1.6-1.1 2.5.3-1.4.4-2.4.2-3.5.3 0 .4-.1.5-.1z" />
                                                <path class="st12" d="M163 216.3c0-.3.1-.5.4-.6 0 .3-.1.5-.4.6z" />
                                                <path class="st14" d="M157.4 160.6v-.1z" />
                                                <path class="st20"
                                                    d="M320.1 209.7c-.4.8-.8 1.6-1.3 2.4-.5.8-1.3 1.4-2.2 1.8-1.7.6-4.7-.4-5.4-3-.4-1.4-.2-2.8.1-4.2.3-1 .9-1.8 1.9-2.3.5-.2 1-.4 1.6-.6.3-.1.5-.2.6-.4 1.1.2 2.2.4 3.2 1 .2.1.4 0 .5-.2.2-.4.4-.5.8-.3.8.3.8.3.9 1.1 0 .6.3.8.7.5.4-.2.8-.5 1.2-.7.1-.1.3-.1.4.1.1.1.1.3.1.4 0 .3-.2.6-.5.7-.7.4-1.4.9-2.3.8-.5 0-.6.1-.6.6.1.8.2 1.6.3 2.3zm-6.3 3.3c-.2-.7-.4-1.1-.5-1.6-.3-1.2-.2-2.3.4-3.4.2-.5.6-.9 1.1-.9.7 0 1 .4 1.3.9.1.2.2.4.2.6.4 1.3.3 2.6-.3 3.9-.1.3-.5.4-.4.8 1 .2 1.7-.3 2.2-1 1-1.1 1.7-2.4 1.5-4-.1-.5-.1-.9-.1-1.4-.1-.6-.2-.7-.8-.7-1.5-.1-2.9-.1-4.4.3-2.5.7-2.3.4-2.4 3.2v.3c.2 1.2.8 2.2 2.2 3zm.9-2.4c-.1-.3-.1-.6-.2-.8-.1-.2-.3-.2-.5-.2s-.3.1-.3.3c-.1.5-.1 1 .3 1.4.1.1.5.1.5 0 .1-.3.1-.5.2-.7z" />
                                                <path class="st13"
                                                    d="M442.5 170.1c0 .6-.4.9-.8 1.2-1.6 1.3-3.2 2.5-4.8 3.7-1.2.9-2 2.1-2.6 3.5-.7 1.6-1.2 3.3-1.7 5.1-.7 2.7-2.1 4.9-4.1 6.9-1.7 1.7-3.6 3.1-5.3 4.9-1 1-1.8 2.2-2.7 3.3-1.3 1.7-2 3.6-2.5 5.7-.1.5-.3 1.1-.5 1.6-.1-1.2-.2-2.5 0-3.7.2-1 .4-2.1.6-3.1.4-2 1.2-3.8 2.2-5.5 1.1-2 2.3-4 3.6-5.9.7-1.1 1.7-2.2 2.5-3.2l3.6-4.5.1-.1c1.7-1.7 3.1-3.7 4.9-5.2 1.2-1 2.4-1.8 3.7-2.6.9-.6 1.9-1.1 2.8-1.6.4-.4.7-.4 1-.5zM418.9 180.8c1.5.5 2.6.3 3.5-.6.2-.2.4-.3.7-.3.7 0 1.3-.3 1.9-.5.1 0 .3-.1.4 0 .2.1.1.3.1.4-.6 1.3-1.2 2.7-2.4 3.7-.9.8-1.9 1.2-3 1.5-.4.1-.8-.2-.9-.6v-1.1c.1-.7.1-1.5-.3-2.5z" />
                                                <path class="st8"
                                                    d="M414.6 177.4c.5.4.9.8 1.4 1.1.3.2.8.4.8.8.1.6.1 1.2-.1 1.8-.2.4-.4.8-.8 1.1-.7.6-1 1.3-.9 2.1v.3c0 .1-.1.2-.2.2s-.2 0-.3-.1c-.4-.6-.8-1.2-1.1-1.8-.4-.9-.4-1.8-.1-2.7.3-1 .8-1.9 1.3-2.8zM412.3 182.9c.5.1.5.4.6.7.5 1.2 1.3 2.2 2.5 2.7.4.2.4.4.1.7-.8.7-1.5 1.5-2.3 2.2-.1.1-.3.1-.4 0-.8-.3-1.2-.9-1.3-1.7 0-.6-.1-1.2 0-1.8.3-.9.4-1.9.8-2.8z" />
                                                <path class="st13"
                                                    d="M427.8 158.8c-.1 1.3.3 2.1.3 3.1 0 .7 0 1.3-.4 1.9-.1.2-.2.4-.2.6 0 .9-.7 1.4-1.3 1.9-.1.1-.2.1-.3 0-.1 0-.2-.2-.1-.2.3-.6 0-1.2-.2-1.7-.4-.9-.3-1.8.1-2.6.4-1.2.9-2.2 2.1-3zM419.5 174.2c-.3-.1-.3-.2-.3-.2-.9-1.6-.7-4.6.4-5.9.4-.5.9-.5 1.2 0 .5.8.9 1.6.3 2.6-.2.3-.3.6-.5.9-.6.8-1 1.6-1.1 2.6zM430 171.6c-.1 1-1 1.4-1.6 2-1.1.9-2.4 1.3-3.7 1.7-.2.1-.5 0-.8 0-.2 0-.4-.4-.3-.6.8-.9 1.5-1.9 2.8-2.2 1.2-.3 2.3-.9 3.6-.9z" />
                                                <path class="st23"
                                                    d="M435.5 160.9c.1 1.8-.7 2.7-2 3.4-.5.3-1 .5-1.5.8-.2.1-.4.1-.6 0-.2-.2-.3-.4-.2-.7.1-.3.2-.7.4-1 1-1.1 2.1-2.2 3.2-3.2.2-.2.5-.1.6.2v.2c.1.2.1.4.1.3z" />
                                                <path class="st13"
                                                    d="M432.9 165.7c.3.9 0 1.6-.4 2.2-.3.6-.9 1-1.5 1.2-.6.2-1.1.5-1.8.3s-.9-.6-.5-1.3c.2-.4.5-.8.9-1 1-.6 2.1-1.1 3.3-1.4zM418.6 183.2c0 .7-.2 1.3-.5 1.9-.3.6-.8.7-1.4.4-.2-.1-.4-.2-.6-.4-.6-.5-.7-1.4-.2-1.9l1.8-1.8c.3-.3.6-.2.6.2.1.6.4 1.1.3 1.6zM425 170.7c-.6 0-.9-.3-.9-.8.1-.5.3-.9.6-1.2l2.4-2.4c.3-.3.5-.2.7.2.3.6.2 1.2-.1 1.9-.5 1-1.3 1.6-2.1 2.1-.2.2-.5.2-.6.2zM418.7 188.7c0-.3.1-.6.4-.8.7-.7 1.3-1.4 2.1-2 .4-.3.8-.7 1.2-1 .1-.1.3-.1.4-.1.1 0 .2.2.2.4-.3 1.6-1.1 2.9-2.4 3.9-.2.2-.5.3-.8.4-.8.3-1.2 0-1.1-.8zM418.2 178.8c-.7-.7-1-1.6-1.1-2.6 0-.3-.1-.6-.2-.9-.3-.7.2-1.3.3-1.9 0-.2.4-.1.5 0 .7.6 1 1.4 1.2 2.2.1.6 0 1.2.3 1.8.1.3 0 .5-.2.7-.2.3-.4.6-.8.7zM422.3 166.3c-.1-.6.2-1.3.6-1.9.2-.4.5-.4.7-.1.3.6.7 1.1 1.2 1.6s.5 1 0 1.6c-.2.3-.5.5-.7.8-.5.5-.7.5-1.1-.1-.6-.5-.7-.9-.7-1.9zM423.2 172.4c-.1.6-.2 1.3-.4 2-.2.5-.6.9-1.2 1.1-.6.2-1.2-.1-1.4-.7-.2-.6-.1-1.2.4-1.7s1-1.1 1.6-1.3c.7-.3 1-.1 1 .6zM427.4 175.9c-.5 1.4-1.5 2.1-2.5 2.8-.5.3-.9.3-1.4.3-.4 0-.5-.3-.5-.6 0-.5.1-.9.5-1.2.4-.2.7-.4 1.1-.5.8-.3 1.7-.5 2.8-.8zM417.7 188.6c0 .8-.2 1.2-.7 1.4-.8.4-1.4.4-2-.1-.5-.4-.5-.8-.1-1.3.2-.3.5-.5.7-.7.4-.3.6-1 1.2-.8.5.2.6.9.8 1.4.1.1.1.3.1.1zM428.9 166.5c-.3-.6-.1-1.1.2-1.6.3-.5.6-1 .6-1.7 0-.1 0-.2.1-.3.2-.4.5-.8.9-1 .6-.3 1.1-.8 1.8-.7-.2.6-.6.9-1 1.2-.5.5-.8 1-1.1 1.6-.2.3-.2.6-.1 1 .1.6.1.7-.4 1-.3.3-.6.6-1 .5zM420.2 180.2h-.5c-.3 0-.5 0-.6-.3-.1-.3 0-.5.2-.7.6-.6 1.1-1.2 1.7-1.7.5-.6.8-.7 1.2.2.5 1.3-.2 2.5-1.6 2.5h-.4zM430.4 170.1c-.4.7-1 .6-1.5.8-.6.2-1.2.3-1.8.5-.5.2-1.1.3-1.6.5s-1 .4-1.5.7c-.1-.8-.1-.8.4-1 .9-.2 1.9-.5 2.6-1.2.3-.3.6-.3 1-.3h2.4z" />
                                                <path class="st14"
                                                    d="M421.8 189.5c-.1-.1-.1-.1 0-.2 0-.4.3-.6.7-.8-.2.4-.5.7-.7 1zM423.7 186.7c-.1.3-.3.5-.6.7 0-.4.1-.7.3-1.1.1.1.2.2.3.4z" />
                                                <path class="st13"
                                                    d="M442.5 170.1l.1-.1v.1h-.1zM430 171.6l.1-.1s0 .1-.1.1zM426.9 200.7c0 .7-.1 1.2-.8 1.7-.6.5-1.1 1.2-1.6 1.8v.3c.1.1.2.1.3.1.5-.3.9-.6 1.4-.9.2-.1.3-.3.4-.4.9-1.1 2-1.9 3.5-2.3.7 1.5.6 2.7-.5 3.9-.5.6-1 1.1-1.6 1.7-.2.2-.4.3-.6.5-.3.2-.6.2-.9 0-.4-.3-.8-.5-1.1-.8-.4-.5-.8-.6-1.3-.6-.6 0-.7-.2-.7-.8-.1-1 .2-1.9.7-2.7.3-.6.7-1.1 1-1.7.3-.6.4-1.2.6-1.9.7.3 1.1.8 1.1 1.6.1.1.1.3.1.5zM432 192.9c1 1.2.8 2.6.7 4-.6 1.1-.9 2.4-2.4 2.7-.1 0-.2.1-.3.1-.8.5-1.2.1-1.3-.7-.1-1.3.4-2.4 1.1-3.4.7-.9 1.5-1.8 2.2-2.7z" />
                                                <path class="st23"
                                                    d="M447.7 183.5c-.6 0-.8-.2-1-.4-.2-.3-.2-.6 0-.8.4-.4.7-.9 1.2-1.1l4.5-2.1h.3c.2 0 .3.1.3.3 0 .2-.1.4-.2.6-1.2 1.6-2.7 3-4.7 3.6-.2-.1-.4-.1-.4-.1zM442.6 190c-1.5 0-1.8-.4-1.4-1.8.2-.8.6-1.3 1.4-1.3.6 0 1-.5 1.5-.6.4-.1.8-.6 1.2-.1.3.4-.1.8-.2 1.1-.2.6-.4 1.1-.8 1.6-.3.8-.9 1.2-1.7 1.1zM437.2 201.3h-.4c-.4-.1-.8-.2-.9-.7-.1-.4.1-.8.5-1 .3-.2.5-.3.7-.6.9-1.1 2.1-1.4 3.4-1.6.4 0 .5.2.4.6-.6 1.5-1.7 2.5-3 3.2-.3.1-.6.1-.7.1zM438.5 191.4c0 1.8-1.1 3.4-2.6 4-.4.1-.7 0-.9-.3-.5-.8-.5-1.1 0-1.8.4-.5.7-.9 1.3-1.3.6-.4 1.1-1 1.7-1.5.2-.2.5 0 .6.2-.1.3-.1.6-.1.7zM431.1 206.2c-.3 0-.5 0-.7-.1-.2 0-.3-.3-.2-.5.7-1 1.5-1.9 2.8-2.2 1-.2 2.1-.5 3.1-.8.1 0 .2 0 .3.1v.3c-1.4 1.9-3.1 3-5.3 3.2zM461.9 174.7c-.5 1.3-1.4 2.3-2.6 2.9-.8.4-1.7.7-2.5 1-.2.1-.4.1-.6.1-.3 0-.6-.2-.7-.5-.1-.3 0-.6.3-.8.4-.3.8-.6 1.3-.8l4.2-1.8c.1-.1.3-.1.6-.1zM440.5 194.5c-.5 0-1.1-.7-.9-1 .3-.8.7-1.6 1.5-2 .7-.4 1.4-.6 2.1-.2.4.2.8.3 1.1.4.2.1.4.2.4.4.1.3-.3.3-.5.4-1 .6-2 1.4-3.1 1.8-.1.1-.4.3-.6.2zM450.1 186.4c-1 1.2-1.8 2.3-2.8 3.3-.6.7-1.6.9-2.5 1.1-.1 0-.3-.1-.4-.2-.1-.1-.1-.3 0-.4 1-1.1 1.7-2.5 3.1-3.3.8-.3 1.6-.6 2.6-.5zM439.4 186c.1.5.1 1.1 0 1.6-.1.3-.2.7-.6.8-.6.1-.8.6-1 1-.4.8-1.1 1.5-1.9 1.9-.4.2-.8 0-.9-.4-.1-.4 0-.8.3-1.1 1.3-1.3 2.6-2.6 3.9-3.8 0-.1.1 0 .2 0zM457.7 181.3c-.4.5-.9.8-1.3 1-1.6.8-3.2 1.3-4.9 1.5-.3 0-.6 0-.9-.1-.2 0-.2-.2-.1-.4.3-.3.6-.6 1-.7.8-.2 1.5-.7 2.2-1 1-.4 2.6-.6 4-.3zM465.4 176.6c-1.8 1.4-3.6 2.1-5.5 2.6-.4.1-.8 0-1.2 0-.1 0-.2-.1-.2-.1 0-.1 0-.2.1-.3.9-.6 1.8-1.3 2.8-1.7 1.1-.4 2.4-.7 4-.5zM434.2 200.7c-.5 0-.9.2-1.3.4-.3.1-.5.3-.9.2-.3 0-.6-.1-.8-.4-.2-.3-.1-.6.1-.8.7-.8 1.5-1.3 2.5-1.7.2-.1.5-.2.7-.2.3-.1.5-.1.7.1.2.2.1.5 0 .7-.2.4-.5.8-.8 1.1-.1.1-.1.3-.2.6z" />
                                                <path class="st13"
                                                    d="M430.6 208.9c-.4 0-.8.1-1.1.4-.2.2-.5.4-.7.6-.2-.1-.3-.4-.3-.6v-1.4c0-.8.3-1.1 1.1-1.1 1.3 0 2.9-.2 4.1-.5-.3.7-1.2 1.1-1.7 1.4-.6.3-1.4.5-1.4 1.2z" />
                                                <path class="st23"
                                                    d="M448.7 184.2c.2 0 .4 0 .5.1 1.2.4 2.5.4 3.7 0 .1 0 .2 0 .3.1.1.1 0 .3-.1.4-.6.5-1.4.5-2.2.7-1.4.3-2.8.4-4.1 1.1-.1.1-.2 0-.3-.1 0-.1-.1-.2 0-.3.4-.8 1-1.3 1.6-1.8.2-.2.5-.2.6-.2zM469.2 170.9c-.2.1-.4.2-.7.3-1.8.7-3.6 1.5-5.5 2.2-.7.3-1.6.4-2.3.5-.1 0-.2-.1-.2-.1 0-.1 0-.2.1-.3l.1-.1c1.6-.4 3-1.3 4.5-1.9 1.1-.4 2.3-.6 3.5-.9.1.1.3 0 .5.3zM444.6 182.3c0 .6 0 .9.1 1.2.1.7-.2 1.2-.8 1.5-.8.5-1.5 1-2.3 1.4-.1.1-.3.1-.4 0-.1-.1-.1-.3-.2-.4 0-.3.1-.6.3-.8 1.2-.7 2.1-1.8 3.3-2.9zM454.2 180.7c-.5 0-.7-.3-.6-.5l.6-1.5c.1-.1.2-.3.3-.3.3-.1.3.2.3.4.2.4.4.6.8.6.5 0 .9.1 1.3.3.3.1.7.1.6.5 0 .3-.5.3-.8.4h-.6c-.6-.1-1.4-.2-1.9.1z" />
                                                <path class="st22"
                                                    d="M434.2 200.7c.8-.1 1.1.4 1.3 1 .1.2 0 .3-.2.4-.4.2-.7.4-1.1.4-.8.1-1.6.3-2.3.6-.4.1-.6 0-.7-.3-.1-.4.1-.8.5-.7.8 0 1.5-.2 2.1-.6.4-.3.4-.6.4-.8z" />
                                                <path class="st23"
                                                    d="M448.5 179.7c.1-.4.4-.7.8-.9.9-.6 1.9-1.2 2.6-2 .1-.2.3-.2.5-.1s.1.4.1.6c-.2.6-.6 1.2-1.2 1.5-.7.3-1.4.7-2.2 1.1-.2 0-.4 0-.6-.2z" />
                                                <path class="st22"
                                                    d="M426.9 200.7v-.6c.4 0 .7-.3.5-.7-.1-.2-.2-.5-.3-.7-.2-.5-.1-.8.4-1.1.2-.2.6-.1.6.2 0 .9.1 1.8.3 2.7.1.3-.2.5-.4.4-.4-.1-.7-.1-1.1-.2z" />
                                                <path class="st23"
                                                    d="M456 176.1s-.1 0-.1-.1-.1-.2 0-.3c0-.1.1-.2.2-.2.9-.6 1.8-1.2 2.8-1.6.2-.1.3-.1.4.1.2.2.1.4 0 .6-.1.1-.2.3-.3.3-.9.4-1.8.8-2.6 1.2h-.4z" />
                                                <path class="st13"
                                                    d="M440 188.4c.1.8.2 1.3.5 1.7.1.2.2.5 0 .7-.3.3-.5.7-1 .8-.1 0-.3-.2-.3-.3-.1-.7-.1-1.4.3-2 .1-.1.2-.4.5-.9z" />
                                                <path class="st22"
                                                    d="M428.4 209.3c0 .3.1.5.3.6-.2.4-.6.3-.9.3v-.9h.6z" />
                                                <path class="st13"
                                                    d="M433.7 206.3l.1.1-.1.1h-.3s0-.1.1-.1c0-.1.1-.1.2-.1zM433 208l.1-.1c.1 0 .1.1-.1.1z" />
                                                <path class="st23" d="M461.8 174.7l.1-.2v.1z" />
                                                <path class="st24"
                                                    d="M437.4 203.2c-.1.1-.2.2-.3.1-.1-.1 0-.2.1-.3.1.1.1.2.2.2z" />
                                                <path class="st23"
                                                    d="M455.1 176.5l-.1.1c-.1 0-.1 0 .1-.1zM455.1 176.5l.1-.1v.1h-.1z" />
                                                <path class="st10"
                                                    d="M359.7 239.3c.1-.1.2-.2.4-.2 1.4-.1 2.5-.7 3.1-2.1.8.7-.2 1.2-.1 1.8.6.4 1.1-.1 1.7-.2-.3.9-1.1.9-1.8 1.2-.3.1-.7.1-1 .1-.4.1-.8.2-.9.7-.2-.1-.5-.1-.5-.4 0-.7 0-.7-.6-.8-.2-.1-.3-.1-.3-.1z" />
                                                <g class="st2">
                                                    <path class="st18"
                                                        d="M224.5 220.5zM224.4 220.5c.1 0 .1 0 0 0 0-.2-.2 0 0 0zM236.9 233.1s.1-.1 0 0c.1-.2 0-.2 0 0zM237 233c0 .1 0 .1 0 0 0 .1.1.1 0 0 .1.1.1 0 0 0zM242.2 231.7s.1 0 0 0c.1 0 0 0 0 0z" />
                                                    <path class="st18"
                                                        d="M244.8 248.3c-2-2.1-3.7-4.4-6.1-6.1 0 0 0-.1-.1-.2.3-.7.8-1.4 1-2.2.3-1.7 1.2-3.1 2.4-4.3.1-.1.1-.2 0-.2-.4.3-.8.7-1.2 1-.1.1-.3.1-.4 0-.2-.1-.1-.3-.1-.4.2-.8.7-1.4 1.3-2 .3-.3.7-.6 1-.9.1-.1 0-.3-.1-.4-.2.2-.5.2-.5-.2v-.8c-.2.1-.4.2-.5.5-.2.3-.3.6-.5.9-.3.4-.4 1-.9 1-.6 0-.6-.8-.7-1.2-.2-.7-.1-1.3.4-1.8s.9-1 1.4-1.4v-.1l.1-.1c-.5-.7-.9-1.4-1-2.3h-.2c.1.5.1 1 .1 1.5 0 .4-.1.8-.2 1.2-.2.6-.8 1.1-1 1-.4-.2-.4-.7-.5-1.1v-.6c-.1-.1-.2-.3 0-.4-.5-1.1-.5-1.6 0-2.5v-.1c-.2.1-.4.3-.5.5-.2.4-.3.7-.5 1.1-1.1-.9-1.5-2-1.2-3.6-.6.6-.4 1.3-.4 2 0 .6 0 .6-.5.7-.2.1-.5.1-.7.3 0 0 0 .1.1.1 1.4.4 2.1 1.5 2.6 2.7.2.5.4 1 .6 1.6 0 .1 0 .3-.1.4-.1.2-.3.1-.4.1-.5-.1-.9-.4-1.4-.7-.3-.2-.6-.5-1-.8.2.6.7.9 1.1 1.2.3.2.7.4 1 .7.3.2.4.5-.1.6h-.1c.3.2.6.5.9.7.7.6 1.2 1.2 1.5 2.1 0 .1 0 .3-.1.4-.1.2-.3.1-.4.1-.4-.1-.9-.3-1.3-.5-1.9-.5-3.3-1.5-4.1-3.3v-.1.3c0 .1-.1.2-.2.2-.2.1-.3-.1-.3-.2-.7-2.1-1.4-4.3-1.9-6.4-.1-.5-.2-1-.4-1.5-.3-.6-.4-1.2-.9-1.7-.1.5.1.9-.2 1.3-.6 0-.7-.6-1-1-.5-.7-.9-1.5-1.3-2.2-.2.2 0 .7-.3 1-1.1-.3-1.9-1-2.7-1.7v-.1s-.1 0-.1.2c0 .1 0 .3.1.4 0 .1.1.3.1.3-.1.2-.3.1-.5 0-.1.1-.3.2-.2.4.2.4.9.4.7 1-.1.3.3.2.4.3.8.2 1.6.4 2.2 1 .2.1.3.3.3.5 0 .1-.2.2-.4.2s-.5 0-.7.3c.4.1.7.2 1.1.3.2 0 .4 0 .5.2 1 .2 1.6 1 2 1.9.3.1.4.3.3.6.2.3.4.6.3 1 .3.2.3.5.3.8.4 1.2.9 2.4 1.3 3.6.6 1.6 1.2 3.2 2.1 4.7.1.2.2.5.3.7.4.3.6.6.8 1.1 0 .1 0 .2-.1.3-.1.1-.2.1-.3 0-.4-.2-.8-.4-1.1-.8-.6-.2-1.1-.6-1.7-1-2.8-2-5.3-4.4-7.4-7.2-.4-.5-.9-1-1.4-1.4 0-.4-.4-.6-.6-.8-1.7-1.6-3.1-3.3-4.5-5.2l-2.4-3.6c-.3.3-.2.8-.3 1.2.1.6.7 1 .7 1.6.8.2 1 1.1 1.5 1.6v.3c-.4 0-.8.1-1.2.1.5.1 1 .4 1.4.6.2.1.4.4.3.6-.1.3-.1.4.2.4.5 0 1 0 1.4.5.6.8 1.3 1.7 2 2.5.1 0 .3.1.4.1-.1 0-.3 0-.4-.1-.6.2-1.1.1-1.6-.1-.6-.2-1.2-.1-1.8-.1-2.1.1-4.2.1-6.4.2-.2 0-.4-.1-.6-.2-.3.2-.6.3-.9.4-.4.2-.9.3-1.2.8.3.6.9.5 1.4.7 0-.4.3-.5.6-.5 1.2-.2 2.3-.4 3.5-.5 1-.1 2 0 3.1 0 .4 0 .9-.1 1.3.3.5-.3 1-.1 1.5-.1s.9.1 1.4.1c.9 0 1.4.5 1.9 1.2.2.3.1.6-.4.6-.1 0-.2 0-.4.1.3.2.5.3.8.4.3.1.6.2.8.3.5.2 1 .5 1.4.9 3.2 3.3 6.7 6.3 10.4 9 .2.1.3.3.5.4v.1c0 .1-.1.2-.2.2h-.8c-1.1-.1-2.2-.4-3.3-.7-.8-.3-1.4-.8-1.8-1.6-.3-.7-.7-1.2-1.4-1.6.1.5.6.7.6 1.2 0 .1 0 .2-.1.3-.1.1-.2.1-.3.1-1.1-.4-1.9-1.2-2.5-2.2-.2-.4-.4-.8-.5-1.2 0 .4-.1.9-.1 1.3-.9 0-.9-.9-1.5-1.2-.1.7.3 1.2.7 1.6.1.2.3.3.4.5 0 .1.1.2 0 .3-.1.2-.3.1-.4.1-.6-.2-.9-.6-1.2-1.1-.4-.7-1-1.3-1.7-1.6-.1-.1-.3-.1-.6-.2.6.7 1.2 1.2 1.6 1.9.1.1.2.3.2.4 0 .1.1.2 0 .3-.1.1-.2.2-.4.2-.9-.2-1.8-.3-2.7-.5-.1 0-.3 0-.4.1-.2.1-.3.2-.2.4.2.3.3.5-.2.7-.2.2-.4.4-.7.6-.1.1-.1.2-.2.3 0 .3-.1.6-.3.8.6.5.6.8 0 1.5.1.1.2.3.2.4.3 1.4.8 2.7 1.3 4 .1.2 0 .4.3.4.2 0 .3-.3.3-.5.1-.4.3-.8.3-1.3 0-.2.1-.4.2-.5.2-.2.4 0 .6 0 .1 0 .2 0 .3-.1.1-.1 0-.3-.1-.4-.4-.3-.9-.4-1.2-.8-.2-.4.1-.4.3-.4l-.1-.1c-.3-.2-.7-.1-.9-.5-.1-.5-.1-1 .2-1.5.4-.7 1-1.1 1.8-1.3.2.4-.1.5-.2.7-.3.4-.6.8-.6 1.4 0 .1 0 .2.1.3.2.1.2-.1.2-.2.3-1.6 1.7-2.3 3-2.3 1.2 0 2.4 0 3.6.5.8.3 1.6.5 2.4.9 2.1.8 4.2 1.2 6.4 1.2.4 0 .8.1 1.1.3 1.2.7 2.3 1.6 3.2 2.8.6.9 1.3 1.7 1.9 2.6.2.3.2.4-.5.6 1.3.6 2.7.9 4.2.8-.7-1.1-1.6-2.1-2.5-3.2zm-7.4-7c-.4-.5-.8-1-1.2-1.6-.8-1-1.4-2.1-1.8-3.4-.1-.4 0-.6.5-.6s.9 0 1.4.2c.2.1.3.3.1.5-.3.2-.6.3-.8.9.5-.2.9-.4 1.3-.5 1.1-.3 2 .2 2.4 1.3.2.4.2.9.1 1.4-.1.6-.3 1.2-.5 1.7-.6 1-.9 1-1.5.1z" />
                                                    <path class="st18"
                                                        d="M238.6 226.1c.1 0 .2-.1.3-.1-.2-.1-.3 0-.3.1zM240.1 226.7l-.1.1c0 .2.1.3.2.3v-.3l-.1-.1z" />
                                                </g>
                                                <path class="st10"
                                                    d="M216.6 239.3c.6.1 1.2.6 1.9.2.1-.4-.3-.6-.4-.9-.1-.2-.2-.5-.1-.7l.1-.1h.2l.1.1c.4 1 1.3 1.4 2.2 1.7.3.1.6 0 .8.3-.1 0-.3 0-.4.1-.2.1-.3.2-.2.4.2.3.3.5-.2.7-.2-.6-.7-.6-1.2-.6-.9 0-1.7-.2-2.4-.6-.2-.2-.4-.4-.4-.6zM218.7 243.2c.2-.4.3-.8.5-1.1.2-.2.4-.3.6-.1 0 .3-.1.6-.3.8-.2.3-.5.4-.8.4z" />
                                                <path class="st15" d="M219.9 241.7v-.1l.1.1z" />
                                                <path class="st12"
                                                    d="M384.7 228.9c-.2 1.3-.3 2.7-1.2 3.8-1 1.2-2.1 2.4-3.7 2.7-.1 0-.2.1-.3.1-1.4.2-2.6-.4-3.8-.9-.9-.4-1.3-1.3-1.6-2.1-.2-.5-.2-1.1-.1-1.7.2-1.2.7-2.3 1.7-3.2.7-.6 1.3-1.1 2.1-1.5 1.7-.9 3.5-.9 5.2-.2 1 .5 1.7 1.6 1.7 3zm-6.6 4.4c-.1-.4-.2-.9-.4-1.3-.1-.2-.4-.3-.6-.2-.2.1-.3.3-.3.5.1.5.3.9.6 1.3.1.1.3.1.4.1.2 0 .3-.1.3-.4z" />
                                                <path class="st16"
                                                    d="M379.5 241.7c-.1.3-.1.6-.2.9-.3.9-.9 1.2-1.8.9 0 0-.1 0-.1-.1-.6-.2-1.2-.5-1.8-.7-.2-.8-.6-1.6-.7-2.5-.1-1.1-.2-2.2.3-3.3.2-.4.1-1.2.7-1.2.8.1 1.9.1 2.2 1.3.2.7.4 1.4.6 2 .2.6.3 1.2.6 1.7.1.3.1.7.2 1zM369.3 237.9c-.2-2 .8-3.1 2.3-3.9.3-.2.6-.5 1-.7.3-.2.6-.2.8.2.3.7.8 1.2 1.5 1.6-.4 1.1-.7 2.2-1.5 3.2-.3.4-.6.8-1 1.1-.7.6-1.4.4-2-.3-.2-.2-.4-.5-.6-.7-.2-.3-.5-.4-.5-.5zM384.7 232.7c.2-.6.2-1.1.4-1.6.3-.8.5-1 1.3-.9 1.3.1 2.6.4 3.9.6.2 0 .4.1.5.3.4.5.8 1.1 1.2 1.6.4.6-.1 1.6-.9 1.5-.3-.1-.6 0-.9-.1-1.7-.5-3.5-1-5.5-1.4zM384.6 240.2c0 .1-.1.2-.1.3-.6.7-1.5 1-2.4.7-1.4-.4-2.2-1.3-2.5-2.7-.1-.4-.2-.9-.3-1.3-.1-.3.1-.6.4-.7.6-.2 1.2-.4 1.9-.6.2-.1.5 0 .7.2.9 1.1 2 2.1 2.3 3.7-.1.1-.1.3 0 .4zM373.2 229.7l-3-1.5c-.3-.2-.5-.5-.5-.9-.2-1.1.2-2 .9-2.8.2-.3.5-.3.8-.1.1.1.1.2.2.2.9.8 1.8 1.6 3 2.1.3.1.4.4.1.6-.8.6-1 1.5-1.5 2.4zM388.2 223c0 .3-.2.5-.4.6-.7.5-1.3 1.1-2.1 1.6-.4.3-.7.9-1.2.8-.4-.1-.7-.5-1.1-.8-.1-.1-.3-.2-.4-.3-.2-.1-.2-.3-.1-.5.5-1 1-1.9 1.9-2.6.2-.2.5-.3.8-.3 1 .1 1.9.4 2.5 1.2.1.1.1.2.1.3zM387.7 237.3c0 .5-.2.9-.5 1.3-.4.6-.8.7-1.4.3-.4-.3-.8-.6-1.1-1.1-.4-.9-1-1.7-1.7-2.3-.2-.2-.3-.4-.2-.7.2-.4.7-.8 1.1-.7.1 0 .2 0 .3.1 1 .6 2 1.2 2.9 1.9.5.3.7.7.6 1.2zM388.4 228.2c-.7-.1-1.5.2-2.3.5-.3.1-.6 0-.7-.3-.2-.4-.1-.8.3-.9 1.6-.8 3.3-1.3 5-1.6.4-.1.7.1 1 .2.5.2.6.3.5.8 0 .1-.1.2-.1.3-.4 1.5-.6 1.6-2.1 1.3-.5-.2-1-.3-1.6-.3zM380 224.6c-1.2 0-1.6-.4-1.3-1.5.1-.6.3-1.2.5-1.8.1-.4.4-.7.9-.7 1-.1 1.9.3 2.8.4.2 0 .3.3.2.5-.1.3-.4.5-.5.7-.2.3-.5.7-.6 1.1-.4 1-1.1 1.3-2 1.3zM376 226.1h-.3c-1.1-.5-2.1-1-2.9-1.9-.5-.5-.3-1.6.4-1.9.2-.1.4-.1.6-.1.4.1.9.3 1.3.5.6.2 1.1.5 1.7.7.6.2.9.8 1.1 1.3 0 .1 0 .3-.1.4-.5.3-.9.6-1.4.9-.2 0-.3 0-.4.1zM368.4 234.3s-.2 0-.5-.1c-.1-.1-.3-.2-.3-.3.1-.5.1-1.2.6-1.5 1.3-.7 2.7-1.2 4.1-1.4.4-.1.6.3.6.7 0 .2-.1.4-.3.4-.9.1-1.6.7-2.2 1.2-.3.3-.7.5-1 .7-.2.3-.5.4-1 .3z" />
                                                <path class="st8"
                                                    d="M384.4 220.8c.3 0 .6 0 .9-.1-.3.3-.6.2-.9.1zM362.6 230.4z" />
                                                <path class="st10"
                                                    d="M365.1 238.4l.1-.1h-.1zM365.1 238.3l-.3.3c.1 0 .2-.1.3-.3z" />
                                                <path class="st13"
                                                    d="M156.6 204.2c-.2.5-.3 1-.8 1.3-.2.1-.4.1-.6.2-.7.7-1.3.4-1.9-.2-.8-.8-1.5-1.8-2.2-2.7-.1-.2-.3-.5-.2-.7.2-.6.1-1.3.2-2 0-.2.3-.4.4-.2.4.4.9.4 1.3.7 1.3.8 2.4 1.9 3.4 3 .3.2.3.5.4.6zM159.2 212c.3-.9.1-1.6-.6-2-.4-.2-.5-.6-.5-1 0-.9-.1-1.8.3-2.7.1-.2.1-.4.2-.6.3-.5.9-1 1.1-.9.4.2.4.6.6 1 .4 1.1.9 2.3 1.3 3.4s.2 1.9-.7 2.6c-.4.3-1 .2-1.7.2zM149.5 191.8c.7 1.1 1.3 1.9 2 2.7.9 1 1.3 2.3 1.1 3.7 0 .2-.1.4-.2.6-.1.2-.3.3-.5.2-.5-.2-1.1-.5-1.6-.8-1.3-.9-1.8-2.1-1.7-3.7.1-.8.3-1.7.9-2.7z" />
                                                <path class="st23"
                                                    d="M128.4 178c2 .6 3.7 1.6 5.5 2.5.3.2.6.4.8.7.2.3.2.7 0 1-.2.4-.6.4-.9.3-2-.5-3.6-1.5-4.9-3.1-.3-.3-.5-.8-.5-1.4zM139 189.1c-1.1.1-1.8-.4-2.3-1.4-.3-.6-.6-1.2-.8-1.8 0-.2-.2-.4 0-.6.2-.2.5-.1.7 0 .6.2 1.1.6 1.7.7 1.1.1 1.6.8 2.1 1.6.4.6.1 1.3-.6 1.5-.3 0-.5-.1-.8 0zM140.4 196.4c2.1-.2 3.6.8 4.9 2.3.6.7.3 1.4-.6 1.6-.4.1-.7 0-1-.1-1.6-.9-2.9-1.9-3.3-3.8zM143.4 189.5c.8.8 1.6 1.6 2.5 2.1.3.2.6.6.8.9.4.7.2 1.5-.4 2.1-.1.1-.3.1-.4.1-.9-.5-1.7-1.1-2.3-2-.8-.9-1.1-2-.2-3.2z" />
                                                <path class="st13"
                                                    d="M155.6 197.4c.5 1.6 1.1 3 2 4.3.4.6.7 1.4.6 2.2 0 .2-.1.4-.2.5-.1.2-.5.1-.5 0-.1-.9-.8-1.4-1.3-2-.4-.6-.7-1.2-1.3-1.6-.1-.1-.2-.3-.3-.5-.3-1.2-.1-1.9 1-2.9z" />
                                                <path class="st23"
                                                    d="M141.9 192.7c0 .6-.4 1-1 .8-.5-.2-1.1-.3-1.5-.6-.9-.5-1.7-1.1-2.6-1.6-.2-.1-.2-.4 0-.5.7-.4 1.6-.4 2.3-.8.1-.1.3-.1.4 0 1.1.5 2 1.2 2.4 2.4v.3zM119.9 173.7c1.7.6 3.3 1.2 4.9 2l.9.6c.2.2.4.5.3.8 0 .3-.1.5-.4.5-.2 0-.5.1-.7 0-1.8-.5-3.5-1.4-4.7-2.9-.3-.2-.4-.6-.3-1z" />
                                                <path class="st13"
                                                    d="M154 207.4c.9.9 1.8 1.6 2.7 2.2.1.1.2.3.2.4-.3.7.2 1.2.4 1.7s-.1.9-.7.9c-.7.1-1.2-.2-1.7-.8-1.1-1.2-1.2-2.6-.9-4.4z" />
                                                <path class="st23"
                                                    d="M145.3 201.9c1.2.1 2.4.4 3.6.7.9.3 1.6.9 2.1 1.7.1.2.5.4.3.8-.1.2-.5.2-.7.2-2.2-.3-4-1.2-5.2-3.1-.1-.1-.1-.2-.1-.3zM131.3 185.5c1-.2 1.7.1 2.4.5.9.4 1.6 1.1 2.2 1.9.4.5.7 1 1.1 1.4.1.1.2.3.1.4-.1.2-.3.3-.5.3-.9-.3-1.8-.4-2.4-1.1-.5-.6-1.1-1.1-1.5-1.7-.4-.6-.9-1.1-1.4-1.7zM142 185c1 .7 3.5 2.8 3.9 3.4.3.5.6.9.5 1.5-.1.5-.5.7-.9.5-.9-.5-1.4-1.3-2-2-.3-.4-.5-.8-1-.9-.1 0-.3-.2-.3-.3-.2-.7-.5-1.4-.2-2.2zM123.5 180.3c1.7-.3 2.9 0 4.2.4.9.3 1.6.8 2.5 1.1.3.1.6.4.8.6.1.1 0 .3-.1.3-.3.1-.6.1-.9.1-2.3-.3-4.3-1-6.5-2.5zM123.2 178.1c-2.6.4-4.8-.8-6.8-2.1 0-.4.3-.4.4-.4 1.5.1 3 .3 4.2 1.3.7.5 1.5.8 2.2 1.2zM146.2 197c1.5.2 2.7.9 3.7 2 .3.3.4.7.2 1-.2.3-.6.5-.9.4-.5-.1-1-.3-1.4-.6-1.1-.7-1.8-1.5-1.6-2.8z" />
                                                <path class="st13"
                                                    d="M148.7 207.4c1.6.2 2.7 1.2 3.6 2.4.4.6.8 1.2 1.3 1.9-2.5-.4-4.2-1.8-4.9-4.3z" />
                                                <path class="st23"
                                                    d="M134.9 185.4h-.2c-1.8-.6-3.7-.8-5.6-1.3-.4-.1-.8-.2-1-.6v-.1l.1-.1h.3c1.2.4 2.4.4 3.6 0 .8-.2 1.5-.1 1.9.7.3.5.9.7.9 1.4zM112.2 169.8c1-.2 1.8.2 2.7.4.6.1 1.3.3 1.9.6 1.3.6 2.7 1.2 4 1.7.2.1.2.2.2.4 0 .1-.2.1-.3.1-1.2-.2-2.4-.6-3.6-1.1-1.3-.6-2.5-1.2-3.9-1.6-.4 0-.8-.1-1-.5z" />
                                                <path class="st13"
                                                    d="M148.7 205.9c.3 0 .6 0 .9.1.7.3 1.4.2 2-.1.5-.3 1.1.1 1.3.7.1.6.1 1.2 0 1.8-.1.3-.3.3-.5.2-.2-.1-.4-.3-.6-.4-.8-.6-1.6-1.2-2.6-1.6-.3-.3-.5-.5-.5-.7z" />
                                                <path class="st23"
                                                    d="M136.7 182.4v-.3c0-.2.3-.3.5-.2l2.7 2.4c.2.2.4.6.6.9.1.1.1.3-.1.4-.1 0-.2.1-.3 0-1.1-.5-2.1-1.1-3-2-.3-.4-.5-.7-.4-1.2zM123.6 179c.7-.4 1.3-.6 1.9-.7.4 0 .7-.1 1-.3.5-.3.6-.3.8.2.3.5.6 1 .7 1.5-.2 0-.4.1-.5.1-1.2-.5-2.6.1-3.9-.8zM133 179c-1.3-.1-2.4-.9-3.5-1.5-.5-.3-.7-.8-.8-1.4 0-.1.1-.2.1-.3.1 0 .2-.1.3 0 1.1 1.1 2.5 1.8 3.6 2.8.2.1.3.2.3.4z" />
                                                <path class="st13"
                                                    d="M146.7 200.1c.1 0 .2 0 .3.1.7.6 1.6.8 2.5.8.4 0 .6.2.6.7 0 .2-.2.4-.4.4l-3.3-.9c-.2-.1-.4-.2-.4-.5s.3-.6.7-.6z" />
                                                <path class="st23"
                                                    d="M126 175.3c-.3-.1-.6 0-.9-.2-.9-.4-1.7-.8-2.6-1.3-.2-.1-.3-.2-.4-.4v-.3c0-.1.2-.3.3-.2 1.5.4 2.7 1.1 3.6 2.4z" />
                                                <path class="st13"
                                                    d="M141.5 188c.8.7.8 1.5.7 2.4 0 .1-.1.3-.2.4-.1.1-.3 0-.4-.1l-.6-.6c-.2-.2-.2-.5 0-.7.3-.4.2-1 .5-1.4zM148.6 205.9h-.3l-.1-.1c0-.1.1-.2.2-.1.1 0 .2.1.2.2z" />
                                                <path class="st23"
                                                    d="M119.9 173.8l-.1-.1.1.1zM126 175.3l.1.1h-.1v-.1z" />
                                                <path class="st13" d="M153.5 211.7l.1.1c0 .1 0 .1-.1-.1z" />
                                                <path class="st23"
                                                    d="M145.3 201.9l-.1-.1c0-.1 0 0 .1.1zM128.4 178l-.1-.1s.1 0 .1.1zM146.2 197l-.1-.1.1.1zM140.4 196.4l-.1-.1c0-.1 0 0 .1.1zM133 179l.1.1-.1-.1zM134.9 185.4l.1.1c0 .1-.1 0-.1-.1z" />
                                                <path class="st13" d="M148.6 207.4c0-.1-.1-.1-.1-.2.1.1.1.2.1.2z" />
                                                <path class="st10"
                                                    d="M216.3 239l-.1-.1.1.1zM216.6 239.3l-.3-.3.3.3zM214.8 242l-.1-.1.1.1c-.1 0 0 0 0 0zM216.3 220.1c-.3.3-.2.8-.3 1.2-.7-.8-1.1-1.8-1.6-2.8-.3-.5-.3-1.1-.9-1.4.1-.3-.1-.6-.3-.7 0-.1-.1-.2-.1-.3 0-.2.2-.2.3-.1.6.5 1.3 1 1.9 1.5 0 .2.1.3.3.3 0 .1 0 .2-.1.3.2.8.8 1.3.8 2z" />
                                                <g class="st2">
                                                    <path class="st25"
                                                        d="M194.2 221.6h-.5v-.2c0-.1 0-.3-.1-.4l-.2-.2c-.2-.2-.4-.4-.6-.5-1.5-1.1-3-2-4.6-2.7-.1-.1-.3-.1-.5-.1h-.2v-.3c0-.1.1-.2.3-.2.5-.2.9-.3 1.4-.5l.5-.2V216.6c0 .2 0 .3.1.3 1 .5 1.9 1.1 2.7 1.8.9.6 1.7 1.3 2.7 1.7.4.2.7.5.8.9-.6.2-1.2.3-1.8.3zm-.4-.1c.7.1 1.4 0 2.1-.3-.1-.3-.4-.6-.7-.8-1-.5-1.9-1.1-2.7-1.8-.9-.6-1.7-1.3-2.7-1.7-.2-.1-.2-.3-.1-.4v-.1l-.4.1c-.5.2-.9.3-1.4.5-.1 0-.2.1-.2.2v.2h.2c.2 0 .4 0 .5.1 1.6.7 3.1 1.6 4.6 2.7.2.2.4.3.6.5l.2.2c.1.1 0 .3 0 .6 0-.1 0-.1 0 0z" />
                                                    <path class="st26"
                                                        d="M214.8 242zM224.5 220.5c-.1-.2-.3 0 0 0zM236.9 233.1s.1-.1 0 0c.1-.2 0-.2 0 0zM237 233c0 .1 0 .1 0 0 0 .1.1.1 0 0 .1.1.1 0 0 0zM242.2 231.7s.1 0 0 0c.1 0 0 0 0 0z" />
                                                    <path class="st25"
                                                        d="M247.1 251.3c-1.1 0-2.3-.3-3.6-.8l-.1-.1h.1c.3-.1.5-.1.6-.2 0-.1 0-.1-.1-.3-.4-.6-.8-1.1-1.3-1.7l-.6-.9c-.8-1-1.8-1.9-3.2-2.8-.4-.2-.7-.3-1.1-.3-2.2 0-4.3-.4-6.4-1.2-.5-.2-1-.4-1.5-.5l-.9-.3c-1.1-.4-2.1-.5-3.4-.5h-.2c-1.2 0-2.7.6-3 2.2v.1c0 .1 0 .2-.1.2h-.2c-.1-.1-.1-.2-.1-.3 0-.6.3-1.1.6-1.4l.1-.1c.1-.1.2-.2.1-.5-.7.2-1.3.6-1.7 1.2-.3.4-.3.9-.2 1.4.1.2.3.3.5.4.1 0 .3.1.4.2l.1.1.1.1h-.1c-.1 0-.3.1-.3.1s0 .1.1.2c.2.3.5.4.8.6.2.1.3.2.4.3l.2.2c0 .1 0 .1-.1.2s-.2.1-.3.1h-.2c-.2 0-.3-.1-.3 0-.1.1-.2.3-.2.5 0 .3-.1.6-.2.9-.1.2-.1.3-.1.5s-.1.5-.4.5h-.1c-.2 0-.3-.2-.3-.3v-.1c-.1-.4-.3-.8-.4-1.2-.3-.9-.7-1.9-.9-2.9 0-.1-.1-.2-.1-.3l-.1-.1c.4-.4.5-.7.5-.9 0-.2-.2-.3-.5-.5.2-.2.3-.5.3-.8l.2-.3.6-.6c-.2-.5-.6-.6-1.1-.6h-.2c-.9 0-1.7-.2-2.3-.6-.2-.1-.4-.3-.4-.6v-.1h.1c.2 0 .4.1.6.2.4.1.8.3 1.3.1.1-.2-.1-.4-.2-.5-.1-.1-.2-.2-.2-.3-.1-.2-.2-.5-.1-.8 0-.1.1-.1.1-.1h.3c.1 0 .1.1.1.1.4 1 1.3 1.4 2.2 1.7.1 0 .2 0 .3.1.2 0 .4.1.6.3.9.2 1.8.3 2.7.5.1 0 .2 0 .3-.1v-.2c0-.1-.1-.2-.1-.3l-.1-.1c-.3-.5-.7-.9-1.1-1.3-.2-.2-.3-.4-.5-.6l-.1-.1h.2c.1 0 .2.1.3.1.1 0 .2.1.3.1.8.4 1.4.9 1.8 1.7.2.4.6.9 1.2 1.1.2.1.3 0 .3-.1v-.2l-.3-.3s-.1-.1-.1-.2c-.4-.5-.8-1-.7-1.7v-.1h.1c.3.1.5.3.6.6.2.3.4.6.9.6l.2-1.6.1.3c.1.4.3.8.5 1.2.6 1.1 1.4 1.8 2.4 2.1.1 0 .2 0 .2-.1 0 0 .1-.1.1-.2 0-.2-.1-.4-.3-.6-.1-.2-.2-.3-.3-.5v-.1h.1c.6.3 1.1.8 1.4 1.6.3.7.9 1.2 1.7 1.5 1.1.4 2.2.7 3.3.7h.7s.1-.1.1-.2v-.1c-.1-.1-.3-.3-.5-.4-3.7-2.7-7.2-5.7-10.4-9-.4-.4-.8-.7-1.4-.9l-.9-.3c-.2-.1-.3-.2-.5-.2-.1 0-.2-.1-.3-.2l-.1-.1h.5c.2 0 .4-.1.4-.2s0-.2-.1-.3c-.4-.6-.9-1.1-1.8-1.1h-.5c-.3 0-.5-.1-.8 0h-.5c-.3 0-.6 0-.9.1-.2-.3-.6-.3-1-.3h-3.3c-.9.1-1.9.2-2.8.4-.2 0-.5.1-.7.1-.4.1-.6.2-.6.5v.1h-.1c-.1-.1-.3-.1-.4-.1-.4-.1-.7-.2-1-.6.2-.4.6-.5 1-.7.1 0 .2-.1.3-.1.1-.1.2-.1.4-.1.2-.1.4-.1.6-.3.1 0 .1 0 .2.1.1 0 .3.1.4.1h.6c1.9 0 3.8-.1 5.8-.2h.1c.6 0 1.1-.1 1.7.1.5.1 1 .3 1.5.1-.2-.3-.4-.5-.6-.8-.4-.5-.9-1.1-1.3-1.7-.3-.4-.8-.5-1.3-.5-.2 0-.3 0-.3-.1-.1-.1 0-.2.1-.4s-.1-.4-.3-.6c-.4-.2-.8-.5-1.4-.6l-.3-.1 1.4-.1v-.1-.1c-.1-.2-.3-.4-.4-.6-.3-.4-.5-.9-1.1-1 0-.3-.1-.6-.3-.8-.1-.2-.3-.4-.3-.7-.5-.6-.9-1.4-1.3-2.1l-.3-.6c-.1-.1-.1-.3-.2-.4-.2-.4-.3-.7-.7-.9.1-.3 0-.5-.3-.7v-.1-.2c0-.1.1-.2.1-.2h.3c.5.3.9.7 1.4 1.1.2.1.4.3.5.4 0 .2.1.3.3.2h.1l-.1.4c0 .3.2.6.3.9.2.3.3.6.3 1 .2.4.5.7.7 1.1.5.8 1.1 1.7 1.6 2.5 1.3 1.9 2.8 3.6 4.5 5.2l.2.2c.2.2.4.3.5.7.5.4.9.9 1.4 1.4 2.3 2.9 4.7 5.2 7.4 7.2.1.1.2.2.3.2.4.3.8.6 1.3.8.2.4.6.6 1 .7H235.9s.1-.2 0-.2c-.2-.4-.5-.8-.8-1 0-.1-.1-.1-.1-.2-.1-.2-.1-.3-.2-.5-.8-1.3-1.5-2.7-2.2-4.7-.3-.8-.6-1.7-.9-2.5-.1-.4-.3-.7-.4-1.1 0-.3 0-.6-.3-.8.1-.4-.1-.7-.3-1 0-.3 0-.5-.3-.6-.4-.8-.9-1.6-2-1.8-.1-.2-.2-.2-.4-.2-.4-.1-.7-.2-1.1-.3h-.1v-.1c.1-.3.4-.3.6-.3h.1c.1 0 .3-.1.3-.2.1-.2 0-.3-.2-.4-.7-.6-1.5-.8-2.2-1h-.1c-.1 0-.3 0-.3-.1v-.2c.1-.4-.1-.5-.4-.7-.1-.1-.3-.2-.3-.3-.1-.2 0-.3.1-.3l.1-.1c.1.1.2.1.2.1.1 0 .1 0 .2-.1 0 0 0-.1-.1-.2 0 0 0-.1-.1-.1v-.2c0-.1 0-.2-.1-.3 0-.2.1-.2.1-.2v.1c.7.7 1.5 1.4 2.6 1.7.2-.2.2-.4.2-.5 0-.1 0-.3.1-.4v-.1.1c.1.2.3.4.4.7.3.5.6 1 .9 1.6.1.1.1.2.2.3.1.3.3.6.7.7.1-.3.1-.5.1-.8v-.6l.1.1c.3.4.5.8.7 1.3.1.1.1.3.2.4.2.5.3 1 .4 1.5.4 1.9 1 3.9 1.9 6.4 0 .1.1.2.1.2h.1c.1 0 .1-.1.1-.2v-.2V233.2l.1.2v.1c.7 1.7 2.1 2.7 4.1 3.3.3.1.6.2.8.3.2.1.3.1.5.2.1 0 .3.1.3-.1.1-.1.1-.3.1-.4-.2-.8-.7-1.5-1.4-2.1-.3-.2-.6-.5-.9-.7l-.1-1h.1c.2 0 .3-.1.3-.2s-.1-.2-.2-.3c-.2-.1-.4-.3-.6-.4-.2-.1-.3-.2-.5-.3l-.1-.1c-.4-.3-.8-.5-1-1.1l-.1-.2.5.3c.3.2.5.3.7.5.3.2.8.5 1.3.7.2 0 .3.1.3-.1.1-.1.1-.3.1-.4-.2-.5-.4-1-.6-1.6-.5-1.1-1.1-2.3-2.6-2.7l-.1-.1c.2-.2.4-.2.6-.2h.1c.5-.1.5-.1.5-.6v-.2c0-.6-.1-1.3.4-1.8l.1-.1v.2c-.3 1.6.1 2.7 1.1 3.6l.1-.2c.1-.3.3-.6.4-.9.1-.2.3-.4.6-.5h.1v.2c-.5.9-.5 1.4 0 2.4-.1 0-.1.1-.1.1 0 .1 0 .1.1.2V229.9c0 .4.1.8.5 1h.2c.3-.1.6-.5.8-.9.1-.4.2-.8.2-1.2 0-.4-.1-.9-.1-1.3v-.3h.2v-.1l.1.1.3-.1-.3.1c.1.9.6 1.7 1 2.3l-.1.1v.1l-.4.4c-.3.4-.7.7-1 1.1-.5.5-.6 1.1-.4 1.8 0 .1.1.2.1.4.1.4.2.8.6.8.3 0 .5-.3.6-.6.1-.1.1-.3.2-.4.2-.3.4-.6.5-.9.1-.2.3-.4.6-.5h.1v.9c0 .1 0 .2.1.2s.2 0 .3-.1v.1c.1.1.2.3.1.4-.2.2-.4.4-.6.5-.1.1-.3.2-.4.4-.7.7-1.1 1.3-1.3 2 0 .1-.1.2 0 .3.1.1.2.1.3 0 .3-.2.5-.5.8-.7l.4-.3s.1 0 .1.1 0 .1-.1.2c-1.2 1.2-2 2.7-2.4 4.3-.1.5-.4 1-.6 1.5-.1.2-.3.5-.4.7v.2c1.9 1.3 3.5 3.1 4.9 4.8.4.4.8.9 1.2 1.3.2.2.3.4.5.5.7.8 1.5 1.7 2.4 2.3l.1.1h-.1c0-.2-.2-.2-.4-.2zm-3.4-.9c1.4.6 2.7.9 3.9.8-.9-.6-1.6-1.5-2.4-2.3-.2-.2-.3-.4-.5-.5-.4-.4-.8-.9-1.2-1.3-1.5-1.7-3-3.4-4.9-4.7 0 0 0-.1-.1-.1v-.1c.1-.2.2-.5.4-.7.3-.5.5-.9.6-1.4.3-1.7 1.1-3.1 2.4-4.4l.1-.1-.3.3c-.3.2-.5.5-.8.7-.1.1-.3.1-.5 0s-.1-.3-.1-.4c.2-.7.6-1.3 1.4-2 .1-.1.3-.2.4-.4.2-.2.4-.4.6-.5.1-.1 0-.2-.1-.3-.1.1-.3.1-.4.1-.1 0-.1-.2-.2-.3v-.6-.1c-.2.1-.3.2-.4.4-.2.3-.3.6-.5.9-.1.1-.1.2-.2.4-.2.3-.3.7-.7.7-.5 0-.6-.5-.7-.9 0-.1-.1-.2-.1-.4-.2-.7-.1-1.3.4-1.9.3-.4.7-.7 1-1.1l.3-.3v-.1l.1-.1c-.4-.6-.9-1.3-1-2.3h-.1v.2c0 .4.1.9.1 1.3s-.1.8-.2 1.2c-.1.5-.5.9-.8 1h-.3c-.4-.2-.5-.7-.5-1v-.1-.4-.2c-.1-.1-.1-.2-.1-.3 0-.1 0-.1.1-.2-.5-1.1-.5-1.6 0-2.5-.2.1-.3.3-.4.4-.1.3-.3.6-.4.9l-.1.3h-.1c-1.1-.9-1.5-1.9-1.3-3.5-.4.5-.3 1-.3 1.6v.2c0 .6 0 .6-.6.7h-.1c-.2 0-.4.1-.5.2v.1c1.5.4 2.2 1.6 2.7 2.8.2.6.4 1.1.6 1.6 0 .1 0 .3-.1.5s-.3.1-.4.1c-.6-.1-1-.4-1.4-.7-.2-.2-.4-.3-.7-.5l-.2-.2c.2.4.5.7.9.9l.1.1c.1.1.3.2.5.3.2.1.4.2.6.4.2.2.3.3.3.4 0 .1-.1.2-.3.3.3.2.6.4.8.6.8.6 1.2 1.3 1.5 2.1 0 .2-.1.4-.1.5-.1.2-.2.2-.5.1-.2-.1-.3-.1-.5-.2-.3-.1-.5-.2-.8-.3-2-.5-3.3-1.6-4.1-3.2v.1c0 .1-.1.2-.2.3h-.2c-.1 0-.1-.2-.2-.3-.9-2.6-1.5-4.5-1.9-6.5-.1-.5-.2-1-.4-1.4-.1-.1-.1-.3-.2-.4-.2-.4-.3-.8-.6-1.2v.3c0 .3 0 .6-.2.9-.5 0-.7-.4-.8-.7-.1-.1-.1-.2-.2-.3-.3-.5-.6-1-.9-1.6l-.3-.6v.3c0 .2 0 .4-.2.6-1.1-.4-2-1.1-2.7-1.8 0 .1 0 .2.1.3v.2c.1.1.1.2 0 .3-.1.1-.2.1-.2.1-.1 0-.2 0-.3-.1-.1.1-.1.1-.1.2l.3.3c.2.2.5.3.4.8v.1c0 .1.1.1.2.1h.1c.7.1 1.5.4 2.2 1 .1.1.3.3.2.5-.1.2-.4.2-.4.2h-.1c-.2 0-.4.1-.5.2.3.1.7.2 1 .2.2 0 .4 0 .5.2 1.1.2 1.6 1.1 2 1.9.3.1.4.3.3.6.2.3.4.6.3 1 .3.2.3.5.3.8.1.4.3.7.4 1.1.3.8.6 1.7.9 2.5.7 2 1.3 3.4 2.1 4.7.1.1.2.3.2.5 0 .1.1.1.1.2.3.3.6.6.8 1.1 0 .1 0 .2-.1.3-.1.1-.2.1-.3.1h-.1c-.4-.2-.8-.4-1-.8-.5-.2-.9-.5-1.3-.8-.1-.1-.2-.2-.3-.2-2.7-1.9-5.1-4.3-7.4-7.2-.4-.6-.9-1-1.4-1.4l-.1-.1h.1c0-.3-.2-.4-.4-.6l-.2-.2c-1.6-1.6-3.1-3.3-4.5-5.2-.6-.8-1.1-1.6-1.6-2.5-.2-.4-.5-.7-.7-1.1 0-.4-.2-.7-.3-1-.2-.3-.3-.6-.3-1l.1-.3c-.2 0-.3-.2-.3-.3-.2-.1-.3-.3-.5-.4-.4-.3-.9-.7-1.4-1.1 0 0-.1-.1-.2 0l-.1.1V216.2c.3.2.4.4.3.7.4.2.5.6.7 1 .1.1.1.3.2.4l.3.6c.4.7.7 1.5 1.3 2.1 0 .3.2.5.3.7.2.3.3.5.3.9.6.2.8.6 1.1 1.1.1.2.2.4.4.6V224.6l-.9.1c.4.1.8.4 1.1.6.3.2.4.4.3.7-.1.2-.1.2-.1.3 0 0 .1.1.3.1.5 0 1 0 1.4.5.4.6.9 1.1 1.3 1.7.2.3.4.6.7.8v.1h-.1c-.6.2-1.2.1-1.7-.1-.6-.2-1.1-.1-1.7-.1h-.1c-1.9.1-3.9.1-5.8.2h-.6c-.1 0-.3 0-.4-.1-.1 0-.1 0-.2-.1l-.6.3c-.1 0-.2.1-.4.1-.1 0-.2.1-.3.1-.3.1-.7.3-.9.6.2.4.5.4.9.5.1 0 .3.1.4.1.1-.4.4-.5.7-.5.2 0 .5-.1.7-.1.9-.1 1.9-.3 2.8-.4.9-.1 1.8-.1 2.6 0h.7c.4 0 .7 0 1 .3.3-.2.6-.1.9-.1h1.8c.9 0 1.5.6 1.9 1.2.1.2.1.3.1.4 0 .1-.2.2-.5.2h-.2-.1c.1 0 .1.1.2.1.2.1.3.2.5.2.3.1.5.2.8.3.6.2 1 .5 1.4.9 3.2 3.2 6.7 6.2 10.4 8.9.2.1.3.3.5.4 0 0 .1.2 0 .2 0 .1-.1.2-.2.2h-.8c-1.1-.1-2.1-.3-3.3-.8-.9-.3-1.5-.8-1.8-1.6-.3-.7-.7-1.2-1.3-1.5.1.1.2.3.2.4.2.2.3.4.3.7 0 .1 0 .2-.1.3-.1.1-.2.1-.3.1-1-.4-1.9-1.1-2.5-2.2-.2-.3-.3-.6-.4-.9l-.1 1.1c-.5 0-.8-.3-1-.7-.1-.2-.3-.4-.5-.5 0 .6.3 1.1.7 1.5 0 .1.1.1.1.2l.3.3c.1.1.1.2 0 .3-.1.2-.4.2-.5.1-.7-.2-1-.7-1.2-1.1-.4-.7-1-1.3-1.7-1.6-.1 0-.2-.1-.3-.1h-.2c.1.2.3.3.4.5.4.5.8.9 1.1 1.4 0 0 0 .1.1.1.1.1.1.2.2.3 0 .1.1.2 0 .3-.1.2-.2.2-.4.2-.9-.2-1.8-.3-2.7-.5-.1-.2-.3-.2-.5-.2-.1 0-.2 0-.3-.1-.9-.3-1.8-.7-2.2-1.7 0 0 0-.1-.1-.1h-.2l-.1.1c-.1.2 0 .4.1.7 0 .1.1.2.2.3.2.2.3.4.2.7-.5.2-.9.1-1.4-.1-.2-.1-.3-.1-.5-.2 0 .2.2.4.3.5.7.4 1.4.6 2.3.6h.2c.5 0 1 .1 1.2.7-.2.2-.4.4-.7.6l-.2.3c0 .3-.1.6-.3.8.3.2.4.4.4.6 0 .2-.1.5-.5.9 0 0 0 .1.1.1.1.1.1.2.1.3.2 1 .5 1.9.8 2.9.1.4.3.8.4 1.2v.1c0 .2.1.2.2.2h.1c.2 0 .3-.2.3-.4s.1-.3.1-.5c.1-.3.2-.5.2-.8 0-.2.1-.4.2-.6.1-.1.3-.1.4 0h.2c.1 0 .2 0 .2-.1v-.1c0-.1-.1-.1-.1-.2-.1-.1-.3-.2-.4-.2-.3-.2-.6-.3-.8-.6-.1-.1-.1-.2-.1-.3 0-.1.2-.1.3-.2-.1-.1-.2-.1-.3-.1-.2-.1-.5-.1-.5-.4-.2-.6-.1-1.1.2-1.5.4-.7 1.1-1.1 1.8-1.3.2.3 0 .5-.1.6l-.1.1c-.4.5-.6.9-.6 1.3 0 .1 0 .2.1.2h.1v-.1-.1c.4-1.7 1.9-2.3 3.1-2.3h.2c1.3 0 2.4.1 3.5.5l.9.3c.5.2 1 .3 1.5.5 2.1.8 4.2 1.2 6.4 1.2.4 0 .8.1 1.2.4 1.4.9 2.4 1.7 3.2 2.8l.6.9c.4.6.9 1.1 1.3 1.7.1.1.2.3.1.4.7.5.5.5.2.6zm-5.6-8.4c-.2 0-.4-.2-.8-.6-.4-.5-.8-1-1.2-1.6-.8-1-1.4-2.1-1.8-3.4-.1-.2 0-.4 0-.5.1-.1.2-.2.5-.2h.1c.4 0 .8 0 1.2.2.1.1.2.2.2.3 0 .1 0 .2-.1.3-.1 0-.1.1-.2.1-.2.1-.4.3-.6.6.1-.1.3-.1.4-.2.3-.1.5-.2.8-.3 1.1-.3 2.1.2 2.5 1.3.2.5.2 1 .1 1.4-.1.5-.3 1.2-.5 1.8-.2.5-.3.8-.6.8zm-3.3-6.1c-.2 0-.3 0-.4.1-.1.1-.1.2 0 .4.4 1.2 1 2.3 1.8 3.3.4.5.9 1.1 1.2 1.6.3.4.6.6.7.6.2 0 .3-.2.5-.7.2-.6.4-1.2.5-1.7.1-.4.1-.8-.1-1.3-.4-1.1-1.3-1.6-2.3-1.3-.2.1-.5.2-.8.3-.1.1-.3.1-.5.2h-.1v-.1c.2-.5.4-.6.7-.8.1 0 .1-.1.2-.1.1-.1.1-.1.1-.2s-.1-.2-.2-.2c-.4-.2-.8-.2-1.2-.2l-.1.1z" />
                                                    <path class="st25"
                                                        d="M238.6 226.2c0-.2 0-.2.1-.3h.3l.1.1h-.1c-.2.1-.3.1-.4.2zM240.2 227.2c-.2-.1-.3-.2-.3-.4v-.1l.1.1h.1l.1.2v.2z" />
                                                    <path class="st26" d="M216.6 239.3z" />
                                                    <path class="st25"
                                                        d="M214.5 249.4c-.5 0-.9-.3-1.3-.5-.1-.1-.2-.1-.3-.2h-.1c-.3 0-.5-.1-.7-.2-.1 0-.1-.1-.2-.1h-.1l1.7-1.8c-.1-.3-.2-.3-.4-.2h-.1c-.6 0-1.3 0-1.9-.4-.1-.1-.2-.2-.2-.3 0-.1 0-.1.1-.2s.2-.1.3 0c1.8.3 3.2-.5 4.5-1.4-.3-.1-.5-.1-.7-.1h-.3c-.7-.1-1.5-.2-2.1-.8-.1-.1-.2-.2-.2-.3.1-.2.3-.2.4-.2.2 0 .4.1.5.1.4.1.7.2 1 0h.3l-.1-.7h.1c.2 0 .4 0 .6.1 1 .4 2 .4 3 0 .2-.1.3-.1.5-.1h.2c.1-.1.2-.2.3-.2.1 0 .2 0 .3.2 0 .3-.1.6-.3.8-.1.4-.5.4-.8.4l-.3.3-.1.3.6.3h-.2c-1 .1-1.1.9-1.2 1.6-.1.6.1 1.1.3 1.6.1.1.1.2 0 .3 0 .1-.1.1-.1.1-.1.1-.3 0-.5 0-.3-.2-.6-.5-.9-.8-.1-.2-.3-.3-.5-.5-.4.6-.8 1.2-.9 2 0 .2-.1.4-.2.6 0 .1-.1.2-.1.3h.1zm-1.6-.8c.1.1.2.1.4.2.5.3.9.6 1.5.5 0-.1.1-.2.1-.2.1-.2.1-.4.2-.6.2-.8.6-1.5 1-2.1.2.2.3.4.5.5.3.3.5.6.8.7.1.1.3.1.4 0 0 0 .1 0 .1-.1v-.2c-.2-.5-.5-1-.4-1.6.1-.7.3-1.5 1.2-1.7l-.4-.2h-.1c-.5 0-.8.3-1.1.6l-.1-.1c.2-.3.6-.6 1.1-.6v-.2c-.9.1-1.7-.1-2.5-.4h-.1v-.1c.8.3 1.6.5 2.6.4l.3-.3c.3 0 .6-.1.7-.4.2-.2.3-.5.3-.7-.1-.1-.1-.1-.2-.1s-.2.1-.3.2h-.7c-1 .4-2.1.3-3.1 0h-.4-.1l.1.7h-.5c-.4.3-.8.2-1.1 0-.2-.1-.4-.1-.5-.1-.2 0-.3 0-.3.1 0 0 0 .1.1.2.6.5 1.4.7 2.1.8h.3c.2 0 .5 0 .8.2h.1-.1c-1.3 1-2.7 1.8-4.6 1.5h-.2v.1c0 .1.1.2.1.2.5.4 1.2.4 1.9.4h.1c.2 0 .5 0 .6.3l-1.6 1.7s.1 0 .1.1c.4.2.7.3.9.3z" />
                                                    <path class="st26" d="M213.5 217.2zM215.7 217.8z" />
                                                </g>
                                                <path class="st23"
                                                    d="M203.2 234c.1-.5.3-1 .5-1.5.1-.2.3-.3.5-.2.3.1.4.3.4.6-.1.5-.3 1-.7 1.3-.1.1-.3.1-.4.1-.1 0-.2-.1-.3-.3z" />
                                                <path class="st12"
                                                    d="M379.5 204.9c.3 1.1-.2 2-.8 2.8-1 1.2-2.3 2.1-3.9 2.2-1.4 0-2.7-.4-3.4-1.8-.1-.1-.1-.3-.2-.4-.8-.7-.9-1.7-1.2-2.6-.3-.7-.1-1.2.3-1.7.3-.3.6-.6.9-.8l1.2-.9c1.5-1.2 3.7-1.4 5.2-.2.6.4 1 1 1.5 1.5.2.2.3.5.3.8.1.3.1.7.1 1.1zM398.7 203.4c.5-.4 1.1-.3 1.6-.2 1.4.4 2.5 1 3.5 2.1.6.7.8 1.4.6 2.4-.3 1-.7 1.9-1.1 2.8-.2.6-.7 1-1.2 1.3-.6.4-1.3.4-1.9.4-.6 0-1.2-.3-1.4-1-.2-.6-.4-1-1.1-1-.1 0-.3-.1-.4-.3-1.1-1.7-1.4-3.5-.4-5.2.3-.5.7-.7 1.3-.7-.1.1-.1.3-.2.4-.1.2-.1.4 0 .6.1.2.4.1.5 0 .2-.1.5-.2.7-.3.7-.4.9-.7.7-1-.3-.4-.7-.2-1.2-.3z" />
                                                <path class="st16"
                                                    d="M374.3 212.3c0 .3-.1.7-.2 1.1-.2.8-.5 1.6-.7 2.5-.4 1.6-1.6 2.6-3 3.3-.4.2-1.5-.1-1.8-.4-.2-.2-.1-.5-.1-.7.5-1.3.9-2.7 1.4-4 .2-.6.5-1.2.7-1.8.2-.5.5-1 1-1.3.1-.1.3-.2.4-.2.6.1 1.3.2 1.9.3.1 0 .2.2.2.4.2.1.2.4.2.8zM364.1 203.7h2.7c1.5 0 2 .8 2.4 2.3.1.2-.1.4-.3.4-.5 0-.9.1-1.4 0-.8 0-1.6.1-2.3.5-.8.5-1.5.5-2.3 0-.6-.3-1.4-.4-2-.7-.5-.3-.8-.6-1-1.1-.3-.8.1-1.4 1-1.4 1.1.1 2.2.1 3.2 0 0 .1 0 0 0 0zM377.9 216.7v2.1c0 .6-.3.8-.9.9-.7.1-1.3-.1-1.9-.4-.3-.1-.4-.3-.5-.5-.3-.8-.4-1.7-.3-2.5.1-.3.1-.7.3-1 .5-1.2.7-2.4.6-3.7 0-.1 0-.3.1-.4.1-.4.6-.5.9-.3.6.7 1.2 1.5 1.5 2.4.3 1 .2 2.2.2 3.4zM363.9 211.7c-1 0-1.9 0-2.7-.3-.5-.2-.7-.5-.7-1.1 0-.5.3-.7.7-.9.1-.1.3-.1.4-.1 1.5-.3 2.9-.8 4.3-1.5 1.1-.6 2.3-.4 3.4-.2.2 0 .3.3.3.5-.1.3-.2.7-.5 1-.7.8-1.2 1.6-2.3 1.9 0 0-.1 0-.1.1-.9.6-1.9.7-2.8.6zM382.7 216.3c-1.7.1-2.8-.7-3.7-1.9-.2-.3-.4-.6-.4-1 0-.9-.5-1.6-1-2.4-.1-.1-.2-.3-.3-.4-.2-.2-.4-.4-.3-.7.2-.4.5-.5.9-.5s.8.1 1.1.4c.5.5 1 .9 1.4 1.4.8 1.3 2 2.1 3.3 2.9.2.1.4.3.6.4.2.1.2.3.2.5-.2.6-.5 1-1.2 1-.2.3-.4.3-.6.3zM383.3 198.3c.5 0 1 .2 1.3.5.4.5 1 .9 1.5 1.3.4.3.4.6.1 1-.4.5-1 .9-1.6 1.1-1.4.3-2.5 1-3.6 1.9-.3.3-.6.2-.6-.3-.1-.6-.3-1.1-.7-1.5-.3-.3-.3-.6 0-.9.6-.7 1.3-1.3 1.8-2 .3-.4.9-.7 1.3-1 .3-.1.4-.1.5-.1zM408.6 210.8c-1.1-.1-2.3-.3-3.3-.9-.4-.2-.5-.5-.4-.9 0-.2.1-.4.2-.6.6-2.4.2-1.6 2.3-2.5.9-.3 1.6 0 2.2.6.4.4.6.8.9 1.2.1.1.1.3.1.4-.1.8-.4 1.6-.7 2.3 0 .1-.2.2-.4.2-.2.2-.5.2-.9.2zM362.3 197.3c1.3.7 2.5 1.4 3.7 2 .6.3 1.2.7 1.8 1.1.7.4 1.3 1 1.5 1.8.1.2 0 .4 0 .6 0 .4-.3.6-.6.4-.4-.1-.7-.3-1.1-.5-.5-.2-.9-.4-1.5-.1-.2.1-.4.1-.6 0-1.6-.6-2.7-1.7-3.6-3.1-.3-.6-.1-1.4.4-2.2zM405.3 210.8c1.6.1 3.1.4 4.6.9.7.2 1.1.8 1.6 1.1.1 0 .1.2.1.3.2.8-.5 2.2-1.3 2.3-.2 0-.5.1-.7.2-.4.2-.7 0-1-.2-1.2-1-2.4-2-3.7-2.9-.3-.2-.5-.4-.8-.7-.1-.1-.2-.4-.1-.6.1-.2.3-.3.5-.3.2-.1.5-.1.8-.1zM397.5 212.1c-.1.1-.1.2-.2.3-1 1-1.8 2-3 2.8-.5.3-.9.3-1.4.1-.5-.2-.8-.5-1.2-.9-.3-.3-.3-.7-.3-1.1.1-.4.4-.4.6-.6 1.1-.5 1.8-1.5 2.4-2.4 1.1-1.6 1-2.1 2 .1.2.5.6 1 .8 1.4.2 0 .2.2.3.3zM400.3 213.1c.1 0 .3-.1.4-.1.4 0 .6.2.7.5l.3 1.5c.1 1.3.6 2.4 1.1 3.6.3.8.6 1.5.5 2.3 0 .3-.2.5-.5.5-.9.1-1.7-.3-2-1.1-.5-1.2-1.1-2.3-1.2-3.6 0-.6-.3-1.2-.4-1.8-.1-.4-.1-.8-.1-1.2 0-.7.2-.8 1-.8 0 .2.1.2.2.2zM386.8 206.5c0 1.2-.2 1.4-1.7 1.5-1.7.2-3.1-.5-4.4-1.3-.3-.2-.3-.8 0-1.1.2-.1.3-.2.5-.3.7-.3 1.4-.6 2-1 .9-.6 1.8-.4 2.7-.1.6.2 1 .6.9 1.4v.9zM364.8 216c-.5 0-1-.2-1.5-.4-.4-.2-.6-.6-.3-1 .2-.2.4-.5.6-.7.5-.4 1-.7 1.6-1 1-.4 1.9-1.1 2.9-1.6.6-.3 1-.8 1.4-1.3l.6-.9c.1-.2.2-.5.6-.3.3.2.5.7.3.9 0 .1-.1.2-.2.2-.7.7-1.2 1.6-1.5 2.6-.1.2-.2.5-.4.6-.5 0-.8.4-1.1.7l-1.5 1.5c-.4.5-.9.8-1.5.7zM408.1 219c-1-.1-1.7-.8-2.4-1.4-.9-.8-1.6-1.7-2.2-2.7-.3-.5-.6-1-.9-1.6-.3-.5 0-.9.5-1 .4 0 .7.1 1 .3 1.2 1.3 2.7 2.3 4.1 3.4.5.4.7.8.4 1.4-.2.6-.3 1.1-.5 1.6zM364.4 195.1v-.6c0-.4.4-.6.8-.6.6.1 1.1.4 1.4.8 1.5 1.8 3 3.6 4 5.7.1.1.2.3.2.4 0 .1 0 .3-.1.4-.2.2-.3.1-.5-.1-.9-1.1-2-1.9-3.2-2.5-.7-.3-1.2-.8-1.7-1.3-.6-.5-.9-1.2-.9-2.2zM376.4 197.4c0 .6 0 1.2-.2 1.7-.2.6-.5.7-1 .6-.3 0-.5-.2-.5-.5v-.5c.1-1.4-.6-2.4-1.3-3.5-.4-.5-.8-1-1.2-1.6-.3-.4-.1-.9.4-1h.5c1.4.1 2.7 1.3 3.1 2.6 0 .8.3 1.5.2 2.2zM383.1 195.5c0 .4-.1.7-.3 1-.2.3-.4.5-.7.8-1 1-2.1 1.8-3 3-.4.6-.9.5-1.4.1-.3-.3-.5-1-.2-1.4.9-1.3 2-2.6 3.2-3.6.5-.4 1.2-.6 1.9-.5.3 0 .5.3.5.6zM395.9 204.4c-.4-1-.6-1.5-.8-2.2-.2-.7-.6-1.3-1.2-1.7-.9-.7-1.9-1.4-3-1.7-.5-.1-.7-.4-.6-.8 0-.5.2-.9.5-1.2.5-.6 1.1-.7 1.8-.3.8.5 1.5 1.2 1.9 2.1.3.8.7 1.6 1.1 2.4.2 1 .6 1.9.3 3.4zM384.1 211.1H383c-1.7-.1-2.8-1-3.7-2.3-.1-.1 0-.4.2-.5h.8c1.8.5 3.6.6 5.3 1.2.3.1.7.2 1 .4.3.1.2.6 0 .8-.4.3-.8.4-1.3.4h-1.2zM394.3 208.3c0 .1 0 .2-.1.3-.3.5-.7 1-1 1.5-.5.8-1.2 1.3-2.1 1.7-.9.4-1.5 0-1.6-.9-.1-.4-.2-.7-.3-1-.3-.6 0-1.2.6-1.3 1.5-.2 2.9-.4 4.4-.5l.1.2zM405.4 200.2c-.2 1.3-.8 2.4-1.8 3.1-.1.1-.4.1-.6.1-.1 0-.3-.1-.4-.2-1.2-.6-1.3-.8-.5-1.7.8-.9.9-2 .9-3.1 0-.7.2-.7.8-.4.8.4 1.1 1.1 1.5 1.9.1.1.1.2.1.3zM372.4 200.3c-.1 0-.3-.1-.3-.2-1.1-1.5-2.1-2.9-3.2-4.4 0 0 0-.1-.1-.1-.1-.3.2-.7.5-.6 1.1.2 2.2.5 2.9 1.4.6.9 1 1.9 1.2 2.9 0 .5-.5 1-1 1zM408.9 203.2c0 .8-.3 1.3-1.1 1.4-.8.2-1.5.5-2.3.8-.4.2-.7 0-1-.4-.2-.3-.1-.6.1-.8l1.5-2.1c.5-.6 1-.7 1.8-.4.8.3 1 .7 1 1.5zM398.1 201.9c0 .6-.3.9-.6 1.1-.2.1-.4.1-.5-.1 0 0 0-.1-.1-.1-.5-1.8-1.4-3.5-2.2-5.2-.1-.2-.3-.5-.1-.7.2-.2.5-.4.8-.3.8.1 1.5.5 1.7 1.3.2.9.5 1.9.7 2.8l.3 1.2zM394.9 206.6c-1.2.7-2.3 1-3.5.9h-.6c-1.3.2-1.3.2-1-1.1.1-.4.3-.9.4-1.3.1-.3.4-.4.8-.3.1 0 .3.1.4.2 1.2.4 2.3 1 3.5 1.6zM398.1 213.5c-.2 1.3-.5 2.6-1 3.8-.2.6-.8 1.1-1.6.7-.2-.1-.5-.1-.7-.3-.2-.1-.3-.3-.3-.5.1-.5.2-1.1.7-1.5.9-.6 1.7-1.5 2.5-2.2h.4zM402.4 198.8c-.2.5-.3 1-.5 1.4-.3.6-.7 1.1-1 1.7-.1.1-.1.2-.2.2-.2.1-.5.1-.7 0-.2-.1-.3-.3-.2-.5l.3-1.2c.4-.9.8-1.9 1-2.9 0-.2.2-.4.3-.5.1-.2.3-.3.5-.2.1.1.3.2.3.3 0 .6-.1 1.1.2 1.7zM398.9 200.2c-.3-.2-.4-.5-.4-.8-.1-.6-.3-1.2-.4-1.8-.1-.3-.3-.7-.1-1 .3-.4.6-.8 1.1-1 .2-.1.4 0 .5.2.4.9.6 1.8.1 2.6-.3.6-.3 1.3-.8 1.8z" />
                                                <path class="st10"
                                                    d="M367.9 216.6c-.4.1-.5.5-.6.8-.4 1.2-1.1 2.3-1.9 3.3-.1-.4.1-.9-.3-1.2 0-.4.2-.8.4-1.2.2-.4.3-.7.2-1.1.2 0 .3-.1.3-.3.7-.6 1.5-1.2 2.2-1.8.3.3.1.5-.1.8-.2.2-.3.4-.2.7z" />
                                                <path class="st16"
                                                    d="M394.4 203.1c0 .2-.1.3-.3.3-.2-.1-.4-.1-.5-.2-.8-.6-1.5-1.3-2.2-2.1-.1-.1-.2-.3-.2-.4 0-.1.1-.3.1-.4 0-.1.2-.1.3 0 1.2.5 2.4 1.2 2.7 2.6 0 0 0 .1.1.2zM379.3 194c.2.7.2 1.1-.1 1.5-.3.3-.6.6-.8.9-.1.1-.2.1-.2.1-.1 0-.1-.2-.1-.3.3-.7.6-1.4 1.2-2.2z" />
                                                <path class="st12"
                                                    d="M398.1 204c.1-.3.3-.5.6-.6l.1.1c-.1.4-.3.6-.7.5z" />
                                                <path class="st8"
                                                    d="M297.4 217.2c.8 0 1.5.4 1.8 1.1.2.4.5.6 1 .6h.6c.7.2.9.5.9 1.2 0 .4.2.9-.2 1.2-.4.4-.7-.3-1-.3-.6-.1-.6-.6-.8-1-.1.3-.2.5-.4.7-.2.3-.4.3-.7-.1-.1-.2-.2-.3-.4-.4-.5-.2-.6-.3-.5-.6 0 0 0-.1.1-.1.1-.4.6-.7.2-1.1-.3-.2-.6.3-.9.5-.1 0-.2 0-.3.1 0-.1-.1-.3-.1-.4.3-.6.8-.9.7-1.4zM302.1 226.1h-1.4c-.4 0-.5-.3-.5-.6v-1.1c0-.3.4-.5.7-.3.3.2.5.4.7-.1.1-.2.3-.3.4-.4.3-.3.6-.2.9 0 .7.5 1.1 1.1 1 2.1-.1.6-.1.7-.7.6-.4-.1-.8-.2-1.1-.2z" />
                                                <path class="st20"
                                                    d="M309.3 217.7c-1.3 0-2.5-.9-2.8-2.1 0-.1.1-.2.1-.3.1-.1.2-.1.3-.1.1 0 .3.1.4.2.1.1.2.3.4.5 1 1.2 2.1 1.2 3 0 .2-.2.2-.6.6-.5.3.1.3.5 0 .9-.5 1-1.2 1.4-2 1.4z" />
                                                <path class="st8"
                                                    d="M303.8 221.6c0 .1 0 .3-.3.4-.2.1-.3-.1-.4-.2l-.1-.1c-.1-.1-.2-.1-.3-.1-.2-.1-.5 0-.7-.3-.2-.3-.1-.6-.1-.9 0-.3 0-.5.3-.6.3-.1.7-.1 1 .2.5.4.7.9.6 1.6zM304.9 222c.1-.4.2-.6.3-.8 0-.1.1-.1.2-.1s.2.1.2.1l.3 1.5c0 .2-.2.4-.4.3-.4-.1-.6-.5-1.1-.4-.1 0-.2-.2-.2-.3-.1-.5-.1-.9.1-1.3 0-.1.1-.1.2-.1s.2.1.2.1c.1.2.1.5.2 1z" />
                                                <path class="st22"
                                                    d="M297.4 217.2c-.7 0-1.4-.3-2.1-.1-.1 0-.3-.1-.3-.3.2-.6 1.2-1 1.7-.6.5.3.7.6.7 1z" />
                                                <path
                                                    d="M287.6 217.6c0 .5.3.9.5 1.4.3.5.3.5-.4 1 0 0-.1 0-.1.1-1.2.2-2.4.3-3.6.3-.8 0-1.5 0-2.2-.2-.3-.1-.7 0-1 0-.5-.3-1-.4-1.5-.5 2.2-1 4.6-1.6 7-1.9.4-.2.9-.2 1.3-.2z"
                                                    fill="#9f9482" />
                                                <path
                                                    d="M287.3 217.6c-.3 0-.7 0-1 .1-2 .3-3.9.7-5.8 1.4v.5c0 .1.1.6 0 .2v.2c.1 0 .1.1.2.1.4 0 .7-.1 1 0 .7.2 1.5.2 2.2.2 1.2.1 2.4-.1 3.6-.3h.1l-.3-2.4z"
                                                    fill="#fce4ab" />
                                                <path class="st20"
                                                    d="M285.5 229.5c-.3 0-.5-.2-.8-.3 0-.2.1-.5.1-.7 0-.2.2-.4.4-.3.2 0 .3.2.4.4.2.2.2.5-.1.9z" />
                                                <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse"
                                                    x1="280.019" y1="232.688" x2="285.991" y2="232.688">
                                                    <stop offset="0" stop-color="#f9da99" />
                                                    <stop offset="1" stop-color="#fddece" />
                                                </linearGradient>
                                                <path
                                                    d="M285.5 229.5c-.3 0-.5-.2-.8-.3-.6.1-1.2.3-1.8.4-.1.1-.2.3-.3.4-.2.1-.4.1-.6.2-1.5 1.2-2 2.8-2.1 4.6 0 .7.5 1.2 1.3 1.3.8.1 1.5 0 2.1-.6.5-.2.9-.6 1.2-1 .4-.5.8-1.1 1-1.7.5-1 .8-2.2 0-3.3z"
                                                    fill="url(#SVGID_6_)" />
                                                <path class="st30"
                                                    d="M291.3 218.1h.3c.1 0 .3 0 .4.1.1.2-.1.4-.2.5-.2-.2-.3-.4-.5-.6z" />
                                                <path class="st16"
                                                    d="M302.7 213.1c-1.2-.1-2-.6-2.7-1.2-.7-.7-1.1-1.6-1.3-2.5-.2-.8-.1-1.7 0-2.6.1-.5.4-.8.9-.9 1-.1 2-.1 3 0 .9.1 1.8.4 2.7.6.6.1.9.5.9 1.1 0 1 .1 1.9-.2 2.9-.3.8-.6 1.5-1.4 1.9-.1-.5.2-.9.3-1.3.3-1.1.2-2.1-.3-3.1-.2-.6-.6-1.1-1.3-1.2-.7 0-1.1.5-1.3 1.1-.6 1.4-.5 2.8.1 4.1.1.4.3.7.6 1.1z" />
                                                <path class="st31"
                                                    d="M303.4 210.3c.1-.2.1-.4.2-.6.1-.3.3-.4.6-.4s.4.3.4.5c0 .4 0 .8-.2 1.1-.1.1-.2.2-.4.2s-.4-.1-.4-.3c-.2-.1-.2-.3-.2-.5z" />

                                                <path class="st30"
                                                    d="M293.1 218.8c0-.1.1-.3.1-.4.1-.1.2-.1.3 0 0 .1 0 .2-.1.2 0 .1-.1.1-.3.2zM293.1 218.8l-.3.3.3-.3z" />
                                                <path class="st14"
                                                    d="M158.2 186.1c.2 0 .2.1.2.3l-.1.1c-.1-.1-.2-.2-.2-.3-.1-.1 0-.2.1-.1z" />

                                                <path class="st13"
                                                    d="M139.5 169.5c.8.1 1.4.5 2.1.9 2.2 1.3 4.3 2.7 6.1 4.6 1.9 2 3.8 4.1 5.5 6.3.6.8 1.2 1.5 1.9 2.2 2 2.2 3.5 4.6 4.9 7.1.7 1.2 1.3 2.5 2 3.8.9 1.6 1.3 3.4 1.7 5.2.3 1.6.5 3.3.3 5.1-.4-.3-.4-.8-.5-1.2-.6-3.1-2.2-5.7-4.2-8-.5-.6-.9-1.4-1.6-1.8-1.3-.8-2.2-2.1-3.5-3-.9-.6-1.6-1.4-2.2-2.3-.5-.7-1.1-1.3-1.5-2.1-.9-1.4-1.4-2.9-1.8-4.5-.4-1.5-.8-2.9-1.5-4.3-.8-1.5-1.8-2.8-3.2-3.8-1.3-1-2.5-2-3.8-3.1-.4-.3-.8-.6-.7-1.1zM156 178.6c1.2.1 2.4.2 3.5 1 .7.5 1.5.8 2.5.4.3-.1.5.2.5.4-.4.9-.2 1.9-.3 2.9 0 .6-.3.8-.9.7-2.3-.5-3.8-1.8-4.8-3.9-.3-.4-.4-1-.5-1.5z" />

                                                <path class="st8"
                                                    d="M166.7 184c-.3-.3-.3-.6-.3-.8.1-.9-.3-1.7-1-2.3l-.4-.4c-.7-.8-.6-1.7 0-2.5.5-.5 1-1 1.4-1.6.1-.1.3-.1.4 0 .7 1.1 1.3 2.3 1.4 3.7.1 1-.2 1.9-.7 2.7-.2.4-.5.8-.8 1.2zM169 181.8c.6 1 .6 2 .7 2.9.1.5 0 1.1 0 1.7 0 .6-.2 1.1-.6 1.5-.5.6-.9.6-1.4 0-.4-.5-.9-1-1.5-1.3-.4-.2-.7-.5-.9-.9.1-.3.4-.2.6-.3.9-.3 1.6-.9 2-1.7.4-.7.8-1.2 1.1-1.9z" />
                                                <path class="st13"
                                                    d="M156 162.2c0 .4-.1.9-.3 1.4-.2.5-.4.9-.2 1.5 0 .1 0 .2-.1.2h-.3c-.6-.5-1.3-1-1.4-1.9-.8-1.4-.7-2.8-.3-4.2.1-.2 0-.5.2-.7.1-.1.2-.2.4-.1 0 0 .1 0 .1.1 1.1.7 1.9 2.4 1.9 3.7zM157.5 174.4c-2.4-.3-4.5-1.2-6-3.2-.1-.1-.1-.3-.1-.4 0-.2.2-.2.4-.2 1.4.3 2.8.7 4.2 1.2.3.1.7.3.8.6.2.5.6.9 1 1.3.1.1.1.3.1.4-.1.2-.3.2-.4.3zM160.3 168.7c-.1-.6.1-1.2.5-1.7.3-.4.8-.4 1 0 .5.8.9 1.7 1.2 2.6.3 1.1-.2 2.1-.5 3.1 0 .1-.2.1-.2.1-.1 0-.2-.1-.2-.2-.2-.8-.7-1.4-1.2-2.1-.5-.4-.7-1.1-.6-1.8zM153 168.1c-.1.1-.1.2-.2.2-1.6.7-3.7-.3-4.1-1.9-.1-.4-.2-.9-.3-1.3 0-.2.2-.4.4-.3 1 .5 1.9.9 2.9 1.4.7.3 1.3.9 1.3 1.9z" />
                                                <path class="st23"
                                                    d="M145.9 160c0-.2 0-.4.1-.6 0-.2.2-.2.4-.2.1 0 .2.1.3.1 1.1 1.1 2.2 2.1 3.2 3.2.1.1.3.3.3.5.1.3.2.8-.2 1-.3.3-.7 0-.9-.2-.2-.2-.4-.5-.7-.5-.8 0-1.3-.5-1.7-1.1-.5-.6-1-1.3-.8-2.2z" />
                                                <path class="st13"
                                                    d="M158.7 184c.1 0 .3 0 .4.1.6.7 1.4 1.2 2.2 1.6.8.5 1.3 1.3 1.6 2.1.2.4-.1.8-.6.8-.5.1-.9-.1-1.3-.4-.6-.5-1.3-1-1.7-1.7-.4-.7-.7-1.5-.9-2.2.1-.1.1-.2.3-.3zM165.8 183.1c0 .8-1 1.7-1.7 1.6-.2 0-.4-.1-.5-.3-.6-.6-.8-1.3-.7-2.1 0-.3.1-.6.2-.9.1-.4-.2-1 .3-1.2.5-.1.7.5 1 .8.4.3.7.7 1.1 1.1.2.4.3.7.3 1zM153.5 166.3c0-.3 0-.5.1-.8 0-.2.3-.3.5-.2.2.2.4.3.6.5.5.5 1 1 1.6 1.4.6.4.9 1 .9 1.7 0 .6-.3 1-.9.8-.4-.1-.8-.3-1.2-.7-.2-.3-.5-.5-.8-.7-.6-.5-.9-1.2-.8-2zM159.3 165.5c-.3.7-.3 1.3-.7 1.9-.6.7-.6.7-1.2 0-.2-.3-.5-.5-.7-.8-.5-.6-.5-1 0-1.6.5-.5 1-1 1.3-1.7.1-.2.4-.1.5 0 .6.7.5 1.6.8 2.2zM163 178c-.2-.3-.4-.6-.6-.8-.1-.2-.2-.3-.2-.6.3-1.1.2-2.3.8-3.4v-.1c.2-.4.4-.7.8-.8.2 0 .5.4.6.9v.5c0 1.5 0 3-1.4 4.3zM158.4 171.9v-.2c0-.3-.1-.8.3-.9.4-.1.7.1.9.4.4.3.7.6 1 .9.4.4.6.8.5 1.4 0 .4 0 .8-.5 1-.5.2-1 .2-1.4-.1-.5-.4-.8-.9-.8-1.6v-.9zM161.2 179.3c-1.1 0-1.7-.3-2.1-1.4-.1-.1-.1-.3 0-.4.1-.4.2-.8.4-1.1.1-.2.5-.4.6-.2.8.6 1.5 1.3 2.1 2.2.3.5 0 1-.6 1-.1-.1-.2-.1-.4-.1zM154.1 175.1c.1-.1.2-.1.2-.1 1.1.3 2.1.6 3.2.9.8.3 1.1.8 1 1.6 0 .3-.2.4-.5.5-.8.1-1.5-.3-2.1-.7-.9-.5-1.5-1.3-1.8-2.2zM165.4 189.4h-.4c-1.1-.3-1.7-.7-1.2-2.1 0-.1.1-.3.2-.4.4-.9.6-.9 1.3-.3.4.4.9.8 1.3 1.3.5.5.4 1-.2 1.3-.3.2-.6.2-1 .2zM150.9 164.7c.4-1.2-.1-2.1-.9-2.9-.3-.3-.6-.6-.8-.9-.1-.1-.2-.3-.1-.4.1-.2.3-.2.5-.1.5.3 1.1.5 1.5.9.2.3.5.5.5.9 0 .6.3 1.1.6 1.5.3.5.5 1 .6 1.5 0 .2-.2.4-.4.3-.4-.1-.9-.4-1.5-.8zM157.4 171.7c-1.2-.7-2.5-1.1-3.8-1.4-.7-.2-1.4-.4-2-.7-.2-.1-.4-.1-.4-.5h2.4c.3 0 .6.1.8.3.8.6 1.7 1.1 2.7 1.3.4.1.4.2.3 1z" />
                                                <path class="st14"
                                                    d="M160.2 188.7c-.1.1-.2.2-.3.2-.4-.4-.6-.9-.8-1.4.3.4.8.7 1.1 1.2z" />
                                                <path class="st13"
                                                    d="M139.4 169.5h-.3l-.1-.1c0-.1.1-.2.2-.1.2 0 .2.1.2.2zM156 178.7l-.1-.1h.1v.1c0-.1 0 0 0 0z" />
                                                <path class="st14" d="M159.1 187.5h-.1.1z" />
                                                <path class="st12"
                                                    d="M201.9 205.4c0-.6-.2-1.3.3-1.8.7-.7 1.3-1.6 2.3-2 1.7-.7 3.3-.6 4.7.7.3.3.8.5 1.1.8.4.3.7.6 1 1 .3.4.5.9.2 1.4-.2.4-.3.9-.4 1.3-.1.3-.2.6-.4.8-.2.3-.5.7-.7 1-.8 1.3-2.4 2.1-3.9 1.7-1.3-.3-2.4-1-3.2-1.9-.7-.7-1.2-1.8-1-3zM183.2 204.7c.6 0 1 .2 1.2.7.8 1.3.8 2.7.2 4.1-.2.3-.3.6-.5.9-.1.2-.2.4-.4.4-.6 0-.9.4-1.1.9-.1.4-.3.8-.7.9-.5.2-.9.2-1.5.1-1.3-.1-2-.8-2.5-1.9-.4-.9-.7-1.8-1-2.7-.2-.7-.1-1.2.2-1.7 1.1-1.5 2.6-2.4 4.5-2.6.3 0 .7 0 1 .3l-.1.1h-.6c-.2 0-.4.1-.5.3-.1.3 0 .5.2.7.4.3.9.5 1.3.7.1.1.3.1.4-.1.1-.1.1-.3.1-.4 0-.4-.1-.5-.2-.7z" />
                                                <path class="st16"
                                                    d="M209.1 211.2c.3 0 .5.1.7.2.4.4.8.8 1 1.3.8 2 1.6 4 2.1 6 .1.4 0 .7-.4.8-.7.3-1.3.3-2-.2-.6-.4-1.1-.8-1.6-1.4-.3-.3-.5-.7-.7-1.2-.3-.9-.5-1.8-.8-2.6-.3-.7-.2-1.5-.2-2.3 0-.3.1-.5.4-.6.5.2 1.1.2 1.5 0zM217.4 204.4h3c.8 0 1.2.6.9 1.3-.2.5-.4.9-.9 1.1-1 .4-2 .8-3 1.1-.3.1-.6 0-.9-.1-1.1-.7-2.4-.9-3.6-.8h-.6c-.2-.1-.4-.2-.3-.5.4-1.4.9-2.3 2.6-2.3h1.4c.5.2 1 .2 1.4.2zM207.1 217.5v.3c-.1 1.9-.6 2.4-2.7 2.5-.6 0-.9-.3-1-.9v-2.3c0-1 .1-1.9.2-2.9.2-1.2 1-2 1.6-2.9.2-.2.7-.1.8.2.1.2.1.4.1.6-.1 1.2.2 2.4.6 3.6.2.6.5 1.3.4 1.8zM217.5 212.3c-.6 0-1.3.1-2-.2-1.2-.7-2.4-1.3-3.2-2.4-.2-.3-.4-.6-.5-.9-.1-.3.1-.6.4-.6 1.3-.1 2.6-.2 3.8.6 1 .6 2.1.8 3.1 1.1.3.1.6.1.9.2.6.2.8.5.8 1 0 .6-.2.8-.7 1-.7.3-1.6.2-2.6.2zM198.6 216.9c-.8.1-1.4-.1-1.7-.9-.1-.3-.1-.6.2-.8.6-.4 1.3-.8 1.9-1.3.7-.5 1.2-1.1 1.7-1.7.5-.6 1-1.1 1.5-1.7.3-.3.7-.4 1.1-.4.3 0 .6.1.8.4.2.3 0 .6-.2.8-.6.9-1.1 1.8-1.3 2.9-.2 1.3-1.9 2.6-3.4 2.7-.1.1-.3 0-.6 0zM201.9 202.5c-.1.1-.1.3-.2.4-.4.5-.6 1-.7 1.7-.1.4-.3.5-.7.2-1-.9-2.2-1.6-3.6-1.9-.4-.1-.7-.3-1.1-.6-.9-.7-.9-1.1 0-1.8.3-.2.7-.5.9-.8.2-.3.6-.5 1-.6.3-.1.6-.1.9.1.5.3 1 .6 1.3 1 .6.7 1.2 1.4 1.8 2 .2 0 .3.1.4.3zM173 211.4h-.4c-1.1 0-1.1 0-1.4-1 0-.1-.1-.2-.1-.3-.7-1.2-.1-2.1.7-3 .6-.6 1.4-.8 2.2-.6 1.8.5 1.8.5 2.3 2.4.1.2.2.5.2.7.1.4-.1.7-.4.9-1.1.6-2.2.9-3.1.9zM219.1 197.9c.8 1.3.5 2.4-.4 3.3-.8.8-1.5 1.7-2.6 2-.2.1-.5.2-.7.1-.7-.4-1.4 0-2 .2-.2.1-.5.2-.7.3-.3.1-.6-.1-.6-.4 0-1.2.6-1.9 1.5-2.4s1.8-1 2.6-1.5c.9-.5 1.8-1 2.9-1.6zM176 211.4c.4 0 .7 0 1 .1.3 0 .4.5.3.7-.2.3-.5.5-.7.7-1.2.9-2.4 1.8-3.6 2.8-.5.4-.9.5-1.5.4-1.1-.3-1.8-1-1.8-2.1 0-.2 0-.5.2-.6.5-.4.9-.9 1.5-1.1 1.5-.4 3.1-.8 4.6-.9zM190 214.1c.1.5-.3.9-.7 1.2-.9.8-1.5.8-2.6.2-.7-.4-1.2-1-1.8-1.6-.4-.4-.9-.6-1-1.1-.1-.5.4-.9.7-1.3.4-.7.5-1.5 1.2-2 .6.5.9 1.2 1.3 1.8.7.8 1.3 1.7 2.4 2 .4.1.5.4.5.8zM181.2 213.8c.1 0 .3-.1.4-.1.4 0 .6.2.6.5.1.4.1.8 0 1.2-.5 1.8-.7 3.7-1.5 5.4-.5 1-1.1 1.4-2.1 1.4-.3 0-.5-.2-.5-.5-.1-.5-.1-.9.1-1.3s.3-.9.5-1.3c.6-1.4.9-2.8 1.2-4.2.1-.3 0-.7.3-1 .3-.4.6-.1 1-.1zM194.6 206.8v-.2c0-1.5.1-1.6 1.7-2 .7-.2 1.2-.1 1.7.2l1.8.9c.5.3 1.3.3 1.2 1.1 0 .8-.8.8-1.3 1.1-.9.5-2 .8-3.1.7h-.3c-1.5-.1-1.7-.3-1.7-1.8zM216.6 216.6c-.7 0-1.2-.2-1.6-.6-.5-.4-1-.9-1.4-1.4-.3-.4-.6-.9-1.2-.8-.2 0-.3-.2-.4-.4-.3-1.1-.9-2.1-1.7-2.9-.2-.2 0-.9.3-1.1h.3c.2.3.5.5.6.8.5.8 1.2 1.5 2.1 1.9 1.3.7 2.5 1.5 3.8 2.2.4.2.7.5.9.8.2.4.1.8-.3 1-.5.4-.9.6-1.4.5zM173.6 219.6c-.1-.1-.3-.1-.4-.3-.1-.1-.1-.3-.1-.4-.6-1.6-.6-1.6.8-2.7 1.1-.9 2.3-1.7 3.2-2.8.3-.4.7-.6 1.2-.5.4.1.7.5.5.9-1.1 2-2.3 4.1-4.4 5.3-.3.2-.6.4-.8.5zM216.9 195.9c0 1.6-1 2.5-2.2 3.2-.5.3-1 .5-1.5.8-.9.6-1.7 1.2-2.3 2 0 .1-.2.1-.3.1-.1-.1-.2-.2-.2-.3 0-.2.2-.5.3-.7.7-1.4 1.5-2.6 2.5-3.8.4-.5.8-1 1.1-1.4.4-.5.8-.9 1.4-1.1.6-.2 1 0 1.1.7.1.1.1.3.1.5zM205 198c-.1-.8.2-1.6.4-2.4.4-1.2 1.9-2.3 3.1-2.3.1 0 .3 0 .4.1.4.1.6.5.4.8-.4.5-.7 1-1.1 1.5-.9 1.2-1.6 2.4-1.5 3.9 0 .5-.2.7-.6.7-.5.1-.8-.1-1-.5-.1-.5-.1-1.1-.1-1.8zM199.1 195.5c.7 0 1.3.2 1.8.7 1.1 1 2.1 2.1 2.9 3.3.5.7.3 1.4-.5 1.8-.2.1-.5.1-.7 0-.1-.1-.3-.2-.3-.3-.8-1.2-2.1-2-3.1-3.1-.4-.4-.7-.8-.9-1.2-.2-.8.1-1.2.8-1.2zM185.4 204.7c-.3-1.1.1-2 .5-2.9.4-.9.8-1.8 1.2-2.6.4-.9 1-1.5 1.8-2 .6-.4 1.3-.3 1.8.2.4.4.6.9.5 1.5 0 .3-.1.5-.4.6-1.1.2-2 .8-2.8 1.4-.8.5-1.4 1.2-1.6 2.1l-.6 1.5c-.2.1-.3.1-.4.2zM197.1 211.7h-1.4c-.4 0-.7-.2-1-.4-.3-.2-.3-.6 0-.8.3-.1.5-.3.8-.3 1.4-.4 2.9-.8 4.4-1 .5-.1 1.1-.4 1.6-.3.1 0 .3.1.4.2.1.1 0 .3-.1.4-.5.5-1 1.1-1.5 1.5-.6.5-1.4.5-2.1.6-.2.2-.7.1-1.1.1zM187.3 208.7c.7.3 1.5.1 2.2.3.7.1 1.3.2 2 .3.7 0 1.1.7.7 1.3-.2.4-.3.7-.3 1.1-.1.6-.8 1.1-1.3.9-.6-.2-1.2-.5-1.7-1-.7-.7-1.2-1.6-1.7-2.5-.2-.1-.1-.3.1-.4zM179.7 203.1c0 .1 0 .1-.1.1-.5.4-1 .7-1.6.8-.1 0-.3-.1-.4-.2-1-.7-1.5-1.7-1.7-2.8-.1-.8.4-1.4.9-2 .1-.1.3-.2.5-.3.2-.1.4-.4.7-.3.3.1.2.4.2.7 0 .6 0 1.1.2 1.7.2.5.4 1 .8 1.4.4.2.5.6.5.9zM209 200.9c-.4 0-.9-.5-.9-.9-.1-2.1 1.8-4.3 3.9-4.5.2 0 .4 0 .5.2.1.2.1.4 0 .6l-.6.9c-.8 1.1-1.5 2.1-2.3 3.2-.1.2-.3.5-.6.5zM174.2 202.2c.4 0 .8.2 1 .5.6.7 1.1 1.5 1.6 2.2.2.2.2.5 0 .7-.2.3-.5.6-.9.5-.9-.3-1.8-.7-2.7-.9-.6-.1-.8-.7-.8-1.3 0-.6.1-1.1.7-1.4.4-.1.8-.3 1.1-.3zM183.3 202.4c.3-1.3.5-2.7 1-4 .3-.8.8-1.1 1.6-1.3.3-.1.5 0 .7.2.3.1.4.3.2.6s-.3.6-.5 1c-.7 1.4-1.4 2.8-1.8 4.3-.2.5-.5.5-.9.1-.2-.2-.4-.5-.3-.9zM186.3 207.3l3.8-1.9c.5-.2.9-.1 1.1.5.2.7.4 1.4.5 2 .1.2-.2.4-.4.3-.8-.2-1.7-.2-2.6-.2-.8.1-1.4-.5-2.4-.7zM183.3 214.1c.3-.1.5.1.6.2.7.7 1.3 1.4 2.2 1.9.5.3.6.9.8 1.4.1.4-.1.6-.4.7-.1.1-.3.1-.4.1-1 .3-1.4.2-1.8-.8-.5-1-.8-2.3-1-3.5zM179.6 197.4c.1 0 .3 0 .3.1l.3.3c.4 1.4.9 2.7 1.4 4 .2.5.1.8-.3.9-.4.2-.7 0-1-.4-.2-.3-.4-.7-.7-1-.8-1.1-.6-2.4-.4-3.6.1-.2.3-.2.4-.3zM182.4 200.8c-.3-.8-.7-1.5-.9-2.3-.2-.8 0-1.5.3-2.2.1-.2.3-.3.5-.2.5.2.8.6 1.1 1 .1.1.1.3.1.4-.3 1-.5 2-.8 2.9 0 .2-.2.3-.3.4z" />

                                                <path class="st16"
                                                    d="M190 200.8c.1.1.2.1.2.2 0 .2 0 .4-.1.6-.8.9-1.5 1.7-2.6 2.3-.1.1-.3.1-.4 0-.2-.1-.1-.3-.1-.4.4-1.5 1.5-2.2 2.8-2.7h.2zM202.1 194.8c.7.7 1.3 1.7 1.3 2.1 0 0 0 .1-.1.1l-.1.1c-.5-.3-.9-.7-1.2-1.1-.2-.4-.2-.8.1-1.2z" />
                                                <path class="st12" d="M182.7 204c.3.1.5.3.6.6-.5.1-.7-.1-.6-.6z" />
                                                <path class="st16"
                                                    d="M313.8 213c-1.4-.8-2-1.8-2.1-3v-.3c.1-2.8-.1-2.5 2.4-3.2 1.5-.4 2.9-.4 4.4-.3.6 0 .7.2.8.7.1.5.1.9.1 1.4.2 1.6-.5 2.9-1.5 4-.6.7-1.3 1.2-2.2 1-.1-.4.2-.6.4-.8.6-1.3.7-2.5.3-3.9-.1-.2-.1-.4-.2-.6-.3-.5-.6-1-1.3-.9-.6 0-.9.4-1.1.9-.5 1.1-.7 2.2-.4 3.4-.1.5.1.9.4 1.6z" />
                                                <path class="st16"
                                                    d="M314.7 210.6c-.1.2-.1.4-.2.6-.1.1-.4.2-.5 0-.4-.4-.4-.9-.3-1.4 0-.1.1-.3.3-.3.2 0 .4 0 .5.2.1.3.2.6.2.9z" />
                                                <path class="st23"
                                                    d="M378.1 233.3c0 .3-.1.4-.3.4-.1 0-.3 0-.4-.1-.3-.4-.5-.8-.6-1.3-.1-.2.1-.4.3-.5.3-.1.5-.1.6.2.2.4.3.9.4 1.3zM398.1 204.1c.4 0 .6-.2.6-.6.4 0 .8-.2 1.1.3.2.3-.1.6-.7 1-.2.1-.5.2-.7.3-.2.1-.4.2-.5 0-.1-.2-.1-.4 0-.6.1-.2.2-.3.2-.4zM182.6 204.1c0 .4.3.6.6.6.1.2.2.4.2.6 0 .1 0 .3-.1.4-.1.2-.3.2-.4.1-.5-.2-.9-.5-1.3-.7-.2-.1-.3-.4-.2-.7.1-.2.3-.3.5-.3h.7z" />
                                                <g class="st2">
                                                    <path class="st32"
                                                        d="M48.4 91.6l4.5-2.6 4.5 2.6v5.2l-4.5 2.6-4.5-2.6zM58.3 91.6l4.5-2.6 4.5 2.6v5.2l-4.5 2.6-4.5-2.6zM43.4 100.1l4.5-2.6 4.5 2.6v5.2l-4.5 2.6-4.5-2.6zM53.3 100.1l4.5-2.6 4.5 2.6v5.2l-4.5 2.6-4.5-2.6zM63.1 100.1l4.5-2.6 4.5 2.6v5.2l-4.5 2.6-4.5-2.6zM48.3 108.7l4.5-2.6 4.5 2.6v5.2l-4.5 2.6-4.5-2.6zM58.1 108.7l4.5-2.6 4.5 2.6v5.2l-4.5 2.6-4.5-2.6z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st32"
                                                        d="M515 91.6l4.5-2.6 4.5 2.6v5.2l-4.5 2.6-4.5-2.6zM524.8 91.6l4.5-2.6 4.5 2.6v5.2l-4.5 2.6-4.5-2.6zM510 100.1l4.5-2.6 4.5 2.6v5.2l-4.5 2.6-4.5-2.6zM519.8 100.1l4.5-2.6 4.5 2.6v5.2l-4.5 2.6-4.5-2.6zM529.7 100.1l4.5-2.6 4.5 2.6v5.2l-4.5 2.6-4.5-2.6zM514.8 108.7l4.5-2.6 4.5 2.6v5.2l-4.5 2.6-4.5-2.6zM524.7 108.7l4.5-2.6 4.5 2.6v5.2l-4.5 2.6-4.5-2.6z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st33"
                                                        d="M424.7 214.7c-1.8 0-4.4-.8-5.3-1.7-1-1.1-.6-2.9-.2-3.6.1-.2.4-.2.5-.1.2.1.2.4.1.5-.3.4-.7 1.9.1 2.7.8.8 4.1 1.7 5.5 1.3 1.5-.4 3.3-1.3 3.3-1.3.2-.1.4 0 .5.2.1.2 0 .4-.2.5-.1 0-1.9.9-3.4 1.3-.2.2-.5.2-.9.2z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st33"
                                                        d="M426.1 214.5c-.1 0-.2-.1-.3-.2-.1-.2-.1-.4.1-.5 1.5-.9 2-2.9 2-2.9.1-.2.3-.3.5-.3.2.1.3.3.3.5 0 .1-.6 2.3-2.3 3.3-.2 0-.2.1-.3.1z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st33"
                                                        d="M428.4 213.4c-.2 0-.5-.1-.7-.3-.3-.4-.3-.9.1-1.8.1-.2.3-.3.5-.2s.3.3.2.5c-.3.7-.2.9-.2 1 0 .1.3 0 .4 0 .2-.1.4.1.5.3.1.2-.1.4-.3.5-.1-.1-.3 0-.5 0z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st33"
                                                        d="M429.2 210.6c-.1 0-.1 0-.2-.1-.2-.1-.2-.4-.1-.5 1.1-1.6 3.3-2.4 3.3-2.4.2-.1.4 0 .5.2.1.2 0 .4-.2.5 0 0-2 .7-3 2.1-.1.1-.2.2-.3.2z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st33"
                                                        d="M424.6 214.7c-.7-.1-1-.5-1.1-.7-.3-.7-.2-1.7.5-3.2.9-1.7 2.8-3.1 2.9-3.2.2-.1.4-.1.5.1.1.2.1.4-.1.5 0 0-1.9 1.3-2.7 2.9-.6 1.2-.8 2.1-.6 2.5.1.1.2.3.5.3.2 0 .3.2.3.4.2.3 0 .4-.2.4z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st33"
                                                        d="M420.8 213.6c-.9 0-1.5-.8-1.9-1.4-.1-.2-.1-.4.1-.5.2-.1.4-.1.5.1.5.7.9 1 1.2 1 .4 0 .9-.4 1.4-1.1 1.2-1.7.8-4.9.8-4.9 0-.2.1-.4.3-.4.2 0 .4.1.4.3 0 .1.4 3.5-.9 5.4-.6 1.1-1.2 1.5-1.9 1.5z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st33"
                                                        d="M427.8 215c-.6 0-1.2-.2-1.9-.5-.2-.1-.3-.3-.2-.5s.3-.3.5-.2c1.1.5 2 .5 2.7.1 1-.5 1.3-1.9 1.3-1.9 0-.2.2-.3.4-.3s.3.2.3.4c0 .1-.3 1.7-1.7 2.4-.4.4-.9.5-1.4.5z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st33"
                                                        d="M423.5 216.9c-.2 0-.4 0-.6-.1-1.7-.6-2.7-3.2-2.8-3.3-.1-.2 0-.4.2-.5.2-.1.4 0 .5.2 0 0 1 2.4 2.3 2.9 1.1.4 3-1.2 3.6-1.8.1-.1.4-.1.5 0 .1.1.1.4 0 .5-.1.3-2 2.1-3.7 2.1z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st33"
                                                        d="M423.8 206.2h-.1c-.2-.1-.3-.3-.2-.5 0-.1.7-2 2.5-3 .2-.1.4 0 .5.1.1.2 0 .4-.1.5-1.5.9-2.1 2.6-2.2 2.6-.1.3-.3.3-.4.3z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st34"
                                                        d="M270.9 224c-.1 0-.2-.1-.3-.2-.1-.2-.1-.4.1-.5 1.8-1.2 3.9-1.4 4-1.4.2 0 .4.1.4.3 0 .2-.1.4-.3.4 0 0-2 .2-3.6 1.3-.2 0-.3.1-.3.1z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st34"
                                                        d="M270.9 224.8c-.1 0-.2 0-.3-.1-.1-.2-.1-.4 0-.5.1 0 1.4-1.1 2.9-1.9.2-.1.4 0 .5.2.1.2 0 .4-.2.5-1.5.7-2.8 1.7-2.8 1.8 0-.1-.1 0-.1 0z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st34"
                                                        d="M271.5 226.1c-.1 0-.2-.1-.3-.1-.1-.2-.1-.4.1-.5 0 0 .8-.6 2.6-1.1.2 0 .4.1.5.3.1.2-.1.4-.3.5-1.6.4-2.4 1-2.4 1 0-.2-.1-.1-.2-.1z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st34"
                                                        d="M273.2 229.7c-.1 0-.3-.1-.3-.2-.1-.2 0-.4.2-.5 0 0 .8-.4 1.7-.7.2-.1.4 0 .5.2.1.2 0 .4-.2.5-.8.3-1.5.7-1.6.7-.2-.1-.2 0-.3 0z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st34"
                                                        d="M272.3 227.6c-.2 0-.3-.1-.4-.3 0-.2.1-.4.3-.4 0 0 1.1-.2 2.1-.3.2 0 .4.1.4.3s-.1.4-.3.4c-1 .1-2.1.3-2.1.3z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st34"
                                                        d="M272.3 226.8l-.3-.7s1.4-.6 1.8-.7c.2-.1.4 0 .5.2.1.2 0 .4-.2.5-.4.1-1.8.7-1.8.7z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st34"
                                                        d="M273.9 232.9c-.1 0-.3-.1-.3-.2-.1-.2 0-.4.2-.5 1.8-.8 2-.6 2.2-.5.1.1.2.2.2.3 0 .2-.1.4-.3.4h-.2c-.1 0-.5.1-1.6.5h-.2z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st34"
                                                        d="M273.3 231.4c-.2 0-.4-.1-.4-.3 0-.2.1-.4.3-.4l1.9-.2c.2 0 .4.1.4.3 0 .2-.1.4-.3.4l-1.9.2z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st34"
                                                        d="M276.8 240.8c-.2 0-.3-.1-.4-.3-.1-.2.1-.4.3-.5.4-.1 1.7-.5 2.1-.7.2-.1.4 0 .5.1.1.2 0 .4-.1.5-.7.4-2.2.8-2.4.9.1-.1 0 0 0 0z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st34"
                                                        d="M277.2 239.5c-.2 0-.3-.1-.4-.3-.1-.2 0-.4.2-.5l1.2-.4c.2-.1.4 0 .5.2.1.2 0 .4-.2.5l-1.2.4-.1.1z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st34"
                                                        d="M275.2 238.2c-.2 0-.3-.1-.4-.3 0-.2.1-.4.3-.4 1-.2 2.2-.6 2.4-.7.2-.1.4-.1.5.1.1.2.1.4-.1.5-.4.3-2.2.8-2.7.8.1 0 0 0 0 0z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st34"
                                                        d="M276 237.5c-.1 0-.3-.1-.3-.2-.1-.2 0-.4.2-.5l1.3-.5c.2-.1.4 0 .5.2s0 .4-.2.5l-1.3.5h-.2z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st34"
                                                        d="M275 236.1c-.1 0-.3-.1-.3-.2-.1-.2 0-.4.2-.5l1.7-.7c.2-.1.4 0 .5.2.1.2 0 .4-.2.5l-1.7.7h-.2z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st34"
                                                        d="M275 235.3c-.2 0-.3-.1-.4-.3-.1-.2.1-.4.3-.5l1.5-.4c.2-.1.4.1.5.3s-.1.4-.3.5l-1.5.4h-.1z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st34"
                                                        d="M274.5 234.5c-.1 0-.3-.1-.3-.2-.1-.2 0-.4.2-.5l1.9-.9c.2-.1.4 0 .5.2.1.2 0 .4-.2.5l-1.9.9h-.2z" />
                                                </g>
                                                <path class="st11"
                                                    d="M361.7 244.1c0-.5-.2-1-.1-1.5 0-.5.4-.3.6-.2-.3-.6-.6-1.2-.8-1.7-.1-.1-.2-.1-.3-.2-.2-.1-.5-.1-.5-.4 0-.7 0-.7-.6-.8h-.2c-.4.1-.9.2-1.3.2-.3.6-.7 1.1-1 1.6 1 .4 1.6 1.1 1.9 2.5.4-1.2-.4-1.7-.9-2.6.8 0 1.3.4 1.7.8.3.3.5.7.6 1.2.1 1.1-.5 1.9-1.6 2.3-.2.1-.5.2-.7.3 0 .3.1.5.5.4.6 0 .7 0 .7.5 0 .6.3 1.1.5 1.6 0 .1.1.2.2.2s.2-.1.2-.1c.3-.8.6-1.6.8-2.4.2-.6.5-1.1 1.1-1.4-.5.1-.8.2-.8-.3z" />
                                                <g class="st2">
                                                    <path class="st25"
                                                        d="M387.1 221c-.7 0-1.2-.1-1.7-.3.1-.5.5-.7.8-.9 1-.5 1.8-1.1 2.7-1.7.9-.6 1.8-1.3 2.8-1.8.1-.1.1-.2.1-.3V215.7h.1c.2.1.4.1.5.2.4.1.9.3 1.3.5.1 0 .2.1.2.2v.3c-.3 0-.6 0-.9.2-1.6.7-3.1 1.6-4.4 2.6-.2.2-.4.4-.6.5l-.2.2c-.1.1-.1.2-.1.4v.2h-.6zm-1.6-.4c.6.2 1.3.3 2.1.3v-.1c0-.1-.1-.3.1-.5l.2-.2.6-.6c1.4-1 2.8-1.9 4.4-2.6.3-.1.6-.2.9-.2v-.2c0-.1-.1-.1-.2-.2-.4-.2-.9-.3-1.3-.4-.2-.1-.3-.1-.5-.2v.1c0 .1.1.3-.1.4-1 .5-1.9 1.1-2.7 1.8-.9.6-1.7 1.3-2.7 1.7-.4.2-.7.5-.8.9z" />
                                                    <path class="st26" d="M362.6 230.4z" />

                                                    <path class="st25"
                                                        d="M362.4 230.5c-.1 0-.3-.1-.4-.2-.1-.1-.1-.3-.1-.4h.2c.2 0 .4.2.4.4.1.2 0 .2-.1.2zm-.4-.5c0 .1 0 .2.1.2.1.1.3.2.5.1 0-.2-.2-.3-.3-.3h-.3c.1 0 .1 0 0 0z" />
                                                    <path class="st25"
                                                        d="M333.9 251.3h-.4v-.1c.4-.7.9-1.3 1.5-1.9.4-.3.7-.7 1-1.1.2-.2.3-.4.5-.6.3-.4.7-.7 1-1.1.5-.5.9-1 1.4-1.5l.6-.6c.4-.4.8-.9 1.2-1.3.4-.4.9-.7 1.4-1.1.2-.2.4-.3.6-.5-.7-1.1-1-2.2-1.4-3.4v-.1c-.2-.8-.7-1.6-1.3-2.2-.3-.3-.5-.6-.8-1l-.1-.2.5.4c.3.3.6.5 1 .8h.2s.1-.1.1-.2c-.1-.9-.7-1.5-1.2-2-.3-.3-.6-.6-.9-.8-.1-.1-.3-.3-.5-.4l-.1-.1h.1c.7-.1.7-.1.7-.6v-.3-.2h.1c.4.1.6.3.7.6.2.4.5 1 .9 1.4.1.2.3.3.4.3.2 0 .3-.2.4-.4v-.1c0-.1.1-.2.1-.2 0-.1 0-.1.1-.2.4-.9.2-1.6-.5-2.3l-.8-.8c-.1-.1-.2-.3-.4-.4v-.1c0-.2.2-.4.4-.6.2-.2.3-.3.4-.6.1-.4.1-.9.5-1.1h.1v.3c-.1.7-.2 1.4 0 2.1.1.5.3.8.7 1.1.1.1.3.1.4.1.1 0 .2-.1.2-.3.2-.6.3-1.3.4-1.9.1-.2.1-.5.2-.7.1 0 .2-.1.2-.3 0-.1.1-.2.1-.2l.1-.1v.1c.1.2.1.4.2.5.1 0 .2.1.2 0 .1 0 .1-.1.1-.3.6-1 1.1-2.1.8-3.3l-.1-.2.1.1c.5.5.5 1.1.4 1.7v.2c0 .6 0 .6.6.8.1 0 .2.1.4.1.1 0 .1 0 .2.1h.1v.2c0 .1 0 .1-.1.1-1.5.4-2.1 1.5-2.6 2.6-.1.1-.1.3-.2.4-.2.5-.4.9-.5 1.4 0 .1 0 .2.1.2.1.1.2.1.2.1.5-.1.9-.3 1.4-.6.3-.2.6-.5.9-.7.1-.1.3-.2.4-.4l.1-.1-.1.2c-.2.7-.7 1-1.2 1.4-.2.1-.3.2-.5.3-.2.1-.4.2-.5.3-.2.1-.2.2-.2.3 0 .1.1.2.3.3h.4l-.2.1s-.1 0-.1.1c-1.1.6-1.9 1.4-2.2 2.3-.1.2-.1.4-.1.6 0 .1 0 .2.1.2h.1c.3-.1.6-.2.8-.3 1.7-.5 3.4-1.1 4.3-2.8.1 0 .2-.1.3-.2v-.2c.1-.2.1-.4 0-.5l.1-.1.1-.1v.6c0 .2 0 .4.2.4.1 0 .2-.2.2-.4s.1-.3.1-.5v-.2c.1-.1.1-.3.1-.4.3-.2.3-.5.3-.8.5-1.3 1-2.4.9-3.8.3-.2.3-.5.2-.8l.3-.7.9-2.1v-.3-.1H351.3v.1c-.1.2-.1.4 0 .7v.7s.1.1.1.2c.1 0 .2 0 .2-.1.2-.2.4-.5.4-.8.6-.7 1.2-1.5 1.4-2.6H353.7v.9c0 .1.1.2.1.3h.3c.1 0 .1-.1.2-.2l.1-.1c.8-.3 1.6-.7 2-1.6v-.1l.1.1c.2.2.1.4.1.5 0 .1-.1.2 0 .3 0 0 0 .1-.1.1 0 .1-.1.2-.1.2s.1.1.2.1.2 0 .2-.1c.1 0 .3 0 .4.1h.1l-.1.1-.3.3c-.2.2-.5.4-.7.7v.2c0 .1 0 .2-.1.3-.1.1-.3.1-.4.2h-.2c-.8.2-1.4.5-1.9.9l-.3.3-.1.1c.1.2.3.2.5.3.2 0 .4.1.6.3v.1s-.1.1-.2.1c-2 0-3 1.4-3.7 2.8-.2.4-.4 1-.6 1.6-.3 1.4-.8 2.7-1.3 4.1-.1.4-.3.8-.4 1.1-.5 1.2-1.1 2.4-1.8 3.7-.2.2-.3.5-.4.7-.1.1-.1.2-.2.3l-.1.1c-.1.1-.2.2 0 .3.1.1.2.1.3-.1h.1c1.2-.6 2.3-1.4 3.3-2.3.3-.2.5-.4.8-.6 2.1-1.6 3.8-3.6 5.2-5.3.7-.8 1.4-1.6 2.2-2.3 0-.3.2-.5.4-.6l.2-.2c.3-.3.6-.7.9-1 .1-.1.2-.3.4-.4 1.1-1 1.9-2.2 2.8-3.4.1-.1.2-.3.3-.4.5-.7 1-1.5 1.5-2.2.2-.3.4-.6.6-1 0-.4.2-.7.3-1 0-.1.1-.1.1-.2.2-.3.3-.7.2-1v-.1h.1c.1 0 .2-.1.2-.2.7-.6 1.5-1.2 2.2-1.8.3.3.1.5 0 .7 0 0 0 .1-.1.1-.2.1-.3.3-.3.6-.3.1-.4.4-.5.7-.4 1.1-1 2.2-1.9 3.3 0 .3-.2.5-.3.7-.2.3-.3.5-.3.9-.6.2-.8.6-1.1 1-.1.2-.2.4-.4.6v.2l1.5.1-.2.1c-.2.1-.3.1-.5.2-.4.1-.8.3-1.1.6-.1.1-.2.2-.2.3 0 .1.1.3.2.4.3.3.7.3 1.1.3h.4l.3.1h-.3c-.4.1-1 0-1.5-.1-.1 0-.3 0-.4-.1-.6-.1-1 0-1.3.4-.2.2-.4.4-.5.7-.4.4-.7.9-1.1 1.4v.2c0 .1.1.1.2.1.5 0 1-.2 1.4-.4.1 0 .2-.1.3-.1.3-.1.6-.2.8.1.1.1.2.1.3.2.2 0 .3.1.4.2 1.8.1 3.7.1 5.5.2.4 0 .6 0 .8-.2.4.3.8.5 1.3.6h.1c.3.1.7.2.8.6 0 .4-.2.4-.5.5-.1 0-.2 0-.3.1-.1.1-.3.1-.4.1H369.6v-.1c-.1-.4-.3-.4-.6-.5h-.1c-1.9-.4-4-.5-6.7-.5-.2 0-.4.1-.6.1h-.1c-.1 0-.1.1-.1.1-1-.2-2-.1-3.4 0-.6.1-.9.6-1.2 1 0 .1-.1.2 0 .3 0 .1.2.2.3.2H358l-.2.1c-.2.1-.3.1-.5.2-.3.1-.6.3-1 .4-.8.3-1.6.8-2.4 1.6-2.8 2.8-5.9 5.5-9.2 8-.4.3-.7.5-.9.8 0 0-.1.1-.1.2v.1s.1.1.2.1c1.3 0 2.4-.3 3.4-.7 1.1-.4 1.8-.9 2.1-1.8.3-.7.7-1.2 1.3-1.4h.1v.1c0 .2-.2.4-.3.5-.2.2-.3.4-.2.8l.1.1c.2.1.7-.2 1.3-.6.6-.5 1-1 1.3-1.6.1-.3.2-.5.3-.7 0-.1.1-.2.1-.3l.1-.1v.6c0 .3 0 .5.2.8.4-.1.6-.4.8-.6l.6-.6h.1v.1c.1.6-.2 1.1-.5 1.4l-.3.3c-.1.1-.2.2-.3.4 0 .1-.1.2-.1.2.1.1.2.1.3.1.5-.1.9-.5 1.3-1.2.5-.9 1.3-1.5 2.5-1.8l.2-.1.7-.2c-.7.7-1.2 1.1-1.6 1.8l-.1.1c-.2.2-.3.4-.2.6.1.2.3.2.6.1.1 0 .1 0 .2-.1.4-.1.8-.1 1.2-.2.2 0 .4-.1.6-.1l.1-.1c.1-.1.2-.2.3-.2 1.5-.1 2.5-.8 3-2v-.1h.1c.5.5.3.9.1 1.2-.1.2-.2.4-.2.6.4.2.7.1 1.1 0 .2-.1.4-.1.6-.2h.1v.1c-.3.7-.9.9-1.5 1.1-.1 0-.2.1-.3.1-.2.1-.4.1-.6.1h-.5c-.4.1-.7.2-.9.6l.3.2c.1 0 .2.1.3.1.2.1.5.2.7.3 1.3.7 2.6.8 3.9.1.2-.1.3-.1.4-.1.1.1.1.2.1.5s.1.5.5.5c.2 0 .5 0 .7-.1.4-.1.9-.2 1.5 0h.1l-.1.1c-1.1.6-2.2 1-3.3 1.2-.1.3 0 .5.3.7 1.1.5 2.3 1.1 3.6.8h.2c.1 0 .2.1.2.2s0 .3-.1.3h-.1c-.3.1-.6.3-.9.4h-1-.1c-.2 0-.3 0-.3.2s.1.3.2.5c.1.1.2.3.4.4l.7.7s.1.2 0 .2c0 .1 0 .1-.1.1-.1.1-.3.2-.4.2-.2 0-.4-.1-.5-.3l-.1-.1-.2-.2c-.1-.2-.3-.3-.5-.3h-.1c-.1.2-.1.4-.1.7 0 .3 0 .5-.1.8-.5-.2-.6-.6-.7-.9 0-.2-.1-.3-.2-.5-.1-.1-.1-.3-.2-.4-.2-.4-.3-.7-.7-1-.2.1-.3.3-.5.5-.3.4-.7.8-1.4.8h-.1v-.1c.5-1.1.7-2 .2-2.9 0-.1 0-.2.1-.3l-.3-.3c-.3-.4-.7-.8-1.2-1-.1-.1-.3-.2-.4-.1-.1 0-.1.1-.1.3 0 .3 0 .7.1 1 0 .1 0 .3.1.4 0 .3.2.3.5.3h.2l-.1.1c-.5.3-.9.7-1 1.3l-.6 1.8c-.1.2-.1.4-.2.6 0 .1-.2.2-.2.2-.1 0-.2-.1-.3-.2 0-.1-.1-.2-.1-.4-.1-.4-.3-.8-.3-1.2 0-.5-.1-.5-.7-.5-.4 0-.5-.2-.5-.5.1 0 .1-.1.2-.1.2-.1.3-.1.5-.2 1-.4 1.6-1.3 1.5-2.3 0-.5-.2-.9-.6-1.2-.4-.4-.8-.7-1.6-.8.1.2.2.4.4.5.4.5.8 1.1.5 2l-.1.2v-.2c-.1-.3-.1-.5-.3-.8 0 0 0-.1-.1-.1l-.3-.6c-.3-.4-.7-.7-1.2-.9-.4-.2-.9-.2-1.3-.2h-.3c-1 0-2.3.1-3.5.5-.4.1-.7.3-1.1.4-.4.1-.9.3-1.3.5-1.9.7-3.9 1.1-6.1 1.2-.4 0-.8.1-1.3.4-2 1.1-3.3 2.8-4.4 4.5-.2.4-.4.8-.5 1.2 0 .1-.1.3-.1.4v.1c0 .1.1.1.2.1h1l-.4.1c-.3.1-.5.1-.8.2l-1.8.3c-.2 0-.5.1-.7.2-.6.3-.9.4-1.2.4zm-.2-.1c.4 0 .7-.1 1.1-.2.2-.1.5-.1.7-.2l1.8-.3c.1 0 .2 0 .4-.1h-.2c-.1 0-.2-.1-.3-.1 0-.1-.1-.1 0-.2 0-.1.1-.3.1-.4.1-.4.3-.9.5-1.3 1.2-1.7 2.5-3.4 4.5-4.5.5-.3.9-.4 1.3-.4 2.3-.1 4.2-.4 6.1-1.2.4-.2.9-.3 1.4-.5.4-.1.7-.2 1.1-.4 1.2-.5 2.5-.5 3.5-.5h.3c.5 0 .9.1 1.4.2.5.2.9.5 1.2.9.1.2.2.4.4.6 0 0 0 .1.1.1.1.2.2.4.2.7.2-.8-.1-1.2-.5-1.7-.1-.2-.3-.4-.4-.6v-.1h.1c.8 0 1.3.4 1.7.8.3.3.5.8.6 1.2.1 1.1-.5 2-1.6 2.4-.2.1-.3.1-.5.2-.1 0-.1.1-.2.1 0 .2.1.4.4.4.6 0 .7 0 .8.6 0 .4.2.8.3 1.2 0 .1.1.2.1.4 0 .1.1.1.2.1 0 0 .1-.1.2-.1.1-.2.1-.4.2-.6l.6-1.8c.2-.6.5-1 .9-1.3-.2 0-.5-.1-.5-.4 0-.1 0-.3-.1-.4 0-.3-.1-.7-.1-1 0-.2.1-.3.2-.3.2-.1.4 0 .5.1.5.2.9.6 1.2 1l.3.3c0 .1 0 .2-.1.3.6.9.3 1.8-.1 2.9.6-.1.9-.4 1.2-.8.2-.2.3-.4.6-.5.4.3.5.7.7 1.1.1.1.1.3.2.4.1.1.1.3.2.5.1.4.2.7.6.8.1-.2.1-.4.1-.7 0-.3 0-.5.2-.8h.1c.3 0 .5.2.6.4l.2.2.1.1c.1.1.3.3.5.3.1 0 .2-.1.4-.1v-.2c-.2-.3-.4-.5-.7-.7-.1-.1-.2-.3-.4-.4-.1-.1-.3-.3-.2-.6.1-.3.3-.3.4-.3h1l.9-.3h.1s.1-.1.1-.2l-.1-.1h-.1c-1.4.3-2.6-.3-3.7-.8-.3-.2-.4-.4-.3-.8 1.1-.2 2.1-.6 3.2-1.1-.5-.1-.9-.1-1.3.1-.2.1-.5.1-.8.1-.4 0-.6-.3-.6-.6 0-.2 0-.4-.1-.4 0 0-.2 0-.3.1-1.3.7-2.6.6-4-.1-.2-.1-.4-.2-.7-.3-.1 0-.2-.1-.3-.1l-.3-.2c-.2 0-.4-.1-.4-.2l.1-.1c.1.1.2.2.4.2.1-.5.5-.6.9-.7h.5c.2 0 .4 0 .6-.1.1 0 .2-.1.3-.1.6-.2 1.1-.3 1.4-.9-.2 0-.3.1-.5.2-.4.1-.8.3-1.2 0 0-.2.1-.5.2-.7.2-.3.3-.7-.1-1.1-.6 1.2-1.6 1.9-3.1 2-.1 0-.1.1-.2.1l-.1.1c-.2 0-.4.1-.6.1-.4.1-.8.1-1.2.2h-.2c-.2.1-.5.1-.7-.2-.1-.3 0-.5.2-.7l.1-.1c.4-.6.8-1 1.5-1.6-1.1.3-1.8.9-2.3 1.7-.2.5-.6 1-1.3 1.2-.2.1-.4 0-.5-.1 0-.1 0-.2.1-.3.1-.1.2-.3.3-.4l.3-.3c.3-.3.5-.7.5-1.3-.2.1-.4.3-.5.5-.2.3-.5.6-.9.7-.2-.3-.2-.6-.2-.9v-.3s0 .1-.1.1c-.1.2-.2.5-.3.8-.3.6-.7 1.2-1.3 1.7-.6.4-1.1.7-1.4.6-.1 0-.1-.1-.2-.1-.2-.4 0-.6.2-.9.1-.1.2-.3.2-.4-.5.2-.9.7-1.2 1.3-.4.9-1.1 1.5-2.2 1.8-1 .3-2.2.7-3.4.7-.1 0-.2 0-.3-.1 0 0-.1-.1-.1-.2s0-.2.1-.3c.3-.2.6-.5.9-.8 3.4-2.5 6.5-5.2 9.2-8 .8-.8 1.5-1.3 2.4-1.6.3-.1.6-.3 1-.4.1 0 .2-.1.3-.1h-.5c-.2 0-.3-.1-.4-.3v-.3c.3-.5.6-1 1.3-1.1 1.3-.2 2.4-.2 3.4 0 0-.1.1-.2.2-.2h.1c.2-.1.4-.1.7-.1 2.7 0 4.8.1 6.7.5h.1c.3.1.6.1.7.5h.1c.1 0 .3-.1.4-.1.1-.1.2-.1.3-.1.3 0 .4-.1.4-.4 0-.3-.4-.4-.7-.5h-.1c-.5-.1-.9-.3-1.3-.6-.2.1-.5.2-.8.2h-.1c-1.8-.1-3.7-.1-5.5-.2-.1-.1-.2-.2-.4-.2-.1 0-.3-.1-.4-.2-.2-.3-.4-.2-.7-.1-.1 0-.2.1-.3.1-.4.2-.9.4-1.4.4-.1 0-.2-.1-.3-.1-.1-.1-.1-.3 0-.3.4-.5.7-.9 1.1-1.4.2-.2.4-.4.5-.7.4-.5 1-.5 1.4-.4.1 0 .3 0 .4.1h.3c-.1-.1-.2-.1-.3-.2-.1-.1-.2-.3-.2-.5s.1-.3.2-.4c.3-.3.7-.4 1.1-.6.1 0 .2-.1.3-.1l-1.1-.1v-.1c0-.1-.1-.2 0-.2.1-.2.3-.4.4-.6.3-.4.6-.9 1.1-1.1 0-.3.2-.6.3-.9.1-.2.3-.4.3-.7v-.5-.3h.1v.8c.9-1.1 1.4-2.1 1.8-3.2.1-.3.2-.6.6-.8 0-.3.1-.5.3-.7 0 0 0-.1.1-.1.1-.2.2-.4 0-.6-.7.6-1.4 1.1-2.2 1.7 0 .1-.1.3-.3.3.1.4-.1.7-.2 1.1 0 .1-.1.1-.1.2-.2.3-.3.6-.3 1-.2.3-.4.6-.6 1-.5.7-1 1.5-1.5 2.2-.1.1-.2.3-.3.4-.8 1.2-1.7 2.4-2.8 3.4-.1.1-.2.3-.3.4-.3.3-.6.6-.9 1l-.2.2c-.2.2-.4.3-.4.6-.8.7-1.5 1.4-2.2 2.3-1.4 1.7-3.2 3.7-5.2 5.3-.3.2-.5.4-.8.6-1 .8-2.1 1.7-3.4 2.3-.1.1-.3.3-.5.1-.2-.2-.1-.4 0-.5v-.1c.1-.1.1-.2.2-.3.1-.3.3-.5.4-.8.8-1.2 1.4-2.4 1.8-3.7.1-.4.3-.8.4-1.1.5-1.3 1-2.7 1.3-4 .2-.6.3-1.1.6-1.6.7-1.4 1.7-2.9 3.8-2.9h.1c-.1-.2-.3-.2-.5-.2s-.5-.1-.6-.3l.1-.1.3-.3c.5-.4 1.2-.7 1.9-.9h.2c.1 0 .3 0 .4-.1v-.2-.3c.2-.3.4-.5.7-.7l.2-.2h-.3c-.1.1-.2.1-.3.1-.1 0-.2 0-.2-.1v-.3-.1-.4c0-.1.1-.2 0-.4-.4.9-1.2 1.3-2 1.6l-.1.1c-.1.1-.1.2-.2.2-.2.1-.3.1-.4 0-.1 0-.2-.1-.2-.3v-.5-.2h-.1c-.2 1.1-.8 1.9-1.4 2.6-.1.3-.2.6-.4.8-.1.1-.2.1-.3.1-.1 0-.2-.2-.2-.2v-.5-.2c-.1-.1-.1-.3-.1-.4v.1l-.9 2.1-.3.7c0 .3.1.6-.3.8 0 1.3-.4 2.5-.9 3.8 0 .3 0 .6-.3.8.1.1 0 .3-.1.4v.2c0 .2-.1.3-.1.5s-.1.5-.3.5c-.1 0-.2-.1-.3-.2v.1c-.1.1-.2.2-.3.2-.9 1.8-2.7 2.3-4.3 2.9-.3.1-.6.2-.8.3h-.2c-.1-.1-.1-.2-.2-.3 0-.2 0-.4.1-.6.4-1 1.1-1.8 2.3-2.4h-.1c-.2-.1-.3-.2-.3-.3 0-.1.1-.2.3-.4.2-.1.4-.2.5-.3.2-.1.3-.2.5-.3.5-.3.9-.6 1.1-1.2-.1.1-.2.2-.3.2-.3.2-.6.5-.9.7-.5.4-.9.6-1.4.6-.1 0-.2 0-.3-.1-.1-.1-.1-.2-.1-.3.1-.5.3-1 .5-1.5.1-.1.1-.3.2-.4.4-1 1.1-2.2 2.6-2.6v-.1h-.1c-.1 0-.2-.1-.4-.1-.7-.2-.7-.2-.7-.9v-.2c0-.5 0-1-.3-1.4.3 1.2-.2 2.3-.8 3.2 0 .1-.1.3-.2.4h-.3c-.1-.2-.1-.3-.2-.5 0 0 0 .1-.1.1 0 .1-.1.3-.3.3-.1.2-.1.5-.2.7-.1.6-.3 1.3-.4 1.9 0 .2-.1.3-.3.3-.2.1-.4 0-.5-.1-.4-.3-.6-.7-.7-1.2-.2-.7-.1-1.4 0-2.1v-.1c-.3.2-.4.7-.4 1 0 .3-.2.5-.4.6-.1.1-.3.3-.3.5 0 0 0 .1.1.1v.1c.1.1.2.2.3.4.3.3.5.6.8.8.7.7.9 1.5.5 2.4 0 .1 0 .1-.1.2 0 .1-.1.2-.1.2v.1c-.1.2-.2.5-.5.5-.2 0-.4-.2-.5-.4-.3-.5-.6-1-.9-1.4-.2-.3-.3-.5-.6-.5v.4c0 .5 0 .6-.7.7.1.1.3.2.4.3.3.3.6.6.9.8.5.5 1.1 1.2 1.2 2.1 0 .1-.1.2-.1.3-.1.1-.3.1-.3 0-.3-.3-.7-.5-1-.8.2.3.4.5.6.7.6.7 1 1.4 1.3 2.2v.1c.3 1.1.7 2.3 1.4 3.4-.2.2-.5.3-.7.5-.5.4-1 .7-1.4 1.1-.4.4-.8.8-1.2 1.3l-.6.6c-.5.5-.9 1-1.4 1.5-.3.4-.7.7-1 1.1-.2.2-.3.4-.5.6-.3.4-.7.8-1.1 1.1-.4-.3-.8.3-1.2 1zm9.6-9.8s-.1 0 0 0c-.2 0-.4-.2-.6-.5-.2-.4-.3-.9-.5-1.4-.1-.3-.1-.6-.2-.9 0-.9.3-1.6.9-2 .6-.4 1.4-.4 2.3-.1.1 0 .1.1.2.1.1.1.3.2.4.1 0-.1-.1-.2-.2-.3l-.1-.1c-.1-.1-.1-.1-.2-.1-.2-.1-.4-.2-.3-.5.1-.3.4-.3.7-.3h1c.1 0 .2.1.2.1.1.1.1.2.1.3 0 .2 0 .3-.1.5-.3 1-.8 2-1.5 2.9-.5.7-1 1.4-1.6 2-.1 0-.3.2-.5.2zm.7-5.2c-.4 0-.8.1-1 .3-.5.4-.8 1.1-.8 2 0 .3.1.6.1.9.2.6.3 1 .5 1.4.1.3.3.5.4.5.2 0 .4-.1.6-.4.6-.7 1.1-1.4 1.6-2 .6-.8 1.1-1.8 1.5-2.8 0-.1.1-.3.1-.4 0-.1 0-.1-.1-.2 0 0-.1-.1-.2-.1h-.9-.2c-.3 0-.5 0-.6.3-.1.2 0 .3.2.4.1 0 .2.1.3.2l.1.1c.1.1.2.2.2.4-.2.1-.4 0-.5-.1-.1 0-.1-.1-.2-.1-.4-.3-.7-.4-1.1-.4z" />

                                                    <path class="st26"
                                                        d="M347.8 231.4c0 .1 0 .1 0 0 0 .1 0 .1 0 0 .1.1 0 0 0 0zM364.8 238.6c0 .1 0 .1 0 0 0 .1 0 .1 0 0zM365.7 217.2zM367.9 216.6c-.1 0-.1 0 0 0z" />
                                                </g>
                                                <circle class="st23" cx="202.1" cy="233.4" r=".6" />
                                                <circle class="st23" cx="203.2" cy="230.9" r=".7" />
                                                <circle class="st23" cx="205.4" cy="232.2" r=".5" />
                                                <circle class="st23" cx="205" cy="229.6" r=".4" />
                                                <circle class="st23" cx="200" cy="232.2" r=".5" />
                                                <circle class="st23" cx="201.7" cy="229.1" r=".5" />
                                                <circle class="st23" cx="208.5" cy="208.3" r=".7" />
                                                <circle class="st23" cx="205.8" cy="208.8" r=".8" />
                                                <circle class="st23" cx="206.8" cy="206.5" r=".6" />
                                                <circle class="st23" cx="209.4" cy="205.5" r=".6" />
                                                <circle class="st23" cx="207.3" cy="203.4" r=".6" />
                                                <circle class="st23" cx="203.7" cy="206.3" r=".2" />
                                                <circle class="st23" cx="210" cy="207.1" r=".5" />
                                                <circle class="st23" cx="182.6" cy="208.9" r=".7" />
                                                <circle class="st23" cx="183.7" cy="207.1" r=".5" />
                                                <circle class="st23" cx="179.9" cy="209.2" r=".5" />
                                                <circle class="st23" cx="181.2" cy="211.3" r=".8" />
                                                <circle class="st23" cx="181.8" cy="206.5" r=".1" />
                                                <circle class="st23" cx="375.7" cy="231" r=".5" />
                                                <circle class="st23" cx="377.8" cy="229.7" r=".5" />
                                                <circle class="st23" cx="379.3" cy="233" r=".9" />
                                                <circle class="st23" cx="379.3" cy="231" r=".6" />
                                                <circle class="st23" cx="375.8" cy="233.3" r=".6" />
                                                <circle class="st23" cx="376.9" cy="227.8" r=".5" />
                                                <circle class="st23" cx="373.1" cy="208.1" r="1.1" />
                                                <circle class="st23" cx="371.1" cy="206" r=".8" />
                                                <circle class="st23" cx="373.5" cy="204.7" r=".5" />
                                                <circle class="st23" cx="375.5" cy="208.3" r=".7" />
                                                <circle class="st23" cx="375.4" cy="205.9" r=".7" />
                                                <circle class="st23" cx="399.7" cy="208.7" r=".6" />
                                                <circle class="st23" cx="397.6" cy="207.2" r="1.2" />
                                                <circle class="st23" cx="399.9" cy="206" r=".5" />
                                                <circle class="st23" cx="401.5" cy="210.8" r=".4" />
                                                <g class="st2">
                                                    <path class="st35"
                                                        d="M291.7 237.9c-.1 0-.1 0 0 0-.4-.1-.5-.3-.5-.6l.4-2.2c0-.3.3-.5.6-.4.3 0 .5.3.4.6l-.4 2.2c-.1.3-.3.4-.5.4z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st35"
                                                        d="M282.6 222.4c-.2 0-.3-.1-.4-.2-.1-.2-.1-.5.2-.7l1.7-1c.2-.1.5-.1.7.2.1.2.1.5-.2.7l-1.7 1h-.3z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st35"
                                                        d="M283.8 223.9c-.1 0-.3-.1-.4-.2-.2-.2-.1-.5.1-.7l1.4-1.2c.2-.2.5-.1.7.1.2.2.1.5-.1.7l-1.4 1.2c0 .1-.2.1-.3.1z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st35"
                                                        d="M283.8 225.5c-.2 0-.3-.1-.4-.2-.2-.2-.1-.5.1-.7l2.2-1.5c.2-.2.5-.1.7.1.2.2.1.5-.1.7l-2.2 1.5c-.1 0-.2.1-.3.1z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st35"
                                                        d="M285.3 226.6c-.1 0-.2 0-.3-.1-.2-.2-.3-.5-.1-.7l1-1.5c.2-.2.5-.3.7-.1.2.2.3.5.1.7l-1 1.5c-.1.1-.3.2-.4.2z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st35"
                                                        d="M285.3 228.1c-.1 0-.3-.1-.4-.2-.2-.2-.2-.5 0-.7l2.4-2.1c.2-.2.5-.2.7 0s.2.5 0 .7l-2.4 2.1c-.1.2-.2.2-.3.2z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st35"
                                                        d="M286.3 229.3c-.1 0-.2 0-.3-.1-.2-.2-.3-.5-.1-.7l.9-1.2c.2-.2.5-.3.7-.1.2.2.3.5.1.7l-.9 1.2c-.1.2-.2.2-.4.2z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st35"
                                                        d="M286.5 232c-.1 0-.2 0-.3-.1-.2-.2-.3-.5-.1-.7l1.9-2.4c.2-.2.5-.2.7-.1.2.2.3.5.1.7l-1.9 2.4c-.2.2-.3.2-.4.2z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st35"
                                                        d="M286.8 233.1c-.1 0-.2 0-.3-.1-.2-.2-.3-.5-.1-.7l1.6-2.1c.2-.2.5-.3.7-.1.2.2.3.5.1.7l-1.6 2.1c-.1.1-.3.2-.4.2z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st35"
                                                        d="M288.4 233.6c-.2 0-.3-.1-.4-.2-.1-.2-.1-.5.2-.7l1.6-1c.2-.2.5-.1.7.2.1.2.1.5-.2.7l-1.6 1h-.3z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st35"
                                                        d="M288.4 235.8c-.1 0-.2 0-.3-.1-.2-.2-.2-.5-.1-.7l1.6-2c.2-.2.5-.2.7-.1.2.2.2.5.1.7l-1.6 2c-.1.1-.3.2-.4.2z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st35"
                                                        d="M290 236.4c-.1 0-.2 0-.3-.1-.2-.2-.2-.5 0-.7l1.1-1.2c.2-.2.5-.2.7 0 .2.2.2.5 0 .7l-1.1 1.2c-.1 0-.2.1-.4.1z" />
                                                </g>
                                                <linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse"
                                                    x1="294.922" y1="211.22" x2="320.17" y2="211.22">
                                                    <stop offset="0" stop-color="#e4a747" />
                                                    <stop offset=".505" stop-color="#f5c85d" />
                                                    <stop offset="1" stop-color="#e4a747" />
                                                </linearGradient>
                                                <path
                                                    d="M320.1 209.7c-.4.8-.8 1.6-1.3 2.4-.5.8-1.3 1.4-2.2 1.8-1.7.6-4.7-.4-5.4-3-.4-1.4-.2-2.8.1-4.2.3-1 .9-1.8 1.9-2.3.5-.2 1-.4 1.6-.6.3-.1.5-.2.6-.4-.6-.5-1.4-.8-2.1-1.1l-.1.1c-.3.3-.3.9-.8.7-.6-.2-.1-.7-.1-1.1-.4-.1-.8-.3-1.1-.4-.3 0-.5 0-.7-.2-.4 0-.8 0-1.2-.1h-.8l-.3.3c-.2.3-.4.4-.6.1-.3-.4-.7-.5-1.2-.5-2.7.2-5.2.9-7.4 2.4v.5c0 .2.2.4.4.3.2-.1.5-.2.7-.3 1.3-.7 2.5-.7 3.8-.2.1.1.3.1.4.2 1.7.6 2.5 1.8 2.5 3.6 0 .7.1 1.4 0 2.1-.1 2.2-1.7 3.9-3.9 4-1.6.1-3-.6-4-1.9-.7-.9-1.1-2.1-1.1-3.3v-1.8c-.7 0-1.3-.4-1.9-.3 0 .1-.1.2-.1.3-1.3 2.3-1.3 4.5.1 6.8.1.2.3.3.3.6.7.8 6.6 7.1 12 7.1H308.5c.4 0 .9-.1 1.3-.2.1-.1.2-.1.4-.1 1.1-.5 2.3-.9 3.4-1.6l1.5-.9c0-.1.1-.2.3-.2.1-.1.2-.1.3-.2.4-.3.7-.7 1.1-1 .8-.7 1.5-1.5 2.1-2.4 1-1.6 1.5-3.2 1.2-5zm-8.9 6.7c-.5.8-1.2 1.2-2 1.3-1.3 0-2.5-.9-2.8-2.1 0-.1.1-.2.1-.3.1-.1.2-.1.3-.1.1 0 .3.1.4.2.1.1.2.3.4.5 1 1.2 2.1 1.2 3 0 .2-.2.2-.6.6-.5.3.2.3.6 0 1z"
                                                    fill="url(#SVGID_7_)" />
                                                <g class="st2">
                                                    <path class="st37"
                                                        d="M296.9 224.6h-.1c-.3-.1-.4-.3-.4-.6l.6-2.6c.1-.3.3-.4.6-.4.3.1.4.3.4.6l-.6 2.6c-.1.3-.3.4-.5.4z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st37"
                                                        d="M296 223.3h-.2c-.3-.1-.4-.4-.2-.7l.9-2c.1-.3.4-.4.7-.2.3.1.4.4.2.7l-.9 2c-.2.1-.3.2-.5.2z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st37"
                                                        d="M295.1 222.2s-.1 0 0 0c-.3 0-.5-.3-.5-.6l.3-2.4c0-.3.3-.5.6-.4.3 0 .5.3.4.6l-.3 2.4c-.1.2-.3.4-.5.4z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st37"
                                                        d="M299.7 225.3c-.3 0-.5-.2-.5-.5v-2.4c0-.3.2-.5.5-.5s.5.2.5.5v2.4c0 .2-.3.5-.5.5z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st37"
                                                        d="M301.3 226c-.3 0-.5-.2-.5-.4l-.3-2.4c0-.3.2-.5.4-.6.3 0 .5.2.6.4l.3 2.4c0 .3-.2.5-.5.6z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st37"
                                                        d="M306.4 226.9c-.2 0-.4-.1-.5-.3l-1-2.3c-.1-.3 0-.5.3-.7.3-.1.5 0 .7.3l1 2.3c.1.3 0 .5-.3.7h-.2z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st37"
                                                        d="M303.9 230c-.2 0-.4-.1-.4-.3l-.9-1.8c-.1-.2 0-.5.2-.7.2-.1.5 0 .7.2l.9 1.8c.1.2 0 .5-.2.7-.2 0-.3.1-.3.1z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st37"
                                                        d="M301.3 228.7h-.1l-2-.6c-.3-.1-.4-.4-.3-.6.1-.3.4-.4.6-.3l2 .6c.3.1.4.4.3.6-.1.2-.3.3-.5.3z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st37"
                                                        d="M300.3 229.4c-.3 0-.5-.2-.5-.5v-1.3c0-.3.2-.5.5-.5s.5.2.5.5v1.3c0 .3-.2.5-.5.5z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st37"
                                                        d="M296.4 227.7c-.2 0-.3-.1-.4-.2l-.4-.7c-.2-.2-.1-.5.1-.7.2-.2.5-.1.7.1l.4.7c.2.2.1.5-.1.7-.1.1-.2.1-.3.1z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st37"
                                                        d="M294.6 226c-.1 0-.3 0-.3-.1l-1.2-1.2c-.2-.2-.2-.5 0-.7.2-.2.5-.2.7 0l1.2 1.2c.2.2.2.5 0 .7-.1 0-.3.1-.4.1z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st37"
                                                        d="M292.8 227.1h-.1c-.3-.1-.4-.3-.4-.6l.5-2.3c.1-.3.3-.4.6-.4.3.1.4.3.4.6l-.5 2.3c0 .3-.2.4-.5.4z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st37"
                                                        d="M294.2 216.1c-.2 0-.4-.1-.5-.3-.1-.3 0-.5.3-.6l2-.7c.3-.1.5 0 .6.3s0 .5-.3.6l-2 .7h-.1z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st37"
                                                        d="M311.4 222.5h-.1l-3-.8c-.3-.1-.4-.3-.4-.6.1-.3.3-.4.6-.4l3 .8c.3.1.4.3.4.6-.1.2-.3.4-.5.4z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st37"
                                                        d="M309.7 224.1c-.2 0-.3-.1-.4-.2l-1.2-1.8c-.2-.2-.1-.5.1-.7.2-.2.5-.1.7.1l1.2 1.8c.2.2.1.5-.1.7-.1.1-.2.1-.3.1z" />
                                                </g>

                                                <path class="st10"
                                                    d="M367.1-11c.3-1.2.7-2.5 1.1-3.8 1.5-4.6 3-9.3 4.5-13.8l.1-.4c.4-1.3.7-2.7.9-4.1.3-2.7.7-5.1 1.4-7.3.5-1.6.8-3 .9-4.2 0-.7.1-1.5.1-2.2.1-1.5.1-3.1.3-4.6.2-2 .6-3.7 1.1-5.3.2-.5.4-1 .5-1.6.1-.3.2-.7.3-1 .1-.5.3-1.1.5-1.7 1.1-3.1 1.5-5.6 1.3-8-.1-.8 0-1.6 0-2.3 0-.9-.1-1.7-.2-2.6-.1-.8-.3-1.6-.4-2.4-.2-1-.3-2-.5-2.9-.2-1.1-.3-2.3-.5-3.4l-.2-1.4c-.1-.9-.4-1.8-.6-2.7-.2-.7-.4-1.3-.5-2-.2-1-.5-2.1-.9-3.1-.7-1.6-1.5-3.3-2.9-4.6-.5-.5-1-1-1.3-1.7-.1-.4-.5-.7-.8-1l-.1-.1c-.9-.8-1.9-1.6-2.8-2.4l-.8-.7-.2-.2-.1-.1c-.7.1-1.2-.4-1.4-.6-.7-.7-1.4-1.2-2.3-1.8l-.2-.1c-.8-.5-1.4-1.2-1.9-1.7-.8-.8-1.6-1.6-2.6-2.2-1.8-1.2-3.8-1.7-5.5-2.1-.3-.1-.6-.1-.8-.1l-.3.1-.6-1 .4-.5-8.3-2.9c-.9-.3-.9-.3-1.8 0l-.1.1-.8-.2c-.1 0-.1-.1-.2-.1s-.1-.1-.2-.1c-1.3-.2-2.5-.7-3.7-1.2-.7-.3-1.3-.5-2-.8-.4-.1-.7-.4-1.1-.6l-.2-.2c-1-.6-1-.6-2-.2l-.4.2-.5-.8c-.2-.3-.4-.7-.6-1l-.1-.1c-.5-.8-1-1.6-1.7-2.2-.6-.5-1.2-1-1.7-1.5-.4-.4-.8-.8-1.2-1.1-.5-.5-1.1-.8-1.8-1.3-.4-.3-.7-.4-1-.3h-.4c-.3-.1-.7-.2-.9-.7-.1-.1-.1-.3-.2-.4-.2-.5-.5-1.1-.6-1.7-.3-.8-.6-1.6-.7-2.7-.3-1.1-.4-2.3-.4-3.1-.1-2.4-.1-5 .3-7.5l.1-.4h.5v-.2-.4l-.4-.1-.1-.4c-.1-1.5-.1-3.5.5-5.4.3-.9.5-1.8.7-2.7l.3-1.2c-.1-.9.2-1.7.4-2.4l.1-.5h.5c2.3.6 4.1-.1 5.7-2.3.5-.8 1.1-1.5 1.6-2.3.2-.3.4-.7.7-1l.4-.9c.3-.7.6-1.5.9-2.2.9-2.2 1.3-4.6 1.3-7v-3l-.1-.8c-.1-.6-.1-1.3-.2-1.9-.1-1.5-.5-2.9-.8-4.3l-.2-.7c-.1-.5-.3-.9-.6-1.1l-.1-.1-.1-.2c-.1-.1-.2-.2-.4-.3-.9-.5-1.1-.8-.6-1.8.4-.8 1-1.9 1.7-2.9.2-.2.3-.5.4-.7.1-.1.2-.3.2-.4 0-1.4.1-3-.1-4.5-.1-1-.1-2-.1-2.9v-4.1c-.2-1-.1-2.2-.1-3.3v-1.3c0-.4-.1-.8-.2-1.3-.1-.6-.2-1.1-.2-1.7-.1-.8-.3-1.6-.6-2.4-.3-.9-.6-1.9-.7-3l-.1-.1-.7-1.9.1-.2c.3-.5.8-.8 1.2-.9.2-.1.4-.2.5-.3.2-.1.3-.2.5-.3.1-.1.2-.1.3-.2.4-.3.8-.7 1-1.1.2-.3.2-.5.1-.5 0-.1-.2-.2-.5-.2h-.2c-1.8-.1-3.3-.8-4.7-2.1-1.6-1.6-2.8-2.9-3.9-4.2-.5-.6-.9-1.1-1.3-1.4-1.3-1.3-2.8-2.6-4.2-3.9-1.3-1.1-3-2.5-5.1-3-.4-.1-.8-.2-1.3-.3-1.1-.3-2-.6-3.1-.6-.4 0-.7-.2-1-.4-.8-.6-1.7-.8-2.8-1h-.2c-1.8-.4-3.6-.7-5.4-.5-1.3.2-2.7.4-4.5.8-1.8.4-3.9.8-5.8 1.9-1.5.8-3 1.1-4.4 1.3h-.8c-1.8.2-3.5.4-5 1.1l-.3.1c-.4.2-.7.3-1 .5-.4.3-.9.2-1.2.1-.2 0-.3-.1-.4 0-.2.1-.3.1-.5.1h-.2c-.5.1-.9.3-1.4.4-1 .3-2.1.6-3.1.9-2.1.7-3.5 1.9-4.4 3.7-1 1.9-2.1 3.6-3.2 4.9-1 1.2-2 2-3.2 2.6-.7.4-1.2.8-1.4 1.3-.3.7-.7 1.3-1.1 1.9l-.3.5c-1.3 1.9-2 3.8-2 5.9v2.9l-.2 4.6c.3.4.3.8.3 1 0 .5.1 1 .2 1.6v.1l.2 2.7.4 1.8c.4 1.8.9 3.6 1.3 5.3.1.4.2.8.3 1l.4.6c.6 1.1 1.2 2.2 2 3.1l-.1.1h.2v.2l.3 1.1-.4.1v.1l-.1-.1-.2.1c-.2.1-.3.1-.6.2s-.4.1-.5.2l-.1.1h-.1c-.7.2-1.2.7-1.5 1.7-.1.5-.3 1-.3 1.6-.3 2-.3 3.7-.1 5.3.1.4.1.8.1 1.3v.6c.1.4.1.8.2 1.3.2 1 .3 1.9.4 2.9.4 3 .5 5.3.5 7.5l.1.4c.1.4.1.7.2 1.1.1 1.1.6 2.1 1.6 3 .5.5 1.1 1 1.7 1.5l.7.7c.5.3.6.9.6 1.2.1.9.3 1.8.4 2.8.3 2.4 1 4.5 2 6.5.1.1.2.3.2.4.3.5.5 1 .7 1.5.1.1.1.2.2.3.2.3.4.6.5.9 1.1 2.4 2.5 4.6 3.6 6.3.1.1.1.3.2.4v.1l1.5 2.3c.3.3.6.7.9 1 .3.4.5.7.8 1 .5.4.6 1 .7 1.5.3 1.8.4 3.6.4 5.5 0 .4-.2.7-.3 1l.1 1.4h-1v-.6c-.2.3-.5.5-.7.7-.2.1-.3.3-.4.4l-.6.6c-.5.5-.9 1-1.3 1.5-.8 1-1.8 1.8-2.7 2.5l-.5.4c-1.2 1-2.5 1.9-3.9 2.7-1.4.9-2.8 2-4.2 3l-.7.5c-.3.2-.7.5-1.3.3-.3-.1-.4 0-.5.1-.4.5-1 .7-1.5 1-.2.1-.4.2-.7.4l-.4.3-.3-.4c-.4-.6-.8-.8-1.4-.5-.5.2-.9.3-1.4.4-.2 0-.5.1-.7.2l-2.2.5c-1.4.3-2.8.7-4.2 1-.9.2-1.4.6-1.7 1.3 0 .1-.1.2-.2.3l-.1.2-.3.1c-.4 0-.9.2-1.3.4s-.8.3-1.2.4c-2.7.2-5.3.5-7.9 1.1-.1 0-.3.1-.4.1-.5.2-1 .3-1.7.1-.1 0-.2.1-.3.1-.5.2-.9.4-1.2.6-.3.1-.6.3-.9.4-.5.3-1 .7-1.5 1.1-.5.4-.9.9-1.4 1.3-.8.8-1.7 1.7-2.7 2.4l-.7.7c-1.1 1.5-2 2.7-2.7 3.9-.8 1.3-1.7 2.6-2.6 3.8-.8 1.1-1.5 2.3-2.1 3.9-.3.9-.8 1.7-1.1 2.6-.5 1.1-1.1 2.2-1.4 3.4-.2.5-.5.8-.8 1.1l-.1.2v.3c.1.2.1.6 0 .9-.4 1.1-.7 2.2-1 3.3-.3 1.3-.6 2.6-1.2 3.9-.5 1.1-.9 2.2-1.3 3.3-.8 2-1.6 4.1-2.6 6.1l-.1.2-1.2 2.4c-.7 1.2-1.3 2.5-1.8 3.7-.4.9-.8 1.7-1.2 2.6-.9 1.8-2.1 4.1-3.5 6.3-.2.4-.5.8-.7 1.1l-1 2c-1.1 2.1-2.2 4.2-3.2 6.4-1.1 2.1-1.8 3.9-2.5 5.5-.4.9-.8 1.9-1.2 2.8-.3.7-.7 1.5-1 2.2-.4.9-.8 1.7-1.4 2.5-.5.6-.8 1.2-1.1 1.7-.5 1-1.1 1.6-1.9 2.1-.2.1-.3.2-.3.2s0 .1.3.4c.3.4.4.8.2 1.3-.4 1.2-.7 2.5-.9 3.9-.2.9-.4 1.9-.7 2.8-.1.4-.2.8-.3 1.1-.1.3-.1.5-.3.7-.5.4-.5 1-.5 1.8v1.8c.1 2-.1 3.8-.7 5.5-.2.5-.3 1.1-.3 1.8v.2c0 1.1 0 2.2-.3 3.4v.5c0 .3.1.6 0 .9V11c0 1.2 0 2.3-.1 3.5 0 .9.2 1.7.8 2.6.3.5.5.9.8 1.4l.4.6c.6.9 1.3 1.5 2.3 1.8.5.2 1 .3 1.5.5.3.1.5.2.8.3 2.3.8 4.3 1.3 6.4 1.4h.9c1.1 0 2.3.1 3.4.4.5.1 1 .2 1.6.3.8.1 1.7.2 2.5.6 1.6.1 3 .4 4.2 1l.2.1c1.1.6 2.2 1.1 3.3 2 .9.7 1.9 1.4 2.9 2l.7.4c.2.1.3.2.4.2 0 0 .2-.2.4-.3l.1-.1c.2-.1.3-.2.4-.4.5-.5.9-1.1 1.4-1.6.8-1 1-1.1 2.2-.7l.2.1c.6.2 1.1.3 1.6.3h.1l.3.1c.1.1.3.1.4.1.7.2 1.4.3 2.1.4.9.1 1.8.3 2.7.6.5.1 1 .2 1.5.4.6.1 1.2.2 1.7.4 2.1.7 4.3 1.2 6.6 1.5.2 0 .3 0 .5.1.4.1.8.1 1.2.2 1.9.4 3.7.7 5.5.9.4 0 .7.1 1.1.1.8.1 1.5.2 2.3.2 1.2 0 2.5-.1 3.7-.1h1.6c1.9 0 3.8-.3 5.7-.9.8-.2 1.9-.4 3 .4l.2.2v.3s0 .2.2.3c.8.6 1.5 1.3 2.2 1.9.7.7 1.4 1.3 2.1 1.9.7.5 1.3.8 1.9 1 .6.2 1.1.4 1.7.6l2.7.9-.3-1.8 1.3 2.2h.4l.1.2c0 .1.1.1.4.1h.2l.3.1c.2.1.4.2.6.2h.2s0-.1.1-.2c.3-1.4.3-2.8 0-4.2-.1-.5-.2-1-.2-1.5.1-.7.4-1.4 1-1.7.3-.2.7-.3 1.1-.3.3 0 .6.1.9.2.3.1.6.3.8.4.1.1.3.2.4.2 1.5.8 3.2 1.3 4.8 1.8l.5.2c2.9.9 5.8 1.8 8.5 3.1l.3.2c.3.1.6.3.9.4 1.4.8 2.9 1.5 4.5 1.9.2 0 .3.1.4.2l7.5 3.5c.7.2 1.4.3 2.2.3h1c1.3 0 2.6.1 3.8-.1 1.3-.1 2.6-.5 4-1.2.9-.4 1.7-.9 2.5-1.3.6-.3 1.3-.7 1.9-1 .2-.1.3-.2.4-.5.2-.4.3-.7.5-1 .4-.8.8-1.7 1.1-2.5.3-.9.9-1.2 1.5-1.2.2-.4.6-.7.9-.9.7-.5 1.4-1 2-1.4l.5-.3c.4-.2.7-.6 1-1 .4-.4.8-.8 1.3-1.2l.8-.9c.5-.6 1.1-1.3 1.6-1.9l2.4-2.7c.6-.7 1.2-1 2-.9H335.8c.5.1 1 .1 1.4 0h.2c.2.1.4.1.6 0l.1.4v-.4h9.6V21h1v3.5c.1 0 .2 0 .3-.1h.2c.3.1.6.1.9 0h.2c2.5.1 5 .1 7 0l.2-.2.3.2c.1.1.2.1.3.1.5-.9.6-2 .6-3.2v-.2c0-.3 0-.8.3-1.1.4-.4.4-.9.5-1.4v-.2c.1-1.2.5-2.2 1.2-3.2 1.2-1.7 1.9-3.8 1.9-6v-.9c0-1.4 0-2.9-.1-4.4-.1-1.2 0-2.4.1-3.6l.1-.9c0-.8.3-1.5.5-2.1.6-1.5 1.2-3.3 1.7-5 1.7-1.2 1.9-2.3 2.2-3.3z" />

                                                <path class="st30"
                                                    d="M255.9-200.4v.1l.2 2.7.4 1.8c.4 1.8.9 3.6 1.3 5.3.1.4.2.8.3 1l.4.6c.6 1.1 1.2 2.2 2 3.1l-.1.1h.2v.2l.3 1.1-.4.1v.1l-.1-.1-.2.1c-.2.1-.3.1-.6.2s-.4.1-.5.2l-.1.1h-.1c-.7.2-1.2.7-1.5 1.7-.1.5-.3 1-.3 1.6-.3 2-.3 3.7-.1 5.3.1.4.1.8.1 1.3v.6c.1.4.1.8.2 1.3.2 1 .3 1.9.4 2.9.4 3 .5 5.3.5 7.5l.1.4c.1.4.1.7.2 1.1.1 1.1.6 2.1 1.6 3 .5.5 1.1 1 1.7 1.5l.7.7c.5.3.6.9.6 1.2.1.9.3 1.8.4 2.8.3 2.4 1 4.5 2 6.5.1.1.2.3.2.4.3.5.5 1 .7 1.5.1.1.1.2.2.3.2.3.4.6.5.9 1.1 2.4 2.5 4.6 3.6 6.3.1.1.1.3.2.4v.1l1.5 2.3c.3.3.6.7.9 1 .3.4.5.7.8 1 .5.4.6 1 .7 1.5.2 1.1.3 2.3.3 3.4 1.4 5.4.4 11.7-3.8 15.2-.1.1-.3.2-.4.3-.1 2.2-.4 4.4-.7 6.5-.1 1-.3 2-.4 3 1.6.8 3.2 1.6 4.8 2.5 2.3 1.2 4.6 2.7 6.6 4.3h3c1.7 0 3.4-.2 5-.3.9-.1 1.3 0 1.4 0 .1 0 .4-.1 1.2-.3 1.6-.4 3.2-.9 4.8-1.3 1.1-1.5 4.6-5.1 5.1-5.6 2.9-2.9 6.6-5 9.7-7.6-.5.4 1.9-2 1.9-2 1-1.1 2-2.2 2.9-3.4.2-.2.3-.4.5-.6.1-.2.3-.5.5-.9.8-1.3 1.6-2.6 2.3-3.9 1.4-2.4 2.6-4.9 3.8-7.4-.3-.2-.6-.3-.8-.2h-.4c-.3-.1-.7-.2-.9-.7-.1-.1-.1-.3-.2-.4-.2-.5-.5-1.1-.6-1.7-.3-.8-.6-1.6-.7-2.7-.3-1.1-.4-2.3-.4-3.1-.1-2.4-.1-5 .3-7.5l.1-.4h.5v-.2-.4l-.4-.1-.1-.4c-.1-1.5-.1-3.5.5-5.4.3-.9.5-1.8.7-2.7l.3-1.2c-.1-.9.2-1.7.4-2.4l.1-.5h.5c2.3.6 4.1-.1 5.7-2.3.5-.8 1.1-1.5 1.6-2.3.2-.3.4-.7.7-1l.4-.9c.3-.7.6-1.5.9-2.2.9-2.2 1.3-4.6 1.3-7v-3l-.1-.8c-.1-.6-.1-1.3-.2-1.9-.1-1.5-.5-2.9-.8-4.3l-.2-.7c-.1-.5-.3-.9-.6-1.1l-.1-.1-.1-.2c-.1-.1-.2-.2-.4-.3-.9-.5-1.1-.8-.6-1.8.4-.8 1-1.9 1.7-2.9.2-.2.3-.5.4-.7.1-.1.2-.3.2-.4 0-1.4.1-3-.1-4.5-.1-1-.1-2-.1-2.9v-4.1c-.2-1-.1-2.2-.1-3.3v-1.3c0-.4-.1-.8-.2-1.3-.1-.6-.2-1.1-.2-1.7-.1-.8-.3-1.6-.6-2.4-.3-.9-.6-1.9-.7-3l-.1-.1-.7-1.9.1-.2c.3-.5.8-.8 1.2-.9.2-.1.4-.2.5-.3.2-.1.3-.2.5-.3.1-.1.2-.1.3-.2.4-.3.8-.7 1-1.1.2-.3.2-.5.1-.5 0-.1-.2-.2-.5-.2h-.2c-1.8-.1-3.3-.8-4.7-2.1-1.6-1.6-2.8-2.9-3.9-4.2-.5-.6-.9-1.1-1.3-1.4-1.3-1.3-2.8-2.6-4.2-3.9-1.3-1.1-3-2.5-5.1-3-.4-.1-.8-.2-1.3-.3-1.1-.3-2-.6-3.1-.6-.4 0-.7-.2-1-.4-.8-.6-1.7-.8-2.8-1h-.2c-1.8-.4-3.6-.7-5.4-.5-1.3.2-2.7.4-4.5.8-1.8.4-3.9.8-5.8 1.9-1.5.8-3 1.1-4.4 1.3h-.8c-1.8.2-3.5.4-5 1.1l-.3.1c-.4.2-.7.3-1 .5-.4.3-.9.2-1.2.1-.2 0-.3-.1-.4 0-.2.1-.3.1-.5.1h-.2c-.5.1-.9.3-1.4.4-1 .3-2.1.6-3.1.9-2.1.7-3.5 1.9-4.4 3.7-1 1.9-2.1 3.6-3.2 4.9-1 1.2-2 2-3.2 2.6-.7.4-1.2.8-1.4 1.3-.3.7-.7 1.3-1.1 1.9l-.3.5c-1.3 1.9-2 3.8-2 5.9v2.9l-.2 4.6c.3.4.3.8.3 1 .6.2.6.7.8 1.3zM340.7-52.9c-.1-.2-.2-.3-.3-.6-.3-.4-.4-.7-.6-.9-1-1.2-1.8-2.4-2.4-3.7-.5.1-1 .1-1.5.1h-1.2c-1 1.3-2.2 2.4-3.6 3.4-4.9 3.4-10.4 5.8-15.9 8-1.9.8-3.8 1.5-5.7 2.3-1.6 6-5 11.6-8.2 16.9-1.4 2.4-3 4.6-4.3 7-.6 1-1.1 2.2-1.7 3.2 0 .1-.1.3-.1.3-.4 3.2-1.7 6.1-3.5 8.5.6-.1 1.2-.1 1.8-.1 5.2 0 10.1.6 14.9 2.1 1.9-2.8 4-5.6 6.5-7.9 1.4-1.3 2.9-2.4 4.4-3.6.1-.1.1-.2.3-.4 1.1-1.4 2.7-2.7 4-4 1.7-1.7 3.6-3.3 5.5-4.7 1.3-5 4.9-9.3 9.7-11.3 0-.3 0-.5-.1-.8-.1-3.4.8-8.7 2.6-12-.1-.6-.3-1.2-.6-1.8zM354.3 24.4c1.5 0 3 0 4.2-.1l.2-.2.3.2c.1.1.2.1.3.1.5-.9.6-2 .6-3.2V21c0-.3 0-.8.3-1.1.4-.4.4-.9.5-1.4v-.2c.1-1.2.5-2.2 1.2-3.2 1-1.4 1.6-3 1.8-4.7-3.5 4.4-5.8 8.1-9.4 14zM266-9.8c-.5-.7-.9-1.4-1.2-2.2-.3-.1-.6-.2-.9-.4 2.6 1.1-2-.6-2.2-.6-1.1-.3-2.2-.5-3.2-.8-2.7-.6-5.4-1.3-8-2.1-5.4-1.8-10.1-3.7-14.6-7.2-4-3.1-6.8-7.6-7.7-12.6-.3.2-.5.4-.8.5-1.1.6-2.3 1.2-3.5 1.7-.3 1-.7 1.9-1.2 2.7-.8 1.3-1.7 2.5-2.6 3.8-2.6 3.7-3.3 4.6-2.1 3 .7-.9.5-.7-.4.7-.6 1.1-1.3 2.1-1.8 3.2-.1.4-.2.9-.3 1.3-.4 2.8-.6 6-.9 9.4.7.6 1.3 1.3 1.8 2.1 1.4 1.5 2.4 3.3 3 5.3.5 1.4.7 2.8.7 4.2.1.7.2 1.5.3 2.3-.1 1.4-.2 2.8-.4 4.1-.1.6-.3 1.1-.5 1.7-.1.5-.2.9-.3 1.3-1 3.6-2.6 7.1-3.7 10.7.1-.2-.1.9-.3 1.5-.5 1.6-1.1 3.2-1.9 4.6.3-.3.5-.6.8-.9.8-1 1-1.1 2.2-.7l.2.1c.6.2 1.1.3 1.6.3h.1l.3.1c.1.1.3.1.4.1.7.2 1.4.3 2.1.4.9.1 1.8.3 2.7.6.5.1 1 .2 1.5.4.6.1 1.2.2 1.7.4 2.1.7 4.3 1.2 6.6 1.5.2 0 .3 0 .5.1.4.1.8.1 1.2.2 1.9.4 3.7.7 5.5.9.4 0 .7.1 1.1.1.8.1 1.5.2 2.3.2 1.2 0 2.5-.1 3.7-.1h1.6c1.9 0 3.8-.3 5.7-.9.5-.1 1-.2 1.6-.2.1-.4.3-.8.4-1.2-.8-3.6-.6-7.1 0-10.7 0-.1.1-.3.1-.5-.2-1-.4-2-.4-3-.6-9.7 2-19 9.2-25.4z" />
                                                <path class="st38"
                                                    d="M332.3-209.8c-.1 1 .3 2 .3 3 0 1.5-.2 3.1.1 4.6v2.8c0 1.4-.1 2.8.1 4.1.2 1.6.2 3.2.1 4.7-.3.4-.4.9-.7 1.3-.6.9-1.1 1.9-1.7 2.8-.4.7-.3.7.4 1.1.3.1.5.3.6.6-1.2.3-1.2.3-2.3-.1-.2-.1-.4-.1-.6-.2-.4-.2-.5-.3-.3-.7.3-.4.5-.9.8-1.3.1-.2.3-.4.6-.4.6 0 .9-.4 1-1 .2-.8.5-1.5.5-2.4v-8.6c0-.4 0-.8-.2-1.2-.1-.2-.3-.4-.6-.4-1.2 0-2.4-.2-3.6-.3-.8-.1-1.5-.2-2.2-.5-.4-.2-.9-.3-1.3-.5-1.8-.8-3.8-1.3-5.2-2.8-.1-.1-.3-.2-.4 0-.1.1-.2.2-.2.4-.1 1.4.2 2.7.8 4 .3.6.4 1.1.4 1.7 0 .9-.1 1.8.1 2.6s.2 1.6.2 2.4c0 1.1.2 2.1.5 3.1.4 1.7.9 3.4 1.4 5.1.4 1.3.3 2.6.3 3.9 0 .3-.1.6-.5.7-.3-.2-.4-.5-.5-.8-.5-1.8-1-3.5-1.4-5.3-.5-2.2-1.5-4.4-1.4-6.7-.6-2.1-.5-4.3-.8-6.5-.4-2.8-.7-5.6-1.5-8.2-.2-.6-.4-1.1-.8-1.6-1.2-1.4-2.6-2.6-4.1-3.6-.3-.2-.6-.4-1-.5-1.4-.4-2.8-1-4.3-1.2-1-.1-1.9-.2-2.9-.3-1.6-.3-3.3-.3-4.9-.2-1.2.1-2.4.2-3.6.6-.6-.1-1.2.1-1.8.3-.6.3-1.1.5-1.7.7-3.7 1.6-7.5 1.9-11.2.1-.2-.1-.4-.1-.6-.2-1.6-.7-3.2-1.1-4.9-.9-.8.1-1.6.3-2.3.8-.5.4-1 .7-1.4 1.2-2.5 2.6-4 5.6-4 9.3 0 2.4-.1 4.8.2 7.2.4 2.8 0 5.6-.7 8.3-.3 1.2-.7 2.5-1 3.7-.1.2-.3.4-.4.6-.2 0-.4-.1-.5-.3-.4-1.4-.7-2.9.3-4.3.4-.5.3-1.2.3-1.8v-10.9c0-1.8-.1-3.6.3-5.3.3-1.4.6-2.8 1.2-4.1 1-2.1 2.5-3.8 4.3-5.3 1-.9 2.2-1.5 3.6-1.4h.8c.3 0 .5-.3.5-.6 0-.2 0-.3-.1-.4-.5-1.6-.9-3.2-1.2-4.9-.4-1.9-.3-3.7.8-5.4.1-.2.3-.3.3-.5.1-.1.1-.3.1-.4-.1-.2-.3-.1-.4-.1-2.9.9-5.1 2.7-6.6 5.3-.4.7-.7 1.4-1 2-.6 1.2-1.4 2.2-2.8 2.7-.9.4-1.7.9-2.5 1.4-.3.2-.5.3-.7.6-.8 1-1.6 2-2.2 3.1-.8 1.5-1.5 3.1-1.4 4.9v2.6c0 .9 0 1.7-.2 2.6-.2.6-.1 1.3 0 2 .2 1.1.4 2.2.5 3.3.1 1.5.3 2.9.8 4.3.3 1.2.6 2.4.8 3.6.2 1 .4 1.9 1.1 2.8.6.9 1 1.9.5 3-.1.1 0 .3 0 .5-1-1.2-1.6-2.5-2.4-3.9-.2-.3-.3-.8-.4-1.1-.6-2.4-1.2-4.8-1.7-7.2-.1-.9-.1-1.8-.2-2.7-.2-.6-.3-1.1-.2-1.7 0-.3 0-.6-.3-.8.1-1.6.1-3.2.2-4.8v-2.9c.1-2.3.9-4.3 2.1-6.1.5-.8 1.1-1.5 1.4-2.3.3-.7 1-1.2 1.7-1.5 1.2-.6 2.1-1.5 3-2.5 1.3-1.5 2.3-3.1 3.2-4.8 1-2 2.6-3.2 4.7-3.9 1.5-.5 3-.9 4.5-1.4.2-.1.4-.1.6-.2.5-.2 1 .2 1.5-.1.4-.3.9-.5 1.4-.7 1.6-.8 3.4-1 5.2-1.2.3 0 .5 0 .8-.1 1.5-.2 2.9-.4 4.2-1.2 1.8-1 3.9-1.5 5.9-2 1.5-.3 3-.6 4.5-.8 2-.3 3.9.2 5.7.5 1 .2 2.1.4 3 1.1.2.1.5.2.7.3 1.5.1 3 .6 4.5 1 2.1.5 3.8 1.7 5.4 3.1 1.4 1.3 2.9 2.6 4.3 4 .5.5.9 1 1.3 1.5 1.2 1.5 2.5 2.9 3.8 4.2 1.2 1.2 2.7 1.9 4.4 2h.3c.9.1 1.2.7.7 1.5-.3.5-.7.9-1.1 1.2-.2.2-.5.3-.8.5-.5.4-1.3.4-1.6 1.1.2.6.4 1.1.6 1.7 0 .1.1.2.1.3-.2 2 .8 3.7 1 5.6zm-5.9-3.4h2.2c.4 0 .6-.3.6-.7 0-.2 0-.4-.1-.6-.4-.8-.4-1.8-1.4-2.3-.2-.1-.3-.3-.3-.5-.1-.4-.4-.5-.8-.5-.6 0-1.1 0-1.7-.2-1.7-.6-3.2-1.4-4.4-2.6-1.8-1.7-3.6-3.5-5.3-5.3-1.4-1.5-3.1-2.8-4.8-3.9-1.8-1.2-3.8-1.5-5.9-1.8-.2 0-.5 0-.8.1-.6.2-1.2.2-1.8.2-.9-.1-1.6.4-2.2 1-.4.4-.7 1-1 1.5-.5 1.2-1.1 2.4-1.5 3.7-.4 1.2-.9 2.4-1.2 3.6-.2.8 0 1.6-.3 2.4-.3.8.1 1 .8 1 1.5 0 3 .1 4.4 0 1.5-.1 2.9.3 4.3.9.5.2.9.4 1.4.5.4.1.7-.1.8-.5 0-.2 0-.5.1-.8.1-.9.5-1.7 1.2-2.4.3-.3.6-.5 1.1-.5h2.1c1.2 0 2.2.5 3.3 1.1.9.6 1.5 1.4 2.1 2.2 1.4 1.9 3.1 3.3 5.4 4 1.2.4 2.5.5 3.7.4zm-38.8-4.6v1.7c0 .4.3.6.6.5 1.8-.5 3.4-1.7 5.2-2.2.1 0 .2-.2.2-.4.4-2.5 1.2-4.8 2-7.2.6-1.7 1.3-3.4 2.2-5 1-1.8 1.6-2.3 3.1-2.6.3-.1.6-.1.9-.1h4c.5 0 1 .1 1.5.2 2.8.8 5.2 2.4 7.2 4.4 2 1.9 3.9 3.8 5.7 5.7 1.1 1.2 2.5 2.1 3.9 2.9 1.4.8 2.9.6 4.3.4.1 0 .3-.1.4-.2.4-.4.9-.4 1.4-.2.1.1.3 0 .4 0 .1 0 .2-.1.2-.2.1-.1 0-.2-.1-.2l-.9-.3c-1-.3-1.9-.9-2.6-1.6-1.8-1.7-3.5-3.4-4.9-5.4-.3-.4-.6-.7-1-.9-.5-.3-.9-.7-1.3-1.1-.7-.7-1.5-1.4-2.2-2.2-1.1-1.1-2.4-2-3.8-2.6-1.9-.7-3.8-1.3-5.9-1.3-1.2 0-2.3-.2-3.4 0h-.6c-1.1-.1-2.2.1-3.3.4-2.9.8-5.8 1.9-8.3 3.8-.3.2-.6.4-.8.7-.6.8-1.2 1.6-1.8 2.5-1.4 3.3-2.1 6.8-2.3 10.5zm40.4 15h1.9c.6 0 .9-.3.9-.9.1-.9 0-1.8.3-2.7.1-.2.1-.4 0-.6-.3-.7-.3-1.5-.3-2.3 0-.5-.2-.9-.3-1.3-.1-.3-.4-.5-.7-.5-1.9-.1-3.7-.4-5.6-.3-.5 0-.9 0-1.4-.1-1.8-.5-3.5-1.2-4.7-2.6l-.3-.3c-1-.5-1.5-1.4-2-2.2-.4-.7-1-1.3-1.7-1.8-1.1-.8-2.3-.7-3.5-.4-.3.1-.6.3-.8.6l-.6.9c-.5.9-.5 1.3.4 2l.9.6c.7.4 1.5.7 2.2 1.1.4.2.7.4 1 .7 1 .8 1.8 1.8 2.3 3 .7 1.3 1.6 2.4 2.6 3.5.2.3.5.5.8.7 1.4.7 2.7 1.6 4.2 2.1 1.5.4 2.9 1.1 4.4.8zm-24.4-34.8c-1.4 0-2.7-.1-3.9 0-1.5.2-3 .5-4.5.9-1.7.4-3.4.9-5.1 1.6-2 .9-3.9 2-5.7 3.3-1.2.8-2.2 1.8-2.9 3.1-.2.4-.4.7-.4 1.1-.1 2.5 0 5 .8 7.4.4 1.5.7 3 .8 4.5 0 .4.2.7.6.8.4.1.9.3 1.3.3.8 0 1.1-.3 1.1-1.1 0-1.3.1-2.6.2-3.9.1-1 .2-2 .4-3 .2-.8.1-1.8.7-2.5.7-.9 1-2 1.4-3 .3-.6.6-1.3.9-1.9 1-2 2.6-3.4 4.7-4.1.4-.1.8-.3 1.1-.5 2.4-1.1 4.9-1.9 7.5-2.3.4-.2.7-.3 1-.7zm-29.1 12.5c-.1.8.1 1.6.3 2.5.5 1.6 1.1 3.2 1.6 4.7 0 .1.1.2.1.3.1.2.2.3.5.4 1.1.2 2 .7 3 1.1.2.1.3.1.4-.1.1-.1.1-.3.1-.4 0-.1-.1-.3-.1-.4-.2-1.1-.7-2.2-.7-3.4-.1-1.2-.1-2.3-.4-3.5-.3-1.2-.2-2.3-.2-3.5 0-.7.2-1.4.7-2 .6-.7 1.3-1.3 1.8-2.1.3-.5.9-.9 1.3-1.3.3-.3 1-.4.8-.8-.2-.5-.8-.1-1.2 0-.4.1-.8.3-1.2.4-2 .5-3.7 1.5-4.9 3.1-1.1 1.6-2.1 3-1.9 5z" />
                                                <path class="st39"
                                                    d="M352.5-111.8c.4-.1.7 0 1.1.1 2 .5 3.9 1.1 5.7 2.2 1 .6 1.9 1.4 2.7 2.3.6.6 1.1 1.2 1.8 1.6.9.6 1.8 1.2 2.5 2 .3.3.6.6 1.1.5.3 0 .4.2.6.4 1.2 1 2.4 2.1 3.6 3.1.4.4.9.7 1.1 1.3.3.6.7 1.1 1.2 1.6 1.4 1.3 2.3 3 3 4.7.4 1 .7 2.1.9 3.2.3 1.6.9 3.1 1.1 4.8.2 1.6.4 3.2.7 4.8.3 1.8.6 3.5.9 5.3.1.9.3 1.8.3 2.7 0 .8-.1 1.5 0 2.3.2 2.9-.4 5.6-1.3 8.2-.3.9-.5 1.8-.7 2.6-.2.5-.3 1.1-.5 1.6-.6 1.7-.9 3.4-1.1 5.2-.2 2.3-.3 4.6-.4 6.8-.1 1.5-.4 2.9-.9 4.3-.7 2.3-1.2 4.7-1.4 7.2-.1 1.4-.4 2.8-.9 4.2-1.6 4.7-3.1 9.5-4.6 14.2-.7 2.3-1.3 4.6-2 6.9-.5 1.7-1.1 3.4-1.7 5.1-.2.6-.4 1.3-.5 1.9-.1 1.5-.2 2.9-.1 4.4.1 1.8.1 3.6.1 5.4 0 2.3-.6 4.4-2 6.3-.6.9-1 1.8-1.1 2.9-.1.7 0 1.4-.6 2-.3.3-.2.7-.2 1 0 1.2-.1 2.3-.7 3.4-.4 0-.7 0-1.1.1l-.1.1h-.1c.1-.6.2-1.3.3-1.9.2-1.1.2-2.3.3-3.4v-.3c0-1.4 0-2.7.3-4.1.1-.2 0-.5.2-.7.5-.4.4-1 .4-1.6 0-.5-.1-.9.1-1.4.2-.6.2-1.3.2-2 0-.3 0-.5.1-.8.3-.8.2-1.6.2-2.4v-.9c.4-1.7.6-3.4 1.1-5 .2-.7.5-1.3.4-2.1.1-.1.2-.1.2-.2.1-.1 0-.2-.1-.2l-.1.1v.3l-.9 1.2c-.9 1.3-1.7 2.6-2.7 3.9-.6.7-1.3 1.3-1.8 2.1-.5.7-1.1 1.4-1.7 1.9-.9.7-1.7 1.6-2.7 2.2-.2.1-.4.4-.6.7-.3 0-.6.2-.8.4-.2.2-.5.4-.7.6-.3.1-.5.3-.6.6-.4.2-.7.5-.9.9-.3 0-.5.1-.6.4-.1.4-.2.7-.6.8-.7.1-1 .6-1.4 1-.9.9-1.9 1.8-2.8 2.7-.6.4-1.2.6-1.6 1.3-.5.4-1.1.9-1.6 1.3-.3.2-.4.4-.4.8.1 1.3-.3 2.5-.3 3.7 0 .1 0 .1-.1.2-.3.1-.6.1-.8 0-.2-.7.3-1.4.2-2.1 0-.4.2-.9-.3-1-.4-.1-.6.3-.8.6-.2.2-.3.4-.4.6-.2.6-.3 1.3-.4 1.9-.5 0-.9.1-1.4.1-.7-.1-1.2.2-1.6.7l-2.4 2.7c-.8 1-1.6 1.9-2.4 2.9-.9.6-1.5 1.6-2.3 2.1-.8.6-1.7 1.1-2.5 1.7-.4.3-.7.6-.9 1-.6 0-1.1.2-1.3.9-.4 1.2-1.1 2.4-1.6 3.6-.2.3-.3.6-.7.8-1.5.7-3 1.5-4.5 2.3-1.3.6-2.7 1.1-4.2 1.3-1.6.2-3.2.1-4.9.1-.8 0-1.6-.1-2.4-.4-2.5-1.2-5-2.3-7.5-3.5-.1-.1-.3-.1-.4-.2-1.7-.4-3.2-1.1-4.6-1.9l-1.2-.6c-2.7-1.3-5.6-2.2-8.5-3.1-1.8-.6-3.7-1.1-5.4-2-.4-.2-.8-.5-1.2-.7-1.1-.5-2.2.2-2.3 1.4 0 .5.1.9.2 1.4.4 1.5.3 2.9 0 4.4-.1.6-.3.7-.9.6-.3-.1-.7-.3-1-.4.1-.5.4-.7.8-.7.2 0 .4-.2.3-.4-.3-.9 0-1.9-.3-2.9-.2-.6-.2-1.1 0-1.6.2-.7.3-1.4-.2-2 .6-.4.3-1.1.4-1.6 0-.5-.4-.6-.8-.8-1.8-1-3.7-1.6-5.4-2.7-.5-.4-1.1-.7-1.7-1v-.7c.5 0 1 .2 1.4.5 1.8 1.2 3.8 2 5.6 2.9.1.1.3.1.4.2.2.1.4-.1.4-.3v-2-1.9c0-.6.1-1.1-.1-1.7-.3-1.1-.2-2.2-.2-3.3 0-1.2 0-2.3-.1-3.5v-2.2V9c0-.4-.1-.8.1-1.2.2-.8.1-1.6.2-2.4.1-1.1-.4-1.9-1.3-2.6l-2.1-1.5c0-.6.1-1.1.6-1.5.5.3 1 .6 1.5 1l1.2.9c.2.2.5.2.7 0 .3-.3.3-.7.1-1-.2-.2-.4-.3-.6-.4-.8-.4-1.6-.9-2.3-1.4 0-.3.1-.5.4-.7.4.1.6.3.9.5.5.5 1.2.7 1.9.9.1 0 .3 0 .4-.1.4-.3.5-1 .2-1.4-.7-.8-1.4-1.6-2.5-1.8.1-.8.6-1.1 1.3-1.3.2.1.5.2.7.3.3.3.6.6.9.8.5.5.7.4 1-.2.3-.6.6-1.3 1-1.9.3-.6.6-1.3 1.1-1.6 1.2-.7 2.2-1.6 3.5-2.1.4-.2.8-.4 1.1-.8.1-.2 0-.5-.2-.5-1-.1-2-.2-3-.4-.4-.5-.9-.6-1.5-.6-.8 0-1.7 0-2.5.3-.7-.1-1.3.2-1.9.3-2.1.2-3.9 1.3-5.7 2.3-.4.2-.4.6 0 .9.7.4 1.3.9 2.1 1.2-.1.6-.3 1.1-1 1.2-.9-.3-1.7-.8-2.5-1.3-.7-.4-.9-.4-1.4.2-.3.3-.3.7.1.9.8.4 1.4.9 2.1 1.5.3.2.6.3.9.5 0 .3-.1.5-.4.7-.6-.2-1.2-.5-1.7-1s-1.1-.7-1.7-1c-.3-.2-.6-.1-.8.2-.2.3-.1.6.2.9.4.3.8.5 1.1.7.7.5 1.4.9 2.2 1.3 0 .6-.1 1.1-.7 1.3-1.5-.6-2.8-1.7-4.3-2.4-.7 1.5-1.8 2.7-2.2 4.2-.3 1-.8 2-.7 3.1-.4.3-.5.7-.6 1.2-.2.1-.3.3-.3.6v1.8c-.3 1.9-.3 3.7-.3 5.6 0 1.1.1 2.1-.2 3.2-.1.4 0 .8 0 1.2 0 .5.2.7.6.9 1.1.5 2.3 1.1 3.4 1.7.3.1.5.3.9.3 0 .5.2 1.2-.3 1.6-.7-.2-1.3-.5-1.9-.8-.6-.4-1.4-.6-2.1-.9-.3-.1-.5 0-.5.3v.6c-.1.8.2 1.2.9 1.5.8.3 1.7.7 2.5 1.1.4.2.7.3 1.2.3v.9c-1.4-.2-2.5-1.2-3.9-1.4-.3.9 0 1.5.8 1.9 1 .5 2 1 3.1 1.2v1.6c-.6-.1-1.1-.2-1.6-.4-.4-.2-.7-.3-1.1-.4-.4-.1-.6 0-.6.4-.1 1.2.3 2.4.4 3.6 0 .3.2.6.5.7 1 .1 1.5.9 2.1 1.6.3.5.7.9 1.2 1.2.3.2.5.4.9.3.2.5.8.6 1.2.9.6.3 1.1.7 1.7 1 .9.5 1.9 1 2.8 1.4.3.2.6.3.7.7-1.8-.4-3.5-1.1-5.2-1.7-.7-.2-1.4-.6-2-1.1-1.6-1.1-2.8-2.7-4.3-3.8-.2-.2-.4-.4-.4-.8-.3-.8-.7-1.6-.8-2.5-.5-1.6-.8-3.3-1.1-5 .6-1.3.1-2.5-.5-3.6-.1-2-.1-3.9.1-5.9.2-1.7.2-3.4.1-5.1.1-1.1.1-2.2.2-3.3 0-.5.1-1 .2-1.5.5-1.7 1.1-3.3 1.5-4.9 0-.2.2-.4.2-.6 1.3-2.6 2.8-5.1 4.8-7.2 1.2-1.3 2.5-2.6 4.2-3.2.6-.2 1.1-.4 1.8-.4.5 0 .5 0 .6-.8.1-.2.4-.3.6-.4 1.1-.5 2.3-.5 3.4-.9.4 0 .7.1 1-.3h1.2c.4 0 .9.2 1.3-.3.8 0 1.6-.1 2.4.4.8.5 1.6.6 2.5.5.4.5 1 .3 1.5.3h.6c.1.3.4.3.6.3.3.5.7.9.6 1.5 0 .4.2.6.6.7.4.1.8.3 1.2.2h4.9c.2-.4.4-.9.6-1.4.1-.4.3-.8.6-1 .1.3.4.6.7.6-.1.7-.6 1.3-.6 2.1 2.3.1 4.6.1 6.8.2.4 0 .6-.2.9-.4h1.3v.5c.3.2.6.2.9.1.8 0 1.5.3 2.2.4.4.1.8.2 1.2.1.2.1.5.2.7.3.5.2 1 0 1.3-.5 1.3-1.9 3.2-3.2 4.9-4.8.3-.3.7-.6 1.1-.9 1.7-1.3 3.5-2.4 5.2-3.8l.9-.6c.5-.2 1-.6 1.4-1 1.5-1.4 3-2.8 4.3-4.4.5-.6 1-1.2 1.4-1.8.4-.6.9-1.3.6-2.1.1-.2.1-.4 0-.6-.6-1-1.3-2-2.6-2.2-.1-.1-.2-.2-.3-.2.1-.5.4-.8 1-.8.4.1.7.1 1-.2.6-.6 1.4-1 2.2-1.3.7-.2 1.3-.5 1.9-.9l3.3-2.1c.9-.6 1.6-1.2 2.3-2 .3-.4.7-.8.7-1.3.5-1.1.4-2.2 0-3.3v-.2c.2-.2.5-.3.8-.2.4.1.7.3.7.7.2 1.8.1 3.5-1 5-.4.6-.7 1.2-1.3 1.6-.3 0-.6.1-.8.3-.8.6-1.7 1.1-2.5 1.7-.7.4-1.2 1-1.5 1.6-.7 1.3-1.4 2.7-2.2 4-.1.1-.2.1-.2.2-.1 1-.5 1.9-.7 2.8-.5.2-.8.6-1.1 1-.3.5-.7 1-1.2 1.4-.9.8-1.6 1.8-2.3 2.8-.3 0-.5.1-.7.3-.5.5-1 1-1.3 1.7-.2.4-.4.6-.8.3-.3-.2-.6-.1-.8.2-.6.3-1 .8-.9 1.5-.6 0-1.2.1-1.2.9-.6 0-1.2 0-1.4.8 0 .2-.3.4-.5.6-1.4 1.8-2.8 3.6-4.3 5.3-1.2-.1-1.2-.1-.7-1.2 0-.1 0-.2.1-.3l.3-.3c0-.1.1-.1.1-.2-.1 0-.1.1-.2.1l-.3.3c-.2.1-.4.1-.6.2-.6.5-1 1.3-1.5 1.9-.2.2-.1.5.2.6.6.3 1.1.6 1.7.9.6.3.8.7.8 1.3-.3.4-.8.3-1.2.3-.2-.4-.6-.3-1-.3 0-.2 0-.4-.2-.5-.5-.4-1-.3-1.6 0-.1-.8-.7-.8-1.3-.9-1.1-.5-2.4-.9-3.4-.9-.6-.4-1.2-.3-1.8-.3h-2.1c-.3-.1-.6-.3-.9-.3h-8c-1 0-1.9.1-2.8-.1-1.2-.2-2.4-.1-3.6-.2-.4 0-.6.3-.7.6-.9-.3-1.8-.4-2.7-.9-.4-.2-.7 0-1 .6-.6.3-1.1.7-1.2 1.5-.3.1-.3.4-.3.7-.2.1-.4.1-.5.2-.3.5-.6.9-.6 1.5-.4.2-.4.6-.4 1-.3.1-.5.3-.6.6-.4.9-.9 1.8-1 2.8-.4.5-.6 1-.5 1.6-.2.3-.4.5-.3.9-.4.2-.3.6-.3.9-.4.7-.6 1.4-.6 2.1v7.6c-.3.2-.3.4-.3.7v1.1c-.1.8.3 1.6.3 2.4-.4.5-.4.5 0 .9l.3.3c-.5.4-.2 1-.3 1.5v4.6c.2.5.2 1 0 1.6-.1.2 0 .4 0 .6V30c0 .4.1.7.5.8l.9.3c1.9.6 3.9 1.2 5.8 1.8 1.5.5 3 1 4.4 1.5.5.2.9.5 1.3-.1.1-.2.4-.3.6-.4.2-.1.4 0 .5.2v.1c-.1 1 .5 1.3 1.3 1.6.1 0 .3 0 .4.1 2.9 1.4 6 2.6 8.8 4.1.4.2.8.5 1.3.5.2-1.1.5-2.3.4-3.4.4 0 .8 0 1.2.1.5.2.7.5.5.9-.4 1 0 2.1-.4 3.2 0 .1.1.2.1.2.1 0 .3.1.4 0 .4-.4.5-.9.5-1.4 0-.7 0-1.3.3-1.9.2-.5.5-.5 1-.5-.4 1.2-.3 2.6-.6 3.8-.1.5.1.8.6 1.1.6.3 1.1.3 1.7.2.4.5 1 .3 1.5.3 1.1.3 2.3.3 3.5.1 1.6-.3 3-.9 4.4-1.6.9-.4 1.8-.9 2.7-1.3.2-.1.4-.2.6-.1.4.4.6.3.8-.1.2-.5.6-1 .6-1.5l.3-.3c.3-.5.4-1 .3-1.5l.3-.3c.1-.3.3-.6.3-.9.2-.5.6-1 .6-1.5.3-.5.5-1 .7-1.5.4-1.2 1-2.5 1.4-3.7.4-1.2.8-2.4 1.3-3.6.6-.7.9-1.6.9-2.5 0-.7.2-1.3.7-1.8.6-.4.8-.9.9-1.5.5-.5.7-1.2 1-1.8.1-.2.1-.4 0-.6-.3-.6 0-1 .4-1.3.5-.5 1-1 1.3-1.7.1-.3.4-.6.2-.8-.3-.3-.5.1-.7.3-.3.3-.6.6-.9.8-.3.2-.7.1-.8-.3-.2-.5 0-.9.2-1.3.3-.2.5-.5.8-.7l2.7-2.4c1-.2 1.3-1.2 1.7-1.9.6-1 1.1-2 1.8-3 .2-.4.3-.6 0-1-.1-.2-.3-.4-.4-.7.1-.3.1-.6.2-.9.1-.3.4-.4.7-.3.1 0 .2.1.2.2.2.1.4.2.5.1.2-.2.2-.5.1-.7-.1-.3-.4-.6-.5-.9-.2-.4.1-.6.5-.7.6.7.8.7 1.2.1.4-.6.8-1.3 1.2-1.9.3-.5.3-.9 0-1.4-.2-.3-.5-.6-.8-.8l.3-1.2c.1-.3.3-.4.6-.4.3.2.5.5.8.7.5.5.7.6 1.1 0 .2-.3.5-.6.7-1 .3-.6.8-1.1 1.4-1.6.2.5.7.8.7 1.4 0 .4-.1.8-.3 1.1-.4.6-.7 1.3-1.1 1.9-.2.3-.4.5-.7.8-.2 0-.5.1-.6.3-.3.5-.6 1-.7 1.6-.3.5-.7 1-1.1 1.5-.5.6-1.1 1.2-1 2.1-.2.1-.3.3-.3.5s.2.5.2.7c0 .1 0 .3-.1.4-.1.1-.3.1-.4 0-.3-.4-.6-.3-.8.1-.2.3-.2.7-.2 1-.3 0-.5.1-.6.4-.7 1.3-1.4 2.6-2.1 3.8-.2.4-.4.8-.3 1.3l-.3.3c-.3.1-.3.4-.3.7-.1.7-.5 1.2-.8 1.8-.2.3-.6.6-.7 1-.8 1.6-1.6 3.3-2.3 5-.1.2 0 .4.2.5-.3.5-.6.9-.9 1.4-.7 1.7-1.5 3.3-2.1 5-.3.8-.7 1.6-.7 2.5-.1.1-.2.1-.2.2-.1.1 0 .2.1.2l.1-.1v-.3c.1-.2.3-.4.4-.6l3.6-6.9c.3-.6.7-1.1 1-1.7.1-.3.1-.5-.1-.6.3-.3.6-.7.9-1 .2-.3.5-.5.7-.8 1.1-1.9 2.2-3.7 3.4-5.6.2-.4.3-.7.3-1.1.6-.8 1.4-1.4 1.9-2.3.2-.3.3-.6.2-1 .5-.1.8-.4.9-.9 0-.2-.1-.5-.1-.7.1-.3.6.1.7-.3 0-.1 0-.2.1-.3 1-.7 1.5-1.9 2.1-3 .1-.1 0-.3 0-.4.2 0 .5-.1.6-.3.2-.4.3-.8.3-1.2.6-.2.6-.2.6-.9.8-.2.8-.2.9-1.2.4 0 .6-.2.6-.6.6-.2.7-.7.6-1.2.6-.1 1.2-.4 1.9-.3 0 .8 0 1.5-.6 2.1-.1.1-.2.3-.3.5-1.3 1.9-2.5 3.8-3.8 5.6-.3.4-.5.8-.4 1.3-.7.1-.7.1-.3.6-.1.2-.3.4-.4.6-.5.5-.5 1-.3 1.6.2.6.5 1.2.9 1.7.6.7 1 1.4 1.4 2.2-.2.6-.5.7-.8.3-.3-.4-.5-.8-.7-1.1-.5-.7-.9-1.4-1.6-1.9v-.6c0-.2-.2-.2-.3-.1-.8.2-1 .8-1.2 1.5l-.9 1.2c-1.2 1.9-2.3 3.8-3.5 5.7-1 1.6-1.9 3.3-2.8 4.9-.6 1-1 2.1-1.7 3.1-.2.3-.4.6-.4 1-.3.1-.3.4-.3.6-.3.4-.5.8-.8 1.3-.1.1-.1.3.1.4.1 0 .3 0 .4-.1.3-.2.5-.5.8-.7 1.2-1.1 1.9-2.4 3.1-3.4.3-.2.5-.5.7-.8.2-.2.2-.4.2-.7.4-.6.9-1.1 1.5-1.5.3 0 .5-.1.7-.2 1.4-1.2 2.9-2.4 4.3-3.7.4-.4.8-.8 1.1-1.2.2-.4.5-.5.9-.7.6-.3 1.2-.6 1.6-1.2 1-.7 1.8-1.7 2.7-2.6.3-.2.2-.5.1-.8-.3-.9.1-1.6.8-2.1l.3.6v.3c.1.5.3.7.6.4.4-.4.9-.8 1.2-1.3.2-.1.4-.1.6-.2 1.2-1 2.5-1.9 3.7-2.9.2-.1.2-.3.3-.5.3-1 1-1.9 1.8-2.5.3-.2.6-.4.6-.8.2-1 .7-1.9 1.2-2.7.9-1.6 2-3.2 2.8-4.9.6-1.3 1.4-2.6 2.2-3.8.2-.4.5-.8.5-1.3.5-.5.8-1.1.9-1.9.2-.1.4-.3.5-.5.7-1.4 1.5-2.9 2.2-4.3.1-.2.2-.4.3-.5.7-.4.9-1.1 1.1-1.8.6-1.3.9-2.7 1.3-4 .5-1.6 1.1-3.2 1.6-4.8.3-.9.2-1-.5-1.6-.3-.2-.6-.4-.8-.7-.3-.6-.9-1-1.4-1.4 0-.6-.1-1.2.6-1.5.5.5 1 .9 1.6 1.4.3.2.5.5.8.7.1.1.3.1.4.1.2 0 .3-.3.3-.5s-.1-.4-.1-.6c-.5-1.3-1.5-2.2-2.6-3.1 0-.4.2-.6.6-.7.4.4.9.8 1.3 1.2.2.2.3.5.8.4.3-.7.6-1.4.6-2.3 0-.3 0-.6-.2-.7-.7-.4-1.1-1.2-1.9-1.4.1-.6.3-1.2.9-1.5.6.3.9 1 1.7 1 .1-.4.3-.7.4-1.1.8-2.4 1.4-4.9 1.3-7.5-.1-1.3 0-2.5 0-3.8.1-.4.2-.9.3-1.3.2-1.6.4-3.2 1.1-4.6.1-.2.1-.5.1-.7.4-.3.3-.8.3-1.2.4-.2.5-.6.6-1 .1-.5.2-1 .4-1.5.2-.6.3-1.2.2-1.8.4-.2.5-.6.6-1 .3-1 .4-2 .3-3V-72v-1.5c0-.4-.2-.8-.6-.9v-2.4c0-.4-.2-.6-.6-.7.1-.2.1-.4.2-.6.2-.4.1-.8-.1-1.1.1-1.6-.1-3.1-.4-4.6-.3-1.9-.8-3.7-1.2-5.6-.1-.2-.3-.3-.5-.3.3-1-.1-1.9-.4-2.8-.1-.2-.3-.2-.5-.3-.1-1-.5-1.9-1.3-2.5-.3-.2-.4-.7-.9-.6-.3-1-1-1.7-2-2.1h-.2c-.1-.7-.5-1.2-1.3-1.3 0-.4-.2-.7-.5-.9-.3-.2-.7-.4-1-.6l-1.2-.9c-.6-.4-.6-.4-1.2 0-.4 0-.9-.1-1.2.2-.4.1-.9.1-1.3.3-2.4.8-4.6 1.7-6.7 3.1-.3.2-.5.5-.8.7-.4 0-.8.2-1 .5-.2.2-.4.5-.6.7-.4 0-.7.3-1 .5-.5.4-.8 1-1.4 1.3h-1.2c-.2-.8.1-1.4.8-2 1.2-1 2.3-1.9 3.6-2.8.3-.2.6-.3.8-.7.4 0 .6-.2.6-.7.6.1 1.2.1 1.5-.6.4 0 .7 0 1-.3 1.9-.6 3.7-1.3 5.6-1.9.4-.1.5-.5.1-.8-.2-.2-.4-.3-.6-.4-.9-.6-1.6-1.2-2.3-1.9l-1.2-1.2c-1.1-1-2.4-1.7-3.8-2.2-.9-.3-1.8-.6-2.8-.8-1.1.2-1.1.1-.1-1.1zm-22.3 79.5c-.7-.1-1.3.3-1.8.6-.3.2-.4.5-.2.8.3.3.5.9 1 .8.4 0 .5-.6.7-.9.1-.4.3-.8.3-1.3h.1v-.1c0 .1-.1.1-.1.1zm33 39.3V4.6c0-.1-.1-.2-.2-.2s-.2.1-.2.1 0 .1-.1.1c-.2 1.9-.5 3.8-.6 5.7-.1.8 0 1.5-.3 2.2v.3c0 .1.1.2.1.2.1 0 .2 0 .3-.1.3-.3.4-.7.5-1.1.3-1.5.7-3.2.5-4.8z" />

                                                <path class="st10"
                                                    d="M359.2 19.5c-.1 1.1-.1 2.3-.3 3.4-.1.6-.2 1.3-.3 1.9-2.3.1-4.7.1-7 0 0-.1 0-.2.1-.2.6.1.9-.5 1.4-.6 1.4-.3 2.3-1.3 3-2.6.2-.3.3-.7.6-.9.7-.4 1.5-1 2.5-1z" />
                                                <path class="st40"
                                                    d="M351.6 24.6c0 .1 0 .2-.1.2-.4.1-.7.1-1.1 0 0-.1 0-.2-.1-.2V11.2c.2-.2.5-.4.7-.6.2-.2.5-.4.8-.4-.1.7-.3 1.4-.3 2.1.1 4.1.1 8.2.1 12.3zM348.8 12.7c.2-.4.5-.7.9-.9.5.6.4 1.3.2 1.9-.3 1.4-.2 2.7-.3 4.1 0 .5 0 1-.1 1.5-.2.6-.2 1.1-.2 1.7v3.7c0 .1 0 .2-.1.2h-.6c-.2-.1-.4-.1-.6-.2v-2c0-.8-.1-1.6 0-2.3.4-1.5.2-3 .3-4.5 0-.4 0-.7.1-1.1.5-.7.4-1.4.4-2.1z" />
                                                <path class="st41"
                                                    d="M336.9 24.9c.1-.6.2-1.3.4-1.9.1-.2.2-.5.4-.6.2-.2.5-.7.8-.6.5.1.2.7.3 1 .1.7-.4 1.3-.2 2.1-.7.1-1.2.1-1.7 0z" />
                                                <path class="st10"
                                                    d="M348.2 24.6c.2.1.4.1.6.2-.3 0-.7.1-1 .1h-7.5c-.3 0-.6 0-.9-.1 0-.1 0-.1.1-.2h3.7c1.6.1 3.3.1 5 0zM349.4 24.9c0-.1 0-.2.1-.2h.9c0 .1 0 .2.1.2-.4.1-.7.1-1.1 0zM358.8 24.8c.3-.1.7-.2 1.1-.1v.2c-.4 0-.8.2-1.1-.1z" />
                                                <path class="st39"
                                                    d="M199.9 24.6c-1.3-.6-2.8-.5-4.2-.9-1.4-.4-2.8-.3-4.2-.4-2.3-.1-4.4-.7-6.5-1.5-.8-.3-1.5-.6-2.3-.8-1.1-.3-2-1-2.6-2-.4-.7-.8-1.3-1.2-2-.5-.9-.9-1.8-.8-2.9 0-1.2.1-2.3.1-3.5 0-.5 0-.9-.1-1.4.2-.5-.1-1 0-1.5.3-1.2.2-2.3.2-3.5 0-.7.1-1.3.3-2 .6-1.7.8-3.5.7-5.3v-1.4c0-.9-.2-1.8.6-2.6.1-.1.1-.3.1-.4.3-1.3.8-2.5 1-3.8.2-1.4.5-2.7.9-4 .1-.3.1-.5-.2-.8-.5-.7-.5-1 .2-1.3.8-.4 1.3-1.1 1.7-1.9.3-.6.7-1.2 1.2-1.8.5-.7 1-1.5 1.4-2.4.7-1.7 1.5-3.3 2.2-5 .7-1.9 1.6-3.7 2.5-5.6 1.4-2.8 2.9-5.6 4.3-8.4.2-.4.4-.8.7-1.2 1.3-2 2.4-4.1 3.5-6.3 1.1-2.1 1.9-4.3 3.1-6.3.5-.8.9-1.7 1.3-2.6 1.5-3 2.6-6.2 3.8-9.3 1-2.3 1.2-4.8 2.1-7.2.2-.5-.3-.9.1-1.3.3-.3.6-.7.8-1.1.7-2.1 1.8-4 2.6-6 .6-1.4 1.2-2.8 2.1-4 .9-1.2 1.8-2.5 2.6-3.8.8-1.4 1.7-2.6 2.7-3.9.2-.3.5-.7.8-.9 1.5-1.1 2.7-2.5 4-3.7.5-.5 1-.9 1.6-1.2.7-.3 1.4-.7 2.1-1 .2-.1.5-.3.7-.2.7.3 1.3-.1 1.9-.2 2.6-.6 5.2-.9 7.9-1.1-.1.2-.1.4-.2.6-.6 1.3-.6 1.3-2 1.9-1.2-.2-2.3.3-3.5.3-.5 0-.8.1-.9.6-.1.2-.2.2-.4.1-.9-.6-1.5-.1-2.1.4-.3.2-.5.5-.8.7-.1-.2-.3-.3-.5-.2-.5.2-.9.4-1.3.7-1.6 1-2.9 2.3-4.4 3.5-.4.3-.8.6-.8 1.2-.5 0-.8.3-1 .6-.6.8-1.2 1.6-1.7 2.5-.5.8-1.1 1.6-1.6 2.4-1.2 1.6-2.3 3.4-3.1 5.2-.4 1-.9 2-1.4 3-.4.9-.9 1.8-1 2.8-.8.9-.9 2-1.2 3.1-.3.6-.5 1.2-.6 1.9-.5 2.1-1 4.2-2 6.2-.5.9-.9 1.9-1.1 3l-.6 1.5c-.2.5-.6 1-.6 1.6-.1.3-.3.5-.3.8-.4.3-.6.8-.6 1.3-.3.5-.8.9-.6 1.5-.7.4-.9 1.2-1.2 1.9-.2.5-.4 1.1-.6 1.6-.8 1.6-1.6 3.2-2.5 4.7-.2.4-.4.8-.3 1.3l-.3.3c-.3.1-.3.4-.3.6-.3.1-.3.4-.4.6-.3.3-.5.7-.6 1.2 0 .3-.1.5-.3.6-.4.4-.8.9-1.2 1.3-.2.2-.4.4-.2.6.1.2.4.1.6.1.8-.2 1.5-.5 2.3-.5l-.6 1.2c-.7.5-1.5.5-2.3.7-.9.2-1.7.7-1.7 1.8-.2.3-.6.5-.8.9-.5.9-.9 1.8-1.4 2.7-.9 2.1-1.9 4.1-2.9 6.2-.2.4-.3.7-.5 1.1-.3.9-.7 1.8-1.1 2.7-.3.6-.6 1.2-.8 1.8-.1.5-.4.9-.7 1.4-.6.9-1.2 1.9-1.8 2.8-.2.4-.5.8-.5 1.3-.9.6-1.2 1.7-1.4 2.6-.5 1.8-.8 3.6-1.2 5.3 0 .2-.1.4 0 .6.2.6.1 1.2.1 1.8v5.5c0 .4-.2.8-.6 1-.1.1-.3.2-.4.1-.2-.1-.2-.2-.2-.4 0-.5-.1-1.1-.1-1.8-.3.6-.2 1.1-.2 1.5.1 1.2-.2 2.4-.6 3.6-.1.4-.3.8-.3 1.2-.1.3-.1.7.3 1-.3.8-.4 1.6-.3 2.5-.2.4-.3.7-.3 1.2 0 .8.1 1.5.3 2.2-.2.2-.3.4-.3.7v2.8c0 .9.2 1.6.6 2.3.3.6.7 1.2 1 1.7.6.9 1.4 1.7 2.6 1.3.2.4.6.7 1 .6.7-.2 1.2.1 1.7.4.3.2.5.3.8.3.4 0 .7.1 1 .2.9.2 1.7.5 2.6.6.4.1.8 0 1.2 0 .4 0 .6-.4.5-.8 0-.1-.1-.3-.2-.4-.3-.3-.3-.5-.1-.8.6-.8.4-1.6-.3-2.3.2-.5.3-.9.3-1.4v-1.9c0-.5.1-1.1-.1-1.5-.3-.8-.2-1.4.2-2.1.2-.4.3-.9-.1-1.2.1-.3.3-.6.4-1 .6-1.7 1.3-3.4 2.1-5.1.2-.3.2-.7.2-1 0 0 .1 0 .1-.1.1-.1 0-.2-.1-.2.1-.2.2-.4.3-.5.5-.4.6-1 .6-1.6.3-.2.3-.4.2-.7-.1-.3-.2-.5-.2-.8.8-.1.8-.1.9-.9v-.3c.7-.4.9-1 1.3-1.7 1.4-2.6 3.1-5 5.7-6.5.2-.1.3-.3.4-.5.8-.2 1.5-.7 2.1-1.2 1.2-.3 2.3-.8 3.6-.9.5 0 .7-.4.6-.8h1.9c0 .3 0 .6.2.8.8.9 1 2 1 3.1-.2.4-.6.3-1 .3-.4-1.2-.8-1.5-1.9-1.5-.2 0-.4 0-.6.1-2.3.5-4.3 1.6-6.2 3-.3.2-.5.5-.4.9-.3 0-.5 0-.6.3-.2 0-.3.1-.3.3-.2.1-.3.2-.3.4-.9.6-1.4 1.5-1.9 2.4-.2.3-.1.5.1.6-.3.3-.5.6-.8.9-.3.3-.5.5-.4.9-.3.1-.2.2 0 .3-.1.2-.3.4-.4.6-.4.4-.5.8-.5 1.3 0 0-.1 0-.1.1-.1.1 0 .2.1.2-.7 1.4-1.5 2.8-1.8 4.3-.4.2-.3.6-.5.9-.8 1.3-1.2 2.8-1.6 4.3-.1.4-.2.9.2 1.3-.5 1.2-.3 2.5-.3 3.8 0 .2.1.4.3.5-.1.2-.3.5-.3.7 0 1.4-.1 2.9 0 4.3.1.9.6 1.5 1.6 1.9.6.2 1.3.1 1.9.3 1.3.5 2.8.3 4.1 1.1h.3c1.2.1 2.3.6 3.2 1.3.9.6 1.8 1.2 2.5 2 .3.3.6.5 1 .7 1.1.7 1.7.6 2.4-.4.2-.3.2-.6.2-.9.7-.1.8-.7.9-1.2.5-.4.6-.9.6-1.5.7-.9 1-1.9 1.2-3 .5-.5.7-1.1.9-1.7.4-1.1.7-2.2 1-3.4.9-2.9 2.4-5.6 3.6-8.4l.9-1.2c.4-.2.7-.5.9-.9.6-.4 1.1-.8 1.2-1.5 1.2-.4 2.3-1 3.6-1 .2 0 .3-.4.1-.5-.8-.5-1.3-1.2-1.9-2-.1-.2-.3-.3-.5-.4-.6-.3-.9-.8-1.2-1.3.4-.2.7-.5.7-.9.1-.1.2-.1.2-.2.6-1.4 1.2-2.7 1.8-4.1.3-.6.4-1.2.1-1.9-.1-.3-.1-.6-.2-.9 0-.2-.1-.3-.1-.5-.2-.3-.2-.6-.2-1h.7c-.1.9.2 1.8.6 2.6.1.9.6 1.5 1.2 2 .4.7.9 1.3 1.7 1.5 0 .3.2.4.4.5l1.2.6c.8.2 1.5.6 2.4.4.5.4 1.1.3 1.6.1.4 0 .7 0 1.1-.1.2.1.5.1.6.3-.6.3-1.3.4-1.5 1.3-.4 2.2-1.3 4.2-1.7 6.4-.2.9-.2 1.7.5 2.4l-.6.9c-.3-.2-.6-.5-.9-.5-1.1-.3-1.9-1-2.7-1.6-.5-.4-.9-.8-1.3-1.3-.2-.2-.4-.3-.5-.2-.6.4-1.4.1-2 .6-.4 0-.7.1-.9.4h-.3c-1.4.9-2.6 2.1-3.5 3.5-.9 1.5-1.6 3-2.1 4.7-.3.4-.4.8-.5 1.2-.5 1.7-1.1 3.4-1.7 5-.7 2.1-1.3 4.2-1.9 6.2-.4.7-.4 1 0 1.4.2.2.6.4.8.6.3.2.8.1 1 .5-.7 0-1.3-.2-1.9-.4-1-.3-1-.3-1.7.5-.5.5-.9 1.1-1.4 1.6-.2.2-.4.3-.6.5-.6.5-.7.5-1.3.1-1.2-.8-2.5-1.6-3.6-2.5-1-.9-2.2-1.4-3.4-2-.7-.8-2.1-1-3.5-1.1z" />

                                                <path class="st42"
                                                    d="M217.9 27.8c-.2-.4-.7-.3-1-.5-.3-.2-.6-.3-.8-.6-.4-.4-.4-.7 0-1.4 1.9.5 3.8 1 5.7 1.7.8.3 1.6.4 2.4.5 1.4.2 2.7.5 4 .9 3.6 1.2 7.3 2 11.2 2.1.4 0 .7.1 1.1.1 2.4.3 4.7.6 7.1.6 1.2 0 2.3 0 3.5.1 1.1.1 2.1-.2 3.2-.2.1 0 .3 0 .4-.2 0-.4.4-.4.7-.5.4-.1.8-.1 1.2-.2.3-.1.3-.3.4-.6.1.9.5 1.6.8 2.5-.8-.6-1.6-.6-2.5-.3-1.9.6-3.9.9-5.8.9-1.8 0-3.6 0-5.3.1-1.2 0-2.3-.2-3.5-.3-1.9-.2-3.7-.5-5.6-.9-.5-.1-1.1-.2-1.7-.3-2.2-.3-4.5-.8-6.6-1.5-1.1-.3-2.2-.5-3.2-.8-1.6-.5-3.2-.6-4.7-.9-.5-.1-.8-.3-1-.3z" />
                                                <path class="st43"
                                                    d="M311.1-149.4c-.4-1.1-.7-2.1-.3-3.3 0-1.7.2-3.3-.1-5-.3-1.5-.6-3-1-4.5-.5-1.9-1.3-3.7-2.1-5.5-.5-1.2-1.3-2.3-1.7-3.6-.1-.2-.3-.4-.4-.6-.6-.6-1.1-1.2-1.7-1.7-.5-.5-1.1-.7-1.8-.7h-3.7c-.4 0-.8 0-1.2.2-.7.3-1.4.2-2.1-.1-.6-.2-1.1-.4-1.8-.4-.5 0-.9-.2-1.1-.7-.4-1-.7-2-1.1-3-.2-.4.3-.8.1-1.2-.1-.4-.5-.6-.5-1.1 0-1.6-.4-1.9 1.7-3.2-.1-.7-.2-1.3-.3-2-.2-1.2.2-1.9 1.5-2.2 1.6-.4 3.3-.8 4.9-1 1.2-.2 2.4-.4 3.5-.9 0-.4 0-.8-.1-1.2-.5-2-1-4-1.5-6.1-.7-2.8-1.6-5.5-2.5-8.1-.4-1.2-.9-2.5-1.3-3.7-.1-.2-.2-.5-.4-.6-.7-.2-.8-.9-1-1.4-.5-1.3-1.1-2.5-1.6-3.8-.1-.1 0-.3-.1-.5-.6-.1-1.2.1-1.8.3-.6.3-1.1.5-1.7.7-3.7 1.6-7.5 1.9-11.2.1-.2-.1-.4-.1-.6-.2-1.6-.7-3.2-1.1-4.9-.9-.8.1-1.6.3-2.3.8-.5.4-1 .7-1.4 1.2-2.5 2.6-4 5.6-4 9.3 0 2.4-.1 4.8.2 7.2.4 2.8 0 5.6-.7 8.3-.3 1.2-.7 2.5-1 3.7-.1.2-.3.4-.4.6.2 2.5.4 4.9.6 7.4.1 1 .1 2 .2 3 0 .6 0 1.1-.4 1.6 0 .2.1.4-.1.6-.1 1.7-.2 3.5 0 5.2.3.4.5.9.3 1.4-.1.2-.1.4 0 .6.2.6 0 1.2 0 1.8 0 1.5-.2 2.9-.1 4.4v1.4c.4 2 .5 4 .7 6.1.3 2.3.9 4.5 2 6.5.5 1 1.1 2 1.5 3 1.5 3.2 3.4 6.1 5.4 9 1.2 1.7 2.3 3.4 3.2 5.2.6 1.2 1.5 2.1 2.5 2.9.8.6 1.9.8 2.9.9 3.9.1 7.8.1 11.6-.5l4.8-.9c.9-.2 1.8-.6 2.5-1.1 1.7-1.3 3.5-2.5 5-4-.2-1.1.3-2 .9-3 1.1-1.6 2.2-3.3 2.7-5.2.4-1.6.9-3.1 1.6-4.6.2-.6.3-1.2.3-1.8.2-2.1 0-3.6-.6-5.1z" />

                                                <path class="st30"
                                                    d="M302-189.9c0-.4 0-.8-.1-1.2-.5-2-1-4-1.5-6.1-.7-2.8-1.6-5.5-2.5-8.1-.4-1.2-.9-2.5-1.3-3.7-.1-.2-.2-.5-.4-.6-.7-.2-.8-.9-1-1.4-.5-1.3-1.1-2.5-1.6-3.8-.1-.1 0-.3-.1-.5 1.2-.4 2.4-.5 3.6-.6 1.6-.1 3.3-.1 4.9.2.9.2 1.9.2 2.9.3 1.5.2 2.8.8 4.3 1.2.3.1.7.3 1 .5 1.5 1 2.9 2.2 4.1 3.6.4.5.6 1 .8 1.6.9 2.7 1.1 5.5 1.5 8.2.3 2.2.2 4.4.8 6.5-.1 2.3.9 4.5 1.4 6.7.4 1.8.9 3.5 1.4 5.3.1.3.2.6.5.8.2.5.2 1 .1 1.5-.3.9-.2 1.8-.1 2.7.1 1.2.1 2.4.1 3.7-.1 2.4-.1 4.9-.2 7.3 0 .4 0 .7.1 1 .4 1 1.2 1.2 2 .4.2-.2.3-.5.3-.8.2-2.1.4-4.3.6-6.4.2-1.6.1-3.1.1-4.7 0-.4 0-.8-.2-1.2-.2-.5-.1-.8.3-1 1-.6 1.7-1.4 2.4-2.3.8-1.2 1.8-2.2 3-3 .3.1.6.1.9 0 .6.2.7.7.9 1.2.3 1 .5 2.1.7 3.1.4 2.2.4 4.4.3 6.5 0 1.4 0 2.7-.3 4.1-.5 2.2-1.3 4.3-2.3 6.3-.7 1.4-1.6 2.6-2.6 3.8-.5.6-1.1 1-1.9 1.2-.9.2-1.4.2-1.5-.9 0-.2 0-.3-.1-.4-.2-.5-.7-.7-1.1-.4-.5.3-.9.7-1 1.3l-.3 1.5c-.5 2-.5 4.1-1.3 5.9-.1.1-.1.3-.1.4-.1 1.1-.5 2.1-.9 3.1-.8 2.1-1.7 4.1-2.6 6.2-.6 1.4-1.3 2.8-2 4.1-.3.5-.6 1-1 1.3-.7.5-1.3 1.2-1.8 1.8-.2.3-.5.5-.8.7-.9.6-1.7 1.3-2.5 2-.4.4-.8.8-1.4 1-.2-1.1.3-2 .9-3 1.1-1.6 2.2-3.3 2.7-5.2.4-1.6.9-3.1 1.6-4.6.2-.6.3-1.2.3-1.8.1-1.6-.1-3.1-.7-4.6-.4-1.1-.7-2.1-.3-3.3 0-1.7.2-3.3-.1-5-.3-1.5-.6-3-1-4.5-.5-1.9-1.3-3.7-2.1-5.5-.5-1.2-1.3-2.3-1.7-3.6-.1-.2-.3-.4-.4-.6-.6-.6-1.1-1.2-1.7-1.7-.5-.5-1.1-.7-1.8-.7h-3.7c-.4 0-.8 0-1.2.2-.7.3-1.4.2-2.1-.1-.6-.2-1.1-.4-1.8-.4-.5 0-.9-.2-1.1-.7-.4-1-.7-2-1.1-3-.2-.4.3-.8.1-1.2-.1-.4-.5-.6-.5-1.1 0-1.6-.4-1.9 1.7-3.2.6.3 1.2.2 1.8.2 1.3-.1 2.5-.7 3.9-.6 1-.4 2.1-.2 3.2-.2s2.2-.1 3.3-.4c.3-.1.7-.2 1-.2.9-.1 1.8-.2 2.5.2 1.1.6 2.1 1.2 3.4 1.1.2 0 .4.2.6.2.2.1.4.1.6-.1.2-.2.2-.5.1-.7-.5-.7-.9-1.4-1.4-2-1.1-1.3-2.5-2-3.8-3.1-1.3-1.1-2.7-1-4.2-.9-.6-.1-1.1.1-1.5.2zm-2.8 14.4c1.4 1.1 1.7 1.1 3.1.3h.1c.7-.1 1.4-.1 2.1-.3 1.5-.5 2.9-1.2 4.3-1.8.5-.2.6-.5.5-1-.5-1.4-1.5-2.4-2.7-3.2-.4-.3-1-.3-1.5-.3h-3c-1.2.1-2.2.6-2.9 1.7l-.6.3c-.3 0-.7 0-1-.1.5-1.3 1.5-1.9 2.9-2.1h.2c1.6-.4 3.1-.3 4.7-.2 1.7 0 3.1.6 4.2 1.8.4.5.9 1 1.4 1.4l.3.3c.1.1.3.1.4-.1.1-.1.1-.2.1-.3-.1-.3-.3-.6-.5-.8l-1.5-1.5c-1-1.1-2.3-1.5-3.7-1.6h-1.5c-1.8-.1-3.5.1-5.3.4-.8.2-1.4.5-1.8 1.3-.3.6-.9 1.1-1.3 1.7-.2.2-.4.5-.5.7-.1.1 0 .3 0 .4.1.1.3.2.4.1.2-.1.3-.2.5-.3.2.1.4.3.5.5l-.6 1.2c-.1.2 0 .4.2.5.2.1.4.1.5 0l.6-.6c.1.2.1.4.2.7.1.7.6.9 1.2.9zm31.3 4.3v-.5c-.1-.9-.5-1.8-1-2.5-.2-.3-.6-.4-1-.2s-.6.6-.4 1c.1.2.2.5.3.7.6 1.2.6 2.3-.2 3.5-.3.5-.7.9-1 1.3-.3.4-.2.8.1 1.1.3.3.8.3 1.1 0 1.2-1.2 2.2-2.5 2.1-4.4zm-5-4.6c0 .7.3 1 .7 1.1.4.1.8-.2.9-.6.4-1.9 1.3-3.5 2.6-5 .2-.2.4-.5.5-.8.1-.3 0-.6-.2-.8-.3-.2-.6-.3-.8-.1-.3.2-.5.4-.7.6-1.2 1.4-2.1 3-2.7 4.8-.2.3-.2.6-.3.8z" />

                                                <path class="st42"
                                                    d="M326.4-213.2c-1.2.1-2.5 0-3.7-.4-2.3-.7-4.1-2.1-5.4-4-.6-.8-1.2-1.6-2.1-2.2-1-.6-2-1.1-3.3-1.1h-2.1c-.4 0-.8.2-1.1.5-.7.7-1.1 1.5-1.2 2.4 0 .3 0 .5-.1.8-.1.4-.4.6-.8.5-.5-.2-1-.3-1.4-.5-1.4-.6-2.8-.9-4.3-.9-1.5.1-3 0-4.4 0-.7 0-1.1-.2-.8-1 .3-.8.1-1.6.3-2.4.3-1.2.8-2.4 1.2-3.6.4-1.2 1-2.5 1.5-3.7.3-.6.5-1.1 1-1.5.6-.6 1.2-1.1 2.2-1 .6.1 1.2 0 1.8-.2.2-.1.5-.1.8-.1 2.1.2 4.1.5 5.9 1.8 1.7 1.2 3.4 2.4 4.8 3.9 1.7 1.8 3.5 3.6 5.3 5.3 1.3 1.2 2.8 2 4.4 2.6.6.2 1.1.1 1.7.2.4 0 .7.1.8.5.1.2.2.4.3.5 1 .4 1 1.5 1.4 2.3.1.2.1.4.1.6 0 .4-.2.7-.6.7h-2.2z" />
                                                <path class="st42"
                                                    d="M287.6-217.8c.1-3.7.9-7.1 2.7-10.3.5-.9 1.1-1.7 1.8-2.5.2-.3.5-.4.8-.7 2.5-1.9 5.3-2.9 8.3-3.8 1.1-.3 2.2-.6 3.3-.4h.6c1.2-.2 2.3-.1 3.4 0 2.1.1 4 .6 5.9 1.3 1.4.6 2.7 1.5 3.8 2.6l2.2 2.2c.4.4.8.8 1.3 1.1.4.2.7.6 1 .9 1.4 2 3.2 3.7 4.9 5.4.7.7 1.6 1.3 2.6 1.6l.9.3c.1 0 .2.1.1.2s-.1.2-.2.2h-.4c-.5-.2-1-.2-1.4.2-.1.1-.3.2-.4.2-1.5.1-3 .3-4.3-.4-1.4-.8-2.8-1.7-3.9-2.9-1.9-2-3.8-3.9-5.7-5.7-2.1-2-4.5-3.5-7.2-4.4-.5-.1-1-.2-1.5-.2h-4c-.3 0-.6 0-.9.1-1.5.3-2.2.8-3.1 2.6-.9 1.6-1.6 3.3-2.2 5-.8 2.4-1.6 4.7-2 7.2 0 .1-.1.3-.2.4-1.8.5-3.4 1.7-5.2 2.2-.3.1-.6-.1-.6-.5-.4-.8-.4-1.4-.4-1.9z" />
                                                <path class="st42"
                                                    d="M328-202.8c-1.5.3-2.9-.4-4.4-1-1.5-.5-2.8-1.4-4.2-2.1-.3-.2-.6-.4-.8-.7-1-1.1-2-2.2-2.6-3.5-.6-1.2-1.4-2.1-2.3-3-.3-.3-.7-.5-1-.7-.7-.4-1.5-.7-2.2-1.1-.3-.2-.6-.3-.9-.6-.8-.7-.9-1.1-.4-2l.6-.9c.2-.3.5-.5.8-.6 1.2-.3 2.4-.4 3.5.4.6.5 1.3 1 1.7 1.8.5.9 1 1.8 2 2.2l.3.3c1.3 1.4 2.9 2.2 4.7 2.6.5.1.9.2 1.4.1 1.9-.1 3.8.2 5.6.3.3 0 .6.1.7.5.1.4.3.9.3 1.3 0 .8 0 1.5.3 2.3.1.2.1.4 0 .6-.3.9-.2 1.8-.3 2.7 0 .5-.3.8-.9.9-.6.2-1.1.2-1.9.2zM303.6-237.6c-.3.4-.6.5-.9.6-2.6.5-5.1 1.2-7.5 2.3-.4.2-.7.3-1.1.5-2.1.7-3.7 2-4.7 4.1-.3.6-.6 1.3-.9 1.9-.5 1-.7 2.1-1.4 3-.5.7-.5 1.7-.7 2.5-.2 1-.3 2-.4 3-.2 1.3-.2 2.6-.2 3.9 0 .8-.3 1.1-1.1 1.1-.5 0-.9-.1-1.3-.3-.4-.1-.6-.4-.6-.8-.1-1.5-.3-3-.8-4.5-.7-2.4-.8-4.9-.8-7.4 0-.4.2-.8.4-1.1.8-1.2 1.8-2.2 2.9-3.1 1.8-1.3 3.7-2.4 5.7-3.3 1.6-.7 3.3-1.2 5.1-1.6 1.5-.3 3-.7 4.5-.9 1.2-.1 2.4.1 3.8.1z" />
                                                <path class="st42"
                                                    d="M274.5-225.1c-.1-2 .8-3.5 1.9-4.9 1.3-1.6 3-2.6 4.9-3.1.4-.1.8-.2 1.2-.4.4-.1.9-.5 1.2 0 .2.4-.5.5-.8.8-.5.4-1 .8-1.3 1.3-.5.8-1.2 1.4-1.8 2.1-.5.5-.7 1.3-.7 2 0 1.2-.1 2.3.2 3.5.3 1.1.3 2.3.4 3.5.1 1.2.5 2.3.7 3.4 0 .1.1.3.1.4 0 .1 0 .3-.1.4-.1.1-.3.1-.4.1-1-.5-1.9-.9-3-1.1-.2 0-.3-.2-.5-.4-.1-.1-.1-.2-.1-.3-.6-1.6-1.1-3.2-1.6-4.7-.3-.9-.4-1.8-.3-2.6z" />
                                                <path class="st39"
                                                    d="M321.2-126.6c.5-.2 1-.4 1.3-.9.5-.2 1 .1 1.4.3.6.4 1.3.8 1.9 1.3 1 .9 1.9 1.8 3 2.6.8.6 1.3 1.5 1.8 2.4.3.5.5 1 .8 1.4 1.3-.5 1.3-.5 2.5.3.4.3.8.5 1.2.7 1.9.6 3.6 1.6 5.6 1.9.2 0 .4.2.5.3-.1.3-.2.6-.4 1-.3.1-.3.3-.3.6-.7 0-1.4-.3-2-.6-2-.9-4.1-1.4-5.9-2.6-.3-.2-.7 0-.8.3-.3 1.1-.7 2.1-1 3.2-.1.3-.1.6-.1.9-.6.9-.7 2-.9 3v.1c-.1.1-.2.2-.2.3-.5 1-.9 2-1.4 3.1-.5 1.4-1.3 2.6-2 3.9-.8 1.6-1.8 3.2-2.9 4.6-.7 1-1.4 2-2.3 2.8-.1.1-.2.2-.3.4-.2.3-.1.7.3.8 1.5.3 3.1.7 4.6.7-.2.6-.4 1.1-.8 1.6-1.3-.1-2.6-.3-3.9-.6-.3-.1-.6-.1-.9-.1-.1 0-.2.1-.2.1 0 .1 0 .2.1.2.2.1.4.1.6.2 1.3.3 2.6.6 4 .9 0 .3-.1.6-.4.7-.9-.2-1.8-.3-2.7-.6-1-.3-2-.1-3 .3-.1.1-.2.2-.4.3-.4.2-.7 0-.8-.3 0-.1-.1-.2-.1-.3-.1-.8-.5-1.2-1.2-1.3-.5-.6-.5-.6-1.1-.3-.1 0-.2.1-.2.2-.1.1-.3.1-.4 0-.1-.1-.1-.3-.1-.4.1-.2.2-.3.3-.5-.5-.6-1.4-.6-1.9-1.1-.3-.6-1-.8-1.5-1.2-.7-.6-1.5-1-2.5-1-.4 0-.9-.1-1.1-.6-.2-.5-.4-.4-.8-.2-.6.4-.8.3-1.1-.5-.1-.2-.1-.4-.3-.5-.2-.2-.6-.3-.8-.1-.1.1-.3.2-.3.3-.1.5-.4.8-1 .8-.8 0-1.2.5-1.3 1.2-.9.3-1.8.7-2.4 1.5h-.4c-.2.1-.4.2-.7.3-2.4 1.2-2.4 1.2-4 3.1l-.3.3c-.3 0-.6.2-.8.3-2.2 1.5-4.2 3.2-6.1 5-2.2 2-4.2 4.1-6.1 6.4-.4.5-.8 1-.7 1.8-.6 0-.9.3-.9.9-.5.3-.6.7-.6 1.3-.5.3-.8.6-.9 1.2-1.1 1.2-2 2.6-2.7 4-.7 1.3-1.5 2.6-2.4 3.8-.2.2-.4.5-.4.8-.5.3-.8.6-1 1.2 0 .1-.2.2-.3.3-1 1.4-1.8 2.8-2.6 4.3-.4.8-.9 1.5-1 2.4-.4.3-.6.8-.7 1.3-.1.6-.4 1.2-.3 1.8-.2.1-.3.4-.3.6-.1.7-.5 1.2-.8 1.7-.2.3 0 .6.3.7.5.1 1-.1 1.4.3.3.5.3 1 .3 1.5-.1.2-.2.3-.3.5-.5.8-1.2.9-1.8.1-.2-.2-.3-.4-.4-.7 0-.1-.2-.1-.3-.1-.1 0-.2.1-.2.2-.1.5-.3 1-.3 1.5-.1 1.8-.6 3.6-.8 5.4-.2 1.2-.6 2.5-.4 3.8-.5.3-.3.8-.3 1.2-.4.5-.3 1-.3 1.6v.9c-.2.1-.2.3-.3.5-.2.8-.3 1.7-.4 2.5-.1 1.4-.3 2.8-.5 4.2-.1 1.1-.3 2.1-.5 3.1-.4 2-1.2 3.9-1.1 6-.4 1.3-.3 2.7-.2 4.1-.4.1-.8.1-1.1-.2-.2-.2-.5-.3-.8-.4V-18c0-.6.1-1.1.2-1.7.3-1.8.9-3.4 1.2-5.2.2-1.3.5-2.7.7-4 .2-1.8.5-3.5.8-5.2.2-1 .5-2.1.4-3.2.2-.4.4-.8.3-1.2v-1.2c.2-.4.3-.8.3-1.2.1-.4.2-.9.3-1.3.3-1.5.5-3 .8-4.5.2-1.2.5-2.5.8-3.7.4 0 .6-.2.6-.7v-.9c.3-.8.8-1.5.6-2.4.2-.1.3-.4.4-.6v-1.9c.5-.4.2-1 .3-1.6 0-.5 0-.9-.1-1.4-.2-1-.5-2.1-.5-3.1 0-.1-.2-.2-.2-.4v-3.1c0-.9-.1-1.7-.3-2.6-.4-2-.2-4-.3-6v-1.3-1.2-1.3-6.3c0-.5 0-.9-.1-1.4-.3-1.2-.3-2.5-.1-3.6.2-.9 0-1.5-.4-2.3-.2-.4-.4-.5-.8-.5h-5c.1-.6.2-1.1.6-1.6h3.8c.3 0 .6 0 .9-.1.3-.1.5-.5.5-.9s-.3-.5-.6-.5c-.6 0-1.1.1-1.7-.1-.9-.2-1.7-.2-2.6-.2 0-.4.2-.6.3-.9.5 0 .9 0 1.4.2.8.2 1.6.1 2.4.1.3 0 .5-.2.5-.5.1-.9-.2-1.2-1.1-1.3h-3.2c.1-.6.2-1.2.7-1.6h3c.4 0 .5-.2.6-.6.1-1.1-.9-2.6-2-3h-.4c-.4.2-.7.3-.9.8-1.3.8-2.5 1.8-3.7 2.7h-.6c-.1-1.5.4-2.7 1.4-3.7.6-.6 1.2-1.2 1.5-1.9.3-.7.7-1.2 1.2-1.7.3-.3.6-.6.4-1-.2-.4-.6-.2-1-.2-.3 0-.6.1-.9.3-1.1.5-2.1 1.2-3 2-.3.3-.5.5-.9.4.3-.6.6-1.2.9-1.9.7-.4 1.5-.7 2.1-1.3.3-.3.6-.3 1-.2.3.1.5 0 .8-.2 1.6-1.2 3.2-2.4 4.8-3.4 1.3-.9 2.6-1.7 3.8-2.7 1.1-.9 2.3-1.7 3.2-2.8.6-.8 1.3-1.4 1.9-2.1.5-.6 1.2-1 1.5-1.8h.4c0 .5 0 1.1.1 1.6.1.9-.2 1.7-1 2.3-.2.1-.4.4-.5.6-.1.1-.1.3 0 .4.6.6 1 1.4 1.7 1.9 0 .6 0 1.1.1 1.7-1 2-1.8 4-2.5 6.1-.2.7-.4 1.5-.3 2.2.1.5 0 1-.2 1.5-.1.4-.3.9-.4 1.3-.1.4-.2.9.1 1.3.1.2.1.5.2.7.4 1.7 1.5 3.1 3.3 3.9 2.4 1.3 4.9 2 7.6 2.1.3.2.7.2 1 .2 1.6 0 3.2.1 4.8 0 1.2-.1 2.5-.1 3.7-.6.3 0 .5 0 .7-.2.1 0 .2 0 .2-.1 1.4-.5 2.6-1.2 3.8-2.2 1.7-1.5 3.5-3 5.3-4.3 2.5-1.8 4.8-3.7 7-5.9 1.1-1.1 2.3-2.2 3.4-3.3.5-.5.9-1 1.3-1.5.8-1 1.6-1.9 2.4-2.7 1.7-1.7 2.9-3.7 4.1-5.7.1-.2.2-.5.3-.7.5-1.2.9-2.8.7-4.5zm7.2 14.1c.4-.3.4-.7.5-1.1.2-.9.1-1.9-.1-2.9-.2-.8-.9-.9-1.3-1.4-.1-.1-.2-.1-.3-.2.1-.4.2-.8.3-1.1.1-.4.5-.5.8-.2.2.1.4.3.6.5.3.3.6.6 1 .6 0 .1 0 .2.1.3l.1.1c.1 0 .2-.1.1-.2 0-.1-.1-.1-.2-.2-.1-.5-.3-.9-.6-1.3-.4-.5-.8-1-1.1-1.6-.5-.9-1.3-1.3-2.2-1.7 0-.1 0-.2-.1-.3-.6-1-1.5-1.7-2.6-2.3-.2-.1-.4.1-.4.3-.1.7 0 1.4-.2 2.1-.2.5 0 .7.5.9.7.3 1.4.5 2.2.8 0 .4-.1.8-.3 1.2-.2.2-.3.3-.6.2-.6-.2-1.2-.5-1.8-.7-.4-.1-.9.4-.8.8 0 .2.2.2.3.3h.9c.4 0 .8.1 1.1.4.4.3.3.6 0 .9-.6-.4-1.4-.2-2-.4-.8-.3-1.2.1-1.5.7-.1.2-.3.4-.2.7.9.4 2 .5 2.9 1 0 .7-.5 1-1 1.3-.7-.2-1.4-.5-2.2-.6-.7-.2-1.4-.1-1.9.6-.6.7-1.2 1.2-1.8 1.8-.3.3-.5.7-.5 1.2-.4.3-.8.6-.9 1.1-.6.1-1 .5-1.2 1-.5.3-.9.7-1.2 1.2-.4.1-.7.2-.9.5-.8 1.1-2 1.9-2.9 2.9-.6.6-1.2 1.2-1.9 1.7-.4.3-.7.7-1.1 1-.4.4-.8.7-1.3 1.1 1.9.7 3.7 1.4 5.4 2.3.4.2.8.4 1.2.3.1.6.5.6.9.6.2.4.5.6.9.6.2.4.5.6.8.9l3.9 2.4c.3.2.7 0 .8-.4v-.6c.5-.1.8-.4 1.1-.8.2-.3.4-.7.7-1 1.7-1.7 2.8-3.8 4.1-5.7.2-.4.2-.8.2-1.2.6-.2.6-.2.6-.9.7-.3.7-.9.6-1.5.6-.2.6-.2.6-.9.2-.1.3-.4.3-.6.5-.2.6-.6.8-1 .2-.4.3-.9.5-1.3.1-.6.3-1.4.3-2.2zm-43.2 22.3c.3.1.6.1.9 0 1-.2 2-.4 3-.7.9-.2 1.6-.6 2.2-1.2.1-.1.4-.3.2-.5-.1-.1-.3-.1-.4-.1-2.5.2-5.1.1-7.6.2l-1.5-.3c-1.7-.1-3.3-.6-4.9-1.1-.8-.3-1.5-.5-2.3-.8-1.4-.8-2.7-1.8-3.7-3.1 0 0-.1 0-.2-.1-.3.6-.3 1.3-.3 1.9 0 .1.1.3.2.4 1.2.9 2.4 1.9 3.7 2.6.3.3.8.4 1.2.6.6.3 1.2.5 1.8.8 1.2.7 2.5 1 3.9 1.1.7.4 1.5.2 2.2.2.5.2 1.1.2 1.6.1zm-16.9-21.7c0-.3 0-.6-.1-.9 0-.2-.3-.3-.5-.3-.1 0-.3.1-.4.2-1 .8-2.1 1.6-3.3 2.2-.4.2-.7.5-.9.8-.2.3-.4.7-.7 1-1.1.6-1.5 1.8-2.4 2.7-.1.1-.2.3-.1.6l.1.1c.5 0 1 .1 1.5 0 .5 0 .8.6 1.4.6h.2c0 .1.1.2.1.3.9.7 1.4 1.5 1.4 2.7 0 .2.1.4.3.5 0 .3 0 .6.1.9.3.7.2 1.5.2 2.3v19c0 1.3-.1 2.5.3 3.8.1.3 0 .6 0 .9 0 .9.1 1.8 0 2.8-.1 2 .4 3.9.3 5.9 0 .1 0 .3.1.4.2.5.2 1.1.2 1.7-.1 1 .4 2 .4 3l.1.1h.2c.2-.2.2-.5.2-.7 0-.9-.1-1.9.1-2.7.1-.7.2-1.4.2-2.1.1-2.1-.2-4.2.3-6.2v-.6c0-1.2.1-2.5 0-3.7-.2-1.6-.2-3.1 0-4.7.1-1.3 0-2.6 0-4 0-.4 0-.7.1-1.1.2-.7.2-1.4.2-2.1v-2.8c.4-.9.5-1.8.6-2.8 0-1.4.5-2.8.4-4.2 0-.2.1-.5.2-.7.2-1.2.5-2.4.4-3.6.4-.5.6-1.2.6-1.8 0-.9.3-1.7.5-2.5.2-.6.4-1.2.5-1.7.1-.2.1-.4 0-.6-.4-.6-.7-1.3-1.3-1.6-.4-.4-1-.7-1.5-1.1zm1.1 35.9c-.2 2.1-.1 4.1-.1 6.2-.3 1.6-.4 4.2-.1 5.8.5-.8.9-1.4 1.3-2.1 1.5-1.6 2.5-3.4 3.6-5.3.6-1 1.2-2 1.9-3 .6-.9 1.2-1.8 1.7-2.7.9-1.5 1.8-2.8 2.9-4.1 1.6-1.9 3.3-3.8 5.1-5.4.2-.2.4-.4.7-.6.1-.1.1-.2.1-.3 0-.2-.2-.2-.3-.2-1.2 0-2.3 0-3.5-.1-2.2-.2-4.3-.6-6.3-1.7-.4-.2-.9-.5-1.4-.5-.8-.5-1.7-.7-2.4-1.3-.7-.5-1.4-1.2-2.3-1.5-.3 1.4-.6 2.7-.6 4.1-.1 1.7-.2 3.4-.3 5.2-.2 2.4-.3 4.9 0 7.5zm3.4-37c.1-.2.3-.5.4-.8.2-.4.3-.7-.1-1.1-.2-.2-.3-.5-.5-.8-.1-.2-.3-.3-.4-.4-.5-.3-1.1-.2-1.6.5-.3.5.2.6.5.8.4.4.7.7 1 1.2.2.3.3.6.7.6zm-.6 1.2c0-.1 0-.3-.1-.4-.4-.8-1.1-1.3-1.6-2-.1-.1-.3-.2-.5-.3-.4-.2-.8 0-1 .4-.2.4-.1.7.2.9.8.5 1.5 1 2.3 1.5.1.1.3.1.4.1.2 0 .2-.1.3-.2z" />

                                                <path class="st44"
                                                    d="M324.3-90.6c.3-.1.4-.4.4-.7.2-.3.3-.5.3-.8.4-.4.6-1 .8-1.6.3-.5.6-1.1.9-1.6.6-1.3 1.2-2.6 1.9-3.8.5-1 1.3-1.9 1.9-2.9 1.4-2.4 2.9-4.6 4.7-6.7.8-.6 1.3-1.5 2-2.1.3-.3.6-.6.8-.9.9-1 1.9-1.8 2.6-2.8.2-.1.4-.3.3-.6.6 0 .8-.3.9-.8 1.1-.4 1.1-.4 2.1-.1 2.8 1 5.7 2 8.5 3 .3.1.3.3.1.6-.1.1-.2.2-.3.4-1.1.8-1.9 1.9-2.7 3-.6.7-1.3 1.4-1.7 2.3-.4.3-.8.7-.9 1.2l-.3.3c-.5.3-.7.7-.9 1.2-.3.4-.7.9-1 1.3-1.1 1.6-2.2 3.3-3.4 4.9-.8 1.1-1.6 2.2-2.3 3.4-.7 1.2-1.5 2.3-2 3.6-.5.4-.7.9-.8 1.5-.3.3-.6.6-.6 1-.2.1-.3.4-.4.6-.4.4-.6 1-.8 1.5-.2.1-.3.3-.5.4h-.3c-3-1-6.1-1.7-9.2-2.2-.3-.1-.6-.2-.8-.4.3-1 .6-1.6.7-2.2z" />
                                                <path class="st10"
                                                    d="M347.9-107c.4-.9 1.1-1.6 1.7-2.3.9-1 1.7-2.1 2.7-3 .1.1.2.3.2.4-1 1.2-1 1.3.5 1.7.9.3 1.9.5 2.8.8 1.4.4 2.7 1.1 3.8 2.2l1.2 1.2c.7.8 1.5 1.4 2.3 1.9.2.1.4.3.6.4.4.3.4.7-.1.8-1.9.6-3.7 1.3-5.6 1.9-.3-.5-.6-.9-1.1-1.1-1.2-.6-2.3-1.4-3.5-2.1-1.3-.7-2.6-1.6-4-2.1-.5 0-1.1-.2-1.5-.7zM341.8-116c-.1.5-.3.9-.9.8.1-.3.2-.6.4-1 .2.1.3.1.5.2z" />

                                                <path class="st22"
                                                    d="M453.5 12.1c.4 0 .8 0 1.2.1-.4.3-.8.3-1.2-.1zM456.3 16.6c-.2 0-.3-.1-.3-.2.1.1.2.1.3.2zM456.3 6.5c-.2 0-.3-.1-.3-.2.1.1.2.1.3.2z" />

                                                <path class="st40"
                                                    d="M336.3.2c-.4 0-.7.2-.5.7.1.3.4.6.5.9.1.2.1.5-.1.7-.2.1-.4 0-.5-.1-.1-.1-.2-.1-.2-.2-.3-.1-.6-.1-.7.3-.1.3-.1.6-.2.9-.1.1-.3.1-.4.3-.4.7-.9 1.4-1.2 2.1-.4 1-1.1 1.7-1.8 2.4-.6.6-1.2 1.1-1.5 1.9-.2.5-.6.8-1 1.1-.2.2-.5.3-.7.5-.5.4-.5.6-.1 1.4-.2.4-.4.8-.2 1.3.1.4.5.5.8.3.3-.3.6-.6.9-.8.2-.2.4-.6.7-.3.3.3-.1.6-.2.8-.3.7-.7 1.2-1.3 1.7-.4.4-.7.8-.4 1.3.1.2.1.4 0 .6-.3.6-.5 1.3-1 1.8-.3-.2-.3-.5-.3-.8 0-.1-.1-.3-.3-.3-.2-.1-.4.1-.5.3-.2.8-.4 1.6.2 2.4-.4.5-.7 1.1-.7 1.8 0 .9-.2 1.8-.9 2.5v-.9-1.9-2.7-.9c-.1-.5-.2-.9-.6-1.3.3-.4.4-.8.2-1.2-.1-.2-.1-.4-.1-.6-.2-.6-.3-1.1-.5-1.8-.9.6-1.7.9-2.6 1.1-1.3.3-2.5.7-3.8 1-2.2.4-4.5.7-6.8.2-.2-.1-.5 0-.8 0h-1.5c-.7.1-1.4-.3-2.1-.3h-.9l-1.8-.3c-.5-.3-1-.4-1.6-.3h-.6c-1.4 0-2.6-.3-3.6-1.3-.4-.4-.9-.7-1.4-.9-1.8-.8-3.6-1.4-5.4-2-.3-.1-.5 0-.6.3-.3 1.5-.6 3-.6 4.5 0 .4.1.8 0 1.2-.4 1.5-.2 3-.3 4.5-.5.4-.2 1-.3 1.5v5.2c0 1.2 0 1.3 1.1 1.6.9.3 1.7.4 2.6.6.3.4.7.4 1.1.5 2.2.7 4.4 1.3 6.6 1.9.2.1.5 0 .8 0 .4.5.9.7 1.6.7.4.1.9.2 1.3.3h.9c.4.8 1.2.7 1.9.9.6-.1 1 .3 1.6.3.4 0 .8.1 1.2.1 2 .4 4 .9 6.1.8 1.6.2 3.1-.2 4.3-1.2.2-.2.4-.3.6-.4.3-.2.6-.2.9-.2 0 .6-.4 1-.6 1.5-.4.3-.9.5-1.3.8-.6.3-1.1.7-1.8.7-1.1 0-2.3.2-3.3 0-1.7-.3-3.5-.2-5.2-.8-.3-.1-.6-.1-.9.2l-.2.2c0 .1.1.3.2.4.6.2 1.1.4 1.8.4.9 0 1.7-.1 2.6.2.3.1.6.1.9.1h2.7c1.1.1 2.2-.1 3.2-.7.2-.1.5-.2.7-.2 0 .5 0 1.1-.3 1.5l-.3.3c-.4 0-.7 0-1.1.1-1.7.4-3.4.3-5.1 0-.5-.1-.9-.1-1.4-.1-1.2 0-2.3.1-3.5-.3-.3-.1-.6 0-.9 0-.5 0-1-.4-1.5-.3-.4 0-.9 0-1.3-.2s-.8-.1-1.2-.1c-.4 0-.8 0-1 .5-.2.6-.3 1.3-.3 1.9 0 .5-.1 1-.5 1.4-.1.1-.3 0-.4 0-.1 0-.2-.2-.1-.2.4-1 0-2.1.4-3.2.2-.5 0-.7-.5-.9-.4-.2-.8-.1-1.2-.1-.9 0-1.8-.3-2.7-.5-1.8-.5-3.4-1.3-5.1-1.9-.9-.3-1.8-.7-2.7-1-.4-.1-.6 0-.6.4v1.8c-.7-.3-1.4-.6-1.3-1.6v-.1c-.1-.2-.2-.3-.5-.2-.2.1-.5.2-.6.4-.4.6-.9.3-1.3.1 0-.4-.1-.9 0-1.2.4-1 0-1.5-1-1.7-1.5-1-3.1-1.7-4.8-2.3-1.9-.7-3.6-1.5-5.3-2.6-.2-.1-.4-.1-.6-.2v-.6c.2-.5.2-1 0-1.6-.1-.2 0-.4 0-.6 1.1.1 2 .5 3 .9.7.3 1.4.6 2.2.6.4.2.7.5 1.2.6 1.3.5 2.6 1 3.9 1.6.4.2.8.3 1.3.5.4.1.6 0 .7-.5v-.6V26v-.9-2.5-1.8c.5-1.6.3-3.3.5-5 .2-1.6.3-3.2.6-4.8.1-.4 0-.7-.4-.9l-3.3-1.8c-1.3-.7-2.8-1.2-4.1-2-1.2-.8-2.4-1.5-3.8-1.9-.4-.1-.9-.3-1.2-.7 0-.3 0-.7.3-.9.7.1 1.3.6 2 .8 1.3.4 2.4 1.1 3.5 1.8.3.2.7.5 1 .6 1.7.7 3.5 1.5 5 2.5l.6.3c.3.1.5.1.6-.2.1-.2 0-.4-.1-.5-.8-.6-1.6-1.2-2.6-1.6-1.1-.5-2.2-1-3.2-1.6-1.6-1.1-3.4-1.8-5.1-2.7-.4-.2-.9-.3-1.3-.2-.1-.6.1-1.1.5-1.6.9.7 1.9 1.1 3 1.5.6.2 1.2.4 1.6.8 2.2 1.6 4.9 2.5 7.2 3.9.2.1.4 0 .5-.2L289-.2c.1-.3.3-.6.3-1 .2-.7.4-1.4.3-2.1.4-.2.3-.6.3-.9.2-.1.3-.3.3-.6.1-.3.2-.7.3-1 .2-.7.4-1.4.3-2.1h2.8c-.1.8-.5 1.5-.3 2.4-.4.7-.3 1 .4 1h2.3c.2 0 .5 0 .7.1.3.1.5.6.4.9-.1.3-.4.3-.6.2-.2 0-.5-.1-.7-.1-.8-.2-1.7-.1-2.6-.1-.4 0-.5.3-.5.6-.3.8-.3 1.6-.3 2.4-.4.3-.3.8-.3 1.2-.1.1-.2.1-.2.2-.3 1.4-.5 2.9-.7 4.3-.1.6-.2 1.3-.3 2-.1.7.2 1.2.8 1.4 1.1.4 2.1.8 3.2 1.1 1.4.5 2.8 1.1 4 2.1.7.6 1.6 1.1 2.6 1.1h1.6c.8 0 1.6.5 2.4.3h.7c.7.4 1.4.3 2.1.3h1.4c.7.2 1.4.3 2.1.3 1.2 0 2.5.1 3.7-.1 1.3-.2 2.7-.5 4-.9 1-.3 2-.6 2.9-1.3.5-.4.6-.8.4-1.3-.3-.7-.6-1.4-.8-2.1-.8-2.6-2.1-5-3.5-7.4-.5-.9-1.3-1.7-2.1-2.4-.3-.3-.7-.4-1.1-.4 0-.6-.3-.9-.9-.9 0-.3-.1-.6-.4-.8-.5-.3-1-.7-1.4-1.1 0-.6-.2-1.1-.8-1.3-.6-.3-1.2-.6-1.7-.9-.2-.1-.3-.4-.2-.6.5-.6.8-1.4 1.5-1.9.1-.1.4-.1.6-.2l.1.1c0 .1 0 .2-.1.3-.5 1.1-.5 1.1.7 1.2.6.3 1.1.7 1.8.6 0 .4.2.6.6.6.5.7 1.3 1 2.1 1.2.2.4.5.6.9.6.2.5.7.8 1.1 1.3.6.6 1.2 1.2 1.7 1.9 1.4 1.7 2.5 3.7 3.7 5.5.7 1.1 1.3 2.3 1.7 3.5.2.4.1 1.2.7 1.2.5 0 .5-.7.8-1 .4-.5.9-1 1.3-1.5 1-1.2 1.7-2.7 2.5-4 .3-.4.5-.9.4-1.4.9-.2.9-.9.9-1.5.7-.4.9-1.1.9-1.8.4-.2.3-.6.3-.9.3 0 .6-.2.7-.5.3-.7.6-1.5.5-2.3.7-.3.6-.9.6-1.5.4-.3.5-.8.7-1.3.5-1.4.9-2.9 1.4-4.3.7-2.1 1.4-4.1 2.1-6.2.1-.4.2-.9.3-1.3.1-.3 0-.5-.3-.6-.3-.1-.6-.2-.8-.3-1.5-.5-3-1-4.5-1.4-.8-.2-1.6-.6-2.5-.4-.3-.5-.8-.3-1.2-.3-.2-.1-.3-.3-.5-.3-.6 0-1.1-.3-1.7-.4.3-.9.6-1.9.7-2.8 0-.1.1-.1.2-.2.3 0 .6 0 .9.1.8.3 1.6.3 2.4.2.3.5.8.3 1.2.3l.1.1c2.1.7 4.2 1.4 6.4 2 .6.2 1 0 1.2-.6l.9-2.4c1.3-3.4 2.8-6.6 3.7-10.1.3-1 .7-1.9.5-3 .7-.3.7-.9.6-1.5.4-.3.4-.8.3-1.3.3-.1.3-.4.3-.6.3-.6.5-1.2.6-1.8.3-.5.4-1 .3-1.5.4-.3.5-.7.6-1.2.2-.7.4-1.4.6-2 .7-2 1.4-3.9 2.1-5.9.1-.3.2-.7.3-1 .4-1.4.4-1.3-1.1-1.6-1.7-.3-3.3-.2-5-.2h-1.8c-.5-.1-1 .2-1.5.3h-1.8c-.3 0-.5.1-.7.2-.3 0-.6 0-.9.1-.7-.1-1.3.2-1.9.3.1-1.2.6-2.3 1.5-3 .5 0 1-.4 1.5-.3.4.1.8-.1 1.2-.3.7.1 1.4-.1 2.1-.3H352c2.3 0 2.3 0 2.8-2.1.5-2.2 1.1-4.4 1.8-6.6.2-.7.5-1.3.4-2.1.5-.5.7-1 .6-1.7.4-.3.6-.8.6-1.3l.3-.9c.2-.5.6-1 .6-1.5.2-.5.6-1 .6-1.5.2-.4.5-.8.6-1.3.8-3.4 2-6.6 2.6-10 .4-2.3.9-4.6.8-6.9v-1.2c.4-.4.8-.2 1.2-.2-.1 1.9.1 3.7-.3 5.6-.3 1.8-.7 3.6-1.1 5.3-.6 2.5-1.4 4.9-2.1 7.3-.1.2-.1.5-.2.7 0 .2 0 .4.3.5.2.1.4 0 .5-.1.2-.4.5-.9.6-1.4.9-3.4 2-6.8 2.7-10.3.4-2.1.9-4.3.7-6.5v-1.2l1.2.9v2c0 .5 0 .9-.1 1.4l-.6 3c-.4 2.2-.9 4.4-1.6 6.5-.5 1.6-.8 3.4-1.4 5-.1.3-.1.6-.1.9-.7.3-.6.9-.6 1.5-.5.4-.6.9-.6 1.5-.4.2-.3.5-.3.9-.6.3-.7.7-.6 1.3-.3.5-.6.9-.6 1.5 0 .1-.1.2-.1.3-1.2 3.3-1.8 6.8-2.9 10.2-.1.4.1.7.6.8 1.2.3 2.4.4 3.5.9.4.1.9.2 1.3.4.6.1 1.2.4 1.8.3.2.4.5.3.9.3.2.3.6.4 1 .3.4.5.9.6 1.5.6 1 .3 1.9.6 2.8 1.1.6.3 1.2.4 1.8.7.6-.5.5-1.3.7-1.9 0 0 0-.1.1-.1 1-2.7 1.4-5.6 2.2-8.4.1-.4 0-.7-.2-1 .4-.1.6-.3.6-.7v-.9c.4-.9.4-1.8.6-2.7v-.7c.5-.4.2-1 .3-1.5.4.1.6.3.6.7v2.4c-.1.3-.1.7-.2 1-.1.5-.1 1-.1 1.5.1.3.3.4.6.1l.2-.2v4.3c-.6 1.3-.8 2.6-.9 4-.8 1.3-1.1 2.8-1.2 4.3-.5.3-.3.8-.3 1.2 0 .2 0 .5-.1.7-.7 1.5-.9 3.1-1.1 4.6-.1.4-.2.9-.3 1.3-.1.2-.3.3-.3.5-.1 1.1-.5 2.2-.8 3.2-.7 2-1.3 4-2 6-.2.5-.3 1.1-.3 1.6-.6.3-.8.9-.9 1.5-.2.5-.3 1-.5 1.5-.1.4-.2.8-.1 1.2-.4 0-.6.2-.6.7-.1.6-.4 1.2-.3 1.8-.7.3-.6.9-.6 1.5-.2.1-.2.3-.3.5-1.3 3.4-2.5 6.9-3.9 10.2-.4.9-.7 1.8-.9 2.7-.1.6-.3 1.2-.6 1.7-.2.4-.4.7-.5 1.1-.2.4-.1.7.1 1 .2.2.4.4.6.7.5.5.8 1 .9 1.7-.1.7-.4 1.3-.9 1.9-.6-.4-1.1-.8-1.7-1.2-.6-.4-.8-.3-1.2.3-.2.3-.3.6-.5 1-1.2 2.4-2.4 4.7-3.5 7.1-.3.5-.6 1-.8 1.5-1.4 2.5-3 4.8-4.2 7.4-.6 1.2-1.2 2.4-1.8 3.7-.3.5-.8.9-1.2 1.3-.3.3-.5.1-.6-.4v-.3c.2-.1.4-.3.5-.5.8-1.5 1.6-3.1 2.3-4.7.6-1.4 1.4-2.6 2.1-3.9.7-1.1 1.4-2.2 2-3.4l4.5-9c.1-.3.3-.5.4-.8.1-.3-.1-.6-.5-.8-.3-.2-.6-.1-.8.2-.4.8-.9 1.6-1.2 2.5-1.1 2.9-2.6 5.8-4.1 8.5-1.4 2.4-2.7 4.8-3.9 7.2-.6 1.3-1.1 2.7-1.6 4.1-.7.5-1.1 1.2-.8 2.1.1.3.1.6-.1.8-.9.9-1.7 1.9-2.7 2.6v-.3c0-.1-.1-.1-.2-.1s-.2.1-.2.2.1.2.1.2h.3c-.3.6-1 .9-1.6 1.2-.4.2-.7.4-.9.7-.3.5-.7.9-1.1 1.2-1.4 1.2-2.9 2.4-4.3 3.7-.2.2-.4.2-.7.2 0-.6.4-.9.8-1.2 1.5-1.4 2.7-2.9 4.1-4.4.2-.2.3-.5.4-.8 1.2-.5 1.4-.9.9-2-.3-.6-.6-1.3-.9-1.9-.3-.5-.4-1-.3-1.6.7.5 1.1 1.3 1.6 1.9.3.4.5.7.7 1.1.3.4.5.3.8-.3.9-.6 1.5-1.3 2.1-2.2.3-.5.4-.9.3-1.4.6 0 .9-.4.9-1v-.6c.3-.1.5-.4.6-.7.4-1.2.9-2.5 1.6-3.6.6-1 1.1-2 1.7-3.1.8-1.5 1.7-3.1 2.6-4.6 1.5-2.6 2.6-5.3 3.8-8 .7-1.5 1.2-2-1.3-2.7-.3-.5-.6-.9-1.2-.9-.5-.3-.8-.9-1.4-.9-.1-.3-.4-.3-.7-.3-.5-.6-1.1-.7-1.8-.6-.3-.5-.7-.7-1.3-.6-.1-.2-.2-.4-.4-.5-1.2-.6-2.4-1.3-3.7-1.8-.9-.3-1-.3-1.2.6-.4 1.8-1.2 3.5-1.7 5.2-.9 2.7-1.7 5.3-2.6 8-.1.4-.2.9-.2 1.3-.3 0-.5.1-.6.4l-.3 1.2-1.2 2.4c-.2-.5-.3 0-.3.6zm14.3-19.3c.1.3.3.5.6.6.7.4 1 .2 1.2-.5.1-.4-.1-.8-.6-.9-.3-.1-.6 0-.9 0-.1-.7-.7-.8-1.2-.9-.2-.1-.4-.3-.6-.4-1.4-.6-2.9-1.2-4.3-1.8-.3-.1-.5 0-.6.3-.4.6-.3.9.3 1.2 1.2.6 2.5 1.2 3.7 1.8.4.2.8.2 1.2.1.1.6.7.5 1.2.5zm-48.8 54.2c-.3-.4-.8-.6-1.3-.6-1-.3-2-.7-3.1-.9-2.3-.4-4.5-1.3-6.7-1.9-.4-.1-.8-.3-1.3-.5-.2-.1-.5.1-.5.4-.1.5 0 .9.5 1.1 2.4.9 4.8 2 7.2 2.9 1.1.4 2.3.8 3.6.7.4.5 1 .3 1.5.3.2 0 .4.1.6.2.3.1.6 0 .7-.3.5-1 .3-1.3-.9-1.4h-.3zm66-93.1c.5.5 1.2.7 1.8 1.1.8.4 1.6.7 2.4 1 .3.1.6 0 .7-.4.1-.2.1-.4.2-.6.2-.5.1-.8-.4-1-1.4-.7-2.8-1.4-4.4-1.6-.3-.4-.7-.3-1.1-.3-.2 0-.3.2-.4.4-.1.6 0 .9.6 1.2.2.1.4.1.6.2zm-1.2 20.3c.3-.1.3-.4.3-.7.4-.5.6-1.1.6-1.8.5-.4.3-1 .3-1.5.3-.1.5-.4.6-.7 1.2-3.8 2.2-7.7 3.6-11.4.2-.5 0-.8-.4-1-1.3-.4-2.4-1.1-3.6-1.7-.2-.1-.5-.1-.7-.2-.3-.4-.8-.6-1.3-.7-.3-.1-.6-.3-.9-.3-.2-.4-.5-.3-.8-.3-.5-.4-1.1-.6-1.8-.6-.3-.4-.8-.6-1.3-.7-1.2-.4-2.5-.6-3.7-.8-.5-.1-.8 0-.9.6-.4 1.8-1.2 3.6-1.8 5.3-.6 1.9-1.2 3.9-1.9 5.8-.1.2 0 .4 0 .6-.4.3-.6.8-.7 1.3-.1.6-.4 1.2-.3 1.9-.4.2-.3.5-.3.8-.4.3-.6.8-.6 1.3s-.4 1-.3 1.5c-.2.6-.4 1.2-.6 1.9-.6 2.2-1.3 4.4-2.1 6.5l-3 7.5c-.1.4 0 .6.3.7l3.6 1.5c.5.2.9.4 1.5.4.3.6.7 1 1.4.9.4.4.8.6 1.3.7.2.3.5.3.9.3.1.7.7.8 1.2.9.3.5.6.9 1.2.9.3.2.6.5 1 .7 1 .6 1.4.7 2-.5 1-1.9 1.7-3.9 2.5-5.9.9-2 1.7-4.1 2.4-6.2.3-1 .9-2 .7-3.1.6-.3.7-.7.7-1.3.7-.7.9-1.6.9-2.6zM325.3 8.5c0-.1 0-.3-.1-.6-.5-1.4-1.1-2.8-1.9-4.1-.6-.9-1.3-1.8-1.8-2.8-1.1-2-2.6-3.5-4.2-5-.1-.1-.3-.3-.5-.1-.2.2-.3.4-.2.7 0 .1.1.3.2.4.1.2.3.3.4.4 1 .9 1.8 1.9 2.5 3.1 1.1 1.7 2 3.5 2.7 5.5.2 1 .6 2 1 3s.6 1.1 1.5.4c.2-.2.4-.4.4-.9zm41.9-40.2c0-.4-.3-.7-.5-.8-.2 0-.4.1-.5.3-.1.1-.1.2-.1.3-1.1 3-2.1 6-3.4 9-.8 1.8-1.4 3.7-2.4 5.4-.1.2-.2.5-.3.7-.1.4.2.9.8 1 .3.1.7-.2.7-.6 0-.8.4-1.4.7-2 .2-.4.4-.7.5-1.1 1.3-3.4 2.7-6.7 4-10.1.1-.8.3-1.5.5-2.1zm-17.9-9.2c0-.4-.1-.4-.3-.5-.3-.1-.6 0-.7.3-.1.4-.2.8-.4 1.2a10206485613774832 10206485613774832 0 0 1-4.3 14.6c.2-.4.5-.9.6-1.4.4-1.1.8-2.2 1.3-3.3 1.1-2.8 2.4-5.6 3.1-8.6.2-.7.5-1.6.7-2.3zM374-52.7v-.5c0-.2-.1-.4-.4-.4-.2 0-.4.1-.5.3l-.3.9-3 9.3c-.2.5-.3 1.1-.4 1.6-.1.5.2.9.6.9.4 0 .5-.3.6-.6.1-.2.1-.4.2-.6 1.2-3.4 2.3-6.7 3.1-10.2 0-.2 0-.5.1-.7zm-31.7 31.3c-.1-.1-.3-.2-.5-.3-.2-.1-.4 0-.5.2-.2.5-.3 1.1-.5 1.6-1.3 3.8-2.6 7.7-3.8 11.5 0 .1-.1.3-.1.4 0 .3.2.5.4.6.2.1.4-.1.5-.3.3-.9.6-1.7.9-2.6.4-1.6.9-3.1 1.5-4.6.8-2 1.4-4.1 2-6.2.1 0 .1-.1.1-.3zm13-38.2v-.4c0-.2-.1-.4-.4-.4-.2 0-.4.1-.5.3-.1.3-.2.6-.3.8-.2.6-.3 1.2-.6 1.7-.3.7-.5 1.4-.7 2.2-.1.5-.3 1-.5 1.4-.3.8-.6 1.5-.8 2.3-.3.9-.5 1.7-.8 2.6-.1.3.1.5.3.6.3.1.5-.1.6-.3.2-.5.4-1 .5-1.6.4-1.3.8-2.6 1.3-3.9.2-.5.4-.9.5-1.4.2-.8.5-1.6.8-2.3.3-.5.5-1 .6-1.6zm-43.6 74.2c-.5 0-1 0-1.5-.1-.2-.1-.4 0-.5.2-.1.2 0 .4.2.5.5.1 1.1.3 1.6.3 2 .1 4 0 5.9-.5 1.2-.3 2.3-.7 3.5-.9.8-.2 1.3-.7 1.9-1.2.2-.1.1-.4 0-.6-.1-.2-.4-.2-.5-.1-.5.3-1 .7-1.6.9-2.8.9-5.8 1.7-9 1.5zm47.8-89c-.1-.1-.1-.2-.2-.3-.2-.1-.4-.1-.6 0-.3.2-.4.4-.5.7-.5 1.7-1 3.3-1.4 5-.4 1.5-.7 3-1.2 4.4 0 .1-.1.2 0 .3 0 .1.1.3.2.4.1.1.3.1.4 0 .3-.1.4-.3.5-.6.2-.7.5-1.5.7-2.2.5-2 1-4 1.6-6 .3-.5.4-1.1.5-1.7zm-32.2 84.9c.4-.2.9-.6 1.1-1.1.4-.7.9-1.2 1.5-1.7.2-.2.4-.5.6-.7.9-1.1 1.5-2.4 2.3-3.6.2-.3.4-.7.5-1.1.1-.2-.1-.4-.3-.5-.1 0-.3 0-.4.1-.5.6-1 1.2-1.3 1.9-.4.8-.8 1.5-1.4 2.2-.9 1.1-1.6 2.2-2.6 3.2-.3.3-.5.6-.4 1.1 0 0 .1.2.4.2zm-52.5 15.1c-.1 0-.1.1-.1.1 0 .1 0 .2.1.3 1.2.6 2.2 1.4 3.5 1.8 1.4.4 2.8 1 4.1 1.6.3.1.6.4.9.5.5.3 1 .5 1.5.8.2.1.4 0 .5-.2.2-.2.1-.7-.1-.8-.1-.1-.2-.1-.3-.1-1.8-.7-3.5-1.6-5.3-2.2-1.5-.5-2.9-1.1-4.4-1.7-.1-.1-.2 0-.4-.1zm25.7-11.3h.5c.2 0 .4-.1.4-.4 0-.2-.1-.4-.3-.4h-.3c-1.1 0-2.1-.5-2.8-1.3-.4-.4-1-.7-1.5-1-1.8-.7-3.5-1.3-5.3-1.9-.2-.1-.4-.1-.5.1-.1.2 0 .5.2.7.2.1.5.2.7.3 1.2.4 2.4.8 3.6 1.3 1.2.5 2.3.9 3.3 1.8.4.4 1.1.8 2 .8zm-11.6-2.5c0-.3 0-.6-.1-.8 0-.2-.2-.4-.4-.3-.2 0-.4.2-.4.4 0 .5 0 .9-.1 1.4-.3 1.8-.5 3.5-.6 5.3 0 .6 0 1.1-.2 1.7-.2.5-.1 1 0 1.5 0 .2.2.4.4.4s.4-.2.4-.4v-.5c-.1-1.5.5-3 .3-4.6 0-.2.1-.5.1-.7.3-1.2.4-2.3.6-3.4zm51.9-35.9c0-.1 0-.2-.1-.3-.2-.2-.4-.3-.6-.4-2-.6-4.1-1.2-6.1-1.8-.4-.1-.7.1-.8.4-.1.4.3.5.5.6 2 .6 4.1 1.2 6.1 1.8.2.1.5.1.7.1.2-.1.3-.2.3-.4zm8.6-37.6h3.8c.3 0 .5-.2.5-.5 0-.2-.2-.3-.4-.4h-7.2c-.2 0-.4 0-.6.1-.1 0-.2.2-.2.3 0 .1.1.3.2.4.2.1.4.1.6.1h3.3zm28.5-7v-.3c0-.1-.1-.1-.2-.2s-.2 0-.2.1-.1.3-.1.4l-1.5 6c-.4 1.3-.8 2.6-1.1 3.9-.1.2 0 .4.2.5.2 0 .3-.1.3-.2.1-.2.2-.4.2-.6.4-1.8 1-3.5 1.4-5.3.4-1.3.7-2.8 1-4.3zM288.8 6.1v.7c0 .1.1.3.3.3.1 0 .2-.1.2-.2.1-.4.3-.9.3-1.3.3-1.7.5-3.4.8-5.1 0-.2.1-.4-.2-.4-.2 0-.4.2-.4.3-.1.1-.1.3-.1.4-.2 1.2-.4 2.4-.7 3.6-.1.5-.1.9-.2 1.7zm69.8-68.4h-.7c-.3 0-.6.2-.6.5-.1.3.2.6.7.6.9 0 1.8.3 2.7.5.1 0 .3.1.4.1.3 0 .5-.2.6-.6.1-.3-.1-.5-.3-.6-1.1-.1-2.1-.3-2.8-.5zm-.6 46.4c0-.1 0-.2-.1-.4-.3-.6-.9-.8-1.5-1-.1 0-.3 0-.4.1-.4.4-.4.9.1 1.3l.9.6c.4.3.9 0 1-.6zm-52.6 53h.4c.2 0 .4-.1.4-.3 0-.2 0-.5-.1-.6-.4-.3-1-.5-1.5-.5-.3 0-.6.4-.7.7 0 .3.2.4.4.6.4.2.7.2 1.1.1zm20.5-24c-.5 0-1 .4-1.1.8-.1.4.1.8.3 1.1 0 .1.2.1.3.1.6-.1 1.2-1 1.1-1.6-.1-.3-.3-.4-.6-.4zm42.2-50.8c0 .1 0 .3.1.4.1.2.2.3.5.3.2 0 .4-.1.5-.3.1-.3.3-.7.4-1 .1-.4-.1-.7-.6-.9-.3-.1-.5 0-.7.4-.1.3-.2.6-.2 1.1zm.3 2.3c0-.4-.2-.6-.4-.7h-.4c-.5.5-.7 1.1-.6 1.8 0 .2.2.3.4.4.2.1.4 0 .5-.2.2-.5.4-.9.5-1.3zm-42.5 46.5c0-.3-.3-.6-.6-.5-.3.1-.6.3-.9.5-.2.1-.3.4-.2.7.1.3.3.3.6.3.4 0 .7-.2.9-.4.2-.2.2-.4.2-.6zm28.7-29.3c0-.3-.2-.4-.4-.6-.4-.4-.9-.2-1 .3v.4c0 .4.4.8.8.8.2 0 .6-.5.6-.9zm-47.4 33.4c.4 0 .8-.3.8-.6s-.3-.3-.6-.4c-.3-.1-.6-.2-.9-.2-.2 0-.4 0-.5.3-.1.2 0 .4.2.5.3.2.7.4 1 .4zM374.9-56v-.3c0-.2-.1-.4-.4-.4-.2 0-.4.1-.5.3-.1.3-.2.7-.3 1 0 .1.1.3.2.4.2.1.4.1.6 0 .3-.3.4-.6.4-1zm-24.5 9.4c-.3 0-.6.1-.6.4-.1.3-.4.6-.2 1 0 .1.2.1.3.1.3.1.6 0 .7-.2.1-.3.4-.7.2-1.1-.1-.2-.3-.2-.4-.2zm11-32.9c0-.2-.1-.4-.3-.4-.1 0-.3 0-.4.1-.2.2-.4.5-.4.8 0 .1.1.3.2.4.1.1.3.1.4.1.3-.2.5-.5.5-1zm-18.7 17.9c.3-.1.7.1 1-.2.1-.1.2-.3.2-.4 0-.1-.1-.3-.3-.3-.5.1-1 .2-1.5.2 0 0-.1 0-.1.1-.1.1-.1.2-.2.2 0 .1 0 .2.1.2.3.1.5.1.8.2zm-16.4 78.1c-.6 0-.9.7-.7 1.2 0 .1.2.1.2.1.6 0 .9-.5.8-1 .1-.2 0-.3-.3-.3zM305 14.4c0-.1 0-.2-.1-.3-.4-.3-.9-.5-1.4-.4-.1 0-.3.1-.3.3 0 .1.1.3.2.4.4.1.9.2 1.3.3.2.1.3-.1.3-.3zm-18 9.8c0 .3.1.7.1 1 0 .1.1.1.2.1s.2-.1.2-.1c.1-.6.1-1.2 0-1.8 0-.1-.1-.1-.2-.1s-.2.1-.2.1c-.1.3-.1.6-.1.8zM360.5-77c0-.3-.2-.5-.4-.5-.4 0-.8.3-.7.7 0 .3.2.4.5.4s.6-.2.6-.6zm-11 34c.4 0 .6-.3.5-.7 0-.3-.2-.4-.5-.4-.4 0-.6.3-.6.7 0 .2.3.4.6.4z" />

                                                <path class="st40"
                                                    d="M279.7-77c.1-.6.4-.9.9-.9 1.1-.1 2.2.1 3.3.5.6.2 1.1.1 1.7.2.5 0 .8-.1 1-.5l1.8-3c1.4-2.6 3-5.2 4.6-7.7.5-.9 1.3-1.7 1.5-2.8l.3-.3c1.5-1.8 1.5-1.8 4-3.1.2-.1.4-.2.7-.3v.6c-.3.7-.6 1.4-.6 2.1-.6.3-.8.9-.9 1.5-.2.3-.6.6-.7 1-.9 1.8-2.2 3.4-3 5.3-.2.5-.5 1-.8 1.5-1 1.7-2.1 3.4-3.1 5.1-.5.9-.5 1.4.7 1.4 1 0 2.1-.1 3 .1 1.2.2 2.4.2 3.6.2h1.4c.2.3.5.3.8.3h3.5c.4.5 1 .2 1.5.3.7 0 1.3 0 2 .2.9.3 1.2.1 1.4-.9.3-1.2.5-2.5.8-3.7.6-2.5 1.3-5 2.1-7.5.1-.4.2-.8.1-1.2.4-.3.6-.8.7-1.3.3-.9.6-1.8.9-2.8.3-.6.3-.8-.2-.9h-.7c-.6 0-1.1-.2-1.6-.4-.1 0-.2-.2-.2-.4s.1-.4.3-.4h.9c.5 0 .9.3 1.5.3.6.5 1.4.5 1.9 1.1-.1.2-.3.3-.3.5 0 .1 0 .3.1.4.1.1.3.1.4 0 .1-.1.2-.1.2-.2.5-.3.5-.3 1.1.3-.4 1-.8 2-.9 3.1-.5.4-.6.9-.6 1.5l-.6 1.2c-.8 2.9-1.5 5.8-2.5 8.6-.2.8-.4 1.6-.6 2.3-.1.4.1.6.4.7 1.2.1 2.4.4 3.6.6 1 .2 2 .3 3 .4 0 .4-.1.8-.4 1.2-1-.2-2-.3-3-.5-1.1-.2-2.3-.5-3.4-.5-.7 0-.7 0-1 .7-.1.2-.1.4-.1.5.3.4.8.4 1.2.4 1.9.3 3.9.6 5.8.8-.1.4 0 .9-.4 1.2h-.5l-5.1-.9h-.9c-.4 0-.7.2-.8.6-.4 1.8-1.1 3.6-1.6 5.4-.9 3.2-1.6 6.4-2.5 9.6-.3.5-.4 1-.3 1.6-.3.8-.7 1.6-.6 2.4-.2.2-.3.4-.3.7l-.3 1.8c-.3.5-.3 1-.3 1.5l-.3.9c-.4 1.9-.8 3.8-1.2 5.8-.3 1.7-.6 3.4-.9 5-.1.7.1 1.1.8 1.2.9.1 1.9.3 2.8.4-.1.5-.3.8-.6 1.2-.9-.2-1.9-.4-2.8-.5-.3-.1-.5 0-.6.3-.1.4-.3.8-.3 1.2-.1.4.2.8.7.8.8 0 1.6.4 2.4.4 0 .5-.1 1-.6 1.2-.6-.4-1.4-.4-2-.6-.4-.1-.7.1-.9.6-.1.1-.1.3-.1.4-.1 1.3-.6 2.4-.8 3.7-.2 1.1-.5 2.1-.4 3.3-.3.2-.4.4-.1.6-.4.7-.7 1.3-.5 2.2-.1.4-.2.8-.7 1-.2-.1-.5-.1-.7-.4 0-1.3.3-2.6.6-3.9.3-1.3.7-2.7.9-4 .2-.9.3-1.8.6-2.7.1-.2.1-.4-.1-.6-.2-.3-.6-.4-.9-.4-.4 0-.5.3-.6.6-.2.7-.3 1.4-.5 2.1-.5 2.7-1.1 5.4-1.7 8.1-.3 1.5-.9 2.9-1 4.4-.3.8-.4 1.6-.3 2.4-.1.5-.1 1-.5 1.3-.3-.1-.6-.3-.7-.6-.1-1.3.2-2.6.5-3.9.9-3.5 1.8-7.1 2.4-10.7.2-1 .5-2.1.7-3.1.1-.3-.1-.6-.5-.6H287c-.5-.3-1-.3-1.5-.3H284c-.3-.4-.8-.3-1.3-.4-1.2-.3-2.4-.6-3.5-.8-.5-.1-.8.1-.8.6 0 1-.3 1.9-.4 2.9l-.3 3c-.2 1.2-.3 2.4-.5 3.6-.2 1.4-.4 2.8-.5 4.2-.1 1.4-.5 2.7-.4 4.1-.3.4-.8.2-1.3.3 0-.6.1-1.1.1-1.7.2-1.2.4-2.4.5-3.6.1-1.2.3-2.3.4-3.5.1-.9.1-1.7.3-2.6.3-1.1.2-2.3.5-3.5.2-.7.1-1.5.3-2.3.1-.4 0-.9 0-1.4 0-.4-.2-.5-.6-.5-.3 0-.5.1-.6.4-.1.5-.3 1-.3 1.5 0 1.8-.6 3.6-.7 5.4-.2 1.6-.6 3.2-.5 4.8v.6c-.4 2-.6 4.1-.5 6.2-.2.4-.6.3-1 .3-.3-1.2-.4-2.4-.1-3.6 0-.1.1-.3.1-.5-.1-1.5.5-3 .3-4.5v-.5c.4-2 .6-4 .9-6 .1-.9.2-1.8.4-2.7.4-1.8.2-1.8-1.5-2.2-2-.4-4-.8-5.9-1.2h-1.2c-.6-.4-1.4-.6-2.1-.6-.5 0-.9-.1-1.3-.3v-.9c.7 0 1.4 0 2.1.3.3.1.6.1.9.1.3 0 .5-.1.6-.4.1-.3.1-.6-.2-.8-.2-.1-.4-.2-.5-.3-.8-.2-1.7-.3-2.5-.4.1-.4-.1-.9.3-1.2.6.1 1.2.4 1.9.3.5 0 1 0 1.4-.4.1-.1.3 0 .3.2 0 .8.6.8 1.2.8.2.2.4.3.7.3 1.3.2 2.6.4 3.9.7.7.2 1.4.2 2.1.2.5 0 .8-.2.9-.6.1-.2.1-.4.1-.6l.6-4.5c.2-1 .4-2.1.5-3.1.1-1.1.6-2.2.3-3.3.5-.4.6-.9.6-1.5.2-.7.4-1.4.3-2.1.3-.1.3-.4.3-.7-.1-.7.3-1.4.3-2.1.1-.4.2-.9.3-1.3 0-1.1.4-2.2.6-3.3.3-2.7 1.1-5.2 2-7.8.6-1.8 1.1-3.7 2.2-5.3.2-.3 0-.6-.3-.7-1.8-.4-3.5-.8-5.4-.7.1-.6.4-.9.9-1.2.7 0 1.4 0 2.1.2l2.7.6c.3.1.6.1.9 0 .3-.1.5-.5.4-.7 0-.2-.2-.3-.4-.4-1.5-.7-3.2-.9-4.9-1.2zm3.6 8.3c-.1.1-.2.1-.2.2-.1.1 0 .2.1.2l.1-.1v-.3l.2-.2c.1-.1 0-.2-.1-.2l-.1.1c.1.1.1.2 0 .3zm15-4.6c.3 0 .6.1.9.1.8.2 1 0 1.2-.6.2-.6 0-1-.6-1.2-.4-.2-.8-.1-1.2-.1h-1.7c-1.2-.1-2.4-.4-3.6-.3-1.1 0-2.2.1-3.3-.3h-.5c-.6 0-.9.3-1 .9-.1.3.1.4.3.5.2.1.5.1.7.1 1.4-.1 2.7.3 4.1.4 1.1.1 2.1.2 3.2.2.4.5 1 .3 1.5.3zm-11.9 38.6h-1.5c-.2-.3-.5-.3-.8-.3-1.1 0-2.1 0-3.2-.3-.5-.1-1.1 0-1.7 0-.1 0-.3.1-.4.2-.4.6-.1 1.6.6 1.7.5.2 1.1.3 1.6.3 1.1.2 2.3.6 3.4.4.4.5 1 .3 1.5.3.1.1.3.1.4.2.6.2.7.1.9-.4.2-.5.3-1 .4-1.4.1-.6.1-.7-.5-.7h-.7zm4 .3h-1.2c-.2 0-.4.2-.5.3-.2.6-.6 1.3-.4 1.8.2.5.9.2 1.4.3h.3c.6.5 1.1.3 1.7 0h3.5c1.2 0 1.2-.1 1.6-1.2 0-.1.1-.2.1-.3.1-.5 0-.6-.5-.6H292c-.4-.5-1-.3-1.6-.3zm13.9-40.1c-.3-.3-.7-.4-1.1-.2-.4.2-.7 1-.5 1.6.1.5.6.4 1 .4h3.1c.4 0 .6-.4.6-.8.1-.4-.1-.7-.5-.8-.3-.1-.6-.2-.9-.2h-1.7zM287-35.9c.5 0 1 .4 1.5.3h2.5c.4.5 1 .3 1.5.3h4c.8 0 1-.2 1.2-.9 0-.1 0-.3.1-.5.6-2.7 1.2-5.3 1.8-8 .2-1 .7-1.9.6-3 .3-.5.6-.9.6-1.5.1-.6.4-1.2.3-1.8.4-.2.3-.5.3-.9.6-.7.7-1.6.6-2.5.5-.4.7-.9.6-1.5.5-.6.5-1.4.7-2.1.5-1.6 1-3.3 1.5-4.9.7-2.3 1-4.6 1.8-6.9l.3-1.2c.1-.3-.1-.5-.4-.5h-2.9c-.4-.5-1-.2-1.5-.3h-2.2c-.2-.2-.4-.3-.6-.3h-1.5c-.4-.5-1-.2-1.5-.3-.9.1-1.7-.3-2.6-.3-1.4 0-2.7-.5-4.1-.4-.1 0-.3 0-.5-.1-1.8-.5-1.4-.2-2.5 1l-.1.1c-1.5 2.3-2.6 4.7-3.2 7.4-.4 1.7-.8 3.4-1.2 5.2-.2.9-.5 1.8-.4 2.7-.5.4-.2 1-.3 1.5-.2.2-.3.4-.3.6v1.5c-.3.1-.3.4-.3.7v2.2c-.3.5-.3 1-.3 1.6-.1.6-.3 1.3-.3 1.9 0 1.2-.3 2.3-.4 3.5-.1.8-.1 1.6-.3 2.4-.4 1.2-.1 2.5-.5 3.8-.1.3.1.6.5.6 2 .2 3.9.4 5.9.6h1.6zm-10.3-1.5c-.1.5.1.8.4.8.3 0 .6 0 .7-.4.1-.4.3-.9.3-1.3 0-.7.1-1.3.2-2 .2-1.2.3-2.5.4-3.8.1-1.2.3-2.4.5-3.6 0-.2.1-.5.1-.7 0-.1-.1-.3-.3-.3-.1 0-.3.1-.4.2-.1.1-.1.2-.1.3-.1 1.3-.7 2.5-.7 3.9 0 .9-.2 1.8-.4 2.7-.3 1.4-.3 2.9-.7 4.2zm25.3-9.2c0-.2-.1-.4-.1-.6 0-.1-.2-.1-.2-.1s-.1 0-.1.1c-.1.1-.1.3-.2.4-.6 2.1-1.1 4.2-1.5 6.3-.4 1.6-.8 3.3-1.1 4.9 0 .2 0 .4.2.5.2.1.4.1.6.1.2 0 .3-.2.4-.4.5-1 .4-2.1.5-3.1.4-2.3.9-4.7 1.4-7 0-.5.1-.8.1-1.1zm-5.9-44.1c-.1-.1-.2-.2-.2-.3h-.1l-.9 1.2c-.5.7-.8 1.5-1.3 2.2-2 2.9-3.6 6-5.4 9-.2.3-.3.6-.5 1 0 .1 0 .2.1.3.1.1.3.1.4 0 .3-.5.6-.9.9-1.4 1-1.6 2-3.2 2.9-4.8 1.2-2.2 2.4-4.5 3.8-6.6.2-.1.2-.4.3-.6zm-21 55.8c0-.5-.2-.7-.6-.7-.6-.1-1.1-.1-1.7-.2-1.5-.4-3.1-.5-4.6-.9-.4-.1-.5.2-.6.5-.1.3 0 .7.3.8.2.1.4.1.6.1 1.9.4 3.9.8 5.8 1.2.5.1.8-.2.8-.8zm34.3-40.8c.4-.1.4-.4.5-.7 1-3.4 1.9-6.8 2.9-10.2l.3-1.2c0-.2 0-.3-.1-.4-.2-.1-.4 0-.5.2-.2.3-.3.7-.4 1-1 2.8-1.6 5.8-2.3 8.7-.3.8-.7 1.7-.4 2.6zm-10.9 44c.3 0 .7-.1.8-.5.1-.2.2-.5.2-.7.1-.6-.1-.9-.8-.9-.3 0-.6.2-.6.5-.1.3-.2.6-.2.9-.2.5 0 .7.6.7zM286-73.3c-.1-.1-.1-.2-.2-.2s-.4 0-.4.1c-.7 1-1.3 2.2-1.7 3.3 0 .1.1.2.1.3.1 0 .2 0 .3-.1.6-1.1 1.3-2.1 1.9-3.2v-.2zm-8.5 38.7c0-.5-.2-.7-.6-.7-.4 0-.6.2-.6.8 0 .5.2.7.6.7.4 0 .6-.2.6-.8zm5.4-32.8s.1-.1 0-.1c-.1-.1-.1-.1-.1.1h.1z" />
                                                <path class="st30"
                                                    d="M256.9 29.6c-.1.2-.1.5-.4.6-.4.1-.8.2-1.2.2-.3.1-.6 0-.7.5 0 .2-.2.2-.4.2-1.1 0-2.1.3-3.2.2-1.2-.1-2.3-.1-3.5-.1-2.4 0-4.8-.3-7.1-.6-.4 0-.7-.1-1.1-.1-3.8-.1-7.6-.9-11.2-2.1-1.3-.4-2.6-.8-4-.9-.8-.1-1.6-.2-2.4-.5-1.9-.7-3.8-1.2-5.7-1.7.6-2.1 1.3-4.2 1.9-6.2.5-1.7 1.1-3.4 1.7-5 .1-.4.2-.9.5-1.2.7 0 1.3 0 1.9.3.7.3 1.5.4 2.2.3.8 0 1.5 0 2.2.4.3.2.7.2 1 .2.9-.1 1.8.1 2.7.4.9.4 1.9 0 2.9.3.3.1.6.1.9.1.2 0 .5.2.6-.2-.2-.1-.3-.3-.5-.4-1.1-.6-1.8-1.5-2.4-2.5-.4-.6-.9-1.1-1.4-1.6-.5-.5-1-.9-1.3-1.5-.3-.7-.8-1.2-1.3-1.7-.7-.7-1.3-1.5-1.8-2.4.2-.3.5-.4.9-.4 1 .3 1.8.8 2.2 1.9.2.5.6.8 1 1.1.3.3.7.4 1.1.2.7-.3 1.5-.2 2.2 0 .3.1.6.1.9.1l.4.4c1.3 1 2.6 1.9 4.1 2.6.7.4 1.3.9 1.7 1.5 1.2 1.6 2.8 2.8 4.5 3.8.5.3 1.1.6 1.4 1.1.6.8 1.3 1.4 2.1 2 .7.6 1.5 1.2 2.1 2 .3.4.6.6 1 .9.9.7 1.7 1.4 2.6 2.1.4.3.8.7 1.5.7.6 1.7.9 3.4 1.4 5z" />
                                                <path class="st43"
                                                    d="M266.6-10.8c-1.7.6-3 1.9-4.2 3.2-1.9 2.2-3.4 4.7-4.8 7.2-.1.2-.2.4-.2.6-.4 1.7-1 3.3-1.5 4.9-.1.5-.2 1-.2 1.5-.1 1.1-.2 2.2-.2 3.3-1.2-.5-2.5-.9-3.5-1.8-.3-.2-.6-.5-.9-.6-.6-.2-1.1-.6-1.5-1-.7-.7-1.4-1.2-2.3-1.5-1.1-.4-1.9-1.1-2.8-1.8-1.8-1.4-2.8-3.6-4.5-5.2l-.1-.1c-.3-.8-.9-1.3-1.4-2 .4-.2.7-.4 1.1-.6 3.6-2 5.5-6.2 4.4-10.1 0-.3.1-.6.3-.8.7-.6 1.4-1.3 2.3-1.7.5 0 1 .2 1.5.3 2.3.6 4.6 1.2 6.9 1.6.1 0 .2.1.4.1.2.2.5.3.8.3 2.2.6 4.4 1.2 6.5 2 .3.9.4.9 1.2.4l2.7.9c.4.4.1.6 0 .9z" />

                                                <path class="st30"
                                                    d="M238.5-3.9c.5.6 1.1 1.2 1.4 2 0 0 0 .1.1.1 1.7 1.6 2.7 3.7 4.5 5.2.9.7 1.7 1.4 2.8 1.8.9.3 1.6.8 2.3 1.5.4.4.9.8 1.5 1 .3.1.6.3.9.6 1 .9 2.3 1.3 3.5 1.8.1 1.7.1 3.4-.1 5.1-.2 2-.2 3.9-.1 5.9-.1.2 0 .7-.3.5-1.5-.8-3.1-1.5-4.3-2.8-.4-.4-.8-.7-1.2-1.1-1.4-1.2-2.7-2.6-4.4-3.5-1.5-.8-2.7-2-3.6-3.4-.4-.6-.9-1.1-1.5-1.4-1.6-.9-3.2-1.9-4.7-3-.6-.7-.6-1.5-.5-2.4.4-2.2 1.3-4.3 1.7-6.4.2-.9.9-1 1.5-1.3 0-.1.2-.2.5-.2z" />

                                                <path class="st43"
                                                    d="M297.4-18.7c.4-.2.5-.6.7-1 .2-.1.3-.3.5-.4 1.1-1.3 1.9-2.8 2.5-4.3.5-1.4 1.3-2.7 2.3-3.8.2-.2.3-.4.5-.6.5-.5.8-1.1.9-1.8.2-1 .6-2 1-2.9.5-1.2 1.1-2.3 1.5-3.5.6-1.6 1.3-3.1 2.1-4.6.5-1.1 1.3-1.9 2.3-2.6 1.6-1 3.3-1.9 5-2.6 1.8-.8 3.6-1.5 5.4-2.1 3.1-1.1 6-2.5 8.9-4 .5-.2 1 .2 1.5 0 0 0 .2.1.2.2.4 1.1.3 1.4-.7 1.9-.1 0-.2.1-.3.1-3.6 1.6-7.3 3.3-10.6 5.4-2.5 1.6-5.1 2.9-7.9 4-1.6.6-2.6 1.6-3 3.4-.4 1.9-.9 3.8-1.3 5.6-.1.7-.4 1.3-.8 1.8-.3.4-.6.8-.9 1.3-1 1.5-2.1 2.9-2.7 4.6-.2.4-.4.7-.6 1-.9 1.2-1.8 2.5-2.7 3.7-.9 1.2-1.4 2.6-1.9 4v.3c0 .3.2.6.5.7.3.1.5-.1.6-.3.2-.3.2-.7.4-1 .5-.9.6-1.9 1.4-2.7.5 1.8.9 2.2 2.6 2.3 0 .1-.1.3-.1.4-1 1.9-2 3.8-3.5 5.3-.2.3-.5.5-.6.9-.3.2-.5.5-.9.4-2.3-.1-4.5-.1-6.8-.2 0-.8.5-1.4.6-2.1.5-.3.5-.8.5-1.3.3-.4.5-.7.8-1.1 1-1.2 1.9-2.7 2.6-4.4z" />
                                                <path class="st45"
                                                    d="M363.2-80c0-.6-.1-1.2.6-1.5h.8c2 0 1.4 0 1.9-1.6.1-.2 0-.4.1-.6.2-1 .3-2.1.6-3.1 1-3.9 1.6-7.8 1.8-11.9.8.1 1.2.5 1.3 1.3.1 2.6-.2 5-.9 7.5-.4 1.8-.8 3.6-1.2 5.3-.2.8-.3 1.7-.4 2.5-.1.5.1.8.6.9.2.1.4.1.6.1.6.1.8 0 1-.7.7-2.4 1.4-4.9 2-7.3.3-1.2.4-2.5.4-3.8v-2.6c.5-.1.6.4.9.6.1 2.9-.3 5.7-1.1 8.4-.4 1.4-.8 2.7-1.2 4.1-.1.3-.1.6-.2.9 0 .3 0 .5.3.6.3.1.5-.1.6-.3l.3-.9c.4-1.3.9-2.5 1.1-3.8.4-1.8 1.1-3.5 1.1-5.4 0-.4.2-.8.3-1.2.2 0 .4.1.5.3.4.9.7 1.8.4 2.8 0 .4 0 .8-.1 1.2-.3 1.3-.7 2.6-1.1 4-.3 1-.6 2-.9 3.1-.1.5 0 .7.5.9 1.2.5 2.5.9 3.7 1.3.3.3.4.7.1 1.1-.1.2-.1.4-.2.6-.4-.2-.8-.4-1.3-.5-.9-.3-1.8-.7-2.7-1-.6-.2-.8 0-1 .6-.1.5-.1.7.5.9 1.4.3 2.8 1 4.1 1.5v.7c-.5 0-1-.3-1.4-.5-.9-.4-1.8-.8-2.8-1-.4-.1-.6 0-.7.4-.1.2-.2.5-.2.7-.1.5 0 1 .6 1.2 1.3.6 2.6 1.4 4 1.9v.9c0 .4-.2.6-.6.7-1.6-.6-3-1.6-4.7-2.1-.5 1.3-.8 2.6-1.1 3.9-.4 2.2-.8 4.5-1.4 6.7-.1.4-.2.9-.3 1.3-.6 0-1.1-.2-1.5-.6.3-1.4.6-2.9 1-4.3.5-2.2.7-4.4 1.4-6.5.1-.2.1-.5.1-.7 0-.3-.2-.5-.5-.5-.3-.1-.5.1-.6.3-.2.5-.3 1-.4 1.5-.3 1.4-.7 2.9-1 4.3-.4 1.9-.8 3.8-.9 5.7-.3 0-.7.1-.9-.3.3-2.1.6-4.1 1.1-6.1.4-1.7.7-3.4 1.2-5 .1-.2.1-.4-.1-.6-.4-.4-1.5-.2-1.7.3-.4 1.5-.9 2.9-1.2 4.4-.5 2.2-.8 4.5-1.3 6.7-.4-.1-.9-.2-1.3-.4.1-.8 0-1.5.2-2.3.5-2 .7-4.1 1.4-6.1.3-.9.5-1.8.7-2.7.1-.4-.1-.7-.5-.8-1-.1-1.9-.2-2.9-.3 0-.6.4-1 .6-1.5 1 .2 2 .3 3 .5.2 0 .4-.1.5-.3.1-.1.1-.2.1-.3.3-.9.2-1.1-.7-1.2h-2.3c0-.3-.1-.7.3-.9h.8c.5 0 1 0 1.5.2.8.2 1.1-.1 1.1-1 0-.4-.2-.7-.6-.7-.4.1-1.1.1-1.8.1zm5.5 3.3c0-.1-.1-.2-.1-.3-.2-.3-1.1-.3-1.4-.1-.2.1-.5 1.3-.4 1.5l.1.1 1.2.3c.1 0 .2-.1.3-.1.1-.5.3-.9.3-1.4zm-.5-1.2h.5c.5-.1.9-.9.6-1.3-.3-.4-.8-.5-1.2-.5-.4 0-.6.4-.7.7-.3.8-.1 1.1.8 1.1zm1.5 3.1c.2 0 .5.1.7-.2.3-.4.5-.9.4-1.4 0-.2-.1-.4-.3-.5-.4-.2-.9 0-1 .4l-.3.9c-.2.5 0 .7.5.8zm1.5-3.6c0-.4-.1-.6-.4-.7-.4-.1-.7.1-.8.5-.1.1-.1.3-.1.4-.1.4 0 .6.4.6.7.1.9-.1.9-.8z" />
                                                <path class="st10"
                                                    d="M267.2-34.4c2 .4 4 .8 5.9 1.2 1.7.3 1.9.4 1.5 2.2-.2.9-.3 1.8-.4 2.7-.3 2-.5 4-.9 6v.5c.1 1.5-.4 3-.3 4.5 0 .1 0 .3-.1.5-.4 1.2-.2 2.4.1 3.6-1.1.3-2.3.4-3.4.9-.2.1-.5.2-.6.4-1-.3-2.1-.5-3.1-.9-.7-.3-1.3-.4-2.1-.5-.1-.6-.1-1.2 0-1.8.2-1.1.3-2.2.6-3.3.2-1 .2-1.9.4-2.9.4-2 .8-4 1.3-6 .4-2.4.8-4.7 1.1-7.1z" />
                                                <path class="st40"
                                                    d="M262.2 35.1c-.5-.3-.9-.7-1.2-1.2.3-.2.3-.5.3-.8v-4.6-1.6-1.8-.9-2.1c.5-.4.3-1.1.3-1.6v-4.3c0-.4 0-.8.1-1.2.2-.7.2-1.4.2-2.1 0-.4 0-.7.1-1.1.2-.6-.1-1-.5-1.3-1.2-.9-2.4-1.8-3.7-2.7-.2-.1-.4-.1-.6-.2V5.8c.6.5 1.1 1 1.7 1.5.2.1.3.3.5.2.2-.2.1-.4-.1-.5-.6-.6-1.1-1.3-1.9-1.8 0-.5.2-.9.6-1.2 1.1 1.4 2.5 2.6 4 3.7.3.2.5.2.7-.2.1-.1.1-.3.1-.4.5-2 1.2-4 2-5.9.3-.7.4-1.4.6-2 .6-.3.7-.7.7-1.3.4-.3.6-.7.5-1.1.3-.1.3-.4.4-.7.5-.5.8-1.1.9-1.8.7-.1.9-.7 1-1.2 1.3-1.2 2.7-2.4 4.2-3.5.5-.4 1.1-.6 1.3-1.2.8-.3 1.6-.3 2.5-.3.6 0 1.1.2 1.5.6-.8.7-1.5 1.4-2.4 2.1-1.3 1-2.3 2.2-3.5 3.3-.3.3-.3.6-.3 1-.7.1-1.2.5-1.3 1.3-.5.5-.8 1.1-.9 1.8-.3.1-.4.4-.4.7-.4.2-.6.5-.6.9-.5.4-.7.9-.6 1.5-.4.3-.5.7-.6 1.2-.9 2.5-1.4 5.2-1.9 7.8-.1.6 0 1 .5 1.3 1.4 1.1 2.9 1.9 4.4 2.7.2.1.5.1.7.2v2.2c-.2 0-.4 0-.6-.1-1.6-.8-3.4-1.4-4.9-2.3-.1-.1-.3-.2-.4-.2-.1 0-.3 0-.4.2-.1.4-.2.8-.2 1.2-.4 2.2-.9 4.5-.8 6.8-.5.6-.3 1.2 0 1.8-.3.2-.3.5-.3.8v5.2c0 1.3-.1 2.7.1 4 .1.9.2 1.7.2 2.6-.4-.2-1-.4-1.2-.9-.3-.8-.3-1.7-.3-2.6v-2.4c0-.3 0-.5-.1-.8 0-.1-.1-.1-.2-.2s-.2 0-.2.1c0 .3-.1.6-.1.9.1 1.2.1 2.8.1 4.3zm11.7-44.4c.2 0 .3-.1.3-.3.2 0 .3-.1.3-.3.3 0 .5-.1.6-.3l.3-.3h.1v-.1l-.1.1-.3.3c-.3 0-.5 0-.6.3l-.3.3c-.2 0-.3.1-.3.3-.2 0-.3.1-.3.3-.3 0-.5.1-.6.3-.1 0-.3 0-.4.1-.8.6-1.4 1.3-2.1 2-.1.1-.1.3 0 .4.2.2.4.3.5.1.8-.7 1.8-1.4 2-2.6.3 0 .5-.1.6-.3 0-.1.1-.2.3-.3zM260.3 7.8h0c0-.1 0-.1 0 0 0-.1 0 0 .1 0 0 .2.1.3.3.3 0 0 0 .1.1.1h.1l-.1-.1c-.2-.1-.3-.2-.5-.3zm1.3 1v-.1h-.1s.1 0 .1.1c.1.1.1.2.1.1s-.1-.1-.1-.1zm3.3.7c.1-.4.3-.8.4-1.2.4-2.2 1-4.4 1.7-6.6.1-.3.2-.7.3-1 0-.1-.1-.3-.2-.4-.2-.1-.4-.1-.6 0-.2.2-.3.4-.4.6-.2.7-.5 1.3-.8 2-.6 1.7-1.1 3.5-1.6 5.2-.1.3 0 .5.2.7.4.3.5.6 1 .7zm-1.6 2.9c-.4 1.3-.4 2.7-.4 4.1 0 .8 0 1.6-.2 2.4-.2.6-.1 1.2 0 1.8 0 .1.1.2.2.2s.2-.1.2-.1c.1-.6.3-1.3.4-1.9.1-1.7.5-3.4.8-5.1.1-1 .1-1.1-1-1.4zm6.5-16.7c0-.3-.2-.5-.5-.6-.2-.1-.4 0-.5.2-.2.3-.3.5-.4.8-.1.3-.1.5.2.6.2.1.5.1.7 0 .4-.3.5-.6.5-1z" />
                                                <path class="st10"
                                                    d="M363.9-100.9v1.2c.2 2.4-.3 4.6-.8 6.9-.7 3.4-1.9 6.6-2.6 10-.1.4-.4.8-.6 1.3h-3.8c-1 0-2 0-3 .2-.5.1-1.1.1-1.7.1-.5 0-.7-.2-.6-.7.1-.2.2-.5.2-.7.6-2 1.1-4 1.7-6 .7-2.4 1.2-4.8 2.1-7.2.1-.3.1-.7.2-1 .3-.2.4-.5.8-.7 2.1-1.3 4.4-2.3 6.7-3.1.5-.2.9-.2 1.4-.3zM337.1-91.1c.5-1.3 1.3-2.4 2-3.6.7-1.2 1.5-2.3 2.3-3.4 1.2-1.6 2.3-3.2 3.4-4.9.3-.5.7-.9 1-1.3.5 0 .9.2 1.3.4l1.2.6c2 .8 3.8 1.8 5.5 3.3.3.3.8.5 1.1.7-.1.4-.5.5-.8.7-1.3.9-2.4 1.9-3.6 2.8-.7.6-.9 1.1-.8 2-1.1 1.2-2.1 2.5-3.1 3.9-.3.4-.5.8-.9 1-1.1-.3-2.2-.5-3.2-.8-1.7-.5-3.6-.9-5.4-1.4z" />
                                                <path class="st46"
                                                    d="M351.6 24.6V12.3c0-.7.2-1.4.3-2.1.2-.2.4-.5.6-.7 1-.6 1.8-1.5 2.7-2.2.7-.5 1.3-1.1 1.7-1.9.5-.8 1.2-1.3 1.8-2.1l2.7-3.9.9-1.2c.1.7-.2 1.4-.4 2.1-.6 1.6-.7 3.4-1.1 5-.1.3 0 .6 0 .9 0 .8.1 1.6-.2 2.4-.1.2-.1.5-.1.8 0 .7 0 1.3-.2 2-.1.4-.1.9-.1 1.4 0 .6.1 1.1-.4 1.6-.2.2-.1.5-.2.7-.3 1.3-.3 2.7-.3 4.1v.3c-1 0-1.8.6-2.6 1.1-.3.2-.4.6-.6.9-.6 1.3-1.5 2.3-3 2.6-.6.1-.9.6-1.5.5z" />
                                                <path class="st45"
                                                    d="M314-3.5c.6 0 .9.3.9.9-2 1.3-4.1 2.7-6.4 3.4-.1 0-.3.1-.4.2-.4.2-.6.4-.4.8l.3.9c.4 1.7.8 3.3 1.2 5 .4 1.7.3 3.5.4 5.3h-1.4c-.1-.5-.2-1-.2-1.5-.1-1.1-.1-2.1-.3-3.2-.3-1.7-.7-3.5-1.2-5.2-.5-1.6-.6-1.6-2.3-1.4 0 0-.1.1-.2.1.3 1.3.7 2.6 1 3.9.7 2.2 1.1 4.5 1 6.9h-.7c-.1-.7-.2-1.4-.2-2.1 0-1.4-.3-2.7-.7-4-.3-1-.6-1.9-.8-2.9-.2-.6-.1-1.4-.6-1.8-.5-.4-1.3-.1-1.9-.1-.1 0-.2.1-.3.2.2 1.4.6 2.9 1 4.3.2.8.5 1.6.6 2.4.1 1.1.3 2.2.6 3.3.1.2 0 .4.1.6h-1.6c-.2-.9-.5-1.9-.6-2.8-.1-.8-.2-1.5-.4-2.2-.5-1.7-1-3.3-1.3-5-.1-.5-.4-.9-1-1L291.9.3c0-.4-.1-.9.3-1.2 1.4.3 2.9.6 4.3.9 2 .3 1.9.3 1.3-1.6-.3-1-.9-1.4-1.9-1.4-1.2 0-2.3-.1-3.5-.3 0-.3.1-.6.5-.6.9 0 1.7-.1 2.6.1.2.1.5.1.7.1.2 0 .5 0 .6-.2.1-.2-.2-.8-.4-.9-.1-.2-.4-.2-.6-.2h-2.3c-.7 0-.8-.2-.4-1 .8.1 1.6-.1 2.4-.3.2 0 .4-.3.3-.6-.2-.5-.6-.9-.6-1.5h1.6c0 .6.4 1.1.7 1.6.1.2.3.3.5.3.4 0 .8 0 1.1-.3.2-.3-.1-.5-.2-.8-.1-.3-.2-.6-.3-.8.4 0 .6.2.9.3l.6 1.2c.1.2.3.3.5.3 1.1.2 1.4-.1 1.1-1.2 0-.1 0-.2-.1-.3.6 0 1.3-.1 1.8.3.5 1.2.5 1.2 1.6 1.2.6 0 1.2-.2 1.7-.3.6.1 1.2.2 1.3.9-.7.3-1.5.4-2.2.3h-.6c-.3 0-.5.3-.5.6.1.6.4.8.9.8.4 0 .8-.2 1.2-.3 1-.2 2-.9 3-1 .3.1.7 0 1 .3-1.5.6-2.9 1.3-4.4 1.6-.7.2-.8.4-.5 1.1.2.5.4.9.6 1.4.3.8.6 1 1.4.7 2.2-.5 4.2-1.6 6.1-3zM302.5.3c0-.8-.4-1.4-.7-2.1-.4-.8-.9-1.2-1.8-1.1-.7.1-.8.2-.7.8.2.6.4 1.2.6 1.7.3.8.4.8 1.2.8.5.1 1 .2 1.4-.1zm1.8.2h.5c.5 0 .7-.3.5-.8-.3-.7-.7-1.4-1.1-2.2-.1-.2-.3-.4-.6-.4h-.8c-.4 0-.5.3-.4.6.2.6.5 1.2.7 1.8.3 1 .4 1 1.2 1zm-3.7-4.2c.1-.4-.1-.7-.2-1v-.1c-.2-.5-1.3-.7-1.9-.4-.2.1-.2.6.1 1.1.2.3.4.6.8.6.5 0 .9.1 1.2-.2zm2.1.2h.4c.3 0 .4-.2.4-.5 0-.1-.1-.3-.1-.4-.3-1-.8-1-1.8-.9-.3 0-.4.2-.4.5.1 1 .5 1.3 1.5 1.3z" />
                                                <path class="st43"
                                                    d="M337.4-43.1c.3 1.1.5 2.2 0 3.3-.5-.1-1-.1-1.5.1-1 .3-2 .8-2.9 1.4-.9.6-1.9 1.2-3.1 1.3-.3 0-.6.2-.9.3-1.5.7-3 1.2-4.5 1.7-1.3.4-2.5.9-3.7 1.4-.5.2-1 .4-1.1 1-.3 1-1.1 1.4-1.9 1.8-2.6 1.1-4.8 2.8-7.3 4.2-1.7 1-3.3 2.3-4.7 3.7-.3.3-.6.7-1.2.6.1-.7.7-1.1.9-1.7.4-1.1 1.1-2.2 1.8-3.2.9-1.3 1.9-2.5 2.5-4 .3-.7.9-1.1 1.5-1.4 1.8-.9 3.7-1.7 5.7-2.2 1.5-.4 2.9-1 4.2-1.8 1.6-1 3.3-1.9 5-2.6 1.9-.8 3.7-1.9 5.3-3.2 1.1-.9 2.3-1.1 3.7-1.2.7-.1 1.2.5 1.9.5h.1v.1l.2-.1z" />
                                                <path class="st45"
                                                    d="M355-96.8c-.1.4 0 .7-.2 1-.9 2.3-1.4 4.8-2.1 7.2-.6 2-1.1 4-1.7 6-.1.2-.2.5-.2.7-.1.4.1.7.6.7.6 0 1.1.1 1.7-.1 1-.2 2-.2 3-.2h3.8c0 .6-.4 1-.6 1.5-2.9-.2-5.7.2-8.5.3-.4 0-.7.3-.8.6-.1.2-.1.5-.2.7-.1.5.2.8.7.7.4-.1.9-.2 1.4-.2 1.4-.1 2.8-.2 4.2-.4.9-.1 1.7-.2 2.6-.2l-.3.9c-1 0-2 0-3 .1-1.7.2-3.3.4-5 .5-.3 0-.6 0-.9.2-.2.2-.3.4-.2.7.1.2.3.3.5.3h.8c1.5-.4 3.1-.2 4.7-.3.9 0 1.7 0 2.6-.2.2.7-.1 1.2-.6 1.7-2.5.1-5 0-7.4.4-1 .1-1 .1-1.4 1.1-.6 1.7-1.2 3.5-1.7 5.2-.4 1.4-.8 2.7-.9 4.1h-1.2c.1-.5.1-.9.2-1.3.4-1.5.8-3 1.3-4.5.5-1.3.9-2.7 1.3-4-.5-.4-1-.2-1.4-.2-.2-.1-.4-.1-.6-.2-.5-.3-1-.2-1.3.3-.1.1-.2.3-.3.5-.7-.1-1.3 0-1.9.3-.3.1-.4.2-.5.5-.5 1.6-1 3.3-1.2 5l-.3.3c-.2.1-.3.4-.4.6-.3 1.1-.7 2.1-1.7 2.8.2-1.5.7-2.9 1.1-4.3.4-1.4.7-2.7 1.1-4.1.1-.4-.2-.4-.5-.4.1-.6.3-1.2.8-1.6.2-.2.4-.4.4-.6.1-1.4.8-2.6 1.4-3.8.3-.6.5-1.2 1.1-1.6.4 0 .7-.1 1.1 0 .9.1 1.4-.4 1.7-1.2.7-2.1 1.2-4.2 1.3-6.5.4-.6.6-1.4 1.2-1.8.1.8-.2 1.5-.4 2.3-.3 1.8-.4 3.5-1.1 5.2-.2.5-.3 1-.3 1.6.5-.1.8-.2 1.1-.2 1.3.2 1.9-.5 2.1-1.7l.3-.9c1.1-4.1 2.3-8.1 3.4-12.2.2-.2.4-.5.6-.7 0-.4.3-.7.7-.6zm-6.3 17.5c-.6-.3-1.2 0-1.9.1-.8.1-1.1.5-1.3 1.2-.3 1-.2 1.1.7.9.2 0 .4-.1.6-.1 1.6-.2 1.6-.2 1.9-1.7v-.4zm-5.9 2.6c.3.1.7-.1 1.1-.2.4-.1.6-.3.7-.7 0-.2.1-.4.2-.6.1-.4-.1-.6-.4-.6h-.8c-.6 0-.9.3-1.1.8-.1.2-.1.5-.2.7-.1.4 0 .6.5.6zm2.6 1.6c.7 0 1.4-.3 2.1-.4.3-.1.4-.3.4-.6 0-.2-.1-.4-.3-.5-.3-.1-2.3.3-2.5.5-.2.2-.3.4-.2.7.1.2.3.2.5.3zm-2.1-1c-.7 0-.9 0-1.2.2-.3.2-.4.6-.3.9.1.3.4.3.6.2.3-.1.6-.1.9-.1.6-.1.9-.4.8-.9 0-.4-.4-.2-.8-.3z" />
                                                <path class="st10"
                                                    d="M274.1 3.3c.3.4.7.5 1.2.7 1.4.5 2.6 1.1 3.8 1.9 1.3.9 2.8 1.3 4.1 2l3.3 1.8c.3.2.5.5.4.9-.3 1.6-.4 3.2-.6 4.8-.2 1.7 0 3.4-.5 5-2.2-.6-4-1.9-5.8-3.1v-1.7c.1-1.5-.7-2.5-1.8-3.3-.2-.1-.4-.2-.6-.2-.6 0-1.1-.1-1.7 0-.6.2-1.5.1-1.8 1-.2 0-.4-.1-.6-.1V5.4c.1-.8.2-1.5.6-2.1z" />
                                                <path class="st30"
                                                    d="M304.7-22.5c.5.1.8-.3 1.2-.6 1.4-1.4 2.9-2.7 4.7-3.7 2.4-1.4 4.7-3 7.3-4.2.9-.4 1.6-.9 1.9-1.8.2-.5.7-.8 1.1-1 1.2-.5 2.4-1 3.7-1.4 1.6-.5 3.1-1 4.5-1.7.3-.1.6-.3.9-.3 1.2-.1 2.1-.7 3.1-1.3.9-.6 1.9-1 2.9-1.4.5-.2 1-.2 1.5-.1-.1.5-.4.9-.7 1.3-.7.8-1.4 1.4-2.3 2l-3.3 2.1c-.6.4-1.2.7-1.9.9-.8.3-1.6.6-2.2 1.3-.3.3-.6.3-1 .2-.7-.5-1.4-.5-2.1-.1-.4.2-.8.5-1.1.8-1.4 1.1-2.7 2.3-4.1 3.4-1.9 1.4-3.9 2.8-5.8 4.2-1 .7-2.1 1.3-3.2 1.8-2 .8-3.3 2.3-4.3 4.2-.2.4-.4.7-.6 1.1-1.7-.1-2.1-.5-2.6-2.3.5-.8 1-1.6 1.6-2.3.4-.1.5-.3.5-.6.2 0 .3-.2.3-.3-.1.1 0 0 0-.2z" />
                                                <path class="st45"
                                                    d="M314.6-7.5c-.4 0-.6-.2-.6-.6 1.9-1.3 3.5-2.8 4.8-4.8.3-.5 1-.9.9-1.5-.2-.6-.9-.7-1.4-1.1 0-.8.6-.9 1.2-.9.2.2.5.4.7.5.1.1.3 0 .4 0 .6-.5.7-1.2.1-1.7-.1-.1-.2-.2-.4-.3.2-.3.5-.3.8-.2.4.2.7 0 .8-.3.3-.7.8-1.2 1.3-1.7.2-.2.4-.2.7-.3.3.4.7.8 1 1.1.6.5.9.5 1.4 0 .5-.6.9-1.2 1.5-1.8 1.1-1.2 2.1-2.5 2.9-3.9.4 0 .9-.2 1.2.3-.5.7-.9 1.5-1.4 2.2-.8 1.1-1.7 2.1-2.6 3.2-.3.4-.6.8-.8 1.3-.1.4-.1.8.2 1.1.2.2.4.4.6.7 2.1 2.2 4.3 4.4 6.6 6.4.4.3.7.7 1 1.1 0 .6.1 1.2-.6 1.5-.2-.2-.4-.3-.6-.5-1.9-1.8-3.6-3.7-5.6-5.4-.2-.2-.4-.5-.6-.7-.7-.7-1.3-1.4-2-2.1-.3-.3-.5-.2-.8 0-.6.6-.6.8-.1 1.6 1.6 2.1 3.4 4.1 5.3 5.9.4.4.9.8 1.1 1.2.6.9 1.3 1.8 2 2.7 0 .3.1.7-.3.9-.5-.6-1-1.3-1.5-1.9-.7-.9-1.4-1.8-2.2-2.5-1.6-1.6-3.2-3.2-4.6-5.1-.2-.3-.6-.6-.8-.9-.2-.2-.5-.1-.6.2-.2.3-.2.7 0 1 .2.3.5.5.7.8.8.8 1.6 1.7 2.3 2.6.8 1.1 1.6 2.1 2.5 3.1 1.3 1.4 2.4 2.9 3.2 4.6 0 .7-.1 1.3-.9 1.5-.9-1.6-1.7-3.3-3-4.6-1.1-1.2-2.2-2.5-3.2-3.9-.7-1-1.6-1.8-2.5-2.7-.5-.5-.7-.5-1.1 0-1.5 1.9-2.9 3.8-4.4 5.7-.5 0-.8-.2-.9-.6 1.2-1.6 2.4-3.2 3.5-4.8.3-.4.7-.8 1-1.2.3-.4.1-.9-.3-1.2-.2-.2-.5-.2-.7 0l-.6.9c-.8 1.3-1.7 2.4-2.9 3.4-.3.6-1 1.2-1.7 1.7zm8.6-11.2c-.1 0-.2 0-.3.1-.9 1-.8 1.4.1 2.3l.4.4c.2.2.5.2.7 0 .7-.7.8-1.2.1-1.9-.2-.3-.5-.5-.8-.7 0-.2-.1-.2-.2-.2zm-.8 4.5c.5 0 .9-.6.7-1-.2-.4-.6-.7-1-1-.1-.1-.3-.1-.4.1-.2.3-.5.7-.3 1.1.2.4.5.7 1 .8z" />
                                                <path class="st30"
                                                    d="M327.8-28.2c.3.8-.2 1.5-.6 2.1-.4.6-.9 1.2-1.4 1.8-1.3 1.6-2.8 3-4.3 4.4-.4.4-.8.7-1.4 1-.3.1-.6.3-.9.6-1.6 1.4-3.5 2.5-5.2 3.8-.4.3-.7.6-1.1.9-1.7 1.6-3.6 2.9-4.9 4.8-.3.5-.8.6-1.3.5-.2-.1-.5-.2-.7-.3-.1-.6.2-1.1.5-1.6.7-1.1 1.5-2.1 2.3-3 1.3-1.5 2.6-3 3.9-4.4.9-.9 1.8-1.7 2.8-2.6 1.2-1 2.2-2.1 3.3-3.2 1.6-1.6 1.5-1.3.2-3 .7-.6 1.3-1.2 2-1.8.9-.8 1.8-1.6 2.8-2.2.1.2.1.4 0 .6-.2.2-.4.5-.6.7-.3.4-.3.6 0 1 .3.3.5.2.8 0 .2-.1.4-.3.6-.4.7-.3 1.4-.4 2.1-.1.5 0 .8.2 1.1.4z" />
                                                <path class="st10"
                                                    d="M276.3-13.9c-.1-1.4.3-2.7.4-4.1.1-1.4.3-2.8.5-4.2.2-1.2.4-2.4.5-3.6.1-1 .3-2 .3-3 .1-1 .3-1.9.4-2.9 0-.5.3-.7.8-.6 1.2.3 2.4.6 3.5.8.4.1.9 0 1.3.4-.2 1.3-.5 2.7-.7 4-.3 2.4-.9 4.7-1.5 7-.4 1.7-.8 3.5-.7 5.3v1.7c-.9.1-1.7 0-2.5-.5-.7-.4-1.5-.3-2.3-.3zM291.4-30.7h4.3c.4 0 .6.3.5.6-.2 1-.5 2.1-.7 3.1-.6 3.6-1.6 7.1-2.4 10.7-.3 1.3-.6 2.6-.5 3.9-.3.3-.4.7-.6 1-.2.5-.4 1-.6 1.4H288c-.1-2.7.2-5.4 1.1-8 .3-1 .5-2.1.8-3.1.3-1.5.6-3.1.8-4.6.2-1.6.6-3.3.7-5zM315.5 36.3c-2.1.1-4.1-.3-6.1-.8-.4-.1-.8-.1-1.2-.1 0-1.7.4-3.3.6-5 0-.3.2-.6.5-.7.3-.1.6-.1.9-.2 1.5-.3 3.1-.5 4.6-1 2.2-.8 4.5-1.6 6.6-2.6 1-.5 2.1-1 3.2-1.3v.9c-.4 1.2-.8 2.4-1.3 3.6h-1.5c-.6 0-1.1.2-1.5.6-1.2 1.2-2.5 2.2-3.4 3.7-.4.6-.7 1.4-1.3 1.9-.2.3-.1.7-.1 1z" />
                                                <path class="st43"
                                                    d="M319.1-26.6c1.3 1.7 1.4 1.4-.2 3-1.1 1.1-2.1 2.2-3.3 3.2-1 .8-1.9 1.7-2.8 2.6-1.4 1.4-2.6 2.9-3.9 4.4-.8 1-1.6 2-2.3 3-.3.5-.6.9-.5 1.6-.4.1-.8 0-1.2-.1-.7-.1-1.5-.5-2.2-.4-.3-.2-.6-.2-.9-.1v-.5c.8-.5 1.2-1.3 1.7-2.1 1-1.6 2-3.2 2.8-4.9.8-1.7 2.1-3 3.8-3.8 1.5-.7 2.9-1.5 4.2-2.5 1.5-1.1 3.2-2.3 4.8-3.4z" />
                                                <path class="st45"
                                                    d="M349.2-48.8c.1.5 0 1-.3 1.5-1.7-.3-3.4-.8-5-1.3-.5-.2-1-.3-1.5-.2-.2 0-.4.1-.5.3-.1.2-.1.4-.2.6-.2.7-.1.8.5.9 1.1.2 2.1.5 3.1.8 1 .3 1.9.6 2.9.7 0 .3-.1.5-.3.6-1.1-.1-2.1-.4-3.1-.7-1-.4-2-.5-2.9-.8-.3-.1-.5 0-.7.2-.5.5-.3 1.4.4 1.5.4.1.8.2 1.2.2 1.6.3 3.2.7 4.8.8.1.6.1 1.2-.6 1.5-1.3-.2-2.6-.5-3.9-.7-.9-.2-1.8-.4-2.7-.3-.5.8-.5 1.7-.8 2.6-.2.8-.4 1.7-.8 2.5-1.5 3.1-2.8 6.3-4.5 9.3-.1.2-.2.5-.3.7-.4 0-.9.1-1.2-.3.2-.4.3-.8.5-1.1 1.4-2.2 2.3-4.5 3.3-6.8.6-.4.9-1.1 1.3-1.6 1.1-1.5 1.2-3.3 1-5 0-.4-.3-.6-.7-.7-.3 0-.6 0-.8.2-.1 0-.1 0-.2.1h-.1v-.9c.2-.1.3-.3.3-.6h.9c1 0 1.1-.3 1.5-1.2.1-.3 0-.6-.4-.7-.4-.1-.7-.1-.8-.5 0-.2.1-.4.4-.4.2.1.4.2.6.2.4.1.7-.1.9-.4.3-.8.2-1.2-.6-1.6-.2-.1-.5-.2-.5-.5-.1-.5.2-1.1.8-1 .9.1.9.1 1.1-.7.3-1.2.7-2.3 1-3.5.4-1.8 1-3.5 1.1-5.4.5-.1.9-.4 1.5-.3-.7 3.1-1.4 6.1-2.3 9.2-.3 1-.2 1 .8 1.3.5.1 1.1.3 1.6.5 1.4.5 2.7.8 4.2 1z" />
                                                <path class="st10"
                                                    d="M288.8-.6L287.6 6c0 .2-.2.4-.5.2-2.3-1.5-5-2.3-7.2-3.9-.5-.4-1.1-.5-1.6-.8-1-.4-2.1-.9-3-1.5.1-1 .6-1.9 1-2.8.1-.3.3-.5.6-.6l1.5.3c2.4.6 4.8 1 7.2 1.9 1 .3 2.1.5 3.2.6z" />
                                                <path class="st46"
                                                    d="M363.9-11.8c-.1-.7-.5-1.2-.9-1.7-.2-.2-.4-.4-.6-.7-.3-.3-.3-.6-.1-1 .2-.4.4-.7.5-1.1.3-.5.5-1.1.6-1.7.2-.9.5-1.8.9-2.7 1.4-3.4 2.6-6.8 3.9-10.2.1-.2.1-.4.3-.5.5.4 1 .8 1.4 1.4.2.3.5.5.8.7.7.6.7.7.5 1.6-.5 1.6-1.1 3.2-1.6 4.8-.4 1.4-.8 2.7-1.3 4-.3.6-.5 1.3-1.1 1.8-.2.1-.2.3-.3.5-.7 1.4-1.5 2.9-2.2 4.3-.4.3-.6.4-.8.5z" />

                                                <path class="st10"
                                                    d="M338.8-5.4c-.1-.5 0-.9.2-1.3.9-2.6 1.7-5.3 2.6-8 .6-1.7 1.3-3.4 1.7-5.2.2-.9.3-.8 1.2-.6 1.3.4 2.5 1.2 3.7 1.8.2.1.3.3.4.5-.8 1.6-1.7 3.1-2.6 4.7-.6 1-1.2 2-1.7 3.1s-1 2.2-1.6 3.3c-.6.4-1 1-1.4 1.6-.2.3-.4.7-.7 1-.4.6-.6.6-1.1 0-.2-.4-.5-.6-.7-.9z" />
                                                <path class="st46"
                                                    d="M349.2 9.7c.6-1.2 1.2-2.4 1.8-3.7 1.2-2.6 2.8-4.9 4.2-7.4.3-.5.6-1 .8-1.5 1.2-2.4 2.4-4.7 3.5-7.1.2-.3.3-.6.5-1 .4-.7.6-.7 1.2-.3.6.4 1.1.8 1.7 1.2 0 .5-.3.9-.5 1.3-.7 1.3-1.5 2.5-2.2 3.8-.8 1.7-1.9 3.2-2.8 4.9-.5.9-1.1 1.7-1.2 2.7-.1.4-.3.6-.6.8-.9.6-1.5 1.5-1.8 2.5-.1.2-.1.4-.3.5-1.2 1-2.5 1.9-3.7 2.9-.2.3-.4.3-.6.4z" />
                                                <path class="st10"
                                                    d="M264.4 21.9c-.1-2.3.3-4.5.8-6.8.1-.4.1-.8.2-1.2 0-.2.2-.2.4-.2.1 0 .3.1.4.2 1.6 1 3.3 1.5 4.9 2.3.2.1.4.1.6.1 0 1.2 0 2.3.1 3.5 0 1.1-.1 2.2.2 3.3.1.5 0 1.1.1 1.7-.2 0-.5 0-.7-.1-2.4-1-4.7-1.8-7-2.8zM264.4 36.3c0-.9-.1-1.7-.2-2.6-.2-1.3-.1-2.6-.1-4 .7.1 1.4.3 2.1.5 1.9.7 3.7 1.4 5.5 2.1.5.6.5 1.3.2 2-.2.6-.2 1.1 0 1.6.3.9 0 1.9.3 2.9.1.2-.1.4-.3.4-.4.1-.8.2-.8.7-.3 0-.7 0-.9-.4-.1-.3-.4-.3-.6-.3-.1-.4-.4-.5-.7-.7-.9-.5-1.9-.9-2.8-1.4-.6-.1-1.2-.5-1.7-.8zM271.7 14.2c-.2-.1-.5-.1-.7-.2-1.5-.8-3-1.6-4.4-2.7-.4-.3-.6-.7-.5-1.3.5-2.6 1-5.3 1.9-7.8.1-.4.2-.9.6-1.2l2.1 1.5c.9.6 1.4 1.4 1.3 2.6-.1.8 0 1.6-.2 2.4-.1.4-.1.8-.1 1.2v5.5z" />
                                                <path class="st45"
                                                    d="M351.6-16.9c.3 0 .5.1.7.3-.4 1.6-1.1 3.1-1.7 4.7 0 .1-.1.3-.2.4-1.3 2-2.5 4.1-4 6.1-.6.8-1.3 1.6-1.6 2.6-.5.3-.7.7-.6 1.2-.4 0-.6.2-.6.6-.5.2-.7.8-.9 1.2-.4.2-.6.5-.6.9s-.1.9-.3 1.2c-.1.2-.4.3-.6.3-.1-.1-.3-.3-.4-.2-.8.9-1.6 1.8-2.1 2.9-.1.3.1.5.3.7 0 .1 0 .2-.1.3-.1.4-.6 0-.7.3-.1.2.1.5.1.7-.1.5-.3.8-.9.9-.2-.2-.5-.5-.8-.1-.6 1.1-1.5 2.2-1.9 3.4-.3.1-.3.4-.3.6-.2 0-.3.1-.3.3h-.1v.1l.1-.1.3-.3c.3-.1.3-.3.3-.6h.6c0 .4-.1.8-.3 1.1-1.1 1.9-2.2 3.7-3.4 5.6-.2.3-.4.6-.7.8-.3.3-.6.7-.9 1l-1.2.9c-.2-.1-.3-.3-.2-.5.8-1.7 1.5-3.3 2.3-5 .2-.4.5-.6.7-1 .3-.6.7-1.1.8-1.8.2-.2.3-.4.3-.7l.3-.3c.1-.1.2-.1.2-.2 1-1.3 1.8-2.7 2.6-4 .3-.4.3-.8.2-1.3 0-.3 0-.7.2-1 .2-.4.4-.5.8-.1.1.1.3.1.4 0 .1-.1.1-.3.1-.4 0-.2-.2-.5-.2-.7 0-.2.1-.4.3-.5.1.1.1.2.2.3.4.4.6.4.8.1l1.5-2.1c.2-.2.3-.4.2-.7-.2-.4-.1-.9-.6-1.2.1-.6.4-1.1.7-1.6.1-.2.4-.3.6-.3 0 .4-.1.8.1 1.2.2.3.6.4.8.1.4-.6.9-1.1 1.3-1.7.6-.9 1.1-1.8 1.7-2.7 1-1.4 2-2.7 2.9-4.1 1.7-2.4 3-4.9 3.8-7.6z" />
                                                <path class="st10"
                                                    d="M257.3 7.5c.2.1.4.1.6.2 1.2.9 2.4 1.8 3.7 2.7.4.3.7.7.5 1.3-.1.3-.1.7-.1 1.1 0 .7 0 1.4-.2 2.1-.1.4-.1.8-.1 1.2v4.3c-.3 0-.6-.1-.9-.3-1.1-.6-2.3-1.1-3.4-1.7-.4-.2-.6-.5-.6-.9s-.1-.8 0-1.2c.3-1 .2-2.1.2-3.2 0-1.9 0-3.8.3-5.6z" />
                                                <path class="st46"
                                                    d="M348.2 24.6H343c0-1.2-.1-2.4.3-3.6.1-.3 0-.6 0-.9v-2.6c.9-.9 1.9-1.8 2.8-2.7.4-.4.8-.9 1.4-1 .4-.1.5-.4.6-.8.1-.3.3-.4.6-.4 0 .7 0 1.4-.2 2.1-.1.3-.1.7-.1 1.1-.1 1.5.1 3-.3 4.5-.2.7 0 1.5 0 2.3.1.7.1 1.4.1 2z" />
                                                <path class="st10"
                                                    d="M265.5-1c-.2.7-.3 1.4-.6 2-.8 1.9-1.5 3.9-2 5.9 0 .1-.1.3-.1.4-.1.4-.4.5-.7.2-1.4-1.1-2.8-2.3-4-3.7-.1-1.1.4-2.1.7-3.1.5-1.5 1.5-2.7 2.2-4.2 1.8.8 3 1.9 4.5 2.5z" />
                                                <path class="st46"
                                                    d="M340 15.8c0 .3-.2.6-.4.8-1.3 1.5-2.6 3-4.1 4.4-.4.3-.8.7-.8 1.2-.6.4-1.1.9-1.5 1.5-.4 0-.7.3-1 .6l-2.2 2.2c-.3.3-.6.6-1 .6 0-.4.2-.7.4-1 .7-1 1.1-2.1 1.7-3.1.9-1.6 1.8-3.3 2.8-4.9 1.1-1.9 2.3-3.8 3.5-5.7l.9-1.2c.3.7.6 1.5 1 2.2.2.8.5 1.6.7 2.4z" />
                                                <path class="st42"
                                                    d="M319.1-26.6c-1.6 1.1-3.2 2.3-4.9 3.4-1.3.9-2.7 1.8-4.2 2.5-1.7.8-3 2.1-3.8 3.8-.8 1.7-1.8 3.3-2.8 4.9-.5.8-1 1.5-1.7 2.1h-1.3c.1-.4.3-.6.6-.9 1.5-1.6 2.4-3.5 3.5-5.3.1-.1.1-.3.1-.4.2-.4.4-.7.6-1.1 1-1.8 2.3-3.3 4.3-4.2 1.1-.5 2.2-1.1 3.2-1.8 2-1.4 3.9-2.7 5.8-4.2 1.4-1.1 2.7-2.3 4.1-3.4.4-.3.7-.6 1.1-.8.7-.4 1.4-.5 2.1.1-.5.1-.8.3-1 .8-.3.2-.7.2-.9.6-1.1.6-1.9 1.4-2.8 2.2-.7.5-1.3 1.1-2 1.7z" />
                                                <path class="st41"
                                                    d="M287.7-30.7h2.1c0 1.6-.4 3.2-.8 4.8-.2.8-.4 1.6-.5 2.4-.3 2-.7 4-1.3 5.9-.6 1.8-.9 3.7-.9 5.7v2c-.4 0-.8-.1-1.2-.2-.4-.1-.6-.3-.6-.7.1-.6-.4-1-.6-1.5.3-.9.3-1.9.5-2.8.5-2.1 1.1-4.2 1.8-6.3.2-.5.4-1.1.5-1.6.5-2.6.8-5.2 1-7.7z" />
                                                <path class="st42"
                                                    d="M235 6.3c1.5 1.1 3.1 2.1 4.7 3 .6.3 1.1.8 1.5 1.4.9 1.4 2.1 2.6 3.6 3.4 1.7.9 3 2.3 4.4 3.5.4.4.9.7 1.2 1.1 1.2 1.3 2.8 1.9 4.3 2.8.3.2.2-.3.3-.5.6 1.1 1.2 2.3.5 3.6-.6 0-1-.4-1.5-.7-.9-.7-1.7-1.4-2.6-2.1-.4-.3-.7-.6-1-.9-.6-.8-1.4-1.4-2.1-2-.7-.6-1.5-1.2-2.1-2-.3-.5-.9-.8-1.4-1.1-1.7-1-3.3-2.2-4.5-3.8-.5-.6-1.1-1.1-1.7-1.5-1.4-.8-2.8-1.7-4.1-2.6 0-.2-.2-.4-.4-.4v-.3c.5-.3.7-.6.9-.9z" />
                                                <path class="st45"
                                                    d="M353.7-15.7c.6 0 1 .4 1.2.9-.2.5-.3.9-.6 1.4-.9 1.7-1.9 3.5-2.8 5.2-.7 1.4-1.5 2.7-2.2 4.1-.9 1-1.5 2.2-2.2 3.3-.9 1.6-1.8 3.2-3.2 4.5-.4.4-.4.5-.1 1 .7 1.1 1.6 2 2.1 3.2v.6c0 .6-.3.9-.9 1-.5-1.1-1.2-2-1.8-2.9-.1-.2-.3-.4-.5-.5-.2-.2-.4-.2-.7 0-.2.2-.4.3-.6.5-.1-.5.1-.9.4-1.3 1.3-1.9 2.6-3.7 3.8-5.6.1-.2.2-.4.3-.5.6-.6.7-1.3.6-2.1.3-.5.7-1 1-1.5 1.1-1.8 2.1-3.6 3.1-5.4 1.3-2.1 2.5-3.9 3.1-5.9z" />
                                                <path class="st46"
                                                    d="M307.6 38.8c.3 0 .6-.1.9 0 1.1.4 2.3.3 3.5.3.5 0 .9 0 1.4.1 1.7.3 3.4.3 5.1 0 .3-.1.7-.1 1.1-.1 0 .6-.4 1-.6 1.5-.2.4-.4.5-.8.1-.2-.2-.4 0-.6.1-.9.5-1.8.9-2.7 1.3-1.4.6-2.9 1.3-4.4 1.6-1.2.2-2.3.2-3.5-.1.1-.6.1-1.2.3-1.8.2-.9.3-2 .3-3z" />
                                                <path class="st41"
                                                    d="M353.4-95.6c-1.1 4.1-2.3 8.1-3.4 12.2l-.3.9c-.2 1.2-.8 1.8-2.1 1.7-.3 0-.7.1-1.1.2 0-.6.1-1.1.3-1.6.7-1.7.8-3.5 1.1-5.2.1-.8.4-1.5.4-2.3.4-.3.3-.8.7-1.1.7-.7 1.2-1.4 1.8-2.1.1-.2.2-.4.3-.7.6-.3.9-.9 1.4-1.3.2-.5.5-.7.9-.7zM372.4-95.3v2.6c.1 1.3-.1 2.5-.4 3.8-.6 2.5-1.3 4.9-2 7.3-.2.6-.4.7-1 .7-.2 0-.4-.1-.6-.1-.5-.2-.7-.4-.6-.9.1-.9.2-1.7.4-2.5.4-1.8.7-3.6 1.2-5.3.6-2.5 1-5 .9-7.5h.2c.9.2 1.6.9 1.9 1.9z" />
                                                <path class="st46"
                                                    d="M273.6 26.8c.2.1.4.1.6.2 1.7 1 3.5 1.9 5.3 2.6 1.7.6 3.3 1.2 4.8 2.3 1 .2 1.3.7 1 1.7-.1.4 0 .8 0 1.2-1.5-.5-3-1-4.4-1.5-1.9-.6-3.9-1.2-5.8-1.8l-.9-.3c-.4-.1-.5-.4-.5-.8-.1-1.2-.1-2.4-.1-3.6z" />
                                                <path class="st41"
                                                    d="M351.6-16.9c-.9 2.7-2.1 5.3-3.7 7.7-.9 1.4-1.9 2.8-2.9 4.1-.6.9-1.2 1.8-1.7 2.7-.4.6-.8 1.2-1.3 1.7-.2.3-.6.2-.8-.1-.2-.4-.2-.8-.1-1.2.2-.3.5-.5.7-.8.4-.6.8-1.3 1.1-1.9.2-.4.4-.7.3-1.1 1-.8 1.6-2 2.1-3.2.2-.6.5-1.1.8-1.7.6-1.1 1.2-2.1 1.8-3.2.7-1.2 1.3-2.4 1.8-3.7.8 0 1.5.1 1.9.7z" />
                                                <path class="st10"
                                                    d="M369-98.7c-.2 4-.8 8-1.8 11.9-.3 1-.4 2.1-.6 3.1 0 .2 0 .4-.1.6-.5 1.6.1 1.6-1.9 1.6h-.8c0-.3 0-.6.1-.9.6-1.6.9-3.3 1.4-5 .7-2.1 1.1-4.3 1.6-6.5l.6-3c.1-.4 0-.9.1-1.4v-2c.3.2.7.4 1 .6.3.3.4.6.4 1z" />
                                                <path class="st45"
                                                    d="M286.3-9.9v-2c0-1.9.3-3.8.9-5.7.6-1.9 1-3.9 1.3-5.9.1-.8.3-1.6.5-2.4.3-1.6.7-3.2.8-4.8h1.6c-.1 1.7-.5 3.4-.8 5.1-.3 1.5-.5 3.1-.8 4.6-.2 1-.4 2.1-.8 3.1-.8 2.6-1.2 5.2-1.1 8h-1.6z" />
                                                <path class="st46"
                                                    d="M347 9.7c.5-1.4 1-2.8 1.6-4.1 1.2-2.5 2.5-4.9 3.9-7.2 1.6-2.7 3-5.5 4.1-8.5.3-.8.8-1.6 1.2-2.5.2-.3.5-.4.8-.2.4.2.6.5.5.8-.1.3-.2.6-.4.8l-4.5 9c-.6 1.2-1.4 2.2-2 3.4-.7 1.3-1.5 2.5-2.1 3.9-.7 1.6-1.5 3.1-2.3 4.7-.1.2-.3.4-.5.5l-.3-.6zM288.9 36.3v-1.8c0-.4.2-.6.6-.4.9.3 1.8.7 2.7 1 1.7.7 3.3 1.5 5.1 1.9.9.2 1.7.6 2.7.5.1 1.2-.2 2.3-.4 3.4-.5 0-.9-.3-1.3-.5-2.9-1.5-5.9-2.7-8.8-4.1h-.6z" />
                                                <path class="st40"
                                                    d="M351-93.8c-.1.2-.1.5-.3.7-.6.7-1.2 1.5-1.8 2.1-.3.3-.2.9-.7 1.1-.6.5-.8 1.2-1.2 1.8-.7.9-1.2 1.9-1.7 2.8-.9 1.5-1.6 3-2.4 4.6 0 .1.1.2.1.3-.6.4-.8 1-1.1 1.6-.6 1.2-1.3 2.4-1.4 3.8 0 .2-.2.5-.4.6-.4.5-.7 1-.8 1.6-.2.3-.3.7-.6.9-.1-1.1.4-4.8.9-6.1.8-.2 1-.9 1.4-1.5.6-1.1 1.1-2.3 1.7-3.4.2-.5.8-.9.6-1.5.4-.5.9-.9.9-1.6.3-.2.3-.5.3-.9.4-.2.6-.4.6-.9.5-.3.7-.7.7-1.3.4-.2.7-.6.9-1 .9-1.4 1.9-2.7 3.1-3.9.4.2.8.2 1.2.2z" />
                                                <path class="st45"
                                                    d="M281.2-13v-1.7c-.1-1.8.3-3.5.7-5.3.6-2.3 1.2-4.6 1.5-7 .2-1.4.5-2.7.7-4h1.5c-.1.9-.1 1.7-.3 2.6-.3 1-.5 2.1-.6 3.1-.2 2-.8 3.9-1.2 5.8-.4 1.6-.8 3.2-.7 4.9v2c-.6-.1-1.2.1-1.6-.4z" />
                                                <path class="st46"
                                                    d="M315.5 36.3c0-.3 0-.7.2-.9.6-.5.9-1.3 1.3-1.9.9-1.4 2.2-2.5 3.4-3.7.4-.4 1-.6 1.5-.6h1.5c-.5 1.2-1 2.4-1.4 3.7-.2.5-.4 1-.7 1.5-.3 0-.6 0-.9.2-.2.1-.4.3-.6.4-1.3 1.1-2.7 1.5-4.3 1.3z" />
                                                <path class="st41"
                                                    d="M285.8 22.2v2.5c-.2-.1-.4-.1-.6-.2-1.9-1.5-4.2-2.5-6.3-3.8-1.8-1.1-3.7-2.2-5.4-3.4 0-.8-.4-1.6-.3-2.4 1 .3 1.6 1 2.3 1.6.7.6 1.4 1.1 2.2 1.6.8.4 1.6.9 2.4 1.3l3.3 1.8c.9.4 1.6.7 2.4 1z" />
                                                <path class="st10"
                                                    d="M273.9-13.6c-.1-2.1.1-4.1.5-6.2v-.6c0-1.6.4-3.2.5-4.8.2-1.8.7-3.6.7-5.4 0-.5.2-1 .3-1.5.1-.3.3-.4.6-.4.4 0 .6.2.6.5 0 .5.1.9 0 1.4-.2.7-.1 1.5-.3 2.3-.3 1.1-.2 2.3-.5 3.5-.2.8-.2 1.7-.3 2.6-.1 1.2-.3 2.3-.4 3.5-.1 1.2-.3 2.4-.5 3.6-.1.6-.1 1.1-.1 1.7-.4-.2-.7-.2-1.1-.2zM377.6-78.7c-1.2-.4-2.5-.9-3.7-1.3-.5-.2-.7-.4-.5-.9.3-1 .6-2 .9-3.1.4-1.3.8-2.6 1.1-4 .1-.4.1-.8.1-1.2.2 0 .4 0 .5.3.4 1.9.9 3.7 1.2 5.6.3 1.5.6 3.1.4 4.6z" />
                                                <path class="st41"
                                                    d="M285.8 25.6v1.5c-1.9-.6-3.8-1.3-5.5-2.5-.5-.3-.9-.7-1.3-1-1.9-1.1-3.7-2.2-5.4-3.7.1-.5-.2-1.1.3-1.5 1.1.7 2.1 1.5 3.2 2 1.2.6 2.3 1.5 3.5 2.1 1.4.7 2.8 1.4 4 2.4.3.4.7.7 1.2.7zM282.7-12.7v-2c-.1-1.7.3-3.3.7-4.9.4-1.9 1.1-3.8 1.2-5.8.1-1.1.3-2.1.6-3.1.2-.8.2-1.7.3-2.6.5 0 1 0 1.5.3-.2 1.4-.5 2.9-.7 4.3-.2 1.3-.3 2.7-.7 4-.4 1.2-.8 2.5-1.2 3.8-.6 1.9-1.1 3.9-1.2 5.9-.1.1-.3.1-.5.1zM314-3.5c-1.8 1.4-3.8 2.5-6 3.2-.7.3-1.1.1-1.4-.7-.2-.5-.4-.9-.6-1.4-.3-.7-.2-.9.5-1.1 1.5-.4 2.9-1.1 4.4-1.6.4 0 .9.1 1.2-.3.5.4 1 .7 1.4 1.1.3.2.4.5.5.8z" />
                                                <path class="st10"
                                                    d="M272.4-5.1c-.1-.4 0-.7.3-1 1.1-1.1 2.2-2.4 3.5-3.3.8-.6 1.6-1.4 2.4-2.1 1 .1 2 .2 3 .4.2 0 .3.3.2.5-.3.4-.7.6-1.1.8-1.3.5-2.3 1.4-3.5 2.1-.6.3-.8 1-1.1 1.6-.3.6-.6 1.3-1 1.9-.3.7-.5.7-1 .2-.3-.3-.6-.6-.9-.8-.4-.1-.6-.2-.8-.3zM366.3-101.1v1.2c.2 2.2-.4 4.3-.7 6.5-.6 3.5-1.8 6.9-2.7 10.3-.1.5-.4.9-.6 1.4-.1.2-.3.2-.5.1s-.3-.3-.3-.5.1-.5.2-.7c.7-2.4 1.5-4.9 2.1-7.3.4-1.8.8-3.6 1.1-5.3.3-1.9.2-3.7.3-5.6.5-.6.5-.6 1.1-.1z" />
                                                <path class="st45"
                                                    d="M285.8 22.2c-.7-.3-1.5-.6-2.2-1l-3.3-1.8c-.8-.4-1.6-.9-2.4-1.3-.8-.4-1.5-1-2.2-1.6-.7-.6-1.4-1.3-2.3-1.6v-1.1c0-.3.1-.6.3-.7.2 0 .4.1.6.1.2.2.4.5.6.7.8.6 1.5 1.3 2.3 1.9.9.7 1.8 1.4 2.9 1.6 1.9 1.2 3.7 2.5 5.8 3.1-.1.5-.1 1.1-.1 1.7z" />
                                                <path class="st41"
                                                    d="M336.7-36.2c-1 2.3-1.9 4.7-3.3 6.8-.2.3-.3.7-.5 1.1-.8 0-1.6.1-2.4-.2-.3-.1-.6-.1-.9-.1.7-1.3 1.4-2.7 2.2-4 .4-.7.9-1.2 1.5-1.6.9-.5 1.7-1.1 2.5-1.7.3-.2.5-.4.9-.3zM318.2-15.5c.4.4 1.2.6 1.4 1.1.2.6-.6 1-.9 1.5-1.2 1.9-2.9 3.5-4.8 4.8-.7.1-1.2-.3-1.8-.6 1.4-1.8 2.8-3.6 4.3-5.3.2-.2.4-.4.5-.6.1-.8.7-.9 1.3-.9zM341.5 6.3c.2-.2.4-.3.6-.5.2-.2.5-.2.7 0 .2.2.4.3.5.5.6 1 1.4 1.9 1.8 2.9 0 .5 0 1-.3 1.4-.6.8-1.2 1.6-2.1 2.2-.4-.8-.8-1.5-1.4-2.2-.4-.5-.7-1.1-.9-1.7-.2-.6-.2-1.2.3-1.6.2-.2.3-.4.4-.6.3.1.4-.1.4-.4zM353.7-15.7c-.7 2-1.9 3.8-2.9 5.7-1 1.8-2.1 3.6-3.1 5.4-.3.5-.7 1-1 1.5-.7-.2-1.2.2-1.9.3.3-1 1-1.8 1.6-2.6 1.5-1.9 2.6-4.1 4-6.1.1-.1.2-.3.2-.4.5-1.6 1.3-3.1 1.7-4.7.7 0 1 .5 1.4.9zM289.5-3.8c.1.7-.1 1.4-.3 2.1-1.4-.2-2.8-.5-4.1-1-2.5-.9-5.1-1.4-7.8-1.8 0-.6.3-1 .6-1.5.1-.1.3-.2.5-.2.6.3 1.2.5 1.8.7 1.7.5 3.4.8 5.2 1.1 1.4.2 2.7.7 4.1.6z" />
                                                <path class="st45"
                                                    d="M349.8-17.6c-.5 1.3-1.2 2.5-1.8 3.7-.6 1.1-1.2 2.1-1.8 3.2-.3.5-.5 1.1-.8 1.7-.5 1.2-1 2.3-2.1 3.2 0-.6-.5-.9-.7-1.4.6-1.1 1.1-2.1 1.6-3.3.4-1.1 1.1-2.1 1.7-3.1.9-1.5 1.8-3.1 2.6-4.7.6.1 1.1.2 1.3.7zM273.6 20c1.6 1.5 3.5 2.6 5.4 3.7.5.3.9.7 1.3 1 1.7 1.2 3.6 1.9 5.5 2.5v.6c-.1.5-.3.7-.7.5-.4-.1-.9-.3-1.3-.5-1.3-.5-2.6-1.1-3.9-1.6-.4-.2-.8-.5-1.2-.6-.1-.4-.4-.5-.8-.7-1-.5-1.9-1.1-2.9-1.7-.5-.3-1-.6-1.6-.9.1-.8.1-1.5.2-2.3z" />
                                                <path class="st41"
                                                    d="M330.8-24.9c-.8 1.4-1.8 2.7-2.9 3.9-.5.6-.9 1.2-1.5 1.8-.5.6-.8.6-1.4 0-.4-.3-.7-.8-1-1.1.7-1 1.5-1.9 2.3-2.8.4-.4.9-.9 1.2-1.4.3-.4.6-.8 1.1-1 .6.1 1.1.4 1.7.4.2-.1.3.1.5.2z" />
                                                <path class="st10"
                                                    d="M371.5-39.6c0-.6.1-1.1.3-1.6.7-2 1.3-4 2-6 .4-1 .7-2.1.8-3.2 0-.2.2-.3.3-.5 0 1.3-.1 2.5 0 3.8.1 2.6-.5 5-1.3 7.5-.1.4-.3.7-.4 1.1-.8-.2-1.1-.9-1.7-1.1z" />

                                                <path class="st41"
                                                    d="M264.1 25.5v-1c0-.3.1-.6.3-.8 1.7.4 3.2 1.2 4.8 1.8 1 .4 1.8 1 2.9 1.3v2c0 .2-.2.4-.4.3-.1 0-.3-.1-.4-.2-1.9-1-3.9-1.8-5.6-2.9-.6-.3-1.1-.4-1.6-.5z" />
                                                <path class="st45"
                                                    d="M283.3-12.7c.1-2 .6-4 1.2-5.9.4-1.3.7-2.5 1.2-3.8.5-1.3.5-2.7.7-4 .2-1.4.5-2.9.7-4.3h.7c-.2 2.6-.5 5.1-1 7.6-.1.5-.3 1.1-.5 1.6-.7 2.1-1.3 4.2-1.8 6.3-.2.9-.1 1.9-.5 2.8-.3 0-.6 0-.7-.3z" />
                                                <path class="st10"
                                                    d="M274.8 1.4c.5-.1.9 0 1.3.2 1.7.9 3.5 1.7 5.1 2.7 1 .7 2.1 1.2 3.2 1.6 1 .4 1.7 1 2.6 1.6.2.1.2.3.1.5-.1.3-.4.3-.6.2-.2-.1-.4-.1-.6-.3-1.6-1-3.3-1.8-5-2.5-.4-.2-.7-.4-1-.6-1.1-.7-2.2-1.4-3.5-1.8-.7-.2-1.2-.7-2-.8 0-.2.3-.5.4-.8z" />
                                                <path class="st41"
                                                    d="M374.6-92.3c-.1.4-.3.8-.3 1.2 0 1.9-.7 3.6-1.1 5.4-.3 1.3-.8 2.5-1.1 3.8l-.3.9c-.1.3-.3.4-.6.3-.3-.1-.4-.3-.3-.6 0-.3.1-.6.2-.9.4-1.4.8-2.7 1.2-4.1.8-2.7 1.2-5.5 1.1-8.4.7.6 1.1 1.5 1.2 2.4z" />
                                                <path class="st10"
                                                    d="M327.7 13.1c-.4-.8-.4-1 .1-1.4.2-.2.5-.3.7-.5.4-.3.8-.6 1-1.1.3-.8.9-1.3 1.5-1.9.7-.7 1.4-1.5 1.8-2.4.3-.7.8-1.4 1.2-2.1.1-.1.2-.2.4-.3.1.2.3.4.4.7.2.3.2.6 0 1l-1.8 3c-.4.8-.7 1.7-1.7 1.9l-2.7 2.4c-.3.2-.6.4-.9.7zM261.3 28.4V33c0 .3 0 .6-.3.8-.6-.7-1.1-1.5-2.1-1.6-.3 0-.5-.4-.5-.7-.2-1.2-.5-2.4-.4-3.6 0-.4.2-.5.6-.4.4.1.8.3 1.1.4.5.4 1 .5 1.6.5zM274.5-11.8c-.3.6-.9.8-1.3 1.2-1.5 1.1-2.9 2.2-4.2 3.5-.8-.2-1.4-.7-2.1-1.2-.3-.2-.3-.7 0-.9 1.8-1 3.6-2.1 5.7-2.3.6 0 1.2-.3 1.9-.3z" />
                                                <path class="st45"
                                                    d="M277.3-4.5c2.6.4 5.2.9 7.8 1.8 1.3.5 2.7.8 4.1 1 0 .4-.2.7-.3 1-1.1-.1-2.2-.3-3.3-.6-2.3-.9-4.8-1.3-7.2-1.9l-1.5-.3c0-.4 0-.8.4-1z" />
                                                <path class="st40"
                                                    d="M347.9-107c.4.5 1 .7 1.6.9 1.4.5 2.7 1.3 4 2.1 1.2.7 2.3 1.5 3.5 2.1.4.2.8.6 1.1 1.1-.2.4-.6.3-1 .3-1.3-.8-2.6-1.6-3.9-2.3-2-1.2-4-2.3-6.2-2.9.1-.6.5-1 .9-1.3z" />
                                                <path class="st45"
                                                    d="M272 26.8c-1-.3-1.9-.9-2.9-1.3-1.6-.7-3.1-1.4-4.8-1.8-.4-.6-.5-1.2 0-1.8 2.3.9 4.7 1.8 6.9 2.9.2.1.5.1.7.1.1.7.1 1.3.1 1.9zM271.7 32.4c-1.8-.7-3.7-1.4-5.5-2.1-.7-.2-1.3-.5-2.1-.5v-1.7c.5.2.9.4 1.4.5 1.6.4 3.1 1 4.7 1.6.6.2 1.2.5 1.9.6-.2.5.1 1.1-.4 1.6z" />
                                                <path class="st41"
                                                    d="M303.6 38.2c.4 0 .8 0 1.2.1.4.2.9.2 1.3.2 0 1.1-.1 2.1-.4 3.1-.2.6-.2 1.2-.3 1.8-.6.1-1.2.1-1.7-.2-.5-.2-.7-.6-.6-1.1.2-1.4 0-2.7.5-3.9z" />
                                                <path class="st40"
                                                    d="M355-99.3c-.4-.2-.8-.4-1.1-.7-1.6-1.4-3.5-2.5-5.5-3.3l-1.2-.6c-.4-.2-.8-.4-1.3-.4.2-.5.4-.9.9-1.2 1.4.7 2.9 1.5 4.3 2.1 1.8.8 3.2 2.1 4.6 3.4-.1.5-.3.7-.7.7z" />
                                                <path class="st45"
                                                    d="M285.8 25.6c-.5-.1-.9-.3-1.2-.6-1.2-1-2.6-1.7-4-2.4-1.2-.6-2.3-1.5-3.5-2.1-1.1-.6-2.1-1.3-3.2-2l-.3-.3c-.4-.4-.4-.4 0-.9 1.8 1.2 3.6 2.2 5.4 3.4 2.1 1.3 4.3 2.2 6.3 3.8.1.1.4.1.6.2-.1.3-.1.6-.1.9zM290.4-6.3c-.1.3-.2.7-.3 1-1.2 0-2.3-.3-3.4-.5-.6-.1-1.2-.2-1.8-.4-1.1-.5-2.2-.9-3.4-1.3-.6-.2-1.1-.4-1.6-.9.3-.6.5-.8 1-.6.8.4 1.8.6 2.7.9 1.2.6 2.4 1 3.7 1.2 1 .2 2 .4 3.1.6z" />
                                                <path class="st41"
                                                    d="M280-8.4c.4.5 1 .6 1.6.9 1.1.4 2.3.8 3.4 1.3.6.3 1.2.3 1.8.4 1.1.3 2.2.5 3.4.5 0 .2-.1.5-.3.6-1.1 0-2.2-.1-3.3-.4-2.6-.6-5.2-1-7.6-1.9-.1-.6.4-1 1-1.4z" />
                                                <path class="st10"
                                                    d="M290.4-6.3c-1-.2-2.1-.4-3.1-.6-1.3-.2-2.5-.6-3.7-1.2.1-.4.3-.7.7-.6 1.2.1 2.4 0 3.6.2.9.2 1.9.1 2.8.1 0 .7-.1 1.4-.3 2.1z" />
                                                <path class="st41"
                                                    d="M261.3 22v2.1c-.4 0-.8-.1-1.2-.3-.8-.4-1.6-.8-2.5-1.1-.7-.3-1-.8-.9-1.5v-.6c0-.3.2-.5.5-.3.7.3 1.4.5 2.1.9.6.3 1.3.6 2 .8zM341.5 24.7h-2.1c0-1.2.4-2.5.3-3.7 0-.3.2-.6.4-.8.6-.4 1.1-.9 1.6-1.3 0 .9.1 1.8-.1 2.6-.1 1-.1 2.1-.1 3.2z" />
                                                <path class="st45"
                                                    d="M341.5 24.7c0-1.1 0-2.1.2-3.2.2-.8 0-1.7.1-2.6.4-.6 1-.9 1.6-1.3v3.5c-.4 1.2-.2 2.4-.3 3.6h-1.6z" />
                                                <path class="st46"
                                                    d="M320.1 37.2c-.2.1-.5.1-.7.2-1 .6-2.1.8-3.2.7-.9-.1-1.8 0-2.7 0-.3 0-.6 0-.9-.1-.8-.3-1.7-.3-2.6-.2-.6 0-1.2-.1-1.8-.4-.1 0-.2-.2-.2-.4 0-.1.1-.2.2-.2.2-.2.6-.3.9-.2 1.7.6 3.5.5 5.2.8 1.1.2 2.2.1 3.3 0 .7 0 1.2-.4 1.8-.7.4-.2.9-.5 1.3-.8 0 .3-.2.6-.3.9-.1.2-.2.3-.3.4z" />
                                                <path class="st45"
                                                    d="M278.8-6.9c2.5.9 5.1 1.3 7.6 1.9 1.1.3 2.2.3 3.3.4 0 .3.1.7-.3.9-1.4.1-2.7-.4-4-.7-1.7-.3-3.5-.6-5.2-1.1-.6-.2-1.2-.4-1.8-.7 0-.3.1-.6.4-.7z" />
                                                <path class="st46"
                                                    d="M350.4 24.6h-.9v-3.7c0-.6 0-1.1.2-1.7.1-.5.1-1 .1-1.5.1-1.4-.1-2.7.3-4.1.1-.6.3-1.3-.2-1.9.1-.3.3-.5.6-.6-.1 4.6-.1 9.1-.1 13.5z" />
                                                <path class="st10"
                                                    d="M355.6-99.9c-1.4-1.3-2.8-2.5-4.6-3.4-1.5-.7-2.9-1.4-4.3-2.1l.3-.3c2.2.7 4.2 1.8 6.2 2.9 1.3.8 2.6 1.6 3.9 2.3-.3.7-.9.6-1.5.6z" />
                                                <path class="st45"
                                                    d="M340 15.8c-.2-.8-.5-1.6-.9-2.4-.4-.7-.6-1.5-1-2.2.2-.7.5-1.3 1.2-1.5 0 .2.1.5.3.6 0 .6.1 1.1.3 1.6.3.6.6 1.2.9 1.9.6 1.1.4 1.5-.8 2z" />
                                                <path class="st40"
                                                    d="M329 21l1.2-.9c.3.2.3.4.1.6-.3.6-.7 1.1-1 1.7l-3.6 6.9c-.1.2-.3.4-.4.6 0-.9.4-1.7.7-2.5.6-1.7 1.4-3.3 2.1-5 .2-.5.6-.9.9-1.4z" />
                                                <path class="st41"
                                                    d="M272 30.8c-.7-.1-1.2-.4-1.9-.6-1.5-.6-3.1-1.3-4.7-1.6-.5-.1-.9-.3-1.4-.5v-1.8c.6.3 1.2.6 1.7 1 1.7 1.1 3.7 1.7 5.4 2.7.5.1.9.3.9.8zM370-35.4c0-.4 0-.8.1-1.2.2-.5.3-1 .5-1.5.9.1 1.3.9 1.9 1.4.2.1.2.4.2.7 0 .8-.3 1.6-.6 2.3-.4.2-.6-.2-.8-.4l-1.3-1.3z" />
                                                <path class="st13"
                                                    d="M327.8-28.2c-.3-.2-.6-.4-.9-.5-.7-.3-1.4-.3-2.1.1-.2.1-.4.3-.6.4-.3.2-.6.2-.8 0-.3-.3-.3-.6 0-1 .2-.2.4-.5.6-.7.1-.2.1-.4 0-.6.5.2.9-.1 1.2-.4 1.3.2 2 1.1 2.6 2.2.1.1.1.3 0 .5z" />
                                                <path class="st45"
                                                    d="M305.3 43.3c.1-.6.1-1.2.3-1.8.3-1 .4-2 .4-3.1.6-.1 1 .3 1.5.3 0 1.1-.1 2.1-.4 3.1-.2.6-.2 1.2-.3 1.8-.5 0-1.1.2-1.5-.3z" />
                                                <path class="st41"
                                                    d="M270.2-2c.1-.7.4-1.3.9-1.8 1.1.2 1.8 1.1 2.5 1.8.3.3.2 1-.2 1.4-.1.1-.3.1-.4.1-.7-.2-1.4-.4-1.9-.9-.2-.3-.5-.5-.9-.6z" />
                                                <path class="st46"
                                                    d="M363.2 7c.2 1.7-.2 3.3-.5 4.9-.1.4-.2.8-.5 1.1-.1.1-.2.1-.3.1-.1 0-.1-.1-.1-.2v-.3c.3-.7.2-1.5.3-2.2l.6-5.7s0-.1.1-.1c.1-.1.2-.1.2-.1.1 0 .2.1.2.2V7z" />
                                                <path class="st41"
                                                    d="M268-5.9c-.1.7-.4 1.3-.9 1.8-.3-.2-.7-.3-.9-.5-.6-.6-1.3-1.1-2.1-1.5-.4-.2-.4-.6-.1-.9.5-.6.8-.6 1.4-.2.8.6 1.7 1 2.6 1.3zM261.3 25v1.8c-1.1-.2-2.1-.7-3.1-1.2-.8-.4-1.1-1-.8-1.9 1.4.1 2.5 1.1 3.9 1.3zM336.3.2c0-.6.1-1.1.3-1.6l1.2-2.4c.4.2.6.5.8.8.3.5.4.9 0 1.4-.4.6-.8 1.3-1.2 1.9-.3.6-.5.6-1.1-.1z" />
                                                <path class="st42"
                                                    d="M263.8-13.4c.7.1 1.4.2 2.1.5 1 .4 2 .6 3.1.9-.1.8-.1.8-.6.8-.6 0-1.2.2-1.8.4.1-.2.4-.5-.1-.7l-2.7-.9v-1z" />
                                                <path class="st41"
                                                    d="M309.9-5.4c-1.1.2-2 .8-3 1-.4.1-.8.3-1.2.3-.5 0-.8-.3-.9-.8 0-.3.1-.6.5-.6h.6c.8 0 1.5-.1 2.2-.3.5-.3 1-.4 1.6 0 .2 0 .2.2.2.4zM369-32.9c-.1-.6.2-1.2.3-1.8 1.1.8 2.1 1.7 2.6 3.1.1.2.1.4.1.6 0 .2-.1.4-.3.5-.1 0-.3 0-.4-.1-.3-.2-.5-.5-.8-.7-.4-.6-.9-1.1-1.5-1.6z" />
                                                <path class="st40"
                                                    d="M329 27.1c.5 0 .7-.3 1-.6l2.2-2.2c.3-.3.6-.6 1-.6 0 .3-.1.5-.2.7-.2.3-.5.5-.7.8-1.2 1-2 2.4-3.1 3.4-.3.2-.5.5-.8.7-.1.1-.3.1-.4.1-.2-.1-.2-.3-.1-.4.2-.4.5-.9.8-1.3.2-.1.3-.3.3-.6z" />
                                                <path class="st41"
                                                    d="M266.8-3.4c0 .5-.2.8-.5 1.1-.7-.4-1.4-.9-2.2-1.3-.4-.2-.8-.5-1.1-.7-.4-.3-.5-.6-.2-.9.2-.3.5-.3.8-.2.6.3 1.2.5 1.7 1 .3.5.8.8 1.5 1zM339.9-.1c.5.2.4.8.6 1.2.1.2 0 .5-.2.7l-1.5 2.1c-.3.3-.5.3-.8-.1-.1-.1-.1-.2-.2-.3-.1-.9.5-1.5 1-2.1.5-.4.8-.9 1.1-1.5z" />
                                                <path class="st10"
                                                    d="M295.2-8.4c0 .6.3 1 .6 1.5.1.2 0 .5-.3.6-.8.1-1.5.4-2.4.3-.2-.8.3-1.6.3-2.4h1.8z" />
                                                <path class="st46"
                                                    d="M273.5 22.2c.5.3 1.1.6 1.6.9.9.6 1.8 1.3 2.9 1.7.3.2.6.3.8.7-.8 0-1.5-.4-2.2-.6-1-.4-1.9-.8-3-.9 0-.6 0-1.2-.1-1.8z" />
                                                <path class="st41"
                                                    d="M269.3-.4c0-.4.2-.7.6-.9.7.6 1.4 1.1 2.3 1.4.2.1.4.3.6.4.2.2.2.7-.1 1-.2.2-.5.2-.7 0l-1.2-.9c-.5-.4-1-.8-1.5-1zM336.3 6.3c.1.5 0 .9-.2 1.3-.8 1.4-1.6 2.8-2.6 4-.1.1-.2.1-.2.2 0-.5.1-.9.3-1.3.7-1.3 1.4-2.6 2.1-3.8.1-.3.3-.4.6-.4z" />
                                                <path class="st10"
                                                    d="M262.2 35.1v-4.6c0-.3.1-.6.1-.9 0-.1.1-.2.2-.1.1 0 .2.1.2.2 0 .2.1.5.1.8v2.4c0 .9 0 1.7.3 2.6-.3-.1-.6-.3-.9-.4z" />
                                                <path class="st41"
                                                    d="M335.4 11.5h-.6c.4-1.2 1.3-2.3 1.9-3.4.2-.4.5-.1.8.1.1.4 0 .7-.2 1-.5.9-1.4 1.5-1.9 2.3zM298.6-8.4c.1.3.2.6.3.8.1.3.4.6.2.8-.3.3-.7.3-1.1.3-.2 0-.4-.2-.5-.3-.3-.5-.6-1-.7-1.6h1.8zM339 6c-.2-.2-.4-.4-.3-.7.5-1.1 1.2-2.1 2.1-2.9.1-.1.3.1.4.2V3c-.6 1.1-1.1 2.3-2.2 3zM330.2-32.3c.1.5-.1.9-.4 1.3-.2.3-.2.9-.7.9-.5 0-.7-.5-1-.8-.2-.3-.1-.6.2-.8.6-.3 1.2-.6 1.9-.6zM301.7-8.1c0 .1 0 .2.1.3.3 1.1.1 1.4-1.1 1.2-.2 0-.4-.1-.5-.3l-.6-1.2h2.1z" />
                                                <path class="st46"
                                                    d="M306.9-6.9c-.6.1-1.1.3-1.7.3-1.2 0-1.2 0-1.6-1.2.9.1 2.2.4 3.3.9z" />
                                                <path class="st41"
                                                    d="M320.4-17.9c.1.1.3.2.4.3.6.6.5 1.3-.1 1.7-.1.1-.3.1-.4 0-.3-.1-.5-.3-.7-.5-.2-.7.2-1.2.8-1.5zM326.2 21.3c-.6-.7-.4-1.6-.2-2.4 0-.2.3-.3.5-.3.1 0 .2.2.3.3.1.3.1.6.3.8-.1.7-.3 1.3-.9 1.6zM378.8-71.5l-.2.2c-.3.2-.6.2-.6-.1-.1-.5-.1-1 .1-1.5.1-.3.1-.7.2-1 .4.2.6.5.6.9 0 .5-.1 1-.1 1.5z" />
                                                <path class="st10"
                                                    d="M257.6 5.1c.7.5 1.3 1.2 1.9 1.8.1.1.3.3.1.5-.2.1-.4 0-.5-.2-.6-.5-1.1-1-1.7-1.5-.1-.3 0-.5.2-.6z" />
                                                <path class="st46"
                                                    d="M376.7-58.9c.1-1.5.4-3 1.2-4.3 0 .6 0 1.2-.2 1.8-.2.5-.3 1-.4 1.5-.1.4-.2.8-.6 1zM377.9-63.2c.1-1.4.3-2.7.9-4 .1 1-.1 2-.3 3-.1.4-.2.8-.6 1z" />
                                                <path class="st41"
                                                    d="M342.7.2c.3-.5.4-1 .9-1.2 0 .9 0 .9-.9 1.2zM344.2-1.7c-.1-.5.1-1 .6-1.2.1.6 0 1-.6 1.2z" />
                                                <path class="st30"
                                                    d="M325.2-30.9c-.4.2-.7.6-1.2.4.2-.4.6-.5.9-.6.1 0 .2.1.3.2z" />
                                                <path class="st41"
                                                    d="M342.1 1.1c0-.4.2-.7.6-.9 0 .7 0 .7-.6.9zM343.6-1c0-.4.2-.6.6-.6 0 .3-.1.6-.6.6z" />
                                                <path class="st46" d="M376.4-57.7c0-.4-.2-.9.3-1.2 0 .4.1.9-.3 1.2z" />
                                                <path class="st45" d="M341.5 6.3c0 .3-.1.5-.3.6-.3-.5-.3-.5.3-.6z" />
                                                <path class="st42" d="M301.7-9.4c.3 0 .6 0 .9.1-.3 0-.6.1-.9-.1z" />
                                                <path class="st40"
                                                    d="M339.7 10.3c-.3-.1-.3-.4-.3-.6.1-.1.2-.1.3.1v.5zM325.3 29.9v.3l-.1.1c-.1 0-.2-.1-.1-.2 0-.1.1-.2.2-.2z" />
                                                <path class="st46" d="M329 27.1c0 .3-.1.5-.3.6 0-.2 0-.4.3-.6z" />
                                                <path class="st41" d="M332.9 12.1c0 .3-.1.5-.3.7 0-.3.1-.5.3-.7z" />
                                                <path class="st46"
                                                    d="M362.3-1.7V-2l.1-.1c.1 0 .2.1.1.2 0 .1-.1.2-.2.2z" />
                                                <path class="st41"
                                                    d="M330.2-32.3l.1-.1v.1h-.1zM333.3 11.8l-.3.3c0-.1.1-.2.3-.3z" />
                                                <path class="st42" d="M337.3-43.3c.1 0 .1-.1.2-.1v.2h-.1l-.1-.1z" />
                                                <path class="st40"
                                                    d="M311.8-10.6c.1 0 .1-.1.2-.1-.1.1-.1.1-.2.1zM311.8-10.5l-.3.3-.1-.1c.2-.1.3-.2.4-.2zM320.1 37.2l.3-.3-.3.3z" />
                                                <path class="st46" d="M319.5 39.1l.3-.3-.3.3z" />
                                                <path class="st39" d="M269.5 39.4c.3 0 .5 0 .6.3-.2 0-.4-.1-.6-.3z" />
                                                <path class="st40"
                                                    d="M196.7-2.3c.1.3.2.5.2.8.1.3 0 .6-.2.7l-.9-.3c-.3-.2-.5-.5-.8-.7-.8-.4-1.2-1.1-1.5-1.8-.3-.8-.5-1.6-.5-2.5 0-.1 0-.3-.2-.3-.1 0-.3 0-.4.1-1.1 1-2.1 2.1-3.1 3.1-.8.7-1.4 1.6-2 2.5-.8.5-1.4 1.1-1.9 1.9-.8.4-1 1.2-1.5 1.8-.5.3-.9.6-.9 1.2-.7.4-1.1 1-1.2 1.8-.3 0-.5.1-.6.3-.1.3-.3.5-.6.6 0-.8 0-1.7.3-2.5.1 0 .3 0 .4-.1.1-.1.1-.2.2-.4 0-.1-.1-.2-.2-.2-.1.1-.3.2-.3.3-.1.1-.1.3-.1.4-.4-.2-.3-.6-.3-1l.3-1.2c.4-1.2.6-2.3.6-3.6 0-.4-.1-.9.2-1.5 0 .7.1 1.3.1 1.8 0 .2.1.3.2.4.2.1.3 0 .4-.1.3-.3.6-.6.6-1 1.2-.9 1.9-2.1 2.7-3.3 1-.6 1.6-1.4 1.9-2.5.3 0 .6-.2.8-.4.7-.7 1.4-1.4 2.1-2 .8-.7 1.7-1.5 2.7-1.9 1.2-.5 2-1.4 2.6-2.7.9-1.9 1.9-3.8 3-5.7.4-.6.7-1.3.6-2 .5-.4.7-1 .6-1.6.2-.4.3-.8.3-1.2.3-.2.3-.6.3-.9.6-.6.8-1.4 1.2-2.1.2-.5.6-1 .6-1.6l.3-.3c1.5-2.7 2.8-5.5 3.7-8.5.1-.2.1-.4.2-.6.1-.4-.1-.7-.5-.7h-.9c-2.2 0-4.4-.1-6.6.3-1 .1-1.9.7-2.8.9.1-1.1.8-1.5 1.7-1.8.8-.2 1.6-.2 2.3-.7 2.3.1 4.6-.3 6.8.2h.2c.5 0 1-.8.8-1.2 0-.1-.1-.2-.2-.2-.4 0-.7-.1-1.1-.1h-5.9c-.8 0-1.6.3-2.3.5-.2.1-.4.1-.6-.1-.2-.3 0-.5.2-.6.4-.4.8-.9 1.2-1.3 0 .5.3.7.7.6l1.5-.3h6c.9 0 1.6-.1 1.8-1.2.1-.4.4-.8.6-1.2.7-1.5 1.2-3.1 1.6-4.7.4-1.5.7-3 1.1-4.4.1-.4.2-.9.2-1.4.3-.5.6-.9.6-1.5l.3-1.2v-.9c.6-.3.7-.9.6-1.5.5-.4.3-1 .3-1.5.2-.2.3-.5.4-.8.7-3.1 1.4-6.2 2.2-9.3.5-1.8-.2-1.6-1.4-1.6-.2 0-.5.2-.7.3-.6-.6-1.3-.3-2 0h-.9c.3-1 .4-2.2 1.2-3.1h1.2c.7 0 1.3.1 2-.3h1.5c.4 0 .7-.2.8-.6.3-.9.7-1.7 1-2.6.7-2 1.3-3.9 2.2-5.8.2-.5.3-1 .3-1.5.3-.1.3-.4.3-.6.3-.1.3-.4.3-.6l.3-.3c.3-.1.3-.4.3-.6.3-.1.3-.4.3-.6.2-.1.3-.2.3-.4.3-.8.8-1.4 1.3-2 .6-.6 1.2-1.2 1.6-2 .7-1.6 1.9-2.8 3.2-3.9.3-.2.6-.4.8-.7.6-.6 1.3-1 2.1-.4.1.1.3 0 .4-.1.1-.5.5-.6.9-.6 1.2 0 2.3-.5 3.5-.3 0 .5-.5.8-.7 1.2-.4.4-1.1.7-1.3 1.4.4.4.9.4 1.4.4.7 0 1.3 0 1.9.1-.1.3-.1.7-.4.9h-3.2c-.8 0-1.4.3-1.5 1.2-.5.4-.7.9-.6 1.5-.9.3-1 1-.9 1.9-.9.6-1.2 1.6-1.6 2.5-1.3 2.8-2.5 5.7-3.7 8.6-.4 1-.9 1.9-1.3 2.9-.1.3.1.6.4.7h.8c1.6 0 3.1.1 4.7-.3-.1.4 0 .9-.4 1.2-1.4.3-2.9.3-4.4.3h-1.1c-.1 0-.3 0-.4.1-.1.1-.2.2-.2.4 0 .1.1.3.2.3.5.2 1.1.2 1.6 0 1.3-.4 2.6-.2 3.9-.2 0 .4-.1.8-.4 1.2-1.1 0-2.2-.1-3.3.1-.7.1-1.5.2-2.2.2-.1-.2-.3-.3-.4-.5-.2-.3-.5-.5-.9-.5-.5 0-.5.4-.7.7 0 .1-.1.1-.2.2H221c-.6 0-.8.2-1 .8l-.3 1.5c-.7 2.8-1.3 5.5-2 8.3-.2.7-.3 1.3-.2 1.9-.5.3-.3.9-.4 1.3-.5.4-.2 1-.3 1.5-.3.2-.3.5-.3.9-.4.3-.3.8-.3 1.2-.5.4-.3 1-.3 1.5-.4.2-.5.6-.6 1-1 3.1-2 6.3-3 9.4-.2.6-.4 1.2-.6 1.7-.2.5 0 .8.4 1 .2.1.5.2.7.2 1.5.5 3 .9 4.5 1.4.6.2 1.1.7 1.9.6.8.4 1.7.8 2.6.9h.1c.3.4.6.3 1 .4.5.4 1.3.5 1.8 1 .3.2.4.1.6-.5.2.2.2.5.3.7.3.9.7 1.1 1.5.7.1 0 .2-.1.2-.2.3-.2.6-.2 1-.1s.4.2 0 .7c-.7.1-1.1.7-1.7.9-1.2.5-2.1 1.3-3 2.3-.5.5-.9 1.1-1.4 1.6.3-1.8.3-1.8 1.6-3-.6-.1-1.3-.3-1.9-.4-.4-.2-.8-.4-1.2-.3-.9-.4-1.7-.9-2.8-.9-.5-.5-1.2-.6-1.8-.6-1.5-.8-3.2-1.1-4.9-1.5-.9-.2-1.1 0-1.5.9-.4 1-.8 2.1-1.3 3.1-.7 1.6-1.4 3.3-2.1 4.9-.2.5-.6 1-.6 1.6-.3.7-.8 1.3-.9 2-.3.1-.3.4-.3.7-.2.4-.4.8-.3 1.2-.5.4-.2 1-.3 1.6 0 .1 0 .3-.1.4-.7 1.1-1.5 2.2-2.2 3.3l-1.8 2.7c-.2.4-.6.8-.4 1.3.3.5.8-.1 1.2 0 .2 0 .4-.1.6-.2 1.8-.4 3.5-.9 5.4-.7.9.1 1.8 0 2.7 0 .7 0 1.4-.1 2.1-.3h1.9c.6 0 1.1.1 1.2.8.1.4-.2.6-.6.6-.3 0-.6-.1-.9-.1h-1.9c-.7.2-1.5.3-2.3.3h-3.7c-.4 0-.8 0-1.2.1-1.8.4-3.5.9-5.3 1.5-.3.1-.5.3-.7.6-.2.4-.4.7-.5 1.1v.3c.1.1.3.2.4.1.9-.4 1.9-.8 2.8-1.2 1.4-.6 2.9-1 4.4-.9h1.7c-.6.5-1.3 1-2.1 1.2-.6 0-1.2.1-1.8.2-1.7.4-3.2 1.2-4.8 1.9-1.7.7-1.7.8-1.9 2.5-.2 1.5-.2 3 1.2 4v.3c.2.9.2.9-.6 1 0-.3-.2-.6-.4-.8-1.1-1.3-1.4-2.8-1-4.4 0-.1.1-.3.1-.4 0-.1-.1-.2-.1-.3-.1 0-.2-.1-.3 0-.4.2-.7.6-.7 1.1 0 .7-.1 1.4 0 2.1.2 1.4.9 2.5 2.4 2.7zm30-90.9c-.5.2-.7.7-.6 1.2-.2.1-.4.1-.5.3-.2.2-.4.5-.2.8l.1.1c.3 0 .4-.3.5-.5.1-.2.1-.4.2-.6.4-.3.5-.8.5-1.3h.1v-.1s0 .1-.1.1zm4.5-1.4c.4-.2.6-.6.8-1 .1-.3 0-.6-.4-.6-.9.1-1.4.6-1.6 1.5-1 .3-1.1.5-1.2 1.5-.5.1-.7.4-.9.8l-1.8 3c-1.7 3.2-2.9 6.6-4.3 9.9-.2.5-.7 1.2-.3 1.7.5.5 1.3.2 1.9.2.3 0 .5-.3.6-.6.3-1.2 1-2.2 1.4-3.4 1.4-3.4 2.8-6.8 4.4-10 .2-.5.4-.9.3-1.5 1-.2 1.3-.8 1.1-1.5zM185.6-2.2c-.1 0-.3 0-.4.1-.8.6-1.3 1.4-1.8 2.2-.1.1-.1.3 0 .4 0 .1.1.3.2.4.1.1.3.1.4 0 .7-.6 1.4-1.2 1.7-2.1.4-.1.7-.2.9-.6.3-.5.6-.9 1-1.4.2-.2.5-.3.7-.6 1.1-1.7 2.8-2.6 4.1-4 1.2-.5 1.4-1.7 1.8-2.7.1-.2-.2-.4-.4-.4-.2.1-.4.1-.5.2-1.8 1.1-3.4 2.6-4.8 4.2-.4.5-.9 1-1 1.7h-.3c-.7.8-1.5 1.5-1.6 2.6zm31.3-36.5c.2.8.8.6 1.3.6.2 0 .4-.1.5-.3.1-.3 0-.5-.2-.7-.4-.3-.9-.6-1.5-.5-.2-.1-.3-.2-.5-.3-1.4-.7-3-.9-4.5-1.4-.6-.2-.9 0-1.1.6-.1.3 0 .6.4.7 1.5.4 3 .7 4.4 1.2.3.2.8.1 1.2.1zm-2.5-16.7c-.1-.3-.2-.5-.4-.5-.2-.1-.4 0-.5.2-.3 1.2-.7 2.3-.9 3.5-.6 2.5-1.2 4.9-2.3 7.2-.2.5-.4.9-.6 1.4-.1.2-.1.4.2.5.2.1.4 0 .5-.2.2-.3.3-.6.4-1 .5-1.4.9-2.9 1.4-4.4.7-2.1 1.4-4.2 2-6.2.1-.1.2-.4.2-.5zm10.7-34.7l-.1-.1c-.1 0-.2 0-.3.1-.6.7-1.1 1.6-1.4 2.5-1.3 3.2-2.5 6.4-3.7 9.6v.3c0 .1.2.1.2.1.2 0 .4-.2.4-.4.2-.6.4-1.2.6-1.7 1.4-3.3 2.6-6.7 4.2-9.9 0-.3 0-.4.1-.5zm-16 51.2c-.1-.1-.1-.2-.2-.3-.3-.1-.6-.1-.8.2-.2.2-.3.4-.3.7-1 2.7-1.7 5.4-3.3 7.8 0 0-.1.1 0 .1 0 .1 0 .3.1.4.1.2.4.2.6.1.2-.1.4-.3.5-.6.2-.6.4-1.2.6-1.7.9-2.1 1.9-4.2 2.8-6.2-.1-.2 0-.4 0-.5zm9.8-35.4c-.1-.1-.2-.1-.2-.1-.2 0-.3 0-.4.2-.2.7-.4 1.5-.6 2.2-.7 3-1.4 6-2.2 9 0 .2 0 .3.2.3.1 0 .2-.1.2-.2.4-1.1.4-2.4 1.2-3.4v-.1c.2-1.2.4-2.5.9-3.7.5-1.2.3-2.6.8-3.9.2-.1.1-.2.1-.3zm-21.8 60.6c.1-.1.3-.1.3-.2.2-.3.4-.6.5-.9.4-1.1 1-2.1 1.6-3.1.5-.8 1.1-1.6 1.6-2.4.3-.5.6-1 .8-1.4.1-.2.2-.4 0-.5-.2-.1-.4-.1-.6-.1-.5 0-.6.4-.8.8-.3 1.1-.8 2.2-1.5 3.1-.9 1.3-1.5 2.8-2.2 4.2-.1.1-.1.3-.1.4.1 0 .3 0 .4.1zm26-23.8c-.1.1-.3.2-.3.3-.1.2-.1.6.1.7.5.3 1 .5 1.5.7.3.1.6-.1.8-.4.1-.1.2-.3 0-.4-.6-.1-.9-.6-1.4-.8-.3.1-.5 0-.7-.1zm-18.9 10c0-.3-.2-.4-.3-.4-.7 0-1 .2-1.3 1-.1.3-.1.5.2.7.2.1.5.1.7 0 .5-.4.6-1 .7-1.3zm-2 3.2c.5 0 .8-.2.8-.5 0-.1 0-.2-.1-.3-.3-.2-.7-.2-1 .1-.1.1-.2.3-.2.4 0 .2.3.3.5.3zm29.3-74.6v.1h.1c.1-.1.1-.1 0-.2 0 .1-.1.1-.1.1z" />
                                                <path class="st46"
                                                    d="M212.3 25.9c0 .3 0 .6-.2.9-.7 1.1-1.3 1.2-2.4.4-.3-.2-.7-.4-1-.7-.7-.8-1.6-1.4-2.5-2-.9-.7-2-1.2-3.2-1.3h-.3c-1.3-.7-2.8-.5-4.1-1.1-.6-.2-1.3-.1-1.9-.3-1-.3-1.5-1-1.6-1.9-.1-1.4 0-2.9 0-4.3 0-.2.2-.5.3-.7l.6-1.5c.6-1.5 1.2-3.1 2-4.5.3-.6.7-1.2 1-1.8h11.9c.5 0 .7.3.6.8-.2.6-.2 1.2-.2 1.8V20.4c.4 1.7.7 3.6 1 5.5z" />

                                                <path class="st40"
                                                    d="M212.3 25.9l-.9-5.7v-.9-9.8c0-.6.1-1.2.2-1.8.1-.5-.1-.8-.6-.8h-12.5c-.8-.1-1.3.2-1.6.9-.5.9-1 1.9-1.5 2.8-.5-.3-.4-.8-.2-1.3.4-1.5.8-2.9 1.6-4.3.2-.3.1-.7.5-.9h1.8c.7 0 1.4.2 2.1-.3.2.2.4.3.7.3h9c.8 0 1.1-.2 1-1 0-1 .3-2 .5-3 .2-1.2.6-2.4 1-3.5.1-.2.1-.5.1-.8.5-.5.8-1.1.9-1.8.6-.5.7-1.1.6-1.8.3-.1.6-.1.6-.5 0-.3-.3-.4-.6-.4h-.3v-.6l.9-.3c.5.7.6 1.6.7 2.5-.5.8-.9 1.7-.9 2.7-.8.6-1 1.5-1.2 2.4-.5 1.6-.6 3.4-.9 5.1v.6c0 .4.2.6.5.6.4 0 .6-.1.6-.5 0-1.1.5-2.1.4-3.2 0-.3.1-.6.1-.9.3-1.3.6-2.7.8-4 .1-.1.1-.3.2-.4.3-.6.5-.6 1-.3.1.1.2.2.3.4-.8 1.7-1 3.6-1.2 5.6 0 .5 0 .9-.2 1.4-.3 1.4-.1 1.6 1.4 1.5.6-.1 1.1-.3 1.6-.3 1.6 0 3.2-.3 4.8-.6-.1.8-.7 1.1-1.2 1.5-.7 0-1.3 0-2 .1-1.4.2-2.8.3-4.2.5-.2 0-.5-.1-.6.3h5.8l-.9 1.2H217c-1.9 0-1.4-.1-2 1.8-.1.3 0 .7 0 1.1v10.7c-.2 1.1-.5 2.1-1.2 3V10.3c0-.7 0-1.4.2-2.1.1-.3.1-.7 0-1.1 0-.3-.2-.4-.5-.5-.3 0-.5 0-.6.3-.1.4-.3.8-.3 1.2 0 1.5-.1 2.9-.3 4.4-.3 2.5.4 5.1.3 7.6v.3c.2 1.4.4 2.8.5 4.2 0 .6 0 1.2-.8 1.3z" />
                                                <path class="st30"
                                                    d="M216.4-7.2c-.2-.8-.3-1.7-.7-2.5v-1.8c0-.1.1-.3.1-.4-.2-2.2.3-4.4.4-6.6 0-.1.1-.2.1-.3.7-.8.7-.9 1.7-.6.4.1.9.2 1.3.4.3.1.7.2 1 .2 1.9 0 3.5.7 4.7 2.1.5.5 1 .9 1.7 1-.3 1.3-.8 2.6-.5 4 0 .3 0 .7.2 1-.1.2 0 .3.1.5.1.3.1.6.2.9.3.7.2 1.3-.1 1.9-.6 1.4-1.2 2.8-1.8 4.1 0 .1-.1.2-.2.2-1.5-.8-3.2-1.3-4.7-2.1-.6-.3-1.2-.8-1.9-.9-.7-.3-1.2-.6-1.6-1.1z" />
                                                <path class="st45"
                                                    d="M180.5 6.9c.3-.1.5-.3.6-.6.1-.2.4-.3.6-.3 0 1.1.3 2.2.5 3.3.5 2.4 1.6 4.5 2.7 6.6.3.6.8.6 1.2 0 .2-.3.3-.6.5-.9.4-.5.3-1 0-1.5-1-1.3-1.6-2.8-2.1-4.4-.1-.2-.2-.5-.3-.7L183 4.2c.1-.6.4-1 .9-1.2.2.8.3 1.6.6 2.4.5 1.6 1 3.2 1.6 4.8.3.8.7 1.6 1.1 2.3.2.3.5.3.7 0 .5-.6.7-1.1.2-1.7l-.6-.9c-.4-.6-.7-1.2-.9-1.9-.7-2.2-1.2-4.4-1.2-6.7.5-.7 1.1-1.4 1.9-1.9 0 1.6 0 3.1.2 4.7.3 1.4.6 2.8 1.2 4.1.2.4.2.9.7.9.5.1.6-.5.7-.8.2-.3.3-.7.5-1.1 1.1-1.8 1.9-3.7 3.1-5.4.7-.9 1.3-1.8 1.9-2.7l.9.3c.1.6 0 1.2-.6 1.6-.1.1-.2.3-.3.5v.3c-.3.1-.4.4-.6.6-1 1.6-1.9 3.5-3 5.3-.4.6-.6 1.3-1 1.9-.1.3-.2.6-.2.9.1.3.2.5.5.6.3.1.5 0 .6-.3.4-.7.7-1.3 1.1-2 .4.4.3.8.1 1.2-.4.7-.5 1.4-.2 2.1.2.4.1 1 .1 1.5-.2 0-.4-.1-.6-.1-.8-.2-.9-.2-1.2.4-.3.4-.5.9-.7 1.3-.4.8-.3 1 .4 1.5.3.2.6.3 1 .5.3.2.6-.1.8-.2.6.7.9 1.5.3 2.3-.2.3-.2.5.1.8.1.1.2.2.2.4.1.4-.1.7-.5.8-.4 0-.8.1-1.2 0-.9-.2-1.8-.4-2.6-.6-.3-.1-.7-.2-1-.2-.3 0-.6-.1-.8-.3-.5-.4-1-.6-1.7-.4-.4.1-.8-.2-1-.6.1-.4 0-.8-.3-1.1-.4-.4-.8-.8-1-1.3-1-2.1-2-4.2-2.6-6.4-.2-.7-.3-1.5-.3-2.2-.1-.5 0-.9.2-1.3zm10.3 6.1c-.1-.3-.9-.7-1.1-.4-.5.5-.9 1.1-.9 1.8 0 .3.1.6.3.8.2.1.4.2.5 0 .5-.6.9-1.3 1.2-2V13zm-.3 6.2c.6 0 .9-.1.9-.4.1-.4-.1-.6-.4-.7-.4-.2-.7-.4-1.1-.5-.3-.1-.5 0-.6.2-.4.7-.3 1 .4 1.3.3 0 .7.1.8.1zm-1.7-2.3c0-.4-.3-.8-.7-.9-.4-.2-.5.2-.6.5-.2.3-.3.5-.5.8-.2.3 0 .6.2.8.3.2.8.3 1 .1.3-.4.5-.8.6-1.3zM200.7-25.9c0 .3 0 .7-.3.9-.6 0-1.1.1-1.7 0-1.6-.1-3.2.2-4.8.4-1 .1-1.9.4-2.8.5-.3.1-.6.2-.7.5-.4.7-.7 1.4-.9 2.1 0 .2.1.4.3.4.2 0 .4-.1.6-.1 1.5-.5 3.1-1 4.6-1.5 1.6-.5 3.3-.8 5.1-1 0 .6-.1 1.2-.6 1.6-.2.1-.5.2-.7.2-1.9.2-3.7.8-5.4 1.4-1.1.4-2.2.8-3.3 1-.8.2-1.1.6-1.2 1.4-.1.8-.2 1.6-.4 2.4-.4 1.9-.8 6.5-.8 8.2-.4 1-1 1.9-1.9 2.5v-2c-.1-2.2.3-4.3.3-6.5 0-.2.1-.4.1-.6.2-.8.3-1.7.5-2.5.2-1.1 0-1.2-1.2-.9 0-.5.3-.9.5-1.3.6-.9 1.2-1.9 1.8-2.8.3-.4.5-.9.7-1.4.2-.6.5-1.2.8-1.8.4-.9.8-1.7 1.1-2.7.1-.4.3-.8.5-1.1 1-2.1 2-4.1 2.9-6.2.4-.9.9-1.8 1.4-2.7.2-.4.5-.6.8-.9 1-.2 1.8-.9 2.8-.9-.2.4-.3.8-.5 1.1-1.5 2.6-2.9 5.2-4.4 7.8-.2.4-.8.8-.5 1.3.2.4.9.1 1.3.1h.5c2.5-.3 5-.6 7.6-.6 0 .6-.4 1-.6 1.6-.7 0-1.3-.1-2 0-1.9.4-3.8.1-5.6.5-.5.1-1.1.2-1.6.3-.6.1-.9.4-1.1.9-.1.4-.6.8-.3 1.2.2.3.8.1 1.2 0 2.2-.4 4.5-.8 6.8-.8.1.1.6.1 1.1 0zM214.1-62.8c0 .5.2 1.1-.3 1.5-.9 0-1.7-.1-2.6-.1h-.6c-.5.1-.8.4-.8 1 0 .3.2.5.8.5.9 0 1.7.1 2.6.1v.9c-.4-.1-.8-.1-1.2-.2-.7-.2-1.4-.1-2.1-.1-.5 0-.7.2-.8.7-.1.2 0 .4.2.5 1.2.4 2.4.3 3.6.3 0 .6-.3 1-.6 1.5-.5 0-1 .1-1.5-.1-.6-.2-1.3-.1-2-.1-.5 0-.8.2-1 .6-.3.8-.7 1.6-1 2.4-.9 2.1-2.2 4-3.3 6-.8 1.4-1.8 2.7-2.4 4.2l-1.5.3c-.4.1-.7-.1-.7-.6.2-.2.3-.4.3-.6 0-.5.2-.9.6-1.2.3-.1.3-.4.4-.6.3-.1.3-.4.3-.6.2 0 .3-.2.3-.3.2-.1.4-.3.5-.5.9-1.4 1.8-2.8 2.6-4.3.7-1.3 1.4-2.7 1.9-4.1.1-.4-.2-.5-.5-.6-.1-.6.3-1 .6-1.5.8.1 1.5-.1 1.7-1.1-.3-.3-.7-.1-1-.2 0-.3.2-.6.3-.8h1.1c.6-.1 1.1-.7 1-1.1-.1-.6-.6-.4-1-.4h-.5l.6-1.5c.4 0 .8 0 1-.5.2-.5.4-1 .5-1.4.8-2.5 1.5-5.1 2.5-7.5.2-.5.6-1 .6-1.6.7-.3 1.3-.6 2 0-.2.6-.3 1.2-.5 1.7-1.3 2.8-2 5.9-3 8.8-.1.2-.1.4 0 .7.8-.2 1.9-.1 2.9-.1z" />
                                                <path class="st43"
                                                    d="M226.1 4.5c.4.9 1.1 1.7 1.8 2.4.5.5 1 1 1.3 1.7.3.6.8 1 1.3 1.5s1 1 1.4 1.6c.6 1 1.4 1.9 2.4 2.5.2.1.3.2.5.4-.1.4-.4.2-.6.2-.3 0-.6 0-.9-.1-.9-.4-1.9 0-2.9-.3-.9-.4-1.8-.5-2.7-.4-.4 0-.7 0-1-.2-.7-.4-1.5-.4-2.2-.4-.8 0-1.5 0-2.2-.3-.6-.3-1.3-.3-1.9-.3.5-1.7 1.2-3.2 2.1-4.7.9-1.4 2.1-2.6 3.5-3.5-.1-.1 0 0 .1-.1z" />
                                                <path class="st10"
                                                    d="M223.7 3c-1.6.3-3.2.5-4.8.6-.6 0-1.1.2-1.6.3-1.4.1-1.7-.1-1.4-1.5.1-.5.1-.9.1-1.4.2-2 .4-3.9 1.2-5.8 1 0 2 .3 2.9.7 1.3.6 2.5 1.2 3.8 1.8.3.5.6 1.1 1.2 1.3.2.1.3.2.5.4.6.7 1.1 1.4 1.9 2 .2.1 0 .5-.1.5-1.4 0-2.6.7-3.7 1.1z" />
                                                <path class="st24"
                                                    d="M232.1-4.5l-1.2-.6c-.2-.1-.4-.2-.4-.5.1-.7.8-1.2.9-1.9-.3-.4-.5-.7-1-.9-.6.4-1.1.8-1.6 1.4-.6-.6-1.2-1.1-1.2-2 .4-.2.9-.5 1.3-.7.7-.4.7-.4.5-1.2-.1-.4-.3-.6-.8-.6-.6 0-1.1 0-1.7-.1h-.2c0-.5 0-1.1.1-1.6 0-.3 0-.7.2-1v.3c0 .3-.2.6.1.8.2.2.5.3.8.3.7.1 1.2-.3 1.4-1 0-.1.1-.3.2-.4.2-.4 0-.7-.3-1.1-.4-.5-1-.5-1.5-.7-.1-.5.2-.8.5-1.1.5.9 1.2 1.3 2.2 1.3v.2c-.2.4-.4.8-.5 1.2-1.5 3.8 1.4 7.7 5.1 7.8 4.2.1 7.2-4.2 5.3-8.2-.2-.4-.4-1-.9-1.1-.5-.1-.6.5-1 .6-.1 0-.2.2-.3.3.3-.3.6-.7 1-.9.2-.1.2-.4 0-.5-.6-.7-1.4-1.1-2.3-1.4-.9-.3-1.8-.2-2.7-.3h-.4c.3-.3.6-.6.7-1 .1-.5.1-.9-.2-1.3-.3-.4-.6-.1-1-.2h-.1c.2-.2.5-.3.8-.3h1.7c.5.2 1-.1 1.4.3-.9.1-.9.1-.9.8v.8c0 .6.1.7.6.9 1.3.5 1.3.5 2-.7.2-.3.3-.6.3-1 .3 0 .6.2.8.5-.5.1-.6.5-.8.8-.5 1-.7 1 .2 1.7.3.2.5.5.7.7.1.1.3.3.5.2.6-.3 1.3-.5 1.7-1.2.3.3.5.6.5 1-.2.1-.5.2-.7.3-1.2.7-1.2.7-.9 2.1v.1c.2.6.2.6.8.6.5 0 1 0 1.5.1.1.4.1.8.1 1.2h-1.8c-.3 0-.5.1-.5.4-.1.3-.2.7-.2 1-.1.2 0 .4.2.5.6.3 1.1.6 1.7.9-.3.5-.6 1.1-.9 1.6-.3-.8-1-1.1-1.5-1.6-.1 0-.2 0-.2.1-.3.3-.6.6-1 .9-.9.6-.6.8-.1 1.4.3.3.5.6.8.9-.2.4-.7.4-1 .7-.1-.2-.1-.5-.2-.7-.2-.4-.3-.9-.6-1.2-.4-.4-.8.2-1.3.2-.4 0-.8.1-1.1.5.1.7.2 1.4.5 2-.6.2-1.1.3-1.6-.1v-1.7c0-.4-.2-.7-.6-.7-.3-.1-.7-.1-1-.2-.6.8-.9 1.5-.9 2.3z" />
                                                <path class="st45"
                                                    d="M216-77.6c-.6.4-1.3.3-2 .3 0-.3 0-.6.1-.9.7-1.6 1.3-3.3 2.1-4.9.9-1.7 1.8-3.3 3-4.8.3-.4.6-.9.9-1.4.7-1.5 1.6-2.8 2.6-4.1.1-.1.1-.3 0-.4 0-.6.4-.9.8-1.2 1.5-1.2 2.8-2.5 4.4-3.5.4-.3.9-.5 1.3-.7.2-.1.4 0 .5.2-1.3 1.1-2.5 2.2-3.2 3.9-.3.8-1 1.4-1.6 2-.5.6-1 1.2-1.3 2-.1.1-.2.3-.3.4-.2.1-.3.4-.3.6-.3.1-.3.4-.3.6-.2 0-.3.2-.3.3-.2.1-.3.4-.3.6-.2.1-.3.4-.3.6-1.6 2-3 4.1-4.1 6.4-.6 1.3-1.3 2.6-1.7 4z" />
                                                <path class="st41"
                                                    d="M215.1-7.8c0 .7 0 1.4-.6 1.8-2.3.4-4.4 1-6.5 2-.1.1-.3.1-.4.1-1.5.4-2.7 1.3-3.8 2.4-1.8 1.6-3.2 3.5-4.5 5.6h-1.8c.3-1.5 1.1-2.9 1.8-4.3v-.3c.5-.2.8-.7 1.1-1 1.4-1.2 2.8-2.3 4.5-3.1 1.8-.8 3.6-1.6 5.5-2.3 1.4-.4 3-.8 4.7-.9zM185.4-17.6c1.2-.3 1.4-.2 1.2.9-.1.8-.3 1.7-.5 2.5 0 .2-.1.4-.1.6-.1 2.2-.4 4.3-.3 6.5v2c-.7 1.2-1.5 2.5-2.7 3.3v-5.5c0-.6.1-1.2-.1-1.8-.1-.2 0-.4 0-.6.4-1.8.7-3.6 1.2-5.3.1-.9.3-1.9 1.3-2.6z" />
                                                <path class="st46"
                                                    d="M215.1 20.1V9.4c0-.4-.1-.7 0-1.1.5-1.9.1-1.7 2-1.8h3.5c-1.2 2.8-2.7 5.5-3.6 8.4-.3 1.1-.7 2.2-1 3.4-.2.7-.4 1.3-.9 1.8z" />
                                                <path class="st10"
                                                    d="M197.6-3.4c-1.3-1.1-1.4-2.5-1.2-4 .2-1.7.3-1.8 1.9-2.5 1.6-.7 3.1-1.5 4.8-1.9.6-.1 1.2-.2 1.8-.2-.1.2-.2.4-.4.5-2.6 1.5-4.3 3.9-5.7 6.5-.2.5-.5 1.2-1.2 1.6z" />
                                                <path class="st45"
                                                    d="M215.6-11.5v1.8l-.9.3c-.3-.1-.5-.2-.9-.2-1.1.2-2.3.4-3.5.5-1.5.1-2.9.6-4.1 1.4-1.7 1-3.3 2.1-5 3.2-.2-.2-.3-.4-.1-.6.5-.9 1.1-1.8 1.9-2.4.1-.1.2-.3.3-.4.2 0 .3-.1.3-.3.3 0 .5 0 .6-.3.3 0 .5-.1.7-.3 1.3-.9 2.7-1.5 4.2-1.7 1.4-.3 2.8-.5 4.2-.5.4 0 .7.1 1-.3.6.2 1 .1 1.3-.2z" />
                                                <path class="st46"
                                                    d="M213.2 24.7c-.2-1.4-.4-2.8-.5-4.2 0-.1-.1-.2 0-.3.1-2.5-.6-5.1-.3-7.6.2-1.5.3-2.9.3-4.4 0-.4.2-.8.3-1.2.1-.3.4-.3.6-.3.3 0 .5.2.5.5 0 .4.1.7 0 1.1-.3.7-.2 1.4-.2 2.1v12.9c0 .4-.2 1-.7 1.4z" />
                                                <path class="st41"
                                                    d="M201.3-4.4c1.7-1.1 3.3-2.2 5-3.2 1.3-.8 2.6-1.3 4.1-1.4 1.2-.1 2.3-.3 3.5-.5.3-.1.6.1.9.2v.6c-2.1.6-4.3.9-6.2 1.8-.8.4-1.6.7-2.4 1-1.9.8-3.8 1.6-5.4 3-.2.2-.4.3-.7.3 0-.4.2-.7.4-.9.3-.3.5-.6.8-.9z" />
                                                <path class="st10"
                                                    d="M207.1-13.3h-1.7c-1.6-.1-3 .3-4.4.9-.9.4-1.9.8-2.8 1.2-.1 0-.3-.1-.4-.1-.1 0-.1-.2 0-.3.2-.4.3-.7.5-1.1.1-.3.4-.4.7-.6 1.7-.6 3.5-1.1 5.3-1.5.4-.1.8 0 1.2-.1h3.7c.8 0 1.5 0 2.3-.3 0 .5-.2.8-.6.8-1.4.3-2.6.8-3.8 1.1z" />
                                                <path class="st41"
                                                    d="M222.7-93.8c.2.1.2.3 0 .4-1 1.3-1.9 2.6-2.6 4.1-.2.5-.5 1-.9 1.4a38.8 38.8 0 0 0-3 4.8c-.8 1.6-1.4 3.2-2.1 4.9-.1.3-.1.6-.1.9h-1.2c.1-1 .6-1.9 1-2.8.4-1 .9-2 1.4-3 .8-1.9 1.8-3.6 3.1-5.2.6-.8 1.1-1.6 1.6-2.4.6-.8 1.2-1.7 1.7-2.5.4-.3.7-.6 1.1-.6zM215.6-11.5c-.3.2-.7.4-1.2.3 0-1.2-.2-2.2-1-3.1-.2-.2-.2-.5-.2-.8.3 0 .6.1.9.1.4.1.6-.1.6-.6-.1-.7-.6-.8-1.2-.8-.1-1.1.3-2.1.5-3.1.1-.4-.1-1 .3-1.3.4-.3.9.2 1.3.2h.6c0 .6-.1 1.2-.1 1.9 0 .1-.1.2-.1.3-.1 2.2-.6 4.4-.4 6.6.1 0 0 .2 0 .3z" />
                                                <path class="st45"
                                                    d="M200.1-2.6c.3 0 .5-.1.7-.3 1.6-1.4 3.5-2.2 5.4-3 .8-.3 1.6-.6 2.4-1 2-1 4.1-1.2 6.2-1.8h.3c.3 0 .5.1.6.4.1.4-.2.5-.6.5-1.6.1-3.2.5-4.7 1-1.9.7-3.7 1.5-5.5 2.3-1.7.7-3.2 1.8-4.5 3.1-.4.3-.7.8-1.1 1-.1-.5.1-.9.5-1.3.2-.2.3-.4.4-.6-.1-.1-.1-.2-.1-.3z" />
                                                <path class="st10"
                                                    d="M180.5 10.3c.6 2.2 1.6 4.3 2.6 6.4.2.5.6.9 1 1.3.3.3.5.7.3 1.1-1.3.3-2-.4-2.6-1.3-.4-.5-.7-1.1-1-1.7-.4-.7-.7-1.5-.6-2.3.1-.9 0-1.8 0-2.8 0-.3 0-.5.3-.7z" />
                                                <path class="st42"
                                                    d="M223.9-2.2c-1.3-.6-2.5-1.2-3.8-1.8-.9-.4-1.9-.7-2.9-.7-.1-.1-.2-.3-.3-.4-.5-.4-.7-.3-1 .3-.1.1-.1.3-.2.4-.1 0-.2 0-.3-.1.1-1 .4-1.9.9-2.7.5.5 1 .8 1.7 1 .7.2 1.3.6 1.9.9 1.5.8 3.1 1.4 4.7 2.1-.1.5-.3.8-.7 1z" />
                                                <path class="st10"
                                                    d="M213.5-10.9c-1.4 0-2.8.3-4.2.5-1.5.3-2.9.9-4.2 1.7-.2.1-.4.3-.7.3-.1-.4.2-.7.4-.9 1.9-1.4 3.9-2.5 6.2-3 .2 0 .4-.1.6-.1 1 0 1.5.3 1.9 1.5z" />

                                                <path class="st45"
                                                    d="M195.5 10.6c.5-.9 1-1.9 1.5-2.8.3-.6.8-1 1.6-.9h.6c-.3.6-.7 1.2-1 1.8-.8 1.4-1.4 3-2 4.5l-.6 1.5c-.2-.1-.3-.3-.3-.5-.1-1.1-.3-2.4.2-3.6z" />
                                                <path class="st10"
                                                    d="M236.8-99.9c.1-.5.7-.7.7-1.2 1.4-.6 1.4-.6 2-1.9.1-.2.1-.4.2-.6.9-.2 1.6-.8 2.6-.8-.8 1.6-1.5 3.3-2.6 4.8-1-.1-2-.2-2.9-.3z" />
                                                <path class="st41"
                                                    d="M193.1 8.8c-.4.7-.7 1.4-1.1 2-.1.2-.4.4-.6.3-.2-.1-.4-.3-.5-.6-.1-.3 0-.6.2-.9.3-.6.6-1.3 1-1.9 1-1.8 1.9-3.7 3.1-5.4.2-.2.3-.5.6-.6 0 .4 0 .7-.2 1-.8 1.6-1.5 3.3-2.1 5.1-.1.3-.3.6-.4 1z" />
                                                <path class="st12"
                                                    d="M234.4 7.2v.3c-.3 0-.6 0-.9-.1-.8-.2-1.5-.3-2.2 0-.4.2-.8.1-1.1-.2-.4-.4-.8-.7-1-1.1-.4-1.1-1.2-1.6-2.2-1.9.6-.5 1.4-.2 2-.6.2-.1.4 0 .5.2.4.4.8.9 1.3 1.3.8.7 1.6 1.4 2.7 1.6.3.1.6.3.9.5z" />
                                                <path class="st40"
                                                    d="M238.8-4.8c.3-.2.8-.3 1-.7.9-.4 1.4-1.1 2.1-1.8.3-.5.6-1.1.9-1.6.4-.9.8-1.9.7-2.9.1-.4.1-.8-.1-1.2 0-.3.1-.6.1-.9.2-.2.2-.4.3-.6 1.2 3.9-.8 8.2-4.4 10.1-.4.2-.7.4-1.1.6-.3 0-.5.1-.7.1-.1-.2-.4-.2-.6-.3.7-.3 1.2-.6 1.8-.8z" />
                                                <path class="st10"
                                                    d="M200.4-42.1h5.9c.4 0 .7 0 1.1.1.1 0 .2.1.2.2.2.4-.4 1.2-.8 1.2h-.2c-2.3-.5-4.5-.1-6.8-.2.2-.4.4-.8.6-1.3z" />
                                                <path class="st41"
                                                    d="M205.3-56.5c.3.1.6.1.5.6-.5 1.5-1.2 2.8-1.9 4.1-.8 1.5-1.7 2.9-2.6 4.3-.1.2-.3.4-.5.5-.1-.5.1-.9.3-1.3.8-1.6 1.7-3.2 2.5-4.7.2-.5.4-1 .6-1.6.2-.6.4-1.4 1.1-1.9zM212.6-74.2c0 .6-.4 1.1-.6 1.6-1 2.4-1.7 5-2.5 7.5-.2.5-.3 1-.5 1.4-.2.5-.6.5-1 .5.2-1.1.6-2 1.1-3 1-2 1.4-4.1 2-6.2.2-.6.3-1.3.6-1.9.3.1.6.1.9.1zM192.7 17c-.3.1-.5.4-.8.2-.3-.2-.6-.3-1-.5-.8-.4-.8-.6-.4-1.5.2-.5.5-.9.7-1.3.4-.6.5-.6 1.2-.4.2 0 .4.1.6.1v1.9c.1.6 0 1.1-.3 1.5z" />
                                                <path class="st16"
                                                    d="M238.8-4.8c-.6.2-1.1.5-1.7.7-.4 0-.7 0-1.1.1-.3-.7-.4-1.4-.5-2 .3-.4.8-.4 1.1-.5.4-.1.9-.6 1.3-.2.3.3.4.8.6 1.2.2.2.2.4.3.7zM226.8-11.8c.6 0 1.1.1 1.7.1.4 0 .6.1.8.6.2.8.2.8-.5 1.2-.4.3-.9.5-1.3.7-.5-.8-.8-1.6-.7-2.6zM232.1-4.5c0-.8.3-1.5.7-2.2.4.1.7.1 1 .2.4.1.6.3.6.7v1.7c-.8.1-1.6-.2-2.3-.4zM228.7-7.2c.5-.5 1-1 1.6-1.4.5.2.8.6 1 .9-.1.7-.7 1.2-.9 1.9-.8-.1-1.3-.7-1.7-1.4z" />
                                                <path class="st46"
                                                    d="M221.5 5.4h-5.8c.1-.4.4-.3.6-.3 1.4-.2 2.8-.4 4.2-.5.6-.1 1.3-.1 2-.1-.3.4-.6.7-1 .9z" />
                                                <path class="st40"
                                                    d="M226.9-14.4c-.3.3-.2.6-.2 1 0 .5 0 1.1-.1 1.6h-.5c-.3-1.4.1-2.7.5-4h.1c.1-.1.1-.2.2-.3.1 0 .3.1.4.1 0 .6-.2 1.1-.4 1.6z" />
                                                <path class="st41"
                                                    d="M207.4-61.7h.5c.4 0 .9-.1 1 .4.1.5-.4 1.1-1 1.1h-1.1c0-.5.4-.9.6-1.5zM206.5-59.3c.3.1.7-.1 1 .2-.1 1-.8 1.2-1.7 1.1.1-.5.3-.9.7-1.3zM200.1-46c0 .3-.1.5-.4.6.1-.3.1-.5.4-.6zM200.4-46.7c0 .3-.1.5-.3.6 0-.2 0-.4.3-.6z" />
                                                <path class="st40" d="M226.4-10.3c-.1-.1-.2-.3-.1-.5.1.2.1.4.1.5z" />
                                                <path class="st10" d="M204.4-8.4c-.1.3-.3.4-.6.3.1-.3.3-.3.6-.3z" />
                                                <path class="st41"
                                                    d="M200.7-47c-.1.2-.1.3-.3.3.1 0 .2-.2.3-.3zM195.8 1.7v-.3c.1 0 .2.1.1.2 0 .1-.1.1-.1.1z" />
                                                <path class="st45" d="M199.2-.4v.3c-.2-.1-.2-.2-.2-.3h.2z" />
                                                <path class="st10"
                                                    d="M203.5-7.8c-.1.1-.2.3-.3.4 0-.2.1-.3.3-.4zM203.8-8.1c0 .2-.1.3-.3.3 0-.1.1-.2.3-.3z" />
                                                <path class="st41" d="M200.1-2.6v.3c-.2-.1-.3-.2 0-.3z" />
                                                <path class="st42"
                                                    d="M302-189.9c.4-.1.9-.3 1.3-.3 1.5-.1 2.9-.2 4.2.9 1.2 1 2.7 1.8 3.8 3.1.5.6 1 1.3 1.4 2 .1.2.2.5-.1.7-.2.2-.4.2-.6.1-.2-.1-.4-.2-.6-.2-1.3.1-2.3-.5-3.4-1.1-.8-.4-1.7-.3-2.5-.2-.4 0-.7.1-1 .2-1.1.3-2.2.4-3.3.4-1 0-2.1-.2-3.2.2-1.3-.1-2.6.5-3.9.6-.6 0-1.2.1-1.8-.2-.1-.7-.2-1.3-.3-2-.2-1.2.2-1.9 1.5-2.2 1.6-.4 3.3-.8 4.9-1 1.3-.3 2.5-.5 3.6-1zM267.1-184.1c.4-.5.9-1 1.2-1.5.2-.3.5-.7.6-1.1.1-1 .8-1.3 1.5-1.5.9-.2 1.8-.3 2.7-.1 1 .2 1.9.2 2.9.2 1.5-.1 2.9-.2 4.4-.6 1.1-.3 1.4-.2 1.9.9.1.1.1.3.1.4 0 .2.1.3.1.5.2.4.3.8.2 1.3-.4.2-.4.8-.9.9-.6.2-1.2.5-1.9.6-.5 0-1 .1-1.4-.3-.5-.5-1.3-.6-2-.6-1.3-.1-2.5.2-3.7.8-1.4.7-2.8 1.4-4.2 2-.6 0-1.1-.2-1.3-.8-.1-.4-.2-.7-.2-1.1z" />
                                                <path class="st30"
                                                    d="M260.1-178c1 .9 1.2 2.2 1.5 3.4.1.5.2.9.6 1.1.3.1.3.4.3.6V-165c.1.3.3.5.6.6.3 0 .6-.2.6-.6v-1.2c0-.2 0-.4.1-.6.3.4.5.9.3 1.4-.1.2-.1.4 0 .6.2.6 0 1.2 0 1.8 0 1.5-.2 2.9-.1 4.4v1.4c-.3-.5-.2-1.1-.3-1.6-.1-.4-.1-.8-.2-1.2-.1-.3-.3-.4-.6-.3-.3 0-.5.2-.5.5-.1.4 0 .9-.1 1.3h-1.6l-.3-.3c-.3-.2-.4-.5-.5-.9-.2-.8-.3-1.5-.2-2.3v-7.8c0-.4 0-.8-.1-1.2-.2-.8-.2-1.5-.2-2.3 0-.9 0-1.8-.3-2.7-.1-.7 0-1.5 1-2z" />
                                                <path class="st12"
                                                    d="M268.6-182.3c1.4-.7 2.8-1.3 4.2-2 1.2-.6 2.4-.9 3.7-.8.7 0 1.4.1 2 .6.4.4.9.4 1.4.3.7-.1 1.2-.4 1.9-.6.1.5.2 1.1.2 1.6.2 1.9.5 3.8.2 5.7-.6 0-1.3 0-1.9.1.3-.5.3-1-.1-1.6.1-.3.5-.3.6-.7-.1-.3-.3-.5-.4-.8-1.1-1.8-1.1-1.9-3.1-2.2-1.2-.2-2.5-.4-3.8-.1-1.2.3-2.3.8-3.4 1.3-.1-.4-.2-.6-.6-.6-.3 0-.7-.1-1-.1.1.1.1 0 .1-.1zM291-159.4c-.3.2-.4.5-.3.8.2.6.6 1.1 1.1 1.4.3.2.2.4-.1.6-.7.3-1.4.3-2.1.5-1.8.4-3.6.7-5.4.8-1.4.1-2.7-.5-3.9-1-.7-.3-1-1.1-.9-1.9 0-.1 0-.2.1-.3.5.2 1.1.5 1.6.7.3.1.6.1.9.2.1 0 .3-.1.3-.2.1-.1 0-.3-.1-.4-.5-.3-1.1-.7-1.7-1 .1-.1.2-.2.2-.3.9-.1 1.6.1 2.2.8.3.3.6.5.9.8 1 1 2.3.9 3.4 0 .3-.3.5-.6.9-.8.9-.8 1.8-1.5 2.9-.7z" />
                                                <path class="st20"
                                                    d="M280.3-178.9c.3.5.4 1 .1 1.6-1.5 1-3 1.6-4.8 1.6-1.6 0-3.1-.3-4.7-.7l-2.1-.6c-.4-.1-.7-.4-1-.7-.2-.2-.2-.4-.1-.7.6-.8 1.2-1.8 2.1-2.4.1.1.3.2.4.4-.2.2-.4.4-.7.6-.1.1-.2.2-.2.4.1.2.3.1.4 0 .5-.3.9-.7 1.3-1 1.6-1 3.2-1.7 5.1-1.2-.4.4-.8.3-1.3.3s-.9 0-1.3.3c-.2.1-.4.3-.4.6-.1 1.2-.1 2.3.8 3.3.3.3.6.5 1 .5 1.2.1 2.3-.1 3.4-.6.5.1 1-.1 1.2-.6.2-.5-.4-.7-.7-1.1-.1-.1-.3-.2-.5-.3-.1-.6-.4-1-.9-1.3-.3-.2-.6-.4-.6-.8 1.2.1 2.1.7 2.7 1.7.3.2.5.5.8.7zm-7.4 1.8c-.6-1-.5-1.8-.6-2.7-1.3.5-1.8.9-2.3 1.8.7.6 1.7.8 2.9.9z" />
                                                <path class="st12"
                                                    d="M285.3-137.6c1.2-.1 2.3.4 3.4.3.2 0 .4.2.2.5-.4.6-.8 1.3-.8 2.1 0 .3-.3.4-.5.4h-1.2c-.9 0-1.7 0-2.5.4-.7.4-1.3-.1-1.7-.5-.5-.4-.5-1-.2-1.5.4-.7.7-1.4 1.7-1.5.6 0 1.1-.2 1.6-.2zm.3.6c-.5 0-1 0-1.4.2-.4.2-.7.5-.5.8.2.3.5.3.8.3.9-.1 1.8-.1 2.5.8.2.2.5.2.7.1.2-.2.3-.4.2-.7-.6-1.1-1.2-1.5-2.3-1.5z" />
                                                <path class="st42"
                                                    d="M291-159.4c-1.1-.8-2-.1-2.8.5-.3.2-.6.6-.9.8-1.1.9-2.4 1-3.4 0-.3-.3-.7-.5-.9-.8-.6-.7-1.3-.9-2.2-.8 0-.3.1-.6.4-.6.8-.2 1.4.3 2.1.6.2.2.3.4.5.5.9.6 1.8.8 2.8.2.5-.3 1-.5 1.3-1 .1 0 .2-.1.3-.1 1.4-1.3 3.6-.6 4.8.6.2.2.2.4.1.5-.1.2-.3.2-.5.2-.6-.2-1.1-.4-1.6-.6z" />
                                                <path class="st20"
                                                    d="M280.6-159.3c.6.3 1.1.7 1.7 1 .1.1.2.2.1.4-.1.1-.2.2-.3.2-.3 0-.6 0-.9-.2-.6-.2-1.1-.5-1.6-.7-1.3-.8-1.5-2-1.2-3.5.2-1 .6-2 1.1-3 .1-.2.2-.3.3-.5.2-.2.4-.3.7-.1.3.1.4.4.3.6-.1.4-.3.7-.5 1.1-.4.9-.7 1.8-.8 2.8-.1 1 .1 1.6 1.1 1.9zM282.2-177.4c.3-1.9 0-3.8-.2-5.7-.1-.5-.1-1.1-.2-1.6.5-.1.5-.7.9-.9.4.8.3 1.8.5 2.7.2 1.3.4 2.7.4 4.1 0 .4-.1.8-.2 1.2 0 .3-.2.5-.5.5s-.5-.2-.7-.3z" />
                                                <path class="st38"
                                                    d="M270.3-180.4c-.1-.1-.3-.2-.4-.4.1-.2.2-.4.3-.5 1.1-.5 2.2-1 3.4-1.3 1.3-.3 2.5-.1 3.8.1 2 .3 2 .3 3.1 2.2.2.3.3.5.4.8-.3.1-.5 0-.6-.2-1.2-1.7-1.2-1.7-3.2-2.2h-.1c-1.1-.4-2.2-.3-3.3 0-1.4.2-2.4.9-3.4 1.5z" />
                                                <path class="st42"
                                                    d="M309.1-156.4v.5c-.1.3-.2.6-.6.6-.4 0-.5-.2-.6-.5-.1-.3-.1-.6-.2-.9-.1-.3-.3-.6-.7-.8-.2-.1-.3-.3-.2-.5.1-.3.3-.4.5-.5 1-.2 1.6.3 1.7 1.3.1.1.1.3.1.8z" />
                                                <path class="st20"
                                                    d="M297.1-160.2c0 1.4-1 2.7-2.3 3h-.3c-.1 0-.2-.1-.2-.2-.1-.1 0-.3.1-.4.3-.2.6-.3.8-.4.6-.4 1.1-1 1.1-1.7 0-.2 0-.4.1-.6 0-.1.2-.2.4-.2.1 0 .2.1.2.2s.1.3.1.3z" />
                                                <path class="st12"
                                                    d="M288-159.9c-.3.5-.8.7-1.3 1-1 .6-1.9.5-2.8-.2-.2-.1-.4-.3-.5-.5.5-.3.9-.3 1.5-.3h3.1z" />
                                                <path class="st20"
                                                    d="M269.7-153.7c-.3 0-.6-.3-.6-.5 0-.9.4-1.7 1.1-2.2.2-.2.5-.2.7 0 .2.2.3.5.1.7-.4.5-.7 1.1-.9 1.8 0 .1-.2.1-.4.2zM268.6-182.3c0 .1-.1.2-.1.2l-.9.3c-.4.1-.8.2-1.1-.2-.4-.5-.4-1.1-.1-1.6.2-.3.4-.5.7-.6 0 .4.1.7.2 1 .3.7.7 1 1.3.9z" />

                                                <path class="st30" d="M263.9-171.9c-.1-.2-.2-.4.1-.6.1.3.1.5-.1.6z" />
                                                <path class="st20" d="M282.5-186.9c0-.2-.1-.3-.1-.5.1.1.2.3.1.5z" />
                                                <path class="st38"
                                                    d="M260.3-184.6c.1.3-.1.5-.3.5h-1.1c.2-.2.5-.3.8-.3.1-.1.4-.2.6-.2z" />
                                                <path class="st42"
                                                    d="M299.2-180.1c.7-1.1 1.7-1.6 2.9-1.7 1-.1 2-.1 3 0 .5 0 1.1.1 1.5.3 1.2.8 2.2 1.7 2.7 3.2.2.5.1.7-.5 1-1.4.6-2.9 1.3-4.3 1.8-.6.2-1.4.2-2.1.3-.3-.3-.7-.2-1.1-.3l-.3-.9v-.1c.2.1.4.2.6-.1.2-.2 0-.3-.1-.5-.2-.2-.5-.5-.5-.8v-1.1c0-1.3 0-1.3-1.3-1.1h-.5zm7.2-.9c0 .2-.1.3-.1.4.3 1 .5 2 .1 3-.1.1.1.3.2.3.7-.1 1.5-.3 2.1-.9-.5-1.2-1-2.3-2.3-2.8zm-2.7 2.5c.3 0 .7-.4.6-.9 0-.4-.4-.8-.8-.7-.4 0-.7.5-.7.9.2.3.6.7.9.7z" />
                                                <path class="st20"
                                                    d="M296.7-178.6c-.2.1-.3.3-.5.3-.1 0-.3 0-.4-.1-.1-.1-.1-.3 0-.4.1-.3.4-.5.5-.7.4-.6 1-1.1 1.3-1.7.4-.8 1-1.1 1.8-1.3 1.7-.4 3.5-.6 5.3-.4h1.5c1.4.1 2.7.5 3.7 1.6l1.5 1.5c.2.2.3.5.5.8 0 .1 0 .2-.1.3-.1.1-.3.1-.4.1l-.3-.3-1.4-1.4c-1.1-1.2-2.5-1.8-4.2-1.8-1.6 0-3.2-.2-4.7.2h-.2c-1.4.2-2.4.8-2.9 2.1-.5.2-.9.6-1 1.2z" />
                                                <path class="st42"
                                                    d="M330.5-171.2c.1 1.9-.9 3.2-2 4.4-.3.3-.8.3-1.1 0-.3-.3-.3-.7-.1-1.1.3-.5.7-.9 1-1.3.8-1.1.8-2.3.2-3.5-.1-.2-.3-.4-.3-.7-.2-.4 0-.8.4-1 .3-.2.7-.1 1 .2.6.7.9 1.6 1 2.5-.1.2-.1.4-.1.5z" />
                                                <path class="st20"
                                                    d="M325.5-175.8c0-.2.1-.5.2-.9.5-1.8 1.5-3.3 2.7-4.8.2-.2.4-.4.7-.6.3-.2.6-.1.8.1.3.2.3.5.2.8-.1.3-.3.5-.5.8-1.2 1.5-2.2 3-2.6 5-.1.5-.5.7-.9.6-.3 0-.5-.3-.6-1z" />
                                                <path class="st31"
                                                    d="M301.1-178c0 .4.2.6.5.8.1.1.3.3.1.5-.2-.1-.4-.1-.6.1v.1c-1-.1-2 0-3 0-.1-.2-.1-.4-.2-.7.5-1.1 1.5-1.7 2.2-2.6.2-.2.5-.1.5.2.2.6 0 1.2.5 1.6z" />
                                                <path class="st20"
                                                    d="M301.1-178c-.5-.4-.3-1-.4-1.5-.1-.3-.3-.4-.5-.2-.7.9-1.8 1.5-2.2 2.6l-.6.6c-.2.1-.4.1-.5 0-.2-.1-.2-.4-.2-.5l.6-1.2c.6-.5 1.1-1 1.5-1.6l.6-.3h.6c1.2-.2 1.2-.2 1.3 1.1-.2.3-.2.7-.2 1zM298.1-176.5c1 0 2-.1 3 0l.3.9c-.7 0-1.5.1-2.2.1-.6 0-1.1-.2-1.1-1z" />
                                                <path class="st9"
                                                    d="M299.2-175.5c.7 0 1.5-.1 2.2-.1.3.2.8 0 1.1.3h-.1c-1.5.9-1.8.9-3.2-.2zM298.6-179.8c-.4.7-.9 1.2-1.5 1.6-.1-.2-.3-.4-.5-.5.1-.6.5-.9 1-1.2.4.1.7.1 1 .1z" />
                                                <path class="st38" d="M329-183.9c.3-.3.6-.3.9 0-.3.1-.6.1-.9 0z" />
                                                <path class="st43"
                                                    d="M309.1-126c0 .6.3 4.1 0 4.6-.5.9-2.3 3.9-2.8 4.9-.4.9 2.9 2.4 2.1 3.1-.2.2-7.6 2.2-7.7 2.5-.1.1 3.3 3 3.4 3 .3.8-6.8-.8-6.8 0-.7 0 3.7-.8 3.1-1.2-.2-.1-3.1-2.3-2.8-2.2 15.4 5 .2 3.9.3 4 .2.2 2.5.5 2.7.6.5.2 2.2.6 1.6-.5-.1.9-4 .3-4.2 1.2-.5 2.2 2 3.8 1.6 6-3.9 3.3-4.5 3.8-6.7 4.7-3.2 1.2-6.6 1-8.1.9-.4 0-1.3.1-2.1-.3-2.7-.1-5.2-.9-7.6-2.1l.9-5.4c.3-1.6.4-3.2.7-4.8.3-1.9.7-3.9 1.1-5.8.6-2.7 1.2-5.3 2-8 .4-1.5.5-1.4 1.9-1.6 2.7.1 5.3 0 8 0 .4.1 11.4-2.6 11.8-2.9.2 0 7.4-.7 7.6-.7z" />
                                                <path class="st30"
                                                    d="M281.8-122.3c-1.5.1-1.5.1-1.9 1.6-.8 2.6-1.4 5.3-2 8-.4 1.9-.8 3.9-1.1 5.8-.3 1.6-.5 3.2-.7 4.8l-.9 5.4c-1.8-.8-2.9-2.2-3.3-3.9-.1-.2-.1-.5-.2-.7-.3-.4-.2-.9-.1-1.3s.2-.9.4-1.3c.2-.5.3-1 .2-1.5-.1-.8.1-1.5.3-2.2.7-2.1 1.5-4.1 2.5-6.1.5.9.2 1.8.1 2.7-.1 1.1-.4 2.1-1 3-.5.8-.9 1.7-1.3 2.6-.2.5-.1.7.4 1 .3.2.5.1.6-.1.7-1.8 1.9-3.4 2.3-5.3 0-.2.1-.4.3-.5.7-.4.6-1 .6-1.6-.1-2.9-.3-5.7-.4-8.5 0-.6-.1-1.1-.1-1.7.3.1.6.1.8.2.4.2.7.1 1-.2l.5-.5c.5.2 1 .3 1.5.3.5-.3 1-.3 1.5 0z" />
                                                <path class="st8"
                                                    d="M260.1-178c-.9.4-1.1 1.2-.8 2.1.3.9.2 1.8.3 2.7 0 .8 0 1.5.2 2.3.1.4.1.8.1 1.2v7.8c-.3-.4-.3-1-.3-1.5-.1-3.6-.6-7.1-1.1-10.6-.4-2.4-.4-4.8.1-7.1 0-.2.1-.4.1-.6.2-.6.6-1 1.2-1s1.1.1 1.5.7l.1.1c.6 1.4 1 2.7 1 4.3-.3-.4-.6-.9-1-1.3l-.9-1.2c-.2-.2-.3-.5-.5-.7-.2-.2-.5-.3-.8-.1-.3.2-.5.6-.4.9.2.4.4.7.6 1.1.1.1.5.5.6.9z" />
                                                <path class="st10"
                                                    d="M274.8-115.6c-.7-.5-1.1-1.3-1.7-1.9-.1-.1-.1-.3 0-.4.1-.2.3-.4.5-.6.8-.6 1-1.3 1-2.3h.6c.3 0 .5.2.5.4.1 1.4.2 2.7-.3 4.1-.1.4-.4.5-.6.7z" />
                                                <path class="st31"
                                                    d="M278.8-122.8l-.5.5c-.3.3-.6.4-1 .2-.2-.1-.6-.2-.8-.2-.1-.3-.1-.6-.2-.9.1-.1 0-.2 0-.3v-.4c.8 0 1.3.5 2.1.7.1.1.2.3.4.4z" />
                                                <path class="st30"
                                                    d="M278.3-123.2c-.7-.2-1.3-.7-2.1-.7-.1-.4-.2-.9.1-1.4.5.2.8.7 1.1 1 .3.4.6.7.9 1.1z" />
                                                <path class="st9"
                                                    d="M260.7-158.4h1.6c.1.1.1.1 0 .2-.1.4-.2.7.2 1 0 .2.1.6-.3.4-.6-.4-1.2-.9-1.5-1.6z" />
                                                <path class="st23"
                                                    d="M320.5-144.6c.5.1.5.5.5.9s-.2.6-.6.7c-.1-.6-.1-1.1.1-1.6z" />
                                                <path class="st30"
                                                    d="M290.9-122.5c-.4.3-.7.2-1.1.1.3-.2.7-.1 1.1-.1zM262.5-157.2c-.3-.3-.3-.7-.2-1 .2.3.2.7.2 1z" />
                                                <path class="st9" d="M260.4-158.7l.3.3c-.2 0-.3-.1-.3-.3z" />
                                                <path class="st30" d="M276.2-123.5c.1.1.1.2 0 .3v-.3c0 .1 0 0 0 0z" />
                                                <path class="st40"
                                                    d="M255.8-99.9c1.2-.9 2.4-2 3.7-2.7 0 .6 0 1.1-.2 1.6-.1.3-.1.7-.1 1.1-.5.4-.5 1-.7 1.6v1.5c-.1.3-.3.6-.3.9-.4.6-.3 1.2-.3 1.8-.4.5-.5 1-.6 1.6L257-91c-.3.9-.2 1.9-.5 2.8-.7 2.7-1.3 5.4-1.9 8.1-.1.2-.1.5 0 .8 0 .3.2.5.5.5 1.3 0 2.6.4 3.9.4 1.6-.1 3.2 0 4.7 0v1.3H260c-1.1 0-2.1 0-3.2-.2-.6-.2-1.3-.1-2-.1-.5 0-.7.3-.7.8 0 .4.2.6.6.7h8.9v1.3H254.4c-.3 0-.6.2-.6.6 0 1.2-.3 2.4-.3 3.6 0 1.2-.3 2.4-.5 3.6-.2 1.4-.6 2.8-.5 4.2v.8c-.3.9-.2 1.9-.3 2.9-.5.4-.2 1-.3 1.5-.4.6-.3 1.2-.3 1.8-.3.2-.3.6-.3.9v2.8c-.3.5-.3 1.1-.3 1.6 0 .7 0 1.4-.1 2.1-.3 1.9-.6 3.7-.5 5.6 0 1.7 0 1.7 1.7 1.7 1.2 0 2.5-.1 3.7.1 1.1.2 2.1.2 3.2.2h2.5c.1.4-.1.8-.3 1.2h-.7c-.4.1-.5.3-.5.7 0 .3.2.5.4.5h.7c0 .4-.1.9-.3 1.2h-1.2c-.4-.2-.8-.3-1.2-.3h-5.6c-.6 0-1.2 0-1.8-.2-.5-.2-.9.1-1 .6-.1.4-.1.9-.1 1.4 0 1 0 1.9-.1 2.9-.1.7-.2 1.3-.2 2v12.9c-.4 0-.8-.1-1.2-.3v-9.3c0-1.4-.2-2.8.3-4.1.1-.2 0-.4 0-.6.1-1.7-.2-3.4.2-5 0-.2-.1-.4-.3-.4-.2 0-.5-.1-.8 0-.5 0-.6.2-.7.6-.2 1.7-.4 3.3-.3 5 0 .4 0 .8-.1 1.2-.2.6-.2 1.1-.2 1.7v10.1c-.5-.2-1-.4-1.2-.8v-8.1c0-.4-.1-.8 0-1.2.3-1.1.2-2.2.3-3.3 0-1.1-.1-2.1.3-3.2.1-.4.1-.8 0-1.2 0-.6-.2-.7-.7-.8-.8 0-1.6.1-2.3-.1-.7-.2-1.4-.2-2.1-.2-.6 0-1.2-.1-1.6.6-.1-.3-.2-.6-.6-.6h-1.5c-.1-.3-.1-.6.1-1 .5 0 1.1 0 1.6-.1.1 0 .2-.2.2-.3.1-.2-.1-.4-.3-.4-.5-.1-1-.1-1.5-.1v-1.2c.7 0 1.4.2 2.1-.3.4.5.9.3 1.4.3h4.4c.9 0 1.3-.3 1.3-1.1 0-1 .3-2 .4-3l.3-3c.2-1.4.3-2.8.5-4.2-.1-.5.3-1 .3-1.5v-1.5c.3-.2.3-.5.3-.9v-1.6c.5-.4.3-1 .3-1.5.2-.2.3-.4.3-.7 0-.5 0-1 .1-1.5.3-1.9.6-3.7.8-5.6.3-2.1.4-4.1.7-6.2 0-.4.2-.7.2-1 .1-.3-.2-.6-.5-.6h-6.8c-1.1.1-1.1.1-1.3 1-.5 2.4-1.2 4.8-1.5 7.2l-.3 1.5c-.1 1.2-.4 2.3-.4 3.5 0 .4-.2.9-.4 1.3 0 .1-.3.1-.4.2-.1-1.1.2-2.2.4-3.3.3-2.1.7-4.2 1.1-6.3.4-1.9.6-3.8 1.3-5.6.3-.7.4-1.5.5-2.2.1-1.4.5-2.8.8-4.2.4-.3.5-.8.7-1.3.1-.2.1-.5.3-.6.1.6.1 1.3-.1 1.9-.2.6-.3 1.2-.4 1.7-.4 1.5-.4 1.5 1.2 1.6h5.6c.6 0 .7-.2.8-.7 0-.7.1-1.4.3-2.1.2-.7.2-1.5.4-2.2.3-1.7.5-3.4.8-5.1.2-1.2.5-2.4.7-3.6.3-.5.4-1 .3-1.5.5-.5.4-1.2.6-1.8 0-.2 0-.5.1-.7.5-.5.6-1.1.5-1.8.7-1 .8-1.6.9-2.1zm-3.1 19.8c0 .4-.1.7-.1 1.1 0 .1.1.1.2.2h.3c.2-.1.2-.3.3-.5l2.1-9.3c.2-1 .4-2.1.6-3.1 0-.3 0-.5-.4-.6-.3-.1-.6-.1-.8.3-.1.3-.3.7-.3 1-.2 1.2-.6 2.4-.7 3.6-.4 2.3-.8 4.8-1.2 7.3zm.2 5.6c.1-.2 0-.4-.2-.5-.2-.1-.5 0-.6.2-.2.4-.3.8-.3 1.2 0 1.3-.2 2.5-.4 3.8-.1 1.2-.3 2.4-.5 3.6-.4 2.1-.6 4.3-.8 6.5 0 .1 0 .3.1.4.2.1.4.1.6 0 .1-.1.3-.2.3-.3.1-.8.3-1.7.3-2.6 0-1.9.4-3.7.6-5.6.1-.6.3-1.1.3-1.6.1-1.7.5-3.4.6-5.1zm-4.7 33.3c.6 0 .7-.1.8-.7.1-.3.3-.7.2-1-.1-1.3.4-2.5.4-3.8 0-.2 0-.5.1-.8.5-1.4 0-2.9.4-4.4.1-.2-.2-.4-.4-.4-.3-.1-.6 0-.8.3-.2.4-.3.8-.3 1.2 0 .5.1 1-.1 1.5-.3 1.2-.2 2.4-.5 3.6-.3 1.2-.4 2.4-.5 3.6 0 .7.2.9.7.9zm6.5 2.5H258.3c.2 0 .4-.2.4-.4s-.1-.4-.4-.4c-.4 0-.8 0-1.2-.1-2.1-.5-4.2-.2-6.2-.3-.4 0-.6.2-.6.5 0 .4.2.6.6.6.3.1.6.1.9.1h2.9zm-7.1-37.7s0 .1 0 0h2.8c.5 0 .8-.4.7-.8-.1-.4-.4-.4-.7-.4h-4.9c-.2 0-.4.1-.6.1-.3.1-.4.5-.3.8.1.2.3.3.5.3h2.5zM244.2-39h1.7c.2 0 .4-.2.4-.4s-.1-.4-.4-.4h-3.5c-.3 0-.6 0-.9.1-.1 0-.2.1-.2.2s0 .2.1.2c.1.1.3.1.4.2.8.2 1.6 0 2.4.1zm12.7-56.6c-.1-.1-.1-.2-.2-.3-.2-.1-.5-.1-.7.1-.4.3-.5.7-.5 1.2 0 .2.1.4.4.4.3.1.6.1.7-.2.1-.3.2-.8.3-1.2zm-7 41.8c.3 0 .6-.3.6-.7 0-.4-.2-.6-.5-.7-.3-.1-.6.1-.7.4 0 .5.2.9.6 1zm7.4-44c0-.1 0-.2-.1-.3-.1-.2-.4-.2-.5-.1-.4.3-.5.7-.4 1.2 0 .1.2.2.3.2.5 0 .7-.3.7-1zM249.7-57v.4c0 .2.1.4.4.4.2 0 .4 0 .5-.2.1-.2.2-.5.2-.7.1-.2 0-.4-.2-.4-.2-.1-.5-.1-.7.1-.2.1-.2.3-.2.4z" />
                                                <path class="st44"
                                                    d="M239.6-99.6c1.1-1.5 1.8-3.2 2.6-4.8.1-.1.1-.2.2-.3.4-1 1.1-1.4 2-1.6 2.1-.5 4.2-1 6.3-1.6.7-.2 1.4-.3 2.1-.5.9-.3 1.6-.1 2 .7-.3.6-.6 1.2-.9 1.9-.8 1-1.6 2-2.2 3.2-.2.5-.6.9-1 1.3-.2.3-.5.5-.5.9-.4.3-.5.7-.8 1.1-1.3 2.1-2.1 4.3-2.8 6.6-1.1 1.9-1.6 4-2.2 6-.1 0-.3.1-.4.1-3.4.3-6.7.6-10.1.9.2-1.1.7-2 1-3 .5-1.5 1.4-3 1.8-4.5.4-.3.5-.8.6-1.2.4-.4.6-1 .7-1.6.3-.4.4-.8.4-1.2.3-.3.3-.6.4-.9.4-.4.7-.9.8-1.5z" />
                                                <path class="st16"
                                                    d="M269.3-69.9c-.1-2.1-.1-4.1.1-6.2.4-.2.5-.6.7-1 .8-2.7 1.9-5.3 2.6-8 .4-1.5.9-3 1.4-4.5.1-.5.5-.6.9-.6.5 0 1 .3 1.4.5 2 1.1 4.1 1.5 6.3 1.7 1.2.1 2.3 0 3.5.1.1 0 .3 0 .3.2 0 .1 0 .2-.1.3-.2.2-.4.4-.7.6-1.9 1.7-3.5 3.5-5.1 5.4-1.1 1.3-2.1 2.7-2.9 4.1-.5.9-1.1 1.8-1.7 2.7-.7 1-1.3 1.9-1.9 3-1 1.9-2.1 3.7-3.6 5.3-.1-.3-.2-.5-.3-.8-.2-.8-.4-1.5-.4-2.3.1-.3-.2-.5-.5-.5z" />
                                                <path class="st10"
                                                    d="M252.4-59.2c.1-1-.1-1.9.3-2.9.1-.2.1-.5 0-.8-.1-1.4.3-2.8.5-4.2.2-1.2.4-2.4.5-3.6 0-1.2.3-2.4.3-3.6 0-.4.2-.5.6-.6H263.8c.1 2-.1 4 .3 6-.2.2-.3.4-.3.7.1 1.2-.1 2.3-.3 3.5-.3 1.8-.6 3.6-1 5.4-.1.5-.3.7-.9.7-.8 0-1.5 0-2.3-.1-.7-.1-1.3-.2-2-.2-1.6 0-3.3 0-4.9-.3zM278.1-74.6c1.8-.1 3.6.3 5.4.7.3.1.5.4.3.7-1.1 1.6-1.6 3.5-2.2 5.3-.9 2.5-1.6 5.1-2 7.8-.1 1.1-.5 2.2-.6 3.3-.6-.1-1.1-.2-1.6-.2-1.7.1-3.3-.3-5-.4-.5 0-.7-.3-.6-.8.4-2.2.7-4.5 1.1-6.7.1-.4-.1-.7-.2-1 0-.3.2-.6.4-.8.9-1.2 1.7-2.5 2.4-3.8.7-1.5 1.5-2.9 2.6-4.1z" />
                                                <path class="st45"
                                                    d="M297.7-90.8c.1-.6.3-1.2.9-1.5 1.1.2 2.1.4 3.2.3.3 0 .6 0 .7-.2.2-.5.5-.9.4-1.4 0-.2-.1-.4-.3-.5-.4-.2-.8-.3-1.2-.3h-2.1v-.6h3c.3 0 .5 0 .8-.1.3-.1.5-.3.5-.7 0-.3-.2-.4-.5-.5-.3-.1-.7-.2-1-.3.1-.8.5-1.2 1.3-1.2.6 0 .8-.2 1-.8 0-.1.2-.2.3-.3.2-.2.7-.1.8.1.1.2.2.3.3.5.3.8.5.9 1.1.5.4-.3.6-.3.8.2.2.5.7.7 1.1.6 1-.1 1.8.4 2.5 1 .5.4 1.2.6 1.5 1.2-.5.1-1-.2-1.5-.3h-.9c-.2 0-.3.2-.3.4 0 .1.1.3.2.4.5.2 1 .4 1.6.4h.7c.4.1.5.3.2.9-.4-.1-.9-.2-1.3-.3-1.4-.2-1.9.1-2 1.6v.3c0 .3.2.6.5.7.6.2 1.3.3 1.9.4-.1.5-.2 1-.7 1.3-.6-.1-1.2-.1-1.8-.3-.3-.1-.5 0-.6.3-.1.2-.2.5-.2.7-.5 1.9-1.1 3.7-1.8 5.5-.3.8-.7 1.7-.9 2.6-.4 1.4-.7 2.9-1 4.3-.5-.1-1.1.2-1.5-.3.1-.5.2-1 .4-1.5.5-1.9.9-3.7 1.6-5.5.7-1.7 1.2-3.4 1.8-5.2.1-.2.1-.5.2-.7 0-.1-.1-.3-.2-.4-.4-.4-1.2-.2-1.3.4l-.6 2.7c-.7 2.2-1.4 4.5-2 6.7-.3 1.2-.6 2.4-.8 3.5h-.9v-.3c.9-3.1 1.6-6.2 2.6-9.2.4-1.2.7-2.4 1-3.5.1-.4-.1-.6-.4-.7-.8-.1-1.2-.1-1.4.9-.5 1.8-1 3.5-1.7 5.2-1 2.4-1.8 4.9-2.5 7.4h-1.4c.1-.6.1-1.2.3-1.8.6-1.7 1.1-3.5 1.8-5.2.6-1.4 1-2.8 1.5-4.2.2-.7.4-1.5.5-2.2.1-.4-.1-.6-.5-.6-1.3-.1-2.5-.3-3.7-.4zm8.6-1.3v.4c0 .3.1.6.5.6.5.1.9 0 1-.4.1-.5.3-1 .3-1.5.1-.5-.1-.8-.7-.8-.5 0-.7.1-.9.6-.1.4-.2.8-.2 1.1zm-1.3-2c-.2 0-.4.1-.5.3-.3.6-.5 1.2-.4 1.9 0 .3.2.5.5.5.5.1.9-.1 1-.7.1-.4.2-.8.2-1.2.1-.5-.2-.8-.8-.8zm2.7-.3c.5 0 .7-.2.7-.6 0-.4-.2-.6-.7-.6-.5 0-.8.3-.8.7 0 .3.3.5.8.5zm-2.3-.3c.6 0 .8-.1.8-.6 0-.4-.2-.6-.6-.6-.5 0-.8.4-.8.9.1.3.4.3.6.3z" />

                                                <path class="st10"
                                                    d="M263.7-78.5H259c-1.3.1-2.6-.3-3.9-.4-.3 0-.5-.2-.5-.5v-.8c.6-2.7 1.2-5.4 1.9-8.1.2-.9.1-1.9.5-2.8.2-.5.2-1 .3-1.5h5c.4 0 .6.2.8.5.4.7.5 1.4.4 2.3-.2 1.2-.2 2.4.1 3.6.1.4.1.9.1 1.4v6.3z" />
                                                <path class="st40"
                                                    d="M326.2-107.2c-.1.7-.1.7-.6.9-.3 0-.6-.2-.8-.3-.4-.3-.9-.7-1.3-1-.5-.3-1-.5-1.5-.7-.2-.1-.4 0-.5.2-.1.2-.1.4.1.6.3.3.7.5 1 .7.8.7 1.9 1.1 2.5 2.2 0 .7 0 .7-.6.9-1-1-2-2-3.4-2.5-.8-.4-1.1-.3-1.5.2-.4.4-.7.9-1 1.3-.9 1-1.9 1.9-2.7 3-1.1 1.4-2.1 2.8-2.9 4.4-.4 0-.7-.2-.9-.6.8-2.1 2.2-3.7 3.7-5.3 1-1.1 1.9-2.4 3-3.4.1-.1.1-.2.2-.2.1-.1.1-.3-.1-.4-.1-.1-.3-.1-.4-.1-.5.2-.8.6-1.1 1-1.1 1.4-2.3 2.8-3.4 4.3-.9 1.2-2 2.3-2.8 3.6-.4 0-.8-.1-1.2-.3.8-1.1 1.5-2.3 2.5-3.3 1.6-1.7 3-3.6 4.5-5.4.1-.1.1-.2.2-.3.1-.2 0-.3-.1-.4-.3-.2-.6-.2-.9-.2h-3.4c.3-.5.7-.9 1.2-1.2 1.2 0 2.4-.1 3.6.3.2.1.5 0 .7-.1.1 0 .3-.2.3-.3 0-.1-.1-.3-.2-.4-.1-.1-.3-.1-.4-.2-.9-.3-1.9-.3-2.9-.4.1-.6.5-.9.9-1.1.9.2 1.9.4 2.8.6.6.1 1.1.1 1.5-.4.7-1 1.6-1.9 2.1-3.1.5-.3 1-.6 1-1.3.3-.7.8-1.3.9-2.1.4-.3.4-.6 0-.9-.3-.3-.7-.4-1.1-.4h-.9c-.1 0-.3-.1-.3-.3-.1-.4.4-1 .8-.8.6.2 1.2.4 1.8.7.3.1.5 0 .6-.2.2-.4.3-.7.3-1.2.4-.4.5-1 .6-1.5.9.3 1.7.8 2.2 1.7.3.6.8 1 1.1 1.6.3.4.6.8.6 1.3h-.1c-.4 0-.7-.3-1-.6-.2-.2-.4-.3-.6-.5-.3-.2-.7-.2-.8.2-.1.4-.2.8-.3 1.1-.2.1-.3.4-.3.6-.4.2-.3.6-.3.9-.8.5-1.2 1.2-1.2 2.1-.7.3-.6 1-.7 1.6-.1 0-.4.1-.4.2-.5.8-1 1.6-1.5 2.5-.2.3-.2.6.2.8 1 .4 2.1 1.1 3.2 1.9z" />
                                                <path class="st46"
                                                    d="M268.1-91.3v2.8c0 .7 0 1.4-.2 2.1-.1.3-.1.7-.1 1.1 0 1.3.1 2.7 0 4-.2 1.6-.2 3.1 0 4.7.1 1.2 0 2.4 0 3.7v.6c-.5 2.1-.2 4.2-.3 6.2 0 .7-.1 1.4-.2 2.1-.2.9-.1 1.8-.1 2.7 0 .3 0 .5-.2.7h-.1-.1l-.1-.1c0-1-.5-2-.4-3 0-.6 0-1.1-.2-1.7-.1-.1-.1-.3-.1-.4.1-2-.5-3.9-.3-5.9.1-.9 0-1.8 0-2.8 0-.3.1-.6 0-.9-.4-1.2-.3-2.5-.3-3.8v-19c0-.8 0-1.5-.2-2.3-.1-.3 0-.6-.1-.9.1-.2.3-.3.3-.5.2-.9.4-1.9.6-2.8.2-.8.2-1.6.8-2.3.5.7.8 1.4.8 2.3v3.5c0 .4 0 .8.1 1.2.2.6.2 1.2.2 1.8v5.8c-.2.3-.2.8.2 1.1z" />
                                                <linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse"
                                                    x1="286.916" y1="-100.724" x2="303.622" y2="-118.575">
                                                    <stop offset="0" stop-color="#efb657" stop-opacity=".5" />
                                                    <stop offset=".013" stop-color="#efb657" stop-opacity=".506" />
                                                    <stop offset="1" stop-color="#f1b757" />
                                                </linearGradient>
                                                <path
                                                    d="M321.2-126.6c-.1-.2-.2-.3-.3-.5-1.4-3-2.1-6.2-2.1-9.5 0-1.9.1-3.8.1-5.7v-1.3h-.2c-.1.3-.3.5-.4.8-.8 2-1.7 4-2.8 6-1.1 2-2.8 3.4-4.5 5l-.9.6c-.2.2-.5.3-.7.6-.7.8-1.6 1.4-2.5 2-1.3.9-2.7 1.9-4 2.8-2 1.4-4.2 2.5-6.7 2.6-.2 0-.4 0-.6.1-1.4.3-2.8.5-4.2.6 0 .6-.2 1.1-.4 1.6-.5.9-1 1.9-1.4 2.9-.4.9-.8 1.8-1.6 2.4-.2.2-.3.4-.3.7-.1.1-.2.3-.2.4.3.8.2 1.5.2 2.3.6 0 1.1.1 1.7.1.6.1.6.4.2.9-.5.3-1 .3-1.5 0h-.3c-.1.9-.4 1.8-.6 2.7-.5 2.2-.9 4.4-1.3 6.7-.4 2.2-1 4.4-1.5 6.6-.1.3-.2.4-.5.5-.4 0-.7 0-1.1.1.3.2.7.2 1 .2 1.6 0 3.2.1 4.8 0 1.2-.1 2.5-.1 3.7-.6.3 0 .5 0 .7-.2 0-.2.1-.3.2-.1 1.4-.5 2.6-1.2 3.8-2.2 1.7-1.5 3.5-3 5.3-4.3 2.5-1.8 4.8-3.7 7-5.9 1.1-1.1 2.3-2.2 3.4-3.3.5-.5.9-1 1.3-1.5.8-1 1.6-1.9 2.4-2.7 1.7-1.7 2.9-3.7 4.1-5.7.1-.2.2-.5.3-.7.2-1.7.6-3.3.4-5z"
                                                    fill="url(#SVGID_8_)" />
                                                <path class="st10"
                                                    d="M335.1-108.8c-1.7 2.1-3.3 4.4-4.7 6.7-.6 1-1.4 1.9-1.9 2.9-.7 1.3-1.3 2.5-1.9 3.8-.2.6-.6 1.1-.9 1.6-1.6 0-3.1-.4-4.6-.7-.4-.1-.6-.4-.3-.8.1-.1.2-.3.3-.4.9-.8 1.5-1.9 2.3-2.8 1.1-1.5 2-3 2.9-4.6.7-1.3 1.4-2.5 2-3.9.4-1 .9-2 1.4-3.1.1-.1.2-.2.2-.3v-.1c.3 0 .7 0 1 .1 1.4.6 2.8 1.1 4.2 1.6z" />
                                                <path class="st45"
                                                    d="M252.4-59.2c1.7.3 3.3.2 5 .3.7 0 1.3.1 2 .2s1.5.1 2.3.1c.5 0 .8-.2.9-.7.3-1.8.7-3.6 1-5.4.2-1.1.4-2.3.3-3.5 0-.3.1-.5.3-.7.3.8.3 1.7.3 2.6v3.1c-.2 1-.4 2.1-.6 3.1-.4 1.8-.4 1.8 1.5 1.7-.1.5.2 1.1-.3 1.6h-1.4c-.4.1-.8.8-.7 1.4 0 .4.4.4.7.4.5 0 .9 0 1.4.1 0 .3-.1.5-.4.6-.5 0-.9 0-1.4-.1-.4 0-.6.2-.8.5-.5 1.4-.3 1.7 1.1 1.9h.5v.9c0 .4-.2.6-.6.7-.3-.1-.7-.2-1-.2-.3-.1-.6.1-.7.5-.1.4-.2.9-.3 1.3-.5 2.6-1 5.3-1.1 7.9h-1.2c.1-2.7.7-5.3 1.1-7.9.1-.4.2-.9.2-1.3 0-.6-.1-.7-.7-.8-2.7-.4-5.5-.8-8.2-1.2v-1.5c.8.2 1.7.2 2.6.3 1.7.3 3.5.4 5.3.8.4.1.8 0 1.2 0 .4 0 .5-.3.6-.6.1-.3.2-.7 0-1 0-.1-.2-.1-.2-.2-.8-.1-1.5-.3-2.3-.3-2.4.1-4.8-.4-7.1-.4 0-.3-.1-.7.3-.9 1.7.1 3.3.4 5 .4.1 0 .3.1.4.1 1.3.3 2.5.1 3.8.2.4 0 .8-.4.8-1.1 0-.4-.3-.7-.8-.7-1 0-2-.2-3-.3-2-.1-4 0-5.9-.3-.1-.6-.4-1.1.1-1.6zM272.6-65.9c.2.3.3.6.2 1-.4 2.2-.7 4.5-1.1 6.7-.1.5.1.8.6.8 1.7.1 3.3.4 5 .4.5 0 1.1.1 1.6.2-.1.4-.2.9-.3 1.3-.8 0-1.6-.1-2.4 0-1.2.1-2.4-.2-3.6-.3-1.2-.1-1.2 0-1.4 1.4.1.1.3.1.4.2 1.3.2 2.6.5 3.9.6 1 .1 1.9.4 2.9.3 0 .3-.1.5-.3.7-1.9 0-3.7-.3-5.6-.6-.5-.1-1-.2-1.5.1-.4.3-.2.8-.3 1.1 0 .1-.1.3-.1.4-.1.4.1.7.6.7 2 0 3.9.5 5.9.4h.8c0 .6-.1 1.2-.6 1.5-1.5-.1-2.9 0-4.4-.3-.6-.1-1.3 0-2-.1-.4 0-.6.2-.8.6-.1.2-.1.4-.2.6-.4 1.8-.8 3.6-1.1 5.3-.3 1.6-.7 3.2-.8 4.8-.6.1-1.2.1-1.2-.8 0-.2-.2-.3-.3-.2-.4.4-.9.3-1.4.4-.3-.4-.4-.8-.3-1.3.1-.6.6-1 1.2-.8.3.1.6.4.9.6.1.2.2.2.3 0 .1-1.3.5-2.6.8-3.9.3-1.7.7-3.4 1-5 .1-.3-.1-.5-.4-.5-.2 0-.5-.1-.8-.1 0-.5 0-1-.3-1.5h1.2c.4 0 .6-.2.8-.6.1-.2.1-.4.2-.6.3-1.2.3-1.1-1-1.3-.7-.1-1.4-.3-2.1-.3 0-.3.1-.5.3-.6.8.1 1.7 0 2.6.2.4.1.7-.1.8-.5v-.6c0-.4-.2-.6-.5-.6-.8-.1-1.7-.2-2.5-.3.1-.5.2-1 .7-1.3.7 0 1.3.1 2 .1.5 0 .7-.2.9-.7.2-.6.2-1.3.3-1.9.2-1.4.5-2.7.4-4.1l.3-.3c-.1-.7.2-1.1.7-1.3z" />
                                                <path class="st41"
                                                    d="M262.5-35.3c.4.2.8.3 1.3.3.7.1 1.5.2 2.1.6-.2 1.2-.3 2.4-.5 3.6-.2 1.2-.5 2.5-.7 3.7-.2 1.2-.3 2.4-.8 3.5-.5-.3-.9-.5-1.4-.4-.4 0-.7.2-.8.5-.1.3-.1.7.1 1 .3.3.6.5 1 .6.5 0 .6.3.6.7 0 1.6-.3 3.2-.6 4.8-.2.8-.3 1.6-.3 2.4-1-.3-1.9-.9-3-.9 0-1.4-.2-2.7.2-4.1-.1-2.1.7-4 1.1-6 .2-1 .3-2.1.5-3.1.2-1.4.4-2.8.5-4.2.1-.9.2-1.7.4-2.5.1-.2.2-.4.3-.5zm1.1 6.1c.5 0 1.1-.7 1.1-1.2s-.5-1-.9-1.1c-.6 0-1.2.5-1.2 1.1-.1.5.5 1.2 1 1.2z" />
                                                <path class="st40"
                                                    d="M268.1-91.3c-.4-.3-.3-.7-.3-1.1v-5.8c0-.6 0-1.2-.2-1.8-.1-.4-.1-.8-.1-1.2v-3.5c0-.9-.2-1.6-.8-2.3-.6.7-.5 1.6-.8 2.3-.3.9-.4 1.9-.6 2.8 0 .2-.2.3-.3.5-.2-.1-.3-.3-.3-.5 0-1.1-.5-2-1.4-2.7-.1-.1-.1-.2-.1-.3 0-.8.4-1.6.5-2.3.3-1.5.8-1.6-1.1-1.6.2-.3.5-.7.7-1 .2-.4.5-.6.9-.8 1.2-.6 2.3-1.4 3.3-2.2.1-.1.3-.2.4-.2.2-.1.4.1.5.3.1.3.1.6.1.9l-.3.3c-.2.4-.3.7.1 1.1.2.1.3.3.4.4.8.7 1.1 1.5 1 2.6-.1 1.6 0 3.2 0 4.7.1 1.2-.2 2.4-.4 3.6 0 .2-.2.5-.2.7.1 1.4-.3 2.8-.4 4.2-.1 1-.2 2-.6 2.9z" />
                                                <path class="st10"
                                                    d="M294.4-91.4c-.2 1.1-.9 1.9-1.5 2.8-1.6 2.6-3.2 5.1-4.6 7.7l-1.8 3c-.2.4-.5.6-1 .5-.6 0-1.1 0-1.7-.2-1.1-.3-2.2-.5-3.3-.5-.1-.7.3-1.3.7-1.8 1.9-2.3 3.9-4.4 6.1-6.4 1.9-1.8 3.9-3.5 6.1-5 .4.1.6-.1 1-.1z" />
                                                <path class="st45"
                                                    d="M246.6-92.6c.8-2.3 1.6-4.5 2.8-6.6.2-.4.4-.8.8-1.1.4.3.9.5 1.4.4h4.2c-.1.6-.2 1.1-.6 1.5h-3.9c-.9 0-1.1.2-1.4 1-.2.4 0 .7.4.7h4.4c0 .2 0 .5-.1.7h-4.7c-.5 0-1 1.1-.7 1.6 0 .1.1.2.2.2.2 0 .5.1.8.1h3.8c.1.5 0 1.1-.3 1.5h-4.3c-.8 0-.8 0-1.1.8 0 .1-.1.3-.1.4-.5 1.8-1 3.5-1.4 5.3-.6 2.4-1.1 4.8-1.7 7.2-1.6 0-1.6 0-1.2-1.6.1-.6.3-1.2.4-1.7.2-.6.2-1.3.1-1.9.4-.2.4-.6.5-.9.4-1.3.7-2.6 1.1-4 .3-1 .5-2 .8-2.9.1-.2.1-.5-.2-.7z" />
                                                <path class="st10"
                                                    d="M312.4-108.5h3.4c.3 0 .6 0 .9.2.1.1.2.2.1.4 0 .1-.1.2-.2.3-1.5 1.8-2.9 3.6-4.5 5.4-.9 1-1.7 2.2-2.5 3.3-1.7-.9-3.5-1.6-5.4-2.3.5-.4.9-.8 1.3-1.1.4-.3.7-.8 1.1-1 .7-.5 1.3-1.1 1.9-1.7.9-1 2.1-1.8 2.9-2.9.3-.4.6-.6 1-.6z" />
                                                <path class="st31"
                                                    d="M274.9-90.2c-.4 0-.8.2-.9.6-.5 1.5-1 3-1.4 4.5-.7 2.7-1.8 5.3-2.6 8-.1.4-.3.8-.7 1-.3-2.5-.1-5.1 0-7.6.1-1.7.2-3.4.3-5.2.1-1.4.4-2.7.6-4.1 1 .3 1.6 1 2.3 1.5.8.6 1.7.8 2.4 1.3z" />
                                                <path class="st10"
                                                    d="M321-106.4c1.3.5 2.4 1.4 3.4 2.5 0 .4.1.8-.2 1.2-1.3 2-2.4 4.1-4.1 5.7-.3.3-.5.6-.7 1-.3.4-.6.7-1.1.8 0-.7 0-1.4-.7-1.9v-.9c0-.6-.3-.9-.9-1v-.3c.7-.9 1.2-2 1.8-2.9.8-1.2 1.5-2.4 2.3-3.5.1-.3.1-.5.2-.7z" />
                                                <path class="st41"
                                                    d="M267.7-49.8c.3 0 .5 0 .8.1.3.1.4.3.4.5-.3 1.7-.7 3.4-1 5-.3 1.3-.6 2.5-.8 3.9h-.3l-.9-.6c-.6-.2-1.1.1-1.2.8-.1.5.1.9.3 1.3-.7.1-1.2-.2-1.9-.3-.2-1.3.2-2.5.4-3.8.3-1.8.8-3.6.8-5.4 0-.5.2-1 .3-1.5 0-.1.1-.2.2-.2s.2 0 .3.1c.1.2.2.5.4.7.6.8 1.3.7 1.8-.1.2-.1.3-.3.4-.5z" />
                                                <path class="st10"
                                                    d="M340.6-114.6c-.7 1.1-1.8 1.9-2.6 2.8-.3.3-.5.6-.8.9-.6-.2-1.2-.5-1.9-.7-1.5-.5-3.1-1-4.5-1.8 0-.3 0-.6.1-.9.3-1.1.6-2.1 1-3.2.1-.4.5-.6.8-.3 1.8 1.2 4 1.7 5.9 2.6.6.3 1.3.6 2 .6z" />
                                                <path class="st46"
                                                    d="M255.2-99.9h-3.6c-.5 0-1-.1-1.4-.4.1-.4.3-.6.5-.9.3-.4.7-.9 1-1.3.6-1.2 1.4-2.2 2.2-3.2.4 0 .7-.2.9-.4.9-.8 1.9-1.5 3-2 .3-.1.5-.3.9-.3.3 0 .8-.1 1 .2.3.4-.1.8-.4 1-.5.5-.9 1-1.2 1.7-.3.7-.9 1.3-1.5 1.9-1.1 1-1.6 2.2-1.4 3.7z" />
                                                <path class="st41"
                                                    d="M259.8-37.2h1.2c.1 1.1-.2 2.1-.4 3.2-.4 1.7-.6 3.5-.8 5.2-.2 1.4-.5 2.7-.7 4-.3 1.7-1 3.4-1.2 5.2-.1.6-.2 1.1-.2 1.7v2.4c-.5.1-1 0-1.5-.3-.2-1.7.2-3.3.5-5 .5-2.6 1-5.3 1.6-7.9.4-1.7.6-3.4.9-5.1.2-1.1.4-2.2.6-3.4z" />
                                                <path class="st46"
                                                    d="M317.6-97.2c.7.5.6 1.2.7 1.9v.6c-.1.4-.4.6-.8.4l-3.9-2.4c-.4-.2-.7-.5-.8-.9.9-1.5 1.9-3 2.9-4.4.8-1.1 1.8-2 2.7-3 .4-.4.7-.9 1-1.3.5-.6.7-.6 1.5-.2-.1.2-.1.4-.2.6-.7 1.2-1.5 2.4-2.3 3.5-.6 1-1.1 2-1.8 2.9-.1.1 0 .2 0 .3-.4 0-.7.2-.9.5-.4.5-.4 1 0 1.5s.8.5 1.4.1c.3.1.4 0 .5-.1z" />
                                                <path class="st16"
                                                    d="M274.7-94.7c.8.3 1.5.5 2.3.8 1.6.5 3.2 1 4.9 1.1.5 0 1 .2 1.5.3.1.2.3.3.5.2.7-.1.9.3 1 .9 0 .4.3.7.2 1.1-.5.1-1 .1-1.5 0-.2-.2-.4-.3-.7-.2h-1.5c-1.4-.1-2.7-.5-3.9-1.1-.6-.3-1.2-.5-1.8-.8-.4-.2-.9-.3-1.2-.6-.2-.6.2-1.1.2-1.7z" />
                                                <path class="st41"
                                                    d="M315.2-89.5c.1-1.1.5-2.1.9-3.1.7.1 1.2.5 1.2 1.3 0 .1 0 .2.1.3.1.4.5.5.8.3.1-.1.2-.2.4-.3 1-.4 1.9-.6 3-.3l2.7.6c0 .7-.3 1.3-.5 1.9-.2.2-.4.5-.6.7h-.4c-.1-.1-.1-.2-.2-.2-2.1-.3-4.2-.7-6.3-1-.4.1-.8 0-1.1-.2z" />
                                                <path class="st40"
                                                    d="M330.8-113.4c1.4.8 3 1.2 4.5 1.8.6.2 1.2.5 1.9.7-.7.7-1.2 1.6-2 2.1l-4.2-1.5c-.3-.1-.7-.1-1-.1.1-1 .2-2.1.8-3z" />
                                                <path class="st10"
                                                    d="M322.1-114.9c-.5 1.2-1.4 2.1-2.1 3.1-.4.5-.9.5-1.5.4-.9-.2-1.9-.4-2.8-.6 0-.5.2-.9.5-1.2l1.8-1.8c.5-.6 1.2-.7 1.9-.6.8.3 1.5.5 2.2.7z" />
                                                <path class="st41"
                                                    d="M260.3-40.8c.1-2.7.6-5.3 1.1-7.9.1-.4.1-.9.3-1.3.1-.3.4-.5.7-.5.3.1.7.2 1 .2-.3 1.2-.5 2.5-.8 3.7-.3 1.5-.5 3-.8 4.5-.1.4-.2.9-.3 1.3h-1.2z" />
                                                <path class="st45"
                                                    d="M326.5-116.5c0-.3-.1-.7.3-.9.7.4.9 1.2 1.2 1.9.4 1 .3 2 .3 3 0 .8-.1 1.6-.5 2.3-.2.4-.3.8-.5 1.3-.2.4-.3.9-.8 1 0-1.5-.4-2.9-1.3-4.2-.2-.2-.4-.5-.5-.7 0-.6-.1-1.3.7-1.6.8.7 1.2 1.7 1.9 2.5.1.2.2.4.6.2 0-.6.1-1.2 0-1.7-.4-1-.5-2.2-1.4-3.1z" />
                                                <path class="st31"
                                                    d="M285.2-90.2c0-.4-.2-.8-.2-1.1-.1-.6-.3-1-1-.9-.2 0-.4-.1-.5-.2 2.5-.1 5.1 0 7.6-.2.1 0 .3 0 .4.1.2.2-.1.4-.2.5-.6.6-1.3 1-2.2 1.2-1 .2-2 .4-3 .7-.3 0-.6 0-.9-.1z" />
                                                <path class="st10"
                                                    d="M263.7-76.1h-8.9c-.4 0-.6-.2-.6-.7 0-.5.2-.8.7-.8.7 0 1.3-.1 2 .1 1.1.3 2.1.2 3.2.2h3.7c-.1.5-.1.8-.1 1.2zM324.6-112.8c.2.2.3.5.5.7 1 1.2 1.3 2.6 1.3 4.2 0 .2 0 .5-.3.6l-3.3-2.1c-.3-.2-.3-.5-.2-.8.5-.8 1-1.7 1.5-2.5.2 0 .4 0 .5-.1z" />
                                                <path class="st41"
                                                    d="M271.4-64.4c.1 1.4-.3 2.7-.4 4.1-.1.6-.1 1.3-.3 1.9-.2.5-.4.7-.9.7-.7 0-1.3 0-2-.1.1-.9.6-1.6 1-2.4.8-1.4 1.6-2.8 2.6-4.2z" />
                                                <path class="st10"
                                                    d="M269.6-102.7v-4.7c0-1-.3-1.9-1-2.6-.2-.1-.3-.3-.4-.4-.4-.3-.3-.7-.1-1.1l.3-.3c.5.3 1 .6 1.6.9.7.4.9 1 1.3 1.6.1.2.1.4 0 .6-.2.6-.4 1.1-.5 1.7-.2.8-.5 1.6-.5 2.5-.1.7-.3 1.3-.7 1.8zM259.2-100c0-.4-.1-.7.1-1.1.2-.5.2-1.1.2-1.6.2-.4.5-.6.9-.8.1-.1.3-.1.4 0 1.1.3 2 1.8 2 3 0 .4-.2.6-.6.6-1 0-2-.1-3-.1zM262.5-108.8c1.9 0 1.4.1 1.1 1.6-.2.8-.6 1.5-.5 2.3h-.2c-.5 0-.8-.6-1.4-.6H260l-.1-.1c-.1-.2 0-.4.1-.6 1-.8 1.4-2 2.5-2.6zM325.9-122.9c-.2.5-.3 1.1-.6 1.5-.7-.3-1.4-.5-2.2-.8-.5-.2-.7-.4-.5-.9.2-.7.1-1.4.2-2.1 0-.2.2-.4.4-.3 1 .6 2 1.3 2.6 2.3.1.1.1.2.1.3z" />
                                                <path class="st46"
                                                    d="M310.9-98.7c.8-1.3 1.9-2.4 2.8-3.6 1.1-1.4 2.3-2.8 3.4-4.3.3-.4.6-.8 1.1-1 .1 0 .3 0 .4.1.1.1.1.2.1.4 0 .1-.1.2-.2.2-1.2 1-2 2.3-3 3.4-1.4 1.6-2.9 3.3-3.7 5.3-.4.1-.9.1-.9-.5z" />
                                                <path class="st31"
                                                    d="M274.7-94.7c0 .6-.4 1.1-.3 1.7-1.4-.7-2.5-1.7-3.7-2.6-.1-.1-.2-.2-.2-.4 0-.6 0-1.3.3-1.9.1 0 .2 0 .2.1 1 1.3 2.3 2.3 3.7 3.1z" />
                                                <path class="st41"
                                                    d="M266.5-54c.7-.1 1.4.1 2.1.3 1.2.2 1.2.2 1 1.3 0 .2-.1.4-.2.6-.1.4-.3.6-.8.6h-1.2c-.4-.4-.9-.2-1.4-.3-.3-.1-.5-.4-.3-.7.3-.6.7-1.1.8-1.8zM257.9-94.1c0-.6-.1-1.3.3-1.8.9 0 1.7 0 2.6.2.5.1 1.1.1 1.7.1.3 0 .6.1.6.5s-.1.8-.5.9c-.3.1-.6.1-.9.1h-3.8z" />

                                                <path class="st10"
                                                    d="M279.7-77c1.7.3 3.4.5 5.1.9.2.1.4.2.4.4 0 .3-.2.6-.4.7-.3.1-.6.1-.9 0l-2.7-.6c-.7-.2-1.4-.2-2.1-.2-.1-.5 0-.9.6-1.2z" />
                                                <path class="st42"
                                                    d="M256.1-15.8c.5.3.9.4 1.5.3.3 0 .6.1.8.4.3.3.7.3 1.1.2 1.1 0 2 .7 3 .9v1.2c-2.1-.8-4.3-1.4-6.5-2-.3-.1-.6-.1-.8-.3.5-.1.8-.3.9-.7z" />
                                                <path class="st41"
                                                    d="M258.5-96.8v-1.5h3.2c.9 0 1.2.4 1.1 1.3 0 .3-.2.5-.5.5-.8 0-1.6.1-2.4-.1-.5-.2-.9-.3-1.4-.2zM324-118.3c-.1.8-.6 1.4-.9 2.1-.9-.6-2-.6-2.9-1-.1-.4.1-.5.2-.7.3-.6.7-1 1.5-.7.7.2 1.5-.1 2.1.3z" />
                                                <path class="st31"
                                                    d="M269.3-69.9c.3 0 .6.2.6.5-.1.8.2 1.6.4 2.3.1.3.2.6.3.8-.4.7-.8 1.4-1.3 2.1-.4-1.5-.3-4.1 0-5.7z" />
                                                <path class="st10"
                                                    d="M325-104.8c-.6-1-1.7-1.5-2.5-2.2-.3-.3-.7-.5-1-.7-.2-.1-.2-.4-.1-.6.1-.2.3-.3.5-.2.5.2 1 .5 1.5.7.5.3.9.6 1.3 1 .2.2.5.3.8.3.1.8.2 1.4-.5 1.7z" />
                                                <path class="st41"
                                                    d="M267.1-56.5c.8.1 1.7.2 2.5.3.4 0 .5.2.5.6v.6c-.1.4-.4.6-.8.5-.8-.2-1.7-.1-2.6-.2 0-.6.3-1.2.4-1.8zM262.8-37.8c.8.1 1.7.3 2.5.4.2 0 .4.2.5.3.3.2.3.5.2.8-.1.3-.3.4-.6.4s-.6 0-.9-.1c-.7-.3-1.4-.2-2.1-.3.1-.5 0-1.1.4-1.5zM272.8-113c-.4-.1-.6-.3-.7-.6-.3-.4-.6-.8-1-1.2-.2-.2-.8-.3-.5-.8.4-.6 1.1-.8 1.6-.5.2.1.3.3.4.4.2.2.3.5.5.8.3.4.3.7.1 1.1-.1.3-.2.6-.4.8zM272.2-111.8c-.1.1-.2.2-.3.2-.1 0-.3 0-.4-.1-.8-.5-1.5-1-2.3-1.5-.3-.2-.4-.6-.2-.9.2-.4.6-.6 1-.4.2.1.4.1.5.3.5.7 1.2 1.2 1.6 2 .1.1.1.3.1.4zM265.3-58.3c-1.9 0-1.9 0-1.5-1.7.2-1 .4-2.1.6-3.1.1.1.2.2.2.4.1 1.1.3 2.1.5 3.1.2.4.1.9.2 1.3zM264.1-51.8h-.5c-1.4-.2-1.6-.5-1.1-1.9.1-.4.4-.6.8-.5.5 0 .9 0 1.4.1.1.7-.4 1.5-.6 2.3zM328.4-112.5c0-1 .1-2-.3-3-.3-.7-.5-1.4-1.2-1.9 0-.3.1-.5.3-.6.1.1.2.1.3.2.5.4 1.1.6 1.3 1.4.3 1 .3 1.9.1 2.9-.1.3-.2.7-.5 1zM302-96.5c.3.1.7.2 1 .3.3.1.5.2.5.5s-.2.6-.5.7c-.2.1-.5.1-.8.1h-2.6c.6-.9 1.5-1.3 2.4-1.6z" />
                                                <path class="st10"
                                                    d="M314.9-110.7c1 .1 1.9 0 2.9.4.1.1.3.1.4.2.1.1.2.2.2.4 0 .1-.2.3-.3.3-.2.1-.5.1-.7.1-1.2-.4-2.4-.3-3.6-.3.1-.6.5-1 1.1-1.1z" />
                                                <path class="st41"
                                                    d="M265-54.9c-.5 0-.9 0-1.4-.1-.3 0-.7 0-.7-.4-.1-.6.3-1.3.7-1.4h1.4v1.9zM325-92.2c0 .3-.2.6-.3.8-1.3-.3-2.6-.6-4-.9-.2 0-.4-.1-.6-.2-.1 0-.1-.2-.1-.2 0-.1.1-.1.2-.1.3 0 .6 0 .9.1 1.3.2 2.6.4 3.9.5zM261.3-38.4h-.7c-.3 0-.4-.2-.4-.5s.1-.6.5-.7h.7c-.1.4-.1.8-.1 1.2z" />
                                                <path class="st31"
                                                    d="M281.4-90.4h1.5c.3 0 .5 0 .7.2-.7 0-1.5.2-2.2-.2z" />
                                                <path class="st40" d="M329.9-118.3l.2.2c.1.1 0 .2-.1.2l-.1-.1v-.3z" />
                                                <path class="st10" d="M340.9-115.2c.1.3-.1.5-.3.6 0-.3.1-.5.3-.6z" />
                                                <path class="st40" d="M329.8-110.3c-.1.1-.2.2-.2.3 0-.1.1-.2.2-.3z" />
                                                <path class="st12" d="M292.9-95.3c0-.2.1-.3.2-.1 0 .1-.1.1-.2.1z" />
                                                <path class="st10" d="M294.6-91.6l-.3.3.3-.3z" />
                                                <path class="st48"
                                                    d="M323.1-88c.2-.2.4-.5.6-.7.2.2.5.4.8.4 3.1.5 6.2 1.3 9.2 2.2h.3v.6h-.1v.1c0 .1-.1.3-.1.4-.3.4-.5.9-.7 1.3l-.9 2.1c-.9 0-1.7-.6-2.6-.9-2.6-.8-5.2-1.5-7.8-2.3.4-1.1 1-2.1 1.3-3.2zm5.9 4.6c0-.4-.2-.5-.4-.5-1.3-.4-2.6-.8-4-.9 1.5.6 2.9 1 4.4 1.4z" />
                                                <path class="st41"
                                                    d="M344.3-85.9c-.1.7-.5 1.1-.9 1.6-.3-.1-.7-.2-1-.2-2.6-.6-5.2-1.3-7.8-1.9.2-.6.4-1.1.8-1.5.2.2.5.3.8.3.5 0 1 .1 1.5.2 2.2.3 4.3 1.1 6.6 1.5z" />
                                                <path class="st45"
                                                    d="M345.8-88.9c0 .6-.1 1-.7 1.3-1.4-.1-2.7-.6-4-.9-1.6-.4-3.2-1-4.9-1.2.2-.5.4-1.1.8-1.5 1.8.5 3.6.9 5.4 1.4 1.2.4 2.3.6 3.4.9zM334.5-86.5c2.6.6 5.2 1.3 7.8 1.9.3.1.7.2 1 .2.2.6-.3 1-.6 1.5-1.3-.4-2.5-.8-3.8-1.1-1.7-.4-3.4-.7-5-1.1 0-.1.1-.3.1-.4h.1v-.1-.6c.1 0 .3-.1.4-.3z" />
                                                <path class="st41"
                                                    d="M336.3-89.6c1.7.2 3.2.8 4.9 1.2 1.3.3 2.6.8 4 .9 0 .4-.2.7-.6.9-.3 0-.6 0-.9-.1-1.1-.3-2.3-.6-3.4-.9-1.5-.5-3-.7-4.6-.9 0-.6.3-.9.6-1.1z" />
                                                <path class="st45"
                                                    d="M335.7-88.6c1.5.2 3.1.4 4.6.9 1.1.3 2.2.6 3.4.9.3.1.6.1.9.1 0 .3.1.7-.3.9-2.2-.4-4.4-1.3-6.6-1.6-.5-.1-1-.2-1.5-.2-.3 0-.6-.1-.8-.3 0-.3 0-.6.3-.7zM324.7 24.7c-1.1.3-2.2.8-3.2 1.3-2.1 1-4.4 1.8-6.6 2.6-1.5.5-3 .7-4.6 1-.3 0-.6.1-.9.2-.3.1-.5.3-.5.7-.2 1.7-.6 3.3-.6 5-.5 0-1-.4-1.6-.3 0-.3 0-.6.1-.9.4-1.1.1-2.2.5-3.3.1-.4-.1-.7-.6-.7-.6 0-.7.1-.9.6-.4 1.1-.7 2.2-.9 3.4h-.9c.1-.2.1-.5.2-.7.2-.8.4-1.5.7-2.3.1-.4-.1-.6-.5-.6h-.3c-1 0-1.2.2-1.3 1.2 0 .7-.1 1.4-.1 2.1-.6 0-1.2-.2-1.6-.7 0-.5.1-1 .1-1.5 0-.7-.1-.8-.8-.9H292.6c-.9-.2-1.7-.4-2.6-.6-1.1-.3-1.1-.4-1.1-1.6.5.1.9.1 1.4.2 1.3.3 2.7.5 4.1.5h6.5c.4 0 .5-.2.6-.6.2-1 .6-1.4-1-1.3-.8 0-1.5 0-2.3.1-2.3.4-4.5.4-6.8-.1-.8-.2-1.7-.4-2.5-.6v-.7c.5.1.9 0 1.4.2 1.4.5 2.9.5 4.4.5 2.2.1 4.4-.2 6.5-.3.7 0 .9-.4.9-1.2 0-.5-.2-.6-1-.7h-5.5c-1.7 0-3.3-.3-4.9-.8-.6-.2-1.1-.4-1.8-.4.1-.5-.2-1.1.3-1.5.9.3 1.8.5 2.8.8.9.2 1.9.5 2.8.5h5.9c1.6 0 1.7 0 1.5-1.8-.1-2-.4-3.9-.6-5.9.6 0 1.1 0 1.6.3 0 .9.4 1.7.3 2.6-.1 1.3.3 2.6.3 3.9 0 .3.2.5.5.5s.7-.1.7-.4c0-.4 0-.7.1-1.1v-5.2h.9v5.6c0 .7.3.9 1 .7.6-.2.8-.4.9-1.1 0-.9 0-1.7.1-2.6.2-.8.2-1.6.2-2.4h1.5c0 .8 0 1.6-.2 2.4-.2.7-.1 1.5-.1 2.3 0 .6.3.8.9.6 3.5-.7 7-1.9 10.1-3.7 1.2-.7 2.4-1.3 3.6-2 0 .2.1.4.1.6.2.5.1.9-.2 1.2-.1 0-.2 0-.3.1-2 1.2-4 2.4-6.2 3.2-1.7.7-3.4 1.3-5.2 1.7-.7.1-1.5.4-2.2.6-.3.1-.4.2-.5.5-.1.3-.2.6-.2.9-.1.5.2.8.7.7.2 0 .4-.1.6-.2 2.5-.8 5-1.4 7.4-2.3 1.7-.6 3.1-1.4 4.5-2.5.6-.6 1.2-1.2 2.1-1.4v.9c-.6.2-1 .6-1.5 1-1.2 1-2.4 2-4 2.5-2.2.7-4.4 1.4-6.5 2-.8.3-1.7.5-2.5.7-.6.2-.9.6-1 1.2 0 .3.1.5.4.5.3 0 .6.1.9 0 1.5-.3 3-.5 4.4-1l2.4-.9c2.5-.9 5-2.1 7.4-3.3.1.7.1 1.4.1 2zm-18.7.5v.5c0 .4.3.6.6.5.3-.1.6-.2.9-.2.2-.1.4-.2.4-.4.1-.5.6-1.1 0-1.6-.4-.4-1 0-1.4.1-.4.1-.5.3-.5.7v.4zm-2.1 3.8h.5c.5-.1.6-.2.7-.6v-.7c0-.2-.1-.4-.4-.4h-1c-.1 0-.3.1-.3.2-.1.4-.3.8-.3 1.1 0 .2.1.4.3.4h.5zm-.4-3.5v.4c0 .3.3.5.6.4.1 0 .3-.1.4-.1.3-.1.5-.3.5-.6s0-.6-.1-.9c0-.1-.2-.2-.3-.3-.5-.2-1.1.1-1.2.6.1.2.1.4.1.5zm3.5 1.3h-.4c-.5.1-.6.2-.6.7v.3c0 .3 0 .6.4.7.3.1.6.1.9-.1.4-.4.5-.9.4-1.4-.1-.2-.4-.2-.7-.2zM356.5-18.8c-.6 0-1-.4-1.2-.9l.3-.9c.6-1.7 1.3-3.4 1.7-5.2.7-2.6 1.3-5.2 2.2-7.7.3-.8.5-1.7.7-2.5.1-.2.1-.4.1-.6 0-.3-.2-.4-.5-.5-.2-.1-.4 0-.5.1-.2.4-.5.9-.6 1.4-.8 2.4-1.6 4.8-2.3 7.3-.4 1.7-1 3.4-1.5 5.1-.3.9-.6 1.7-.9 2.6-.3 0-.7.1-.9-.3.8-1.6 1.3-3.3 1.8-5 1-3.8 2.1-7.5 3.5-11.2 0-.1.1-.2.1-.3 0-.1 0-.3-.1-.4-.6-.5-1.4-.4-1.7.3-.1.1-.1.3-.2.4-.6 1.7-1.2 3.5-1.6 5.2-.6 2.4-1.1 4.7-2.1 7-.4 1-.7 2.1-1 3.2-.7.1-1.1-.3-1.4-.9 1-2.7 2.1-5.4 2.7-8.2.4-2 1-3.9 1.6-5.8.2-.6.5-1.2.7-1.9.2-.4.1-.7-.3-.9-.4-.2-.7-.4-1.1-.5-1.1-.4-2.2-.7-3.3-1.1-.1-.5.3-1 .3-1.5 1 .3 1.9.6 2.9 1 .5.2 1 .4 1.6.5.2 0 .4 0 .6-.1.3-.3.5-.6.5-1.1 0-.4-.3-.5-.6-.6-1.4-.5-2.8-.9-4.2-1.1 0-.3-.1-.6.3-.8.2 0 .5.1.7.1 1.1.3 2.2.7 3.3 1 .2.1.5.1.7 0 .4-.3.4-.7.4-1.1 0-.4-.2-.5-.5-.6-1.4-.5-2.9-1-4.4-1.2.1-.5.3-1 .7-1.3 1.1.2 2.1.4 3.1.7.3.1.7.2 1 .3.3.1.6 0 .7-.4.1-.3.2-.7.3-1 .2-.7.3-1.5.6-2.2 1-2.9 1.8-5.9 2.5-8.9.5.1 1 .2 1.3.7-.3 1.3-.5 2.7-.9 4l-1.2 3.9c-.5 1.3-.7 2.8-1 4.1-.1.3 0 .6.2.8.7.7 1.2.6 1.5-.4.1-.4.3-.9.4-1.3.2-.9.4-1.9.7-2.8.4-1.6 1-3.1 1.3-4.7.3-1 .7-2 .8-3.1.3 0 .7-.1.8.3-.5 1.9-1 3.8-1.7 5.7-.5 1.3-.5 2.7-1 4-.3.7-.4 1.4-.6 2-.1.3-.2.7-.1 1.1 0 .1.1.2.2.2s.2 0 .3-.1c.1-.2.3-.4.4-.7.7-2 1.5-4 2.2-6 .5-1.2.8-2.5.9-3.8 0-.7.2-1.4.4-2.1.5.1 1 .3 1.3.7 0 .6-.2 1.2 0 1.7.2.7 0 1.3-.2 1.9l-1.2 3c-.6 1.8-1.3 3.5-1.9 5.3-.3.9-.2 1 .6 1.5 1.1.6 2.2 1.1 3.3 1.6 0 .5.2 1.1-.3 1.5-1.2-.6-2.4-1.2-3.6-1.7-.5-.2-.9 0-1 .6-.1.5 0 .7.5 1 1.1.7 2.3 1.3 3.4 2 0 .3-.1.5-.3.7-.7-.4-1.3-.8-2-1.2-.4-.2-.9-.5-1.4-.7-.3-.1-.5 0-.6.3l-.3.9c-.1.5 0 .9.4 1.2 1 .7 1.9 1.5 2.9 2.2 0 .6-.1 1-.7 1.3l-.9-.6c-.5-.4-1-.8-1.6-1.2-.4-.3-.7-.2-.9.2-.1.2-.2.5-.3.7-.7 2.5-1.5 4.9-2.2 7.4-.6 2.9-1.5 5.7-2.6 8.4zm1.2-21.6c0 .3 0 .6.3.8.7.5 1.2.4 1.5-.5.1-.2.1-.4.2-.6.1-.5 0-.7-.5-.9-.9-.3-1.4-.1-1.5.9v.3zm2.5-2.5c0-.7-.2-1-.9-1.2-.3-.1-.5 0-.6.3-.5.8-.3 1.2.5 1.5.2.1.4.1.6.2.2 0 .4-.1.4-.3v-.5zm.3 4.4c.3 0 .5-.1.5-.3l.3-1.5c0-.2 0-.4-.2-.5-.3-.1-.5-.1-.7.1-.3.4-.4.9-.5 1.4-.1.5.3.8.6.8zm1.2-3.9v-.2c0-.2-.2-.4-.4-.3-.1 0-.3.1-.3.2-.1.2-.1.4-.1.6 0 .3.3.6.6.6.3-.1.3-.4.3-.6-.1-.1-.1-.2-.1-.3z" />
                                                <path class="st10"
                                                    d="M309.4 13c-.1-1.8 0-3.6-.4-5.3-.4-1.7-.8-3.4-1.2-5l-.3-.9c-.1-.4 0-.6.4-.8.1-.1.3-.1.4-.2 2.4-.7 4.4-2.1 6.4-3.4.4 0 .8.1 1.1.4.8.7 1.5 1.5 2.1 2.4 1.4 2.4 2.7 4.8 3.5 7.4.2.7.5 1.4.8 2.1.2.5.1.9-.4 1.3-.8.8-1.9 1-2.9 1.3-1.3.4-2.6.7-4 .9-1.2.2-2.4.1-3.7.1-.4.1-1.1 0-1.8-.3zM317.6-5.6c1.5-1.9 2.9-3.8 4.4-5.7.4-.5.6-.5 1.1 0 .9.9 1.7 1.7 2.5 2.7 1 1.4 2 2.7 3.2 3.9 1.3 1.4 2.1 3 3 4.6.1.5-.2 1-.4 1.4-.8 1.3-1.5 2.8-2.5 4-.4.5-.9 1-1.3 1.5-.3.3-.3 1-.8 1-.7 0-.6-.7-.7-1.2-.5-1.2-1-2.5-1.7-3.5-1.2-1.9-2.3-3.8-3.7-5.5-.6-.7-1.2-1.3-1.7-1.9-.7-.5-1.1-.8-1.4-1.3zM334.1-28c.1-.2.2-.5.3-.7 1.8-3 3-6.2 4.5-9.3.4-.8.5-1.6.8-2.5.3-.9.3-1.8.8-2.6.9 0 1.8.2 2.7.3 1.3.3 2.6.5 3.9.7.2 1.1-.3 2-.5 3-.9 3.5-2.4 6.8-3.7 10.1l-.9 2.4c-.3.6-.6.8-1.2.6-2.1-.7-4.3-1.3-6.4-2-.3.1-.3 0-.3 0zM335.7-8.7c-.3-.4-.7-.8-1-1.1-2.3-2-4.5-4.2-6.6-6.4-.2-.2-.4-.4-.6-.7-.3-.3-.4-.7-.2-1.1.2-.5.5-.9.8-1.3.9-1.1 1.8-2.1 2.6-3.2.5-.7 1-1.4 1.4-2.2.9-.2 1.7.2 2.5.4 1.5.4 3 .9 4.5 1.4.3.1.6.2.8.3.3.1.4.3.3.6-.1.4-.2.9-.3 1.3-.7 2.1-1.4 4.1-2.1 6.2-.5 1.4-.9 2.9-1.4 4.3-.2.7-.3 1.2-.7 1.5zM301.7 15.5c.2 2 .4 3.9.6 5.9.1 1.8.1 1.8-1.5 1.8h-5.9c-1 0-1.9-.2-2.8-.5-.9-.2-1.9-.5-2.8-.8 0-1.5-.2-3 .3-4.5.1-.4 0-.8 0-1.2.1-1.5.3-3 .6-4.5.1-.3.3-.4.6-.3 1.8.6 3.7 1.2 5.4 2 .5.2 1 .5 1.4.9 1 .9 2.3 1.3 3.6 1.3.1-.1.3-.1.5-.1z" />

                                                <path class="st39"
                                                    d="M339.7-77.8c-.5 1.3-.9 5-.9 6.1v.3c-.3.1-.3.4-.3.6-.4 1.7-.7 3.4-1.1 5.1-.2 1.1-.5 2.2-.5 3.4-.1.1-.2.2-.3.4 0 .1 0 .2.1.3 0-.1.1-.1.1-.2v-.5c.4-.4.4-1.1.8-1.5.9-.7 1.4-1.7 1.7-2.8.1-.3.1-.5.4-.6l.3-.3c.7-1.2 1.5-2.4 2.2-3.5.5-.8 1-1.5 1.5-2.3.1-.2.2-.3.3-.5.4-.4.8-.5 1.3-.3.2.1.4.1.6.2 0 .5-.3.9-.7 1.3-.7.9-1.4 1.9-1.5 3.1-.1.6-.3 1.2-.4 1.8-.3 1.4-.9 2.7-.9 4.1-.4.2-.8.4-1.2.3.3-1.2.6-2.3.9-3.5 0-.2.1-.4-.2-.5-.1 0-.3.1-.3.2-.5.8-1 1.7-1.4 2.5-.3.5-.6 1-.5 1.6-1 .8-1.4 1.8-1.5 3-.3.2-.4.6-.5.9-.4 1.9-1.1 3.7-1.7 5.5l-.3.9c-.2.5-.2.5.4.9.1.1.2.1.3.1-.4.3-.8.5-1.3.6-.4-.2-.7-.6-1.2-.7-.4-.1-.6-.4-.6-.8 0-.3 0-.7-.3-.8-.7-.4-1.4-.7-2.3-.3-1 .5-2 .9-3 1.5-1 .7-2.1.8-3.3 1 .2-.3.5-.5.8-.7 1.2-.5 2.2-1.2 3.4-1.6.5-.2 1-.4 1.3-.7.6-.5 1.5-.6 2.2-1.1.2-.1.4 0 .5.1.4.3.7.2.8-.2.3-1.5 1.2-2.8 1.1-4.4 0-.2.1-.4.1-.6.3-1.6.7-3.2 1-4.8.1-.8.5-1.7.3-2.6.1-.3.4-.6.3-1 0-.6.4-1.1.3-1.8v-1c.4-.3.3-.8.4-1.3.4-2.1.8-4.2.9-6.3 0-.7.2-1.3.3-1.9.1-.3.3-.5.7-.5.3 0 .7.3.7.6v.8c.2 1.1.2 1.7.2 2.4z" />
                                                <path class="st10"
                                                    d="M350.7-40.9c1.1.4 2.2.7 3.3 1.1.4.1.7.3 1.1.5.4.2.5.4.3.9-.2.6-.5 1.2-.7 1.9-.6 1.9-1.2 3.9-1.6 5.8-.6 2.8-1.7 5.5-2.7 8.2-.5.1-1-.2-1.5-.4l-3.6-1.5c-.3-.1-.4-.4-.3-.7 1-2.5 1.9-5 3-7.5.9-2.1 1.5-4.3 2.1-6.5.2-.5.4-1.2.6-1.8zM345.7-63.8c.1-1.4.5-2.8.9-4.1.5-1.7 1.1-3.5 1.7-5.2.3-1 .4-.9 1.4-1.1 2.5-.4 5-.2 7.4-.4.1.7-.2 1.4-.4 2.1l-1.8 6.6c-.5 2.2-.6 2.1-2.8 2.1h-6.4zM349.2-48.8c-1.4-.2-2.8-.6-4.1-1-.5-.2-1.1-.4-1.6-.5-1.1-.3-1.1-.3-.8-1.3.9-3 1.5-6.1 2.3-9.2h1.8c1.7 0 3.3-.1 5 .2 1.4.3 1.5.2 1.1 1.6-.1.3-.2.7-.3 1-.7 2-1.4 3.9-2.1 5.9-.2.7-.4 1.4-.6 2-.2.6-.4 1-.7 1.3zM291.9.2l6.3 1.2c.6.1.9.4 1 1 .3 1.7.8 3.4 1.3 5 .2.7.3 1.5.4 2.2.1 1 .4 1.9.6 2.8-1 0-1.9-.4-2.6-1.1-1.2-1-2.6-1.6-4-2.1-1.1-.4-2.1-.8-3.2-1.1-.7-.2-1-.7-.8-1.4.1-.7.2-1.3.3-2 .2-1.4.5-2.9.7-4.3-.2-.1 0-.2 0-.2zM368.7-60.7c.1-.4.2-.9.3-1.3.6-2.2 1-4.4 1.4-6.7.2-1.3.5-2.6 1.1-3.9 1.7.5 3.1 1.6 4.7 2.1.2.3.3.6.2 1-.8 2.8-1.2 5.7-2.2 8.4 0 0 0 .1-.1.1-.2.6-.1 1.4-.7 1.9-.6-.2-1.3-.4-1.8-.7-1-.4-2-.6-2.9-.9zM367.8-41.7c-1.1-.5-2.2-1.1-3.3-1.6-.8-.4-.9-.6-.6-1.5.6-1.8 1.3-3.5 1.9-5.3l1.2-3c.2-.6.4-1.2.2-1.9-.2-.5 0-1.1 0-1.7.2.1.5.1.7.2 1.2.5 2.3 1.2 3.6 1.7.4.1.6.5.4 1-1.4 3.7-2.4 7.6-3.6 11.4 0 .3-.2.5-.5.7zM361.1-59.2c-.7 3-1.5 6-2.5 8.9-.2.7-.4 1.5-.6 2.2-.1.3-.2.7-.3 1-.1.3-.4.4-.7.4-.3-.1-.7-.2-1-.3-1-.3-2-.6-3.1-.7 0-.2-.1-.4 0-.6.7-1.9 1.2-3.9 1.9-5.8.6-1.8 1.4-3.5 1.8-5.3.1-.5.3-.7.9-.6 1.2.2 2.4.4 3.6.8zM356.5-18.8c1.1-2.7 2-5.5 2.7-8.4.6-2.5 1.4-5 2.2-7.4.1-.2.2-.5.3-.7.2-.4.5-.4.9-.2.5.4 1 .8 1.6 1.2l.9.6c.2 1.1-.3 2.1-.7 3.1-.7 2.1-1.5 4.2-2.4 6.2-.8 2-1.5 4-2.5 5.9-.6 1.2-1 1.1-2 .5-.4-.3-.7-.5-1-.8zM324 16.1c-1.2.7-2.4 1.3-3.6 2-3.2 1.8-6.6 2.9-10.1 3.7-.6.1-.9 0-.9-.6 0-.8-.1-1.5.1-2.3.2-.8.1-1.6.2-2.4h.8c2.3.6 4.5.3 6.8-.2 1.3-.2 2.5-.6 3.8-1 .9-.2 1.7-.5 2.6-1.1 0 .7.2 1.3.3 1.9zM361.1-74.8c1 .1 1.9.2 2.9.3.4 0 .6.3.5.8-.2.9-.4 1.8-.7 2.7-.7 2-.9 4.1-1.4 6.1-.2.7-.1 1.5-.2 2.3-1.1-.5-2.4-.5-3.5-.9-.5-.2-.7-.4-.6-.8 1.1-3.4 1.7-6.9 2.9-10.2 0-.1 0-.2.1-.3z" />
                                                <path class="st46"
                                                    d="M346.1 7.8c-.6-1.1-1.4-2.1-2.1-3.2-.3-.5-.4-.6.1-1 1.3-1.3 2.3-2.9 3.2-4.5.7-1.1 1.3-2.3 2.2-3.3h3.1c-.9 1.5-1.7 3.1-2.6 4.6-.6 1-1 2.1-1.7 3.1-.7 1.1-1.1 2.4-1.6 3.6-.1.4-.3.6-.6.7z" />
                                                <path class="st41"
                                                    d="M324.7 22.8c-2.4 1.2-4.8 2.3-7.4 3.3l-2.4.9c-1.4.5-2.9.7-4.4 1-.3.1-.6 0-.9 0-.3 0-.4-.3-.4-.5.1-.6.4-1 1-1.2.8-.2 1.7-.4 2.5-.7 2.2-.7 4.4-1.4 6.5-2 1.5-.5 2.8-1.5 4-2.5.5-.4.9-.8 1.5-1v2.7z" />
                                                <path class="st41"
                                                    d="M324.7 19.2c-.9.2-1.5.9-2.1 1.4-1.3 1.2-2.8 1.9-4.5 2.5-2.4.9-4.9 1.5-7.4 2.3-.2.1-.4.1-.6.2-.5.1-.8-.2-.7-.7.1-.3.2-.6.2-.9.1-.3.2-.4.5-.5.7-.2 1.5-.4 2.2-.6 1.8-.3 3.5-1 5.2-1.7 2.2-.8 4.2-2.1 6.2-3.2.1 0 .2-.1.3-.1.4.3.6.8.7 1.3zM333.9-4.4c-.7-.9-1.4-1.7-2-2.7-.3-.5-.7-.8-1.1-1.2-1.9-1.8-3.7-3.8-5.3-5.9-.5-.7-.5-1 .1-1.6.3-.3.5-.3.8 0 .7.7 1.4 1.4 2 2.1.2.2.3.5.6.7 2 1.6 3.8 3.6 5.6 5.4.2.2.4.3.6.5.1.8-.2 1.5-.5 2.3-.3.2-.5.4-.8.4z" />

                                                <path class="st10"
                                                    d="M352.5-4.1h-3.1c.7-1.4 1.5-2.7 2.2-4.1.9-1.7 1.9-3.4 2.8-5.2.2-.4.4-.9.6-1.4 2.6.8 2 1.2 1.3 2.7-1.2 2.7-2.4 5.4-3.8 8z" />
                                                <path class="st41"
                                                    d="M288.9 23.4c.6 0 1.2.2 1.8.4 1.6.5 3.2.8 4.9.8h5.5c.8 0 1 .1 1 .7 0 .8-.2 1.1-.9 1.2-2.2.1-4.3.4-6.5.3-1.5-.1-2.9 0-4.4-.5-.4-.1-.9-.1-1.4-.2v-2.7zM351.8-21.6c.3-1.1.6-2.2 1-3.2.9-2.3 1.5-4.6 2.1-7 .4-1.8 1-3.5 1.6-5.2 0-.1.1-.3.2-.4.3-.7 1.2-.9 1.7-.3.1.1.1.3.1.4 0 .1-.1.2-.1.3-1.4 3.7-2.5 7.4-3.5 11.2-.5 1.7-1 3.4-1.8 5-.5-.2-.9-.4-1.3-.8zM343.4-60.4c-.1 1.8-.7 3.6-1.1 5.4-.3 1.2-.6 2.4-1 3.5-.2.8-.3.8-1.1.7-.6-.1-.9.5-.8 1 .1.3.3.4.5.5.7.4.9.8.6 1.6-.1.3-.4.5-.9.4-.2 0-.4-.2-.6-.2v-3.2c0-.4-.2-.7-.3-1 0-.3 0-.6.1-.9.6-1.2.9-2.6 1.3-3.9.3-1.2.8-2.3.8-3.6.2-.2.4-.2.7-.2.6-.1 1.2-.1 1.8-.1zM302.9 12.4c0-.2 0-.4-.1-.6-.3-1.1-.5-2.1-.6-3.3 0-.8-.3-1.6-.6-2.4-.4-1.4-.8-2.8-1-4.3.1-.1.2-.2.3-.2.7 0 1.4-.3 1.9.1s.5 1.2.6 1.8c.3 1 .6 1.9.8 2.9.4 1.3.7 2.6.7 4 0 .7.1 1.4.2 2.1-.6.4-1.4-.1-2.2-.1zM354-20.7c.3-.9.7-1.7.9-2.6.5-1.7 1.1-3.4 1.5-5.1.6-2.5 1.5-4.8 2.3-7.3.2-.5.4-.9.6-1.4.1-.2.3-.2.5-.1.3.1.5.2.5.5 0 .2-.1.4-.1.6-.2.8-.4 1.7-.7 2.5-.9 2.5-1.5 5.1-2.2 7.7-.5 1.8-1.1 3.5-1.7 5.2l-.3.9c-.6 0-1.2-.1-1.3-.9z" />
                                                <path class="st10"
                                                    d="M325.3 8.5c0 .5-.1.7-.4.9-.9.7-1.1.7-1.5-.4-.4-1-.8-2-1.2-3.1-.7-1.9-1.6-3.7-2.7-5.5-.7-1.1-1.4-2.2-2.5-3.1-.2-.1-.3-.3-.4-.4-.1-.1-.2-.3-.2-.4-.1-.3 0-.5.2-.7.2-.2.4 0 .5.1 1.6 1.5 3.2 3 4.2 5 .5 1 1.2 1.9 1.8 2.8.8 1.3 1.4 2.7 1.9 4.1.2.3.3.6.3.7z" />
                                                <path class="st41"
                                                    d="M364.2-57.9c-.1 1.1-.5 2.1-.8 3.1-.4 1.6-.9 3.1-1.3 4.7-.3.9-.5 1.9-.7 2.8-.1.4-.2.9-.4 1.3-.3.9-.8 1.1-1.5.4-.3-.2-.3-.5-.2-.8.3-1.4.6-2.8 1-4.1l1.2-3.9c.4-1.3.6-2.7.9-4 .7-.2 1.3 0 1.8.5zM306 12.7c.1-2.4-.3-4.6-1-6.9-.4-1.3-.7-2.6-1-3.9.1-.1.2-.1.2-.1 1.7-.3 1.8-.2 2.3 1.4.5 1.7.9 3.4 1.2 5.2.2 1.1.2 2.1.3 3.2 0 .5.1 1 .2 1.5-.8-.1-1.6.1-2.2-.4zM363.5-62.3c.4-2.2.8-4.5 1.3-6.7.3-1.5.8-2.9 1.2-4.4.2-.5 1.3-.7 1.7-.3.1.2.1.4.1.6-.6 1.6-.8 3.3-1.2 5-.5 2-.9 4.1-1.1 6.1-.8.2-1.4-.2-2-.3z" />
                                                <path class="st46"
                                                    d="M300.2 36.3c-1.3.1-2.4-.3-3.6-.7-2.4-.9-4.8-2-7.2-2.9-.5-.2-.6-.6-.5-1.1 0-.3.3-.5.5-.4.4.2.8.4 1.3.5 2.2.7 4.4 1.5 6.7 1.9 1 .2 2 .6 3.1.9-.1.6-.4 1.2-.3 1.8z" />
                                                <path class="st41"
                                                    d="M288.9 26.8c.8.2 1.7.4 2.5.6 2.3.4 4.5.5 6.8.1.7-.1 1.5-.1 2.3-.1 1.6-.1 1.1.3 1 1.3-.1.4-.3.5-.6.6h-6.5c-1.4 0-2.7-.2-4.1-.5-.4-.1-.9-.1-1.4-.2v-1.8z" />
                                                <path class="st10"
                                                    d="M367.2-31.7c-.2.6-.4 1.3-.7 2-1.3 3.4-2.6 6.7-4 10.1-.1.4-.3.7-.5 1.1-.3.6-.7 1.3-.7 2 0 .4-.4.7-.7.6-.5-.1-.9-.5-.8-1 .1-.2.1-.5.3-.7 1.1-1.7 1.7-3.6 2.4-5.4 1.3-2.9 2.3-6 3.4-9 0-.1.1-.2.1-.3.1-.2.2-.3.5-.3.4.2.7.5.7.9z" />
                                                <path class="st41"
                                                    d="M342.4-63.5c0-1.4.5-2.8.9-4.1.1-.6.3-1.2.4-1.8.1-1.2.8-2.2 1.5-3.1.3-.4.6-.8.7-1.3.4 0 .9-.2 1.4.2-.4 1.3-.8 2.7-1.3 4-.5 1.5-.9 3-1.3 4.5-.1.4-.1.9-.2 1.3-.7.2-1.4.4-2.1.3zM332.6-1.7c-.8-1.7-1.9-3.2-3.2-4.6-.9-1-1.7-2-2.5-3.1-.7-1-1.5-1.8-2.3-2.6-.2-.3-.5-.5-.7-.8-.2-.3-.2-.7 0-1 .1-.2.4-.3.6-.2.3.3.6.5.8.9 1.3 1.9 2.9 3.5 4.6 5.1.8.8 1.5 1.7 2.2 2.5.5.6 1 1.3 1.5 1.9 0 .9-.3 1.5-1 1.9zM336.3-51.5c-.1 0-.2-.1-.3-.1-.6-.4-.6-.4-.4-.9l.3-.9c.6-1.8 1.3-3.6 1.7-5.5.1-.3.2-.7.5-.9.6 0 1.2-.4 1.9-.3-.3 2-.9 4-1.5 5.9-.3.8-.5 1.7-1 2.3-.3.3-.8.4-1.2.4z" />
                                                <path class="st10"
                                                    d="M349.3-40.9c-.2.7-.5 1.6-.7 2.5-.7 3-2 5.7-3.1 8.6-.4 1.1-.8 2.2-1.3 3.3-.2.5-.4.9-.6 1.4-.1.1-.3.2-.4.2-.2 0-.4-.2-.4-.4v-.6l2.7-6.6c1-2.4 1.7-4.8 2.4-7.2.1-.4.2-.8.4-1.2.1-.4.4-.4.7-.3.2-.2.3-.1.3.3zM374-52.7c0 .2-.1.4-.1.7-.8 3.5-1.9 6.8-3.1 10.2-.1.2-.1.4-.2.6-.1.3-.2.6-.6.6-.4 0-.7-.5-.6-.9.1-.5.2-1.1.4-1.6l3-9.3.3-.9c.1-.2.3-.3.5-.3s.3.2.4.4c-.1.2 0 .3 0 .5z" />
                                                <path class="st41"
                                                    d="M358.6-78.5c-.9 0-1.7 0-2.6.2-1.4.2-2.8.3-4.2.4-.5 0-.9.1-1.4.2-.5.1-.8-.2-.7-.7 0-.2.1-.5.2-.7.1-.4.4-.6.8-.6 2.8-.1 5.7-.5 8.5-.3 0 .6-.4 1-.6 1.5zM366-57.4c-.2.7-.3 1.4-.4 2.1-.1 1.3-.4 2.6-.9 3.8-.8 2-1.5 4-2.2 6-.1.2-.2.5-.4.7 0 .1-.2.1-.3.1-.1 0-.2-.1-.2-.2-.1-.4 0-.7.1-1.1.2-.7.3-1.4.6-2 .5-1.3.5-2.7 1-4 .7-1.9 1.1-3.8 1.7-5.7.4 0 .7.2 1 .3zM366.2-61.7c.1-1.9.5-3.8.9-5.7.3-1.4.6-2.9 1-4.3.1-.5.3-1 .4-1.5.1-.3.3-.4.6-.3.3.1.5.2.5.5 0 .2 0 .5-.1.7-.7 2.1-.9 4.4-1.4 6.5-.3 1.4-.7 2.9-1 4.3-.3.2-.6.2-.9-.2zM292.5-3.4c1.2.2 2.3.3 3.5.3 1 0 1.6.4 1.9 1.4.6 1.9.6 1.9-1.3 1.6-1.4-.2-2.9-.6-4.3-.9-.1-.9-.1-1.7.2-2.4z" />
                                                <path class="st10"
                                                    d="M342.3-21.4v.4c-.6 2.1-1.2 4.2-2 6.2-.6 1.5-1.1 3.1-1.5 4.6-.2.9-.6 1.7-.9 2.6-.1.2-.3.3-.5.3-.3-.1-.4-.3-.4-.6 0-.1 0-.3.1-.4 1.3-3.8 2.6-7.7 3.8-11.5.2-.5.3-1.1.5-1.6.1-.2.3-.3.5-.2.1 0 .3.2.4.2z" />
                                                <path class="st41"
                                                    d="M314.6-7.5c.7-.6 1.5-1.1 2.1-1.7 1.1-1 2.1-2.1 2.9-3.4l.6-.9c.2-.2.5-.2.7 0 .4.3.6.8.3 1.2-.3.4-.7.8-1 1.2-1.2 1.6-2.4 3.2-3.5 4.8-.8-.2-1.6-.4-2.1-1.2zM348.2-45.4c-1-.1-2-.4-2.9-.7-1-.3-2-.6-3.1-.8-.7-.1-.7-.3-.5-.9.1-.2.1-.4.2-.6.1-.2.3-.3.5-.3.5 0 1 .1 1.5.2 1.6.6 3.3 1 5 1.3-.2.6-.4 1.2-.7 1.8z" />
                                                <path class="st10"
                                                    d="M355.3-59.6c-.1.6-.3 1.1-.5 1.7-.3.8-.6 1.5-.8 2.3-.1.5-.3 1-.5 1.4-.5 1.3-.9 2.6-1.3 3.9-.1.5-.3 1.1-.5 1.6-.1.2-.3.4-.6.3-.3-.1-.4-.4-.3-.6.2-.9.5-1.8.8-2.6.2-.8.5-1.5.8-2.3.2-.5.4-1 .5-1.4.2-.8.4-1.5.7-2.2.2-.6.4-1.2.6-1.7.1-.3.2-.6.3-.8.1-.2.3-.3.5-.3s.3.2.4.4c-.1.1-.1.2-.1.3z" />
                                                <path class="st41"
                                                    d="M376.7-72c-1.4-.5-2.6-1.3-4-1.9-.6-.2-.7-.7-.6-1.2 0-.2.1-.5.2-.7.1-.3.3-.4.7-.4 1 .2 1.9.6 2.8 1 .5.2.9.4 1.4.5-.1.9-.1 1.8-.5 2.7z" />
                                                <path class="st10"
                                                    d="M311.7 14.6c3.2.2 6.1-.6 9.1-1.5.6-.2 1.1-.6 1.6-.9.2-.1.4-.1.5.1.1.2.2.4 0 .6-.6.4-1.1 1-1.9 1.2-1.2.2-2.4.6-3.5.9-1.9.5-3.9.6-5.9.5-.6 0-1.1-.2-1.6-.3-.2-.1-.3-.3-.2-.5.1-.2.3-.3.5-.2.4.1.9.1 1.4.1zM359.5-74.4c-.1.6-.3 1.2-.5 1.7-.7 2-1.1 4-1.6 6-.2.7-.4 1.5-.7 2.2-.1.3-.2.5-.5.6h-.4c-.1-.1-.2-.2-.2-.4v-.3c.5-1.4.8-2.9 1.2-4.4.4-1.7 1-3.3 1.4-5 .1-.3.2-.6.5-.7.2-.1.4-.1.6 0 .1.1.2.2.2.3zM292.5 30.8H300.3c.7 0 .8.1.8.9 0 .5-.1 1-.1 1.5-.3 0-.5.1-.8 0-2.2-.6-4.4-1.2-6.6-1.9-.3-.1-.8-.1-1.1-.5z" />

                                                <path class="st41"
                                                    d="M308.1 16.4c0 .8 0 1.6-.2 2.4-.2.8-.1 1.7-.1 2.6 0 .7-.2.9-.9 1.1-.7.2-1 0-1-.7v-5.6c.8-.1 1.5.3 2.2.2zM357.7-76.3c-.8.2-1.7.2-2.6.2-1.6.1-3.1-.1-4.7.3-.2.1-.5 0-.8 0-.2 0-.4-.1-.5-.3-.1-.3 0-.5.2-.7.3-.2.6-.2.9-.2 1.7-.1 3.3-.3 5-.5 1-.1 2-.1 3-.1.1.5-.1 1-.5 1.3zM365.7-35c-1-.7-1.9-1.5-2.9-2.2-.4-.3-.5-.7-.4-1.2l.3-.9c.1-.3.4-.4.6-.3.5.2.9.4 1.4.7.7.4 1.3.8 2 1.2-.1 1-.3 1.9-1 2.7z" />
                                                <path class="st10"
                                                    d="M327.3 10.5c-.3 0-.4-.1-.4-.3-.1-.4.1-.8.4-1.1 1-1 1.7-2.1 2.6-3.2.5-.7 1-1.4 1.4-2.2.3-.7.8-1.3 1.3-1.9.1-.1.3-.1.4-.1.2 0 .4.3.3.5-.1.4-.3.8-.5 1.1-.8 1.2-1.3 2.5-2.3 3.6-.2.2-.4.5-.6.7-.5.6-1.1 1.1-1.5 1.7-.3.6-.7.9-1.1 1.2z" />
                                                <path class="st41"
                                                    d="M347.6-43.5c-1.6-.1-3.2-.6-4.8-.8-.4-.1-.8-.1-1.2-.2-.7-.2-.9-1-.4-1.5.2-.2.4-.2.7-.2 1 .3 2 .4 2.9.8 1 .4 2 .7 3.1.7 0 .4.1.9-.3 1.2z" />
                                                <path class="st10"
                                                    d="M368.1-59.5c1.6.2 3 .9 4.4 1.6.4.2.5.5.4 1-.1.2-.1.4-.2.6-.1.4-.4.5-.7.4-.8-.3-1.6-.7-2.4-1-.6-.3-1.3-.5-1.8-1.1l.3-1.5z" />
                                                <path class="st46"
                                                    d="M274.8 25.6c.1 0 .3 0 .4.1 1.5.6 2.9 1.2 4.4 1.7 1.8.6 3.6 1.5 5.3 2.2.1 0 .2.1.3.1.2.1.2.6.1.8-.1.2-.4.2-.5.2-.5-.2-1-.5-1.5-.8-.3-.2-.6-.4-.9-.5-1.4-.6-2.7-1.1-4.1-1.6-1.3-.4-2.3-1.2-3.5-1.8-.1 0-.1-.2-.1-.3 0 0 .1 0 .1-.1z" />
                                                <path class="st10"
                                                    d="M300.5 14.3c-.8 0-1.6-.4-2.2-.9-1-.9-2.1-1.4-3.3-1.8-1.2-.5-2.4-.9-3.6-1.3-.2-.1-.5-.2-.7-.3-.2-.1-.3-.5-.2-.7.2-.2.4-.1.5-.1 1.8.6 3.5 1.3 5.3 1.9.6.2 1.1.5 1.5 1 .8.8 1.7 1.3 2.8 1.3h.3c.2.1.3.2.3.4s-.2.3-.4.4c0 .1-.2.1-.3.1z" />
                                                <path class="st41"
                                                    d="M305.1 16.1v5.2c0 .4 0 .7-.1 1.1 0 .3-.3.5-.7.4-.3 0-.5-.2-.5-.5 0-1.3-.4-2.6-.3-3.9.1-.9-.3-1.7-.3-2.6.7.1 1.3.2 1.9.3z" />
                                                <path class="st10"
                                                    d="M349.4-19.8c-.4.1-.8 0-1.2-.1-1.2-.6-2.5-1.2-3.7-1.8-.6-.3-.6-.6-.3-1.2.1-.2.3-.4.6-.3 1.4.6 2.9 1.2 4.3 1.8.2.1.4.3.6.4-.1.5-.2.9-.3 1.2z" />
                                                <path class="st41"
                                                    d="M352.2-46.4c1.5.3 2.9.7 4.4 1.2.3.1.5.3.5.6 0 .4 0 .8-.4 1.1-.2.2-.5.1-.7 0-1.1-.3-2.2-.7-3.3-1-.2-.1-.5-.1-.7-.1-.2-.6.1-1.2.2-1.8z" />
                                                <path class="st10"
                                                    d="M288.9 11.8c-.1 1-.3 2.1-.4 3.2 0 .3-.2.5-.1.7.1 1.5-.4 3-.3 4.6v.5c0 .2-.2.4-.4.4s-.4-.1-.4-.4c-.1-.5-.1-1 0-1.5.2-.5.2-1.1.2-1.7 0-1.8.3-3.5.6-5.3.1-.5.1-.9.1-1.4 0-.2.2-.4.4-.4s.4.1.4.3c-.2.5-.2.7-.1 1z" />
                                                <path class="st41"
                                                    d="M351.6-43.7c1.5.1 2.9.6 4.2 1.1.3.1.6.3.6.6 0 .4-.1.8-.5 1.1-.1.1-.4.1-.6.1-.5-.2-1-.4-1.6-.5-1-.3-1.9-.6-2.9-1 .3-.6.5-1 .8-1.4z" />
                                                <path class="st10"
                                                    d="M340.8-24.1c0 .3-.2.4-.3.4-.2 0-.5 0-.7-.1-2-.6-4.1-1.2-6.1-1.8-.3-.1-.6-.2-.5-.6.1-.4.4-.6.8-.4 2 .6 4.1 1.2 6.1 1.8.2.1.5.2.6.4.1 0 .1.2.1.3z" />
                                                <path class="st41"
                                                    d="M366.9-38.4c-1.1-.7-2.3-1.3-3.4-2-.5-.3-.6-.5-.5-1 .1-.6.5-.8 1-.6 1.2.6 2.4 1.2 3.6 1.7-.1.8-.3 1.4-.7 1.9zM304.7 34.1c.2-1.2.5-2.3.9-3.4.2-.5.4-.6.9-.6s.7.3.6.7c-.3 1.1-.1 2.2-.5 3.3-.1.3-.1.6-.1.9-.6-.1-1.4-.1-1.8-.9z" />
                                                <path class="st10"
                                                    d="M349.4-61.7h-3.3c-.2 0-.4 0-.6-.1-.1-.1-.2-.2-.2-.4 0-.1.1-.3.2-.3.2-.1.4-.1.6-.1h7.2c.2 0 .4.1.4.4 0 .3-.2.5-.5.5h-3.8z" />
                                                <path class="st41"
                                                    d="M377.3-75.4c-1.4-.6-2.7-1.2-4.1-1.5-.6-.1-.7-.3-.5-.9.2-.6.4-.8 1-.6.9.3 1.8.6 2.7 1 .4.2.8.3 1.3.5-.1.5.1 1-.4 1.5z" />
                                                <path class="st45"
                                                    d="M337.5-51.9c.6-.7.8-1.5 1-2.3.6-1.9 1.2-3.9 1.5-5.9.3 0 .6 0 .9-.1 0 1.2-.4 2.4-.8 3.6-.4 1.3-.6 2.7-1.3 3.9-.1.3-.1.6-.1.9-.3 0-.8 0-1.2-.1z" />
                                                <path class="st10"
                                                    d="M377.9-68.7c-.3 1.5-.6 3-1 4.5-.5 1.8-1.1 3.5-1.4 5.3 0 .2-.1.4-.2.6-.1.1-.1.3-.3.2-.3-.1-.3-.3-.2-.5.4-1.3.8-2.6 1.1-3.9l1.5-6c0-.1.1-.3.1-.4 0-.1.1-.2.2-.1.1 0 .2.1.2.2v.1z" />
                                                <path class="st41"
                                                    d="M302.5 33.8c0-.7.1-1.4.1-2.1.1-1 .3-1.2 1.3-1.2h.3c.4 0 .6.3.5.6-.2.8-.4 1.6-.7 2.3-.1.2-.1.5-.2.7-.4 0-.8-.2-1.3-.3zM362.3-77.6h2.3c.9 0 1 .3.7 1.2 0 .1-.1.2-.1.3-.1.2-.3.3-.5.3-1-.1-2-.3-3-.5 0-.6.1-1 .6-1.3z" />
                                                <path class="st10"
                                                    d="M288.8 6.1c0-.7.1-1.2.2-1.7.3-1.2.5-2.4.7-3.6 0-.1 0-.3.1-.4.1-.2.2-.4.4-.3.3 0 .3.2.2.4-.3 1.7-.5 3.4-.8 5.1-.1.4-.2.9-.3 1.3 0 .1-.1.2-.2.2-.2 0-.3-.1-.3-.3v-.7zM358.6-62.3c.7.2 1.7.4 2.7.7.3.1.4.3.3.6-.1.3-.3.5-.6.6-.1 0-.3 0-.4-.1-.9-.2-1.7-.5-2.7-.5-.5 0-.7-.3-.7-.6.1-.3.3-.5.6-.5.2-.2.4-.2.8-.2z" />
                                                <path class="st41"
                                                    d="M363.2-80h2.1c.4 0 .6.2.6.7 0 .8-.3 1.2-1.1 1-.5-.1-1-.2-1.5-.2h-.8c.1-.6.2-1.1.7-1.5zM339.7-62.9c-.1-.6.2-1.1.5-1.6.5-.8.9-1.7 1.4-2.5.1-.1.2-.3.3-.2.3.1.2.3.2.5-.3 1.2-.6 2.4-.9 3.5-.6-.1-1 .3-1.5.3z" />
                                                <path class="st10"
                                                    d="M358-15.9c-.1.6-.6.9-1 .6l-.9-.6c-.5-.3-.5-.8-.1-1.3.1-.1.3-.2.4-.1.6.1 1.1.4 1.5 1 .1.2.1.3.1.4z" />
                                                <path class="st41"
                                                    d="M305.4 37.1c-.4.2-.7.1-1.1-.1-.2-.1-.5-.3-.4-.6.1-.4.4-.7.7-.7.6 0 1.1.2 1.5.5.1.1.1.4.1.6 0 .2-.2.3-.4.3h-.4z" />
                                                <path class="st45"
                                                    d="M300.2 36.3c-.1-.6.2-1.2.3-1.8.5 0 1 .2 1.3.6 0 .5-.1 1-.1 1.5-.6 0-1.1.2-1.5-.3z" />
                                                <path class="st10"
                                                    d="M325.9 13.1c.3 0 .5.1.5.4.1.6-.5 1.4-1.1 1.6-.1 0-.2 0-.3-.1-.2-.3-.5-.7-.3-1.1.2-.5.7-.8 1.2-.8z" />
                                                <path class="st41"
                                                    d="M368.1-37.7c0-.4.1-.7.2-1 .2-.4.4-.5.7-.4.5.2.7.5.6.9-.1.3-.2.7-.4 1-.1.2-.2.3-.5.3-.2 0-.4-.2-.5-.3 0-.3 0-.5-.1-.5zM368.4-35.4c-.1.3-.3.8-.5 1.3-.1.2-.3.3-.5.2-.2-.1-.4-.2-.4-.4-.1-.7.1-1.3.6-1.8.1-.1.3-.1.4 0 .3.1.4.3.4.7zM351-20h.9c.5.1.7.5.6.9-.2.7-.5.9-1.2.5-.3-.2-.5-.3-.6-.6.1-.2.2-.5.3-.8z" />
                                                <path class="st45"
                                                    d="M351-20l-.3.9c-.6.1-1.1.1-1.3-.6.1-.4.3-.8.4-1.2.5.1 1.1.1 1.2.9z" />
                                                <path class="st41"
                                                    d="M301.7 36.6c0-.5.1-1 .1-1.5h.3c1.2 0 1.4.4.9 1.4-.2.3-.4.4-.7.3-.2-.1-.4-.2-.6-.2z" />
                                                <path class="st45"
                                                    d="M368.1-59.5c-.1.5-.2 1-.4 1.5-.2 0-.4-.1-.6-.1-.6-.3-.7-.6-.6-1.2.1-.2.2-.4.4-.4.5-.1 1-.2 1.2.2z" />
                                                <path class="st10"
                                                    d="M325.9 11.1c0 .2 0 .4-.2.5-.3.2-.6.4-.9.4-.3 0-.5 0-.6-.3-.1-.3 0-.5.2-.7.3-.2.6-.4.9-.5.3 0 .6.3.6.6z" />
                                                <path class="st41"
                                                    d="M354.6-18.2c0 .4-.4.9-.7.9-.4 0-.7-.3-.8-.8v-.4c.1-.5.6-.7 1-.3.3.2.5.3.5.6zM307.2 15.2c-.4 0-.7-.1-1-.3-.2-.1-.2-.3-.2-.5.1-.2.3-.3.5-.3.3.1.6.2.9.2.2.1.5 0 .6.4 0 .2-.4.5-.8.5z" />
                                                <path class="st10"
                                                    d="M374.9-56c0 .4-.1.7-.4.9-.2.1-.4.1-.6 0-.1-.1-.2-.3-.2-.4.1-.3.2-.7.3-1 .1-.2.2-.3.5-.3.2 0 .3.2.4.4v.4z" />
                                                <path class="st41"
                                                    d="M350.4-46.6c.1 0 .3.1.3.2.2.4-.1.8-.2 1.1-.1.2-.4.3-.7.2-.1 0-.2-.1-.3-.1-.2-.4.1-.7.2-1 .2-.4.4-.4.7-.4zM361.4-79.5c0 .5-.2.8-.6 1-.1 0-.3 0-.4-.1-.1-.1-.2-.3-.2-.4 0-.3.2-.6.4-.8.1-.1.3-.1.4-.1.3 0 .3.2.4.4zM342.7-61.6c-.3 0-.6 0-.8-.1-.1 0-.2-.1-.1-.2 0-.1.1-.2.2-.2l.1-.1c.5-.1 1-.2 1.5-.2.2 0 .3.1.3.3 0 .1-.1.3-.2.4-.3.2-.7 0-1 .1zM326.3 16.5c.2 0 .4.1.4.4.1.5-.2 1-.8 1-.1 0-.2-.1-.2-.1-.3-.6.1-1.3.6-1.3zM305 14.4c0 .2-.1.3-.3.3-.4-.1-.9-.2-1.3-.3-.1 0-.1-.2-.2-.4 0-.2.1-.3.3-.3.5-.1 1 .2 1.4.4.1.1.1.3.1.3zM287 24.2c0-.3.1-.5.1-.8 0-.1.1-.1.2-.1s.2.1.2.1c.1.6.1 1.2 0 1.8 0 .1-.1.1-.2.1s-.2-.1-.2-.1c-.1-.3-.1-.6-.1-1zM360.5-77c0 .4-.2.6-.6.6-.3 0-.5-.1-.5-.4 0-.4.3-.8.7-.7.2 0 .4.2.4.5zM349.5-43c-.4 0-.6-.2-.6-.5 0-.4.3-.7.6-.7s.5.1.5.4c.1.5-.1.8-.5.8z" />
                                                <path class="st39"
                                                    d="M343.3 15.2h-.3c-.1 0-.1-.1-.1-.2s.1-.2.2-.2.2.1.2.1v.3z" />
                                                <path class="st44"
                                                    d="M322-84.7c2.6.8 5.2 1.5 7.8 2.3.9.3 1.6.9 2.6.9-.1.2-.1.4-.2.6-.9 2.2-1.8 4.5-2.8 6.7-.2.5-.5 1-.6 1.6-.3.2-.3.6-.4.9-.5.5-.7 1.2-.9 1.9-.2.2-.3.4-.3.6-1.1 2.5-1.9 5-2.8 7.6-1.1 3.3-2.1 6.7-3.2 10-.2.6-.3 1.3-.5 1.9-.4.3-.5.9-1 1.1-1.9.7-3.8 1.5-5.6 2.3-.8.3-1.7.5-2.5 1.1-.2.1-.5.1-.7.1-.5-.6-.2-1.3-.3-2 .3-.4.2-.9.3-1.3.4-.6.3-1.2.3-1.8.3-.2.3-.5.3-.8.4-.7.3-1.5.4-2.2.4-.4.3-1 .3-1.5.1-.1.1-.2.2-.3.8-3.3 1.8-6.4 2.8-9.7.5-1.8 1.2-3.6 1.6-5.4.4-.3.3-.8.4-1.2.3-.5.4-1 .5-1.6.2-.4.4-.8.4-1.2.9-1.7 1.5-3.6 2.1-5.5.5-1.7.9-3.5 1.8-5.1z" />
                                                <path class="st45"
                                                    d="M292.5-35.3c-.5-.1-1.1.2-1.5-.3 0-.8.2-1.5.4-2.2.7-2.9 1.2-5.9 2.4-8.6l.3-.9c.1-.4-.2-.7-.6-.7-.4 0-.6.2-.8.6-.4 1.3-.7 2.5-1.1 3.8-.6 2-1 3.9-1.6 5.9-.2.7-.5 1.4-.5 2.2h-.9c.1-1.1.5-2.1.8-3.1.9-2.9 1.4-5.9 2.5-8.8v-.3c0-.2-.2-.4-.4-.4-.3 0-.6 0-.8.3-.2.5-.4.9-.5 1.4-.5 1.6-.9 3.1-1.3 4.7-.6 1.9-1.2 3.9-1.8 5.8h-1.6c.1-.3.2-.7.3-1l2.7-8.7c.2-.7.4-1.5.6-2.2.1-.3-.1-.5-.4-.5h-.6c-2.3-.1-4.6.1-6.8-.3h-.6c0-.5 0-1.1.3-1.6.5 0 1 0 1.5.1 2.2.4 4.4.1 6.7.2.2 0 .4 0 .6-.2.3-.3.5-.8.4-1.3-.1-.5-.5-.4-.8-.5-.4-.1-.8-.2-1.2-.2h-2.9c-.7 0-1.4 0-2.1-.1-.7-.2-1.4-.2-2.1-.2 0-.3.1-.5.3-.7 1.7 0 3.5 0 5.2.1.8 0 1.6 0 2.4.2.4.1.8.1 1.2.1.3 0 .5-.2.7-.5.4-1.1.3-1.3-.9-1.5-.4-.1-.9-.1-1.4-.1-1.2 0-2.5.1-3.7-.1-1.1-.2-2.2-.2-3.3-.2.1-.5-.2-1.1.3-1.5 1.9 0 3.7.4 5.6.3 1 0 2-.1 3 .2.8.2 1 0 1.1-.8.4-1.8.8-3.6 1.5-5.4 1.2-3.2 1.9-6.5 3.1-9.7v-.2c.5.1 1.1-.2 1.5.3-.5 1.4-1 2.9-1.4 4.3-.5 1.5-.9 2.9-1.3 4.4-.5 1.5-.9 3-1.4 4.5-.2.6-.3 1.3-.4 1.9-.1.5.1.8.7.8.8 0 .9-.1 1.2-.9.7-2 1.3-3.9 2-5.9 1-2.9 1.9-5.9 2.9-8.8h.7c-.1.4-.1.8-.2 1.2-1.3 3.9-2.5 7.8-3.8 11.7-.2.7-.5 1.3-.7 2-.2.5 0 .7.6.7.7 0 .8-.1 1.1-.8.6-1.7 1.1-3.5 1.8-5.2.3-.7.7-1.4.9-2.1.8-2.5 1.5-5 1.9-7.5.5.1 1.1-.2 1.5.3l-.3 1.5c-.7 3-1.4 6-2.7 8.8-.6 1.4-1 2.9-1.5 4.3-.2.7 0 1 .7 1 1 0 1.9.1 2.9.1 0 .6-.1 1.1-.6 1.5-.8 0-1.5 0-2.3-.1-1.9 0-1.4-.1-1.9 1.6-.2.6.1.8.7.8 1 0 1.9.1 2.9.1 0 .3.1.7-.3.9-.5-.1-1 0-1.5-.2-.5-.1-1-.1-1.5-.1-.9 0-1.1.1-1.5 1.2-.1.3.1.6.4.6 1.3.1 2.5.4 3.8.3 0 .6-.3 1-.6 1.5-.6 0-1.1 0-1.7-.1-.7-.1-1.5-.1-2.3-.1-.3 0-.6.2-.7.5-.4 1.2-1 2.3-1.2 3.6-.4 1.6-.8 3.1-1.2 4.7-.5 1.1-1 2.3-.9 3.6zm2.6-16.9c.6 0 .8-.1 1.1-.6l.3-.9c.2-.6-.1-.9-.8-.9-.5 0-.9.2-1 .7l-.3.9c-.2.5.1.8.7.8zm-.5.7h-.3c-.6.1-1.1 1.4-.7 1.9.1.1.2.1.2.2.4.2.9 0 1.1-.3.2-.3.3-.5.4-.8.1-.7-.1-1-.7-1zm-1.3-3.1c-.3 0-.6 0-.7.3-.2.5-.4.9-.4 1.4 0 .2.2.4.4.4.5.1.8 0 1-.4.2-.4.3-.8.4-1.1.1-.3-.1-.5-.4-.5-.1-.1-.2-.1-.3-.1zm-1.6 4.9c.5 0 .7 0 .8-.3.2-.5.4-.9.5-1.4.1-.2-.1-.4-.3-.4-.5-.1-.8.1-1 .5-.1.3-.2.7-.3 1-.1.3.1.6.3.6z" />
                                                <path class="st42"
                                                    d="M310.9-45.1c.2 0 .6 0 .7-.1.7-.6 1.6-.8 2.5-1.1 1.9-.7 3.8-1.5 5.6-2.3.5-.2.7-.7 1-1.1.4.1.7-.1 1-.2.8-.4 1.7-.7 2.5-1 1.2-.1 2.3-.3 3.3-1 .9-.6 2-1 3-1.5.9-.5 1.6-.1 2.3.3.3.2.3.5.3.8 0 .4.2.7.6.8.5.1.8.5 1.2.7-.8.5-1.6 1.3-2.7 1.3-.2 0-.4.1-.6.2-3.5 1.6-7 3.2-10.3 5.3-1.9 1.2-3.8 2.3-5.9 3.1-.9.3-1.7.7-2.5 1.1-.5.3-1.1.5-1.3 1.2-.3.3-.4.7-.4 1.1h.1c-.5.9-.9 2.8-.8 3.8.6-.2 1.2-.5 1.8-.8 1.2-.5 2.4-1 3.7-1.4 2-.5 3.9-1.4 5.7-2.5 1.1-.7 2.2-1.3 3.4-1.7 1-.4 2-.9 3-1.5 1-.7 2-1.3 3-2.1 1.1-.8 2.3-1.5 3.8-1.2.3.1.6 0 .9 0 .3 0 .5-.1.7-.3.2-.1.4-.1.6-.2 0 .3 0 .5.1.8v1.5c-.7 0-1.2-.5-1.9-.5-1.3.1-2.6.3-3.7 1.2-1.6 1.3-3.4 2.5-5.3 3.2-1.8.7-3.4 1.6-5 2.6-1.3.8-2.7 1.4-4.2 1.8-2 .5-3.8 1.3-5.7 2.2-.7.3-1.2.7-1.5 1.4-.7 1.4-1.7 2.7-2.5 4-.7 1-1.4 2-1.8 3.2-.2.6-.8 1.1-.9 1.7h.1c-.3 0-.3.1-.3.3-.2 0-.3.1-.3.3-.3.1-.4.4-.5.6-.6.7-1.2 1.5-1.6 2.3-.8.7-.9 1.8-1.4 2.7-.2.3-.2.7-.4 1-.1.2-.3.4-.6.3-.3-.1-.5-.4-.5-.7v-.3c.5-1.4 1-2.8 1.9-4 .9-1.2 1.8-2.5 2.7-3.7.2-.3.5-.7.6-1 .7-1.7 1.7-3.1 2.7-4.6.3-.4.6-.8.9-1.3.4-.5.6-1.1.8-1.8.4-1.9.9-3.8 1.3-5.6.4-1.7 1.4-2.8 3-3.4 2.8-1 5.4-2.3 7.9-4 3.3-2.2 6.9-3.9 10.6-5.4.1 0 .2-.1.3-.1 1-.4 1.2-.8.7-1.9 0-.1-.2-.2-.2-.2-.5.3-1.1-.2-1.5 0-2.9 1.5-5.8 2.9-8.9 4-1.8.6-3.6 1.3-5.4 2.1-1.7.7-3.4 1.6-5 2.6-1 .6-1.8 1.5-2.3 2.6-.7 1.5-1.5 3-2.1 4.6-.4 1.2-1 2.3-1.5 3.5-.4.9-.8 1.9-1 2.9-.1.7-.4 1.3-.9 1.8-.2.2-.3.4-.5.6-1 1.1-1.7 2.4-2.3 3.8-.6 1.6-1.4 3.1-2.5 4.3-.1.1-.3.3-.5.4-.2-.8 0-1.5.5-2.2 0-.2 0-.4.1-.6.5-.2.7-.7.9-1.2.3-.6.6-1.3.8-2 .3-.8.8-1.5 1.3-2.2.5-.6 1-1.2 1.3-2 .5-.3.6-.7.6-1.2.3-.7.6-1.4.7-2.1.3-.3.5-.7.6-1.2.3-.3.5-.8.6-1.2.6-1.6 1.3-3.1 2-4.6l.9-1.8c.5-1.4 1.4-2.4 2.6-3.2z" />

                                                <path class="st10"
                                                    d="M296.2-72.4v.2c-1.2 3.2-2 6.5-3.1 9.7-.6 1.8-1.1 3.6-1.5 5.4-.2.8-.4 1-1.1.8-1-.2-2-.2-3-.2-1.9.1-3.7-.3-5.6-.3-.1-.9.2-1.8.4-2.7.3-1.7.7-3.5 1.2-5.2.6-2.6 1.7-5.1 3.2-7.4l.1-.1c1.1-1.2.7-1.4 2.5-1 .1 0 .3.1.5.1 1.4-.1 2.7.4 4.1.4.6.1 1.4.4 2.3.3zM316.7-70.2c-.4 1.8-1 3.6-1.6 5.4-.9 3.2-2 6.4-2.8 9.7 0 .1-.1.2-.2.3-.5-.1-1-.3-1.5-.3-1.8 0-3.5-.3-5.3-.4.8-3.2 1.6-6.4 2.5-9.6.5-1.8 1.2-3.6 1.6-5.4.1-.4.4-.6.8-.6h.9l5.1.9h.5zM322-84.7c-.8 1.6-1.3 3.4-1.9 5.1-.6 1.9-1.2 3.7-2.1 5.5-1-.1-2-.2-3-.4-1.2-.2-2.4-.5-3.6-.6-.3 0-.5-.3-.4-.7.2-.8.3-1.6.6-2.3.9-2.8 1.6-5.7 2.5-8.6.1-.4.4-.8.6-1.2 2.2.4 4.5.8 6.7 1.2.5.1.6 0 .9-.5.1-.3.3-.5.6-.7h.4c-.5 1-1.1 2-1.3 3.2zM280.6-48.8h.6c2.3.4 4.6.2 6.8.3h.6c.3 0 .4.2.4.5-.2.7-.4 1.5-.6 2.2l-2.7 8.7c-.1.3-.2.7-.3 1-2-.2-3.9-.4-5.9-.6-.3 0-.6-.3-.5-.6.4-1.2.1-2.5.5-3.8.2-.8.2-1.6.3-2.4.1-1.2.4-2.3.4-3.5.1-.5.3-1.1.4-1.8zM268-38.1c.1-1.6.5-3.2.8-4.8.3-1.8.7-3.6 1.1-5.3 0-.2.1-.4.2-.6.1-.4.3-.6.8-.6.7 0 1.3-.1 2 .1 1.5.3 2.9.2 4.4.3.2 1.1-.2 2.2-.3 3.3-.1 1.1-.4 2.1-.5 3.1l-.6 4.5c0 .2-.1.4-.1.6-.2.4-.4.7-.9.6-.7 0-1.4 0-2.1-.2-1.3-.3-2.6-.5-3.9-.7-.5 0-.8-.1-.9-.3zM297.7-90.8c1.2.1 2.3.3 3.5.4.3 0 .6.3.5.6-.1.7-.3 1.5-.5 2.2-.5 1.4-.9 2.8-1.5 4.2-.7 1.7-1.2 3.4-1.8 5.2-.2.6-.2 1.2-.3 1.8-1.2 0-2.4 0-3.6-.2-1-.2-2-.1-3-.1-1.3 0-1.3-.5-.7-1.4 1-1.7 2.1-3.4 3.1-5.1.3-.5.6-1 .8-1.5.8-1.9 2.1-3.5 3-5.3 0-.2.3-.5.5-.8zM310.9-45.1c-1.2.8-2.1 1.9-2.6 3.3-.2.6-.6 1.2-.9 1.8-.8 1.5-1.4 3-2 4.6-.2.4-.3.9-.6 1.2-.9-.1-1.9-.2-2.8-.4-.7-.1-.9-.5-.8-1.2.3-1.7.6-3.4.9-5 .4-1.9.8-3.8 1.2-5.8l.3-.9c2.3.1 4.6.3 7 .4h.1c0 .6-.2 1.3.2 2zM292.5-35.3c-.1-1.3.4-2.5.7-3.7.4-1.6.8-3.1 1.2-4.7.3-1.2.9-2.4 1.2-3.6.1-.3.3-.5.7-.5.8 0 1.5 0 2.3.1.6.1 1.1.1 1.7.1.1 1-.4 2-.6 3-.6 2.7-1.2 5.3-1.8 8 0 .1 0 .3-.1.5-.2.7-.4.9-1.2.9-1.5-.1-2.8-.1-4.1-.1zM302.6-55.8c-1 0-1.9 0-2.9-.1-.7 0-.9-.3-.7-1 .5-1.4.8-2.9 1.5-4.3 1.3-2.8 2.1-5.8 2.7-8.8l.3-1.5h2.9c.3 0 .4.2.4.5-.1.4-.1.8-.3 1.2-.8 2.2-1.1 4.6-1.8 6.9-.5 1.6-.9 3.3-1.5 4.9-.1.8-.1 1.6-.6 2.2zM304.8-75.7c.3-1.4.6-2.9 1-4.3.2-.9.6-1.7.9-2.6.7-1.8 1.4-3.6 1.8-5.5.1-.2.2-.5.2-.7.1-.3.3-.4.6-.3.6.2 1.2.2 1.8.3.1.4 0 .8-.1 1.2-.8 2.5-1.5 5-2.1 7.5-.3 1.2-.5 2.5-.8 3.7-.2.9-.5 1.1-1.4.9-.6-.2-1.3-.2-1.9-.2z" />
                                                <path class="st41"
                                                    d="M299.9-71.8c-1 2.9-1.9 5.9-2.9 8.8-.7 2-1.3 3.9-2 5.9-.3.8-.4.9-1.2.9-.5 0-.7-.3-.7-.8.1-.6.2-1.3.4-1.9.4-1.5.9-3 1.4-4.5.4-1.5.9-2.9 1.3-4.4.5-1.4.9-2.9 1.4-4.3h1.5c.4 0 .6.1.8.3z" />
                                                <path class="st45"
                                                    d="M262.5-12.8V-14c0-.8.1-1.6.3-2.4.4-1.6.6-3.2.6-4.8 0-.4-.1-.7-.6-.7-.4 0-.8-.2-1-.6-.2-.3-.3-.7-.1-1 .1-.4.5-.5.8-.5.5-.1.9.2 1.4.4.5-1.1.6-2.3.8-3.5.2-1.2.5-2.5.7-3.7.2-1.2.3-2.4.5-3.6h1.2c-.3 2.4-.6 4.7-1.1 7.1-.4 2-.9 4-1.3 6-.2.9-.1 1.9-.4 2.9l-.6 3.3c-.1.6-.1 1.2 0 1.8 0 .3 0 .7-.1 1-.7.5-.8.5-1.1-.5z" />
                                                <path class="st41"
                                                    d="M299-76.3c.7-2.5 1.5-5 2.5-7.4.7-1.7 1.2-3.5 1.7-5.2.3-1 .7-1 1.4-.9.3 0 .5.3.4.7-.3 1.2-.6 2.4-1 3.5-1 3-1.8 6.2-2.6 9.2v.3h-1.6c-.3.1-.6 0-.8-.2zM302-71.7c-.4 2.6-1.1 5-1.9 7.5-.2.7-.6 1.4-.9 2.1-.7 1.7-1.2 3.4-1.8 5.2-.3.7-.4.8-1.1.8-.6 0-.8-.2-.6-.7.2-.7.5-1.3.7-2 1.3-3.9 2.5-7.8 3.8-11.7.1-.4.2-.8.2-1.2h1.6z" />
                                                <path class="st10"
                                                    d="M294.1-15.4c.2-1.5.7-3 1-4.4.6-2.7 1.3-5.4 1.7-8.1.1-.7.3-1.4.5-2.1.1-.3.2-.6.6-.6.4 0 .7.1.9.4.1.2.1.4.1.6-.3.9-.4 1.8-.6 2.7-.2 1.3-.6 2.7-.9 4-.3 1.3-.6 2.6-.6 3.9-.8.7-1.1 1.7-1.7 2.5-.3.3-.5.8-1 1.1z" />
                                                <path class="st41"
                                                    d="M280.9-52.5c.7 0 1.4 0 2.1.2.7.2 1.4.1 2.1.1h2.9c.4 0 .8.1 1.2.2.3.1.7.1.8.5.1.5-.1.9-.4 1.3-.1.1-.4.2-.6.2-2.2-.1-4.5.2-6.7-.2-.5-.1-1-.1-1.5-.1.1-.7.1-1.5.1-2.2zM281.5-55.2c1.1 0 2.2.1 3.3.2 1.2.2 2.4.1 3.7.1.5 0 .9 0 1.4.1 1.2.2 1.3.4.9 1.5-.1.3-.3.5-.7.5-.4 0-.8 0-1.2-.1-.8-.3-1.6-.2-2.4-.2-1.7 0-3.5 0-5.2-.1v-1.5c-.1-.1 0-.4.2-.5zM311.8-53.4c0 .7 0 1.5-.4 2.2-2.3 0-4.7-.5-7-.4-.1-.9.3-1.7.6-2.4.5 0 .9-.1 1.4.1 1 .3 2 .3 3 .2.9 0 1.7.1 2.4.3zM277.8-50.6h-.8c-2 .1-3.9-.4-5.9-.4-.5 0-.6-.2-.6-.7 0-.1.1-.3.1-.4.1-.4 0-.9.3-1.1.4-.3 1-.2 1.5-.1 1.9.3 3.7.6 5.6.6.2.7 0 1.4-.2 2.1zM287-35.9c.6-1.9 1.2-3.9 1.8-5.8.5-1.6.9-3.1 1.3-4.7.1-.5.3-1 .5-1.4.1-.3.4-.4.8-.3.2 0 .4.2.4.4v.3c-1.1 2.9-1.6 5.9-2.5 8.8-.3 1-.7 2-.8 3.1-.5-.1-1-.4-1.5-.4zM302.2-76.1c.3-1.2.5-2.4.8-3.5.6-2.2 1.4-4.5 2-6.7.3-.9.4-1.8.6-2.7.1-.6.9-.8 1.3-.4.1.1.2.3.2.4 0 .2-.1.5-.2.7-.6 1.7-1.1 3.5-1.8 5.2-.7 1.8-1.2 3.7-1.6 5.5-.1.5-.2 1-.4 1.5-.2.1-.5.1-.9 0zM289.4-35.6c0-.8.2-1.5.5-2.2.7-1.9 1.1-3.9 1.6-5.9.4-1.3.7-2.5 1.1-3.8.1-.4.4-.6.8-.6s.7.3.6.7l-.3.9c-1.2 2.8-1.6 5.7-2.4 8.6-.2.7-.4 1.5-.4 2.2-.5 0-1 .1-1.5.1z" />
                                                <path class="st10"
                                                    d="M284.5-32.6c-1.2.2-2.3-.2-3.4-.4-.5-.1-1.1-.2-1.6-.3-.6-.2-1-1.2-.6-1.7.1-.1.2-.2.4-.2.6 0 1.1-.1 1.7 0 1 .3 2.1.2 3.2.3.3 0 .6.1.8.3-.2.6-.4 1.3-.5 2z" />
                                                <path class="st41"
                                                    d="M278.4-53.4c-1 .1-1.9-.3-2.9-.3-1.3-.1-2.6-.4-3.9-.6-.1 0-.3-.1-.4-.2.2-1.4.2-1.4 1.4-1.4 1.2.1 2.4.4 3.6.3h2.4c.2.8-.3 1.5-.2 2.2z" />
                                                <path class="st10"
                                                    d="M276.7-37.4c.4-1.3.5-2.8.8-4.2.2-.9.4-1.8.4-2.7 0-1.3.6-2.6.7-3.9 0-.1.1-.2.1-.3.1-.1.2-.2.4-.2s.3.1.3.3c0 .2 0 .5-.1.7-.2 1.2-.3 2.4-.5 3.6-.1 1.3-.2 2.5-.4 3.8-.1.7-.2 1.3-.2 2 0 .5-.2.9-.3 1.3-.1.4-.4.4-.7.4-.4-.1-.6-.3-.5-.8zM296.7-73.6c-1.1.1-2.1-.1-3.2-.2-1.4-.1-2.7-.5-4.1-.4-.2 0-.5 0-.7-.1-.2-.1-.4-.2-.3-.5.2-.6.5-.9 1-.9h.5c1.1.4 2.2.3 3.3.3 1.2-.1 2.4.3 3.6.3.1.5 0 1-.1 1.5zM303-29.8c-.3.8-.8 1.4-1.3 2-.6.6-1 1.4-1.3 2.2-.2.7-.5 1.3-.8 2-.2.4-.4 1-.9 1.2-.1-1.1.3-2.2.4-3.3.2-1.2.7-2.4.8-3.7 0-.1.1-.3.1-.4.2-.5.5-.7.9-.6.7.2 1.5.2 2.1.6z" />
                                                <path class="st41"
                                                    d="M311.2-50.3c0 .6.1 1.2-.3 1.8-.3-.1-.7-.3-1-.3-2 .1-4-.4-6.1-.3l.3-1.8h.6c2.2.3 4.4.5 6.5.6z" />
                                                <path class="st10"
                                                    d="M317.6-73c-.1.6-.2 1.1-.5 1.6-1.9-.3-3.9-.5-5.8-.8-.4-.1-.8 0-1.2-.4 0-.2.1-.4.1-.5.2-.7.3-.7 1-.7 1.2 0 2.3.3 3.4.5 1 0 2 .2 3 .3z" />
                                                <path class="st45"
                                                    d="M322.8-88c-.3.2-.4.4-.6.7-.3.5-.4.6-.9.5-2.2-.4-4.5-.8-6.7-1.2 0-.6.1-1.1.6-1.5.4.2.7.3 1.2.3 2.1.3 4.2.6 6.3 1 0 0 0 .1.1.2z" />

                                                <path class="st10"
                                                    d="M302-46.6c-.1.3-.2.7-.2 1-.5 2.3-1 4.7-1.4 7-.2 1-.1 2.1-.5 3.1-.1.2-.2.4-.4.4s-.4 0-.6-.1c-.2-.1-.2-.3-.2-.5.4-1.6.8-3.2 1.1-4.9.5-2.1.9-4.3 1.5-6.3 0-.1.1-.3.2-.4l.1-.1c.1 0 .2.1.2.1.2.2.2.4.2.7zM296.1-90.7c-.1.2-.2.4-.3.7-1.4 2.1-2.5 4.4-3.8 6.6-.9 1.6-2 3.2-2.9 4.8-.3.5-.6.9-.9 1.4-.1.1-.3.1-.4 0-.1-.1-.1-.2-.1-.3.1-.3.3-.7.5-1 1.8-3 3.4-6.1 5.4-9 .5-.7.9-1.5 1.3-2.2l.9-1.2h.1c.1 0 .1.1.2.2z" />
                                                <path class="st45"
                                                    d="M303.9-49.1c2-.1 4 .4 6.1.3.3 0 .7.2 1 .3 0 .5.1.9-.3 1.3h-.1c-2.3-.1-4.6-.3-7-.4-.1-.5 0-1 .3-1.5zM311.8-53.4c-.8-.2-1.6-.4-2.4-.4-1 0-2 0-3-.2-.4-.1-.9 0-1.4-.1 0-.5 0-1.1.3-1.6 1.8.1 3.5.4 5.3.4.5 0 1 .2 1.5.3 0 .6.1 1.2-.3 1.6z" />
                                                <path class="st10"
                                                    d="M275.1-34.9c0 .6-.3.8-.9.7-1.9-.4-3.9-.8-5.8-1.2-.2 0-.4-.1-.6-.1-.3-.1-.4-.4-.3-.8.1-.3.2-.6.6-.5 1.5.4 3.1.5 4.6.9.6.1 1.1.1 1.7.2.5.1.7.3.7.8zM292-34.1h4.4c.5 0 .6.2.5.6 0 .1-.1.2-.1.3-.3 1.1-.4 1.2-1.6 1.2h-3.5c.2-.6.2-1.4.3-2.1zM309.4-75.7c-.3-.9.1-1.8.3-2.7.7-2.9 1.3-5.8 2.3-8.7.1-.3.2-.7.4-1 .1-.2.3-.3.5-.2.2.1.2.2.1.4l-.3 1.2c-1 3.4-1.9 6.8-2.9 10.2.1.4 0 .7-.4.8z" />
                                                <path class="st41"
                                                    d="M301.4-51.8c-1 0-1.9 0-2.9-.1-.6 0-.9-.3-.7-.8.5-1.6 0-1.6 1.9-1.6.8 0 1.5 0 2.3.1.1.8 0 1.7-.6 2.4zM299.3-94.4h2.1c.4 0 .8.1 1.2.3.2.1.3.3.3.5 0 .5-.2 1-.4 1.4-.1.2-.4.2-.7.2-1.1.1-2.1-.1-3.2-.3 0-.7.4-1.4.7-2.1zM300.8-49.1c-1.3.1-2.5-.2-3.8-.3-.4 0-.5-.3-.4-.6.4-1.1.6-1.2 1.5-1.2.5 0 1 0 1.5.1s1 .1 1.5.2c.1.6-.2 1.2-.3 1.8zM311.8-90.1c-.6-.1-1.3-.3-1.9-.4-.3-.1-.5-.3-.5-.7v-.3c.1-1.5.6-1.9 2-1.6.4.1.9.2 1.3.3-.3.8-.6 1.8-.9 2.7z" />
                                                <path class="st10"
                                                    d="M304.2-33.2c-.1.8-.4 1.4-.7 2.1-.8 0-1.6-.4-2.4-.4-.4 0-.7-.4-.7-.8l.3-1.2c.1-.3.3-.4.6-.3 1.1.3 2 .4 2.9.6z" />
                                                <path class="st42"
                                                    d="M294.1-15.4c.5-.3.8-.8 1.1-1.2.6-.8.9-1.8 1.7-2.5.1.3.4.3.7.4-.7 1.7-1.6 3.2-2.9 4.6-.3.3-.6.7-.8 1.1-.2-.9-.1-1.6.2-2.4z" />
                                                <path class="st45"
                                                    d="M311.2-50.3c-2.2-.1-4.3-.3-6.5-.6h-.6c0-.3.1-.5.3-.7 2.3-.1 4.7.4 7 .4.1.4.1.7-.2.9z" />
                                                <path class="st10"
                                                    d="M304.3-74.5h1.8c.3 0 .6.1.9.2.4.1.6.4.5.8-.1.4-.3.7-.6.8h-2.7c0-.6 0-1.2.1-1.8z" />
                                                <path class="st41"
                                                    d="M290.1-31.9h-.3c-.5-.1-1.2.2-1.4-.3-.3-.6.1-1.3.4-1.8.1-.1.3-.3.5-.3h1.2c-.1.7-.2 1.6-.4 2.4z" />
                                                <path class="st45"
                                                    d="M290.1-31.9c.2-.8.3-1.6.4-2.4.5 0 1.1-.2 1.5.3-.1.7-.1 1.4-.2 2.1-.6.3-1.2.4-1.7 0zM284.5-32.6c.1-.7.3-1.4.4-2.1h1.5c-.1.8-.3 1.6-.4 2.4-.5 0-1.1.2-1.5-.3z" />
                                                <path class="st41"
                                                    d="M298.6-75.1c.4 0 .8 0 1.2.1.6.2.8.6.6 1.2-.2.7-.5.8-1.2.6-.3-.1-.6-.1-.9-.1 0-.6.2-1.2.3-1.8zM286-32.3c.1-.8.3-1.6.4-2.4h.7c.6 0 .7.1.5.7-.1.5-.2 1-.4 1.4-.2.6-.3.6-.9.4 0 .1-.1 0-.3-.1z" />
                                                <path class="st10"
                                                    d="M298.5-31.7c-.6 0-.8-.2-.7-.7.1-.3.2-.6.2-.9.1-.3.3-.5.6-.5.7 0 1 .3.8.9-.1.2-.2.5-.2.7 0 .5-.3.5-.7.5z" />
                                                <path class="st45"
                                                    d="M304.3-74.5c-.1.6-.1 1.2-.2 1.8h-.4c-.4 0-.9.1-1-.4-.1-.6.1-1.4.5-1.6.4-.2.8-.1 1.1.2zM298.6-75.1c-.1.6-.4 1.2-.3 1.8-.5 0-1.1.2-1.5-.3.1-.5.1-1 .2-1.5h1.6z" />
                                                <path class="st10"
                                                    d="M286-73.3v.1c-.6 1.1-1.3 2.2-1.9 3.2 0 .1-.2.1-.3.1 0-.1-.1-.2-.1-.3.4-1.2 1-2.3 1.7-3.3.1-.1.3-.1.4-.1 0 .1.1.2.2.3zM277.5-34.6c0 .6-.2.8-.6.8-.4 0-.6-.2-.6-.7 0-.6.2-.8.6-.8.4 0 .6.2.6.7zM298.7-22.5c0 .2 0 .4-.1.6-.3-.2-.2-.4.1-.6zM282.9-67.4h-.1c0-.1.1-.2.1-.1.1 0 0 .1 0 .1zM283.3-68.7v.3l-.1.1c-.1 0-.2-.1-.1-.2s.2-.1.2-.2zM283.3-68.7v-.3l.1-.1c.1 0 .2.1.1.2 0 .1-.1.1-.2.2z" />
                                                <path class="st12" d="M234.4 7.5c.2 0 .3.2.4.4-.2-.1-.3-.3-.4-.4z" />
                                                <path class="st39"
                                                    d="M248.4-18.2c.4.2.8.3 1.2.3v.3c-1.1 0-2.2-.2-3.2.5-.8.5-1.6 1.1-2.3 1.7-.2.2-.3.5-.3.8-.1.2-.1.5-.3.6-.3-.8-.3-1.7-.9-2.3 0-.4-.1-.8-.5-1-.7-.9-1.4-1.6-2.3-2.3-.2-.3-.4-.5-.8-.5-.7-.2-1.3-.5-2-.7-.4-.4-.9-.2-1.4-.3.4-.5.9-.2 1.3-.2s.7 0 1.1-.1c.5-.3.8-.6.8-1.2h1.5c.2.1.4.4.6.4 1.2.4 2.3 1 3.4 1.7.3.2.6.3 1 .4.3.5.8.6 1.2.8.6.8 1.1 1.2 1.9 1.1z" />
                                                <path class="st45"
                                                    d="M256.1-15.8c-.2.4-.5.6-.9.6-.1 0-.2-.1-.4-.1v-1.1c.1-1.4.2-2.7.5-4.1.8-4.2 1.8-8.3 2.5-12.5.2-1.5.5-3 .7-4.5.4 0 .9.1 1.2.3-.2 1.1-.4 2.3-.6 3.4-.3 1.7-.5 3.4-.9 5.1-.6 2.6-1.2 5.2-1.6 7.9-.3 1.7-.7 3.3-.5 5z" />
                                                <path class="st42"
                                                    d="M254.8-16.3v1.1c-2.4-.4-4.6-1-6.9-1.6-.5-.1-1-.3-1.5-.3 1-.6 2.1-.4 3.2-.5l.9.3c1.5.4 2.9.7 4.3 1z" />
                                                <path class="st24" d="M243.9-14.5v-.1z" />
                                                <path class="st41"
                                                    d="M368.7-76.7c0 .5-.2 1-.5 1.4 0 .1-.2.1-.3.1l-1.2-.3-.1-.1c-.1-.2.2-1.4.4-1.5.3-.2 1.2-.1 1.4.1.3 0 .3.2.3.3zM368.2-77.9c-.9 0-1.1-.4-.8-1.1.1-.3.2-.7.7-.7.5 0 .9.1 1.2.5.3.4-.1 1.2-.6 1.3h-.5zM369.7-74.8c-.6-.1-.7-.3-.6-.8l.3-.9c.2-.4.6-.5 1-.4.2.1.3.2.3.5 0 .5-.2 1-.4 1.4 0 .3-.3.2-.6.2zM371.2-78.4c0 .7-.3.9-.9.8-.4 0-.5-.2-.4-.6 0-.1.1-.3.1-.4.2-.4.4-.6.8-.5.3.1.4.3.4.7z" />

                                                <path class="st10"
                                                    d="M264.9 9.5c-.5-.1-.6-.4-.8-.6-.2-.2-.2-.4-.2-.7.4-1.8.9-3.5 1.6-5.2.2-.7.5-1.3.8-2 .1-.2.2-.5.4-.6.2-.1.4-.1.6 0 .1.1.2.3.2.4-.1.3-.2.7-.3 1-.8 2.2-1.3 4.4-1.7 6.6-.3.3-.5.6-.6 1.1zM263.3 12.4c1.1.4 1.1.4 1 1.3-.3 1.7-.7 3.4-.8 5.1 0 .6-.2 1.3-.4 1.9 0 .1-.2.1-.2.1-.1 0-.2-.1-.2-.2-.1-.6-.2-1.2 0-1.8.2-.8.2-1.6.2-2.4-.1-1.4-.1-2.7.4-4zM272.9-8.7c-.2 1.2-1.1 1.9-2 2.6-.2.1-.4.1-.5-.1-.1-.1-.2-.3 0-.4.7-.7 1.3-1.4 2.1-2 .1-.1.3-.1.4-.1z" />
                                                <path class="st41"
                                                    d="M269.8-4.3c0 .4-.2.7-.5 1-.2.2-.5.2-.7 0-.3-.1-.3-.4-.2-.6.1-.3.3-.5.4-.8.1-.2.3-.3.5-.2.3.1.5.3.5.6z" />
                                                <path class="st10"
                                                    d="M274.5-9.9c.1-.3.4-.3.6-.3-.2.2-.4.3-.6.3zM272.9-8.7c.1-.2.4-.3.6-.3-.1.3-.3.3-.6.3zM261.6 8.8l.1.1-.1-.1zM261.6 8.7l-.1-.1.1.1zM260.7 8.1l.1.1h-.1v-.1zM260.7 8.1c-.2 0-.3-.1-.3-.3l.3.3zM260.3 7.8s0-.1 0 0c0-.1 0-.1 0 0h.1-.1zM275.4-10.5l.1-.1-.1.1c.1-.1 0-.1 0 0zM275.4-10.5l-.3.3.3-.3zM274.2-9.6l.3-.3-.3.3zM273.8-9.3c0-.2.1-.3.3-.3 0 .1-.1.2-.3.3zM273.9-9.3l-.3.3c0-.2.1-.3.3-.3z" />
                                                <path class="st41"
                                                    d="M302.5.3c-.4.3-.9.2-1.3.2-.8 0-.9-.1-1.2-.8-.2-.6-.4-1.1-.6-1.7-.2-.6 0-.8.7-.8.9-.1 1.4.3 1.8 1.1.2.6.6 1.2.6 2zM304.3.5c-.8 0-.8 0-1.2-.8-.2-.6-.5-1.2-.7-1.8-.1-.3 0-.6.4-.6h.8c.3 0 .5.1.6.4.4.7.7 1.4 1.1 2.2.2.5 0 .8-.5.8-.2-.2-.4-.2-.5-.2zM300.6-3.7c-.4.3-.8.2-1.2.1-.4 0-.6-.2-.8-.6-.3-.5-.3-1-.1-1.1.6-.4 1.6-.1 1.9.4v.1c.1.5.3.8.2 1.1zM302.7-3.5c-1 0-1.4-.4-1.5-1.3 0-.3.1-.5.4-.5 1-.1 1.5-.1 1.8.9 0 .1.1.3.1.4.1.3-.1.5-.4.5h-.4zM343-80.3c0-.1-.1-.2-.1-.3.8-1.5 1.5-3.1 2.4-4.6.5-1 1-2 1.7-2.8 0 2.2-.6 4.4-1.3 6.5-.3.8-.7 1.3-1.7 1.2-.2-.1-.6 0-1 0z" />
                                                <path class="st10"
                                                    d="M336.9-62.3c0-1.2.3-2.3.5-3.4.3-1.7.7-3.4 1.1-5.1.2-.2.3-.4.3-.6v-.3c.3-.2.4-.6.6-.9.3 0 .6.1.5.4-.3 1.4-.7 2.8-1.1 4.1-.4 1.4-.9 2.8-1.1 4.3-.4.4-.3 1.1-.8 1.5z" />
                                                <path class="st41"
                                                    d="M343.6-73.3c-.5.8-1 1.5-1.5 2.3-.7 1.2-1.5 2.4-2.2 3.5.2-1.7.7-3.4 1.2-5 .1-.3.2-.4.5-.5.7-.2 1.4-.3 2-.3zM348.7-79.3v.3c-.3 1.5-.3 1.5-1.9 1.7-.2 0-.4.1-.6.1-1 .2-1 .1-.7-.9.2-.7.6-1.1 1.3-1.2.7 0 1.3-.2 1.9 0zM342.8-76.7c-.5 0-.6-.2-.5-.6.1-.2.1-.5.2-.7.2-.5.5-.9 1.1-.8h.8c.3 0 .5.3.4.6-.1.2-.1.4-.2.6-.1.4-.3.6-.7.7-.4.1-.8.3-1.1.2zM345.4-75.1c-.2 0-.4-.1-.5-.3-.1-.3 0-.5.2-.7.2-.2 2.1-.6 2.5-.5.2.1.3.3.3.5 0 .3-.2.5-.4.6-.7.1-1.4.4-2.1.4zM343.3-76.1c.3 0 .8-.1.9.4.1.4-.2.8-.8.9-.3.1-.6.1-.9.1-.3 0-.5.1-.6-.2-.1-.4 0-.8.3-.9.2-.2.4-.2 1.1-.3zM340-67.5l-.3.3.3-.3z" />
                                                <path class="st46"
                                                    d="M280 17.4c-1.1-.3-2-1-2.9-1.6-.8-.6-1.5-1.4-2.3-1.9-.2-.2-.4-.4-.6-.7.3-.9 1.1-.8 1.8-1 .5-.1 1.1 0 1.7 0 .2 0 .4.1.6.2 1.1.8 1.9 1.8 1.8 3.3-.2.5-.1 1.1-.1 1.7z" />
                                                <path class="st43"
                                                    d="M303.6-21.2c.1-.3.2-.6.5-.6.1.3-.1.5-.5.6zM304.1-21.9c0-.2.1-.3.3-.3 0 .2-.1.3-.3.3zM304.4-22.2c0-.2.1-.4.3-.3 0 .2-.1.3-.3.3z" />
                                                <path class="st41"
                                                    d="M323.2-18.7c.1 0 .2 0 .3.1.3.2.5.5.8.7.7.7.6 1.2-.1 1.9-.2.2-.4.2-.7 0-.2-.1-.3-.3-.4-.4-.9-.9-.9-1.3-.1-2.3h.2zM322.4-14.2c-.4 0-.7-.4-1-.8-.3-.4.1-.8.3-1.1.1-.2.3-.2.4-.1.4.2.7.6 1 1 .2.3-.2 1-.7 1z" />
                                                <path class="st43"
                                                    d="M311.8-38.7c.2-.7.8-.9 1.3-1.2.8-.4 1.7-.8 2.5-1.1 2.1-.8 4.1-1.9 5.9-3.1 3.2-2.1 6.7-3.7 10.3-5.3.2-.1.4-.2.6-.2 1.1 0 1.8-.7 2.7-1.3.5-.1.9-.3 1.3-.6.4 0 .9-.1 1.2-.3.4 0 .8 0 1.3.1.1.3.3.6.3 1v3.2c-.2.1-.3.2-.4.4l-1.5 1.5c-.2.1-.4.1-.6.2v-2.1c0-.5-.3-.6-.7-.4-.2.1-.4.2-.5.3-.8.6-1.7.8-2.7.9-.8.1-1.5.3-2.2.7-1 .5-2 1.1-2.9 1.6-.5.3-.9.6-1.3 1.1-.8.9-1.7 1.8-2.6 2.6-1.1 1-2.4 1.5-3.9.9-.1-.1-.3-.1-.4-.1-.5-.3-1-.2-1.6 0-1.1.4-2.1.6-3.2.8-.8.1-1.7.3-2.4.8-.3-.2-.4-.3-.5-.4z" />
                                                <path class="st41"
                                                    d="M337.2-45.6l1.5-1.5c.1.4.5.4.8.5.4.1.5.4.4.7-.3.9-.5 1.2-1.5 1.2h-.9c-.1 0-.2 0-.3-.1v-.8z" />
                                                <path class="st39"
                                                    d="M337.3-44.8c.1 0 .2 0 .3.1 0 .2-.1.4-.3.6-.1-.3-.1-.5 0-.7z" />
                                                <path class="st41"
                                                    d="M334.8 11.5c0 .3-.1.5-.3.6 0-.2 0-.5.3-.6zM334.1 12.4l-.1.1.1-.1c0 .1 0 0 0 0zM334.5 12.1l-.3.3c0-.1.1-.2.3-.3z" />
                                                <path class="st10"
                                                    d="M328.9-72.7c.1-.6.4-1 .6-1.6.9-2.2 1.8-4.5 2.8-6.7.1-.2.1-.4.2-.6l.9-2.1c.2-.5.3-1 .7-1.3 1.7.4 3.4.7 5 1.1 1.3.3 2.5.7 3.8 1.1-.6 1.1-1.1 2.3-1.7 3.4-.3.6-.6 1.3-1.4 1.5v-2-.8c-.1-.4-.4-.7-.7-.6-.3 0-.6.2-.7.5-.1.6-.3 1.3-.3 1.9-.1 2.1-.5 4.2-.9 6.3-.1.4.1.9-.4 1.3-.9-.5-1.8-.6-2.7-.7-1.9-.2-3.5-.8-5.2-.7z" />
                                                <path class="st44"
                                                    d="M237.4-41.2v1.2c-.1.3-.3.6-.1.9-.1.3-.1.6-.1 1-.2 2.1-.4 4.2-.4 6.3l-.3 6.3c0 .3 0 .6-.3.8-1-.2-1.8-.8-1.9-1.8-.1-1.1-.5-2-1.2-2.8-1.1-1.7-1.8-3.6-2.7-5.5.3-1.2.2-1.3-.8-1.6-.3-.2-.7-.4-1-.4.4-.4.4-.5 0-.7-.4-.1-.7-.2-1 .1-.1.1-.2.1-.2.2-.8.4-1.3.2-1.5-.7-.1-.2-.1-.5-.3-.7V-44c.3-.4.2-1 .3-1.5 0-.7 0-1.3.1-2 .2-1.5.4-2.9.5-4.4.1-1.2.2-2.3.4-3.5.3-1.9.6-3.7.6-5.6 0-.1.1-.2.1-.3.9-4.6 1.9-9.2 2.8-13.8.2-.4.4-.8.4-1.2.3-.2.3-.6.3-.9.4-.3.3-.8.4-1.2.3-.5.4-1 .5-1.5.2-.6.2-1.2.6-1.7 1.9-.2 3.8-.2 5.8-.4 1.7-.2 3.4-.2 5.2-.3-.4 1.4-.7 2.8-.8 4.2-.1.8-.3 1.5-.5 2.2-.7 1.8-.9 3.8-1.3 5.6-.4 2.1-.7 4.2-1.1 6.3-.2 1.1-.5 2.2-.4 3.3-.1.5-.2.9-.1 1.4-.4.5-.3 1-.2 1.6v.6c-.4.6-.3 1.2-.3 1.9 0 .5-.1 1-.1 1.5-.3 1.3-.4 2.7-.5 4.1-.1.9-.1 1.8-.2 2.7-.4 2.1-.7 3.9-.7 5.7z" />
                                                <path class="st43"
                                                    d="M230.5-34.7c.9 1.8 1.6 3.8 2.7 5.5.1.8.5 1.6.2 2.5-.5-.2-.9-.5-1.3-.3-.3.1-.4.3-.5.5 0 .2 0 .4.2.5 1 .4 1.8 1.3 2.8 1.8 1.2.6 2.2 1.6 3.4 2.3.2.1.1.4.1.5-.4 0-.7 0-1.1.1-.2-.1-.5-.2-.7-.2-2.4-.2-4.5.3-6.5 1.7-1.3.9-2.3 2.1-2.8 3.6-.2.1-.2.2-.2.3h-.1c-.7-.1-1.2-.5-1.7-1-1.3-1.4-2.8-2.1-4.7-2.1-.4 0-.7-.1-1-.2-.4-.2-.9-.3-1.3-.4-1-.2-1-.2-1.7.6 0-.6.1-1.2.1-1.9l1.5-2.1 1.2-1.5c.2 0 .3-.2.3-.3 1-.7 1.7-1.7 2.5-2.6.1-.1 0-.3.1-.4.9-1.2.9-2.6.6-4 .1-.1.1-.1 0-.2.5-.5.9-1.1 1.4-1.6.8-1 1.7-1.8 3-2.3.6-.2 1-.8 1.7-.9.4 0 .7.2 1 .4.3.6.5 1.2.8 1.7z" />
                                                <path class="st45"
                                                    d="M219.1-24.3l-1.2 1.5c-.6-.8-1.6-1-2.4-1.4-.4-.2-.6 0-.6.4-.1.7.1 1.3.8 1.5.1 0 .3.1.4.2.3.2.4.5.3.8-.1.2-.2.4-.2.5h-.3c-.5 0-.9-.5-1.3-.2s-.2.9-.3 1.3c-.2 1-.6 2.1-.5 3.1h-1.9c.1-.9.1-1.7.3-2.6.2-.7.3-1.4.4-2.1.1-.8-.1-1-.9-1.2-1.1-.3-2.3-.2-3.5-.4-1.3-.2-2.6-.2-3.9-.2 0-.5-.2-1.1.3-1.6 2.4 0 4.8.2 7.2.6.3 0 .6.1.9.2.1 0 .3-.1.4-.2.3-.8.1-1.3-.7-1.6-.6-.2-1.3-.3-1.9-.3H205c0-.3.1-.5.3-.7.4-.1.8-.2 1.2-.2 1.7 0 3.3-.2 5 .2.5.1 1.1.2 1.6.2.3 0 .5-.1.6-.4.1-.2.1-.4.1-.6.1-.8-.1-1-.9-1.1-.8 0-1.5.1-2.3-.1-1.5-.3-3-.2-4.5-.2 0-.6.4-1 .6-1.6 1.3.1 2.5 0 3.8.2 1.1.2 2.2-.1 3.3.2.3.1.5-.1.6-.3.1-.2.2-.4.2-.6.6-2.3 1.3-4.6 1.9-6.9.7 0 1.3.2 1.8.6-.6 2.1-1.2 4.1-1.7 6.2-.1.2-.1.5-.1.7 0 .5.1.8.6 1 .5.2 1.1.3 1.6.5.3.1.5 0 .6-.3.8-2.4 1.5-4.7 1.9-7.2.4-.1.8.1 1.2.3 0 .2-.1.5-.1.7-.5 1.9-1 3.9-1.6 5.8-.2.6-.2 1.2.1 1.7-.9.5-1.2 1.4-1.2 2.4-.4.9-.5 1-.5 1.2zm-3-3c-.1.1-.3.1-.4.3-.3.5-.4 1-.3 1.6 0 .1.1.3.2.4.6.4 1.3 1 2 .8.6-.2.5-1 .8-1.6v-.1c0-.3-.1-.5-.3-.6-.7-.3-1.4-.5-2-.8z" />
                                                <path class="st10"
                                                    d="M202.5-29.5c-2.5 0-5 .3-7.6.6h-.5c-.4 0-1.1.2-1.3-.1-.3-.5.3-.9.5-1.3 1.5-2.6 3-5.2 4.4-7.8.2-.3.3-.7.5-1.1 2.2-.5 4.4-.3 6.6-.3h.9c.5 0 .6.3.5.7-.1.2-.1.4-.2.6-.9 3-2.2 5.7-3.7 8.5.2 0 0 .1-.1.2zM217.5-40.9c-1.5-.5-3-.9-4.5-1.4-.2-.1-.5-.1-.7-.2-.4-.2-.6-.5-.4-1 .2-.6.4-1.1.6-1.7 1-3.1 2-6.3 3-9.4.1-.4.3-.8.6-1 1.7.1 3.4.7 5 1.3.4.2.5.4.4.8-.1.2-.2.5-.2.7-.5 1.4-.9 2.9-1.4 4.3-.9 2.6-1.8 5.1-2.4 7.6zM187.6-7.5c0-1.6.3-6.3.8-8.2.2-.8.3-1.6.4-2.4.1-.8.4-1.2 1.2-1.4 1.1-.3 2.2-.7 3.3-1 1.8-.6 3.6-1.2 5.4-1.4.2 0 .5-.1.7-.2 0 .7-.2 1.4-.6 2-1.1 1.8-2.1 3.7-3 5.7-.6 1.2-1.4 2.1-2.6 2.7-1 .5-1.9 1.2-2.7 1.9-.7.6-1.4 1.3-2.1 2-.3.2-.5.3-.8.3zM232.5-81.3c-.4.5-.4 1.1-.6 1.7-.2.5-.2 1.1-.5 1.5-1.5.3-3.1.3-4.7.3h-.8c-.3 0-.5-.3-.4-.7.4-1 .8-1.9 1.3-2.9 1.2-2.9 2.4-5.8 3.7-8.6.4-.9.8-1.9 1.6-2.5.4 0 .7 0 1-.1 1.1-.4 2.2-.5 3.4-.4-.4 1.6-1.3 3-1.8 4.5-.3 1-.8 2-1 3-.4 1-.7 1.9-1.1 2.9 0 .4-.1.8-.1 1.3zM201-43.3c.6-1.5 1.6-2.8 2.4-4.2 1.1-2 2.4-3.9 3.3-6 .3-.8.7-1.6 1-2.4.2-.4.5-.6 1-.6.7 0 1.3-.1 2 .1.5.1 1 .1 1.5.1 0 .5 0 .9-.2 1.4-.5 1.5-.8 2.9-1.1 4.4-.4 1.6-.9 3.2-1.6 4.7-.2.4-.5.8-.6 1.2-.2 1.1-.9 1.2-1.8 1.2-1.9.1-3.9.1-5.9.1zM195.8-1.1c-.6.9-1.3 1.8-1.9 2.7-1.2 1.7-2.1 3.6-3.1 5.4-.2.3-.3.7-.5 1.1-.2.3-.3.9-.7.8-.4 0-.5-.6-.7-.9-.6-1.3-.9-2.7-1.2-4.1-.3-1.6-.3-3.1-.2-4.7.5-.9 1.2-1.7 2-2.5 1.1-1 2.1-2.1 3.1-3.1.1-.1.3-.1.4-.1.2 0 .2.2.2.3 0 .9.1 1.7.5 2.5.3.8.7 1.4 1.5 1.8.1.4.3.6.6.8zM204.1-22.7c1.3 0 2.6 0 3.9.2 1.1.2 2.3.1 3.5.4.7.2.9.4.9 1.2-.1.7-.2 1.4-.4 2.1-.2.8-.2 1.7-.3 2.6-.7.2-1.4.3-2.1.3h-2.7c-1.9-.1-3.6.3-5.4.7-.2 0-.4.2-.6.2-.4-.1-.9.6-1.2 0-.3-.4.2-.9.4-1.3l1.8-2.7c.7-1.1 1.5-2.2 2.2-3.3-.1-.1-.1-.3 0-.4z" />

                                                <path class="st45"
                                                    d="M217.5-40.9c.7-2.6 1.5-5.1 2.3-7.6.5-1.4 1-2.9 1.4-4.3.1-.2.2-.5.2-.7.1-.4 0-.7-.4-.8-1.6-.6-3.2-1.2-5-1.3 0-.5-.2-1.1.3-1.5 1.3 0 2.6.5 3.8.9.5.2 1 .3 1.5.4.3.1.5-.2.5-.4.1-.3 0-.6-.4-.7-1.7-.6-3.3-1.1-5.1-1.3 0-.3-.1-.7.3-.9.5.1 1.1.3 1.6.4 1.2.3 2.3.7 3.5 1 .5.1.9-.1 1-.6.1-.4 0-.7-.4-.9-.2-.1-.5-.2-.7-.2-1.5-.3-2.9-.9-4.4-1-.1 0-.2-.1-.3-.2 0-.5-.1-1 .4-1.3.9.1 1.8.2 2.7.5.9.3 1.8.5 2.8.7.5.1.8-.1.9-.6.4.2.6.5.6.9s0 .8.1 1.2c.2.4.2.9 0 1.3-.2.5-.2.9.3 1.3.2.1 0 .4-.2.5-.6 0-.8.3-.9.8 0 .4.2.6.6.8.3.2.6.3 1 .5v2.2c-.4 0-.6-.2-.9-.5-.8-1-1.1-.9-1.6.3v.1l-2.4 7.2c-.5 1.5-.9 3-1.3 4.5-.7.1-1.2-.4-1.8-.7z" />
                                                <path class="st10"
                                                    d="M223.9-61.4c-.2.4-.4.7-.9.6-.9-.2-1.9-.4-2.8-.7-.9-.3-1.8-.4-2.7-.5-.1-.7 0-1.3.2-2 .7-2.7 1.4-5.5 2-8.3l.3-1.5c.1-.6.4-.7 1-.8h1.7c.4 1.5.3 3.1.6 4.7.2 1 .1 2 .6 3 .2.3.1.8.1 1.2 0 .7-.1 1.5.1 2.1.2.8.1 1.5-.2 2.2zM216.3-37.2c-.6 2.3-1.3 4.6-1.9 6.9-.1.2-.1.4-.2.6-.1.3-.3.4-.6.3-1.1-.3-2.2 0-3.3-.2-1.3-.2-2.5-.2-3.8-.2.7-1.6 1.4-3.3 2.1-4.9.4-1 .9-2.1 1.3-3.1.4-.9.6-1.1 1.5-.9 1.7.4 3.4.7 4.9 1.5z" />
                                                <path class="st39"
                                                    d="M223.9-61.4c.2-.7.3-1.4.1-2.2-.2-.7-.1-1.4-.1-2.1 0-.4.1-.9-.1-1.2-.5-.9-.4-2-.6-3-.3-1.5-.1-3.1-.6-4.7.1-.1.2-.1.2-.2.2-.3.2-.7.7-.7.4 0 .7.1.9.5.1.2.3.3.4.5-.1 1 .4 2 .3 3-.1.9.1 1.8.3 2.7.3 1.4.6 2.9.6 4.3 0 1 .1 1.9.3 2.9.2.8.2.8 1.1.9-.1 1.9-.3 3.7-.6 5.6-.2 1.1-.2 2.3-.4 3.5-.2 1.5-.4 2.9-.5 4.4-.1.7-.1 1.3-.1 2 0 .5.1 1-.3 1.5v-2.1c0-.3-.1-.5-.3-.7.4-1.3.8-2.6.6-4.1l-.3-1.2V-54v-.9c.1-.6-.3-.9-.6-1.2.2-.1.3-.4.2-.5-.5-.4-.5-.8-.3-1.3.2-.4.2-.9 0-1.3s-.1-.8-.1-1.2c-.2-.5-.3-.8-.8-1z" />
                                                <path class="st10"
                                                    d="M227.4-60.7c-.9-.1-.9-.1-1.1-.9-.2-.9-.3-1.9-.3-2.9 0-1.5-.2-2.9-.6-4.3-.2-.9-.4-1.8-.3-2.7.1-1-.4-2-.3-3 .7 0 1.5-.1 2.2-.2 1.1-.2 2.2-.1 3.3-.1-.9 4.6-1.9 9.2-2.8 13.8 0 .1 0 .2-.1.3zM230.3-93.1c.1.5-.1 1-.3 1.5-1.6 3.3-3 6.7-4.4 10-.5 1.1-1.1 2.2-1.4 3.4-.1.3-.3.6-.6.6-.6 0-1.4.3-1.9-.2s0-1.2.3-1.7c1.4-3.3 2.6-6.7 4.3-9.9l1.8-3c.2-.3.4-.7.9-.8.4 0 .9.1 1.3.1z" />
                                                <path class="st41"
                                                    d="M225.5-51.9l.3 1.2c-.6.1-.8.6-.9 1.1-.7 2.4-1.5 4.9-2.1 7.3-.3 1-.5 2-.7 3h-.1c-.9-.2-1.7-.6-2.6-.9.4-1.5.8-3 1.3-4.5l2.4-7.2v-.1c.4-1.2.7-1.3 1.6-.3.2.2.4.4.8.4z" />
                                                <path class="st10"
                                                    d="M214.1-62.8c-1.1-.1-2.1-.1-3.1-.2-.1-.3-.1-.5 0-.7 1-2.9 1.7-6 3-8.8.3-.5.4-1.2.5-1.7.2-.1.5-.3.7-.3 1.3-.1 1.9-.3 1.4 1.6-.8 3.1-1.5 6.2-2.2 9.3 0 .3 0 .6-.3.8z" />
                                                <path class="st41"
                                                    d="M182.9 4.2l1.2 4.2c.1.2.2.5.3.7.4 1.6 1.1 3 2.1 4.4.4.5.4 1 0 1.5-.2.3-.3.6-.5.9-.4.6-.9.6-1.2 0-1.1-2.1-2.2-4.2-2.7-6.6-.2-1.1-.5-2.2-.5-3.3.2-.8.6-1.4 1.3-1.8zM220.9-35.6c-.4 2.5-1.1 4.9-1.9 7.2-.1.3-.3.4-.6.3-.5-.2-1.1-.3-1.6-.5-.4-.2-.6-.5-.6-1 0-.3.1-.5.1-.7.6-2.1 1.1-4.1 1.7-6.2 1.2 0 2.1.5 2.9.9zM200.1-23.7c-1.7.2-3.4.5-5.1 1-1.6.5-3.1 1-4.6 1.5-.2.1-.4.1-.6.1-.2 0-.4-.2-.3-.4.2-.7.5-1.4.9-2.1.2-.3.4-.4.7-.5.9-.2 1.9-.4 2.8-.5 1.6-.2 3.2-.5 4.8-.4h1.7c0 .5-.1.9-.3 1.3zM200.7-25.9h-1.5c-2.3-.1-4.5.4-6.8.8-.4.1-.9.3-1.2 0-.3-.4.2-.8.3-1.2.2-.5.6-.8 1.1-.9.5-.1 1.1-.2 1.6-.3 1.9-.4 3.8-.1 5.6-.5.6-.1 1.3 0 2 0-.3.7-.5 1.6-1.1 2.1z" />
                                                <path class="st10"
                                                    d="M216-77.6c.4-1.4 1.1-2.7 1.7-4 1.1-2.3 2.4-4.4 4.1-6.4 0 .5-.1 1-.3 1.5-.9 1.9-1.5 3.8-2.2 5.8-.3.9-.6 1.7-1 2.6-.1.4-.4.6-.8.6-.5-.1-1-.1-1.5-.1z" />
                                                <path class="st41"
                                                    d="M185.4 1.1c-.1 2.3.5 4.5 1.2 6.7.2.7.5 1.3.9 1.9.2.3.3.6.6.9.5.6.3 1.2-.2 1.7-.3.3-.5.3-.7 0-.5-.7-.9-1.5-1.1-2.3-.5-1.6-1.1-3.2-1.6-4.8l-.6-2.4c.4-.5.7-1.3 1.5-1.7zM205.9-28.2c1.5 0 3-.1 4.5.2.7.2 1.5 0 2.3.1.8 0 .9.3.9 1.1 0 .2-.1.4-.1.6-.1.3-.3.4-.6.4-.5-.1-1.1-.1-1.6-.2-1.7-.4-3.3-.2-5-.2-.4 0-.8.1-1.2.2 0-1 .5-1.6.8-2.2z" />
                                                <path class="st10"
                                                    d="M187.5-4.7c.1-.7.6-1.2 1-1.7 1.4-1.6 3-3.1 4.8-4.2.2-.1.4-.2.5-.2.2-.1.4.2.4.4-.4 1-.6 2.2-1.8 2.7-1.4 1.4-3.1 2.3-4.1 4-.2.2-.5.4-.7.6-.1-.6-.1-1.1-.1-1.6z" />
                                                <path class="st45"
                                                    d="M222-39.3c.2-1 .4-2 .7-3 .7-2.4 1.4-4.9 2.1-7.3.1-.5.3-1 .9-1.1.2 1.4-.2 2.7-.6 4.1 0 .6-.2 1.1-.4 1.6-.7 2-1.2 4-1.7 6.1-.3-.1-.7-.1-1-.4z" />
                                                <path class="st41"
                                                    d="M204.7-25.5h5.5c.7 0 1.3.1 1.9.3.8.2 1.1.7.7 1.6 0 .1-.2.2-.4.2-.3 0-.6-.1-.9-.2-2.4-.4-4.8-.6-7.2-.6 0-.5.2-1 .4-1.3zM223.1-39c.6-2 1-4.1 1.7-6.1.2-.5.4-1 .4-1.6.2.2.3.4.3.7v7.5c-.3.6-.4.7-.6.5-.6-.5-1.3-.5-1.8-1zM217.2-60.7c.1.1.2.1.3.2 1.5.1 2.9.8 4.4 1 .2 0 .5.1.7.2.4.2.5.4.4.9-.1.6-.5.8-1 .6-1.2-.3-2.3-.7-3.5-1-.5-.1-1.1-.3-1.6-.4.1-.5-.2-1.1.3-1.5z" />
                                                <path class="st10"
                                                    d="M214.4-55.4c0 .2-.1.4-.2.6-.7 2.1-1.4 4.1-2 6.2-.5 1.4-.9 2.9-1.4 4.4-.1.3-.2.7-.4 1-.1.2-.3.3-.5.2-.2-.1-.3-.3-.2-.5.2-.5.3-1 .6-1.4 1.1-2.3 1.7-4.8 2.3-7.2.3-1.2.6-2.4.9-3.5.1-.2.2-.3.5-.2.2-.1.4.1.4.4z" />
                                                <path class="st41"
                                                    d="M220.6-27c-.3-.6-.3-1.1-.1-1.7.6-1.9 1.1-3.9 1.6-5.8.1-.2.1-.5.1-.7.6.1 1.2.3 1.9.4-1.3 1.3-1.3 1.3-1.6 3v.2c-.1.2-.3.3-.3.5-.4 1.2-.3 2.4-.3 3.6-.5 0-.8.5-1.3.5z" />
                                                <path class="st10"
                                                    d="M225.1-90.1c0 .1 0 .3-.1.4-1.6 3.2-2.8 6.6-4.2 9.9-.2.6-.4 1.1-.6 1.7-.1.2-.2.4-.4.4-.1 0-.2 0-.2-.1v-.3c1.2-3.2 2.5-6.4 3.7-9.6.4-.9.8-1.8 1.4-2.5.1-.1.2-.1.3-.1 0 0 0 .1.1.2zM209.1-38.9c-.1.2-.1.3-.2.5-.9 2.1-1.9 4.2-2.8 6.2-.2.6-.4 1.1-.6 1.7-.1.2-.2.5-.5.6-.2.1-.4.1-.6-.1-.1-.1-.1-.3-.1-.4v-.1c1.6-2.4 2.3-5.2 3.3-7.8.1-.2.2-.5.3-.7.2-.3.5-.3.8-.2.3 0 .4.1.4.3zM218.9-74.3v.3c-.6 1.2-.3 2.6-.8 3.9-.5 1.2-.7 2.4-.9 3.7v.1c-.8 1-.8 2.3-1.2 3.4 0 .1-.1.2-.2.2-.2 0-.2-.1-.2-.3.7-3 1.4-6 2.2-9 .2-.7.4-1.5.6-2.2 0-.2.2-.2.4-.2-.1 0 0 .1.1.1zM216.9-38.7c-.4 0-.8.1-1.2-.1-1.4-.5-2.9-.8-4.4-1.2-.4-.1-.5-.3-.4-.7.2-.7.5-.9 1.1-.6 1.5.5 3.1.7 4.5 1.4.2.1.3.2.5.3-.1.3-.1.6-.1.9zM197.1-13.7c-.1-.1-.3-.1-.3-.2s0-.3.1-.4c.7-1.4 1.3-2.9 2.2-4.2.7-1 1.2-2 1.5-3.1.1-.4.3-.8.8-.8.2 0 .4 0 .6.1.2.1.1.4 0 .5-.3.5-.5 1-.8 1.4-.5.8-1.1 1.6-1.6 2.4-.6 1-1.3 2-1.6 3.1-.1.3-.3.6-.5.9-.1.2-.3.2-.4.3z" />
                                                <path class="st41"
                                                    d="M216.6-58.3c1.8.2 3.4.7 5.1 1.3.4.1.4.4.4.7 0 .3-.2.5-.5.4-.5-.1-1-.2-1.5-.4-1.2-.4-2.5-.8-3.8-.9 0-.3-.1-.8.3-1.1zM238-95.9c-.1.6-.3 1.1-.7 1.6-1.4 0-2.7-.1-4.1-.1-.1-.6.1-1.1.6-1.5h4.2z" />
                                                <path class="st45"
                                                    d="M233.2-94.5c1.4 0 2.7.1 4.1.1-.1.5-.2.9-.6 1.2-1.2-.1-2.3 0-3.4.4-.3.1-.7.2-1 .1-.1-.7 0-1.5.9-1.8z" />

                                                <path class="st10"
                                                    d="M196.7-2.3c-1.5-.3-2.2-1.3-2.4-2.7-.1-.7 0-1.4 0-2.1 0-.5.3-.9.7-1.1h.3c.1 0 .1.2.1.3 0 .1 0 .3-.1.4-.4 1.6-.1 3.1 1 4.4.2.3.4.5.4.8z" />
                                                <path class="st41"
                                                    d="M213.2-59.8c-.9 0-1.7 0-2.6-.1-.5 0-.8-.2-.8-.5 0-.5.3-.9.8-1h.6c.9 0 1.7.1 2.6.1.1.6.1 1.2-.6 1.5z" />
                                                <path class="st45"
                                                    d="M239.6-99.6c-.1.6-.4 1.1-.8 1.6-.6 0-1.3 0-1.9-.1-.5 0-1 0-1.4-.4.2-.7.9-.9 1.3-1.4.9.1 1.9.2 2.8.3z" />
                                                <path class="st41"
                                                    d="M212.9-57.7c-1.2 0-2.4.1-3.6-.3-.2-.1-.3-.2-.2-.5.2-.5.4-.7.8-.7.7 0 1.4-.1 2.1.1.4.1.8.1 1.2.2l-.3 1.2z" />
                                                <path class="st45"
                                                    d="M238-95.9h-4.2c.1-.9.6-1.2 1.5-1.2h3.2c-.1.4-.2.8-.5 1.2z" />
                                                <path class="st10"
                                                    d="M231-76.9c0 .3 0 .7-.3.9-1.3 0-2.6-.1-3.9.2-.5.1-1.1.1-1.6 0-.1 0-.2-.2-.2-.3 0-.1.1-.3.2-.4.1-.1.3-.1.4-.1h1.1c1.4 0 2.9 0 4.3-.3z" />
                                                <path class="st41"
                                                    d="M185.7-1.3c-.4.9-1 1.5-1.7 2.1-.1.1-.3.2-.4 0-.1-.1-.2-.2-.2-.4V0c.5-.8 1-1.6 1.8-2.2.1-.1.3-.1.4-.1 0 .4 0 .7.1 1z" />
                                                <path class="st45"
                                                    d="M185.7-1.3c0-.3 0-.6-.1-1 .1-1.1.9-1.7 1.6-2.4.1-.1.2 0 .3 0v1.5c-.3.5-.7.9-1 1.4-.2.3-.5.4-.8.5zM230.3-93.1c-.5-.1-1-.1-1.5-.2.1-1 .2-1.1 1.2-1.5.4 0 .8.1 1.2.1.2.8-.1 1.4-.9 1.6z" />
                                                <path class="st41"
                                                    d="M223.1-37.5c.2.1.4.1.6.2.5.2.9.7 1.4.8.2 0 .1.2 0 .4-.2.2-.4.5-.8.4-.5-.2-1-.4-1.5-.7-.2-.1-.2-.5-.1-.7.1-.1.3-.2.4-.4zM204.2-27.5c-.1.4-.3.9-.7 1.3-.2.2-.5.1-.7 0-.3-.1-.3-.4-.2-.7.3-.8.6-1.1 1.3-1 .2 0 .3.1.3.4z" />
                                                <path class="st45"
                                                    d="M216.9-38.7c0-.3.1-.6.1-.9.6-.1 1.1.2 1.5.5.2.2.3.4.2.7-.1.2-.3.3-.5.3-.6 0-1.2.2-1.3-.6z" />
                                                <path class="st41"
                                                    d="M231.2-94.6c-.4 0-.8-.1-1.2-.1.2-.9.7-1.4 1.6-1.5.4 0 .5.2.4.6-.1.4-.3.8-.8 1zM202.2-24.3c-.2 0-.4 0-.4-.3 0-.1.1-.3.2-.4.3-.2.6-.3 1-.1.1 0 .1.2.1.3-.2.3-.5.5-.9.5z" />
                                                <path class="st10"
                                                    d="M226.1-92c0 .2-.1.4-.2.6-.1.2-.2.5-.5.5 0 0-.1 0-.1-.1-.2-.3.1-.6.2-.8.2-.1.4-.1.6-.2zM226.1-92c0-.5.1-1 .6-1.2 0 .5-.1 1-.6 1.2z" />
                                                <path class="st39"
                                                    d="M180.8 4.5c0-.1 0-.3.1-.4l.3-.3s.2.1.2.2-.1.3-.2.4c-.1 0-.3 0-.4.1z" />
                                                <path class="st10"
                                                    d="M221.8-88c0-.3.1-.5.3-.6 0 .3 0 .5-.3.6zM222.1-88.6c0-.3.1-.5.3-.6 0 .2 0 .5-.3.6zM222.7-89.5c0-.3 0-.5.3-.6 0 .2 0 .5-.3.6zM223-90.1c0-.3.1-.5.3-.6 0 .2 0 .5-.3.6z" />
                                                <path class="st39" d="M231.5-98.9s.1-.1.1 0c.1 0 .1.1 0 .2h-.1v-.2z" />
                                                <path class="st10"
                                                    d="M226.7-93.2l.1-.1v.1h-.1zM223.3-90.7c.1-.1.2-.3.3-.4 0 .1-.1.3-.3.4zM222.4-89.2c0-.2.1-.3.3-.3l-.3.3zM213.5-4.1c0 .3 0 .5-.1.8-.4 1.1-.7 2.3-1 3.5-.2 1-.5 2-.5 3 0 .7-.3 1-1 1h-9c-.3 0-.5-.1-.7-.3.8-1.5 2-2.7 3.2-3.9 1.1-1.1 2.4-2 4-2.4l1.5-.6c1.2-.6 2.4-.9 3.6-1.1z" />
                                                <path class="st45"
                                                    d="M213.5-4.1c-1.3.2-2.5.5-3.6 1-.5.2-1 .5-1.5.6-1.5.5-2.8 1.3-4 2.4-1.2 1.2-2.3 2.4-3.2 3.9-.6.5-1.4.3-2.1.3 1.2-2.1 2.7-3.9 4.5-5.6 1.1-1 2.3-2 3.8-2.4.1 0 .3-.1.4-.1 2.1-1 4.3-1.6 6.5-2 0 .8-.3 1.4-.8 1.9z" />
                                                <path class="st10"
                                                    d="M215.4-4.5c.1 0 .2 0 .3.1-.3 1.3-.6 2.7-.8 4-.1.3-.2.6-.1.9.1 1.1-.3 2.1-.4 3.2 0 .4-.3.5-.6.5s-.5-.2-.5-.6V3c.3-1.7.4-3.4.9-5.1.3-.9.4-1.9 1.2-2.4z" />
                                                <path class="st41"
                                                    d="M190.8 13v.3c-.3.7-.7 1.4-1.2 2-.1.2-.4.1-.5 0-.2-.2-.4-.5-.3-.8 0-.7.4-1.3.9-1.8.2-.3 1 0 1.1.3zM190.5 19.2c-.1 0-.5-.1-.8-.2-.7-.2-.8-.6-.4-1.3.2-.2.3-.4.6-.2.4.2.7.3 1.1.5.3.2.5.4.4.7 0 .4-.3.5-.9.5zM188.8 16.9c0 .5-.3.9-.6 1.2-.2.2-.7.1-1-.1-.3-.2-.4-.5-.2-.8.1-.3.3-.5.5-.8.2-.2.3-.6.6-.5.4.3.6.6.7 1z" />
                                                <path class="st16"
                                                    d="M238.1-15.1l.3-.3c.4-.1.5-.7 1-.6.5.1.7.7.9 1.1 1.8 4-1.1 8.3-5.3 8.2-3.7-.1-6.6-4-5.1-7.8.2-.4.4-.8.5-1.2.5-.3.8-.7 1.1-1.2.6-.3 1.3-.7 1.9-1 .3 0 .5.1.6-.2.9.1 1.8 0 2.7.3.9.3 1.7.7 2.3 1.4.1.2.2.4 0 .5-.4.1-.6.5-.9.8-.5.1-.9.3-1.3.5-1 .6-2.1 1.2-3.3 1.5-.2 0-.4.2-.5.3-.3.5-.9.8-1.4 1.5 1.2-.3 2.3-.1 3.3-.8.2-.1.4-.2.5-.3.7-1.1 1.9-1.7 2.7-2.7zM239.8-19.5c.9.6 1.7 1.4 2.3 2.3-.3.7-1.1.9-1.7 1.2-.2.1-.4 0-.5-.2-.3-.2-.5-.5-.7-.7-.9-.7-.8-.8-.2-1.7.2-.4.4-.8.8-.9z" />
                                                <path class="st41"
                                                    d="M227-16.1c.5-1.6 1.6-2.7 2.8-3.6 1.9-1.4 4.1-1.9 6.5-1.7.2 0 .5.1.7.2-.5.1-1-.2-1.3.2H234c-.3 0-.6 0-.8.3-.4.1-.8.2-1.2.4-.8.1-1.3.6-1.8 1.1-.7.6-1.3 1.3-1.9 2-.3.3-.6.6-.5 1.1 0 .1-.1.2-.2.2-.3-.1-.5-.1-.6-.2z" />
                                                <path class="st16"
                                                    d="M228.2-17.2c.6-.7 1.2-1.4 1.9-2 1.2.3 1.3 1.2 1.3 2.3-.5.1-.8.5-1 1-1-.1-1.8-.5-2.2-1.3zM242.6-16.2c.6.7.6 1.5.9 2.3 0 .3-.1.6-.1.9-.5 0-1 0-1.5-.1-.6 0-.7-.1-.8-.6v-.1c-.4-1.3-.4-1.3.9-2.1l.6-.3zM241.9-7.3c-.6.6-1.2 1.4-2.1 1.8-.3-.3-.5-.6-.8-.9-.5-.6-.7-.8.1-1.4.4-.3.7-.6 1-.9 0 0 .1 0 .2-.1.6.5 1.3.8 1.6 1.5zM227.4-16c.1 0 .2-.1.2-.2.5.2 1.1.2 1.5.7.3.3.5.6.3 1.1-.1.1-.1.3-.2.4-.2.7-.7 1.1-1.4 1-.3 0-.6-.1-.8-.3-.3-.2-.1-.6-.1-.8v-.3c.2-.5.4-1 .5-1.6zM237-20.7c.7.2 1.3.5 2 .7 0 .4-.1.7-.3 1-.7 1.2-.7 1.2-2 .7-.5-.2-.6-.3-.6-.9v-.8c0-.6.1-.6.9-.7zM243.5-11.8c.1 1.1-.3 2-.7 2.9-.6-.3-1.1-.6-1.7-.9-.2-.1-.3-.3-.2-.5.1-.3.2-.7.2-1 .1-.3.3-.4.5-.4.7-.1 1.3-.1 1.9-.1zM231.9-20.3c.4-.1.8-.2 1.2-.4h.1c.3.1.7-.2 1 .2.3.4.3.8.2 1.3-.1.5-.4.7-.7 1.1-.1 0-.2 0-.3.1-.4 0-.8 0-1-.5-.2-.4-.4-.7-.6-1-.1-.4 0-.6.1-.8z" />
                                                <path class="st40"
                                                    d="M216-20.6c.1-.2.2-.4.2-.5.1-.3 0-.6-.3-.8-.1-.1-.2-.2-.4-.2-.7-.3-.9-.8-.8-1.5.1-.4.3-.5.6-.4.8.4 1.8.6 2.4 1.4l-1.5 2.1c0-.1-.1-.1-.2-.1z" />
                                                <path class="st41" d="M226.8-15.7c0-.2 0-.3.2-.3-.1 0-.1.2-.2.3z" />
                                                <linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse"
                                                    x1="276.582" y1="-146.987" x2="302.321" y2="-146.987">
                                                    <stop offset="0" stop-color="#f9f4d9" stop-opacity="0" />
                                                    <stop offset=".419" stop-color="#f9f4d9" />
                                                </linearGradient>
                                                <path
                                                    d="M284.3-142.3c-1.3.2-2.2-.2-4-1.6-2.7-2-3.8-3.6-3.7-5.2 0-.4.4-1.8.9-1.8 1.4 0 8.2.8 9.7.8.3 0 1.3.1 1.6-.2 1.3-.2 2.9-.6 4.2-.6 1.1.1 8.1-1.2 9.2-1.5.7-.2-.7 1-.5 1.7.2.8-3.7 3.3-3.5 4-.7 1.2-2 2.1-3.2 2.8-1.1.6-2.2 1-3.3 1.5-1 .5-2.2.8-3.4.8-1.3-.1-2.7-.6-4-.7z"
                                                    fill="url(#SVGID_9_)" />
                                                <path class="st30"
                                                    d="M270.3-180.4c1.1-.6 2-1.3 3.3-1.6 1.1-.2 2.2-.4 3.3 0h.1c2 .5 2 .5 3.2 2.2.2.3.4.3.6.2 0 .3-.4.4-.6.7-.3-.2-.5-.5-.7-.8-.6-1.1-1.4-1.7-2.7-1.7-.2-.2-.4-.2-.7-.2-1.9-.4-3.6.2-5.1 1.2-.5.3-.9.7-1.3 1-.1.1-.3.1-.4 0-.1-.1 0-.3.2-.4.3-.2.5-.4.8-.6z" />
                                                <path class="st42"
                                                    d="M276.3-181.6c.2 0 .5 0 .7.2 0 .4.3.6.6.8.5.3.8.7.9 1.3.1.7.1 1.4-.1 2-1.1.5-2.2.7-3.4.6-.4 0-.7-.2-1-.5-.9-1-.8-2.1-.8-3.3 0-.3.2-.4.4-.6.4-.3.9-.2 1.3-.3.6 0 1 .2 1.4-.2zm-.8 2.7c.2-.1.3-.1.4-.2.4-.3.4-.9.1-1.3-.2-.2-.4-.2-.7-.1-.5.3-.6.9-.3 1.3.2.1.4.2.5.3z" />
                                                <path class="st31"
                                                    d="M272.9-177.1c-1.2-.2-2.2-.3-3-.9.6-.9 1.1-1.3 2.3-1.8.2.9.1 1.8.7 2.7z" />

                                                <path class="st43"
                                                    d="M278.4-177.4c.1-.7.2-1.3.1-2 .2.1.4.2.5.3.3.3.9.6.7 1.1-.2.5-.7.7-1.3.6z" />
                                                <path class="st42"
                                                    d="M285.6-137c1.1 0 1.7.4 2.1 1.4.1.3 0 .5-.2.7-.2.2-.5.2-.7-.1-.6-.9-1.5-.9-2.5-.8-.3 0-.6 0-.8-.3-.1-.2.1-.6.5-.8.6-.1 1.2-.1 1.6-.1z" />
                                                <path class="st8"
                                                    d="M306.4-181c1.3.5 1.8 1.6 2.3 2.8-.6.6-1.3.7-2.1.9-.2 0-.3-.2-.2-.3.4-1 .3-2-.1-3 0-.1 0-.2.1-.4z" />
                                                <path class="st9"
                                                    d="M303.7-178.5c-.4 0-.7-.3-.8-.8 0-.4.3-.8.7-.9.4 0 .8.3.8.7 0 .5-.3 1-.7 1z" />
                                                <path class="st30" d="M301.1-176.6c.2-.2.4-.2.6-.1-.2.3-.4.2-.6.1z" />
                                                <path class="st20"
                                                    d="M287.6-112.2c.6 0 1.1.1 1.7.1.6.1.6.4.2.9h-1.8c-.6-.2-1.1-.4-1.7-.6-.3-.1-.5-.3-.7-.5-.2-.1-.2-.4-.1-.5.1-.2.3-.2.5-.1.6.3 1.2.7 1.9.7z" />
                                                <path class="st10"
                                                    d="M254.8-16.3c-1.4-.3-2.9-.6-4.3-.9l-.9-.3v-.3-12.9c0-.7.1-1.3.2-2 .2-.9.1-1.9.1-2.9 0-.5 0-.9.1-1.4.1-.6.5-.8 1-.6.6.2 1.2.2 1.8.2h5.6c-.2 1.5-.5 3-.7 4.5-.7 4.2-1.7 8.4-2.5 12.5-.2 1.3-.2 2.7-.4 4.1zM243.9-75.1h6.5c.3 0 .5.3.5.6-.1.3-.2.7-.2 1-.2 2.1-.4 4.1-.7 6.2-.2 1.9-.6 3.7-.8 5.6-.1.5-.1 1-.1 1.5 0 .3-.1.5-.3.7-.4 0-.7 0-1.1-.1-1.6-.2-3.2-.5-4.8-.8-.4-.1-.7-.1-1-.2-.2 0-.4-.2-.3-.4.2-.9.1-1.8.3-2.7.5-2.8.9-5.6 1.6-8.4.1-.9.2-2 .4-3zM251.5-52.1c2.7.4 5.5.8 8.2 1.2.5.1.7.2.7.8 0 .5-.1.9-.2 1.3-.5 2.6-1 5.3-1.1 7.9-1.1 0-2.1 0-3.2-.2-1.2-.2-2.4-.1-3.7-.1-1.7 0-1.7 0-1.7-1.7 0-1.9.3-3.7.5-5.6.1-.7.1-1.4.1-2.1.1-.5.1-1 .4-1.5z" />
                                                <path class="st45"
                                                    d="M243.9-75.1c-.2 1-.3 2.1-.6 3.1-.7 2.8-1.1 5.6-1.6 8.4-.2.9 0 1.8-.3 2.7-.1.2.1.4.3.4.3.1.7.1 1 .2 1.6.3 3.2.5 4.8.8.4.1.7 0 1.1.1 0 .5.2 1.1-.3 1.5-.7 0-1.4-.1-2.1-.2-1.4-.3-2.8-.4-4.2-.6-.2 0-.4 0-.6.2-.4.4-.2 1.4.4 1.5.5.1 1 .1 1.5.2 1.6.3 3.3.6 5 .6 0 .3.1.7-.3.9-1.3-.2-2.5-.4-3.8-.6-.8-.1-1.5-.1-2.3-.3-.4-.1-.7.1-.7.5v.6c0 .3.2.6.5.6 2.1.2 4.1.6 6.2.6 0 .5-.4 1-.3 1.5-.8-.1-1.6-.1-2.4-.2-1.1-.2-2.2-.3-3.3-.4-.5 0-.7.2-.7.6-.1 1.5-.3 2.9-.3 4.4 0 2.3.1 4.6-.2 6.9-.5 0-1 .2-1.4-.3v-4.4-6.6c0-.8 0-.8-1-1 0-.5.1-1 .1-1.5.3 0 .7.1 1-.2.3-.4.3-.9.1-1.4-.1-.3-.5-.2-.8-.3v-.6c.3 0 .7.1.8-.4.1-.6 0-.8-.6-1.1 0-.5 0-1 .1-1.4.1-.1.4-.1.4-.2.2-.4.4-.9.4-1.3-.1-1.2.3-2.3.4-3.5 0-.5.2-1 .3-1.5.3-2.4 1-4.8 1.5-7.2.2-1 .2-1 1.3-1 .4-.1.5-.1.6-.1z" />
                                                <path class="st10"
                                                    d="M245.4-19.9c-.3-.1-.7-.2-1-.4-1.1-.7-2.2-1.3-3.4-1.7-.2-.1-.4-.3-.6-.4 0-1.8.3-3.6.3-5.4 0-3.4 0-6.8.1-10.2.7 0 1.4 0 2.1.2.7.2 1.5.1 2.3.1.6 0 .7.2.7.8 0 .4.1.8 0 1.2-.3 1.1-.2 2.1-.3 3.2 0 1.1.1 2.2-.3 3.3-.1.4 0 .8 0 1.2.1 2.6.1 5.3.1 8.1zM245.1-78.8c.6-2.4 1.1-4.8 1.7-7.2.4-1.8 1-3.5 1.4-5.3 0-.1.1-.3.1-.4.3-.8.3-.8 1.1-.8h4.3c-.2 1.2-.5 2.4-.7 3.6-.3 1.7-.5 3.4-.8 5.1-.1.7-.2 1.5-.4 2.2-.2.7-.2 1.4-.3 2.1 0 .6-.2.7-.8.7h-5.6zM240.9-41.2c.3-2.3.2-4.6.2-6.9 0-1.5.2-2.9.3-4.4 0-.5.2-.6.7-.6 1.1.1 2.2.1 3.3.4.8.2 1.6.2 2.4.2-.2 1.4-.4 2.8-.5 4.2l-.3 3c-.1 1-.4 2-.4 3 0 .8-.4 1.1-1.3 1.1-1.5.1-3 0-4.4 0z" />
                                                <path class="st48"
                                                    d="M232.5-81.3c0-.5.1-.9.2-1.3.4-1 .7-1.9 1.1-2.9 3.4-.3 6.7-.6 10.1-.9.1 0 .3-.1.4-.1.2.2.3.4.3.7-.1.6-.3 1.3-.2 1.9-.2.2-.2.4-.3.6-.1.5-.2 1-.7 1.3-1.7.1-3.5.1-5.2.3-1.8.1-3.8.1-5.7.4zm2-1c2.2.2 4.3-.2 6.4-.3.5 0 1-.1 1.5-.1.2 0 .4-.1.6-.2.1-.1.1-.3.2-.4 0-.2-.1-.3-.3-.3h-.6c-2.6.4-5.2.8-7.8 1.3z" />
                                                <path class="st41"
                                                    d="M236.2-24.5c.2-.2.3-.5.3-.8l.3-6.3c.1-2.1.3-4.2.4-6.3h1.5c.4 0 .5.3.6.6-.2 4.9.2 9.9-.4 14.8-1.1-.5-2-1.1-2.7-2z" />
                                                <path class="st10"
                                                    d="M248.4-18.2c-.8.1-1.4-.4-1.8-.9v-10.1c0-.6 0-1.1.2-1.7.1-.4.1-.8.1-1.2-.1-1.7.1-3.3.3-5 .1-.5.2-.6.7-.6h.8c.2 0 .4.2.3.4-.4 1.7-.1 3.4-.2 5v.6c-.4 1.3-.2 2.7-.3 4.1-.1 3.2 0 6.3-.1 9.4z" />
                                                <path class="st45"
                                                    d="M238.9-22.6c.6-4.9.2-9.9.4-14.8.3-.7.9-.6 1.6-.6 0 3.4-.1 6.8-.1 10.2 0 1.8-.3 3.6-.3 5.4H239l-.1-.2z" />
                                                <path class="st41"
                                                    d="M238.6-53.4c1 .2 1 .2 1 1v11c-.6.5-1.4.3-2.1.3-.1-1.8.3-3.6.4-5.5.1-.9.1-1.8.2-2.7 0-1.4.2-2.8.5-4.1zM252.1-57.6c2 .3 3.9.2 5.9.3 1 .1 2 .3 3 .3.5 0 .9.3.8.7 0 .7-.4 1.1-.8 1.1-1.3-.1-2.5.1-3.8-.2-.1 0-.3-.1-.4-.1-1.7.1-3.3-.2-5-.4 0-.6-.1-1.2.3-1.7zM251.5-55c2.4 0 4.7.5 7.1.4.7 0 1.5.2 2.3.3.1 0 .2.1.2.2.2.3.1.7 0 1-.1.3-.2.6-.6.6-.4 0-.8.1-1.2 0-1.7-.4-3.5-.5-5.3-.8-.8-.1-1.7-.1-2.6-.3.1-.5.1-.9.1-1.4z" />
                                                <path class="st10"
                                                    d="M252.7-80.1c.4-2.5.9-5 1.2-7.5.2-1.2.5-2.4.7-3.6.1-.3.2-.7.3-1 .1-.4.5-.4.8-.3.3.1.4.3.4.6-.2 1-.4 2.1-.6 3.1l-2.1 9.3c0 .2-.1.4-.3.5h-.3c-.1 0-.2-.1-.2-.2 0-.2.1-.6.1-.9zM252.9-74.5c-.1 1.7-.5 3.4-.5 5.1 0 .6-.2 1.1-.3 1.6-.3 1.9-.6 3.7-.6 5.6 0 .9-.2 1.7-.3 2.6 0 .1-.2.2-.3.3-.2.1-.4.1-.6 0-.2-.1-.1-.3-.1-.4.3-2.2.4-4.3.8-6.5.2-1.2.3-2.4.5-3.6.2-1.2.4-2.5.4-3.8 0-.4.1-.8.3-1.2.1-.2.5-.4.6-.2.1.1.2.3.1.5zM248.2-41.2c-.5 0-.7-.2-.6-.8.2-1.2.3-2.4.5-3.6.3-1.2.2-2.4.5-3.6.1-.5.1-1 .1-1.5 0-.4.1-.8.3-1.2.2-.3.5-.4.8-.3.2 0 .4.2.4.4-.4 1.4 0 2.9-.4 4.4-.1.2-.1.5-.1.8.1 1.3-.4 2.5-.4 3.8 0 .3-.2.7-.2 1-.2.6-.3.6-.9.6z" />

                                                <path class="st41"
                                                    d="M248.4-56.4c-1.7 0-3.3-.3-5-.6-.5-.1-1-.1-1.5-.2s-.8-1.1-.4-1.5c.2-.2.4-.2.6-.2l4.2.6c.7.1 1.4.2 2.1.2v1.7zM248.1-54c-2.1-.1-4.1-.4-6.2-.6-.4 0-.5-.3-.5-.6v-.6c0-.4.3-.7.7-.5.7.2 1.5.2 2.3.3 1.3.2 2.5.4 3.8.6-.1.4-.1.9-.1 1.4z" />
                                                <path class="st10"
                                                    d="M254.7-38.7h-2.9c-.3 0-.6 0-.9-.1-.3-.1-.5-.3-.6-.6 0-.3.2-.5.6-.5 2.1.1 4.2-.2 6.2.3.4.1.8 0 1.2.1.2 0 .4.2.4.4s-.1.4-.4.4H254.7z" />
                                                <path class="st41"
                                                    d="M254.6-96.6h-4.4c-.4 0-.6-.3-.4-.7.3-.8.5-1 1.4-1h3.9c.1.6.1 1.2-.5 1.7zM253.9-94.1h-3.8c-.3 0-.5 0-.8-.1-.1 0-.2-.1-.2-.2-.3-.5.2-1.6.7-1.6h4.7c-.2.7-.1 1.4-.6 1.9z" />
                                                <path class="st10"
                                                    d="M247.6-76.4H245c-.2 0-.4-.1-.5-.3-.1-.3.1-.7.3-.8.2-.1.4-.1.6-.1h4.9c.3 0 .6 0 .7.4.1.4-.2.7-.7.8h-1.1c-.4.1-1 .1-1.6 0 0 .1 0 0 0 0zM244.2-39c-.8 0-1.6.2-2.4-.2-.1-.1-.3-.1-.4-.2-.1 0-.1-.2-.1-.2 0-.1.1-.2.2-.2.3 0 .6-.1.9-.1h3.5c.2 0 .4.2.4.4s-.1.4-.4.4c-.6.1-1.2.1-1.7.1z" />
                                                <path class="st41"
                                                    d="M256.9-95.6c-.1.4-.2.8-.4 1.3-.1.2-.4.2-.7.2-.2 0-.3-.2-.4-.4-.1-.5.1-.9.5-1.2.2-.2.5-.1.7-.1.2 0 .2.1.3.2zM237.3-39c-.2-.3 0-.6.1-.9.5 0 1 0 1.5.1.2 0 .3.2.3.4 0 .1-.2.3-.2.3-.6.1-1.2.1-1.7.1zM249.9-53.8c-.4 0-.6-.5-.5-.9.1-.3.3-.5.7-.4.3 0 .5.3.5.7-.1.3-.3.6-.7.6zM257.3-97.8c0 .7-.2 1-.7.9-.1 0-.3-.1-.3-.2 0-.4.1-.9.4-1.2.1-.1.4-.1.5.1.1.2.1.3.1.4zM249.7-57c0-.1.1-.3.2-.5.2-.2.4-.2.7-.1.2.1.3.2.2.4-.1.2-.1.5-.2.7-.1.2-.3.3-.5.2-.2 0-.3-.2-.4-.4v-.3z" />
                                                <path class="st40"
                                                    d="M244.4-84c-.1-.7.1-1.3.2-1.9 0-.3 0-.5-.3-.7.6-2.1 1.1-4.1 2.2-6 .3.2.3.5.2.8-.3 1-.6 1.9-.8 2.9-.4 1.3-.7 2.6-1.1 4 0 .3 0 .7-.4.9z" />
                                                <path class="st41"
                                                    d="M306.3-92.1c0-.3.1-.7.3-1.1.2-.5.4-.6.9-.6s.7.3.7.8l-.3 1.5c-.1.4-.5.5-1 .4-.4-.1-.5-.3-.5-.6-.1-.1-.1-.2-.1-.4zM305-94.1c.6 0 .9.3.8.8-.1.4-.1.8-.2 1.2-.1.5-.5.8-1 .7-.3-.1-.5-.2-.5-.5-.1-.7.1-1.3.4-1.9.1-.2.4-.3.5-.3zM307.7-94.4c-.5 0-.8-.2-.8-.5 0-.5.3-.7.8-.7.4 0 .7.2.7.6 0 .4-.2.6-.7.6zM305.4-94.7c-.2 0-.5 0-.5-.3 0-.5.3-.9.8-.9.4 0 .7.2.6.6 0 .5-.3.6-.9.6zM326.5-116.5c.9.9 1 2 1.2 3.2.1.6 0 1.2 0 1.7-.4.1-.5-.1-.6-.2-.6-.8-1-1.8-1.9-2.5.1-1 .5-1.7 1.3-2.2z" />
                                                <path class="st30" d="M288-111.2h1.5c-.6.4-1.1.4-1.5 0z" />
                                                <path class="st40" d="M266.8-40.2h.3c-.1.2-.2.2-.3 0z" />
                                                <path class="st39"
                                                    d="M263.6-29.2c-.5 0-1.1-.6-1.1-1.2 0-.5.7-1.1 1.2-1.1.4 0 .9.6.9 1.1.1.5-.5 1.2-1 1.2zM317.6-97.2c-.1.1-.3.2-.4.2-.7.4-1 .4-1.4-.1-.4-.5-.4-1 0-1.5.2-.3.5-.4.9-.5.6.1.9.4.9 1v.9z" />
                                                <path class="st15"
                                                    d="M329-83.4c-1.5-.4-3-.8-4.3-1.4 1.4.1 2.7.5 4 .9.1 0 .3.1.3.5z" />
                                                <path class="st10" d="M334-85.4h.1l-.1.1v-.1z" />
                                                <path class="st41"
                                                    d="M306 25.2v-.5c0-.3.1-.6.5-.7.5-.1 1-.5 1.4-.1.5.5 0 1 0 1.6 0 .2-.2.4-.4.4-.3.1-.6.2-.9.2-.3.1-.6-.1-.6-.5v-.4zM303.9 29h-.5c-.2 0-.4-.2-.3-.4.1-.4.2-.8.3-1.1 0-.1.2-.2.3-.2h1c.2 0 .3.2.4.4v.7c0 .4-.2.6-.7.6h-.5zM303.5 25.5c0-.1 0-.3.1-.5.1-.5.6-.8 1.2-.6.1 0 .3.2.3.3.1.3.1.6.1.9 0 .3-.2.6-.5.6-.1 0-.3.1-.4.1-.4.1-.6-.1-.6-.4-.2-.1-.2-.2-.2-.4zM307 26.8c.3 0 .6 0 .6.3 0 .5 0 1-.4 1.4-.3.2-.6.2-.9.1-.4-.1-.3-.5-.4-.7v-.3c0-.5.2-.7.6-.7.2-.1.4-.1.5-.1zM357.7-40.4v-.3c.1-1 .6-1.2 1.5-.9.5.2.6.4.5.9-.1.2-.1.4-.2.6-.3.9-.7 1-1.5.5-.3-.2-.3-.5-.3-.8zM360.2-42.9c0 .1 0 .2-.1.4 0 .2-.2.4-.4.3-.2 0-.4-.1-.6-.2-.8-.3-1-.7-.5-1.5.2-.3.4-.3.6-.3.8.3 1 .6 1 1.3zM360.5-38.5c-.3-.1-.7-.4-.6-.7.1-.5.2-1 .5-1.4.2-.2.4-.3.7-.1.2.1.3.3.2.5l-.3 1.5c0 .2-.2.3-.5.2zM361.7-42.4v.2c0 .2 0 .5-.3.6-.2.1-.5-.2-.6-.6 0-.2 0-.4.1-.6.1-.1.2-.2.3-.2.2 0 .4.1.4.3.1.2.1.3.1.3z" />
                                                <path class="st10"
                                                    d="M324.3-51c-.8.3-1.7.7-2.5 1-.3.1-.6.3-1 .2.2-.6.3-1.3.5-1.9 1-3.4 2-6.7 3.2-10 .9-2.6 1.7-5.1 2.8-7.6.2.2.3.6.7.6.9-.1 1.8.3 2.7.3 1.1 0 2.2.3 3.3.6.7.2 1.4.4 2.1.4.2.9-.2 1.7-.3 2.6-.3 1.6-.7 3.2-1 4.8 0 .2-.2.4-.1.6.2 1.6-.8 2.9-1.1 4.4-.1.4-.4.5-.8.2-.2-.1-.3-.3-.5-.1-.7.5-1.5.6-2.2 1.1-.4.3-.9.5-1.3.7-1.2.4-2.3 1.1-3.4 1.6-.6 0-.9.2-1.1.5zM327.6-69.9c.2-.7.4-1.4.9-1.9 1 .2 2 .3 3 .5 1.7.4 3.4.7 5.1 1.1.1.6-.3 1.1-.3 1.8-.6-.2-1.3-.3-1.9-.5-2.3-.6-4.5-.9-6.8-1z" />
                                                <path class="st40"
                                                    d="M327.6-69.9c2.3.1 4.6.5 6.8 1 .6.2 1.3.3 1.9.5 0 .4-.2.7-.3 1-.7 0-1.4-.2-2.1-.4-1.1-.3-2.2-.6-3.3-.6-.9 0-1.8-.4-2.7-.3-.4 0-.5-.4-.7-.6 0-.3.2-.4.4-.6zM336.6-70.2c-1.7-.4-3.4-.7-5.1-1.1-1-.2-2-.4-3-.5.1-.3.1-.7.4-.9 1.7-.1 3.3.5 5 .8.9.2 1.9.3 2.7.7v1z" />
                                                <path class="st10"
                                                    d="M336.9-62.3v.5c0 .1-.1.1-.1.2 0-.1-.1-.2-.1-.3 0-.1.1-.2.2-.4z" />
                                                <path class="st40" d="M338.7-71.5c0 .3-.1.5-.3.6 0-.2.1-.4.3-.6z" />
                                                <path class="st41"
                                                    d="M295.1-52.2c-.6 0-.9-.3-.7-.8l.3-.9c.2-.5.5-.7 1-.7.7 0 .9.3.8.9l-.3.9c-.3.5-.5.6-1.1.6zM294.6-51.5c.6 0 .8.3.6.9-.1.3-.2.6-.4.8-.2.4-.6.5-1.1.3-.1 0-.2-.1-.2-.2-.4-.5.1-1.8.7-1.9.2 0 .3.1.4.1zM293.3-54.6h.3c.3 0 .5.2.4.5-.1.4-.2.8-.4 1.1-.2.4-.5.5-1 .4-.2-.1-.3-.2-.4-.4-.1-.5.2-1 .4-1.4.1-.2.4-.2.7-.2zM291.7-49.7c-.2 0-.4-.3-.3-.6.1-.3.2-.7.3-1 .2-.4.5-.6 1-.5.2 0 .4.2.3.4-.1.5-.3.9-.5 1.4-.1.3-.4.3-.8.3z" />
                                                <path class="st30"
                                                    d="M312.1-38.4c.7-.5 1.6-.7 2.4-.8 1.1-.2 2.2-.5 3.2-.8.6-.2 1.1-.2 1.6 0 .1.1.3.1.4.1 1.5.6 2.8.2 3.9-.9.9-.8 1.8-1.7 2.6-2.6.4-.4.8-.8 1.3-1.1 1-.6 1.9-1.1 2.9-1.6.7-.4 1.4-.6 2.2-.7.9-.1 1.9-.3 2.7-.9.2-.1.3-.2.5-.3.5-.2.7-.1.7.4v2.1c-.2.2-.4.3-.7.3-.3 0-.6.1-.9 0-1.5-.3-2.7.4-3.8 1.2l-3 2.1c-1 .6-1.9 1.1-3 1.5-1.2.4-2.3 1-3.4 1.7-1.8 1.1-3.6 2-5.7 2.5-1.3.3-2.5.9-3.7 1.4-.7-.8-1.1-1.8-.9-2.9h-.1c.4-.1.7-.3.8-.7z" />
                                                <path class="st8"
                                                    d="M311.5-37.6c-.1 1.1.2 2.1.9 2.9-.5.4-1.1.6-1.8.8 0-1 .4-2.8.9-3.7zM312.1-38.4c-.1.3-.4.5-.7.7 0-.4 0-.8.4-1.1.1.2.2.3.3.4z" />
                                                <path class="st42"
                                                    d="M238.9-22.6v.1c0 .6-.3 1-.8 1.2 0-.2.2-.4-.1-.5-1.2-.7-2.2-1.7-3.4-2.3-1-.5-1.7-1.4-2.8-1.8-.2-.1-.3-.3-.2-.5 0-.3.2-.4.5-.5.5-.2.9.1 1.3.3.2-.9-.2-1.7-.2-2.5.7.8 1.1 1.7 1.2 2.8.1 1.1.8 1.6 1.9 1.8.6.9 1.5 1.5 2.6 1.9z" />

                                                <path class="st41"
                                                    d="M238.9-56.8c.3 0 .7 0 .8.3.2.5.3 1-.1 1.4-.2.3-.6.2-1 .2.1-.6-.1-1.3.3-1.9zM239.2-59c.6.3.7.5.6 1.1-.1.5-.5.4-.8.4 0-.4-.1-1 .2-1.5z" />
                                                <path class="st40"
                                                    d="M230.5-34.7c-.2-.6-.5-1.1-.8-1.6 1 .3 1.1.4.8 1.6z" />
                                                <path class="st20"
                                                    d="M220.6-27c.6 0 .8-.5 1.3-.6 0 .1 0 .3-.1.4-.8.9-1.5 1.9-2.5 2.6.1-1 .3-1.9 1.3-2.4zM221.9-27.6c-.1-1.2-.2-2.4.3-3.6.1-.2.2-.3.3-.5.2 1.4.3 2.8-.6 4.1zM219.1-24.3c0-.2.1-.3.3-.3-.1.2-.2.3-.3.3z" />
                                                <path class="st41"
                                                    d="M216.1-27.3c.7.2 1.4.4 2 .7.2.1.3.4.3.6v.1c-.2.5-.2 1.4-.8 1.6-.7.2-1.4-.5-2-.8-.1-.1-.2-.3-.2-.4-.1-.6 0-1.1.3-1.6.1 0 .2-.1.4-.2zM224.8-56.1c.4.3.7.6.6 1.2v.9c-.3-.2-.6-.3-1-.5-.3-.2-.6-.4-.6-.8.2-.5.5-.8 1-.8z" />
                                                <path class="st14"
                                                    d="M238.1-15.1c-.8 1-2 1.6-2.7 2.7-.1.1-.4.2-.5.3-.9.7-2.1.5-3.3.8.4-.7 1.1-.9 1.4-1.5.1-.2.3-.3.5-.3 1.2-.3 2.2-.9 3.3-1.5.4-.2.8-.5 1.3-.5z" />
                                                <path class="st24"
                                                    d="M233.4-18.1v.2c-.6.3-1.3.7-1.9 1h-.1c0-1-.1-1.9-1.3-2.3.5-.5 1.1-1 1.8-1.1-.1.2-.2.5-.1.7.2.3.4.7.6 1 .2.5.6.5 1 .5z" />
                                                <path class="st43"
                                                    d="M275.5-178.9c-.2-.1-.4-.2-.5-.3-.3-.4-.2-1 .3-1.3.2-.1.5-.1.7.1.4.4.4 1-.1 1.3 0 .1-.2.1-.4.2z" />
                                                <path class="st15"
                                                    d="M234.5-82.3c2.6-.4 5.2-.8 7.8-1.3h.6c.1 0 .3.1.3.3 0 .1-.1.3-.2.4-.2.1-.4.1-.6.2-.5.1-1 .1-1.5.1-2.2.1-4.3.5-6.4.3z" />
                                                <g class="st2">
                                                    <circle cx="235.3" cy="-12.4" r="8.9" fill="#fff" />
                                                    <path
                                                        d="M235.3-3.2c-5.1 0-9.2-4.1-9.2-9.2s4.1-9.2 9.2-9.2 9.2 4.1 9.2 9.2-4.1 9.2-9.2 9.2zm0-17.8c-4.8 0-8.7 3.9-8.7 8.7s3.9 8.7 8.7 8.7c4.8 0 8.7-3.9 8.7-8.7s-3.9-8.7-8.7-8.7z"
                                                        fill="#002622" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st52"
                                                        d="M235.3-18.2c-1.5 0-3 .6-4 1.7-1.1 1.1-1.7 2.5-1.7 4s.6 3 1.7 4c1.1 1.1 2.5 1.7 4 1.7s3-.6 4-1.7c1.1-1.1 1.7-2.5 1.7-4s-.6-3-1.7-4c-1-1.1-2.5-1.7-4-1.7zm0 .2c1.5 0 2.9.6 3.9 1.6s1.6 2.4 1.6 3.9-.6 2.9-1.6 3.9-2.4 1.6-3.9 1.6-2.9-.6-3.9-1.6-1.6-2.4-1.6-3.9.6-2.9 1.6-3.9 2.4-1.6 3.9-1.6zM234.5-18.9c0 .1 0 .1 0 0 0 .1-.1.1 0 0-.1.1 0 .2 0 .2h.1v-.1-.1s0-.1.1-.3c0-.1 0-.1.1-.2 0 0 0 .1.1.2.1.2.1.3.1.3v.1h1.2v-.1s0-.1-.1-.1v-1.6-.1-.1h-.1-.2-.1H235.4h-.1v.1s0 .1-.1.2c0 .1-.1.2-.1.2v-.1c-.1-.2-.1-.3-.1-.3v-.1h-.1-.2v.1s0 .1.1.1v.2c.2.5.2.6.2.6l-.1.4c-.3.4-.4.5-.4.5zm.9-.1c0 .1 0 .1 0 0v.2c-.1-.1-.1-.1 0-.2-.1.1-.1 0-.2-.4-.1-.3-.1-.4-.1-.4s0-.1.1-.3c.1-.1.1-.3.1-.4l.1-.1V-19zm.3-1.5c0-.1 0-.1 0 0 .1-.1.1-.1 0 0 .1-.1.1-.1 0 0 .1 0 .1 0 0 0l.1 1.2V-19v-1.5zM243.6-12.4v-.2-.1-.2s0-.1-.1-.1h-.1-1.3H241.8h-.1-.1-.1v1.3s.1 0 .1-.1H243.4v-.1-.2c.2-.2.2-.3.2-.3zm-.2-.2h-1.2H241.9h-.1-.1 1.7c0-.1 0-.1 0 0 .1-.1.1 0 0 0 .1 0 .1 0 0 0 .1 0 0 0 0 0zm0 .4h-1.2H241.9h-.1-.1 1.7c0-.1 0-.1 0 0 .1-.1.1-.1 0 0 .1 0 .1 0 0 0 .1 0 0 0 0 0zM228.6-12.1h.4v-.1-.3-.1-.1h-.1-.1s-.1 0-.3-.1c-.1 0-.1 0-.2-.1 0 0 .1 0 .2-.1.2-.1.3-.1.3-.1h.1V-13.4v-.1-.1h-.1-.1-.1s-.2.1-.5.1c0 .5-.1.5-.1.5s-.1 0-.3-.1c-.3-.1-.3-.1-.4-.1l-.1-.1h-.1v.2h.1s.1 0 .2.1c.1 0 .2.1.2.1h-.1c-.2.1-.3.1-.3.1h-.1V-12.5h-.1V-12.2s0 .1.1.1h1.5c-.1 0-.1 0 0 0zm-1.4-.4s.1 0 .1-.1h.2c.5-.2.6-.2.6-.2s.1 0 .4.1c.2.1.4.1.4.1h-.1-.1l-1.5.1c.1.1.1.1 0 0 0 .1 0 .1 0 0 0 .1 0 .1 0 0zM227.9-15.9H228.2c.5.1.6.1.6.1l.3.3.3.3v.1h.1v-.1-.1-.1h-.1l-.2-.2c0-.1-.1-.1-.1-.1h.2c.2 0 .3.1.3.1s.1-.1.1-.2v-.1-.1h-.1-.1-.1s-.2 0-.5-.1l-.4-.1s-.1 0-.2-.3c-.2-.2-.2-.3-.3-.3v-.1h-.1c0 .1-.1.1-.1.1v.2h.1l.1.1c.1.1.1.1.1.2h-.1c-.2 0-.3-.1-.3-.1v-.1h-.1l-.1.1c.4.3.4.4.4.5-.1 0-.1 0 0 0zM230.3-18.7l.1.1c.4.3.5.4.5.4s0 .1.1.4c.1.2.1.4.1.4v.1h.2s0-.1-.1-.3v-.2l.1.1c.2.1.2.2.2.2v.1h.1s.1 0 .2-.1h.1v-.1l.2-.1h.1v-.1h-.1l-.1-.1-.9-1.3v-.1h-.1-.1s-.1.1-.2.1h-.1l-.1.1v.1s0 .1.1.2c0 .1 0 .2.1.2l-.1-.1c-.2-.1-.2-.2-.2-.2v-.1h-.2l-.1.1v.1c.1 0 .1 0 .2.1zm.6-.6c0 .1.1.1 0 0l.8 1v.1s0 .1.1.1l.1.1s0 .1.1.1v.1h-.1s-.2-.1-.4-.3c-.3-.2-.3-.3-.3-.3s0-.1-.1-.3c-.1-.3-.1-.4-.1-.4-.1-.1-.1-.2-.1-.2zM242.8-9.3h-.1l-1-.6-.1-.1s-.1 0-.1-.1h-.1-.1v-.1h-.1-.1c-.1.1-.1.2-.1.2v.2H241.3l1.3.7h-.2c-.4-.1-.6-.2-.8-.2h-.2c-.1 0-.2 0-.3-.1-.1 0-.2-.1-.3-.1h-.1l-.1.1v.2c.1.1.2.2.3.2.1.1.2.2.3.2l.1.1.1.1c.1.1.1.1.2.1.2.1.3.2.3.3.1.2.1.3.1.3v.1h.2s0-.1.1-.1V-8h-.1l-.2-.2-.2-.2s-.1-.1-.3-.2c-.1-.1-.2-.2-.3-.2.1 0 .3.1.6.2.2.1.5.1.6.2h.2s.1 0 .1-.1v-.1-.1l.1-.1c.1-.2.1-.3 0-.5.1.1.1.1 0 0 .1 0 0 0 0 0zM240.2-5.8s-.1 0 0 0h-.1l-.1-.1-.1-.1-.6-.6-.1-.1-.2-.2-.2-.2h-.1-.1s-.1 0-.1.1v.1c0 .1.1.2.1.3 0 .1.1.3.1.4v.2c0 .1.1.2.1.2.1.2.1.3.2.4 0 .1.1.2.1.2v.2l.1-.1v-.1s0-.1-.1-.3c-.1-.2-.1-.3-.1-.3v-.4c0-.1-.1-.2-.1-.3v-.1l.4.4c.2.2.3.3.5.4l.1.1v.1h.2l.1-.1h.2c-.2 0-.2 0-.2-.1 0 .1 0 .1 0 0zM230-9.1c-.1 0-.2 0-.3.1-.1 0-.2 0-.2.1h-.2c-.2 0-.5.1-.8.2h-.2l1.3-.7H229.9v-.1-.1s-.1-.1-.1-.2v-.1s-.1-.1-.1-.2v-.1-.1l-.1-.2h-.1-.1v.1h-.1-.1l-.1.1h-.1l-1 .6h-.1-.1v.1c0 .1.1.2.1.2l.1.1c0 .1.1.2.1.2l.1.1c0 .1.1.2.1.2l.1.1v.2l.1.1H228.8c.2 0 .4-.1.6-.2.3-.1.5-.1.6-.2-.1.1-.2.1-.3.2l-.3.2-.2.2-.2.2h-.1v.1s0 .1.1.1h.2v-.1l.1-.1.3-.3.2-.2.1-.1c.1-.1.2-.1.3-.2.1-.1.2-.2.3-.2v-.1c-.4.1-.4.1-.5 0 .1 0 .1 0 0 0zm-2.2-.3l1.4-.8h.2v.1h-.1-.1s-.1 0-.1.1h-.1l-1 .6h-.2c0 .1 0 .1 0 0 0 .1 0 .1 0 0zm.2.3l1.4-.8h.2v.1h-.1-.1s-.1 0-.1.1h-.1l-1 .6c-.1.1-.1.1-.2 0 0 .1 0 .1 0 0 0 .1 0 .1 0 0 0 .1 0 .1 0 0zM232.4-6.8h-.1-.1c-.1 0-.1.1-.2.2l-.2.2s-.1.1-.2.1l-.6.6-.1.1c0 .1-.1.1-.1.1l.8-1.3s0-.1.1-.1h.1V-7h-.1s-.1-.1-.2-.1h-.1s-.1-.1-.2-.1h-.1v.2l-.1.1s0 .1-.1.1c0 0 0 .1-.1.1v.1l-.6 1-.1.1h-.1v.1c.1.1.1.1.2.1h.1v.1c.1.1.1.1.2.1H230.8s.1 0 .1.1h.2v-.1l.1-.1c.1-.1.3-.3.5-.4l.4-.4v.1c0 .1-.1.2-.1.3-.1.2-.1.3-.1.3l-.1.3c-.1.2-.1.2-.1.3v.1l.1.1v-.1-.1s0-.1.1-.2c0-.1.1-.2.2-.4 0 0 0-.1.1-.2v-.1-.1c0-.1.1-.2.1-.4 0-.1.1-.2.1-.3.1-.3.1-.3 0-.4.1 0 .1 0 0 0zm-1.8.9l.8-1.3s0-.1.1-.1h.1v.1l-.1.1s0 .1-.1.1v.2l-.6 1c-.1-.1-.2 0-.2-.1 0 .1 0 .1 0 0 0 .1 0 .1 0 0 0 .1 0 .1 0 0zM231.9-4.9zM240.9-15.3v.1s0 .1.1.2h.2v-.1h.2l.1-.1h.1l1-.6h.2v-.1c0-.1-.1-.2-.1-.2l-.1-.1h-.1v-.1c0-.1-.1-.2-.1-.2l-.1-.1h-.1v.1l-1.3.7h-.1-.1-.1v.2c.2.1.2.2.3.3zm1.6-.8l-1.4.8h-.1-.1v-.1h.2s.1 0 .1-.1h.1l1-.6c.1-.1.2-.1.2 0 0-.1 0-.1 0 0 0-.1.1-.1 0 0 .1-.1.1-.1 0 0zM238.9-17.6l.2.1v-.1-.1l.1-.1s0-.1.1-.1l.1-.1v-.1l.7-1 .1-.1h.1v-.1c-.1-.1-.1-.1-.2-.1h-.1-.1v.1L239-18l-.1.1h-.1c0 .2 0 .3.1.3-.1 0-.1 0 0 0zM236.1-4.4v-.1-.1c-.1-.3-.1-.6-.2-.8 0-.1 0-.1-.1-.2 0-.1 0-.2-.1-.3 0-.1 0-.2-.1-.3h-.2c0 .1-.1.2-.1.4 0 .1-.1.3-.1.4v.4c0 .2-.1.3-.1.4v.4h.2v-.1s0-.1.1-.3c0-.2.1-.3.1-.3s0-.2.1-.3c0-.1.1-.3.1-.3v-.1c0 .1.1.3.1.6.1.3.1.5.1.6V-4.1h.4v-.1l-.2-.2c0 .1 0 .1 0 0 0 .1 0 0 0 0zM234.8-4.4s0-.1 0 0v-1.2-.1-.1-.1-.1-.1-.1h-.4-.1v.1s0 .1.1.1V-4.2H234.7c.1 0 .2-.1.1-.2.1.1.1.1 0 0z" />
                                                </g>
                                                <circle cx="235.3" cy="-12.4" r=".7" fill="#115b82" />
                                                <circle class="st54" cx="235.3" cy="-12.4" r=".5" />
                                                <circle class="st54" cx="234.8" cy="-11.8" r=".4" />
                                                <g class="st2">
                                                    <path class="st55"
                                                        d="M234.1-11.7c-.2 0-.4-.2-.4-.4s.2-.4.4-.4.4.2.4.4-.1.4-.4.4zm0-.8c-.2 0-.3.1-.3.3s.1.3.3.3.3-.1.3-.3-.1-.3-.3-.3z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st55"
                                                        d="M234.2-11c-.2 0-.4-.2-.4-.4s.2-.4.4-.4.4.2.4.4c.1.2-.1.4-.4.4zm0-.7c-.2 0-.3.1-.3.3s.1.3.3.3.3-.1.3-.3-.1-.3-.3-.3z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st55"
                                                        d="M234.9-11.8c-.2 0-.4-.2-.4-.4s.2-.4.4-.4.4.2.4.4-.2.4-.4.4zm0-.7c-.2 0-.3.1-.3.3s.1.3.3.3.3-.1.3-.3-.2-.3-.3-.3z" />
                                                </g>
                                                <path class="st54"
                                                    d="M235.5-12.7s0-.2.4-.6c.4-.4 2.8-1.8 3.1-2.1.4-.3.3-.6.3-.6s.7-.1 1.3-.6c0 0-.8.5-.9 1 0 0-.2-.2-.7.3-.4.5-2.4 2.5-2.9 2.7-.5.2-.6.1-.6.1v-.2z" />
                                                <g class="st2">
                                                    <path class="st55"
                                                        d="M233.4-11.2c-.2 0-.4-.1-.4-.1h-.1l.1-.1c0-.1.5-.7.7-.7h.2l-.1.1c-.1 0-.4.3-.6.6.2 0 .5.1.7-.1l.1.1c-.2.2-.4.2-.6.2z" />
                                                </g>
                                                <g class="st2">
                                                    <path class="st55"
                                                        d="M232.2-10.8h-.5v-.1c.3-.6.6-.7.8-.7.2 0 .3.1.3.3 0 .2 0 .3-.1.3 0 .1-.2.2-.5.2zm-.2-.2c.2 0 .6 0 .8-.1 0-.1.1-.1 0-.2 0-.1-.1-.2-.2-.2-.1-.1-.4.1-.6.5z" />
                                                </g>

                                                <path class="st42"
                                                    d="M277.5-150.1c-.4-.2-.9-.5-1.4-.8.1-.5.2-1 .4-1.5.8.4 1.5.8 2.3 1 1.2.3 2.4.6 3.6.6 1.7 0 3.4.1 5 .1 2.3-.1 4.6-.4 6.8-.8 1.9-.3 3.8-.6 5.7-1.2.6-.2 1.3-.4 1.9-.6 1.5-.5 2.3-1.5 2.8-3 .1-.2.1-.4.2-.6.1-.1.2-.2.4-.1.1 0 .2.1.2.2.1.4.1.8-.1 1.2-.5 1-.9 2.1-1.6 3.1-1.7 2.4-3.7 4.6-5.5 6.9-.9 1.1-2 1.9-3.3 2.5-.9.4-1.8.9-2.8 1.3-1.3.6-2.6.8-4 .8-1-.1-1.9 0-2.9 0-.6-.1-.8-.6-1.2-1-.2-.2.2-.2.3-.3 1.3.1 2.6.1 3.9.2 1.1.1 2.2-.1 3.3-.6 1.1-.5 2.2-1 3.3-1.6 1.2-.6 2.3-1.5 3-2.7 1.2-1.2 3.2-3.7 3.6-4.6-.4-.2-.7 0-1 .1-1.6.5-3.2.8-4.9 1.1-.9.1-1.8.4-2.7.5-1.3-.1-2.7.3-4 .4h-1.5c-3.2.1-6.4.1-9.6-.6h-.2z" />
                                                <path class="st42"
                                                    d="M306.3-130.2c.6-.1.9-.6 1.4-1 .8-.7 1.6-1.4 2.5-2 .3-.2.6-.4.8-.7.5-.7 1.1-1.3 1.8-1.8.4-.4.7-.8 1-1.3.7-1.3 1.5-2.7 2-4.1.8-2.1 1.7-4.1 2.6-6.2.4-1 .8-2 .9-3.1 0-.2 0-.3.1-.4.8-1.9.8-4 1.3-5.9l.3-1.5c.1-.6.6-1 1-1.3.4-.3 1 0 1.1.4 0 .1.1.3.1.4.1 1.1.5 1.1 1.5.9.8-.1 1.4-.6 1.9-1.2 1-1.2 1.9-2.4 2.6-3.8 1-2 1.8-4.1 2.3-6.3.3-1.4.3-2.7.3-4.1 0-2.2.1-4.4-.3-6.5-.2-1-.4-2.1-.7-3.1-.1-.5-.3-1-.9-1.2-.3-.3-.6-.3-.9 0-1.1.9-2.1 1.9-3 3-.7.9-1.4 1.8-2.4 2.3-.4.2-.5.5-.3 1 .1.4.2.8.2 1.2 0 1.6.1 3.2-.1 4.7-.2 2.1-.4 4.2-.6 6.4 0 .3-.1.6-.3.8-.8.8-1.6.7-2-.4-.1-.3-.1-.7-.1-1 .1-2.4.1-4.9.2-7.3 0-1.2.1-2.4-.1-3.7-.1-.9-.2-1.8.1-2.7.2-.5.1-1-.1-1.5.3-.1.5-.4.5-.7 0-1.3.1-2.6-.3-3.9-.5-1.7-.9-3.4-1.4-5.1-.2-1-.5-2.1-.5-3.1 0-.8 0-1.6-.2-2.4-.2-.8-.1-1.7-.1-2.6 0-.6-.1-1.2-.4-1.7-.6-1.2-.8-2.6-.8-4 0-.1.1-.3.2-.4.1-.1.3-.1.4 0 1.5 1.5 3.4 2 5.2 2.8.4.2.8.4 1.3.5.7.3 1.4.4 2.2.5 1.2.1 2.4.3 3.6.3.3 0 .5.2.6.4.2.4.2.8.2 1.2v8.6c0 .8-.3 1.6-.5 2.4-.1.5-.3 1-1 1-.3 0-.5.2-.6.4-.3.4-.6.9-.8 1.3-.2.4-.1.5.3.7.2.1.4.1.6.2 1.1.4 1.1.4 2.3.1.5.3.7.9.8 1.4.4 1.7.9 3.3 1 5.1l.3 2.7c0 1-.1 2-.1 3.1 0 2.5-.4 4.9-1.3 7.2-.4 1.1-.9 2.2-1.3 3.2-.8 1.1-1.5 2.3-2.3 3.4-1.5 2.1-3.5 3.2-6.2 2.5-.2.8-.5 1.6-.4 2.4-.3 1.3-.5 2.7-1 4-.6 1.7-.6 3.5-.5 5.2-.1.5-.2 1 0 1.5-.3 2.5-.3 5-.2 7.5 0 1 .1 2 .4 3 .1.9.3 1.8.7 2.7.1.8.4 1.4.7 2.1.1.3.3.3.6.4-.3.5-.8.7-1.3.9-.1-.2-.2-.3-.3-.5-1.4-3-2.1-6.2-2.1-9.5 0-1.9.1-3.8.1-5.7v-1.3h-.2c-.1.3-.3.5-.4.8-.8 2-1.7 4-2.8 6-1.1 2-2.8 3.4-4.5 5l-.9.6c-.2.2-.5.3-.7.6-.7.8-1.6 1.4-2.5 2-1.3.9-2.7 1.9-4 2.8-2 1.4-4.2 2.5-6.7 2.6-.2 0-.4 0-.6.1-1.4.3-2.8.5-4.2.6h-.4c-.4-.1-.8-.1-1.1.1-2.7.1-5.3.2-8 0-.5-.3-1-.2-1.5-.2s-1-.1-1.5-.3c-.2-.1-.3-.3-.5-.4-.3-.3-.6-.7-.9-1-.3-.4-.6-.8-1.1-1-.2.5-.2.9-.1 1.4v.4l-.1.1c0 .1.1.1.1.2.1.3.1.6.2.9 0 .6.1 1.1.1 1.7.1 2.8.3 5.7.4 8.5 0 .6.1 1.2-.6 1.6-.1.1-.2.3-.3.5-.4 1.9-1.6 3.5-2.3 5.3-.1.3-.4.3-.6.1-.5-.3-.6-.5-.4-1 .4-.9.8-1.8 1.3-2.6.5-1 .9-2 1-3 .1-.9.3-1.8-.1-2.7 0-.6 0-1.1-.1-1.7.2-.2.5-.3.6-.7.5-1.3.4-2.7.3-4.1 0-.3-.3-.4-.5-.4h-.6c0-.5 0-1.1-.1-1.6.2-.2.3-.5.4-.8 0-1.8-.1-3.6-.4-5.4-.1-.5-.2-.9-.5-1.2-.7-.6-1.1-1.5-1.8-2.1-.5-.8-1.1-1.6-1.6-2.4-.1-.1-.1-.3-.2-.4-1.3-2.1-2.6-4.1-3.6-6.4-.2-.4-.5-.8-.7-1.2-.2-.7-.6-1.3-.9-1.9-1.1-2.1-1.7-4.3-2-6.7-.1-.9-.2-1.8-.4-2.7-.1-.3-.1-.7-.4-.9-.8-.7-1.6-1.5-2.4-2.2-.9-.9-1.6-2-1.7-3.3l-.3-1.5c0-2.5-.2-5-.5-7.4-.2-1.4-.4-2.8-.7-4.2-.1-.6-.1-1.2-.2-1.8-.2-1.8-.2-3.7.1-5.5.1-.6.2-1.1.4-1.6.3-1 .8-1.8 1.8-2.1h1.1c.3 0 .5-.2.3-.5-.1-.2-.1-.5-.2-.7v-.5c.5-1.1.1-2.1-.5-3-.6-.9-.8-1.8-1.1-2.8-.3-1.2-.5-2.4-.8-3.6-.4-1.4-.6-2.9-.8-4.3-.1-1.1-.3-2.2-.5-3.3-.1-.7-.2-1.3 0-2 .2-.9.2-1.7.2-2.6v-2.6c-.1-1.8.6-3.4 1.4-4.9.6-1.1 1.4-2.1 2.2-3.1.2-.2.4-.4.7-.6.8-.5 1.6-1 2.5-1.4 1.3-.5 2.1-1.6 2.8-2.7.4-.7.7-1.4 1-2 1.5-2.7 3.7-4.4 6.6-5.3.1 0 .3-.1.4.1 0 .1 0 .3-.1.4-.1.2-.2.3-.3.5-1.1 1.7-1.2 3.5-.8 5.4.3 1.6.7 3.3 1.2 4.9 0 .1.1.3.1.4 0 .3-.2.6-.5.6h-.8c-1.4-.1-2.6.6-3.6 1.4-1.8 1.5-3.2 3.3-4.3 5.3-.6 1.3-.9 2.7-1.2 4.1-.4 1.8-.3 3.5-.3 5.3v10.9c0 .6.1 1.2-.3 1.8-.9 1.4-.6 2.8-.3 4.3.1.2.3.3.5.3.2 2.5.4 4.9.6 7.4.1 1 .1 2 .2 3 0 .6 0 1.1-.4 1.6-.3.1-.2.3-.1.6-.1 1.7-.2 3.5 0 5.2 0 .2-.1.4-.1.6v1.2c0 .3-.3.6-.6.6s-.6-.2-.6-.6v-.8-5-2.1c0-.3 0-.5-.3-.6-.5-.2-.5-.7-.6-1.1-.3-1.2-.6-2.5-1.5-3.4-.1-.5-.5-.8-.7-1.2-.2-.3-.4-.7-.6-1.1-.2-.3 0-.7.4-.9.3-.2.6-.1.8.1.2.2.4.5.5.7l.9 1.2c.3.4.6.9 1 1.3 0-1.5-.4-2.9-1-4.3l-.1-.1c-.4-.5-.9-.7-1.5-.7s-1 .5-1.2 1c-.1.2-.1.4-.1.6-.5 2.4-.5 4.7-.1 7.1.5 3.5 1 7.1 1.1 10.6 0 .5-.1 1 .3 1.5-.2.8 0 1.6.2 2.3.1.3.2.7.5.9 0 .2.1.3.3.3.3.7.9 1.1 1.5 1.6.4.3.3-.2.3-.4.1-.4.1-.7-.2-1v-.2c0-.4 0-.9.1-1.3 0-.3.2-.4.5-.5.3 0 .5.1.6.3.1.4.2.8.2 1.2.1.5 0 1.1.3 1.6.4 2 .5 4 .7 6.1.3 2.3.9 4.5 2 6.5.5 1 1.1 2 1.5 3 1.5 3.2 3.4 6.1 5.4 9 1.2 1.7 2.3 3.4 3.2 5.2.6 1.2 1.5 2.1 2.5 2.9.8.6 1.9.8 2.9.9 3.9.1 7.8.1 11.6-.5l4.8-.9c.9-.2 1.8-.6 2.5-1.1 1.6-1.7 3.4-2.9 5-4.4z" />
                                            </g>

                                            <g id="Layer_2">
                                                <path class="st56"
                                                    d="M180.4 161.1h-5.1c-.3 0-.5-.2-.5-.5v-1.7-1.7-1.7-1.7-1.7-1.7-1.7c0-.8.1-.9.1-1.7v-1.7-1.7-1.7-1.7-1.7-1.7-1.7c0-.3.2-.5.5-.5h8c.6 0 1.2 0 1.7.1.6.1 1.2.2 1.7.3.6.1 1.1.3 1.6.5.6.2 1.1.5 1.5.8.5.3.9.7 1.3 1.1.4.4.7.9.9 1.4.3.5.4 1 .6 1.6.1.5.2 1.1.2 1.7 0 .6-.1 1.2-.2 1.7-.1.6-.3 1.1-.6 1.6s-.6 1-1 1.4c-.1.1-.1.3 0 .3.5.3.9.7 1.3 1.1.4.4.7.9 1 1.4.3.5.5 1.1.6 1.6.1.6.2 1.1.2 1.7 0 .6 0 1.1-.2 1.6-.1.6-.3 1.1-.5 1.6s-.5 1-.9 1.4c-.3.4-.7.8-1.1 1.2-.4.4-.8.7-1.3 1-.5.3-1 .5-1.5.7-.5.2-1 .4-1.6.5-.5.1-1.1.2-1.6.3-.5.1-1.1.1-1.6.1h-1.7c-1-.2-1-.2-1.8-.2zm0-2.4h3.6c.5 0 .9 0 1.4-.1.5 0 .9-.1 1.3-.2s.8-.2 1.3-.4.9-.3 1.2-.5c.3-.2.6-.4 1-.7.3-.3.6-.5.8-.8l.6-.9c.1-.3.2-.6.3-1.1.1-.3.1-.7.1-1.2 0-.4 0-.9-.1-1.2-.3-1.8-.8-2.5-1.9-3.4-.4-.3-.8-.6-1.2-.8-.2-.1-.5-.2-.7-.3-.1 0-.2-.1-.3-.1-.3-.1-.2-.1 0-.2l.9-.6c.5-.4.8-.8 1.2-1.3.6-.9.8-2 .8-3.1 0-.4 0-.8-.1-1.2-.1-.4-.2-.8-.4-1.1-.2-.4-.4-.7-.6-.9-.2-.2-.5-.5-.9-.7-.3-.2-.7-.4-1.1-.6-.4-.2-.8-.3-1.3-.4-.6-.1-1-.2-1.4-.3-.4 0-.9-.1-1.5-.1H177.5c-.3 0-.3 0-.3.4v21.2c0 .5.2.4.7.4h1.9c0 .2.2.2.6.2zm-.6-11.9H178.1c-.1 0-.2-.1-.2-.2v-1.2-2.5-.9-.7-2.8-1.2c0-.1.1-.2.2-.2H183.1c.8 0 1.5.1 2.2.2 1.1.2 2 .6 2.7 1.2 1.6 1.3 1.6 2.9 1.6 3.5 0 1.3-.5 2.5-1.4 3.4-.6.5-1 .8-1.6 1-.5.2-1.1.4-2.2.4h-4-.6zm4 11.2h-5.6c-.1 0-.2-.1-.2-.2v-1.1-1.5-1.6-1.9-.9-3.1c0-.1.1-.2.2-.2H185.4c.8 0 1.5 0 2.2.3 1 .4 1.8 1 2.3 1.8.6.8.9 1.8.9 2.9 0 1-.2 2-.8 2.8-.5.8-1.3 1.4-2.2 1.9-.6.3-1.4.5-2.2.7-.5 0-1.3.1-1.8.1zm-.6-13.2c.5 0 1.2-.1 1.9-.2.6-.2 1.2-.4 1.6-.9.4-.4.6-1 .6-1.7 0-.4 0-1.1-.7-1.6-.3-.3-.9-.5-1.7-.7-.5-.1-1.1-.1-1.8-.1h-2.6c-.1 0-.2.1-.2.3V144.7c0 .1.1.2.2.2h1.3c.7 0 .7-.1 1.4-.1zm2.2 10.7c.5-.1 1.1-.2 1.6-.5.5-.2.9-.6 1.2-1 .3-.4.5-.9.5-1.5s-.2-1.1-.5-1.5c-.3-.4-.8-.7-1.3-.9-.5-.2-1-.3-1.5-.4-.5-.1-1.1-.1-1.6-.1h-3.2c-.1 0-.3.1-.3.2v5.4c0 .1.1.2.3.2h3.2c.4.2 1 .2 1.6.1zM215.5 161.1H214c-.3 0-.5-.2-.5-.5v-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7c0-.3.2-.5.5-.5h8.5c.6 0 1.1.1 1.6.1.6.1 1.1.1 1.6.2.6.1 1.1.3 1.6.5s1 .4 1.5.7c.5.3.9.6 1.3 1s.8.8 1.1 1.2c.3.4.5.9.8 1.5.2.5.4 1 .5 1.6.1.5.1 1.1.1 1.6 0 .6 0 1.2-.2 1.8-.1.6-.3 1.2-.6 1.8-.2.6-.5 1.1-.9 1.6s-.8.9-1.3 1.3-1 .7-1.5 1c-.1.1-.2.2-.1.3.4.7.4.7.8 1.5.4.7.4.7.8 1.5.4.7.4.7.8 1.5.4.7.4.7.8 1.5.4.7.4.7.8 1.5l.8 1.4c.4.7.4.7.8 1.5v.1c0 .2-.1.3-.3.3h-5.4c-.3 0-.6-.2-.8-.5-.4-.8-.4-.8-.8-1.5-.4-.8-.4-.8-.8-1.5-.4-.8-.4-.7-.9-1.5-.4-.8-.4-.7-.9-1.5-.4-.8-.4-.8-.8-1.5-.4-.8-.4-.8-.8-1.5-.1-.1-.2-.2-.4-.2h-2.3c-.1 0-.3.1-.3.3v9c0 .3-.2.5-.5.5h-1.5c-.8-.6-.8-.6-1.6-.6zm.5-2.4H216.6c.1 0 .1 0 .1-.1v-.7-.8-.9-2.3-1.2-1.4-1.2-.8c0-.1.1-.2.2-.2h6.3c.1 0 .2.1.3.2.4.7 1 1.8 1.1 2l.4.8.4.8c.1.2.2.4.4.7.2.4.3.5.4.7.1.2.2.4.5.8.2.3.3.5.4.7.1.2.2.4.5.8l.4.8c.1.2.2.3.4.7.2.3.3.5.4.7 0 .1.1.1.2.1h.8s.1 0 .1-.1c-.1-.2-.2-.3-.3-.5-.1-.2-.2-.4-.4-.7-.2-.3-.3-.5-.4-.7l-.4-.8-.4-.8c-.1-.2-.2-.3-.3-.6-.2-.3-.3-.5-.4-.7l-.4-.8c-.2-.3-.3-.5-.4-.7-.1-.2-1.3-2.4-1.8-3.3 0-.1 0-.2.1-.2 1-.2 2.1-.6 3.4-1.7.3-.3.6-.6.9-1 .2-.3.4-.7.6-1.1.2-.5.3-.9.4-1.3.1-.4.1-.9.1-1.4 0-.4 0-.9-.1-1.2l-.1-.5c-.2-.8-.6-1.5-.7-1.7-.2-.2-.4-.5-.7-.8-.3-.3-.6-.5-.9-.7-1.6-1-3.4-1.2-5.5-1.2h-5.8c-.4 0-.5.1-.5.5V158.7h.1zm4.4-10.3H216.8c-.1 0-.2-.1-.2-.2v-.2-1.6-2.4-2.5-.9-1.4-1-.8c0-.1.1-.2.2-.2h5.4c.6 0 1.3 0 2 .1.8.1 1.6.3 2.2.7 1 .5 1.8 1.2 2.2 2.1.5 1 .5 2 .5 2.5v.1c0 1-.2 1.8-.5 2.5-.4.8-1 1.5-1.9 2.1-.7.5-1.5.8-2.3 1-.7.1-1.4.2-2.2.2h-.7c0-.1-.5-.1-1.1-.1zm.5-2.2h1.5c.5 0 1.1 0 1.7-.2.5-.1 1.1-.3 1.5-.7.4-.3.9-.7 1.1-1.2.2-.5.3-1.1.3-1.8 0-.4 0-.9-.3-1.4-.2-.4-.6-.8-1.2-1.1-.4-.2-.9-.4-1.5-.5-.5-.1-1-.1-1.6-.1h-3c-.1 0-.3.1-.3.2v6.4c0 .1.1.2.2.2.8.2.8.2 1.6.2zM269.4 159.1v1.5c0 .3-.3.5-.5.5H252.7c-.3 0-.5-.2-.5-.5v-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7c0-.3.2-.5.5-.5H268c.4 0 .5.3.5.5v4.5c0 .3-.2.5-.5.5h-10.2c-.1 0-.3.1-.3.3v4.5c0 .1.1.3.3.3h8c.3 0 .5.2.5.5v4.2c0 .3-.2.5-.5.5h-8c-.1 0-.3.1-.3.3v5.4c0 .1.1.3.3.3H268c.3 0 .5.2.5.5v1.5c0 .8.9-.1.9.7zm-2.4-1c0-.1 0-.1-.1-.1H256.1c-.1 0-.2-.1-.2-.2v-2-1.5-1.5-1.7-1.6-1.8c0-.1.1-.2.2-.2h8.4c.1 0 .1-.1.1-.1v-.3-.2c0-.1-.1-.1-.1-.1H256.3c-.1 0-.2-.1-.2-.2v-1.1-1.8-1.8-1.6-1.5-1.4c0-.1.1-.2.2-.2h10.5c.1 0 .1-.1.1-.1v-.3-.2c0-.1-.1-.1-.1-.1H255.8c-.4 0-.4.1-.4.7V158.1c0 .7.3.7.7.7H267.2c.1 0 .1 0 .1-.1v-.3l-.3-.3zm-10.9-11.4zM287.4 161.1c-.3 0-.4-.3-.3-.5.3-.8.2-.8.5-1.6l.6-1.6c.3-.8.2-.8.5-1.6l.6-1.6c.3-.8.3-.8.5-1.6s.3-.8.5-1.6.2-.8.5-1.6l.6-1.6c.3-.8.3-.8.5-1.6s.3-.8.5-1.6c.3-.8.2-.8.5-1.6l.6-1.6c.3-.8.2-.8.5-1.6s.2-.8.5-1.6l.6-1.6c.3-.8.2-.8.5-1.6.1-.3.3-.5.7-.5h5.1c.3 0 .6.2.7.5.3.8.2.8.5 1.6l.6 1.6c.3.8.2.8.5 1.6l.6 1.6c.3.8.3.8.5 1.6s.2.8.5 1.6.3.8.5 1.6.3.8.5 1.6.2.8.5 1.6.2.8.5 1.6.3.8.5 1.6c.3.8.2.8.5 1.6s.3.8.5 1.6.3.8.5 1.6.3.8.5 1.6c.3.8.3.8.5 1.6v.1c0 .2-.2.4-.4.4H305.1c-.3 0-.6-.2-.7-.5-.3-.9-.3-.9-.5-1.8s-.3-.9-.6-1.8-.3-.9-.5-1.8c0-.1-.2-.3-.3-.3h-7.2c-.2 0-.3.1-.3.2-.3.9-.3.9-.5 1.8-.3.9-.2.9-.5 1.8s-.2.9-.5 1.8c-.1.3-.4.5-.7.5h-3.2c-1.4.1-1.4.1-2.2.1zm18.9-2.3h.7l.1-.1c-.1-.2-.1-.4-.2-.7-.1-.4-.2-.6-.3-.8-.1-.2-.1-.4-.3-.8-.1-.4-.2-.6-.3-.8-.1-.2-.1-.4-.3-.9-.1-.5-.2-.7-.3-.9-.1-.2-.1-.4-.2-.7-.1-.4-.2-.5-.2-.7-.1-.2-.2-.4-.3-.9-.1-.4-.2-.6-.3-.8-.1-.2-.1-.4-.2-.8s-.2-.6-.3-.9c-.1-.2-.1-.4-.2-.8s-.2-.6-.3-.8c-.1-.2-.1-.4-.3-.8-.1-.4-.2-.6-.3-.8-.1-.2-.1-.4-.3-.8-.1-.4-.2-.7-.3-.9-.1-.2-.1-.4-.2-.8l-.5-1.6c-.1-.4-.2-.5-.2-.7-.1-.2-.2-.4-.3-.9-.1-.5-.2-.7-.3-.9-.1-.2-.1-.4-.2-.7-.1-.4-.2-.5-.2-.7-.1-.2-.2-.5-.3-.9-.1-.2-.1-.2-.1-.3-.1-.2-.2-.2-.3-.2h-2.2c-.1 0-.2 0-.3.2 0 .1 0 .1-.1.3-.1.4-.2.7-.3.9-.1.2-.1.4-.2.7-.1.4-.2.6-.2.8-.1.2-.1.4-.3.9-.1.4-.2.6-.2.8-.1.2-.1.4-.3.9-.1.4-.2.7-.3.9-.1.2-.1.4-.2.7-.1.4-.2.5-.2.7-.1.2-.1.5-.3.9-.1.4-.2.6-.3.8-.1.2-.1.4-.3.8-.1.4-.2.6-.3.8-.1.2-.1.4-.3.8-.1.5-.2.7-.3.9-.1.2-.1.4-.2.7-.1.4-.2.5-.2.7-.1.2-.1.5-.3.9-.1.4-.2.6-.3.8-.1.2-.1.4-.3.8-.1.4-.2.6-.3.8-.1.2-.1.4-.3.8-.1.4-.2.7-.3.9-.1.2-.1.4-.2.7-.1.4-.2.5-.2.7-.1.2-.1.5-.3.9-.1.3-.2.5-.2.7 0 0 0 .1.1.1h.6c.1 0 .2 0 .3-.1 0 0 0-.1.1-.1 0-.1.1-.2.1-.3.1-.4.3-.8.4-1.2.1-.4.3-.9.4-1.3.1-.2.1-.4.2-.6v-.1c.1-.2.1-.4.2-.6.1-.2.1-.4.2-.6.1-.3.2-.7.3-1 0-.1.1-.2.3-.2h10.8c.3 0 .3.3.4.5.1.3.5 1.6.6 2 .2.5.3 1.1.5 1.6l.3.9c.1.3.2.5.3.8 0 .1 0 .2.1.3.1.1.1.1.2.1zM295 152h-1.6c-.1 0-.2-.1-.1-.2.3-1.1 1-3.5 1.1-3.6.1-.2.1-.4.2-.8s.1-.5.2-.7c.2-.6.3-1.2.5-1.7.1-.2.1-.3.2-.7.2-.8.4-1.6.7-2.4 0-.1.5-1.5.9-2.8.3-.9.5-1.4.6-1.7 0-.1.2-.2.3-.2h1.3c.1 0 .2.1.3.2.1.3.4 1.1.7 2.1.3 1.2.8 2.4.8 2.5.1.2.1.4.2.8l.5 1.6c.1.4.2.5.2.7.1.2.1.4.3.8.1.4.2.7.2.9 0 .2.1.4.2.7.1.4.2.6.2.8 0 .2.8 2.5 1.1 3.6 0 .1 0 .2-.2.2h-7.9c-.2-.1-.4-.1-.9-.1zm1.4-2.2h4.5c.1 0 .2-.1.2-.2-.2-.8-.2-.8-.5-1.6s-.2-.8-.4-1.6-.2-.8-.5-1.5c-.2-.8-.2-.8-.5-1.6s-.2-.8-.5-1.5c0 0 0-.1-.1-.1 0 0-.1 0-.1.1-.2.8-.2.8-.5 1.5s-.2.8-.4 1.6-.3.8-.5 1.5l-.4 1.6-.4 1.6c-.1.1 0 .2.1.2zM336.3 161.1h-7.2c-.3 0-.5-.2-.5-.5v-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7-1.7c0-.3.2-.5.5-.5h6.8c.6 0 1.2 0 1.8.1.6.1 1.2.1 1.7.2.6.1 1.2.3 1.7.5.6.2 1.1.4 1.6.7l1.5.9c.5.4.9.7 1.3 1.2.4.4.8.9 1.1 1.4.3.5.6 1 .8 1.6.2.5.5 1.1.6 1.6.2.5.3 1.1.4 1.7.1.6.2 1.1.2 1.7 0 .6.1 1.2.1 1.8 0 .6 0 1.2-.1 1.8 0 .6-.1 1.2-.2 1.7-.1.6-.2 1.2-.4 1.7-.2.6-.4 1.1-.6 1.6-.2.5-.5 1.1-.8 1.6-.3.5-.7 1-1.1 1.4-.4.4-.8.9-1.3 1.2-.5.4-.9.7-1.4 1-.5.3-1 .5-1.6.7-.5.2-1.1.4-1.7.5-.6.1-1.1.2-1.7.3-.4-.4-.9-.4-1.5-.4zm0-2.4c.5 0 1 0 1.5-.1.6-.1 1-.1 1.5-.2s1-.2 1.4-.4c.4-.2.9-.4 1.3-.6.3-.2.7-.4 1.1-.8.3-.3.6-.6 1-.9.4-.4.6-.8.8-1.1l.6-1.2c.2-.4.4-.9.5-1.4.1-.4.2-.9.3-1.5.1-.4.1-.9.2-1.5 0-.5.1-1 .1-1.6 0-.6 0-1.1-.1-1.6 0-.5-.1-1.1-.2-1.5-.1-.4-.2-1-.3-1.5-.1-.4-.3-.9-.5-1.3-.2-.5-.4-.9-.6-1.2-.2-.4-.5-.7-.8-1.1-.3-.3-.6-.5-1-.9-.3-.3-.7-.5-1.2-.7-.5-.3-.9-.4-1.3-.6-.5-.2-1-.3-1.4-.4-.5-.1-1-.2-1.5-.2s-1-.1-1.5-.1H331.9h-.1c-.1 0-.3 0-.4.1-.2.1-.1.4-.1.6V157.9c0 .5.2.5.5.5h4c-.1.3.1.3.5.3zm0-.7h-4.2c-.1 0-.2-.1-.2-.2v-3.4-.8-.8-1-1-.8-.9-.9-.8-.9-.8-.9-.9-.8-.9-.8-.8-3.4c0-.1.1-.2.2-.2h4c.7 0 1.3 0 2.1.2.7.1 1.5.3 2.2.6.6.2 1.5.6 2.2 1.2.6.5 1.2 1.2 1.7 2 .4.7.7 1.4.9 2.2.2.6.3 1.3.4 2.1.1.5.1 1.2.1 2 0 .7 0 1.4-.1 2-.1.8-.2 1.5-.4 2.1-.2.9-.5 1.6-.8 2.2-.4.7-.9 1.4-1.6 2-.6.6-1.4 1.1-2.2 1.4-.7.3-1.5.5-2.3.6-.5.3-1.2.4-2 .4zm0-2.4c.6 0 1.2 0 1.8-.1.6-.1 1.2-.3 1.7-.5.6-.2 1-.6 1.5-1 .4-.4.8-.8 1.1-1.4.3-.5.4-1 .6-1.7.1-.5.3-1.1.3-1.7.1-.5.1-1.1.1-1.8 0-.6 0-1.2-.1-1.8-.1-.6-.2-1.2-.3-1.7-.2-.6-.4-1.2-.7-1.6-.3-.5-.7-1-1.1-1.4-.4-.4-1-.6-1.6-.8-.5-.2-1.1-.4-1.7-.4-.5-.1-1.1-.1-1.8-.1h-1.4c-.1 0-.3.1-.3.3V155.2c0 .1.1.2.3.2.7.2.7.2 1.6.2z" />
                                                <g>
                                                    <path class="st56"
                                                        d="M66.2 111.2H54.1c-1.4 0-2-.2-2-.6 0-.3.4-.8 1-1.4 2-1.9 3-4.3 3.3-7.3.3-3 .4-5.6.4-8.9 0-3.6.2-6.8.2-10.3 0-3-.2-6.3-.1-9.7 0-1.5.1-2.8.1-3.9 0-2.8-.1-4.5-.1-7 0-3.9-.1-8-.2-11.9-.1-3.3-2.1-6.7-4.2-9-.3-.3-.3-.7.3-.8.4-.1.8-.1 1.2-.1 2.1 0 4.3 0 6.6.1h2c1.8 0 3.2-.1 5-.1 4.4 0 9 .1 13.3.1 4 0 8-.1 12.1-.1h2c.3 0 .6 0 .7.4.1.2.1.6.1.9V46c0 2.2.1 4.5.1 6.6v.7c0 .4 0 .9-.1 1.2-.1.6-.5.6-.8.3-2.2-2.1-5.5-3.9-8.7-4-2.7 0-5.6-.1-8.4-.1H71.7c-.5 0-.9.3-.9.8v1.8c-.1 1.4-.1 2.8-.1 4.2 0 3.9.1 7.8.1 11.7 0 .5.4.9.8.9h13.7c.8 0 1.1 0 1.2.8v1.7c0 1.1-.1 2.3 0 3.4v3c0 .6-.1.8-.8.8h-1.4c-2.7 0-5.4.1-8.2.1-1.5 0-2.9-.1-4.4-.1-.5 0-.9.4-.9.9 0 2.3-.1 4.5-.1 6.8v11.6c0 3.2.1 4.1.9 6.1.8 1.9 2 3.4 3.3 4.7.1.1.2.3.2.4 0 .3-.2.5-.5.6-.7.1-1.7.1-2 .1l-6.4.2zM117.8 111.2H112c-.3 0-.7 0-1-.1-.5-.1-.5-.4-.3-.6 1-1.1 2.2-2.1 2.7-3.6.3-.7.4-1.3.4-2 0-1.2-.3-2.5-.7-4.4-.1-.3-.3-1.3-.6-2.7-.1-.4-.4-.7-.8-.7-.6 0-1.7-.1-5.1-.1h-6.8c-.4 0-.8.3-.9.7-.3 1.4-.6 2.5-.7 2.8-.3 1.6-.8 2.9-.8 4.3 0 .7.1 1.4.4 2.1.6 1.4 1.7 2.5 2.7 3.5.2.3.2.5-.3.6-.5.1-1.3.1-1.5.1H86.9c-.3 0-.7 0-1-.1-.5-.1-.5-.4-.3-.6 1-1 2.1-2 3.1-3.3 1.4-1.9 1.5-2.9 3-8.5.7-2.7 1.1-4.2 1.7-6.3.6-2 1-4 1.5-6 .1-.4 1.2-4.5 2.5-8.9.6-2.2 1.2-4.3 1.7-6.3.5-1.9 1-3.8 1.5-5.8.3-1.3.6-2.3.6-3.2 0-.7-.1-1.3-.5-2s-.9-1.3-1.4-1.9c-.5-.5-.8-.9-.8-1.2 0-.3.3-.4 1-.4 1.6 0 2.4-.1 4.4 0h12.3c1.1 0 1.5.1 1.5.4 0 .3-.3.6-.8 1.2-.6.7-1.2 1.3-1.6 2.1-.3.6-.4 1.1-.4 1.7 0 1 .3 2 .6 3.3.8 3.9 1.9 7.9 2.9 11.9.2.8 1.9 8.6 2 9 .5 2 1 4 1.5 6.1.5 2.1.9 3.6 1.5 6.3 1.3 5.4 1.4 6.4 2.4 8.1 1 1.7 2.2 2.6 3.3 3.7.2.3.2.5-.3.6-.3.1-.6.1-1 .1H124c-1.8 0-3.4.1-6.2.1zM105 90.5c2.6 0 4.4 0 5.3-.1.3 0 .6-.3.6-.7-.2-.9-.3-1.5-.4-1.6-.1-.4-.5-2.2-.9-4.1-.5-2.1-.8-4.4-.9-4.6-.4-1.8-.8-3.4-1.1-5.1-.4-1.8-.6-3-1.1-5.2-.1-.4-.3-.3-.4.1-.6 2.2-.8 3.1-1.2 4.8-.4 1.7-.9 3.8-1.3 5.5-.1.3-1.9 7.7-2.1 8.5 0 .1-.2.8-.4 1.6v.1c0 .3.2.5.5.5 1 .3 2.5.3 3.4.3zM139.1 111.1h-2.9c-1.1 0-1.5-.1-1.5-.4 0-.3.3-.6.8-1.2 1.4-1.5 2.3-3.3 2.6-5.6.2-2.3.3-4.3.3-6.8 0-2.6.1-5 .1-7.6 0-2.4-.1-5 0-7.8v-3c0-2.1-.1-3.5-.1-5.4v-5.4-3.1c0-.4-.3-.7-.7-.7-1.2 0-2.5 0-3.7.1-2.6.1-5.2 1.7-7 3.3-.3.2-.5.2-.6-.3-.1-.3-.1-.6-.1-1v-5-1.5-2.3c0-.7.5-1 1.2-1h5.3c2.8 0 5.5.1 8.3.1 2.7 0 5.4-.1 8.1-.1h4.4l6.3-.1c.8 0 1.2.2 1.2 1.1V66c0 1.1-.1 1.5-.4 1.5-.3 0-.6-.3-1.2-.8-1.5-1.4-3.3-2.5-5.6-2.7-1.4-.1-2.7-.2-4.1-.2-.4 0-.7.3-.7.7 0 2.1-.1 4.3-.1 5.8v10.3c0 1.6 0 3.3-.1 5.1v3c0 2.1.1 3.5.1 5.4 0 3 0 6.2.1 9.1.1 2.5 1.6 5.1 3.3 6.9.2.3.2.5-.3.6-.3.1-.7.1-1 .1H145c-2.1.3-4 .3-5.9.3zM167.9 111.2H165c-1.1 0-1.5-.1-1.5-.4 0-.3.3-.6.8-1.2 1.4-1.5 2.3-3.3 2.6-5.6.2-2.3.3-4.3.3-6.8 0-1.9.2-3.8.2-5.7 0-3.1-.2-6.1-.1-9.7v-3c0-2.1-.1-3.5-.1-5.4 0-3 0-6.2-.1-9.1-.1-2.6-1.6-5.1-3.3-6.9-.2-.3-.2-.5.3-.6.3-.1.6-.1 1-.1h6.6c1.7 0 3.5-.1 5.2-.1h2.9c1.1 0 1.5.1 1.5.4 0 .3-.3.6-.8 1.2-1.4 1.5-2.3 3.3-2.6 5.6-.2 2.3-.3 4.3-.3 6.8v6.1c0 .4.3.7.7.7h11.3c.4 0 .6-.3.6-.7v-3.4c0-3 0-6.2-.1-9.1-.1-2.6-1.6-5.1-3.3-6.9-.2-.3-.2-.5.3-.6.3-.1.6-.1 1-.1H202.9c1.1 0 1.5.1 1.5.4 0 .3-.3.6-.8 1.2-1.4 1.5-2.3 3.3-2.6 5.6-.2 2.3-.3 4.3-.3 6.8 0 2.2-.2 4.1-.2 6.2 0 2.8.2 5.9.1 9.2v3c0 2.1.1 3.5.1 5.4 0 3 0 6.2.1 9.1.1 2.6 1.6 5.1 3.3 6.9.2.3.2.5-.3.6-.3.1-.6.1-1 .1h-6.6c-1.7 0-3.5.1-5.2.1h-2.9c-1.1 0-1.5-.1-1.5-.4 0-.3.3-.6.8-1.2 1.4-1.5 2.3-3.3 2.6-5.6.2-2.3.3-4.3.3-6.8v-2.7-8.7c0-.4-.3-.7-.7-.7-1.3 0-2.6.1-3.9.1-2.4 0-4.9-.1-7.3 0-.4 0-.7.3-.7.7v3.4c0 2.1.1 3.5.1 5.4 0 3 0 6.2.1 9.1.1 2.6 1.6 5.1 3.3 6.9.2.3.2.5-.3.6-.3.1-.6.1-1 .1h-6.1c-2.1-.3-4-.2-5.9-.2zM221 111.2h-9.3c-1.1 0-1.5-.1-1.5-.4 0-.3.3-.6.8-1.2 1.4-1.5 2.3-3.3 2.6-5.6.2-2.3.3-4.3.3-6.8v-2.7-7.6c0-1.6 0-3.3.1-5.1v-3c0-2.1-.1-3.5-.1-5.4 0-3 0-6.2-.1-9.1-.1-2.6-1.6-5.1-3.3-6.9-.2-.3-.2-.5.3-.6.3-.1.6-.1 1-.1H222.2c3.4 0 6.9.1 10.2.1 3.1 0 6.2-.1 9.3-.1H243.3c.2 0 .4 0 .5.3v4.1c0 1.7.1 3.4 0 5.1v.5c0 .3 0 .7-.1.9-.1.5-.3.5-.6.2-1.7-1.6-4.2-3-6.7-3.1-2.1 0-4.3-.1-6.5-.1h-4.8c-.4 0-.7.3-.7.6v1.4c0 1.1-.1 2.2-.1 3.3 0 3 .1 6 .1 9 0 .4.3.7.6.7H235.4c.2 0 .4 0 .6.1.3.1.3.4.3.6v6.5c0 .3-.3.3-.5.3h-1.2c-2.1 0-4.2.1-6.3 0h-3.4c-.4 0-.7.3-.7.7 0 1.7-.1 3.5-.1 5.2v9.2c0 .4.3.7.7.7 2.1 0 4.2.1 6.4.1s3.8-.2 5.9-.4c2.3-.2 4.1-1.2 5.6-2.6.5-.5.9-.8 1.2-.8.3 0 .4.3.4 1v4.8c0 1 .1 1.9.1 2.9v.5c0 .6 0 1.2-.1 1.8 0 .3-.1.5-.4.7-.2.1-.6.1-.8.1h-5.5c-1.7 0-3.5-.1-5.3-.1h-8.8H222.3c-.4.2-.9.3-1.3.3zM277 111.1h-4.7c-.3 0-.7 0-1-.1-.5-.1-.5-.4-.3-.6 1-1.1 2.2-2.1 2.8-3.6.1-.3.2-.7.2-1 0-1-.5-1.9-.8-3-.6-1.8-1.1-3.3-1.6-4.6-.9-2.3-1.7-4.1-3-7-.1-.2-.2-.6-.5-1.2-.2-.4-.5-.5-1-.5H263.5c-.4 0-.7.2-.7.6 0 2-.1 3 0 3.3v5.7c0 4.6-.1 5.1.5 6.8.6 1.7 1.7 3.3 2.8 4.5.2.3.2.5-.3.6-.3.1-.7.1-1 .1-2.6 0-5.2-.1-7.8-.1-2.1 0-4.4.1-6.4.1h-.5c-.3 0-.7 0-1-.1-.5-.1-.5-.4-.3-.6 1.7-1.8 3.2-4.3 3.3-6.9.1-2.8.1-5.7.1-8.5 0-2.2.1-3.6.1-5.8V86c-.1-3.1 0-5.6 0-8.3 0-2.3-.1-4.7-.1-7 0-2.5-.1-4.5-.3-6.8-.2-2.3-1.2-4.1-2.6-5.6-.5-.5-.8-.9-.8-1.2 0-.3.3-.4 1-.4h3.2c1.6 0 3.3.1 4.9.1 4.2 0 .6-.1 10.1-.1 1.4 0 2.8.1 4.2.3 3.6.4 7.5 2 10 4.8 2.2 2.5 3.1 5.6 3.2 8.8.1 4.4-.2 7.3-1.4 10.7-.8 2.1-2.3 3.7-4.2 4.9-.3.2-.7.4-1 .6-.5.2-.5.7-.3 1.1.8 1.9 1.5 3.9 2.3 5.8.8 2 1.5 3.3 2.6 5.9 2.5 6 2.8 7.3 5 9.5.5.5.7.8 1.2 1.3.2.3.4.7 0 .8-.4.1-1.1.1-1.4.1-3.5-.2-7.2-.2-10.9-.2zm-13.5-29.2h3.5c3.8-.2 4.8-.4 6.5-2.4.9-1 1.1-2.5 1.2-3.7.1-1 .1-2 .1-3 0-1.4-.1-2.8-.4-4.2-.2-1-.8-2.1-1.6-2.8-1.7-1.6-4.5-1.6-6.5-1.6-.8 0-1.6 0-2.4.1-.3 0-.6.1-.9.3-.2.1-.2.5-.2.7v16.1c.1.2.3.6.7.5zM327 111.1h-3.8c-1.4 0-2-.2-2-.6 0-.3.4-.8 1-1.5 1.8-2 3-4.3 3.3-7.3.3-3 .4-5.6.4-8.9 0-3.4.1-6.6.1-9.9 0-3.1-.1-6.5 0-10.1 0-1.5.1-2.8.1-3.9 0-2.8-.1-4.5-.1-7v-7-4c0-.5-.4-.9-.9-.9-1.6 0-3.2 0-4.8.1-3.3.1-6.8 2.2-9.1 4.3-.3.3-.7.3-.8-.3-.1-.4-.1-.8-.1-1.2 0-2.1 0-4.3.1-6.6v-1.9-3c0-1 .6-1.2 1.6-1.2h6.9c3.6.1 7.2.1 10.8.1 3.5 0 7-.1 10.5-.1 1.7 0 4.2.1 5.7 0l8.2-.1c1.1 0 1.5.2 1.5 1.4 0 2.4.1 5.5.1 7.4v3.8c0 1.4-.2 2-.6 2-.3 0-.8-.4-1.5-1-2-1.8-4.3-3.2-7.3-3.5-1.9-.2-3.5-.2-5.3-.2-.5 0-.9.4-.9.8 0 2.7-.1 5.6-.1 7.5v13.4c0 2.1 0 4.3-.1 6.6 0 1.5-.1 2.8-.1 3.9 0 2.8.1 4.5.1 7 0 3.9.1 8 .2 11.9.1 3.3 2.1 6.7 4.2 9 .3.3.3.7-.3.8-.4.1-.8.1-1.2.1-2.6 0-5.3-.1-7.9-.1-2.9.2-5.4.2-7.9.2zM361.2 111.2h-2.9c-1.1 0-1.5-.1-1.5-.4 0-.3.3-.6.8-1.2 1.4-1.5 2.3-3.3 2.6-5.6.2-2.3.3-4.3.3-6.8v-2.7-7.6c0-1.6 0-3.3.1-5.1v-3c0-2.1-.1-3.5-.1-5.4 0-3 0-6.2-.1-9.1-.1-2.6-1.6-5.1-3.3-6.9-.2-.3-.2-.5.3-.6.3-.1.7-.1 1-.1h6.6c1.7 0 3.5-.1 5.2-.1h2.9c1.1 0 1.5.1 1.5.4 0 .3-.3.6-.8 1.2-1.4 1.5-2.3 3.3-2.6 5.6-.2 2.3-.3 4.3-.3 6.8 0 2.3-.1 4.5-.1 6.7 0 2.8.1 5.5.1 8.6v3c0 2.1.1 3.5.1 5.4 0 3 0 6.2.1 9.1.1 2.6 1.6 5.1 3.3 6.9.2.3.2.5-.3.6-.3.1-.6.1-1 .1H367c-1.9.1-3.9.2-5.8.2zM414.1 111.1h-2.9c-1.1 0-1.5-.1-1.5-.4 0-.3.3-.6.8-1.2 1.4-1.5 2.3-3.3 2.6-5.6.2-2.3.3-4.3.3-6.8 0-2.6.1-5 .1-7.6 0-2.4-.1-5 0-7.8v-2c0-.5 0-.8-.1-.8s-.3.4-.4 1c-.1.5-.3.9-.4 1.4-.2.6-.4 1.2-.5 1.8-.5 1.9-1.8 5.4-2.4 7.4-.2.7-1.3 4.2-1.5 4.9-.8 2.7-.7 2.4-1.4 5.1-.5 1.7-1 3.1-1.5 4.8 0 0-.3 1-.6 2.3-.2.8-.5 1.8-.7 2.5-.2.5-.6.9-1.2.9h-.8c-.6 0-1.1-.3-1.3-.9-.3-.9-.6-1.8-.9-2.6-.3-.8-2.6-8.4-2.8-8.8-.6-1.9-1.4-3.9-2-5.9-.7-2-1-3.5-1.9-6.1-.5-1.4-1.1-3-1.5-4.5-.3-.8-.5-1.6-.8-2.3-.2-.5-.3-.7-.4-.7-.1 0-.1.4-.1 1V89c0 2.1.1 3.5.1 5.4 0 3 0 6.2.1 9.1.1 2.5 1.6 5.1 3.3 6.9.2.3.2.5-.3.6-.3.1-.6.1-1 .1H381.8c-.7 0-1-.1-1-.4 0-.3.3-.7.8-1.2 1.4-1.5 2.3-3.3 2.6-5.6.2-2.3.3-4.3.3-6.8v-2.7-7.6c0-1.6 0-3.3.1-5.1v-3c0-2.1-.1-3.5-.1-5.4 0-3 0-6.2-.1-9.1-.1-2.6-1.6-5.1-3.3-6.9-.2-.3-.2-.5.3-.6.3-.1.6-.1 1-.1h11c.5 0 1.1.3 1.2.8.5 1.6 1 3.3 1.4 4.7.6 2 1.2 3.6 1.5 4.6.9 2.6 1.5 4.8 2.3 7.1.5 1.5 1.1 3.1 1.8 4.9.3.9.6 1.8.9 2.6.2.7.5 1.3.7 2 .3.9.6 2.1 1 2.1.2 0 .4-.3.6-1 .2-.7.5-1.4.7-2.2.7-2 1.2-4 1.8-5.9.1-.4 1.1-4.3 2.6-8.6.8-2.2 1.5-5.1 2.2-7.3l.3-.9c.2-.6.5-1.5.7-2.2.2-.5.7-.9 1.2-.9h3.7c1.7 0 3.5-.1 5.2-.1h2.9c1.1 0 1.5.1 1.5.4 0 .3-.3.6-.8 1.2-1.4 1.5-2.3 3.3-2.6 5.6-.2 2.3-.3 4.3-.3 6.8v10.3c0 1.6 0 3.3-.1 5.1v3c0 2.1.1 3.5.1 5.4 0 3 0 6.2.1 9.1.1 2.5 1.6 5.1 3.3 6.9.2.3.2.5-.3.6-.3.1-.7.1-1 .1h-6.1c-1.9.3-3.8.3-5.8.3zM444.2 111.2h-9.3c-1.1 0-1.5-.1-1.5-.4 0-.3.3-.6.8-1.2 1.4-1.5 2.3-3.3 2.6-5.6.2-2.3.3-4.3.3-6.8v-2.7-7.6c0-1.6 0-3.3.1-5.1v-3c0-2.1-.1-3.5-.1-5.4 0-3 0-6.2-.1-9.1-.1-2.6-1.6-5.1-3.3-6.9-.2-.3-.2-.5.3-.6.3-.1.6-.1 1-.1H445.4c3.4 0 6.9.1 10.2.1 3.1 0 6.2-.1 9.3-.1H466.5c.2 0 .4 0 .5.3v4.1c0 1.7.1 3.4 0 5.1v.5c0 .3 0 .7-.1.9-.1.5-.3.5-.6.2-1.7-1.6-4.2-3-6.7-3.1-2.1 0-4.3-.1-6.5-.1h-4.8c-.4 0-.7.3-.7.6v1.4c0 1.1-.1 2.2-.1 3.3 0 3 .1 6 .1 9 0 .4.3.7.6.7H458.6c.2 0 .4 0 .6.1.3.1.3.4.3.6v6.5c0 .3-.3.3-.5.3h-1.2c-2.1 0-4.2.1-6.3 0h-3.4c-.4 0-.7.3-.7.7 0 1.7-.1 3.5-.1 5.2v9.2c0 .4.3.7.7.7 2.1 0 4.2.1 6.4.1s3.8-.2 5.9-.4c2.3-.2 4.1-1.2 5.6-2.6.5-.5.9-.8 1.2-.8.3 0 .4.3.4 1v4.8c0 1 .1 1.9.1 2.9v.5c0 .6 0 1.2-.1 1.8 0 .3-.1.5-.4.7-.2.1-.6.1-.8.1h-5.5c-1.7 0-3.5-.1-5.3-.1h-8.8H445.5c-.4.2-.9.3-1.3.3z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>

                <section class="testimonial-video" id="video-testimonial">
                    <div class="testimonial-video__inner">
                        <div
                            class="container container--xlarge container--center wrapper flex flex--center space space--large">
                            <h2 class="title title--large ta-center">
                                Delightful bread and delighted customers
                            </h2>
                            <p class="testimonial-video__copy ta-center">
                                Watch how Father Time Bread is slicing up the competition by delivering fresh bread
                                directly to their customers in custom boxes.
                            </p>
                        </div>
                        <div class="testimonial-video__bg">
                            <div class="flex flex--center wrapper" data-player>
                                {{-- <div class="testimonial-video__video-wrapper" data-play-trigger
                                    data-video-id="HZwD5SX7a1Q"> --}}
                                    {{-- <button class="testimonial-video__play-btn" data-play-button> --}}
                                        <svg width="31px" height="36px" viewBox="0 0 31 36" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="UI" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Our-Customers" transform="translate(-851.000000, -1587.000000)">
                                                    <g id="Video-1" transform="translate(-24.000000, 1007.000000)">
                                                        <g id="play-button"
                                                            transform="translate(841.000000, 549.000000)">
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
                                    {{-- </button> --}}
                                    {{-- <div class="testimonial-video__overlay" data-video-overlay></div>
                                    <div id="video-player" class="testimonial-video__iframe"></div> --}}
                                {{-- </div> --}}
                            </div>
                        </div>

                    </div>
                </section>

                <section class="testimonials">
                    <div class="testimonials__inner">
                        <div class="testimonials__decors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="547" height="547" viewBox="0 0 547 547">
                                <g>
                                    <g opacity=".23">
                                        <path fill="none" stroke="#f17da4" stroke-miterlimit="50" stroke-width="51"
                                            d="M273.5 521C410.19 521 521 410.19 521 273.5S410.19 26 273.5 26 26 136.81 26 273.5 136.81 521 273.5 521z" />
                                    </g>
                                </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 145" width="212" height="145">
                                <path fill="#d0c9e3"
                                    d="M44.749 58.182h19.178c10.35 2.424 18.95 7.045 25.799 13.863C96.576 78.864 100 88.485 100 100.91c0 13.637-4.642 24.394-13.927 32.273C76.788 141.06 65.601 145 52.511 145c-15.83 0-28.538-5.606-38.127-16.818C4.794 116.97 0 102.424 0 84.545c0-26.06 8.6-46.439 25.8-61.136C42.998 8.712 67.731.91 100 0v20.455c-16.134 2.12-28.995 5.833-38.584 11.136-9.59 5.303-15.145 14.167-16.667 26.59zm112 0h19.178c10.35 2.424 18.95 7.045 25.799 13.863C208.576 78.864 212 88.485 212 100.91c0 13.637-4.642 24.394-13.927 32.273C188.788 141.06 177.601 145 164.511 145c-15.83 0-28.538-5.606-38.127-16.818C116.794 116.97 112 102.424 112 84.545c0-26.06 8.6-46.439 25.8-61.136C154.998 8.712 179.731.91 212 0v20.455c-16.134 2.12-28.995 5.833-38.584 11.136-9.59 5.303-15.145 14.167-16.667 26.59z" />
                                </svg>
                            <svg width="496" height="676" viewBox="0 0 547 675" xmlns="http://www.w3.org/2000/svg">
                                <path d="M165.505 25.495l415.883 485.82L26.38 649.695z" fill-rule="nonzero"
                                    stroke="#1ADFC7" stroke-width="51" fill="none" opacity=".226" stroke-linecap="round"
                                    stroke-linejoin="round" /></svg>
                        </div>
                        <div
                            class="testimonials-slider__track containner container--xxlarge container--center flex flex--center">
                            <div class="testimonials-slider flex__column--12 flex__column--8@medium" data-slider>
                                <div class="glide" data-ref="slider[slider]">
                                    <div class="glide__track" data-slider-container="0">
                                        <ul class="siema-js slider">

                                            <li class="glide__slide wrapper">
                                                <div class="flex flex--center">
                                                    <div
                                                        class="testimonials__slider-wrapper flex__column space space--large">
                                                        <div
                                                            class="testimonials-slider__head-content flex flex--center space space--large">
                                                            <div class="testimonial-ranking">
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                            </div>
                                                            <div class="testimonials__text-content ta-center">
                                                                We have scoured the options on the market, and I
                                                                haven&#39;t found a company that beats Packlane on
                                                                speed, quality and price. I am not surprised that they
                                                                have been growing so fast. I’ve recommended them to many
                                                                friends and colleagues who have started e-commerce
                                                                companies, and they&#39;re now happy customers of
                                                                Packlane as well.
                                                            </div>
                                                            <div class="testimonials-slider__person-photo-wrapper">
                                                                <div class="testimonials__person-photo-wrapper">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                        height="23">
                                                                        <path fill="none" stroke="#f9cf57"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M7.653 20.762l20.337-6.715m-2.881-5.88L4.79 14.821M22.327 2.24L1.999 8.89" />
                                                                    </svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="29"
                                                                        height="26">
                                                                        <path fill="none" stroke="#f17ea5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M16.148 24L27 8.807 2 2z" />
                                                                    </svg>
                                                                    <picture><img
                                                                            class="testimonials-slider__person-photo image"
                                                                            data-src="/images/anomalie-leslie-voorhees-means-founder-3f95c404df75386b17eec05729191ea9.jpeg"
                                                                            src="https://assets.packlane.com/QlZwNsYf1RO7qfiZ67lbBuRSnZv7obKkN34s8g34miA/fn:anomalie-leslie-voorhees-means-founder-3f95c404df75386b17eec05729191ea9/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2Fub21hbGllLWxlc2xpZS12b29yaGVlcy1tZWFucy1mb3VuZGVyLTNmOTVjNDA0ZGY3NTM4NmIxN2VlYzA1NzI5MTkxZWE5LmpwZWc.jpg">
                                                                    </picture>
                                                                </div>
                                                                <div class="testimonials__person-details">
                                                                    <h4
                                                                        class="title title--dark title--small d-block flex__column--12 u-m-0">
                                                                        Leslie Voorhees Means</h4>
                                                                    <p class="testimonials-slider__desc">Founder and
                                                                        CEO, Anomalie</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="glide__slide wrapper">
                                                <div class="flex flex--center">
                                                    <div
                                                        class="testimonials__slider-wrapper flex__column space space--large">
                                                        <div
                                                            class="testimonials-slider__head-content flex flex--center space space--large">
                                                            <div class="testimonial-ranking">
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                            </div>
                                                            <div class="testimonials__text-content ta-center">
                                                                We&#39;ve tried multiple custom packaging companies, and
                                                                since switching to Packlane we&#39;ve never looked back.
                                                                After four years and tens of thousands of boxes, I can
                                                                honestly say that there is no better solution for
                                                                subscription box companies. If you&#39;re looking for
                                                                low MOQs, superior quality boxes and customer support to
                                                                match, look no further.
                                                            </div>
                                                            <div class="testimonials-slider__person-photo-wrapper">
                                                                <div class="testimonials__person-photo-wrapper">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                        height="23">
                                                                        <path fill="none" stroke="#f9cf57"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M7.653 20.762l20.337-6.715m-2.881-5.88L4.79 14.821M22.327 2.24L1.999 8.89" />
                                                                    </svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="29"
                                                                        height="26">
                                                                        <path fill="none" stroke="#f17ea5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M16.148 24L27 8.807 2 2z" />
                                                                    </svg>
                                                                    <picture><img
                                                                            class="testimonials-slider__person-photo image"
                                                                            data-src="/images/crated-with-love-tyler-turk-founder-791dc31ef23b1ebd94e0ef0a24d459ac.jpg"
                                                                            src="https://assets.packlane.com/1wGmiUocwf8oA2b1NZLZoUqefDpHWnkTtjK6pLMEZqE/fn:crated-with-love-tyler-turk-founder-791dc31ef23b1ebd94e0ef0a24d459ac/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2NyYXRlZC13aXRoLWxvdmUtdHlsZXItdHVyay1mb3VuZGVyLTc5MWRjMzFlZjIzYjFlYmQ5NGUwZWYwYTI0ZDQ1OWFjLmpwZw.jpg">
                                                                    </picture>
                                                                </div>
                                                                <div class="testimonials__person-details">
                                                                    <h4
                                                                        class="title title--dark title--small d-block flex__column--12 u-m-0">
                                                                        Tyler Turk</h4>
                                                                    <p class="testimonials-slider__desc">Founder, Crated
                                                                        with Love</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="glide__slide wrapper">
                                                <div class="flex flex--center">
                                                    <div
                                                        class="testimonials__slider-wrapper flex__column space space--large">
                                                        <div
                                                            class="testimonials-slider__head-content flex flex--center space space--large">
                                                            <div class="testimonial-ranking">
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                            </div>
                                                            <div class="testimonials__text-content ta-center">
                                                                When I discovered Packlane, it was a game changer. Using
                                                                Packlane&#39;s online builder, I was able to quickly
                                                                mock up a box design in full CMYK colors. The ability to
                                                                self-design my box is amazing. And when I discovered I
                                                                was able to order as little as one box, it only got
                                                                better.
                                                            </div>
                                                            <div class="testimonials-slider__person-photo-wrapper">
                                                                <div class="testimonials__person-photo-wrapper">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                        height="23">
                                                                        <path fill="none" stroke="#f9cf57"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M7.653 20.762l20.337-6.715m-2.881-5.88L4.79 14.821M22.327 2.24L1.999 8.89" />
                                                                    </svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="29"
                                                                        height="26">
                                                                        <path fill="none" stroke="#f17ea5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M16.148 24L27 8.807 2 2z" />
                                                                    </svg>
                                                                    <picture><img
                                                                            class="testimonials-slider__person-photo image"
                                                                            data-src="/images/our-customers/Father-Time-Bread-Taylor-West-Co-Owner_bnw.png"
                                                                            src="https://assets.packlane.com/qvCG4ATt8CAz9XwdL7QjyBfFUac5-XpsvvOpe29USuM/fn:Father-Time-Bread-Taylor-West-Co-Owner_bnw/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvRmF0aGVyLVRpbWUtQnJlYWQtVGF5bG9yLVdlc3QtQ28tT3duZXJfYm53LnBuZw.jpg">
                                                                    </picture>
                                                                </div>
                                                                <div class="testimonials__person-details">
                                                                    <h4
                                                                        class="title title--dark title--small d-block flex__column--12 u-m-0">
                                                                        Taylor West</h4>
                                                                    <p class="testimonials-slider__desc">Co-Owner,
                                                                        Father Time Bread</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="glide__slide wrapper">
                                                <div class="flex flex--center">
                                                    <div
                                                        class="testimonials__slider-wrapper flex__column space space--large">
                                                        <div
                                                            class="testimonials-slider__head-content flex flex--center space space--large">
                                                            <div class="testimonial-ranking">
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                            </div>
                                                            <div class="testimonials__text-content ta-center">
                                                                The quality of our custom packaging was a concern when
                                                                we began. But our sample order with Packlane was perfect
                                                                and that gave us the confidence to make Packlane our
                                                                preferred partner for branded boxes. Custom packaging
                                                                definitely works and Packlane is the pioneer in
                                                                producing it.
                                                            </div>
                                                            <div class="testimonials-slider__person-photo-wrapper">
                                                                <div class="testimonials__person-photo-wrapper">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                        height="23">
                                                                        <path fill="none" stroke="#f9cf57"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M7.653 20.762l20.337-6.715m-2.881-5.88L4.79 14.821M22.327 2.24L1.999 8.89" />
                                                                    </svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="29"
                                                                        height="26">
                                                                        <path fill="none" stroke="#f17ea5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M16.148 24L27 8.807 2 2z" />
                                                                    </svg>
                                                                    <picture><img
                                                                            class="testimonials-slider__person-photo image"
                                                                            data-src="/images/our-customers/akshay-gupta.png"
                                                                            src="https://assets.packlane.com/1D_5der-M7Wv41C_kaS90aS1N_2aSRes6KQvN7zAVc0/fn:akshay-gupta/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvYWtzaGF5LWd1cHRhLnBuZw.jpg">
                                                                    </picture>
                                                                </div>
                                                                <div class="testimonials__person-details">
                                                                    <h4
                                                                        class="title title--dark title--small d-block flex__column--12 u-m-0">
                                                                        Akshay Gupta</h4>
                                                                    <p class="testimonials-slider__desc">Co-Founder and
                                                                        COO, Evabot</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="glide__slide wrapper">
                                                <div class="flex flex--center">
                                                    <div
                                                        class="testimonials__slider-wrapper flex__column space space--large">
                                                        <div
                                                            class="testimonials-slider__head-content flex flex--center space space--large">
                                                            <div class="testimonial-ranking">
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                            </div>
                                                            <div class="testimonials__text-content ta-center">
                                                                Our boxes create an experience for the brand with which
                                                                we partner as well as the influencers. Custom packaging
                                                                allowed us to elevate the type of content our
                                                                influencers created on behalf of our company and our
                                                                clients. These boxes allowed us to become shareable and
                                                                memorable.
                                                            </div>
                                                            <div class="testimonials-slider__person-photo-wrapper">
                                                                <div class="testimonials__person-photo-wrapper">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                        height="23">
                                                                        <path fill="none" stroke="#f9cf57"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M7.653 20.762l20.337-6.715m-2.881-5.88L4.79 14.821M22.327 2.24L1.999 8.89" />
                                                                    </svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="29"
                                                                        height="26">
                                                                        <path fill="none" stroke="#f17ea5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M16.148 24L27 8.807 2 2z" />
                                                                    </svg>
                                                                    <picture><img
                                                                            class="testimonials-slider__person-photo image"
                                                                            data-src="/images/our-customers/sherri-langburt-babbleboxx.png"
                                                                            src="https://assets.packlane.com/4W7ts2iGwBPkZ8x1EU-VkfJmCCkZSRVlvjvIbtUCl0E/fn:sherri-langburt-babbleboxx/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvc2hlcnJpLWxhbmdidXJ0LWJhYmJsZWJveHgucG5n.jpg">
                                                                    </picture>
                                                                </div>
                                                                <div class="testimonials__person-details">
                                                                    <h4
                                                                        class="title title--dark title--small d-block flex__column--12 u-m-0">
                                                                        Sherri Langburt</h4>
                                                                    <p class="testimonials-slider__desc">CEO, Babbleboxx
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="glide__slide wrapper">
                                                <div class="flex flex--center">
                                                    <div
                                                        class="testimonials__slider-wrapper flex__column space space--large">
                                                        <div
                                                            class="testimonials-slider__head-content flex flex--center space space--large">
                                                            <div class="testimonial-ranking">
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                                <img src="/images/star-checked.svg"
                                                                    class="ratingsAndReviews__star" alt="star"
                                                                    height="36" width="36" />
                                                            </div>
                                                            <div class="testimonials__text-content ta-center">
                                                                When a customer comes to us and says, &quot;Hey, we want
                                                                a custom box,&quot; I&#39;ll go to Packlane and enter
                                                                their dimensions and download the dieline. I&#39;m able
                                                                to give our customers a quote immediately. With
                                                                Packlane, it&#39;s super simple to be able to get all of
                                                                the information I need so I can present it to my
                                                                customer. It&#39;s as simple as that.
                                                            </div>
                                                            <div class="testimonials-slider__person-photo-wrapper">
                                                                <div class="testimonials__person-photo-wrapper">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                        height="23">
                                                                        <path fill="none" stroke="#f9cf57"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M7.653 20.762l20.337-6.715m-2.881-5.88L4.79 14.821M22.327 2.24L1.999 8.89" />
                                                                    </svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="29"
                                                                        height="26">
                                                                        <path fill="none" stroke="#f17ea5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M16.148 24L27 8.807 2 2z" />
                                                                    </svg>
                                                                    <picture><img
                                                                            class="testimonials-slider__person-photo image"
                                                                            data-src="/images/our-customers/Sendoso-Lexie-Stegura-Senior-Project-Manager.png"
                                                                            src="https://assets.packlane.com/6FL2CaZN1n8oD1LIB5BjxRMeoI7Q5IZfgHmlOoO8CBw/fn:Sendoso-Lexie-Stegura-Senior-Project-Manager/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvU2VuZG9zby1MZXhpZS1TdGVndXJhLVNlbmlvci1Qcm9qZWN0LU1hbmFnZXIucG5n.jpg">
                                                                    </picture>
                                                                </div>
                                                                <div class="testimonials__person-details">
                                                                    <h4
                                                                        class="title title--dark title--small d-block flex__column--12 u-m-0">
                                                                        Lexie Stegura</h4>
                                                                    <p class="testimonials-slider__desc">Senior Project
                                                                        Manager, Sendoso</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>

                                        <div class="testimonials__arrows glide__arrows">
                                            <button type="button" data-slider-arrow="next"
                                                class="testimonials__arrow glide__arrow t-button t-button--circle t-button--big-arrow t-button--turquoise testimonials__arrow--right"></button>
                                            <button type="button" data-slider-arrow="prev"
                                                class="testimonials__arrow glide__arrow t-button t-button--circle t-button--big-arrow t-button--turquoise testimonials__arrow--left t-button--reverse"></button>
                                        </div>

                                        <ul class="slider__mobile-controls flex flex--center d-none@medium"
                                            data-slider-nav-group>
                                            <li class="slider__mobile-controls-item" data-slider-nav-item="active"></li>
                                            <li class="slider__mobile-controls-item" data-slider-nav-item></li>
                                            <li class="slider__mobile-controls-item" data-slider-nav-item></li>
                                            <li class="slider__mobile-controls-item" data-slider-nav-item></li>
                                            <li class="slider__mobile-controls-item" data-slider-nav-item></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <section class="content-slider">
                    <div class="content-slider__inner">
                        <div class="wrapper">
                            <h2 class="title title--large ta-center">How leading brands are succeeding with Packlane
                            </h2>
                            <div class="content-slider__track container container--xxlarge container--center"
                                data-slider-container="1">
                                <ul class="content-slider__controls flex flex--justify waffle waffle--large"
                                    data-slider-nav-group>
                                    <li class="flex__column" data-slider-nav-item="active">
                                        <div class="content-slider-controls__item">
                                            <div
                                                class="content-slider-controls-item--overlay flex flex--center flex--middle flex--stack">
                                                <h4 class="content-slider-controls-item__title ta-center">
                                                    Babbleboxx
                                                </h4>
                                                <button class="t-button t-button--arrow">learn more</button>
                                            </div>
                                            <picture><img alt="Babbleboxx"
                                                    class="content-slider-controls-item__img image image--full"
                                                    data-src="/images/our-customers/babbleboxx-1.jpg"
                                                    src="https://assets.packlane.com/cmJnWMgVr7of6SMl3Tq8cqu9axdj9xDjO1gZWcqoq84/fn:babbleboxx-1/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvYmFiYmxlYm94eC0xLmpwZw.jpg">
                                            </picture>
                                        </div>
                                    </li>
                                    <li class="flex__column" data-slider-nav-item>
                                        <div class="content-slider-controls__item">
                                            <div
                                                class="content-slider-controls-item--overlay flex flex--center flex--middle flex--stack">
                                                <h4 class="content-slider-controls-item__title ta-center">
                                                    Audacious Sock Wear
                                                </h4>
                                                <button class="t-button t-button--arrow">learn more</button>
                                            </div>
                                            <picture><img alt="Audacious Sock Wear"
                                                    class="content-slider-controls-item__img image image--full"
                                                    data-src="/images/our-customers/audacious-sock-wear-2.jpg"
                                                    src="https://assets.packlane.com/Pb_mrm3OjhxBU792oTkuUBtdjgfO6YQe9REwWjbLyQA/fn:audacious-sock-wear-2/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvYXVkYWNpb3VzLXNvY2std2Vhci0yLmpwZw.jpg">
                                            </picture>
                                        </div>
                                    </li>
                                    <li class="flex__column" data-slider-nav-item>
                                        <div class="content-slider-controls__item">
                                            <div
                                                class="content-slider-controls-item--overlay flex flex--center flex--middle flex--stack">
                                                <h4 class="content-slider-controls-item__title ta-center">
                                                    Evabot
                                                </h4>
                                                <button class="t-button t-button--arrow">learn more</button>
                                            </div>
                                            <picture><img alt="Evabot"
                                                    class="content-slider-controls-item__img image image--full"
                                                    data-src="/images/our-customers/evabot-3.png"
                                                    src="https://assets.packlane.com/5FuVVXMNfE9KWSPOWqSp1qeI2hxg9eNaDNUHYD-PM60/fn:evabot-3/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvZXZhYm90LTMucG5n.jpg">
                                            </picture>
                                        </div>
                                    </li>
                                    <li class="flex__column" data-slider-nav-item>
                                        <div class="content-slider-controls__item">
                                            <div
                                                class="content-slider-controls-item--overlay flex flex--center flex--middle flex--stack">
                                                <h4 class="content-slider-controls-item__title ta-center">
                                                    Sendoso
                                                </h4>
                                                <button class="t-button t-button--arrow">learn more</button>
                                            </div>
                                            <picture><img alt="Sendoso"
                                                    class="content-slider-controls-item__img image image--full"
                                                    data-src="/images/our-customers/sendoso-1.png"
                                                    src="https://assets.packlane.com/4v3GeGyxL4E9Xiy_YSPA4nr1b3p1UU0R09XZB_VkBls/fn:sendoso-1/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvc2VuZG9zby0xLnBuZw.jpg">
                                            </picture>
                                        </div>
                                    </li>
                                </ul>
                                <div class="content-slide" data-slider>
                                    <div class="glide" data-ref="slider[slider]">
                                        <div class="slider-wrap">
                                            <ul class="siema-js slider">
                                                <li class="glide__slide">
                                                    <div class="glide__slide-container flex flex--justify">
                                                        <div
                                                            class="content-slider__content-wrapper flex__column flex__column--12 flex__column--5@medium space space--large">
                                                            <div class="content-slider__head-content flex">
                                                                <div
                                                                    class="content-slider__person-photo-wrapper flex__column">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                        height="23">
                                                                        <path fill="none" stroke="#f9cf57"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M7.653 20.762l20.337-6.715m-2.881-5.88L4.79 14.821M22.327 2.24L1.999 8.89" />
                                                                    </svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="29"
                                                                        height="26">
                                                                        <path fill="none" stroke="#f17ea5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M16.148 24L27 8.807 2 2z" />
                                                                    </svg>
                                                                    <picture><img
                                                                            class="content-slider__person-photo image"
                                                                            data-src="/images/our-customers/sherri-langburt-babbleboxx.png"
                                                                            src="https://assets.packlane.com/4W7ts2iGwBPkZ8x1EU-VkfJmCCkZSRVlvjvIbtUCl0E/fn:sherri-langburt-babbleboxx/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvc2hlcnJpLWxhbmdidXJ0LWJhYmJsZWJveHgucG5n.jpg">
                                                                    </picture>
                                                                </div>
                                                                <div
                                                                    class="content-slider__person-signature flex__column flex__column--8">
                                                                    <picture><img alt="Babble Box Logo" class="image"
                                                                            data-src="/images/our-customers/babblebox-logo.png"
                                                                            src="https://assets.packlane.com/ifzZio87SbUe-e1Y9zs8Knfidyv1Ti77q8ALiseyX6g/fn:babblebox-logo/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvYmFiYmxlYm94LWxvZ28ucG5n.jpg">
                                                                    </picture>
                                                                    <h4 class="title title--small">Sherri Langburt</h4>
                                                                    <p class="content-slider__desc">CEO, <br>Babbleboxx
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="content-slider__text-content">
                                                                <p>Babbleboxx is the leader in Influencer Marketing
                                                                    services.</p>
                                                                <p>In 2018, Babbleboxx was listed as one of Inc's 500
                                                                    fastest-growing private companies and Sherri says
                                                                    they couldn't have done it without Packlane!</p>
                                                                <p class="customer-quote">"Packlane has been our trusted
                                                                    partner from the beginning. They have provided us
                                                                    with flexible solutions to accommodate all of our
                                                                    specific design and packaging requirements. We
                                                                    receive so many last-minute projects, and Packlane
                                                                    works with us to ensure we receive all orders on
                                                                    schedule."</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="content-slider__slide-img flex__column flex__column--12 flex__column--5@medium flex__column--6@medium">
                                                            <div class="flex flex--center flex--end@medium">
                                                                <div class="content-slider__img-wrapper container">
                                                                    <picture><img alt="Babble Box Custom Packaging"
                                                                            class="image image--expands"
                                                                            data-src="/images/our-customers/babbleboxx.jpg"
                                                                            src="https://assets.packlane.com/BNkHlBlysHKgga1Qb8wKUemdBBprM3htZbDIyk8AITs/fn:babbleboxx/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvYmFiYmxlYm94eC5qcGc.jpg">
                                                                    </picture>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="glide__slide">
                                                    <div class="glide__slide-container flex flex--justify">
                                                        <div
                                                            class="content-slider__content-wrapper flex__column flex__column--12 flex__column--5@medium space space--large">
                                                            <div class="content-slider__head-content flex">
                                                                <div
                                                                    class="content-slider__person-photo-wrapper flex__column">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                        height="23">
                                                                        <path fill="none" stroke="#f9cf57"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M7.653 20.762l20.337-6.715m-2.881-5.88L4.79 14.821M22.327 2.24L1.999 8.89" />
                                                                    </svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="29"
                                                                        height="26">
                                                                        <path fill="none" stroke="#f17ea5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M16.148 24L27 8.807 2 2z" />
                                                                    </svg>
                                                                    <picture><img
                                                                            class="content-slider__person-photo image"
                                                                            data-src="/images/our-customers/brittany-harris-audacious-sock-wear.jpg"
                                                                            src="https://assets.packlane.com/7RW5lGEk819Ex0ZWUzhDnCYQ8uvaQGTekgenYl4PVHs/fn:brittany-harris-audacious-sock-wear/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvYnJpdHRhbnktaGFycmlzLWF1ZGFjaW91cy1zb2NrLXdlYXIuanBn.jpg">
                                                                    </picture>
                                                                </div>
                                                                <div
                                                                    class="content-slider__person-signature flex__column flex__column--8">
                                                                    <picture><img class="image"
                                                                            data-src="/images/our-customers/audacious-sock-wear.png"
                                                                            src="https://assets.packlane.com/pkBDq0KpOUx2EUO2qbjgsWqPn3QIoiRf9q_sqQ8PzVc/fn:audacious-sock-wear/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvYXVkYWNpb3VzLXNvY2std2Vhci5wbmc.jpg">
                                                                    </picture>
                                                                    <h4 class="title title--small">Brittany Harris</h4>
                                                                    <p class="content-slider__desc">Creator and
                                                                        Designer, Audacious Sock Wear</p>
                                                                </div>
                                                            </div>
                                                            <div class="content-slider__text-content">
                                                                <p>Audacious Sock Wear creates socks for the bold and
                                                                    brave, and Brittany Harris knew that shipping socks
                                                                    in a boring brown box wouldn't cut it.</p>
                                                                <p class="customer-quote">"Custom packaging is how
                                                                    people recognize your brand. As a new brand, it is
                                                                    imperative for us to stand out among the competition
                                                                    and with Packlane we have confidence our boxes will
                                                                    always be the best. We use our packaging and design
                                                                    to carry the torch from our website to your home and
                                                                    sock drawer. When you receive your package, we want
                                                                    it to be an experience. You can literally see our
                                                                    boxes a mile away!"</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="content-slider__slide-img flex__column flex__column--12 flex__column--5@medium flex__column--6@medium">
                                                            <div class="flex flex--center flex--end@medium">
                                                                <div class="content-slider__img-wrapper container">
                                                                    <picture><img alt="Audacious Sock Custom Packaging"
                                                                            class="image image--expand"
                                                                            data-src="/images/our-customers/audacious-sock-wear.jpg"
                                                                            src="https://assets.packlane.com/ZKzc2EiD8001DM3PXCDDhkQZAfCesNaMHKhdQjPHMKE/fn:audacious-sock-wear/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvYXVkYWNpb3VzLXNvY2std2Vhci5qcGc.jpg">
                                                                    </picture>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="glide__slide">
                                                    <div class="glide__slide-container flex flex--justify">
                                                        <div
                                                            class="content-slider__content-wrapper flex__column flex__column--12 flex__column--5@medium space space--large">
                                                            <div class="content-slider__head-content flex">
                                                                <div
                                                                    class="content-slider__person-photo-wrapper flex__column">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                        height="23">
                                                                        <path fill="none" stroke="#f9cf57"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M7.653 20.762l20.337-6.715m-2.881-5.88L4.79 14.821M22.327 2.24L1.999 8.89" />
                                                                    </svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="29"
                                                                        height="26">
                                                                        <path fill="none" stroke="#f17ea5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M16.148 24L27 8.807 2 2z" />
                                                                    </svg>
                                                                    <picture><img
                                                                            alt="Ashkay Gupta, CEO &amp; Founder of Evabot"
                                                                            class="content-slider__person-photo image"
                                                                            data-src="/images/our-customers/akshay-gupta.png"
                                                                            src="https://assets.packlane.com/1D_5der-M7Wv41C_kaS90aS1N_2aSRes6KQvN7zAVc0/fn:akshay-gupta/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvYWtzaGF5LWd1cHRhLnBuZw.jpg">
                                                                    </picture>
                                                                </div>
                                                                <div
                                                                    class="content-slider__person-signature flex__column flex__column--8">
                                                                    <picture><img alt="Evabot Logo" class="image"
                                                                            data-src="/images/our-customers/eva-logo-flat.png"
                                                                            src="https://assets.packlane.com/NwUEIufoGxl2Rj5nwuC7B4TXLh1HvQR_2PndbkWSKjo/fn:eva-logo-flat/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvZXZhLWxvZ28tZmxhdC5wbmc.jpg">
                                                                    </picture>
                                                                    <h4 class="title title--small">Akshay Gupta</h4>
                                                                    <p class="content-slider__desc">Co-Founder and
                                                                        COO<br>Evabot</p>
                                                                </div>
                                                            </div>
                                                            <div class="content-slider__text-content">
                                                                <p>Evabot enables you to easily send personalized gifts
                                                                    to clients. And for co-founder and COO of Evabot,
                                                                    Akshay Gupta, that means a lot of packaging.</p>
                                                                <p class="customer-quote">"Packlane not only allows us
                                                                    to place multiple small orders but ensures that each
                                                                    box maintains its quality as part of the unique
                                                                    gifting experience we promise our customers. We
                                                                    chose Packlane for the ease of use, flexibility, and
                                                                    customization they offer. The amazing support team
                                                                    of packaging experts who are always there to help
                                                                    makes Packlane a cut above. There is no match!"</p>

                                                            </div>
                                                        </div>
                                                        <div
                                                            class="content-slider__slide-img flex__column flex__column--12 flex__column--5@medium flex__column--6@medium">
                                                            <div class="flex flex--center flex--end@medium">
                                                                <div class="content-slider__img-wrapper container">
                                                                    <picture><img alt="Evabot Custom Packaging"
                                                                            class="image image--expand"
                                                                            data-src="/images/our-customers/evabot-3.png"
                                                                            src="https://assets.packlane.com/5FuVVXMNfE9KWSPOWqSp1qeI2hxg9eNaDNUHYD-PM60/fn:evabot-3/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvZXZhYm90LTMucG5n.jpg">
                                                                    </picture>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="glide__slide">
                                                    <div class="glide__slide-container flex flex--justify">
                                                        <div
                                                            class="content-slider__content-wrapper flex__column flex__column--12 flex__column--5@medium space space--large">
                                                            <div class="content-slider__head-content flex">
                                                                <div
                                                                    class="content-slider__person-photo-wrapper flex__column">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                        height="23">
                                                                        <path fill="none" stroke="#f9cf57"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M7.653 20.762l20.337-6.715m-2.881-5.88L4.79 14.821M22.327 2.24L1.999 8.89" />
                                                                    </svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="29"
                                                                        height="26">
                                                                        <path fill="none" stroke="#f17ea5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-miterlimit="50" stroke-width="3"
                                                                            d="M16.148 24L27 8.807 2 2z" />
                                                                    </svg>
                                                                    <picture><img
                                                                            alt="Lexie Stegura, Senior Project Manager at Sendoso"
                                                                            class="content-slider__person-photo image"
                                                                            data-src="/images/our-customers/Sendoso-Lexie-Stegura-Senior-Project-Manager.png"
                                                                            src="https://assets.packlane.com/6FL2CaZN1n8oD1LIB5BjxRMeoI7Q5IZfgHmlOoO8CBw/fn:Sendoso-Lexie-Stegura-Senior-Project-Manager/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvU2VuZG9zby1MZXhpZS1TdGVndXJhLVNlbmlvci1Qcm9qZWN0LU1hbmFnZXIucG5n.jpg">
                                                                    </picture>
                                                                </div>
                                                                <div
                                                                    class="content-slider__person-signature flex__column flex__column--8">
                                                                    <picture><img alt="Sendoso Logo" class="image"
                                                                            data-src="/images/our-customers/Sendoso-Logo-Color.png"
                                                                            src="https://assets.packlane.com/obcoeEVfmBpd6r42LkkIkm0rWyJi7BfmXFQKYDB6LLk/fn:Sendoso-Logo-Color/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvU2VuZG9zby1Mb2dvLUNvbG9yLnBuZw.jpg">
                                                                    </picture>
                                                                    <h4 class="title title--small">Lexie Stegura</h4>
                                                                    <p class="content-slider__desc">Senior Project
                                                                        Manager, Sendoso</p>
                                                                </div>
                                                            </div>
                                                            <div class="content-slider__text-content">
                                                                <p>Sendoso is the world's first sending platform. When
                                                                    their customers want to create custom packaging,
                                                                    they turn to project manager Lexie Stegura.</p>
                                                                <p>Packlane's design process is so easy that it saves
                                                                    both Lexie and her customers time, making it a win
                                                                    for everyone!</p>
                                                                <p class="customer-quote">"Our customers need custom
                                                                    boxes but they may not have a designer on staff. I
                                                                    love how quick and easy it is to be able to pick a
                                                                    box size and style, download a dieline, and then
                                                                    give our customers a quote."</p>

                                                            </div>
                                                        </div>
                                                        <div
                                                            class="content-slider__slide-img flex__column flex__column--12 flex__column--6@medium">
                                                            <div class="flex flex--center flex--end@medium">
                                                                <div class="content-slider__img-wrapper container">
                                                                    <picture><img alt="Sendoso Custom Packaging"
                                                                            class="image image--expand"
                                                                            data-src="/images/our-customers/sendoso.jpg"
                                                                            src="https://assets.packlane.com/MfVeNabwphcsPUXABr1eJpYjt0-r_NR5dUlVguSrHrs/fn:sendoso/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvc2VuZG9zby5qcGc.jpg">
                                                                    </picture>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="secondary-slider slider__mobile-controls flex flex--center"
                                            data-slider-nav-group>
                                            <button
                                                class="content-slider__arrow glide__arrow t-button content-slider__arrow--right t-button--circle t-button--big-arrow"
                                                data-slider-arrow="next"></button>
                                            <button
                                                class="content-slider__arrow glide__arrow t-button content-slider__arrow--left t-button--circle t-button--big-arrow t-button--reverse"
                                                data-slider-arrow="prev"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="footer__social">
                    <h2 class="u-mb-16">Connect</h2>
                    <ul class="footer__social__list">
                        <li class="footer__social__item">
                            <a class="footer__social__link" href="https://instagram.com/packlanehq/" target="_tab">
                                <svg version="1.1" id="footer__instagram" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="23px"
                                    height="24px" viewBox="0 0 23 24" enable-background="new 0 0 23 24"
                                    xml:space="preserve">
                                    <path fill="#2E469E" d="M16.2,23.6H6.8c-3.7,0-6.8-3.1-6.8-6.8v-10C0,3.1,3.1,0,6.8,0h9.3C19.9,0,23,3.1,23,6.8v10
          C23,20.5,19.9,23.6,16.2,23.6z M6.8,2C4.2,2,2,4.2,2,6.8v10c0,2.6,2.2,4.8,4.8,4.8h9.4c2.6,0,4.8-2.2,4.8-4.8v-10
          C21,4.1,18.8,2,16.1,2H6.8z M11.5,17.9c-3.4,0-6.1-2.7-6.1-6.1c0-3.3,2.7-6.1,5.9-6.1l0.2,0c0,0,0,0,0,0c1.9,0,3.4,0.6,4.5,1.7
          c1.1,1.1,1.6,2.6,1.5,4.4C17.5,15.2,14.8,17.9,11.5,17.9z M11.3,7.7c-2.1,0-3.9,1.9-3.9,4.1c0,2.3,1.8,4.1,4.1,4.1
          c2.2,0,4-1.8,4.1-4.1c0-1.2-0.3-2.3-1-3c-0.7-0.7-1.8-1.1-3.1-1.1L11.3,7.7z M19.3,5.4c0,0.8-0.6,1.4-1.4,1.4s-1.4-0.6-1.4-1.4
          S17,4,17.8,4C18.6,4,19.3,4.6,19.3,5.4" />
                                </svg>
                            </a>
                        </li>
                        <li class="footer__social__item">
                            <a class="footer__social__link" href="https://www.facebook.com/Packlane" target="_tab">
                                <svg version="1.1" id="footer__facebook" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="11px"
                                    height="22px" viewBox="0 0 11 22" enable-background="new 0 0 11 22"
                                    xml:space="preserve">
                                    <path id="icon" fill="#2E469E" d="M7.1,21H3.2v-9.5H0V7.8h3.2V5.1c0-1.6,0.4-2.8,1.3-3.6s2.1-1.3,3.5-1.3c1.2,0,2.1,0,2.9,0.1v3.3
          l-2,0c-0.7,0-1.2,0.1-1.5,0.4C7.2,4.4,7.1,4.9,7.1,5.4v2.4h3.7l-0.5,3.7H7.1V21z" />
                                </svg>
                            </a>
                        </li>
                        <li class="footer__social__item">
                            <a class="footer__social__link" href="https://twitter.com/packlane" target="_tab">
                                <svg version="1.1" id="footer__twitter" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21px"
                                    height="18px" viewBox="0 0 21 18" enable-background="new 0 0 21 18"
                                    xml:space="preserve">
                                    <path id="icon" fill="#2E469E" d="M18.7,4.4v0.5c0,1.5-0.3,2.9-0.8,4.3s-1.3,2.7-2.3,3.9s-2.3,2.1-3.9,2.9s-3.3,1.1-5.2,1.1
          c-2.4,0-4.6-0.6-6.5-1.9c0.3,0,0.7,0,1,0c2,0,3.8-0.6,5.3-1.8c-0.9,0-1.8-0.3-2.5-0.9c-0.7-0.6-1.2-1.3-1.5-2.1
          c0.3,0.1,0.5,0.1,0.8,0.1c0.4,0,0.8-0.1,1.1-0.2c-1-0.2-1.8-0.7-2.4-1.5s-1-1.7-1-2.7v0c0.6,0.3,1.3,0.5,2,0.5
          C1.5,5.8,0.9,4.6,0.9,3.1c0-0.8,0.2-1.5,0.6-2.1c1.1,1.3,2.4,2.3,3.9,3.1s3.1,1.2,4.9,1.3c-0.1-0.3-0.1-0.7-0.1-1
          c0-1.2,0.4-2.2,1.2-3c0.8-0.8,1.8-1.2,3-1.2c1.2,0,2.3,0.4,3.1,1.3c1-0.2,1.9-0.5,2.7-1c-0.3,1-1,1.8-1.9,2.3
          c0.9-0.1,1.7-0.3,2.5-0.6C20.3,3,19.5,3.8,18.7,4.4z" />
                                </svg>
                            </a>
                        </li>
                        <li class="footer__social__item">
                            <a class="footer__social__link" href="https://www.pinterest.com/packlanehq/" target="_tab">
                                <svg version="1.1" id="footer__pinterest" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17px"
                                    height="22px" viewBox="0 0 17 22" enable-background="new 0 0 17 22"
                                    xml:space="preserve">
                                    <path id="icon" fill="#2E469E"
                                        d="M4.8,8.2c0-0.9,0.2-1.6,0.7-2.2S6.5,5,7.2,5c0.6,0,1,0.2,1.2,0.5s0.4,0.8,0.4,1.3
          c0,0.3,0,0.7-0.1,1.2c-0.1,0.5-0.3,1-0.5,1.7c-0.2,0.6-0.3,1.1-0.4,1.5c-0.2,0.7,0,1.2,0.4,1.7s0.9,0.7,1.6,0.7
          c1.1,0,2.1-0.6,2.8-1.9s1.1-2.8,1.1-4.7c0-1.4-0.4-2.5-1.3-3.4s-2.2-1.3-3.8-1.3c-1.8,0-3.3,0.6-4.4,1.7S2.4,6.6,2.4,8.2
          c0,0.9,0.3,1.8,0.8,2.4c0.2,0.2,0.3,0.4,0.2,0.7c-0.1,0.2-0.1,0.5-0.2,1c-0.1,0.2-0.2,0.3-0.3,0.3s-0.2,0.1-0.4,0
          c-0.8-0.4-1.5-1-1.9-1.8S0,9,0,7.9c0-0.7,0.1-1.4,0.3-2.1s0.6-1.4,1.1-2.1s1.1-1.3,1.8-1.8S4.7,1,5.7,0.7s2-0.5,3.2-0.5
          S11,0.4,12,0.8s1.8,0.9,2.5,1.6s1.2,1.4,1.6,2.3s0.6,1.7,0.6,2.7c0,2.4-0.6,4.5-1.9,6.1S12,15.8,10,15.8c-0.7,0-1.3-0.1-1.8-0.4
          c-0.6-0.3-1-0.7-1.2-1.1c-0.5,1.9-0.8,3-0.9,3.4c-0.3,1-0.8,2.1-1.8,3.4H3.5c-0.2-1.7-0.2-3,0.1-4.1l1.6-6.7C5,9.6,4.8,9,4.8,8.2z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </section>
                <section class="patternBanner patternBanner--orange">
                    <div class="patternBanner__content">
                        <h2>Let's start designing your beautiful box</h2>
                        <p>Packlane and you, the dynamic duo.</p>
                        <a href="/signup" class="btn btn--blue">Get Started</a>
                    </div>
                </section>

            </div>
        </div>
    </main>
    <script
        src="https://assets.packlane.com/js/packlane_web.testimonial.index-e4796dc1d85f2bda18c00d47904b8ff6.js?vsn=d">
    </script>

<style>

    #cvm .cvm-footer:before {
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

<footer id="cvm" style="background: #0e0e0e;
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
        <div class="cvm-footer" style="background: #060606;
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


    <script src="{{ asset('packlane-assets/jquery.min.js') }}"></script>



    <script src="{{ asset('packlane-assets/rollbar-jquery.js') }}"></script>
    <!-- Google Code for Remarketing Tag -->
    <!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 952620255;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        var google_user_id = "";
        /* ]]> */

    </script>
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=199157113955178&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <script type="text/javascript">
        var _paq = window._paq || [];
        _paq.push(['alwaysUseSendBeacon']);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        _paq.push(['trackVisibleContentImpressions', true, 1000]);
        _paq.push(['enableHeartBeatTimer']);
        _paq.push(['setSecureCookie', true]);

        (function () {
            var u = "https://a.packlane.com/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '1']);
            _paq.push(['setUserId', ""]);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.defer = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();

    </script>
    <noscript>
        <p><img src="https://a.packlane.com/matomo.php?idsite=1&amp;rec=1&amp;userid=" style="border:0;" alt="" /></p>
    </noscript>
    <script src="{{ asset('packlane-assets/bundle-apps.js') }}"></script>
    {{-- <script src="{{ asset('packlane-assets/vendor-bundle.js')}}"></script> --}}
    <script src="https://assets.packlane.com/js/vendor.bundle-c09eca2753d79521a1470b5e894309a0.js?vsn=d"></script>
    <script src="https://assets.packlane.com/js/jquery.noty.packaged.min-31fd89836c0490eaa60fcf2f00309c7c.js?vsn=d">
    </script>
    <div class="sweettooth-init" style="display: none;" data-channel-api-key="pk_45JQAqvo6i6Z6RHH629grPQJ"
        data-external-customer-id="" data-customer-auth-digest="9a1c88791883097c6c7ae5513884f004">
    </div>
    <script src="https://assets.packlane.com/js/fontawesome-v5.3.1-2452a34a51228e5bc25358d61d69c676.js?vsn=d"></script>
    <link crossorigin="" href="https://assets.packlane.com/css/magnify-a21187f3e8be5fcef4baf8e6b38ae35a.css?vsn=d"
        rel="stylesheet">
    </link>
    <script src="{{ asset('packlane-assets/jquery-magnify.js') }}"></script>

</body>

</html>
