<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            
        {{-- @role('admin') --}}
            <li class="nav-item">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-2 text-muted">
                    <span>Admin</span>
                </h6>
                <a class="nav-link pb-3 {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                Dashboard
                </a>
                <a class="nav-link pb-3 border-bottom {{ Request::is('users') ? 'active' : '' }}" aria-current="page" href="/users">
                    <span data-feather="users"></span>
                Users
                </a>
            </li>
        {{-- @role('member') --}}
            <li class="nav-item">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-2 text-muted">
                    <span>User</span>
                </h6>
                <a class="nav-link pb-3 {{ Request::is('profile') ? 'active' : '' }}" aria-current="page" href="/profile">
                    <span data-feather="user"></span>
                My Profile
                </a>
                <a class="nav-link border-bottom pb-3 {{ Request::is('editProfile') ? 'active' : '' }}" aria-current="page" href="/editProfile">
                    <span data-feather="edit-2"></span>
                Edit Profile
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link border-bottom pb-3 mt-3" aria-current="page" href="#">
                    <span data-feather="log-out"></span>
                Logout
                </a>
            </li>

        </ul>
    </div>
</nav>