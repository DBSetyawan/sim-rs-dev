function HandleHackScriptKlaviyoAccounts() {
    return new Promise((resolve) => {
          var _learnq = _learnq || [];
            _learnq.push(['account', 'pLHCMh']);
            _learnq.push(['clearIdentity']);
            (function () {
            var b = document.createElement('script'); b.type = 'text/javascript'; b.async = true;
            b.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'a.klaviyo.com/media/js/analytics/analytics.js';
            var a = document.getElementsByTagName('script')[0]; a.parentNode.insertBefore(b, a);
            })();

          window.zE||function(t, e, a) {
            var s = [],
                c = function () {
                    s.push(arguments)
                },
                n = t.createElement(e);
            n.type = "text/javascript";
            n.src = "https://static.zdassets.com/ekr/snippet.js?key=" + a;
            n.setAttribute("charset", "utf-8");
            n.async = true;
            c._ = s;
            c.t = Date.now();
            c.s = n;
            window.zE = window.zEmbed = c;
            t.getElementsByTagName("head")[0].appendChild(n);
            window.zESettings = {
                webWidget: {
                  launcher: {
                      chatLabel: {
                        '*': 'Live Support'
                      }
                  },
                  position: {
                      horizontal: 'right',
                      vertical: 'top'
                  }
                }
            }
          }
      (document,"script","55a88ba2-f1d5-4762-9825-65dbdcc38989");
      resolve();
    });

  }

async function SyncDestroyAPIklaviyo() {
await HandleHackScriptKlaviyoAccounts();
}

setTimeout(() => {
SyncDestroyAPIklaviyo();
}, 1000);

$('body').on('keyup','input.quote-request-needed',function(){
});

function HandleNavigatorBoxSizing() {
    return new Promise((resolve) => {
      
    $('.majorpointsr2').click(function(){
        $(this).find('.hidersr2').toggle();
    });

    $('.majorpointsr3').click(function(){
        $(this).find('.hidersr3').toggle();
    });

    $('.majorpointsr4').click(function(){
        $(this).find('.hidersr4').toggle();
    });

    $("#tools-jenis-gsm").hide()
    $("#tools-jenis-kertas").hide()
    $(".ds").hide()

    $('.tool-_design').html('Build pack : ')

    $('#w3review').hide()

    $('.majorpoints').click(function(){
        $(this).find('.hiders').toggle();
    });

    $('.majorpoints-material-rd-2').click(function(){
        $(this).find('.hidersmat-2').toggle();
    });

    $('.majorpoints-material-rd-3').click(function(){
        $(this).find('.hidersmat-3').toggle();
    });

    $('.majorpoints-material-rd-4').click(function(){
        $(this).find('.hidersmat-4').toggle();
    });

    $('.majorpoints-design').click(function(){
        $(this).find('.hidersd').toggle();
    });

    $('.majorpoints-design-2').click(function(){
        $(this).find('.hidersd-2').toggle();
    });

    $('.majorpoints-design-3').click(function(){
        $(this).find('.hidersd-').toggle();
    });

    $('.majorpoints-material').click(function(){
        $(this).find('.hidersmat').toggle();
    });

    $('#textlink').click(function(){
      $('#uploads').prop('disabled', true)
      $('#uploads').text(' - ')
      $('#w3review').show()
      $('#prvText').hide()
    });

    $('#textlink2').click(function(){
      $('#uploads2').prop('disabled', true)
      $('#uploads2').text(' - ')
      $('#w3review2').show()
    });

    $('#textlink4').click(function(){
      $('#uploads4').prop('disabled', true)
      $('#uploads4').text(' - ')
      $('#w3review4').show()
    });

    $('#textlink3').click(function(){
      $('#uploads3').prop('disabled', true)
      $('#uploads3').text(' - ')
      $('#w3review3').show()
    });

    $('#resetsCM').click(function(){
      $('#uploads').prop('disabled', false)
      $('#uploads').text('Upload')
      $('#w3review').hide()
      $('#remain').show()
    });
    
    $('#resetsCM2').click(function(){
      $('#uploads2').prop('disabled', false)
      $('#uploads2').text('Upload')
      $('#w3review2').hide()
    });

    $('#resetsCM3').click(function(){
      $('#uploads3').prop('disabled', false)
      $('#uploads3').text('Upload')
      $('#w3review3').hide()
    });

    $('#resetsCM4').click(function(){
      $('#uploads4').prop('disabled', false)
      $('#uploads4').text('Upload')
      $('#w3review4').hide()
    });
      resolve();
    });
  }

async function fnAsyncBOX() {
await HandleNavigatorBoxSizing();
}


(function($) {

fnAsyncBOX();

// var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
var match = ['image/jpeg', 'image/png', 'image/jpg'];
$("#file").change(function() {
  for(i=0;i<this.files.length;i++){
      var file = this.files[i];
      var fileType = file.type;
      
      if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
          
          Swal.fire({
                icon: 'error',
                title: 'Information',
                text: 'Sorry, only JPG, JPEG, & PNG files are allowed to upload..'
            })

          $("#file").val('');
          return false;
      }
  }
});

$('.btnSaveSingleComponent').click(function(e){
e.preventDefault()

var c = $("input[name='checkbox[]']:checked").val();
    if( c == undefined){
        Swal.fire({
                icon: 'error',
                title: 'Design not ready.'
            })
      } 
        else {

          let component1 = $('#cp1').val()
          let qty = $('.product-quantity-input').val()
          let size = $('.size span.value').text()
          let material = $('.material span.value').text()
          let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
          let jenis_kertas = $('input[name=jenis_kertas]').val()
          var formDataDesign = $("#forms").serializeArray();
          var values=[];
          
          let qtyCz = $('#Czquantity').val()
          let sizeCz = $('#Csize').val()
          let cmpOne = $('#CMP1').val()
          let materialCz = $('#Czmaterial').val()
          let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm]').val()
          let jenis_kertasCz = $('input[name=Czjenis_kertas]').val()
          let defComponent = $('input[name=components]').val()

        $('input[name="checkbox[]"]:checked').each(function () {
          values[values.length] = (this.checked ? $(this).val() : "");
        });

        Swal.fire({
            title: 'Are you sure?',
            html:
              'Preview <b>to next orders</b>, <br />' +
              '<code>'+
                'Orders: <br />'+
                size+'<br/>'+
                material+'<br/>'+
                qty+'<br/>'+
                values.join(", ")+'<br/>'+
              '</code> <br />'+'',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Order now!',
            cancelButtonText: 'Not now!'
          }).then((result) => {
            if (result.isConfirmed) {

              var designs=[];
              $('input[name="checkbox[]"]:checked').each(function () {
                designs[designs.length] = (this.checked ? $(this).val() : "");
              });

      if(qty == "" || size == "" || material == "" || jenis_kertas_gsm == "" || jenis_kertas == "" || typeof designs == 'undefined' && designs.length == 0) {

            Swal.fire(
            'question!',
            'Paper type still not loaded, make sure all fields are filled.',
            'error'
          )

        } 
          else {

          var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
              var filesx = $('#filessd')[0].files;

              if(filesx.length > 0){

              var formData = new FormData();
              let TotalFiles = $('#filessd')[0].files.length;
              let files = $('#filessd')[0];
              let Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;

             let fLastField = FetchLastComponent().then(function(lastIndex){

                  for (let i = 0; i < TotalFiles; i++) {
                      formData.append('file' + i, files.files[i]);
                      formData.append('ds1', component1);
                      formData.append('_token',CSRF_TOKEN);
                      formData.append('component_one', cmpOne);
                      formData.append('qty', qty);
                      formData.append('defComponent', defComponent);
                      formData.append('size', size);
                      formData.append('material', material);
                      formData.append('jenis_kertas', jenis_kertas);
                      formData.append('jenis_kertas_gsm', jenis_kertas_gsm);
                      formData.append('formDataDesign', Cdesign);
                      formData.append('lastIndex', lastIndex.messageIndex);

                  }


              formData.append('TotalFiles', TotalFiles);

                $.ajax({
                  url: "{{route('uploadf')}}",
                  method: 'post',
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: 'json',                                                                                                                   
                  success: function(response){

                    $("#stateIdOneSingleComponent").val(response.dataID)

                    if(response.status == false){

                          Swal.fire(
                                  'Information!',
                                  'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                  'error'
                                )

                        } 
                          else 
                                {
                                    SendOrdersMKT(response.message, response.messageIndex, qty, size, material, response.data.filename, response.data.PATHS, response.data.GetOriginalName, response.data.GetMimeType, jenis_kertas_gsm, jenis_kertas, formDataDesign).then(function(data){

                                        if(data.success == false){
                                          
                                            Swal.fire(
                                              'Information!',
                                              'Message failed to process, contact customer service, we will immediately help you..',
                                              'error'
                                            )

                                          } else {

                                              Swal.fire({
                                              title: 'Information',
                                              text: "Order has been processed, if yes button change to update",
                                              icon: 'success',
                                              showCancelButton: true,
                                              confirmButtonColor: '#3085d6',
                                              cancelButtonColor: '#d33',
                                              confirmButtonText: 'Yes',
                                              cancelButtonText: 'No'
                                              }).then((result) => {
                                                  if (result.isConfirmed) {
                                                      $("#btnsaVeSingleComponent").hide()
                                                      $(".btnupDate1SingleComponent").show()
                                                      $("#uploads").show()
                                                      $("#dforLabelComponent").text(cmpOne)
                                                      $("#dforLabelComponent").css("position", "relative")
                                                      $("#dforLabelComponent").css("right", "-556px")
                                                      $("#dforLabelComponent").addClass("badge badge-success")
                                                  } 
                                                    else {
                                                      $("#btnsaVeSingleComponent").show()
                                                      $(".btnupDate1SingleComponent").hide()
                                                }
                                            }
                                        );
                                    }
                                }
                            );
                        }
                      },
                      error: function(response){
                          console.log("error : " + JSON.stringify(response) );
                      }
                  });
              });
              
            }
                else 
                      {
                
                          Swal.fire({
                          title: 'Are you sure?',
                          text: "do you want to continue, without uploading documents?",
                          icon: 'question',
                          showCancelButton: true,
                          confirmButtonColor: '#3085d6',
                          cancelButtonColor: '#d33',
                          confirmButtonText: 'Next!',
                          cancelButtonText: 'Cancel '
                            }).then((result) => {
                              if (result.isConfirmed) {

                              FetchLastComponent().then(function(lastIndex){

                                SendOrdersMKTnonFILE(lastIndex.message, lastIndex.messageIndex , qty, size, material, jenis_kertas_gsm, jenis_kertas, formDataDesign, defComponent).then(function(data){
                                    if(data.success == false){

                                      Swal.fire(
                                        'Information!',
                                        'Message failed to process, contact customer service, we will immediately help you.. ',
                                        'error'
                                      )

                                        let link = '{!! route("auth_user.id") !!}';
                                        let redirect = link;
                                            setTimeout(function(){ 
                                                    window.location.href = redirect;
                                        }, 1000);
                                    } 
                                      else {  
                                      
                                          Swal.fire({
                                          title: 'Information',
                                          text: "Order has been processed, if yes button change to update",
                                          icon: 'success',
                                          showCancelButton: true,
                                          confirmButtonColor: '#3085d6',
                                          cancelButtonColor: '#d33',
                                          confirmButtonText: 'Yes',
                                          cancelButtonText: 'No'
                                          }).then((result) => {
                                            
                                              if (result.isConfirmed) {

                                                    $("#stateIdOneSingleComponent").val(data.data[1])
                                                    $("#btnsaVeSingleComponent").hide()
                                                    $(".btnupDate1SingleComponent").show()
                                                    $("#uploads").show()
                                                    $("#dforLabelComponent").text(cmpOne)
                                                    $("#dforLabelComponent").css("position", "relative")
                                                    $("#dforLabelComponent").css("right", "-556px")
                                                    $("#dforLabelComponent").addClass("badge badge-success")
                                                  } 
                                                    else {
                                                      // $(".Orders1SingleComponent").hide()
                                                      $("#btnsaVeSingleComponent").show()
                                                      $(".btnupDate1SingleComponent").hide()
                                                    }
                                                }
                                            );
                                        }
                                    }
                                );
                              }
                          );
                        }
                      }
                  );
              }
          }
      }
  })
}
});

function BypAss(gh){

return gh;
}

$('.Orders1SingleComponent').click(function(e){
e.preventDefault();
var values=[];
$('input[name="checkbox[]"]:checked').each(function () {
  values[values.length] = (this.checked ? $(this).val() : "");
});

$(".container-3PFIa").hide() 
let qty = $('.product-quantity-input').val()
let size = $('.size span.value').text()
let material = $('.material span.value').text()
let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
let jenis_kertas = $('input[name=jenis_kertas]').val()
var formData = $("#forms").serializeArray();

Swal.fire({
      title: 'Are you sure? #fixedOrders Single Component',
      html:
        'Preview <b>to next orders</b>, <br />' +
        '<code>'+
          'Orders: <br />'+
          size+'<br/>'+
          material+'<br/>'+
          qty+'<br/>'+
          values.join(", ")+'<br/>'+
        '</code> <br />'+
        '',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Order now!',
      cancelButtonText: 'Not now!'
    }).then((result) => {
      if (result.isConfirmed) {

        var designs=[];
        $('input[name="checkbox[]"]:checked').each(function () {
          designs[designs.length] = (this.checked ? $(this).val() : "");
        });

          var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
              var files = $('#file')[0].files;

                var fd = new FormData();

                fd.append('file',files[0]);
                fd.append('_token',CSRF_TOKEN);

                $('#responseMsg').hide();
                $.ajax({
                  url: "{{route('orders.order_customers.to.mkt')}}",
                  method: 'post',
                  data: fd,
                  contentType: false,
                  processData: false,
                  dataType: 'json',
                  beforeSend: function(evt) {   
                      const bfrSend = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 100000,
                          timerProgressBar: true,
                          didOpen: (toast) => {
                              toast.addEventListener('mouseenter', Swal.stopTimer)
                              toast.addEventListener('mouseleave', Swal.resumeTimer)
                          }
                        })
                        
                        bfrSend.fire({
                            icon: 'info',
                            title: 'Retrieving data, data is being processed..'
                        })

                    },
                  success: function(response){

                    if(response.status == false){

                      Swal.fire(
                              'Information!',
                              'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                              'error'
                            )
                    }  else {
                      
                      if(response.success == true){
                        Swal.fire(
                              'Information!',
                              'Order has been processed, We have sent your file to our marketing team.',
                              'success'
                            )
                      } 
                        else {
                            
                          Swal.fire(
                              'Information!',
                              'Message failed to process, contact customer service, we will immediately help you.. , because you have sent this file before, if you experience problems, please contact our customer service immediately.',
                              'error'
                            )
                        }
                    }
                },
                error: function(response){
                    console.log("error : " + JSON.stringify(response) );
                  }
                });
          // }                                                                                                                                          
      }
  })
});

