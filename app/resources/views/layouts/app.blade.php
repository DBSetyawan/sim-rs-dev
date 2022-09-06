<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
  <script src="https://cdn.tailwindcss.com"></script>
@livewireStyles

<style type="text/tailwindcss">
  @layer utilities {
    .content-auto {
      content-visibility: auto;
    }
  }
</style>
</head>
<body>
    <div id="app">
        <div class="nav-container">
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
@livewireScripts
<script>
Livewire.on("triggerCancel", (id) => {

    Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to Cancel order transaction ? "+ `${id}`,
        icon: 'success',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!',
        cancelButtonText: 'No'
        }).then((result) => {
            if (result.isConfirmed) {
                
                Swal.fire(
                'Information!',
                'Message it\'s process, thanks.. ',
                'success'
                )

                } 
                else {

                Swal.fire(
                    'Information!',
                    'Message can\'t process, sorry.. ',
                    'error'
                    )
                }
            }
        );

});

Livewire.on("triggerReorders", (id) => {
    Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to Sending mail to team Sales marketing ? ",
        icon: 'success',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!',
        cancelButtonText: 'No'
        }).then((result) => {
        
            if (result.isConfirmed) {
                
                Livewire.emit("reOrders", id);

                Swal.fire(
                    'Information!',
                    'E-mail has been sent to our marketing group, we will contact you shortly.. ',
                    'success'
                )

                } 
                else {

                Swal.fire(
                'Information!',
                'Message can\'t process, sorry.. ',
                'error'
                )
            }
        }
    );

});

</script>
</body>
</html>
