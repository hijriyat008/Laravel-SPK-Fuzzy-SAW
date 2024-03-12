<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div>
            <button class="sidebarCollapseDefault btn p-0 border-0 d-none d-md-block" aria-label="Hamburger Button">
                <i class="fa-solid fa-bars"></i>
            </button>
            <button data-bs-toggle="offcanvas" data-bs-target=".sidebar" aria-controls="sidebar"
                aria-label="Hamburger Button" class="sidebarCollapseMobile btn p-0 border-0 d-block d-md-none">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        <ul class="nav justify-content-end">
            <div class="dropdown mx-4">
                @if (empty(auth()->user()->dataset->user_id))
                @else
                    @if (auth()->user()->dataset->jk == 'P')
                        <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/icons/woman.png" width="40px"
                                style="margin-right:5px; filter: drop-shadow(2px 2px 2px rgb(0, 0, 0));" alt="">
                        </a>
                    @else
                        <a class="nav-link dropdown-toggle" type="button"id="dropdownMenuButton2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/icons/man.png" width="40px"
                                style="margin-right:5px; filter: drop-shadow(2px 2px 2px rgb(0, 0, 0));" alt="">
                        </a>
                    @endif
                @endif
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <li>
                        <p> {{ auth()->user()->name }}</p>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Log Out</button>
                        </form>
                    </li>
                </ul>
            </div>
        </ul>
    </div>
</nav>
