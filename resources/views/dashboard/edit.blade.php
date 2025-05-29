<x-app-layout>

    {{-- <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48"
                    alt="Aero"></div>
            <p>Please wait...</p>
        </div>
    </div> --}}

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- Main Search -->
    <div id="search">
        <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
        <form>
            <input type="search" value="" placeholder="Search..." />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- Right Icon menu Sidebar -->
    @include('components.dashboard-components.settings-bar')

    <!-- Left Sidebar -->
    @include('components.dashboard-components.sidebar')

    <!-- Right Sidebar -->
    @include('components.dashboard-components.right-aside')

    <!-- Main Content -->
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>eCommerce Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a>
                            </li>
                            <li class="breadcrumb-item">eCommerce</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                                class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                                class="zmdi zmdi-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="container-fluid">

                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <form method="POST" action="{{ route('edit.product', [$product->id]) }}"
                                enctype="multipart/form-data">
                                @csrf

                                <!-- Name -->
                                <div>
                                    <x-input-label for="name" :value="__('Product Name')" />
                                    <x-text-input id="name" class="tw-block mt-1 tw-w-full tw-rounded-md"
                                        type="text" name="name" :value="$product->name" autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="tw-mt-2" />
                                </div>

                                <!-- Price -->
                                <div class="tw-mt-4">
                                    <x-input-label for="email" :value="__('Price')" />
                                    <x-text-input id="email" class="tw-block tw-mt-1 tw-w-full tw-rounded-md"
                                        type="text" name="price" :value="$product->price" autocomplete="username" />
                                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                </div>

                                <!-- Image -->
                                <div class="tw-mt-4">
                                    <x-input-label for="password" :value="__('Product Image')" />

                                    <x-text-input id="password" class="tw-block tw-rounded-md tw-mt-1 tw-w-full"
                                        type="file" name="image" />

                                    <x-input-error :messages="$errors->get('image')" class="tw-mt-2" />
                                </div>

                                <!-- category -->
                                <div class="tw-mt-4">
                                    <x-input-label for="password" :value="__('Product Category')" />

                                    <select name="category" id=""
                                        class="tw-block tw-rounded-md tw-mt-1 tw-w-full">
                                        {{ $product->category_name }}
                                        @foreach ($myCategories as $category)
                                            <option value="{{ $category->category_name }}">
                                                {{ $category->category_name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <x-input-error :messages="$errors->get('category')" class="tw-mt-2" />
                                </div>


                                <!-- Confirm Password -->
                                <div class="tw-mt-4">
                                    <x-input-label for="" :value="__('Seller name')" />

                                    <x-text-input id="email" class="tw-block tw-mt-1 tw-w-full tw-rounded-md"
                                        type="text" name="seller_name" :value="Auth::user()->name" />
                                    <x-input-error :messages="$errors->get('seller_name')" class="tw-mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="tw-mt-4">
                                    <x-input-label for="" :value="__('Seller phone ')" />

                                    <x-text-input id="email" class="tw-block tw-mt-1 tw-w-full tw-rounded-md"
                                        type="text" name="seller_phone" :value="Auth::user()->phone_number" autocomplete="username" />
                                    <x-input-error :messages="$errors->get('seller_phone')" class="tw-mt-2" />
                                </div>



                                <!-- Confirm Password -->
                                <div class="tw-mt-4">
                                    <x-input-label for="" :value="__('Product Details')" />

                                    <textarea name="details" class="tw-block tw-rounded-md tw-mt-1 tw-w-full" id="" cols="30" rows="3"> {{ $product->details }} </textarea>

                                    <x-input-error :messages="$errors->get('details')" class="tw-mt-2" />
                                </div>

                                <button type="submit" class="btn btn-primary tw-font-medium mt-3">Make Changes</button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