// progress validate component str length for component text area for append text link.
$('.btnSave').click(function(e){
e.preventDefault()

var c = $("input[name='checkbox[]']:checked").val();
    if( c == undefined){
        Swal.fire({
                icon: 'error',
                title: 'Design not ready.'
            })
      } 
        else {

          let component1 = $('#cp1').val()
          let qty = $('.product-quantity-input').val()
          let size = $('.size span.value').text()
          let material = $('.material span.value').text()
          let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
          let jenis_kertas = $('input[name=jenis_kertas]').val()
          var formDataDesign = $("#formsD").serializeArray();
          var values=[];
          
          /*
          *
          Custom size
          */
          let qtyCz = $('#Czquantity').val()
          let sizeCz = $('#Csize').val()
          let cmpOne = $('#CMP1').val()
          let materialCz = $('#Czmaterial').val()
          let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm]').val()
          let jenis_kertasCz = $('input[name=Czjenis_kertas]').val()
          let defComponent = $('input[name=components]').val()

        $('input[name="checkbox[]"]:checked').each(function () {
          values[values.length] = (this.checked ? $(this).val() : "");
        });

        Swal.fire({
            title: 'Are you sure?',
            html:
              'Preview <b>to next orders</b>, <br />' +
              '<code>'+
                'Orders: <br />'+
                size+'<br/>'+
                material+'<br/>'+
                qty+'<br/>'+
                values.join(", ")+'<br/>'+
              '</code> <br />'+'',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Order now!',
            cancelButtonText: 'Not now!'
          }).then((result) => {
            if (result.isConfirmed) {

              var designs=[];
              $('input[name="checkbox[]"]:checked').each(function () {
                designs[designs.length] = (this.checked ? $(this).val() : "");
              });

      if(cmpOne == "" || sizeCz == "" || materialCz == "" || jenis_kertas_gsmCz == "" || jenis_kertasCz == "" || typeof designs == 'undefined' && designs.length == 0) {
            Swal.fire(
            'question!',
            'Paper type still not loaded, make sure all fields are filled.',
            'error'
          )

        } 
          else {

          var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
              var filesx = $('#file')[0].files;

              if(filesx.length > 0){

              var formData = new FormData();
              let TotalFiles = $('#file')[0].files.length;
              let files = $('#file')[0];

              let Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;

              for (let i = 0; i < TotalFiles; i++) {
                  formData.append('file' + i, files.files[i]);
                  formData.append('ds1', component1);
                  formData.append('_token',CSRF_TOKEN);
                  formData.append('component_one', cmpOne);
                  formData.append('defComponent', defComponent);
                  formData.append('qty', qtyCz);
                  formData.append('size', sizeCz);
                  formData.append('material', materialCz);
                  formData.append('jenis_kertas', jenis_kertasCz);
                  formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                  formData.append('formDataDesign', Cdesign);

              }

              formData.append('TotalFiles', TotalFiles);

                $.ajax({
                  url: "{{route('uploadf')}}",
                  method: 'post',
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: 'json',                                                                                                                   
                  success: function(response){
                    
                    $("#stateIdOne").val(response.dataID)

                        if(response.status == false){

                          Swal.fire(
                                  'Information!',
                                  'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                  'error'
                                )

                        } 
                          else 
                                {
                                    SendOrdersMKT(component1, cmpOne, qtyCz, sizeCz, materialCz, response.data.filename, response.data.PATHS, response.data.GetOriginalName, response.data.GetMimeType, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign).then(function(data){
                                        
                                        if(data.success == false){
                                          
                                            Swal.fire(
                                              'Information!',
                                              'Message failed to process, contact customer service, we will immediately help you..',
                                              'error'
                                            )

                                          } else {

                                              Swal.fire({
                                              title: 'Are you sure?',
                                              text: "Order has been processed, Do you want to add more components?",
                                              icon: 'success',
                                              showCancelButton: true,
                                              confirmButtonColor: '#3085d6',
                                              cancelButtonColor: '#d33',
                                              confirmButtonText: 'Yes!',
                                              cancelButtonText: 'No'}).then((result) => {
                                                  if (result.isConfirmed) {
                                                  
                                                      $("#mjrsr2").show()
                                                      $("#btnsaVe").hide()
                                                      $(".btnupDate1").show()
                                                      $("#uploads").show()
                                                      $("#dforLabelComponent").text(cmpOne)
                                                      $("#dforLabelComponent").css("position", "relative")
                                                      $("#dforLabelComponent").css("right", "-556px")
                                                      $("#dforLabelComponent").addClass("badge badge-success")

                                                  } 
                                                    else {

                                                    $(".Orders1").show()
                                                    $("#btnsaVe").hide()
                                                    // $("#mjrsr3").hide()
                                                }
                                            }
                                        );
                                    }
                                }
                            );
                        }
                      },
                      error: function(response){
                          console.log("error : " + JSON.stringify(response) );
                      }
                  });

              }
                else 
                      {
                
                          Swal.fire({
                          title: 'Are you sure?',
                          text: "do you want to continue, without uploading documents?",
                          icon: 'question',
                          showCancelButton: true,
                          confirmButtonColor: '#3085d6',
                          cancelButtonColor: '#d33',
                          confirmButtonText: 'Next!',
                          cancelButtonText: 'Cancel '
                            }).then((result) => {
                              if (result.isConfirmed) {

                                SendOrdersMKTnonFILE(component1, cmpOne, qtyCz, sizeCz, materialCz, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign, defComponent).then(function(data){
                                    if(data.success == false){
                                      Swal.fire(
                                        'Information!',
                                        'Message failed to process, contact customer service, we will immediately help you.. ',
                                        'error'
                                      )

                                        let link = '{!! route("auth_user.id") !!}';
                                        let redirect = link;
                                            setTimeout(function(){ 
                                                    window.location.href = redirect;
                                        }, 1000);
                                    } 
                                      else {  
                                      
                                          Swal.fire({
                                          title: 'Are you sure?',
                                          text: "Order has been processed, Do you want to add more components?",
                                          icon: 'success',
                                          showCancelButton: true,
                                          confirmButtonColor: '#3085d6',
                                          cancelButtonColor: '#d33',
                                          confirmButtonText: 'Yes!',
                                          cancelButtonText: 'No'
                                          }).then((result) => {
                                              if (result.isConfirmed) { 

                                                    $("#mjrsr2").show() 
                                                    $("#stateIdOne").val(data.data)
                                                    $("#btnsaVe").hide()
                                                    $(".btnupDate1").show()
                                                    $("#uploads").show()
                                                    $("#dforLabelComponent").text(cmpOne)
                                                    $("#dforLabelComponent").css("position", "relative")
                                                    $("#dforLabelComponent").css("right", "-556px")
                                                    $("#dforLabelComponent").addClass("badge badge-success")

                                                  } 
                                                    else {

                                                    $(".Orders1").show()
                                                    $("#btnsaVe").hide()
                                                    // $("#mjrsr3").hide()
                                                }
                                            }
                                        );
                                    }
                                }
                            );
                          }
                      }
                  );
              }
          }
      }
  })
}

});

async function UpdateFiles1(cfile_id) {

  let data = {
            id:cfile_id,
            cmpcz:component,
            quantity:qty,
            material:material,
            filename:filename,
            filepaths:path,
            originalnames:getOriginalName,
            mime:getMimeType,
            jenis_kertas_gsm:jenis_kertas_gsm,
            jenis_kertas: jenis_kertas,
            design: form
        }

  const Workoders = "{{ route('updateFiles') }}";
        
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

async function SyncToReUpload(token, file) {

  let data = {
              file:file,
              token:token
        }

  const Workoders = "{{ route('orders.order_customers.to.mkt') }}";
        
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

async function UpdateFiles2(cfile_id) {

  let data = {
            id:cfile_id,
            cmpcz:component,
            quantity:qty,
            material:material,
            filename:filename,
            filepaths:path,
            originalnames:getOriginalName,
            mime:getMimeType,
            jenis_kertas_gsm:jenis_kertas_gsm,
            jenis_kertas: jenis_kertas,
            design: form
        }

  const Workoders = "{{ route('updateFiles2') }}";
        
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

$('.btnupDate4').click(function(e){
e.preventDefault()

Swal.fire({
    title: 'Are you sure?',
    text: "this process will change your current data processing?",
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes!',
    cancelButtonText: 'No'}).then((result) => {
        if (result.isConfirmed) {

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          
          var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
          let qty = $('.product-quantity-input').val()
          let size = $('.size span.value').text()
          let material = $('.material span.value').text()
          let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
          let jenis_kertas = $('input[name=jenis_kertas]').val()
          var formDataDesign = $("#forms4").serializeArray();
          var values=[];
          
        /*
        *
        Custom size
        */
        let qtyCz = $('#Czquantity4').val()
        let CMP2 = $('#CMP4').val()
        let sizeCz = $('#Csize4').val()
        let materialCz = $('#Czmaterial4').val()
        let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm4]').val()
        let jenis_kertasCz = $('input[name=Czjenis_kertas4]').val()

        var filesx = $('#files4')[0].files;

          if(filesx.length > 0){

              var formData = new FormData();
              let TotalFiles = $('#files4')[0].files.length;
              let files = $('#files4')[0];

              let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));

              for (let i = 0; i < TotalFiles; i++) {

                  formData.append('file' + i, files.files[i]);
                  formData.append('_token', CSRF_TOKEN);
                  formData.append('id', $("#stateIdOne4").val());
                  formData.append('qty', qtyCz);
                  formData.append('component', CMP2);
                  formData.append('size', sizeCz);
                  formData.append('material', materialCz);
                  formData.append('jenis_kertas', jenis_kertasCz);
                  formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                  formData.append('formDataDesign', Cdesign);

              }

              formData.append('TotalFiles', TotalFiles);

                $.ajax({
                  url: "{{route('uploadDynamiCombination4')}}",
                  method: 'post',
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: 'json',                                                                                                                   
                  success: function(response){
                    if(response.success == true){
                      
                      var formDatadf4 = new FormData();
                      let TotalFiles = $('#files4')[0].files.length;
                      let files = $('#files4')[0];

                      var formDataDesign4 = $("#forms4").serializeArray();

                      let qtyCz = $('#Czquantity4').val()
                      let CMP4 = $('#CMP4').val()
                      let sizeCz = $('#Csize4').val()
                      let cpc4 = $('#cp4').val()
                      let materialCz = $('#Czmaterial4').val()
                      let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm4]').val()
                      let jenis_kertasCz = $('input[name=Czjenis_kertas4]').val()
                      var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

                      let Cdesign =JSON.stringify(Object.assign({},  formDataDesign4));

                          for (let i = 0; i < TotalFiles; i++) {
                            
                              formDatadf4.append('files' + i, files.files[i]);
                              formDatadf4.append('_token', CSRF_TOKEN);
                              formDatadf4.append('id', $("#stateIdOne4").val());
                              formDatadf4.append('design4', cpc4);
                              formDatadf4.append('qty', qtyCz);
                              formDatadf4.append('component', CMP4);
                              formDatadf4.append('size', sizeCz);
                              formDatadf4.append('material', materialCz);
                              formDatadf4.append('jenis_kertas', jenis_kertasCz);
                              formDatadf4.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                              formDatadf4.append('formDataDesign', Cdesign);

                          }

                          formDatadf4.append('TotalFiles', TotalFiles);

                            $.ajax({
                                url: "{{route('uploadf_4')}}",
                                method: 'post',
                                data: formDatadf4,
                                contentType: false,
                                processData: false,
                                dataType: 'json',                                                                                                                   
                                success: function(response){

                                  if(response.success == false){

                                      Swal.fire(
                                              'Information!',
                                              'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                              'error'
                                            )
                                      } 
                                        else
                                            {
                                              Swal.fire(
                                                  'Information!',
                                                  'Order has been processed.',
                                                  'success'
                                                )

                                            }
                                    }

                            });

                      }  
                        else {

                          Swal.fire(
                              'Information!',
                              'Message failed to process, contact customer service, we will immediately help you..',
                              'error'
                            )
                      }
                },
                  error: function(response){
                      console.log("error : " + JSON.stringify(response) );
                  }
              });

              } 
              else {

                      let qty = $('#Czquantity4').val()
                      let size = $('#Csize4').val()
                      let id = $('#stateIdOne4').val()
                      let cmpOne = $('#CMP4').val()
                      let material = $('#Czmaterial4').val()
                      let jenis_kertas_gsm = $('input[name=Czjenis_kertas_gsm4]').val()
                      let jenis_kertas = $('input[name=Czjenis_kertas4]').val()
                      var FormDataX = $("#forms4").serializeArray()

                      var filesx = $('#files4')[0].files;

                        if(filesx.length > 0){

                        var formData = new FormData();
                        let TotalFiles = $('#files4')[0].files.length;
                        let files = $('#files4')[0];

                        let Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;

                        for (let i = 0; i < TotalFiles; i++) {

                            formData.append('file' + i, files.files[i]);
                            formData.append('_token',CSRF_TOKEN);
                            formData.append('cmpcz', cmpOne);
                            formData.append('quantity', qty);
                            formData.append('size', size);
                            formData.append('material', material);
                            formData.append('jenis_kertas', jenis_kertas);
                            formData.append('jenis_kertas_gsm', jenis_kertas_gsm);
                            formData.append('FRMS', Cdesign);

                        }

                        formData.append('TotalFiles', TotalFiles);

                          $.ajax({
                            url: "{{route('UpdatedWithoutFile4')}}",
                            method: 'post',
                            data: formData,
                            contentType: false,
                            processData: false,
                            dataType: 'json',                                                                                                                   
                            success: function(response){
                              if(response.success == true){
                                  Swal.fire(
                                      'Information!',
                                      'Order has been processed.',
                                      'success'
                                    )
                              }  
                                else {

                                    Swal.fire(
                                        'Information!',
                                        'Message failed to process, contact customer service, we will immediately help you..',
                                        'error'
                                      )
                                  }
                              },
                              error: function(response){
                                console.log("error : " + JSON.stringify(response) );
                            }
                        }
                    );
                }
                  else {    

                      let qty = $('#Czquantity4').val()
                      let size = $('#Csize4').val()
                      let id = $('#stateIdOne4').val()
                      let cpc4 = $('#cp4').val()
                      let cmpOne = $('#CMP4').val()
                      let material = $('#Czmaterial4').val()
                      let jenis_kertas_gsm = $('input[name=Czjenis_kertas_gsm4]').val()
                      let jenis_kertas = $('input[name=Czjenis_kertas4]').val()
                      var formDataDesign = $("#forms4").serializeArray();
                  
                    let ExpandDesignArray =JSON.stringify(Object.assign({},  formDataDesign));
                      
                        UpdateWithoutNotFile4(id, cmpOne, qty, size, material, jenis_kertas_gsm, jenis_kertas, ExpandDesignArray, cpc4).then(function(data){
                          
                              if(data.success == false){
                                  Swal.fire(
                                      'Information!',
                                      'Order failed.',
                                      'error'
                                    )
                                } 
                                  else {

                                  Swal.fire(
                                    'Information!',
                                    'Order has been processed.',
                                    'success'
                                  )

                              $("#dforLabelComponent4").text(cmpOne)
                              
                            }
                        }
                    );
                }
              }

        }

    });


});

