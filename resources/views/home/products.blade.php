@extends('layout')

@section('title', __('l.products_title'))

@section('content')
    @include('shared.page-header', [
        'tag' => __('l.our_products'),
        'title' => __('l.ai_powered_solutions'),
        'sub_title' => __('l.products_subtitle'),
    ])

    @foreach($products as $p)
        <section class="py-5 {{ $loop->odd ? 'bg-light' : 'bg-white' }}">
            <div class="container my-4">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0 {{ $loop->even ? 'order-lg-2' : 'order-lg-1' }}">
                        <div class="card border-0 shadow">
                            <div class="ratio ratio-16x9">
                                <img src="{{ $p['image'] }}" class="card-img object-fit-cover" alt="{{ __('l.product_alt') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 {{ $loop->even ? 'order-lg-1' : 'order-lg-2' }}">
                        <div class="ps-lg-5">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <h2 class="display-6 fw-bold mb-0">{{ $p['name'] }}</h2>
                                <span class="badge bg-outline-primary">{{ $p['release'] }}</span>
                            </div>
                            <p class="lead text-muted mb-4">
                                {{ $p['description'] }}
                            </p>

                            <!-- Tags -->
                            <div class="mb-4">
                                @foreach($p['tags'] as $tag)
                                    <span class="badge bg-secondary me-2 mb-2">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>

                            <!-- Features -->
                            <div class="mb-4">
                                <h4 class="mb-3">{{ __('l.key_features') }}</h4>
                                <ul class="list-unstyled">
                                    @foreach($p['features'] as $f)
                                        <li class="d-flex align-items-center mb-2">
                                            <div class="bg-primary rounded-circle me-3" style="width: 8px; height: 8px;"></div>
                                            <span class="text-muted">{{ $f }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <a href="{{ route('home.early-access') }}" class="btn btn-primary btn-lg">
                                {{ __('l.notify_me') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
