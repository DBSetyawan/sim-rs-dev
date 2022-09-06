
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Design beautiful custom boxes and packaging. Order printed mailer boxes, shipping boxes, and more. ✅Low minimums ✅Low prices ✅Fast turnaround ✅Premium quality">
    <link rel="shortcut icon" type="image/png" href="https://assets.packlane.com/-Z0JV5quo2ccMv0Aked7qZCriWdeItPijz89ZIkMF4I/fn:favicon/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvZmF2aWNvbi5wbmc.jpg">

    <title>Custom Boxes &amp; Custom Packaging | Design your own boxes | Packlane</title>

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
<meta content="At Packlane, we believe good things come in custom packages. Design small cartons, large printed shipping boxes, and everything in between." name="description">

    <!-- OpenGraph -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@packlane"/>
    <meta name="yandex-verification" content="35fa519272a729b3" />

<meta content="https://packlane.com" name="og:canonical"><meta content="At Packlane, we believe good things come in custom packages. Design small cartons, large printed shipping boxes, and everything in between." name="og:description">
<meta content="https://assets.packlane.com/pheRI1BaXYY6u5t6e1PFxPjkbKZMqjzGtT0dm3hGi-g/fn:og-image-packlane-f5250f964810291918d4e17d26a8edc2/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL29nLWltYWdlLXBhY2tsYW5lLWY1MjUwZjk2NDgxMDI5MTkxOGQ0ZTE3ZDI2YThlZGMyLmpwZw.jpg" name="og:image"><meta content="Design Your Own Custom Boxes and Packaging" name="og:title">
    <!-- End of OpenGraph -->

    <meta name="msapplication-config" content="none"/>
<script src="{{ asset('packlane-assets/rollbar-jquery.js')}}"></script>

  </head>

  <body class="page " id="index">
      <header class="header " id="main-header-js">
<div class="nav-container">

  <div class="logo-container">
    <a class="header-logo " href="/">
      <picture><img alt="Packlane" src="{{ asset('KOP/LogotypeKOP-01.jpg') }}"></picture>
    </a>
  </div>

    <div class="nav-bar__item nav-bar__item--menu-toggle">
<picture><img alt="Menu" id="hamburger-js" src="https://assets.packlane.com/images/hamburger.svg"></picture>
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
        @endguest
      </ul>
    </nav>
  </div>
</header>
  <div class="container flash-container">
  </div>
<main>
<section class="hero homepage">
  <div class="hero__content">
    <div class="hero__image">
<picture><img src="https://assets.packlane.com/BUOPLPJhijaexYOPF2qvVmy_9uv_6SmzVWrzD3kTUFw/w:1000/fn:homepage-hero/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2hvbWVwYWdlLWhlcm8uanBn.jpg"></picture>
    </div>
    <div class="hero__data">
      <div class="hero__text">
        <h1 class="hero__title">Create custom packaging and boxes</h1>
        <h2 class="hero__subtitle">Custom packaging and boxes can turn your brand into the total package with full customization, instant quoting, and fast turnarounds.</h2>
        <a href="#choose-style" class="btn btn--white">Choose your packaging style</a>
      </div>
    </div>
  </div>

  <div class="hero__brands hero__footer">
    <h3>Trusted by over 2,500 brands</h3>
    <ul>
      <li><picture><img alt="Konimex" width="430px" height="37px" src="{{ asset('KOP/knmex.png') }}"></picture>
        <li><picture><img alt="Danone" width="450px" height="50px" src="{{ asset('KOP/danone-2.svg') }}"></picture>
          <li><picture><img alt="Nestle" width="690px" height="255px" src="{{ asset('KOP/Nestlé-Logo.wine.svg') }}"></picture>
              <li><picture><img alt="Nutricia" width="445px" height="9px" src="{{ asset('KOP/ntrcia.png') }}"></picture>
                <li><picture><img alt="Maspion" width="500px" height="9px" src="{{ asset('KOP/maspion.png') }}"></picture>
                  <li><picture><img alt="Campina" width="550px" height="30px" src="{{ asset('KOP/cmpn.png') }}"></picture>
                    <li><picture><img alt="Miwon" width="450px" height="30px" src="{{ asset('KOP/logomiwon.png') }}"></picture>
                <li><picture><img alt="Gudang garam" width="445px" height="30px" src="{{ asset('KOP/gg.png') }}"></picture> 
            <li><picture><img alt="Frisian Flag" width="580px" height="73px" src="{{ asset('KOP/frisianflag.png') }}"></picture> 
          <li><picture><img alt="Lotte" width="455px" height="9px" src="{{ asset('KOP/Lotte_logo.png') }}"></picture> 
            <li><picture><img alt="Kali sari" width="745px" height="30px" src="{{ asset('KOP/body-bus-bright-368x96.png') }}"></picture> 
            <li><picture><img alt="ABC" width="430px" height="40px" src="{{ asset('KOP/ABC_FOOD.png') }}"></picture>
              <li><picture><img alt="Manohara asri" width="595px" height="78px" src="{{ asset('KOP/logo-manohara-asri.png') }}"></picture> 
          <li><picture><img alt="Mega surya mas" width="700px" height="27px" src="{{ asset('KOP/iboe.png') }}"></picture> 
      </ul>
  </div>
