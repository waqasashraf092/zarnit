<!-- Main Header / Header Style Three -->
<header class="main-header header-style-three">

    <!-- Header Top Two -->
    <div class="header-top_two">
        <div class="auto-container">
            <div class="inner-container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">

                    <!-- Info List -->
                    <ul class="header-top_list-two d-flex flex-wrap">
                        <li>
                            <span class="icon fa-classic fa-solid fa-envelope fa-fw"></span>
                            <a href="mailto:support@zanite.inc">support@zanite.inc</a>
                        </li>
                        <li>
                            <span class="icon fa-classic fa-solid fa-location-dot fa-fw"></span>
                            1111B S Governors Ave STE 21630
                            Dover, DE, 19904 US
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="inner-container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">

                    <div class="logo-box">
                        <div class="logo">
                            <a href="#">
                                <img src="{{ asset('images/zarnite-logo.png') }}" style="height: 28px !important;" alt="" title="Zarnit">
                            </a>
                        </div>
                    </div>

                    <div class="nav-outer d-flex flex-wrap">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('home') }}">Products</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('about') }}">About</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('home') }}">Blogs</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('home') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Main Menu End-->
                    <div class="outer-box d-flex align-items-center flex-wrap">

                        <!-- Button Box -->
                        <div class="main-header_button">
                            <a href="{{ route('home') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Get Started</span>
                                    <span class="text-two">Get Started</span>
                                </span>
                            </a>
                        </div>

                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler">
                            <span class="icon fa-classic fa-solid fa-bars fa-fw"></span>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Header Lower-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn">
            <span class="icon fa-xmark"></span>
        </div>

        <nav class="menu-box">
            <div class="nav-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/mobile-logo.svg') }}" alt="" title="">
                </a>
            </div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>
<!-- End Main Header -->
