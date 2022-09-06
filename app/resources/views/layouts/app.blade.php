<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'FNC CONTROL') }}</title>
        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/logoKOPfooter.PNG" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Extra details for Live View on GitHub Pages -->

        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
        <style>
            @media (min-width: 768px) {
                    .modal-xl {
                        width: 70%;
                    max-width:810px;
                }
            }

            @media (min-width: 768px) {
                    .modal-xxl {
                        width: 100%;
                    max-width:1200px;
                }
            }
        </style>
    </head>
    <body class="{{ $class ?? '' }}">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.navbars.sidebar')
        @endauth
        
        <div class="main-content">
            @include('layouts.navbars.navbar')
            @yield('content')
        </div>

        @guest()
            @include('layouts.footers.guest')
        @endguest

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
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @stack('js')
        
        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
        <script src="{{ asset('js/shortlen.js') }}"></script>
     
        <script>

        $.shorten.noConflict();
        var totPO = 1;
        $("#addPO").click(function(){
          totPO++;
          var select='<div class="form-group" id="datapo'+totPO+'"><hr><div class="col-md-12"><div class="col-md-4"><label>PO :</label></div><div class="pl-lg-10"><table width="100%"><tr><td width="95%"><input class="form-control" id="po_no" name="po_no[]"></td><td><button type="button" class="btn btn-danger" onclick="removePO('+totPO+')">-</button></td></tr></table></div></div>';
          
          $("#pogroup").append(select);
        });
    
        function removePO(id){
          
          $('#datapo'+id).remove();
          totPO--;
        }
    
        function remove(id){
          
          $('#data'+id).remove();
          totPO--;
          
        }

        $('.UpdateSAIMS').on('click', function(x) {
            x.preventDefault();
                Swal.fire({
                    title: '<i class="voyager-question"></i> Informasi',
                    html: `Apakah anda ingin mengubah manual saim skrng ?`,
                    showDenyButton: false,
                    showCancelButton: true,
                    confirmButtonText: `Ubah`,
                    cancelButtonText: `Batalkan`,
                    }).then((result) => {
                        if (result.isConfirmed) {

                        const pesanStore = Swal.mixin({
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

                        var formData = {  
                        'saim_no'     : $('input[name=saim_no]').val(),
                        'no_sod'     : $('input[name=no_sod]').val(),
                        'id_sai'     : $('input[name=id_sai]').val(),
                        'customer_name'       : $('input[name=customer_name]').val(),
                        'tax_no'           : $('input[name=tax_no]').val(),
                        'gid'       : $('input[name=gid]').val(),
                        'Code'       : $('input[name=code_customer]').val(),
                        'printed'       : $('input[name=printed]').val(),
                        'changedby'       : $('input[name=changedby]').val(),
                        'changeddate'       : $('input[name=changeddate]').val(),
                        'createdby'       : $('input[name=createdby]').val(),
                        'createddate'       : $('input[name=createddate]').val(),
                        'approvedby'       : $('input[name=approvedby]').val(),
                        'jumlah_waktu'    : $('input[name=jumlah_waktu]').val(),
                        'jatuh_tempo'           : $('input[name=jatuh_tempo]').val(),
                        'nama_barang'       : $('input[name=nama_barang]').val(),
                        'sim_check_qty'       : $('input[name=qty_sim]').val(),
                        'price_sim'       : $('input[name=price_sim]').val(),
                        'user_id'       : $('input[name=user_id]').val(),
                        };

                        var PO_no = $("input[id='po_no']").map(function(){return $(this).val();}).get();
                        var nama_barang = $("select[id='nama_barang']").map(function(){return $(this).val();}).get();
                        var jumlah = $("input[id='jumlah']").map(function(){return $(this).val();}).get();
                        var harga = $("input[id='harga']").map(function(){return $(this).val();}).get();
                        var unit = $("input[id='unit']").map(function(){return $(this).val();}).get();
                        var code_material = $("input[id='code_material']").map(function(){return $(this).val();}).get();

                        let dataSAIM = {    
                            'po_no'         : JSON.stringify(Object.assign({},  PO_no)),
                            'nama_barang'   : JSON.stringify(Object.assign({},  nama_barang)),
                            'jumlah'        : JSON.stringify(Object.assign({},  jumlah)),
                            'harga'         : JSON.stringify(Object.assign({},  harga)),
                            'code'          : JSON.stringify(Object.assign({},  code_material)),
                            'unit'          : JSON.stringify(Object.assign({},  unit)),
                        };

                            UpdateAsyncDatadetailsaim(formData, dataSAIM).then(function(data){

                              if(data.r == "false"){
                                    pesanStore.fire({
                                        icon: 'error',
                                        title: 'Maaf Harga / Qty harus sesuai dengan SAI disim.'
                                    })
                                        } else {

                                        pesanStore.fire({
                                                icon: 'warning',
                                            title: 'Data berhasil diubah.'
                                        })
                                
                                    let link = "{{ route('saims.index') }}";
                                    let redirect = link;
                                        setTimeout(function(){ 
                                            window.location.href = redirect;
                                }, 1000);
                            }
                        });
                    }
                })
          });

          async function __getDetailIDGR_only(grpid) {

            let datamesinid = {
                    wo_id:grpid
                }

                const apiDataMesin = "{{ route('saims.__getDetailIDGR_only') }}";
                        
                    const settings = {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                    'Content-Type': 'application/json;charset=utf-8'
                                    },
                                body: JSON.stringify(datamesinid)
                        }
                try {
                        
                        const fetchResponse = await fetch(`${apiDataMesin}`, settings);
                        const data = await fetchResponse.json();
                        return data;
                    } catch (error) {

                    return error
                }   

            }

          async function getDataMaterial(grpid) {

                        let datamesinid = {
                            wo_id:grpid
                        }

                        const apiDataMesin = "{{ route('saims.__getDetailIDGR') }}";
                                
                            const settings = {
                                        method: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                            'Content-Type': 'application/json;charset=utf-8'
                                            },
                                        body: JSON.stringify(datamesinid)
                                }
                        try {
                                
                                const fetchResponse = await fetch(`${apiDataMesin}`, settings);
                                const data = await fetchResponse.json();
                                return data;
                            } catch (error) {

                            return error
                        }    
                    }
                    
                      async function getDataPO(grpid) {
                            let datamesinid = {
                                    wo_id:grpid
                                }
                        const apiDataMesin = "{{ route('saims.__getDataPO') }}";
                                
                            const settings = {
                                        method: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                            'Content-Type': 'application/json;charset=utf-8'
                                            },
                                        body: JSON.stringify(datamesinid)
                                }
                        try {
                                
                                const fetchResponse = await fetch(`${apiDataMesin}`, settings);
                                const data = await fetchResponse.json();
                                return data;
                                
                            } catch (error) {

                            return error
                        }    
                    }

     getDataPO(`{{ isset($tbbrg->sai) ? $tbbrg->sai : '' }}`).then(value => {
        var uniqueNames = [];
         $.each(value.p_read, function(i, el){
               if($.inArray(el, uniqueNames) === -1) uniqueNames.push(el);
                    totPO++;
                    if(i > 0)
                    var select='<div class="form-group" id="datapo'+totPO+'"><hr>'
                    +'<div class="col-md-12"><div class="col-md-4"><label>PO :</label></div><div class="pl-lg-10">'
                    +'<table width="100%"><tr><td width="95%"><input class="form-control" id="po_no" value="'+el.po_no+'" name="po_no[]"></td>'
                    +'<td><button type="button" class="btn btn-danger" onclick="removePO('+totPO+')">-</button></td>'
                    +'</tr></table></div></div>';
            $("#pogroup").append(select);
        });
     });

            getDataMaterial(`{{ isset($tbbrg->sai) ? $tbbrg->sai : '' }}`).then(value => {
                var uniqueNames = [];
                 $.each(value.p_read, function(i, el){
                   if($.inArray(el, uniqueNames) === -1) uniqueNames.push(el);
                   console.log(el, i)
                   tot++;
                   if(i > 0)
                        var select='<div class="form-group" id="data'+tot+'">'
                        +'<hr><div class="col-md-12 "><div class="col-md-4"><label class="control-label">Nama Barang</label></div>'
                        +'<div class="col-sm-8"><select id="nama_barang" name="nama_barang[]" class="form-control"><option value="'+el.nama+'">'
                        +'"'+el.nama+'"</option></select></div></div>'
                        +'<div class="col-md-12"><div class="col-md-4"><label><p />Jumlah<label></div>'
                        +'<div class="col-md-8"><input type="number" id="jumlah" class="form-control" name="jumlah[]" value="'+el.jumlah+'" min="1"></div></div>'
                        +'<div class="col-md-12"><div class="col-md-4"><label><p />Code Material<label></div>'
                        +'<div class="col-md-8"><input id="code_material" class="form-control" readonly value="'+el.kode+'" name="code_material[]"></div></div>'
                        +'<div class="col-md-12"><div class="col-md-4"><label><p />Unit<label></div>'
                        +'<div class="col-md-8"><input id="unit" class="form-control" readonly value="'+el.unit+'" name="unit[]"></div></div>'
                        +'<div class="col-md-12"><div class="col-md-4"><label><p />Harga<label></div>'
                        +'<div class="col-md-8">'
                        +'<table width="100%"><tr><td width="95%"><input type="text" class="form-control" id="harga" value="'+el.harga+'" name="harga[]" min="0" value="0"></td>'
                        +'<td><button type="button" class="btn btn-danger" onclick="remove('+tot+')">-</button></td>'
                        +'</tr></table></div></div>';
                    $("#form").append(select);
                    $('#nama_barang').focus(function(e) {
                        $(this).blur();
                    });
                 });
             });

             $('.simpanPUI').on('click', function(x) {
            x.preventDefault();
                Swal.fire({
                    title: '<i class="voyager-question"></i> Informasi',
                    html: `Apakah anda ingin menyimpan PUI skrng ?`,
                    showDenyButton: false,
                    showCancelButton: true,
                    confirmButtonText: `Simpan`,
                    cancelButtonText: `Batalkan`,
                    }).then((result) => {
                        if (result.isConfirmed) {

                        const pesanStore = Swal.mixin({
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

                            var formData = {  
                                    'SAIno'     : $('input[name=SAIno]').val(),
                                    'taxstatus'     : $('input[name=taxstatus]').val(),
                                    'prefix'       : $('input[name=prefix]').val(),
                                    'faktur'        : $('input[name=faktur]').val(),
                                    'suplier'       : $('input[name=supplier]').val(),
                                    'information'       : $('textarea#informasi').val()
                                  };

                            AsyncDataPUI(formData).then(function(data){
                                pesanStore.fire({
                                    icon: 'success',
                                    title: 'Data berhasil disimpan..'
                                })

                                let link = "{{ route('saims.index') }}";
                                let redirect = link;
                                    setTimeout(function(){ 
                                            window.location.href = redirect;
                                }, 1000);
                            });

                        }
                    }
                )
          });

        $('.SimpanSAIMS').on('click', function(x) {
            x.preventDefault();
                Swal.fire({
                    title: '<i class="voyager-question"></i> Informasi',
                    html: `Apakah anda ingin menyimpan datanya sekarang ?`,
                    showDenyButton: false,
                    showCancelButton: true,
                    confirmButtonText: `Simpan`,
                    cancelButtonText: `Batalkan`,
                    }).then((result) => {
                        if (result.isConfirmed) {

                        const pesanStore = Swal.mixin({
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

                    var formData = {  
                        'saim_no'     : $('input[name=saim_no]').val(),
                        'no_sod'     : $('input[name=no_sod]').val(),
                        'customer_name'       : $('input[name=customer_name]').val(),
                        'tax_no'           : $('input[name=tax_no]').val(),
                        'gid'       : $('input[name=gid]').val(),
                        'Code'       : $('input[name=code_customer]').val(),
                        'printed'       : $('input[name=printed]').val(),
                        'changedby'       : $('input[name=changedby]').val(),
                        'changeddate'       : $('input[name=changeddate]').val(),
                        'createdby'       : $('input[name=createdby]').val(),
                        'createddate'       : $('input[name=createddate]').val(),
                        'approvedby'       : $('input[name=approvedby]').val(),
                        'jumlah_waktu'    : $('input[name=jumlah_waktu]').val(),
                        'qtyafkir'           : $('input[name=jatuh_tempo]').val(),
                        'toleransiqt'       : $('input[name=nama_barang]').val(),
                        'sim_check_qty'       : $('input[name=qty_sim]').val(),
                        'price_sim'       : $('input[name=price_sim]').val(),
                        };

                        var PO_no = $("input[id='po_no']").map(function(){return $(this).val();}).get();
                        var nama_barang = $("select[id='nama_barang']").map(function(){return $(this).val();}).get();
                        var jumlah = $("input[id='jumlah']").map(function(){return $(this).val();}).get();
                        var harga = $("input[id='harga']").map(function(){return $(this).val();}).get();
                        var unit = $("input[id='unit']").map(function(){return $(this).val();}).get();
                        var code_material = $("input[id='code_material']").map(function(){return $(this).val();}).get();

                        let dataSAIM = {    
                            'po_no' : JSON.stringify(Object.assign({},  PO_no)),
                            'nama_barang' : JSON.stringify(Object.assign({},  nama_barang)),
                            'jumlah' : JSON.stringify(Object.assign({},  jumlah)),
                            'harga' : JSON.stringify(Object.assign({},  harga)),
                            'code' : JSON.stringify(Object.assign({},  code_material)),
                            'unit' : JSON.stringify(Object.assign({},  unit)),
                        };

                            AsyncDatadetailsaim(formData, dataSAIM).then(function(data){

                                if(data.r == "false"){
                                    pesanStore.fire({
                                        icon: 'error',
                                        title: 'Maaf Harga / Qty harus sesuai dengan SAI disim.'
                                    })
                                        } else {

                                            pesanStore.fire({
                                                    icon: 'success',
                                                title: 'Data berhasil disimpan..'
                                            })
                                        
                                            let link = "{{ route('saims.index') }}";
                                            let redirect = link;
                                                setTimeout(function(){ 
                                                        window.location.href = redirect;
                                            }, 
                                        
                                        1000);
                                    }
                                }
                            );
                        }
                    }
                )
          });

          async function AsyncDatadetailsaim(dataID, po_number) {
                
                let data = {
                            dsaim:dataID,
                            dpo_no:po_number,
                          }

                  const dataSalesInvoice = "{{ route('saims.savemanuallysaim') }}";
                          
                            const settings = {
                                    method: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                      'Content-Type': 'application/json;charset=utf-8'
                                    },
                                body: JSON.stringify(data)
                            }

                  try {
                          
                          const fetchResponse = await fetch(`${dataSalesInvoice}`, settings);
                          const data = await fetchResponse.json();
                          return data;
                      } catch (error) {

                      return error
                  }    
            }

            async function AsyncDataPUI(dataID) {
                
                let data = {
                            formPUI:dataID,
                          }

                  const dataSalesInvoice = "{{ route('saims.saveSIM_lsH') }}";
                          
                            const settings = {
                                    method: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                      'Content-Type': 'application/json;charset=utf-8'
                                    },

                                body: JSON.stringify(data)

                            }

                  try {
                          
                          const fetchResponse = await fetch(`${dataSalesInvoice}`, settings);
                          const data = await fetchResponse.json();
                          return data;
                      } catch (error) {

                      return error
                  }    
            }

            async function UpdateAsyncDatadetailsaim(dataID, po_number) {
                
                let data = {
                            dsaim:dataID,
                            dpo_no:po_number,
                          }

                  const dataSalesInvoice = "{{ route('saims.updatemanuallysaims') }}";
                          
                            const settings = {
                                    method: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                      'Content-Type': 'application/json;charset=utf-8'
                                    },
                                body: JSON.stringify(data)
                            }

                  try {
                          
                          const fetchResponse = await fetch(`${dataSalesInvoice}`, settings);
                          const data = await fetchResponse.json();
                          return data;
                      } catch (error) {

                      return error
                  }    
            }

        async function AsyncSalesInvoiceh(dataSalesInvoceDocNo) {
                
                let data = {
                            dataSalesInvoceDocNo:dataSalesInvoceDocNo,
                          }

                  const dataSalesInvoice = "{{ route('saims.detailSalesIvoice') }}";
                          
                            const settings = {
                                    method: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                      'Content-Type': 'application/json;charset=utf-8'
                                    },
                                body: JSON.stringify(data)
                            }

                  try {
                          
                          const fetchResponse = await fetch(`${dataSalesInvoice}`, settings);
                          const data = await fetchResponse.json();
                          return data;
                      } catch (error) {

                      return error
                  }    
            }

            async function AsyncPurchaseInvoiceh(dataSalesInvoceDocNo) {
                
                let data = {
                            dataSalesInvoceDocNo:dataSalesInvoceDocNo,
                          }

                  const dataSalesInvoice = "{{ route('saims.detailPurchaseInvoiceH') }}";
                          
                            const settings = {
                                    method: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                      'Content-Type': 'application/json;charset=utf-8'
                                    },
                                body: JSON.stringify(data)
                            }

                  try {
                          
                          const fetchResponse = await fetch(`${dataSalesInvoice}`, settings);
                          const data = await fetchResponse.json();
                          return data;
                      } catch (error) {

                      return error
                  }    
            }

            $(document).on('click', '#saim_result', function(e){
                e.preventDefault();
                var dt = $(this).attr('data-id');
                $('#modal-form').modal('toggle'); 
                AsyncSalesInvoiceh(dt).then(value => {
                    $("#saim_no").val(value.sh.DocNo);
                    $("#no_sod").val(value.sh.SODocNo);
                    $("#customer_name").val(value.sh.sales_order.master_customers.Name);
                    $("#tax_no").val(value.sh.TaxNo);
                    $("#gid").val(value.sh.GIDocNo);
                    $("#jumlah_waktu").val(value.sh.CutPPh);
                    $("#jatuh_tempo").val(value.sh.DocDate);
                    $("#po_no").val(value.sh.PONo);
                    // tambahan
                    $("#code_customer").val(value.sh.sales_order.master_customers.Code);
                    $("#printed").val(value.sh.Status);
                    $("#changedby").val(value.sh.ChangedBy);

                    $("#changeddate").val(value.sh.ChangedDate);
                    $("#createdby").val(value.sh.CreatedBy);
                    $("#createddate").val(value.sh.CreatedDate);
                    $("#approvedby").val((value.sh.sales_order.ApprovedBy) === null ? "unknown" : value.sh.sales_order.ApprovedBy );
                               
                    $("#code_material").val(value.sd.MaterialCode);
                    $("#unit").val(value.sd.Unit);

                    // end
                    $("#qty").html(value.sd.material_code.Name +";\n Qty : "+ value.sd.Qty);
                    $("#qty_sim").val(value.sd.Qty);
                    $("#price_sim").val(value.sd.Price);
                    $("#price").html(value.sd.material_code.Name +";\n Price : "+ value.sd.Price);
                    $('#nama_barang').append($('<option>' ,{
                        value:value.sd.material_code.MaterialCode,
                        text:value.sd.material_code.Name
                    }));
                });
            });

            $('#fakturs').on('change', function() {
              $("#cariphi").val(this.value);
            });

            $(document).on('click', '#saim_pui_result', function(e){
                e.preventDefault();
                var dt = $(this).attr('data-id');
                $('#SAIModal').modal('toggle'); 
                AsyncPurchaseInvoiceh(dt).then(value => {
                    $("#SAIno").val(value.sh.DocNo);
                    $("#taxstatus").val(value.sh.TaxStatus);
                    $("#prefix").val(value.sh.TaxPrefix);
                    $("#faktur").val(value.sh.TaxNo);
                    $("#supplier").val(value.sh.SupplierInvNo);
                    $("textarea#informasi").val(value.sh.Information);
                });
            });

            $(document).on('click', '#slinvsearch', function(e){
                e.preventDefault();

                var docno = $('#docnox').val();

                if(docno != ''){

                    $('#SAIM').DataTable().destroy();

                    var dataTables = $('#SAIM').DataTable( {
                    paging: true,
                    deferRender: true,
                    responsive: true,
                    processing: true,
                    stateSave: true,
                    searching: false,
                    stateDuration: -1,
                    serverSide: true,
                    scrollY:        '189vh',
                    scrollX:        '235vh',
                    info:           true,
                    scrollCollapse: true,
                    retrieve: true,
                    // dom: 'Bfrtip',
                    // buttons: [
                    // ],
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            exportOptions: {
                                columns: [ 0, ':visible' ]
                            }
                        },
                        {
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: [ 0 ]
                            }
                        },
                    ],
                    language: {
                        processing: '<span class="text-info">Sedang diproses..</span>',
                        search: "Cari",
                        infoEmpty: "Tidak ada data apapun disini..",
                        info: "<span class='badge badge-success'>sim testing</span>",
                        zeroRecords: "Pencarian dalam keyword inputan anda tidak dapat kami temukan..",
                        paginate: {
                    'previous': '<<',
                    'next': '>>'
                    },
                    },
                    ajax :{
                    url : " {{ route('saims.SalesInvoiceRVK') }}",
                    data:{docnox:docno}
                    },
                    fixedHeader: {
                        header: true,
                        footer: true
                    },
                    colReorder: {
                        allowReorder: true
                    },
                    order: [[ 0, 'desc' ]],
                    stateSaveCallback: function ( settings, data ) {
                            
                            localStorage.setItem( 'Resultmachineaverage.data', JSON.stringify( data ) );

                    },
                    stateLoadCallback: function ( ) {
                            try {

                                return JSON.parse( localStorage.getItem( 'Resultmachineaverage.data' ) );
                            
                            } catch (e) {
                                
                                console.log(e)
                            }
                        },
                    columns: [
                        {data: 'DocNo', name: 'Sales Invoice',width:"527px" },
                        {data: 'sales_invoice', name: 'Aksi', orderable: false, searchable: false},
                    ]
                } );

                } else {

                    $('#SAIM').DataTable().destroy();
                    load_normalSIV();

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
                          title: 'Sedang disiapin datanya, tunggu sebentar..'
                      }
                    )
                }
            });


            $(document).on('click', '#slinvsearch_pui', function(e){
                e.preventDefault();

                var docno = $('#cariphi').val();

                if(docno != ''){

                    $('#SAIM_PUI').DataTable().destroy();

                    var dataTables = $('#SAIM_PUI').DataTable( {
                    paging: true,
                    deferRender: true,
                    responsive: true,
                    processing: true,
                    stateSave: true,
                   searching: false,
                    stateDuration: -1,
                    serverSide: true,
                    scrollY:        '189vh',
                    scrollX:        '235vh',
                    info:           true,
                    scrollCollapse: true,
                    retrieve: true,
                    // dom: 'Bfrtip',
                    // buttons: [
                    // ],
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            exportOptions: {
                                columns: [ 0, ':visible' ]
                            }
                        },
                        {
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: [ 0, 1, 2 ]
                            }
                        },
                    ],
                    language: {
                        processing: '<span class="text-info">Sedang diproses..</span>',
                        search: "Cari",
                        infoEmpty: "Tidak ada data apapun disini..",
                        info: "<span class='badge badge-success'>sim testing</span>",
                        zeroRecords: "Pencarian dalam keyword inputan anda tidak dapat kami temukan..",
                        paginate: {
                    'previous': '<<',
                    'next': '>>'
                    },
                    },
                    ajax :{
                    url : " {{ route('saims.PUIRVK') }}",
                    data:{docnox:docno}
                    },
                    fixedHeader: {
                        header: true,
                        footer: true
                    },
                    colReorder: {
                        allowReorder: true
                    },
                    order: [[ 0, 'desc' ]],
                    stateSaveCallback: function ( settings, data ) {
                            
                            localStorage.setItem( 'Resultmachineaverage.data', JSON.stringify( data ) );

                    },
                    stateLoadCallback: function ( ) {
                            try {

                                return JSON.parse( localStorage.getItem( 'Resultmachineaverage.data' ) );
                            
                            } catch (e) {
                                
                                console.log(e)
                            }
                        },
                    columns: [
                        {data: 'DocNo', name: '', name: 'Sales Invoice',width:"235px" },
                        {data: 'Taxno', name: 'Faktur Pajak', orderable: false, searchable: false},
                        {data: 'SupplierInvNo', name: 'Supplier Invoice', orderable: false, searchable: false},
                        {data: 'pui_i', name: 'Aksi', orderable: false, searchable: false},
                    ]
                } );

                } else {

                    $('#SAIM_PUI').DataTable().destroy();
                    load_normalSIVPUI();

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
                          title: 'Sedang disiapin datanya, tunggu sebentar..'
                      })

                }

            });
    
        var totrole=1;var tot=1;    
            $("#add").click(function(){
                tot++;
                let saiNo = $("#saim_no").val();
                __getDetailIDGR_only(saiNo).then(value => {
                    console.log(value)
                        var uniqueNames = [];
                            const isset = (ref) => typeof ref !== 'undefined'
                            let rts = value['p_read']['__methodstatic_material_code']['Name'];

                            var select='<div class="form-group" id="data'+tot+'"> <hr><div class="col-md-12 "><div class="col-md-4"><label class="control-label">Nama Barang</label></div> <div class="col-sm-8"><select id="nama_barang" name="nama_barang[]" class="form-control"><option value="'+rts+'">'+rts+'</option></select></div></div><div class="col-md-12"><div class="col-md-4"><label><p />Jumlah<label></div><div class="col-md-8"><input type="number" id="jumlah" class="form-control" name="jumlah[]" min="1"></div></div><div class="col-md-12"><div class="col-md-4"><label><p />Code Material<label></div><div class="col-md-8"><input id="code_material" class="form-control" value="'+value['p_read']['__methodstatic_material_code']['Code']+'" name="code_material[]" readonly></div></div><div class="col-md-12"><div class="col-md-4"><label>Unit<label></div><div class="col-md-8"><input id="unit" value="'+value['p_read']['__methodstatic_material_code']['SKUUnit']+'" class="form-control" name="unit[]" readonly></div></div><div class="col-md-12"><div class="col-md-4"><label><p />Harga<label></div><div class="col-md-8"><table width="100%"><tr><td width="95%"><input type="text" class="form-control" id="harga" name="harga[]" min="0" value="0"></td><td><button type="button" class="btn btn-danger" onclick="remove('+tot+')">-</button></td></tr></table></div></div>';
                            
                        $("#form").append(select);
                    }
                );
            }
        );

        function load_normalSIVPUI(){
            var docno = $('#docnox').val();

            var dataTables = $('#SAIM_PUI').DataTable( {
                    paging: true,
                    deferRender: true,
                    responsive: true,
                    processing: true,
                    stateSave: true,
                   searching: false,
                    stateDuration: -1,
                    serverSide: true,
                    scrollY:        '189vh',
                    scrollX:        '235vh',
                    info:           true,
                    scrollCollapse: true,
                    retrieve: true,
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            exportOptions: {
                                columns: [ 0, ':visible' ]
                            }
                        },
                        {
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: [ 0, 1, 2 ]
                            }
                        },
                    ],
                    language: {
                        processing: '<span class="text-info">Sedang diproses..</span>',
                        search: "Cari",
                        infoEmpty: "Tidak ada data apapun disini..",
                        info: "<span class='badge badge-success'>sim testing</span>",
                        zeroRecords: "Pencarian dalam keyword inputan anda tidak dapat kami temukan..",
                        paginate: {
                    'previous': '<<',
                    'next': '>>'
                    },
                    },
                    ajax :{
                    url : " {{ route('saims.PUIRVK') }}",
                    data:{docnox:docno}
                    },
                    fixedHeader: {
                        header: true,
                        footer: true
                    },
                    colReorder: {
                        allowReorder: true
                    },
                    order: [[ 0, 'desc' ]],
                    stateSaveCallback: function ( settings, data ) {
                            
                            localStorage.setItem( 'Resultmachineaverage.data', JSON.stringify( data ) );

                    },
                    stateLoadCallback: function ( ) {
                            try {

                                return JSON.parse( localStorage.getItem( 'Resultmachineaverage.data' ) );
                            
                            } catch (e) {
                                
                                console.log(e)
                            }
                        },
                    columns: [
                        {data: 'DocNo', name: 'Sales Invoice',width:"235px" },
                        {data: 'Taxno', name: 'Faktur Pajak', orderable: false, searchable: false},
                        {data: 'SupplierInvNo', name: 'Supplier Invoice', orderable: false, searchable: false},
                        {data: 'pui_i', name: 'Aksi', orderable: false, searchable: false},
                    ]
                } );

            dataTables.columns.adjust().draw();
          
        }
        
        function load_normalSIV(){
            var docno = $('#docnox').val();

            var dataTables = $('#SAIM').DataTable( {
                    paging: true,
                    deferRender: true,
                    responsive: true,
                    processing: true,
                    stateSave: true,
                    searching: false,
                    stateDuration: -1,
                    serverSide: true,
                    scrollY:        '189vh',
                    scrollX:        '235vh',
                    info:           true,
                    scrollCollapse: true,
                    retrieve: true,
                    // dom: 'Bfrtip',
                    // buttons: [
                    // ],
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            exportOptions: {
                                columns: [ 0, ':visible' ]
                            }
                        },
                        {
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: [ 0 ]
                            }
                        },
                    ],
                    language: {
                        processing: '<span class="text-info">Sedang diproses..</span>',
                        search: "Cari",
                        infoEmpty: "Tidak ada data apapun disini..",
                        info: "<span class='badge badge-success'>sim testing</span>",
                        zeroRecords: "Pencarian dalam keyword inputan anda tidak dapat kami temukan..",
                        paginate: {
                        'previous': '<<',
                        'next': '>>'
                        },
                    },
                    ajax :{
                    url : " {{ route('saims.SalesInvoiceRVK') }}",
                    data:{docnox:docno}
                    },
                    fixedHeader: {
                        header: true,
                        footer: true
                    },
                    colReorder: {
                        allowReorder: true
                    },
                    order: [[ 0, 'desc' ]],
                    stateSaveCallback: function ( settings, data ) {
                            
                            localStorage.setItem( 'Resultmachineaverage.data', JSON.stringify( data ) );

                    },
                    stateLoadCallback: function ( ) {
                            try {

                                return JSON.parse( localStorage.getItem( 'Resultmachineaverage.data' ) );
                            
                            } catch (e) {
                                
                                console.log(e)
                            }
                        },
                    columns: [
                        {data: 'DocNo', name: 'Sales Invoice',width:"587px" },
                        {data: 'sales_invoice', name: 'Aksi', orderable: false, searchable: false},
                    ]
                } );

            dataTables.columns.adjust().draw();
          
        }

        // $('#search-form').on('submit', function(e) {
        //     // dataTables.draw();
        //     e.preventDefault();
        //     dataTables.columns.adjust().draw();

        //     });

      
        </script>
      
    </body>
</html>