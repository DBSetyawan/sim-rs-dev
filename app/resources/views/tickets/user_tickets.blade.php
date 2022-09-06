
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
    <link crossorigin="" href="{{ asset('packlane-assets/login-app-bundle.css') }}" rel="stylesheet"></link>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link crossorigin="" href="https://assets.packlane.com/css/typeset-fca72dec31bf9cbb494d5444c99e29a7.css?vsn=d" rel="stylesheet"></link>
    <link crossorigin="" crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet"></link>
    <link href="https://packlane.com/customize/mailer-box" rel="canonical">
    <meta content="Easily print beautiful custom mailer boxes at Packlane. Order custom mailer boxes online and enjoy low minimums, affordable prices, and fast turnarounds." name="description">
    <link rel="stylesheet" href="{{ asset('css/fntawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('css/theme.css')}}">
    <link rel="stylesheet" href="{{ asset('css/simple-line.icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific.css')}}">
    <link rel="stylesheet" href="{{ asset('css/th-elements.css')}}">
    <link rel="stylesheet" href="{{ asset('css/th-blogs.css')}}">
    <link rel="stylesheet" href="{{ asset('css/th-shp.css')}}">
    <link rel="stylesheet" href="{{ asset('css/theme.animation.css')}}">
    <link rel="stylesheet" href="{{ asset('css/settings.css')}}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/layers.css')}}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/navigations.css')}}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/components.css')}}" media="screen">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="{{ asset('packlane-assets/flag-icons-main/css/flag-icons.css') }} ">
    <link rel="stylesheet" href="{{ asset('packlane-assets/flag-icons-main/css/flag-icons.min.css') }} ">
    <script src="{{ asset('js/modernnize.js')}}"></script>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@packlane"/>
    <meta name="yandex-verification" content="35fa519272a729b3" />
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
      @layer utilities {
        .content-auto {
          content-visibility: auto;
        }
      }
    </style>
