<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Design and print custom boxes online. Packlane offers affordable prices and fast turnaround for any box size and any quantity.">

    </link>

    <link rel="shortcut icon" type="image/png"
        href="{{ asset('KOP/logoKOPfooter.PNG') }}">
    @php
    $currentURL = \Request::segment(2);
    $currentURLnews = \Request::segment(3);
    @endphp

    @if($currentURL == "one-stop-service")
        <title>One Stop Service - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURL == "plotter-mock-up")
        <title>Plotter & Mock up - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURL == "gmg-color-printing")
        <title>GMG Color Printing - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURL == "hotprint-embos")
        <title>Hot Print & Emboss - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURL == "micro-emboss")
        <title>Micro & Emboss - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURL == "UV-spot")
        <title>UV Spot - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURL == "gmg-color-printing")
        <title>GMG Color Printing - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURL == "OurProduct")
        <title>Our Product - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURL == "ourCustomer")
        <title>Our Customer - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURL == "company-profile")
        <title>Company Profile - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURL == "our-team")
        <title>Our Team - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURL == "partnership")
        <title>Partnership - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURL == "we-build-a-design")
        <title>We Build a Design - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURL == "we-offer-you")
        <title>We offer You - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURL == "company-archivement-certificates")
        <title>Company Archivement Certificates - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURL == "vision-mission")
        <title>Vission & Mission - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURLnews == "post")
        <title>News - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    @if($currentURLnews == "26july2019")
        <title>News : 26/07/2019 post - PT. Krisanthium Offset Printing | KOP</title>
    @endif
    <link crossorigin="" crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" 
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet"></link>

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
     <link rel="stylesheet" href="{{ asset('css/theme-animation.css')}}">

     <!-- Current Page CSS -->
     <link rel="stylesheet" href="{{ asset('css/settings.css')}}" media="screen">
     <link rel="stylesheet" href="{{ asset('css/layers.css')}}" media="screen">
     <link rel="stylesheet" href="{{ asset('css/navigations.css')}}" media="screen">
     <link rel="stylesheet" href="{{ asset('css/components.css')}}" media="screen">

     <link rel="stylesheet" href="{{ asset('packlane-assets/flag-icons-main/css/flag-icons.css') }} ">
     <link rel="stylesheet" href="{{ asset('packlane-assets/flag-icons-main/css/flag-icons.min.css') }} ">
     <!-- Skin CSS -->
     <link rel="stylesheet" href="{{ asset('css/defaults.css')}}">

     <!-- Theme Custom CSS -->
     {{-- <link rel="stylesheet" href="css/custom.css"> --}}
     <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@2.8.1"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/algoliasearch/4.3.1/algoliasearch-lite.umd.js"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.8.1/dist/instantsearch.min.css">
     <link
            rel="stylesheet"
            href="https://unpkg.com/instantsearch.css@7/themes/satellite-min.css"
        />
     <script src="https://polyfill.io/v3/polyfill.min.js?features=default%2CArray.prototype.find%2CArray.prototype.includes%2CPromise%2CObject.assign%2CObject.entries"></script>

     <!-- You can also add this theme to add a Bootstrap-like appearance to your widgets. -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.8.1/dist/instantsearch-theme-algolia.min.css">
     <script src="https://cdn.tailwindcss.com"></script>
     <style type="text/tailwindcss">
       @layer utilities {
         .content-auto {
           content-visibility: auto;
         }
       }

       li {
        counter-increment: li;
        display: list-item;
    }

       ol li::marker {
        font-weight: bold;
        /* content: "object atau pre-content manual. "; */
        display: list-item;
        content: "" counter(li) ". ";
        color: rgb(4, 20, 6);
    }

     </style>
     <!-- Head Libs -->
 <script src="{{ asset('js/modernnize.js')}}"></script>
 <link crossorigin="" href="{{ asset('packlane-assets/app-bundle.css')}}"
 rel="stylesheet">
 <link crossorigin="" href="{{ asset('packlane-assets/chts.css')}}"
 rel="stylesheet">
    <link href="https://packlane.com/about" rel="canonical">
    <meta
        content="Packlane makes it easy for your brand to leave a lasting impression by offering an affordable solution for designing and printing custom packaging online."
        name="description">

    <!-- OpenGraph -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@packlane" />
    <meta name="yandex-verification" content="35fa519272a729b3" />

    <meta content="https://packlane.com/about" name="og:canonical">
    <meta
        content="Packlane makes it easy for your brand to leave a lasting impression by offering an affordable solution for designing and printing custom packaging online."
        name="og:description">
    <meta
        content="https://assets.packlane.com/2iWsI9TJikdNY00FzpZ3d2DCoqR8VORCupow7lZAy9w/fn:og-image-mailer-9cd8327abf7e5338905b2cac47de163f/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL29nLWltYWdlLW1haWxlci05Y2Q4MzI3YWJmN2U1MzM4OTA1YjJjYWM0N2RlMTYzZi5qcGc.jpg"
        name="og:image">
    <meta content="About Packlane | Brilliant Brands Deserve Brilliant Boxes" name="og:title">

    <meta name="msapplication-config" content="none" />
