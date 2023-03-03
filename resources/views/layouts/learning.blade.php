<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Header -->
    @yield('style')
    @include('partials.landingpage.header')
</head>

<body id="top-position">
    <!-- Navbar -->
    @include('partials.landingpage.navbar')

    <!-- Content-->
    @yield('content')

    <!-- Footer -->
    @yield('script')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="{{ asset('dist/js/common.min.js') }}"></script>
</body>
