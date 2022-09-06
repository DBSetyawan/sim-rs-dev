@extends('layouts.cmpny-assets')

@section('content')

{{-- <section class="masthead">
    <picture><img alt="Packlane box art" src="https://assets.packlane.com/images/colorful-boxes.svg"></picture>
</section> --}}
<section class="box-features">
    <div class="container">
        <div class="container">
            <div class="row">
                <section class="section section-no-background m-none">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    {{-- <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1"
                                        role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle
                                        first element</a> --}}
                                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                                        data-target="#multiCollapseExample2" aria-expanded="false"
                                        aria-controls="multiCollapseExample2">Open form edit email user KOP to send sales marketing</button>
                                    {{-- <button class="btn btn-primary" type="button" data-toggle="collapse"
                                        data-target=".multi-collapse" aria-expanded="false"
                                        aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both
                                        elements</button> --}}
                                </p>
                                <div class="row">
                                    <div class="col">
                                        <br />
                                        {{-- <div class="collapse multi-collapse" id="multiCollapseExample1">
                                            <div class="card card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer
                                                labore wes anderson cred nesciunt sapiente ea proident.
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="col">
                                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                                            <div class="card card-body">
                                                <div class="lead-form-wrapper">
                                                    <div class="lead-form-wrapper__header">
                                                        <h3 class="lead-form-wrapper__title">Group email sales marketing - PT. Krisanthium Offset Printing</h3>
                                                        <p class="lead-form-wrapper__text">This page is specifically for converting email senders to sales marketing.</p>
                                                            <form id="lead-form" class="lead-form">
                                                                <div class="form__field"><label class="form__label"
                                                                        for="firstName">Email*<input
                                                                            class="form__text-input" id="email"
                                                                            name="email" type="text"
                                                                            value=""></label></div>
                                                                {{-- <div class="form__field"><label class="form__label"
                                                                        for="lastName">Last Name*<input
                                                                            class="form__text-input" id="lastName"
                                                                            name="lastName" type="text"
                                                                            value=""></label></div>
                                                                <div class="form__field"><label class="form__label"
                                                                        for="email">Email*<input
                                                                            class="form__text-input" id="email"
                                                                            name="email" type="email" value=""></label>
                                                                </div> --}}
                                                                {{-- <div class="horizontal-fields">
                                                                    <div class="form__field form__field--half"><label
                                                                            class="form__label" for="zipCode">Zip
                                                                            Code*<input class="form__text-input"
                                                                                id="zipCode" name="zipCode" type="text"
                                                                                value=""></label></div>
                                                                    <div class="form__field form__field--half"><label
                                                                            class="form__label"
                                                                            for="quantity">Quantity*<select
                                                                                id="quantity" name="quantity"
                                                                                class="form__text-input">
                                                                                <option value="2000-5000" selected="">
                                                                                    2,000-5,000</option>
                                                                                <option value="5000-or-more">5,000 or
                                                                                    more</option>
                                                                                <option value="less-than-2000">Less than
                                                                                    2,000</option>
                                                                            </select><span class="sub-text">Custom
                                                                                orders must be over 2,000
                                                                                units.</span></label></div>
                                                                </div> --}}
                                                                {{-- <div class="notification low-volume-warning-js">
                                                                    <p class="notification__message">Unfortunately,
                                                                        these products are not yet available in low
                                                                        quantities. Please submit this form and we’ll
                                                                        email you when they are, which should be soon.
                                                                    </p>
                                                                </div> --}}
                                                                {{-- <div class="form__field"><label class="form__label"
                                                                        for="ulist">What packaging products(s) are you
                                                                        interested in?*</label>
                                                                    <ul id="ulist">
                                                                        <li class="checkboxes-item-container"><label
                                                                                for="mailerBox"><input type="checkbox"
                                                                                    id="mailerBox"
                                                                                    name="mailerBox">Mailer Box (MOQ
                                                                                2K)</label></li>
                                                                        <li class="checkboxes-item-container"><label
                                                                                for="shippingBox"><input type="checkbox"
                                                                                    id="shippingBox"
                                                                                    name="shippingBox">Shipper Box (MOQ
                                                                                2K)</label></li>
                                                                        <li class="checkboxes-item-container"><label
                                                                                for="foldingCarton"><input
                                                                                    type="checkbox" id="foldingCarton"
                                                                                    name="foldingCarton">Product Box
                                                                                (MOQ 2K)</label></li>
                                                                        <li class="checkboxes-item-container"><label
                                                                                for="customTissuePaper"><input
                                                                                    type="checkbox"
                                                                                    id="customTissuePaper"
                                                                                    name="customTissuePaper">Custom
                                                                                Tissue Paper (MOQ 10K)</label></li>
                                                                        <li class="checkboxes-item-container"><label
                                                                                for="customTape"><input type="checkbox"
                                                                                    id="customTape"
                                                                                    name="customTape">Custom Tape
                                                                                (add-on only)</label></li>
                                                                        <li class="checkboxes-item-container"><label
                                                                                for="flexiblePackaging"><input
                                                                                    type="checkbox"
                                                                                    id="flexiblePackaging"
                                                                                    name="flexiblePackaging">Flexible
                                                                                Packaging (MOQ 5K)</label></li>
                                                                        <li class="checkboxes-item-container"><label
                                                                                for="customInserts"><input
                                                                                    type="checkbox" id="customInserts"
                                                                                    name="customInserts">Custom Inserts
                                                                                (add-on only)</label></li>
                                                                        <li class="checkboxes-item-container"><label
                                                                                for="polyMailers"><input type="checkbox"
                                                                                    id="polyMailers"
                                                                                    name="polyMailers">Poly Mailers (MOQ
                                                                                30K)</label></li>
                                                                        <li class="checkboxes-item-container"><label
                                                                                for="boxDividers"><input type="checkbox"
                                                                                    id="boxDividers"
                                                                                    name="boxDividers">Box Dividers
                                                                                (add-on only)</label></li>
                                                                        <li class="checkboxes-item-container"><label
                                                                                for="bags"><input type="checkbox"
                                                                                    id="bags" name="bags">Bags (MOQ
                                                                                3K)</label></li>
                                                                        <li class="checkboxes-item-container"><label
                                                                                for="rigidPaperMailers"><input
                                                                                    type="checkbox"
                                                                                    id="rigidPaperMailers"
                                                                                    name="rigidPaperMailers">Rigid Paper
                                                                                Mailers (MOQ 2K)</label></li>
                                                                    </ul>
                                                                </div> --}}
                                                                {{-- <div class="form__field"><label class="form__label"
                                                                        for="artwork">Do you have artwork?*<select
                                                                            id="artwork" name="artwork"
                                                                            class="form__text-input">
                                                                            <option value="" disabled="" selected="">
                                                                            </option>
                                                                            <option value="0">Yes, I have my completed
                                                                                artwork already on a dieline</option>
                                                                            <option value="1">No, but I have my design
                                                                                ready</option>
                                                                            <option value="2">No, I'm in the pre-design
                                                                                phase currently</option>
                                                                        </select></label></div> --}}
                                                                {{-- <div class="form__field"><label class="form__label"
                                                                        for="message">Order details (the more
                                                                        information you provide, the faster we’ll be
                                                                        able to
                                                                        get you what you need)<span
                                                                            class="sub-text">Optional</span><textarea
                                                                            class="form__text-input" id="message"
                                                                            name="message"></textarea></label></div> --}}
                                                                <button class="pbtn pbtn--primary" id="updateCommonSmarketing">Update</button>
                                                            </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