</section>
<section class="style" id="choose-style">
  <h2 class="sectionTitle">Choose your custom packaging style</h2>
  <ul class="style__carousel">
    <li class="styleBox box active">
      <div class="styleBox__content">
        <div class="styleBox__image">
<picture><img alt="Packlane - Mailer Box" class="styleBox__3d styleBox-mailer" loading="lazy" src="https://assets.packlane.com/U9fKEiQE5bAcyEUnISimEM6pFBQ0AJb4Co6NvtCS6IA/w:700/ext:png/fn:3d-custom-mailer-box-4d05192912461847fa77e6f162d8e10b/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzLzNkLWN1c3RvbS1tYWlsZXItYm94LTRkMDUxOTI5MTI0NjE4NDdmYTc3ZTZmMTYyZDhlMTBiLnBuZw.png" style="margin-top: 56px"></picture>
        </div>
        <div class="styleBox__data">
          <a>
            <h3 class="styleBox__name">Mailer Box</h3>
          </a>
          <a href="/products/mailer-box" class="smallCTA--blue">Learn more</a>
          <a href="/products/mailer-box" class="btn btn--white">Meet our mailer</a>
        </div>
      </div>
      <a href="/products/mailer-box">
        <div class="styleBox__overlay">
          <div class="styleBox__image">
<picture><img alt="Packlane - Mailer Box" class="styleBox__icon" loading="lazy" src="https://assets.packlane.com/images/ico-m-mailer.svg"></picture>
          </div>
          <div class="styleBox__data">
            <h3 class="styleBox__name">Mailer Box</h3>
            <a href="/products/mailer-box" class="smallCTA--blue">Learn more</a>
            <p class="styleBox__description">A durable and stylish corrugated cardboard mailer box that's great for shipping. Perfect for subscription boxes, gift boxes, and e-commerce packaging.</p>
            <a href="/products/mailer-box" class="btn btn--gray">Meet our mailer</a>
          </div>
        </div>
      </a>
    </li>
    <li class="styleBox box">
      <div class="styleBox__content">
        <div class="styleBox__image">
<picture><img alt="Packlane - Classic Carton" class="styleBox__3d styleBox-folding-carton" loading="lazy" src="https://assets.packlane.com/WkQBDN-BdwYX8ZnidHEqweXbmrJc5cDdDjgye3QPcN0/w:700/ext:png/fn:3d-custom-folding-carton-37a254b480f3cddb55cf518895afa929/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzLzNkLWN1c3RvbS1mb2xkaW5nLWNhcnRvbi0zN2EyNTRiNDgwZjNjZGRiNTVjZjUxODg5NWFmYTkyOS5wbmc.png" style="margin-top: 40px"></picture>
        </div>
        <div class="styleBox__data">
          <a>
            <h3 class="styleBox__name">Product Box</h3>
          </a>
          <a href="/products/product-boxes" class="smallCTA--blue">Learn more</a>
          <a href="/products/product-boxes" class="btn btn--white">Meet our product box</a>
        </div>
      </div>
      <a href="/products/product-boxes">
        <div class="styleBox__overlay">
          <div class="styleBox__image">
