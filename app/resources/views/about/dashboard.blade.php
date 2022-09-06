<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<canvas style="inset: 0px; pointer-events: none; position: fixed; z-index: 1000000000;" width="1366"
    height="657"></canvas>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('KOP/logoKOPfooter.PNG') }}">

    <link crossorigin="" href="{{ asset('css/pweb-box-design.css') }}" rel="stylesheet"></link>

    <title>Custom Boxes &amp; Custom Packaging | Design your own boxes | PT. KOP</title>
            <!-- Vendor CSS -->
            <link rel="stylesheet" href="{{ asset('css/btstrapv-4.css')}}">
            <link rel="stylesheet" href="{{ asset('css/fntawesome.css')}}">
            <link rel="stylesheet" href="{{ asset('css/simple-line.icons.css')}}">
            <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{ asset('css/owl.carousel.default.min.css')}}">
            <link rel="stylesheet" href="{{ asset('css/magnific.css')}}">

            <link rel="stylesheet" href="{{ asset('packlane-assets/flag-icons-main/css/flag-icons.css') }} ">
            <link rel="stylesheet" href="{{ asset('packlane-assets/flag-icons-main/css/flag-icons.min.css') }} ">
    
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
            <link crossorigin="" crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet"></link>

            <!-- Skin CSS -->
            <link rel="stylesheet" href="{{ asset('css/defaults.css')}}">
            <!-- Theme Custom CSS -->
            {{-- <link rel="stylesheet" href="css/custom.css"> --}}
    
            <!-- Head Libs -->
        <script src="{{ asset('js/modernnize.js')}}"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <style type="text/tailwindcss">
          @layer utilities {
            .content-auto {
              content-visibility: auto;
            }
          }
        </style>
        @php
            $rdf = str_replace('en', 'gb', App::getLocale());
        @endphp
        
        @if ($rdf == "id")
            <link crossorigin="" href="{{ asset('packlane-assets/id-app-bundle-app.css')}}" rel="stylesheet">
        @elseif($rdf == "gb")
            <link crossorigin="" href="{{ asset('packlane-assets/app-bundle.css')}}" rel="stylesheet">
        @endif

    {{-- <meta
        content="At Packlane, we believe good things come in custom packages. Design small cartons, large printed shipping boxes, and everything in between."
        name="description"> --}}

    <!-- OpenGraph -->
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

    </style>
