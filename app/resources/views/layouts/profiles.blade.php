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

    <title>About PT. Krisanthium  Offset Printing | KOP</title>
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
     <link rel="stylesheet" href="{{ asset('css/index-css.css')}}">

     <!-- Theme Custom CSS -->
     {{-- <link rel="stylesheet" href="css/custom.css"> --}}
     <script src="https://cdn.tailwindcss.com"></script>
     <style type="text/tailwindcss">
       @layer utilities {
         .content-auto {
           content-visibility: auto;
         }
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
                          {{-- <a class="nav-dropdown__link" href="{{ route('packlane_plus')}}">Products and services </a>
                          <a class="nav-dropdown__link" href="{{ route('request_quote') }}">Volume discounts</a> --}}
                      </ul>
                  </li>
                  <a class="nav-bar__item nav-bar__item--link " href="{{ route('ourproduct.id') }}" id="design-box-link-js">Our Product</a>
                  {{-- <a class="nav-bar__item nav-bar__item--link " href="{{ route('news.id') }}" id="design-box-link-js">News</a> --}}
                  <a class="nav-bar__item nav-bar__item--link " href="{{ route('coolclients.id') }}" id="design-box-link-js">Cool Client</a>
                  {{-- <a class="nav-bar__item nav-bar__item--link " href="{{ route('shiplane') }}">Shiplane</a>
                  <a class="nav-bar__item nav-bar__item--link " href="{{ route('inspirations') }}">Inspiration</a>
                  <a class="nav-bar__item nav-bar__item--link " href="{{ route('customers') }}">Customers</a> --}}
                  <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js ">
                      <a class="nav-bar__item nav-bar__item--link ">
                          About
                          <span data-rotate="down" class="nav-bar__dropdown-chevron rotate pcon-chevron-down rotate-down"></span>
                      </a>
                      <ul class="nav-dropdown">
                          <a class="nav-dropdown__link" href="{{ route('company') }}">Company</a>
                          <a class="nav-dropdown__link" href="{{ route('news.id') }}">News</a>
                          {{-- <a class="nav-dropdown__link" href="{{ route('blogs') }}">Blog</a> --}}
                          <a class="nav-dropdown__link" href="{{ route('cvm.id') }}">Vision & Mission</a>
                          <a class="nav-dropdown__link" href="{{ route('ca_certificates.id') }}">Company Archivement & Certificates</a>
                          <a class="nav-dropdown__link" href="{{ route('partnership.id') }}">Partnership</a>
                          <a class="nav-dropdown__link" href="{{ route('ourteam.id') }}">Our Team</a>
                          <a class="nav-dropdown__link" href="{{ route('woy.id') }}">We Offer You</a>
                          <a class="nav-dropdown__link" href="{{ route('wbad.id') }}">We Build A Design</a>
                          {{-- <a class="nav-dropdown__link" href="{{ route('faq') }}">FAQ</a> --}}
                          <a class="nav-dropdown__link" href="{{ route('prf_scs.id') }}">Contact Us</a>
                          {{-- <a class="nav-dropdown__link" href="{{ route('contact_us.id') }}">Contact</a> --}}
                      </ul>
                  </li>
                  @auth
                    <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js ">
                        <a class="nav-bar__item nav-bar__item--link ">
                          My account
                          <span data-rotate="down" class="nav-bar__dropdown-chevron rotate pcon-chevron-down rotate-down"></span>
                        </a>
                        <ul class="nav-dropdown">
                        @if(Auth::user()->accessable == "marketing")                    
                            <a class="nav-dropdown__link" href="#"><i class="fas fa-user-circle"></i> @lang('message.usernames'), {{ Auth::user()->name }}</a>
                            <a class="nav-dropdown__link" href="{{ url('/') }}"><i class="fas fa-shopping-cart"></i> {{ __('History Transaction') }}</a>
                            @else  
                            <a class="nav-dropdown__link" href="#"><i class="fas fa-user-circle"></i> @lang('message.usernames'), {{ Auth::user()->name }}</a>
                            @if(Auth::user()->is_email_verified == 0)
                                    <a class="nav-dropdown__link" href="#authentication_required"><i class="fas fa-mail-bulk"></i> Verified Your Email</a>
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
                      <a class="nav-bar__item nav-bar__item--link " href="{{ route('auth_user.id') }}">Sign In</a>
                      <a class="nav-bar__item nav-bar__item--link  nav-bar__item--signup-link" href="{{ route('rgstr.id') }}">Sign up</a>
                      {{-- <li id="menu-item-944" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-944 et-show-dropdown et-hover"><a href="{{ route('auth_user.id') }}">Sign In</a></li> --}}
                  @endguest
    
                  <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js ">
                    <a class="nav-bar__item nav-bar__item--link ">
                      <span class="fi fi-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> 
                      {{ Config::get('languages')[App::getLocale()]['display'] }}
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
                  <li><p><i class="fa fa-external-link-square"></i> <strong>URL:</strong> <a href="{{ route('dashboard')}}">www.krisanthium.com</a></p></li>
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
                        <p>© Copyright 2022. All Rights Reserved.</p>
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

        window.Laravel = {!! json_encode([
            'csrfToken'=> csrf_token(),
            'user'=> [
                'authenticated' => auth()->check(),
                'id' => auth()->check() ? auth()->user()->id : null,
                'name' => auth()->check() ? auth()->user()->name : null, 
                ]
            ])
        !!};

        async function UpdateMasterSender(emarketing) {

                let data = {
                        email:emarketing,
                    }

                const Workoders = "{{ route('mst.updt.id') }}";
                    
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

    </script>
</body>
</html>
