<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
    <div class="offcanvas-header justify-content-center">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Your cart</span>
                <span class="badge bg-primary rounded-pill">{{ $cart !== null ? count($cart) : '0' }}</span>
            </h4>
            <ul class="list-group mb-3">

                @if ($cart !== null)
                    @foreach ($cart as $cart)
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">{{ $cart['name'] }}</h6>
                                <div class="tw-flex tw-justify-between justify-items-center tw-items-center">
                                    <div class="row">
                                        <small class="col-2 text-truncate">
                                            {{ $cart['details'] }}
                                        </small>
                                        <span class="col-8 text-body-secondary">&dollar;{{ $cart['price'] }}.00</span>
                                    </div>
                                </div>
                            </div>

                        </li>
                    @endforeach
                @endif

            </ul>

            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </div>
    </div>
</div>