$('.btnupDate3').click(function(e){
e.preventDefault()

Swal.fire({
    title: 'Are you sure?',
    text: "this process will change your current data processing?",
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes!',
    cancelButtonText: 'No'}).then((result) => {
        if (result.isConfirmed) {

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

            var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
            let qty = $('.product-quantity-input').val()
            let size = $('.size span.value').text()
            let material = $('.material span.value').text()
            let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
            let jenis_kertas = $('input[name=jenis_kertas]').val()
            var formDataDesign = $("#forms3").serializeArray();
            var values=[];
            
          /*
          *
          Custom size
          */
          let qtyCz = $('#Czquantity3').val()
          let CMP2 = $('#CMP3').val()
          let sizeCz = $('#Csize3').val()
          let materialCz = $('#Czmaterial3').val()
          let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm3]').val()
          let jenis_kertasCz = $('input[name=Czjenis_kertas3]').val()
          let component3s = $('#cp3').val()

          var filesx = $('#files3')[0].files;
          
          if(filesx.length > 0){

            var formData = new FormData();
            let TotalFiles = $('#files3')[0].files.length;
            let files = $('#files3')[0];

            let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));

            for (let i = 0; i < TotalFiles; i++) {

              formData.append('file' + i, files.files[i]);
              formData.append('_token', CSRF_TOKEN);
              formData.append('id', $("#stateIdOne3").val());
              formData.append('qty', qtyCz);
              formData.append('design3', component3s);
              formData.append('component', CMP2);
              formData.append('size', sizeCz);
              formData.append('material', materialCz);
              formData.append('jenis_kertas', jenis_kertasCz);
              formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
              formData.append('formDataDesign', Cdesign);

            }

            formData.append('TotalFiles', TotalFiles);

              $.ajax({
                url: "{{route('uploadDynamiCombination3')}}",
                method: 'post',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',                                                                                                                   
                success: function(response){

                  if(response.success == true){
                        
                      var formDatadf3 = new FormData();
                      let TotalFiles = $('#files3')[0].files.length;
                      let files = $('#files3')[0];
                      let qtyCz = $('#Czquantity3').val()
                      let CMP3 = $('#CMP3').val()
                      let sizeCz = $('#Csize3').val()
                      let materialCz = $('#Czmaterial3').val()
                      let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm3]').val()
                      let jenis_kertasCz = $('input[name=Czjenis_kertas3]').val()
                      var formDataDesign = $("#forms3").serializeArray();
                      let component3 = $('#cp3').val()

                      let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));

                          for (let i = 0; i < TotalFiles; i++) {
                            
                              formDatadf3.append('files' + i, files.files[i]);
                              formDatadf3.append('id', $("#stateIdOne3").val());
                              formDatadf3.append('qty', qtyCz);
                              formDatadf3.append('design3', component3);
                              formDatadf3.append('component', CMP3);
                              formDatadf3.append('size', sizeCz);
                              formDatadf3.append('material', materialCz);
                              formDatadf3.append('jenis_kertas', jenis_kertasCz);
                              formDatadf3.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                              formDatadf3.append('formDataDesign', Cdesign);

                          }

                          formDatadf3.append('TotalFiles', TotalFiles);

                            $.ajax({
                                url: "{{route('uploadf_3')}}",
                                method: 'post',
                                data: formDatadf3,
                                contentType: false,
                                processData: false,
                                dataType: 'json',                                                                                                                   
                                success: function(response){

                                  if(response.success == false){

                                      Swal.fire(
                                              'Information!',
                                              'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                              'error'
                                            )
                                      } 
                                        else
                                            {
                                              Swal.fire(
                                                  'Information!',
                                                  'Order has been processed.',
                                                  'success'
                                                )

                                            }
                                    }

                            });
                    }  
                      else {

                        Swal.fire(
                            'Information!',
                            'Message failed to process, contact customer service, we will immediately help you..',
                            'error'
                          )
                    }
              },
                error: function(response){
                    console.log("error : " + JSON.stringify(response) );
                }
            });

            } 
              else {

                    let qty = $('#Czquantity3').val()
                    let size = $('#Csize3').val()
                    let id = $('#stateIdOne3').val()
                    let cmpOne = $('#CMP3').val()
                    let material = $('#Czmaterial3').val()
                    let jenis_kertas_gsm = $('input[name=Czjenis_kertas_gsm3]').val()
                    let jenis_kertas = $('input[name=Czjenis_kertas3]').val()
                    var FormDataX = $("#forms3").serializeArray()
                    let component3sd = $('#cp3').val()

                    var filesx = $('#files3')[0].files;

                      if(filesx.length > 0){

                      var formData = new FormData();
                      let TotalFiles = $('#files3')[0].files.length;
                      let files = $('#files3')[0];

                      let Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;

                      for (let i = 0; i < TotalFiles; i++) {

                          formData.append('file' + i, files.files[i]);
                          formData.append('_token',CSRF_TOKEN);
                          formData.append('cmpcz', cmpOne);
                          formData.append('design3', component3sd);
                          formData.append('quantity', qty);
                          formData.append('size', size);
                          formData.append('material', material);
                          formData.append('jenis_kertas', jenis_kertas);
                          formData.append('jenis_kertas_gsm', jenis_kertas_gsm);
                          formData.append('FRMS', Cdesign);

                      }

                      formData.append('TotalFiles', TotalFiles);

                        $.ajax({
                          url: "{{route('UpdatedWithoutFile3')}}",
                          method: 'post',
                          data: formData,
                          contentType: false,
                          processData: false,
                          dataType: 'json',                                                                                                                   
                          success: function(response){
                            if(response.success == true){
                                Swal.fire(
                                    'Information!',
                                    'Order has been processed.',
                                    'success'
                                  )
                            }  
                              else {

                                  Swal.fire(
                                      'Information!',
                                      'Message failed to process, contact customer service, we will immediately help you..',
                                      'error'
                                    )
                                }
                            },
                            error: function(response){
                              console.log("error : " + JSON.stringify(response) );
                          }
                      }
                  );
              }
                else {    

                  let qty = $('#Czquantity3').val()
                  let size = $('#Csize3').val()
                  let id = $('#stateIdOne3').val()
                  let dsgn3 = $('#cp3').val()
                  let cmpOne = $('#CMP3').val()
                  let material = $('#Czmaterial3').val()
                  let jenis_kertas_gsm = $('input[name=Czjenis_kertas_gsm3]').val()
                  let jenis_kertas = $('input[name=Czjenis_kertas3]').val()

                  var formDataDesigns = $("#forms3").serializeArray();
                  
                  let ExpandDesignArray =JSON.stringify(Object.assign({}, formDataDesigns));

                      UpdateWithoutNotFile3(id, cmpOne, qty, size, material, jenis_kertas_gsm, jenis_kertas, ExpandDesignArray, dsgn3).then(function(data){
                        
                            if(data.success == false){
                                Swal.fire(
                                    'Information!',
                                    'Order failed.',
                                    'error'
                                  )
                              } 
                                else {

                                Swal.fire(
                                  'Information!',
                                  'Order has been processed.',
                                  'success'
                                )

                            $("#dforLabelComponent3").text(cmpOne)
                            
                          }
                      }
                  );
              }
            }

        }
    });
});

$('.btnupDate2').click(function(e){
e.preventDefault()

Swal.fire({
    title: 'Are you sure?',
    text: "this process will change your current data processing?",
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes!',
    cancelButtonText: 'No'}).then((result) => {
        if (result.isConfirmed) {

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
          let qty = $('.product-quantity-input').val()
          let size = $('.size span.value').text()
          let material = $('.material span.value').text()
          let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
          let jenis_kertas = $('input[name=jenis_kertas]').val()
          var formDataDesign = $("#forms2").serializeArray();
          var values=[];
            
          /*
          *
          Custom size
          */
          let qtyCz = $('#Czquantity2').val()
          let CMP2 = $('#CMP2').val()
          let sizeCz = $('#Csize2').val()
          let materialCz = $('#Czmaterial2').val()
          let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm2]').val()
          let jenis_kertasCz = $('input[name=Czjenis_kertas2]').val()
          let component2 = $('#cp2').val()

          var filesx = $('#files')[0].files;

          if(filesx.length > 0){

                var formData = new FormData();
                let TotalFiles = $('#files')[0].files.length;
                let files = $('#files')[0];
                var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

                let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));

                for (let i = 0; i < TotalFiles; i++) {

                    formData.append('file' + i, files.files[i]);
                    formData.append('_token', CSRF_TOKEN);
                    formData.append('id', $("#stateIdOne2").val());
                    formData.append('qty', qtyCz);
                    formData.append('design2', component2);
                    formData.append('component', CMP2);
                    formData.append('size', sizeCz);
                    formData.append('material', materialCz);
                    formData.append('jenis_kertas', jenis_kertasCz);
                    formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                    formData.append('formDataDesign', Cdesign);

                }

                formData.append('TotalFiles', TotalFiles);

                  $.ajax({
                    url: "{{route('uploadDynamiCombination2')}}",
                    method: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    dataType: 'json',                                                                                                                   
                    success: function(response){
                      if(response.success == true){

                          var formDatadf = new FormData();
                          let TotalFiles = $('#files')[0].files.length;
                          let files = $('#files')[0];
                          let qtyCz = $('#Czquantity2').val()
                          let CMP2 = $('#CMP2').val()
                          let sizeCz = $('#Csize2').val()
                          let materialCz = $('#Czmaterial2').val()
                          let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm2]').val()
                          let jenis_kertasCz = $('input[name=Czjenis_kertas2]').val()
                          let component2 = $('#cp2').val()
                          var formDataDesign = $("#forms2").serializeArray();

                          let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));

                          for (let i = 0; i < TotalFiles; i++) {
                              formDatadf.append('files' + i, files.files[i]);
                              formDatadf.append('id', $("#stateIdOne2").val());
                              formDatadf.append('qty', qtyCz);
                              formDatadf.append('design2', component2);
                              formDatadf.append('component', CMP2);
                              formDatadf.append('size', sizeCz);
                              formDatadf.append('material', materialCz);
                              formDatadf.append('jenis_kertas', jenis_kertasCz);
                              formDatadf.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                              formDatadf.append('formDataDesign', Cdesign);

                          }

                          formDatadf.append('TotalFiles', TotalFiles);

                            $.ajax({
                                url: "{{route('uploadf_2')}}",
                                method: 'post',
                                data: formDatadf,
                                contentType: false,
                                processData: false,
                                dataType: 'json',                                                                                                                   
                                success: function(response){

                                  if(response.success == false){

                                      Swal.fire(
                                              'Information!',
                                              'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                              'error'
                                            )
                                      } 
                                        else
                                            {
                                              Swal.fire(
                                                  'Information!',
                                                  'Order has been processed.',
                                                  'success'
                                                )

                                            }
                                    }

                            });
                        }  
                          else {

                            Swal.fire(
                                'Information!',
                                'Message failed to process, contact customer service, we will immediately help you..',
                                'error'
                              )
                        }
                  },
                    error: function(response){
                        console.log("error : " + JSON.stringify(response) );
                    }
                });

                } 
                else {

                        let qty = $('#Czquantity2').val()
                        let size = $('#Csize2').val()
                        let dsgn2 = $('#cp2').val()
                        let id = $('#stateIdOne2').val()
                        let cmpOne = $('#CMP2').val()
                        let material = $('#Czmaterial2').val()
                        let jenis_kertas_gsm = $('input[name=Czjenis_kertas_gsm2]').val()
                        let jenis_kertas = $('input[name=Czjenis_kertas2]').val()
                        var FormDataX = $("#forms2").serializeArray()

                        var filesx = $('#files')[0].files;

                          if(filesx.length > 0){

                          var formData = new FormData();
                          let TotalFiles = $('#files')[0].files.length;
                          let files = $('#files')[0];

                          let Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;

                          for (let i = 0; i < TotalFiles; i++) {

                              formData.append('file' + i, files.files[i]);
                              formData.append('_token',CSRF_TOKEN);
                              formData.append('cmpcz', cmpOne);
                              formData.append('design2', dsgn2);
                              formData.append('quantity', qty);
                              formData.append('size', size);
                              formData.append('material', material);
                              formData.append('jenis_kertas', jenis_kertas);
                              formData.append('jenis_kertas_gsm', jenis_kertas_gsm);
                              formData.append('FRMS', Cdesign);

                          }

                          formData.append('TotalFiles', TotalFiles);

                            $.ajax({
                              url: "{{route('UpdatedWithoutFile2')}}",
                              method: 'post',
                              data: formData,
                              contentType: false,
                              processData: false,
                              dataType: 'json',                                                                                                                   
                              success: function(response){
                                if(response.success == true){
                                    Swal.fire(
                                        'Information!',
                                        'Order has been processed.',
                                        'success'
                                      )
                                }  
                                  else {

                                      Swal.fire(
                                          'Information!',
                                          'Message failed to process, contact customer service, we will immediately help you..',
                                          'error'
                                        )
                                    }
                                },
                                error: function(response){
                                  console.log("error : " + JSON.stringify(response) );
                              }
                          }
                      );
                  }
                    else {    

                      let qty = $('#Czquantity2').val()
                      let size = $('#Csize2').val()
                      let id = $('#stateIdOne2').val()
                      let cmpOne = $('#CMP2').val()
                      let material = $('#Czmaterial2').val()
                      let jenis_kertas_gsm = $('input[name=Czjenis_kertas_gsm2]').val()
                      let jenis_kertas = $('input[name=Czjenis_kertas2]').val()
                      let dsgn2s = $('#cp2').val()

                      var formDataDesign = $("#forms2").serializeArray();

                      let ExpandDesignArray =JSON.stringify(Object.assign({},  formDataDesign)) ;
                          
                          UpdateWithoutNotFile2(id, cmpOne, qty, size, material, jenis_kertas_gsm, jenis_kertas, ExpandDesignArray, dsgn2s).then(function(data){
                            
                                if(data.success == false){
                                    Swal.fire(
                                        'Information!',
                                        'Order failed.',
                                        'error'
                                      )
                                  } 
                                    else {

                                    Swal.fire(
                                      'Information!',
                                      'Order has been processed.',
                                      'success'
                                    )

                                $("#dforLabelComponent").text(cmpOne)
                                
                              }
                          }
                      );
                  }
              }
          }
      }
  );
}
);

