<!-- Header -->
@include('layouts.admin.partials.header')

@yield('style')

<!-- Main Sidebar Container -->
@include('layouts.admin.partials.sidebar')

    <!-- Navbar -->
    @include('layouts.admin.partials.navbar')


    <!-- Content-->
    @yield('content')

<!-- Footer -->
@include('layouts.admin.partials.footer')

@yield('script')