
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="See why over 25,000 brands trust Packlane to help them grow and build successful businesses. Find out how custom packaging can work for your brilliant brand.">

    <link rel="shortcut icon" type="image/png" href="https://assets.packlane.com/-Z0JV5quo2ccMv0Aked7qZCriWdeItPijz89ZIkMF4I/fn:favicon/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvZmF2aWNvbi5wbmc.jpg">

    <title>Customer Stories | Packlane</title>

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
    <meta name="twitter:site" content="@packlane"/>
    <meta name="yandex-verification" content="35fa519272a729b3" />
    <meta name="msapplication-config" content="none"/>

  </head>

  <body data-controller="testimonial" data-action="index" class="testimonial " id="index" data-csrf="IxAJfxlLAX1XST9gNyNPIkhFFmMGRyYqgxj9rsI6g0I2pWzXzwaWkwjf">

      <header class="header " id="main-header-js">
<div class="nav-container">

    <div class="logo-container">
        <a class="header-logo " href="{{ route('dashboard') }}">
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
      @yield('content')
  </main>

    
<script src="{{ asset('packlane-assets/testimonials.js') }}"></script>

<footer class="footer">


<section class="footer__closing">

  <div class="section-container section-container--tight u-mb-80 u-flex-wrap">
    <div class="closing__col">
      <h2 class="u-mb-16">Custom Packaging</h2>
      <a href="/products/mailer-box">Mailer Boxes</a>
      <a href="/products/product-boxes">Product Boxes</a>
      <a href="/products/shipping-box">Standard Shipping Boxes</a>
      <a href="/products/eco-friendly-shipping-box">Econoflex Shipping Boxes</a>
    </div>
    <div class="closing__col">
      <h2 class="u-mb-16">Company</h2>
      <a href="/about">About Us</a>
      <a href="/policies">Terms &amp; Conditions</a>
      <a href="/privacy">Privacy Policy</a>
      <a href="https://packlane.breezy.hr/">Jobs</a>
      <a href="/blog">Blog</a>
    </div>
    <div class="closing__col">
      <h2 class="u-mb-16">Help</h2>
      <a href="/support">Support Portal</a>
      <a href="https://support.packlane.com/hc/en-us/categories/360003114231-Artwork-Guidelines">Artwork Tips and Tricks</a>
      <a href="https://99designs.com/packlane?utm_source=partner&utm_medium=referral&utm_campaign=packlane&utm_content=footer" rel="noreferrer noopener" target="_blank">Find a Designer</a>
      <a href="/request-quote">Request a Quote</a>
      <a href="/faq">FAQs</a>
    </div>
  </div>

  <div class="section-container u-mb-80">
    <form id="email_signup" class="newsletter-form" action="//manage.kmail-lists.com/subscriptions/subscribe" data-ajax-submit="//manage.kmail-lists.com/ajax/subscriptions/subscribe" method="GET" target="_blank" rel="noopener" novalidate="novalidate">
      <input type="hidden" name="g" value="JHyA4F">
      <h2 class="u-mb-16">Sign up for exclusive offers</h2>
      <div class="closing__newsletter">
        <input class="input--white" type="email" value="" name="email" id="k_id_email" placeholder="Email" style="" />
        <div class="closing__newsletterSubmit">
          <input type="submit" class="" value="Subscribe"/>
        </div>
      </div>
      <div class="klaviyo_messages">
        <div class="success_message" style="display:none;"></div>
        <div class="error_message" style="display:none;"></div>
      </div>
    </form>
  </div>

  <div class="section-container u-flex-column">
    <div class="footer__payment u-mb-80">
      <h2 class="u-mb-16">Payment Methods</h2>
      <p>Our website is compatible with many popular payment methods. SSL 100% Secure Transactions.</p>
      <div class="footer__creditCards">
<picture><img alt="Mastercard" class="credit-card" src="https://assets.packlane.com/images/mastercard.svg"></picture>
<picture><img alt="Visa" class="credit-card" src="https://assets.packlane.com/images/visa.svg"></picture>
<picture><img alt="American Express" class="credit-card" src="https://assets.packlane.com/images/cc/amex-logo.svg"></picture>
<picture><img alt="JCB" class="credit-card" src="https://assets.packlane.com/rZfwBfu-uUxxPSt9rUEBkMLhODW-jwfWrzAa7ceGXYg/fn:jcb-logo/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2NjL2pjYi1sb2dvLnBuZw.jpg"></picture>
<picture><img alt="Discover" class="credit-card" src="https://assets.packlane.com/images/cc/discover-logo.svg"></picture>
      </div>
    </div>
    <div class="footer__disclaimer">
      <picture><img alt="Packlane" src="{{ asset('KOP/logoKOPfooter.PNG')}}" width="47px" height="40px"></picture>
      <p>Copyright © 2021 Packlane, Inc. All rights reserved.</p>
      <p>Packlane&trade; is a trademark of Packlane, Inc. in the United States and other countries.</p>
    </div>
  </div>
</section>

</footer>


<script src="{{ asset('packlane-assets/jquery.min.js') }}"></script>
<script src="{{ asset('packlane-assets/rollbar-jquery.js') }}"></script>
<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script src="{{ asset('packlane-assets/jquery.min.js') }}"></script>
<script src="{{ asset('packlane-assets/rollbar-jquery.js') }}"></script>
<script src="{{ asset('packlane-assets/vendor-bundle.js') }}"></script>
<script src="{{ asset('packlane-assets/bundle-apps.js') }}"></script>
<script src="{{ asset('packlane-assets/jquery.noty.min.js') }}"></script>
<script src="{{ asset('packlane-assets/fontawesome.js') }}"></script>
<link crossorigin="" href="{{ asset('packlane-assets/magnify.css') }}" rel="stylesheet"></link>
<script src="{{ asset('packlane-assets/jquery-magnify.js') }}"></script>
  </body>
</html>
