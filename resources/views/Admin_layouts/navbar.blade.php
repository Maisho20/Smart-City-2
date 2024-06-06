<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                    <div class="navbar-profile">
                        <img class="img-xs rounded-circle"
                            src="{{ asset('admin_template/template/assets/images/faces/face15.jpg') }}" alt="">
                        <p class="mb-0 d-none d-sm-block navbar-profile-name">Admin</p>
                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="profileDropdown">
                    <h6 class="p-3 mb-0">Actions</h6>
                    <div class="dropdown-divider"></div>
                    {{-- <a class="dropdown-item preview-item" href="{{ route('home') }}">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-home text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Home</p>
                        </div>
                    </a> --}}
                    {{-- <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Settings</p>
                        </div>
                    </a> --}}
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-logout text-danger"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Log out</p>
                        </div>
                    </a>
                    <form id="logout-form" action="{{ route('home') }}" method="GET">
                        @csrf</form>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
        </button>
    </div>
</nav>