<picture><img alt="Packlane - Classic Carton" class="styleBox__icon" loading="lazy" src="https://assets.packlane.com/images/ico-m-carton.svg"></picture>
          </div>
          <div class="styleBox__data">
            <h3 class="styleBox__name">Product Box</h3>
            <a href="/products/product-boxes" class="smallCTA--blue">Learn more</a>
            <p class="styleBox__description">Command attention on retail shelves with our product boxes made from SBS paperboard. Perfect for beauty packaging, supplements, and chocolate.</p>
            <a href="/products/product-boxes" class="btn btn--gray">Meet our product box</a>
          </div>
        </div>
      </a>
    </li>
    <li class="styleBox box">
      <div class="styleBox__content">
        <div class="styleBox__image">
<picture><img alt="Packlane - Shipping Box" class="styleBox__3d styleBox-shipping-box" loading="lazy" src="https://assets.packlane.com/T5gSxiqYRa043i5PJ3mRzwaFVFhG-HiiJpE_5P4tGaY/w:700/ext:png/fn:3d-custom-shipping-box-dd24bbbca19885d1b009657b588b3a2c/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzLzNkLWN1c3RvbS1zaGlwcGluZy1ib3gtZGQyNGJiYmNhMTk4ODVkMWIwMDk2NTdiNTg4YjNhMmMucG5n.png"></picture>
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
        <div class="styleBox__overlay">
          <div class="styleBox__image">
<picture><img alt="Packlane - Shipping Box" class="styleBox__icon" loading="lazy" src="https://assets.packlane.com/images/ico-m-shipper.svg"></picture>
          </div>
          <div class="styleBox__data">
            <h3 class="styleBox__name">Shipping Box</h3>
            <a href="/products/shipping-box" class="smallCTA--blue">Learn more</a>
            <p class="styleBox__description">Our custom corrugated cardboard shipping boxes are strong and seriously durable. Perfect for shipping large or heavy items but also an excellent choice to protect fragile items.</p>
            <a href="/products/shipping-box" class="btn btn--gray">Meet our shipper</a>
          </div>
        </div>
      </a>
    </li>
    <li class="styleBox box">
      <div class="styleBox__content">
        <div class="styleBox__image">
<picture><img alt="Packlane - Econoflex Shipping Box" class="styleBox__3d styleBox-econoflex" loading="lazy" src="https://assets.packlane.com/hsYYt6BxGcvGMAO8Cw0JqyI9DKX8P8tUw6c5_AYuB4Q/w:700/ext:png/fn:3d-custom-econoflex-shipping-box-6c79bd6bf17712d5212bb3dc26855623/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzLzNkLWN1c3RvbS1lY29ub2ZsZXgtc2hpcHBpbmctYm94LTZjNzliZDZiZjE3NzEyZDUyMTJiYjNkYzI2ODU1NjIzLnBuZw.png"></picture>
        </div>
        <div class="styleBox__data">
          <a>
            <h3 class="styleBox__name">Econoflex Shipping Box</h3>
          </a>
          <a href="/products/eco-friendly-shipping-box" class="smallCTA--blue">Learn more</a>
          <a href="/products/eco-friendly-shipping-box" class="btn btn--white">Meet Econoflex Shippers</a>
        </div>
      </div>
      <a href="/products/eco-friendly-shipping-box">
        <div class="styleBox__overlay">
          <div class="styleBox__image">
<picture><img alt="Packlane - Econoflex Shipping Box" class="styleBox__icon" loading="lazy" src="https://assets.packlane.com/images/ico-m-econoflex-2b27a08cf609630232f0ca0574a50029.svg"></picture>
          </div>
          <div class="styleBox__data">
            <h3 class="styleBox__name">Econoflex Shipping Box</h3>
            <a href="/products/eco-friendly-shipping-box" class="smallCTA--blue">Learn more</a>
            <p class="styleBox__description">Ultra affordable and Eco-Friendly. Our Econoflex shipping boxes are made from 100% recycled and recyclable Kraft with print quality that rivals flexo. They're sturdy enough for bulky items and a no-brainer for your budget.</p>
            <a href="/products/eco-friendly-shipping-box" class="btn btn--gray">Meet Econoflex Shippers</a>
          </div>
        </div>
      </a>
    </li>
  </ul>
</section>

