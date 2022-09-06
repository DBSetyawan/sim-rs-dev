
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/png"
        href="{{ asset('KOP/logoKOPfooter.PNG') }}">
    <title>Customize your Mailer Box | Packlane</title>

    <link crossorigin="" href="{{ asset('packlane-assets/app-bundle.css') }}" rel="stylesheet"></link>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link crossorigin="" href="https://assets.packlane.com/css/typeset-fca72dec31bf9cbb494d5444c99e29a7.css?vsn=d" rel="stylesheet"></link>
    <link crossorigin="" crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet"></link>
    <link href="https://packlane.com/customize/mailer-box" rel="canonical">
    <meta content="Easily print beautiful custom mailer boxes at Packlane. Order custom mailer boxes online and enjoy low minimums, affordable prices, and fast turnarounds." name="description">

    {{-- <link rel="stylesheet" href="{{ asset('css/btstrapv-4.css')}}"> --}}
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
    <link rel="stylesheet" href="{{ asset('packlane-assets/flag-icons-main/css/flag-icons.css') }} ">
    <link rel="stylesheet" href="{{ asset('packlane-assets/flag-icons-main/css/flag-icons.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="{{ asset('js/modernnize.js')}}"></script>


    <!-- OpenGraph -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@packlane"/>
    <meta name="yandex-verification" content="35fa519272a729b3" />

<meta content="https://packlane.com/customize/mailer-box" name="og:canonical"><meta content="Easily print beautiful custom mailer boxes at Packlane. Order custom mailer boxes online and enjoy low minimums, affordable prices, and fast turnarounds." name="og:description"><meta content="https://assets.packlane.com/2iWsI9TJikdNY00FzpZ3d2DCoqR8VORCupow7lZAy9w/fn:og-image-mailer-9cd8327abf7e5338905b2cac47de163f/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL29nLWltYWdlLW1haWxlci05Y2Q4MzI3YWJmN2U1MzM4OTA1YjJjYWM0N2RlMTYzZi5qcGc.jpg" name="og:image"><meta content="Custom Mailer Boxes from Packlane" name="og:title">
    <!-- End of OpenGraph -->

    <meta name="msapplication-config" content="none"/>

    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->

      <script>
        var _rollbarConfig = {
            accessToken: "347d464a09814dacba55655a73e0f776",
            captureUncaught: true,
            captureUnhandledRejections: false,
            payload: {
                environment: "production"
            }
        };
      </script>
<script src="https://assets.packlane.com/js/rollbar-b19496f4dbce499c340474896c66a2ff.js?vsn=d"></script>
<script id="packlane-globals" src="{{ asset('js/store-init.js') }}"></script>
  </head>
