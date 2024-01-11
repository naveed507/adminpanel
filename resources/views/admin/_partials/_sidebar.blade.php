<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>


        <li class="nav-item nav-category">User Management</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-users menu-icon"></i>
                <span class="menu-title">Users / Customers</span>
            </a>
        </li>

        {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('meter-reading.index') }}">
                <i class="fas fa-calculator menu-icon"></i>
                <span class="menu-title">Meter Setup</span>
            </a>
        </li> --}}
        <li class="nav-item nav-category">Setup</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon fas fa-calculator"></i>
                <span class="menu-title">Meter Setup <i class="fas fa-caret-down" style="margin-left: 5px"></i></span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('meter-types') }}"> Meter Types
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('allocate-meter') }}"> Allocate Meter
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('allocated-meters') }}"> Allocated Meters
                        </a></li>

                </ul>
            </div>
        </li>




        <li class="nav-item nav-category">General</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">Settings <i class="fas fa-caret-down" style="margin-left: 5px"></i></span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.setting') }}"> Change Profile
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.password') }}"> Change Password
                        </a></li>
                </ul>
            </div>
        </li>


    </ul>
</nav>
