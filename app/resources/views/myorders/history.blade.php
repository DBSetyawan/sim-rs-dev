
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
    {{-- <link rel="stylesheet" href="{{ asset('css/theme.css')}}"> --}}
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

  <body data-controller="boxdesigner"
    data-action="new" class="boxdesigner" id="new" data-csrf="OiQPH0s_OQV9JSlYfxwvACs7HTleEjQ7KMzg3oc_OBO3L1KEArHloJNo">
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
                    <picture><img alt="Menu" id="hamburger-close-js"
                            src="https://assets.packlane.com/images/hamburger-white.svg"></picture>
                </a>
                <a class="nav-bar__item nav-bar__item--link " href="{{ route('welcomesdesignabox') }}" id="design-box-link-js">Dashboard</a>
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
                        <span data-rotate="down"
                            class="nav-bar__dropdown-chevron rotate pcon-chevron-down rotate-down"></span>
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
                            <a class="nav-dropdown__link" href="{{ route('tb.orders.customers') }}">My Orders</a>
                            {{-- <a class="nav-dropdown__link" href="{{ route('chekcout.customers') }}">My Orders</a> --}}
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

  </header> 
    <main>
        {{-- <div id="component_1"></div>
        <div id="component_2"></div>
        <div id="component_3"></div>
        <div id="component_4"></div> --}}
  <h1 class="py-2 text-xl text-center"><div id="orgv"></div></h1>


  <div class="antialiased sans-serif bg-gray-200 h-screen">
	

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <style>
      [x-cloak] {
        display: none;
      }
  
      [type="checkbox"] {
        box-sizing: border-box;
        padding: 0;
      }
  
      .form-checkbox {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        -webkit-print-color-adjust: exact;
        color-adjust: exact;
        display: inline-block;
        vertical-align: middle;
        background-origin: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        flex-shrink: 0;
        color: currentColor;
        background-color: #fff;
        border-color: #e2e8f0;
        border-width: 1px;
        border-radius: 0.25rem;
        height: 1.2em;
          width: 1.2em;
      }
  
      .form-checkbox:checked {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
        border-color: transparent;
        background-color: currentColor;
        background-size: 100% 100%;
        background-position: center;
        background-repeat: no-repeat;
      }
    </style>
  
    <div class="container mx-auto py-6 px-4" x-data="datatables()" x-cloak>
      <h1 class="text-3xl py-4 border-b mb-10">Datatable</h1>
  
      <div x-show="selectedRows.length" class="bg-teal-200 fixed top-0 left-0 right-0 z-40 w-full shadow">
        <div class="container mx-auto px-4 py-4">
          <div class="flex md:items-center">
            <div class="mr-4 flex-shrink-0">
              <svg class="h-8 w-8 text-teal-600"  viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>
            </div>
            <div x-html="selectedRows.length + ' rows are selected'" class="text-teal-800 text-lg"></div>
          </div>
        </div>
      </div>
  
      <div class="mb-4 flex justify-between items-center">
        <div class="flex-1 pr-4">
          <div class="relative md:w-1/3">
            <input type="search"
              class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium"
              placeholder="Search...">
            <div class="absolute top-0 left-0 inline-flex items-center p-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                <circle cx="10" cy="10" r="7" />
                <line x1="21" y1="21" x2="15" y2="15" />
              </svg>
            </div>
          </div>
        </div>
        <div>
          <div class="shadow rounded-lg flex">
            <div class="relative">
              {{-- <button @click.prevent="open = !open"
                class="rounded-lg inline-flex items-center bg-white hover:text-blue-500 focus:outline-none focus:shadow-outline text-gray-500 font-semibold py-2 px-2 md:px-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:hidden" viewBox="0 0 24 24"
                  stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                  stroke-linejoin="round">
                  <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                  <path
                    d="M5.5 5h13a1 1 0 0 1 0.5 1.5L14 12L14 19L10 16L10 12L5 6.5a1 1 0 0 1 0.5 -1.5" />
                </svg>
                <span class="hidden md:block">Display</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" width="24" height="24"
                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                  stroke-linecap="round" stroke-linejoin="round">
                  <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                  <polyline points="6 9 12 15 18 9" />
                </svg>
              </button> --}}
  
              <div x-show="open" @click.away="open = false"
                class="z-40 absolute top-0 right-0 w-40 bg-white rounded-lg shadow-lg mt-12 -mr-1 block py-1 overflow-hidden">
                <template x-for="heading in headings">
                  <label
                    class="flex justify-start items-center text-truncate hover:bg-gray-100 px-4 py-2">
                    <div class="text-teal-600 mr-3">
                      <input type="checkbox" class="form-checkbox focus:outline-none focus:shadow-outline" checked @click="toggleColumn(heading.key)">
                    </div>
                    <div class="select-none text-gray-700" x-text="heading.value"></div>
                  </label>
                </template>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative"
        style="height: 405px;">
        <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
          <thead>
            <tr class="text-left">
              <th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
                <label
                  class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
                  <input type="checkbox" class="form-checkbox focus:outline-none focus:shadow-outline" @click="selectAllCheckbox($event);">
                </label>
              </th>
              <template x-for="heading in headings">
                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"
                  x-text="heading.value" :x-ref="heading.key" :class="{ [heading.key]: true }"></th>
              </template>
            </tr>
          </thead>
          <tbody>
            @inject('assets', 'App\Models\Assetsuser')
            @php
              $vdata = $assets->where('finished_status', '!=', 1)->where('order_to', '=', Auth::user()->id)->get();
              function __KOPMethodDuplicateArray($array, $key) {
                  $temp_array = array();
                  $i = 0;
                  $key_array = array();
                  foreach($array as $val) {
                    //cari bedasarkan index-nya
                      if (!in_array($val[$key], $key_array)) {
                        //intialize ke index dari set value yang teridentifikasi.
                          $key_array[$i] = $val[$key];
                          //simpan array value
                          $temp_array[$i] = $val;
                      }
                      $i++;
                  }
                return $temp_array;
              }
            @endphp
            @isset($vdata)
            @forelse(__KOPMethodDuplicateArray($vdata, 'created_at') as $key => $value)
              @php
                $namemtr = [];
                  for($i=0; $i < count([$value]); $i++) { 
                    $namemtr[] =  array_column($value->design[$i], 'value');
                  }
                  $flattened = collect($namemtr)->flatten();
              @endphp
            {{-- <template x-for="user in users" :key="user.userId"> --}}
              <tr>
                <td class="border-dashed border-t border-gray-200 px-3">
                  <label
                    class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
                    <input type="checkbox" class="form-checkbox rowCheckbox focus:outline-none focus:shadow-outline" :name="user.userId"
                        @click="getRowDetail($event, {{ $value->id }})">
                  </label>
                </td>
                <td class="border-dashed border-t border-gray-200">
                  <span class="text-gray-700 px-6 py-3 flex items-center">{{ $value->assets_uid }}</span>
                </td>
                <td class="border-dashed border-t border-gray-200">
                  <span class="text-gray-700 px-6 py-3 flex items-center">{{ $value->created_at }}</span>
                </td>
                <td class="border-dashed border-t border-gray-200">
                  {{-- <span class="text-gray-700 px-6 py-3 flex items-center">@isset($dcomponent) @foreach($dcomponent as $key => $cv) {{ $cv }} @endforeach @endisset</span> --}}
                </td>
                <td class="px-5 py-5 bg-white text-sm @if (!$loop->last) border-gray-200 border-b @endif text-right">
                  <div class="inline-block whitespace-no-wrap">
                      <a href="#das" id="reorders" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Re-Order</a>
                      <a href="#a" id="cancels" class="btn bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-2 rounded">Cancel</a>
                      <a href="{{ route('detailDataComponent') }}" id="details" class="btn bg-teal-500 hover:bg-red-700 text-white font-bold py-2 px-2 rounded">Detail</a>
                  </div>
              </td>
            </tr>
            {{-- </template> --}}
            @empty 
              <td></td>
              <td></td>
              <td class="border-dashed border-t border-gray-200">
                <span class="text-gray-700 px-6 py-3 flex items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Order your dream item, your transaction will appear here..</span>
              </td>
            @endforelse

            @endisset
          </tbody>
        </table>
      </div>
    </div>
  
    <script>
      function datatables() {
        return {
          headings: [
            {
              'key': 'assets_uid',
              'value': 'Transaction ID'
            },
            {
              'key': 'firstName',
              'value': 'Order date'
            },
            {
              'key': 'Total',
              'value': 'Total Component'
            },
            {
              'key': 'Action',
              'value': 'Actions'
            },
          ],
          // users: [{
          //   "userId": 1,
          //   "firstName": "Cort",
          //   "lastName": "Tosh",
          //   "emailAddress": "ctosh0@github.com",
          //   "gender": "Male",
          //   "phoneNumber": "327-626-5542"
          // }, {
          //   "userId": 2,
          //   "firstName": "Brianne",
          //   "lastName": "Dzeniskevich",
          //   "emailAddress": "bdzeniskevich1@hostgator.com",
          //   "gender": "Female",
          //   "phoneNumber": "144-190-8956"
          // }, {
          //   "userId": 3,
          //   "firstName": "Isadore",
          //   "lastName": "Botler",
          //   "emailAddress": "ibotler2@gmpg.org",
          //   "gender": "Male",
          //   "phoneNumber": "350-937-0792"
          // }, {
          //   "userId": 4,
          //   "firstName": "Janaya",
          //   "lastName": "Klosges",
          //   "emailAddress": "jklosges3@amazon.de",
          //   "gender": "Female",
          //   "phoneNumber": "502-438-7799"
          // }, {
          //   "userId": 5,
          //   "firstName": "Freddi",
          //   "lastName": "Di Claudio",
          //   "emailAddress": "fdiclaudio4@phoca.cz",
          //   "gender": "Female",
          //   "phoneNumber": "265-448-9627"
          // }, {
          //   "userId": 6,
          //   "firstName": "Oliy",
          //   "lastName": "Mairs",
          //   "emailAddress": "omairs5@fda.gov",
          //   "gender": "Female",
          //   "phoneNumber": "221-516-2295"
          // }, {
          //   "userId": 7,
          //   "firstName": "Tabb",
          //   "lastName": "Wiseman",
          //   "emailAddress": "twiseman6@friendfeed.com",
          //   "gender": "Male",
          //   "phoneNumber": "171-817-5020"
          // }, {
          //   "userId": 8,
          //   "firstName": "Joela",
          //   "lastName": "Betteriss",
          //   "emailAddress": "jbetteriss7@msu.edu",
          //   "gender": "Female",
          //   "phoneNumber": "481-100-9345"
          // }, {
          //   "userId": 9,
          //   "firstName": "Alistair",
          //   "lastName": "Vasyagin",
          //   "emailAddress": "avasyagin8@gnu.org",
          //   "gender": "Male",
          //   "phoneNumber": "520-669-8364"
          // }, {
          //   "userId": 10,
          //   "firstName": "Nealon",
          //   "lastName": "Ratray",
          //   "emailAddress": "nratray9@typepad.com",
          //   "gender": "Male",
          //   "phoneNumber": "993-654-9793"
          // }, {
          //   "userId": 11,
          //   "firstName": "Annissa",
          //   "lastName": "Kissick",
          //   "emailAddress": "akissicka@deliciousdays.com",
          //   "gender": "Female",
          //   "phoneNumber": "283-425-2705"
          // }, {
          //   "userId": 12,
          //   "firstName": "Nissie",
          //   "lastName": "Sidnell",
          //   "emailAddress": "nsidnellb@freewebs.com",
          //   "gender": "Female",
          //   "phoneNumber": "754-391-3116"
          // }, {
          //   "userId": 13,
          //   "firstName": "Madalena",
          //   "lastName": "Fouch",
          //   "emailAddress": "mfouchc@mozilla.org",
          //   "gender": "Female",
          //   "phoneNumber": "584-300-9004"
          // }, {
          //   "userId": 14,
          //   "firstName": "Rozina",
          //   "lastName": "Atkins",
          //   "emailAddress": "ratkinsd@japanpost.jp",
          //   "gender": "Female",
          //   "phoneNumber": "792-856-0845"
          // }, {
          //   "userId": 15,
          //   "firstName": "Lorelle",
          //   "lastName": "Sandcroft",
          //   "emailAddress": "lsandcrofte@google.nl",
          //   "gender": "Female",
          //   "phoneNumber": "882-911-7241"
          // }],
          selectedRows: [],
  
          open: false,
          
          toggleColumn(key) {
            // Note: All td must have the same class name as the headings key! 
            let columns = document.querySelectorAll('.' + key);
  
            if (this.$refs[key].classList.contains('hidden') && this.$refs[key].classList.contains(key)) {
              columns.forEach(column => {
                column.classList.remove('hidden');
              });
            } else {
              columns.forEach(column => {
                column.classList.add('hidden');
              });
            }
          },
  
          getRowDetail($event, id) {
            let rows = this.selectedRows;
  
            if (rows.includes(id)) {
              let index = rows.indexOf(id);
              rows.splice(index, 1);
            } else {
              rows.push(id);
            }
          },
  
          selectAllCheckbox($event) {
            let columns = document.querySelectorAll('.rowCheckbox');
  
            this.selectedRows = [];
  
            if ($event.target.checked == true) {
              columns.forEach(column => {
                column.checked = true
                this.selectedRows.push(parseInt(column.name))
              });
            } else {
              columns.forEach(column => {
                column.checked = false
              });
              this.selectedRows = [];
            }
          }
        }
      }
    </script>
  </div>

  <script src="https://assets.packlane.com/js/fabric.min-9e88ca1a868c7cb8e24d4f59ac9fd84f.js?vsn=d"></script>