<body data-controller="boxdesigner" style="position: sticky;top: 0px; height:100px;padding-bottom:0px;padding-top:0px;" data-action="new" class="boxdesigner" id="new" data-csrf="OiQPH0s_OQV9JSlYfxwvACs7HTleEjQ7KMzg3oc_OBO3L1KEArHloJNo">
  <header class="header " id="main-header-js" style="position: sticky;top: 0px; height:100px;padding-bottom:0px;padding-top:0px;">
      <div class="nav-container" style="position: sticky;top: 0px; height:100px;padding-bottom:0px;padding-top:0px;">
        <div class="logo-container">
              <a class="header-logo" href="{{ route('dashboard') }}">
                  <picture><img alt="Packlane" src="{{ asset('KOP/LogotypeKOP-01.jpg') }}"></picture>
              </a>
          </div>

          <div class="nav-bar__item nav-bar__item--menu-toggle">
              <picture><img alt="Menu" id="hamburger-js" src="https://assets.packlane.com/images/hamburger.svg">
              </picture>
          </div>

          <nav id="nav-bar-js" class="nav-bar" style="position: sticky;top: 0;background: rgb(255, 255, 255);">
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
                <a class="nav-bar__item nav-bar__item--link " href="{{ route('coolclients.id') }}" id="design-box-link-js"> @lang('navbar.coolclient') </a>
                {{-- <a class="nav-bar__item nav-bar__item--link " href="{{ route('news.id') }}" id="design-box-link-js">News</a> --}}
                {{-- <a class="nav-bar__item nav-bar__item--link " href="{{ route('shiplane') }}">Shiplane</a>
                <a class="nav-bar__item nav-bar__item--link " href="{{ route('inspirations') }}">Inspiration</a>
                <a class="nav-bar__item nav-bar__item--link " href="{{ route('customers') }}">Customers</a> --}}
                <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js ">
                    <a class="nav-bar__item nav-bar__item--link ">
                      @lang('navbar.about')
                        <span data-rotate="down"
                            class="nav-bar__dropdown-chevron rotate pcon-chevron-down rotate-down"></span>
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
                @endauth
                @guest
                  <a class="nav-bar__item nav-bar__item--link " href="{{ route('auth_user.id') }}">@lang('auth.signin')</a>
                  <a class="nav-bar__item nav-bar__item--link  nav-bar__item--signup-link" href="{{ route('rgstr.id') }}">@lang('auth.signup')</a>
                @endguest
                
                {{-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  @foreach (Config::get('languages') as $lang => $language)
                      @if ($lang != App::getLocale())
                              <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">
                              <span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                      @endif
                  @endforeach
                  </div>
          </li> --}}
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
  </header> 

  <style>
    .FAQ { 
        display : block;
        vertical-align: top; 
        height:auto !important; 
    }
    
    .list {
        display:none; 
        height:auto;
        margin:0;
        float: left;
    }
    .show {
        display: none; 
    }
    .hide:target + .show {
        display: inline; 
    }
    .hide:target {
        display: none; 
    }
    .hide:target ~ .list {
        display:inline; 
    }
    
    /*style the (+) and (-) */
    .hide, .show {
      width: 30px;
      height: 30px;
      border-radius: 30px;
      font-size: 20px;
      color: #fff;
      text-shadow: 0 1px 0 #666;
      text-align: center;
      text-decoration: none;
      box-shadow: 1px 1px 2px #000;
      background: #837c19;
      opacity: .95;
      margin-right: 0;
      float: left;
      margin-bottom: 25px;
    }
    
    .hide:hover, .show:hover {
      color: rgb(157, 181, 52);
      text-shadow: 0 0 1px #666;
      text-decoration: none;
      box-shadow: 0 0 4px #222 inset;
      opacity: 1;
      margin-bottom: 25px;
    }
    
    .btnSave:hover {
      color: #eee;
      text-shadow: 0 0 1px #666;
      text-decoration: none;
      box-shadow: 0 0 4px #222 inset;
      opacity: 1;
      margin-bottom: 25px;
    }
    
    .list p{
        height:auto;
        margin:0;
    }
    .wrapper {
          display: grid;
          grid-gap: 4px;
          grid-template-columns: minmax(167px, 1fr) 167px 167px;
          background-color: #fff;
          color: #444;
        }
    
      </style>
    
       {{-- r2 --}}
       <style>
        /* source: http://www.ehow.com/how_12214447_make-collapsing-lists-java.html */
        .FAQf { 
            display : block;
            vertical-align: top; 
            height:auto !important; 
        }
        .listb {
            display:none;   
            height:auto;
            margin:0;
            float: left;
        }
        .showb {
            display: none; 
        }
        .hideb:target + .showb {
            display: inline; 
        }
        .hideb:target {
            display: none; 
        }
        .hideb:target ~ .listb {
            display:inline; 
        }
        
        /*style the (+) and (-) */
        .hideb, .showb {
          width: 30px;
          height: 30px;
          border-radius: 30px;
          font-size: 20px;
          color: #fff;
          text-shadow: 0 1px 0 #666;
          text-align: center;
          text-decoration: none;
          box-shadow: 1px 1px 2px #000;
          background: #837c19;
          opacity: .95;
          margin-right: 0;
          float: left;
          margin-bottom: 25px;
        }
        
        .hideb:hover, .showb:hover {
          color: #eee;
          text-shadow: 0 0 1px #666;
          text-decoration: none;
          box-shadow: 0 0 4px #222 inset;
          opacity: 1;
          margin-bottom: 25px;
        }
        
        .listb p{
            height:auto;
            margin:0;
        }
          </style>
    
    <style>
      .boxCz {
        font-family: "basis-grotesque-regular-pro", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: 600;
        font-size: 12px;
        color: #8189a7;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 2px;
        padding: 3px;
        height: 80px;
        width: 80px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #f9f9f9;
        cursor: pointer;
        touch-action: manipulation;
        right:84px;
        top:253px;
        position: relative;
    
      }
      .boxCz:hover {
        background-color: #e6f9f5;
        color: #D3C630;
        outline: none;
        box-shadow: 3px 0 0 0 #9be8d8 inset;
      }
      
      /* source: http://www.ehow.com/how_12214447_make-collapsing-lists-java.html */
      .FAQf3 { 
          display : block;
          vertical-align: top; 
          height:auto !important; 
      }
      .listbr3 {
          display:none;   
          height:auto;
          margin:0;
          float: left;
      }
      .showbr3 {
          display: none; 
      }
      .hidebr3:target + .showbr3 {
          display: inline; 
      }
      .hidebr3:target {
          display: none; 
      }
      .hidebr3:target ~ .listbr3 {
          display:inline; 
      }
      
      /*style the (+) and (-) */
      .hidebr3, .showbr3 {
        width: 30px;
        height: 30px;
        border-radius: 30px;
        font-size: 20px;
        color: #fff;
        text-shadow: 0 1px 0 #666;
        text-align: center;
        text-decoration: none;
        box-shadow: 1px 1px 2px #000;
        background: #837c19;
        opacity: .95;
        margin-right: 0;
        float: left;
        margin-bottom: 25px;
      }
      
      .hidebr3:hover, .showbr3:hover {
        color: #eee;
        text-shadow: 0 0 1px #666;
        text-decoration: none;
        box-shadow: 0 0 4px #222 inset;
        opacity: 1;
        margin-bottom: 25px;
      }
      
      .listbr3 p{
          height:auto;
          margin:0;
      }
        </style>
    
         <style>
        /* source: http://www.ehow.com/how_12214447_make-collapsing-lists-java.html */
        .FAQf4 { 
            display : block;
            vertical-align: top; 
            height:auto !important; 
        }
        .listbr4 {
            display:none;   
            height:auto;
            margin:0;
            float: left;
        }
        .showbr4 {
            display: none; 
        }
        .hidebr4:target + .showbr4 {
            display: inline; 
        }
        .hidebr4:target {
            display: none; 
        }
        .hidebr4:target ~ .listbr4 {
            display:inline; 
        }
        
        /*style the (+) and (-) */
        .hidebr4, .showbr4 {
          width: 30px;
          height: 30px;
          border-radius: 30px;
          font-size: 20px;
          color: #fff;
          text-shadow: 0 1px 0 #666;
          text-align: center;
          text-decoration: none;
          box-shadow: 1px 1px 2px #000;
          background: #837c19;
          opacity: .95;
          margin-right: 0;
          float: left;
          margin-bottom: 25px;
        }
        
        .hidebr4:hover, .showbr4:hover {
          color: #eee;
          text-shadow: 0 0 1px #666;
          text-decoration: none;
          box-shadow: 0 0 4px #222 inset;
          opacity: 1;
          margin-bottom: 25px;
        }
        
        .listbr4 p{
            height:auto;
            margin:0;
        }
          </style>

    <main>
      <div class="row">
        @inject('assets', 'App\Models\Assetsuser')
        @php
          $rdetail = $assets->findOrFail($compUIDs);
        @endphp
          <div style="color: #292f44;font-size: 13px;top:96px;right:-156px;margin-left:33px">
            <a href="{{ route('tb.orders.customers') }}"><i class="fas fa-arrow-circle-left" style='height: 3%; width: 3%; object-fit: contain'></i></a> 
            <div class="logo-container">
              <div style="margin-bottom: 25px;"></div>
            </div>
            <header>
              <h1>  <span class="material-icons">
                inventory
              </span> Order #{{ $rdetail->assets_uid }}</h1>
              <address>
                  <p>Component&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="position: relative;">:</span> {{ $rdetail->component }}<br />
                    Material Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="position: relative;">:</span> {{ $rdetail->material }}<br/>
                    Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="position: relative;right:-2px">:</span> {{ $rdetail->size }} 'INC <br/>
                    Paper Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="position: relative;">:</span> {{ $rdetail->jenis_kertas }}<br />
                    Paper type (GSM)&nbsp;<span style="position: relative;">:</span> {{ number_format($rdetail->jenis_kertas_gsm,0,".",",") }}</p>
              </address>
            </header>
          </div>
        <div class="w-50 mx-auto">
          <div id="component_1"></div>
          <div id="component_2"></div>
          <div id="component_3"></div>
          <div id="component_4"></div>
        </div>
      </div>
