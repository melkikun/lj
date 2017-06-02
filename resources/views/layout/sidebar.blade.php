 <div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        {{-- <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{ asset('/') }}assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">{{Auth::user()->user_name}}</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;{{Auth::user()->role}}
                        </div>
                    </div>

                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="#"><i class="icon-cog3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li>
                        <a href="{{ url('home') }}">
                            <i class="icon-home4"></i> 
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cubes"></i> <span>Barang</span></a>
                        <ul>
                            <li><a href="{{ route('sidebar.barang.tambah') }}">Tambah Barang</a></li>
                            <li><a href="{{ route('sidebar.barang.lihat') }}">Lihat Barang</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-money"></i> <span>Invoice</span></a>
                        <ul>
                            <li><a href="{{ route('sidebar.barang.tambah') }}">Tambah Invoice</a></li>
                            <li><a href="{{ route('sidebar.barang.lihat') }}">Lihat Invoice</a></li>
                            <li><a href="{{ route('sidebar.barang.lihat') }}">Edit Invoice</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users"></i> <span>Customer/Toko</span></a>
                        <ul>
                            <li><a href="{{ route('sidebar.customer.tambah') }}">Tambah Customer</a></li>
                            <li><a href="{{ route('sidebar.customer.lihat') }}">Lihat Customer</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-car"></i> <span>Kendaraan</span></a>
                        <ul>
                            <li><a href="{{ route('sidebar.customer.tambah') }}">Tambah Kendaraan</a></li>
                            <li><a href="{{ route('sidebar.customer.lihat') }}">Lihat Kendaraan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-area-chart"></i> <span>Statistik</span></a>
                        <ul>
                            <li><a href="{{ route('sidebar.customer.tambah') }}">Tambah Statistik</a></li>
                            <li><a href="{{ route('sidebar.customer.lihat') }}">Lihat Statistik</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user"></i> <span>User</span></a>
                        <ul>
                            <li><a href="{{ route('sidebar.customer.tambah') }}">Tambah User</a></li>
                            <li><a href="{{ route('sidebar.customer.lihat') }}">Lihat User</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>