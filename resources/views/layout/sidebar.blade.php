<div class="sidebar sidebar-main sidebar-default">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="category-content">
                <div class="sidebar-user-material-content">
                    <a href="#"><img src="{{ asset('/') }}assets/images/placeholder.jpg" class="img-circle img-responsive" alt=""></a>
                    <h6>{{Auth::user()->user_name}}</h6>
                    <span class="text-size-small">Lautan Jati</span>
                </div>

                <div class="sidebar-user-material-menu">
                    <a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
                </div>
            </div>

            <div class="navigation-wrapper collapse" id="user-nav">
            <ul class="navigation">
                    <li><a href="#"><i class="icon-switch2"></i> <span>Logout</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Dashboard</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class="active"><a href="{{ url('/') }}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <!-- /main -->

                    <!-- Forms -->
                    <li class="navigation-header"><span>Menu Utama</span> <i class="icon-menu" title="Barang"></i></li>
                    <li>
                        <a href="#"><i class="icon-stack2"></i> <span>Barang</span></a>
                        <ul>
                            <li><a href="{{ route('sidebar.barang.tambah') }}">Tambah Barang</a></li>
                            <li><a href="{{ route('sidebar.barang.lihat') }}">Lihat Barang</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-people"></i> <span>Customer</span></a>
                        <ul>
                            <li><a href="{{ route('sidebar.customer.tambah') }}">Tambah Customer</a></li>
                            <li><a href="{{ route('sidebar.customer.lihat') }}">Lihat Customer</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-cash3"></i> <span>Invoice</span></a>
                        <ul>
                            <li><a href="{{ route('sidebar.invoice.tambah') }}">Tambah Invoice</a></li>
                            <li><a href="{{ route('sidebar.invoice.list') }}">Lihat Invoice</a></li>
                            <li><a href="{{ route('sidebar.invoice.revisi') }}">Revisi Invoice</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-truck"></i> <span>Kendaraan</span></a>
                        <ul>
                            <li><a href="{{ route('sidebar.kendaraan.tambah') }}">Tambah Kendaraan</a></li>
                            <li><a href="{{ route('sidebar.kendaraan.list') }}">Lihat Kendaraan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-accessibility"></i> <span>User</span></a>
                        <ul>
                            <li><a href="#">Tambah User</a></li>
                            <li><a href="{{ route('sidebar.user.list') }}">Lihat User</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-graph"></i> <span>Statistik</span></a>
                        <ul>
                            <li><a href="#">Lihat Statistik</a></li>
                        </ul>
                    </li>
                    <!-- /page kits -->

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>