$('.btnupDate1SingleComponent').click(function(e){
e.preventDefault();

    Swal.fire({
    title: 'Are you sure?',
    text: "this process will change your current data processing?",
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes!',
    cancelButtonText: 'No'}).then((result) => {
        if (result.isConfirmed) {

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

        var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        let qty = $('.product-quantity-input').val()
        let size = $('.size span.value').text()
        let material = $('.material span.value').text()
        let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
        let jenis_kertas = $('input[name=jenis_kertas]').val()
        var formDataDesign = $("#forms").serializeArray();
        var values=[];
        
        /*
        *
        Custom size
        */
        let qtyCz = $('#Czquantity').val()
        let design1 = $('#cp1').val()
        let sizeCz = $('#Csize').val()
        let cmpOne = $('#CMP1').val()
        let materialCz = $('#Czmaterial').val()
        let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm]').val()
        let jenis_kertasCz = $('input[name=Czjenis_kertas]').val()
        let components = $('input[name=components]').val()
        let id = $('#stateIdOneSingleComponent').val()

        var filesx = $('#filessd')[0].files;

            if(filesx.length > 0){

              var formData = new FormData();
              let TotalFiles = $('#filessd')[0].files.length;
              let files = $('#filessd')[0];
              let idxSingle = $('#stateIdOneSingleComponent').val()
              let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));
              var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

              for (let i = 0; i < TotalFiles; i++) {

                  formData.append('file' + i, files.files[i]);
                  formData.append('_token', CSRF_TOKEN);
                  formData.append('idx', idxSingle);
                  formData.append('qty', qty);
                  formData.append('design1', design1);
                  formData.append('component', components);
                  formData.append('size', size);
                  formData.append('material', material);
                  formData.append('components', components);
                  formData.append('jenis_kertas', jenis_kertas);
                  formData.append('jenis_kertas_gsm', jenis_kertas_gsm);
                  formData.append('formDataDesign', Cdesign);

              }

              formData.append('TotalFiles', TotalFiles);

                $.ajax({
                  url: "{{route('uploadDynamiCombinationSingleComponent')}}",
                  method: 'post',
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: 'json',                                                                                                                   
                  success: function(response){
                    
                    if(response.success == true){
                    
                      var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                      let defComponent = $('input[name=components]').val()
    
                      var formDataSingleComponent = new FormData();
                      let xFiles = $('#filessd')[0].files.length;
                      let files = $('#filessd')[0];

                      let qty = $('.product-quantity-input').val()
                      let size = $('.size span.value').text()
                      let material = $('.material span.value').text()
                      let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
                      let jenis_kertas = $('input[name=jenis_kertas]').val()
                      var formDataDesigns = $("#forms").serializeArray();
                      let Cdesign =JSON.stringify(Object.assign({},  formDataDesigns));
                      let design1s = $('#cp1').val()

                          for (let i = 0; i < xFiles; i++) {

                              formDataSingleComponent.append('file' + i, files.files[i]);
                              formDataSingleComponent.append('ds1', design1s);
                              formDataSingleComponent.append('_token',CSRF_TOKEN);
                              formDataSingleComponent.append('component_one', cmpOne);
                              formDataSingleComponent.append('qty', qty);
                              formDataSingleComponent.append('defComponent', defComponent);
                              formDataSingleComponent.append('size', size);
                              formDataSingleComponent.append('material', material);
                              formDataSingleComponent.append('jenis_kertas', jenis_kertas);
                              formDataSingleComponent.append('jenis_kertas_gsm', jenis_kertas_gsm);
                              formDataSingleComponent.append('formDataDesign', Cdesign);

                          }

                          formDataSingleComponent.append('TotalFiles', xFiles);

                            $.ajax({
                                url: "{{route('uploadf')}}",
                                method: 'post',
                                data: formDataSingleComponent,
                                contentType: false,
                                processData: false,
                                dataType: 'json',                                                                                                                   
                                success: function(response){

                                  if(response.success == false){

                                      Swal.fire(
                                              'Information!',
                                              'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                              'error'
                                            )
                                      } 
                                        else
                                            {
                                                Swal.fire(
                                                    'Information!',
                                                    'Order has been processed.',
                                                    'success'
                                            )
                                      }
                                  }
                              }
                          );
                      }  
                        else {

                          Swal.fire(
                              'Information!',
                              'Message failed to process, contact customer service, we will immediately help you..',
                              'error'
                            )
                      }
                },
                  error: function(response){
                      console.log("error : " + JSON.stringify(response) );
                  }
              });

            } 
              else {

                  let id = $('#stateIdOneSingleComponent').val()
                  var FormDataX = $("#forms").serializeArray();
                  var filesx = $('#filessd')[0].files;
                  let qty = $('.product-quantity-input').val()
                  let size = $('.size span.value').text()
                  let material = $('.material span.value').text()
                  let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
                  let jenis_kertas = $('input[name=jenis_kertas]').val()
                  var formDataDesign = $("#forms").serializeArray();

                      let cmpOne = $('input[name=components]').val()

                        if(filesx.length > 0){

                        var formData = new FormData();
                        let TotalFiles = $('#filessd')[0].files.length;
                        let files = $('#filessd')[0];

                        let Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;

                        for (let i = 0; i < TotalFiles; i++) {

                            formData.append('file' + i, files.files[i]);
                            formData.append('_token',CSRF_TOKEN);
                            formData.append('cmpcz', cmpOne);
                            formData.append('components', components);
                            formData.append('design1', design1);
                            formData.append('quantity', qty);
                            formData.append('size', size);
                            formData.append('material', material);
                            formData.append('jenis_kertas', jenis_kertas);
                            formData.append('jenis_kertas_gsm', jenis_kertas_gsm);
                            formData.append('FRMS', Cdesign);

                        }

                        formData.append('TotalFiles', TotalFiles);

                          $.ajax({
                            url: "{{route('WithoutUpdateFiles')}}",
                            method: 'post',
                            data: formData,
                            contentType: false,
                            processData: false,
                            dataType: 'json',                                                                                                                   
                            success: function(response){

                              if(response.success == true){
                                  Swal.fire(
                                      'Information!',
                                      'Order has been processed.',
                                      'success'
                                    )
                              }  
                                else {

                                    Swal.fire(
                                        'Information!',
                                        'Message failed to process, contact customer service, we will immediately help you..',
                                        'error'
                                      )
                                  }
                              },
                              error: function(response){
                                console.log("error : " + JSON.stringify(response) );
                            }
                        }
                    );
                }
                  else {    
                    let ExpandDesignArray =JSON.stringify(Object.assign({},  formDataDesign)) ;
                    let design1s = $('#cp1').val()
                      
                        UpdateWithoutNotFile(design1, id, cmpOne, qty, size, material, jenis_kertas_gsm, jenis_kertas, ExpandDesignArray).then(function(data){
                              if(data.success == false){
                                  Swal.fire(
                                      'Information!',
                                      'Order failed.',
                                      'error'
                                    )

                                    $("#btnsaVeSingleComponent").show()
                                    $(".btnupDate1SingleComponent").hide()
                                    $("#uploads").show()
                                    $("#dforLabelComponent").text(cmpOne)

                                } else {
                                  Swal.fire(
                                    'Information!',
                                    'Order has been processed.',
                                    'success'
                                  )

                                  $("#btnsaVeSingleComponent").hide()
                                  $(".btnupDate1SingleComponent").show()
                                  $("#uploads").show()
                                  $("#dforLabelComponent").text(cmpOne)
                            }
                        }
                    );
                }
            }
        }
    }
  );
});

$('.btnupDate1').click(function(e){
e.preventDefault()

  Swal.fire({
    title: 'Are you sure?',
    text: "this process will change your current data processing?",
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes!',
    cancelButtonText: 'No'
  }).then((result) => {
    
        if (result.isConfirmed) {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
          let qty = $('.product-quantity-input').val()
          let size = $('.size span.value').text()
          let material = $('.material span.value').text()
          let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
          let jenis_kertas = $('input[name=jenis_kertas]').val()
          var formDataDesign = $("#formsD").serializeArray();
          var values=[];
          
          /*
          *
          Custom size
          */
          let qtyCz = $('#Czquantity').val()
          let design1 = $('#cp1').val()
          let sizeCz = $('#Csize').val()
          let cmpOne = $('#CMP1').val()
          let materialCz = $('#Czmaterial').val()
          let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm]').val()
          let jenis_kertasCz = $('input[name=Czjenis_kertas]').val()
          let id = $('#stateIdOne').val()

          var filesx = $('#file')[0].files;
          if(filesx.length > 0){

              var formData = new FormData();
              let TotalFiles = $('#file')[0].files.length;
              let files = $('#file')[0];

              let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));

              for (let i = 0; i < TotalFiles; i++) {
                  formData.append('_token',CSRF_TOKEN);
                  formData.append('filed' + i, files.files[i]);
                  formData.append('id', $("#stateIdOne").val());
                  formData.append('qty', qtyCz);
                  formData.append('design1', design1);
                  formData.append('component', cmpOne);
                  formData.append('size', sizeCz);
                  formData.append('material', materialCz);
                  formData.append('jenis_kertas', jenis_kertasCz);
                  formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                  formData.append('formDataDesign', Cdesign);
              }

                  formData.append('TotalFiles', TotalFiles);

                

                $.ajax({
                  url: "{{route('uploadDynamiCombination')}}",
                  method: 'post',
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: 'json',                                                                                                                   
                  success: function(response){

                    if(response.success == true){

                      var filesx = $('#file')[0].files;
                      var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
    
                      var formDatax = new FormData();
                      let xFiles = $('#file')[0].files.length;
                      let files = $('#file')[0];
                      let Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;

                          for (let i = 0; i < xFiles; i++) {
                              formDatax.append('file' + i, files.files[i]);
                              formDatax.append('ds1', design1);
                              formDatax.append('_token',CSRF_TOKEN);
                              formDatax.append('component_one', cmpOne);
                              formDatax.append('qty', qty);
                              formDatax.append('defComponent', cmpOne);
                              formDatax.append('size', size);
                              formDatax.append('material', material);
                              formDatax.append('jenis_kertas', jenis_kertas);
                              formDatax.append('jenis_kertas_gsm', jenis_kertas_gsm);
                              formDatax.append('formDataDesign', Cdesign);

                          }

                          formDatax.append('TotalFiles', xFiles);

                            $.ajax({
                                url: "{{route('uploadf')}}",
                                method: 'post',
                                data: formDatax,
                                contentType: false,
                                processData: false,
                                dataType: 'json',                                                                                                                   
                                success: function(response){


                                  if(response.success == false){

                                      Swal.fire(
                                              'Information!',
                                              'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                              'error'
                                            )
                                      } 
                                        else
                                            {
                                              Swal.fire(
                                                  'Information!',
                                                  'Order has been processed.',
                                                  'success'
                                                )

                                            }
                                    }

                            });
                      }  
                        else {

                          Swal.fire(
                              'Information!',
                              'Message failed to process, contact customer service, we will immediately help you..',
                              'error'
                            )
                      }
                },
                  error: function(response){
                      console.log("error : " + JSON.stringify(response) );
                  }
              });

              } 
                else {

                      let qty = $('#Czquantity').val()
                      let size = $('#Csize').val()
                      let id = $('#stateIdOne').val()
                      let cmpOne = $('#CMP1').val()
                      let material = $('#Czmaterial').val()
                      let jenis_kertas_gsm = $('input[name=Czjenis_kertas_gsm]').val()
                      let jenis_kertas = $('input[name=Czjenis_kertas]').val()
                      var FormDataX = $("#forms").serializeArray();
                      var filesx = $('#file')[0].files;

                        if(filesx.length > 0){

                        var formData = new FormData();
                        let TotalFiles = $('#file')[0].files.length;
                        let files = $('#file')[0];

                        let Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;

                        for (let i = 0; i < TotalFiles; i++) {

                            formData.append('file' + i, files.files[i]);
                            formData.append('_token',CSRF_TOKEN);
                            formData.append('cmpcz', cmpOne);
                            formData.append('design1', design1);
                            formData.append('quantity', qtyCz);
                            formData.append('size', sizeCz);
                            formData.append('material', materialCz);
                            formData.append('jenis_kertas', jenis_kertasCz);
                            formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                            formData.append('FRMS', Cdesign);

                        }

                        formData.append('TotalFiles', TotalFiles);

                          $.ajax({
                            url: "{{route('WithoutUpdateFiles')}}",
                            method: 'post',
                            data: formData,
                            contentType: false,
                            processData: false,
                            dataType: 'json',                                                                                                                   
                            success: function(response){

                              if(response.success == true){
                                  Swal.fire(
                                      'Information!',
                                      'Order has been processed.',
                                      'success'
                                    )
                              }  
                                else {

                                    Swal.fire(
                                        'Information!',
                                        'Message failed to process, contact customer service, we will immediately help you..',
                                        'error'
                                      )
                                  }
                              },
                              error: function(response){
                                console.log("error : " + JSON.stringify(response) );
                            }
                        }
                    );
                }
                  else {    

                    let qty = $('#Czquantity').val()
                    let size = $('#Csize').val()
                    let id = $('#stateIdOne').val()
                    let cmpOne = $('#CMP1').val()
                    let material = $('#Czmaterial').val()
                    let jenis_kertas_gsm = $('input[name=Czjenis_kertas_gsm]').val()
                    let jenis_kertas = $('input[name=Czjenis_kertas]').val()
                    let design1 = $('#cp1').val()

                    var formDataDesign = $("#formsD").serializeArray();
                    let ExpandDesignArray =JSON.stringify(Object.assign({},  formDataDesign));
                      
                        UpdateWithoutNotFile(design1, id, cmpOne, qty, size, material, jenis_kertas_gsm, jenis_kertas, ExpandDesignArray).then(function(data){
                              if(data.success == false){
                                  Swal.fire(
                                      'Information!',
                                      'Order failed.',
                                      'error'
                                    )
                                } else {
                                  Swal.fire(
                                    'Information!',
                                    'Order has been processed.',
                                    'success'
                                  )

                              $("#dforLabelComponent").text(cmpOne)
                            }
                        }
                    );
                }
            }
        }
    });
}
);

