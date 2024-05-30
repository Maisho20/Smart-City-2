<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <h3>Smart City</h3>
    </div>
    <ul class="nav">
        <li class="nav-item nav-category">
            <span class="nav-link">Smart CIty</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('admin_smart') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Smart CIty</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('admin_berita') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Berita</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('admin_dokumen') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-dialpad"></i>
                </span>
                <span class="menu-title">Dokumen</span>
            </a>
        </li>

        {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Lunas</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Batal</span>
            </a>
        </li> --}}
    </ul>
</nav>
