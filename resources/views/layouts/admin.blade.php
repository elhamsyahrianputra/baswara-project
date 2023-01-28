<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Header -->
    @include('partials.admin.header')

    <!-- Style Addition -->
    @yield('style')

</head>

<body>
    <div id="app">
        
        <!-- Sidebar -->
        @include('partials.admin.sidebar')
        
        <div id="main" class='layout-navbar'>
            
            <!-- Navbar -->
            @include('partials.admin.navbar')

            <!-- Content-->
            @yield('content')

        </div>
    </div>

    <!-- Script Addition -->
    @yield('script')

    <!-- Footer -->
    @include('partials.admin.footer')

</body>

</html>