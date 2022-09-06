
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
    
var component1 = $("#cp1").val();
              var qty = $('.product-quantity-input').val()
              var size = $('.size span.value').text()
              var material = $('.material span.value').text()
              var jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
              var jenis_kertas = $('input[name=jenis_kertas]').val()
              var formDataDesign = $("#formsD").serializeArray();
              var values=[];
              
              /*
              *
              Custom size
              */
              var qtyCz = $('#Czquantity').val()
              var sizeCz = $('#Csize').val()
              var cmpOne = $('#CMP1').val()
              var materialCz = $('#Czmaterial').val()
              var jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm]').val()
              var jenis_kertasCz = $('input[name=Czjenis_kertas]').val()
              var defComponent = $('input[name=components]').val()
    
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
                  var TotalFiles = $('#file')[0].files.length;
                  var files = $('#file')[0];
    
                  var Cdesign =JSON.stringify(Object.assign({},  formDataDesign)) ;
    
                  for (var i = 0; i < TotalFiles; i++) {
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
    
                                            var link = '{!! route("auth_user.id") !!}';
                                            var redirect = link;
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
        
                        var qty = $('.product-quantity-input').val()
                        var size = $('.size span.value').text()
                        var material = $('.material span.value').text()
                        var jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
                        var jenis_kertas = $('input[name=jenis_kertas]').val()
                        var formDataDesign = $("#forms2").serializeArray();
                        var values=[];
                        
                          $('input[name="checkbox2[]"]:checked').each(function () {
                            values[values.length] = (this.checked ? $(this).val() : "");
                        });
        
                  var qtyCz = $('#Czquantity2').val()
                  var component2 = $('#cp2').val()
                  var CMP2 = $('#CMP2').val()
                  var sizeCz = $('#Csize2').val()
                  var materialCz = $('#Czmaterial2').val()
                  var jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm2]').val()
                  var jenis_kertasCz = $('input[name=Czjenis_kertas2]').val()
        
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
                      var TotalFiles = $('#files')[0].files.length;
                      var files = $('#files')[0];
        
                      var Cdesign =JSON.stringify(Object.assign({},  formDataDesign));
        
                      for (var i = 0; i < TotalFiles; i++) {
        
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
                                                var link = '{!! route("auth_user.id")  !!}';
                                                var redirect = link;
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
    
              var qty = $('.product-quantity-input').val()
              var size = $('.size span.value').text()
              var material = $('.material span.value').text()
              var jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
              var jenis_kertas = $('input[name=jenis_kertas]').val()
              var formDataDesign = $("#forms3").serializeArray();
              var values=[];
              
            $('input[name="checkbox3[]"]:checked').each(function () {
              values[values.length] = (this.checked ? $(this).val() : "");
            });
    
              var qtyCz = $('#Czquantity3').val()
              var component3 = $('#cp3').val()
              var sizeCz = $('#Csize3').val()
              var cmpcz3 = $('#CMP3').val()
              var materialCz = $('#Czmaterial3').val()
              var jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm3]').val()
              var jenis_kertasCz = $('input[name=Czjenis_kertas3]').val()
    
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
                  var TotalFiles = $('#files3')[0].files.length;
                  var files = $('#files3')[0];
    
                  var Cdesign = JSON.stringify(Object.assign({},  formDataDesign));
    
                  for (var i = 0; i < TotalFiles; i++) {
                    
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
    
                                              var link = '{!! route("auth_user.id")  !!}';
                                              var redirect = link;
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
    
              var qty = $('.product-quantity-input').val()
              var size = $('.size span.value').text()
              var material = $('.material span.value').text()
              var jenis_kertas_gsm = $('input[name=jenis_kertas_gsm]').val()
              var jenis_kertas = $('input[name=jenis_kertas]').val()
              var formDataDesign = $("#forms4").serializeArray();
              var values=[];
              
            $('input[name="checkbox4[]"]:checked').each(function () {
              values[values.length] = (this.checked ? $(this).val() : "");
            });
    
              var qtyCz = $('#Czquantity4').val()
              var sizeCz = $('#Csize4').val()
              var design4 = $('#cp4').val()
              var materialCz = $('#Czmaterial4').val()
              var cmpcz4 = $('#CMP4').val()
              var jenis_kertas_gsmCz = $('input[name=Czjenis_kertas_gsm4]').val()
              var jenis_kertasCz = $('input[name=Czjenis_kertas4]').val()
    
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
                  var TotalFiles = $('#files4')[0].files.length;
                  var files = $('#files4')[0];
               
                  var Cdesign =JSON.stringify(Object.assign({},  formDataDesign));
                  
                  for (var i = 0; i < TotalFiles; i++) {
                    
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
    
                                            var link = '{!! route("auth_user.id")  !!}';
                                            var redirect = link;
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
    