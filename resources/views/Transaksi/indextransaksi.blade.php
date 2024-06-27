    <!DOCTYPE html>
    <html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords"
            content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
        <meta name="description"
            content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
        <meta name="robots" content="noindex,nofollow">
        <title>Data Transaksi</title>
        <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16"
            href="{{ url('') }}/template/plugins/images/favicon.png">
        <!-- Custom CSS -->
        <link href="{{ url('') }}/template/plugins/bower_components/chartist/dist/chartist.min.css"
            rel="stylesheet">
        <link rel="stylesheet"
            href="{{ url('') }}/template/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
        <!-- Custom CSS -->
        <link href="{{ url('') }}/template/css/style.min.css" rel="stylesheet">
    </head>

    <body>

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
            data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            @include('Layout.nav')
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            @include('Layout.side')
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="page-breadcrumb bg-white">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <div class="d-md-flex">
                                <ol class="breadcrumb ms-auto">
                                    <li><a href="#" class="fw-normal">Dashboard</a></li>
                                </ol>

                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Three charts -->
                    <!-- ============================================================== -->
                    @include('Layout.info')
                    <!-- ============================================================== -->
                    <!-- PRODUCTS YEARLY SALES -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- RECENT SALES -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <div class="white-box">
                                <div class="d-md-flex mb-3">
                                    <h3 class="box-title mb-0">Data Transaksi</h3>

                                </div>

                                <div class="d-flex ">
                                    <i data-feather="download"></i>
                                </div>
                                <div class="card-body px-0 pb-0">
                                    <div class="table-responsive">
                                       
                                        <table class='table mb-0' id="table1">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Anda</th>
                                                    <th scope="col">No Resi</th>
                                                    <th scope="col">Jumlah produk yang anda pesan</th>
                                                    <th scope="col">Total Harga Produk</th>
                                                    <th scope="col">Jumlah keseluruhan produk (pcs)</th>
                                                    <th scope="col">Charge</th>
                                                    <th scope="col">Total Harga</th>
                                                    <th scope="col">Anda Membayar</th>
                                                    <th scope="col">Sisa Yang Harus Anda Bayarkan</th>
                                                    <th scope="col">Tanggal Transaksi</th>
                                                    <th scope="col">Tanggal Selesai</th>
                                                    <th scope="col">Countdown</th>
                                                    <th scope="col">Bukti Bayar</th>
                                                    <th scope="col">Status Produksi</th>
                                                    <th scope="col">Status Transaksi</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                  @if ($transaksi->isEmpty())
                                                <tr>
                                                    <td colspan="15" class="text-center">
                                                      
                                                            Tidak Ada Data.
                                                     
                                                    </td>
                                                </tr>
                                                   @endif
                                                @php($counter = 1) @foreach ($transaksi as $t)
                                                    <tr>
                                                   
                                                        <td>{{ $counter }}</td>
                                                        <td>{{ $t->no_resi }}</td>
                                                        <td>{{ $t->user->name }}</td>
                                                        <td>{{ $t->product_id }}</td>
                                                        <td>{{ $t->harga }}</td>
                                                        <td>{{ $t->jumlah }}</td>
                                                        <td>{{ $t->charge }}</td>
                                                        <td>{{ $t->total_harga }}</td>
                                                        <td>{{ $t->bayar }}</td>
                                                        <td>{{ $t->sisa_bayar }}</td>
                                                        <td>{{ $t->tanggal_transaksi }}</td>
                                                        <td>{{ $t->tanggal_selesai }}</td>
                                                        <td id="countdown-{{ $t->id }}"></td>
                                                        <td> <img src="{{ asset('foto/' . $t->bukti_bayar) }}"
                                                                alt="" style="width: 100px"></td>
                                                        <td> @switch($t->status_produksi)
                                                                @case('Baru Masuk')
                                                                    <span class="badge bg-primary">Baru Masuk</span>
                                                                @break
                                                                @case('Belum Diproduksi')
                                                                    <span class="badge bg-primary">Belum Lunas</span>
                                                                @break

                                                                @case('Sedang Diproduksi')
                                                                    <span class="badge bg-warning">Sedang Diproses</span>
                                                                @break

                                                                @case('Selesai Diproduksi')
                                                                    <span class="badge bg-success">Selesai Diproses</span>
                                                                @break
                                                            @endswitch

                                                        </td>
                                                        <td> @switch($t->status_transaksi)
                                                                @case('Belum Lunas')
                                                                    <span class="badge bg-primary">Belum Lunas</span>
                                                                @break

                                                                @case('Lunas')
                                                                    <span class="badge bg-success">Lunas</span>
                                                                @break
                                                            @endswitch

                                                        </td>   



                                                        @php($counter++)
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Recent Comments -->
                    <!-- ============================================================== -->

                    <!-- /.col -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('Layout.footer')
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="{{ url('') }}/template/plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ url('') }}/template/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('') }}/template/js/app-style-switcher.js"></script>
        <script src="{{ url('') }}/template/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
        <!--Wave Effects -->
        <script src="{{ url('') }}/template/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="{{ url('') }}/template/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="{{ url('') }}/template/js/custom.js"></script>
        <!--This page JavaScript -->
        <!--chartis chart-->
        <script src="{{ url('') }}/template/plugins/bower_components/chartist/dist/chartist.min.js"></script>
        <script
            src="{{ url('') }}/template/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js">
        </script>
        <script src="{{ url('') }}/template/js/pages/dashboards/dashboard1.js"></script>
        <script>

    function updateCountdown(transactionId, targetDate) {

        const countdownElement = document.getElementById(`countdown-${transactionId}`);

        const now = new Date();

        const difference = new Date(targetDate) - now;


        const days = Math.floor(difference / (1000 * 60 * 60 * 24));

        const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));

        const seconds = Math.floor((difference % (1000 * 60)) / 1000);


        countdownElement.innerHTML = `

            <p>${days} days, ${hours} hours, ${minutes} minutes, ${seconds} seconds</p>

        `;

    }


    const transactions = @json($transaksi);

    transactions.forEach(transaction => {

        const targetDate = new Date(transaction.tanggal_selesai);

        updateCountdown(transaction.id, targetDate);


        setInterval(() => {

            updateCountdown(transaction.id, targetDate);

        }, 1000);

    });

</script>
    </body>

    </html>
