<x-layout>
    {{-- <div class="preloader-wrapper">
        <div class="preloader">
        </div>
    </div> --}}

    {{-- offcanvas cart --}}
    <x-offcanvas />

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch" aria-labelledby="Search">
        <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Search</span>
                </h4>
                <form role="search" action="index.html" method="get" class="d-flex mt-3 gap-0">
                    <input class="form-control rounded-start rounded-0 bg-light" type="email"
                        placeholder="What are you looking for?" aria-label="What are you looking for?">
                    <button class="btn btn-dark rounded-end rounded-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>

    {{-- header --}}
    @include('components.header')

    <section class="py-5 overflow-hidden">
        {{-- categories --}}
        @include('components.store.categories')
    </section>

    <section class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="bootstrap-tabs product-tabs">
                        <div class="tabs-header d-flex justify-content-between border-bottom my-5">
                            <h3>Trending Products</h3>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a href="#" class="nav-link text-uppercase fs-6 active" id="nav-all-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-all">All</a>

                                </div>
                            </nav>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                                aria-labelledby="nav-all-tab">

                                <div
                                    class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                                    {{-- product item --}}
                                    @include('components.store.product-item')

                                </div>
                                <!-- / product-grid -->

                            </div>

                            <div class="tab-pane fade" id="nav-fruits" role="tabpanel" aria-labelledby="nav-fruits-tab">

                                <div
                                    class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                                    @include('components.store.product-item')

                                </div>
                                <!-- / product-grid -->

                            </div>
                            <div class="tab-pane fade" id="nav-juices" role="tabpanel" aria-labelledby="nav-juices-tab">

                                <div
                                    class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">


                                    @include('components.store.product-item')

                                </div>
                                <!-- / product-grid -->

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        @include('components.store.offers')
    </section>

    <footer class="py-5">
        {{-- footer --}}
        @include('components.footer')
    </footer>
    <div id="footer-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 copyright">
                    <p>Adventist Online Marketplace. All rights reserved.</p>
                </div>

            </div>
        </div>

    </div>

</x-layout>