async function UpdateWithoutNotFile(design1, id, component, qty, size, material, jenis_kertas_gsm, jenis_kertas, form, designs, filename, path, getOriginalName, getMimeType) {

  let data = {
              design1:design1,
              size:size,
              cmpcz:component,
              id:id,
              design1s:designs,
              quantity:qty,
              material:material,
              jenis_kertas_gsm:jenis_kertas_gsm,
              jenis_kertas: jenis_kertas,
              FRMS: form,
              filename:filename,
              filepaths:path,
              originalnames:getOriginalName,
              mime:getMimeType,
        }

  const Workoders = "{{ route('WithoutUpdateFiles') }}";
        
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

async function UpdateWithoutNotFile2(id, component, qty, size, material, jenis_kertas_gsm, jenis_kertas, form, designsc, filename, path, getOriginalName, getMimeType) {

let data = {
              size:size,
              cmpcz:component,
              design2:designsc,
              id:id,
              quantity:qty,
              material:material,
              jenis_kertas_gsm:jenis_kertas_gsm,
              jenis_kertas: jenis_kertas,
              FRMS: form,
              filename:filename,
              filepaths:path,
              originalnames:getOriginalName,
              mime:getMimeType,
      }

  const Workoders = "{{ route('UpdatedWithoutFile2') }}";
        
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

async function UpdateWithoutNotFile3(id, component, qty, size, material, jenis_kertas_gsm, jenis_kertas, form, designs, filename, path, getOriginalName, getMimeType) {

  let data = {
                size:size,
                cmpcz:component,
                id:id,
                quantity:qty,
                design3: designs,
                material:material,
                jenis_kertas_gsm:jenis_kertas_gsm,
                jenis_kertas: jenis_kertas,
                FRMS: form,
                filename:filename,
                filepaths:path,
                originalnames:getOriginalName,
                mime:getMimeType,
        }

    const Workoders = "{{ route('UpdatedWithoutFile3') }}";
          
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

  async function UpdateWithoutNotFile4(id, component, qty, size, material, jenis_kertas_gsm, jenis_kertas, form, designs, filename, path, getOriginalName, getMimeType) {

      let data = {
                    size:size,
                    cmpcz:component,
                    id:id,
                    quantity:qty,
                    material:material,
                    design4:designs,
                    jenis_kertas_gsm:jenis_kertas_gsm,
                    jenis_kertas: jenis_kertas,
                    FRMS: form,
                    filename:filename,
                    filepaths:path,
                    originalnames:getOriginalName,
                    mime:getMimeType,
            }

        const Workoders = "{{ route('UpdatedWithoutFile4') }}";
              
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

$('.btnSave2').click(function(e){
e.preventDefault()

var c = $("input[name='checkbox2[]']:checked").val();
    if( c == undefined){
        Swal.fire({
                icon: 'error',
                title: 'Design not ready.'
            })
      } 
        else 
              
            {

                let qty = $('.product-quantity-input').val()
                let size = $('.size span.value').text()
                let material = $('.material span.value').text()
                let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
                let jenis_kertas = $('input[name=jenis_kertas]').val()
                var formDataDesign = $("#forms2").serializeArray();
                var values=[];
                
                  $('input[name="checkbox2[]"]:checked').each(function () {
                    values[values.length] = (this.checked ? $(this).val() : "");
                });

          let qtyCz = $('#Czquantity2').val()
          let component2 = $('#cp2').val()
          let CMP2 = $('#CMP2').val()
          let sizeCz = $('#Csize2').val()
          let materialCz = $('#Czmaterial2').val()
          let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm2]').val()
          let jenis_kertasCz = $('input[name=Czjenis_kertas2]').val()

      Swal.fire({
            title: 'Are you sure?',
            html:
              'Preview <b>to next orders</b>, <br />' +
              '<code>'+
                'Orders: <br />'+
                size+'<br/>'+
                material+'<br/>'+
                qty+'<br/>'+
                values.join(", ")+'<br/>'+
              '</code> <br />'+'',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Order now!',
            cancelButtonText: 'Not now!'
          }).then((result) => {
            if (result.isConfirmed) {

              var designs=[];
              $('input[name="checkbox2[]"]:checked').each(function () {
                designs[designs.length] = (this.checked ? $(this).val() : "");
              });

      if(qtyCz == "" || sizeCz == "" || CMP2 == "" || materialCz == "" || jenis_kertas_gsmCz == "" || jenis_kertasCz == "" || typeof designs == 'undefined' && designs.length == 0) {

            Swal.fire(
            'question!',
            'Paper type still not loaded, make sure all fields are filled.',
            'error'
          )

        } 
          else {

          var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
              var filesx = $('#files')[0].files;

              if(filesx.length > 0){

              var formData = new FormData();
              let TotalFiles = $('#files')[0].files.length;
              let files = $('#files')[0];

              let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));

              for (let i = 0; i < TotalFiles; i++) {

                  formData.append('files' + i, files.files[i]);
                  formData.append('_token',CSRF_TOKEN);
                  formData.append('design2', component2);
                  formData.append('qty', qtyCz);
                  formData.append('cmpcz2', CMP2);
                  formData.append('size', sizeCz);
                  formData.append('material', materialCz);
                  formData.append('jenis_kertas', jenis_kertasCz);
                  formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                  formData.append('formDataDesign', Cdesign);

              }

              formData.append('TotalFiles', TotalFiles);

                $('#responseMsg').hide();

                $.ajax({
                  url: "{{route('uploadf_2')}}",
                  method: 'post',
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: 'json',                                                                                                                   
                  success: function(response){


                      if(response.success == false){

                          Swal.fire(
                                  'Information!',
                                  'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                  'error'
                                )
                          } 
                            else
                                 {

                                  SendOrdersMKT_prt2(component2, CMP2, qtyCz, sizeCz, materialCz, response.data.filename, response.data.PATHS, response.data.GetOriginalName, response.data.GetMimeType, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign).then(function(data){
                                      
                                        if(data.success == false){
                                            Swal.fire(
                                              'Information!',
                                              'Message failed to process, contact customer service, we will immediately help you..',
                                              'error'
                                            )
                                          } 
                                            else {

                                            Swal.fire({
                                              title: 'Are you sure?',
                                              text: "Order has been processed, Do you want to add more components?",
                                              icon: 'success',
                                              showCancelButton: true,
                                              confirmButtonColor: '#3085d6',
                                              cancelButtonColor: '#d33',
                                              confirmButtonText: 'Yes!',
                                              cancelButtonText: 'No'}).then((result) => {
                                                  if (result.isConfirmed) {
                                                  
                                                    $("#mjrsr3").show()
                                                    $("#btnsaVe2").hide()
                                                    $(".btnupDate2").show()
                                                    $("#uploads2").show()

                                                    $("#dforLabelComponent2").text(CMP2)
                                                    $("#dforLabelComponent2").css("position", "relative")
                                                    $("#dforLabelComponent2").css("right", "-556px")
                                                    $("#dforLabelComponent2").addClass("badge badge-success")
                                                  } 
                                                    else {

                                                    $(".Orders2").show()
                                                    $("#btnsaVe2").hide()
                                                    // $("#mjrsr3").hide()
                                                }
                                            }
                                        );

                                      }
                                 }
                            );
                        }
                      },
                      error: function(response){
                          console.log("error : " + JSON.stringify(response) );
                      }
                  });
              }
                else 
                      {
                
                        Swal.fire({
                              title: 'Are you sure?',
                              text: "do you want to continue, without uploading documents?",
                              icon: 'question',
                              showCancelButton: true,
                              confirmButtonColor: '#3085d6',
                              cancelButtonColor: '#d33',
                              confirmButtonText: 'Next!',
                              cancelButtonText: 'Cancel '
                            }).then((result) => {
                              if (result.isConfirmed) {

                                SendOrdersMKTnonFILE_prt2(component2, CMP2, qtyCz, sizeCz, materialCz, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign).then(function(data){
                                    if(data.success == false){
                                      Swal.fire(
                                        'Information!',
                                        'Message failed to process, contact customer service, we will immediately help you..',
                                        'error'
                                      )
                                        let link = '{!! route("auth_user.id")  !!}';
                                        let redirect = link;
                                            setTimeout(function(){ 
                                                    window.location.href = redirect;
                                        }, 1000);

                                    } 
                                        else {

                                              Swal.fire({
                                                title: 'Are you sure?',
                                                text: "Order has been processed, Do you want to add more components?",
                                                icon: 'success',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Yes!',
                                                cancelButtonText: 'No'
                                                }).then((result) => {
                                                  if (result.isConfirmed) {
                                                  
                                                    $("#mjrsr3").show()
                                                    $("#stateIdOne2").val(data.data)
                                                    $("#btnsaVe2").hide()
                                                    $(".btnupDate2").show()
                                                    $("#uploads2").show()
                                                    $("#dforLabelComponent2").text(CMP2)
                                                    $("#dforLabelComponent2").css("position", "relative")
                                                    $("#dforLabelComponent2").css("right", "-556px")
                                                    $("#dforLabelComponent2").addClass("badge badge-success")

                                                  } 
                                                    else {

                                                      $(".Orders2").show()
                                                      $("#btnsaVe2").hide()
                                                      // $("#mjrsr3").hide()
                                                }
                                            }
                                        );
                                    }
                                }
                            );
                        }
                    }
                );
            }
        }
    }
  })
}

});

$('.btnSave3').click(function(e){
e.preventDefault()

var c = $("input[name='checkbox3[]']:checked").val();
    if( c == undefined){
        Swal.fire({
                icon: 'error',
                title: 'Design not ready.'
            })
      } 
        else {

          let qty = $('.product-quantity-input').val()
          let size = $('.size span.value').text()
          let material = $('.material span.value').text()
          let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
          let jenis_kertas = $('input[name=jenis_kertas]').val()
          var formDataDesign = $("#forms3").serializeArray();
          var values=[];
          
        $('input[name="checkbox3[]"]:checked').each(function () {
          values[values.length] = (this.checked ? $(this).val() : "");
        });

          let qtyCz = $('#Czquantity3').val()
          let component3 = $('#cp3').val()
          let sizeCz = $('#Csize3').val()
          let cmpcz3 = $('#CMP3').val()
          let materialCz = $('#Czmaterial3').val()
          let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm3]').val()
          let jenis_kertasCz = $('input[name=Czjenis_kertas3]').val()

      Swal.fire({
            title: 'Are you sure?',
            html:
              'Preview <b>to next orders</b>, <br />' +
              '<code>'+
                'Orders: <br />'+
                size+'<br/>'+
                material+'<br/>'+
                qty+'<br/>'+
                values.join(", ")+'<br/>'+
              '</code> <br />'+'',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Order now!',
            cancelButtonText: 'Not now!'
          }).then((result) => {
            if (result.isConfirmed) {

              var designs=[];
              $('input[name="checkbox3[]"]:checked').each(function () {
                designs[designs.length] = (this.checked ? $(this).val() : "");
              });

      if(qtyCz = "" || sizeCz == "" || materialCz == "" || cmpcz3 == "" || jenis_kertas_gsmCz == "" || jenis_kertasCz == "" || typeof designs == 'undefined' && designs.length == 0) {

            Swal.fire(
            'question!',
            'Paper type still not loaded, make sure all fields are filled.',
            'error'
          )

      } 
          else {

          var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
              var filesx = $('#files3')[0].files;

              if(filesx.length > 0){

              var formData = new FormData();
              let TotalFiles = $('#files3')[0].files.length;
              let files = $('#files3')[0];

              let Cdesign = JSON.stringify(Object.assign({},  formDataDesign));

              for (let i = 0; i < TotalFiles; i++) {
                
                formData.append('files' + i, files.files[i]);
                formData.append('_token',CSRF_TOKEN);
                formData.append('design3', component3);
                formData.append('component', cmpcz3);
                formData.append('qty', qtyCz);
                formData.append('size', sizeCz);
                formData.append('material', materialCz);
                formData.append('jenis_kertas', jenis_kertasCz);
                formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                formData.append('formDataDesign', Cdesign);

            }

            formData.append('TotalFiles', TotalFiles);

                $.ajax({
                  url: "{{route('uploadf_3')}}",
                  method: 'post',
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: 'json',                                                                                                                   
                  success: function(response){

                    $('#err_file').removeClass('d-block');
                    $('#err_file').addClass('d-none');

                      if(response.success == false){

                          Swal.fire(
                                  'Information!',
                                  'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                  'error'
                                )
                      }  
                        else {
                    
                         SendOrdersMKT_prt3(component3, cmpcz3, qtyCz, sizeCz, materialCz, response.data.filename, response.data.PATHS, response.data.GetOriginalName, response.data.GetMimeType, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign).then(function(data){
                                  
                          if(data.success == false){
                                  Swal.fire(
                                    'Information!',
                                    'Message failed to process, contact customer service, we will immediately help you..',
                                    'error'
                                  )
                                } 
                                  else {

                                      Swal.fire({
                                      title: 'Are you sure?',
                                      text: "Order has been processed, Do you want to add more components?",
                                      icon: 'success',
                                      showCancelButton: true,
                                      confirmButtonColor: '#3085d6',
                                      cancelButtonColor: '#d33',
                                      confirmButtonText: 'Yes!',
                                      cancelButtonText: 'No'}).then((result) => {
                                          if (result.isConfirmed) {
                                                  
                                              $("#mjrsr4").show()
                                              $("#btnsaVe3").hide()
                                              $(".btnupDate3").show()
                                              $("#uploads3").show()

                                              $("#dforLabelComponent3").text(cmpcz3)
                                              $("#dforLabelComponent3").css("position", "relative")
                                              $("#dforLabelComponent3").css("right", "-556px")
                                              $("#dforLabelComponent3").addClass("badge badge-success")

                                            } 
                                              else {

                                                  $(".Orders3").show()
                                                  $("#btnsaVe3").hide()
                                                  // $("#mjrsr4").hide()
                                          }
                                      }
                                  );
                              }
                          }
                      );
                    }
                  },
                  error: function(response){
                      console.log("error : " + JSON.stringify(response) );
                  }
              });
            }
                else 
                      {
                
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "do you want to continue, without uploading documents?",
                            icon: 'question',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Next!',
                            cancelButtonText: 'Cancel '
                          }).then((result) => {
                                  if (result.isConfirmed) {
                                    SendOrdersMKTnonFILE_prt3(component3, cmpcz3, qtyCz, sizeCz, materialCz, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign).then(function(data){
                                 
                                        if(data.success == false){
                                          Swal.fire(
                                            'Information!',
                                            'Message failed to process, contact customer service, we will immediately help you..',
                                            'error'
                                          )

                                          let link = '{!! route("auth_user.id")  !!}';
                                          let redirect = link;
                                              setTimeout(function(){ 
                                                      window.location.href = redirect;
                                          }, 1000);
                                        } 
                                          else {
                                          
                                            Swal.fire({
                                                title: 'Are you sure?',
                                                text: "Order has been processed, Do you want to add more components?",
                                                icon: 'success',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Yes!',
                                                cancelButtonText: 'No'
                                                }).then((result) => {
                                                  if (result.isConfirmed) {
                                                          
                                                      $("#mjrsr4").show()
                                                      $("#stateIdOne3").val(data.data)
                                                      $("#btnsaVe3").hide()
                                                      $(".btnupDate3").show()
                                                      $("#uploads3").show()
                                                      $("#dforLabelComponent3").text(cmpcz3)
                                                      $("#dforLabelComponent3").css("position", "relative")
                                                      $("#dforLabelComponent3").css("right", "-556px")
                                                      $("#dforLabelComponent3").addClass("badge badge-success")

                                                  } 
                                                      else {
                                                   
                                                        $(".Orders3").show()
                                                        $("#btnsaVe3").hide()
                                                        // $("#mjrsr3").show()
                                                    }
                                                }
                                            );
                                        }
                                    }
                                );
                              }
                          }
                      );
                  }
              }
          }
      })
    }
  }
);


