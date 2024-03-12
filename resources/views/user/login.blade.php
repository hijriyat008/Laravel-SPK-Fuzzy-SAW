<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Please Log in</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/login" method="post">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <main class="form-signin w-100 m-auto">
                            @csrf
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@example.com" required autofocus>
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>
                            {{-- <div class="checkbox mb-3"> --}}
                            {{-- <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label> --}}
                            {{-- </div> --}}
                            <div class="btn-login">
                                <button class="btn btn-primary mt-2" type="submit"> <img src="/icons/users1.png"
                                        width="20px" alt="" style="margin-right:4px">Log in
                                </button>
                            </div>
                        </main>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="text-muted">&copy; KSAJ 2022</p>
                    <div class="btn-footer-login d-flex">
                        <div class="btn-closes">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        <div class="btn-signup1">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#register">
                                Sign Up
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
