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
    <link href="{{ asset('wdt/wdt.css') }}" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-laravel" />
    <!--  Social tags      -->
    <meta name="keywords"
        content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim">
    <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta itemprop="image"
        content="https://s3.amazonaws.com/creativetim_bucket/products/96/original/opt_ad_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim">
    <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image"
        content="https://s3.amazonaws.com/creativetim_bucket/products/96/original/opt_ad_thumbnail.jpg">
</head>
<style>
    .fixTableHead {
        overflow-y: auto;
        height: 110px;
    }

    .fixTableHead thead th {
        position: sticky;
        top: 0;
    }

    table {
        border-collapse: collapse;
        width: 500px;
    }

    th,
    td {
        padding: 30px 103.5px;
        border: 2px solid #529432;
    }

    th {
        background: #ABDD93;
    }

</style>

<body class="clickup-chrome-ext_installed">
    <div class="main-content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="wdt-loading-screen">
                            <div>
                                <table style=" position: relative; top : 100px">
                                    <thead class="">
                                        <tr>
                                            <th style="padding: 30px 78px;border: 2px solid #529432;" scope="col">
                                                Antrian</th>
                                            <th style="padding: 30px 179px;border: 2px solid #529432;" scope="col">
                                                NO. RM</th>
                                            <th style="padding: 30px 121px;border: 2px solid #529432;" scope="col">
                                                PASIEN</th>
                                            <th style="padding: 30px 161px;border: 2px solid #529432;" scope="col">NO. BPJS
                                            </th>
                                            <th style="padding: 30px 151px;border: 2px solid #529432;" scope="col">Poli
                                            </th>
                                            <th style="padding: 30px 148px;border: 2px solid #529432;" scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <div class="wdt-loading-phrases">
                                <div class="wdt-loading-phrase-category" data-category="default">
                                </div>
                                <tbody>
                                    <div style="font-weight: bold;font-size: 20px;position:absolute" class="wdt-loading-phrase-category" data-category="profile">
                                        <div class="cxmod"></div>
                                    </div>
                                </tbody>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('wdt/wdt.min.js') }}"></script>
    <script src="{{ asset('wdt/wdt.js') }}"></script>
    <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>

    <!-- Argon JS -->
    <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    <script src="{{ asset('js/shortlen.js') }}"></script>

    <script>
        async function SyncDataPasienAntrian() {

            let data = {
                dataform: null,
            }

            const Workoders = "{{ route('sync.data.mnt') }}";

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

        $(document).ready(function () {

            SyncDataPasienAntrian().then(function (data) {

                let datapasien = new Array();

                for (i = 0; i < data.data.length; i++) {
                    datapasien[i] = data.data[i];
                }

                let listenDataFormat = function (arr) {
                    let str = '';

                    for (let i = 0; i < arr.length; i++) {

                        var status = arr[i]['status_docs'];
                        var polix = arr[i]['poli'];
                        var data = '';

                        if (status == 'Selesai') {
                            data =
                                '<td><span class="badge badge-success justify-content-center" style="font-size:13.5px;text-align:center"><center>' +
                                arr[i]['status_docs'] + '</center></span></td>';
                        } else {
                            data =
                                '<td><span class="badge badge-danger justify-content-center" style="font-size:13.5px;text-align:center"><center>' +
                                arr[i]['status_docs'] +
                            '</center></span></td>';
                        }

                        var poli = '';

                        if (polix == 'POLI UMUM') {
                            
                            poli = '<td style="background-color: yellow"><span><center>' + arr[i]['poli'] + '</center></span></td>';

                            } else {
                                poli = '<td style="background-color: #06f5f2"><span><center>' + arr[i]['poli'] + '</center></span></td>';
                        }

                        str += '<div class="fixTableHead">' +
                            '<table>' +
                            '<tbody>' +
                            '<tr class="wdt-loading-phrase">' +
                            '<div>' +
                            '<td>' + arr[i]['antrian'] + '</td>' +
                            '<td>' + arr[i]['no_rekamedik'] + '</td>' +
                            '<td>' + arr[i]['nama_pasien'] + '</td>' +
                            '<td>' + arr[i]['no_bpjs'] + '</td>' +
                            poli +
                            data +
                            '</div>' +
                            '</tr>' +
                            '</tbody>' +
                            '</table>' +
                            '</table>' +
                            '</div>';
                    }

                    return str;
                }

                let nama_pasien = [];

                for (i = 0; i < datapasien.length; i++) {
                    nama_pasien.push(datapasien[i]);
                }

                $('.cxmod').html(listenDataFormat(datapasien.sort()));

                wdtLoading.start({
                    category: 'profile',
                    speed: 2500
                });

            });

            $(function () {
                var intervalID = setInterval(function () {
                    SyncDataPasienAntrian();
                }, 3000);
            });
        });

    </script>
</body>

</html>
