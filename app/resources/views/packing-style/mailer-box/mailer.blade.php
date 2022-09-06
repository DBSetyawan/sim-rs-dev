<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
        content="Packlane makes it easy to design Custom Printed Mailer Boxes for all types of products. Perfect as a retail-ready gift box, subscription box, or e-commerce packaging. Simply select a custom size, make it your own, and get a quote instantly! Enjoy low minimums, affordable prices, and fast turnarounds.">

    <link rel="shortcut icon" type="image/png"
    href="{{ asset('KOP/logoKOPfooter.PNG') }}">

    <title>Order Custom Mailer Boxes | Low Minimums, Lower Prices | KOP</title>

    <link crossorigin="" href="{{ asset('packlane-assets/app-bundle.css') }}"
        rel="stylesheet">
    </link>

    <link crossorigin="" href="{{ asset('packlane-assets/typset.css') }}"
        rel="stylesheet">
    </link>
    <link crossorigin="" crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet">
    </link>

    <!-- OpenGraph -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@packlane" />
    <meta name="yandex-verification" content="35fa519272a729b3" />


    <!-- End of OpenGraph -->

    <meta name="msapplication-config" content="none" />

    <!-- Google Tag Manager -->


    <!-- End Google Tag Manager -->
    <script src="{{ asset('packlane-assets/rollbar.js') }}"></script>
</head>

