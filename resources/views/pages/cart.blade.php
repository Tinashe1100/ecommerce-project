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


    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li class="tw-mr-2"><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>



            <div class="tw-my-12 table-responsive cart_info">
                <table class="table table-borderless">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description">Name</td>
                            <td class="price">Price</td>
                            <td class="quantity">Details</td>
                            <td class="total">Action</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>

                        @if ($cart !== null)
                            @foreach ($cart as $cart)
                                <tr>
                                    <td class="cart_product tw-w-3/4 md:tw-w-1/5">
                                        <a href=""><img src="{{ asset('storage/' . $cart['image']) }}"
                                                alt="" class="tw-w-full tw-h-full"></a>
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href="">{{ $cart['name'] }}</a></h4>
                                        <p>Web ID: 1089772</p>
                                    </td>
                                    <td class="cart_price">
                                        <p>&dollar;{{ $cart['price'] }}.00</p>
                                    </td>
                                    <td class="cart_price">
                                        <p>{{ $cart['details'] }}</p>
                                    </td>
                                    <td class="cart_price">
                                        <a href="tel:+{{ $cart['seller_phone'] }}" class="btn btn-primary">Contact
                                            seller</a>
                                    </td>

                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->



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
