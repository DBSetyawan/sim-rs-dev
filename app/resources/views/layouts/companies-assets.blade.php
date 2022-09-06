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
    <!-- End of OpenGraph -->

    <meta name="msapplication-config" content="none" />

    <!-- Google Tag Manager -->


    <!-- End Google Tag Manager -->
</head>

<body data-controller="page" data-action="about" class="page " id="about"
    data-csrf="PiE1GydtaC8EMEwiVHgLIw8hJ3IoNA0COR_McY_HCb6Ol5robFUKaV8t"
    data-user="9bb21484-af15-4d82-8430-cf2b711fcb26">
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
                        <picture><img alt="Menu" id="hamburger-close-js"
                                src="https://assets.packlane.com/images/hamburger-white.svg"></picture>
                    </a>
                    <a class="nav-bar__item nav-bar__item--link " href="{{ route('dashboard') }}" id="design-box-link-js">Design a
                        box</a>
                    <li class="nav-bar__item nav-bar__item--dropdown mobile-dropdown-js ">
                        <a class="nav-bar__item nav-bar__item--link ">
                            Packlane Plus
                            <span data-rotate="down"
                                class="nav-bar__dropdown-chevron rotate pcon-chevron-down rotate-down"></span>
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
                            <span data-rotate="down"
                                class="nav-bar__dropdown-chevron rotate pcon-chevron-down rotate-down"></span>
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
                                {{-- <a class="nav-dropdown__link" href="/my-designs">Saved Designs</a> --}}
                                <a class="nav-dropdown__link" href="/dashboard">My Orders</a>
                                {{-- <a class="nav-dropdown__link" target="_blank" href="https://ship.packlane.com">My Shiplane</a> --}}
                
                
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


    
<style>

	#fss .fss-footer:before {
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

	<footer id="fss" style="background: #0e0e0e;
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
			<div style="background: #060606;
                border-top: 4px solid #060606;
                margin-top: 40px;
                padding: 30px 0 10px;">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="index.html" class="logo">
									<!--<img alt="Porto Website Template" class="img-responsive" src="img/logo-footer.png">-->
									<img alt="KOP" class="img-responsive" src="https://vpn.krisanthium.com:7070/kop/public/KOP/logoKOPf.jpg">
								</a>
							</div>
							<div class="col-md-7">
								<p>© Copyright 2021. All Rights Reserved.</p>
							</div>
							<div class="col-md-4">
                            <nav id="sub-menu">
                                <a href="https://www.instagram.com/krisanthiumoffsetprinting/" class="logo">
                                    <img alt="IG KOP" class="img-responsive" src="https://vpn.krisanthium.com:7070/kop/public/KOP/icon_instagram.png" width="60px">	
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
</footer>


    <script src="{{ asset('packlane-assets/jquery.min.js') }}"></script>
    <script src="{{ asset('packlane-assets/vendor-bundle.js') }}"></script>
    {{-- <script src="{{ asset('packlane-assets/bundle-apps.js') }}"></script> --}}
    <script src="{{ asset('packlane-assets/jquery.noty.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken'=> csrf_token(),
            'user'=> [
                'authenticated' => auth()->check(),
                'id' => auth()->check() ? auth()->user()->id : null,
                'name' => auth()->check() ? auth()->user()->name : null, 
                ]
            ])
        !!};
</script>
</body>

</html>
