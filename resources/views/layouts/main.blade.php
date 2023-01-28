<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Header -->
    @yield('style')
    @include('partials.header')
</head>

<body id="top-position">
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Content-->
    @yield('content')

    <!-- Footer -->
    @yield('script')
    @include('partials.footer')

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="dist/js/common.min.js"></script>
    
</body>

</html>