$('.btnSave4').click(function(e){
e.preventDefault()

var c = $("input[name='checkbox4[]']:checked").val();
    if( c == undefined){
        Swal.fire({
                icon: 'error',
                title: 'Design not ready.'
            })
      } 
        else {

          let qty = $('.product-quantity-input').val()
          let size = $('.size span.value').text()
          let material = $('.material span.value').text()
          let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
          let jenis_kertas = $('input[name=jenis_kertas]').val()
          var formDataDesign = $("#forms4").serializeArray();
          var values=[];
          
        $('input[name="checkbox4[]"]:checked').each(function () {
          values[values.length] = (this.checked ? $(this).val() : "");
        });

          let qtyCz = $('#Czquantity4').val()
          let sizeCz = $('#Csize4').val()
          let design4 = $('#cp4').val()
          let materialCz = $('#Czmaterial4').val()
          let cmpcz4 = $('#CMP4').val()
          let jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm4]').val()
          let jenis_kertasCz = $('input[name=Czjenis_kertas4]').val()

      Swal.fire({
            title: 'Are you sure?',
            html:
              'Preview <b>to next orders</b>, <br />' +
              '<code>'+
                'Orders: <br />'+
                size+'<br/>'+
                material+'<br/>'+
                qty+'<br/>'+
                values.join(", ")+'<br/>'+
              '</code> <br />'+'',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Order now!',
            cancelButtonText: 'Not now!'
          }).then((result) => {
            if (result.isConfirmed) {

              var designs=[];
              $('input[name="checkbox4[]"]:checked').each(function () {
                designs[designs.length] = (this.checked ? $(this).val() : "");
              });

      if(qtyCz == "" || sizeCz == "" || materialCz == "" || cmpcz4 == "" || jenis_kertas_gsmCz == "" || jenis_kertasCz == "" || typeof designs == 'undefined' && designs.length == 0) {

            Swal.fire(
            'question!',
            'Paper type still not loaded, make sure all fields are filled.',
            'error'
          )

        } 
          else {

              var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
              var filesx = $('#files4')[0].files;

              if(filesx.length > 0){

              var formData = new FormData();
              let TotalFiles = $('#files4')[0].files.length;
              let files = $('#files4')[0];
           
              let Cdesign =JSON.stringify(Object.assign({},  formDataDesign));
              
              for (let i = 0; i < TotalFiles; i++) {
                
                formData.append('files' + i, files.files[i]);
                formData.append('_token',CSRF_TOKEN);
                formData.append('qty', qtyCz);
                formData.append('design4', design4);
                formData.append('component', cmpcz4);
                formData.append('size', sizeCz);
                formData.append('material', materialCz);
                formData.append('jenis_kertas', jenis_kertasCz);
                formData.append('jenis_kertas_gsm', jenis_kertas_gsmCz);
                formData.append('formDataDesign', Cdesign);

            }

            formData.append('TotalFiles', TotalFiles);

                $('#responseMsg').hide();

                $.ajax({
                  url: "{{route('uploadf_4')}}",
                  method: 'post',
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: 'json',                                                                                                                   
                  success: function(response){

                    $('#err_file').removeClass('d-block');
                    $('#err_file').addClass('d-none');

                    // if(response.data.success == 1){

                    //   $('#responseMsg').removeClass("alert-danger");
                    //   $('#responseMsg').addClass("alert-success");
                    //   $('#responseMsg').html(response.data.message);
                    //   $('#responseMsg').show();

                    //   $('#filepreview4').show();
                    //   $('#filepreview4 img, #filepreview4 a').hide();
                    //   if(response.data.extension == 'jpg' || response.data.extension == 'jpeg' || response.data.extension == 'png'){

                    //       $('#filepreview4 img').attr('src',response.data.filepath);
                    //       $('#filepreview4 img').show();

                    //   }
                    //     else{

                    //       $('#filepreview4 a').attr('href',response.data.filepath).show();
                    //       $('#filepreview4 a').show();
                    //   }

                    //    SendOrdersMKT_prt4(design4, cmpcz4, qtyCz, sizeCz, materialCz, response.data.filename, response.data.PATHS, response.data.GetOriginalName, response.data.GetMimeType, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign).then(function(data){
                                
                    //             if(data.success == false){
                    //               Swal.fire(
                    //                 'Information!',
                    //                 'Message failed to process, contact customer service, we will immediately help you..',
                    //                 'error'
                    //               )

                    //             } else {

                    //                   Swal.fire({
                    //                   title: 'Are you sure?',
                    //                   text: "Order has been processed, Do you want to add more components?",
                    //                   icon: 'success',
                    //                   showCancelButton: true,
                    //                   confirmButtonColor: '#3085d6',
                    //                   cancelButtonColor: '#d33',
                    //                   confirmButtonText: 'Yes!',
                    //                   cancelButtonText: 'No'}).then((result) => {
                    //                       if (result.isConfirmed) {
                                                  
                    //                           // $("#mjrsr4").show()
                    //                           $("#btnsaVe4").hide()
                    //                           $(".btnupDate4").show()
                    //                           $("#uploads4").show()

                    //                           $("#dforLabelComponent4").text(cmpcz4)
                    //                           $("#dforLabelComponent4").css("position", "relative")
                    //                           $("#dforLabelComponent4").css("right", "-556px")
                    //                           $("#dforLabelComponent4").addClass("badge badge-success")

                    //                         } 
                    //                           else {

                    //                               $(".Orders4").show()
                    //                               $("#btnsaVe4").hide()
                    //                               // $("#mjrsr4").hide()
                    //                       }
                    //                   }
                    //               );

                    //             }
                    //       });

                    // } 

                    if(response.success == false){

                          Swal.fire(
                                  'Information!',
                                  'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                                  'error'
                                )
                          }  
                          else {

                          // SendOrdersMKT_prt3(component3, cmpcz3, qtyCz, sizeCz, materialCz, response.data.filename, response.data.PATHS, response.data.GetOriginalName, response.data.GetMimeType, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign).then(function(data){
                       SendOrdersMKT_prt4(design4, cmpcz4, qtyCz, sizeCz, materialCz, response.data.filename, response.data.PATHS, response.data.GetOriginalName, response.data.GetMimeType, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign).then(function(data){
                                  
                          if(data.success == false){
                                  Swal.fire(
                                    'Information!',
                                    'Message failed to process, contact customer service, we will immediately help you..',
                                    'error'
                                  )
                                } 
                                  else {

                                      Swal.fire({
                                      title: 'Are you sure?',
                                      text: "Order has been processed, Do you want to add more components?",
                                      icon: 'success',
                                      showCancelButton: true,
                                      confirmButtonColor: '#3085d6',
                                      cancelButtonColor: '#d33',
                                      confirmButtonText: 'Yes!',
                                      cancelButtonText: 'No'}).then((result) => {
                                          if (result.isConfirmed) {
                                                  
                                              $("#mjrsr5").show()
                                              $("#btnsaVe4").hide()
                                              $(".btnupDate4").show()
                                              $("#uploads4").show()

                                              $("#dforLabelComponent4").text(cmpcz3)
                                              $("#dforLabelComponent4").css("position", "relative")
                                              $("#dforLabelComponent4").css("right", "-556px")
                                              $("#dforLabelComponent4").addClass("badge badge-success")

                                            } 
                                              else {

                                                  $(".Orders4").show()
                                                  $("#btnsaVe4").hide()
                                                  // $("#mjrsr4").hide()
                                          }
                                      }
                                  );
                              }
                          }
                        );
}
                    //   else if(response.data.success == 2){

                    //   $('#responseMsg').removeClass("alert-success");
                    //   $('#responseMsg').addClass("alert-danger");
                    //   $('#responseMsg').html(response.data.message);
                    //   $('#responseMsg').show();
                    // }
                    //     else{

                    //         $('#err_file').text(response.data.error);
                    //         $('#err_file').removeClass('d-none');
                    //         $('#err_file').addClass('d-block');
                    //       } 
                        },
                      error: function(response){
                          console.log("error : " + JSON.stringify(response) );
                      }
                  });
              }
                else 
                      {
                
                          Swal.fire({
                              title: 'Are you sure?',
                              text: "do you want to continue, without uploading documents?",
                              icon: 'question',
                              showCancelButton: true,
                              confirmButtonColor: '#3085d6',
                              cancelButtonColor: '#d33',
                              confirmButtonText: 'Next!',
                              cancelButtonText: 'Cancel '
                            }).then((result) => {
                              if (result.isConfirmed) {

                                SendOrdersMKTnonFILE_prt4(design4, cmpcz4, qtyCz, sizeCz, materialCz, jenis_kertas_gsmCz, jenis_kertasCz, formDataDesign).then(function(data){
                                    if(data.success == false){
                                      Swal.fire(
                                        'Information!',
                                        'Message failed to process, contact customer service, we will immediately help you..',
                                        'error'
                                      )

                                        let link = '{!! route("auth_user.id")  !!}';
                                        let redirect = link;
                                            setTimeout(function(){ 
                                                    window.location.href = redirect;
                                        }, 1000);
                                } 
                                  else 
                                        {

                                          Swal.fire({
                                            title: 'Are you sure?',
                                            text: "Order has been processed, Do you want to add more components?",
                                            icon: 'success',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Yes!',
                                            cancelButtonText: 'No'
                                            }).then((result) => {
                                              if (result.isConfirmed) {
                                                  // $("#mjrsr4").show()
                                                  $("#stateIdOne4").val(data.data)
                                                  $("#btnsaVe4").hide()
                                                  $(".btnupDate4").show()
                                                  $("#uploads4").show()
                                                  $("#dforLabelComponent4").text(cmpOne)
                                                  $("#dforLabelComponent4").css("position", "relative")
                                                  $("#dforLabelComponent4").css("right", "-556px")
                                                  $("#dforLabelComponent4").addClass("badge badge-success")

                                              } 
                                                  else {
                                                
                                                    $(".Orders4").show()
                                                    $("#btnsaVe4").hide()
                                                    // $("#mjrsr3").hide()

                                                    // next step add more component
                                                }
                                            }
                                        );
                                    }
                                }
                            );
                          }
                      }
                  );
              }
          }
      }
  })
}

});


function FirstLoadComponent() {
return new Promise((resolve) => {
  
    $(".rd-i-btn").html("Kirim")
    $('.rd-i-btn').removeClass("rd-i-btn");
    $("#size-tool-custom").hide()
    $("#design-image-editor").hide()
    $('#prvText').hide()
    $(".share-and-save").hide()
    $("#mjrs").hide()
    $(".Orders1SingleComponent").hide()
    $(".Orders1").hide()
    $(".Orders2").hide()
    $(".Orders3").hide()
    $(".Orders4").hide()
    $(".background-color-selector").hide()
    $(".submit-button").hide()
    $(".pd-pane-item-details").hide()
    $(".switch__closed").html("Close Box")
    $(".switch__open").html("Open Box")
    $(".product-name").html("Box 3D ordering :")
    $(".product-info").hide()
    $("#uploads").show()
    $("#uploads2").show()
    $("#mv_tp").hide()
    $("#uploads3").show()
    $("#uploads4").show()
    $("#tools-jenis-gsm").hide()
    $("#tools-jenis-kertas").hide()
    $("#sendingKM").css("display","none")
    $(".rd-i-tool-pallette-button > svg").css("display","none")
    $('#region-selector').css("display","none")
    $(".unit-price").hide()
    $(".ds").hide()
    $(".rd-i-tool-pallette-button-simple").css("display","none")
    $(".subtotal").hide()
    $('#mjrsr2').hide()
    $("#mjrsc1").hide()
    $('#mjrsr3').hide()
    $('#mjrsr4').hide()
    $('#OrderReady').hide()
    $(".product-description").css("display", "none")
    $(".boxCzForSize").show()
    $(".boxCzForSize").css("position", "relative")
    $(".boxCzForSize").css("right", "-90px")
    $(".boxCzForSize").css("top", "-325px")

  resolve();
});
}

function LoadPackageVendors() {
return new Promise((resolve) => {
    zE(function() {
        zE.hide();
    });
  resolve();
});
}

function HandleTexArea() {
return new Promise((resolve) => {
  var maxchars = 150;
    $('textarea').keyup(function () {
        var tlength = $(this).val().length;
        $(this).val($(this).val().substring(0, maxchars));
        var tlength = $(this).val().length;
        remain = maxchars - parseInt(tlength);
        $('#remain').text(remain);
    });
  resolve();
});
}

async function fnAsyncLoadComponents() {
await FirstLoadComponent();
await LoadPackageVendors();
await HandleTexArea();
}

setTimeout(() => { 
fnAsyncLoadComponents();
}, 2000);

setTimeout(() => {
wdtLoading.done();
}, 13500);

setTimeout(() => {
$(".klaviyo-form").css("display","none")
$(".kl-private-reset-css-Xuajs1").css("display","none")
}, 35995);

}(jQuery));

(function($) {

window.onbeforeunload = function() {
return "Guys are you sure leave this page ?";
}

function HandleCanvasComponent() {
return new Promise((resolve) => {
        $('body').on('click','.p-dap',function(e){
        $('.pdesigner-box-viewer').css("display","none");
        $('.size-tool-stock').css("display","none");
        $('.pdesigner-box-viewer > canvas').css("position","absoulte");
        $(".product-description").css("display", "none")
        $(".product-material").css("display", "none")
        $(".quantity").css("display", "none")
        $(".product-size").css("display", "none")
        $(".size").css("display", "none")
        $(".material").css("display", "none")
        $(".product-quantity").css("display", "none")
        $(".print-method").css("display", "none")
        $(".jk-m").css("top", "-373px")
        $(".jk-l").css("top", "-367px")
        $(".btnupDate1").css("display","none")
        $(".btnupDate2").css("display","none")
        $(".btnupDate3").css("display","none")
        $(".btnupDate4").css("display","none")
        $("#mjrsc1").hide()
        $("#tools-component").hide()
        $("#mjrs").show()
        $('#mv_tp').show()

        $("#OrderReady").hide()
        $("#sendingKM").hide()
        $("#sample_cetakan").css("top", "-280px")
        $("#tool-pallette").css("display","inline")
        $("#tool-details").css("display","none")
        $(".ds").css("display","inline")
        $(".jk-l").hide()
        $(".jk-m").hide()
    });
  resolve();
});
}


function HandleComponentMaterialItem() {
    return new Promise((resolve) => {
      $('body').on('click','.rd-i-material-item > .material-name',function(e){
          e.preventDefault();
          if($(this, '> h3').text() == 'White') {
              $(".jk-m").css("top", "-523px")
              $(".jk-m").css("position", "relative")
              $(".jk-l").css("position", "relative")
              $(".jk-l").css("top", "-523px")
              $("#mv_tp").hide()

              $(".boxCzForSize").show()
              $(".boxCzForSize").css("position", "relative")
              $(".boxCzForSize").css("right", "-90px")
              $(".boxCzForSize").css("top", "-327px")
            } 

            if($(this, '> h3').text() == 'Dreamcoat') {
              $(".jk-m").css("top", "-523px")
              $(".jk-m").css("position", "relative")
              $(".jk-l").css("position", "relative")
              $(".jk-l").css("top", "-523px")
              $("#mv_tp").hide()

              $(".boxCzForSize").show()
              $(".boxCzForSize").css("position", "relative")
              $(".boxCzForSize").css("right", "-90px")
              $(".boxCzForSize").css("top", "-409px")

            } 

            if($(this, '> h3').text() == 'Kraft') {
              $(".jk-m").css("top", "-523px")
              $(".jk-m").css("position", "relative")
              $(".jk-l").css("position", "relative")
              $(".jk-l").css("top", "-523px")
              $(".print-method").css("display", "inline")
              $("#mv_tp").hide()

              $(".boxCzForSize").show()
              $(".boxCzForSize").css("position", "relative")
              $(".boxCzForSize").css("right", "-90px")
              $(".boxCzForSize").css("top", "-327px")

            } 
        });
      resolve();
    });
  }

async function fnAsyncLoadCanvasComponents() {
await HandleCanvasComponent();
}

async function fnAsyncLoadMaterialItemComponents() {
await HandleComponentMaterialItem();
}

async function fnAsyncLoadMaterialDescriptionComponents() {
await HandleComponentMaterialDescription();
}


function HandleComponentMaterialDescription() {
return new Promise((resolve) => {
  $('body').on('click','.rd-i-material-item > .material-description',function(e){
      e.preventDefault();
      if($(this, '> p').text() == 'Premium bright white cardboard.') {
          $(".jk-m").css("top", "-523px")
          $(".jk-m").css("position", "relative")
          $(".jk-l").css("position", "relative")
          $(".jk-l").css("top", "-523px")
          $("#mv_tp").hide()

          $(".boxCzForSize").show()
          $(".boxCzForSize").css("position", "relative")
          $(".boxCzForSize").css("right", "-90px")
          $(".boxCzForSize").css("top", "-409px")
        } 

        if($(this, '> p').text() == 'Classic matte white cardboard printed with a satin finish.') {
          $(".jk-m").css("top", "-523px")
          $(".jk-m").css("position", "relative")
          $(".jk-l").css("position", "relative")
          $(".jk-l").css("top", "-523px")
          $("#mv_tp").hide()

          $(".boxCzForSize").show()
          $(".boxCzForSize").css("position", "relative")
          $(".boxCzForSize").css("right", "-90px")
          $(".boxCzForSize").css("top", "-327px")
        } 

        if($(this, '> p').text() == 'Natural matte brown cardboard printed with a satin finish.') {
          $(".jk-m").css("top", "-523px")
          $(".jk-m").css("position", "relative")
          $(".jk-l").css("position", "relative")
          $(".jk-l").css("top", "-523px")
          $(".print-method").css("display", "inline")
          $("#mv_tp").hide()

          $(".boxCzForSize").show()
          $(".boxCzForSize").css("position", "relative")
          $(".boxCzForSize").css("right", "-90px")
          $(".boxCzForSize").css("top", "-327px")
        } 
    });
  resolve();
});
}

setTimeout(() => { 

fnAsyncLoadCanvasComponents();

fnAsyncLoadMaterialItemComponents();

fnAsyncLoadMaterialDescriptionComponents();

}, 2000);

}(jQuery));

