  var pusher = new Pusher('fdd3c469ca4993da4280', {
        cluster: 'ap1',
        forceTLS: true,
        encrypted: true,
    });

        const channel = pusher.subscribe('trigger-transaction');
        
        channel.bind('received-tr', function(data) {

                const getDataDocuments = () => {
                  return new Promise((resolve, reject) => {
                    return setTimeout(
                      () => resolve(data),
                      1000
                    )
                  })
                }
            
            getDataDocuments().then(function(result) {

                const bfrSend = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      showConfirmButton: false,
                      timer: 15000,
                      timerProgressBar: true,
                      didOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                      }
                    })

                  let PrivateChannel = "{{ Auth::user()->id }}";
                  
                  if(parseInt(PrivateChannel) === result.private){

                        if(result.dt == "canceled"){
                            bfrSend.fire({
                              icon: 'error',
                              title: 'Order canceled.'
                            })
                        } 

                        if(result.dt == "restored"){
                            bfrSend.fire({
                              icon: 'info',
                              title: 'the order is returned to the order cart.'
                            })
                        } 

                        if(result.dt == "send"){
                          bfrSend.fire({
                                  icon: 'success',
                                  title: 'We are sending your order to our marketing team.'
                              })
                        }

                        // if(result.dt == "finished"){
                        //       bfrSend.fire({
                        //           icon: 'success',
                        //           title: 'Marketing has processed the order.'
                        //       })
                        // } 
                  } 
                    else {

                    if(result.dt == "cancel"){
                            if(parseInt(PrivateChannel) === 6) {

                                const CanceledBooking = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 15000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                  })  

                                  CanceledBooking.fire({
                                      icon: 'warning',
                                      title: 'The customer has canceled the order.'
                                  }
                                )
                            }
                        } 

                        if(result.dt == "restored"){
                            if(parseInt(PrivateChannel) === 6) {

                                const ReBooking = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 15000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                  })  

                                  ReBooking.fire({
                                      icon: 'warning',
                                      title: 'Customer tries to reorder, previous order has been canceled'
                                  }
                                )
                            }
                        } 

                        if(result.dt == "send"){
                            if(parseInt(PrivateChannel) === 6) {

                                const SendingMail = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 15000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                  })  

                                  SendingMail.fire({
                                      icon: 'warning',
                                      title: 'There are customers who have sent via email, please monitor the information immediately.'
                                  }
                                )
                            }
                        }

                        if(result.dt == "finished"){
                            if(parseInt(PrivateChannel) === 6) {

                                const ProcessedJob = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 15000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                  })  

                                  ProcessedJob.fire({
                                      icon: 'warning',
                                      title: 'Job is done.'
                                  }
                                )
                            } 
                              else {

                              const ProcessedJobCs = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 15000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                  })  

                                  ProcessedJobCs.fire({
                                      icon: 'warning',
                                      title: 'Marketing has processed the order.'
                                  }
                                )

                            }
                        }
                  }
            });
        });