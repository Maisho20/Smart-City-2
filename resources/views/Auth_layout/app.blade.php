<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>

    <!-- Favicons -->
    <link href="{{ asset('img/Smart/Logo_Kabupaten_Malang_-_Seal_of_Malang_Regency.svg.png') }}" rel="icon">
    <link href="{{ asset('img/Smart/Logo_Kabupaten_Malang_-_Seal_of_Malang_Regency.svg.png') }}" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('login_templates/vendor/fontawesome-free-6.5.2/css/all.min.css') }}" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('login_templates/css/sb-admin-2.min.css') }}" rel="stylesheet">

    {{-- custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body class="bg-gradient-custom">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" style="background: transparent;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row align-items-center">

                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <div class="p-5 my-5 text-center">
                                    <i class="fa-solid fa-person-circle-question fa-5x text-white"></i>
                                    <h1 class="h3 font-weight-bolder text-white my-3">Smart City</h1>
                                    <h2 class="h6 text-white mb-4">Sistem Informasi data oleh Admin</h2>
                                </div>
                            </div>

                            <div class="col-lg-6" style="background-color: white;">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 font-weight-bolder text-gray-900 mb-4">Selamat Datang Kembali</h1>
                                        <h2 class="h6 font-weight-normal text-gray-900 mb-4">Silahkan login dengan akun
                                            admin untuk melanjutkan</h2>
                                    </div>

                                    @yield('form')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('login_templates/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('login_templates/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('login_templates/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('login_templates/js/sb-admin-2.min.js') }}"></script>
</body>

</html>
