
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/png" href="{{ asset('KOP/logoKOPfooter.PNG') }}">
    <title>Customize your Mailer Box | Packlane</title>

    <link crossorigin="" href="{{ asset('packlane-assets/app-bundle.css') }}" rel="stylesheet"></link>

    <link crossorigin="" href="https://assets.packlane.com/css/typeset-fca72dec31bf9cbb494d5444c99e29a7.css?vsn=d" rel="stylesheet"></link>
    <link crossorigin="" crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet"></link>
    <link href="https://packlane.com/customize/mailer-box" rel="canonical">
    <meta content="Easily print beautiful custom mailer boxes at Packlane. Order custom mailer boxes online and enjoy low minimums, affordable prices, and fast turnarounds." name="description">
    <link crossorigin="" href="https://assets.packlane.com/css/magnify-a21187f3e8be5fcef4baf8e6b38ae35a.css?vsn=d" rel="stylesheet"></link>

    {{-- <link rel="stylesheet" href="{{ asset('css/btstrapv-4.css')}}"> --}}
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
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="{{ asset('css/KOP-css/wdsrver.css')}}" media="screen">
    <!-- Head Libs -->
    <script src="{{ asset('js/modernnize.js')}}"></script>
    @livewireStyles

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

  <body data-controller="boxdesigner" style="position: sticky;top: 0;background: rgb(255, 255, 255);" data-action="new" class="boxdesigner" id="new" data-csrf="OiQPH0s_OQV9JSlYfxwvACs7HTleEjQ7KMzg3oc_OBO3L1KEArHloJNo">
    <header class="header " id="main-header-js" style=" position: sticky;top: 0;background: rgb(255, 255, 255);">
      <div class="nav-container" style="height:35px;">

          <div class="logo-container">
              <a class="header-logo " href="{{ route('dashboard') }}">
                  <picture><img alt="Packlane" src="{{ asset('KOP/LogotypeKOP-01.jpg') }}"></picture>
              </a>
          </div>

          <div class="nav-bar__item nav-bar__item--menu-toggle">
              <picture><img alt="Menu" id="hamburger-js" src="https://assets.packlane.com/images/hamburger.svg">
              </picture>
          </div>

          <nav id="nav-bar-js" class="nav-bar" style="position: sticky; top: 0;background: rgb(255, 255, 255);">
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
                  <a class="nav-bar__item nav-bar__item--link " href="{{ route('careers') }}" id="design-box-link-js"> @lang('navbar.crrs') </a>
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
  <div class="lazy" data-loader="customLoaderName">
  </div>
<div class="lazy" data-loader="asyncLoader">
  <main> 
  <div class="loader-animation">
   <div class="container-loading cube-container">
      <div class="cube">
         <div class="half1">
            <div class="side s1"></div>
            <div class="side s2"></div>
            <div class="side s5"></div>
         </div>
         <div class="half2">
            <div class="side s3"></div>
            <div class="side s4"></div>
            <div class="side s6"></div>
         </div>
      </div>
   </div>
</div>
{{-- <div class="mobile-message customize-message">
    <p class="alert info">
    Hey, mobile user! We're working hard to improve our mobile experience, but until then, you might prefer a larger screen.
    <i class="material-icons close-message close-customize-message">close</i>
    </p>
</div> --}}
<div id="box-designer-container"></div>
<div id="responsenotwork">
</div>
  {{-- design-box *{ } --}}
<style>

#slow-notice { width:300px; position: absolute; top:0; left:50%; margin-left: -160px; background-color: #F0DE7D;
   text-align: center; z-index: 100; padding: 10px; font-family: sans-serif; font-size: 12px; }
    #slow-notice a, #slow-notice .dismiss { color: #000; text-decoration: underline; cursor:pointer; }
    #slow-notice .dismiss-container { text-align:right; padding-top:10px; font-size: 10px;}

    /* source: http://www.ehow.com/how_12214447_make-collapsing-lists-java.html */
.FAQ { 
    display : block;
    vertical-align: top; 
    height:auto !important; 
}

.FAQsc { 
    display : block;
    vertical-align: top; 
    height:auto !important; 
}

.FAQmaterials { 
    display : block;
    vertical-align: top; 
    height:auto !important; 
}

.listsc2 {
    display:none; 
    height:auto;
    margin:0;
    float: left;
}

