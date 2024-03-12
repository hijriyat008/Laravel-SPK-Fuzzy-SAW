<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- My CSS --}}
    <link rel="stylesheet" href="/css/login_admin.css">
    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('img/ksaj.png') }}">
</head>

<body>
    <div class="container mt-4">
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="login-box">
                        <h2>Login</h2>
                        <form action="/login_admin" method="post">
                            @csrf
                            <div class="user-box">
                                <input type="username" class="@error('username') is-invalid @enderror" id="username"
                                    name="username" placeholder="Username" required autofocus autocomplete="off"
                                    value="{{ old('username') }}">
                                <label for="username">Username</label>
                            </div>
                            <div class="user-box">
                                <input type="password" class="" id="password" name="password"
                                    placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>
                            <button>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Submit</button>
                        </form>
                        <p class="mt-5 mb-3 text-muted">&copy; KSAJ 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