<meta content="https://packlane.com/customize/mailer-box" name="og:canonical"><meta content="Easily print beautiful custom mailer boxes at Packlane. Order custom mailer boxes online and enjoy low minimums, affordable prices, and fast turnarounds." name="og:description"><meta content="https://assets.packlane.com/2iWsI9TJikdNY00FzpZ3d2DCoqR8VORCupow7lZAy9w/fn:og-image-mailer-9cd8327abf7e5338905b2cac47de163f/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL29nLWltYWdlLW1haWxlci05Y2Q4MzI3YWJmN2U1MzM4OTA1YjJjYWM0N2RlMTYzZi5qcGc.jpg" name="og:image"><meta content="Custom Mailer Boxes from Packlane" name="og:title">
    <meta name="msapplication-config" content="none"/>
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
      <div class="nav-container" style="position: sticky;top: 0px;height: 47px;padding-bottom:0px;padding-top:0px;">
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
                    <a class="nav-bar__item nav-bar__item--link " href="{{ route('auth_user.id') }}">Sign In</a>
                    <a class="nav-bar__item nav-bar__item--link  nav-bar__item--signup-link" href="{{ route('rgstr.id') }}">Sign up</a>
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
  </header> 
    <main>
  <div class="px-4 lg:px-16 xl:px-32">
    <div class="py-10 space-y-8">
    <a href="{{ route('dsbox') }}"><i class="fas fa-arrow-circle-left" style='height: 3%; width: 3%; object-fit: contain'></i></a> 
     <div class="container mx-auto">
      <div class="col-md-1">
          {{-- <img alt="KOP" class="img-responsive" style='height: 8%; width: 8%; object-fit: contain' src="{{ asset('img/box.png') }}"> --}}
      </div>
    <div class="py-4"> 
        <div class="flex justify-center">
            <d  iv class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8"> 
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                      <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <a role="button" href="#">
                                Category
                            </a>
                        </th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          <a role="button" href="#">
                          Title
                          </a>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          <a role="button" href="#">
                          Status
                          </a>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          <a role="button" href="#">
                              Last updated
                          </a>
                      </th>
                    </tr>
                </thead>
                <tbody>
                  @forelse ($tickets as $rx => $customers)
                        <tr>
                            <td class="px-5 py-5 w-1/3 bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-center text-lg">
                                {{ $customers->category->name }}
                            </td>
                            <td class="px-5 py-5 w-5/6 bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-center text-lg">
                                <a href="{{ route('show.tickets', ['ticket_id' => $customers->ticket_id ]) }}">
                                    #{{ $customers->ticket_id }} - {{ $customers->title }}
                                </a>
                            </td>
                            <td class="px-5 py-5 w-1/6 bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-center text-lg">
                                @if ($customers->status === 'Open')
                                    <span class="text-lg inline-block py-1 px-2.5 leading-none whitespace-nowrap align-baseline font-bold bg-lime-600 text-white rounded-full">{{ $customers->status }}</span>
                                @else
                                    <span class="text-lg inline-block py-1 px-2.5 leading-none whitespace-nowrap align-baseline font-bold bg-rose-600 text-white rounded-full">{{ $customers->status }}</span>
                                @endif
                            </td>
                            <td class="px-5 py-5 bg-white text-sm w-1/2 @if (!$loop->last) border-gray-200 border-b @endif text-right text-lg">
                                @php
                                    $date = \Carbon\Carbon::parse($customers->updated_at)->locale(Config::get('languages')[App::getLocale()]['flag-icon']);
                                    $date->settings(['formatFunction' => 'translatedFormat']);
                                @endphp
                                {{ $date->format('g:i a d/m/y') }}
                                </td>
                        </tr>
                              @empty
                                  <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                                      <div class="flex">
                                          <div class="py-1">
                                              <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                          <div>
                                              <p class="font-bold text-xl">Warning</p>
                                              @if (Auth::user()->accessable == "marketing")
                                                  <p class="text-lg">There are currently no tickets.</p>
                                              @else 
                                              <p></p>
                                                  <p class="text-lg">There are currently no tickets.</p>
                                              @endif
                                          </div>
                                      </div>
                                  </div>
                              @endforelse
                            </tbody>
                          </table>
                          {{ $tickets->render() }}
                      </div>
                  </div>
              </div>
          </div>
          {{-- end dev --}}
        </div>
<script src="https://assets.packlane.com/js/fabric.min-9e88ca1a868c7cb8e24d4f59ac9fd84f.js?vsn=d"></script>
<link crossorigin="" href="https://assets.packlane.com/css/DatePicker-a60ceb80e6927a490b32dc2855f95410.css?vsn=d" rel="stylesheet"></link>
<link crossorigin="" href="https://assets.packlane.com/css/Calendar-470cf1473a418738a1b4a7221f586129.css?vsn=d" rel="stylesheet"></link></main>
<script src="https://assets.packlane.com/js/packlane_web.box_designer.new-9c8634f1dd18c5697a9e7a0b61bcf81d.js?vsn=d"></script><link crossorigin="" href="https://assets.packlane.com/css/packlane_web.box_designer.new-2a99a0cb9694807ecc5f4ecc2c24be07.css?vsn=d" rel="stylesheet"></link>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<span class="tool-_disclaimer" style="color: #8189a7;font-size: 13px;
  font-weight: normal;line-height: 3;
  position:relative;top:-225px;right:-928px;
  padding: 4px;width: 20%;"></span>
@php
  $currentURL = \Request::segment(3);
  $currentURLs = \Request::segment(1);
@endphp

@if($currentURLs == "my_tickets")
<div style="margin-bottom: 5400px;">
</div>
  
