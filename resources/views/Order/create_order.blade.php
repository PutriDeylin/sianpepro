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
    <title>Detail Pesanan</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('') }}/template/plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="{{ url('') }}/template/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('') }}/template/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
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

        @include('Layout.side')

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Detail Pesanan</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Detail Pesanan</a></li>
                            </ol>
                         
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
     
            <div class="container-fluid">
               
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-sm-8">


                         <div class="card">
                            <div class="card-body">
                              <form class="forms-sample" action="{{ route('Order-Detail-Store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div>
                                        <label class="col-md-12 p-0">User</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" class="form-control p-0 border-0" name="user_id"  value="{{ $auth->id }}" readonly> </div>
                                    </div>
                    <div>
                                        <label class="col-md-12 p-0">Order Id</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" class="form-control p-0 border-0" name="order_id"  value="{{ $order->id }}" readonly> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Produk Id</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" 
                                                class="form-control p-0 border-0" name="product_id"  placeholder="" value="{{ $order->product_id }}" readonly>
                                                
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Harga</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" 
                                                class="form-control p-0 border-0" id="harga" name="harga"  placeholder="" value="{{ $order->harga }}" readonly>
                                                
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Jumlah Order</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number"  class="form-control p-0 border-0" name="jumlah" id="jumlah">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4" id="charge-container" style="display: none;">
                                        <label class="col-md-12 p-0">Jika anda memesan jumlahnya di bawah 100pcs maka akan terkena charge Rp 100000, Jika anda memesan jumlahnya di bawah 50pcs maka akan terkena charge Rp 150000</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" readonly class="form-control p-0 border-0" name="charge" id="charge">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Total yang harus anda bayarkan</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" readonly
                                                class="form-control p-0 border-0" name="total_harga" id="total_harga">
                                        </div>
                                    </div>
                                   <button class="btn btn-success text-white form-control p-0 border-0" type="submit">Tambah</button>
                                  
                                </form>
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
    <script src="{{ url('') }}/template/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="{{ url('') }}/template/js/pages/dashboards/dashboard1.js"></script>
     <script>
        document.getElementById('jumlah').addEventListener('input', function () {
            var productPrice = parseFloat(document.getElementById('harga').value);
            var quantity = parseFloat(this.value);
            var charge = 0;

            if (quantity < 50) {
                charge = 150000;
                document.getElementById('charge-container').style.display = 'block';
            } else if (quantity < 100) {
                charge = 100000;
                document.getElementById('charge-container').style.display = 'block';
            } else {
                charge = 0;
                document.getElementById('charge-container').style.display = 'none';
            }

            var totalPrice = (productPrice * quantity) + charge;
            document.getElementById('total_harga').value = totalPrice;
            document.getElementById('charge').value = charge;
        });
    </script>
</body>

</html>