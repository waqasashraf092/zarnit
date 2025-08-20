<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top backdrop-blur">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary fs-3" href="{{ route('home.index') }}">
            <img src="{{ asset('images/zarnite-logo.png') }}" style="height: 30px" />
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() === 'home.index' ? 'active' : ''}}" href="{{ route('home.index') }}">
                        {{ __('l.Home') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() === 'home.products' ? 'active' : ''}}" href="{{ route('home.products') }}">
                        {{ __('l.Products') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() === 'home.about' ? 'active' : ''}}" href="{{ route('home.about') }}">
                        {{ __('l.About') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() === 'blogs.index' ? 'active' : ''}}" href="{{ route('blogs.index') }}">
                        {{ __('l.Blog') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() === 'home.contact' ? 'active' : ''}}" href="{{ route('home.contact') }}">
                        {{ __('l.Contact') }}
                    </a>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-3">
                <div class="d-none d-md-flex align-items-center gap-2 text-color-z fw-bold">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-light btn-sm dropdown-toggle text-color-z border-0" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-globe me-2"></i>
                            @php
                                $languages = config('app.languages');
                                $current_lang_key = app()->getLocale();
                                $current_lang_name = $languages[$current_lang_key];
                            @endphp
                            {{ $current_lang_name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item {{ $current_lang_key === 'en' ? 'active' : '' }}" href="{{ route('lang.switch', 'en') }}">English</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ $current_lang_key === 'es' ? 'active' : '' }}" href="{{ route('lang.switch', 'es') }}">Español</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ $current_lang_key === 'fr' ? 'active' : '' }}" href="{{ route('lang.switch', 'fr') }}">Français</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ $current_lang_key === 'zh' ? 'active' : '' }}" href="{{ route('lang.switch', 'zh') }}">中文</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <button class="btn btn-outline-light btn-sm rounded-pill text-color-z fw-bold border-0" id="themeToggle">
                    <i class="bi bi-sun theme-icon-light"></i>
                    <i class="bi bi-moon theme-icon-dark d-none"></i>
                </button>

                <a href="{{ route('home.early-access') }}" class="btn btn-primary d-none d-md-inline-flex">
                    {{__('l.Get Started')}}
                </a>
            </div>
        </div>
    </div>
</nav>
