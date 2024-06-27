<aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('User-Index') }}"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Data User</span>
                            </a>
                        </li>
                         @if (Auth::user()->role_id == 'user')
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('Home') }}"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Home</span>
                            </a>
                        </li>
                         @endif
                      @if (Auth::user()->role_id == 'admin')
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="
                            {{ route('Product-Index') }}"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Data Produk</span>
                            </a>
                        </li>
                          
                      @endif
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('Order-Index') }}"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">Data Order</span>
                            </a>
                        </li>
                       
                      
                       
                      
                        <li class="text-center p-20 upgrade-btn">
                          
                                  <!-- Example split danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-primary sidebar-link waves-effect waves-dark sidebar-link">Data Produksi</button>
  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    @if (Auth::user()->role_id == 'admin')
       <li><a href="{{ route('Transactions-all') }}" class="btn btn-outline-info sidebar-link waves-effect waves-dark sidebar-link">Data Semua Transaksi</a></li>
        
    @endif
    <li><a href="{{ route('Transactions-Index', 'Baru Masuk') }}" class="btn btn-info sidebar-link waves-effect waves-dark sidebar-link">Baru Masuk</a></li>
    <li><a href="{{ route('Transactions-Index', 'Belum Diproduksi') }}" class="btn btn-danger sidebar-link waves-effect waves-dark sidebar-link">Belum Produksi</a></li>
    <li><a href="{{ route('Transactions-Index', 'Sedang Diproduksi') }}" class="btn btn-warning">Sedang Produksi</a></li>
    <li><a href="{{ route('Transactions-Index', 'Selesai Diproduksi') }}" class="btn btn-success">Selesai Produksi</a></li>
    
  </ul>
</div>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                          
                                  <!-- Example split danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-success">Data Transaksi</button>
  <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="{{ route('Transactions-Index-Transaksi', 'Lunas') }}" class="btn btn-info">Transaksi Lunas</a></li>
    <li><a href="{{ route('Transactions-Index-Transaksi', 'Belum Lunas') }}" class="btn btn-danger">Transaksi Belum Lunas</a></li>
    
    
  </ul>
</div>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                          
                                <form method="POST" action="{{ route('logout') }}"   class="btn d-grid btn-danger text-white">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
