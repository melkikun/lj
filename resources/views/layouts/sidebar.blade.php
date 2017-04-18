<aside id="slide-out" class="side-nav white fixed">
    <div class="side-nav-wrapper">
        <div class="sidebar-profile">
            <div class="sidebar-profile-image">
                <img src="{{ asset('/') }}assets/images/profile-image.png" class="circle" alt="">
            </div>
            <div class="sidebar-profile-info">
                <a href="javascript:void(0);" class="account-settings-link">
                    <p>{{Auth::user()->user_name}}</p>
                </a>
            </div>
        </div>
        <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
            <li class="no-padding active"><a class="waves-effect waves-grey active" href="{{ route('home') }} "><i class="material-icons">settings_input_svideo</i>Dashboard</a></li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey">
                    <i class="material-icons">apps</i>Barang
                    <i class="nav-drop-icon material-icons">keyboard_arrow_right</i> 
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ route('barang.add') }}">Tambah Barang</a></li>
                        <li><a href="search.html">Lihat Barang</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</aside>