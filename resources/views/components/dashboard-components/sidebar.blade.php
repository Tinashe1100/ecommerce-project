<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.html"><img src="assets/images/logo.svg" width="25" alt="Aero"><span
                class="m-l-10">Dashboard</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    {{-- <a class="image" href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a> --}}
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        <small>{{ Auth::user()->user_type }}</small>
                    </div>
                </div>
            </li>
            <li><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>


            <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i
                        class="zmdi zmdi-copy"></i><span>E-commerce</span></a>
                <ul class="ml-menu">
                    <li><a href="{{ route('dashboard') }}">Products</a></li>
                    <li><a href="{{ route('create.product') }}">Create Ad</a></li>
                    <li><a href="{{ route('registered.categories') }}">My Categories</a></li>
                </ul>
            </li>

            <li><a href="{{ route('profile.edit') }}"><i class="zmdi zmdi-account"></i><span>Profile</span></a></li>

            <li>
                <div class="user-info">
                    {{-- <a class="image" href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a> --}}
                    <div class="detail">
                        <a href="{{ route('home') }}"><span class="m-l-10">Go to main site</span></a>
                    </div>
                </div>
            </li>


        </ul>
    </div>
</aside>