<section class="howItWorks">
  <svg version="1.1" id="bg-circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    width="438px" height="438px" viewBox="0 0 438 438" enable-background="new 0 0 438 438" xml:space="preserve">
    <path id="circle" fill="none" stroke="#FCE5ED" stroke-width="40" stroke-linecap="round" stroke-linejoin="round" d="M418,219
    c0,109.9-89.1,199-199,199S20,328.9,20,219S109.1,20,219,20S418,109.1,418,219L418,219z"/>
  </svg>

  <svg version="1.1" id="bg-triangle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
    y="0px" width="578px" height="411px" viewBox="0 0 578 411" enable-background="new 0 0 578 411" xml:space="preserve">
    <polygon id="triangle" fill="none" stroke="#D1F9F4" stroke-width="40" stroke-linecap="round" stroke-linejoin="round" points="
    426.8,389.2 554.4,21.8 23.6,62 "/>
  </svg>

  <svg version="1.1" id="bg-lines" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    width="575px" height="479px" viewBox="0 0 575 479" enable-background="new 0 0 575 479" xml:space="preserve">
    <path id="lines" fill="none" stroke="#FEF5DD" stroke-width="40" stroke-linecap="round" stroke-linejoin="round" d="M20,266.6
    L376.3,20 M107.8,362.5l356.3-246.6 M198.2,458.3l356.3-246.6"/>
  </svg>

  <div class="howItWorks__content">
    <h2 class="sectionTitle sectionTitle--hasSub">How it works</h2>
    <p class="section-subtitle section-subtitle--center">Select a packaging style, quantity, and choose from custom or stock sizes – then start designing your custom boxes. Add customization options like images, text, and any color your brand requires. As you design you'll see an instant quote so you know exactly what your final order will come to.</p>
    <div class="howItWorks__container">
      <div class="howItWorks__video">
        <a href="/signup" class="btn btn--white btn--video">Get started now</a>
      </div>
    </div>

    <div class="iconFeatures">
      <div class="iconFeatures__item">
        <div class="iconFeatures__image">
<picture><img alt="Tiny minimums. No maximums." loading="lazy" src="https://assets.packlane.com/images/infinity-icon.svg"></picture>
        </div>
        <h4>Tiny minimums. No maximums.</h4>
        <p>No matter the size of your custom packaging order, you'll get the best boxes at prices to match.</p>
      </div>
      <div class="iconFeatures__item">
        <div class="iconFeatures__image">
<picture><img alt="Instant quotes" loading="lazy" src="https://assets.packlane.com/images/ico-quote.svg"></picture>
        </div>
        <h4>Instant quotes</h4>
        <p>Pick your style, design your boxes, and get an instant quote.</p>
      </div>
      <div class="iconFeatures__item">
        <div class="iconFeatures__image">
<picture><img alt="Fast turnarounds" loading="lazy" src="https://assets.packlane.com/images/ico-fast.svg"></picture>
        </div>
        <h4>Fast turnarounds</h4>
        <p>Eligible orders may ship within 10 days or less with priority turnaround options.</p>
      </div>
    </div>
  </div>
</section>

  <section class="testimonial-video" id="video-testimonial">
    <div class="testimonial-video__inner">
      <div class="container container--xlarge container--center wrapper flex flex--center space space--large">
        <h2 class="title title--large u-text-center">
          See how to succeed with custom packaging
        </h2>
        <p class="testimonial-video__copy u-text-center">
          Watch how Father Time Bread is slicing up the competition by delivering the ultimate unboxing experience with fresh bread shipped directly to customers in custom printed boxes.
        </p>
      </div>
<div class="testimonial-video__bg">
  <div class="flex flex--center wrapper" data-player>
  </div>
</div>

    </div>
  </section>
<section class="featuredDesigns">
  <h2 class="sectionTitle sectionTitle--hasSub">Box design that inspires</h2>
  <p class="section-subtitle section-subtitle--center">We’re here to help with packaging solutions that make sense for businesses of any kind. Whether you’re designing custom retail packaging with your logo or need corrugated cardboard mailers for your ecommerce biz, there’s lots of inspiration to be found for your custom product packaging.</p>
  <div class="featuredDesigns__mobile">
    <div class="featuredDesigns__slides">
<picture><img alt="Get inspired" loading="lazy" src="https://assets.packlane.com/ww7hKmlBH0xeqNwtmEa2DGPF1APADczEaoWWtd_1xbc/w:400/fn:folding-carton-boxes-7d1d60486958747f81e1cc8bf79e4aaf/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2ZvbGRpbmctY2FydG9uLWJveGVzLTdkMWQ2MDQ4Njk1ODc0N2Y4MWUxY2M4YmY3OWU0YWFmLmpwZw.jpg"></picture>
    </div>
    <!-- <div class="featuredDesigns__arrow featuredDesigns__arrow--next"></div>
    <div class="featuredDesigns__arrow featuredDesigns__arrow--prev"></div> -->
  </div>
  <div class="designsGrid designsGrid--six">
    <div class="designsGrid__col designsGrid__col--left">
      <div class="designsGrid__item designsGrid__item--top designsGrid__item--left designsGrid__item--small">
        <a href="/products/mailer-box">
          <div class="designsGrid__square" >
