@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('Halaman penambahan sales invoice manual, sesuai kebutuhan.'),
        'class' => 'col-lg-7'
    ])   

<div class="container-fluid mt--5">

    <div class="col-md-1">
        <div class="modal fade" id="SAIModal" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-xxl" role="document">
            <div class="modal-content">
            <div class="modal-body p-12">
            <div class="card bg-secondary shadow border-0">
          <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center"></div>
              <div class="btn-wrapper text-center">
                <div class="text-center text-muted mb-4">
                  <p class="form-control-static">
                    Cari tahun Faktur PUI : 
                    <hr>
                    <code> Jika pencarian kosong, list data PUI akan melihat aktivitas terakhir setelah halaman direfresh.</code>
                </p>
                    <div class="form-group{{ $errors->has('nama_barang') ? ' has-danger' : '' }}">
                      <label class="form-control-label" for="input-faktur">{{ __('Tahun Faktur') }}</label>
                      <select class="form-control" id="fakturs" name="fakturs[]">
                          <option value="" selected="" disabled="">--Pilih Tahun --</option>
                          @foreach ($TrfSAIM as $cb)
                          <option >{{ $cb->tanggal }}</option>
                          @endforeach
                        </select>
                  </div>
                </div>
                <div class="form-group">
                    <div class="form-group row">
                        {{-- <label class="col-md-9 col-form-label">Document Work Order</label> --}}
                         
                        </div>
                        <p class="form-control-static">
                            <input type="text" class="form-control" style="display:none" name="cariphi" id="cariphi" readonly placeholder="Tahun Faktur"><br/>
                          <button id="slinvsearch_pui" class="btn btn-primary">Cari</button>
                          </p>
                 </div>
              </div>
          </div>
          <div class="card-body px-lg-5 py-lg-5">
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
                    <table id="SAIM_PUI" class="table align-items-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">PUI</th>
                            <th scope="col">Faktur Pajak</th>
                            <th scope="col">Suplier Invoice</th>
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
        {{-- endmodal --}}
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0"></h3>
                      <p>
                          Form PUI
                      </p>
                        </div>
                    </div>
                  
                    <div class="card-body">
                        <form method="post" autocomplete="off">
                          @csrf
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
                                    <div class="form-group ">
                                        <div class="col-md-12 ">
                                          <div class="col-md-4">
                                            <label>no. PUI</label>
                                          </div>
                                          <div class="col-md-8">
                                          <table width='100%'>
                                              <tr><td width='95%'> <input type="" name="SAIno" id="SAIno" class="form-control" readonly></td>
                                              <td><button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#SAIModal">Pilih</button></td></tr>
                                          </table>
                                          </div>
                                        </div>
                                      </div>

                                      <span>
                                        <div class="pl-lg-4">
                                            <div class="form-group">
                                                <div class="col-md-12 ">
                                                    <div class="col-md-4">
                                                        <label>Tax Status</label>
                                                    </div>
                                                    <div class="col-md-8">
                              
                                                        <div class="form-group row" >
                                                            <div class="col-md-2">
                                                                <input type="" name="taxstatus" id="taxstatus" class="form-control" readonly >
                                                            </div>
                              
                                                        </div>
                              
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      </span>
                                     
                                      
                          
                                      <div class="form-group">
                                        <div class="col-md-12 ">
                                          <div class="col-md-4">
                                            <label>No. Faktur Pajak</label>
                                          </div>
                                          <div class="col-md-8">
                                              
                                                  <div class="form-group row" >
                                                      <div class="col-md-2">
                                                          <input type="" name="prefix" id="prefix" class="form-control" maxlength="3"  >
                                                      </div>
                                                      <div class="col-md-10">
                                                          <input type="" name="faktur" id="faktur" class="form-control"  maxlength="13">
                                                      </div>
                                                  </div>
                                              
                                          </div>
                                        </div>
                                      </div>
                          
                                      <!-- <div class="form-group">
                                        <div class="col-md-12 ">
                                          <div class="col-md-4">
                                            <label>Customer name :</label>
                                          </div>
                                          <div class="col-md-8">
                                            <input type="" class="form-control" name="" value="<?php //echo $customername;?>" readonly="">
                                          </div>
                                        </div>
                                      </div> -->
                                      <div class="form-group">
                                        <div class="col-md-12 ">
                                          <div class="col-md-4">
                                            <label>Suplier Invoice:</label>
                                          </div>
                                          <div class="col-md-8">
                                            <input type="" class="form-control" id="supplier" name="supplier" value="">
                                          </div>
                                        </div>
                                      </div>
                          
                                      <div class="form-group">
                                        <div class="col-md-12 ">
                                          <div class="col-md-4">
                                            <label>Information :</label>
                                          </div>
                                          <div class="col-md-8">
                                            
                                            <textarea name="informasi" id="informasi" class="form-control"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                  {{-- <div class="col">
                                    <span>3 of 3</span>
                                  </div> --}}
                            </div>
                          </div>
                            <div class="pl-lg-4">
                              <div class="text-center">
                                  <button class="simpanPUI btn btn-success mt-4">{{ __('Simpan') }}</button>
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

                           
                        </form>
                    </div>
                  </div>
            </div>
          </div>
  @include('layouts.footers.auth')
  </div>
</div>
 
@endsection
