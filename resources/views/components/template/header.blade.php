<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <div class="d-flex align-items-center">
            <div class="pull-left p-r-10 fs-14 font-heading d-lg-block d-none">
                <span class="semi-bold">
                    @if (auth()->check())
                        {{ auth()->user()->nama }}
                    @else
                        {{ auth()->guard('mahasiswa')->user()->nama }}
                    @endif
                </span>
            </div>
        </div>

        <li class="nav-item">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-user-alt"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">Account</span>
                <div class="dropdown-divider"></div>
                @if (auth()->guard('mahasiswa')->check())
                    <a href="{{ url('profile/pengguna') }}" class="dropdown-item"><span
                            class="pull-left">Profile</span><span class="pull-left"><i
                                class="fas fa-user float-right mt-1"></i></span></a>
                @elseif (auth()->check())
                    <a href="{{ url('profile/pegawai') }}" class="dropdown-item"><span
                            class="pull-left">Profile</span><span class="pull-left"><i
                                class="fas fa-user float-right mt-1"></i></span></a>
                @endif
                <div class="dropdown-divider"></div>
                <a href="{{ url('logout') }}" class="dropdown-item"><span class="pull-left">Logout</span><span
                        class="pull-left"><i class="fas fa-power-off float-right mt-1"></i></span></a>
            </div>
        </li>
        @if (!auth()->guard('mahasiswa')->check())
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        @endif
        </li>
    </ul>
</nav>
