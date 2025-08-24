@php
    $menu = [
        [
            'name' => __('l.Home'),
            'href' => route('home.index'),
            'active' => Route::currentRouteName() === 'home.index' ? 'active' : '',
        ],
        [
            'name' => __('l.Products'),
            'href' => route('home.products'),
            'active' => Route::currentRouteName() === 'home.products' ? 'active' : '',
        ],
        [
            'name' => __('l.About'),
            'href' => route('home.about'),
            'active' => Route::currentRouteName() === 'home.about' ? 'active' : '',
        ],
        [
            'name' => __('l.Blog'),
            'href' => route('blogs.index'),
            'active' => Route::currentRouteName() === 'blogs.index' ? 'active' : '',
        ],
        [
            'name' => __('l.Contact'),
            'href' => route('home.contact'),
            'active' => Route::currentRouteName() === 'home.contact' ? 'active' : '',
        ],
    ];

@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top backdrop-blur">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary fs-3" href="{{ route('home.index') }}">
            <img src="{{ asset('images/zarnite-logo.png') }}" style="height: 30px" />
        </a>

        <ul class="d-none d-lg-flex navbar-nav mx-auto">
            @foreach($menu as $item)
                <li class="nav-item">
                    <a class="nav-link {{ $item['active'] }}" href="{{ $item['href'] }}">
                        {{ $item['name'] }}
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="d-flex align-items-center gap-lg-3 gap-1">
            <div class="btn-group" style="min-width: 52px">
                <button type="button" class="btn btn-outline-light btn-sm rounded text-color-z border-0" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-globe me-lg-2 "></i>
                    @php
                        $languages = config('app.languages');
                        $current_lang_key = app()->getLocale();
                        $current_lang_name = $languages[$current_lang_key];
                    @endphp
                    <span class="d-none d-lg-inline">{{ $current_lang_name }}</span>
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

            <button style="min-width: 52px" class="btn btn-outline-light btn-sm rounded-pill text-color-z fw-bold border-0" id="themeToggle">
                <i class="bi bi-sun theme-icon-light"></i>
                <i class="bi bi-moon theme-icon-dark d-none"></i>
            </button>

            <a href="{{ route('home.early-access') }}" class="btn btn-primary d-none d-md-inline-flex">
                {{__('l.Get Started')}}
            </a>

            <button style="min-width: 52px" class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMobileMenu" aria-controls="offcanvasMobileMenu">
                <i class="bi bi-list text-color-z" style="font-size:28px"></i>
                <i class="bi bi-list text-color-z d-none" style="font-size: 28px"></i>
            </button>
        </div>
    </div>
</nav>

<div style="width: 280PX" class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasMobileMenu" aria-labelledby="offcanvasMobileMenuLabel">
    <div class="offcanvas-header">
        <div class="offcanvas-title" id="offcanvasMobileMenuLabel">
            <img src="{{ asset('images/zarnite-logo.png') }}" style="height: 30px" />
        </div>

        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="list-group mb-4">
            @foreach($menu as $item)
                <a href="{{ $item['href'] }}" class="list-group-item list-group-item-action {{ $item['active'] }}" aria-current="true">
                    {{ $item['name'] }}
                </a>
            @endforeach
        </div>
        <a href="{{ route('home.early-access') }}" class="btn btn-primary btn-lg w-100">
            {{__('l.Get Started')}}
        </a>
    </div>
</div>
