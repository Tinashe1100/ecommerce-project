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
                        <li class="tw-flex tw-space-y-2 tw-justify-between">
                            <h6 class="tw-font-medium ">{{ $cart['name'] }}</h6>
                            <p class="tw-text-end  col-8 text-body-secondary">&dollar;{{ $cart['price'] }}.00</p>
                        </li>
                    @endforeach
                @endif
                <a href="{{ route('my-cart') }}" class="btn btn-primary btn-lg">View Cart</a>
            </ul>

        </div>
    </div>
</div>