<h1 class="py-2 text-xl text-center"><div id="orgv"></div></h1>
<script src="https://assets.packlane.com/js/fabric.min-9e88ca1a868c7cb8e24d4f59ac9fd84f.js?vsn=d"></script>
<link crossorigin="" href="https://assets.packlane.com/css/DatePicker-a60ceb80e6927a490b32dc2855f95410.css?vsn=d" rel="stylesheet"></link>
<link crossorigin="" href="https://assets.packlane.com/css/Calendar-470cf1473a418738a1b4a7221f586129.css?vsn=d" rel="stylesheet"></link></main>
<script src="https://assets.packlane.com/js/packlane_web.box_designer.new-9c8634f1dd18c5697a9e7a0b61bcf81d.js?vsn=d"></script><link crossorigin="" href="https://assets.packlane.com/css/packlane_web.box_designer.new-2a99a0cb9694807ecc5f4ecc2c24be07.css?vsn=d" rel="stylesheet"></link>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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
  <span class="tool-_disclaimer" style="color: #8189a7;font-size: 13px;
  font-weight: normal;line-height: 3;
  position:relative;top:-225px;right:-928px;
  padding: 4px;width: 20%;"></span>
<div class="logo-container">
  <div style="margin-bottom: 589px;"></div>
</div>
 
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="footer-ribbon">
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
            <li><p><i class="fa fa-external-link-square"></i> <strong>URL:</strong> <a href="{{ route('dashboard') }}">www.krisanthium.com</a></p></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
   <div class="footer-copyright">
      <div class="container">
          <div class="row" style="height: 82px">
              <div class="col-md-1">
              <a href="{{ route('dashboard') }}" class="logo">
                      <!--<img alt="Porto Website Template" class="img-responsive" src="img/logo-footer.png">-->
                  <img alt="KOP" class="img-responsive" width="63px" height="73px" src="{{ asset('KOP/logoKOPf.jpg') }}">
                  </a>
              </div>
              <div class="col-md-7" style="position: relative; top:-67px;right:-75px">
                  <p>© Copyright 2022. All Rights Reserved.</p>
              </div>
              <div style="position:relative; top:-120px; right:-812px;">
                      <a href="https://www.instagram.com/krisanthiumoffsetprinting/" class="logo">
      <img alt="IG KOP" class="img-responsive" src="{{ asset('KOP/icon_instagram.png') }}" width="60px">	
                      </a>
              </div>
          </div>
      </div>
  </div>
