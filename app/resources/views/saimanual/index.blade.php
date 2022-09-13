<html lang="en" moznomarginboxes mozdisallowselectionprint>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Argon Dashboard') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" />
    <!-- Favicon -->
    <link href="{{ asset('argon') }}/img/logoKOPfooter.jpeg" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    <!-- Extra details for Live View on GitHub Pages -->
    <!--  Social tags      -->
    <meta name="keywords"
        content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim">
    <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim">
    <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="twitter:creator" content="@creativetim">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim" />
    <meta property="og:type" content="article" />
    <style>
        .placeholder-item {
            box-shadow: 0 4px 10px 0 rgba(33, 33, 33, 0.15);
            border-radius: 4px;
            height: 13px;
            position: relative;
            overflow: hidden;
        }

        .placeholder-item::before {
            content: '';
            display: block;
            position: absolute;
            left: -150px;
            top: 0;
            height: 100%;
            width: 150px;
            background: linear-gradient(to right, transparent 0%, #E8E8E8 50%, transparent 100%);
            animation: load 1s cubic-bezier(0.4, 0.0, 0.2, 1) infinite;
        }


        #placeholder-item {
            box-shadow: 0 4px 10px 0 rgba(33, 33, 33, 0.15);
            border-radius: 4px;
            height: 250px;
            position: relative;
            overflow: hidden;
        }

        #placeholder-item::before {
            content: '';
            display: block;
            position: absolute;
            left: -150px;
            top: 0;
            height: 100%;
            width: 150px;
            background: linear-gradient(to right, transparent 0%, #E8E8E8 50%, transparent 100%);
            animation: load 1s cubic-bezier(0.4, 0.0, 0.2, 1) infinite;
        }

        @keyframes load {
            from {
                left: -150px;
            }

            to {
                left: 100%;
            }
        }

        @media print {
            body {
                font-size: 15px;
                font-family: "Times New Roman";
                margin: 0px;
                /* the margin on the content before printing */
            }
        }

        @media print {
            tr.vendorListHeading {
                background-color: #1a4567 !important;
                -webkit-print-color-adjust: exact;
            }
        }

        @media print {
            .vendorListHeading th {
                color: white !important;
            }
        }

        .morecontent span {
            display: none;
        }

        .morelink {
            display: block;
        }

    </style>
</head>