<link crossorigin="" href="https://assets.packlane.com/css/DatePicker-a60ceb80e6927a490b32dc2855f95410.css?vsn=d" rel="stylesheet"></link>
<link crossorigin="" href="https://assets.packlane.com/css/Calendar-470cf1473a418738a1b4a7221f586129.css?vsn=d" rel="stylesheet"></link></main>
<script src="https://assets.packlane.com/js/packlane_web.box_designer.new-9c8634f1dd18c5697a9e7a0b61bcf81d.js?vsn=d"></script><link crossorigin="" href="https://assets.packlane.com/css/packlane_web.box_designer.new-2a99a0cb9694807ecc5f4ecc2c24be07.css?vsn=d" rel="stylesheet"></link>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
<script src="{{ asset('js/jquery-v3.min.js') }}"></script>


<script>

    // tailwind.config = {
    //   theme: {
    //     extend: {
    //       colors: {
    //         clifford: '#da373d',
    //       }
    //     }
    //   }
    // }
  
        $("#orgv").append('<div class="c-dialog__panel__body">'
            +'<div data-v-5f634bbf="" class="c-empty-box c-empty-box--shipping u-pad-bottom--4 u-height-1">'
              +'<div data-v-5f634bbf="" class="c-empty-box__inner">'
                +'<div data-v-5f634bbf="" class="c-empty-box__illustration"></div>'
                +'<p data-v-5f634bbf="" class="c-empty-box__title">No transaction history</p>'
                +'<p data-v-5f634bbf="" class="c-empty-box__subtitle">Order your dream item, your transaction will appear here..</p>'
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

        function ReacallDesign(arr) {
          const result = []

          arr.forEach((v, index) => {
                result.push(v.value)
                // arr.slice(1, -1);

                console.log('d:', arr)
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

        function getFileName (str) {
          if (str.length > 22) {
            return str.substr(0, 11) + '...' + str.substr(-11)
          }
          return str
        }

    getComponent(null).then(function(data){

        if(data.dataComponent1.design_plan == "cp1" ){
         $("#orgv").hide()
         let fileArr;
          let Design = ReacallDesign(data.dataComponent1.design)
           let Filename = ReacallFiles(getFileName(data.dataE))
           if(Filename){
                  fileArr =  Filename.join("<br/>");
                } else {
                  fileArr = ""
                }
            $("#component_1").append('<div id="mjrs" style="color: #8189a7;font-size: 13px;top:96px;right:-156px;line-width:3px;width: 100%;box-sizing:border-box;">'
              +'<fieldset class="majorpoints">'
              +'<legend class="majorpointslegend">&nbsp;'+data.dataComponent1.component+' :</legend>'
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
                            + Design.join("<br/>")
                            + '&nbsp;'
                            + '<br />'
                            + '<br />'
                            +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Dokumen :</label>'
                            + '<br />'
                            + fileArr
                            // +'<button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;background: #797979;-webkit-border-radius: 23px;-moz-border-radius: 23px;border-radius: 23px;-webkit-#98f01d;font-size: 17px;font-family: Georgia, Serif;text-decoration: none;vertical-align: middle;padding:1px 17px" onclick="document.getElementById("file").click()" id="uploads">Upload</button>'
                            +'</div>'
                            +'<label class="form-control">'
                                // +'<button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;background: #797979;-webkit-border-radius: 23px;-moz-border-radius: 23px;border-radius: 23px;font-size: 17px;font-family: Georgia, Serif;text-decoration: none;vertical-align: middle;padding:1px 17px" id="resetsCM">reset</button>  </label>'
                                +' <div class="box b">'
                                    // +'<button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;background: #797979;-webkit-border-radius: 23px;-moz-border-radius: 23px;border-radius: 23px;font-size: 17px;font-family: Georgia, Serif;text-decoration: none;vertical-align: middle;padding:1px 17px" id="textlink">Link file</button>'
                                    +'</div>'
                                    +'</div>'
                                    +'&nbsp;'
                                +'<input type="file" id="file" name="file[]" style="display:none" multiple="">'
                                +'<div class="alert alert-danger mt-2 d-none text-danger" id="err_file"></div>'
                                +'</div>'
                                +'<br/>'
                    //             +' <form id="forms">'
                    //                 +' <div class="wrapper">'
                    //                     +' <div class="box a">'
                    //                         +'  <div>'
                    //                             +'   <div>'
                    //                                 +'   <input class="source" style="width: 15px;height: 12px;float: left;" type="checkbox" name="checkbox[]" value="emboss" />'
                    //                                 +'<label for="wb" style="  float: left;padding-left: 3px;position: relative;top:-11px" id="somelabel">Emboss</label>'
                    //                                 +'</div>'
                    //                                 +' <br/>'
                    //                                 +' <input class="source" style="width: 15px;height: 12px;position: relative;right:82px;" type="checkbox" name="checkbox[]" value="hotstamp" />'
                    //                                 +'<label for="wb" style="position: relative;right:-17px;top:-24px" id="somelabel">Hotstamp</label>'
                    //                                 +' <input class="source" style="width: 15px;top:-17px;height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="uv varnish" />'
                    //   +' <label for="wb" style="position: relative;right:-20px;top:-38px" id="somelabel">UV varnish</label>'
                    //   +' <input class="source" style="width: 15px;top:-38px;height:12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="waterbase" />'
                    //   +'<label for="wb" style="position: relative;right:-20px;top:-59px" id="somelabel">waterbase</label>'
                    //   +'<input class="source" style="width: 15px;top:-52px;height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="deboss" />'
                    //   +'<label for="wb" style="position: relative;right:-20px;top:-75px" id="somelabel">Deboss</label>'
                    //   +' </div>'
                    //   +'</div>'
                    //   +'<div class="box b">'
                    //     +'<textarea id="w3review" name="w3review" rows="8" cols="35" style="background-color: rgb(232, 232, 232);color:rgb(31, 31, 28);">example link : https://youlink.upload.in</textarea>'
                    //     +'</div>'
                    //     +'<div class="box c">Area send file unknown</div>'
                    //     +'</div>'
                    //     // +'<a href="#hide1" id="btnsaVe" style="width: 56px;height: 35px;border-radius: 30px;font-size: 12px;padding:8px;color: #fff;text-shadow: 0 1px 0 #666;text-align: center;text-decoration: none;box-shadow: 1px 1px 2px #000;background: #168f61;opacity: .95;margin-right: 0;float: left;margin-bottom: 25px;" class="btnSave">Save</a>'
                    //     // +'<a href="#hide1" id="btnupDate" style="width: 56px;height: 35px;border-radius: 30px;font-size: 12px;padding:8px;color: #fff;text-shadow: 0 1px 0 #666;text-align: center;text-decoration: none;box-shadow: 1px 1px 2px #000;background: #168f61;opacity: .95;margin-right: 0;float: left;margin-bottom: 25px;" class="btnupDate1">Update</a>'
                    //     +'<input type="text" style="display: none" id="stateIdOne">'
                    //     +'</form>'
                // +'<span id="OrdersOne" style="width: 87px;cursor: pointer;height: 35px;border-radius: 30px;font-size: 12px;padding:8px;color: #fff;text-shadow: 0 1px 0 #666;text-align: center;text-decoration: none;box-shadow: 1px 1px 2px #000;background: #b1ac15;opacity: .95;margin-right: -20;float: left;margin-bottom: 25px;" class="Orders1">Order Now</span>'
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
                +' <input style="    border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="CMP1" value="'+data.dataComponent1.material+'" name="CMP1" placeholder="Input your component type">'
                +'</div>'
                +' <div>&nbsp;</div>'
                +'      <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Paper type</label>'
                +'<div class="product-quantitys">'
                +'<input style="border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="Czjenis_kertas"  value="'+data.dataComponent1.jenis_kertas+'" name="Czjenis_kertas" placeholder="Input your paper type">'
                +'&nbsp;'  
                +'</div>'
                +' <div>&nbsp;</div>'
                +' <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">GSM</label>'
                +' <div class="product-quantitys">'
                +'<input style="    border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;" id="Czjenis_kertas_gsm" name="Czjenis_kertas_gsm"  value="'+data.dataComponent1.jenis_kertas_gsm+'" placeholder="Input your paper type GSM" type="number" min="1" max="8">'
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
                +'<input style="    border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="Csize" name="Csize"  value="'+data.dataComponent1.size+'" placeholder="Input your custom size"></div>'
                +'<div>&nbsp;</div>'
                +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Material</label>'
                +'<div class="product-quantitys">'
                    +'<input style="border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="Czmaterial" name="Czmaterial"  value="'+data.dataComponent1.material+'" placeholder="Input your material type"></div>'
                    +'<div>&nbsp;</div>' 
                    +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Quantity</label>'
                    +'<div class="product-quantitys">'                                                                                                                                                                                                                                                                                                                                                                                      
                  +'<input style="border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;" id="Czquantity" name="Czquantity" placeholder="Input your paper type GSM" type="number"  value="'+data.dataComponent1.jenis_kertas_gsm+'" min="1" max="8">'
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
        }

        if(data.dataComponent2.design_plan == "cp2" ){
         $("#orgv").hide()
         let fileArr;
          let Design = ReacallDesign(data.dataComponent2.design)
           let Filename = ReacallFiles(getFileName(data.dataE2))

              if(Filename){
                  fileArr =  Filename.join("<br/>");
                } else {
                  fileArr = ""
                }

            $("#component_1").append('<div id="mjrs2" style="color: #8189a7;font-size: 13px;top:96px;right:-156px;line-width:3px;width: 100%;box-sizing:border-box;">'
              +'<fieldset class="majorpoints2">'
              +'<legend class="majorpointslegend">&nbsp;'+data.dataComponent2.component+' :</legend>'
                  +'<div class="hidersr2" style="display:none;" >'
                  +'</div>'
              // +'<label for="dforLabelComponent" id="dforLabelComponent2" class="text-center">The file name will appear below:</label>'
                +'<pre id="filen2" style="display:none;"></pre>'
                  +'<div class="FAQf">'
                    +'<a href="#hide1s" class="hideb" id="hide1s">+</a>'
                    +'<a href="#show1" class="showb" id="show1">-</a>'
                    +'<p>&nbsp;</p>'
                    +'<div class="listb">'
                      +'<fieldset class="majorpoints-design-2">'
                      +'<legend class="majorpointslegend">DESIGN :</legend>'
                        +'<div class="hidersd-2" style="display:none;" >'
                        +'</div>'
                          +'<span class="dsb" style="color: #8189a7;font-size: 18px;font-weight: normal;line-height: 1.75;">'
                              +'<div id="filepreview" style="position:relative;top:-360px;right:86px;" class="displaynone" >' 
                              +'</div>'
                            +'<div id="sample_cetakan2" style="">'
                            +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Design :</label>'
                            +'<div class="col-md-6 col-sm-6 col-xs-5">'
                            +'<div class="wrapper">'
                            +'<div class="box a">'
                            + Design.join("<br/>")
                            + '&nbsp;'
                            + '<br />'
                            + '<br />'
                            +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Dokumen :</label>'
                            + '<br />'
                            + fileArr
                            // +'<button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;background: #797979;-webkit-border-radius: 23px;-moz-border-radius: 23px;border-radius: 23px;-webkit-#98f01d;font-size: 17px;font-family: Georgia, Serif;text-decoration: none;vertical-align: middle;padding:1px 17px" onclick="document.getElementById("file").click()" id="uploads">Upload</button>'
                            +'</div>'
                            +'<label class="form-control">'
                                // +'<button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;background: #797979;-webkit-border-radius: 23px;-moz-border-radius: 23px;border-radius: 23px;font-size: 17px;font-family: Georgia, Serif;text-decoration: none;vertical-align: middle;padding:1px 17px" id="resetsCM">reset</button>  </label>'
                                +' <div class="box b">'
                                    // +'<button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;background: #797979;-webkit-border-radius: 23px;-moz-border-radius: 23px;border-radius: 23px;font-size: 17px;font-family: Georgia, Serif;text-decoration: none;vertical-align: middle;padding:1px 17px" id="textlink">Link file</button>'
                                    +'</div>'
                                    +'</div>'
                                    +'&nbsp;'
                                +'<input type="file" id="file" name="file[]" style="display:none" multiple="">'
                                +'<div class="alert alert-danger mt-2 d-none text-danger" id="err_file"></div>'
                                +'</div>'
                                +'<br/>'
                    //             +' <form id="forms">'
                    //                 +' <div class="wrapper">'
                    //                     +' <div class="box a">'
                    //                         +'  <div>'
                    //                             +'   <div>'
                    //                                 +'   <input class="source" style="width: 15px;height: 12px;float: left;" type="checkbox" name="checkbox[]" value="emboss" />'
                    //                                 +'<label for="wb" style="  float: left;padding-left: 3px;position: relative;top:-11px" id="somelabel">Emboss</label>'
                    //                                 +'</div>'
                    //                                 +' <br/>'
                    //                                 +' <input class="source" style="width: 15px;height: 12px;position: relative;right:82px;" type="checkbox" name="checkbox[]" value="hotstamp" />'
                    //                                 +'<label for="wb" style="position: relative;right:-17px;top:-24px" id="somelabel">Hotstamp</label>'
                    //                                 +' <input class="source" style="width: 15px;top:-17px;height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="uv varnish" />'
                    //   +' <label for="wb" style="position: relative;right:-20px;top:-38px" id="somelabel">UV varnish</label>'
                    //   +' <input class="source" style="width: 15px;top:-38px;height:12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="waterbase" />'
                    //   +'<label for="wb" style="position: relative;right:-20px;top:-59px" id="somelabel">waterbase</label>'
                    //   +'<input class="source" style="width: 15px;top:-52px;height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="deboss" />'
                    //   +'<label for="wb" style="position: relative;right:-20px;top:-75px" id="somelabel">Deboss</label>'
                    //   +' </div>'
                    //   +'</div>'
                    //   +'<div class="box b">'
                    //     +'<textarea id="w3review" name="w3review" rows="8" cols="35" style="background-color: rgb(232, 232, 232);color:rgb(31, 31, 28);">example link : https://youlink.upload.in</textarea>'
                    //     +'</div>'
                    //     +'<div class="box c">Area send file unknown</div>'
                    //     +'</div>'
                    //     // +'<a href="#hide1" id="btnsaVe" style="width: 56px;height: 35px;border-radius: 30px;font-size: 12px;padding:8px;color: #fff;text-shadow: 0 1px 0 #666;text-align: center;text-decoration: none;box-shadow: 1px 1px 2px #000;background: #168f61;opacity: .95;margin-right: 0;float: left;margin-bottom: 25px;" class="btnSave">Save</a>'
                    //     // +'<a href="#hide1" id="btnupDate" style="width: 56px;height: 35px;border-radius: 30px;font-size: 12px;padding:8px;color: #fff;text-shadow: 0 1px 0 #666;text-align: center;text-decoration: none;box-shadow: 1px 1px 2px #000;background: #168f61;opacity: .95;margin-right: 0;float: left;margin-bottom: 25px;" class="btnupDate1">Update</a>'
                    //     +'<input type="text" style="display: none" id="stateIdOne">'
                    //     +'</form>'
                // +'<span id="OrdersOne" style="width: 87px;cursor: pointer;height: 35px;border-radius: 30px;font-size: 12px;padding:8px;color: #fff;text-shadow: 0 1px 0 #666;text-align: center;text-decoration: none;box-shadow: 1px 1px 2px #000;background: #b1ac15;opacity: .95;margin-right: -20;float: left;margin-bottom: 25px;" class="Orders1">Order Now</span>'
                +'</div>'
                +'<div style="padding:87px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>'
                +'</span>'
                +'</div>'
    +'<div class="listb">'
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
                +' <input style="    border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="CMP1" value="'+data.dataComponent2.material+'" name="CMP1" placeholder="Input your component type">'
                +'</div>'
                +' <div>&nbsp;</div>'
                +'      <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Paper type</label>'
                +'<div class="product-quantitys">'
                +'<input style="border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="Czjenis_kertas"  value="'+data.dataComponent2.jenis_kertas+'" name="Czjenis_kertas" placeholder="Input your paper type">'
                +'&nbsp;'  
                +'</div>'
                +' <div>&nbsp;</div>'
                +' <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">GSM</label>'
                +' <div class="product-quantitys">'
                +'<input style="    border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;" id="Czjenis_kertas_gsm" name="Czjenis_kertas_gsm"  value="'+data.dataComponent2.jenis_kertas_gsm+'" placeholder="Input your paper type GSM" type="number" min="1" max="8">'
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
                +' <div class="listb">'
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
                +'<input style="    border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="Csize" name="Csize"  value="'+data.dataComponent2.size+'" placeholder="Input your custom size"></div>'
                +'<div>&nbsp;</div>'
                +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Material</label>'
                +'<div class="product-quantitys">'
                    +'<input style="border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="Czmaterial" name="Czmaterial"  value="'+data.dataComponent2.material+'" placeholder="Input your material type"></div>'
                    +'<div>&nbsp;</div>' 
                    +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Quantity</label>'
                    +'<div class="product-quantitys">'                                                                                                                                                                                                                                                                                                                                                                                      
                +'<input style="border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;" id="Czquantity" name="Czquantity" placeholder="Input your paper type GSM" type="number"  value="'+data.dataComponent2.jenis_kertas_gsm+'" min="1" max="8">'
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
        }

        if(data.dataComponent3.design_plan == "cp3" ){
         $("#orgv").hide()
         let fileArr
          let Design = ReacallDesign(data.dataComponent3.design)
           let Filename = ReacallFiles(getFileName(data.dataE3))
           if(Filename){
                  fileArr =  Filename.join("<br/>");
                } else {
                  fileArr = ""
                }
            $("#component_3").append('<div id="mjrsr3" style="color: #8189a7;font-size: 13px;top:96px;right:-156px;line-width:3px;width: 100%;box-sizing:border-box;">'
              +'<fieldset class="majorpointsr3">'
              +'<legend class="majorpointslegend">&nbsp;'+data.dataComponent3.component+' :</legend>'
                  +'<div class="hidersr3" style="display:none;" >'
                  +'</div>'
              // +'<label for="dforLabelComponent" id="dforLabelComponent3" class="text-center">The file name will appear below:</label>'
                +'<pre id="filen3" style="display:none;"></pre>'
                  +'<div class="FAQf">'
                    +'<a href="#hide1vb3" class="hidebr3" id="hide1vb3">+</a>'
                    +'<a href="#show1vb3" class="showbr3" id="show1vb3">-</a>'
                    +'<p>&nbsp;</p>'
                    +'<div class="listbr3">'
                      +'<fieldset class="majorpoints-design-3">'
                      +'<legend class="majorpointslegend">DESIGN :</legend>'
                        +'<div class="hidersd-2" style="display:none;" >'
                        +'</div>'
                          +'<span class="dsb" style="color: #8189a7;font-size: 18px;font-weight: normal;line-height: 1.75;">'
                              +'<div id="filepreview" style="position:relative;top:-360px;right:86px;" class="displaynone" >' 
                              +'</div>'
                            +'<div id="sample_cetakan2" style="">'
                            +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Design :</label>'
                            +'<div class="col-md-6 col-sm-6 col-xs-5">'
                            +'<div class="wrapper">'
                            +'<div class="box a">'
                            + Design.join("<br/>")
                            + '&nbsp;'
                            + '<br />'
                            + '<br />'
                            +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Dokumen :</label>'
                            + '<br />'
                            + fileArr
                            // +'<button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;background: #797979;-webkit-border-radius: 23px;-moz-border-radius: 23px;border-radius: 23px;-webkit-#98f01d;font-size: 17px;font-family: Georgia, Serif;text-decoration: none;vertical-align: middle;padding:1px 17px" onclick="document.getElementById("file").click()" id="uploads">Upload</button>'
                            +'</div>'
                            +'<label class="form-control">'
                                // +'<button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;background: #797979;-webkit-border-radius: 23px;-moz-border-radius: 23px;border-radius: 23px;font-size: 17px;font-family: Georgia, Serif;text-decoration: none;vertical-align: middle;padding:1px 17px" id="resetsCM">reset</button>  </label>'
                                +' <div class="box b">'
                                    // +'<button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;background: #797979;-webkit-border-radius: 23px;-moz-border-radius: 23px;border-radius: 23px;font-size: 17px;font-family: Georgia, Serif;text-decoration: none;vertical-align: middle;padding:1px 17px" id="textlink">Link file</button>'
                                    +'</div>'
                                    +'</div>'
                                    +'&nbsp;'
                                +'<input type="file" id="file" name="file[]" style="display:none" multiple="">'
                                +'<div class="alert alert-danger mt-2 d-none text-danger" id="err_file"></div>'
                                +'</div>'
                                +'<br/>'
                    //             +' <form id="forms">'
                    //                 +' <div class="wrapper">'
                    //                     +' <div class="box a">'
                    //                         +'  <div>'
                    //                             +'   <div>'
                    //                                 +'   <input class="source" style="width: 15px;height: 12px;float: left;" type="checkbox" name="checkbox[]" value="emboss" />'
                    //                                 +'<label for="wb" style="  float: left;padding-left: 3px;position: relative;top:-11px" id="somelabel">Emboss</label>'
                    //                                 +'</div>'
                    //                                 +' <br/>'
                    //                                 +' <input class="source" style="width: 15px;height: 12px;position: relative;right:82px;" type="checkbox" name="checkbox[]" value="hotstamp" />'
                    //                                 +'<label for="wb" style="position: relative;right:-17px;top:-24px" id="somelabel">Hotstamp</label>'
                    //                                 +' <input class="source" style="width: 15px;top:-17px;height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="uv varnish" />'
                    //   +' <label for="wb" style="position: relative;right:-20px;top:-38px" id="somelabel">UV varnish</label>'
                    //   +' <input class="source" style="width: 15px;top:-38px;height:12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="waterbase" />'
                    //   +'<label for="wb" style="position: relative;right:-20px;top:-59px" id="somelabel">waterbase</label>'
                    //   +'<input class="source" style="width: 15px;top:-52px;height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="deboss" />'
                    //   +'<label for="wb" style="position: relative;right:-20px;top:-75px" id="somelabel">Deboss</label>'
                    //   +' </div>'
                    //   +'</div>'
                    //   +'<div class="box b">'
                    //     +'<textarea id="w3review" name="w3review" rows="8" cols="35" style="background-color: rgb(232, 232, 232);color:rgb(31, 31, 28);">example link : https://youlink.upload.in</textarea>'
                    //     +'</div>'
                    //     +'<div class="box c">Area send file unknown</div>'
                    //     +'</div>'
                    //     // +'<a href="#hide1" id="btnsaVe" style="width: 56px;height: 35px;border-radius: 30px;font-size: 12px;padding:8px;color: #fff;text-shadow: 0 1px 0 #666;text-align: center;text-decoration: none;box-shadow: 1px 1px 2px #000;background: #168f61;opacity: .95;margin-right: 0;float: left;margin-bottom: 25px;" class="btnSave">Save</a>'
                    //     // +'<a href="#hide1" id="btnupDate" style="width: 56px;height: 35px;border-radius: 30px;font-size: 12px;padding:8px;color: #fff;text-shadow: 0 1px 0 #666;text-align: center;text-decoration: none;box-shadow: 1px 1px 2px #000;background: #168f61;opacity: .95;margin-right: 0;float: left;margin-bottom: 25px;" class="btnupDate1">Update</a>'
                    //     +'<input type="text" style="display: none" id="stateIdOne">'
                    //     +'</form>'
                // +'<span id="OrdersOne" style="width: 87px;cursor: pointer;height: 35px;border-radius: 30px;font-size: 12px;padding:8px;color: #fff;text-shadow: 0 1px 0 #666;text-align: center;text-decoration: none;box-shadow: 1px 1px 2px #000;background: #b1ac15;opacity: .95;margin-right: -20;float: left;margin-bottom: 25px;" class="Orders1">Order Now</span>'
                +'</div>'
                +'<div style="padding:87px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>'
                +'</span>'
                +'</div>'
    +'<div class="listbr3">'
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
                +' <input style="    border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="CMP1" value="'+data.dataComponent3.material+'" name="CMP1" placeholder="Input your component type">'
                +'</div>'
                +' <div>&nbsp;</div>'
                +'      <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Paper type</label>'
                +'<div class="product-quantitys">'
                +'<input style="border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="Czjenis_kertas"  value="'+data.dataComponent3.jenis_kertas+'" name="Czjenis_kertas" placeholder="Input your paper type">'
                +'&nbsp;'  
                +'</div>'
                +' <div>&nbsp;</div>'
                +' <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">GSM</label>'
                +' <div class="product-quantitys">'
                +'<input style="    border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;" id="Czjenis_kertas_gsm" name="Czjenis_kertas_gsm"  value="'+data.dataComponent3.jenis_kertas_gsm+'" placeholder="Input your paper type GSM" type="number" min="1" max="8">'
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
                +' <div class="listbr3">'
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
                +'<input style="    border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="Csize" name="Csize"  value="'+data.dataComponent3.size+'" placeholder="Input your custom size"></div>'
                +'<div>&nbsp;</div>'
                +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Material</label>'
                +'<div class="product-quantitys">'
                    +'<input style="border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="Czmaterial" name="Czmaterial"  value="'+data.dataComponent3.material+'" placeholder="Input your material type"></div>'
                    +'<div>&nbsp;</div>' 
                    +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Quantity</label>'
                    +'<div class="product-quantitys">'                                                                                                                                                                                                                                                                                                                                                                                      
                +'<input style="border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;" id="Czquantity" name="Czquantity" placeholder="Input your paper type GSM" type="number"  value="'+data.dataComponent3.jenis_kertas_gsm+'" min="1" max="8">'
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
        }

        if(data.dataComponent4.design_plan == "cp4"){
         $("#orgv").hide()
         let fileArr
          let Design = ReacallDesign(data.dataComponent4.design)
           let Filename = ReacallFiles(getFileName(data.dataE4))
           if(Filename){
                  fileArr =  Filename.join("<br/>");
                } else {
                  fileArr = ""
                }
            $("#component_4").append('<div id="mjrsr4" style="color: #8189a7;font-size: 13px;top:96px;right:-156px;line-width:3px;width: 100%;box-sizing:border-box;">'
              +'<fieldset class="majorpointsr4">'
              +'<legend class="majorpointslegend">&nbsp;'+data.dataComponent4.component+' :</legend>'

                  +'<div class="hidersd-4" style="display:none;" >'
                  +'</div>'
              // +'<label for="dforLabelComponent" id="dforLabelComponent3" class="text-center">The file name will appear below:</label>'
                +'<pre id="filen4" style="display:none;"></pre>'
                  +'<div class="FAQf4">'
                    +'<a href="#hide1vb4" class="hidebr4" id="hide1vb4">+</a>'
                    +'<a href="#show1vb4" class="showbr4" id="show1vb4">-</a>'
                    +'<p>&nbsp;</p>'
                    +'<div class="listbr4">'
                      +'<fieldset class="majorpoints-design-4">'
                      +'<legend class="majorpointslegend">DESIGN :</legend>'
                        +'<div class="hidersd-4" style="display:none;" >'
                        +'</div>'
                          +'<span class="dsb" style="color: #8189a7;font-size: 18px;font-weight: normal;line-height: 1.75;">'
                              +'<div id="filepreview" style="position:relative;top:-360px;right:86px;" class="displaynone" >' 
                              +'</div>'
                            +'<div id="sample_cetakan4" style="">'
                            +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Design :</label>'
                            +'<div class="col-md-6 col-sm-6 col-xs-5">'
                            +'<div class="wrapper">'
                            +'<div class="box a">'
                            + Design.join("<br/>")
                            + '&nbsp;'
                            + '<br />'
                            + '<br />'
                            +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Dokumen :</label>'
                            + '<br />'
                            + fileArr
                            // +'<button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;background: #797979;-webkit-border-radius: 23px;-moz-border-radius: 23px;border-radius: 23px;-webkit-#98f01d;font-size: 17px;font-family: Georgia, Serif;text-decoration: none;vertical-align: middle;padding:1px 17px" onclick="document.getElementById("file").click()" id="uploads">Upload</button>'
                            +'</div>'
                            +'<label class="form-control">'
                                // +'<button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;background: #797979;-webkit-border-radius: 23px;-moz-border-radius: 23px;border-radius: 23px;font-size: 17px;font-family: Georgia, Serif;text-decoration: none;vertical-align: middle;padding:1px 17px" id="resetsCM">reset</button>  </label>'
                                +' <div class="box b">'
                                    // +'<button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;background: #797979;-webkit-border-radius: 23px;-moz-border-radius: 23px;border-radius: 23px;font-size: 17px;font-family: Georgia, Serif;text-decoration: none;vertical-align: middle;padding:1px 17px" id="textlink">Link file</button>'
                                    +'</div>'
                                    +'</div>'
                                    +'&nbsp;'
                                +'<input type="file" id="file" name="file[]" style="display:none" multiple="">'
                                +'<div class="alert alert-danger mt-2 d-none text-danger" id="err_file"></div>'
                                +'</div>'
                                +'<br/>'
                    //             +' <form id="forms">'
                    //                 +' <div class="wrapper">'
                    //                     +' <div class="box a">'
                    //                         +'  <div>'
                    //                             +'   <div>'
                    //                                 +'   <input class="source" style="width: 15px;height: 12px;float: left;" type="checkbox" name="checkbox[]" value="emboss" />'
                    //                                 +'<label for="wb" style="  float: left;padding-left: 3px;position: relative;top:-11px" id="somelabel">Emboss</label>'
                    //                                 +'</div>'
                    //                                 +' <br/>'
                    //                                 +' <input class="source" style="width: 15px;height: 12px;position: relative;right:82px;" type="checkbox" name="checkbox[]" value="hotstamp" />'
                    //                                 +'<label for="wb" style="position: relative;right:-17px;top:-24px" id="somelabel">Hotstamp</label>'
                    //                                 +' <input class="source" style="width: 15px;top:-17px;height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="uv varnish" />'
                    //   +' <label for="wb" style="position: relative;right:-20px;top:-38px" id="somelabel">UV varnish</label>'
                    //   +' <input class="source" style="width: 15px;top:-38px;height:12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="waterbase" />'
                    //   +'<label for="wb" style="position: relative;right:-20px;top:-59px" id="somelabel">waterbase</label>'
                    //   +'<input class="source" style="width: 15px;top:-52px;height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="deboss" />'
                    //   +'<label for="wb" style="position: relative;right:-20px;top:-75px" id="somelabel">Deboss</label>'
                    //   +' </div>'
                    //   +'</div>'
                    //   +'<div class="box b">'
                    //     +'<textarea id="w3review" name="w3review" rows="8" cols="35" style="background-color: rgb(232, 232, 232);color:rgb(31, 31, 28);">example link : https://youlink.upload.in</textarea>'
                    //     +'</div>'
                    //     +'<div class="box c">Area send file unknown</div>'
                    //     +'</div>'
                    //     // +'<a href="#hide1" id="btnsaVe" style="width: 56px;height: 35px;border-radius: 30px;font-size: 12px;padding:8px;color: #fff;text-shadow: 0 1px 0 #666;text-align: center;text-decoration: none;box-shadow: 1px 1px 2px #000;background: #168f61;opacity: .95;margin-right: 0;float: left;margin-bottom: 25px;" class="btnSave">Save</a>'
                    //     // +'<a href="#hide1" id="btnupDate" style="width: 56px;height: 35px;border-radius: 30px;font-size: 12px;padding:8px;color: #fff;text-shadow: 0 1px 0 #666;text-align: center;text-decoration: none;box-shadow: 1px 1px 2px #000;background: #168f61;opacity: .95;margin-right: 0;float: left;margin-bottom: 25px;" class="btnupDate1">Update</a>'
                    //     +'<input type="text" style="display: none" id="stateIdOne">'
                    //     +'</form>'
                // +'<span id="OrdersOne" style="width: 87px;cursor: pointer;height: 35px;border-radius: 30px;font-size: 12px;padding:8px;color: #fff;text-shadow: 0 1px 0 #666;text-align: center;text-decoration: none;box-shadow: 1px 1px 2px #000;background: #b1ac15;opacity: .95;margin-right: -20;float: left;margin-bottom: 25px;" class="Orders1">Order Now</span>'
                +'</div>'
                +'<div style="padding:87px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>'
                +'</span>'
                +'</div>'
    +'<div class="listbr4">'
        +'<fieldset class="majorpoints-design-4">'
            +'<legend class="majorpointslegend">MATERIAL :</legend>'
            +'<div class="hidersmat-4" style="display:none;" >'
                +'</div>'
                +'<div id="sample_cetakan4" style="">'
                    +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Sample Cetakan</label>'
                    +'<div class="col-md-6 col-sm-6 col-xs-5">'
                        +'<div class="form-control">'
                            +' <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Component</label>'
                            +'<div class="product-quantitys">'
                +' <input style="    border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="CMP1" value="'+data.dataComponent3.material+'" name="CMP1" placeholder="Input your component type">'
                +'</div>'
                +' <div>&nbsp;</div>'
                +'      <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Paper type</label>'
                +'<div class="product-quantitys">'
                +'<input style="border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="Czjenis_kertas"  value="'+data.dataComponent3.jenis_kertas+'" name="Czjenis_kertas" placeholder="Input your paper type">'
                +'&nbsp;'  
                +'</div>'
                +' <div>&nbsp;</div>'
                +' <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">GSM</label>'
                +' <div class="product-quantitys">'
                +'<input style="    border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;" id="Czjenis_kertas_gsm" name="Czjenis_kertas_gsm"  value="'+data.dataComponent3.jenis_kertas_gsm+'" placeholder="Input your paper type GSM" type="number" min="1" max="8">'
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
                +' <div class="listbr4">'
                +' <fieldset class="majorpoints-design-4">'
                    +'<legend class="majorpointslegend">SIZE :</legend>'
                    +' <div class="hidersmat-4" style="display:none;">'
                        +'  </div>'
        +' <div id="sample_cetakan" style="">'
            +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Sample Cetakan</label>'
            +'<div class="col-md-6 col-sm-6 col-xs-5">'
            +'<div class="form-control">'
                    +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Size</label>'
                    +'<div class="product-quantitys">'
                +'<input style="    border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="Csize" name="Csize"  value="'+data.dataComponent3.size+'" placeholder="Input your custom size"></div>'
                +'<div>&nbsp;</div>'
                +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Material</label>'
                +'<div class="product-quantitys">'
                    +'<input style="border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;"  type="text" id="Czmaterial" name="Czmaterial"  value="'+data.dataComponent3.material+'" placeholder="Input your material type"></div>'
                    +'<div>&nbsp;</div>' 
                    +'<label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">Quantity</label>'
                    +'<div class="product-quantitys">'                                                                                                                                                                                                                                                                                                                                                                                      
                +'<input style="border: 2px solid #ccd4ed;border-radius: 5px;background: #fcfcfc;box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);color: #474e66;height: 40px;text-align: right;width: 212px;-moz-appearance: textfield;-webkit-appearance: none;appearance: none;" id="Czquantity" name="Czquantity" placeholder="Input your paper type GSM" type="number"  value="'+data.dataComponent3.jenis_kertas_gsm+'" min="1" max="8">'
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

      Swal.fire({
          title: 'Are you sure?',
          text: "Do you want to Re order transaction ?",
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes!',
          cancelButtonText: 'No'
        }).then((result) => {
                  if (result.isConfirmed) {
                      ReOrdersMails(CSRF_TOKEN).then(function(data){
                        Swal.fire(
                          'Information!',
                          'Message it\'s process, thanks.. ',
                          'success'
                          )
                        });

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

      });

    });



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
