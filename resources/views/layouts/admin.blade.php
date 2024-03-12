<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- External CSS -->
    {{-- CSS Material --}}
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('/menarra/assets/css/styles.css') }}" type="text/css" media="screen" />
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="{{ asset('/dataTables/datatables.min.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('dataTables/dataTable/css/dataTables.bootstrap5.min.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css" /> --}}
    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('/css/admin-style.css') }}">
    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('img/ksaj.png') }}">

    <!-- Favicon -->
    <link href="/argon-dashboard-master/assets-old/img/brand/favicon.png" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <link href="/argon-dashboard-master/assets-old/vendor/nucleo/css/nucleo.min.css" rel="stylesheet">
    <link href="/argon-dashboard-master/assets-old/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        rel="stylesheet">

    <!-- Argon CSS -->
    <link type="text/css" href="/argon-dashboard-master/assets-old/css/argon.min.css" rel="stylesheet">


</head>

<body>
    @include('partials.navbar_admin')
    <main class="content">
        @include('partials.topbar_admin')
        <div class="container mt-4">
            @yield('container')
        </div>
    </main>

    <!-- Core -->
    <script src="/argon-dashboard-master/assets-old/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/argon-dashboard-master/assets-old/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Argon JS -->
    <script src="/argon-dashboard-master/assets-old/js/argon.min.js"></script>

    <!-- jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('dataTables/dataTable/js/jquery.dataTables.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <!-- CDN Fontawesome -->
    <script src="https://kit.fontawesome.com/32f82e1dca.js" crossorigin="anonymous"></script>
    <!-- Datatables JS -->
    <script src="{{ asset('/dataTables/datatables.min.js') }}"></script>
    {{-- <script src="{{ asset('dataTables/dataTable/js/dataTables.bootstrap5.min.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script> --}}
    @stack('scripts')
    <!-- Eksternal JS-->
    <script>
        $(document).ready(function() {
            $('.sidebarCollapseDefault').on('click', function() {
                $('.sidebar').toggleClass('active');
                $('.content').toggleClass('active');
            });
        });
    </script>

</body>

</html>