<body class="clickup-chrome-ext_installed">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand pt-0" href="{{ route('home') }}">
                <img src="{{ asset('argon') }}/img/logoKOPfooter.jpeg" class="navbar-brand-img" alt="...">
            </a>
            <!-- User -->
            <ul class="nav align-items-center d-md-none">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="{{ asset('argon') }}/img/logo34.png">
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome!ss</h6>
                        </div>
                        <a href="{{ route('profile.edit') }}" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>My profile</span>
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="ni ni-settings-gear-65"></i>
                            <span>Settings</span>
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="ni ni-calendar-grid-58"></i>
                            <span>Activity</span>
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="ni ni-support-16"></i>
                            <span>Support</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('argon') }}/img/brand/blue.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                                aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Form -->
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="ni ni-tv-2 text-primary"></i> {{ __('SIMRS-MEDIK') }}
                        </a>
                    </li>
                    @role('administrator')
                    <li class="nav-item">
                        <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="navbar-examples">
                            {{-- <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples"> --}}
                            <i class="fab fa-laravel" style="color: #f4645f;"></i>
                            <span class="nav-link-text" style="color: #f4645f;">{{ __('Role management') }}</span>
                        </a>

                        <div class="collapse show" id="navbar-examples">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('roles.index') }}">
                                        {{ __('Hak akses') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.index') }}">
                                        {{ __('Pengguna') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endrole
                    {{-- <li class="nav-item mb-5 mr-4 ml-4 pl-1 bg-danger" style="position: absolute; bottom: 0;">
                <a class="nav-link text-white" href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank">
                    <i class="ni ni-cloud-download-95"></i> Upgrade to PRO
                </a>
            </li> --}}
                </ul>
                {{-- active bar --}}
                <ul class="navbar-nav">
                    <li class="nav-item">
                        {{-- <a class="nav-link active" href="#navbar-saim" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples"> --}}
                        <a class="nav-link" href="#navbar-saim" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="navbar-examples">
                            <i class="fab fa-laravel" style="color: #f4645f;"></i>
                            <span class="nav-link-text" style="color: #f4645f;">{{ __('MEDIC') }}</span>
                        </a>

                        <div class="collapse" id="navbar-saim">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('saims.index') }}">
                                        {{ __('SAIM') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('saims.indexPUI') }}">
                                        {{ __('PUI') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('saims.historyPUI') }}">
                                        {{ __('Report PUI') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('saims.smanual') }}">
                                        {{ __('Report SAIM') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- <li class="nav-item mb-5 mr-4 ml-4 pl-1 bg-danger" style="position: absolute; bottom: 0;">
                <a class="nav-link text-white" href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank">
                    <i class="ni ni-cloud-download-95"></i> Upgrade to PRO
                </a>
            </li> --}}
                </ul>
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading text-muted">Documentation</h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#"></i> Cooming soon..
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/docs/foundation/colors.html">
                    <i class="ni ni-palette"></i> Foundation
                </a>
            </li> --}}
                    {{-- <li class="nav-item">
                <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/docs/components/alerts.html">
                    <i class="ni ni-ui-04"></i> Components
                </a>
            </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"
                    href="{{ route('home') }}">SIMRS-MEDIK</a>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="{{ asset('argon') }}/img/logo34.png">
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">{{ auth()->user()->roles[0]->name }}</h6>
                            </div>
                            <a href="{{ route('profile.edit') }}" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>My profile</span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ni ni-settings-gear-65"></i>
                                <span>Settings</span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ni ni-calendar-grid-58"></i>
                                <span>Activity</span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ni ni-support-16"></i>
                                <span>Support</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            {{-- <div class="container-fluid">
                <div class="alert alert-danger" role="alert">
                    <strong>This is a PRO feature!</strong>
                </div>
                <div class="header-body">
                    <!-- Card stats -->
                    <div class="row">
                        <div class="col-xl-3 col-lg-6">
                            <div class="card card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Traffic</h5>
                                            <span class="h2 font-weight-bold mb-0">350,897</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                <i class="fas fa-chart-bar"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted text-sm">
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                                            <span class="h2 font-weight-bold mb-0">2,356</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                                <i class="fas fa-chart-pie"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted text-sm">
                                        <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                                        <span class="text-nowrap">Since last week</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                                            <span class="h2 font-weight-bold mb-0">924</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                                <i class="fas fa-users"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted text-sm">
                                        <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                                        <span class="text-nowrap">Since yesterday</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                                            <span class="h2 font-weight-bold mb-0">49,65%</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                <i class="fas fa-percent"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted text-sm">
                                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Monitoring SIMRS-MEDIK</h3>
                                </div>
                                <div class="col-4 text-right">
                                    {{-- <a href="#" class="btn btn-sm btn-success badge">SAI MANUAL</a> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" name="no_ktp" id="no_ktp" class="form-control"
                                        placeholder="No KTP/BPJS/Nama pasien" />
                                    {{-- <input type="text" name="from_date" id="from_date" class="form-control" placeholder="Tanggal awal" readonly/> --}}
                                </div>
                                {{-- <div class="col-md-4">
                                    <input type="text" name="to_date" id="to_date" class="form-control" placeholder="Tanggal Akhir" readonly/>
                                </div> --}}
                                <span class="material-icons text md-18">
                                </span><button type="button" name="filter" id="filter" class="btn btn-sm btn-primary">
                                    Cari</button>
                                &nbsp;
                                {{-- <button type="button" name="refresh" id="refresh" class="btn btn-warning">Refresh (Membuka semua dokumen)</button> --}}
                             <div class="row input-daterange">
                                <div class="col-md-4">
                                    <input type="text" name="datein" id="datein" class="form-control" placeholder="Tanggal awal" readonly/>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="dateout" id="dateout" class="form-control" placeholder="Tanggal Akhir" readonly/>
                                </div>
                                <span class="material-icons text md-18">
                                  </span><button type="button" name="filtertgl" id="filtertgl" class="btn btn-sm btn-primary"> Cari berdasarkan tanggal</button>
                                    &nbsp;
                                  {{-- <button type="button" name="refresh" id="refresh" class="btn btn-warning">Refresh (Membuka semua dokumen)</button> --}}
                            </div>
                            </div>
                            <br>
                            <div class="table-responsive">
                                <table id="smanuals" class="table align-items-center">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">No. RM</th>
                                            <th scope="col">NAMA PASIEN</th>
                                            <th scope="col">BPJS</th>
                                            <th scope="col">KTP</th>
                                            <th scope="col">Status Document</th>
                                            <th scope="col">KLINIK</th>
                                            <th scope="col">Aksi</th>
                                            {{-- <th scope="col">Aksi</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="col-md-4"><br /><br /></div>
                            @role('head finance|staff finance|manager finance')
                            {{-- <a class="btn btn-sm btn-primary prevsprnt" style="color:white"> preview</a> --}}
                            @endrole
                            @role('head finance|manager finance|staff finance')
                            <button class="btn btn-success eventApproved dissaproveEvent" id="status_docs_att"
                                data-sai=""> Approved</button>
                            @else
                            {{-- <code>anda tidak punya akses untuk memberikan status dokumen.</code> --}}
                            @endrole
                        </div>
                        <br />

                        {{-- ended wait loading css --}}
                    </div>
                </div>
            </div>
            
             <!-- Modal -->
            <div class="modal fade" id="hapusData" tabindex="-1" role="dialog" aria-labelledby="HapusDataLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin menghapus data ini ?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="display:none">
                                        <input type="text" readonly class="form-control" id="hapuspasien" placeholder="wajib diisi sebagai primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="deletedata btn btn-primary">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="PoliGigi" tabindex="-1" role="dialog" aria-labelledby="PoliGigiLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Menu Update data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" readonly class="form-control" id="poligigi_input" placeholder="wajib diisi sebagai primary">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="poligigi_input_status" placeholder="Isikan lokasi poli">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="status_docs[]"  id="customRadio5" class="custom-control-input" value="Belum Selesai" type="radio">
                                        <label class="custom-control-label sd" for="customRadio5">Belum Selesai</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="status_docs[]"  id="customRadio6" class="custom-control-input" value="Selesai" type="radio">
                                        <label class="custom-control-label sd" for="customRadio6">Selesai</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="savechanges btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                        <div class="copyright text-center text-xl-left text-muted">
                            © 2022 <a href="" class="font-weight-bold ml-1" target="_blank">DNX Developer</a> &amp;
                            <a href="" class="font-weight-bold ml-1" target="_blank">Updivision</a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                            <li class="nav-item">
                                <a href="" class="nav-link" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" target="_blank">Updivision</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" target="_blank">MIT License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.0.3/js/dataTables.dateTime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Argon JS -->
    <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    <script src="{{ asset('js/shortlen.js') }}"></script>

    <script>
        $("#result-exist").show();
        $("#wait-content").hide();
        $("#status_docs_att").hide();

        $('#PoliGigi').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            $('#poligigi_input').val(id)
        })

         $('#hapusData').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            $('#hapuspasien').val(id)
        })

        function printDiv(elem) {
            // var mywindow = window.open('', 'PRINT', 'height=400,width=600');
            //     mywindow.document.write('<html><head><title>' + document.title  + '</title>');
            //     mywindow.document.write('</head><body >');
            //     mywindow.document.write(elem);
            //     mywindow.document.write('</body></html>');
            //     mywindow.document.close(); // necessary for IE >= 10
            //     mywindow.focus(); // necessary for IE >= 10*/

            // //jsPrintSetup.setPrinter('PDFCreator'); //set the printer if you wish
            // jsPrintSetup.setSilentPrint(1);

            // //sent empty page header
            // jsPrintSetup.setOption('headerStrLeft', '');
            // jsPrintSetup.setOption('headerStrCenter', '');
            // jsPrintSetup.setOption('headerStrRight', '');

            // // set empty page footer
            // jsPrintSetup.setOption('footerStrLeft', '');
            // jsPrintSetup.setOption('footerStrCenter', '');
            // jsPrintSetup.setOption('footerStrRight', '');

            // // print my window silently. 
            // jsPrintSetup.printWindow(mywindow);
            // jsPrintSetup.setSilentPrint(1); //change to 0 if you want print dialog

            //     mywindow.close();

            //     return true;

            if (elem == null || elem == '') {

                const ProdEvents = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                ProdEvents.fire({
                    icon: 'error',
                    title: 'Maaf kode SAI tidak bisa diproses, karena datanya kosong..'
                })
                setTimeout(function () {
                    $(".prevsprnt").text("preview");

                }, 8000);

            } else {

                let rpt = elem;
                let link = '{!! route("saims.rpt_preview", ":rpt")  !!}';
                let redirect = link.replace(":rpt", rpt)
                setTimeout(function () {
                    window.open(redirect, '_blank');
                }, 8000);

                setTimeout(function () {
                    $(".prevsprnt").text("preview");

                }, 8000);

            }

        }

        var dataTables_smanual = $('#smanuals').DataTable({
            paging: true,
            deferRender: true,
            responsive: true,
            processing: true,
            stateSave: false,
            searching: false,
            stateDuration: -1,
            serverSide: true,
            info: true,
            scrollCollapse: true,
            retrieve: true,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'print',
                    className: ' btn btn-sm btn-warning'
                },
                {
                    extend: 'excel',
                    className: ' btn btn-sm btn-success'
                },
                {
                    extend: 'csv',
                    className: ' btn btn-sm btn-success'
                },
                {
                    extend: 'pdf',
                    className: ' btn btn-sm btn-danger'
                },
            ],
            language: {
                processing: '<span class="text-info">Sedang diproses..</span>',
                search: "Cari",
                infoEmpty: "Tidak ada data apapun disini..",
                info: "",
                zeroRecords: "Pencarian dalam keyword inputan anda tidak dapat kami temukan..",
                paginate: {
                    'previous': '<<',
                    'next': '>>'
                },
            },
            ajax: {
                url: " {{ route('saims.dtableSAIMANUAL') }}",
            },
            fixedHeader: {
                header: true,
                footer: true
            },
            colReorder: {
                allowReorder: true
            },
            order: [
                [0, 'desc']
            ],
            // stateSaveCallback: function (settings, data) {

            //     localStorage.setItem('Resultmachineaverage.data', JSON.stringify(data));

            // },
            // stateLoadCallback: function () {
            //     try {

            //         return JSON.parse(localStorage.getItem('Resultmachineaverage.data'));

            //     } catch (e) {

            //         console.log(e)
            //     }
            // },
            columns: [{
                    data: 'no_rekamedik',
                    name: 'No. RM',
                },
                {
                    data: 'nama_pasien',
                    name: 'PASIEN',
                },
                {
                    data: 'no_bpjs',
                    name: 'BPJS',
                },
                {
                    data: 'no_ktp',
                    name: 'KTP'
                },
                {
                    data: 'status_docs',
                    name: 'Status Document'
                },
                {
                    data: 'poli',
                    name: 'KLINIK'
                },
                {
                    data: 'klinik',
                    name: 'KLINIK'
                },
                // {
                //     data: 'btn',
                //     name: 'Aksi',
                //     orderable: false,
                //     searchable: false
                // },
            ]
        });
        // wdtLoading.start({
        //     category: 'profile',
        //     speed: 1200
        // });

        // setTimeout(function() {
        //     wdtLoading.done();
        // }, 6310);


        async function getDetailSalesInvoice(dataform) {

            let data = {
                dataform: dataform
            }

            const Workoders = "{{ route('getDetailSalesInvoice.so') }}";

            const settings = {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(data)
            }
            try {

                const fetchResponse = await fetch(`${Workoders}`, settings);
                const data = await fetchResponse.json();
                return data;
            } catch (error) {

                return error
            }
        }

          async function updateDocuments(dataform, status_docs) {

            let data = {
                dataform: dataform,
                sts: status_docs
            }

            const Workoders = "{{ route('update.master.inc') }}";

            const settings = {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(data)
            }
            try {

                const fetchResponse = await fetch(`${Workoders}`, settings);
                const data = await fetchResponse.json();
                return data;
            } catch (error) {

                return error
            }
        }

        async function deleteDocuments(dataform) {

            let data = {
                dataform: dataform
            }

            const Workoders = "{{ route('delete.master.inc') }}";

            const settings = {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(data)
            }
            try {

                const fetchResponse = await fetch(`${Workoders}`, settings);
                const data = await fetchResponse.json();
                return data;
            } catch (error) {

                return error
            }
        }


        async function CheckDataSAIM(sai) {
            let data = {
                req_sai: sai
            }

            const Workoders = "{{ route('e.CheckDataSAIM') }}";

            const settings = {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(data)
            }
            try {

                const fetchResponse = await fetch(`${Workoders}`, settings);
                const data = await fetchResponse.json();
                return data;
            } catch (error) {

                return error
            }
        }


        async function EventDiss(sai) {

            let data = {
                req_sai: sai
            }

            const Workoders = "{{ route('e.EventDiss') }}";

            const settings = {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(data)
            }
            try {

                const fetchResponse = await fetch(`${Workoders}`, settings);
                const data = await fetchResponse.json();
                return data;
            } catch (error) {

                return error
            }
        }

        async function EventDisssaproveApproved(sai) {

            let data = {
                req_sai: sai
            }

            const Workoders = "{{ route('e.EventApproved') }}";

            const settings = {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(data)
            }
            try {

                const fetchResponse = await fetch(`${Workoders}`, settings);
                const data = await fetchResponse.json();
                return data;
            } catch (error) {

                return error
            }
        }

        $('.prevsprnt').click(function (e) {
            e.preventDefault();
            $(".prevsprnt").text("tunggu sebentar");
            // var contents = $("#printableArea").html();
            let contents = $(".sai_target").val();

            return printDiv(contents);
        });

        $('#filtertgl').click(function () {
            var datein = $('#datein').val();
            var dateout = $('#dateout').val();
            if (datein != '' && dateout != '') {
                $('#smanuals').DataTable().destroy();
                load_data(null, datein, dateout);

            } else {
                 const ProdEvents = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                ProdEvents.fire({
                    icon: 'error',
                    title: 'Awal dan akhir harus diisi, jika ingin menggunakan fitur filter tanggal'
                })
            }

        });

        $('#filter').click(function () {
            var ktp = $('#no_ktp').val(); //no_ktp
            if (ktp != '') {
                $('#smanuals').DataTable().destroy();
                load_data(ktp,'','');
            } else {
                const ProdEvents = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                $('#smanuals').DataTable().destroy();
                load_data(ktp,'','');
                ProdEvents.fire({
                    icon: 'success',
                    title: 'Data berhasil ditampilkan secara keseluruhan.'
                })
            }
        });

        function load_data(from_date = '', datein = '', dateout = '') {

            @if(isset(Auth::user()->roles[0]->id))

            var dataTables_smanual = $('#smanuals').DataTable({
                paging: true,
                deferRender: true,
                responsive: true,
                processing: true,
                stateSave: false,
                searching: false,
                stateDuration: -1,
                serverSide: true,
                info: true,
                scrollCollapse: true,
                retrieve: true,
                dom: 'Bfrtip',
                buttons: [
                    // 'copy', 'csv', 'excel', 'pdf', 'print'
                    {
                        extend: 'pdf',
                        className: ' btn btn-sm btn-primary'
                    },
                ],
                language: {
                    processing: '<span class="text-info">Sedang diproses..</span>',
                    search: "Cari",
                    infoEmpty: "Tidak ada data apapun disini..",
                    info: "",
                    zeroRecords: "Pencarian dalam keyword inputan anda tidak dapat kami temukan..",
                    paginate: {
                        'previous': '<<',
                        'next': '>>'
                    },
                },
                ajax: {
                    url: " {{ route('saims.dtableSAIMANUAL') }}",
                    data: {
                        fd: from_date,
                        datein: datein,
                        dateout: dateout
                    }
                },
                fixedHeader: {
                    header: true,
                    footer: true
                },
                colReorder: {
                    allowReorder: true
                },
                order: [
                    [0, 'desc']
                ],
                stateSaveCallback: function (settings, data) {

                    localStorage.setItem('Resultmachineaverage.data', JSON.stringify(data));

                },
                stateLoadCallback: function () {
                    try {

                        return JSON.parse(localStorage.getItem('Resultmachineaverage.data'));

                    } catch (e) {

                        console.log(e)
                    }
                },
                    columns: [{
                        data: 'no_rekamedik',
                        name: 'No. RM',
                    },
                    {
                        data: 'nama_pasien',
                        name: 'PASIEN',
                    },
                    {
                        data: 'no_bpjs',
                        name: 'BPJS',
                    },
                    {
                        data: 'no_ktp',
                        name: 'KTP'
                    },
                    {
                        data: 'status_docs',
                        name: 'Status Document'
                    },
                    {
                        data: 'poli',
                        name: 'KLINIK'
                    },
                    {
                        data: 'klinik',
                        name: 'KLINIK'
                    },
                ]
            });

            @else

            var dataTables_smanual = $('#smanuals').DataTable({
                paging: true,
                deferRender: true,
                responsive: true,
                processing: true,
                stateSave: false,
                searching: false,
                stateDuration: -1,
                serverSide: true,
                info: true,
                scrollCollapse: true,
                retrieve: true,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'print',
                        className: ' btn btn-sm btn-warning'
                    },
                    {
                        extend: 'excel',
                        className: ' btn btn-sm btn-success'
                    },
                    {
                        extend: 'csv',
                        className: ' btn btn-sm btn-success'
                    },
                    {
                        extend: 'pdf',
                        className: ' btn btn-sm btn-danger'
                    },
                ],
                language: {
                    processing: '<span class="text-info">Sedang diproses..</span>',
                    search: "Cari",
                    infoEmpty: "Tidak ada data apapun disini..",
                    info: "",
                    zeroRecords: "Pencarian dalam keyword inputan anda tidak dapat kami temukan..",
                    paginate: {
                        'previous': '<<',
                        'next': '>>'
                    },
                }
            });

            @endif
        }

        function formatRupiah(angka, prefix) {
            var number_string = angka.toString().replace(/[^,\d]/g, ''),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? rupiah.replace("/\,/g", '') + ',00' : '');
        }

        $(document).on('click', '#sai_mPREVIEW', function (e) {
            e.preventDefault();
            $("#wait-content").show();
            var sai = $(this).attr('data-id');

            $('#saim_manual_details').find("tr:gt(2)").remove();

            const msg = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3500,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            var index = 1;
            getDetailSalesInvoice(sai).then(function (data) {

                CheckDataSAIM(sai).then(function (data) {

                    // console.log("btn_app ", data)
                    if (data.response.status_docs == "approved") {
                        $(".eventApproved").replaceWith(
                            "<button id='status_docs_att' class='btn btn-sm btn-danger dissaproveEvent' data-sai=" +
                            data.sai + ">Belum Selesai</button>");
                        // $(".dissaproveEvent").replaceWith("<button id='status_docs_att' class='btn btn-sm btn-danger dissaproveEvent' data-sai="+data.sai+">Dissaproved</button>");
                    }

                    if (data.response.status_docs == "open") {
                        $(".eventApproved").replaceWith(
                            "<button id='status_docs_att' class='btn btn-sm btn-danger eventApproved' data-sai=" +
                            data.sai + ">Selesai</button>");
                        // $(".dissaproveEvent").replaceWith("<button id='status_docs_att' class='btn btn-sm btn-danger eventApproved' data-sai="+data.sai+">Approved</button>");
                    }

                    if (data.response.status_docs == "dissaproved") {
                        $(".eventApproved").replaceWith(
                            "<button id='status_docs_att' class='btn btn-sm btn-success eventApproved' data-sai=" +
                            data.sai + ">Selesai</button>");
                        // $(".dissaproveEvent").replaceWith("<button id='status_docs_att' class='btn btn-sm btn-success eventApproved' data-sai="+data.sai+">Approved</button>");
                    }
                });
                $("#result-exist").show();
                $("#wait-content").hide();

                msg.fire({
                    icon: 'success',
                    title: 'Data berhasil ditampilkan dipreview invoice..'
                })
                $("#no_sai").html(data.invoiceh[0].DocNo);
                $(".sai_target").val(data.invoiceh[0].DocNo);
                $("#tanggal").html(data.Tanggal);
                // $("#tanggal").html(data.invoiceh[0].DocDate);
                $("#code_customers").html(data.invoiceh[0].sales_order.master_customers.Code);
                $("#no_surat_jln").html(data.invoiceh[0].GIDocNo);
                $("#no_po").html(data.invoiceh[0].PONo);
                $("#customer_name").html(data.invoiceh[0].sales_order.master_customers.Name);
                $("#no_sod").html(data.invoiceh[0].SODocNo);
                $("#taxno").html(data.invoiceh[0].TaxNo);
                $("#Addressc").html(data.invoiceh[0].sales_order.master_customers.Address);
                $("#result_cost").html(formatRupiah(data.result_cost) + ',00');
                $("#PPN").html(formatRupiah(data.ppn) + ',00');
                $("#total_akhir").html(formatRupiah(data.total_akhir) + ',00');
                $("#terbilang").html(data.terbilang);
                $("#jwp").html(data.invoiceh[0].TOP +
                    "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hari");
                $("#tjt").html(data.Tanggal_jatuh_tempo);
                $("#customer_shipTo").html(data.invoiceh[0].sales_order.master_customers.Name);
                $("#Address_shipTo").html(data.invoiceh[0].sales_order.master_customers.Address);

                // Configure/customize these variables.
                var showChar = 10; // How many characters are shown by default
                var ellipsestext = "...";
                var moretext = "Show more >";
                var lesstext = "Show less";
                $('.vbn').each(function () {
                    var content = $(this).html(data.invoiceh[0].sales_order.master_customers
                        .Address);

                    if (content.length > showChar) {

                        var c = content.substr(0, showChar);
                        var h = content.substr(showChar, content.length - showChar);

                        var html = c + '<span class="moreellipses">' + ellipsestext +
                            '&nbsp;</span><span class="morecontent"><span>' + h +
                            '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext +
                            '</a></span>';

                        $(this).html(html);
                    }
                    $('#Address_shipTo').shorten('collapse');

                });

                $(".morelink").click(function () {
                    if ($(this).hasClass("less")) {
                        $(this).removeClass("less");
                        $(this).html(moretext);
                    } else {
                        $(this).addClass("less");
                        $(this).html(lesstext);
                    }
                    $(this).parent().prev().toggle();
                    $(this).prev().toggle();
                    return false;
                });

                data.isaims_tbbrg.forEach(element => {
                    $('#saim_manual_details').append('<tr style="line-height:27px">' +
                        '<td align="left" valign="top">' +
                        '<font style="font-family: sans-serif;font-size: 13px;">' + index +
                        '</font>' +
                        '</td>' +
                        '<td align="left" valign="top">' +
                        '<font style="font-family: sans-serif;font-size: 13px;">' + element
                        .kode + '</font>' +
                        '</td>' +
                        '<td align="right" valign="top">' +
                        '<font style="font-family: sans-serif;font-size: 13px;">' + element
                        .jumlah + '&nbsp;&nbsp;</font>' +
                        '</td>' +
                        '<td align="left" valign="top">' +
                        '<font style="font-family: sans-serif;font-size: 13px;">' + element
                        .unit + '</font>' +
                        '</td>' +
                        '<td align="left" valign="top">' +
                        '<font style="font-family: sans-serif;font-size: 13px;">' + element
                        .nama + '</font>' +
                        '</td>' +
                        '<td align="right" valign="top">' +
                        ' <font style="font-family: sans-serif;font-size: 13px;">' +
                        formatRupiah(element.harga, 1) + '</font>' +
                        '</td>' +
                        '<td align="right" valign="top">' +
                        '<font style="font-family: sans-serif;font-size: 13px;">' +
                        formatRupiah(parseInt(element.jumlah * element.harga), 1) +
                        '</font>' +
                        '</td>' +
                        '<tr style="border: .05px dotted #000;">' +
                        '</tr>' +
                        '</tr>' + '');
                    index++
                });

                // next after cleared rows

                $('#saim_manual_details').append('<tr>' +
                    '<td align="center" colspan="7">' +
                    '  <font style="font-family: sans-serif;font-size: 14px;">&nbsp;' +
                    '</font>' +
                    '</td>' +
                    '</tr>' +
                    '<tr>' +
                    ' <td align="center" colspan="7">' +
                    '  <font style="font-family: sans-serif;font-size: 14px;">&nbsp;</font>' +
                    '  </td>' +
                    '  </tr>' +
                    '<tr>' +
                    ' <td align="center" colspan="7">' +
                    '    <font style="font-family: sans-serif;font-size: 14px;">&nbsp;</font>' +
                    ' </td>' +
                    ' </tr>' +
                    '<tr>' +
                    '  <td align="center" colspan="7">' +
                    '  <font style="font-family: sans-serif;font-size: 14px;">&nbsp;</font>' +
                    ' </td>' +
                    ' </tr>' +
                    ' <tr>' +
                    ' <td align="center" colspan="7">' +
                    ' <font style="font-family: sans-serif;font-size: 14px;">&nbsp;</font>' +
                    ' </td>' +
                    ' </tr>' +
                    ' <tr>' +
                    ' <td align="center" colspan="7">' +
                    ' <font style="font-family: sans-serif;font-size: 14px;">&nbsp;</font>' +
                    ' </td>' +
                    '  </tr>' +
                    ' <tr>' +
                    ' <td align="center" colspan="7">' +
                    ' <font style="font-family: sans-serif;font-size: 14px;">&nbsp;</font>' +
                    '  </td>' +
                    ' </tr>' +
                    ' <tr>' +
                    '  <td align="center" colspan="7">' +
                    '  <font style="font-family: sans-serif;font-size: 14px;">&nbsp;</font>' +
                    '   </td>' +
                    '   </tr>' +
                    ' <tr>' +
                    ' <td align="center" colspan="7">' +
                    ' <font style="font-family: sans-serif;font-size: 14px;">&nbsp;</font>' +
                    ' </td>' +
                    ' </tr>' +
                    ' <tr>' +
                    '<td align="center" colspan="7">' +
                    ' <font style="font-family: sans-serif;font-size: 14px;">&nbsp;</font>' +
                    ' </td>' +
                    '  </tr>' +
                    ' <tr>' +
                    '  <td align="center" colspan="7">' +
                    ' <font style="font-family: sans-serif;font-size: 14px;">&nbsp;</font>' +
                    '   </td>' +
                    ' </tr>' +
                    ' <tr>' +
                    ' <td align="center" colspan="7">' +
                    ' <font style="font-family: sans-serif;font-size: 14px;">&nbsp;</font>' +
                    ' </td>' +
                    ' </tr>' +
                    ' <tr>' +
                    ' <td align="center" colspan="7">' +
                    ' <font style="font-family: sans-serif;font-size: 14px;">&nbsp;</font>' +
                    '</td>' +
                    '  </tr>' +
                    '<tr>' +
                    ' <td align="center" colspan="7">' +
                    ' <font style="font-family: sans-serif;font-size: 14px;">&nbsp;</font>' +
                    ' </td>' +
                    ' </tr>' +
                    ' <tr>' +
                    ' <td align="center" colspan="7">' +
                    ' <font style="font-family: sans-serif;font-size: 14px;">&nbsp;</font>' +
                    '</td>' +
                    ' </tr>' +
                    '<tr>' +
                    ' <td align="center" colspan="6">' +
                    '  <font style="font-family: sans-serif;font-size: 14px;">&nbsp;' +
                    ' </font>' +
                    ' </td>' +
                    '</tr>' +
                    '<tr>' +
                    ' <td align="center" colspan="6">' +
                    ' <font style="font-family: sans-serif;font-size: 14px">&nbsp;' +
                    '</font>' +
                    ' </td>' +
                    '</tr>' +
                    '<tr>' +
                    ' <td align="center" colspan="6">' +
                    '  <font style="font-family: sans-serif;font-size: 14px;">&nbsp;' +
                    ' </font>' +
                    ' </td>' +
                    ' </tr>' +
                    ' <tr>' +
                    '  <td align="center" colspan="6">' +
                    ' <font style="font-family: sans-serif;font-size: 14px;">&nbsp;' +
                    ' </font>' +
                    '  </td>' +
                    ' </tr>' +
                    ' <tr>' +
                    ' <td align="center" colspan="6">' +
                    ' <font style="font-family: sans-serif;font-size: 14px;">&nbsp;' +
                    '</font>' +
                    ' </td>' +
                    ' </tr>' +
                    ' <tr>' +
                    ' <td align="center" colspan="6">' +
                    ' <font style="font-family: sans-serif;font-size: 14px;">&nbsp;' +
                    ' </font>' +
                    ' </td>' +
                    ' </tr>' +
                    '  <tr>' +
                    ' <td align="center" colspan="6">' +
                    ' <font style="font-family: sans-serif;font-size: 14px;">&nbsp;' +
                    ' </font>' +
                    ' </td>' +
                    ' </tr>' +
                    '  <tr>' +
                    ' <td align="center" colspan="6">' +
                    ' <font style="font-family: sans-serif;font-size: 14px;">&nbsp;' +
                    '</font>' +
                    ' </td>' +
                    ' </tr>' + '');

                $("#status_docs_att").show();

            });
        });

        
           $(document).on('click', '.deletedata', function (e) {
            e.preventDefault();
            
             var formData = {  
                'id'     : $("#hapuspasien").val(),
            };

            deleteDocuments(formData).then(function (data) {
                 const ProdEvents = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                if(data.response_data == true){
                    ProdEvents.fire({
                        icon: 'success',
                        title: 'Dokumen status berhasil dihapus.'
                    })
                
                    var dataTables = $('#smanuals').DataTable();
                    dataTables.ajax.reload(null, false);
                    dataTables.columns.adjust().draw();

                } else {
                    ProdEvents.fire({
                        icon: 'error',
                        title: 'Dokumen status gagal dihapus.'
                    })
                }
            });

        });

         $(document).on('click', '.savechanges', function (e) {
            e.preventDefault();
            
             var formData = {  
                'id'     : $("#poligigi_input").val(),
                'klinik'     : $("#poligigi_input_status").val(),
                'status'       : $('input[name=poligigi_input_status]').val(),
            };

            var status_docs = $("input[name='status_docs[]']:checked").val();

            updateDocuments(formData, status_docs).then(function (data) {
                 const ProdEvents = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                if(data.response_data == true){
                    ProdEvents.fire({
                        icon: 'success',
                        title: 'Dokumen status berhasil diupdate.'
                    })
                
                    var dataTables = $('#smanuals').DataTable();
                    dataTables.ajax.reload(null, false);
                    dataTables.columns.adjust().draw();

                } else {
                    ProdEvents.fire({
                        icon: 'error',
                        title: 'Dokumen status gagal diupdate.'
                    })
                }
            });

        });

        $(document).on('click', '.eventApproved', function () {
            let sai_eventApproved = $(".sai_target").val();
            EventDisssaproveApproved(sai_eventApproved).then(function (data) {
                const ProdEvents = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                var dataTables = $('#smanuals').DataTable();
                dataTables.ajax.reload(null, false);
                dataTables.columns.adjust().draw();

            });

            CheckDataSAIM(sai_eventApproved).then(function (data) {

                // console.log("btn_app ", data)
                if (data.response.status_docs == "approved") {
                    $(".eventApproved").replaceWith(
                        "<button id='status_docs_att' class='btn btn-sm btn-danger dissaproveEvent' data-sai=" +
                        data.sai + ">Belum Selesai</button>");
                    // $(".dissaproveEvent").replaceWith("<button id='status_docs_att' class='btn btn-sm btn-danger dissaproveEvent' data-sai="+data.sai+">Dissaproved</button>");
                }

                if (data.response.status_docs == "open") {
                    $(".eventApproved").replaceWith(
                        "<button id='status_docs_att' class='btn btn-sm btn-danger eventApproved' data-sai=" +
                        data.sai + ">Selesai</button>");
                    // $(".dissaproveEvent").replaceWith("<button id='status_docs_att' class='btn btn-sm btn-danger eventApproved' data-sai="+data.sai+">Approved</button>");
                }

                if (data.response.status_docs == "dissaproved") {
                    $(".eventApproved").replaceWith(
                        "<button id='status_docs_att' class='btn btn-sm btn-success eventApproved' data-sai=" +
                        data.sai + ">Selesai</button>");
                    // $(".dissaproveEvent").replaceWith("<button id='status_docs_att' class='btn btn-sm btn-success eventApproved' data-sai="+data.sai+">Approved</button>");
                }
            });

            const ProdEvents = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3500,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            ProdEvents.fire({
                icon: 'warning',
                title: 'Dokumen berhasil Diapprove.'
            })
        });

        $(document).on('click', '.dissaproveEvent', function () {
            let sai_eventDissaproved = $(".sai_target").val();

            EventDiss(sai_eventDissaproved).then(function (data) {
                const ProdEvents = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                ProdEvents.fire({
                    icon: 'warning',
                    title: 'Dokumen berhasil Didissaprove.'
                })

                var dataTables = $('#smanuals').DataTable();
                dataTables.ajax.reload(null, false);
                dataTables.columns.adjust().draw();

            });

            CheckDataSAIM(sai_eventDissaproved).then(function (data) {
                // console.log("btn_dis", data)

                if (data.response.status_docs == "approved") {
                    $(".dissaproveEvent").replaceWith(
                        "<button id='status_docs_att' class='btn btn-sm btn-danger dissaproveEvent' data-sai=" +
                        data.sai + ">Belum selesai</button>");
                    // $(".eventApproved").replaceWith("<button id='status_docs_att' class='btn btn-sm btn-danger dissaproveEvent' data-sai="+data.sai+">Dissaproved</button>");
                }

                if (data.response.status_docs == "open") {
                    $(".dissaproveEvent").replaceWith(
                        "<button id='status_docs_att' class='btn btn-sm btn-danger eventApproved' data-sai=" +
                        data.sai + ">Selesai</button>");
                    // $(".eventApproved").replaceWith("<button id='status_docs_att' class='btn btn-sm btn-danger eventApproved' data-sai="+data.sai+">Approved</button>");
                }

                if (data.response.status_docs == "dissaproved") {
                    $(".dissaproveEvent").replaceWith(
                        "<button id='status_docs_att' class='btn btn-sm btn-success eventApproved' data-sai=" +
                        data.sai + ">Selesai</button>");
                    // $(".eventApproved").replaceWith("<button id='status_docs_att' class='btn btn-sm btn-success eventApproved' data-sai="+data.sai+">Approved</button>");
                }
            });
        });

        $('.input-daterange').datepicker({
            todayBtn: 'linked',
            format: 'yyyy-mm-dd',
            autoclose: true
        });

    </script>
</body>

</html>
