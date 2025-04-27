<style>
    /* Grey hover background for nav links */
.nav-sidebar .nav-link:hover {
    background-color: #e0e0e0 !important; /* Light grey */
    color: #000 !important;               /* Optional: make text black */
}

/* Optional: Ensure active state matches your color theme */
.nav-sidebar .nav-link.active {
    background-color: #a8aeb1 !important; /* Your light green */
    color: #000 !important;
}
</style>

<!-- Brand Logo -->
<a href="{{ route('dashboard') }}" class="brand-link">
    <img src="{{ asset('img/Logo.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light" style="color: rgb(78, 128, 78)"><strong>FreshFusion SHOP</strong> </span>
</a>
<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <strong><a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a></strong>
            </li>
            <li class="nav-item">
                <strong><a href="{{ route('admin-category') }}" class="nav-link {{ request()->routeIs('admin-category') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-file-alt"></i>
                    <p>Category</p>
                </a></strong>
            </li>
            {{-- <li class="nav-item">
                <strong><a href="{{ route('admin-subcategory') }}" class="nav-link {{ request()->routeIs('admin-subcategory') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-file-alt"></i>
                    <p>Sub Category</p>
                </a></strong>
            </li> --}}
            <li class="nav-item">
                <strong><a href="{{ route('admin-product') }}" class="nav-link {{ request()->routeIs('admin-product') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tag"></i>
                    <p>Products</p>
                </a></strong>
            </li>
            {{-- <li class="nav-item">
                <strong><a href="#" class="nav-link">
                    <i class="fas fa-truck nav-icon"></i>
                    <p>Shipping</p>
                </a></strong>
            </li> --}}
            <li class="nav-item">
                <strong><a href="{{ route('admin-order') }}" class="nav-link {{ request()->routeIs('admin-order') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-shopping-bag"></i>
                    <p>Orders</p>
                </a></strong>
            </li>
            {{-- <li class="nav-item">
                <strong><a href="discount.html" class="nav-link {{ request()->is('discount') ? 'active' : '' }}">
                    <i class="nav-icon fa fa-percent" aria-hidden="true"></i>
                    <p>Discount</p>
                </a></strong>
            </li> --}}
            <li class="nav-item">
                <strong><a href="{{ route('admin-user') }}" class="nav-link {{ request()->routeIs('admin-user') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Users</p>
                </a></strong>
            </li>
            <li class="nav-item">
                <strong><a href="{{ route('admin-pages') }}" class="nav-link {{ request()->is('pages') ? 'active' : '' }}">
                    <i class="nav-icon far fa-file-alt"></i>
                    <p>Pages</p>
                </a></strong>
            </li>
        </ul>
    </nav>

    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
