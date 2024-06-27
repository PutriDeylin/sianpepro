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
    <title>Data Detail Order</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('') }}/template/plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="{{ url('') }}/template/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
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
                                <h3 class="box-title mb-0">Data Detail Order</h3>
                                <div class="d-flex ">
                                    <i data-feather="download"></i>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-0">
                                <div class="table-responsive">
                                    <table class='table mb-0' id="table1">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>

                                                <th scope="col">Produk Id</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Jumlah</th>
                                                <th scope="col">Charge</th>
                                                <th scope="col">Total Harga</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($counter = 1) @foreach ($detail as $d)
                                                <tr>
                                                    <td>{{ $counter }}</td>

                                                    <td>{{ $d->product->nama_produk }}</td>
                                                    <td>{{ $d->harga }}</td>
                                                    <td>{{ $d->jumlah }}</td>
                                                    <td>{{ $d->charge }}</td>
                                                    <td>{{ $d->total_harga }}</td>
                                                    <td>
                                                        <button class="btn btn-primary" data-bs-toggle="modal"
                                                            data-bs-target="#editModal{{ $d->id }}">Detail
                                                            Pembayaran</button>
                                                        <div class="modal fade" id="editModal{{ $d->id }}"
                                                            tabindex="-1"
                                                            aria-labelledby="editModal{{ $d->id }}Label"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="editModal{{ $d->id }}Label">
                                                                            Detail Pembayaran</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <!-- Form for editing data -->
                                                                       <form action="{{ url('Transactions/Pay') }}"
                                                                            method="POST"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            <div class="mb-3">
                                                                                <label for="">No Resi</label>
                                                                                <input type="text"
                                                                                    class="form-control" name="no_resi"
                                                                                    value="{{ date('Ymd') . substr(str_shuffle(MD5(microtime())), 0, 7) . strtoupper(substr(Auth::user()->name, 0, 1)) }}"
                                                                                    readonly>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="">Nama Anda</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    id="editNamaProduk{{ $d->user_id }}"
                                                                                    name="user_id"
                                                                                    value="{{ $d->user_id }}"
                                                                                    readonly>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="total_produk">Produk</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    name="product_id"
                                                                                    value="{{ $d->product_id }}"
                                                                                    readonly>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="total_harga">Total
                                                                                    Harga</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    name="harga"
                                                                                    id="total_harga{{ $d->id }}"
                                                                                    value="{{ $d->harga }}"
                                                                                    readonly>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="total_jumlah">Total
                                                                                    Jumlah</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    value="{{ $d->jumlah }}"
                                                                                    readonly name="jumlah">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="total_charge">Total
                                                                                    Charge</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    value="{{ $d->charge }}"
                                                                                    readonly name="charge">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="total_harga_all">Total Yang
                                                                                    Harus Anda Bayarkan</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    id="total_harga_all{{ $d->id }}"
                                                                                    value="{{ $d->total_harga }}"
                                                                                    readonly name="total_harga">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="">Anda
                                                                                    membayar</label>
                                                                                <input type="number"
                                                                                    class="form-control"
                                                                                    id="bayar{{ $d->id }}" name="bayar"
                                                                                    placeholder="Anda membayar"
                                                                                    oninput="calculateSisaBayar({{ $d->id }})"
                                                                                    required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="">Sisa yang harus
                                                                                    anda bayarkan</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    id="sisa_bayar{{ $d->id }}"
                                                                                    name="sisa_bayar"
                                                                                    readonly>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="">Tanggal
                                                                                    Transaksi</label>
                                                                                <input type="date"
                                                                                    class="form-control"
                                                                                    id="tanggal_transaksi{{ $d->id }}"
                                                                                    name="tanggal_transaksi"
                                                                                    onchange="calculateTanggalSelesai({{ $d->id }})"
                                                                                    required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="">Tanggal
                                                                                    Selesai</label>
                                                                                <input type="date"
                                                                                    class="form-control"
                                                                                    id="tanggal_selesai{{ $d->id }}"
                                                                                    name="tanggal_selesai"
                                                                                    readonly>
                                                                            </div>
                                                                            <div>
                                                                                <label for="">No Rekening :
                                                                                    1234567890</label>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="">Bukti
                                                                                    Bayar</label>
                                                                                <input type="file"
                                                                                    class="form-control"
                                                                                    id="editHarga{{ $d->bukti_bayar }}"
                                                                                    name="bukti_bayar"
                                                                                    value="{{ $d->bukti_bayar }}"
                                                                                    required>
                                                                            </div>
                                                                            <div class="mb-3" hidden>
                                                                                <label for="">Status
                                                                                    Produksi</label>
                                                                                <input type="text"
                                                                                    name="status_produksi"
                                                                                    id="status_produksi{{ $d->id }}"
                                                                                    class="form-control"
                                                                                    value="Baru Masuk" readonly>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="">Status
                                                                                    Transaksi</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    name="status_transaksi"
                                                                                    id="status_transaksi{{ $d->id }}"
                                                                                    readonly>
                                                                            </div>
                                                                           <button type="submit" class="btn btn-primary" id="saveButton{{ $d->id }}">Save Changes</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>

                                                @php($counter++)
                                            @endforeach

                                        </tbody>


                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- Tombol untuk membuka modal -->

            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Detail
                    Order</button> --}}


            <!-- Modal -->


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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
        function calculateSisaBayar(id) {
            const totalHarga = parseFloat(document.getElementById(`total_harga_all${id}`).value);
            const bayar = parseFloat(document.getElementById(`bayar${id}`).value);
            const sisaBayar = totalHarga - bayar;
            document.getElementById(`sisa_bayar${id}`).value = sisaBayar;
               const saveButton = document.getElementById(`saveButton${id}`);


        if (sisaBayar < 0) {

            saveButton.style.display = 'none';

            alert("Peringatan: Anda memasukkan angka lebih besar dari total harga!");

        } else {

            saveButton.style.display = 'block';

        }
            const statusTransaksi = document.getElementById(`status_transaksi${id}`);
         

            if (sisaBayar === 0) {
                statusTransaksi.value = "Lunas";
             
            } else {
                statusTransaksi.value = "Belum Lunas";
               
            }
        }

        function calculateTanggalSelesai(id) {
            const tanggalTransaksi = new Date(document.getElementById(`tanggal_transaksi${id}`).value);
            tanggalTransaksi.setDate(tanggalTransaksi.getDate() + 14);
            const tanggalSelesai = tanggalTransaksi.toISOString().split('T')[0];
            document.getElementById(`tanggal_selesai${id}`).value = tanggalSelesai;
        }
    </script>
</body>

</html>
