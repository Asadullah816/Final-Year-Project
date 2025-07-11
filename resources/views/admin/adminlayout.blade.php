@extends('admin.components.header')

<div class="container-fluid position-relative d-flex p-0">

    {{-- <div id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> --}}
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
@include('admin.components.footer')