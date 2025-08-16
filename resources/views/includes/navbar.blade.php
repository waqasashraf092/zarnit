<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top backdrop-blur">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary fs-3" href="{{ route('home.index') }}">
            <img src="{{ asset('images/zarnite-logo.png') }}" style="height: 40px" />
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home.products') ? 'active' : '' }}" href="{{ route('home.products') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ route('home.about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('blogs') ? 'active' : '' }}" href="{{ route('blogs.index') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}" href="{{ route('home.contact') }}">Contact</a>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-3">
                <div class="d-none d-md-flex align-items-center gap-2 text-color-z fw-bold">
                    <i class="bi bi-globe"></i>
                    <span class="small">English</span>
                </div>

                <button class="btn btn-outline-light btn-sm rounded-pill text-color-z fw-bold border-0" id="themeToggle">
                    <i class="bi bi-sun theme-icon-light"></i>
                    <i class="bi bi-moon theme-icon-dark d-none"></i>
                </button>

                <a href="{{ route('home.early-access') }}" class="btn btn-primary d-none d-md-inline-flex">Get Started</a>
            </div>
        </div>
    </div>
</nav>
