<x-layout>
    {{-- <div class="preloader-wrapper">
        <div class="preloader">
        </div>
    </div> --}}

    {{-- offcanvas drawer --}}
    @include('components.offcanvas')
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

    <section class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">

                    <div class="bootstrap-tabs product-tabs">
                        <div class="tabs-header d-flex justify-content-between border-bottom my-5">
                            <h3>{{ $product->name }}</h3>

                        </div>
                    </div>

                    <div class="card mb-3 p-3 rounded-4 shadow border-0">
                        <div class="row g-0 align-items-center ">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded"
                                    alt="Card title">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body py-0">
                                    <h1 class="card-title h1 text-muted">{{ $product->name }}</h1>
                                    <h2 class="h5">Current Price: &dollar;{{ $product->price }}.00</h2>
                                    <hr class="my-4">
                                    <p>{{ $product->details }}</p>

                                </div>



                                <div class="tw-flex tw-my-4">
                                    <form action="{{ route('cart', [$product->id]) }}" method="post">
                                        @csrf
                                        <x-primary-button
                                            class="tw-ms-3 btn btn-primary tw-px-4 tw-py-2 tw-font-medium me-2">
                                            {{ __('Add to cart') }}
                                        </x-primary-button>
                                    </form>

                                    <a href="tel:+{{ $product->phone_number }}" class="btn btn-dark">Contact seller</a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>

    <section class="py-5">
        {{-- registration cta --}}
        @include('components.store.registrationCTA')
    </section>



    <footer class="py-5">
        {{-- footer --}}
        @include('components.footer')
    </footer>
    <div id="footer-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 copyright">
                    <p>© 2023 Foodmart. All rights reserved.</p>
                </div>
                <div class="col-md-6 credit-link text-start text-md-end">
                    <p>Free HTML Template by <a href="https://templatesjungle.com/">TemplatesJungle</a> Distributed by
                        <a href="https://themewagon">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </div>

    </div>

</x-layout>
