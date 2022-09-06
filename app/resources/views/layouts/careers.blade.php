@extends('layouts.cmpny-assets')

@section('content')

{{-- <section class="masthead">
    <picture><img alt="Packlane box art" src="https://assets.packlane.com/images/colorful-boxes.svg"></picture>
</section> --}}
<section class="">
        <!-- <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Career Opportunities</h1>
                    </div>
                </div>
            </div>
        </section> -->
    <hr class="tall">
        <div class="container">				
            <div class="row center">
                <div class="col-md-12">
                    <h2 class="mb-sm word-rotator-title">
                        We are
                        <strong class="inverted">
                            <span class="word-rotate active" data-plugin-options="{&quot;delay&quot;: 2000, &quot;animDelay&quot;: 300}">
                                <span class="word-rotate-items" style="width: 113px; top: -40.8795px; overflow: hidden;">
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
            </div>
        
            <div class="row center">
            <table width="100%">
                <tbody><tr><td><img src="{{ asset('img/12.jpg') }}" width="100%"></td></tr>
                <tr><td>&nbsp;</td></tr>
                <tr><td>
                <div class="row">
                
                <ul class="team-list sort-destination" data-sort-id="team">
                       <div class="layer">
                           
                       </div>
                    {{-- <li class="col-md-4 col-sm-6 col-xs-12 isotope-item leadership">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <span class="thumb-info-wrapper">
                                <img src="img/team/t.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Kepala HR &amp; GA /HRD</span>
                                    </span>
                            </span>
                            <span class="thumb-info-caption">
                                <br><b>Tanggal Berakhir : 01 March 2022</b><p></p>
                            </span>
                        <b>Apply to : </b>
                        <a href="mailto:career@krisanthium.com?Subject=Lamaran Kerja Kepala HR &amp; GA /HRD&amp;cc=hrd@krisanthium.com" title="Klik untuk kirim email">career@krisanthium.com</a>	
                        </span>
                    </li>
                    <li class="col-md-4 col-sm-6 col-xs-12 isotope-item leadership">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <span class="thumb-info-wrapper">
                                <img src="img/team/t.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Kepala HR &amp; GA /HRD</span>
                                    </span>
                            </span>
                            <span class="thumb-info-caption">
                                <br><b>Tanggal Berakhir : 01 March 2022</b><p></p>
                            </span>
                        <b>Apply to : </b>
                        <a href="mailto:career@krisanthium.com?Subject=Lamaran Kerja Kepala HR &amp; GA /HRD&amp;cc=hrd@krisanthium.com" title="Klik untuk kirim email">career@krisanthium.com</a>	
                        </span>
                    </li>
                    <li class="col-md-4 col-sm-6 col-xs-12 isotope-item leadership">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <span class="thumb-info-wrapper">
                                <img src="img/team/t.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Kepala HR &amp; GA /HRD</span>
                                    </span>
                            </span>
                            <span class="thumb-info-caption">
                                <br><b>Tanggal Berakhir : 01 March 2022</b><p></p>
                            </span>
                        <b>Apply to : </b>
                        <a href="mailto:career@krisanthium.com?Subject=Lamaran Kerja Kepala HR &amp; GA /HRD&amp;cc=hrd@krisanthium.com" title="Klik untuk kirim email">career@krisanthium.com</a>	
                        </span>
                    </li>
                    <li class="col-md-4 col-sm-6 col-xs-12 isotope-item leadership">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <span class="thumb-info-wrapper">
                                <img src="img/team/t.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Kepala HR &amp; GA /HRD</span>
                                    </span>
                            </span>
                            <span class="thumb-info-caption">
                                <br><b>Tanggal Berakhir : 01 March 2022</b><p></p>
                            </span>
                        <b>Apply to : </b>
                        <a href="mailto:career@krisanthium.com?Subject=Lamaran Kerja Kepala HR &amp; GA /HRD&amp;cc=hrd@krisanthium.com" title="Klik untuk kirim email">career@krisanthium.com</a>	
                        </span>
                    </li>
                    <li class="col-md-4 col-sm-6 col-xs-12 isotope-item leadership">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <span class="thumb-info-wrapper">
                                <img src="img/team/t.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Kepala HR &amp; GA /HRD</span>
                                    </span>
                            </span>
                            <span class="thumb-info-caption">
                                <br><b>Tanggal Berakhir : 01 March 2022</b><p></p>
                            </span>
                        <b>Apply to : </b>
                        <a href="mailto:career@krisanthium.com?Subject=Lamaran Kerja Kepala HR &amp; GA /HRD&amp;cc=hrd@krisanthium.com" title="Klik untuk kirim email">career@krisanthium.com</a>	
                        </span>
                    </li>
                    <li class="col-md-4 col-sm-6 col-xs-12 isotope-item leadership">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <span class="thumb-info-wrapper">
                                <img src="img/team/t.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Kepala HR &amp; GA /HRD</span>
                                    </span>
                            </span>
                            <span class="thumb-info-caption">
                                <br><b>Tanggal Berakhir : 01 March 2022</b><p></p>
                            </span>
                        <b>Apply to : </b>
                        <a href="mailto:career@krisanthium.com?Subject=Lamaran Kerja Kepala HR &amp; GA /HRD&amp;cc=hrd@krisanthium.com" title="Klik untuk kirim email">career@krisanthium.com</a>	
                        </span>
                    </li> --}}
                </ul>
            </div>
                    </td></tr>
                    <tr><td><img src="{{ asset('img/21.jpg') }}" width="100%"></td></tr>
                </tbody></table>
            </div>
        
        </div>
</section>

@endsection