@endif

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
            <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> <span id="usr_tickets_address_footer"></p></li>
            <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> <span id="usr_tickets_phone_footer"></p></li>
            <li><p><i class="fa fa-fax"></i> <strong>Fax:</strong> <span id="usr_tickets_fax_footer"></p></li>
            <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:printing@krisanthium.com"> <span id="usr_tickets_email_footer"></a></p></li>
            <li><p><i class="fa fa-external-link-square"></i> <strong>URL:</strong> <a href="{{ route('dashboard') }}"> <span id="usr_tickets_url_footer"></a></p></li>
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
@livewireScripts
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

Livewire.on("triggerFinish", (id, order_to) => {

  Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to Finish Your Job order ? ",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!',
        cancelButtonText: 'No'
        }).then((result) => {
        
            if (result.isConfirmed) {
                Livewire.emit("FinishedOrders", id, order_to);
                Swal.fire(
                    'Information!',
                    'Job order is done.. by '+ "{{ Auth::user()->name }}",
                    'warning'
                )

                let link = '{!! route("tb.orders.customers") !!}';
                let redirect = link;
                    setTimeout(function(){ 
                            window.location.href = redirect;
                }, 5000);

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


Livewire.on("triggerReordersRestored", (id, order_to) => {
  Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to Restore order ? ",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!',
        cancelButtonText: 'No'
        }).then((result) => {
        
            if (result.isConfirmed) {
                
                Livewire.emit("RestoreOrder", id, order_to);

                Swal.fire(
                    'Information!',
                    'Booking try orders.. ',
                    'warning'
                )

                let link = '{!! route("tb.orders.customers") !!}';
                let redirect = link;
                    setTimeout(function(){ 
                            window.location.href = redirect;
                }, 5000);

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

Livewire.on("triggerCancel", (id, order_to) => {
  Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to Cancel order ? ",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Cancel',
        cancelButtonText: 'Delete permanently'
        }).then((result) => {
        
            if (result.isConfirmed) {
                
                Livewire.emit("delete", id, order_to);

                Swal.fire(
                    'Information!',
                    'booking canceled.. but it doesn\'t delete the data.',
                    'warning'
                )

                let link = '{!! route("tb.orders.customers") !!}';
                let redirect = link;
                  setTimeout(function(){ 
                          window.location.href = redirect;
                }, 5000);

              } 
                else {

                Livewire.emit("deletepermanent", id, order_to);

                Swal.fire(
                  'Information!',
                  'booking delete permanently..',
                  'error'
                )
            }
        }
    );

});

Livewire.on("triggerReorders", (design_plan, order_to) => {
    Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to Sending mail to team Sales marketing ? ",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!',
        cancelButtonText: 'No'
        }).then((result) => {
        
            if (result.isConfirmed) {
                
                Livewire.emit("reOrders", design_plan, order_to);

                  Swal.fire(
                      'Information!',
                      'E-mail has been sent to our marketing group, we will contact you shortly.. ',
                      'success'
                  )

                  let link = '{!! route("tb.orders.customers") !!}';
                  let redirect = link;
                      setTimeout(function(){ 
                              window.location.href = redirect;
                  }, 5000);

              } 
                else {

                  // Swal.fire(
                  //   'Information!',
                  //   'Message can\'t process, sorry.. ',
                  //   'error'
                  // )
            }
        }
    );

});

RenderAPIAboutCompany().then(function(data){
      $('#usr_tickets_address_footer').append(data.data.address)
      $('#usr_tickets_phone_footer').append(data.data.phone)
      $('#usr_tickets_fax_footer').append(data.data.Fax)
      $('#usr_tickets_email_footer').append(data.data.Email)
      $('#usr_tickets_url_footer').append(data.data.URL)
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

window.addEventListener("finished", (event) => {

    Swal.fire(
      'Information'
      `${event.detail.job}`,
      'warning'
    )

});

window.addEventListener("revert-orders", (event) => {

     Swal.fire(
        'Information!',
        'Order '+event.detail.order_status.assets_uid+' has been canceled.',
        'warning'
      )
    
});

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