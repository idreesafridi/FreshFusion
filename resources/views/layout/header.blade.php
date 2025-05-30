 <!-- Navbar start -->
 <div class="container-fluid fixed-top">
            <div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
                        <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">123 Street, New York</a></small>
                        <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">Email@Example.com</a></small>
                    </div>
                    <div class="top-link pe-2">
                        <a href="{{ route('privacy_policy') }}" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                        <a href="{{ route('terms&conditions') }}" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                        <a href="{{ route('dashboard') }}" class="text-white"><small class="text-white ms-2">Admin</small></a>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center gap-2">
                        <img src="{{ asset('img/Logo.jpg') }}" alt="FreshFusion Logo"
                             class="brand-image img-circle elevation-3"
                             style="opacity: .8; width: 40px; height: 40px; object-fit: cover;">
                        <h1 class="text-primary display-6 m-0">FreshFusion</h1>
                    </a>{{--Fruitables --}}
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                            <a href="{{ route('shop') }}" class="nav-item nav-link {{ request()->routeIs('shop') ? 'active' : '' }}">Shop</a>
                            <a href="{{ route('shop-detail') }}" class="nav-item nav-link {{ request()->routeIs('shop-detail') ? 'active' : '' }}">Shop Detail</a>

                            <div class="nav-item dropdown">
                                @php
                                    $pagesRoutes = ['cart', 'checkout', 'testimonial', '404'];
                                @endphp
                                <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs(...$pagesRoutes) ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="{{ route('cart') }}" class="dropdown-item {{ request()->routeIs('cart') ? 'active' : '' }}">Cart</a>
                                    <a href="{{ route('checkout') }}" class="dropdown-item {{ request()->routeIs('checkout') ? 'active' : '' }}">Checkout</a>
                                    <a href="{{ route('testimonial') }}" class="dropdown-item {{ request()->routeIs('testimonial') ? 'active' : '' }}">Testimonial</a>
                                    <a href="{{ route('404') }}" class="dropdown-item {{ request()->routeIs('404') ? 'active' : '' }}">404 Page</a>
                                </div>
                            </div>

                            <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                        </div>

                        <div class="d-flex m-3 me-0">
                            <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                            <a href="{{ route('cart') }}" class="position-relative me-4 my-auto">
                                <i class="fa fa-shopping-bag fa-2x"></i>
                                <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                            </a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link  {{ request()->routeIs(...$pagesRoutes) ? 'active' : '' }}" ><i class="fas fa-user fa-2x"></i></a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    @auth
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">Setting</a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                            </button>
                                        </form>
                                    @endauth

                                    @guest
                                        <a href="{{ route('login') }}" class="dropdown-item">
                                            <i class="fas fa-sign-in-alt mr-2"></i> Login
                                        </a>
                                    @endguest
                                </div>
                            </div>    
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->
