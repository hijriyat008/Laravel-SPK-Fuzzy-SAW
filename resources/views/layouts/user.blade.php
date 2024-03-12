<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('/menarra/assets/css/styles.css') }}" type="text/css" media="screen" />
    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('/css/user-style.css') }}">
    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('img/ksaj.png') }}">
</head>

<body>
    @include('partials.navbar_user')
    <main class="content">
        @include('partials.topbar_user')
        <div class="container mt-4">
            @if (session()->has('Success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('Success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Failed..Something is wrong with this field!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @yield('container')
        </div>
    </main>


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
    <!-- Eksternal JS-->
    <script>
        $(document).ready(function() {
            $('.sidebarCollapseDefault').on('click', function() {
                $('.sidebar').toggleClass('active');
                $('.content').toggleClass('active');
            });
        });
    </script>

    @include('user.script')

</body>

</html>