$(document).ready(function(){
$('#launcher').load(function(){
      $("#launcher").css("display", "none"); 
      zE(function() {
  zE.hide();
});
});

$('body').on('click','button.rd-i-tool-pallette-button-simple',function(e){
e.preventDefault();
if($(this, ' > p').text() == 'reset') {
    $("#tools-jenis-gsm").hide()
    $("#tools-jenis-kertas").hide()
    // alert('ini material')
    $(".ds").hide()
    $("#sendingKM").hide()
  }
});

setTimeout(() => {

$('body').on('click','button.rd-i-tool-pallette-button',function(e){
e.preventDefault();

  if($(this, ' > p').text() == 'design') {
    $("#tools-component").show()
    $("#tools-jenis-gsm").hide()
    $("#tools-jenis-kertas").hide()
      // $(this, '> p').html('DECORATIF')
    $("#mv_tp").show()  
    $(".ds").show()
    $("#sendingKM").hide()
    // $('#tool-details').css("display","none")
    $("#OrderReady").hide()
    $(".quantity").show()
    $(".size").show()
    $(".material").show()
    $("#mjrsc1").show()
    $("#mjrs").hide()
    $("#btnupDate").hide()
    $("#mjrsr2").hide()
    $("#mjrsr3").hide()
    $("#mjrsr4").hide()
    $(".boxCz").css("right", "645px")
    $(".boxCz").css("top", "198px")
    $("#btnsaVeSingleComponent").show()
    $('.pdesigner-box-viewer').css("display","inline");
    $('.pdesigner-box-viewer > canvas').css("position","absoulte");
    $(".product-description").hide()
    $(".product-material").show()
    $(".product-size").show()
    $(".product-quantity").show()
    $(".print-method").hide()
    $("#tool-details").show()
    $(".jk-l").show()
    $(".jk-m").show()
    $(".boxCzForSize").show()
    $(".boxCzForSize").css("position", "relative")
    $(".boxCzForSize").css("right", "-90px")
    $(".boxCzForSize").css("top", "-325px")

  }

  if($(this, ' > p').text() == 'size') {
 
    $("#tools-jenis-gsm").hide()
    $("#tools-jenis-kertas").hide()
    $(".size > .item").show()
    $(".quantity > .item").show()
    $(".material > .item").show()

    $("#tool-details").css("display","inline")
    $(".product-description").css("display", "none")
    $(".quantity").show()
    $(".size").show()
    $(".material").show()
    $(".boxCzForSize").show()
    $(".boxCzForSize").css("position", "relative")
    $(".boxCzForSize").css("right", "-90px")
    $(".boxCzForSize").css("top", "-327px")
    $("#btnsaVeSingleComponent").show()
    $(".product-info").show()
    $('#mjrsc1').hide()
    $('#mv_tp').hide()
    $("#OrderReady").hide()
    $("#OrderReady").css("top","-15px")
    $(".ds").show()
    $("#sendingKM").hide()
    $("#mjrs").hide()
    $("#mjrsr2").hide()
    $("#mjrsr3").hide()
    $("#mjrsr4").hide()
    $('.pdesigner-box-viewer').css("display","inline")
    $("#boxCUSTOMforSize").show()
    $("#tools-component").show()

  }
  
  if($(this, ' > p').text() == 'material') {
    
    $('#mjrsc1').hide()
    $("#OrderReady").hide()
    $(".jk-m").css("top", "-523px")
    $("#tools-component").hide()
    $(".jk-m").css("position", "absolute")
    $(".jk-l").css("position", "absolute")
    $(".jk-l").css("top", "-469px")
    $(".product-description").hide()
    $(".product-material").show()
    $(".product-size").show()
    $(".size").show()
    $('#mv_tp').hide()
    $(".quantity").hide()
    $(".material").show()
    $(".product-quantity").show()
    $(".print-method").show()
    $("#tool-details").show()
    $(".jk-l").show()
    $(".jk-m").show()
    $(".ds").show()
    $("#btnsaVeSingleComponent").show()
    $("#tools-jenis-gsm").show()
    $("#tools-jenis-kertas").show()
    $(".ds").show()
    $("#sendingKM").hide()
    $("#mjrs").hide()
    $("#mjrsr2").hide()
    $("#mjrsr3").hide()
    $("#mjrsr4").hide()
    $('.pdesigner-box-viewer').css("display","inline");
    $("#tools-component").hide()

    $(".boxCzForSize").show()
    $(".boxCzForSize").css("position", "relative")
    $(".boxCzForSize").css("right", "-90px")
    $(".boxCzForSize").css("top", "-327px")

  }

});
});

}, 2000);