</head>
<body class="page" style="  overflow: scroll;overflow-x: hidden;max-height: 78vh;padding-bottom:0px;padding-top:0px;">
<header class="header " id="main-header-js" style="padding-bottom:0px;padding-top:0px;position: sticky;top: 0px;background: rgb(255, 255, 255);">
    <div class="nav-container" style="padding-bottom:0px;padding-top:0px;">

        <div class="logo-container">
            <a class="header-logo " href="{{ route('dashboard') }}">
                <picture><img alt="Packlane" width="100%" src="{{ asset('KOP/LogotypeKOP-01.jpg') }}"></picture>
            </a>
        </div>

        <div class="nav-bar__item nav-bar__item--menu-toggle">
            <picture><img alt="Menu" id="hamburger-js" src="https://assets.packlane.com/images/hamburger.svg">
            </picture>
        </div>

        <nav id="nav-bar-js" class="nav-bar" style="position: sticky;top: 0px;background: rgb(255, 255, 255);">
          <ul class="nav-bar__menu">
              <a class="nav-bar__menu--close">
                  <picture><img alt="Menu" id="hamburger-close-js"
                          src="https://assets.packlane.com/images/hamburger-white.svg"></picture>
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
              {{-- <a class="nav-bar__item nav-bar__item--link " href="{{ route('news.id') }}" id="design-box-link-js">News</a> --}}
              <a class="nav-bar__item nav-bar__item--link " href="{{ route('coolclients.id') }}" id="design-box-link-js"> @lang('navbar.coolclient') </a>
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
                                <a class="nav-dropdown__link" href="{{ route('tb.orders.customers') }}"><i class="fas fa-shopping-cart"></i> @lang('message.orders')</a>
                            @endif
                        @endif
                    @if(Auth::user()->accessable == "admin")
                        <a class="nav-dropdown__link" href="{{ route('mst.evt.id') }}"><i class="fas fa-solar-panel"></i> Panel Admin</a>
                        <a class="nav-dropdown__link" target="_blank" href="{{ url('https://krisanthium.livehelperchat.com/site_admin/chat/list/(chat_status_ids)/0') }}"><i class="fas fa-headset"></i> Customer Service (Validate 2022-02-09 10:53:55)</a>
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
    <div class="container dashboard" style="height: 200vh;">
        {{-- <section class="orders-header"> --}}
            <div class="orders-header__container">
            </div>
        {{-- </section> --}}
        @auth
        <section class="new-customer__container">
            <h2 class="new-customer__title">@lang('message.well')</h2>
        </section>
        @endauth
     
        <div class="slider-container rev_slider_wrapper">
            <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 1170, "gridheight": 500}'>
                <ul>
                    <li data-transition="fade">
                        <img src="{{ asset('img/slides/ico-m-trg.svg') }}"  
                            alt=""
                            data-bgposition="center center" 
                            data-bgfit="cover" 
                            data-bgrepeat="no-repeat" 
                            class="rev-slidebg">
        
                        <div class="tp-caption"
                            data-x="177"
                            data-y="60"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>
        
                        <div class="tp-caption top-label" style="font-size: 20px; color:white"
                            data-x="227"
                            data-y="55"
                            data-start="500"
                            data-transform_in="y:[-300%];opacity:0;s:500;">@lang('message.doyouneed')</div>
                        @php
                            $idStyles = str_replace('en', 'gb', App::getLocale());
                        @endphp
                        <div class="tp-caption"
                            @if($idStyles == "gb") data-x="504" @else data-x="579" @endif
                            data-y="60"
                            data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>
        
                        <div class="tp-caption main-label" style="font-size:63px;color:white"
                            data-x="135"
                           data-y="131"
                            data-start="1500"
                            data-whitespace="nowrap"						 
                            data-transform_in="y:[100%];s:500;"
                            data-transform_out="opacity:0;s:500;"
                            data-mask_in="x:0px;y:0px;"><b>@lang('message.packagingdesign')?</b></div>
        
                        <!--<div class="tp-caption bottom-label"
                            data-x="185"
                            data-y="225"
                            data-start="2000"
                            data-transform_in="y:[100%];opacity:0;s:500;">Lets check our solution</div>-->
                        <div class="tp-caption"
                            data-x="1000"
                            data-y="350"
                            data-start="2500"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;">
                            </div>
        
                        <div class="tp-caption"
                            data-x="990"
                            data-y="320"
                            data-start="3500"
                            data-transform_in="y:[300%];opacity:0;s:300;"></div>
        
                        <div class="tp-caption"
                            data-x="970"
                            data-y="290"
                            data-start="3650"
                            data-transform_in="y:[300%];opacity:0;s:300;"></div>
        
                        <div class="tp-caption"
                            data-x="950"
                            data-y="250"
                            data-start="3750"
                            data-transform_in="y:[300%];opacity:0;s:300;"></div>
        
                        <div class="tp-caption"
                            data-x="770"
                            data-y="80"
                            data-start="3950"
                            data-transform_in="y:[300%];opacity:0;s:300;"></div>
                            
                        <div class="tp-caption bottom-label" style="font-size:19px;color:white"
                            data-x="135"
                            data-y="225"
                            data-start="2000"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;e:Power4.easeInOut;"
                            data-transform_out="opacity:0;s:500;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-splitin="chars" 
                            data-splitout="none" 
                            data-responsive_offset="on" 
                            data-elementdelay="0.05">
                            {{-- <a href="{{ route('dsbox') }}" class="btn btn--blue-white">@lang('message.bsa')</a></div> --}}
                            @isset(Auth::user()->is_email_verified)
                                    @if(Auth::user()->is_email_verified == 0)
                                    <a href="#mustveried_email" class="BtnMustVerifiedEmails btn btn--blue-white">You must verified email, to use this features..</a>
                                    @else
                                    <a href="{{ route('dsbox') }}" class="btn btn--blue-white">@lang('message.bsa')</a>
                                    @endif
                                @else 
                                    <a href="{{ route('dsbox') }}" class="BtnMustVerifiedEmails btn btn--blue-white">let's get started to @lang('message.bsa')</a>
                            @endisset
                        <!--<div class="tp-caption blackboard-text"
                            data-x="640"
                            data-y="300"
                            data-start="3950"
                            style="font-size: 37px;"
                            data-transform_in="y:[300%];opacity:0;s:300;">Think</div>
        
                        <div class="tp-caption blackboard-text"
                            data-x="665"
                            data-y="350"
                            data-start="4150"
                            style="font-size: 47px;"
                            data-transform_in="y:[300%];opacity:0;s:300;">Outside</div>
        
                        <div class="tp-caption blackboard-text"
                            data-x="690"
                            data-y="400"
                            data-start="4350"
                            style="font-size: 32px;"
                            data-transform_in="y:[300%];opacity:0;s:300;">The box :)</div>-->
                    </li>
                    <li data-transition="fade">
                        <!--<img src="img/slides/slide-bg.jpg"  
                            alt=""
                            data-bgposition="center center" 
                            data-bgfit="cover" 
                            data-bgrepeat="no-repeat" 
                            class="rev-slidebg" data-no-retina>
        
                        <div class="tp-caption top-label"
                            data-x="155"
                            data-y="100"
                            data-start="500"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"><img src="img/slides/slide-concept.png" alt=""></div>
        
                        <div class="tp-caption blackboard-text"
                            data-x="285"
                            data-y="180"
                            data-start="1000"
                            style="font-size: 30px;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;">easy to</div>
        
                        <div class="tp-caption blackboard-text"
                            data-x="285"
                            data-y="220"
                            data-start="1200"
                            style="font-size: 40px;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;">customize!</div>
        
                        <div class="tp-caption main-label"
                            data-x="685"
                            data-y="225"
                            data-start="1800"
                            data-whitespace="nowrap"						 
                            data-transform_in="y:[100%];s:500;"
                            data-transform_out="opacity:0;s:500;"
                            data-mask_in="x:0px;y:0px;">DESIGN IT!</div>
        
                        <div class="tp-caption bottom-label"
                            data-x="685"
                            data-y="250"
                            data-start="2000"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;e:Power4.easeInOut;"
                            data-transform_out="opacity:0;s:500;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-splitin="chars" 
                            data-splitout="none" 
                            data-responsive_offset="on" 
                            data-elementdelay="0.05">Create slides with brushes and fonts</div>-->
                        <img  
                            alt=""
                            data-bgposition="center center" 
                            data-bgfit="cover" 
                            data-bgrepeat="no-repeat" 
                            class="rev-slidebg">
        
                        <div class="tp-caption"
                            data-x="177"
                            data-y="60"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>
        
                        <div class="tp-caption top-label" style="font-size:20px;color:white"
                            data-x="227"
                            data-y="55"
                            data-start="500"
                            data-transform_in="y:[-300%];opacity:0;s:500;">@lang('message.doyouneed')</div>
        
                        <div class="tp-caption"
                            @if($idStyles == "gb") data-x="504" @else data-x="579" @endif
                            data-y="60"
                            data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>
        
                        <div class="tp-caption main-label" style="font-size:63px;color:white"
                            data-x="135"
                           data-y="131"
                            data-start="1500"
                            data-whitespace="nowrap"						 
                            data-transform_in="y:[100%];s:500;"
                            data-transform_out="opacity:0;s:500;"
                            data-mask_in="x:0px;y:0px;"><b>@lang('message.packagingdesign')?</b></div>
        
                        <div class="tp-caption"
                            data-x="1000"
                            data-y="350"
                            data-start="2500"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;"><img src="img/slides/slide-concept-2-1.png" alt=""></div>
        
                        <div class="tp-caption"
                            data-x="990"
                            data-y="320"
                            data-start="3500"
                            data-transform_in="y:[300%];opacity:0;s:300;"><img src="img/slides/slide-concept-2-2.png" alt=""></div>
        
                        <div class="tp-caption"
                            data-x="970"
                            data-y="290"
                            data-start="3650"
                            data-transform_in="y:[300%];opacity:0;s:300;"><img src="img/slides/slide-concept-2-3.png" alt=""></div>
        
                        <div class="tp-caption"
                            data-x="950"
                            data-y="250"
                            data-start="3750"
                            data-transform_in="y:[300%];opacity:0;s:300;"><img src="img/slides/slide-concept-2-4.png" alt=""></div>
        
                        <div class="tp-caption"
                            data-x="770"
                            data-y="80"
                            data-start="3950"
                            data-transform_in="y:[300%];opacity:0;s:300;"><img src="img/slides/slide-concept-2-5.png" alt=""></div>
                            
                        <div class="tp-caption bottom-label"
                            data-x="135"
                            data-y="225"
                            data-start="2000" style="font-size:19px;color:white"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;e:Power4.easeInOut;"
                            data-transform_out="opacity:0;s:500;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-splitin="chars" 
                            data-splitout="none" 
                            data-responsive_offset="on" 
                            data-elementdelay="0.05">
                            @isset(Auth::user()->is_email_verified)
                            @if(Auth::user()->is_email_verified == 0)
                            <a href="#mustveried_email" class="BtnMustVerifiedEmails btn btn--blue-white">You must verified email, to use this features..</a>
                            @else
                            <a href="{{ route('dsbox') }}" class="btn btn--blue-white">@lang('message.bsa')</a>
                            @endif
                            @else 
                                <a href="{{ route('dsbox') }}" class="BtnMustVerifiedEmails btn btn--blue-white">let's get started to @lang('message.bsa')..</a>
                            @endisset
                        </div>
                    </li> 
                </ul>
            </div>
        </div>
        <div>
            &nbsp;
        </div>
        <div class="col-md-12 text-center">
            <h2 class="mb-sm word-rotator-title">
                @lang('message.we')
                <!--<strong>
                    <span class="word-rotate" data-plugin-options='{"delay": 3500, "animDelay": 400}'>
                        <span class="word-rotate-items">
                            <span>excited</span>
                            <span>happy</span>
                        </span>
                    </span>
                </strong>-->
                <strong class="inverted">
                    <span class="word-rotate active" data-plugin-options="{&quot;delay&quot;: 2000, &quot;animDelay&quot;: 300}">
                        <span class="word-rotate-items" style="width: 147px; top: 0px;">
                            <span>@lang('message.packs')</span>
                        <span>@lang('message.packs')</span></span>
                    </span>
                </strong>
                @lang('message.notjust')
                <strong class="inverted">
                    <span class="word-rotate active" data-plugin-options="{&quot;delay&quot;: 2000, &quot;animDelay&quot;: 300}">
                        <span class="word-rotate-items" style="width: 53px; top: 0px;">
                            <span>@lang('message.boxs')</span>
                        <span>@lang('message.boxs')</span></span>
                    </span>
                </strong>
            </h2>
        </div>
   
        <div class="owl-carousel owl-theme owl-loaded owl-drag owl-carousel-init" data-plugin-options="{&quot;items&quot;: 5, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 3000}">
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1404px, 0px, 0px); transition: all 0.25s ease 0s; width: 4212px;"><div class="owl-item cloned" style="width: 234px;"><div>
                    <a href="#"> <img class="img-responsive" src="{{ asset('KOP/sarihusada.jpg') }}" alt=""> </a>
                </div></div><div class="owl-item cloned" style="width: 234px;"><div>
                    <a href="#"> <img class="img-responsive" src="{{ asset('KOP/vitapharm.jpg') }} " alt=""> </a>
                </div></div><div class="owl-item cloned" style="width: 234px;"><div>
                    <a href="#"> <img class="img-responsive" src="{{ asset('KOP/bdf.jpg') }}" alt=""> </a>
                </div></div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div>
        <section class="orders-container">
            <div class="tp-bgimg defaultimg" 
            style="background-color: rgba(23, 59, 150, 0); background-repeat: no-repeat;
             background-image: url(&quot;{{ asset('img/slides/ico-m-trg.svg') }}&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 20;"></div>
            <div class="order-list order-list-js">
                <div class="create-cta">
                    <a href="/customize/folding-carton" class="">
                        {{-- <picture><img alt="Packlane - Classic Carton" class="card-box__image"
                                src="https://assets.packlane.com/images/ico-m-carton.svg"></picture>
                        <h2 class="card-box__title">Product Box</h2>
                        <p class="card-box__lead">Perfect for beauty packaging, supplements, and chocolate.</p>
                        <button class="btn btn--gray">Start Designing</button> --}}
                    </a>
                    <a href="{{ route('dsbox') }}" class="card-box">
                        <picture><img alt="Custom Box" class="card-box__image"
                                src="{{ asset('img/slides/ico-m-trg.svg') }}"></picture>
                        <h2 class="card-box__title">@lang('message.customize_label')</h2>
                        <p class="card-box__lead">@lang('message.box__lead')</p>
                        {{-- <button class="btn btn btn--blue-white">Start Designing</button> --}}
                        <button class="btn btn--gray">@lang('message.starts_Label')</button>
                    </a>
                    <a href="/customize/shipping-box" class="">
                        {{-- <picture><img alt="Packlane - Shipping Box" class="card-box__image"
                                src="https://assets.packlane.com/images/ico-m-shipper.svg"></picture>
                        <h2 class="card-box__title">Shipping Box</h2>
                        <p class="card-box__lead">Perfect for shipping large or heavy items or protecting fragile
                            items.</p>
                        <button class="btn btn--gray">Start Designing</button> --}}
                    </a>
                </div>
            </div>
        </section>
    <br/>
    <div class="col-md-12 text-center">
    <h4 class="heading-primary lead tall">@lang('message.manycs')
            <strong>
                <font color="#ffd11a"><span>PT Krisanthium Offset Printing</span></font>
            </strong>. @Lang('message.few_of_them') :</h4>
    <div class="order-list order-list-js">
        <div class="row center">
            <div class="owl-carousel owl-theme" data-plugin-options='{"items": 5, "autoplay": true, "autoplayTimeout": 3000}'>
                <div>
                    <a href="{{ route('coolclients.id')}}"> <img class="img-responsive" src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/danone.jpg') }}" alt=""> </a>
                </div>
                <div>
                    <a href="{{ route('coolclients.id')}}"> <img class="img-responsive" src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/konimex.jpg') }}" alt=""> </a>
                </div>
                <div>
                    <a href="{{ route('coolclients.id')}}"> <img class="img-responsive" src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/kraft.jpg') }}" alt=""> </a>
                </div>
                <div>
                    <a href="{{ route('coolclients.id')}}"> <img class="img-responsive" src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/sarihusada.jpg') }}" alt=""> </a>
                </div>
                <div>
                    <a href="{{ route('coolclients.id')}}"> <img class="img-responsive" src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/vitapharm.jpg') }}" alt=""> </a>
                </div>
                <div>
                    <a href="{{ route('coolclients.id')}}"> <img class="img-responsive" src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/bdf.jpg') }}" alt=""> </a>
                </div>
                <div>
                    <a href="{{ route('coolclients.id')}}"> <img class="img-responsive" src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/dexa.jpg') }}" alt=""> </a>
                </div>
                <div>
                    <a href="{{ route('coolclients.id')}}"> <img class="img-responsive" src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/unilever.jpg') }}" alt=""> </a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
    <div class="container">
        <div class="row">
            <hr class="tall">
        </div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <div style="position:relative; left :29px;top:75px;">
        <ul class="team-list sort-destination" data-sort-id="team">
            <div class="landing-dashboard-news"></div>
        </ul>
    </div>
        <div class="row center">
            <h1 class="mb-sm word-rotator-title" id="latest-new" style="position:relative;top: -375px;">@lang('message.latest')
                <strong class="inverted">
                        <span class="word-rotate" data-plugin-options='{"delay": 2000, "animDelay": 300}'>
                            <span class="word-rotate-items">
                                <span>@lang('message.news')</span>
                            </span>
                        </span>
                    </strong>
            </h1><br>
        </div>
    </div>
            <p><b><h5 id="sl" align='center'><a href='{{ route('news.id') }}'>@lang('message.SeeAll') >></a></h5></b></p>
        <div id="review-container-js"></div>
        <div id="restock-container-js"></div>
    </div>
</main>
<div class="container flash-container">
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

<footer id="footer">
    <div class="container">
      <div style="height:222px;position: relative; left : -90px;">
        <div class="footer-ribbon">
          <span>Get in Touch</span>
        </div>
        <div class="col-md-12">
          <div class="contact-details">
            <h4>@lang('footer.ctus')</h4>
            <ul class="contact">
              <li><p><i class="fa fa-map-marker"></i> <strong>@lang('footer.address'):</strong> <span id="dshb_address_footer"></span></p></li>
              <li><p><i class="fa fa-phone"></i> <strong>@lang('footer.phone'):</strong> <span id="dshb_phone_footer"></p></li>
              <li><p><i class="fa fa-fax"></i> <strong>Fax:</strong> <span id="dshb_fax_footer"></p></li>
              <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:printing@krisanthium.com"> <span id="dshb_email_footer"></a></p></li>
              <li><p><i class="fa fa-external-link-square"></i> <strong>URL:</strong> <a href="{{ route('dashboard') }}"> <span id="dshb_url_footer"></a></p></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
     <div class="footer-copyright">
        <div class="container">
            <div class="row" style="position:relative;left: -90px;height: 80px">
                <div class="col-md-1">
                <a href="{{ route('dashboard') }}" class="logo">
                    <img alt="KOP" class="img-responsive" width="63px" height="73px" src="{{ asset('KOP/logoKOPf.jpg') }}">
                    </a>
                </div>
                <div class="col-md-7" style="position: relative; top:25px;right:-55px">
                    <p>© Copyright 2021 - 2022. All Rights Reserved.</p>
                </div>
                <div style="position:relative; top:-10px;">
                        <a href="https://www.instagram.com/krisanthiumoffsetprinting/" class="logo">
                            <img alt="IG KOP" class="img-responsive" style="position: relative;left:194px;" src="{{ asset('KOP/icon_instagram.png') }}" width="60px">	
                        </a>
                </div>
            </div>
        </div>
    </div>
  </footer>
@extends('livewire.handleNotifications')
<script src="{{ asset('packlane-assets/bundle-apps.js') }}"></script>
<script src=" {{ asset('js/packlane_web.box_designer.new-9c8634f1dd18c5697a9e7a0b61bcf81d.js')}}"></script>
<script src="https://assets.packlane.com/js/fontawesome-v5.3.1-2452a34a51228e5bc25358d61d69c676.js?vsn=d"></script>
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
</script>

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
                    
                    var newNotificationHtml = `<a class="nav-dropdown__link" href="#ok">event change in `+ data.dt+`</a>`;

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

        
    var isMobile = {
          Android: function() {
              return navigator.userAgent.match(/Android/i);
          },
          BlackBerry: function() {
              return navigator.userAgent.match(/BlackBerry/i);
          },
          iOS: function() {
              return navigator.userAgent.match(/iPhone|iPad|iPod/i);
          },
          Opera: function() {
              return navigator.userAgent.match(/Opera Mini/i);
          },
          Windows: function() {
              return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
          },
          any: function() {
              return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
          }
      };

        if( isMobile.any() ) {
          Swal.fire(
          'Information!',
          'Wait a minute, can\t work in mobile browser.',
          'info'
        )

        @auth
         @if(Auth::user()->accessable == "marketing")
            @else 
                var LHC_API = LHC_API||{};
                    LHC_API.args = {mode:'widget',lhc_base_url:'//krisanthium.livehelperchat.com/',wheight:450,wwidth:350,pheight:520,pwidth:500,leaveamessage:true,check_messages:false,lang:'idn/'};
                    (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.setAttribute('crossorigin','anonymous'); po.async = true;
                    var date = new Date();po.src = '//krisanthium.livehelperchat.com/design/defaulttheme/js/widgetv2/index.js?'+(""+date.getFullYear() + date.getMonth() + date.getDate());
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();

                @endif
        @endauth

        } 
            else {
         
            @auth
                @if(Auth::user()->accessable == "marketing")

                @else 
                var LHC_API = LHC_API||{};
                    LHC_API.args = {mode:'widget',lhc_base_url:'//krisanthium.livehelperchat.com/',wheight:450,wwidth:350,pheight:520,pwidth:500,leaveamessage:true,check_messages:false,lang:'idn/'};
                    (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.setAttribute('crossorigin','anonymous'); po.async = true;
                    var date = new Date();po.src = '//krisanthium.livehelperchat.com/design/defaulttheme/js/widgetv2/index.js?'+(""+date.getFullYear() + date.getMonth() + date.getDate());
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();

                @endif
            @endauth

        }

        function formatDate(date) {
            var formattedDate =
                date.getDate() + "." +
                (date.getMonth() + 1) + "." +
                date.getFullYear().toString().slice(2) + " " +
                date.getHours() + ":" +
                date.getMinutes();
        }

        function getMonthName(month){
            const d = new Date();
            d.setMonth(month-1);
                const monthName = d.toLocaleString("id", {month: "long"});

            return monthName;
        }

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

        RenderAPIAboutCompany().then(function(data){
            $('#dshb_address_footer').append(data.data.address)
            $('#dshb_phone_footer').append(data.data.phone)
            $('#dshb_fax_footer').append(data.data.Fax)
            $('#dshb_email_footer').append(data.data.Email)
            $('#dshb_url_footer').append(data.data.URL)
        });

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

        dashboardRenderAPINews().then(function(data){
            if(data.data.length !== 0){
                var d = 0;
                data.data.forEach((item, index) => {
                    let date = new Date(item.posted_at);
                    let currentDate = new Date();
                    var formattedDateCurrent =
                    currentDate.getDate() + " " +
                    (getMonthName(currentDate.getMonth() + 1)) + " " +
                    currentDate.getFullYear().toString()
                    formattedDateCurrent.replace(/(?<!\d)(?=\d(\D|$))/g, '0');
                        d++;
                            $('.landing-dashboard-news').append(' <li class="col-md-4 col-sm-6 col-xs-6 isotope-item leadership">'
                                +'<span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg" style="max-width:94%">'
                                    +'<span class="thumb-info-wrapper">'
                                        +'<a href="#">'
                                            +'<img src="'+item.content+'" style="height:269px;">'
                                            +'<span class="thumb-info-title">'
                                                +'<span class="thumb-info-inner">'+item.title+'</span>'
                                                    +'<span class="thumb-info-type">'+formattedDateCurrent+'</span>'
                                            +'</span>'
                                        +'</a>'
                                +'</span>'
                                    +'<span class="thumb-info-caption">'
                                        +'<span class="thumb-info-caption-text"><font size="2">'
                                            +'<p class="MsoNormal" align="justify" style="margin-left:0.0000pt;mso-para-margin-left:0.0000gd;text-indent:39.9500pt;mso-char-indent-count:3.3300;text-align:justify;text-justify:inter-ideograph;">'
                                        +'<font face="Arial"><span style="font-size: 12pt;">'+TextTrnct(item.detail_content, 30)+'&nbsp;&nbsp;<a style="cursor:pointer" onclick="DetailNews('+item.id+')"><b>[Read More]</b></a></span></font>'
                                +'</p></font></span></span></span>'
                            +'</li>')
                        }
                    );
                } else {
                        $('.landing-dashboard-news').append('<li class="col-md-4 col-sm-6 col-xs-12 isotope-item leadership text-center">'
                                +'<span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">'
                                +'<span class="thumb-info-caption">'
                                    +'<br><b>Belum ada berita terkini..</b><p></p>'
                                +'</span>'
                        +'</span>'
                    +'</li>')
                    $('#latest-new').css('display','none');
                    $('#sl').css('display','none');
                }
            }
        );

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

        async function dashboardRenderAPINews() {

            let data = {
                    set_limit: 3,
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
        
    </script>
    </body>
</html>