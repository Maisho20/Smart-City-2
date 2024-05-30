<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>

    <!-- plugins:css -->
    <link rel="stylesheet"
        href="{{ asset('admin_template/template/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_template/template/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet"
        href="{{ asset('admin_template/template/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin_template/template/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin_template/template/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin_template/template/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin_template/template/assets/css/style.css') }}">
    <!-- End layout styles -->
    {{-- <link rel="shortcut icon" href="{{ asset('admin_template/template/assets/images/favicon.png') }}" /> --}}
    <link href="{{ asset('img/Smart/Logo_Kabupaten_Malang_-_Seal_of_Malang_Regency.svg.png') }}" rel="icon">
    <link href="{{ asset('img/Smart/Logo_Kabupaten_Malang_-_Seal_of_Malang_Regency.svg.png') }}" rel="apple-touch-icon">

    {{-- Fonts Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css">
</head>

<style>
    html::-webkit-scrollbar {
        width: 0;
        background: transparent;
        scroll-behavior: smooth;
    }

    html::-webkit-scrollbar-thumb {
        width: 0;
        background: transparent;
        scroll-behavior: smooth;
    }

    :root {
        scroll-behavior: smooth;
    }
</style>

<body>

    <div class="container-scroller">
        @include('Admin_layouts.sidebar')

        <div class="container-fluid page-body-wrapper">
            @include('Admin_layouts.navbar')

            <div class="main-panel">
                @yield('content')

                @include('Admin_layouts.footer')
            </div>
        </div>
    </div>

    @include('scrollToTop')


    <script src="{{ asset('admin_template/template/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin_template/template/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_template/template/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('admin_template/template/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('admin_template/template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}">
    </script>
    <script src="{{ asset('admin_template/template/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin_template/template/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin_template/template/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin_template/template/assets/js/misc.js') }}"></script>
    <script src="{{ asset('admin_template/template/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin_template/template/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('admin_template/template/assets/js/dashboard.js') }}"></script>
</body>

</html>
