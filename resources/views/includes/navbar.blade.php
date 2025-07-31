<nav class="navbar navbar-expand-lg fixed-top white-nav" id="navbar">
    <div class="container mw-1880">
        <a class="navbar-brand me-50" href="{{ route('home') }}">
            <img src="{{ asset('images/zarnite-logo.png') }}" style="width: 140px" class="main-logo" alt="logo">
            <img src="{{ asset('images/zarnite-logo.png') }}" style="width: 140px" class="white-logo d-none" alt="logo">
        </a>
        <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <span class="burger-menu">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </span>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('home') }}">
                        Products
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('home') }}">
                        About
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('home') }}">
                        Blogs
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('home') }}">
                        Contact
                    </a>
                </li>
            </ul>
        </div>

        <ul class="d-sm-flex d-none p-0 m-0 list-unstyled justify-content-end align-items-center others-options">
            <li class="option-item">
                <div class="dropdown">
                    <button class="btn btn-sm border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ri-global-line"></i>
                        <span>English</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="#">
                                <span>English</span>
                                <i class="ri-check-line"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="#">
                                <span>Español</span>
                                <i class="ri-check-line"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="#">
                                <span>Français</span>
                                <i class="ri-check-line"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="#">
                                <span>中文</span>
                                <i class="ri-check-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="option-item">
                <button type="button" id="ciram-light-dark" class="ciram-light-dark btn btn-sm rounded-circle">
                    <i class="ri-moon-line"></i>
                    <i class="ri-sun-line d-none"></i>
                </button>
            </li>
            <li class="option-item">
                <a href="#" class="btn btn-warning">
                    Get Started
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="offcanvas offcanvas-end for-mobile-navbar" tabindex="-1" id="offcanvasExample">
    <div class="offcanvas-header">
        <a href="{{ route('home') }}" class="d-block logo">
            <img src="{{ asset('images/zarnite-logo.png') }}" style="width: 140px" class="main-logo" alt="logo">
            <img src="{{ asset('images/zarnite-logo.png') }}" style="width: 140px" class="white-logo d-none" alt="logo">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ri-close-large-line"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <a href="{{ route('home') }}" class="accordion-button collapsed after active">Home</a>
            </div>
            <div class="accordion-item">
                <a href="{{ route('home') }}" class="accordion-button collapsed after">Products</a>
            </div>
            <div class="accordion-item">
                <a href="{{ route('home') }}" class="accordion-button collapsed after">About</a>
            </div>
            <div class="accordion-item">
                <a href="{{ route('home') }}" class="accordion-button collapsed after">Blogs</a>
            </div>
            <div class="accordion-item">
                <a href="{{ route('home') }}" class="accordion-button collapsed after">Contact</a>
            </div>
        </div>
        <ul class="d-flex d-sm-none p-0 m-0 list-unstyled align-items-center others-options position-static mt-4">
            <li class="option-item">
                <div class="dropdown">
                    <button class="btn btn-sm border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ri-global-line"></i>
                        <span>English</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="#">
                                <span>English</span>
                                <i class="ri-check-line"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="#">
                                <span>Español</span>
                                <i class="ri-check-line"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="#">
                                <span>Français</span>
                                <i class="ri-check-line"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="#">
                                <span>中文</span>
                                <i class="ri-check-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="option-item">
                <button type="button" id="ciram-light-dark" class="ciram-light-dark btn btn-sm rounded-circle">
                    <i class="ri-moon-line"></i>
                    <i class="ri-sun-line d-none"></i>
                </button>
            </li>
            <li class="option-item">
                <a href="#" class="btn btn-warning">
                    Get Started
                </a>
            </li>
        </ul>
    </div>
</div>
