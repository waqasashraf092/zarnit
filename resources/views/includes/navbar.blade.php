@php
    $current = Route::currentRouteName();
    $menu = [
        [
            'name' => __('l.Home'),
            'href' => route('home.index'),
            'active' => $current === 'home.index' ? 'active' : '',
        ],
        [
            'name' => __('l.Products'),
            'href' => route('products.index'),
            'active' => in_array($current, ['products.index', 'products.zarn', 'products.reolyy']) ? 'active' : '',
            'children' => [
                [
                    'name' => 'Zarn',
                    'href' => route('products.zarn'),
                    'active' => $current === 'products.zarn' ? 'active' : '',
                ],
                [
                    'name' => 'Rolly',
                    'href' => route('products.reolyy'),
                    'active' => $current === 'products.reolyy' ? 'active' : '',
                ],
            ]
        ],
        [
            'name' => __('l.About'),
            'href' => route('home.about'),
            'active' => $current === 'home.about' ? 'active' : '',
        ],
        [
            'name' => __('l.Blog'),
            'href' => route('blogs.index'),
            'active' => $current === 'blogs.index' ? 'active' : '',
        ],
        [
            'name' => __('l.Contact'),
            'href' => route('home.contact'),
            'active' => $current === 'home.contact' ? 'active' : '',
        ],
    ];

@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top backdrop-blur py-0">
    <div class="container h-100">
        <a class="navbar-brand fw-bold text-primary fs-3" href="{{ route('home.index') }}">
            <img src="{{ asset('images/zarnite-logo.png') }}" style="height: 30px" />
        </a>

        <ul class="d-none d-lg-flex align-items-center navbar-nav mx-auto h-100">
            @foreach($menu as $item)
                <li class="nav-item dropdown h-100">
                    <a class="nav-link h-100 d-flex align-items-center {{ isset($item['children']) ? 'dropdown-toggle' : '' }} {{ $item['active'] }}" href="{{ $item['href'] }}"
                       @if(isset($item['children'])) role="button" data-bs-toggle="dropdown" aria-expanded="false" @endif>
                        {{ $item['name'] }}
                    </a>

                    @if(isset($item['children']))
                        <ul class="dropdown-menu backdrop-blur">
                            @foreach($item['children'] as $child)
                                <li class=" backdrop-blur">
                                    <a class="dropdown-item {{ $child['active'] }}" href="{{ $child['href'] }}">
                                        {{ $child['name'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
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
                <a href="{{ isset($item['children']) ? 'javascript:void' : $item['href'] }}" {{ isset($item['children']) ? "onclick=toggleNavChild('tnc_{$loop->iteration}')" : '' }} class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>{{ $item['name'] }}</div>
                        @if(isset($item['children']))
                            <i class="bi bi-caret-down"></i>
                        @endif
                    </div>
                </a>
                @if(isset($item['children']))
                    @foreach($item['children'] as $child)
                        <a href="{{ $child['href'] }}" class="tnc_{{$loop->parent->iteration}} {{ $item['active'] ? '' : 'd-none' }} list-group-item list-group-item-action {{ $child['active'] }}" aria-current="true">
                            <div class="d-flex gap-2 align-items-center">
                                <i class="bi bi-caret-right"></i>
                                <div>{{ $child['name'] }}</div>
                            </div>
                        </a>
                    @endforeach
                @endif
            @endforeach
        </div>
        <a href="{{ route('home.early-access') }}" class="btn btn-primary btn-lg w-100">
            {{__('l.Get Started')}}
        </a>
    </div>
</div>