<picture><img data-responsive-background-image="true" loading="lazy" src="https://assets.packlane.com/B5NzSk4-vAyoPYVRZIhQRCAMbdQIbA-LLJ9uBcjnExc/w:400/fn:mailer-box-employee-welcome-kit-2a77d778d0619d4a00bde875b2cdeea4/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL21haWxlci1ib3gtZW1wbG95ZWUtd2VsY29tZS1raXQtMmE3N2Q3NzhkMDYxOWQ0YTAwYmRlODc1YjJjZGVlYTQuanBn.jpg"></picture>
            <div class="designsGrid__overlay">
              <div class="designsGrid__data">
                <h2>Mailer Box</h2>
                <div class="smallCTA--white">Learn More</div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="designsGrid__item designsGrid__item--top designsGrid__item--right designsGrid__item--small">
        <a href="/products/product-boxes">
          <div class="designsGrid__square" >
<picture><img data-responsive-background-image="true" loading="lazy" src="https://assets.packlane.com/ww7hKmlBH0xeqNwtmEa2DGPF1APADczEaoWWtd_1xbc/w:400/fn:folding-carton-boxes-7d1d60486958747f81e1cc8bf79e4aaf/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2ZvbGRpbmctY2FydG9uLWJveGVzLTdkMWQ2MDQ4Njk1ODc0N2Y4MWUxY2M4YmY3OWU0YWFmLmpwZw.jpg"></picture>
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
<picture><img data-loading="lazy" data-responsive-background-image="true" src="https://assets.packlane.com/cFHkgbpWMkCmYpjtaKhKCJIevqIYNoSFL5Sih3nCLZE/fn:shipper-fd-koyah/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL3Byb2R1Y3RzL3NoaXBwaW5nLWJveC9zaGlwcGVyLWZkLWtveWFoLmpwZw.jpg"></picture>
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
<picture><img loading="lazy" src="https://assets.packlane.com/_nVJI3BA9gYAN4CncQMGLsP8ahNEeFr3VvRwlqzgh1E/w:1000/fn:corrugated-mailer-boxes-58c22bb5a3fa58a63869dadf9b68cf7c/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2NvcnJ1Z2F0ZWQtbWFpbGVyLWJveGVzLTU4YzIyYmI1YTNmYTU4YTYzODY5ZGFkZjliNjhjZjdjLmpwZw.jpg"></picture>
            <div class="designsGrid__overlay">
              <div class="designsGrid__data">
                <h2>Mailer Box</h2>
                <div class="smallCTA--white">Learn More</div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="designsGrid__item designsGrid__item--bottom designsGrid__item--left designsGrid__item--small">
        <a href="/products/shipping-box">
          <div class="designsGrid__square">
<picture><img data-responsive-background-image="true" loading="lazy" src="https://assets.packlane.com/dAR5xWqiH-l85SuGDWTf4bLXYPmaL7IsCBLknNmxkoc/w:400/fn:corrugated-printed-shipping-boxes-3490fc12def12cdab95155cd05bd3f6b/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2NvcnJ1Z2F0ZWQtcHJpbnRlZC1zaGlwcGluZy1ib3hlcy0zNDkwZmMxMmRlZjEyY2RhYjk1MTU1Y2QwNWJkM2Y2Yi5qcGc.jpg"></picture>
            <div class="designsGrid__overlay">
              <div class="designsGrid__data">
                <h2>Shipping Box</h2>
                <div class="smallCTA--white">Learn More</div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="designsGrid__item designsGrid__item--bottom designsGrid__item--right designsGrid__item--small">
        <a href="/products/product-boxes">
          <div class="designsGrid__square">
