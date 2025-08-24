@extends('layout')

@section('title', __('l.about_us_title'))

@section('content')
    @include('shared.page-header', [
        'tag' => __('l.about_us_tag'),
        'title' => __('l.about_zarnite'),
        'sub_title' => __('l.about_zarnite_subtitle'),
    ])

    <!-- Values Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center p-4 border-0 shadow-lg bg-white">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-bullseye fs-2 text-color-z"></i>
                            </div>
                            <h4 class="card-title">{{ __('l.mission') }}</h4>
                            <p class="card-text text-muted small">{{ __('l.mission_description') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center p-4 border-0 shadow-lg bg-white">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-eye fs-2 text-color-z"></i>
                            </div>
                            <h4 class="card-title">{{ __('l.vision') }}</h4>
                            <p class="card-text text-muted small">{{ __('l.vision_description') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center p-4 border-0 shadow-lg bg-white">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-people fs-2 text-color-z"></i>
                            </div>
                            <h4 class="card-title">{{ __('l.team') }}</h4>
                            <p class="card-text text-muted small">{{ __('l.team_description') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center p-4 border-0 shadow-lg bg-white">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-award fs-2 text-color-z"></i>
                            </div>
                            <h4 class="card-title">{{ __('l.excellence') }}</h4>
                            <p class="card-text text-muted small">{{ __('l.excellence_description') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="pe-lg-5">
                        <h2 class="display-6 fw-bold mb-4">{{ __('l.our_story') }}</h2>
                        <p class="lead text-muted mb-4">
                            {{ __('l.our_story_description') }}
                        </p>
                        <p class="lead text-muted mb-4">
                            {{ __('l.team_collaboration') }}
                        </p>
                        <p class="lead text-muted mb-4">
                            {{ __('l.tech_adapts_to_humans') }}
                        </p>

                        <!-- Stats -->
                        <div class="row g-4 mt-4">
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="display-6 fw-bold text-primary mb-2">{{ __('l.founded_year') }}</div>
                                    <div class="small text-muted">{{ __('l.founded') }}</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="display-6 fw-bold text-primary mb-2">{{ __('l.team_members_count') }}</div>
                                    <div class="small text-muted">{{ __('l.team_members') }}</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="display-6 fw-bold text-primary mb-2">{{ __('l.products_in_development_count') }}</div>
                                    <div class="small text-muted">{{ __('l.products_in_development') }}</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="display-6 fw-bold text-primary mb-2">{{ __('l.possibilities') }}</div>
                                    <div class="small text-muted">{{ __('l.possibilities_description') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/image_8.avif') }}" alt="{{ __('l.team_image_alt') }}" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-5 bg-light">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="ps-lg-5">
                        <div class="d-flex gap-3 mb-3">
                            <h2 class="display-6 fw-bold mb-0">{{ __('l.vision') }}</h2>
                        </div>
                        <p class="lead text-muted mb-4">
                            {{ __('l.vision_description') }}
                        </p>
                        <p class="lead text-muted mb-4">
                            {{ __('l.vision_pursuits') }}
                        </p>

                        <!-- Features -->
                        <div class="mb-4">
                            <h4 class="mb-3">{{ __('l.key_features') }}</h4>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center mb-2">
                                    <div class="bg-primary rounded-circle me-3" style="width: 8px; height: 8px;"></div>
                                    <span class="text-muted">
                                        {{ __('l.continuous_innovation') }}
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="bg-primary rounded-circle me-3" style="width: 8px; height: 8px;"></div>
                                    <span class="text-muted">
                                        {{ __('l.accessible_technology') }}
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="bg-primary rounded-circle me-3" style="width: 8px; height: 8px;"></div>
                                    <span class="text-muted">
                                        {{ __('l.empowering_users') }}
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-5">
                        <div class="d-flex gap-3 mb-3">
                            <h2 class="display-6 fw-bold mb-0">{{ __('l.mission') }}</h2>
                        </div>
                        <p class="lead text-muted mb-4">
                            {{ __('l.mission_description') }}
                        </p>
                        <p class="lead text-muted mb-4">
                            {{ __('l.mission_tools') }}
                        </p>

                        <!-- Features -->
                        <div class="mb-4">
                            <h4 class="mb-3">{{ __('l.key_features') }}</h4>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center mb-2">
                                    <div class="bg-primary rounded-circle me-3" style="width: 8px; height: 8px;"></div>
                                    <span class="text-muted">
                                        {{ __('l.high_quality_products') }}
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="bg-primary rounded-circle me-3" style="width: 8px; height: 8px;"></div>
                                    <span class="text-muted">
                                        {{ __('l.delightful_experiences') }}
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="bg-primary rounded-circle me-3" style="width: 8px; height: 8px;"></div>
                                    <span class="text-muted">
                                        {{ __('l.embracing_technologies') }}
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnership Section -->
    <section class="py-5 bg-white">
        <div class="container py-2">
            <div class="bg-light rounded-4 p-5 text-center">
                <span class="badge bg-outline-primary mb-3">{{ __('l.partnership') }}</span>
                <h2 class="display-6 fw-bold mb-4">{{ __('l.microsoft_fund') }}</h2>
                <p class="lead text-muted mx-auto" style="max-width: 600px;">
                    {{ __('l.microsoft_fund_description') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Approach Section -->
    <section class="py-5 bg-light">
        <div class="container py-2">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold mb-3">{{ __('l.our_approach') }}</h2>
                <p class="lead text-muted">{{ __('l.approach_description') }}</p>
            </div>

            <div class="row g-5">
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="feature-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <span class="display-6 fw-bold text-color-z">1</span>
                        </div>
                        <h4 class="mb-3">{{ __('l.user_centric_design') }}</h4>
                        <p class="text-muted">{{ __('l.user_centric_design_description') }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="feature-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <span class="display-6 fw-bold text-color-z">2</span>
                        </div>
                        <h4 class="mb-3">{{ __('l.ai_integration') }}</h4>
                        <p class="text-muted">{{ __('l.ai_integration_description') }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="feature-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <span class="display-6 fw-bold text-color-z">3</span>
                        </div>
                        <h4 class="mb-3">{{ __('l.continuous_innovation') }}</h4>
                        <p class="text-muted">{{ __('l.continuous_innovation_description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnership Section -->
    <section class="py-5 bg-white">
        <div class="container py-2">
            <div class="bg-light rounded-4 p-5 text-center">
                <h2 class="display-6 fw-bold mb-4">{{ __('l.join_our_journey') }}</h2>
                <p class="lead text-muted mx-auto" style="max-width: 600px;">
                    {{ __('l.join_our_journey_description') }}
                </p>
                <a href="{{ route('home.early-access') }}" class="btn btn-primary btn-lg align-content-center py-2">
                    {{ __('l.get_early_access') }}
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