<body data-controller="product" data-action="product" class="product mailer-box" id="product"
    data-csrf="fyliKwIkDDgcDRgkJx8HDgxvTyx7SBE2NB4YPQ8voKmmrG7MCB8E31vx">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXCJ48C" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="header " id="main-header-js">
        <div class="nav-container">

            <div class="logo-container">
                <a class="header-logo " href="/">
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
        <div class="wrapper" id="packlane">
            <section class="hero product product--mailer">
                <div class="hero__content">
                    <div class="hero__image">
                        <picture><img alt="Custom mailer boxes"
                                src="https://assets.packlane.com/h6jFMerbHMq5l08PfiY3T0-zJsEowvnxQlVQEHPdwrw/w:1000/fn:custom-mailer-boxes-5461dd7404c26ba7a4c5f003f5573590/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2N1c3RvbS1tYWlsZXItYm94ZXMtNTQ2MWRkNzQwNGMyNmJhN2E0YzVmMDAzZjU1NzM1OTAuanBn.jpg">
                        </picture>
                    </div>
                    <div class="hero__data">
                        <div class="hero__welcome">
                            <div class="hero__welcome__content">
                                <h1>Mailer Box</h1>
                                <button id="scroll-to-reviews-js" class="hero-product-rating">
                                    <div id="star-count-js" class="hero-product-rating__stars">
                                        <!-- JS inserted here -->
                                    </div>
                                    <div class="hero-product-rating__average">
                                        <h4 id="average-rating-js" class="hero-product-rating__number">-.-</h4>
                                        <span class="hero-product-rating__label">Rating</span>
                                    </div>
                                    <i class="pcon-chevron-right"></i>
                                </button>
                                <h2>A versatile custom mailer box that's stylish, sturdy and ready to ship directly in
                                    the mail. It looks great in any color and works for retail-ready gift boxes,
                                    subscription boxes, and e-commerce packaging.</h2>
                                <div class="hero__sizeSelector">
                                    <form action="/box_wizard" id="wizard-form" method="post"><input name="_csrf_token"
                                            type="hidden"
                                            value="fyliKwIkDDgcDRgkJx8HDgxvTyx7SBE2NB4YPQ8voKmmrG7MCB8E31vx">
                                        <input type="hidden" id="box-type" name="box-type" value="mailer-box">
                                        <div class="inputBox inputBox--hero field">
                                            <label for="size" class="textFieldLabel">Select a size*</label>
                                            <select id="size-select-js" name="size" class="textField">


                                                <option value="4,4,2">4'' x 4'' x 2''</option>


                                                <option value="6,6,2">6'' x 6'' x 2''</option>


                                                <option value="7,6,1">7'' x 6'' x 1''</option>


                                                <option value="8,5,3">8'' x 5'' x 3''</option>


                                                <option value="9,6,4">9'' x 6'' x 4''</option>


                                                <option value="9,8,2">9'' x 8'' x 2''</option>


                                                <option selected value="10,8,4">10'' x 8'' x 4''</option>


                                                <option value="10,9,1.5">10'' x 9'' x 1.5''</option>


                                                <option value="12,9,2">12'' x 9'' x 2''</option>


                                                <option value="13,10,5">13'' x 10'' x 5''</option>


                                                <option value="14,10,4">14'' x 10'' x 4''</option>

                                            </select>
                                        </div>

                                        <div class="inputBox inputBox--hero field">
                                            <label for="quantity" class="textFieldLabel">Quantity</label>
                                            <select id="quantity-select-js" name="quantity" class="textField">
                                                <option value="2001">&#62; 2000</option>


                                                <option value=2000>2000</option>



                                                <option value=1000>1000</option>



                                                <option value=500>500</option>



                                                <option value=250 selected>250</option>



                                                <option value=100>100</option>



                                                <option value=50>50</option>



                                                <option value=10>10</option>



                                                <option value=1>1</option>


                                            </select>
                                        </div>

                                        <div class="inputBox inputBox--hero inputBox--last field">
                                            <label for="price" class="textFieldLabel">Unit price**</label>
                                            <input id="priceOutput" type="text" name="price" value="" class="textField"
                                                disabled>
                                        </div>

                                        <div class="notification volume-js">
                                            <h4 class="notification__title">More boxes, more savings</h4>
                                            <p class="notification__message">Since you're interested in more than 2,000
                                                boxes we can offer you a volume discount with a custom quote. <button
                                                    type="button"
                                                    class="notification__link trigger-quote-modal-js">Request a custom
                                                    quote</button></p>
                                        </div>
                                        <p class="disclaimer">*All sizes are listed as interior dimensions in inches.
                                        </p>
                                        <p class="disclaimer">**The pricing may vary depending on ink coverage.</p>
                                        <p class="action"><button type="submit">Pick a custom size.</button></p>
                                </div>
                                <button class="btn btn--white" style="" type="submit">Customize now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__footer--product hero__footer">
                    <picture><img alt="1" src="https://assets.packlane.com/images/ico-xs-one.svg"></picture>
                    <h3>Tiny minimum order, 1 to be exact!</h3>
                </div>
            </section>
            <section class="hdprint-section">
                <div class="mediaAndTextModule mediaAndTextModule--longText">
                    <div class="mediaAndTextModule__data">
                        <h2>Step into the future with HDPrint Gloss</h2>
                        <p>
                            HDPrint brings you next-generation digital printing technology on state-of-the-art presses
                            that apply the ink in a single, high-definition step. You see results that rival
                            traditional, high-cost methods like lithographic and flexographic printing at a fraction of
                            the cost.
                        </p>

                        <ul class="u-bullet-list u-mb-24">
                            <li><strong>Improved image clarity</strong> - Your artwork and images will look better than
                                ever thanks to HDPrint's smaller ink dots and increased precision.</li>
                            <li><strong>Smooth and luxurious</strong> - Our first HDPrint finish, HDPrint Gloss, yields
                                a smooth, retail-quality print result that's comparable to more expensive print methods.
                            </li>
                            <li><strong>Flexibility</strong> - Change your artwork whenever you need to and use as many
                                colors as you want, without the time and setup cost of print plates.</li>
                        </ul>

                        <div class="u-inline-block u-text-left u-mt-24">
                            <a href="/customize/mailer-box?quantity=250&material=dreamcoat&finish=gloss&tool_tab=material"
                                class="btn btn--gray">
                                START DESIGNING IN HDPrint
                            </a>
                        </div>
                    </div>
                    <div class="mediaAndTextModule__media">
                        <picture><img alt="Custom product box" class="mediaAndTextModule__img u-float-right"
                                src="https://assets.packlane.com/HqzP9eyAGI8VbleSvt2lrvAkBFcC1WkJf4lzAUakE0k/fn:hdprint-gloss-dada-single-magnifier-1200x852-c46de672bbd2763884abb3ec7d06ce41/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2hkcHJpbnQtZ2xvc3MtZGFkYS1zaW5nbGUtbWFnbmlmaWVyLTEyMDB4ODUyLWM0NmRlNjcyYmJkMjc2Mzg4NGFiYjNlYzdkMDZjZTQxLmpwZw.jpg">
                        </picture>
                    </div>
                </div>
            </section>

            <section class="testimonials" id="product-testimonial-js">
                <div class="testimonials__inner testimonials__inner--product">

                    <div class="testimonials__decors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="547" height="547" viewBox="0 0 547 547">
                            <g>
                                <g opacity=".23">
                                    <path fill="none" stroke="#f17da4" stroke-miterlimit="50" stroke-width="51"
                                        d="M273.5 521C410.19 521 521 410.19 521 273.5S410.19 26 273.5 26 26 136.81 26 273.5 136.81 521 273.5 521z" />
                                </g>
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 145" width="212" height="145"></svg>
                        <svg width="496" height="676" viewBox="0 0 547 675" xmlns="http://www.w3.org/2000/svg">
                            <path d="M165.505 25.495l415.883 485.82L26.38 649.695z" fill-rule="nonzero" stroke="#1ADFC7"
                                stroke-width="51" fill="none" opacity=".226" stroke-linecap="round"
                                stroke-linejoin="round" /></svg>
                    </div>

                    <h2 class="sectionTitle sectionTitle--hasSub u-mb-80">Real reviews from real customers</h2>
                    <div
                        class="testimonials-slider__track containner container--xxlarge container--center flex flex--center">
                        <div class="testimonials-slider flex__column--12 flex__column--8@medium" data-slider>
                            <div class="glide" data-ref="slider[slider]">
                                <div class="glide__track" data-slider-container="0">
                                    <ul class="siema-js slider">

                                        <li class="glide__slide wrapper">
                                            <div class="flex flex--center">
                                                <div
                                                    class="testimonials__slider-wrapper flex__column space space--large">
                                                    <div
                                                        class="testimonials-slider__head-content flex flex--center space space--large">
                                                        <div class="testimonial-ranking">
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                        </div>
                                                        <div class="testimonials__text-content ta-center">
                                                            We have scoured the options on the market, and I haven&#39;t
                                                            found a company that beats Packlane on speed, quality and
                                                            price. I am not surprised that they have been growing so
                                                            fast. I’ve recommended them to many friends and colleagues
                                                            who have started e-commerce companies, and they&#39;re now
                                                            happy customers of Packlane as well.
                                                        </div>
                                                        <div class="testimonials-slider__person-photo-wrapper">
                                                            <div class="testimonials__person-photo-wrapper">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                    height="23">
                                                                    <path fill="none" stroke="#f9cf57"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-miterlimit="50" stroke-width="3"
                                                                        d="M7.653 20.762l20.337-6.715m-2.881-5.88L4.79 14.821M22.327 2.24L1.999 8.89" />
                                                                </svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="29"
                                                                    height="26">
                                                                    <path fill="none" stroke="#f17ea5"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-miterlimit="50" stroke-width="3"
                                                                        d="M16.148 24L27 8.807 2 2z" />
                                                                </svg>
                                                                <picture><img
                                                                        class="testimonials-slider__person-photo image"
                                                                        data-src="/images/anomalie-leslie-voorhees-means-founder-3f95c404df75386b17eec05729191ea9.jpeg"
                                                                        src="https://assets.packlane.com/QlZwNsYf1RO7qfiZ67lbBuRSnZv7obKkN34s8g34miA/fn:anomalie-leslie-voorhees-means-founder-3f95c404df75386b17eec05729191ea9/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2Fub21hbGllLWxlc2xpZS12b29yaGVlcy1tZWFucy1mb3VuZGVyLTNmOTVjNDA0ZGY3NTM4NmIxN2VlYzA1NzI5MTkxZWE5LmpwZWc.jpg">
                                                                </picture>
                                                            </div>
                                                            <div class="testimonials__person-details">
                                                                <h4
                                                                    class="title title--dark title--small d-block flex__column--12 u-m-0">
                                                                    Leslie Voorhees Means</h4>
                                                                <p class="testimonials-slider__desc">Founder and CEO,
                                                                    Anomalie</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="glide__slide wrapper">
                                            <div class="flex flex--center">
                                                <div
                                                    class="testimonials__slider-wrapper flex__column space space--large">
                                                    <div
                                                        class="testimonials-slider__head-content flex flex--center space space--large">
                                                        <div class="testimonial-ranking">
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                        </div>
                                                        <div class="testimonials__text-content ta-center">
                                                            We&#39;ve tried multiple custom packaging companies, and
                                                            since switching to Packlane we&#39;ve never looked back.
                                                            After four years and tens of thousands of boxes, I can
                                                            honestly say that there is no better solution for
                                                            subscription box companies. If you&#39;re looking for low
                                                            MOQs, superior quality boxes and customer support to match,
                                                            look no further.
                                                        </div>
                                                        <div class="testimonials-slider__person-photo-wrapper">
                                                            <div class="testimonials__person-photo-wrapper">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                    height="23">
                                                                    <path fill="none" stroke="#f9cf57"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-miterlimit="50" stroke-width="3"
                                                                        d="M7.653 20.762l20.337-6.715m-2.881-5.88L4.79 14.821M22.327 2.24L1.999 8.89" />
                                                                </svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="29"
                                                                    height="26">
                                                                    <path fill="none" stroke="#f17ea5"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-miterlimit="50" stroke-width="3"
                                                                        d="M16.148 24L27 8.807 2 2z" />
                                                                </svg>
                                                                <picture><img
                                                                        class="testimonials-slider__person-photo image"
                                                                        data-src="/images/crated-with-love-tyler-turk-founder-791dc31ef23b1ebd94e0ef0a24d459ac.jpg"
                                                                        src="https://assets.packlane.com/1wGmiUocwf8oA2b1NZLZoUqefDpHWnkTtjK6pLMEZqE/fn:crated-with-love-tyler-turk-founder-791dc31ef23b1ebd94e0ef0a24d459ac/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2NyYXRlZC13aXRoLWxvdmUtdHlsZXItdHVyay1mb3VuZGVyLTc5MWRjMzFlZjIzYjFlYmQ5NGUwZWYwYTI0ZDQ1OWFjLmpwZw.jpg">
                                                                </picture>
                                                            </div>
                                                            <div class="testimonials__person-details">
                                                                <h4
                                                                    class="title title--dark title--small d-block flex__column--12 u-m-0">
                                                                    Tyler Turk</h4>
                                                                <p class="testimonials-slider__desc">Founder, Crated
                                                                    with Love</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="glide__slide wrapper">
                                            <div class="flex flex--center">
                                                <div
                                                    class="testimonials__slider-wrapper flex__column space space--large">
                                                    <div
                                                        class="testimonials-slider__head-content flex flex--center space space--large">
                                                        <div class="testimonial-ranking">
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                        </div>
                                                        <div class="testimonials__text-content ta-center">
                                                            When I discovered Packlane, it was a game changer. Using
                                                            Packlane&#39;s online builder, I was able to quickly mock up
                                                            a box design in full CMYK colors. The ability to self-design
                                                            my box is amazing. And when I discovered I was able to order
                                                            as little as one box, it only got better.
                                                        </div>
                                                        <div class="testimonials-slider__person-photo-wrapper">
                                                            <div class="testimonials__person-photo-wrapper">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                    height="23">
                                                                    <path fill="none" stroke="#f9cf57"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-miterlimit="50" stroke-width="3"
                                                                        d="M7.653 20.762l20.337-6.715m-2.881-5.88L4.79 14.821M22.327 2.24L1.999 8.89" />
                                                                </svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="29"
                                                                    height="26">
                                                                    <path fill="none" stroke="#f17ea5"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-miterlimit="50" stroke-width="3"
                                                                        d="M16.148 24L27 8.807 2 2z" />
                                                                </svg>
                                                                <picture><img
                                                                        class="testimonials-slider__person-photo image"
                                                                        data-src="/images/our-customers/Father-Time-Bread-Taylor-West-Co-Owner_bnw.png"
                                                                        src="https://assets.packlane.com/qvCG4ATt8CAz9XwdL7QjyBfFUac5-XpsvvOpe29USuM/fn:Father-Time-Bread-Taylor-West-Co-Owner_bnw/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvRmF0aGVyLVRpbWUtQnJlYWQtVGF5bG9yLVdlc3QtQ28tT3duZXJfYm53LnBuZw.jpg">
                                                                </picture>
                                                            </div>
                                                            <div class="testimonials__person-details">
                                                                <h4
                                                                    class="title title--dark title--small d-block flex__column--12 u-m-0">
                                                                    Taylor West</h4>
                                                                <p class="testimonials-slider__desc">Co-Owner, Father
                                                                    Time Bread</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="glide__slide wrapper">
                                            <div class="flex flex--center">
                                                <div
                                                    class="testimonials__slider-wrapper flex__column space space--large">
                                                    <div
                                                        class="testimonials-slider__head-content flex flex--center space space--large">
                                                        <div class="testimonial-ranking">
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                        </div>
                                                        <div class="testimonials__text-content ta-center">
                                                            The quality of our custom packaging was a concern when we
                                                            began. But our sample order with Packlane was perfect and
                                                            that gave us the confidence to make Packlane our preferred
                                                            partner for branded boxes. Custom packaging definitely works
                                                            and Packlane is the pioneer in producing it.
                                                        </div>
                                                        <div class="testimonials-slider__person-photo-wrapper">
                                                            <div class="testimonials__person-photo-wrapper">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                    height="23">
                                                                    <path fill="none" stroke="#f9cf57"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-miterlimit="50" stroke-width="3"
                                                                        d="M7.653 20.762l20.337-6.715m-2.881-5.88L4.79 14.821M22.327 2.24L1.999 8.89" />
                                                                </svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="29"
                                                                    height="26">
                                                                    <path fill="none" stroke="#f17ea5"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-miterlimit="50" stroke-width="3"
                                                                        d="M16.148 24L27 8.807 2 2z" />
                                                                </svg>
                                                                <picture><img
                                                                        class="testimonials-slider__person-photo image"
                                                                        data-src="/images/our-customers/akshay-gupta.png"
                                                                        src="https://assets.packlane.com/1D_5der-M7Wv41C_kaS90aS1N_2aSRes6KQvN7zAVc0/fn:akshay-gupta/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvYWtzaGF5LWd1cHRhLnBuZw.jpg">
                                                                </picture>
                                                            </div>
                                                            <div class="testimonials__person-details">
                                                                <h4
                                                                    class="title title--dark title--small d-block flex__column--12 u-m-0">
                                                                    Akshay Gupta</h4>
                                                                <p class="testimonials-slider__desc">Co-Founder and COO,
                                                                    Evabot</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="glide__slide wrapper">
                                            <div class="flex flex--center">
                                                <div
                                                    class="testimonials__slider-wrapper flex__column space space--large">
                                                    <div
                                                        class="testimonials-slider__head-content flex flex--center space space--large">
                                                        <div class="testimonial-ranking">
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                        </div>
                                                        <div class="testimonials__text-content ta-center">
                                                            Our boxes create an experience for the brand with which we
                                                            partner as well as the influencers. Custom packaging allowed
                                                            us to elevate the type of content our influencers created on
                                                            behalf of our company and our clients. These boxes allowed
                                                            us to become shareable and memorable.
                                                        </div>
                                                        <div class="testimonials-slider__person-photo-wrapper">
                                                            <div class="testimonials__person-photo-wrapper">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                    height="23">
                                                                    <path fill="none" stroke="#f9cf57"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-miterlimit="50" stroke-width="3"
                                                                        d="M7.653 20.762l20.337-6.715m-2.881-5.88L4.79 14.821M22.327 2.24L1.999 8.89" />
                                                                </svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="29"
                                                                    height="26">
                                                                    <path fill="none" stroke="#f17ea5"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-miterlimit="50" stroke-width="3"
                                                                        d="M16.148 24L27 8.807 2 2z" />
                                                                </svg>
                                                                <picture><img
                                                                        class="testimonials-slider__person-photo image"
                                                                        data-src="/images/our-customers/sherri-langburt-babbleboxx.png"
                                                                        src="https://assets.packlane.com/4W7ts2iGwBPkZ8x1EU-VkfJmCCkZSRVlvjvIbtUCl0E/fn:sherri-langburt-babbleboxx/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvc2hlcnJpLWxhbmdidXJ0LWJhYmJsZWJveHgucG5n.jpg">
                                                                </picture>
                                                            </div>
                                                            <div class="testimonials__person-details">
                                                                <h4
                                                                    class="title title--dark title--small d-block flex__column--12 u-m-0">
                                                                    Sherri Langburt</h4>
                                                                <p class="testimonials-slider__desc">CEO, Babbleboxx</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="glide__slide wrapper">
                                            <div class="flex flex--center">
                                                <div
                                                    class="testimonials__slider-wrapper flex__column space space--large">
                                                    <div
                                                        class="testimonials-slider__head-content flex flex--center space space--large">
                                                        <div class="testimonial-ranking">
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                            <img src="/images/star-checked.svg"
                                                                class="ratingsAndReviews__star" alt="star" height="36"
                                                                width="36" />
                                                        </div>
                                                        <div class="testimonials__text-content ta-center">
                                                            When a customer comes to us and says, &quot;Hey, we want a
                                                            custom box,&quot; I&#39;ll go to Packlane and enter their
                                                            dimensions and download the dieline. I&#39;m able to give
                                                            our customers a quote immediately. With Packlane, it&#39;s
                                                            super simple to be able to get all of the information I need
                                                            so I can present it to my customer. It&#39;s as simple as
                                                            that.
                                                        </div>
                                                        <div class="testimonials-slider__person-photo-wrapper">
                                                            <div class="testimonials__person-photo-wrapper">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                    height="23">
                                                                    <path fill="none" stroke="#f9cf57"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-miterlimit="50" stroke-width="3"
                                                                        d="M7.653 20.762l20.337-6.715m-2.881-5.88L4.79 14.821M22.327 2.24L1.999 8.89" />
                                                                </svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="29"
                                                                    height="26">
                                                                    <path fill="none" stroke="#f17ea5"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-miterlimit="50" stroke-width="3"
                                                                        d="M16.148 24L27 8.807 2 2z" />
                                                                </svg>
                                                                <picture><img
                                                                        class="testimonials-slider__person-photo image"
                                                                        data-src="/images/our-customers/Sendoso-Lexie-Stegura-Senior-Project-Manager.png"
                                                                        src="https://assets.packlane.com/6FL2CaZN1n8oD1LIB5BjxRMeoI7Q5IZfgHmlOoO8CBw/fn:Sendoso-Lexie-Stegura-Senior-Project-Manager/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL291ci1jdXN0b21lcnMvU2VuZG9zby1MZXhpZS1TdGVndXJhLVNlbmlvci1Qcm9qZWN0LU1hbmFnZXIucG5n.jpg">
                                                                </picture>
                                                            </div>
                                                            <div class="testimonials__person-details">
                                                                <h4
                                                                    class="title title--dark title--small d-block flex__column--12 u-m-0">
                                                                    Lexie Stegura</h4>
                                                                <p class="testimonials-slider__desc">Senior Project
                                                                    Manager, Sendoso</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>

                                    <div class="testimonials__arrows glide__arrows">
                                        <button type="button" data-slider-arrow="next"
                                            class="testimonials__arrow glide__arrow t-button t-button--circle t-button--big-arrow t-button--turquoise testimonials__arrow--right"></button>
                                        <button type="button" data-slider-arrow="prev"
                                            class="testimonials__arrow glide__arrow t-button t-button--circle t-button--big-arrow t-button--turquoise testimonials__arrow--left t-button--reverse"></button>
                                    </div>

                                    <ul class="slider__mobile-controls flex flex--center d-none@medium"
                                        data-slider-nav-group>
                                        <li class="slider__mobile-controls-item" data-slider-nav-item="active"></li>
                                        <li class="slider__mobile-controls-item" data-slider-nav-item></li>
                                        <li class="slider__mobile-controls-item" data-slider-nav-item></li>
                                        <li class="slider__mobile-controls-item" data-slider-nav-item></li>
                                        <li class="slider__mobile-controls-item" data-slider-nav-item></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="customizerOverview">
                <ul id="customizer-buttons" class="customizerOverview__tabs">
                    <li id="customizer-3d-button" class="active">Customize in 3D</li>
                    <li id="customizer-size-button">Custom Sizing</li>
                    <li id="customizer-material-button">Material</li>
                    <li id="customizer-print-button">Print</li>
                </ul>


                <div id="customizerContainer" class="customizer__ajaxContainer">
                    <div id="customizer-container-3d" class="customizerOverview__3d customizerOverview__slide">
                        <div class="customizerOverview__cols">
                            <div class="customizerOverview__col customizerOverview__col--left">
                                <h2>Easy to create</h2>
                                <ul class="customizer3d__steps">
                                    <li class="pager-page-1 customizer3d__step active">
                                        <picture><img alt="Select your Size" class="customizer3d__icon"
                                                src="https://assets.packlane.com/images/ico-size.svg"></picture>
                                        <p class="customizerOverview__subHeading">1. Select your size</p>
                                        <span class="customizerOverview__text">Custom sized just for you! Choose the
                                            size of your custom mailer boxes to give your product the perfect
                                            fit.</span>
                                    </li>
                                    <li class="pager-page-2 customizer3d__step">
                                        <picture><img alt="Make it your own" class="customizer3d__icon"
                                                src="https://assets.packlane.com/images/ico-designs.svg"></picture>
                                        <p class="customizerOverview__subHeading">2. Make it your own</p>
                                        <span class="customizerOverview__text">Create the perfect mailer boxes by adding
                                            your logo, colors, and graphics to stand out from the rest of the
                                            crowd.</span>
                                    </li>
                                    <li class="pager-page-3 customizer3d__step">
                                        <picture><img alt="Get a quote instantly" class="customizer3d__icon"
                                                src="https://assets.packlane.com/images/ico-plus.svg"></picture>
                                        <p class="customizerOverview__subHeading">3. Get a quote instantly</p>
                                        <span class="customizerOverview__text">You're almost ready to order! Pick the
                                            number of custom cardboard boxes you need and get pricing in
                                            real-time.</span>
                                    </li>
                                </ul>
                                <ul id="customizer3d-pager" class="pager">
                                    <li class="pager__item pager__item--checked">
                                        <div class="pager__fill"></div>
                                        <div id="customizer3d-page-1-button" class="pager-page-1 pager__border"></div>
                                    </li>
                                    <li class="pager__item">
                                        <div class="pager__fill"></div>
                                        <div id="customizer3d-page-2-button" class="pager-page-2 pager__border"></div>
                                    </li>
                                    <li class="pager__item">
                                        <div class="pager__fill"></div>
                                        <div id="customizer3d-page-3-button" class="pager-page-3 pager__border"></div>
                                    </li>
                                </ul>
                                <button class="btn btn--white" style="" type="submit">Create your custom mailer
                                    box</button>
                            </div>
                            <div class="customizerOverview__col customizerOverview__col--right">
                                <div class="spinner hidden">
                                    <div class="spinner__icon"></div>
                                </div>
                                <div class="steps__ajaxContainer active">
                                    <picture><img alt="Select your size" class="pager-page-1 customizer3d__step active"
                                            src="https://assets.packlane.com/gRLZfnBZtFEdlutaL2ej0XavzKExUiZrBbrwMofUf0Q/fn:easy-to-create-size/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL3Byb2R1Y3RzL3NjcmVlbnNob3RzL2Vhc3ktdG8tY3JlYXRlLXNpemUucG5n.jpg">
                                    </picture>
                                    <picture><img alt="Make it your own" class="pager-page-2 customizer3d__step"
                                            src="https://assets.packlane.com/PEfyk07jd4DUbizR_hGcPMp6FUHWtPvbsufHBl1S3ww/fn:easy-to-create-artwork/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL3Byb2R1Y3RzL3NjcmVlbnNob3RzL2Vhc3ktdG8tY3JlYXRlLWFydHdvcmsucG5n.jpg">
                                    </picture>
                                    <picture><img alt="Get a quote instantly" class="pager-page-3 customizer3d__step"
                                            src="https://assets.packlane.com/DmmzsSgLsngn2GGFFstlXLAtakj5fVkfH8a4vevr5V4/fn:easy-to-create-quantity/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL3Byb2R1Y3RzL3NjcmVlbnNob3RzL2Vhc3ktdG8tY3JlYXRlLXF1YW50aXR5LnBuZw.jpg">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="customizer-container-size"
                        class="customizerOverview__size customizerOverview__slide wizard-page-inactive">
                        <div class="customizerOverview__cols">
                            <div class="customizerOverview__col customizerOverview__col--left">
                                <h2>Size it up</h2>
                                <p class="customizerOverview__text">
                                    Building the perfect box for your product means choosing the custom size to fit your
                                    needs.
                                    With the right-sized mailer box, you'll save money on shipping and give every
                                    customer an unforgettable unboxing.
                                </p>
                                <button class="btn btn--white" style="" type="submit">Create your custom mailer
                                    box</button>
                            </div>
                            <div
                                class="customizerOverview__col customizerOverview__col--right customizerOverview__col--img">
                                <picture><img alt="Box Sizes" data-src="/images/box-sizes.png"
                                        src="https://assets.packlane.com/wCJq-nPiGrjk5bpMz05lVmZs6yF8P0CLk-fkbiLjqGE/w:500/fn:box-sizes/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2JveC1zaXplcy5wbmc.jpg">
                                </picture>
                            </div>
                        </div>
                    </div>


                    <div id="customizer-container-material"
                        class="customizerOverview__material customizerOverview__slide wizard-page-inactive">
                        <div class="customizerOverview__cols">
                            <div class="customizerOverview__col customizerOverview__col--left">
                                <h2>Material options</h2>
                                <p class="customizerOverview__text customizerMaterial__item material-1 active">
                                    With a gorgeous matte finish, our classic white custom cardboard boxes are our most
                                    popular option. It takes well to any color especially bright, vibrant hues.
                                </p>
                                <p class="customizerOverview__text customizerMaterial__item material-2">
                                    Brown inside and out, our natural kraft cardboard is as eye-catching as it is
                                    rugged.
                                    It works well with deep colors, giving an unmistakable warm and muted finish to your
                                    design.
                                </p>
                                <p class="customizerOverview__text customizerMaterial__item material-3">
                                    When you're ready to get fancy, Dreamcoat is the obvious choice. It's our premium
                                    bright white material with a satin finish. You'll notice a shimmery, satin sheen on
                                    printed, high-saturated areas that creates a striking contrast with unprinted areas.
                                </p>
                                <ul class="customizerMaterial__list">
                                    <li data-class="material-1"
                                        class="customizerMaterial__item material__button material-1 active">
                                        <picture><img alt="Classic white" data-class="material-1"
                                                src="https://assets.packlane.com/zVsFyWdwLzEr5H_aF2pbQTICvZ8SydDJFucr1prqGys/ext:png/fn:ico-white-corrugated/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2ljby13aGl0ZS1jb3JydWdhdGVkLnBuZw.png">
                                        </picture>
                                        <span data-class="material-1">Classic white</span>
                                    </li>
                                    <li data-class="material-2"
                                        class="customizerMaterial__item material__button material-2">
                                        <picture><img alt="Kraft" data-class="material-2"
                                                src="https://assets.packlane.com/ah-DX1PeNjU-I0PoGCHYdXZy92fPNjcjUv-Pn4cn2FM/ext:png/fn:ico-kraft-corrugated/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2ljby1rcmFmdC1jb3JydWdhdGVkLnBuZw.png">
                                        </picture>
                                        <span data-class="material-2">Kraft</span>
                                    </li>
                                    <li data-class="material-3"
                                        class="customizerMaterial__item material__button material-3">
                                        <picture><img alt="Dreamcoat" data-class="material-3"
                                                src="https://assets.packlane.com/8h3LU4-n-uPVokszpb8f6rOcB2irkwpO27lIaEbVQ2U/ext:png/fn:ico-dreamcoat/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2ljby1kcmVhbWNvYXQucG5n.png">
                                        </picture>
                                        <span data-class="material-3">Dreamcoat™</span>
                                    </li>
                                </ul>
                                <button class="btn btn--white" style="" type="submit">Create your custom mailer
                                    box</button>
                            </div>
                            <div
                                class="customizerOverview__col customizerOverview__col--right customizerOverview__col--img">
                                <picture><img alt="Box Colors" data-class="styleBox__3d"
                                        data-src="/images/box-material-white.png"
                                        src="https://assets.packlane.com/lKluK9y92-XIjOLzoZTtzLV6LYTBZoUOEUnf92uJXN0/ext:png/fn:box-material-white/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2JveC1tYXRlcmlhbC13aGl0ZS5wbmc.png">
                                </picture>
                            </div>
                        </div>
                    </div>


                    <div id="customizer-container-print"
                        class="customizerOverview__print customizerOverview__slide wizard-page-inactive">
                        <div class="customizerOverview__cols">
                            <div class="customizerOverview__col customizerOverview__col--left">
                                <h2>Print in all colors</h2>
                                <p class="customizerOverview__text">Your design doesn’t have to be limited to just one
                                    color. Choose as many colors as your heart desires with full digital CMYK printing
                                    and stay under budget.</p>
                                <p class="customizerOverview__text">No setup costs. No limits on color. What more could
                                    you ask for?</p>
                                <button class="btn btn--white" style="" type="submit">Create your custom mailer
                                    box</button>
                            </div>
                            <div
                                class="customizerOverview__col customizerOverview__col--right customizerOverview__col--img">
                                <picture><img alt="Box Colors" data-src="/images/box-colors.png"
                                        src="https://assets.packlane.com/UEs8o8-REPsp0XeToFCaHXmcNtttFdvPS2qrJ9A6nto/ext:png/fn:box-colors/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2JveC1jb2xvcnMucG5n.png">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="iconFeatures iconFeatures--product">
                <div class="iconFeatures__item">
                    <picture><img alt="Protective dust flaps"
                            src="https://assets.packlane.com/images/ico-mailer-flaps.svg"></picture>
                    <h4>Protective dust flaps</h4>
                </div>
                <div class="iconFeatures__item">
                    <picture><img alt="Self locking" src="https://assets.packlane.com/images/ico-lock.svg"></picture>
                    <h4>Self locking</h4>
                </div>
                <div class="iconFeatures__item">
                    <a
                        href="https://support.packlane.com/hc/en-us/articles/360045086252-How-to-design-a-double-sided-mailer-box-using-our-online-design-tool">
                        <picture><img alt="Two sided printing" src="https://assets.packlane.com/images/ico-paper.svg">
                        </picture>
                        <h4>Two sided printing</h4>
                    </a>
                </div>
                <div class="iconFeatures__item">
                    <a
                        href="https://support.packlane.com/hc/en-us/articles/360042764891-Do-you-use-sustainable-recycled-materials-">
                        <picture><img alt="Recyclable" src="https://assets.packlane.com/images/ico-recycle.svg">
                        </picture>
                        <h4>Recyclable</h4>
                    </a>
                </div>
                <div class="iconFeatures__item">
                    <a
                        href="https://support.packlane.com/hc/en-us/articles/360045054412-Will-I-see-a-proof-for-my-order-How-do-I-know-if-my-art-is-printable-">
                        <picture><img alt="Free online proofing" src="https://assets.packlane.com/images/ico-file.svg">
                        </picture>
                        <h4>Free online proofing</h4>
                    </a>
                </div>
                <div class="iconFeatures__item">
                    <a
                        href="https://support.packlane.com/hc/en-us/articles/360045048032-What-is-the-turnaround-time-on-my-order-">
                        <picture><img alt="Fast turnarounds" src="https://assets.packlane.com/images/ico-fast.svg">
                        </picture>
                        <h4>Fast turnarounds</h4>
                    </a>
                </div>
                <div class="iconFeatures__item">
                    <a
                        href="https://support.packlane.com/hc/en-us/articles/360045521271-Using-Color-in-Print-RGB-vs-CMYK">
                        <picture><img alt="Digital CMYK printing" src="https://assets.packlane.com/images/ico-cmyk.svg">
                        </picture>
                        <h4>Digital CMYK printing</h4>
                    </a>
                </div>
                <div class="iconFeatures__item">
                    <picture><img alt="Durable construction"
                            src="https://assets.packlane.com/images/ico-durability.svg"></picture>
                    <h4>Durable construction</h4>
                </div>
            </div>

            <section class="productFeatures">
                <div class="mediaAndTextModule mediaAndTextModule--longText">
                    <div class="mediaAndTextModule__media">
                        <picture><img alt="Pumphouse Coffee custom mailer box with logo" class="mediaAndTextModule__img"
                                data-src="/images/custom-mailer-box-logo-c2dcd14ec9345887877b97ab54fee04f.jpg"
                                src="https://assets.packlane.com/eBkELlOqU2CiQwI6kNtjYSizB5SvTpBWstTubc09F9Q/w:800/fn:custom-mailer-box-logo-c2dcd14ec9345887877b97ab54fee04f/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2N1c3RvbS1tYWlsZXItYm94LWxvZ28tYzJkY2QxNGVjOTM0NTg4Nzg3N2I5N2FiNTRmZWUwNGYuanBn.jpg">
                        </picture>
                        <div class="mediaAndTextModule__bg"></div>
                    </div>
                    <div class="mediaAndTextModule__data">
                        <h2>Stylish durability</h2>
                        <p>
                            When your product demands protection but also needs to arrive in style, our custom mailer
                            boxes are your best choice.
                            Mailer boxes come in E-Flute, 1/16" or B-Flute 1/8" single-wall corrugated cardboard and can
                            happily ship between 1-30 lbs.
                            We'll automatically select the best thickness for your box size to ensure it's extra sound
                            and sturdy.
                        </p>
                        <button class="btn btn--gray" type="submit">Customize Your Packaging</button>
                    </div>
                </div>
            </section>
            <div class="modal">
                <div class="modalDialog centeredDialog clearfix">
                    <ul class="modalSlider__slider">
                        <li class="modalSlider__slide">
                            <picture><img alt="Instagram 1" data-src="/images/insta-pic-1.png"
                                    sizes="(max-width: 9000px) 1px, 1px"
                                    src="https://assets.packlane.com/InRcYL6B3H42RzCgUVY0tPGHUMm8Cq_hgsQaYXBHr04/fn:insta-pic-1/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2luc3RhLXBpYy0xLnBuZw.jpg">
                            </picture>
                        </li>
                        <li class="modalSlider__slide">
                            <picture><img alt="Instagram 2" data-src="/images/insta-pic-1.png"
                                    sizes="(max-width: 9000px) 1px, 1px"
                                    src="https://assets.packlane.com/InRcYL6B3H42RzCgUVY0tPGHUMm8Cq_hgsQaYXBHr04/fn:insta-pic-1/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2luc3RhLXBpYy0xLnBuZw.jpg">
                            </picture>
                        </li>
                        <li class="modalSlider__slide">
                            <picture><img alt="Instagram 3" data-src="/images/insta-pic-1.png"
                                    sizes="(max-width: 9000px) 1px, 1px"
                                    src="https://assets.packlane.com/InRcYL6B3H42RzCgUVY0tPGHUMm8Cq_hgsQaYXBHr04/fn:insta-pic-1/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2luc3RhLXBpYy0xLnBuZw.jpg">
                            </picture>
                        </li>
                        <li class="modalSlider__slide">
                            <picture><img alt="Instagram 4" data-src="/images/insta-pic-1.png"
                                    sizes="(max-width: 9000px) 1px, 1px"
                                    src="https://assets.packlane.com/InRcYL6B3H42RzCgUVY0tPGHUMm8Cq_hgsQaYXBHr04/fn:insta-pic-1/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2luc3RhLXBpYy0xLnBuZw.jpg">
                            </picture>
                        </li>
                        <li class="modalSlider__slide">
                            <picture><img alt="Instagram 5" data-src="/images/insta-pic-1.png"
                                    sizes="(max-width: 9000px) 1px, 1px"
                                    src="https://assets.packlane.com/InRcYL6B3H42RzCgUVY0tPGHUMm8Cq_hgsQaYXBHr04/fn:insta-pic-1/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2luc3RhLXBpYy0xLnBuZw.jpg">
                            </picture>
                        </li>
                        <li class="modalSlider__slide">
                            <picture><img alt="Instagram 6" data-src="/images/insta-pic-1.png"
                                    sizes="(max-width: 9000px) 1px, 1px"
                                    src="https://assets.packlane.com/InRcYL6B3H42RzCgUVY0tPGHUMm8Cq_hgsQaYXBHr04/fn:insta-pic-1/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2luc3RhLXBpYy0xLnBuZw.jpg">
                            </picture>
                        </li>
                    </ul>
                    <!-- <div class="featuredDesigns__arrow featuredDesigns__arrow--next"></div>
      <div class="featuredDesigns__arrow featuredDesigns__arrow--prev"></div> -->
                </div>
            </div>
            <div class="modalOverlay"></div>

            <section class="featuredDesigns featuredDesigns--product">
                <h2 class="sectionTitle sectionTitle--hasSub">Get inspired</h2>
                <p class="section-subtitle section-subtitle--center">We're here to help. Whether you're designing gift
                    boxes with your logo or need help with your custom mailer box design, there's lots of inspiration to
                    be found for your product packaging.</p>
                <div class="featuredDesigns__mobile">
                    <div class="featuredDesigns__slides">
                        <picture><img alt="Classic Carton"
                                src="https://assets.packlane.com/zZXkHDMm3eZ6Uexi4JM6jOx41z01NeiYX9UwqgOh5GU/w:500/fn:mailer-fd-gingerbread-people/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL21haWxlci1mZC1naW5nZXJicmVhZC1wZW9wbGUuanBn.jpg">
                        </picture>
                    </div>
                    <!-- <div class="featuredDesigns__arrow featuredDesigns__arrow--next"></div>
      <div class="featuredDesigns__arrow featuredDesigns__arrow--prev"></div> -->
                </div>
                <div class="designsGrid designsGrid--six">
                    <div class="designsGrid__col designsGrid__col--left">
                        <div
                            class="designsGrid__item designsGrid__item--top designsGrid__item--left designsGrid__item--small">
                            <div class="designsGrid__square designsGrid__square--product">
                                <picture><img alt="Custom mailer box with white ink"
                                        src="https://assets.packlane.com/OpwjBl5HjjXnp3DlEdxIFo-IU_xJjP_nkic8wW1UPFs/w:500/fn:mailer-box-ec020f69c77885a7f81eab6f75044fe4/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL21haWxlci1ib3gtZWMwMjBmNjljNzc4ODVhN2Y4MWVhYjZmNzUwNDRmZTQuanBn.jpg">
                                </picture>
                            </div>
                        </div>
                        <div
                            class="designsGrid__item designsGrid__item--top designsGrid__item--right designsGrid__item--small">
                            <div class="designsGrid__square designsGrid__square--product">
                                <picture><img alt="White corrugated mailer boxes"
                                        src="https://assets.packlane.com/eJ4R34fRXJEEHE2tUzTjca7zpWZn49TLnzYatkkNyJg/w:500/fn:white-corrugated-mailer-box-78bba2617675d9d674a60216f9fe9a03/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL3doaXRlLWNvcnJ1Z2F0ZWQtbWFpbGVyLWJveC03OGJiYTI2MTc2NzVkOWQ2NzRhNjAyMTZmOWZlOWEwMy5qcGc.jpg">
                                </picture>
                            </div>
                        </div>
                        <div class="designsGrid__item designsGrid__item--bottom designsGrid__item--large">
                            <div class="designsGrid__square designsGrid__square--product">
                                <picture><img alt="Corrugated mailer boxes"
                                        src="https://assets.packlane.com/9k2ZHihFre041Xv3CcmeUcLkS7pIuFNMtzOzDI8k5PE/w:800/fn:corrugated-mailer-boxes-58c22bb5a3fa58a63869dadf9b68cf7c/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2NvcnJ1Z2F0ZWQtbWFpbGVyLWJveGVzLTU4YzIyYmI1YTNmYTU4YTYzODY5ZGFkZjliNjhjZjdjLmpwZw.jpg">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="designsGrid__col designsGrid__col--right">
                        <div class="designsGrid__item designsGrid__item--top designsGrid__item--large">
                            <div class="designsGrid__square designsGrid__square--product">
                                <picture><img alt="New employee welcome kits mailer box"
                                        src="https://assets.packlane.com/_rQvYnEWR5KIDyQJ20WWBCWbuqKSLwxemcY_CRPxLv8/w:800/fn:mailer-box-employee-welcome-kit-2a77d778d0619d4a00bde875b2cdeea4/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL21haWxlci1ib3gtZW1wbG95ZWUtd2VsY29tZS1raXQtMmE3N2Q3NzhkMDYxOWQ0YTAwYmRlODc1YjJjZGVlYTQuanBn.jpg">
                                </picture>
                            </div>
                        </div>
                        <div
                            class="designsGrid__item designsGrid__item--bottom designsGrid__item--left designsGrid__item--small">
                            <div class="designsGrid__square designsGrid__square--product">
                                <picture><img alt="Custom printed mailer box on kraft"
                                        src="https://assets.packlane.com/DdYNiy2r-N6dlDPTl-9xUxCg9TX8Rwkoq-4fsqNG704/w:400/fn:custom-printed-kraft-mailer-box-b94614214cef6a0722a8c0276784d188/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2N1c3RvbS1wcmludGVkLWtyYWZ0LW1haWxlci1ib3gtYjk0NjE0MjE0Y2VmNmEwNzIyYThjMDI3Njc4NGQxODguanBn.jpg">
                                </picture>
                            </div>
                        </div>
                        <div
                            class="designsGrid__item designsGrid__item--bottom designsGrid__item--right designsGrid__item--small">
                            <div class="designsGrid__square designsGrid__square--product">
                                <picture><img alt="Custom black subscription mailer box"
                                        src="https://assets.packlane.com/HPsDtVDQ3sC-iksT0KAQcFRRgEWZmdQHjKSf1aj1urA/w:300/fn:custom-mailer-subscription-box-4d6aba9b376fc04fcc6d32e2e8df9fe5/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2N1c3RvbS1tYWlsZXItc3Vic2NyaXB0aW9uLWJveC00ZDZhYmE5YjM3NmZjMDRmY2M2ZDMyZTJlOGRmOWZlNS5qcGc.jpg">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="find-designer">
                <div>
                    <p class="find-designer__copy"><a class="under-link"
                            href="https://99designs.com/packlane?utm_source=partner&utm_medium=referral&utm_campaign=packlane&utm_content=mailer-box"
                            rel="noopener noreferrer" target="_blank">Get matched</a> with a packaging design expert
                        from 99designs. Starting at $349.</p>
                    <picture><img alt="Packlane and 99designs partnership" class="u-m-auto find-designer__logo"
                            src="https://assets.packlane.com/coIviqWm_zKOmB8AJiLUiL4o7Z5lqYukut81fPwyANA/fn:packlane-99designs-partnership-95e7121d9e0f09af66956088ae0ae5e9/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL3BhY2tsYW5lLTk5ZGVzaWducy1wYXJ0bmVyc2hpcC05NWU3MTIxZDllMGYwOWFmNjY5NTYwODhhZTBhZTVlOS5wbmc.jpg">
                    </picture>
                </div>
            </section>

            <section class="madeInUSA">
                <div class="textBanner">
                    <p>All custom boxes are produced right here in the USA</p>
                </div>
            </section>
            <section class="sustainability">
                <div class="twoCols containerWidth">
                    <div class="twoCols__col twoCols__col--left">
                        <picture><img alt="Alpacka" class="sustainability__img--large"
                                src="https://assets.packlane.com/images/alpacka.svg"></picture>
                        <picture><img alt="Alpacka" class="sustainability__img--small"
                                src="https://assets.packlane.com/images/alpacka-small.svg"></picture>
                    </div>
                    <div class="twoCols__col twoCols__col--right">
                        <h2>Simple sustainability</h2>
                        <p>
                            We care deeply about sustainability and we're constantly innovating to create <a
                                href="https://support.packlane.com/hc/en-us/articles/360042764891-Do-you-use-sustainable-recycled-materials-">sustainable</a>
                            packaging for the years to come.
                            That's why all of our corrugated and paper-based materials are sourced right here in North
                            America with the highest recycled content available whenever possible.
                        </p>
                        <button class="btn btn--gray" type="submit">Start Designing</button>
                    </div>
                </div>
            </section>

            <section class="assembly">
                <div class="mediaAndTextModule mediaAndTextModule--shortText">
                    <div class="mediaAndTextModule__media">
                        <div class="mediaAndTextModule__video mediaAndTextModule__img">
                            <div class="playOverlay" style="z-index:31;">
                                <svg version="1.1" id="easy-assembly-play-button" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="105px"
                                    height="105px" viewBox="0 0 105 105" enable-background="new 0 0 105 105"
                                    xml:space="preserve">
                                    <circle id="bg" fill="#F9CF57" cx="55" cy="55" r="50" />
                                    <polygon id="Polygon" fill="#F17EA5" points="73,55.5 45.2,71.5 45.2,39.5 " />
                                    <circle id="Oval_1_" fill="none" stroke="#233E98" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" cx="51" cy="51" r="50" />
                                    <polygon id="Polygon_1_" fill="none" stroke="#233E98" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" points="
            69,51.5 41.2,67.5 41.2,35.5 " />
                                </svg>
                            </div>
                            <div style="padding:56.25% 0 0 0;position:relative;z-index:30;">
                                <iframe id="vimeo-player" src="https://player.vimeo.com/video/227435409"
                                    style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
                                    webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="mediaAndTextModule__bg"></div>
                    </div>
                    <div class="mediaAndTextModule__data">
                        <h2>Easy to assemble</h2>
                        <p>Custom mailer boxes are shipped flat (to keep shipping costs low!) and assembling your boxes
                            couldn't be easier. Just fold, snap, tuck and close!</p>
                        <button type="button" id="easy-assembly-show-me-how" class="btn btn--gray">Show me How</button>
                    </div>
                </div>
            </section>
            <div id="reviews-list-js" data-box-type="mailer-box"></div>

            <section class="moreInformation patternBanner patternBanner--teal">
                <div class="patternBanner__content">
                    <h2>Sample the goods</h2>
                    <p>If you're curious what our boxes look like up close and personal, order a pre-printed
                        <strong>Packlane Sample Kit</strong> to see our current material and print quality options.</p>
                    <a href="/samples" class="btn btn--white">Request a sample kit</a>
                </div>
            </section>
            </form>
            <div id="quote-modal-container-js" data-box-type="mailer-box"></div>
        </div>
    </main>
    <script src="{{ asset('packlane-assets/webp_index-product.js') }}">
    </script>

    <footer class="footer">

        <section class="footer__instagramHint">
            <p class="section-subtitle section-subtitle--center">Follow Packlane on Instagram for ideas and inspiration
                to make your custom packaging look amazing. Be ready when it's time to design your custom boxes.</p>
            <a href="https://instagram.com/packlanehq/" class="btnText instagram">
                <svg version="1.1" id="footer__instagram" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="23px" height="24px"
                    viewBox="0 0 23 24" enable-background="new 0 0 23 24" xml:space="preserve">
                    <path fill="#2E469E" d="M16.2,23.6H6.8c-3.7,0-6.8-3.1-6.8-6.8v-10C0,3.1,3.1,0,6.8,0h9.3C19.9,0,23,3.1,23,6.8v10
        C23,20.5,19.9,23.6,16.2,23.6z M6.8,2C4.2,2,2,4.2,2,6.8v10c0,2.6,2.2,4.8,4.8,4.8h9.4c2.6,0,4.8-2.2,4.8-4.8v-10
        C21,4.1,18.8,2,16.1,2H6.8z M11.5,17.9c-3.4,0-6.1-2.7-6.1-6.1c0-3.3,2.7-6.1,5.9-6.1l0.2,0c0,0,0,0,0,0c1.9,0,3.4,0.6,4.5,1.7
        c1.1,1.1,1.6,2.6,1.5,4.4C17.5,15.2,14.8,17.9,11.5,17.9z M11.3,7.7c-2.1,0-3.9,1.9-3.9,4.1c0,2.3,1.8,4.1,4.1,4.1
        c2.2,0,4-1.8,4.1-4.1c0-1.2-0.3-2.3-1-3c-0.7-0.7-1.8-1.1-3.1-1.1L11.3,7.7z M19.3,5.4c0,0.8-0.6,1.4-1.4,1.4s-1.4-0.6-1.4-1.4
        S17,4,17.8,4C18.6,4,19.3,4.6,19.3,5.4" />
                </svg>
                <span>Follow Packlane</span>
            </a>
        </section>

        <section class="footer__instagramSlider instagramSlider">
            <div id="instagramSlider__controls--prev" class="instagramSlider__controls instagramSlider__controls--prev">
            </div>
            <div id="instagramSlider__controls--next" class="instagramSlider__controls instagramSlider__controls--next">
            </div>
            <ul id="instagram-slides" class="slides">

                <li class="slide lazy"
                    data-src="https://assets.packlane.com/5Qa315I_5pcCtAh-pH-8HVGjzJCW6VZI5GVRxYqWeEg/w:400/fn:alt/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2luc3RhZ3JhbS9hbHQuanBn.jpg">
                    <a href="https://www.instagram.com/p/BUkAp35FgpF/?taken-by=packlanehq">
                        <div class="slide__data">

                            <div class="slide__likes">
                                <img src="/images/likes.svg" alt="<3" />
                                <span>65</span>
                            </div>


                            <div class="slide__comments">
                                <img src="/images/comments.svg" alt="Comments" />
                                <span>7</span>
                            </div>

                        </div>
                    </a>
                </li>

                <li class="slide lazy"
                    data-src="https://assets.packlane.com/vP4XtrHUtiMSuuSAYQMv81qnksvZpQZ7OJWtOq21Adg/w:400/fn:benefit/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2luc3RhZ3JhbS9iZW5lZml0LmpwZw.jpg">
                    <a href="https://www.instagram.com/p/BZmWgMaliJL/?taken-by=packlanehq">
                        <div class="slide__data">

                            <div class="slide__likes">
                                <img src="/images/likes.svg" alt="<3" />
                                <span>184</span>
                            </div>


                            <div class="slide__comments">
                                <img src="/images/comments.svg" alt="Comments" />
                                <span>12</span>
                            </div>

                        </div>
                    </a>
                </li>

                <li class="slide lazy"
                    data-src="https://assets.packlane.com/ZB0w_kqDi1yHaP6YnCmN5gLUz7-9Z12HQzsmAMUnoEI/w:400/fn:Oreo/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2luc3RhZ3JhbS9PcmVvLmpwZw.jpg">
                    <a href="https://www.instagram.com/p/Bf_9oTEg1zX/?taken-by=packlanehq">
                        <div class="slide__data">

                            <div class="slide__likes">
                                <img src="/images/likes.svg" alt="<3" />
                                <span>149</span>
                            </div>


                            <div class="slide__comments">
                                <img src="/images/comments.svg" alt="Comments" />
                                <span>3</span>
                            </div>

                        </div>
                    </a>
                </li>

                <li class="slide lazy"
                    data-src="https://assets.packlane.com/Oze_hFLWF-FUmtyivOFUjlK_gjHOUZMe1kye684fg3c/w:400/fn:sudden/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2luc3RhZ3JhbS9zdWRkZW4uanBn.jpg">
                    <a href="https://www.instagram.com/p/BQTYMN0FGzm/?taken-by=packlanehq">
                        <div class="slide__data">

                            <div class="slide__likes">
                                <img src="/images/likes.svg" alt="<3" />
                                <span>147</span>
                            </div>


                            <div class="slide__comments">
                                <img src="/images/comments.svg" alt="Comments" />
                                <span>15</span>
                            </div>

                        </div>
                    </a>
                </li>

                <li class="slide lazy"
                    data-src="https://assets.packlane.com/pxmpvUNByQY3cRacWdb-jNQq1tlHLAsejnWAGoOZetY/w:400/fn:survivor/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2luc3RhZ3JhbS9zdXJ2aXZvci5qcGc.jpg">
                    <a href="https://www.instagram.com/p/BNgtvCCleBj/?taken-by=packlanehq">
                        <div class="slide__data">

                            <div class="slide__likes">
                                <img src="/images/likes.svg" alt="<3" />
                                <span>146</span>
                            </div>


                            <div class="slide__comments">
                                <img src="/images/comments.svg" alt="Comments" />
                                <span>10</span>
                            </div>

                        </div>
                    </a>
                </li>

                <li class="slide lazy"
                    data-src="https://assets.packlane.com/W-2a-p2noXUxrWBsWiNB95bXUUnEsO7D3XctB6bhP6s/w:400/fn:Zappos/czM6Ly9wYWNrbGFuZS1hc3NldHMvcHJvZHVjdGlvbi9hcHAvaW1hZ2VzL2luc3RhZ3JhbS9aYXBwb3MuanBn.jpg">
                    <a href="https://www.instagram.com/p/BT_-KmDltEB/?taken-by=packlanehq">
                        <div class="slide__data">

                            <div class="slide__likes">
                                <img src="/images/likes.svg" alt="<3" />
                                <span>122</span>
                            </div>


                            <div class="slide__comments">
                                <img src="/images/comments.svg" alt="Comments" />
                                <span>3</span>
                            </div>

                        </div>
                    </a>
                </li>

                <li class="slide instagram-spacer" style=""></li>
            </ul>
        </section>
        <section class="footer__social">
            <h2 class="u-mb-16">Connect</h2>
            <ul class="footer__social__list">
                <li class="footer__social__item">
                    <a class="footer__social__link" href="https://instagram.com/packlanehq/" target="_tab">
                        <svg version="1.1" id="footer__instagram" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="23px" height="24px"
                            viewBox="0 0 23 24" enable-background="new 0 0 23 24" xml:space="preserve">
                            <path fill="#2E469E" d="M16.2,23.6H6.8c-3.7,0-6.8-3.1-6.8-6.8v-10C0,3.1,3.1,0,6.8,0h9.3C19.9,0,23,3.1,23,6.8v10
          C23,20.5,19.9,23.6,16.2,23.6z M6.8,2C4.2,2,2,4.2,2,6.8v10c0,2.6,2.2,4.8,4.8,4.8h9.4c2.6,0,4.8-2.2,4.8-4.8v-10
          C21,4.1,18.8,2,16.1,2H6.8z M11.5,17.9c-3.4,0-6.1-2.7-6.1-6.1c0-3.3,2.7-6.1,5.9-6.1l0.2,0c0,0,0,0,0,0c1.9,0,3.4,0.6,4.5,1.7
          c1.1,1.1,1.6,2.6,1.5,4.4C17.5,15.2,14.8,17.9,11.5,17.9z M11.3,7.7c-2.1,0-3.9,1.9-3.9,4.1c0,2.3,1.8,4.1,4.1,4.1
          c2.2,0,4-1.8,4.1-4.1c0-1.2-0.3-2.3-1-3c-0.7-0.7-1.8-1.1-3.1-1.1L11.3,7.7z M19.3,5.4c0,0.8-0.6,1.4-1.4,1.4s-1.4-0.6-1.4-1.4
          S17,4,17.8,4C18.6,4,19.3,4.6,19.3,5.4" />
                        </svg>
                    </a>
                </li>
                <li class="footer__social__item">
                    <a class="footer__social__link" href="https://www.facebook.com/Packlane" target="_tab">
                        <svg version="1.1" id="footer__facebook" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="11px" height="22px"
                            viewBox="0 0 11 22" enable-background="new 0 0 11 22" xml:space="preserve">
                            <path id="icon" fill="#2E469E" d="M7.1,21H3.2v-9.5H0V7.8h3.2V5.1c0-1.6,0.4-2.8,1.3-3.6s2.1-1.3,3.5-1.3c1.2,0,2.1,0,2.9,0.1v3.3
          l-2,0c-0.7,0-1.2,0.1-1.5,0.4C7.2,4.4,7.1,4.9,7.1,5.4v2.4h3.7l-0.5,3.7H7.1V21z" />
                        </svg>
                    </a>
                </li>
                <li class="footer__social__item">
                    <a class="footer__social__link" href="https://twitter.com/packlane" target="_tab">
                        <svg version="1.1" id="footer__twitter" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21px" height="18px"
                            viewBox="0 0 21 18" enable-background="new 0 0 21 18" xml:space="preserve">
                            <path id="icon" fill="#2E469E" d="M18.7,4.4v0.5c0,1.5-0.3,2.9-0.8,4.3s-1.3,2.7-2.3,3.9s-2.3,2.1-3.9,2.9s-3.3,1.1-5.2,1.1
          c-2.4,0-4.6-0.6-6.5-1.9c0.3,0,0.7,0,1,0c2,0,3.8-0.6,5.3-1.8c-0.9,0-1.8-0.3-2.5-0.9c-0.7-0.6-1.2-1.3-1.5-2.1
          c0.3,0.1,0.5,0.1,0.8,0.1c0.4,0,0.8-0.1,1.1-0.2c-1-0.2-1.8-0.7-2.4-1.5s-1-1.7-1-2.7v0c0.6,0.3,1.3,0.5,2,0.5
          C1.5,5.8,0.9,4.6,0.9,3.1c0-0.8,0.2-1.5,0.6-2.1c1.1,1.3,2.4,2.3,3.9,3.1s3.1,1.2,4.9,1.3c-0.1-0.3-0.1-0.7-0.1-1
          c0-1.2,0.4-2.2,1.2-3c0.8-0.8,1.8-1.2,3-1.2c1.2,0,2.3,0.4,3.1,1.3c1-0.2,1.9-0.5,2.7-1c-0.3,1-1,1.8-1.9,2.3
          c0.9-0.1,1.7-0.3,2.5-0.6C20.3,3,19.5,3.8,18.7,4.4z" />
                        </svg>
                    </a>
                </li>
                <li class="footer__social__item">
                    <a class="footer__social__link" href="https://www.pinterest.com/packlanehq/" target="_tab">
                        <svg version="1.1" id="footer__pinterest" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17px" height="22px"
                            viewBox="0 0 17 22" enable-background="new 0 0 17 22" xml:space="preserve">
                            <path id="icon" fill="#2E469E"
                                d="M4.8,8.2c0-0.9,0.2-1.6,0.7-2.2S6.5,5,7.2,5c0.6,0,1,0.2,1.2,0.5s0.4,0.8,0.4,1.3
          c0,0.3,0,0.7-0.1,1.2c-0.1,0.5-0.3,1-0.5,1.7c-0.2,0.6-0.3,1.1-0.4,1.5c-0.2,0.7,0,1.2,0.4,1.7s0.9,0.7,1.6,0.7
          c1.1,0,2.1-0.6,2.8-1.9s1.1-2.8,1.1-4.7c0-1.4-0.4-2.5-1.3-3.4s-2.2-1.3-3.8-1.3c-1.8,0-3.3,0.6-4.4,1.7S2.4,6.6,2.4,8.2
          c0,0.9,0.3,1.8,0.8,2.4c0.2,0.2,0.3,0.4,0.2,0.7c-0.1,0.2-0.1,0.5-0.2,1c-0.1,0.2-0.2,0.3-0.3,0.3s-0.2,0.1-0.4,0
          c-0.8-0.4-1.5-1-1.9-1.8S0,9,0,7.9c0-0.7,0.1-1.4,0.3-2.1s0.6-1.4,1.1-2.1s1.1-1.3,1.8-1.8S4.7,1,5.7,0.7s2-0.5,3.2-0.5
          S11,0.4,12,0.8s1.8,0.9,2.5,1.6s1.2,1.4,1.6,2.3s0.6,1.7,0.6,2.7c0,2.4-0.6,4.5-1.9,6.1S12,15.8,10,15.8c-0.7,0-1.3-0.1-1.8-0.4
          c-0.6-0.3-1-0.7-1.2-1.1c-0.5,1.9-0.8,3-0.9,3.4c-0.3,1-0.8,2.1-1.8,3.4H3.5c-0.2-1.7-0.2-3,0.1-4.1l1.6-6.7C5,9.6,4.8,9,4.8,8.2z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </section>

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
                    <a href="https://support.packlane.com/hc/en-us/categories/360003114231-Artwork-Guidelines">Artwork
                        Tips and Tricks</a>
                    <a href="https://99designs.com/packlane?utm_source=partner&utm_medium=referral&utm_campaign=packlane&utm_content=footer"
                        rel="noreferrer noopener" target="_blank">Find a Designer</a>
                    <a href="/request-quote">Request a Quote</a>
                    <a href="/faq">FAQs</a>
                </div>
            </div>

            <div class="section-container u-mb-80">
                <form id="email_signup" class="newsletter-form"
                    action="//manage.kmail-lists.com/subscriptions/subscribe"
                    data-ajax-submit="//manage.kmail-lists.com/ajax/subscriptions/subscribe" method="GET"
                    target="_blank" rel="noopener" novalidate="novalidate">
                    <input type="hidden" name="g" value="JHyA4F">
                    <h2 class="u-mb-16">Sign up for exclusive offers</h2>
                    <div class="closing__newsletter">
                        <input class="input--white" type="email" value="" name="email" id="k_id_email"
                            placeholder="Email" style="" />
                        <div class="closing__newsletterSubmit">
                            <input type="submit" class="" value="Subscribe" />
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
                        <picture>
                            <img alt="Mastercard" class="credit-card avatar" src=" {{ asset('packlane-assets/payments-icons/mastercard.svg') }}">
                        </picture>
                        <picture>
                            <img alt="Visa" class="credit-card avatar" src=" {{ asset('packlane-assets/payments-icons/visa.svg') }}">
                        </picture>
                        <picture>
                            <img alt="American Express" class="credit-card avatar" src=" {{ asset('packlane-assets/payments-icons/amex-logo.svg') }}">
                        </picture>
                        <picture>
                            <img alt="JCB" class="credit-card avatar" src="{{  asset('packlane-assets/payments-icons/jcb-logo.jpg')}}">
                        </picture>
                        <picture>
                            <img alt="Discover" class="credit-card avatar" src="{{ asset('packlane-assets/payments-icons/discover-logo.svg') }}">
                        </picture>
                    </div>
                </div>
                <div class="footer__disclaimer">
                    <picture><img alt="Packlane" src="{{ asset('KOP/logoKOPfooter.PNG')}}" width="47px" height="40px"></picture>
                    <p>Copyright © 2020 Packlane, Inc. All rights reserved.</p>
                        <p>Packlane&trade; is a trademark of Packlane, Inc. in the United States and other countries.</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <script src="{{ asset('packlane-assets/jquery.min.js')}}"></script>
    <script src="{{ asset('packlane-assets/rollbar-jquery.min.js')}}"></script>
    <script src="{{ asset('packlane-assets/vnd-mailer.js') }}"></script>
    <script src="{{ asset('packlane-assets/app-mailer.js') }}"></script>
    <script src="{{ asset('packlane-assets/jquery.noty.min.js') }}"></script>
</body>

</html>