<picture><img data-responsive-background-image="true" loading="lazy" src="https://assets.packlane.com/fOyUwoLva4q1vv7vxYwdN3YtepfIWpTgspYTDOA2nx8/w:400/fn:custom-printed-folding-cartons-e512b478f1d5c4a03420f0caf5e8de58/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2N1c3RvbS1wcmludGVkLWZvbGRpbmctY2FydG9ucy1lNTEyYjQ3OGYxZDVjNGEwMzQyMGYwY2FmNWU4ZGU1OC5qcGc.jpg"></picture>
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
<picture><img alt="More than just a pretty package" class="mediaAndTextModule__img" loading="lazy" src="https://assets.packlane.com/jExsMzb0DS0Q68-jPKykvLHi3XH3jOWKKesLwblbwKY/w:1000/fn:homepage-about/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2hvbWVwYWdlLWFib3V0LmpwZw.jpg"></picture>
      <div class="mediaAndTextModule__bg"></div>
    </div>
    <div class="mediaAndTextModule__data">
      <h2>More than just a pretty package</h2>
      <p>Customizable from the inside out, every custom printed box we create is made just for you – and with your customers in mind. Make a statement in the mail or on display with an unboxing experience unlike any other. Your products deserve custom packaging boxes crafted with sustainable materials, impeccable print quality, and picture-perfect design. Create packaging that wows no matter your use-case, business, or industry.</p>
      <a href="https://packlane.com/about/#brilliant-boxes" class="btn btn--gray">FIND OUT WHAT MAKES OUR BOXES SPECIAL</a>
    </div>
  </div>
</section>

<section class="frequently-asked-questions u-mb-80">
  <h2 class="sectionTitle sectionTitle--hasSub">Frequently Asked Questions</h2>
  <p class="section-subtitle section-subtitle--center">
    Below you'll find answers to some common questions around creating a custom box. Every order is little different though, so don't hesitate to <a href="/contact">reach out</a> with anything else you might be wondering.
  </p>
  <div class="container">
    <div class="faq-container" itemscope itemtype="https://schema.org/FAQPage">

      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-item__title" itemprop="name">Can I get an instant quote for my order?</h3>
        <div>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="faq-item__copy" itemprop="text">Yes, you can select your size, material, and quantity on our free 3D design tool to instantly view a quote for your project. As you upload artwork, add text, or color the background in each panel of the 3D model, you'll see your Unit Price update in real-time.</p>
          </div>
        </div>
      </div>

      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-item__title" itemprop="name">What packaging products can I order from Packlane?</h3>
        <div>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="faq-item__copy" itemprop="text">At Packlane, we offer a variety of packages for you to choose from and customize. Our custom  packaging boxes include Shipping Boxes, Mailer Boxes, and Product Boxes. They can be ordered in both stock and custom sizes at low minimums. These box styles are perfect for either retail packaging or ecommerce deliveries. Our Mailer Box and Shipping Box cardboard products are safe to mail, while our Product Box packages are intended for display (or to be placed within a shipping-safe box when sent out for delivery). Get started with our easy-to-use box designer and create custom printed packaging boxes for your brand today.</p>
          </div>
        </div>
      </div>

      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-item__title" itemprop="name">What if I'm designing in Adobe Illustrator?</h3>
        <div>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="faq-item__copy" itemprop="text">If you're building your design on one of our Illustrator templates, you can submit your file on our Dieline Upload tool and a quote for your project will be sent to you ASAP. You can also email your dieline to our customer support team and we'll send you back a quote. If you do not have packaging artwork for your box yet, you can get a rough quote by applying a solid color on any panels of our 3D design tool where you will want your design printed.</p>
          </div>
        </div>
      </div>

      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-item__title" itemprop="name">How does your 3D box designer work?</h3>
        <div>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="faq-item__copy" itemprop="text">If you have individual artwork elements such as logos, images or text, you can customize your box specifications directly on our 3D design tool and receive pricing on that same page. As you build your design on the 3D box model, you will see your Unit Price update in real-time to reflect any changes that affect your project's pricing. Once you have finalized your design, you can proceed directly to checkout, save your design for later, or even share your design with friends or colleagues!</p>
          </div>
        </div>
      </div>

      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-item__title" itemprop="name">What is the turnaround time on my order?</h3>
        <div>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="faq-item__copy" itemprop="text">Our Standard turnaround for most custom packaging orders is around 10 business days and Rush turnaround is 7 business days. These turnarounds do not include transit time (1 - 7 business days depending on your location). Special custom or bulk orders may require a few extra days to get setup and produced. Please note that during extremely busy times of year some orders may take longer to complete. While delivery estimates cannot be guaranteed, all dates shown at checkout are the quickest estimate we offer. If your delivery date is time sensitive, we highly recommend choosing Rush production and expedited shipping for your box orders.</p>
          </div>
        </div>
      </div>

      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-item__title" itemprop="name">What happens after I place my order? Do I get a proof before printing?</h3>
        <div>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="faq-item__copy" itemprop="text">After checkout, our dedicated Prepress team will review your design for any technical concerns and send a 2D digital proof of your custom boxes to your email within 24 hours. If any changes need to be made, you can send a note directly to our Prepress team through the proof page and they'll be happy to help with finalizing your design for printing.</p>
          </div>
        </div>
      </div>

      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-item__title" itemprop="name">Will I see a proof for my order?</h3>
        <div>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="faq-item__copy" itemprop="text">All new orders will receive a digital proof within 24 hours of completing the checkout process.</p>
          </div>
        </div>
      </div>

      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-item__title" itemprop="name">How do I know if my art is printable?</h3>
        <div>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="faq-item__copy" itemprop="text">Our dedicated in-house Prepress team will review your custom box design for any technical concerns (artwork resolution, blurriness, splits, thin lines, and bleeds) and if found, will note them for your attention in the proof. If you're unsure of how to fix any printing concerns that are noted, our Prepress representatives are happy to help you through the process. It's important to keep in mind that our team does not check for spelling or grammar errors, nor do they provide any subjective feedback on design content.</p>
          </div>
        </div>
      </div>

      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-item__title" itemprop="name">Can you print inside the boxes?</h3>
        <div>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="faq-item__copy" itemprop="text">Yes! We can print on the inside of any of our corrugated box styles. This includes Mailers, Shipping Boxes, and Tuck Tops (our secret menu product!). Product Boxes are currently limited to printing on the exterior only. You can even use our online box designer to design the inside of your custom boxes. For Shippers and Tuck Tops, we currently require a 2D dieline template be submitted for both the interior and exterior so we can set up your order as a custom order. You can also submit designs this way for our Mailer boxes, if you prefer to build on a 2D Illustrator template instead of our free 3D box design tool.</p>
          </div>
        </div>
      </div>

      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-item__title" itemprop="name">What choices affect my pricing?</h3>
        <div>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="faq-item__copy" itemprop="text">As a high-volume producer with scale economies, Packlane provides the industry's most competitive prices on custom printed boxes available. Pricing is generally a factor of five things: dimensions, box style, ink coverage on the box, box material, and quantity (higher quantities = bulk savings). Custom orders of 5,000 or more can be eligible for volume discounts. If you have questions about pricing or choices that can affect your custom packaging order, our customer support team is happy to help!</p>
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
    <a href="/request-quote" class="btn btn--blue">Request Quote</a>
  </div>
