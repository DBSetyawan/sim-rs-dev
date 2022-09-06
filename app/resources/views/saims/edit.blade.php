@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('Halaman penambahan sales invoice manual, sesuai kebutuhan.'),
        'class' => 'col-lg-7'
    ])   

<div class="container-fluid mt--5">

    <div class="col-md-1">
        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-body p-12">
            <div class="card bg-secondary shadow border-0">
          <div class="card-header bg-transparent pb-10">
              <div class="text-muted text-center"><small>List Sales Invoice</small></div>
              <div class="btn-wrapper text-center">
                <div class="form-group">
                    <div class="form-group row">
                        {{-- <label class="col-md-9 col-form-label">Document Work Order</label> --}}
                          <p class="form-control-static">
                              Cari nomor sales invoice manual : 
                              <hr>
                              <code> Jika pencarian kosong, list sales invoice akan menarik semua data tanpa filter.</code>
                          </p>
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
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0"></h3>
                         {{-- <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-form">{{ __('Ambil data detail saim dari SIM, manual disini.') }}</button> --}}

                        </div>
                    </div>
                  
                    <div class="card-body">
                        <form method="post" action="{{ route('roles.store') }}" autocomplete="off">
                            @csrf
                            @method('post')
                            <h6 class="heading-small text-muted mb-4">{{ __('SAIM detail') }}</h6>
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
                                            <div class="form-group{{ $errors->has('saim_no') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-name">{{ __('No. SAI') }}</label>
                                                <input type="text" name="saim_no" id="saim_no" value="{{ $saim_live->DocNo }}" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
            
                                                @if ($errors->has('saim_no'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('saim_no') }}</strong>
                                                    </span>
                                                @endif
            
                                            </div>
                                        </div>
                                       
                                    </span>
                                  </div>
                                  <div class="col">
                                    <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('no_sod') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-no_sod">{{ __('No. SOD') }}</label>
                                                <input type="text" name="no_sod" id="no_sod" value="{{ $saim_live->SODocNo }}" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
            
                                                @if ($errors->has('no_sod'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('no_sod') }}</strong>
                                                    </span>
                                                @endif
            
                                            </div>
                                        </div>
                                    </span>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-5">
                                    <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('customer_name') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-customer_name">{{ __('Customer name') }}</label>
                                                <input type="text" name="customer_name" id="customer_name" value="{{ $saim_live->SalesOrder->MasterCustomers->Name }}" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
            
                                                @if ($errors->has('customer_name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('customer_name') }}</strong>
                                                    </span>
                                                @endif
            
                                            </div>
                                        </div>
                                    </span>
                                    <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('tax_no') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-tax_no">{{ __('Tax No') }}</label>
                                                <input type="text" name="tax_no" id="tax_no" value="{{ $saim_live->TaxNo }}" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
            
                                                @if ($errors->has('tax_no'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('tax_no') }}</strong>
                                                    </span>
                                                @endif
            
                                            </div>
                                        </div>
                                    </span>
                                    <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('gid') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-gid">{{ __('GID') }}</label>
                                                <input type="text" name="gid" id="gid" value="{{ $saim_live->GIDocNo }}" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
            
                                                @if ($errors->has('gid'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('gid') }}</strong>
                                                    </span>
                                                @endif
            
                                            </div>
                                        </div>
                                    </span>
                                     <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('jumlah_waktu') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-jumlah_waktu">{{ __('Jumlah waktu') }}</label>
                                                <input type="text" name="jumlah_waktu" id="jumlah_waktu" value="{{ $saim_live->CutPPh }}" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
            
                                                @if ($errors->has('jumlah_waktu'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('jumlah_waktu') }}</strong>
                                                    </span>
                                                @endif
            
                                            </div>
                                        </div>
                                    </span>
                                    <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('jatuh_tempo') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-jumlah_waktu">{{ __('Jatuh Tempo') }}</label>
                                                <input type="text" name="jatuh_tempo" id="jatuh_tempo" value="{{ $saim_live->DocDate }}" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
                                              <div style="display: none">
                                                <input type="text" name="code_customer" id="code_customer" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
                                                <input type="text" name="printed" id="printed" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
                                             
                                                <input type="text" name="changedby" id="changedby" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
                                                <input type="text" name="changeddate" id="changeddate" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
                                                <input type="text" name="createdby" id="createdby" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
                                                <input type="text" name="createddate" id="createddate" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
                                                <input type="text" name="approvedby" id="approvedby" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
                                                <input type="text" name="id_sai" value="{{ $saims->id }}" id="id_sai" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
                                            </div>
                                                @if ($errors->has('jatuh_tempo'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('jatuh_tempo') }}</strong>
                                                    </span>
                                                @endif
            
                                            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
                                        </div>
                                    </span>
                                    <span>
                                        <div id="pogroup">
                                            <div class="form-group" id="datapo1">
                                              <div class="col-md-12 ">
                                                <div class="col-md-4">
                                                  <label>PO :</label>
                                                </div>
                                                <div class="pl-lg-10">
                                                <table width="100%">
                                                  <tbody><tr><td width="95%"><input type="" class="form-control" value="{{ $saim_live->PONo }}" id="po_no" name="po_no[]" value=""></td>
                                                      <td><button type="button" class="btn btn-success btn-xs" id="addPO"> + </button></td>
                                                  </tr>
                                                </tbody></table>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </span>
                                  </div>
                                  <div class="col">
                                    <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                                &nbsp;
                                                <label for="" id="qty">{{ $saimd_live[0]['mcode']['Name'] }} : {{ $saimd_live[0]['Qty'] }}</label>
                                            </div>
                                        </div>
                                      </span>
                                      <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                                &nbsp;
                                                <label for="" id="price">{{ $saimd_live[0]['mcode']['Name']  }} : {{ $saimd_live[0]['Price'] }}</label>
                                            </div>
                                        </div>
                                      </span>
                                      <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                                &nbsp;
                                            </div>
                                        </div>
                                      </span>
                                      <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                                &nbsp;
                                            </div>
                                        </div>
                                      </span>
                                      <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                                &nbsp;
                                            </div>
                                        </div>
                                      </span>
                                      <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                      </span>
                                      <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                                &nbsp;
                                            </div>
                                        </div>
                                      </span>
                                      <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                                &nbsp;
                                                <label for="" id="qty"></label>
                                                <input style="display: none" type="text" name="qty_sim" id="qty_sim" value="{{ $saim_sai->Qty }}">
                                            </div>
                                        </div>
                                      </span>
                                      <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                                &nbsp;
                                                <label for="" id="price"></label>
                                                <input style="display: none" type="text" name="price_sim" id="price_sim" value="{{ $saim_sai->Price }}">
                                            </div>
                                        </div>
                                      </span>
                                      <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                                &nbsp;
                                            </div>
                                        </div>
                                      </span>
                                      <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                                &nbsp;
                                            </div>
                                        </div>
                                      </span>
                                      <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                                &nbsp;
                                            </div>
                                        </div>
                                      </span>
                                      <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                      </span>
                                      <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                                &nbsp;
                                            </div>
                                        </div>
                                      </span>
                                    <span>
                                        <div class="pl-lg-4">
                                          <div class="form-group{{ $errors->has('nama_barang') ? ' has-danger' : '' }}">
                                              <label class="form-control-label" for="input-nama_barang">{{ __('Nama Barang') }}</label>
                                              <select class="form-control" id="nama_barang" name="nama_barang[]">
                                                  @foreach ($saimd_live as $cb)
                                                  <option >{{ $cb->mcode->Name }}</option>
                                                      @endforeach
                                                </select>
                                          </div>
                                      </div>
                                    </span>
                                    <span>
                                        <div class="pl-lg-4">
                                          <div class="form-group{{ $errors->has('jumlah_barang') ? ' has-danger' : '' }}">
                                              <label class="form-control-label" for="input-jumlah_barang">{{ __('Jumlah Barang') }}</label>
                                              <input type="text" name="jumlah[]" value="{{ $tbbrg->jumlah }}" id="jumlah" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>

                                          </div>
                                      </div>
                                    </span>
                                    <span>
                                        <div class="pl-lg-4">
                                          <div class="form-group{{ $errors->has('code_material') ? ' has-danger' : '' }}">
                                              <label class="form-control-label" for="input-code_material">{{ __('Code') }}</label>
                                              <input type="text" readonly name="code_material[]" value="{{ $tbbrg->kode }}" id="code_material" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>
                                          </div>
                                      </div>
                                    </span>
                                    <span>
                                        <div class="pl-lg-4">
                                          <div class="form-group{{ $errors->has('unit') ? ' has-danger' : '' }}">
                                              <label class="form-control-label" for="input-unit">{{ __('Unit') }}</label>
                                              <input type="text" readonly name="unit[]" id="unit" value="{{$tbbrg->unit}}" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required autofocus>

                                          </div>
                                      </div>
                                    </span>
                                    <span>
                                    <div class="col-md-12">
                                        <div class="col-md-4">
                                            <label>Harga :</label>
                                        </div>
                                        <div class="pl-lg-10">
                                            <table width="100%">
                                                <tbody><tr><td width="95%"><input type="text" class="form-control" id="harga" name="harga[]" placeholder="harga" value="{{$tbbrg->harga}}" min="1"></td>
                                                    <td><button type="button" id="add" class="btn btn-success btn-xs">+</button></td>
                                                </tr>
                                                </tbody></table>
                                        </div>
                                    </div>
                                    </span>
                                    <span>
                                        <div id="form"></div>
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
                                    <button class="UpdateSAIMS btn btn-success mt-4">{{ __('Simpan perubahan') }}</button>
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
