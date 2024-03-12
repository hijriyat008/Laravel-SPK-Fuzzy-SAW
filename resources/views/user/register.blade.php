<div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Sign Up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <main class="form-signin w-100 m-auto">
                        <form action="/register" method="post">
                            @csrf
                            <div class="form-floating">
                                <input type="text"
                                    class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                                    name="name" placeholder="Name" required value="{{ old('name') }}">
                                <label for="name">Nama</label>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="name@example.com" required
                                    value="{{ old('email') }}">
                                <label for="email">Email</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    id="username" name="username" placeholder="Username" required
                                    value="{{ old('username') }}">
                                <label for="username">Username</label>
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password"
                                    class="form-control rounded-bottom @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="Password" required>
                                <label for="password">Password</label>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- <div class="checkbox mb-3"> --}}
                            {{-- <label>
                                <input type="checkbox" value="remember-me"> Remember me
                                </label> --}}
                            {{-- </div> --}}
                            <div class="btn-signup1">
                                <button class="btn btn-success mt-3" type="submit">Sign Up</button>
                            </div>
                        </form>
                    </main>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn-footer-signup d-flex">
                    <p class="text-muted">&copy; KSAJ 2022</p>
                    <div class="btn-closes">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    <div class="btn-login">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">
                            <img src="/icons/users1.png" width="20px" alt="" style="margin-right:4px">
                            Log in
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