</section>
</div>
</main>
{{-- <script src="{{ asset('css/KOP-css/KOP-js/web-page-index.js') }}"></script> --}}

<style>

  #fxs .footer-s:before {
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

  <footer id="fxs" style="background: #0e0e0e;
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
  <div class="footer-s" style="background: #060606;
          border-top: 4px solid #060606;
          margin-top: 40px;
          padding: 30px 0 10px;">
    <div class="container">
      <div class="row">
        <div class="">
          <a href="index.html" style="padding-left:20px">
            <!--<img alt="Porto Website Template" class="img-responsive" src="img/logo-footer.png">-->
            <img alt="KOP" style="display: block;
            max-width: 18%;
            height: auto;" src="{{ asset('KOP/logoKOPf.jpg') }}">
          </a>
        </div>
        <p style="position: relative;right:340px;top:24px">© Copyright 2021. All Rights Reserved.</p>
       
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

<script src="{{ asset('packlane-assets/vendor.bundle.js') }}"></script>
<script src="{{ asset('packlane-assets/bundle.apps.js') }}"></script>
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

<script src=" {{ asset('packlane-assets/jquery.noty.min.js')}}"></script>

        <div class="sweettooth-init"
          style="display: none;"
          data-channel-api-key="pk_45JQAqvo6i6Z6RHH629grPQJ"
          data-external-customer-id=""
          data-customer-auth-digest="9a1c88791883097c6c7ae5513884f004">
        </div>


        <div class="sweettooth-launcher"></div>



      <script type="text/javascript">
        var subscribersSiteId = 'cf786cb2-bc62-4019-9e4a-1354a72c791c';
      </script>

  </body>
</html>
