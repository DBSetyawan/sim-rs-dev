@extends('layouts.blogs-assets')


@section('content')

<!-- #main-header -->
<div id="et-main-area">

    <div id="main-content">



        <article id="post-1001" class="post-1001 page type-page status-publish has-post-thumbnail hentry">


            <div class="entry-content">
                <div id="et-boc" class="et-boc">

                    <div class="et-l et-l--post">
                        <div class="et_builder_inner_content et_pb_gutters3">
                            <div
                                class="et_pb_section et_pb_section_0 et_pb_fullwidth_section et_section_regular">




                                <section
                                    class="et_pb_module et_pb_fullwidth_header et_pb_fullwidth_header_0 et_pb_header_with_image et_pb_text_align_left et_pb_bg_layout_light">


                                    <div class="et_pb_fullwidth_header_container left">
                                        <div class="header-content-container center">
                                            <div class="header-content">

                                                <h1 class="et_pb_module_header">Behind the Box</h1>
                                                <span class="et_pb_fullwidth_header_subhead">Get custom
                                                    packaging tips, e-commerce insights and inspiring stories
                                                    from leaders on the front lines</span>
                                                <div class="et_pb_header_content_wrapper"></div>

                                            </div>
                                        </div>
                                        <div class="header-image-container center">
                                            <div class="header-image">
                                                <img src="https://packlane.com/blog/wp-content/uploads/2019/11/custom-packaging-design.png"
                                                    alt="" title=""
                                                    srcset="https://packlane.com/blog/wp-content/uploads/2019/11/custom-packaging-design.png 960w, https://packlane.com/blog/wp-content/uploads/2019/11/custom-packaging-design-400x400.png 400w, https://packlane.com/blog/wp-content/uploads/2019/11/custom-packaging-design-100x100.png 100w, https://packlane.com/blog/wp-content/uploads/2019/11/custom-packaging-design-600x600.png 600w, https://packlane.com/blog/wp-content/uploads/2019/11/custom-packaging-design-150x150.png 150w, https://packlane.com/blog/wp-content/uploads/2019/11/custom-packaging-design-300x300.png 300w, https://packlane.com/blog/wp-content/uploads/2019/11/custom-packaging-design-768x768.png 768w"
                                                    sizes="(max-width: 960px) 100vw, 960px" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="et_pb_fullwidth_header_overlay"></div>
                                    <div class="et_pb_fullwidth_header_scroll"></div>
                                </section>


                            </div> <!-- .et_pb_section -->
                            {{-- <div class="et_pb_section et_pb_section_1 et_section_regular">
                            </div> <!-- .et_pb_section --> --}}
                        </div><!-- .et_builder_inner_content -->
                    </div><!-- .et-l -->


                </div><!-- #et-boc -->
            </div> <!-- .entry-content -->


        </article> <!-- .et_pb_post -->



    </div> <!-- #main-content -->
    <style>

        #cvm .cvm-footer:before {
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
    
    <footer id="cvm" style="background: #0e0e0e;
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
            <div class="cvm-footer" style="background: #060606;
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
    </footer> <!-- #main-footer -->
</div> <!-- #et-main-area -->

@endsection