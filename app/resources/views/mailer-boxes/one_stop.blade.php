@extends('layouts.cmpny-assets')

@section('content')

{{-- <section class="masthead">
    <picture><img alt="Packlane box art" src="https://assets.packlane.com/images/colorful-boxes.svg"></picture>
</section> --}}
<section class="box-features" style="max-height:190px">
    <div class="container">
        <div class="container">
            <div class="row">
                <section class="section section-no-background m-none" style="position: relative; right: -21px;">
                    <div class="container">`
                        <div class="row">
                            <div class="col-md-12">	
                                <p class="lead" style="position: relative; right: -88px">
                                    <img src="{{ asset('KOP/OSS.jpg') }}" alt="one_stop"> 
                                    </p><hr>
                                <p></p>
                                <p class="lead" style="text-align: center;">
                                Krisanthium Offset Printing @lang('message.oss')
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <div class="home-concept">
        <div class="row center">
            <div class="col-md-2"><span class="sun"></span>
            <span class="cloud"></span></div>
            <div class="col-md-2">
                <div class="process-image appear-animation bounceIn appear-animation-visible" data-appear-animation="bounceIn">
                    <img src="{{ asset('KOP/bounce/1-01.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="process-image appear-animation bounceIn appear-animation-visible" data-appear-animation="bounceIn" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <img src="{{ asset('KOP/bounce/2-01.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="process-image appear-animation bounceIn appear-animation-visible" data-appear-animation="bounceIn" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <img src="{{ asset('KOP/bounce/3-01.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="process-image appear-animation bounceIn appear-animation-visible" data-appear-animation="bounceIn" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <img src="{{ asset('KOP/bounce/4-01.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="process-image appear-animation bounceIn appear-animation-visible" data-appear-animation="bounceIn" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <img src="{{ asset('KOP/bounce/5-01.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="home-concept">
        <div class="row center">
            <span class="sun"></span>
            <span class="cloud"></span>
            <div class="col-md-2">
                <div class="process-image appear-animation bounceIn appear-animation-visible" data-appear-animation="bounceIn">
                <img src="{{ asset('KOP/bounce/6-01.jpg') }}" alt="">

                </div>
            </div>
            <div class="col-md-2">
                <div class="process-image appear-animation bounceIn appear-animation-visible" data-appear-animation="bounceIn" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <img src="{{ asset('KOP/bounce/7-01.jpg') }}" alt="">

                </div>
            </div>
            <div class="col-md-2">
                <div class="process-image appear-animation bounceIn appear-animation-visible" data-appear-animation="bounceIn" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                <img src="{{ asset('KOP/bounce/8-01.jpg') }}" alt="">

                </div>
            </div>
            <div class="col-md-2">
                <div class="process-image appear-animation bounceIn appear-animation-visible" data-appear-animation="bounceIn" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                <img src="{{ asset('KOP/bounce/9-01.jpg') }}" alt="">

                </div>
            </div>
            <div class="col-md-2">
                <div class="process-image appear-animation bounceIn appear-animation-visible" data-appear-animation="bounceIn" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                <img src="{{ asset('KOP/bounce/10-01.jpg') }}" alt="">

                </div>
            </div>
            <div class="col-md-2">
                <div class="process-image appear-animation bounceIn appear-animation-visible" data-appear-animation="bounceIn" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <img src="{{ asset('KOP/bounce/11-01.jpg') }}" alt="">
                </div>
            </div>
        </div>

    </div>
</div>

    {{-- <div class="home-concept">
    
    </div> --}}
    {{-- <div class="home-concept">
        <div class="container">
          
        </div>
    </div> --}}
    <section class="about">
    </section>
</section>

@endsection