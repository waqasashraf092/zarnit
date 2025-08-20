@extends('layout')

@section('title', __('l.early_access_title'))

@section('content')
    @include('shared.page-header', [
        'tag' => __('l.limited_early_access'),
        'title' => __('l.first_to_experience'),
        'sub_title' => __('l.early_access_subtitle'),
    ])

    <!-- Benefits Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-6">
                    <div class="row g-4">
                        <div class="col-lg-6 col-md-6">
                            <div class="card h-100 border-0 shadow-sm text-center p-4">
                                <div class="card-body">
                                    <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                        <i class="bi bi-lightning text-color-z fs-2"></i>
                                    </div>
                                    <h5 class="card-title">{{ __('l.first_access') }}</h5>
                                    <p class="card-text text-muted">{{ __('l.first_access_description') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card h-100 border-0 shadow-sm text-center p-4">
                                <div class="card-body">
                                    <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                        <i class="bi bi-percent text-color-z fs-2"></i>
                                    </div>
                                    <h5 class="card-title">{{ __('l.special_pricing') }}</h5>
                                    <p class="card-text text-muted">{{ __('l.special_pricing_description') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card h-100 border-0 shadow-sm text-center p-4">
                                <div class="card-body">
                                    <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                        <i class="bi bi-chat-dots text-color-z fs-2"></i>
                                    </div>
                                    <h5 class="card-title">{{ __('l.direct_feedback') }}</h5>
                                    <p class="card-text text-muted">{{ __('l.direct_feedback_description') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card h-100 border-0 shadow-sm text-center p-4">
                                <div class="card-body">
                                    <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                        <i class="bi bi-headset text-color-z fs-2"></i>
                                    </div>
                                    <h5 class="card-title">{{ __('l.priority_support') }}</h5>
                                    <p class="card-text text-muted">{{ __('l.priority_support_description') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card h-100 border-0 shadow-sm text-center p-4">
                                <div class="card-body">
                                    <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                        <i class="bi bi-people text-color-z fs-2"></i>
                                    </div>
                                    <h5 class="card-title">{{ __('l.exclusive_community') }}</h5>
                                    <p class="card-text text-muted">{{ __('l.exclusive_community_description') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card h-100 border-0 shadow-sm text-center p-4">
                                <div class="card-body">
                                    <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                        <i class="bi bi-trophy text-color-z fs-2"></i>
                                    </div>
                                    <h5 class="card-title">{{ __('l.beta_features') }}</h5>
                                    <p class="card-text text-muted">{{ __('l.beta_features_description') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-5">
                            <form id="earlyAccessForm">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">{{ __('l.first_name') }}</label>
                                        <input type="text" class="form-control form-control" id="firstName" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">{{ __('l.last_name') }}</label>
                                        <input type="text" class="form-control form-control" id="lastName" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">{{ __('l.email_address') }}</label>
                                        <input type="email" class="form-control form-control" id="email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="company" class="form-label">{{ __('l.company') }}</label>
                                        <input type="text" class="form-control form-control" id="company">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="role" class="form-label">{{ __('l.role') }}</label>
                                        <select class="form-select form-select" id="role">
                                            <option value=""></option>
                                            <option value="entrepreneur">{{ __('l.entrepreneur') }}</option>
                                            <option value="developer">{{ __('l.developer') }}</option>
                                            <option value="designer">{{ __('l.designer') }}</option>
                                            <option value="manager">{{ __('l.manager') }}</option>
                                            <option value="student">{{ __('l.student') }}</option>
                                            <option value="other">{{ __('l.other') }}</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="interests" class="form-label">{{ __('l.which_products_interest') }}</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="zarn" id="zarn">
                                                    <label class="form-check-label" for="zarn">
                                                        <strong>{{ __('l.zarn') }}</strong> - {{ __('l.ai_productivity_suite') }}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="reolyy" id="reolyy">
                                                    <label class="form-check-label" for="reolyy">
                                                        <strong>{{ __('l.reolyy') }}</strong> - {{ __('l.ai_video_editing') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="useCase" class="form-label">{{ __('l.use_case') }}</label>
                                        <textarea class="form-control" id="useCase" rows="5"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="newsletter" checked>
                                            <label class="form-check-label" for="newsletter">
                                                {{ __('l.newsletter_subscription') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="terms" required>
                                            <label class="form-check-label" for="terms">
                                                {{ __('l.terms_and_privacy') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-lg w-100">
                                            <i class="bi bi-rocket-takeoff me-2"></i>
                                            {{ __('l.secure_my_early_access') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>

    </script>
@endsection
