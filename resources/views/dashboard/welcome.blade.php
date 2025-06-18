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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover product_item_list c_table theme-color mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th data-breakpoints="xs">Price</th>
                                            <th data-breakpoints="xs md">Status</th>
                                            <th data-breakpoints="sm xs md">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($authUserProducts as $product)
                                            <tr>
                                                <td> {{ $product->id }} </td>

                                                <td><img src="{{ asset('storage/' . $product->image) }}" width="48"
                                                        alt="Product img"></td>
                                                <td>
                                                    <h5> {{ $product->name }} </h5>
                                                </td>
                                                <td><span class="text-muted"> {{ $product->category }} </span></td>
                                                <td class="tw-font-semibold">&dollar;{{ $product->price }}.00</td>

                                                <td> <span class="btn btn-success">Status</span> </td>
                                                <td>
                                                    <a href="{{ route('product.edit', [$product->id]) }}"
                                                        class="btn btn-default waves-effect waves-float btn-sm waves-green"><i
                                                            class="zmdi zmdi-edit"></i></a>
                                                    <a href="{{ route('product.drop', [$product->id]) }}"
                                                        class="btn btn-default waves-effect waves-float btn-sm waves-red"><i
                                                            class="zmdi zmdi-delete"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="body">
                                <ul class="pagination pagination-primary m-b-0">
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i
                                                class="zmdi zmdi-arrow-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"><i
                                                class="zmdi zmdi-arrow-right"></i></a></li>
                                </ul>
                            </div>

                            <a href="{{ route('create-product') }}" class="btn btn-primary mt-4 tw-font-semibold">Add
                                Product</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
