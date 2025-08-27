@extends('layout')

@section('title', __('l.products_title'))

@section('content')
    @include('shared.page-header', [
        'tag' => __('l.our_products'),
        'title' => __('l.zarn'),
        'sub_title' => __('l.products_subtitle'),
    ])

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5 px-lg-5">
                    <div class="card border-0 shadow">
                        <div class="ratio ratio-16x9">
                            <img src="{{ $product['image'] }}" class="card-img object-fit-cover" alt="{{ __('l.product_alt') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="ps-lg-5">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <h2 class="display-6 fw-bold mb-0">{{ $product['name'] }}</h2>
                            <span class="badge bg-outline-primary">{{ $product['release'] }}</span>
                        </div>
                        <p class="lead text-muted mb-4">
                            {{ $product['description'] }}
                        </p>

                        <!-- Tags -->
                        <div class="mb-4">
                            @foreach($product['tags'] as $tag)
                                <span class="badge bg-secondary me-2 mb-2">
                                        {{ $tag }}
                                    </span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="ps-lg-5">
                        <!-- Features -->
                        <div class="mb-4">
                            <h4 class="mb-3">{{ __('l.key_features') }}</h4>
                            <ul class="list-unstyled">
                                @foreach($product['features'] as $f)
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
@endsection
