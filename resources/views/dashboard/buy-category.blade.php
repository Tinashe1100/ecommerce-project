<x-app-layout>

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48"
                    alt="Aero"></div>
            <p>Please wait...</p>
        </div>
    </div>

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
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table c_table inbox_table">
                                    <form action="{{ route('buy.category') }}" method="post">
                                        @csrf
                                        @foreach ($categories as $category)
                                            <div class="tw-flex tw-justify-between tw-items-center">
                                                <div class="checkbox">
                                                    <input id="{{ $category->category_name }}" type="checkbox"
                                                        name="category_name[]" value=" {{ $category->category_name }} ">
                                                    <label
                                                        for="{{ $category->category_name }}">{{ $category->category_name }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                        <button type="submit" class="btn btn-primary">Buy Category(s)</button>
                                    </form>

                                </table>
                            </div>


                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
