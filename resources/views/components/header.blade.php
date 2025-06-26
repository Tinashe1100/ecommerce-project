<header>
    <div class="container-fluid">
        <div class="row py-3 border-bottom">

            <div class="col-sm-4 col-lg-3 text-center text-sm-start">
                <div class="main-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="img-fluid" width="300">
                    </a>
                </div>
            </div>

            <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-5 d-none d-lg-block">
                <div class="search-bar row bg-light p-2 my-2 rounded-4">

                    <form class=" col-md-10">
                        <div id="search-form" class="text-center" action="" method="get">

                            <input type="text" name="search" class="form-control border-0 bg-transparent"
                                placeholder="What are you looking for?" />
                        </div>


                        <button type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
                            </svg></button>

                    </form>

                </div>
            </div>

            <div
                class="col-sm-8 col-lg-4 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">
                <div class="support-box text-end d-none d-xl-block">
                    <span class="fs-6 text-muted">Welcome</span>
                    <h5 class="mb-0">{{ Auth::user() ? Auth::user()->name : '' }}</h5>
                </div>

                <ul class="d-flex justify-content-end list-unstyled m-0">
                    <li>
                        <a href="#" class="rounded-circle bg-light p-2 mx-1">
                            <svg width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="#user"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="rounded-circle bg-light p-2 mx-1">
                            <svg width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="#heart"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="d-lg-none">
                        <a href="#" class="rounded-circle bg-light p-2 mx-1" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                            <svg width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="#cart"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="d-lg-none">
                        <a href="#" class="rounded-circle bg-light p-2 mx-1" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch">
                            <svg width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="#search"></use>
                            </svg>
                        </a>
                    </li>
                </ul>

                <div class="cart text-end d-none d-lg-block dropdown">
                    <button class="border-0 bg-transparent d-flex flex-column gap-2 lh-1" type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                        <span class="fs-6 text-muted dropdown-toggle">Your Cart</span>
                        <span class="cart-total fs-5 fw-bold">$1290.00</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row py-3">
            <div class="d-flex  justify-content-center justify-content-sm-between align-items-center">
                <nav class="main-menu d-flex navbar navbar-expand-lg">

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">

                        <div class="offcanvas-header justify-content-center">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>

                        <div class="offcanvas-body">

                            {{-- <select class="filter-categories border-0 mb-0 me-5">
                                <option>Shop by Departments</option>
                                <option>Groceries</option>
                                <option>Drinks</option>
                                <option>Chocolates</option>
                            </select> --}}

                            <ul class="navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0">

                                @if (Auth::user())
                                    @if (Auth::user()->user_type === 'seller')
                                        <li class="nav-item active">
                                            <a href="{{ route('create.product') }}" class="nav-link">My Ads</a>
                                        </li>

                                        <li class="nav-item active">
                                            <a href="{{ route('registered.categories') }}" class="nav-link">My
                                                Categories</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a href="{{ route('browse') }}" class="nav-link">Browse Products</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a href="{{ route('logout') }}" class="nav-link">Logout</a>
                                        </li>
                                    @elseif (Auth::user()->user_type === 'buyer')
                                        <li class="nav-item active">
                                            <a href="{{ route('register') }}" class="nav-link">Become a seller</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a href="#" class="nav-link">Browse Products</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a href="{{ route('logout') }}" class="nav-link">Logout</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item active">
                                        <a href={{ route('home') }}" class="nav-link">Browse products</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a href="{{ route('register') }}" class="nav-link">Sign up</a>
                                    </li>
                                @endif

                            </ul>

                        </div>

                    </div>
            </div>
        </div>
    </div>
</header>