</footer>

@extends('livewire.handleNotifications')
<script src="{{ asset('js/jquery-v3.min.js') }}"></script>
<script src="{{ asset('js/vendor/pusher-v6.min.js')}}"></script>
<script>

        $("#orgv").append('<div class="c-dialog__panel__body">'
            +'<div data-v-5f634bbf="" class="c-empty-box c-empty-box--shipping u-pad-bottom--4 u-height-1">'
              +'<div data-v-5f634bbf="" class="c-empty-box__inner">'
                +'<div data-v-5f634bbf="" class="c-empty-box__illustration"></div>'
                +'<p data-v-5f634bbf="" class="c-empty-box__title"></p>'
                +'<p data-v-5f634bbf="" class="c-empty-box__subtitle"></p>'
              +'</div>'
            +'</div>'
          +'</div>');

          async function getComponent(d) {
                
                let data = {
                              c:d
                          }

                  const Workoders = "{{ route('getterComponent') }}";
                          
                      const settings = {
                                  method: 'POST',
                                  headers: {
                                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                      'Content-Type': 'application/json;charset=utf-8'
                                      },
                                  body: JSON.stringify(data)
                          }
                  try {
                          
                          const fetchResponse = await fetch(`${Workoders}`, settings);
                          const data = await fetchResponse.json();
                          return data;
                      } catch (error) {

                      return error
                  }    
        }

        async function getComponentFileID(d) {
                
                let data = {
                              linkid:d
                          }

                  const Workoders = "{{ route('getterComponentBrowserFileID') }}";
                          
                      const settings = {
                                  method: 'POST',
                                  headers: {
                                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                      'Content-Type': 'application/json;charset=utf-8'
                                      },
                                  body: JSON.stringify(data)
                          }
                  try {
                          
                          const fetchResponse = await fetch(`${Workoders}`, settings);
                          const data = await fetchResponse.json();
                          return data;
                      } catch (error) {

                      return error
                  }    
        }

        function ReacallDesign(arr) {
          const result = []

          arr.forEach((v, index) => {
                result.push(v.value)
                // arr.slice(1, -1);
                // console.log('d:', arr)
              });

          return result
        }

        function ReacallFiles(arr) {
          const result = []
            arr.forEach((v, index) => {
              result.push(getFileName(v.alias))
            });
          return result
        }

        function ReacallFilesForDownload(arr) {
          const result = []
            arr.forEach((v, index) => {
              result.push(getFileName(v.filepath))
            });
          return result
        }

        function download(linkid) {
              var element = document.createElement('a');
              element.setAttribute('target', '_blank');
              element.setAttribute('href', linkid);
              element.style.display = 'none';
              document.body.appendChild(element);
              element.click();
              document.body.removeChild(element);
            }

        function ReacallFilesForDownloadID(arr) {
          const result = []
            arr.forEach((v, index) => {
              result.push(getFileName(v.id))
            });
          return result
        }

        function getFileName (str) {

          if(str){
              if (str.length > 22) {
              return str.substr(0, 11) + '...' + str.substr(-11)
            }
            return str
          } else {
            return 'empty..';
          }
        
        }

        function downloadfile(alink) {
            axios({
              url: alink,
              method: 'GET',
              responseType: 'arraybuffer', 
            }).then(response => {
              const url = window.URL.createObjectURL(new Blob([response.data]));
              const link = document.createElement('a');
              
              link.href = url;
              link.setAttribute('download', 'custom_filename.pdf'); 
              document.body.appendChild(link);
              
              link.click();
            });

        }

    getComponent("{{ $compUIDs }}").then(function(data){

      console.log(data)

      if(data.dataComponent.design_plan == data.dataComponent.design_plan ){
         $("#orgv").hide()
          let fileArr;
          let IndexD;
          let fileDownload;
          let DEach = data.data;
          let Design = ReacallDesign(data.dataComponent.design)
          let Filename = ReacallFiles(getFileName(data.data))
          let FilenameDownload = ReacallFilesForDownload(data.data)
          let fileDownloadwithIndex = ReacallFilesForDownloadID(data.data)

              if(Filename || FilenameDownload){
                  fileDownload = FilenameDownload.join("<br/>");
                  IndexD = fileDownloadwithIndex.join("<br/>")
                  fileArr = Filename.join("<br/>");
              } else {
                fileDownload = ""
                IndexD = ""
              }
              
              let Links;
              if(Design){
                Links = Design.splice(-1);
              } else {
                Links = Design.splice(-1);
              }

              // let Df = Design.slice(-1).join('<br/>')
              let components;

              if(data.dataComponent.component){
                components = data.dataComponent.component;
              } else {
                components = data.dataComponent.definition;
              }
              
            $("#component_1").append('<div id="mjrs"'
             +'style="color: #8189a7;font-size: 13px;top:96px;right:-156px;margin-left:33px;line-width:3px;width: 95%;box-sizing:border-box;">'
              +'<fieldset class="majorpoints">'
              +'<legend class="majorpointslegend">&nbsp;'+components+' :</legend>'
                  +'<div class="hiders" style="display:none;" >'
                  +'</div>'
              // +'<label for="dforLabelComponent" id="dforLabelComponent" class="text-center">The file name will appear below:</label>'
                +'<pre id="filen" style="display:none;"></pre>'
                  +'<div class="FAQ">'
                    +'<a href="#hide1" class="hide" id="hide1">+</a>'
                    +'<a href="#show1" class="show" id="show1">-</a>'
                    +'<p>&nbsp;</p>'
                    +'<div class="list">'
                      +'<fieldset class="majorpoints-design">'
                      +'<legend class="majorpointslegend">DESIGN :</legend>'
                        +'<div class="hidersd" style="display:none;" >'
                        +'</div>'
                          +'<span class="ds" style="color: #8189a7;font-size: 18px;font-weight: normal;line-height: 1.75;">'
                              +'<div id="filepreview" style="position:relative;top:-360px;right:86px;" class="displaynone" >' 
                              +'</div>'
                            +'<div id="sample_cetakan" style="">'
                            +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Design :</label>'
                            +'<div class="col-md-6 col-sm-6 col-xs-5">'
                            +'<div class="wrapper">'
                            +'<div class="box a">'
                            + '<div style="position:absoulte;width:20px">'+Design+'</div>'
                            + '<div style="position:absoulte;width:29px">'+Links+'</div>'
                            + '&nbsp;'
                            + '<br />'
                            + '<br />'
                            +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Document :</label>'
                            + '<br />'
                            +'<span id="linksdwn"></span>'
                            +'</div>'
                            +'<div>'
                            +'</div>'
                            +'<label class="form-control">'
                                +' <div class="box b">'
                                    +'</div>'
                                    +'</div>'
                                    +'&nbsp;'
                                +'<input type="file" id="file" name="file[]" style="display:none" multiple="">'
                                +'<div class="alert alert-danger mt-2 d-none text-danger" id="err_file"></div>'
                                +'</div>'
                                +'<br/>'
                +'</div>'
                +'<div style="padding:87px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>'
                +'</span>'
                +'</div>'
    +'<div class="list">'
        +'<fieldset class="majorpoints-material">'
            +'<legend class="majorpointslegend">MATERIAL :</legend>'
            +'<div class="hidersmat" style="display:none;" >'
                +'</div>'
                +'<div id="sample_cetakan" style="">'
                    +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Sample Cetakan</label>'
                    +'<div class="col-md-6 col-sm-6 col-xs-5">'
                        +'<div class="form-control">'
                            +' <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Component</label>'
                            +'<div class="product-quantitys">'
                +' <input style="    border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="CMP1" value="'+data.dataComponent.material+'" name="CMP1" placeholder="Input your component type">'
                +'</div>'
                +' <div>&nbsp;</div>'
                +'      <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Paper type</label>'
                +'<div class="product-quantitys">'
                +'<input style="border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="Czjenis_kertas"  value="'+data.dataComponent.jenis_kertas+'" name="Czjenis_kertas" placeholder="Input your paper type">'
                +'&nbsp;'  
                +'</div>'
                +' <div>&nbsp;</div>'
                +' <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">GSM</label>'
                +' <div class="product-quantitys">'
                +'<input style="    border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;" id="Czjenis_kertas_gsm" name="Czjenis_kertas_gsm"  value="'+data.dataComponent.jenis_kertas_gsm+'" placeholder="Input your paper type GSM" type="number" min="1" max="8">'
                +'<span class="tooltip">fill in GSM according to your needs.</span></div>'
                +'</div>'
                +'<div class="wrapper">'
                +'<div class="box a">'
                +'</div>'
                +'<label class="form-control">'
                +'</label>'
                +'</div>'
                +'&nbsp;'
                +'<input type="file" id="file" name="file[]" style="display:none" multiple="">'
                +'  <div class="alert alert-danger mt-2 d-none text-danger" id="err_file"></div>'
                +'</div>'
                +'</div>'
                +' </span>'
                +'</div>'
                +' <div class="list">'
                +' <fieldset class="majorpoints-material">'
                    +'<legend class="majorpointslegend">SIZE :</legend>'
                    +' <div class="hidersmat" style="display:none;">'
                        +'  </div>'
        +' <div id="sample_cetakan" style="">'
            +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Sample Cetakan</label>'
            +'<div class="col-md-6 col-sm-6 col-xs-5">'
            +'<div class="form-control">'
                    +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Size</label>'
                    +'<div class="product-quantitys">'
                +'<span type="text" id="sizes" style="background: #fcfcfc;color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;">'+ data.dataComponent.size +'</span>'
                // +'<input style="border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="Csize" name="Csize"  value="'+data.dataComponent.size+'" placeholder="Input your custom size"></div>'
                +'<div>&nbsp;</div>'
                +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Material</label>'
                +'<div class="product-quantitys">'
                    +'<input style="border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="Czmaterial" name="Czmaterial"  value="'+data.dataComponent.material+'" placeholder="Input your material type"></div>'
                    +'<div>&nbsp;</div>' 
                    +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Quantity</label>'
                    +'<div class="product-quantitys">'                                                                                                                                                                                                                                                                                                                                                                                      
                  +'<input style="border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;" id="Czquantity" name="Czquantity" placeholder="Input your paper type GSM" type="number"  value="'+data.dataComponent.qty+'" min="1" max="8">'
                  +'<span class="tooltip">fill in Quantity according to your needs.</span></div></div>'                                                                                                                                                                                                                                                                   
                  +'<div class="wrapper">'
                  +'<label class="form-control">'
                    +'</label></div>'
                    +'<input type="file" id="file" name="file[]" style="display:none" multiple="">'
                    +'<div class="alert alert-danger mt-2 d-none text-danger" id="err_file"></div>'
                    +'</div>'
                    +'</div>'
                    +'</span>'
                  +'</div>'
                +'</div>'
              +'</div>'
            )

          DEach.forEach((v, index) => {
            $("#linksdwn").append('<span id="linksdwn'+index+'" style="cursor:pointer;">'+ getFileName(v.filepath) +'</span><br />');
            // $("#linksdwn").append('<span id="linksdwn'+index+'" style="cursor:pointer;position:relative;top:-96px;">'+ getFileName(v.filepath) +'</span></div>');
              $('body').on('click','#linksdwn > #linksdwn'+index, function(e){
                e.preventDefault();
                  getComponentFileID(v.filepath).then(function(data){
                    return download(data.dfile.filepath)
                });
              });

          });

        }



    });
    
    async function CancelOrders(token) {

           let data = {
                  token:token
              }

        const Workoders = "{{ route('orders.order_customers.to.mkt') }}";
              
          const settings = {
                      method: 'POST',
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                          'Content-Type': 'application/json;charset=utf-8'
                          },
                      body: JSON.stringify(data)
              }

        try {
              
              const fetchResponse = await fetch(`${Workoders}`, settings);
              const data = await fetchResponse.json();
              return data;
          } catch (error) {

          return error
        }    

    }

    async function ReOrdersMails(token) {

        let data = {
                    token:token
              }

        const Workoders = "{{ route('orders.order_customers.to.mkt') }}";
              
          const settings = {
                      method: 'POST',
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                          'Content-Type': 'application/json;charset=utf-8'
                          },
                      body: JSON.stringify(data)
              }

        try {
              
              const fetchResponse = await fetch(`${Workoders}`, settings);
              const data = await fetchResponse.json();
              return data;
          } catch (error) {

          return error
        }    
    }

    $('body').on('click','#reorders',function(e){
      e.preventDefault();

      var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

       ReOrdersMails(CSRF_TOKEN).then(function(data){
              Swal.fire({
              title: 'Are you sure?',
              text: "Do you want to Re order transaction ?",
              icon: 'success',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes!',
              cancelButtonText: 'No'
              }).then((result) => {
                  if (result.isConfirmed) {
                      
                    Swal.fire(
                      'Information!',
                      'Message it\'s process, thanks.. ',
                      'success'
                      )

                      } 
                        else {

                      Swal.fire(
                          'Information!',
                          'Message can\'t process, sorry.. ',
                          'error'
                        )
                    }
                }
            );
      });
    });


    $('body').on('click','#cancels',function(e){
      e.preventDefault();

      var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
      
      CancelOrders(CSRF_TOKEN).then(function(data){

              Swal.fire({
              title: 'Are you sure?',
              text: "Do you want to Cancel order transaction ?",
              icon: 'success',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes!',
              cancelButtonText: 'No'
              }).then((result) => {
                  if (result.isConfirmed) {
                      
                    Swal.fire(
                      'Information!',
                      'Message it\'s process, thanks.. ',
                      'success'
                      )

                  } 
                    else {

                      Swal.fire(
                          'Information!',
                          'Message can\'t process, sorry.. ',
                          'error'
                        )
                    }
                }
            );
        }
      );
    }
  );

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

</script>

  <script src="https://assets.packlane.com/js/rollbar_jquery-72f698777185e49f06b908a36d1bc75f.js?vsn=d"></script>
  <script src="{{ asset('packlane-assets/vendor-bundle.js')}}"></script>
  <script src="{{ asset('packlane-assets/bundle-app.js')}}"></script>
  <script src="{{ asset('packlane-assets/jquery.noty.min.js') }}"></script>
  <script src="https://assets.packlane.com/js/fontawesome-v5.3.1-2452a34a51228e5bc25358d61d69c676.js?vsn=d"></script>
  <link crossorigin="" href="https://assets.packlane.com/css/magnify-a21187f3e8be5fcef4baf8e6b38ae35a.css?vsn=d" rel="stylesheet"></link>
  <script src="https://assets.packlane.com/js/jquery.magnify-f3c9f5a15e0ab5ca4e60488525cd7a8d.js?vsn=d"></script>
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