.showsc1 {
    display: none; 
}
.hidesc1:target + .showsc1 {
    display: inline; 
}
.hidesc1:target {
    display: none; 
}
.hidesc1:target ~ .listsc2 {
    display:inline; 
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

.hidesc1, .showsc1 {
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

.hidesc1:hover, .showsc1:hover {
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
<div class="wdt-loading-screen">
  <div class="wdt-loading-phrases">
      <div class="wdt-loading-phrase-category" data-category="profile">
          <div class="wdt-loading-phrase">Preparing component...</div>
          <div class="wdt-loading-phrase">Attempts repairing component...</div>
          <div class="wdt-loading-phrase">Getting dom instead component...</div>
          <div class="wdt-loading-phrase">Reconfiguring state...</div>
          <div class="wdt-loading-phrase">please wait a few minutes...</div>
      </div>
  </div>
</div>
  {{-- dev single component attr --}}
  <div id="mjrsc1" style="color: #abb4d4;font-size: 13px;position:absolute;top:130px;right:803px;line-width:3px;">
    <input class="form-control" style="width:3px;" type="text" name="cp1" id="cp1" value="cp1" />
        {{-- <fieldset class="majorpoints-designs"> --}}
        <legend class="majorpointslegend">DESIGN :</legend>
        <div class="hidersdd" style="display:none;" >
        </div>
        <span class="dsss" style="color: #8189a7;font-size: 18px;
        font-weight: normal;line-height: 1.75;">
          <div id="filepreviewScmp" style="position:relative;top:-360px;right:86px;" class="displaynone" > 
          </div>
            <div id="sample_cetakan" style="width:354px">
              <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
               </label>
              <div class="col-md-6 col-sm-6 col-xs-5">
                <div class="wrapper">
                  <div class="box a">
                    <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;
                    background: #797979;
                    -webkit-border-radius: 23px;
                    -moz-border-radius: 23px;
                    border-radius: 23px;
                    position: relative;
                    right:8px;
                    -webkit-#98f01d;
                    font-size: 17px;
                    font-family: Georgia, Serif;
                    text-decoration: none;
                    vertical-align: middle;
                    padding:1px 17px" onclick="document.getElementById('filessd').click()" id="uploads">Upload</button>
                  </div>
                    <label class="form-control">
                      <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;
                      background: #797979;
                      -webkit-border-radius: 23px;
                      -moz-border-radius: 23px;
                      right:59px;
                      border-radius: 23px;
                      position: relative;
                      font-size: 17px;
                      font-family: Georgia, Serif;
                      text-decoration: none;
                      vertical-align: middle;
                      padding:1px 17px" id="resetsCM">reset</button>  
                    </label>
                  <div class="box b">
                    <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;
                    background: #797979;
                    -webkit-border-radius: 23px;
                    -moz-border-radius: 23px;
                    right:110px;
                    position: relative;
                    border-radius: 23px;
                    font-size: 17px;
                    font-family: Georgia, Serif;
                    text-decoration: none;
                    vertical-align: middle;
                    padding:1px 17px" id="textlink">Link file</button>
                  </div>
                </div>
                &nbsp;
                <input type='file' id="filessd" name="filessd[]" style="display:none" multiple="">
                <div class='alert alert-danger mt-2 d-none text-danger' id="err_file"></div>
              </div>
              <br/>
              <form id="forms">
                <div class="wrapper">
                  <div class="box a">
                    <div>
                      <div>
                        <input class="source" style="width: 15px;
                        height: 12px;
                        float: left;" type="checkbox" name="checkbox[]" value="emboss" />
                        <label for="wb" style="  float: left;
                        padding-left: 3px;position: relative;top:-11px" id="somelabel">Emboss</label>
                      </div>
                      <br/>
                      <input class="source" style="width: 15px;
                      height: 12px;position: relative;right:82px;" type="checkbox" name="checkbox[]" value="hotstamp" />
                      <label for="wb" style="position: relative;right:-17px;top:-24px" id="somelabel">Hotstamp</label>
                      <input class="source" style="width: 15px;top:-17px;
                      height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="uv varnish" />
                      <label for="wb" style="position: relative;right:-20px;top:-38px" id="somelabel">UV varnish</label>
                      <input class="source" style="width: 15px;top:-38px;
                      height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="waterbase" />
                      <label for="wb" style="position: relative;right:-20px;top:-59px" id="somelabel">waterbase</label>
                      <input class="source" style="width: 15px;top:-52px;
                      height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="deboss" />
                      <label for="wb" style="position: relative;right:-20px;top:-75px" id="somelabel">Deboss</label>
                    </div>
                  </div>
                  <div class="box b" style="position: absolute;right:-715px;top:279px">
                    <textarea id="w3review" name="w3review" rows="8" cols="29" style="
                      background-color: rgb(232, 232, 232);color:rgb(31, 31, 28);">https://youlink.upload.in</textarea>
                  </div>
                  {{-- <div class="box c" id="prvText" style="position: relative;right:120px">Area send file unknown</div> --}}
                </div>
                <pre id="label_fs"></pre>
                <pre id="filenssd" style="display:none;position: relative;right:-5px"></pre>
                <br />
                <a href="#hide1" id="btnsaVeSingleComponent" style="
                width: 56px;
                height: 35px;
                border-radius: 30px;
                font-size: 12px;
                padding:8px;
                color: #fff;
                text-shadow: 0 1px 0 #666;
                text-align: center;
                text-decoration: none;
                box-shadow: 1px 1px 2px #000;
                background: #168f61;
                opacity: .95;
                margin-right: 0;
                float: left;
                margin-bottom: 25px;" class="btnSaveSingleComponent">Save</a>
                <a href="#hide1" id="btnupDate" style="
                width: 56px;
                height: 35px;
                border-radius: 30px;
                font-size: 12px;
                padding:8px;
                color: #fff;
                text-shadow: 0 1px 0 #666;
                text-align: center;
                text-decoration: none;
                box-shadow: 1px 1px 2px #000;
                background: #168f61;
                opacity: .95;
                margin-right: 0;
                float: left;
                margin-bottom: 25px;" class="btnupDate1SingleComponent">Update</a>
                <input type="text" style="display: none" id="stateIdOneSingleComponent">
              </form>
              <span id="OrdersOneSingleComponent" style="
              width: 87px;
              cursor: pointer;
              height: 35px;
              border-radius: 30px;
              font-size: 12px;
              padding:8px;
              color: #fff;
              text-shadow: 0 1px 0 #666;
              text-align: center;
              text-decoration: none;
              box-shadow: 1px 1px 2px #000;
              background: #b1ac15;
              opacity: .95;
              margin-right: -20;
              float: left;
              margin-bottom: 25px;" class="Orders1SingleComponent">Order Now</span>
            </div>
          <div style="padding:87px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        </span>
      {{-- </div> --}}
    {{-- </div> --}}
  </div>
  {{-- end single component --}}
  <span class="boxCzForSize p-dap">
    Custom
  </span>
  {{-- development this with tabular component --}}
  <div id="mv_tp" style="position: relative;right:-174px;top:-646px">
    <div id="mjrs" style="color: #8189a7;font-size: 13px;top:170px;right:371px;line-width:3px;width: 84%;box-sizing:border-box;">
    <fieldset class="majorpoints">
    <legend class="majorpointslegend">Custom size : </legend>
    <div class="hiders" style="display:none;" >
    </div>
    <label for="dforLabelComponent" id="dforLabelComponent" class="text-center">The file name will appear below:</label>
    <input class="form-control" style="width:20px;" type="text" name="cp1" id="cp1" value="cp1" />
    <pre id="filen" style="display:none;"></pre>
    <div class='FAQ'>
      <a href="#hide1" class="hide" id="hide1">+</a>
      <a href="#show1" class="show" id="show1">-</a>
      <p>&nbsp;</p>
      <div class="list">
        <fieldset class="majorpoints-design">
        <legend class="majorpointslegend">DESIGN : </legend>
        <div class="hidersd" style="display:none;" >
        </div>
        <span class="ds" style="color: #8189a7;font-size: 18px;
        font-weight: normal;line-height: 1.75;">
          {{-- <div class="displaynone" style="    margin: 20px;
          padding: 15px 15px;
          border: 1px solid rgba(0, 0, 0, 0.1);
          border-radius: 2px;
          font-weight: bold;
          position:relative;top:-405px;right:157px;
          width:265px;
          background: #e4e7f0;
          color: #122957;
          text-align: center;" id="responseMsg"></div> --}}
    
          <!-- File preview --> 
          <div id="filepreview" style="position:relative;top:-360px;right:86px;" class="displaynone" > 
            {{-- <img src="{{ asset('img/imagesb__.png')}}" class="displaynone" width="124px" height="65px"><br> --}}
              {{-- <label class="displaynone" >No image available</label> --}}
          </div>
          {{-- 
              DISTOP, karena component tab bar tidak responsive, ketika selesai menambah component 1 tidak merender component yang baru.

            <pre id="filen" style="display:none;"></pre> --}}
            <div id="sample_cetakan" style="">
              <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
               </label>
              <div class="col-md-6 col-sm-6 col-xs-5">
                <div class="wrapper">
                  <div class="box a">
                    <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;
                    background: #797979;
                    -webkit-border-radius: 23px;
                    -moz-border-radius: 23px;
                    border-radius: 23px;
                    -webkit-#98f01d;
                    font-size: 17px;
                    font-family: Georgia, Serif;
                    text-decoration: none;
                    vertical-align: middle;
                    padding:1px 17px" onclick="document.getElementById('file').click()" id="uploads">Upload</button>
                  </div>
                    <label class="form-control">
                      {{-- <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;
                      background: #797979;
                      -webkit-border-radius: 23px;
                      -moz-border-radius: 23px;
                      border-radius: 23px;
                      font-size: 17px;
                      font-family: Georgia, Serif;
                      text-decoration: none;
                      vertical-align: middle;
                      padding:1px 17px" id="resetsCM">reset</button>   --}}
                    </label>
                  <div class="box b">
                    {{-- <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #adb516;
                    background: #797979;
                    -webkit-border-radius: 23px;
                    -moz-border-radius: 23px;
                    border-radius: 23px;
                    font-size: 17px;
                    font-family: Georgia, Serif;
                    text-decoration: none;
                    vertical-align: middle;
                    padding:1px 17px" id="textlink">Link file</button> --}}
                  </div>

                </div>
                {{-- <input type='file' id="file" name='file' accept=".jpg, .jpeg, .png" class="form-control"> --}}
             
                &nbsp;
            
                <input type='file' id="file" name="file[]" style="display:none" multiple="">
                <!-- Error -->
                <div class='alert alert-danger mt-2 d-none text-danger' id="err_file"></div>
    
              </div>
              <br/>
              <form id="formsD">
                <div class="wrapper">
                  <div class="box a">
                    <div>
                      <div>
                        <input class="source" style="width: 15px;
                        height: 12px;
                        float: left;" type="checkbox" name="checkbox[]" value="emboss" />
                        <label for="wb" style="  float: left;
                        padding-left: 3px;position: relative;top:-11px" id="somelabel">Emboss</label>
                      </div>
                      <br/>
                      <input class="source" style="width: 15px;
                      height: 12px;position: relative;right:82px;" type="checkbox" name="checkbox[]" value="hotstamp" />
                      <label for="wb" style="position: relative;right:-17px;top:-24px" id="somelabel">Hotstamp</label>
                      <input class="source" style="width: 15px;top:-17px;
                      height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="uv varnish" />
                      <label for="wb" style="position: relative;right:-20px;top:-38px" id="somelabel">UV varnish</label>
                      <input class="source" style="width: 15px;top:-38px;
                      height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="waterbase" />
                      <label for="wb" style="position: relative;right:-20px;top:-59px" id="somelabel">waterbase</label>
                      <input class="source" style="width: 15px;top:-52px;
                      height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox[]" value="deboss" />
                      <label for="wb" style="position: relative;right:-20px;top:-75px" id="somelabel">Deboss</label>
                    </div>
                  </div>
                  <div class="box b">
                    <textarea id="w3review" name="w3review" rows="8" cols="35" style="
                      background-color: rgb(232, 232, 232);color:rgb(31, 31, 28);">https://youlink.upload.in
                      </textarea>
                  </div>
                  {{-- <div class="box c">Area send file unknown</div> --}}
                </div>

                <a href="#hide1" id="btnsaVe" style="
                width: 56px;
                height: 35px;
                border-radius: 30px;
                font-size: 12px;
                padding:8px;
                color: #fff;
                text-shadow: 0 1px 0 #666;
                text-align: center;
                text-decoration: none;
                box-shadow: 1px 1px 2px #000;
                background: #168f61;
                opacity: .95;
                margin-right: 0;
                float: left;
                margin-bottom: 25px;" class="btnSave">Save</a>
                <a href="#hide1" id="btnupDate" style="
                width: 56px;
                height: 35px;
                border-radius: 30px;
                font-size: 12px;
                padding:8px;
                color: #fff;
                text-shadow: 0 1px 0 #666;
                text-align: center;
                text-decoration: none;
                box-shadow: 1px 1px 2px #000;
                background: #168f61;
                opacity: .95;
                margin-right: 0;
                float: left;
                margin-bottom: 25px;" class="btnupDate1">Update</a>
                <input type="text" style="display: none" id="stateIdOne">
              </form>
              <span id="OrdersOne" style="
              width: 87px;
              cursor: pointer;
              height: 35px;
              border-radius: 30px;
              font-size: 12px;
              padding:8px;
              color: #fff;
              text-shadow: 0 1px 0 #666;
              text-align: center;
              text-decoration: none;
              box-shadow: 1px 1px 2px #000;
              background: #b1ac15;
              opacity: .95;
              margin-right: -20;
              float: left;
              margin-bottom: 25px;" class="Orders1">Order Now</span>
            </div>
          <div style="padding:87px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        </span>
      </div>

  {{-- dev component material --}}
    {{-- <a href="#hidemat" class="hidemat" id="hidemat">+</a>
    <a href="#showmat" class="showmat" id="showmat">-</a> --}}
    <div class="list">
      <fieldset class="majorpoints-material">
      <legend class="majorpointslegend">MATERIAL :</legend>
      <div class="hidersmat" style="display:none;" >
   
      </div>
          <div id="sample_cetakan" style="">
            <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
             </label>
            <div class="col-md-6 col-sm-6 col-xs-5">
              <div class="form-control">
              <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Component</label>
              <div class="product-quantitys">
                  <input style="    border: 2px solid #ccd4ed;
                border-radius: 5px;
                background: #fcfcfc;
                box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                color: #474e66;
                height: 40px;
                text-align: right;
                width: 212px;
                -moz-appearance: textfield;
                -webkit-appearance: none;
                appearance: none;"  type="text" id="CMP1" name="CMP1" placeholder="Input your component type">
              </div>
              <div>&nbsp;</div> 
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Paper type</label>
              <div class="product-quantitys">
                  <input style="    border: 2px solid #ccd4ed;
                border-radius: 5px;
                background: #fcfcfc;
                box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                color: #474e66;
                height: 40px;
                text-align: right;
                width: 212px;
                -moz-appearance: textfield;
                -webkit-appearance: none;
                appearance: none;"  type="text" id="Czjenis_kertas" name="Czjenis_kertas" placeholder="Input your paper type">
              &nbsp;  
              </div>
              <div>&nbsp;</div> 
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  GSM</label>
                <div class="product-quantitys">
                  <input style="    border: 2px solid #ccd4ed;
                  border-radius: 5px;
                  background: #fcfcfc;
                  box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                  color: #474e66;
                  height: 40px;
                  text-align: right;
                  width: 212px;
                  -moz-appearance: textfield;
                  -webkit-appearance: none;
                  appearance: none;" id="Czjenis_kertas_gsm" name="Czjenis_kertas_gsm" placeholder="Input your paper type GSM" type="number" min="1" max="8">
                  <span class="tooltip">fill in GSM according to your needs.</span></div>
                </div>
              <div class="wrapper">
                <div class="box a">
                </div>
                  <label class="form-control">
                  </label>

              </div>
              {{-- <input type='file' id="file" name='file' accept=".jpg, .jpeg, .png" class="form-control"> --}}
           
              &nbsp;
          
              <input type='file' id="file" name="file[]" style="display:none" multiple="">
              <!-- Error -->
              <div class='alert alert-danger mt-2 d-none text-danger' id="err_file"></div>
  
            </div>
          </div>
      </span>
    </div>
    {{-- end dev material --}}

    {{-- dev component size --}}
    {{-- <a href="#hidemat" class="hidemat" id="hidemat">+</a>
    <a href="#showmat" class="showmat" id="showmat">-</a> --}}
    <div class="list">
      <fieldset class="majorpoints-material">
      <legend class="majorpointslegend">SIZE :</legend>
      <div class="hidersmat" style="display:none;">
   
      </div>
          <div id="sample_cetakan" style="">
            <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
             </label>
            <div class="col-md-6 col-sm-6 col-xs-5">
              <div class="form-control">
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Size</label>
              <div class="product-quantitys">
                  <input style="    border: 2px solid #ccd4ed;
                border-radius: 5px;
                background: #fcfcfc;
                box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                color: #474e66;
                height: 40px;
                text-align: right;
                width: 212px;
                -moz-appearance: textfield;
                -webkit-appearance: none;
                appearance: none;"  type="text" id="Csize" name="Csize" placeholder="Input your custom size 'INCH">
                <span>'INCH</span>
              </div>
              <div>&nbsp;</div> 
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Material</label>
              <div class="product-quantitys">
                  <input style="    border: 2px solid #ccd4ed;
                border-radius: 5px;
                background: #fcfcfc;
                box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                color: #474e66;
                height: 40px;
                text-align: right;
                width: 212px;
                -moz-appearance: textfield;
                -webkit-appearance: none;
                appearance: none;"  type="text" id="Czmaterial" name="Czmaterial" placeholder="Input your material type">
                 <span>TYPE</span>
                </div>
              <div>&nbsp;</div> 
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Quantity</label>
                <div class="product-quantitys">
                  <input style="    border: 2px solid #ccd4ed;
                  border-radius: 5px;
                  background: #fcfcfc;
                  box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                  color: #474e66;
                  height: 40px;
                  text-align: right;
                  width: 212px;
                  -moz-appearance: textfield;
                  -webkit-appearance: none;
                  appearance: none;" id="Czquantity" name="Czquantity" placeholder="Input your paper type GSM" type="number" min="1" max="8">
                  <span class="tooltip">fill in Quantity according to your needs.</span></div>
                
                </div>
              <div class="wrapper">
                {{-- <div class="box a">
                  <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #4e8a79;
                  background: #6a4270;
                  background: -webkit-gradient(linear, left top, left bottom, from(#19852d), to(#6a4270));
                  background: -webkit-linear-gradient(top, #19852d, #6a4270);
                  background: -moz-linear-gradient(top, #19852d, #6a4270);
                  background: -ms-linear-gradient(top, #19852d, #6a4270);
                  background: -o-linear-gradient(top, #19852d, #6a4270);
                  -webkit-border-radius: 18px;
                  -moz-border-radius: 18px;
                  border-radius: 18px;
                  -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
                  -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
                  box-shadow: rgba(0,0,0,1) 0 1px 0;
                  text-shadow: rgba(0,0,0,.4) 0 1px 0;
                  color: #98f01d;
                  font-size: 17px;
                  font-family: Georgia, Serif;
                  text-decoration: none;
                  vertical-align: middle;
                  padding:3.5px 17px" onclick="document.getElementById('file').click()" id="uploads">Upload</button>
                </div> --}}
                  <label class="form-control">
                    {{-- <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #4e8a79;
                    background: #6a4270;
                    background: -webkit-gradient(linear, left top, left bottom, from(#89fd04), to(#6a4270));
                    background: -webkit-linear-gradient(top, #147eb8, #6a4270);
                    background: -moz-linear-gradient(top, #253235, #6a4270);
                    background: -ms-linear-gradient(top, #9e082e, #6a4270);
                    background: -o-linear-gradient(top, #2d4944, #6a4270);
                    -webkit-border-radius: 18px;
                    -moz-border-radius: 18px;
                    border-radius: 18px;
                    -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
                    -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
                    box-shadow: rgb(90, 84, 84) 0 1px 0;
                    text-shadow: rgba(0,0,0,.4) 0 1px 0;
                    color: #a21515;
                    font-size: 17px;
                    font-family: Georgia, Serif;
                    text-decoration: none;
                    vertical-align: middle;
                    padding:3.5px 17px" id="resetsCM">reset</button>   --}}
                  </label>

              </div>
              {{-- <input type='file' id="file" name='file' accept=".jpg, .jpeg, .png" class="form-control"> --}}           
              <input type='file' id="file" name="file[]" style="display:none" multiple="">
              <!-- Error -->
              <div class='alert alert-danger mt-2 d-none text-danger' id="err_file"></div>
  
            </div>
          </div>
      </span>
    </div>
    {{-- end dev size --}}

    </div>
    </div>
    
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

  {{-- development dynamic component custom size r2 --}}
  <div id="mjrsr2" style="color: #8189a7;font-size: 13px;top:170px;right:371px;line-width:3px;width: 84%;box-sizing:border-box;">
  {{-- <div id="mjrsr2" style="color: #8189a7;font-size: 13px;top:-435px;right:-431px;line-width:3px;width: 39%;box-sizing:border-box;"> --}}
    <fieldset class="majorpointsr2">
    <legend class="majorpointslegend">Custom size :</legend>
    <div class="hidersr2" style="display:none;" >
     
    </div>
    <label for="dforLabelComponent" id="dforLabelComponent2" class="text-center">The file name will appear below:</label>
    <input class="form-control" style="display: none" type="text" name="cp2" id="cp2" value="cp2" />
    <pre id="filen2" style="display:none;"></pre>
  <div class='FAQf'>
      <a href="#hide1s" class="hideb" id="hide1s">+</a>
      <a href="#show1" class="showb" id="show1">-</a>
      <div class="listb">
        <fieldset class="majorpoints-design-2">
        <legend class="majorpointslegend">DESIGN :</legend>
        <div class="hidersd-2" style="display:none;" >
        </div>
      <span class="dsb" style="color: #8189a7;font-size: 18px;
      font-weight: normal;line-height: 1.75;">
        <div id="filepreview2" style="position:relative;top:-360px;right:86px;" class="displaynone" > 
        </div>
          <div id="sample_cetakan2" style="">
            <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
             </label>
            <div class="col-md-6 col-sm-6 col-xs-5">
              <div class="wrapper">
                <div class="box a">
                  <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #cbce11;
                  background: #797979;
                  -webkit-border-radius: 23px;
                  -moz-border-radius: 23px;
                  border-radius: 23px;
                  font-size: 17px;
                  font-family: Georgia, Serif;
                  text-decoration: none;
                  vertical-align: middle;
                  padding:3.5px 17px" onclick="document.getElementById('files').click()" id="uploads2">Upload</button>
                </div>
                  <label class="form-control">
                    {{-- <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #cbce11;
                    background: #797979;
                    -webkit-border-radius: 23px;
                    -moz-border-radius: 23px;
                    border-radius: 23px;
                    font-size: 17px;
                    font-family: Georgia, Serif;
                    text-decoration: none;
                    vertical-align: middle;
                    padding:3.5px 17px" id="resetsCM2">reset</button>   --}}
                  </label>
                <div class="box b">
                  {{-- <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #cbce11;
                  background: #797979;
                  -webkit-border-radius: 23px;
                  -moz-border-radius: 23px;
                  border-radius: 23px;
                  font-size: 17px;
                  font-family: Georgia, Serif;
                  text-decoration: none;
                  vertical-align: middle;
                  padding:3.5px 17px" id="textlink2">Link file</button> --}}
                </div>
              </div>
              &nbsp;
            &nbsp;
            <input type='file' id="files" name="files[]" style="display:none" multiple="">
            <div class='alert alert-danger mt-2 d-none text-danger' id="err_file"></div>
            </div>
            <br/>
            <form id="forms2">
              <div class="wrapper">
                <div class="box a">
                  <div>
                    <div>
                      <input class="source" style="width: 15px;
                      height: 12px;
                      float: left;" type="checkbox" name="checkbox2[]" value="emboss" />
                      <label for="wb" style="  float: left;
                      padding-left: 3px;position: relative;top:-11px" id="somelabel">Emboss</label>
                    </div>
                    <br/>
                    <input class="source" style="width: 15px;
                    height: 12px;position: relative;right:82px;" type="checkbox" name="checkbox2[]" value="hotstamp" />
                    <label for="wb" style="position: relative;right:-17px;top:-24px" id="somelabel">Hotstamp</label>
                    <input class="source" style="width: 15px;top:-17px;
                    height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox2[]" value="uv varnish" />
                    <label for="wb" style="position: relative;right:-20px;top:-38px" id="somelabel">UV varnish</label>
                    <input class="source" style="width: 15px;top:-38px;
                    height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox2[]" value="waterbase" />
                    <label for="wb" style="position: relative;right:-20px;top:-59px" id="somelabel">waterbase</label>
                    <input class="source" style="width: 15px;top:-52px;
                    height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox2[]" value="deboss" />
                    <label for="wb" style="position: relative;right:-20px;top:-75px" id="somelabel">Deboss</label>
                  </div>
                </div>
                <div class="box b">
                  <textarea id="w3review2" name="w3review2" rows="8" cols="35" style="background-color: rgb(118, 117, 117);color:rgb(198, 211, 76);">https://youlink.upload.in
                    </textarea>
                </div>
                {{-- <div class="box c">Area send file unknown</div> --}}
              </div>

              <a href="#hide1" id="btnsaVe2" style="
                width: 56px;
                height: 35px;
                border-radius: 30px;
                font-size: 12px;
                padding:8px;
                color: #fff;
                text-shadow: 0 1px 0 #666;
                text-align: center;
                text-decoration: none;
                box-shadow: 1px 1px 2px #000;
                background: #168f61;
                opacity: .95;
                margin-right: 0;
                float: left;
                margin-bottom: 25px;" class="btnSave2">Save</a>
                <a href="#hide1" id="btnupDate" style="
                width: 56px;
                height: 35px;
                border-radius: 30px;
                font-size: 12px;
                padding:8px;
                color: #fff;
                text-shadow: 0 1px 0 #666;
                text-align: center;
                text-decoration: none;
                box-shadow: 1px 1px 2px #000;
                background: #168f61;
                opacity: .95;
                margin-right: 0;
                float: left;
                margin-bottom: 25px;" class="btnupDate2">Update</a>
                <input type="text" style="display: none" id="stateIdOne2">
            </form>
            <span id="OrdersTwo" style="
            width: 87px;
            cursor: pointer;
            height: 35px;
            border-radius: 30px;
            font-size: 12px;
            padding:8px;
            color: #fff;
            text-shadow: 0 1px 0 #666;
            text-align: center;
            text-decoration: none;
            box-shadow: 1px 1px 2px #000;
            background: #b1ac15;
            opacity: .95;
            margin-right: -20;
            float: left;
            margin-bottom: 25px;" class="Orders2">Order Now</span>
          </div>
          <div style="padding:96px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        </span>
      </div>

      {{-- dev component material r2 --}}
    {{-- <a href="#hidemat" class="hidemat" id="hidemat">+</a>
    <a href="#showmat" class="showmat" id="showmat">-</a> --}}
    <div class="listb">
      <fieldset class="majorpoints-material-rd-2">
      <legend class="majorpointslegend">MATERIAL :</legend>
      <div class="hidersmat-2" style="display:none;" >
   
      </div>
          <div id="sample_cetakan2" style="">
            <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
             </label>
            <div class="col-md-6 col-sm-6 col-xs-5">
            <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                Component</label>
            <div class="product-quantitys">
                <input style="    border: 2px solid #ccd4ed;
              border-radius: 5px;
              background: #fcfcfc;
              box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
              color: #474e66;
              height: 40px;
              text-align: right;
              width: 212px;
              -moz-appearance: textfield;
              -webkit-appearance: none;
              appearance: none;"  type="text" id="CMP2" name="CMP2" placeholder="Input your component type"></div>
              <div>&nbsp;</div> 
              <div class="form-control">
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Paper type</label>
              <div class="product-quantitys">
                  <input style="border: 2px solid #ccd4ed;
                border-radius: 5px;
                background: #fcfcfc;
                box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                color: #474e66;
                height: 40px;
                text-align: right;
                width: 212px;
                -moz-appearance: textfield;
                -webkit-appearance: none;
                appearance: none;"  type="text" id="Czjenis_kertas2" name="Czjenis_kertas2" placeholder="Input your paper type"></div>
              <div>&nbsp;</div> 
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">GSM</label>
                <div class="product-quantitys">
                  <input style="border: 2px solid #ccd4ed;
                  border-radius: 5px;
                  background: #fcfcfc;
                  box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                  color: #474e66;
                  height: 40px;
                  text-align: right;
                  width: 212px;
                  -moz-appearance: textfield;
                  -webkit-appearance: none;
                  appearance: none;" id="Czjenis_kertas_gsm2" name="Czjenis_kertas_gsm2" placeholder="Input your paper type GSM" type="number" min="1" max="8">
                  <span class="tooltip">fill in GSM according to your needs.</span></div>
                <div>&nbsp;</div> 
              </div>
            <div class="wrapper">
                <div class="box a">
                  {{-- <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #4e8a79;
                  background: #6a4270;
                  background: -webkit-gradient(linear, left top, left bottom, from(#19852d), to(#6a4270));
                  background: -webkit-linear-gradient(top, #19852d, #6a4270);
                  background: -moz-linear-gradient(top, #19852d, #6a4270);
                  background: -ms-linear-gradient(top, #19852d, #6a4270);
                  background: -o-linear-gradient(top, #19852d, #6a4270);
                  -webkit-border-radius: 18px;
                  -moz-border-radius: 18px;
                  border-radius: 18px;
                  -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
                  -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
                  box-shadow: rgba(0,0,0,1) 0 1px 0;
                  text-shadow: rgba(0,0,0,.4) 0 1px 0;
                  color: #98f01d;
                  font-size: 17px;
                  font-family: Georgia, Serif;
                  text-decoration: none;
                  vertical-align: middle;
                  padding:3.5px 17px" onclick="document.getElementById('file').click()" id="uploads">Upload</button>
                   --}}
                </div>
                  <label class="form-control">
                    {{-- <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #4e8a79;
                    background: #6a4270;
                    background: -webkit-gradient(linear, left top, left bottom, from(#89fd04), to(#6a4270));
                    background: -webkit-linear-gradient(top, #147eb8, #6a4270);
                    background: -moz-linear-gradient(top, #253235, #6a4270);
                    background: -ms-linear-gradient(top, #9e082e, #6a4270);
                    background: -o-linear-gradient(top, #2d4944, #6a4270);
                    -webkit-border-radius: 18px;
                    -moz-border-radius: 18px;
                    border-radius: 18px;
                    -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
                    -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
                    box-shadow: rgb(90, 84, 84) 0 1px 0;
                    text-shadow: rgba(0,0,0,.4) 0 1px 0;
                    color: #a21515;
                    font-size: 17px;
                    font-family: Georgia, Serif;
                    text-decoration: none;
                    vertical-align: middle;
                    padding:3.5px 17px" id="resetsCM">reset</button>   --}}
                  </label>

              </div>
              {{-- <input type='file' id="file" name='file' accept=".jpg, .jpeg, .png" class="form-control"> --}}
           
              &nbsp;
          
              <input type='file' id="file" name="file[]" style="display:none" multiple="">
              <!-- Error -->
              <div class='alert alert-danger mt-2 d-none text-danger' id="err_file"></div>
  
            </div>
          </div>
      </span>
    </div>
    {{-- end dev material --}}

     {{-- dev component size 2--}}
    {{-- <a href="#hidemat" class="hidemat" id="hidemat">+</a>
    <a href="#showmat" class="showmat" id="showmat">-</a> --}}
    <div class="listb">
      <fieldset class="majorpoints-material-rd-2">
      <legend class="majorpointslegend">SIZE :</legend>
      <div class="hidersmat-2" style="display:none;">
      </div>
          <div id="sample_cetakan2" style="">
            <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
             </label>
            <div class="col-md-6 col-sm-6 col-xs-5">
              <div class="form-control">
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Size</label>
              <div class="product-quantitys">
                  <input style="    border: 2px solid #ccd4ed;
                border-radius: 5px;
                background: #fcfcfc;
                box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                color: #474e66;
                height: 40px;
                text-align: right;
                width: 212px;
                -moz-appearance: textfield;
                -webkit-appearance: none;
                appearance: none;"  type="text" id="Csize2" name="Csize2" placeholder="Input your custom size">
                 <span>'INCH</span>
                </div>
              <div>&nbsp;</div> 
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Material</label>
              <div class="product-quantitys">
                  <input style="border: 2px solid #ccd4ed;
                border-radius: 5px;
                background: #fcfcfc;
                box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                color: #474e66;
                height: 40px;
                text-align: right;
                width: 212px;
                -moz-appearance: textfield;
                -webkit-appearance: none;
                appearance: none;"  type="text" id="Czmaterial2" name="Czmaterial2" placeholder="Input your material type">
                 <span>TYPE</span>
                </div>
              <div>&nbsp;</div> 
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Quantity</label>
                <div class="product-quantitys">
                  <input style="    border: 2px solid #ccd4ed;
                  border-radius: 5px;
                  background: #fcfcfc;
                  box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                  color: #474e66;
                  height: 40px;
                  text-align: right;
                  width: 212px;
                  -moz-appearance: textfield;
                  -webkit-appearance: none;
                  appearance: none;" id="Czquantity2" name="Czquantity2" placeholder="Input your paper type GSM" type="number" min="1" max="8">
                  <span class="tooltip">fill in Quantity according to your needs.</span></div>
                
                </div>
                <br />
              <div style="padding:1px">&nbsp;</div>
              <div class="wrapper">
                  <label class="form-control">
                  </label>
              </div>
              {{-- <input type='file' id="file" name='file' accept=".jpg, .jpeg, .png" class="form-control"> --}}           
              <input type='file' id="file" name="file[]" style="display:none" multiple="">
              <!-- Error -->
              <div class='alert alert-danger mt-2 d-none text-danger' id="err_file"></div>
            </div>
          </div>
      </span>
    </div>
    {{-- end dev size --}}

    </div>
  </div>
  
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

  .boxCzForSize {
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

  .boxCzForSize:hover {
    background-color: #e6f9f5;
    color: #D3C630;
    outline: none;
    box-shadow: 3px 0 0 0 #9be8d8 inset;
  }
    </style>
{{-- 
<div id="boxCUSTOM" class="boxCz p-dap selectedBoxCz">
  Custom
</div> --}}



{{-- <div id="boxCUSTOMforSize" class="boxCzForSize">
  Custom
</div>
   --}}
   
  {{-- development dynamic component custom size r3 --}}
  <div id="mjrsr3" style="color: #8189a7;font-size: 13px;top:170px;right:371px;line-width:3px;width: 84%;box-sizing:border-box;">
  {{-- <div id="mjrsr3" style="color: #8189a7;font-size: 13px;top:-435px;right:-431px;line-width:3px;width: 39%;box-sizing:border-box;"> --}}
    <fieldset class="majorpointsr3">
    <legend class="majorpointslegend">Custom size :</legend>
    <div class="hidersr3" style="display:none;" >
    </div>
    <label for="dforLabelComponent" id="dforLabelComponent3" class="text-center">The file name will appear below:</label>
    <input class="form-control" type="text" style="display: none" name="cp3" id="cp3" value="cp3" />
    <pre id="filen3" style="display:none;"></pre>
  <div class='FAQf3'>
      <a href="#hide1vb3" class="hidebr3" id="hide1vb3">+</a>
      <a href="#show1vb3" class="showbr3" id="show1vb3">-</a>
      
      <div class="listbr3">
        <fieldset class="majorpoints-design-3">
        <legend class="majorpointslegend">DESIGN :</legend>
        <div class="hidersd-3" style="display:none;" >
        </div>
      <span class="dsb" style="color: #8189a7;font-size: 18px;
      font-weight: normal;line-height: 1.75;">
        <div id="filepreview3" style="position:relative;top:-360px;right:86px;" class="displaynone" > 
        </div>
          <div id="sample_cetakan3" style="">
            <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
             </label>
            <div class="col-md-6 col-sm-6 col-xs-5">
              <div class="wrapper">
                <div class="box a">
                  <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #cbce11;
                  background: #797979;
                  -webkit-border-radius: 23px;
                  -moz-border-radius: 23px;
                  border-radius: 23px;
                  font-size: 17px;
                  font-family: Georgia, Serif;
                  text-decoration: none;
                  vertical-align: middle;
                  padding:3.5px 17px" onclick="document.getElementById('files3').click()" id="uploads3">Upload</button>
                </div>
                  <label class="form-control">
                    {{-- <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #cbce11;
                    background: #797979;
                    -webkit-border-radius: 23px;
                    -moz-border-radius: 23px;
                    border-radius: 23px;
                    font-size: 17px;
                    font-family: Georgia, Serif;
                    text-decoration: none;
                    vertical-align: middle;
                    padding:3.5px 17px" id="resetsCM3">reset</button>   --}}
                  </label>
                <div class="box b">
                  {{-- <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #cbce11;
                  background: #797979;
                  -webkit-border-radius: 23px;
                  -moz-border-radius: 23px;
                  border-radius: 23px;
                  font-size: 17px;
                  font-family: Georgia, Serif;
                  text-decoration: none;
                  vertical-align: middle;
                  padding:3.5px 17px" id="textlink3">Link file</button> --}}
                </div>

              </div>
            
            <input type='file' id="files3" name="files3[]" style="display:none" multiple="">
            <div class='alert alert-danger mt-2 d-none text-danger' id="err_file"></div>
  
            </div>
            <br/>
            <form id="forms3">
              <div class="wrapper">
                <div class="box a">
                  <div>
                    <div>     
                      <input class="source" style="width: 15px;
                      height: 12px;
                      float: left;" type="checkbox" name="checkbox3[]" value="emboss" />
                      <label for="wb" style="  float: left;
                      padding-left: 3px;position: relative;top:-11px" id="somelabel">Emboss</label>
                    </div>
                    <br/>
                    <input class="source" style="width: 15px;
                    height: 12px;position: relative;right:82px;" type="checkbox" name="checkbox3[]" value="hotstamp" />
                    <label for="wb" style="position: relative;right:-17px;top:-24px" id="somelabel">Hotstamp</label>
                    <input class="source" style="width: 15px;top:-17px;
                    height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox3[]" value="uv varnish" />
                    <label for="wb" style="position: relative;right:-20px;top:-38px" id="somelabel">UV varnish</label>
                    <input class="source" style="width: 15px;top:-38px;
                    height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox3[]" value="waterbase" />
                    <label for="wb" style="position: relative;right:-20px;top:-59px" id="somelabel">waterbase</label>
                    <input class="source" style="width: 15px;top:-52px;
                    height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox3[]" value="deboss" />
                    <label for="wb" style="position: relative;right:-20px;top:-75px" id="somelabel">Deboss</label>
                  </div>
                </div>
                <div class="box b">
                  <textarea id="w3review3" name="w3review3" rows="8" cols="35" style="background-color: rgb(118, 117, 117);color:rgb(198, 211, 76);">https://youlink.upload.in
                    </textarea>
                </div>
                {{-- <div class="box c">Area send file unknown</div> --}}
              </div>

              <a href="#hide1" id="btnsaVe3" style="
              width: 56px;
              height: 35px;
              border-radius: 30px;
              font-size: 12px;
              padding:8px;
              color: #fff;
              text-shadow: 0 1px 0 #666;
              text-align: center;
              text-decoration: none;
              box-shadow: 1px 1px 2px #000;
              background: #168f61;
              opacity: .95;
              margin-right: 0;
              float: left;
              margin-bottom: 25px;" class="btnSave3">Save</a>
              <a href="#hide1" id="btnupDate" style="
              width: 56px;
              height: 35px;
              border-radius: 30px;
              font-size: 12px;
              padding:8px;
              color: #fff;
              text-shadow: 0 1px 0 #666;
              text-align: center;
              text-decoration: none;
              box-shadow: 1px 1px 2px #000;
              background: #168f61;
              opacity: .95;
              margin-right: 0;
              float: left;
              margin-bottom: 25px;" class="btnupDate3">Update</a>
              <input type="text" style="display: none" id="stateIdOne3">
            </form>
            <span id="OrdersThree" style="
            width: 87px;
            cursor: pointer;
            height: 35px;
            border-radius: 30px;
            font-size: 12px;
            padding:8px;
            color: #fff;
            text-shadow: 0 1px 0 #666;
            text-align: center;
            text-decoration: none;
            box-shadow: 1px 1px 2px #000;
            background: #b1ac15;
            opacity: .95;
            margin-right: -20;
            float: left;
            margin-bottom: 25px;" class="Orders3">Order Now</span>
          </div>
          <div style="padding:86px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        </span>
      </div>
    {{-- dev component material r3 --}}
    {{-- <a href="#hidemat" class="hidemat" id="hidemat">+</a>
    <a href="#showmat" class="showmat" id="showmat">-</a> --}}
    <div class="listbr3">
      <fieldset class="majorpoints-material-rd-3">
      <legend class="majorpointslegend">MATERIAL :</legend>
      <div class="hidersmat-3" style="display:none;" >
   
      </div>
          <div id="sample_cetakan2" style="">
            <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
             </label>
            <div class="col-md-6 col-sm-6 col-xs-5">
              <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                Component</label>
            <div class="product-quantitys">
                <input style="    border: 2px solid #ccd4ed;
              border-radius: 5px;
              background: #fcfcfc;
              box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
              color: #474e66;
              height: 40px;
              text-align: right;
              width: 212px;
              -moz-appearance: textfield;
              -webkit-appearance: none;
              appearance: none;"  type="text" id="CMP3" name="CMP3" placeholder="Input your component type"></div>
              <div>&nbsp;</div> 
              <div class="form-control">
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Paper type</label>
              <div class="product-quantitys">
                  <input style="    border: 2px solid #ccd4ed;
                border-radius: 5px;
                background: #fcfcfc;
                box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                color: #474e66;
                height: 40px;
                text-align: right;
                width: 212px;
                -moz-appearance: textfield;
                -webkit-appearance: none;
                appearance: none;"  type="text" id="Czjenis_kertas3" name="Czjenis_kertas3" placeholder="Input your paper type"></div>
              <div>&nbsp;</div> 
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  GSM</label>
                <div class="product-quantitys">
                  <input style="border: 2px solid #ccd4ed;
                  border-radius: 5px;
                  background: #fcfcfc;
                  box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                  color: #474e66;
                  height: 40px;
                  text-align: right;
                  width: 212px;
                  -moz-appearance: textfield;
                  -webkit-appearance: none;
                  appearance: none;" id="Czjenis_kertas_gsm3" name="Czjenis_kertas_gsm3" placeholder="Input your paper type GSM" type="number" min="1" max="8">
                  <span class="tooltip">fill in GSM according to your needs.</span></div>
                </div>
              <div class="wrapper">
                <div class="box a">
                </div>
                  <label class="form-control">
                  </label>

              </div>
            </div>
          </div>
      </span>
    </div>
    {{-- end dev material 3 --}}


      {{-- dev component size 3 --}}
    {{-- <a href="#hidemat" class="hidemat" id="hidemat">+</a>
    <a href="#showmat" class="showmat" id="showmat">-</a> --}}
    <div class="listbr3">
      <fieldset class="majorpoints-material-rd-3">
      <legend class="majorpointslegend">SIZE :</legend>
      <div class="hidersmat-3" style="display:none;">
   
      </div>
          <div id="sample_cetakan" style="">
            <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
             </label>
            <div class="col-md-6 col-sm-6 col-xs-5">
              <div class="form-control">
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Size</label>
              <div class="product-quantitys">
                  <input style="    border: 2px solid #ccd4ed;
                border-radius: 5px;
                background: #fcfcfc;
                box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                color: #474e66;
                height: 40px;
                text-align: right;
                width: 212px;
                -moz-appearance: textfield;
                -webkit-appearance: none;
                appearance: none;"  type="text" id="Csize3" name="Csize3" placeholder="Input your component type">
                 <span>'INCH</span>
                </div>
              <div>&nbsp;</div> 
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Material</label>
              <div class="product-quantitys">
                  <input style="    border: 2px solid #ccd4ed;
                border-radius: 5px;
                background: #fcfcfc;
                box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                color: #474e66;
                height: 40px;
                text-align: right;
                width: 212px;
                -moz-appearance: textfield;
                -webkit-appearance: none;
                appearance: none;"  type="text" id="Czmaterial3" name="Czmaterial3" placeholder="Input your material type">
                 <span>TYPE</span>
                </div>
              <div>&nbsp;</div> 
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Quantity</label>
                <div class="product-quantitys">
                  <input style="border: 2px solid #ccd4ed;
                  border-radius: 5px;
                  background: #fcfcfc;
                  box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                  color: #474e66;
                  height: 40px;
                  text-align: right;
                  width: 212px;
                  -moz-appearance: textfield;
                  -webkit-appearance: none;
                  appearance: none;" id="Czquantity3" name="Czquantity3" placeholder="Input your paper type GSM" type="number" min="1" max="8">
                  <span class="tooltip">fill in Quantity according to your needs.</span></div>
                </div>
              <div style="padding:2px">&nbsp;</div>
              <div class="wrapper">
                  <label class="form-control">
                  </label>
              </div>
            </div>
          </div>
      </span>
    </div>
    {{-- end dev size 3 --}}
    </div>
  </div>

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
    {{-- development dynamic component custom size r4 --}}
  <div id="mjrsr4" style="color: #8189a7;font-size: 13px;top:170px;right:371px;line-width:3px;width: 84%;box-sizing:border-box;">
    {{-- <div id="mjrsr4" style="color: #8189a7;font-size: 13px;top:-435px;right:-431px;line-width:3px;width: 39%;box-sizing:border-box;"> --}}
      <fieldset class="majorpointsr4">
      <legend class="majorpointslegend">Custom size :</legend>
      <div class="hidersr4" style="display:none;" >
      </div>
    <label for="dforLabelComponent" id="dforLabelComponent4" class="text-center">The file name will appear below:</label>
    <input class="form-control" type="text" style="display: none" name="cp4" id="cp4" value="cp4" />
    <pre id="filen4" style="display:none;"></pre>
    <div class='FAQf4'>
      <a href="#hide1vb4" class="hidebr4" id="hide1vb4">+</a>
      <a href="#show1vb4" class="showbr4" id="show1vb4">-</a>
      <div class="listbr4">
        <fieldset class="majorpoints-design-4">
        <legend class="majorpointslegend">DESIGN :</legend>
        <div class="hidersd-4" style="display:none;" >
        </div>
      <span class="dsb" style="color: #8189a7;font-size: 18px;font-weight: normal;line-height: 1.75;">
          <div id="filepreview4" style="position:relative;top:-360px;right:86px;" class="displaynone" > 
          </div>
            <div id="sample_cetakan4" style="">
              <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
               </label>
              <div class="col-md-6 col-sm-6 col-xs-5">
                <div class="wrapper">
                  <div class="box a">
                    <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #cbce11;
                    background: #797979;
                    -webkit-border-radius: 23px;
                    -moz-border-radius: 23px;
                    border-radius: 23px;
                    font-size: 17px;
                    font-family: Georgia, Serif;
                    text-decoration: none;
                    vertical-align: middle;
                    padding:3.5px 17px" onclick="document.getElementById('files4').click()" id="uploads4">Upload</button>
                  </div>
                    <label class="form-control">
                      {{-- <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #cbce11;
                      background: #797979;
                      -webkit-border-radius: 23px;
                      -moz-border-radius: 23px;
                      border-radius: 23px;
                      font-size: 17px;
                      font-family: Georgia, Serif;
                      text-decoration: none;
                      vertical-align: middle;
                      padding:3.5px 17px" id="resetsCM4">reset</button>   --}}
                    </label>
                  <div class="box b">
                    {{-- <button style="display:block;width:120px; height:30px;font-family:Quicksand;  border-top: 1px solid #cbce11;
                    background: #797979;
                    -webkit-border-radius: 23px;
                    -moz-border-radius: 23px;
                    border-radius: 23px;
                    font-size: 17px;
                    font-family: Georgia, Serif;
                    text-decoration: none;
                    vertical-align: middle;
                    padding:3.5px 17px" id="textlink4">Link file</button> --}}
                  </div>
                </div>
                &nbsp;
              &nbsp;
              <input type='file' id="files4" name="files4[]" style="display:none" multiple="">
              <div class='alert alert-danger mt-2 d-none text-danger' id="err_file"></div>
              </div>
              <br/>
              <form id="forms4">
                <div class="wrapper">
                  <div class="box a">
                    <div>
                      <div>     
                        <input class="source" style="width: 15px;
                        height: 12px;
                        float: left;" type="checkbox" name="checkbox4[]" value="emboss" />
                        <label for="wb" style="  float: left;padding-left: 3px;position: relative;top:-11px" id="somelabel">Emboss</label>
                      </div>
                      <br/>
                      <input class="source" style="width: 15px;
                      height: 12px;position: relative;right:82px;" type="checkbox" name="checkbox4[]" value="hotstamp" />
                      <label for="wb" style="position: relative;right:-17px;top:-24px" id="somelabel">Hotstamp</label>
                      <input class="source" style="width: 15px;top:-17px;
                      height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox4[]" value="uv varnish" />
                      <label for="wb" style="position: relative;right:-20px;top:-38px" id="somelabel">UV varnish</label>
                      <input class="source" style="width: 15px;top:-38px;
                      height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox4[]" value="waterbase" />
                      <label for="wb" style="position: relative;right:-20px;top:-59px" id="somelabel">waterbase</label>
                      <input class="source" style="width: 15px;top:-52px;
                      height: 12px;position: relative;right:-1px;" type="checkbox" name="checkbox4[]" value="deboss" />
                      <label for="wb" style="position: relative;right:-20px;top:-75px" id="somelabel">Deboss</label>
                    </div>
                  </div>
                  <div class="box b">
                    <textarea id="w3review4" name="w3review4" rows="8" cols="35" style="background-color: rgb(118, 117, 117);color:rgb(198, 211, 76);">https://youlink.upload.in
                      </textarea>
                  </div>
                  {{-- <div class="box c">Area send file unknown</div> --}}
                </div>
                <a href="#hide1" id="btnsaVe4" style="
                width: 56px;
                height: 35px;
                border-radius: 30px;
                font-size: 12px;
                padding:8px;
                color: #fff;
                text-shadow: 0 1px 0 #666;
                text-align: center;
                text-decoration: none;
                box-shadow: 1px 1px 2px #000;
                background: #168f61;
                opacity: .95;
                margin-right: 0;
                float: left;
                margin-bottom: 25px;" class="btnSave4">Save</a>
                 <a href="#hide1" id="btnupDate4" style="
                 width: 56px;
                 height: 35px;
                 border-radius: 30px;
                 font-size: 12px;
                 padding:8px;
                 color: #fff;
                 text-shadow: 0 1px 0 #666;
                 text-align: center;
                 text-decoration: none;
                 box-shadow: 1px 1px 2px #000;
                 background: #168f61;
                 opacity: .95;
                 margin-right: 0;
                 float: left;
                 margin-bottom: 25px;" class="btnupDate4">Update</a>
              <input type="text" style="display: none" id="stateIdOne4">
              </form>
              <span id="OrdersFour" style="
              width: 87px;
              cursor: pointer;
              height: 35px;
              border-radius: 30px;
              font-size: 12px;
              padding:8px;
              color: #fff;
              text-shadow: 0 1px 0 #666;
              text-align: center;
              text-decoration: none;
              box-shadow: 1px 1px 2px #000;
              background: #b1ac15;
              opacity: .95;
              margin-right: -20;
              float: left;
              margin-bottom: 25px;" class="Orders4">Order Now</span>
            </div>
          <div style="padding:85px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          </span>
        </div>
         {{-- dev component material r4 --}}
    {{-- <a href="#hidemat" class="hidemat" id="hidemat">+</a>
    <a href="#showmat" class="showmat" id="showmat">-</a> --}}
    <div class="listbr4">
      <fieldset class="majorpoints-material-rd-4">
      <legend class="majorpointslegend">MATERIAL :</legend>
      <div class="hidersmat-4" style="display:none;" >
      </div>
          <div id="sample_cetakan4" style="">
            <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
             </label>
            <div class="col-md-6 col-sm-6 col-xs-5">
              <div class="form-control">
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Component</label>
              <div class="product-quantitys">
                <input style="    border: 2px solid #ccd4ed;
                border-radius: 5px;
                background: #fcfcfc;
                box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                color: #474e66;
                height: 40px;
                text-align: right;
                width: 212px;
                -moz-appearance: textfield;
                -webkit-appearance: none;
                appearance: none;"  type="text" id="CMP4" name="CMP4" placeholder="Input your component type"></div>
              <div>&nbsp;</div> 
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Paper type</label>
              <div class="product-quantitys">
                  <input style="border: 2px solid #ccd4ed;
                border-radius: 5px;
                background: #fcfcfc;
                box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                color: #474e66;
                height: 40px;
                text-align: right;
                width: 212px;
                -moz-appearance: textfield;
                -webkit-appearance: none;
                appearance: none;"  type="text" id="Czjenis_kertas4" name="Czjenis_kertas4" placeholder="Input your paper type"></div>
              <div>&nbsp;</div> 
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  GSM</label>
                <div class="product-quantitys">
                  <input style="    border: 2px solid #ccd4ed;
                  border-radius: 5px;
                  background: #fcfcfc;
                  box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                  color: #474e66;
                  height: 40px;
                  text-align: right;
                  width: 212px;
                  -moz-appearance: textfield;
                  -webkit-appearance: none;
                  appearance: none;" id="Czjenis_kertas_gsm4" name="Czjenis_kertas_gsm4" placeholder="Input your paper type GSM" type="number" min="1" max="8">
                  <span class="tooltip">fill in GSM according to your needs.</span></div>
                </div>
              <div class="wrapper">
                <div class="box a">
                </div>
                  <label class="form-control">
                  </label>
              </div>
            </div>
          </div>
      </span>
    </div>
    {{-- end dev material 4 --}}

     {{-- dev component size 4--}}
    {{-- <a href="#hidemat" class="hidemat" id="hidemat">+</a>
    <a href="#showmat" class="showmat" id="showmat">-</a> --}}
    <div class="listbr4">
      <fieldset class="majorpoints-material-rd-4">
      <legend class="majorpointslegend">SIZE :</legend>
      <div class="hidersmat-4" style="display:none;">
   
      </div>
          <div id="sample_cetakan4" style="">
            <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
             </label>
            <div class="col-md-6 col-sm-6 col-xs-5">
              <div class="form-control">
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Size</label>
              <div class="product-quantitys">
                  <input style="    border: 2px solid #ccd4ed;
                border-radius: 5px;
                background: #fcfcfc;
                box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                color: #474e66;
                height: 40px;
                text-align: right;
                width: 212px;
                -moz-appearance: textfield;
                -webkit-appearance: none;
                appearance: none;"  type="text" id="Csize4" name="Csize4" placeholder="Input your custom size">
                <span>'INCH</span>  
              </div>
              <div>&nbsp;</div> 
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Material</label>
              <div class="product-quantitys">
                <input style="border: 2px solid #ccd4ed;
                border-radius: 5px;
                background: #fcfcfc;
                box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                color: #474e66;
                height: 40px;
                text-align: right;
                width: 212px;
                -moz-appearance: textfield;
                -webkit-appearance: none;
                appearance: none;"  type="text" id="Czmaterial4" name="Czmaterial4" placeholder="Input your material type">
                <span>TYPE</span>  
              </div>
              <div>&nbsp;</div> 
                <label class="control-label col-md-3 col-sm-3 col-xs-5" for="name">
                  Quantity</label>
                <div class="product-quantitys">
                  <input style="border: 2px solid #ccd4ed;
                  border-radius: 5px;
                  background: #fcfcfc;
                  box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
                  color: #474e66;
                  height: 40px;
                  text-align: right;
                  width: 212px;
                  -moz-appearance: textfield;
                  -webkit-appearance: none;
                  appearance: none;" id="Czquantity4" name="Czquantity4" placeholder="Input your paper type GSM" type="number" min="1" max="8">
                  <span class="tooltip">fill in Quantity according to your needs.</span></div>
                </div>
                <br />
              <div style="padding:8px">&nbsp;</div>
              <div class="wrapper">
                  <label class="form-control">
                  </label>
              </div>
              {{-- <input type='file' id="file" name='file' accept=".jpg, .jpeg, .png" class="form-control"> --}}           
              <input type='file' id="file" name="file[]" style="display:none" multiple="">
              <!-- Error -->
              <div class='alert alert-danger mt-2 d-none text-danger' id="err_file"></div>
            </div>
          </div>
      </span>
    </div>
    {{-- end dev size 4--}}
      </div>
    </div>
</div>
<div id="tools-component" style="border-width: 5px;color: #808080;
font-weight: 700;
min-height: 50%;
min-width: 50%;">
  <div class="jk-component" style="align-items: center;
background-color: #f9f9f9;
border-bottom: 2px solid #f4f4f4;
display: flex;
width:280px;
font-size: 14px;
justify-content: space-between;position:relative;top:-437px;right:-976px;
min-height: 10px;"><p id="label_component" style="font-weight:bold;justify-content: right;">&nbsp;&nbsp;Component</p>
<div class="product-quantitys"><input style="    border: 2px solid #ccd4ed;
  border-radius: 5px;
  background: #fcfcfc;
  box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
  color: #474e66;
  height: 40px;
  text-align: right;
  width: 182px;
  -moz-appearance: textfield;
  -webkit-appearance: none;
  appearance: none;"  type="text" id="components" name="components" placeholder="Required"></div></div>
</div>
      {{-- end r2 --}}
      {{-- end design  --}}
    <div id="tools-jenis-kertas" style="border-width: 5px;color: #808080;
    font-weight: 700;
    min-height: 50%;
    min-width: 50%;">
      <div class="jk-m" style="align-items: center;
    background-color: #f9f9f9;
    border-bottom: 2px solid #f4f4f4;
    display: flex;
    width:280px;
    font-size: 14px;
    justify-content: space-between;position:relative;top:-369px;right:-976px;
    min-height: 10px;"><p id="label_papertype" style="font-weight:bold;justify-content: right;">&nbsp;&nbsp;Paper Type</p>
    <div class="product-quantitys"><input style="    border: 2px solid #ccd4ed;
      border-radius: 5px;
      background: #fcfcfc;
      box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
      color: #474e66;
      height: 40px;
      text-align: right;
      width: 182px;
      -moz-appearance: textfield;
      -webkit-appearance: none;
      appearance: none;"  type="text" id="jenis_kertas" name="jenis_kertas" placeholder="Required"></div></div>
    </div>
    <div id="tools-jenis-gsm" style="    border-width: 5px;color: #808080;
    font-weight: 700;
    min-height: 50%;
    min-width: 50%;">
      <div class="jk-l" style="align-items: center;
    background-color: #f9f9f9;
    border-bottom: 2px solid #f4f4f4;
    display: flex;
    width:280px;
    font-size: 14px;
    justify-content: space-between;position:relative;top:-362px;right:-976px;
    min-height: 60px;"><p style="font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GSM</p>
    <div class="product-quantitys">
      <input style="    border: 2px solid #ccd4ed;
      border-radius: 5px;
      background: #fcfcfc;
      box-shadow: inset 2px 2px 6px 0 rgba(71, 78, 102, 0.1);
      color: #474e66;
      height: 40px;
      text-align: right;
      width: 182px;
      -moz-appearance: textfield;
      -webkit-appearance: none;
      appearance: none;" id="jenis_kertas_gsm" name="jenis_kertas_gsm" placeholder="Required" type="number" min="1" max="8">
      <span class="tooltip">fill in GSM according to your needs.</span></div></div>
    </div>


    {{-- <span id="OrdersOneReady" style="
    width: 87px;
    cursor: pointer;
    height: 35px;
    border-radius: 30px;
    font-size: 12px;
    padding:8px;
    color: #fff;
    text-shadow: 0 1px 0 #666;
    text-align: center;
    text-decoration: none;
    box-shadow: 1px 1px 2px #000;
    background: #b1ac15;
    opacity: .95;
    margin-right: -20;
    float: left;
    margin-bottom: 25px;" class="OrdersReady">Order Now</span> --}}
  <button class="btn" id="OrderReady" style="align-items: center;
   background-color: rgb(211, 198, 48); color: rgb(249, 249, 249); display: none;
    height: auto; top: -282px; right: -976px; position: relative; justify-content: center;
     padding: 20px; width: 20.9%;">Order Now</button>
    
    <style>

        input[type="checkbox"] {
        /* Add if not using autoprefixer */
        -webkit-appearance: none;
        /* Remove most all native input styles */
        appearance: none;
        /* For iOS < 15 */
        background-color: var(--form-background);
        /* Not removed via appearance */
        margin: 0;

        font: inherit;
        color: currentColor;
        width: 1.15em;
        height: 1.15em;
        border: 0.15em solid currentColor;
        border-radius: 0.15em;
        transform: translateY(-0.075em);

        display: grid;
        place-content: center;
      }

      input[type="checkbox"]::before {
        content: "";
        width: 0.65em;
        height: 0.65em;
        clip-path: polygon(14% 44%, 0 65%, 50% 100%, 100% 16%, 80% 0%, 43% 62%);
        transform: scale(0);
        transform-origin: bottom left;
        transition: 120ms transform ease-in-out;
        box-shadow: inset 1em 1em var(--form-control-color);
        /* Windows High Contrast Mode */
        background-color: CanvasText;
      }

      input[type="checkbox"]:checked::before {
        transform: scale(1);
      }

      input[type="checkbox"]:focus {
        outline: max(2px, 0.15em) solid currentColor;
        outline-offset: max(2px, 0.15em);
      }

    </style>
@livewireScripts
<script src="https://assets.packlane.com/js/fabric.min-9e88ca1a868c7cb8e24d4f59ac9fd84f.js?vsn=d"></script>
<link crossorigin="" href="https://assets.packlane.com/css/DatePicker-a60ceb80e6927a490b32dc2855f95410.css?vsn=d" rel="stylesheet"></link>
<link crossorigin="" href="https://assets.packlane.com/css/Calendar-470cf1473a418738a1b4a7221f586129.css?vsn=d" rel="stylesheet"></link></main></div>
<script src="https://assets.packlane.com/js/packlane_web.box_designer.new-9c8634f1dd18c5697a9e7a0b61bcf81d.js?vsn=d"></script><link crossorigin="" href="https://assets.packlane.com/css/packlane_web.box_designer.new-2a99a0cb9694807ecc5f4ecc2c24be07.css?vsn=d" rel="stylesheet"></link>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>

  #fs .fs-footer:before {
    
  }

</style>
<button class="btn" id="sendingKM" style="align-items: center;
  background-color: #D3C630;
  color: #f9f9f9;
  display: flex;
  height: auto;
  top:-306px;
  right:-976px;
  position:relative;
  justify-content: center;  
  padding: 20px;
  width: 20.9%;">Order Now</button>
  <span class="tool-_disclaimer" style="color: #8189a7;font-size: 13px;
  font-weight: normal;line-height: 3;
  position:relative;top:-225px;right:-928px;
  padding: 4px;width: 20%;"></span><font size="2">
 
 <footer id="footer">
   <div class="container">
     <div style="height:222px;position: relative; left : -69px;">
       <div class="footer-ribbon">
         <span>Get in Touch</span>
       </div>
       
       <div class="col-md-12">
         <div class="contact-details">
           <h4>@lang('footer.ctus')</h4>
           <ul class="contact">
             <li><p><i class="fa fa-map-marker"></i> <strong>@lang('footer.address'):</strong> <span id="designbx_address_footer"></p></li>
             <li><p><i class="fa fa-phone"></i> <strong>@lang('footer.phone'):</strong> <span id="designbx_phone_footer"></p></li>
             <li><p><i class="fa fa-fax"></i> <strong>Fax:</strong> <span id="designbx_fax_footer"></p></li>
             <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:printing@krisanthium.com"> <span id="designbx_email_footer"></a></p></li>
             <li><p><i class="fa fa-external-link-square"></i> <strong>URL:</strong> <a href="{{ route('dashboard') }}"> <span id="designbx_url_footer"></a></p></li>
           </ul>
         </div>
       </div>
     </div>
   </div>
    <div class="footer-copyright col-md-12">
					<div class="container">
						<div style="position:relative;left: -63px;padding-bottom: 0">
							<div class="col-md-1">
                  <a href="{{ route('dashboard') }}" class="logo">
									<!--<img alt="Porto Website Template" class="img-responsive" src="img/logo-footer.png">-->
                  <img alt="KOP" class="img-responsive" width="58px" height="67px" src="{{ asset('KOP/logoKOPf.jpg') }}">
								</a>
							</div>
							<div class="col-md-7" style="position: relative; top:-55px;right:-95px">
                <p>© Copyright 2021 - 2022. All Rights Reserved.</p>
							</div>
							<div style="position:relative; top:-120px; right:-810px;padding: 9px">
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
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.plugins.min.js"></script>
<script src="{{ asset('js/wdtserver.js')}}"></script>
<script src="{{ asset('js/vendor/pusher-v6.min.js')}}"></script>
<script src="{{ asset('packlane-assets/bundle-apps.js') }}"></script>
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
<script>

function setCookie(cname,cvalue,exdays) {
        var d = new Date();
        d.setTime(d.getTime()+(exdays*24*60*60*1000));
        var expires = "expires="+d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";path=/;" + expires;
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i].trim();
            if (c.indexOf(name)==0) return c.substring(name.length,c.length);
        }
        return "";
    } 

    if (getCookie('dismissed') != '1') {
        var html_node = document.getElementsByTagName('html')[0];
        var div = document.createElement('div');
        div.setAttribute('id', 'slow-notice');

        var slowLoad = window.setTimeout( function() {
            var t1 = document.createTextNode("The website is taking a long time to load.");
            var br = document.createElement('br');
            var t2 = document.createTextNode("You can switch to the ");
            var a = document.createElement('a');
            a.setAttribute('href', 'https://vpn.krisanthium.com:7070/kop/public/products/customer/building-box');
            a.innerHTML = 'Build Your Design';

            var dismiss = document.createElement('span');
            dismiss.innerHTML = '[x] dismiss';
            dismiss.setAttribute('class', 'dismiss');
            dismiss.onclick = function() {
                setCookie('dismissed', '1', 1);
                html_node.removeChild(div);
            }

            var dismiss_container = document.createElement('div');
            dismiss_container.appendChild(dismiss);
            dismiss_container.setAttribute('class', 'dismiss-container');

            div.appendChild(t1);
            div.appendChild(br);
            div.appendChild(t2);
            div.appendChild(a);
            div.appendChild(dismiss_container);

            html_node.appendChild(div);


        }, 100 );

        window.addEventListener( 'load', function() {
            try {
                window.clearTimeout( slowLoad );
                html_node.removeChild(div);
            } catch (e){
                // that's okay.
            }

        });
    }

  
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

wdtLoading.start({
          category: 'profile',
          speed: 2150
      });
      

// $(".lazy").Lazy({
//     beforeLoad: function(element) {
//       $(".boxdesigner").hide()
//       $("#mjrsc1").hide()
//       $("#mv_tp").hide()
//       $(".pdesigner-app").hide()
//     },
//     customLoaderName: function(element) {
//       $(".boxdesigner").hide()
//       $("#mv_tp").hide()
//       $("#mjrsc1").hide()
//       $(".pdesigner-app").hide()
//     },
//     asyncLoader: function(element, response) {
//         setTimeout(function() {
//             response(true);
//         }, 1000);
//     }
// });

      function HandleHackScriptKlaviyoAccounts() {
          return new Promise((resolve) => {
                var _learnq = _learnq || [];
                  _learnq.push(['account', 'pLHCMh']);
                  _learnq.push(['clearIdentity']);
                  (function () {
                  var b = document.createElement('script'); b.type = 'text/javascript'; b.async = true;
                  b.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'a.klaviyo.com/media/js/analytics/analytics.js';
                  var a = document.getElementsByTagName('script')[0]; a.parentNode.insertBefore(b, a);
                  })();

                window.zE||function(t, e, a) {
                  var s = [],
                      c = function () {
                          s.push(arguments)
                      },
                      n = t.createElement(e);
                  n.type = "text/javascript";
                  n.src = "https://static.zdassets.com/ekr/snippet.js?key=" + a;
                  n.setAttribute("charset", "utf-8");
                  n.async = true;
                  c._ = s;
                  c.t = Date.now();
                  c.s = n;
                  window.zE = window.zEmbed = c;
                  t.getElementsByTagName("head")[0].appendChild(n);
                  window.zESettings = {
                      webWidget: {
                        launcher: {
                            chatLabel: {
                              '*': 'Live Support'
                            }
                        },
                        position: {
                            horizontal: 'right',
                            vertical: 'top'
                        }
                      }
                  }
                }
            (document,"script","55a88ba2-f1d5-4762-9825-65dbdcc38989");
            resolve();
          });

        }

    async function SyncDestroyAPIklaviyo() {
      await HandleHackScriptKlaviyoAccounts();
    }

    setTimeout(() => {
      SyncDestroyAPIklaviyo();
    }, 1000);

  $('body').on('keyup','input.quote-request-needed',function(){
  });

      function HandleNavigatorBoxSizing() {
          return new Promise((resolve) => {
            
          $('.majorpointsr2').click(function(){
              $(this).find('.hidersr2').toggle();
          });

          $('.majorpointsr3').click(function(){
              $(this).find('.hidersr3').toggle();
          });

          $('.majorpointsr4').click(function(){
              $(this).find('.hidersr4').toggle();
          });


          $("#tools-jenis-gsm").hide()
          $("#tools-jenis-kertas").hide()
          $(".ds").hide()

          $('.tool-_design').html('Build pack : ')

          $('#w3review').hide()
    
          $('.majorpoints').click(function(){
              $(this).find('.hiders').toggle();
          });

          $('.majorpoints-material-rd-2').click(function(){
              $(this).find('.hidersmat-2').toggle();
          });

          $('.majorpoints-material-rd-3').click(function(){
              $(this).find('.hidersmat-3').toggle();
          });

          $('.majorpoints-material-rd-4').click(function(){
              $(this).find('.hidersmat-4').toggle();
          });

          $('.majorpoints-design').click(function(){
              $(this).find('.hidersd').toggle();
          });

          $('.majorpoints-design-2').click(function(){
              $(this).find('.hidersd-2').toggle();
          });

          $('.majorpoints-design-3').click(function(){
              $(this).find('.hidersd-').toggle();
          });

          $('.majorpoints-material').click(function(){
              $(this).find('.hidersmat').toggle();
          });

          $('#textlink').click(function(){
            $('#uploads').prop('disabled', true)
            $('#uploads').text(' - ')
            $('#w3review').show()
            $('#prvText').hide()
          });

          $('#textlink2').click(function(){
            $('#uploads2').prop('disabled', true)
            $('#uploads2').text(' - ')
            $('#w3review2').show()
          });

          $('#textlink4').click(function(){
            $('#uploads4').prop('disabled', true)
            $('#uploads4').text(' - ')
            $('#w3review4').show()
          });

          $('#textlink3').click(function(){
            $('#uploads3').prop('disabled', true)
            $('#uploads3').text(' - ')
            $('#w3review3').show()
          });

          $('#resetsCM').click(function(){
            $('#uploads').prop('disabled', false)
            $('#uploads').text('Upload')
            $('#w3review').hide()
            $('#remain').show()
          });
          
          $('#resetsCM2').click(function(){
            $('#uploads2').prop('disabled', false)
            $('#uploads2').text('Upload')
            $('#w3review2').hide()
          });

          $('#resetsCM3').click(function(){
            $('#uploads3').prop('disabled', false)
            $('#uploads3').text('Upload')
            $('#w3review3').hide()
          });

          $('#resetsCM4').click(function(){
            $('#uploads4').prop('disabled', false)
            $('#uploads4').text('Upload')
            $('#w3review4').hide()
          });
            resolve();
          });
        }

    async function fnAsyncBOX() {
      await HandleNavigatorBoxSizing();
    }

  
  (function($) {

    fnAsyncBOX();

    // var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
    var match = ['image/jpeg', 'image/png', 'image/jpg'];
    $("#file").change(function()   {
        for(i=0;i<this.files.length;i++){
            var file = this.files[i];
            var fileType = file.type;
			
            if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
                
                Swal.fire({
                      icon: 'error',
                      title: 'Information',
                      text: 'Sorry, only JPG, JPEG, & PNG files are allowed to upload..'
                  })

                $("#file").val('');
                return false;
            }
        }
    });

     $('.btnSaveSingleComponent').click(function(e){
      e.preventDefault()

      var c = $("input[name='checkbox[]']:checked").val();
          if( c == undefined){
              Swal.fire({
                      icon: 'error',
                      title: 'Design not ready.'
                  })
            } 
              else {

                let component1 = $('#cp1').val()
                let qty = $('.product-quantity-input').val()
                let size = $('.size span.value').text()
                let material = $('.material span.value').text()
                let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
                let jenis_kertas = $('input[name=jenis_kertas]').val()
                var formDataDesign = $("#forms").serializeArray();
                var values=[];
                
                let qtyCz = $('#Czquantity').val()
                let sizeCz = $('#Csize').val()
                let cmpOne = $('#CMP1').val()
                let materialCz = $('#Czmaterial').val()
                let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm]').val()
                let jenis_kertasCz = $('input[name=Czjenis_kertas]').val()
                let defComponent = $('input[name=components]').val()

              $('input[name="checkbox[]"]:checked').each(function () {
                values[values.length] = (this.checked ? $(this).val() : "");
              });

              Swal.fire({
                  title: 'Are you sure?',
                  html:
                    'Preview <b>to next orders</b>, <br />' +
                    '<code>'+
                      'Orders: <br />'+
                      size+'<br/>'+
                      material+'<br/>'+
                      qty+'<br/>'+
                      values.join(", ")+'<br/>'+
                    '</code> <br />'+'',
                  icon: 'question',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Order now!',
                  cancelButtonText: 'Not now!'
                }).then((result) => {
                  if (result.isConfirmed) {

                    var designs=[];
                    $('input[name="checkbox[]"]:checked').each(function () {
                      designs[designs.length] = (this.checked ? $(this).val() : "");
                    });

            if(qty == "" || size == "" || material == "" || jenis_kertas_gsm == "" || jenis_kertas == "" || typeof designs == 'undefined' && designs.length == 0) {

                  Swal.fire(
                  'question!',
                  'Paper type still not loaded, make sure all fields are filled.',
                  'error'
                )

              } 
                else {

                var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                    var filesx = $('#filessd')[0].files;
  
                    if(filesx.length > 0){

                    var formData = new FormData();
                    let TotalFiles = $('#filessd')[0].files.length;
                    let files = $('#filessd')[0];
                    let Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;

                   let fLastField = FetchLastComponent().then(function(lastIndex){

                        for (let i = 0; i < TotalFiles; i++) {
                            formData.append('file' + i, files.files[i]);
                            formData.append('ds1', component1);
                            formData.append('_token',CSRF_TOKEN);
                            formData.append('component_one', cmpOne);
                            formData.append('qty', qty);
                            formData.append('defComponent', defComponent);
                            formData.append('size', size);
                            formData.append('material', material);
                            formData.append('jenis_kertas', jenis_kertas);
                            formData.append('jenis_kertas_gsm', jenis_kertas_gsm);
                            formData.append('formDataDesign', Cdesign);
                            formData.append('lastIndex', lastIndex.messageIndex);

                        }


                    formData.append('TotalFiles', TotalFiles);

                      $.ajax({
                        url: "{{route('uploadf')}}",
                        method: 'post',
                        data: formData,
                        contentType: false,
                        processData: false,
                        dataType: 'json',                                                                                                                   
                        success: function(response){

                          $("#stateIdOneSingleComponent").val(response.dataID)

                          if(response.status == false){

                                Swal.fire(
                                        'Information!',
                                        'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                        'error'
                                      )

                              } 
                                else 
                                      {
                                          SendOrdersMKT(response.message, response.messageIndex, qty, size, material, response.data.filename, response.data.PATHS, response.data.GetOriginalName, response.data.GetMimeType, jenis_kertas_gsm, jenis_kertas, formDataDesign).then(function(data){

                                              if(data.success == false){
                                                
                                                  Swal.fire(
                                                    'Information!',
                                                    'Message failed to process, contact customer service, we will immediately help you..',
                                                    'error'
                                                  )

                                                } else {

                                                    Swal.fire({
                                                    title: 'Information',
                                                    text: "Order has been processed, if yes button change to update",
                                                    icon: 'success',
                                                    showCancelButton: false,
                                                    showDenyButton: true,
                                                    confirmButtonColor: '#3085d6',
                                                    denyButtonColor: '#808000',
                                                    cancelButtonColor: '#d33',
                                                    confirmButtonText: 'Yes',
                                                    cancelButtonText: 'No',
                                                    denyButtonText: 'Checkout Now'
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            $("#btnsaVeSingleComponent").hide()
                                                            $(".btnupDate1SingleComponent").show()
                                                            $("#uploads").show()
                                                            $("#dforLabelComponent").text(cmpOne)
                                                            $("#dforLabelComponent").css("position", "relative")
                                                            $("#dforLabelComponent").css("right", "-556px")
                                                            $("#dforLabelComponent").addClass("badge badge-success")
                                                        }  else if (result.isDenied) {
                                                            
                                                            Swal.fire(
                                                                'Information!',
                                                                'Wait a minute, you will be directed to the checkout process.',
                                                                'info'
                                                              )

                                                              let link = '{!! route("tb.orders.customers") !!}';
                                                              let redirect = link;
                                                                  setTimeout(function(){ 
                                                                          window.location.href = redirect;
                                                              }, 3000);

                                                        }
                                                          else {
                                                            $("#btnsaVeSingleComponent").show()
                                                            $(".btnupDate1SingleComponent").hide()
                                                      }
                                                  }
                                              );
                                          }
                                      }
                                  );
                              }
                            },
                            error: function(response){
                                console.log("error : " + JSON.stringify(response) );
                            }
                        });
                    });
                    
                  }
                      else 
                            {
                      
                                Swal.fire({
                                title: 'Are you sure?',
                                text: "do you want to continue, without uploading documents?",
                                icon: 'question',
                                allowOutsideClick: false,
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Next!',
                                cancelButtonText: 'Cancel '
                                  }).then((result) => {
                                    if (result.isConfirmed) {

                                    let SingleComponentcmpOnes = $('input[name=components]').val()

                                    FetchLastComponent().then(function(lastIndex){

                                      SendOrdersMKTnonFILE(component1, SingleComponentcmpOnes, qty, size, material, jenis_kertas_gsm, jenis_kertas, formDataDesign, defComponent, lastIndex.messageIndex).then(function(data){
                                      // SendOrdersMKTnonFILE(lastIndex.message, lastIndex.messageIndex , qty, size, material, jenis_kertas_gsm, jenis_kertas, formDataDesign, defComponent).then(function(data){
                                          if(data.success == false){

                                            Swal.fire(
                                              'Information!',
                                              'Message failed to process, contact customer service, we will immediately help you.. ',
                                              'error'
                                            )

                                              let link = '{!! route("auth_user.id") !!}';
                                              let redirect = link;
                                                  setTimeout(function(){ 
                                                          window.location.href = redirect;
                                              }, 1000);
                                          } 
                                            else {  
                                            
                                                Swal.fire({
                                                title: 'Information',
                                                text: "Order has been processed, if yes button change to update",
                                                icon: 'success',
                                                showCancelButton: false,
                                                showDenyButton: true,
                                                denyButtonColor: '#808000',
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Yes',
                                                cancelButtonText: 'No',
                                                denyButtonText: 'Checkout Now'
                                                }).then((result) => {
                                                  
                                                    if (result.isConfirmed) {

                                                          $("#stateIdOneSingleComponent").val(data.data[1])
                                                          $("#btnsaVeSingleComponent").hide()
                                                          $(".btnupDate1SingleComponent").show()
                                                          $("#uploads").show()
                                                          $("#dforLabelComponent").text(cmpOne)
                                                          $("#dforLabelComponent").css("position", "relative")
                                                          $("#dforLabelComponent").css("right", "-556px")
                                                          $("#dforLabelComponent").addClass("badge badge-success")
                                                        }
                                                           else if (result.isDenied) {
                                                            
                                                            Swal.fire(
                                                                'Information!',
                                                                'Wait a minute, you will be directed to the checkout process.',
                                                                'info'
                                                              )

                                                              let link = '{!! route("tb.orders.customers") !!}';
                                                              let redirect = link;
                                                                  setTimeout(function(){ 
                                                                          window.location.href = redirect;
                                                              }, 3000);

                                                        }
                                                          else {
                                                            // $(".Orders1SingleComponent").hide()
                                                            $("#btnsaVeSingleComponent").show()
                                                            $(".btnupDate1SingleComponent").hide()
                                                          }
                                                      }
                                                  );
                                              }
                                          }
                                      );
                                    }
                                );
                              }
                            }
                        );
                    }
                }
            }
        })
      }
    });

    function BypAss(gh){

      return gh;
    }

    $('.Orders1SingleComponent').click(function(e){
      e.preventDefault();
      var values=[];
      $('input[name="checkbox[]"]:checked').each(function () {
        values[values.length] = (this.checked ? $(this).val() : "");
      });

      $(".container-3PFIa").hide() 
      let qty = $('.product-quantity-input').val()
      let size = $('.size span.value').text()
      let material = $('.material span.value').text()
      let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
      let jenis_kertas = $('input[name=jenis_kertas]').val()
      var formData = $("#forms").serializeArray();

      Swal.fire({
            title: 'Are you sure? #fixedOrders Single Component',
            html:
              'Preview <b>to next orders</b>, <br />' +
              '<code>'+
                'Orders: <br />'+
                size+'<br/>'+
                material+'<br/>'+
                qty+'<br/>'+
                values.join(", ")+'<br/>'+
              '</code> <br />'+
              '',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Order now!',
            cancelButtonText: 'Not now!'
          }).then((result) => {
            if (result.isConfirmed) {

              var designs=[];
              $('input[name="checkbox[]"]:checked').each(function () {
                designs[designs.length] = (this.checked ? $(this).val() : "");
              });

                var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                    var files = $('#file')[0].files;

                      var fd = new FormData();

                      fd.append('file',files[0]);
                      fd.append('_token',CSRF_TOKEN);

                      $('#responseMsg').hide();
                      $.ajax({
                        url: "{{route('orders.order_customers.to.mkt')}}",
                        method: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        beforeSend: function(evt) {   
                            const bfrSend = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 100000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                              })
                              
                              bfrSend.fire({
                                  icon: 'info',
                                  title: 'Retrieving data, data is being processed..'
                              })

                          },
                        success: function(response){

                          if(response.status == false){

                            Swal.fire(
                                    'Information!',
                                    'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                    'error'
                                  )
                          }  else {
                            
                            if(response.success == true){
                              Swal.fire(
                                    'Information!',
                                    'Order has been processed, We have sent your file to our marketing team.',
                                    'success'
                                  )
                            } 
                              else {
                                  
                                Swal.fire(
                                    'Information!',
                                    'Message failed to process, contact customer service, we will immediately help you.. , because you have sent this file before, if you experience problems, please contact our customer service immediately.',
                                    'error'
                                  )
                              }
                          }
                      },
                      error: function(response){
                          console.log("error : " + JSON.stringify(response) );
                        }
                      });
                // }                                                                                                                                          
            }
        })
    });

    // progress validate component str length for component text area for append text link.
    $('.btnSave').click(function(e){
      e.preventDefault()

      var designs=[];
      $('input[name="checkbox[]"]:checked').each(function () {
        designs[designs.length] = (this.checked ? $(this).val() : "");
      });
      var c = $("input[name='checkbox[]']:checked").val();
          if( c == undefined || designs.length == 0 || designs == undefined || designs == 'undefined'){
              Swal.fire({
                      icon: 'error',
                      title: 'Design not ready.'
                  })
            } 
              else {

                let component1 = $('#cp1').val()
                let qty = $('.product-quantity-input').val()
                let size = $('.size span.value').text()
                let material = $('.material span.value').text()
                let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
                let jenis_kertas = $('input[name=jenis_kertas]').val()
                var formDataDesign = $("#formsD").serializeArray();
                var values=[];
                
                /*
                *
                Custom size
                */
                let qtyCz = $('#Czquantity').val()
                let sizeCz = $('#Csize').val()
                let cmpOne = $('#CMP1').val()
                let materialCz = $('#Czmaterial').val()
                let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm]').val()
                let jenis_kertasCz = $('input[name=Czjenis_kertas]').val()
                let defComponent = $('input[name=components]').val()

              $('input[name="checkbox[]"]:checked').each(function () {
                values[values.length] = (this.checked ? $(this).val() : "");
              });

              Swal.fire({
                  title: 'Are you sure?',
                  html:
                    'Preview <b>to next orders</b>, <br />' +
                    '<code>'+
                      'Orders: <br />'+
                      size+'<br/>'+
                      material+'<br/>'+
                      qty+'<br/>'+
                      values.join(", ")+'<br/>'+
                    '</code> <br />'+'',
                  icon: 'question',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Order now!',
                  cancelButtonText: 'Not now!'
                }).then((result) => {
                  if (result.isConfirmed) {

                if(cmpOne == "" || sizeCz == "" || materialCz == "" || jenis_kertas_gsmCz == "" || jenis_kertasCz == "" || typeof designs == 'undefined' || designs.length == 0) {
                      Swal.fire(
                      'question!',
                      'Paper type still not loaded, make sure all fields are filled.',
                      'error'
                    )

                  } 
                    else {

                    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                    var filesx = $('#file')[0].files;
  
                    if(filesx.length > 0){

                    var formData = new FormData();
                    let TotalFiles = $('#file')[0].files.length;
                    let files = $('#file')[0];

                    let Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;

                   let fLastField = FetchLastComponent().then(function(lastIndex){

                      for (let i = 0; i < TotalFiles; i++) {
                          formData.append('file' + i, files.files[i]);
                          formData.append('ds1', component1);
                          formData.append('_token',CSRF_TOKEN);
                          formData.append('component_one', cmpOne);
                          formData.append('defComponent', defComponent);
                          formData.append('qty', qtyCz);
                          formData.append('size', sizeCz);
                          formData.append('material', materialCz);
                          formData.append('jenis_kertas', jenis_kertasCz);
                          formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                          formData.append('formDataDesign', Cdesign);
                          formData.append('lastIndex', lastIndex.messageIndex);

                      }

                    formData.append('TotalFiles', TotalFiles);

                      $.ajax({
                        url: "{{route('uploadf')}}",
                        method: 'post',
                        data: formData,
                        contentType: false,
                        processData: false,
                        dataType: 'json',                                                                                                                   
                        success: function(response){
                          
                          $("#stateIdOne").val(response.dataID)

                              if(response.status == false){

                                Swal.fire(
                                        'Information!',
                                        'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                        'error'
                                      )

                              } 
                                else 
                                      {
                                          SendOrdersMKT(component1, cmpOne, qtyCz, sizeCz, materialCz, response.data.filename, response.data.PATHS, response.data.GetOriginalName, response.data.GetMimeType, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign).then(function(data){
                                              
                                              if(data.success == false){
                                                
                                                  Swal.fire(
                                                    'Information!',
                                                    'Message failed to process, contact customer service, we will immediately help you..',
                                                    'error'
                                                  )

                                                } else {

                                                    Swal.fire({
                                                    title: 'Are you sure?',
                                                    text: "Order has been processed, Do you want to add more components?",
                                                    icon: 'success',
                                                    showDenyButton: true,
                                                    showCancelButton: true,
                                                    denyButtonColor: '#808000',
                                                    confirmButtonColor: '#3085d6',
                                                    cancelButtonColor: '#d33',
                                                    confirmButtonText: 'Yes!',
                                                    cancelButtonText: 'No',
                                                    denyButtonText: 'Checkout Now'
                                                  }).then((result) => {

                                                        if (result.isConfirmed) {
                                                        
                                                            $("#mjrsr2").show()
                                                            $("#btnsaVe").hide()
                                                            $(".btnupDate1").show()
                                                            $("#uploads").show()
                                                            $("#dforLabelComponent").text(cmpOne)
                                                            $("#dforLabelComponent").css("position", "relative")
                                                            $("#dforLabelComponent").css("right", "-556px")
                                                            $("#dforLabelComponent").addClass("badge badge-success")

                                                        } 
                                                          else if (result.isDenied) {
                                                            
                                                            Swal.fire(
                                                                'Information!',
                                                                'Wait a minute, you will be directed to the checkout process.',
                                                                'info'
                                                              )

                                                              let link = '{!! route("tb.orders.customers") !!}';
                                                              let redirect = link;
                                                                  setTimeout(function(){ 
                                                                          window.location.href = redirect;
                                                              }, 3000);

                                                        } else {

                                                          // hidden this, because order in move in mode immediately table
                                                          // $(".Orders1").show()
                                                          // $("#btnsaVe").hide()
                                                          // $("#mjrsr3").hide()
                                                          $("#btnsaVe").hide()
                                                          $(".btnupDate1").show()
                                                      }
                                                  }
                                                );
                                            }
                                        }
                                    );
                                }
                            },
                            error: function(response){
                                console.log("error : " + JSON.stringify(response) );
                            }
                        });
                    });

                  }
                      else 
                            {
                      
                                Swal.fire({
                                title: 'Are you sure?',
                                text: "do you want to continue, without uploading documents?",
                                icon: 'question',
                                allowOutsideClick: false,
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Next!',
                                cancelButtonText: 'Cancel '
                                  }).then((result) => {
                                    if (result.isConfirmed) {

                                    let cmpOnes = $('#CMP1').val()

                                    let fLastField = FetchLastComponent().then(function(lastIndex){

                                      SendOrdersMKTnonFILE(component1, cmpOnes, qtyCz, sizeCz, materialCz, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign, defComponent, lastIndex.messageIndex).then(function(data){
                                          if(data.success == false){
                                            Swal.fire(
                                              'Information!',
                                              'Message failed to process, contact customer service, we will immediately help you.. ',
                                              'error'
                                            )

                                              let link = '{!! route("auth_user.id") !!}';
                                              let redirect = link;
                                                  setTimeout(function(){ 
                                                          window.location.href = redirect;
                                              }, 1000);
                                          } 
                                            else {  
                                            
                                                  Swal.fire({
                                                  title: 'Are you sure?',
                                                  text: "Order has been processed, Do you want to add more components?",
                                                  icon: 'success',
                                                  showDenyButton: true,
                                                  showCancelButton: true,
                                                  denyButtonColor: '#808000',
                                                  confirmButtonColor: '#3085d6',
                                                  cancelButtonColor: '#d33',
                                                  confirmButtonText: 'Yes!',
                                                  cancelButtonText: 'No',
                                                  denyButtonText: 'Checkout Now'
                                                  }).then((result) => {
                                                    if (result.isConfirmed) { 

                                                          $("#mjrsr2").show() 
                                                          $("#stateIdOne").val(data.data)
                                                          $("#btnsaVe").hide()
                                                          $(".btnupDate1").show()
                                                          $("#uploads").show()
                                                          $("#dforLabelComponent").text(cmpOne)
                                                          $("#dforLabelComponent").css("position", "relative")
                                                          $("#dforLabelComponent").css("right", "-556px")
                                                          $("#dforLabelComponent").addClass("badge badge-success")

                                                        } else if (result.isDenied) {
                                                            
                                                            Swal.fire(
                                                                'Information!',
                                                                'Wait a minute, you will be directed to the checkout process.',
                                                                'info'
                                                              )

                                                              let link = '{!! route("tb.orders.customers") !!}';
                                                              let redirect = link;
                                                                  setTimeout(function(){ 
                                                                          window.location.href = redirect;
                                                              }, 3000);

                                                        } 
                                                          else {
                                                          // hidden this, because order in move in mode immediately table
                                                          // $(".Orders1").show()
                                                          // $("#btnsaVe").hide()
                                                          // $("#mjrsr3").hide()
                                                          $("#btnsaVe").hide()
                                                          $(".btnupDate1").show()
                                                        }
                                                    }
                                                );
                                              }
                                          }
                                      );
                                    });
                                  }
                              }
                          );
                      }
                  }
              }
          })
        }
      }
    );

    async function UpdateFiles1(cfile_id) {

        let data = {
                  id:cfile_id,
                  cmpcz:component,
                  quantity:qty,
                  material:material,
                  filename:filename,
                  filepaths:path,
                  originalnames:getOriginalName,
                  mime:getMimeType,
                  jenis_kertas_gsm:jenis_kertas_gsm,
                  jenis_kertas: jenis_kertas,
                  design: form
              }

        const Workoders = "{{ route('updateFiles') }}";
              
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

    async function SyncToReUpload(token, file) {

        let data = {
                    file:file,
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

    async function UpdateFiles2(cfile_id) {

        let data = {
                  id:cfile_id,
                  cmpcz:component,
                  quantity:qty,
                  material:material,
                  filename:filename,
                  filepaths:path,
                  originalnames:getOriginalName,
                  mime:getMimeType,
                  jenis_kertas_gsm:jenis_kertas_gsm,
                  jenis_kertas: jenis_kertas,
                  design: form
              }

        const Workoders = "{{ route('updateFiles2') }}";
              
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
    
    $('.btnupDate4').click(function(e){
      e.preventDefault()

    Swal.fire({
          title: 'Are you sure?',
          text: "this process will change your current data processing?",
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes!',
          cancelButtonText: 'No'}).then((result) => {
              if (result.isConfirmed) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
                var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                let qty = $('.product-quantity-input').val()
                let size = $('.size span.value').text()
                let material = $('.material span.value').text()
                let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
                let jenis_kertas = $('input[name=jenis_kertas]').val()
                var formDataDesign = $("#forms4").serializeArray();
                var values=[];
                
              /*
              *
              Custom size
              */
              let qtyCz = $('#Czquantity4').val()
              let CMP2 = $('#CMP4').val()
              let sizeCz = $('#Csize4').val()
              let materialCz = $('#Czmaterial4').val()
              let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm4]').val()
              let jenis_kertasCz = $('input[name=Czjenis_kertas4]').val()

              var filesx = $('#files4')[0].files;

                if(filesx.length > 0){

                    var formData = new FormData();
                    let TotalFiles = $('#files4')[0].files.length;
                    let files = $('#files4')[0];

                    let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));

                    for (let i = 0; i < TotalFiles; i++) {

                        formData.append('file' + i, files.files[i]);
                        formData.append('_token', CSRF_TOKEN);
                        formData.append('id', $("#stateIdOne4").val());
                        formData.append('qty', qtyCz);
                        formData.append('component', CMP2);
                        formData.append('size', sizeCz);
                        formData.append('material', materialCz);
                        formData.append('jenis_kertas', jenis_kertasCz);
                        formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                        formData.append('formDataDesign', Cdesign);

                    }

                    formData.append('TotalFiles', TotalFiles);

                      $.ajax({
                        url: "{{route('uploadDynamiCombination4')}}",
                        method: 'post',
                        data: formData,
                        contentType: false,
                        processData: false,
                        dataType: 'json',                                                                                                                   
                        success: function(response){
                          if(response.success == true){
                            
                            var formDatadf4 = new FormData();
                            let TotalFiles = $('#files4')[0].files.length;
                            let files = $('#files4')[0];

                            var formDataDesign4 = $("#forms4").serializeArray();

                            let qtyCz = $('#Czquantity4').val()
                            let CMP4 = $('#CMP4').val()
                            let sizeCz = $('#Csize4').val()
                            let cpc4 = $('#cp4').val()
                            let materialCz = $('#Czmaterial4').val()
                            let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm4]').val()
                            let jenis_kertasCz = $('input[name=Czjenis_kertas4]').val()
                            var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

                            let Cdesign =JSON.stringify(Object.assign({},  formDataDesign4));

                                for (let i = 0; i < TotalFiles; i++) {
                                  
                                    formDatadf4.append('files' + i, files.files[i]);
                                    formDatadf4.append('_token', CSRF_TOKEN);
                                    formDatadf4.append('id', $("#stateIdOne4").val());
                                    formDatadf4.append('design4', cpc4);
                                    formDatadf4.append('qty', qtyCz);
                                    formDatadf4.append('component', CMP4);
                                    formDatadf4.append('size', sizeCz);
                                    formDatadf4.append('material', materialCz);
                                    formDatadf4.append('jenis_kertas', jenis_kertasCz);
                                    formDatadf4.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                                    formDatadf4.append('formDataDesign', Cdesign);

                                }

                                formDatadf4.append('TotalFiles', TotalFiles);

                                  $.ajax({
                                      url: "{{route('uploadf_4')}}",
                                      method: 'post',
                                      data: formDatadf4,
                                      contentType: false,
                                      processData: false,
                                      dataType: 'json',                                                                                                                   
                                      success: function(response){

                                        if(response.success == false){

                                            Swal.fire(
                                                    'Information!',
                                                    'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                                    'error'
                                                  )
                                            } 
                                              else
                                                  {
                                                    Swal.fire(
                                                        'Information!',
                                                        'Order has been processed.',
                                                        'success'
                                                      )

                                                  }
                                          }

                                  });

                            }  
                              else {

                                Swal.fire(
                                    'Information!',
                                    'Message failed to process, contact customer service, we will immediately help you..',
                                    'error'
                                  )
                            }
                      },
                        error: function(response){
                            console.log("error : " + JSON.stringify(response) );
                        }
                    });

                    } 
                    else {

                            let qty = $('#Czquantity4').val()
                            let size = $('#Csize4').val()
                            let id = $('#stateIdOne4').val()
                            let cmpOne = $('#CMP4').val()
                            let material = $('#Czmaterial4').val()
                            let jenis_kertas_gsm = $('input[name=Czjenis_kertas_gsm4]').val()
                            let jenis_kertas = $('input[name=Czjenis_kertas4]').val()
                            var FormDataX = $("#forms4").serializeArray()

                            var filesx = $('#files4')[0].files;

                              if(filesx.length > 0){

                              var formData = new FormData();
                              let TotalFiles = $('#files4')[0].files.length;
                              let files = $('#files4')[0];

                              let Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;

                              for (let i = 0; i < TotalFiles; i++) {

                                  formData.append('file' + i, files.files[i]);
                                  formData.append('_token',CSRF_TOKEN);
                                  formData.append('cmpcz', cmpOne);
                                  formData.append('quantity', qty);
                                  formData.append('size', size);
                                  formData.append('material', material);
                                  formData.append('jenis_kertas', jenis_kertas);
                                  formData.append('jenis_kertas_gsm', jenis_kertas_gsm);
                                  formData.append('FRMS', Cdesign);

                              }

                              formData.append('TotalFiles', TotalFiles);

                                $.ajax({
                                  url: "{{route('UpdatedWithoutFile4')}}",
                                  method: 'post',
                                  data: formData,
                                  contentType: false,
                                  processData: false,
                                  dataType: 'json',                                                                                                                   
                                  success: function(response){
                                    if(response.success == true){
                                        Swal.fire(
                                            'Information!',
                                            'Order has been processed.',
                                            'success'
                                          )
                                    }  
                                      else {

                                          Swal.fire(
                                              'Information!',
                                              'Message failed to process, contact customer service, we will immediately help you..',
                                              'error'
                                            )
                                        }
                                    },
                                    error: function(response){
                                      console.log("error : " + JSON.stringify(response) );
                                  }
                              }
                          );
                      }
                        else {    

                            let qty = $('#Czquantity4').val()
                            let size = $('#Csize4').val()
                            let id = $('#stateIdOne4').val()
                            let cpc4 = $('#cp4').val()
                            let cmpOne = $('#CMP4').val()
                            let material = $('#Czmaterial4').val()
                            let jenis_kertas_gsm = $('input[name=Czjenis_kertas_gsm4]').val()
                            let jenis_kertas = $('input[name=Czjenis_kertas4]').val()
                            var formDataDesign = $("#forms4").serializeArray();
                        
                          let ExpandDesignArray =JSON.stringify(Object.assign({},  formDataDesign));
                            
                              UpdateWithoutNotFile4(id, cmpOne, qty, size, material, jenis_kertas_gsm, jenis_kertas, ExpandDesignArray, cpc4).then(function(data){
                                
                                    if(data.success == false){
                                        Swal.fire(
                                            'Information!',
                                            'Order failed.',
                                            'error'
                                          )
                                      } 
                                        else {

                                        Swal.fire(
                                          'Information!',
                                          'Order has been processed.',
                                          'success'
                                        )

                                    $("#dforLabelComponent4").text(cmpOne)
                                    
                                  }
                              }
                          );
                      }
                    }

              }

          });


    });

    $('.btnupDate3').click(function(e){
      e.preventDefault()

      Swal.fire({
          title: 'Are you sure?',
          text: "this process will change your current data processing?",
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes!',
          cancelButtonText: 'No'}).then((result) => {
              if (result.isConfirmed) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                  var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                  let qty = $('.product-quantity-input').val()
                  let size = $('.size span.value').text()
                  let material = $('.material span.value').text()
                  let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
                  let jenis_kertas = $('input[name=jenis_kertas]').val()
                  var formDataDesign = $("#forms3").serializeArray();
                  var values=[];
                  
                /*
                *
                Custom size
                */
                let qtyCz = $('#Czquantity3').val()
                let CMP2 = $('#CMP3').val()
                let sizeCz = $('#Csize3').val()
                let materialCz = $('#Czmaterial3').val()
                let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm3]').val()
                let jenis_kertasCz = $('input[name=Czjenis_kertas3]').val()
                let component3s = $('#cp3').val()

                var filesx = $('#files3')[0].files;
                
                if(filesx.length > 0){

                  var formData = new FormData();
                  let TotalFiles = $('#files3')[0].files.length;
                  let files = $('#files3')[0];

                  let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));

                  for (let i = 0; i < TotalFiles; i++) {

                    formData.append('file' + i, files.files[i]);
                    formData.append('_token', CSRF_TOKEN);
                    formData.append('id', $("#stateIdOne3").val());
                    formData.append('qty', qtyCz);
                    formData.append('design3', component3s);
                    formData.append('component', CMP2);
                    formData.append('size', sizeCz);
                    formData.append('material', materialCz);
                    formData.append('jenis_kertas', jenis_kertasCz);
                    formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                    formData.append('formDataDesign', Cdesign);

                  }

                  formData.append('TotalFiles', TotalFiles);

                    $.ajax({
                      url: "{{route('uploadDynamiCombination3')}}",
                      method: 'post',
                      data: formData,
                      contentType: false,
                      processData: false,
                      dataType: 'json',                                                                                                                   
                      success: function(response){

                        if(response.success == true){
                              
                            var formDatadf3 = new FormData();
                            let TotalFiles = $('#files3')[0].files.length;
                            let files = $('#files3')[0];
                            let qtyCz = $('#Czquantity3').val()
                            let CMP3 = $('#CMP3').val()
                            let sizeCz = $('#Csize3').val()
                            let materialCz = $('#Czmaterial3').val()
                            let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm3]').val()
                            let jenis_kertasCz = $('input[name=Czjenis_kertas3]').val()
                            var formDataDesign = $("#forms3").serializeArray();
                            let component3 = $('#cp3').val()

                            let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));

                                for (let i = 0; i < TotalFiles; i++) {
                                  
                                    formDatadf3.append('files' + i, files.files[i]);
                                    formDatadf3.append('id', $("#stateIdOne3").val());
                                    formDatadf3.append('qty', qtyCz);
                                    formDatadf3.append('design3', component3);
                                    formDatadf3.append('component', CMP3);
                                    formDatadf3.append('size', sizeCz);
                                    formDatadf3.append('material', materialCz);
                                    formDatadf3.append('jenis_kertas', jenis_kertasCz);
                                    formDatadf3.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                                    formDatadf3.append('formDataDesign', Cdesign);

                                }

                                formDatadf3.append('TotalFiles', TotalFiles);

                                  $.ajax({
                                      url: "{{route('uploadf_3')}}",
                                      method: 'post',
                                      data: formDatadf3,
                                      contentType: false,
                                      processData: false,
                                      dataType: 'json',                                                                                                                   
                                      success: function(response){

                                        if(response.success == false){

                                            Swal.fire(
                                                    'Information!',
                                                    'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                                    'error'
                                                  )
                                            } 
                                              else
                                                  {
                                                    Swal.fire(
                                                        'Information!',
                                                        'Order has been processed.',
                                                        'success'
                                                      )

                                                  }
                                          }

                                  });
                          }  
                            else {

                              Swal.fire(
                                  'Information!',
                                  'Message failed to process, contact customer service, we will immediately help you..',
                                  'error'
                                )
                          }
                    },
                      error: function(response){
                          console.log("error : " + JSON.stringify(response) );
                      }
                  });

                  } 
                    else {

                          let qty = $('#Czquantity3').val()
                          let size = $('#Csize3').val()
                          let id = $('#stateIdOne3').val()
                          let cmpOne = $('#CMP3').val()
                          let material = $('#Czmaterial3').val()
                          let jenis_kertas_gsm = $('input[name=Czjenis_kertas_gsm3]').val()
                          let jenis_kertas = $('input[name=Czjenis_kertas3]').val()
                          var FormDataX = $("#forms3").serializeArray()
                          let component3sd = $('#cp3').val()

                          var filesx = $('#files3')[0].files;

                            if(filesx.length > 0){

                            var formData = new FormData();
                            let TotalFiles = $('#files3')[0].files.length;
                            let files = $('#files3')[0];

                            let Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;

                            for (let i = 0; i < TotalFiles; i++) {

                                formData.append('file' + i, files.files[i]);
                                formData.append('_token',CSRF_TOKEN);
                                formData.append('cmpcz', cmpOne);
                                formData.append('design3', component3sd);
                                formData.append('quantity', qty);
                                formData.append('size', size);
                                formData.append('material', material);
                                formData.append('jenis_kertas', jenis_kertas);
                                formData.append('jenis_kertas_gsm', jenis_kertas_gsm);
                                formData.append('FRMS', Cdesign);

                            }

                            formData.append('TotalFiles', TotalFiles);

                              $.ajax({
                                url: "{{route('UpdatedWithoutFile3')}}",
                                method: 'post',
                                data: formData,
                                contentType: false,
                                processData: false,
                                dataType: 'json',                                                                                                                   
                                success: function(response){
                                  if(response.success == true){
                                      Swal.fire(
                                          'Information!',
                                          'Order has been processed.',
                                          'success'
                                        )
                                  }  
                                    else {

                                        Swal.fire(
                                            'Information!',
                                            'Message failed to process, contact customer service, we will immediately help you..',
                                            'error'
                                          )
                                      }
                                  },
                                  error: function(response){
                                    console.log("error : " + JSON.stringify(response) );
                                }
                            }
                        );
                    }
                      else {    

                        let qty = $('#Czquantity3').val()
                        let size = $('#Csize3').val()
                        let id = $('#stateIdOne3').val()
                        let dsgn3 = $('#cp3').val()
                        let cmpOne = $('#CMP3').val()
                        let material = $('#Czmaterial3').val()
                        let jenis_kertas_gsm = $('input[name=Czjenis_kertas_gsm3]').val()
                        let jenis_kertas = $('input[name=Czjenis_kertas3]').val()

                        var formDataDesigns = $("#forms3").serializeArray();
                        
                        let ExpandDesignArray =JSON.stringify(Object.assign({}, formDataDesigns));

                            UpdateWithoutNotFile3(id, cmpOne, qty, size, material, jenis_kertas_gsm, jenis_kertas, ExpandDesignArray, dsgn3).then(function(data){
                              
                                  if(data.success == false){
                                      Swal.fire(
                                          'Information!',
                                          'Order failed.',
                                          'error'
                                        )
                                    } 
                                      else {

                                      Swal.fire(
                                        'Information!',
                                        'Order has been processed.',
                                        'success'
                                      )

                                  $("#dforLabelComponent3").text(cmpOne)
                                  
                                }
                            }
                        );
                    }
                  }

              }
          });
    });

    $('.btnupDate2').click(function(e){
      e.preventDefault()

      Swal.fire({
          title: 'Are you sure?',
          text: "this process will change your current data processing?",
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes!',
          cancelButtonText: 'No'}).then((result) => {
              if (result.isConfirmed) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                let qty = $('.product-quantity-input').val()
                let size = $('.size span.value').text()
                let material = $('.material span.value').text()
                let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
                let jenis_kertas = $('input[name=jenis_kertas]').val()
                var formDataDesign = $("#forms2").serializeArray();
                var values=[];
                  
                /*
                *
                Custom size
                */
                let qtyCz = $('#Czquantity2').val()
                let CMP2 = $('#CMP2').val()
                let sizeCz = $('#Csize2').val()
                let materialCz = $('#Czmaterial2').val()
                let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm2]').val()
                let jenis_kertasCz = $('input[name=Czjenis_kertas2]').val()
                let component2 = $('#cp2').val()

                var filesx = $('#files')[0].files;

                if(filesx.length > 0){

                      var formData = new FormData();
                      let TotalFiles = $('#files')[0].files.length;
                      let files = $('#files')[0];
                      var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

                      let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));

                      for (let i = 0; i < TotalFiles; i++) {

                          formData.append('file' + i, files.files[i]);
                          formData.append('_token', CSRF_TOKEN);
                          formData.append('id', $("#stateIdOne2").val());
                          formData.append('qty', qtyCz);
                          formData.append('design2', component2);
                          formData.append('component', CMP2);
                          formData.append('size', sizeCz);
                          formData.append('material', materialCz);
                          formData.append('jenis_kertas', jenis_kertasCz);
                          formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                          formData.append('formDataDesign', Cdesign);

                      }

                      formData.append('TotalFiles', TotalFiles);

                        $.ajax({
                          url: "{{route('uploadDynamiCombination2')}}",
                          method: 'post',
                          data: formData,
                          contentType: false,
                          processData: false,
                          dataType: 'json',                                                                                                                   
                          success: function(response){
                            if(response.success == true){

                                var formDatadf = new FormData();
                                let TotalFiles = $('#files')[0].files.length;
                                let files = $('#files')[0];
                                let qtyCz = $('#Czquantity2').val()
                                let CMP2 = $('#CMP2').val()
                                let sizeCz = $('#Csize2').val()
                                let materialCz = $('#Czmaterial2').val()
                                let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm2]').val()
                                let jenis_kertasCz = $('input[name=Czjenis_kertas2]').val()
                                let component2 = $('#cp2').val()
                                var formDataDesign = $("#forms2").serializeArray();

                                let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));

                                for (let i = 0; i < TotalFiles; i++) {
                                    formDatadf.append('files' + i, files.files[i]);
                                    formDatadf.append('id', $("#stateIdOne2").val());
                                    formDatadf.append('qty', qtyCz);
                                    formDatadf.append('design2', component2);
                                    formDatadf.append('component', CMP2);
                                    formDatadf.append('size', sizeCz);
                                    formDatadf.append('material', materialCz);
                                    formDatadf.append('jenis_kertas', jenis_kertasCz);
                                    formDatadf.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                                    formDatadf.append('formDataDesign', Cdesign);

                                }

                                formDatadf.append('TotalFiles', TotalFiles);

                                  $.ajax({
                                      url: "{{route('uploadf_2')}}",
                                      method: 'post',
                                      data: formDatadf,
                                      contentType: false,
                                      processData: false,
                                      dataType: 'json',                                                                                                                   
                                      success: function(response){

                                        if(response.success == false){

                                            Swal.fire(
                                                    'Information!',
                                                    'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                                    'error'
                                                  )
                                            } 
                                              else
                                                  {
                                                    Swal.fire(
                                                        'Information!',
                                                        'Order has been processed.',
                                                        'success'
                                                      )

                                                  }
                                          }

                                  });
                              }  
                                else {

                                  Swal.fire(
                                      'Information!',
                                      'Message failed to process, contact customer service, we will immediately help you..',
                                      'error'
                                    )
                              }
                        },
                          error: function(response){
                              console.log("error : " + JSON.stringify(response) );
                          }
                      });

                      } 
                      else {

                              let qty = $('#Czquantity2').val()
                              let size = $('#Csize2').val()
                              let dsgn2 = $('#cp2').val()
                              let id = $('#stateIdOne2').val()
                              let cmpOne = $('#CMP2').val()
                              let material = $('#Czmaterial2').val()
                              let jenis_kertas_gsm = $('input[name=Czjenis_kertas_gsm2]').val()
                              let jenis_kertas = $('input[name=Czjenis_kertas2]').val()
                              var FormDataX = $("#forms2").serializeArray()

                              var filesx = $('#files')[0].files;

                                if(filesx.length > 0){

                                var formData = new FormData();
                                let TotalFiles = $('#files')[0].files.length;
                                let files = $('#files')[0];

                                let Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;

                                for (let i = 0; i < TotalFiles; i++) {

                                    formData.append('file' + i, files.files[i]);
                                    formData.append('_token',CSRF_TOKEN);
                                    formData.append('cmpcz', cmpOne);
                                    formData.append('design2', dsgn2);
                                    formData.append('quantity', qty);
                                    formData.append('size', size);
                                    formData.append('material', material);
                                    formData.append('jenis_kertas', jenis_kertas);
                                    formData.append('jenis_kertas_gsm', jenis_kertas_gsm);
                                    formData.append('FRMS', Cdesign);

                                }

                                formData.append('TotalFiles', TotalFiles);

                                  $.ajax({
                                    url: "{{route('UpdatedWithoutFile2')}}",
                                    method: 'post',
                                    data: formData,
                                    contentType: false,
                                    processData: false,
                                    dataType: 'json',                                                                                                                   
                                    success: function(response){
                                      if(response.success == true){
                                          Swal.fire(
                                              'Information!',
                                              'Order has been processed.',
                                              'success'
                                            )
                                      }  
                                        else {

                                            Swal.fire(
                                                'Information!',
                                                'Message failed to process, contact customer service, we will immediately help you..',
                                                'error'
                                              )
                                          }
                                      },
                                      error: function(response){
                                        console.log("error : " + JSON.stringify(response) );
                                    }
                                }
                            );
                        }
                          else {    

                            let qty = $('#Czquantity2').val()
                            let size = $('#Csize2').val()
                            let id = $('#stateIdOne2').val()
                            let cmpOne = $('#CMP2').val()
                            let material = $('#Czmaterial2').val()
                            let jenis_kertas_gsm = $('input[name=Czjenis_kertas_gsm2]').val()
                            let jenis_kertas = $('input[name=Czjenis_kertas2]').val()
                            let dsgn2s = $('#cp2').val()

                            var formDataDesign = $("#forms2").serializeArray();

                            let ExpandDesignArray =JSON.stringify(Object.assign({},  formDataDesign)) ;
                                
                                UpdateWithoutNotFile2(id, cmpOne, qty, size, material, jenis_kertas_gsm, jenis_kertas, ExpandDesignArray, dsgn2s).then(function(data){
                                  
                                      if(data.success == false){
                                          Swal.fire(
                                              'Information!',
                                              'Order failed.',
                                              'error'
                                            )
                                        } 
                                          else {

                                          Swal.fire(
                                            'Information!',
                                            'Order has been processed.',
                                            'success'
                                          )

                                      $("#dforLabelComponent").text(cmpOne)
                                      
                                    }
                                }
                            );
                        }
                    }
                }
            }
        );
    }
  );

    $('.btnupDate1SingleComponent').click(function(e){
      e.preventDefault();

          Swal.fire({
          title: 'Are you sure?',
          text: "this process will change your current data processing?",
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes!',
          cancelButtonText: 'No'}).then((result) => {
              if (result.isConfirmed) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

              var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
              let qty = $('.product-quantity-input').val()
              let size = $('.size span.value').text()
              let material = $('.material span.value').text()
              let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
              let jenis_kertas = $('input[name=jenis_kertas]').val()
              var formDataDesign = $("#forms").serializeArray();
              var values=[];
              
              /*
              *
              Custom size
              */
              let qtyCz = $('#Czquantity').val()
              let design1 = $('#cp1').val()
              let sizeCz = $('#Csize').val()
              let cmpOne = $('#CMP1').val()
              let materialCz = $('#Czmaterial').val()
              let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm]').val()
              let jenis_kertasCz = $('input[name=Czjenis_kertas]').val()
              let components = $('input[name=components]').val()
              let id = $('#stateIdOneSingleComponent').val()

              var filesx = $('#filessd')[0].files;

                  if(filesx.length > 0){

                    var formData = new FormData();
                    let TotalFiles = $('#filessd')[0].files.length;
                    let files = $('#filessd')[0];
                    let idxSingle = $('#stateIdOneSingleComponent').val()
                    let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));
                    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

                    let fLastField = FetchLastComponent().then(function(lastIndex){

                      for (let i = 0; i < TotalFiles; i++) {

                          formData.append('file' + i, files.files[i]);
                          formData.append('_token', CSRF_TOKEN);
                          formData.append('idx', idxSingle);
                          formData.append('qty', qty);
                          formData.append('design1', design1);
                          formData.append('component', components);
                          formData.append('size', size);
                          formData.append('material', material);
                          formData.append('components', components);
                          formData.append('jenis_kertas', jenis_kertas);
                          formData.append('jenis_kertas_gsm', jenis_kertas_gsm);
                          formData.append('formDataDesign', Cdesign);
                          formData.append('lastIndex', lastIndex.messageIndex);

                      }

                      formData.append('TotalFiles', TotalFiles);

                      $.ajax({
                        url: "{{route('uploadDynamiCombinationSingleComponent')}}",
                        method: 'post',
                        data: formData,
                        contentType: false,
                        processData: false,
                        dataType: 'json',                                                                                                                   
                        success: function(response){
                          
                          if(response.success == true){
                          
                            var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                            let defComponent = $('input[name=components]').val()
          
                            var formDataSingleComponent = new FormData();
                            let xFiles = $('#filessd')[0].files.length;
                            let files = $('#filessd')[0];

                            let qty = $('.product-quantity-input').val()
                            let size = $('.size span.value').text()
                            let material = $('.material span.value').text()
                            let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
                            let jenis_kertas = $('input[name=jenis_kertas]').val()
                            var formDataDesigns = $("#forms").serializeArray();
                            let Cdesign =JSON.stringify(Object.assign({},  formDataDesigns));
                            let design1s = $('#cp1').val()
                            
                            let fLastField = FetchLastComponent().then(function(lastIndex){

                              for (let i = 0; i < xFiles; i++) {

                                    formDataSingleComponent.append('file' + i, files.files[i]);
                                    formDataSingleComponent.append('ds1', design1s);
                                    formDataSingleComponent.append('_token',CSRF_TOKEN);
                                    formDataSingleComponent.append('component_one', cmpOne);
                                    formDataSingleComponent.append('qty', qty);
                                    formDataSingleComponent.append('defComponent', defComponent);
                                    formDataSingleComponent.append('size', size);
                                    formDataSingleComponent.append('material', material);
                                    formDataSingleComponent.append('jenis_kertas', jenis_kertas);
                                    formDataSingleComponent.append('jenis_kertas_gsm', jenis_kertas_gsm);
                                    formDataSingleComponent.append('formDataDesign', Cdesign);
                                    formDataSingleComponent.append('lastIndex', lastIndex.messageIndex);

                                }

                                formDataSingleComponent.append('TotalFiles', xFiles);

                                  $.ajax({
                                      url: "{{route('uploadf')}}",
                                      method: 'post',
                                      data: formDataSingleComponent,
                                      contentType: false,
                                      processData: false,
                                      success: function(response){

                                        if(response.success == false){

                                            Swal.fire(
                                                    'Information!',
                                                    'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                                    'error'
                                                  )
                                            } 
                                              else
                                                  {
                                                      Swal.fire(
                                                          'Information!',
                                                          'Order has been processed.',
                                                          'success'
                                                      )
                                                  }
                                              }
                                          }
                                      );
                                    }
                                  );
                                }  
                                  else {

                                    Swal.fire(
                                        'Information!',
                                        'Message failed to process, contact customer service, we will immediately help you..',
                                        'error'
                                      )
                                }
                          },
                              error: function(response){
                                console.log("error : " + JSON.stringify(response) );
                              }
                          }
                        );
                      }
                    );
                  } 
                    else {

                        let id = $('#stateIdOneSingleComponent').val()
                        var FormDataX = $("#forms").serializeArray();
                        var filesx = $('#filessd')[0].files;
                        let qty = $('.product-quantity-input').val()
                        let size = $('.size span.value').text()
                        let material = $('.material span.value').text()
                        let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
                        let jenis_kertas = $('input[name=jenis_kertas]').val()
                        var formDataDesign = $("#forms").serializeArray();

                            let cmpOne = $('input[name=components]').val()

                              if(filesx.length > 0){

                              var formData = new FormData();
                              let TotalFiles = $('#filessd')[0].files.length;
                              let files = $('#filessd')[0];

                              let Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;

                              for (let i = 0; i < TotalFiles; i++) {

                                  formData.append('file' + i, files.files[i]);
                                  formData.append('_token',CSRF_TOKEN);
                                  formData.append('cmpcz', cmpOne);
                                  formData.append('components', components);
                                  formData.append('design1', design1);
                                  formData.append('quantity', qty);
                                  formData.append('size', size);
                                  formData.append('material', material);
                                  formData.append('jenis_kertas', jenis_kertas);
                                  formData.append('jenis_kertas_gsm', jenis_kertas_gsm);
                                  formData.append('FRMS', Cdesign);

                              }

                              formData.append('TotalFiles', TotalFiles);

                                $.ajax({
                                  url: "{{route('WithoutUpdateFiles')}}",
                                  method: 'post',
                                  data: formData,
                                  contentType: false,
                                  processData: false,
                                  dataType: 'json',                                                                                                                   
                                  success: function(response){

                                    if(response.success == true){
                                        Swal.fire(
                                            'Information!',
                                            'Order has been processed.',
                                            'success'
                                          )
                                    }  
                                      else {

                                          Swal.fire(
                                              'Information!',
                                              'Message failed to process, contact customer service, we will immediately help you..',
                                              'error'
                                            )
                                        }
                                    },
                                    error: function(response){
                                      console.log("error : " + JSON.stringify(response) );
                                  }
                              }
                          );
                      }
                        else {    
                          let ExpandDesignArray =JSON.stringify(Object.assign({},  formDataDesign)) ;
                          let design1s = $('#cp1').val()
                            
                              UpdateWithoutNotFile(design1, id, cmpOne, qty, size, material, jenis_kertas_gsm, jenis_kertas, ExpandDesignArray).then(function(data){
                                    if(data.success == false){
                                        Swal.fire(
                                            'Information!',
                                            'Order failed.',
                                            'error'
                                          )

                                          $("#btnsaVeSingleComponent").show()
                                          $(".btnupDate1SingleComponent").hide()
                                          $("#uploads").show()
                                          $("#dforLabelComponent").text(cmpOne)

                                      } else {
                                        Swal.fire(
                                          'Information!',
                                          'Order has been processed.',
                                          'success'
                                        )

                                        $("#btnsaVeSingleComponent").hide()
                                        $(".btnupDate1SingleComponent").show()
                                        $("#uploads").show()
                                        $("#dforLabelComponent").text(cmpOne)
                                  }
                              }
                          );
                      }
                  }
              }
          }
        );
    });

    $('.btnupDate1').click(function(e){
      e.preventDefault()

        Swal.fire({
          title: 'Are you sure?',
          text: "this process will change your current data processing?",
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes!',
          cancelButtonText: 'No'
        }).then((result) => {
          
              if (result.isConfirmed) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                let qty = $('.product-quantity-input').val()
                let size = $('.size span.value').text()
                let material = $('.material span.value').text()
                let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
                let jenis_kertas = $('input[name=jenis_kertas]').val()
                var formDataDesign = $("#formsD").serializeArray();
                var values=[];
                
                /*
                *
                Custom size
                */
                let qtyCz = $('#Czquantity').val()
                let design1 = $('#cp1').val()
                let sizeCz = $('#Csize').val()
                let cmpOne = $('#CMP1').val()
                let materialCz = $('#Czmaterial').val()
                let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm]').val()
                let jenis_kertasCz = $('input[name=Czjenis_kertas]').val()
                let id = $('#stateIdOne').val()

                var filesx = $('#file')[0].files;
                if(filesx.length > 0){

                    var formData = new FormData();
                    let TotalFiles = $('#file')[0].files.length;
                    let files = $('#file')[0];

                    let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));

                    for (let i = 0; i < TotalFiles; i++) {
                        formData.append('_token',CSRF_TOKEN);
                        formData.append('filed' + i, files.files[i]);
                        formData.append('id', $("#stateIdOne").val());
                        formData.append('qty', qtyCz);
                        formData.append('design1', design1);
                        formData.append('component', cmpOne);
                        formData.append('size', sizeCz);
                        formData.append('material', materialCz);
                        formData.append('jenis_kertas', jenis_kertasCz);
                        formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                        formData.append('formDataDesign', Cdesign);
                    }

                        formData.append('TotalFiles', TotalFiles);

                      

                      $.ajax({
                        url: "{{route('uploadDynamiCombination')}}",
                        method: 'post',
                        data: formData,
                        contentType: false,
                        processData: false,
                        dataType: 'json',                                                                                                                   
                        success: function(response){

                          if(response.success == true){

                            var filesx = $('#file')[0].files;
                            var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
          
                            var formDatax = new FormData();
                            let xFiles = $('#file')[0].files.length;
                            let files = $('#file')[0];
                            let Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;

                                for (let i = 0; i < xFiles; i++) {
                                    formDatax.append('file' + i, files.files[i]);
                                    formDatax.append('ds1', design1);
                                    formDatax.append('_token',CSRF_TOKEN);
                                    formDatax.append('component_one', cmpOne);
                                    formDatax.append('qty', qty);
                                    formDatax.append('defComponent', cmpOne);
                                    formDatax.append('size', size);
                                    formDatax.append('material', material);
                                    formDatax.append('jenis_kertas', jenis_kertas);
                                    formDatax.append('jenis_kertas_gsm', jenis_kertas_gsm);
                                    formDatax.append('formDataDesign', Cdesign);

                                }

                                formDatax.append('TotalFiles', xFiles);

                                  $.ajax({
                                      url: "{{route('uploadf')}}",
                                      method: 'post',
                                      data: formDatax,
                                      contentType: false,
                                      processData: false,
                                      dataType: 'json',                                                                                                                   
                                      success: function(response){


                                        if(response.success == false){

                                            Swal.fire(
                                                    'Information!',
                                                    'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                                    'error'
                                                  )
                                            } 
                                              else
                                                  {
                                                    Swal.fire(
                                                        'Information!',
                                                        'Order has been processed.',
                                                        'success'
                                                      )

                                                  }
                                          }

                                  });
                            }  
                              else {

                                Swal.fire(
                                    'Information!',
                                    'Message failed to process, contact customer service, we will immediately help you..',
                                    'error'
                                  )
                            }
                      },
                        error: function(response){
                            console.log("error : " + JSON.stringify(response) );
                        }
                    });

                    } 
                      else {

                            let qty = $('#Czquantity').val()
                            let size = $('#Csize').val()
                            let id = $('#stateIdOne').val()
                            let cmpOne = $('#CMP1').val()
                            let material = $('#Czmaterial').val()
                            let jenis_kertas_gsm = $('input[name=Czjenis_kertas_gsm]').val()
                            let jenis_kertas = $('input[name=Czjenis_kertas]').val()
                            var FormDataX = $("#forms").serializeArray();
                            var filesx = $('#file')[0].files;

                              if(filesx.length > 0){

                              var formData = new FormData();
                              let TotalFiles = $('#file')[0].files.length;
                              let files = $('#file')[0];

                              let Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;

                              for (let i = 0; i < TotalFiles; i++) {

                                  formData.append('file' + i, files.files[i]);
                                  formData.append('_token',CSRF_TOKEN);
                                  formData.append('cmpcz', cmpOne);
                                  formData.append('design1', design1);
                                  formData.append('quantity', qtyCz);
                                  formData.append('size', sizeCz);
                                  formData.append('material', materialCz);
                                  formData.append('jenis_kertas', jenis_kertasCz);
                                  formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                                  formData.append('FRMS', Cdesign);

                              }

                              formData.append('TotalFiles', TotalFiles);

                                $.ajax({
                                  url: "{{route('WithoutUpdateFiles')}}",
                                  method: 'post',
                                  data: formData,
                                  contentType: false,
                                  processData: false,
                                  dataType: 'json',                                                                                                                   
                                  success: function(response){

                                    if(response.success == true){
                                        Swal.fire(
                                            'Information!',
                                            'Order has been processed.',
                                            'success'
                                          )
                                    }  
                                      else {

                                          Swal.fire(
                                              'Information!',
                                              'Message failed to process, contact customer service, we will immediately help you..',
                                              'error'
                                            )
                                        }
                                    },
                                    error: function(response){
                                      console.log("error : " + JSON.stringify(response) );
                                  }
                              }
                          );
                      }
                        else {    

                          let qty = $('#Czquantity').val()
                          let size = $('#Csize').val()
                          let id = $('#stateIdOne').val()
                          let cmpOne = $('#CMP1').val()
                          let material = $('#Czmaterial').val()
                          let jenis_kertas_gsm = $('input[name=Czjenis_kertas_gsm]').val()
                          let jenis_kertas = $('input[name=Czjenis_kertas]').val()
                          let design1 = $('#cp1').val()

                          var formDataDesign = $("#formsD").serializeArray();
                          let ExpandDesignArray =JSON.stringify(Object.assign({},  formDataDesign));
                            
                              UpdateWithoutNotFile(design1, id, cmpOne, qty, size, material, jenis_kertas_gsm, jenis_kertas, ExpandDesignArray).then(function(data){
                                    if(data.success == false){
                                        Swal.fire(
                                            'Information!',
                                            'Order failed.',
                                            'error'
                                          )
                                      } else {
                                        Swal.fire(
                                          'Information!',
                                          'Order has been processed.',
                                          'success'
                                        )

                                    $("#dforLabelComponent").text(cmpOne)
                                  }
                              }
                          );
                      }
                  }
              }
          });
      }
    );

    async function UpdateWithoutNotFile(design1, id, component, qty, size, material, jenis_kertas_gsm, jenis_kertas, form, designs, filename, path, getOriginalName, getMimeType) {

        let data = {
                    design1:design1,
                    size:size,
                    cmpcz:component,
                    id:id,
                    design1s:designs,
                    quantity:qty,
                    material:material,
                    jenis_kertas_gsm:jenis_kertas_gsm,
                    jenis_kertas: jenis_kertas,
                    FRMS: form,
                    filename:filename,
                    filepaths:path,
                    originalnames:getOriginalName,
                    mime:getMimeType,
              }

        const Workoders = "{{ route('WithoutUpdateFiles') }}";
              
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

    async function UpdateWithoutNotFile2(id, component, qty, size, material, jenis_kertas_gsm, jenis_kertas, form, designsc, filename, path, getOriginalName, getMimeType) {

      let data = {
                    size:size,
                    cmpcz:component,
                    design2:designsc,
                    id:id,
                    quantity:qty,
                    material:material,
                    jenis_kertas_gsm:jenis_kertas_gsm,
                    jenis_kertas: jenis_kertas,
                    FRMS: form,
                    filename:filename,
                    filepaths:path,
                    originalnames:getOriginalName,
                    mime:getMimeType,
            }

        const Workoders = "{{ route('UpdatedWithoutFile2') }}";
              
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

    async function UpdateWithoutNotFile3(id, component, qty, size, material, jenis_kertas_gsm, jenis_kertas, form, designs, filename, path, getOriginalName, getMimeType) {

        let data = {
                      size:size,
                      cmpcz:component,
                      id:id,
                      quantity:qty,
                      design3: designs,
                      material:material,
                      jenis_kertas_gsm:jenis_kertas_gsm,
                      jenis_kertas: jenis_kertas,
                      FRMS: form,
                      filename:filename,
                      filepaths:path,
                      originalnames:getOriginalName,
                      mime:getMimeType,
              }

          const Workoders = "{{ route('UpdatedWithoutFile3') }}";
                
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

        async function UpdateWithoutNotFile4(id, component, qty, size, material, jenis_kertas_gsm, jenis_kertas, form, designs, filename, path, getOriginalName, getMimeType) {

            let data = {
                          size:size,
                          cmpcz:component,
                          id:id,
                          quantity:qty,
                          material:material,
                          design4:designs,
                          jenis_kertas_gsm:jenis_kertas_gsm,
                          jenis_kertas: jenis_kertas,
                          FRMS: form,
                          filename:filename,
                          filepaths:path,
                          originalnames:getOriginalName,
                          mime:getMimeType,
                  }

              const Workoders = "{{ route('UpdatedWithoutFile4') }}";
                    
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

    $('.btnSave2').click(function(e){
      e.preventDefault()
   
      var designs=[];
      $('input[name="checkbox2[]"]:checked').each(function () {
        designs[designs.length] = (this.checked ? $(this).val() : "");
      });
      var c = $("input[name='checkbox[]']:checked").val();
          if( c == undefined || designs.length == 0 || designs == undefined || designs == 'undefined'){
              Swal.fire({
                      icon: 'error',
                      title: 'Design not ready.'
                  })
            } 
              else 
                    
                  {

                      let qty = $('.product-quantity-input').val()
                      let size = $('.size span.value').text()
                      let material = $('.material span.value').text()
                      let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
                      let jenis_kertas = $('input[name=jenis_kertas]').val()
                      var formDataDesign = $("#forms2").serializeArray();
                      var values=[];
                      
                    $('input[name="checkbox2[]"]:checked').each(function () {
                      values[values.length] = (this.checked ? $(this).val() : "");
                  });

                let qtyCz = $('#Czquantity2').val()
                let component2 = $('#cp2').val()
                let CMP2 = $('#CMP2').val()
                let sizeCz = $('#Csize2').val()
                let materialCz = $('#Czmaterial2').val()
                let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm2]').val()
                let jenis_kertasCz = $('input[name=Czjenis_kertas2]').val()

            Swal.fire({
                  title: 'Are you sure?',
                  html:
                    'Preview <b>to next orders</b>, <br />' +
                    '<code>'+
                      'Orders: <br />'+
                      size+'<br/>'+
                      material+'<br/>'+
                      qty+'<br/>'+
                      values.join(", ")+'<br/>'+
                    '</code> <br />'+'',
                  icon: 'question',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Order now!',
                  cancelButtonText: 'Not now!'
                }).then((result) => {
                  if (result.isConfirmed) {
    
                if(qtyCz == "" || sizeCz == "" || CMP2 == "" || materialCz == "" || jenis_kertas_gsmCz == "" || jenis_kertasCz == "" || typeof designs == 'undefined' && designs.length == 0) {

                  Swal.fire(
                  'question!',
                  'Paper type still not loaded, make sure all fields are filled.',
                  'error'
                )

              } 
                else {

                var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                    var filesx = $('#files')[0].files;
  
                    if(filesx.length > 0){

                    var formData = new FormData();
                    let TotalFiles = $('#files')[0].files.length;
                    let files = $('#files')[0];

                    let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));

                    let fLastField = FetchLastComponent().then(function(lastIndex){

                      for (let i = 0; i < TotalFiles; i++) {

                          formData.append('files' + i, files.files[i]);
                          formData.append('_token',CSRF_TOKEN);
                          formData.append('design2', component2);
                          formData.append('qty', qtyCz);
                          formData.append('cmpcz2', CMP2);
                          formData.append('size', sizeCz);
                          formData.append('material', materialCz);
                          formData.append('jenis_kertas', jenis_kertasCz);
                          formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                          formData.append('formDataDesign', Cdesign);
                          formData.append('lastIndex', lastIndex.messageIndex);

                      }

                      formData.append('TotalFiles', TotalFiles);

                      $('#responseMsg').hide();

                      $.ajax({
                        url: "{{route('uploadf_2')}}",
                        method: 'post',
                        data: formData,
                        contentType: false,
                        processData: false,
                        dataType: 'json',                                                                                                                   
                        success: function(response){


                            if(response.success == false){

                                Swal.fire(
                                        'Information!',
                                        'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                        'error'
                                      )
                                } 
                                  else
                                       {

                                        SendOrdersMKT_prt2(component2, CMP2, qtyCz, sizeCz, materialCz, response.data.filename, response.data.PATHS, response.data.GetOriginalName, response.data.GetMimeType, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign).then(function(data){
                                            
                                              if(data.success == false){
                                                  Swal.fire(
                                                    'Information!',
                                                    'Message failed to process, contact customer service, we will immediately help you..',
                                                    'error'
                                                  )
                                                } 
                                                  else {

                                                  Swal.fire({
                                                    title: 'Are you sure?',
                                                    text: "Order has been processed, Do you want to add more components?",
                                                    icon: 'success',
                                                    showDenyButton: true,
                                                    showCancelButton: true,
                                                    denyButtonColor: '#808000',
                                                    confirmButtonColor: '#3085d6',
                                                    cancelButtonColor: '#d33',
                                                    confirmButtonText: 'Yes!',
                                                    cancelButtonText: 'No',
                                                    denyButtonText: 'Checkout Now'
                                                  }).then((result) => {
                                                        if (result.isConfirmed) {
                                                        
                                                          $("#mjrsr3").show()
                                                          $("#btnsaVe2").hide()
                                                          $(".btnupDate2").show()
                                                          $("#uploads2").show()

                                                          $("#dforLabelComponent2").text(CMP2)
                                                          $("#dforLabelComponent2").css("position", "relative")
                                                          $("#dforLabelComponent2").css("right", "-556px")
                                                          $("#dforLabelComponent2").addClass("badge badge-success")
                                                        } else if (result.isDenied) {
                                                            
                                                            Swal.fire(
                                                                'Information!',
                                                                'Wait a minute, you will be directed to the checkout process.',
                                                                'info'
                                                              )

                                                              let link = '{!! route("tb.orders.customers") !!}';
                                                              let redirect = link;
                                                                  setTimeout(function(){ 
                                                                          window.location.href = redirect;
                                                              }, 3000);

                                                        } 
                                                          else {

                                                          // hidden this, because order in move in mode immediately table
                                                          // $(".Orders2").show()
                                                          // $("#btnsaVe2").hide()
                                                          // $("#mjrsr3").hide()
                                                          $("#btnsaVe2").hide()
                                                          $(".btnupDate2").show()
                                                      }
                                                  }
                                              );

                                            }
                                       }
                                  );
                              }
                            },
                              error: function(response){
                                  console.log("error : " + JSON.stringify(response) );
                              }
                          });
                        }
                      );
                    }
                      else 
                            {
                      
                              Swal.fire({
                                    title: 'Are you sure?',
                                    text: "do you want to continue, without uploading documents?",
                                    icon: 'question',
                                    allowOutsideClick: false,
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Next!',
                                    cancelButtonText: 'Cancel '
                                  }).then((result) => {
                                    if (result.isConfirmed) {

                                    let fLastField = FetchLastComponent().then(function(lastIndex){

                                      SendOrdersMKTnonFILE_prt2(component2, CMP2, qtyCz, sizeCz, materialCz, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign, lastIndex.messageIndex).then(function(data){
                                          if(data.success == false){
                                            Swal.fire(
                                              'Information!',
                                              'Message failed to process, contact customer service, we will immediately help you..',
                                              'error'
                                            )
                                              let link = '{!! route("auth_user.id")  !!}';
                                              let redirect = link;
                                                  setTimeout(function(){ 
                                                          window.location.href = redirect;
                                              }, 1000);

                                          } 
                                              else {

                                                Swal.fire({
                                                  title: 'Are you sure?',
                                                  text: "Order has been processed, Do you want to add more components?",
                                                  icon: 'success',
                                                  showDenyButton: true,
                                                  showCancelButton: true,
                                                  denyButtonColor: '#808000',
                                                  confirmButtonColor: '#3085d6',
                                                  cancelButtonColor: '#d33',
                                                  confirmButtonText: 'Yes!',
                                                  cancelButtonText: 'No',
                                                  denyButtonText: 'Checkout Now'
                                                  }).then((result) => {

                                                    if (result.isConfirmed) {
                                                        
                                                          $("#mjrsr3").show()
                                                          $("#stateIdOne2").val(data.data)
                                                          $("#btnsaVe2").hide()
                                                          $(".btnupDate2").show()
                                                          $("#uploads2").show()
                                                          $("#dforLabelComponent2").text(CMP2)
                                                          $("#dforLabelComponent2").css("position", "relative")
                                                          $("#dforLabelComponent2").css("right", "-556px")
                                                          $("#dforLabelComponent2").addClass("badge badge-success")

                                                        } else if (result.isDenied) {
                                                            
                                                            Swal.fire(
                                                                'Information!',
                                                                'Wait a minute, you will be directed to the checkout process.',
                                                                'info'
                                                              )

                                                              let link = '{!! route("tb.orders.customers") !!}';
                                                              let redirect = link;
                                                                  setTimeout(function(){ 
                                                                          window.location.href = redirect;
                                                              }, 3000);

                                                        } 
                                                          else {

                                                            // hidden this, because order in move in mode immediately table
                                                            // $(".Orders2").show()
                                                            // $("#btnsaVe2").hide()
                                                            // $("#mjrsr3").hide()
                                                            $("#btnsaVe2").hide()
                                                            $(".btnupDate3").show()
                                                      }
                                                  }
                                                );
                                            }
                                        }
                                    );
                                  }
                              );
                            }
                        }
                    );
                  }
              }
          }
        })
      }
    });

    $('.btnSave3').click(function(e){
      e.preventDefault()
      
      var designs=[];
      $('input[name="checkbox3[]"]:checked').each(function () {
        designs[designs.length] = (this.checked ? $(this).val() : "");
      });
      var c = $("input[name='checkbox[]']:checked").val();
          if( c == undefined || designs.length == 0 || designs == undefined || designs == 'undefined'){
              Swal.fire({
                      icon: 'error',
                      title: 'Design not ready.'
                  })
            } 
              else {

                let qty = $('.product-quantity-input').val()
                let size = $('.size span.value').text()
                let material = $('.material span.value').text()
                let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
                let jenis_kertas = $('input[name=jenis_kertas]').val()
                var formDataDesign = $("#forms3").serializeArray();
                var values=[];
                
              $('input[name="checkbox3[]"]:checked').each(function () {
                values[values.length] = (this.checked ? $(this).val() : "");
              });

                let qtyCz = $('#Czquantity3').val()
                let component3 = $('#cp3').val()
                let sizeCz = $('#Csize3').val()
                let cmpcz3 = $('#CMP3').val()
                let materialCz = $('#Czmaterial3').val()
                let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm3]').val()
                let jenis_kertasCz = $('input[name=Czjenis_kertas3]').val()

            Swal.fire({
                  title: 'Are you sure?',
                  html:
                    'Preview <b>to next orders</b>, <br />' +
                    '<code>'+
                      'Orders: <br />'+
                      size+'<br/>'+
                      material+'<br/>'+
                      qty+'<br/>'+
                      values.join(", ")+'<br/>'+
                    '</code> <br />'+'',
                  icon: 'question',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Order now!',
                  cancelButtonText: 'Not now!'
                }).then((result) => {

          if (result.isConfirmed) {

            if(qtyCz = "" || sizeCz == "" || materialCz == "" || cmpcz3 == "" || jenis_kertas_gsmCz == "" || jenis_kertasCz == "" || typeof designs == 'undefined' && designs.length == 0) {

                  Swal.fire(
                  'question!',
                  'Paper type still not loaded, make sure all fields are filled.',
                  'error'
                )

            } 
                else {

                var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                    var filesx = $('#files3')[0].files;
  
                    if(filesx.length > 0){

                    var formData = new FormData();
                    let TotalFiles = $('#files3')[0].files.length;
                    let files = $('#files3')[0];

                    let Cdesign = JSON.stringify(Object.assign({},  formDataDesign));

                    let fLastField = FetchLastComponent().then(function(lastIndex){

                        for (let i = 0; i < TotalFiles; i++) {
                          
                          formData.append('files' + i, files.files[i]);
                          formData.append('_token',CSRF_TOKEN);
                          formData.append('design3', component3);
                          formData.append('component', cmpcz3);
                          formData.append('qty', qtyCz);
                          formData.append('size', sizeCz);
                          formData.append('material', materialCz);
                          formData.append('jenis_kertas', jenis_kertasCz);
                          formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                          formData.append('formDataDesign', Cdesign);
                          formData.append('lastIndex', lastIndex.messageIndex);

                      }

                  formData.append('TotalFiles', TotalFiles);

                      $.ajax({
                        url: "{{route('uploadf_3')}}",
                        method: 'post',
                        data: formData,
                        contentType: false,
                        processData: false,
                        dataType: 'json',                                                                                                                   
                        success: function(response){

                          $('#err_file').removeClass('d-block');
                          $('#err_file').addClass('d-none');

                            if(response.success == false){

                                Swal.fire(
                                  'Information!',
                                  'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                  'error'
                                )
                            }  
                              else {
                          
                               SendOrdersMKT_prt3(component3, cmpcz3, qtyCz, sizeCz, materialCz, response.data.filename, response.data.PATHS, response.data.GetOriginalName, response.data.GetMimeType, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign).then(function(data){
                                        
                                if(data.success == false){
                                        Swal.fire(
                                          'Information!',
                                          'Message failed to process, contact customer service, we will immediately help you..',
                                          'error'
                                        )
                                      } 
                                        else {

                                          Swal.fire({
                                            title: 'Are you sure?',
                                            text: "Order has been processed, Do you want to add more components?",
                                            icon: 'success',
                                            showDenyButton: true,
                                            showCancelButton: true,
                                            denyButtonColor: '#808000',
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Yes!',
                                            cancelButtonText: 'No',
                                            denyButtonText: 'Checkout Now'
                                          }).then((result) => {
                                                if (result.isConfirmed) {
                                                        
                                                    $("#mjrsr4").show()
                                                    $("#btnsaVe3").hide()
                                                    $(".btnupDate3").show()
                                                    $("#uploads3").show()

                                                    $("#dforLabelComponent3").text(cmpcz3)
                                                    $("#dforLabelComponent3").css("position", "relative")
                                                    $("#dforLabelComponent3").css("right", "-556px")
                                                    $("#dforLabelComponent3").addClass("badge badge-success")

                                                  } else if (result.isDenied) {
                                                            
                                                            Swal.fire(
                                                                'Information!',
                                                                'Wait a minute, you will be directed to the checkout process.',
                                                                'info'
                                                              )

                                                              let link = '{!! route("tb.orders.customers") !!}';
                                                              let redirect = link;
                                                                  setTimeout(function(){ 
                                                                          window.location.href = redirect;
                                                              }, 3000);

                                                    } 
                                                      else {

                                                        // hidden this, because order in move in mode immediately table
                                                        // $(".Orders3").show()
                                                        // $("#btnsaVe3").hide()
                                                        // $("#mjrsr4").hide()
                                                        $("#btnsaVe3").hide()
                                                        $(".btnupDate3").show()
                                                    }
                                                }
                                            );
                                        }
                                    }
                                );
                              }
                            },
                            error: function(response){
                                console.log("error : " + JSON.stringify(response) );
                            }
                        }
                      );
                    });
                  }
                      else 
                            {
                      
                              Swal.fire({
                                  title: 'Are you sure?',
                                  text: "do you want to continue, without uploading documents?",
                                  icon: 'question',
                                  allowOutsideClick: false,
                                  showCancelButton: true,
                                  confirmButtonColor: '#3085d6',
                                  cancelButtonColor: '#d33',
                                  confirmButtonText: 'Next!',
                                  cancelButtonText: 'Cancel '
                                }).then((result) => {
                                    if (result.isConfirmed) {

                                    let fLastField = FetchLastComponent().then(function(lastIndex){

                                          SendOrdersMKTnonFILE_prt3(component3, cmpcz3, qtyCz, sizeCz, materialCz, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign, lastIndex.messageIndex).then(function(data){
                                       
                                              if(data.success == false){
                                                Swal.fire(
                                                  'Information!',
                                                  'Message failed to process, contact customer service, we will immediately help you..',
                                                  'error'
                                                )

                                                let link = '{!! route("auth_user.id")  !!}';
                                                let redirect = link;
                                                    setTimeout(function(){ 
                                                            window.location.href = redirect;
                                                }, 1000);
                                              } 
                                                else {
                                                
                                                  Swal.fire({
                                                    title: 'Are you sure?',
                                                    text: "Order has been processed, Do you want to add more components?",
                                                    icon: 'success',
                                                    showDenyButton: true,
                                                    showCancelButton: true,
                                                    denyButtonColor: '#808000',
                                                    confirmButtonColor: '#3085d6',
                                                    cancelButtonColor: '#d33',
                                                    confirmButtonText: 'Yes!',
                                                    cancelButtonText: 'No',
                                                    denyButtonText: 'Checkout Now'
                                                  }).then((result) => {
                                                        if (result.isConfirmed) {
                                                                
                                                            $("#mjrsr4").show()
                                                            $("#stateIdOne3").val(data.data)
                                                            $("#btnsaVe3").hide()
                                                            $(".btnupDate3").show()
                                                            $("#uploads3").show()
                                                            $("#dforLabelComponent3").text(cmpcz3)
                                                            $("#dforLabelComponent3").css("position", "relative")
                                                            $("#dforLabelComponent3").css("right", "-556px")
                                                            $("#dforLabelComponent3").addClass("badge badge-success")

                                                        } else if (result.isDenied) {
                                                            
                                                            Swal.fire(
                                                                'Information!',
                                                                'Wait a minute, you will be directed to the checkout process.',
                                                                'info'
                                                              )

                                                              let link = '{!! route("tb.orders.customers") !!}';
                                                              let redirect = link;
                                                                  setTimeout(function(){ 
                                                                          window.location.href = redirect;
                                                              }, 3000);

                                                          } 
                                                            else {
                                                              
                                                              // hidden this, because order in move in mode immediately table
                                                              // $(".Orders3").show()
                                                              // $("#btnsaVe3").hide()
                                                              // $("#mjrsr3").show()
                                                              $("#btnsaVe3").hide()
                                                              $(".btnupDate3").show()
                                                            }
                                                          }
                                                      );
                                                    }
                                                }
                                            );
                                          }
                                      );
                                    }
                                }
                            );
                        }
                    }
                }
            })
          }
        }
      );


    $('.btnSave4').click(function(e){
      e.preventDefault()
      
      var designs=[];
      $('input[name="checkbox4[]"]:checked').each(function () {
        designs[designs.length] = (this.checked ? $(this).val() : "");
      });
      var c = $("input[name='checkbox[]']:checked").val();
          if( c == undefined || designs.length == 0 || designs == undefined || designs == 'undefined'){
              Swal.fire({
                      icon: 'error',
                      title: 'Design not ready.'
                  })
            } 
              else {

                let qty = $('.product-quantity-input').val()
                let size = $('.size span.value').text()
                let material = $('.material span.value').text()
                let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
                let jenis_kertas = $('input[name=jenis_kertas]').val()
                var formDataDesign = $("#forms4").serializeArray();
                var values=[];
                
              $('input[name="checkbox4[]"]:checked').each(function () {
                values[values.length] = (this.checked ? $(this).val() : "");
              });

                let qtyCz = $('#Czquantity4').val()
                let sizeCz = $('#Csize4').val()
                let design4 = $('#cp4').val()
                let materialCz = $('#Czmaterial4').val()
                let cmpcz4 = $('#CMP4').val()
                let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm4]').val()
                let jenis_kertasCz = $('input[name=Czjenis_kertas4]').val()

            Swal.fire({
                  title: 'Are you sure?',
                  html:
                    'Preview <b>to next orders</b>, <br />' +
                    '<code>'+
                      'Orders: <br />'+
                      size+'<br/>'+
                      material+'<br/>'+
                      qty+'<br/>'+
                      values.join(", ")+'<br/>'+
                    '</code> <br />'+'',
                  icon: 'question',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Order now!',
                  cancelButtonText: 'Not now!'
                }).then((result) => {
          if (result.isConfirmed) {

            if(qtyCz == "" || sizeCz == "" || materialCz == "" || cmpcz4 == "" || jenis_kertas_gsmCz == "" || jenis_kertasCz == "" || typeof designs == 'undefined' && designs.length == 0) {

                  Swal.fire(
                  'question!',
                  'Paper type still not loaded, make sure all fields are filled.',
                  'error'
                )

              } 
                else {

                    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                    var filesx = $('#files4')[0].files;
  
                    if(filesx.length > 0){

                    var formData = new FormData();
                    let TotalFiles = $('#files4')[0].files.length;
                    let file = $('#files4')[0];
                 
                    let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));
                      
                    let fLastField = FetchLastComponent().then(function(lastIndex){

                        for (let i = 0; i < TotalFiles; i++) {
                          
                          formData.append('files' + i, file.files[i]);
                          formData.append('_token',CSRF_TOKEN);
                          formData.append('qty', qtyCz);
                          formData.append('design4', design4);
                          formData.append('component', cmpcz4);
                          formData.append('size', sizeCz);
                          formData.append('material', materialCz);
                          formData.append('jenis_kertas', jenis_kertasCz);
                          formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                          formData.append('formDataDesign', Cdesign);
                          formData.append('lastIndex', lastIndex.messageIndex);

                      }

                    formData.append('TotalFiles', TotalFiles);

                      $('#responseMsg').hide();

                      $.ajax({
                        url: "{{route('uploadf_4')}}",
                        method: 'post',
                        data: formData,
                        contentType: false,
                        processData: false,
                        dataType: 'json',                                                                                                                   
                        success: function(response){

                          $('#err_file').removeClass('d-block');
                          $('#err_file').addClass('d-none');


                          if(response.success == false){

                                Swal.fire(
                                        'Information!',
                                        'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                        'error'
                                      )
                                }  
                                else {

                             SendOrdersMKT_prt4(design4, cmpcz4, qtyCz, sizeCz, materialCz, response.data.filename, response.data.PATHS, response.data.GetOriginalName, response.data.GetMimeType, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign).then(function(data){
                                        
                                if(data.success == false){
                                        Swal.fire(
                                          'Information!',
                                          'Message failed to process, contact customer service, we will immediately help you..',
                                          'error'
                                        )
                                      } 
                                        else {

                                              Swal.fire({
                                                title: 'Are you sure?',
                                                text: "Order has been processed, Do you want to add more components?",
                                                icon: 'success',
                                                showDenyButton: true,
                                                showCancelButton: true,
                                                denyButtonColor: '#808000',
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Yes!',
                                                cancelButtonText: 'No',
                                                denyButtonText: 'Checkout Now'
                                              }).then((result) => {
                                                if (result.isConfirmed) {
                                                        
                                                    $("#mjrsr5").show()
                                                    $("#btnsaVe4").hide()
                                                    $(".btnupDate4").show()
                                                    $("#uploads4").show()

                                                    $("#dforLabelComponent4").text(cmpcz4)
                                                    $("#dforLabelComponent4").css("position", "relative")
                                                    $("#dforLabelComponent4").css("right", "-556px")
                                                    $("#dforLabelComponent4").addClass("badge badge-success")

                                                  } else if (result.isDenied) {
                                                            
                                                            Swal.fire(
                                                                'Information!',
                                                                'Wait a minute, you will be directed to the checkout process.',
                                                                'info'
                                                              )

                                                              let link = '{!! route("tb.orders.customers") !!}';
                                                              let redirect = link;
                                                                  setTimeout(function(){ 
                                                                          window.location.href = redirect;
                                                              }, 3000);

                                                    } 
                                                      else {

                                                        // $(".Orders4").show()
                                                        // $("#btnsaVe4").hide()
                                                        // // $("#mjrsr4").hide()

                                                        $("#btnsaVe").hide()
                                                        $(".btnupDate4").show()
                                                        $("#uploads").show()
                                                        $("#dforLabelComponent").text(cmpcz4)
                                                        $("#dforLabelComponent").css("position", "relative")
                                                        $("#dforLabelComponent").css("right", "-556px")
                                                        $("#dforLabelComponent").addClass("badge badge-success")

                                                }
                                            }
                                        );
                                    }
                                }
                              );
                          }
                          //   else if(response.data.success == 2){

                          //   $('#responseMsg').removeClass("alert-success");
                          //   $('#responseMsg').addClass("alert-danger");
                          //   $('#responseMsg').html(response.data.message);
                          //   $('#responseMsg').show();
                          // }
                          //     else{

                          //         $('#err_file').text(response.data.error);
                          //         $('#err_file').removeClass('d-none');
                          //         $('#err_file').addClass('d-block');
                          //       } 
                                },
                              error: function(response){
                                  console.log("error : " + JSON.stringify(response) );
                              }
                          }
                        );
                      });
                    }
                      else 
                            {
                      
                              Swal.fire({
                                title: 'Are you sure?',
                                text: "do you want to continue, without uploading documents?",
                                icon: 'question',
                                allowOutsideClick: false,
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Next!',
                                cancelButtonText: 'Cancel '
                              }).then((result) => {
                                    if (result.isConfirmed) {

                                    let fLastField = FetchLastComponent().then(function(lastIndex){

                                      SendOrdersMKTnonFILE_prt4(design4, cmpcz4, qtyCz, sizeCz, materialCz, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign, lastIndex.messageIndex).then(function(data){
                                          if(data.success == false){
                                            Swal.fire(
                                              'Information!',
                                              'Message failed to process, contact customer service, we will immediately help you..',
                                              'error'
                                            )

                                              let link = '{!! route("auth_user.id")  !!}';
                                              let redirect = link;
                                                  setTimeout(function(){ 
                                                          window.location.href = redirect;
                                              }, 1000);
                                      } 
                                        else 
                                              {

                                              Swal.fire({
                                                title: 'Are you sure?',
                                                text: "Order has been processed, Do you want to add more components?",
                                                icon: 'success',
                                                showDenyButton: true,
                                                showCancelButton: true,
                                                denyButtonColor: '#808000',
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Yes!',
                                                cancelButtonText: 'No',
                                                denyButtonText: 'Checkout Now'
                                              }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        // $("#mjrsr4").show()
                                                        $("#stateIdOne4").val(data.data)
                                                        $("#btnsaVe4").hide()
                                                        $(".btnupDate4").show()
                                                        $("#uploads4").show()
                                                        $("#dforLabelComponent4").text(cmpOne)
                                                        $("#dforLabelComponent4").css("position", "relative")
                                                        $("#dforLabelComponent4").css("right", "-556px")
                                                        $("#dforLabelComponent4").addClass("badge badge-success")

                                                    } else if (result.isDenied) {
                                                            
                                                            Swal.fire(
                                                                'Information!',
                                                                'Wait a minute, you will be directed to the checkout process.',
                                                                'info'
                                                              )

                                                              let link = '{!! route("tb.orders.customers") !!}';
                                                              let redirect = link;
                                                                  setTimeout(function(){ 
                                                                          window.location.href = redirect;
                                                              }, 3000);

                                                      } 
                                                        else {
                                                            
                                                            // hidden this, because order in move in mode immediately table
                                                            // $(".Orders4").show()
                                                            // $("#btnsaVe4").hide()
                                                            // $("#mjrsr3").hide()
                                                            $("#btnsaVe4").hide()
                                                            $(".btnupDate4").show()
                                                            // next step add more component
                                                      }
                                                  }
                                              );
                                            }
                                          }
                                        );
                                      }
                                  );
                              }
                            }
                        );
                    }
                }
            }
        })
      }
    });

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
          'Wait a minute, can\'t work in mobile browser.',
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
        
    function FirstLoadComponent() {

      async function AsyncTranslator(text) {

        let data = {
                    marks:text,
                }

            const endpoint_masterenders = "{{ route('rest.api.key.lang.end') }}";
                
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
      return new Promise((resolve) => {

          AsyncTranslator($('.size > .label').text()).then(function(rest_api_google){
            $('.size > .label').html(rest_api_google.rest_translate)
          });
          AsyncTranslator($('.material > .label').text()).then(function(rest_api_google){
            $('.material > .label').html(rest_api_google.rest_translate)
          });
          AsyncTranslator($('.quantity > .label').text()).then(function(rest_api_google){
            $('.quantity > .label').html(rest_api_google.rest_translate)
          });

          AsyncTranslator($('#label_component').text()).then(function(rest_api_google){
            $('#label_component').html('&nbsp;&nbsp;'+rest_api_google.rest_translate)
          });

          AsyncTranslator($('#label_papertype').text()).then(function(rest_api_google){
            $('#label_papertype').html(rest_api_google.rest_translate)
          });

          //building translate design-box 
          // progress building.  
          
           $('button.rd-i-tool-pallette-button').each(function (){
                AsyncTranslator($(this, '> p').text()).then(function(rest_api_google){
                  if( $(this).text() == 'design'){
                      setTimeout(() => {
                      $(this).html(rest_api_google.rest_translate)
                          console.log(rest_api_google.rest_translate)
                        }, 1000 );
                  }
                });
          });

            
          $(".rd-i-btn").html("Kirim")
          $('.rd-i-btn').removeClass("rd-i-btn");
          $("#size-tool-custom").hide()
          $("#design-image-editor").hide()
          $('#prvText').hide()
          $(".share-and-save").hide()
          $("#mjrs").hide()
          $(".Orders1SingleComponent").hide()
          $(".Orders1").hide()
          $(".Orders2").hide()
          $(".Orders3").hide()
          $(".Orders4").hide()
          $(".background-color-selector").hide()
          $(".submit-button").hide()
          $(".pd-pane-item-details").hide()
          $(".switch__closed").html("Close Box")
          $(".switch__open").html("Open Box")
          $(".product-name").html("Box 3D ordering :")
          $(".product-info").hide()
          $("#uploads").show()
          $("#uploads2").show()
          $("#mv_tp").hide()
          $("#uploads3").show()
          $("#uploads4").show()
          $("#tools-jenis-gsm").hide()
          $("#tools-jenis-kertas").hide()
          $("#sendingKM").css("display","none")
          $(".rd-i-tool-pallette-button > svg").css("display","none")
          $('#region-selector').css("display","none")
          $(".unit-price").hide()
          $(".ds").hide()
          $(".rd-i-tool-pallette-button-simple").css("display","none")
          $(".subtotal").hide()
          $('#mjrsr2').hide()
          $("#mjrsc1").hide()
          $('#mjrsr3').hide()
          $('#mjrsr4').hide()
          $('#OrderReady').hide()
          $(".product-description").css("display", "none")
          $(".boxCzForSize").show()
          $(".boxCzForSize").css("position", "relative")
          $(".boxCzForSize").css("right", "-90px")
          $(".boxCzForSize").css("top", "-325px")
          var rdi = $(".rd-i-btn").html("Share");

          if( rdi == "Share"){
            var url = '{{ route("dsbox") }}';
                let redirect = url;
                    setTimeout(function(){ 
                    // window.location.href = redirect;
                    FirstLoadComponent()
                }, 3000);
          }
        resolve();
      });
    }

    function LoadPackageVendors() {
      return new Promise((resolve) => {
          zE(function() {
              zE.hide();
          });
        resolve();
      });
    }

    function HandleTexArea() {
      return new Promise((resolve) => {
        var maxchars = 150;
          $('textarea').keyup(function () {
              var tlength = $(this).val().length;
              $(this).val($(this).val().substring(0, maxchars));
              var tlength = $(this).val().length;
              remain = maxchars - parseInt(tlength);
              $('#remain').text(remain);
          });
        resolve();
      });
    }

    async function fnAsyncLoadComponents() {
      await FirstLoadComponent();
      await LoadPackageVendors();
      await HandleTexArea();
    }
    
  setTimeout(() => { 
    fnAsyncLoadComponents();
  }, 2000);
  
  setTimeout(() => {
    wdtLoading.done();
  }, 13500);

  setTimeout(() => {
    $(".klaviyo-form").css("display","none")
    $(".kl-private-reset-css-Xuajs1").css("display","none")
  }, 35995);

  setTimeout(() => {
    $(".klaviyo-form").css("display","none")
    $(".kl-private-reset-css-Xuajs1").css("display","none")
  }, 35997);

  setTimeout(() => {
    $(".klaviyo-form").css("display","none")
    $(".kl-private-reset-css-Xuajs1").css("display","none")
  }, 35996);
  
  setTimeout(() => {
    $(".klaviyo-form").css("display","none")
    $(".kl-private-reset-css-Xuajs1").css("display","none")
  }, 36000);

  setTimeout(() => {
    $(".klaviyo-form").css("display","none")
    $(".kl-private-reset-css-Xuajs1").css("display","none")
  }, 35998);

  setTimeout(() => {
    $(".klaviyo-form").css("display","none")
    $(".kl-private-reset-css-Xuajs1").css("display","none")
  }, 36102);

  setTimeout(() => {
    $(".klaviyo-form").css("display","none")
    $(".kl-private-reset-css-Xuajs1").css("display","none")
  }, 36105);

}(jQuery));

(function($) {

window.onbeforeunload = function() {
  return "Are you sure leave this page ?";
}

function HandleCanvasComponent() {
      return new Promise((resolve) => {
              $('body').on('click','.p-dap',function(e){
              $(".boxCzForSize").css("position", "relative")
              $(".boxCzForSize").css("right", "-90px")
              $(".boxCzForSize").css("top", "-327px")
              $('.pdesigner-box-viewer').css("display","none");
              $('.size-tool-stock').css("display","none");
              $('.pdesigner-box-viewer > canvas').css("position","absoulte");
              $(".product-description").css("display", "none")
              $(".product-material").css("display", "none")
              $(".quantity").css("display", "none")
              $(".product-size").css("display", "none")
              $(".size").css("display", "none")
              $(".material").css("display", "none")
              $(".product-quantity").css("display", "none")
              $(".print-method").css("display", "none")
              $(".jk-m").css("top", "-373px")
              $(".jk-l").css("top", "-367px")
              $(".btnupDate1").css("display","none")
              $(".btnupDate2").css("display","none")
              $(".btnupDate3").css("display","none")
              $(".btnupDate4").css("display","none")
              $("#mjrsc1").hide()
              $("#tools-component").hide()
              $("#mjrs").show()
              $('#mv_tp').show()

              $("#OrderReady").hide()
              $("#sendingKM").hide()
              $("#sample_cetakan").css("top", "-280px")
              $("#tool-pallette").css("display","inline")
              $("#tool-details").css("display","none")
              $(".ds").css("display","inline")
              $(".jk-l").hide()
              $(".jk-m").hide()
              $(".jk-m").css("position", "relative")
              $(".jk-m").css("top", "-523px")
              $(".jk-m").css("just-content", "space-between")
              $(".jk-m").css("font-size", "14px")
              $(".jk-m").css("width", "280px")
              $(".jk-m").css("display", "flex")
              $(".jk-m").css("right", "-976px")
              $(".jk-m").css("min-height", "10px")
              $(".jk-m").css("background-color", "background-color: rgb(249, 249, 249)");
              $(".jk-m").css("align-items", "center")
              $(".jk-m").css("border-bottom", "2px solid rgb(244, 244, 244)")

              $(".jk-l").css("position", "relative")
              $(".jk-l").css("top", "-523px")
              $(".jk-l").css("just-content", "space-between")
              $(".jk-l").css("font-size", "14px")
              $(".jk-l").css("width", "280px")
              $(".jk-l").css("display", "flex")
              $(".jk-l").css("right", "-976px")
              $(".jk-l").css("min-height", "10px")
              $(".jk-l").css("background-color", "background-color: rgb(249, 249, 249)");
              $(".jk-l").css("align-items", "center")
              $(".jk-l").css("border-bottom", "2px solid rgb(244, 244, 244)")
          });
        resolve();
      });
    }

    
    function HandleComponentMaterialItem() {
          return new Promise((resolve) => {
            $('body').on('click','.rd-i-material-item > .material-name',function(e){
                e.preventDefault();
                if($(this, '> h3').text() == 'White') {
                    $(".jk-m").css("top", "-523px")
                    $(".jk-m").css("position", "relative")
                    $(".jk-l").css("position", "relative")
                    $(".jk-l").css("top", "-523px")
                    $("#mv_tp").hide()

                    $(".boxCzForSize").show()
                    $(".boxCzForSize").css("position", "relative")
                    $(".boxCzForSize").css("right", "-90px")
                    $(".boxCzForSize").css("top", "-327px")
                  } 

                  if($(this, '> h3').text() == 'Dreamcoat') {
                    $(".jk-m").css("top", "-523px")
                    $(".jk-m").css("position", "relative")
                    $(".jk-l").css("position", "relative")
                    $(".jk-l").css("top", "-523px")
                    $("#mv_tp").hide()

                    $(".boxCzForSize").show()
                    $(".boxCzForSize").css("position", "relative")
                    $(".boxCzForSize").css("right", "-90px")
                    $(".boxCzForSize").css("top", "-411px")
                  } 

                  if($(this, '> h3').text() == 'Kraft') {
                    $(".jk-m").css("top", "-523px")
                    $(".jk-m").css("position", "relative")
                    $(".jk-l").css("position", "relative")
                    $(".jk-l").css("top", "-523px")
                    $(".print-method").css("display", "inline")
                    $("#mv_tp").hide()

                    $(".boxCzForSize").show()
                    $(".boxCzForSize").css("position", "relative")
                    $(".boxCzForSize").css("right", "-90px")
                    $(".boxCzForSize").css("top", "-327px")

                  } 
              });
            resolve();
          });
        }

    async function fnAsyncLoadCanvasComponents() {
      await HandleCanvasComponent();
    }

    async function fnAsyncLoadMaterialItemComponents() {
      await HandleComponentMaterialItem();
    }

    async function fnAsyncLoadMaterialDescriptionComponents() {
      await HandleComponentMaterialDescription();
    }
    

    function HandleComponentMaterialDescription() {
      return new Promise((resolve) => {
        $('body').on('click','.rd-i-material-item > .material-description',function(e){
            e.preventDefault();
            if($(this, '> p').text() == 'Premium bright white cardboard.') {
                $(".jk-m").css("top", "-523px")
                $(".jk-m").css("position", "relative")
                $(".jk-l").css("position", "relative")
                $(".jk-l").css("top", "-523px")
                $("#mv_tp").hide()

                $(".boxCzForSize").show()
                $(".boxCzForSize").css("position", "relative")
                $(".boxCzForSize").css("right", "-90px")
                $(".boxCzForSize").css("top", "-409px")
              } 

              if($(this, '> p').text() == 'Classic matte white cardboard printed with a satin finish.') {
                $(".jk-m").css("top", "-523px")
                $(".jk-m").css("position", "relative")
                $(".jk-l").css("position", "relative")
                $(".jk-l").css("top", "-523px")
                $("#mv_tp").hide()

                $(".boxCzForSize").show()
                $(".boxCzForSize").css("position", "relative")
                $(".boxCzForSize").css("right", "-90px")
                $(".boxCzForSize").css("top", "-327px")
              } 

              if($(this, '> p').text() == 'Natural matte brown cardboard printed with a satin finish.') {
                $(".jk-m").css("top", "-523px")
                $(".jk-m").css("position", "relative")
                $(".jk-l").css("position", "relative")
                $(".jk-l").css("top", "-523px")
                $(".print-method").css("display", "inline")
                $("#mv_tp").hide()

                $(".boxCzForSize").show()
                $(".boxCzForSize").css("position", "relative")
                $(".boxCzForSize").css("right", "-90px")
                $(".boxCzForSize").css("top", "-327px")
              } 
          });
        resolve();
      });
    }

setTimeout(() => { 
    
    fnAsyncLoadCanvasComponents();

    fnAsyncLoadMaterialItemComponents();
   
    fnAsyncLoadMaterialDescriptionComponents();

}, 2000);

}(jQuery));

  $(document).ready(function(){
      $('#launcher').load(function(){
            $("#launcher").css("display", "none"); 
            zE(function() {
        zE.hide();
      });
    });

    $('body').on('click','button.rd-i-tool-pallette-button-simple',function(e){
      e.preventDefault();
      if($(this, ' > p').text() == 'reset') {
          $("#tools-jenis-gsm").hide()
          $("#tools-jenis-kertas").hide()
          // alert('ini material')
          $(".ds").hide()
          $("#sendingKM").hide()
        }
    });

    setTimeout(() => {

    $('body').on('click','button.rd-i-tool-pallette-button',function(e){
      e.preventDefault();

        if($(this, ' > p').text() == 'design') {
          $("#tools-component").show()
          $("#tools-jenis-gsm").hide()
          $("#tools-jenis-kertas").hide()
            // $(this, '> p').html('DECORATIF')
          $("#mv_tp").show()  
          $(".ds").show()
          $("#sendingKM").hide()
          // $('#tool-details').css("display","none")
          $("#OrderReady").hide()
          $(".quantity").show()
          $(".size").show()
          $(".material").show()
          $("#mjrsc1").show()
          $("#mjrs").hide()
          $("#btnupDate").hide()
          $("#mjrsr2").hide()
          $("#mjrsr3").hide()
          $("#mjrsr4").hide()
          $(".boxCz").css("right", "645px")
          $(".boxCz").css("top", "198px")
          $("#btnsaVeSingleComponent").show()
          $('.pdesigner-box-viewer').css("display","inline");
          $('.pdesigner-box-viewer > canvas').css("position","absoulte");
          $(".product-description").hide()
          $(".product-material").show()
          $(".product-size").show()
          $(".product-quantity").show()
          $(".print-method").hide()
          $("#tool-details").show()
          $(".jk-l").show()
          $(".jk-m").show()
          $(".boxCzForSize").show()
          $(".boxCzForSize").css("position", "relative")
          $(".boxCzForSize").css("right", "-90px")
          $(".boxCzForSize").css("top", "-327px")

        }

        if($(this, ' > p').text() == 'size') {

            $("#tools-jenis-gsm").hide()
            $("#tools-jenis-kertas").hide()
            $(".size > .item").show()
            $(".quantity > .item").show()
            $(".material > .item").show()

            $("#tool-details").css("display","inline")
            $(".product-description").css("display", "none")
            $(".quantity").show()
            $(".size").show()
            $(".material").show()
            $(".boxCzForSize").show()
            $(".boxCzForSize").css("position", "relative")
            $(".boxCzForSize").css("right", "-90px")
            $(".boxCzForSize").css("top", "-327px")
            $("#btnsaVeSingleComponent").show()
            $(".product-info").show()
            $('#mjrsc1').hide()
            $('#mv_tp').hide()
            $("#OrderReady").hide()
            $("#OrderReady").css("top","-15px")
            $(".ds").show()
            $("#sendingKM").hide()
            $("#mjrs").hide()
            $("#mjrsr2").hide()
            $("#mjrsr3").hide()
            $("#mjrsr4").hide()
            $('.pdesigner-box-viewer').css("display","inline")
            $("#boxCUSTOMforSize").show()
            $("#tools-component").show()

            $(".boxCzForSize").show()
            $(".boxCzForSize").css("position", "relative")
            $(".boxCzForSize").css("right", "-90px")
            $(".boxCzForSize").css("top", "-327px")

        }
        
        if($(this, ' > p').text() == 'material') {
          
          $('#mjrsc1').hide()
          $("#OrderReady").hide()
          $(".jk-m").css("top", "-523px")
          $("#tools-component").hide()
          $(".jk-m").css("position", "absolute")
          $(".jk-l").css("position", "absolute")
          $(".jk-l").css("top", "-469px")
          $(".product-description").hide()
          $(".product-material").show()
          $(".product-size").show()
          $(".size").show()
          $('#mv_tp').hide()
          $(".quantity").hide()
          $(".material").show()
          $(".product-quantity").show()
          $(".print-method").show()
          $("#tool-details").show()
          $(".jk-l").show()
          $(".jk-m").show()
          $(".ds").show()
          $("#btnsaVeSingleComponent").show()
          $("#tools-jenis-gsm").show()
          $("#tools-jenis-kertas").show()
          $(".ds").show()
          $("#sendingKM").hide()
          $("#mjrs").hide()
          $("#mjrsr2").hide()
          $("#mjrsr3").hide()
          $("#mjrsr4").hide()
          $('.pdesigner-box-viewer').css("display","inline");
          $("#tools-component").hide()

          $(".boxCzForSize").show()
          $(".boxCzForSize").css("position", "relative")
          $(".boxCzForSize").css("right", "-90px")
          $(".boxCzForSize").css("top", "-327px")

        }

    });
  });

}, 2000);

  $('body').on('click','button.scroll-list-option',function(){
    $(".submit-button").hide();
  });

        async function SendOrdersMKT(design1, component, qty, size, material, filename, path, getOriginalName, getMimeType, jenis_kertas_gsm, jenis_kertas, form) {

              let data = {
                        design1:design1,
                        size:size,
                        cmpcz:component,
                        quantity:qty,
                        material:material,
                        filename:filename,
                        filepaths:path,
                        originalnames:getOriginalName,
                        mime:getMimeType,
                        jenis_kertas_gsm:jenis_kertas_gsm,
                        jenis_kertas: jenis_kertas,
                        design: form
                    }

            const Workoders = "{{ route('orders.mkt') }}";
                    
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

        async function SendOrdersMKT_prt2(component, qty, size, material, filename, path, getOriginalName, getMimeType, jenis_kertas_gsm, jenis_kertas, form) {

            let data = {
                      size:size,
                      quantity:qty,
                      component:component,
                      material:material,
                      filename:filename,
                      filepaths:path,
                      originalnames:getOriginalName,
                      mime:getMimeType,
                      jenis_kertas_gsm:jenis_kertas_gsm,
                      jenis_kertas: jenis_kertas,
                      design: form
                  }

            const Workoders = "{{ route('orders.mkt.prt2') }}";
                  
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

           async function SendOrdersMKT_prt3(component3, component, qty, size, material, filename, path, getOriginalName, getMimeType, jenis_kertas_gsm, jenis_kertas, form) {

                let data = {
                          size:size,
                          design3:component3,
                          component:component,
                          quantity:qty,
                          material:material,
                          filename:filename,
                          filepaths:path,
                          originalnames:getOriginalName,
                          mime:getMimeType,
                          jenis_kertas_gsm:jenis_kertas_gsm,
                          jenis_kertas: jenis_kertas,
                          design: form
                      }

                const Workoders = "{{ route('orders.mkt.prt3') }}";
                      
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

          async function SendOrdersMKT_prt4(design4, component, qty, size, material, filename, path, getOriginalName, getMimeType, jenis_kertas_gsm, jenis_kertas, form) {

              let data = {
                        size:size,
                        design4:design4,
                        component:component,
                        quantity:qty,
                        material:material,
                        filename:filename,
                        filepaths:path,
                        originalnames:getOriginalName,
                        mime:getMimeType,
                        jenis_kertas_gsm:jenis_kertas_gsm,
                        jenis_kertas: jenis_kertas,
                        design: form
                    }

              const Workoders = "{{ route('orders.mkt.prt4') }}";
                    
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

        async function SendOrdersMKTnonFILE(design1, component, qty, size, material, jenis_kertas_gsm, jenis_kertas, form, defComponent, lastcomponent) {

              let data = {
                        design1:design1,
                        size:size,
                        definitionSingleComponent:defComponent,
                        componentcz:component,
                        quantity:qty,
                        material:material,
                        jenis_kertas_gsm:jenis_kertas_gsm,
                        jenis_kertas: jenis_kertas,
                        lastcomponent:lastcomponent,
                        design: form
                    }

                      const Workoders = "{{ route('orders.nonfile.mkt') }}";
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

        async function FetchLastComponent() {

          let data = {}

                  const Workoders = "{{ route('orders.nonfile.LastComponentIndex') }}";
                        
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

        async function SendOrdersMKTnonFILE_prt2(component2, component, qty, size, material, jenis_kertas_gsm, jenis_kertas, form, lastcomponent) {

              let data = {
                          size:size,
                          design2:component2,
                          quantity:qty,
                          lastcomponent:lastcomponent,
                          quantity:qty,
                          material:material,
                          component:component,
                          jenis_kertas_gsm:jenis_kertas_gsm,
                          jenis_kertas: jenis_kertas,
                          design: form
                    }

              const Workoders = "{{ route('orders.nonfile.mkt.prt2') }}";
                    
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

           async function SendOrdersMKTnonFILE_prt3(component3, component, qty, size, material, jenis_kertas_gsm, jenis_kertas, form, lastcomponent) {

              let data = {
                          design3:component3,
                          size:size,
                          lastcomponent:lastcomponent,
                          component:component,
                          quantity:qty,
                          material:material,
                          jenis_kertas_gsm:jenis_kertas_gsm,
                          jenis_kertas: jenis_kertas,
                          design: form
                    }

              const Workoders = "{{ route('orders.nonfile.mkt.prt3') }}";
                    
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

        async function SendOrdersMKTnonFILE_prt4(design4, component, qty, size, material, jenis_kertas_gsm, jenis_kertas, form, lastcomponent) {

            let data = {
                      size:size,
                      quantity:qty,
                      lastcomponent:lastcomponent,
                      design4:design4,
                      material:material,
                      component:component,
                      jenis_kertas_gsm:jenis_kertas_gsm,
                      jenis_kertas: jenis_kertas,
                      design: form
                  }

            const Workoders = "{{ route('orders.nonfile.mkt.prt4') }}";
                  
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

      RenderAPIAboutCompany().then(function(data){
            $('#designbx_address_footer').append(data.data.address)
            $('#designbx_phone_footer').append(data.data.phone)
            $('#designbx_fax_footer').append(data.data.Fax)
            $('#designbx_email_footer').append(data.data.Email)
            $('#designbx_url_footer').append(data.data.URL)
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

        function getFileName (str) {
          if (str.length > 22) {
            return str.substr(0, 11) + '...' + str.substr(-11)
          }

          return str
        }
        $("#label_fs").hide()
        
        /** 
          component Single Component
        */
        document.getElementById('filessd').addEventListener('change', function(e) {
          var list = document.getElementById('filenssd');
          $("#label_fs").show()
          list.innerHTML = '';
          for (var i = 0; i < this.files.length; i++) {
            list.innerHTML += (i + 1) + '. ' + getFileName(this.files[i].name) + '\n';
          }
          if (list.innerHTML == '') list.style.display = 'none';
          else list.style.display = 'block';
        });

          // $('input[type="file"]#file').change(function(e){
          //     var geekss = getFileName(e.target.files[0].name);
          //     $('#filen').text(geekss);
          // });

            /** 
              component #1
            */
          document.getElementById('file').addEventListener('change', function(e) {
            var list = document.getElementById('filen');
            list.innerHTML = '';
            for (var i = 0; i < this.files.length; i++) {
              list.innerHTML += (i + 1) + '. ' + getFileName(this.files[i].name) + '\n';
            }
            if (list.innerHTML == '') list.style.display = 'none';
            else list.style.display = 'block';
          });

          // $('input[type="file"]#files').change(function(e){
          //     var geekss = getFileName(e.target.files[0].name);
          //     $('#filen2').text(geekss);
          // });


          /** 
            component #2
          */
          document.getElementById('files').addEventListener('change', function(e) {
            var list = document.getElementById('filen2');
            list.innerHTML = '';
            for (var i = 0; i < this.files.length; i++) {
              list.innerHTML += (i + 1) + '. ' + getFileName(this.files[i].name) + '\n';
            }
            if (list.innerHTML == '') list.style.display = 'none';
            else list.style.display = 'block';
          });

           /** 
            component #3
          */
          document.getElementById('files3').addEventListener('change', function(e) {
            var list = document.getElementById('filen3');
            list.innerHTML = '';
            for (var i = 0; i < this.files.length; i++) {
              list.innerHTML += (i + 1) + '. ' + getFileName(this.files[i].name) + '\n';
            }
            if (list.innerHTML == '') list.style.display = 'none';
            else list.style.display = 'block';
          });

          /** 
          component #3
          */
          document.getElementById('files4').addEventListener('change', function(e) {
            var list = document.getElementById('filen4');
            list.innerHTML = '';
            for (var i = 0; i < this.files.length; i++) {
              list.innerHTML += (i + 1) + '. ' + getFileName(this.files[i].name) + '\n';
            }
            if (list.innerHTML == '') list.style.display = 'none';
            else list.style.display = 'block';
          });

          // $('input[type="file"]#files').change(function(e){
          //     var geekss = getFileName(e.target.files[0].name);
          //     $('#filen2').text(geekss);
          // });

    $('.Orders4').click(function(e){
      e.preventDefault();
      var values=[];
      $('input[name="checkbox[]"]:checked').each(function () {
        values[values.length] = (this.checked ? $(this).val() : "");
      });

      $(".container-3PFIa").hide() 
      let qty = $('.product-quantity-input').val()
      let size = $('.size span.value').text()
      let material = $('.material span.value').text()
      let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
      let jenis_kertas = $('input[name=jenis_kertas]').val()
      var formData = $("#forms").serializeArray();

      Swal.fire({
            title: 'Are you sure? #fixedOrders 4',
            html:
              'Preview <b>to next orders</b>, <br />' +
              '<code>'+
                'Orders: <br />'+
                size+'<br/>'+
                material+'<br/>'+
                qty+'<br/>'+
                values.join(", ")+'<br/>'+
              '</code> <br />'+
              '',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Order now!',
            cancelButtonText: 'Not now!'
          }).then((result) => {
            if (result.isConfirmed) {

              var designs=[];
              $('input[name="checkbox[]"]:checked').each(function () {
                designs[designs.length] = (this.checked ? $(this).val() : "");
              });

                var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                    var files = $('#file')[0].files;

                      var fd = new FormData();

                      fd.append('file',files[0]);
                      fd.append('_token',CSRF_TOKEN);

                      $('#responseMsg').hide();
                      $.ajax({
                        url: "{{route('orders.order_customers.to.mkt')}}",
                        method: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        beforeSend: function(evt) {   
                            const bfrSend = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 100000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                              })
                              
                              bfrSend.fire({
                                  icon: 'info',
                                  title: 'Retrieving data, data is being processed..'
                              })

                          },
                        success: function(response){

                          if(response.status == false){

                            Swal.fire(
                                    'Information!',
                                    'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                    'error'
                                  )
                          }  else {
                            
                            if(response.success == true){
                              Swal.fire(
                                    'Information!',
                                    'Order has been processed, We have sent your file to our marketing team.',
                                    'success'
                                  )
                            } 
                              else {
                                  
                                Swal.fire(
                                    'Information!',
                                    'Message failed to process, contact customer service, we will immediately help you.. , because you have sent this file before, if you experience problems, please contact our customer service immediately.',
                                    'error'
                                  )
                              }
                          }
                      },
                      error: function(response){
                          console.log("error : " + JSON.stringify(response) );
                        }
                      }
                  );
                // }                                                                                                                                          
            }
        })
    });

    $('.Orders3').click(function(e){
      e.preventDefault();
      var values=[];
      $('input[name="checkbox[]"]:checked').each(function () {
        values[values.length] = (this.checked ? $(this).val() : "");
      });

      $(".container-3PFIa").hide() 
      let qty = $('.product-quantity-input').val()
      let size = $('.size span.value').text()
      let material = $('.material span.value').text()
      let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
      let jenis_kertas = $('input[name=jenis_kertas]').val()
      var formData = $("#forms").serializeArray();

      Swal.fire({
            title: 'Are you sure? #fixedOrders 3',
            html:
              'Preview <b>to next orders</b>, <br />' +
              '<code>'+
                'Orders: <br />'+
                size+'<br/>'+
                material+'<br/>'+
                qty+'<br/>'+
                values.join(", ")+'<br/>'+
              '</code> <br />'+
              '',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Order now!',
            cancelButtonText: 'Not now!'
          }).then((result) => {
            if (result.isConfirmed) {

              var designs=[];
              $('input[name="checkbox[]"]:checked').each(function () {
                designs[designs.length] = (this.checked ? $(this).val() : "");
              });

                var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                    var files = $('#file')[0].files;

                      var fd = new FormData();

                      fd.append('file',files[0]);
                      fd.append('_token',CSRF_TOKEN);

                      $('#responseMsg').hide();
                      $.ajax({
                        url: "{{route('orders.order_customers.to.mkt')}}",
                        method: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        beforeSend: function(evt) {   
                            const bfrSend = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 100000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                              })
                              
                              bfrSend.fire({
                                  icon: 'info',
                                  title: 'Retrieving data, data is being processed..'
                              })

                          },
                        success: function(response){

                          if(response.status == false){

                            Swal.fire(
                                    'Information!',
                                    'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                    'error'
                                  )
                          }  else {
                            
                            if(response.success == true){
                              Swal.fire(
                                    'Information!',
                                    'Order has been processed, We have sent your file to our marketing team.',
                                    'success'
                                  )
                            } 
                              else {
                                  
                                Swal.fire(
                                    'Information!',
                                    'Message failed to process, contact customer service, we will immediately help you.. , because you have sent this file before, if you experience problems, please contact our customer service immediately.',
                                    'error'
                                  )
                              }
                          }
                      },
                      error: function(response){
                          console.log("error : " + JSON.stringify(response) );
                        }
                      }
                  );
                // }                                                                                                                                          
            }
        })
    });

    $('.Orders2').click(function(e){
      e.preventDefault();
      var values=[];
      $('input[name="checkbox[]"]:checked').each(function () {
        values[values.length] = (this.checked ? $(this).val() : "");
      });

      $(".container-3PFIa").hide() 
      let qty = $('.product-quantity-input').val()
      let size = $('.size span.value').text()
      let material = $('.material span.value').text()
      let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
      let jenis_kertas = $('input[name=jenis_kertas]').val()
      var formData = $("#forms").serializeArray();

      Swal.fire({
            title: 'Are you sure? #fixedOrders 2',
            html:
              'Preview <b>to next orders</b>, <br />' +
              '<code>'+
                'Orders: <br />'+
                size+'<br/>'+
                material+'<br/>'+
                qty+'<br/>'+
                values.join(", ")+'<br/>'+
              '</code> <br />'+
              '',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Order now!',
            cancelButtonText: 'Not now!'
          }).then((result) => {
            if (result.isConfirmed) {

              var designs=[];
              $('input[name="checkbox[]"]:checked').each(function () {
                designs[designs.length] = (this.checked ? $(this).val() : "");
              });

                var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                    var files = $('#file')[0].files;

                      var fd = new FormData();

                      fd.append('file',files[0]);
                      fd.append('_token',CSRF_TOKEN);

                      $('#responseMsg').hide();
                      $.ajax({
                        url: "{{route('orders.order_customers.to.mkt')}}",
                        method: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        beforeSend: function(evt) {   
                            const bfrSend = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 100000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                              })
                              
                              bfrSend.fire({
                                  icon: 'info',
                                  title: 'Retrieving data, data is being processed..'
                              })

                          },
                        success: function(response){

                          if(response.status == false){

                            Swal.fire(
                                    'Information!',
                                    'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                    'error'
                                  )
                          }  else {
                            
                            if(response.success == true){
                              Swal.fire(
                                    'Information!',
                                    'Order has been processed, We have sent your file to our marketing team.',
                                    'success'
                                  )
                            } 
                              else {
                                  
                                Swal.fire(
                                    'Information!',
                                    'Message failed to process, contact customer service, we will immediately help you.. , because you have sent this file before, if you experience problems, please contact our customer service immediately.',
                                    'error'
                                  )
                              }
                          }
                      },
                      error: function(response){
                          console.log("error : " + JSON.stringify(response) );
                        }
                      });
                // }                                                                                                                                          
            }
        })
    });
    
    $('#OrderReady').click(function(e){
      e.preventDefault();

      let qty = $('.product-quantity-input').val()
      let size = $('.size span.value').text()
      let finished = $('.print-method span.value').text()
      let material = $('.material span.value').text()
      let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
      let jenis_kertas = $('input[name=jenis_kertas]').val()

        Swal.fire({
            title: 'Are you sure? #fixedOrders Normally',
            html:
              'Preview <b>to next orders</b>, <br />' +
              '<code>'+
                'Orders: <br />'+
                size+'<br/>'+
                material+'<br/>'+
                qty+'<br/>'+
              '</code> <br />'+
              '',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Order now!',
            cancelButtonText: 'Not now!'
          }).then((result) => {
            if (result.isConfirmed) {

              if(qty == "" || jenis_kertas_gsm == "" || jenis_kertas == "") {
                    Swal.fire(
                    'question!',
                    'Paper type still not loaded, make sure all fields are filled.',
                    'error'
                    )
                } 
                
                else {
                    
                  var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                  var files = $('#file')[0].files;
                  var fd = new FormData();
                      fd.append('_token',CSRF_TOKEN);
                      fd.append('cmpz', finished);
                      fd.append('size', size);
                      fd.append('qty', qty);
                      fd.append('material', material);
                      fd.append('jenis_kertas', jenis_kertas);
                      fd.append('jenis_kertas_gsm', jenis_kertas_gsm);

                      $('#responseMsg').hide();
                      $.ajax({
                        url: "{{route('orders.order_customers.to.mkt.only')}}",
                        method: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        beforeSend: function(evt) {   
                            const bfrSend = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 100000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                              })
                              
                          bfrSend.fire({
                              icon: 'info',
                              title: 'Retrieving data, data is being processed..'
                          })

                      },
                      success: function(response){

                        if(response.success == false){

                            Swal.fire(
                              'Information!',
                              'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                              'warning'
                            )

                        } 
                          else {
                          
                              if(response.success == true){

                                Swal.fire(
                                      'Information!',
                                      'Order has been processed, We have sent your file to our marketing team.',
                                      'success'
                                    )
                              } 

                              else {
                                    
                              Swal.fire(
                                  'Information!',
                                  'Message failed to process, contact customer service, we will immediately help you.. , because you have sent this file before, if you experience problems, please contact our customer service immediately.',
                                  'error'
                                )
                            }
                         }
                      },
                      error: function(response){
                          console.log("error : " + JSON.stringify(response) );
                        }
                      }
                  );
                }                                                                                                                                          
            }
        })
    });

    $('.Orders1').click(function(e){
      e.preventDefault();
      var values=[];
      $('input[name="checkbox[]"]:checked').each(function () {
        values[values.length] = (this.checked ? $(this).val() : "");
      });

      $(".container-3PFIa").hide() 
      let qty = $('.product-quantity-input').val()
      let size = $('.size span.value').text()
      let material = $('.material span.value').text()
      let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
      let jenis_kertas = $('input[name=jenis_kertas]').val()
      var formData = $("#forms").serializeArray();

      Swal.fire({
            title: 'Are you sure? #fixedOrders 1',
            html:
              'Preview <b>to next orders</b>, <br />' +
              '<code>'+
                'Orders: <br />'+
                size+'<br/>'+
                material+'<br/>'+
                qty+'<br/>'+
                values.join(", ")+'<br/>'+
              '</code> <br />'+
              '',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Order now!',
            cancelButtonText: 'Not now!'
          }).then((result) => {
            if (result.isConfirmed) {

              var designs=[];
              $('input[name="checkbox[]"]:checked').each(function () {
                designs[designs.length] = (this.checked ? $(this).val() : "");
              });

                var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                    var files = $('#file')[0].files;

                      var fd = new FormData();

                      fd.append('file',files[0]);
                      fd.append('_token',CSRF_TOKEN);

                      $('#responseMsg').hide();
                      $.ajax({
                        url: "{{route('orders.order_customers.to.mkt')}}",
                        method: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        beforeSend: function(evt) {   
                            const bfrSend = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 100000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                              })
                              
                              bfrSend.fire({
                                  icon: 'info',
                                  title: 'Retrieving data, data is being processed..'
                              })

                          },
                        success: function(response){

                          if(response.status == false){

                            Swal.fire(
                                    'Information!',
                                    'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                    'error'
                                  )
                          }  else {
                            
                            if(response.success == true){
                              Swal.fire(
                                    'Information!',
                                    'Order has been processed, We have sent your file to our marketing team.',
                                    'success'
                                  )
                            } 
                              else {
                                  
                                Swal.fire(
                                    'Information!',
                                    'Message failed to process, contact customer service, we will immediately help you.. , because you have sent this file before, if you experience problems, please contact our customer service immediately.',
                                    'error'
                                  )
                              }
                          }
                      },
                      error: function(response){
                          console.log("error : " + JSON.stringify(response) );
                        }
                      });
                // }                                                                                                                                          
            }
        })
    });
    

  $('body').on('click','button#sendingKM',function(e){
    e.preventDefault();
    var values=[];
    $('input[name="checkbox[]"]:checked').each(function () {
      values[values.length] = (this.checked ? $(this).val() : "");
    });

    $(".container-3PFIa").hide() 
    let qty = $('.product-quantity-input').val()
    let size = $('.size span.value').text()
    let material = $('.material span.value').text()
    let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
    let jenis_kertas = $('input[name=jenis_kertas]').val()
    var formData = $("#forms").serializeArray();
  
    // var c = $("input[name='checkbox[]']:checked").val();
    //       if( c == undefined){
    //           Swal.fire({
    //                   icon: 'error',
    //                   title: 'Design not ready.'
    //               })
            // } else {
        Swal.fire({
            title: 'Are you sure?',
            // text: "You won't be able to revert this!",
            html:
              'Preview <b>to next orders</b>, <br />' +
              '<code>'+
                'Orders: <br />'+
                size+'<br/>'+
                material+'<br/>'+
                qty+'<br/>'+
                values.join(", ")+'<br/>'+
              '</code> <br />'+
              '',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Order now!',
            cancelButtonText: 'Not now!'
          }).then((result) => {
            if (result.isConfirmed) {

              var designs=[];
              $('input[name="checkbox[]"]:checked').each(function () {
                designs[designs.length] = (this.checked ? $(this).val() : "");
              });

                var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                    var files = $('#file')[0].files;

                      var fd = new FormData();

                      fd.append('file',files[0]);
                      fd.append('_token',CSRF_TOKEN);

                      $('#responseMsg').hide();
                      $.ajax({
                        url: "{{route('orders.order_customers.to.mkt')}}",
                        method: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        beforeSend: function(evt) {   
                            const bfrSend = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 100000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                              })
                              
                              bfrSend.fire({
                                  icon: 'info',
                                  title: 'Retrieving data, data is being processed..'
                              })

                          },
                        success: function(response){

                          if(response.status == false){

                            Swal.fire(
                                    'Information!',
                                    'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                    'error'
                                  )
                          }  else {
                            
                            if(response.success == true){
                              Swal.fire(
                                    'Information!',
                                    'Order has been processed, We have sent your file to our marketing team.',
                                    'success'
                                  )
                            } 
                              else {
                                  
                                Swal.fire(
                                    'Information!',
                                    'Message failed to process, contact customer service, we will immediately help you.. , because you have sent this file before, if you experience problems, please contact our customer service immediately.',
                                    'error'
                                  )
                              }
                          }
                      },
                      error: function(response){
                          console.log("error : " + JSON.stringify(response) );
                        }
                      });
                // }                                                                                                                                          
            }
        })
      // }
  });

  $('body').on('ready','div.pd-pane-item-details',function(e){
    e.preventDefault();
    $(".rd-i .remove-image-button").hide();
    $(".rd-i .remove-image-button").hide();
    $(".react-file-reader-button").hide();

  });
 
  $('body').on('ready','div#design-region-color',function(){
    // $(this).hide();
  });

  $('body').on('ready','button#size-tool-custom',function(){
    $(this).hide();
  });

  $('body').on('click','div.artwork-canvas',function(e){
    e.preventDefault();
  });

  var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

  var LHC_API = LHC_API||{};
      LHC_API.args = {mode:'widget',lhc_base_url:'//krisanthium.livehelperchat.com/',wheight:450,wwidth:350,pheight:520,pwidth:500,leaveamessage:true,check_messages:false,lang:'idn/'};
      (function() {
      var po = document.createElement('script'); po.type = 'text/javascript'; po.setAttribute('crossorigin','anonymous'); po.async = true;
      var date = new Date();po.src = '//krisanthium.livehelperchat.com/design/defaulttheme/js/widgetv2/index.js?'+(""+date.getFullYear() + date.getMonth() + date.getDate());
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();

  </script>
  <script src="https://assets.packlane.com/js/rollbar_jquery-72f698777185e49f06b908a36d1bc75f.js?vsn=d"></script>
  <script src="https://assets.packlane.com/js/vendor.bundle-6d5794b9e8b059d63ef63b0e48e3cf32.js?vsn=d"></script>
  <script src="https://assets.packlane.com/js/app.bundle-25dec82cdb0d822cfd94150cbb1d51b3.js?vsn=d"></script>
  <script src="{{ asset('packlane-assets/jquery.noty.min.js') }}"></script>
  <script src="https://assets.packlane.com/js/fontawesome-v5.3.1-2452a34a51228e5bc25358d61d69c676.js?vsn=d"></script>
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
