@extends('layouts.cmpny-assets')

@section('content')

{{-- <section class="masthead">
    <picture><img alt="Packlane box art" src="https://assets.packlane.com/images/colorful-boxes.svg"></picture>
</section> --}}

<section class="box-features"> 
    <div role="main" class="main">
        <hr>
        <div class="container">
            <div class="row">
                <section class="section section-no-background m-none">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">	
                                <p class="lead" style="text-align: center;">
                                Krisanthium Offset Printing @lang('message.ourproducts')
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <div class="container">
            <div class="row center">
                <table width="100%">
                    <tbody><tr>
                        <td>
                            <div class="row">
                                <ul class="team-list sort-destination" data-sort-id="team">
                                    <li class="col-md-4 col-sm-6 col-xs-12 isotope-item leadership">
                                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                                            <span class="thumb-info-caption">
                                                <img class="img-responsive mb-lg" src="{{ asset('img/Otopart.jpg') }}">
                                            </span>
                                        </span>
                                    </li>
                                    <li class="col-md-4 col-sm-6 col-xs-12 isotope-item leadership">
                                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                                            <span class="thumb-info-caption">
                                                <img class="img-responsive mb-lg" src="{{ asset('img/Cosmetics.jpg') }}">
                                            </span>
                                        </span>
                                    </li>
                                    <li class="col-md-4 col-sm-6 col-xs-12 isotope-item leadership">
                                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                                            <span class="thumb-info-caption">
                                                <img class="img-responsive mb-lg" src="{{ asset('img/Tobacco.jpg') }}">
                                            </span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody></table>
            </div>
        </div>
    </div>

        {{-- <div class="feature">
            <div class='about-feat-icon fadeInRight animated pcon-design-graphic-tablet-streamline-tablet'>
            </div>
            <h3>Top-notch quality</h3>
            <p>
                Our boxes are engineered to be the best. That means the finest materials and the most precise
                layout process - so putting your box together is a smooth and easy task that can be done in
                seconds.
            </p>
        </div>

        <div class="feature">
            <div class='about-feat-icon fadeInRight animated pcon-noun-10243'></div>
            <h3>State of the art printing</h3>
            <p>
                See your logo, photos, patterns, or doodles printed beautifully using only the finest presses
                and state of the art equipment. With full CMYK color printing at your fingertips, your brand
                will beam with color - and the quality will knock your customers’ socks off.
            </p>
        </div>

        <div class="feature">
            <div class="fadeInRight animated pcon-materials-layers about-feat-icon"></div>
            <h3>Choose your material</h3>
            <p>
                Imprint your brand on a tempting choice of materials - from thin, flat paperboard to thick,
                corrugated cardboard, and from bright, crisp white to earthy, brown Kraft. If you can’t make up
                your mind or need a little guidance, we’re here to help.
            </p>
        </div> --}}
    </div>
</section>

@endsection