$('body').on('click','button.scroll-list-option',function(){
$(".submit-button").hide();
});

  async function SendOrdersMKT(design1, component, qty, size, material, filename, path, getOriginalName, getMimeType, jenis_kertas_gsm, jenis_kertas, form) {

        let data = {
                  design1:design1,
                  size:size,
                  cmpcz:component,
                  quantity:qty,
                  material:material,
                  filename:filename,
                  filepaths:path,
                  originalnames:getOriginalName,
                  mime:getMimeType,
                  jenis_kertas_gsm:jenis_kertas_gsm,
                  jenis_kertas: jenis_kertas,
                  design: form
              }

      const Workoders = "{{ route('orders.mkt') }}";
              
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

  async function SendOrdersMKT_prt2(component, qty, size, material, filename, path, getOriginalName, getMimeType, jenis_kertas_gsm, jenis_kertas, form) {

      let data = {
                size:size,
                quantity:qty,
                component:component,
                material:material,
                filename:filename,
                filepaths:path,
                originalnames:getOriginalName,
                mime:getMimeType,
                jenis_kertas_gsm:jenis_kertas_gsm,
                jenis_kertas: jenis_kertas,
                design: form
            }

      const Workoders = "{{ route('orders.mkt.prt2') }}";
            
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

     async function SendOrdersMKT_prt3(component3, component, qty, size, material, filename, path, getOriginalName, getMimeType, jenis_kertas_gsm, jenis_kertas, form) {

          let data = {
                    size:size,
                    design3:component3,
                    component:component,
                    quantity:qty,
                    material:material,
                    filename:filename,
                    filepaths:path,
                    originalnames:getOriginalName,
                    mime:getMimeType,
                    jenis_kertas_gsm:jenis_kertas_gsm,
                    jenis_kertas: jenis_kertas,
                    design: form
                }

          const Workoders = "{{ route('orders.mkt.prt3') }}";
                
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

    async function SendOrdersMKT_prt4(design4, component, qty, size, material, filename, path, getOriginalName, getMimeType, jenis_kertas_gsm, jenis_kertas, form) {

        let data = {
                  size:size,
                  design4:design4,
                  component:component,
                  quantity:qty,
                  material:material,
                  filename:filename,
                  filepaths:path,
                  originalnames:getOriginalName,
                  mime:getMimeType,
                  jenis_kertas_gsm:jenis_kertas_gsm,
                  jenis_kertas: jenis_kertas,
                  design: form
              }

        const Workoders = "{{ route('orders.mkt.prt4') }}";
              
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

  async function SendOrdersMKTnonFILE(design1, component, qty, size, material, jenis_kertas_gsm, jenis_kertas, form, defComponent) {

        let data = {
                  design1:design1,
                  size:size,
                  definitionSingleComponent:defComponent,
                  componentcz:component,
                  quantity:qty,
                  material:material,
                  jenis_kertas_gsm:jenis_kertas_gsm,
                  jenis_kertas: jenis_kertas,
                  design: form
              }

                const Workoders = "{{ route('orders.nonfile.mkt') }}";
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

  async function FetchLastComponent() {

    let data = {}

            const Workoders = "{{ route('orders.nonfile.LastComponentIndex') }}";
                  
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

  async function SendOrdersMKTnonFILE_prt2(component2, component, qty, size, material, jenis_kertas_gsm, jenis_kertas, form) {

        let data = {
                    size:size,
                    design2:component2,
                    quantity:qty,
                    material:material,
                    component:component,
                    jenis_kertas_gsm:jenis_kertas_gsm,
                    jenis_kertas: jenis_kertas,
                    design: form
              }

        const Workoders = "{{ route('orders.nonfile.mkt.prt2') }}";
              
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

     async function SendOrdersMKTnonFILE_prt3(component3, component, qty, size, material, jenis_kertas_gsm, jenis_kertas, form) {

        let data = {
                    design3:component3,
                    size:size,
                    component:component,
                    quantity:qty,
                    material:material,
                    jenis_kertas_gsm:jenis_kertas_gsm,
                    jenis_kertas: jenis_kertas,
                    design: form
              }

        const Workoders = "{{ route('orders.nonfile.mkt.prt3') }}";
              
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

  async function SendOrdersMKTnonFILE_prt4(design4, component, qty, size, material, jenis_kertas_gsm, jenis_kertas, form) {

      let data = {
                size:size,
                quantity:qty,
                design4:design4,
                material:material,
                component:component,
                jenis_kertas_gsm:jenis_kertas_gsm,
                jenis_kertas: jenis_kertas,
                design: form
            }

      const Workoders = "{{ route('orders.nonfile.mkt.prt4') }}";
            
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

  function getFileName (str) {
    if (str.length > 22) {
      return str.substr(0, 11) + '...' + str.substr(-11)
    }

    return str
  }
  
  /** 
    component Single Component
  */
  document.getElementById('filessd').addEventListener('change', function(e) {
    var list = document.getElementById('filenssd');
    list.innerHTML = '';
    for (var i = 0; i < this.files.length; i++) {
      list.innerHTML += (i + 1) + '. ' + getFileName(this.files[i].name) + '\n';
    }
    if (list.innerHTML == '') list.style.display = 'none';
    else list.style.display = 'block';
  });

    // $('input[type="file"]#file').change(function(e){
    //     var geekss = getFileName(e.target.files[0].name);
    //     $('#filen').text(geekss);
    // });

      /** 
        component #1
      */
    document.getElementById('file').addEventListener('change', function(e) {
      var list = document.getElementById('filen');
      list.innerHTML = '';
      for (var i = 0; i < this.files.length; i++) {
        list.innerHTML += (i + 1) + '. ' + getFileName(this.files[i].name) + '\n';
      }
      if (list.innerHTML == '') list.style.display = 'none';
      else list.style.display = 'block';
    });

    // $('input[type="file"]#files').change(function(e){
    //     var geekss = getFileName(e.target.files[0].name);
    //     $('#filen2').text(geekss);
    // });


    /** 
      component #2
    */
    document.getElementById('files').addEventListener('change', function(e) {
      var list = document.getElementById('filen2');
      list.innerHTML = '';
      for (var i = 0; i < this.files.length; i++) {
        list.innerHTML += (i + 1) + '. ' + getFileName(this.files[i].name) + '\n';
      }
      if (list.innerHTML == '') list.style.display = 'none';
      else list.style.display = 'block';
    });

     /** 
      component #3
    */
    document.getElementById('files3').addEventListener('change', function(e) {
      var list = document.getElementById('filen3');
      list.innerHTML = '';
      for (var i = 0; i < this.files.length; i++) {
        list.innerHTML += (i + 1) + '. ' + getFileName(this.files[i].name) + '\n';
      }
      if (list.innerHTML == '') list.style.display = 'none';
      else list.style.display = 'block';
    });

    /** 
    component #3
    */
    document.getElementById('files4').addEventListener('change', function(e) {
      var list = document.getElementById('filen4');
      list.innerHTML = '';
      for (var i = 0; i < this.files.length; i++) {
        list.innerHTML += (i + 1) + '. ' + getFileName(this.files[i].name) + '\n';
      }
      if (list.innerHTML == '') list.style.display = 'none';
      else list.style.display = 'block';
    });

    // $('input[type="file"]#files').change(function(e){
    //     var geekss = getFileName(e.target.files[0].name);
    //     $('#filen2').text(geekss);
    // });

$('.Orders4').click(function(e){
e.preventDefault();
var values=[];
$('input[name="checkbox[]"]:checked').each(function () {
  values[values.length] = (this.checked ? $(this).val() : "");
});

$(".container-3PFIa").hide() 
let qty = $('.product-quantity-input').val()
let size = $('.size span.value').text()
let material = $('.material span.value').text()
let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
let jenis_kertas = $('input[name=jenis_kertas]').val()
var formData = $("#forms").serializeArray();

Swal.fire({
      title: 'Are you sure? #fixedOrders 4',
      html:
        'Preview <b>to next orders</b>, <br />' +
        '<code>'+
          'Orders: <br />'+
          size+'<br/>'+
          material+'<br/>'+
          qty+'<br/>'+
          values.join(", ")+'<br/>'+
        '</code> <br />'+
        '',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Order now!',
      cancelButtonText: 'Not now!'
    }).then((result) => {
      if (result.isConfirmed) {

        var designs=[];
        $('input[name="checkbox[]"]:checked').each(function () {
          designs[designs.length] = (this.checked ? $(this).val() : "");
        });

          var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
              var files = $('#file')[0].files;

                var fd = new FormData();

                fd.append('file',files[0]);
                fd.append('_token',CSRF_TOKEN);

                $('#responseMsg').hide();
                $.ajax({
                  url: "{{route('orders.order_customers.to.mkt')}}",
                  method: 'post',
                  data: fd,
                  contentType: false,
                  processData: false,
                  dataType: 'json',
                  beforeSend: function(evt) {   
                      const bfrSend = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 100000,
                          timerProgressBar: true,
                          didOpen: (toast) => {
                              toast.addEventListener('mouseenter', Swal.stopTimer)
                              toast.addEventListener('mouseleave', Swal.resumeTimer)
                          }
                        })
                        
                        bfrSend.fire({
                            icon: 'info',
                            title: 'Retrieving data, data is being processed..'
                        })

                    },
                  success: function(response){

                    if(response.status == false){

                      Swal.fire(
                              'Information!',
                              'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                              'error'
                            )
                    }  else {
                      
                      if(response.success == true){
                        Swal.fire(
                              'Information!',
                              'Order has been processed, We have sent your file to our marketing team.',
                              'success'
                            )
                      } 
                        else {
                            
                          Swal.fire(
                              'Information!',
                              'Message failed to process, contact customer service, we will immediately help you.. , because you have sent this file before, if you experience problems, please contact our customer service immediately.',
                              'error'
                            )
                        }
                    }
                },
                error: function(response){
                    console.log("error : " + JSON.stringify(response) );
                  }
                }
            );
          // }                                                                                                                                          
      }
  })
});

$('.Orders3').click(function(e){
e.preventDefault();
var values=[];
$('input[name="checkbox[]"]:checked').each(function () {
  values[values.length] = (this.checked ? $(this).val() : "");
});

$(".container-3PFIa").hide() 
let qty = $('.product-quantity-input').val()
let size = $('.size span.value').text()
let material = $('.material span.value').text()
let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
let jenis_kertas = $('input[name=jenis_kertas]').val()
var formData = $("#forms").serializeArray();

Swal.fire({
      title: 'Are you sure? #fixedOrders 3',
      html:
        'Preview <b>to next orders</b>, <br />' +
        '<code>'+
          'Orders: <br />'+
          size+'<br/>'+
          material+'<br/>'+
          qty+'<br/>'+
          values.join(", ")+'<br/>'+
        '</code> <br />'+
        '',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Order now!',
      cancelButtonText: 'Not now!'
    }).then((result) => {
      if (result.isConfirmed) {

        var designs=[];
        $('input[name="checkbox[]"]:checked').each(function () {
          designs[designs.length] = (this.checked ? $(this).val() : "");
        });

          var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
              var files = $('#file')[0].files;

                var fd = new FormData();

                fd.append('file',files[0]);
                fd.append('_token',CSRF_TOKEN);

                $('#responseMsg').hide();
                $.ajax({
                  url: "{{route('orders.order_customers.to.mkt')}}",
                  method: 'post',
                  data: fd,
                  contentType: false,
                  processData: false,
                  dataType: 'json',
                  beforeSend: function(evt) {   
                      const bfrSend = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 100000,
                          timerProgressBar: true,
                          didOpen: (toast) => {
                              toast.addEventListener('mouseenter', Swal.stopTimer)
                              toast.addEventListener('mouseleave', Swal.resumeTimer)
                          }
                        })
                        
                        bfrSend.fire({
                            icon: 'info',
                            title: 'Retrieving data, data is being processed..'
                        })

                    },
                  success: function(response){

                    if(response.status == false){

                      Swal.fire(
                              'Information!',
                              'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                              'error'
                            )
                    }  else {
                      
                      if(response.success == true){
                        Swal.fire(
                              'Information!',
                              'Order has been processed, We have sent your file to our marketing team.',
                              'success'
                            )
                      } 
                        else {
                            
                          Swal.fire(
                              'Information!',
                              'Message failed to process, contact customer service, we will immediately help you.. , because you have sent this file before, if you experience problems, please contact our customer service immediately.',
                              'error'
                            )
                        }
                    }
                },
                error: function(response){
                    console.log("error : " + JSON.stringify(response) );
                  }
                }
            );
          // }                                                                                                                                          
      }
  })
});

$('.Orders2').click(function(e){
e.preventDefault();
var values=[];
$('input[name="checkbox[]"]:checked').each(function () {
  values[values.length] = (this.checked ? $(this).val() : "");
});

$(".container-3PFIa").hide() 
let qty = $('.product-quantity-input').val()
let size = $('.size span.value').text()
let material = $('.material span.value').text()
let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
let jenis_kertas = $('input[name=jenis_kertas]').val()
var formData = $("#forms").serializeArray();

Swal.fire({
      title: 'Are you sure? #fixedOrders 2',
      html:
        'Preview <b>to next orders</b>, <br />' +
        '<code>'+
          'Orders: <br />'+
          size+'<br/>'+
          material+'<br/>'+
          qty+'<br/>'+
          values.join(", ")+'<br/>'+
        '</code> <br />'+
        '',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Order now!',
      cancelButtonText: 'Not now!'
    }).then((result) => {
      if (result.isConfirmed) {

        var designs=[];
        $('input[name="checkbox[]"]:checked').each(function () {
          designs[designs.length] = (this.checked ? $(this).val() : "");
        });

          var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
              var files = $('#file')[0].files;

                var fd = new FormData();

                fd.append('file',files[0]);
                fd.append('_token',CSRF_TOKEN);

                $('#responseMsg').hide();
                $.ajax({
                  url: "{{route('orders.order_customers.to.mkt')}}",
                  method: 'post',
                  data: fd,
                  contentType: false,
                  processData: false,
                  dataType: 'json',
                  beforeSend: function(evt) {   
                      const bfrSend = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 100000,
                          timerProgressBar: true,
                          didOpen: (toast) => {
                              toast.addEventListener('mouseenter', Swal.stopTimer)
                              toast.addEventListener('mouseleave', Swal.resumeTimer)
                          }
                        })
                        
                        bfrSend.fire({
                            icon: 'info',
                            title: 'Retrieving data, data is being processed..'
                        })

                    },
                  success: function(response){

                    if(response.status == false){

                      Swal.fire(
                              'Information!',
                              'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                              'error'
                            )
                    }  else {
                      
                      if(response.success == true){
                        Swal.fire(
                              'Information!',
                              'Order has been processed, We have sent your file to our marketing team.',
                              'success'
                            )
                      } 
                        else {
                            
                          Swal.fire(
                              'Information!',
                              'Message failed to process, contact customer service, we will immediately help you.. , because you have sent this file before, if you experience problems, please contact our customer service immediately.',
                              'error'
                            )
                        }
                    }
                },
                error: function(response){
                    console.log("error : " + JSON.stringify(response) );
                  }
                });
          // }                                                                                                                                          
      }
  })
});

$('#OrderReady').click(function(e){
e.preventDefault();

let qty = $('.product-quantity-input').val()
let size = $('.size span.value').text()
let finished = $('.print-method span.value').text()
let material = $('.material span.value').text()
let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
let jenis_kertas = $('input[name=jenis_kertas]').val()

  Swal.fire({
      title: 'Are you sure? #fixedOrders Normally',
      html:
        'Preview <b>to next orders</b>, <br />' +
        '<code>'+
          'Orders: <br />'+
          size+'<br/>'+
          material+'<br/>'+
          qty+'<br/>'+
        '</code> <br />'+
        '',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Order now!',
      cancelButtonText: 'Not now!'
    }).then((result) => {
      if (result.isConfirmed) {

        if(qty == "" || jenis_kertas_gsm == "" || jenis_kertas == "") {
              Swal.fire(
              'question!',
              'Paper type still not loaded, make sure all fields are filled.',
              'error'
              )
          } 
          
          else {
              
            var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
            var files = $('#file')[0].files;
            var fd = new FormData();
                fd.append('_token',CSRF_TOKEN);
                fd.append('cmpz', finished);
                fd.append('size', size);
                fd.append('qty', qty);
                fd.append('material', material);
                fd.append('jenis_kertas', jenis_kertas);
                fd.append('jenis_kertas_gsm', jenis_kertas_gsm);

                $('#responseMsg').hide();
                $.ajax({
                  url: "{{route('orders.order_customers.to.mkt.only')}}",
                  method: 'post',
                  data: fd,
                  contentType: false,
                  processData: false,
                  dataType: 'json',
                  beforeSend: function(evt) {   
                      const bfrSend = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 100000,
                          timerProgressBar: true,
                          didOpen: (toast) => {
                              toast.addEventListener('mouseenter', Swal.stopTimer)
                              toast.addEventListener('mouseleave', Swal.resumeTimer)
                          }
                        })
                        
                    bfrSend.fire({
                        icon: 'info',
                        title: 'Retrieving data, data is being processed..'
                    })

                },
                success: function(response){

                  if(response.success == false){

                      Swal.fire(
                        'Information!',
                        'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                        'warning'
                      )

                  } 
                    else {
                    
                        if(response.success == true){

                          Swal.fire(
                                'Information!',
                                'Order has been processed, We have sent your file to our marketing team.',
                                'success'
                              )
                        } 

                        else {
                              
                        Swal.fire(
                            'Information!',
                            'Message failed to process, contact customer service, we will immediately help you.. , because you have sent this file before, if you experience problems, please contact our customer service immediately.',
                            'error'
                          )
                      }
                   }
                },
                error: function(response){
                    console.log("error : " + JSON.stringify(response) );
                  }
                }
            );
          }                                                                                                                                          
      }
  })
});

$('.Orders1').click(function(e){
e.preventDefault();
var values=[];
$('input[name="checkbox[]"]:checked').each(function () {
  values[values.length] = (this.checked ? $(this).val() : "");
});

$(".container-3PFIa").hide() 
let qty = $('.product-quantity-input').val()
let size = $('.size span.value').text()
let material = $('.material span.value').text()
let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
let jenis_kertas = $('input[name=jenis_kertas]').val()
var formData = $("#forms").serializeArray();

Swal.fire({
      title: 'Are you sure? #fixedOrders 1',
      html:
        'Preview <b>to next orders</b>, <br />' +
        '<code>'+
          'Orders: <br />'+
          size+'<br/>'+
          material+'<br/>'+
          qty+'<br/>'+
          values.join(", ")+'<br/>'+
        '</code> <br />'+
        '',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Order now!',
      cancelButtonText: 'Not now!'
    }).then((result) => {
      if (result.isConfirmed) {

        var designs=[];
        $('input[name="checkbox[]"]:checked').each(function () {
          designs[designs.length] = (this.checked ? $(this).val() : "");
        });

          var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
              var files = $('#file')[0].files;

                var fd = new FormData();

                fd.append('file',files[0]);
                fd.append('_token',CSRF_TOKEN);

                $('#responseMsg').hide();
                $.ajax({
                  url: "{{route('orders.order_customers.to.mkt')}}",
                  method: 'post',
                  data: fd,
                  contentType: false,
                  processData: false,
                  dataType: 'json',
                  beforeSend: function(evt) {   
                      const bfrSend = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 100000,
                          timerProgressBar: true,
                          didOpen: (toast) => {
                              toast.addEventListener('mouseenter', Swal.stopTimer)
                              toast.addEventListener('mouseleave', Swal.resumeTimer)
                          }
                        })
                        
                        bfrSend.fire({
                            icon: 'info',
                            title: 'Retrieving data, data is being processed..'
                        })

                    },
                  success: function(response){

                    if(response.status == false){

                      Swal.fire(
                              'Information!',
                              'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                              'error'
                            )
                    }  else {
                      
                      if(response.success == true){
                        Swal.fire(
                              'Information!',
                              'Order has been processed, We have sent your file to our marketing team.',
                              'success'
                            )
                      } 
                        else {
                            
                          Swal.fire(
                              'Information!',
                              'Message failed to process, contact customer service, we will immediately help you.. , because you have sent this file before, if you experience problems, please contact our customer service immediately.',
                              'error'
                            )
                        }
                    }
                },
                error: function(response){
                    console.log("error : " + JSON.stringify(response) );
                  }
                });
          // }                                                                                                                                          
      }
  })
});


$('body').on('click','button#sendingKM',function(e){
e.preventDefault();
var values=[];
$('input[name="checkbox[]"]:checked').each(function () {
values[values.length] = (this.checked ? $(this).val() : "");
});

$(".container-3PFIa").hide() 
let qty = $('.product-quantity-input').val()
let size = $('.size span.value').text()
let material = $('.material span.value').text()
let jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
let jenis_kertas = $('input[name=jenis_kertas]').val()
var formData = $("#forms").serializeArray();

// var c = $("input[name='checkbox[]']:checked").val();
//       if( c == undefined){
//           Swal.fire({
//                   icon: 'error',
//                   title: 'Design not ready.'
//               })
      // } else {
  Swal.fire({
      title: 'Are you sure?',
      // text: "You won't be able to revert this!",
      html:
        'Preview <b>to next orders</b>, <br />' +
        '<code>'+
          'Orders: <br />'+
          size+'<br/>'+
          material+'<br/>'+
          qty+'<br/>'+
          values.join(", ")+'<br/>'+
        '</code> <br />'+
        '',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Order now!',
      cancelButtonText: 'Not now!'
    }).then((result) => {
      if (result.isConfirmed) {

        var designs=[];
        $('input[name="checkbox[]"]:checked').each(function () {
          designs[designs.length] = (this.checked ? $(this).val() : "");
        });

          var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
              var files = $('#file')[0].files;

                var fd = new FormData();

                fd.append('file',files[0]);
                fd.append('_token',CSRF_TOKEN);

                $('#responseMsg').hide();
                $.ajax({
                  url: "{{route('orders.order_customers.to.mkt')}}",
                  method: 'post',
                  data: fd,
                  contentType: false,
                  processData: false,
                  dataType: 'json',
                  beforeSend: function(evt) {   
                      const bfrSend = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 100000,
                          timerProgressBar: true,
                          didOpen: (toast) => {
                              toast.addEventListener('mouseenter', Swal.stopTimer)
                              toast.addEventListener('mouseleave', Swal.resumeTimer)
                          }
                        })
                        
                        bfrSend.fire({
                            icon: 'info',
                            title: 'Retrieving data, data is being processed..'
                        })

                    },
                  success: function(response){

                    if(response.status == false){

                      Swal.fire(
                              'Information!',
                              'you have to login first, to continue the transaction or contact customer service, we will immediately help you..',
                              'error'
                            )
                    }  else {
                      
                      if(response.success == true){
                        Swal.fire(
                              'Information!',
                              'Order has been processed, We have sent your file to our marketing team.',
                              'success'
                            )
                      } 
                        else {
                            
                          Swal.fire(
                              'Information!',
                              'Message failed to process, contact customer service, we will immediately help you.. , because you have sent this file before, if you experience problems, please contact our customer service immediately.',
                              'error'
                            )
                        }
                    }
                },
                error: function(response){
                    console.log("error : " + JSON.stringify(response) );
                  }
                });
          // }                                                                                                                                          
      }
  })
// }
});

$('body').on('ready','div.pd-pane-item-details',function(e){
e.preventDefault();
$(".rd-i .remove-image-button").hide();
$(".rd-i .remove-image-button").hide();
$(".react-file-reader-button").hide();

});

$('body').on('ready','div#design-region-color',function(){
// $(this).hide();
});

$('body').on('ready','button#size-tool-custom',function(){
$(this).hide();
});

$('body').on('click','div.artwork-canvas',function(e){
e.preventDefault();
});