</head>
<body class="page" style="position: sticky;top: 0px; height:100px;padding-bottom:0px;padding-top:0px;" >
<header class="header " id="main-header-js" style="position: sticky;top: 0px;padding-bottom:0px;padding-top:0px;">
        <div class="nav-container" style="position: sticky;top: 0px;padding-bottom:0px;padding-top:0px;">
    
            <div class="logo-container">
                <a class="header-logo " href="{{ route('dashboard') }}">
                    <picture><img alt="Packlane" src="{{ asset('KOP/LogotypeKOP-01.jpg') }}"></picture>
                </a>
            </div>
            <div class="nav-bar__item nav-bar__item--menu-toggle">
                <picture><img alt="Menu" id="hamburger-js" src="https://assets.packlane.com/images/hamburger.svg">
                </picture>
            </div>
            <nav id="nav-bar-js" class="nav-bar" style="position: sticky;top: 0px;background: rgb(255, 255, 255);">
              <ul class="nav-bar__menu">
                  <a class="nav-bar__menu--close">
                      <picture><img alt="Menu" id="hamburger-close-js" src="https://assets.packlane.com/images/hamburger-white.svg"></picture>
                  </a>
                  <a class="nav-bar__item nav-bar__item--link " href="{{ route('dashboard') }}" id="design-box-link-js">@lang('navbar.dashboard')</a>
                  <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js ">
                      <a class="nav-bar__item nav-bar__item--link ">
                        @lang('navbar.serviceandtreatment')
                          <span data-rotate="down"
                              class="nav-bar__dropdown-chevron rotate pcon-chevron-down rotate-down"></span>
                      </a>
                      <ul class="nav-dropdown">
                        <a class="nav-dropdown__link" href="{{ route('oss.id')}}">@lang('navbar.onestopservice') </a>
                        <a class="nav-dropdown__link" href="{{ route('plotter.id')}}">@lang('navbar.plotterandmockup') </a>
                        <a class="nav-dropdown__link" href="{{ route('gmg.id')}}">@lang('navbar.gmg')</a>
                        <a class="nav-dropdown__link" href="{{ route('hembos.id')}}">@lang('navbar.hotprintandembos')</a>
                        <a class="nav-dropdown__link" href="{{ route('membos.id')}}">@lang('navbar.microemboss')</a>
                        <a class="nav-dropdown__link" href="{{ route('uv.id')}}">@lang('navbar.UVspot')</a>
                          {{-- <a class="nav-dropdown__link" href="{{ route('packlane_plus')}}">Products and services </a>
                          <a class="nav-dropdown__link" href="{{ route('request_quote') }}">Volume discounts</a> --}}
                      </ul>
                  </li>
                <a class="nav-bar__item nav-bar__item--link " href="{{ route('ourproduct.id') }}" id="design-box-link-js"> @lang('navbar.ourproduct') </a>
                <a class="nav-bar__item nav-bar__item--link " href="{{ route('coolclients.id') }}" id="design-box-link-js"> @lang('navbar.coolclient') </a>
                  {{-- <a class="nav-bar__item nav-bar__item--link " href="{{ route('news.id') }}" id="design-box-link-js">News</a> --}}
                  {{-- <a class="nav-bar__item nav-bar__item--link " href="{{ route('shiplane') }}">Shiplane</a>
                  <a class="nav-bar__item nav-bar__item--link " href="{{ route('inspirations') }}">Inspiration</a>
                  <a class="nav-bar__item nav-bar__item--link " href="{{ route('customers') }}">Customers</a> --}}
                  <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js ">
                      <a class="nav-bar__item nav-bar__item--link ">
                        @lang('navbar.about')
                          <span data-rotate="down" class="nav-bar__dropdown-chevron rotate pcon-chevron-down rotate-down"></span>
                      </a>
                      <ul class="nav-dropdown">
                        <a class="nav-dropdown__link" href="{{ route('company') }}">@lang('navbar.company')</a>
                        <a class="nav-dropdown__link" href="{{ route('news.id') }}">@lang('navbar.news')</a>
                        {{-- <a class="nav-dropdown__link" href="{{ route('blogs') }}">Blog</a> --}}
                        <a class="nav-dropdown__link" href="{{ route('cvm.id') }}">@lang('navbar.visionandmission')</a>
                        <a class="nav-dropdown__link" href="{{ route('ca_certificates.id') }}">@lang('navbar.companyandarchivementandcertificates')</a>
                        <a class="nav-dropdown__link" href="{{ route('partnership.id') }}">@lang('navbar.partnership')</a>
                        <a class="nav-dropdown__link" href="{{ route('ourteam.id') }}">@lang('navbar.ourteam')</a>
                        <a class="nav-dropdown__link" href="{{ route('woy.id') }}">@lang('navbar.weofferyou')</a>
                        <a class="nav-dropdown__link" href="{{ route('wbad.id') }}">@lang('navbar.webuildadesign')</a>
                        {{-- <a class="nav-dropdown__link" href="{{ route('faq') }}">FAQ</a> --}}
                        <a class="nav-dropdown__link" href="{{ route('prf_scs.id') }}">@lang('navbar.contactus')</a>
                        {{-- <a class="nav-dropdown__link" href="{{ route('contact_us.id') }}">Contact</a> --}}
                      </ul>
                  </li>
                  @auth
                    <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js ">
                        <a class="nav-bar__item nav-bar__item--link ">
                        @lang('navbar.my_accounts')
                          <span data-rotate="down" class="nav-bar__dropdown-chevron rotate pcon-chevron-down rotate-down"></span>
                        </a>
                        <ul class="nav-dropdown">
                        @if(Auth::user()->accessable == "marketing")                    
                            <a class="nav-dropdown__link" href="{{ route('accounts.id') }}"><i class="fas fa-user-circle"></i> @lang('message.usernames'), {{ Auth::user()->name }}</a>
                            <a class="nav-dropdown__link" href="{{ url('/') }}"><i class="fas fa-shopping-cart"></i> {{ __('History Transaction') }}</a>
                            @else  
                            <a class="nav-dropdown__link" href="{{ route('accounts.id') }}"><i class="fas fa-user-circle"></i> @lang('message.usernames'), {{ Auth::user()->name }}</a>
                                @if(Auth::user()->is_email_verified == 0)
                                <a class="nav-dropdown__link" href="{{ route('dsbox') }}"><i class="fas fa-mail-bulk"></i> Verified Your Email</a>
                                @else 
                                    <a class="nav-dropdown__link" href="{{ url('/') }}"><i class="fas fa-shopping-cart"></i> @lang('message.orders')</a>
                            @endif
                        @endif
                        @if(Auth::user()->accessable == "admin")
                        <a class="nav-dropdown__link" href="{{ route('mst.evt.id') }}"><i class="fas fa-solar-panel"></i> Panel Admin</a>
                        <a class="nav-dropdown__link" target="_blank" href="{{ url('https://krisanthium.livehelperchat.com/site_admin/chat/list/(user_id)/1') }}"><i class="fas fa-headset"></i> Customer Service (Validate 2022-02-09 10:53:55)</a>
                        @endif
                            <a class="nav-dropdown__link" href="{{ route('logouts') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> @lang('message.sign_out')
                        </a>
                        <form id="logout-form" action="{{ route('logouts') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </ul>
                      </li>
                    <a class="nav-bar__item nav-bar__item--link " href="{{ route('careers') }}" id="design-box-link-js"> @lang('navbar.crrs') </a>
                        <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js dropdown-notifications">
                            <a class="nav-bar__item nav-bar__item--link ">
                                <button type="button" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                <!-- Heroicon name: outline/bell -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                                </button>
                                <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
                                <i data-count="0" class=""></i>
                                    <h3 class="dropdown-toolbar-title dt-counts"><span style="
                                    position: absolute;
                                    top: -3px;
                                    left: 33px;"
                                    class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold notif-count leading-none text-rose-100 bg-rose-600 rounded-full"></span></h3>

                                </a>
                                <span data-rotate="down" class="nav-bar__dropdown-chevron rotate rotate-down"></span>
                            </a>
                            <ul class="nav-dropdown">
                            <a class="nav-dropdown__link text-center justify-items-start hover:justify-items-left" id="ntfound" href="#">
                                <img alt="KOP" class="img-responsive" style='position:relative; left: -23px; height: 73%; width: 58%; object-fit: contain' src="{{ asset('img/no-files.png') }}">
                                <span style="font-size: 15px;position: relative; top: -14px;left:-3px">
                                    <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">-- KOP Notify --</h2>
                                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                                    Empty Notification..
                                    </p>
                                </span>
                            </a>
                            </ul>
                        </li>
                  @endauth
                  @guest
                    <a class="nav-bar__item nav-bar__item--link " href="{{ route('careers') }}" id="design-box-link-js"> @lang('navbar.crrs') </a>
                    <a class="nav-bar__item nav-bar__item--link " href="{{ route('auth_user.id') }}">@lang('auth.signin')</a>
                    <a class="nav-bar__item nav-bar__item--link  nav-bar__item--signup-link" href="{{ route('rgstr.id') }}">@lang('auth.signup')</a>
                      {{-- <li id="menu-item-944" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-944 et-show-dropdown et-hover"><a href="{{ route('auth_user.id') }}">Sign In</a></li> --}}
                  @endguest
                @php
                  $rdf = str_replace('en', 'gb', App::getLocale());
                @endphp
                <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js ">
                  <a class="nav-bar__item nav-bar__item--link ">
                    <span class="fi fi-{{Config::get('languages')[$rdf]['flag-icon']}}"></span> 
                    {{ Config::get('languages')[$rdf]['display'] }}
                  </a>
                  <ul class="nav-dropdown">
                    @foreach (Config::get('languages') as $lang => $language)
                        {{-- @if ($lang != App::getLocale()) --}}
                          <a class="dropdown-item nav-dropdown__link " href="{{ route('lang.switch', $lang) }}">
                          <span class="nav-bar__item nav-bar__item--link fi fi-{{$language['flag-icon']}} fis"></span> {{$language['display']}}</a>
                        {{-- @endif --}}
                    @endforeach
                </li>
              </ul>
          </nav>
        </div>
    </header> <!-- #main-header -->
    <div class="container flash-container">
    </div>
    <main>
        @yield('content')
    </main>
    <style>
        #fss .fss-footer:before {
            position:absolute;
            bottom:0;
            width:100%;
            height:60px;   /* Height of the footer */
            background:#6cf;
        }
    </style>
@php
    $currentURL = \Request::segment(3);
    $currentURLs = \Request::segment(2);
@endphp

<div class="nav-container" style="position: sticky;top: 0px">
    <div class="logo-container">
        <div>
            @if($currentURL == "careers")
                <div style="margin-bottom: 2446px;"></div>
            @endif
            @if($currentURLs == "vission-mission")
                <div style="margin-bottom: 821px;"></div>
            @endif
            @if($currentURL == "post")
                <div style="margin-bottom: 2446px;"></div>
            @endif
            @if($currentURLs == "readmore")
                <div style="margin-bottom: 411px;"></div>
            @endif
            @if($currentURLs == "company-profile")
                <div style="margin-bottom: 12px;"></div>
            @endif
            @if($currentURLs == "one-stop-service")
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            @endif
            @if($currentURLs == "plotter-mock-up")
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            @endif
            @if($currentURLs == "company-archivement-certificates")
            <div style="margin-bottom: 634px;"></div>
            @endif
            @if($currentURLs == "partnership")
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            @endif
            @if($currentURLs == "contact-us")
                <div style="margin-bottom: 494px;"></div>
            @endif
            @if($currentURLs == "our-team")
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            @endif
            @if($currentURLs == "we-offer-you")
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            @endif
            @if($currentURLs == "we-build-a-design")
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            @endif
            @if($currentURLs == "gmg-color-printing")
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            @endif
            @if($currentURLs == "hotprint-embos")
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            @endif
            @if($currentURLs == "micro-emboss")
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            @endif
            @if($currentURLs == "UV-spot")
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            @endif
            @if($currentURLs == "OurProduct")
            <br />
            <br />
            <br />
            @endif
            @if($currentURLs == "ourCustomer")
                <div style="margin-bottom: 1689px;"></div>
            @endif
        </div>
    </div>
</div>  
{{-- <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong><span id="address"></span></p></li>
<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong><span id="phone"></span></p></li>
<li><p><i class="fa fa-fax"></i> <strong>Fax:</strong><span id="fax"></span></p></li>
<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:printing@krisanthium.com"><span id="email"></span></a></p></li>
<li><p><i class="fa fa-external-link-square"></i> <strong>URL:</strong> <a href="index.html"><span id="url"></span></a></p></li>
<li><p><i class="fa fa-instagram"></i><strong>Social Media: </strong><a href="https://www.instagram.com/krisanthiumoffsetprinting/"><span id="socialmedia"></span></a></p></li> --}}
    <footer id="footer">
        <div class="container">
          <div class="row">
            <div class="footer-ribbon">
              <span>Get in Touch</span>
            </div>
            <div class="col-md-12">
              <div class="contact-details">
                <h4>@lang('footer.ctus')</h4>
                <ul class="contact">
                  <li><p><i class="fa fa-map-marker"></i> <strong>@lang('footer.address'):</strong> <span id="address_footer"></span></p></li>
                  <li><p><i class="fa fa-phone"></i> <strong>@lang('footer.phone'):</strong> <span id="phone_footer"></span></p></li>
                  <li><p><i class="fa fa-fax"></i> <strong>Fax:</strong> <span id="fax_footer"></span></p></li>
                  <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:printing@krisanthium.com"> <span id="email_footer"></span></a></p></li>
                  <li><p><i class="fa fa-external-link-square"></i> <strong>URL:</strong> <a href="{{ route('dashboard')}}"> <span id="url_footer"></span></a></p></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
         <div class="footer-copyright col-md-12">
            <div class="container">
                <div class="row" style="height: 110px">
                    <div class="col-md-1">
                    <a href="{{ route('dashboard') }}" class="logo">
                            <!--<img alt="Porto Website Template" class="img-responsive" src="img/logo-footer.png">-->
                        <img alt="KOP" class="img-responsive" width="58px" height="67px" src="{{ asset('KOP/logoKOPf.jpg') }}">
                        </a>
                    </div>
                    <div class="col-md-7" style="position: relative; top:25px;right:-55px">
                        <p>© Copyright 2021 - 2022. All Rights Reserved.</p>
                    </div>
                    <div style="position:relative; top:-10px; right:-79px;padding: 9px">
                    <a href="https://www.instagram.com/krisanthiumoffsetprinting/" class="logo">
                    <img alt="IG KOP" class="img-responsive" src="{{ asset('KOP/icon_instagram.png') }}" width="60px">	
                    </a>
                    </div>
                </div>
            </div>
        </div>
      </footer>
    @extends('livewire.handleNotifications')
    <style>
        .content_img{
            position: relative;
            width: 200px;
            height: 200px;
            float: left;
            margin-right: 10px;
        }

        .content_img div{
            position: absolute;
            bottom: 0;
            right: 0;
            background: rgb(20, 151, 31);
            color: white;
            margin-bottom: 5px;
            font-family: sans-serif;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: visibility 0s, opacity 0.5s linear; 
            transition: visibility 0s, opacity 0.5s linear;
        }

        .content_img:hover{
            cursor: pointer;
        }

        .content_img:hover div{
            width: 150px;
            padding: 8px 15px;
            border-radius: 25px;
            visibility: visible;
            opacity: 0.7; 
        }

    </style>
    <script src="{{ asset('packlane-assets/jquery.min.js') }}"></script>
    <script src="{{ asset('packlane-assets/vendor-bundle.js') }}"></script>
    <script src="{{ asset('packlane-assets/jquery.noty.min.js') }}"></script>
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
    <script src="{{ asset('js/vendor/pusher-v6.min.js')}}"></script>

    <script>
        var notificationsWrapper   = $('.dropdown-notifications');
            var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
            var notificationsCountElem = notificationsToggle.find('i[data-count]');
            var notificationsCount     = parseInt(notificationsCountElem.data('count'));
            var notifications          = notificationsWrapper.find('ul.nav-dropdown');

            if (notificationsCount <= 0) {
                $('.dt-counts').hide();

            }
    @auth

        var pusher = new Pusher('fdd3c469ca4993da4280', {
            cluster: 'ap1',
            forceTLS: true,
            encrypted: true,
        });

        const channels = pusher.subscribe('trigger-transaction');
        
        const user =  `{{ Auth::user()->id }}`;

        channels.bind('received-tr', function(data) {

            if(user == data.private) {

                $('#ntfound').hide();

                  var existingNotifications = notifications.html();
                  
                  var newNotificationHtml = `
                  <a class="nav-dropdown__link" href="#ok">event change in `+ data.dt+`</a>`;

                  notifications.html(newNotificationHtml + existingNotifications);

                  notificationsCount += 1;
                  notificationsCountElem.attr('data-count', notificationsCount);
                  notificationsWrapper.find('.notif-count').text(notificationsCount);
                  $('.dt-counts').show();
                  notificationsWrapper.show();

            }

        });

        const channels_ticketing = pusher.subscribe('trigger-transaction-ticket');
        channels_ticketing.bind('received-ticketing', function(data) {
        const team_support = `{{ Auth::user()->accessable }}`;
              if(team_support == "marketing" || team_support == "admin") {

                  $('#ntfound').hide();
                  var existingNotifications = notifications.html();
                  let ticket_id = `${data.ticket_id}`;
                  var url = '{{ route("show.tickets", ":ticket_id") }}';
                  url = url.replace(':ticket_id', ticket_id);

                  var newNotificationHtml = `
                  <a class="nav-dropdown__link" href="${url}">
                    <span class="text-lg inline-block py-1 px-2.5 leading-none whitespace-nowrap align-baseline font-bold bg-lime-500 text-white rounded-full">
                    {{ __('New') }}
                    </span> #${data.ticket_title}
                  </a>`;

                  notifications.html(newNotificationHtml + existingNotifications);

                  notificationsCount += 1;
                  notificationsCountElem.attr('data-count', notificationsCount);
                  notificationsWrapper.find('.notif-count').text(notificationsCount);
                  $('.dt-counts').show();
                  notificationsWrapper.show();
              }

            });

            const channels_ticketingreplys = pusher.subscribe('re-kop-ticketing');
            channels_ticketingreplys.bind('received-reply-ticketing', function(data) {
                
                  $('#ntfound').hide();
                  var existingNotifications = notifications.html();
                  let ticket_id = data.ticket.ticket_id;
                  var url = '{{ route("show.tickets", ":ticket_id") }}';
                  url = url.replace(':ticket_id', ticket_id);

                  var newNotificationHtml = `
                  <a class="nav-dropdown__link" href="${url}">
                    <span class="text-lg inline-block py-1 px-2.5 leading-none whitespace-nowrap align-baseline font-bold bg-lime-500 text-white rounded-full">
                    {{ __('New') }}
                    </span>
                    <span class="material-icons">
                            support_agent
                        </span>
                      Reply Your Ticket : #${ticket_id}
                  </a>`;

                  notifications.html(newNotificationHtml + existingNotifications);

                  notificationsCount += 1;
                  notificationsCountElem.attr('data-count', notificationsCount);
                  notificationsWrapper.find('.notif-count').text(notificationsCount);
                  $('.dt-counts').show();
                  notificationsWrapper.show();

            });

    @endauth
    
    RenderAPIAboutCompany().then(function(data){

        if(data){
        $('#address').append(data.data.address)
        $('#phone').append(data.data.phone)
        $('#fax').append(data.data.Fax)
        $('#email').append(data.data.Email)
        $('#url').append(data.data.URL)
        $('#socialmedia').append(data.data.social_media)
        $('#bsdh').append(data.data.bsdh)
        $('#bsf').append(data.data.bsf)
        $('#bsc').append(data.data.bsc)
        $('#address_footer').append(data.data.address)
        $('#phone_footer').append(data.data.phone)
        $('#fax_footer').append(data.data.Fax)
        $('#email_footer').append(data.data.Email)
        $('#url_footer').append(data.data.URL)}
    });
  
    RenderAPICoolClient().then(function(data){
        data.data.forEach((item, index) => {
            $('.layer-cool-client').append('\n \n'+'<li class="col-md-3 col-sm-6 col-xs-12 isotope-item leadership">'
                +'<div class="content_img">'
                    +'<img  data-src='+item.src_customer_img+' loading="lazy" class="lazyload">'
                    +'<div>'+item.customer_name+'</div>'
                +'</div>'
            +'</li>')
            if ('loading' in HTMLImageElement.prototype) {
                const images = document.querySelectorAll('img[loading="lazy"]');
                images.forEach(img => {
                img.src = img.dataset.src;
                });
            } else {
                // Dynamically import the LazySizes library
                const script = document.createElement('script');
                script.src =
                'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js';
                document.body.appendChild(script);
            }
        });
    });

    RenderAPIVM().then(function(data){
        $('.layer-vm').append('\n \n'+'<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">'
            +'<div class="lg:text-center">'
                +'<h2 class="text-base text-yellow-400 font-semibold tracking-wide uppercase">PT. Krisanthium Offset Printing</h2>'
                +'<p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">'
                    +data.data.title+'</p>'
                    +'<p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">'
                        +data.data.title_description+'</p>'
                        +'</div>'
                        +'<div class="mt-10">'
                    +' <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">'
                +'<div class="relative">'
                    +'<dt>'
                        +'<div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">'
                            +'<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">'
                                +' <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>'
                            +' </svg>'
                        +' </div>'
                    +' <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Our Vission</p>'
                +'</dt>'
            +'<span class="mt-2 ml-16 text-gray-500">'
            +data.data.visi+'</span>'
        +'</div>'
        +'<div class="relative">'
            +'<dt>'
            +'<div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">'
            +'<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">'
                +'<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>'
                +'</svg>'
            +'</div>'
            +'<p class="ml-16 text-lg leading-6 font-medium text-gray-900">Our Mission</p>'
                +'</dt>'
                    +'<span class="mt-2 ml-16 text-base text-gray-500">'
                +data.data.misi+'</span>'
                +'</div>'
            +'</dl>'
        +'</div>'
    +'</div>')
    });
    
    async function RenderAPICoolClient() {

        let data = {
                    dt:null,
                }

            const endpoint_careers = "{{ route('cool.client.vm.api.secret') }}";
                
            const settings = {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            'Content-Type': 'application/json;charset=utf-8'
                            },
                        body: JSON.stringify(data)
                }

            try {
                
                const fetchResponse = await fetch(`${endpoint_careers}`, settings);
                const data = await fetchResponse.json();
                return data;
            } catch (error) {

            return error
        }    
    }

    async function RenderAPIVM() {
        
        let data = {
                    dt:null,
                }

            const endpoint_careers = "{{ route('cmpf.vm.api.secret') }}";
                
            const settings = {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            'Content-Type': 'application/json;charset=utf-8'
                            },
                        body: JSON.stringify(data)
                }

            try {
                
                const fetchResponse = await fetch(`${endpoint_careers}`, settings);
                const data = await fetchResponse.json();
                return data;
            } catch (error) {

            return error
            }    

        }

        async function RenderAPIAboutCompany() {
        
            let data = {
                        dt:null,
                    }

                const endpoint_careers = "{{ route('cmpf.about.company.api.secret') }}";
                    
                const settings = {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            'Content-Type': 'application/json;charset=utf-8'
                            },
                        body: JSON.stringify(data)
                    }

                try {
                    
                    const fetchResponse = await fetch(`${endpoint_careers}`, settings);
                    const data = await fetchResponse.json();
                    return data;
                } catch (error) {

                return error
                }    

        }

    RenderAPICompanyProfiles().then(function(data){
        $('.layer-profiles').append('<section class="section section-no-background m-none">'
            +'<div class="container">'
                +'<div class="row">'
                    +'<div class="col-md-12"></div>'
                    +'<div class="col-md-3">'
                        +'<img class="img-responsive" src="'+data.data.content+'" alt="Office">'
                    +'</div>'
                    +'<div class="col-md-9">'	
                        +'<p class="lead">'+data.data.title+'</p>'							
                        +'<p>'+data.detail+'</p>'
                    +'</div>'
                +'</div>'
            +'</div>'
        +'</section>')
    });

    function getMonthName(month){
        const d = new Date();
        d.setMonth(month-1);
            const monthName = d.toLocaleString("id", {month: "long"});

        return monthName;
    }

    RenderAPICareers().then(function(data){
        if(data.data.length !== 0){
            let currentDate = new Date();
            var formattedDateCurrent =
            currentDate.getDate() + " " +
            (getMonthName(currentDate.getMonth() + 1)) + " " +
            currentDate.getFullYear().toString()
            formattedDateCurrent.replace(/(?<!\d)(?=\d(\D|$))/g, '0');
            var fg = 0;
                data.data.forEach((item, index) => {
                    fg++;
                    let date = new Date(item.end_date);
                    var formattedDate =
                    date.getDate() + " " +
                    (getMonthName(date.getMonth() + 1)) + " " +
                    date.getFullYear().toString()
                    formattedDate.replace(/(?<!\d)(?=\d(\D|$))/g, '0');
                    if(formattedDate != formattedDateCurrent) {
                        $('.layer').append('<li class="col-md-4 col-sm-6 col-xs-12 isotope-item leadership">'
                            +'<span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">'
                                +'<span class="thumb-info-wrapper">'
                                    +'<img src="'+ item.content+'" style="height:586px;" class="img-responsive" alt="">'
                                        +'<span class="thumb-info-title">'
                                            +'<span class="thumb-info-inner">'+item.title+'</span>'
                                        +'</span>'
                                    +'</span>'
                                    +'<span class="thumb-info-caption">'
                                        +'<br><b>Tanggal Berakhir : '+formattedDate+'</b><p></p>'
                                    +'</span>'
                                +'<b>Apply to : </b>'
                                +'<a href="mailto:career@krisanthium.com?Subject=Lamaran Kerja '+item.title+';cc=hrd@krisanthium.com" title="Klik untuk kirim email">career@krisanthium.com</a>'	
                            +'</span>'
                        +'</li>')
                    }     
                });
            } else {
                    $('.layer').append('<li class="col-md-4 col-sm-6 col-xs-12 isotope-item leadership text-center">'
                            +'<span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">'
                            +'<span class="thumb-info-caption">'
                                +'<br><b>Lowongan kerja masih belum dibuka.</b><p></p>'
                            +'</span>'
                    +'</span>'
                +'</li>')
            }

        });
        
        function TextTrnct(str, maxLength, { side = "end", ellipsis = "..." } = {}) {
            if (str.length > maxLength) {
                switch (side) {
                case "start":
                    return ellipsis + str.slice(-(maxLength - ellipsis.length));
                case "end":
                default:
                    return str.slice(0, maxLength - ellipsis.length) + ellipsis;
                }
            }
            return str;
        }

    RenderAPINews().then(function(data){
        if(data.data.length !== 0){
            var d = 0;
                data.data.forEach((item, index) => {
                d++;
                let date = new Date(item.posted_at);
                let currentDate = new Date();
                var formattedDateCurrent = currentDate.getDate() + " " +
                (getMonthName(currentDate.getMonth() + 1)) + " " +
                currentDate.getFullYear().toString()
                formattedDateCurrent.replace(/(?<!\d)(?=\d(\D|$))/g, '0');
                    AsyncTranslator(TextTrnct(item.detail_content, 74)).then(function(rest_api_google){
                        $('.layer-news').append(' <li class="col-md-4 col-sm-6 col-xs-6 isotope-item leadership">'
                            +'<span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">'
                                +'<span class="thumb-info-wrapper">'
                                    +'<a href="#">'
                                        +'<img src="'+item.content+'" style="height:325px;">'
                                            +'<span class="thumb-info-title">'
                                                +'<span class="thumb-info-inner">'+item.title+'</span>'
                                                    +'<span class="thumb-info-type">'+formattedDateCurrent+'</span>'
                                                    +'</span>'
                                                +'</a>'
                                            +'</span>'
                                        +'<span class="thumb-info-caption">'
                                    +'<span class="thumb-info-caption-text"><font size="2">'
                                +'<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;mso-para-margin-left:0.0000gd;text-indent:39.9500pt;mso-char-indent-count:3.3300;text-align:justify;text-justify:inter-ideograph;">'
                            +'<font face="Arial"><span style="font-size: 12pt;">'+rest_api_google.rest_translate+'&nbsp;&nbsp;<a style="cursor:pointer" onclick="DetailNews('+item.id+')"><b>[Read More]</b></a></span></font>'
                        +'</p></font></span></span></span>'
                    +'</li>')
                });
            });

            } else {
                    $('.layer-news').append('<li class="col-md-4 col-sm-6 col-xs-12 isotope-item leadership text-center">'
                            +'<span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">'
                            +'<span class="thumb-info-caption">'
                                +'<br><b>Belum ada berita terkini.</b><p></p>'
                            +'</span>'
                    +'</span>'
                +'</li>')
            }

        });

        window.Laravel = {!! json_encode([
            'csrfToken'=> csrf_token(),
            'user'=> [
                'authenticated' => auth()->check(),
                'id' => auth()->check() ? auth()->user()->id : null,
                'name' => auth()->check() ? auth()->user()->name : null, 
                ]
            ])
        !!};

       

        async function AsyncTranslator(text) {

                let data = {
                        marks:text,
                    }

                const endpoint_masterenders = "{{ route('translate.to.google') }}";
                    
                const settings = {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                'Content-Type': 'application/json;charset=utf-8'
                                },
                            body: JSON.stringify(data)
                    }

                try {
                    
                    const fetchResponse = await fetch(`${endpoint_masterenders}`, settings);
                    const data = await fetchResponse.json();
                    return data;
                } catch (error) {

                return error
                }    

        }

        async function UpdateMasterSender(emarketing) {

                let data = {
                        email:emarketing,
                    }

                const endpoint_masterenders = "{{ route('mst.updt.id') }}";
                    
                const settings = {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                'Content-Type': 'application/json;charset=utf-8'
                                },
                            body: JSON.stringify(data)
                    }

                try {
                    
                    const fetchResponse = await fetch(`${endpoint_masterenders}`, settings);
                    const data = await fetchResponse.json();
                    return data;
                } catch (error) {

                return error
            }    

        }
        
        async function RenderAPIDetailPostBlogs() {

            let data = {
                    dt:null,
                }

            const endpoint_news = "{{ route('news.api.secret') }}";
                
            const settings = {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json;charset=utf-8'
                    },
                body: JSON.stringify(data)
            }

            try {
                
                const fetchResponse = await fetch(`${endpoint_news}`, settings);
                const data = await fetchResponse.json();
                return data;
            } catch (error) {

            return error
            }    

        }

        RenderAPINewsDetail("{{ isset($currentURLnews) ? $currentURLnews : null }}").then(function(data){
                setTimeout(function(){ 
                    $('.latest-post').append('<div class="container">'
                        +'<hr>'
                            +'<table border="0" width="100%">'
                                +'<tbody>'
                                    +'<tr>'
                                        +'<td align="center">'
                                            +'<h2><b>'+data.data.title+'</b></h2>'
                                            +'<h2></h2>'
                                        +'</td>'
                                        +'</tr>'
                                    +'<tr>'
                                +'<td align="center"><img src="'+data.data.content+'" style="height:310px;width:439px"></td>'
                            +'</tr>'
                        +'<tr>'
                            +'<td align="justify">'
                                +'<div class="col-md-12">'
                                +'<br>'
                                    +'<p>Posted on : <b>'+data.data.posted_at+'</b> </p>'
                                        + data.detail_content +'<p><br /></p>'
                                    +'</div>'
                                +'</td>'
                            +'</tr>'
                        +'</tbody>'
                    +'</table>'
                +'</div>')
            }, 500);
        });


        async function RenderAPIsAchievement() {

            let data = {
                    id:null,
                }

            const endpoint_news = "{{ route('achievement.api.secret.detail') }}";
                
            const settings = {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json;charset=utf-8'
                    },
                body: JSON.stringify(data)
            }

            try {
                const fetchResponse = await fetch(`${endpoint_news}`, settings);
                const data = await fetchResponse.json();
                return data;
            } catch (error) {

            return error
            }    

        }

        RenderAPIsAchievement().then(function(data){
                setTimeout(function(){ 
                    $('.layer-achievement').append('<table border="0">'
                                +'<tbody>'
                                    +'<tr>'
                                        +'<td align="center"><img src="'+data.data[0].img_iso+'" style="height:525px;width:1954px"></td>'
                                    +'</tr>'
                                        +'<td align="center"><img src="'+data.data[1].img_iso+'" style="height:456px;width:243px"></td>'
                                    +'<tr>'
                                    +'</tr>'
                                +'<tr>'
                                    +'<td align="text-left">'
                                        +'<div class="">'
                                        + data.data[2].detail_iso+'</div>'
                                +'</td>'
                            +'</tr>'
                        +'</tbody>'
                    +'</table>')
            }, 500);
        });

        function DetailNews(id) {
            RenderAPINewsDetail(id).then(function(data){
                var url = '{{ route("news.posts.id", ":id") }}';
                url = url.replace(':id', id);
                let redirect = url;
                    setTimeout(function(){ 
                    window.location.href = redirect;
                }, 3000);
            });
        }

        async function RenderAPINewsDetail(index) {

            let data = {
                    id:index,
                }

            const endpoint_news = "{{ route('news.api.secret.detail') }}";
                
            const settings = {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json;charset=utf-8'
                    },
                body: JSON.stringify(data)
            }

            try {
                
                const fetchResponse = await fetch(`${endpoint_news}`, settings);
                const data = await fetchResponse.json();
                return data;
            } catch (error) {

            return error
            }    

        }

        async function RenderAPINews() {

            let data = {
                    dt:null,
                }

            const endpoint_news = "{{ route('news.api.secret') }}";
                
            const settings = {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json;charset=utf-8'
                    },
                body: JSON.stringify(data)
            }

            try {
                
                const fetchResponse = await fetch(`${endpoint_news}`, settings);
                const data = await fetchResponse.json();
                return data;
            } catch (error) {

            return error
            }    

        }

        async function RenderAPICareers() {
        
        let data = {
                    dt:null,
                }

            const endpoint_careers = "{{ route('careers.api.secret') }}";
                
            const settings = {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            'Content-Type': 'application/json;charset=utf-8'
                            },
                        body: JSON.stringify(data)
                }

            try {
                
                const fetchResponse = await fetch(`${endpoint_careers}`, settings);
                const data = await fetchResponse.json();
                return data;
            } catch (error) {

            return error
            }    

        }

        async function RenderAPICompanyProfiles() {
        
            let data = {
                        dt:null,
                    }

                const endpoint_careers = "{{ route('cmpf.profiles.api.secret') }}";
                    
                const settings = {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                'Content-Type': 'application/json;charset=utf-8'
                                },
                            body: JSON.stringify(data)
                    }

                try {
                    
                    const fetchResponse = await fetch(`${endpoint_careers}`, settings);
                    const data = await fetchResponse.json();
                    return data;
                } catch (error) {

                return error
                }    

            }

    $('body').on('click','button#updateCommonSmarketing',function(e){
        e.preventDefault()

        if($("#email").val()){
    
            Swal.fire({
                  title: 'Are you sure?',
                  html:
                    'Information email <b>As a recipient of orders from customers</b>, <br />' +'<br />'+
                    '<code>'+
                      'Update user this '+ $("#email").val() +'<br />'+
                    '</code> <br />'+'',
                  icon: 'question',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Update',
                  cancelButtonText: 'Cancel'
                }).then((result) => {
                  if (result.isConfirmed) {
                    UpdateMasterSender($('#email').val()).then(function(data){
                            if(data.status == true){
                                Swal.fire(
                                    'Information!',
                                    'Information has been update.',
                                    'success'
                                )
                            } else {

                                Swal.fire(
                                    'Information!',
                                    'Message failed to process, contact customer service, we will immediately help you..',
                                    'error'
                                )
                            }
                        });
                    }
                    });
                } 
                    else {

                        Swal.fire(
                            'Information!',
                            'the contents of the email cannot be empty..',
                            'warning'
                        )
                }
            })

        const searchClient = algoliasearch('YANZDFFH94', '36a98e64771723e3f5e570b5ef8eb002');

        const search = instantsearch({
        indexName: 'notification_payments',
        searchClient,
        });

        search.addWidgets([
            instantsearch.widgets.searchBox({
                container: '#searchbox',
                maxPages: 4,
                padding: 10,
            }),

            instantsearch.widgets.hits({
                container: '#hits',
                maxPages: 4,
                attributeName: 'hits.payment_code',
                padding: 10,
            })
        ]);

        search.start();

    </script>
</body>
</html>
