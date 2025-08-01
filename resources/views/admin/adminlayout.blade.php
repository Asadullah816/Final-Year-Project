<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Dashboard')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/lib/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="icon" href="{{ asset('admin/img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

</head>

<body>

    {{-- @include('admin.components.header') --}}

    <div class="container-fluid position-relative d-flex p-0">

        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @extends('admin.components.sidebar')
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('admin.components.navbar')
            @yield('content')
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <button onclick="window.scrollTo({top:0,behavior:'smooth'})"
            class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></button>
    </div>
    {{-- @include('admin.components.footer') --}}
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="{{ asset('admin/lib/chart/chart.min.js') }} " defer></script>
    <script src="{{ asset('admin/lib/easing/easing.min.js') }} " defer></script>
    <script src="{{ asset('admin/lib/waypoints/waypoints.min.js') }} " defer></script>
    <script src="{{ asset('admin/lib/owlcarousel/owl.carousel.min.js') }} " defer></script>
    <script src="{{ asset('admin/lib/tempusdominus/js/moment.min.js') }} " defer></script>
    <script src="{{ asset('admin/lib/tempusdominus/js/moment-timezone.min.js') }} " defer></script>
    <script src="{{ asset('admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }} " defer></script>

    <!-- Template Javascript -->
    <script src="{{ asset('admin/js/main.js') }}" defer></script>
</body>

</html>
