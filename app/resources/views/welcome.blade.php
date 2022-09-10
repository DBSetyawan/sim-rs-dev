@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-yellow py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="app">
                        <script nonce="">window.__onSentryInit = window.__onSentryInit || [];
                          window.__onSentryInit.push({
                            name: 'renderReact',
                            component: 'SystemAlerts',
                            container: '#blk_alerts',
                            props: {
                              className: 'alert-list',
                            },
                          });
                          window.__onSentryInit.push({
                            name: 'renderReact ',
                            component: 'Indicators',
                            container: '#blk_indicators',
                            props: {
                              className: 'indicators-container',
                            },
                          });</script>
                            <div class="container">
                              <div class="content">
                              </div>
                            </div>
                          </div>
                    <div class="col-lg-5 col-md-6">
                        {{-- @extends('layouts.headers.guest') --}}
                            <img src="{{ asset('argon') }}/img/logoKOPfooter.jpeg" width="35%" height="32%" rel="icon" type="image/png" alt="">
                            <div class="card-body">
                            <h4 class="card-title">SIMRS-MEDIK</h4>
                            <p class="card-text text-black">Developed by @Team SIMRSMEDIC.</p>
                            @auth
                                    <a href="#logged" class="btn btn-success stretched-link">anda sudah login</a>
                            @endauth
                            @guest
                                <a href="{{env('APP_URL')}}/login" class="btn btn-warning stretched-link"><label class="">Masuk</label></a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection
