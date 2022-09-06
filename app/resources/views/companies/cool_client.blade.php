@extends('layouts.cmpny-assets')

@section('content')
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
{{-- <section class="masthead">
    <picture><img alt="Packlane box art" src="https://assets.packlane.com/images/colorful-boxes.svg"></picture>
</section> --}}

<section class="box-features">
    <div role="main" class="main">

        <!--<section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="active">Our Sister Company</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Our Client</h1>
                    </div>
                </div>
            </div>
        </section>-->

        <div class="container">

            <!--<ul class="nav nav-pills sort-source" data-sort-id="team" data-option-key="filter">
                <li data-option-value="*" class="active"><a href="#">All Client</a></li>
            </ul>-->

            <hr>

            <div class="row">
                <ul class="team-list sort-destination" data-sort-id="team">
                    <div class="layer-cool-client"></div>
                    {{-- <li class="col-md-3 col-sm-6 col-xs-12 isotope-item leadership">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/unilever.jpg') }}" class="img-responsive lazy" alt="unilever">
                        </span>
                    </li> --}}
                    {{-- <li class="col-md-3 col-sm-6 col-xs-12 isotope-item marketing">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/nestle.jpg') }}" class="img-responsive lazy" alt="nestle">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('KOP/bdf.jpg') }}" class="img-responsive lazy" alt="bdf">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/konimex.jpg') }}" class="img-responsive lazy" alt="konimex">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/kraft.jpg') }}" class="img-responsive lazy" alt="kraft">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/cadmus.jpg') }}" class="img-responsive lazy" alt="cadmus">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/berlina.jpg') }}" class="img-responsive lazy" alt="berlina">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/danone.jpg') }}" class="img-responsive lazy" alt="danone">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/philip.jpg') }}" class="img-responsive lazy" alt="philip">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('KOP/logomiwon.png') }}" class="img-responsive lazy" alt="miwon">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/dexa.jpg') }}" class="img-responsive lazy" alt="dexa">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/nutricia.jpg') }}" class="img-responsive lazy" alt="nutricia">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('KOP/vitapharm.jpg') }}" class="img-responsive lazy" alt="vitapharm">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/gudanggaram.jpg') }}" class="img-responsive lazy" alt="gudanggaram">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/frieschevlag.jpg') }}" class="img-responsive lazy" alt="frieschevlag">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('KOP/logo-manohara-asri.png') }}" class="img-responsive lazy" alt="manohara">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/OT.jpg') }}" class="img-responsive lazy" alt="OT">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/latulip.jpg') }}" class="img-responsive lazy" alt="latulip">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/ceres.jpg') }}" class="img-responsive lazy" alt="ceres">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item marketing">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('KOP/pthmsampoerna.png') }}" class="img-responsive lazy" alt="sampoerna">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/mirota.jpg') }}" class="img-responsive lazy" alt="mirota">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/sdm.jpg') }}" class="img-responsive lazy" alt="sdm">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/mandom.jpg') }}" class="img-responsive lazy" alt="mandom">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/teckwah.jpg') }}" class="img-responsive lazy" alt="teckwah">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/baxter.jpg') }}" class="img-responsive lazy" alt="baxter">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/pyridam.jpg') }}" class="img-responsive lazy" alt="pyridam">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/ares.jpg') }}" class="img-responsive lazy" alt="ares">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/tempo.jpg') }}" class="img-responsive lazy" alt="tempo">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/Bumifood.jpg') }}" class="img-responsive lazy" alt="Bumifood">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/malidas.jpg') }}" class="img-responsive lazy" alt="malidas">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/iboe.jpg') }}" class="img-responsive lazy" alt="iboe">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/abc.jpg') }}" class="img-responsive lazy" alt="abc">
                        </span>
                    </li>
                    
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/musimmas.jpg') }}" class="img-responsive lazy" alt="musimmas">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item design">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/PM.jpg') }}" class="img-responsive lazy" alt="PM">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/lotte.jpg') }}" class="img-responsive lazy" alt="lotte">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/sarihusada.jpg') }}" class="img-responsive lazy" alt="sarihusada">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('KOP/megasurya-mas.jpg') }}" class="img-responsive lazy" alt="megasurya">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/bernofarm.jpg') }}" class="img-responsive lazy" alt="bernofarm">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/kalisari.jpg') }}" class="img-responsive lazy" alt="kalisari">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/Interbat.png') }}" class="img-responsive lazy" alt="interbat">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/pec.jpg') }}" class="img-responsive lazy" alt="pec">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/rexplast.jpg') }}" class="img-responsive lazy" alt="rexplast">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/agel.jpg') }}" class="img-responsive lazy" alt="agel">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/campina.jpg') }}" class="img-responsive lazy" alt="campina">
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <img src="{{ asset('packlane-assets/payments-icons/Krisanthium-Offset-Printing_files/maspion.jpg') }}" class="img-responsive lazy" alt="maspion">
                        </span>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
