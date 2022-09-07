@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('Pasien baru.'),
        'class' => 'col-lg-7'
    ])   

<div class="container-fluid mt--5">

    <div class="col-md-1">
        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
            <div class="modal-body p-12">
            <div class="card bg-secondary shadow border-0">
          <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center"><small></small></div>
              <div class="btn-wrapper text-center">
                <div class="form-group">
                    <div class="form-group row">
                        {{-- <label class="col-md-9 col-form-label">Document Work Order</label> --}}
                          {{-- <p class="form-control-static">
                              Cari nomor sales invoice manual : 
                              <hr>
                              <code> Jika pencarian kosong, list sales invoice akan menarik semua data tanpa filter.</code>
                          </p> --}}
                        </div>
                        <p class="form-control-static">
                            <input type="text" class="form-control" name="docnox" id="docnox" placeholder="Code Sales Invoice"><br/>
                          <button id="slinvsearch" class="btn btn-primary">Cari</button>
                          </p>
                 </div>
              </div>
          </div>
          <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                  <small>Sales Invoice manual</small>
              </div>

              <form id="search-form" class="form-inline" role="form">
                {{-- <div class="input-daterange input-group" id="kt_datepicker"> --}}
                  {{-- <input type="text" class="form-control datatable-input" name="start" placeholder="Tanggal Mulai" data-col-index="9" /> --}}
                  {{-- <input type="text" class="form-control datatable-input" name="end" placeholder="Tanggal Akhir" data-col-index="10" /> --}}
                  {{-- <input type="text" class="form-control" name="docnox" id="docnox" placeholder="Code SIM WO">
                 

                  <div class="row col-md-2">
                    <button type="submit" class="btn btn-primary">Cari</button>
                  </div> --}}
                    </div>
                </form>
              {{-- <form role="form"> --}}
                <div class="table-responsive">
                    <table id="SAIM" class="table align-items-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Sales Invoice</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                <tbody>
                        {{-- <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                 <p>development</p>
                                </div>
                            </th>
                            <td>
                                $2,500 USD
                            </td>
                            <td>
                                <span class="badge badge-dot mr-4">
                                  <i class="bg-warning"></i> pending
                                </span>
                            </td>
                            <td>
                                <div class="avatar-group">
                   <p>statuss dev</p>
                </div>
                
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="mr-2">60%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
                
                </div>
                                {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        {{-- endmodal --}}
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    {{-- <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0"></h3> --}}
                         {{-- <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-form">{{ __('Ambil data detail saim dari SIM, manual disini.') }}</button> --}}

                        {{-- </div>
                    </div> --}}
                  
                    <div class="card-body">
                        <form method="post" action="{{ route('roles.store') }}" autocomplete="off">
                            @csrf
                            @method('post')
                            <h6 class="heading-small text-muted mb-4">{{ __('SIM RS MEDIKA | PENDAFTARAN') }}</h6>
                            @if (session('messages'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('messages') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="container">
                                <div class="row">
                                     <div class="col">
                                    <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('no_rekamedik') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-name">{{ __('No. REKAM MEDIK') }}</label>
                                                <input type="text" name="no_rekamedik" id="no_rekamedik" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('NORM') }}" required autofocus>
            
                                                @if ($errors->has('saim_no'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('no_rekamedik') }}</strong>
                                                    </span>
                                                @endif
            
                                            </div>
                                        </div>
                                    </span>
                                     <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-name">{{ __('Jenis Kelamin') }}</label>
                                                <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
            
                                                @if ($errors->has('jenis_kelamin'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                                    </span>
                                                @endif
            
                                            </div>
                                        </div>
                                    </span>
                                  </div>
                                  <div class="col">
                                    <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('no_ktp') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-name">{{ __('No. KTP') }}</label>
                                                <input type="text" name="no_ktp" id="no_ktp" class="form-control form-control-alternative{{ $errors->has('no_ktp') ? ' is-invalid' : '' }}" placeholder="{{ __('No KTP') }}" required autofocus>
            
                                                @if ($errors->has('saim_no'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('no_ktp') }}</strong>
                                                    </span>
                                                @endif
            
                                            </div>
                                        </div>
                                         <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('nama_pasien') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-no_sod">{{ __('Nama Pasien') }}</label>
                                                <input type="text" name="nama_pasien" id="nama_pasien" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
            
                                                @if ($errors->has('nama_pasien'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('nama_pasien') }}</strong>
                                                    </span>
                                                @endif
            
                                            </div>
                                        </div>
                                       
                                    </span>
                                  </div>
                                  <div class="col">
                                    <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('no_bpjs') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-no_sod">{{ __('No. BPJS') }}</label>
                                                <input type="text" name="no_bpjs" id="no_bpjs" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('No. BPJS') }}" required autofocus>
            
                                                @if ($errors->has('no_bpjs'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('no_bpjs') }}</strong>
                                                    </span>
                                                @endif
            
                                            </div>
                                        </div>
                                    </span>
                                  </div>
                                </div>
                              </div>

                          
                        <hr class="my-4" />
                            @if (session('password_status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('password_status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="text-center">
                                    <button class="SimpanSAIMS btn btn-success mt-4">{{ __('Simpan') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
 
@endsection
