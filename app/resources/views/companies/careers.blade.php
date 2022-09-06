@extends('layouts.cmpny-assets')

@section('content')
<section class="box-features">
    <div class="container">
        <div class="col-md-12">
            <h2 class="mb-sm word-rotator-title">
                We are
                <strong class="inverted">
                    <span class="word-rotate active" data-plugin-options="{&quot;delay&quot;: 2000, &quot;animDelay&quot;: 300}">
                        <span class="word-rotate-items" style="width: 113px; top: -41.7083px; overflow: hidden;">
                            <span>Seeking</span>
                        <span>Seeking</span></span>
                    </span>
                </strong>
                talented professionals
            </h2>
            <!--<h4 class="heading-primary lead tall">19,000 customers in 100 countries use Porto Template. Meet our customers.</h4>-->
            <h4 class="heading-primary lead tall">
                <strong>
                    <font color="#ffd11a"><span>Come join us</span></font>
                </strong>
            </h4>
        </div>
        <div class="row text-center">
            <section class="section section-no-background m-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="img-responsive mb-lg" src="{{ asset('KOP/21.jpg') }}" alt="comp_ac">
                        </div>
                    </div>
                </div>
            </section>
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