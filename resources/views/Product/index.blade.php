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
    <title>Data Produk</title>
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
                                <h3 class="box-title mb-0">Data Produk</h3>
                             
                            </div>
                              Jika Ingin tambah data <a href="" type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#modalId">klik Di Sini</a>
                            <div class="table-responsive">
                               
                <!-- Modal -->
                <div
                    class="modal fade"
                    id="modalId"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="modalTitleId"
                    aria-hidden="true"
                >
                  <form action="{{ route('Product-Store') }}" role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div
                        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                        role="document"
                    >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">
                                   Tambah Data
                                </h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                               <div class="mb-3">
                                    <label for="inputData" class="form-label">Nama Produk</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="inputData"
                                        name="nama_produk"
                                        placeholder="Nama Produk"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="inputData" class="form-label">Deskripsi</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="inputData"
                                        name="deskripsi"
                                        placeholder="Deskripsi"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="inputData" class="form-label">Harga</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="inputData"
                                        name="harga"
                                        placeholder="Harga"
                                    />
                            </div>
                           
                                <div class="mb-3">
                                    <label for="inputData" class="form-label">Foto Produk</label>
                                    <input
                                        type="file"
                                        class="form-control"
                                        id="inputData"
                                        name="foto_produk"
                                        placeholder="Foto Produk"
                                    />
                                </div>
                               
                            <div class="modal-footer">
                                <button
                                    type="submit"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                >
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                
                <script>
                    var modalId = document.getElementById('modalId');
                
                    modalId.addEventListener('show.bs.modal', function (event) {
                          // Button that triggered the modal
                          let button = event.relatedTarget;
                          // Extract info from data-bs-* attributes
                          let recipient = button.getAttribute('data-bs-whatever');
                
                        // Use above variables to manipulate the DOM
                    });
                </script>
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
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Foto Produk</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php ($counter = 1) @foreach ($product as $p)
                                
                                <tr>
                                    <td>{{ $counter }}</td> 
                                    <td>{{ $p->nama_produk }}</td>
                                    <td>{{ $p->deskripsi }}</td>
                                    <td>{{ $p->harga }}</td>
                              
                                    <td>  <img src="{{ asset('foto/'.$p->foto_produk) }}" alt="" style="width: 100px"></td>
                     
                                    <td>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{$p->id}}">Edit</button> <div class="modal fade" id="editModal{{$p->id}}" tabindex="-1" aria-labelledby="editModal{{$p->id}}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModal{{$p->id}}Label">Edit Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form for editing data -->
                    <form action="{{ url('Product-Update/'.$p->id) }}" method="POST">
    @csrf
    @method('PUT')
                        <div class="mb-3">
                            <input type="text" class="form-control" id="editNamaProduk{{$p->nama_produk}}" name="nama_produk" value="{{$p->nama_produk}}" >
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="editDeskripsi{{$p->deskripsi}}" name="deskripsi" value="{{$p->deskripsi}}" >
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="editHarga{{$p->harga}}" name="harga" value="{{$p->harga}}" >
                        </div>
                      
                        
                        <div class="mb-3">
                            <input type="file" class="form-control" id="editFotoProduk{{$p->foto_produk}}" name="foto_produk" value="{{$p->foto_produk}}" >
                        </div>
                        
                            
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
                                       <a href="{{ route('Product-Delete', $p->id) }}"class="btn btn-danger delete-btn"
       onclick="event.preventDefault();
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    document.getElementById('delete-form-{{$p->id}}').submit();
                }">
        Hapus
    </a>

    <form id="delete-form-{{$p->id}}" action="{{ route('Product-Delete', $p->id) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
                                    </td>
                                </tr>
                               
                              @php ($counter++) @endforeach
                                </tbody>
                            </table>
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
    <script src="{{ url('') }}/template/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="{{ url('') }}/template/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>