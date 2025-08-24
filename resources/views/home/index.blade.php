@extends('layout')

@section('title', __('l.title'))

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="hero-content">
                        <h1 class="display-3 fw-bold lh-1 mb-4">
                            {{ __('l.hero_title_part1') }}
                            <span class="text-primary">{{ __('l.hero_title_part2') }}</span>
                        </h1>
                        <p class="lead mb-4 text-muted">
                            {{ __('l.hero_description') }}
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a href="{{ route('home.products') }}" class="btn btn-primary btn-lg align-content-center py-2">
                                {{ __('l.explore_products') }}
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                            <a href="{{ route('home.early-access') }}" class="btn btn-outline-primary btn-lg py-2">{{ __('l.get_early_access') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="position: relative; display: inline-block;">
                        <img class="shadow" src="{{ asset('images/image_1.avif') }}" style="border-radius: 15px; width: 100%; display: block;" alt="{{ __('l.image_alt') }}" />
                        <div style="position: absolute; bottom: 25px; left: 25px; width: auto;  color: #fff;">
                            <div class="mb-2" style="font-size: 14px; background-color: hsl(42 91% 62%); border-radius: 20px; padding: 5px 15px; width: fit-content; color: black; ">
                                {{ __('l.ai_powered_tools') }}
                            </div>
                            <div class="mb-2" style="font-size: 1.2rem; line-height: 2rem; font-weight: 700">
                                {{ __('l.experience_future_productivity') }}
                            </div>
                            <div style="font-size: 14px;">
                                {{ __('l.intelligent_automation_seamless') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-white" style="padding: 80px 0">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">{{ __('l.experience_future_productivity') }}</h2>
                <p class="lead text-muted">{{ __('l.intelligent_automation_seamless') }}</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="card h-100 text-center p-4 border-0 shadow-lg bg-light">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-lightning-charge text-color-z fs-2"></i>
                            </div>
                            <h4 class="card-title">{{ __('l.fast_performance') }}</h4>
                            <p class="card-text text-muted">{{ __('l.optimized_software_workflow') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="card h-100 text-center p-4 border-0 shadow-lg bg-light">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-lightbulb text-color-z fs-2"></i>
                            </div>
                            <h4 class="card-title">{{ __('l.smart_innovation') }}</h4>
                            <p class="card-text text-muted">{{ __('l.ai_tools_learn_usage') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card h-100 text-center p-4 border-0 shadow-lg bg-light">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-shield-check text-color-z fs-2"></i>
                            </div>
                            <h4 class="card-title">{{ __('l.enterprise_security') }}</h4>
                            <p class="card-text text-muted">{{ __('l.end_to_end_encryption') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="bg-light" style="padding: 80px 0">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">{{ __('l.why_choose_zarnite') }}</h2>
                <p class="lead text-muted">{{ __('l.technology_bridges_gap') }}</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-bezier2 text-color-z fs-2"></i>
                            </div>
                            <h4 class="mb-3">{{ __('l.intelligent_automation') }}</h4>
                            <p class="text-muted m-0">{{ __('l.ai_driven_tools_adapt') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-brush text-color-z fs-2"></i>
                            </div>
                            <h4 class="mb-3">{{ __('l.beautiful_design') }}</h4>
                            <p class="text-muted m-0">{{ __('l.thoughtfully_crafted_interfaces') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-shield-check text-color-z fs-2"></i>
                            </div>
                            <h4 class="mb-3">{{ __('l.enterprise_security') }}</h4>
                            <p class="text-muted m-0">{{ __('l.built_with_privacy_security') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="bg-white" style="padding: 80px 0">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-primary mb-3">{{ __('l.our_products') }}</span>
                <h2 class="display-5 fw-bold mb-3">{{ __('l.ai_powered_solutions') }}</h2>
                <p class="lead text-muted">{{ __('l.cutting_edge_tools') }}</p>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card h-100 border-1 shadow-lg">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('images/image_2.avif') }}" class="card-img-top object-fit-cover" alt="{{ __('l.zarn_alt') }}">
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="card-title mb-0">{{ __('l.zarn') }}</h4>
                                <span class="badge bg-outline-primary">{{ __('l.coming_soon') }}</span>
                            </div>
                            <p class="card-text text-muted mb-3">{{ __('l.zarn_description') }}</p>
                            <div class="mb-3">
                                <span class="badge bg-secondary me-2">{{ __('l.productivity') }}</span>
                                <span class="badge bg-secondary me-2">{{ __('l.ai_assistant') }}</span>
                                <span class="badge bg-secondary">{{ __('l.automation') }}</span>
                            </div>
                            <a href="{{ route('home.early-access') }}" class="btn btn-primary w-100">{{ __('l.notify_me') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100 border-1 shadow-lg">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('images/image_3.avif') }}" class="card-img-top object-fit-cover" alt="{{ __('l.reolyy_alt') }}">
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="card-title mb-0">{{ __('l.reolyy') }}</h4>
                                <span class="badge bg-outline-primary">{{ __('l.coming_soon') }}</span>
                            </div>
                            <p class="card-text text-muted mb-3">{{ __('l.reolyy_description') }}</p>
                            <div class="mb-3">
                                <span class="badge bg-secondary me-2">{{ __('l.video_editing') }}</span>
                                <span class="badge bg-secondary me-2">{{ __('l.ai_enhancement') }}</span>
                                <span class="badge bg-secondary">{{ __('l.creative_tools') }}</span>
                            </div>
                            <a href="{{ route('home.early-access') }}" class="btn btn-primary w-100">{{ __('l.notify_me') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="bg-light" style="padding: 80px 0">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-primary mb-3">{{ __('l.about_us') }}</span>
                <h2 class="display-5 fw-bold mb-3">{{ __('l.our_vision_mission') }}</h2>
                <p class="lead text-muted">{{ __('l.zarnite_modern_tech_company') }}</p>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="pe-lg-5">
                        <h2 class="display-6 fw-bold mb-1">{{ __('l.about_us') }}</h2>
                        <p class="lead text-muted mb-4">
                            {{ __('l.about_us_description') }}
                        </p>

                        <h4 class="fw-bold mb-1">{{ __('l.vision') }}</h4>
                        <p class="lead text-muted mb-4">
                            {{ __('l.vision_description') }}
                        </p>

                        <h4 class="fw-bold mb-1">{{ __('l.mission') }}</h4>
                        <p class="lead text-muted mb-4">
                            {{ __('l.mission_description') }}
                        </p>

                        <span class="badge bg-outline-primary text-color-z">{{ __('l.proudly_supported') }}</span>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('images/image_7.avif') }}" class="shadow-lg" style="width: 90%; border-radius: 15px" />
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="bg-white" style="padding: 80px 0">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-primary mb-3">{{ __('l.our_blog') }}</span>
                <h2 class="display-5 fw-bold mb-3">{{ __('l.latest_insights') }}</h2>
                <p class="lead text-muted">{{ __('l.explore_latest_thoughts') }}</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-5 mb-lg-0">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('images/image_4.avif') }}" class="card-img-top object-fit-cover" alt="{{ __('l.zarn_alt') }}">
                        </div>
                        <div class="card-body p-4">
                            <div class="text-muted small mb-3">{{ __('l.blog_date_1') }}</div>
                            <h5 class="card-title">{{ __('l.blog_title_1') }}</h5>
                            <p class="card-text text-muted">{{ __('l.blog_description_1') }}</p>
                            <a href="{{ route('blogs.show', 1) }}" class="btn btn-link p-0 text-primary">
                                {{ __('l.read_more') }}
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('images/image_5.avif') }}" class="card-img-top object-fit-cover" alt="{{ __('l.zarn_alt') }}">
                        </div>
                        <div class="card-body p-4">
                            <div class="text-muted small mb-3">{{ __('l.blog_date_2') }}</div>
                            <h5 class="card-title">{{ __('l.blog_title_2') }}</h5>
                            <p class="card-text text-muted">{{ __('l.blog_description_2') }}</p>
                            <a href="{{ route('blogs.show', 2) }}" class="btn btn-link p-0 text-primary">
                                {{ __('l.read_more') }}
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('images/image_6.avif') }}" class="card-img-top object-fit-cover" alt="{{ __('l.zarn_alt') }}">
                        </div>
                        <div class="card-body p-4">
                            <div class="text-muted small mb-3">{{ __('l.blog_date_3') }}</div>
                            <h5 class="card-title">{{ __('l.blog_title_3') }}</h5>
                            <p class="card-text text-muted">{{ __('l.blog_description_3') }}</p>
                            <a href="{{ route('blogs.show', 3) }}" class="btn btn-link p-0 text-primary">
                                {{ __('l.read_more') }}
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('blogs.index') }}" class="btn btn-outline-primary">{{ __('l.view_all_articles') }}</a>
            </div>
        </div>
    </section>

    <!-- Early Access Section -->
    <section class="" style="padding: 80px 0; background-color: rgba(253,229,151,0.3);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <div class="pe-lg-5">
                        <h2 class="display-6 fw-bold mb-3">{{ __('l.join_premium_program') }}</h2>
                        <p class="lead text-muted mb-4">
                            {{ __('l.be_among_first') }}
                        </p>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill fs-4 me-3" style="color:#29C763"></i>
                                <span class="text-muted">{{ __('l.first_access_launches') }}</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill fs-4 me-3" style="color:#29C763"></i>
                                <span class="text-muted">{{ __('l.exclusive_premium_features') }}</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill fs-4 me-3" style="color:#29C763"></i>
                                <span class="text-muted">{{ __('l.influence_product_development') }}</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill fs-4 me-3" style="color:#29C763"></i>
                                <span class="text-muted">{{ __('l.lock_in_pricing') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-white">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4">{{ __('l.get_early_access') }}</h4>
                            <div id="formMessage" class="mt-3"></div>
                            <form id="earlyAccessForm" action="{{ route('home.early-access-save') }}" method="post">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">{{ __('l.first_name') }}</label>
                                        <input type="text" class="form-control" id="firstName" name="first_name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">{{ __('l.last_name') }}</label>
                                        <input type="text" class="form-control" id="lastName" name="last_name" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">{{ __('l.email_address') }}</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="company" class="form-label">{{ __('l.company') }}</label>
                                        <input type="text" class="form-control" id="company" name="company">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="role" class="form-label">{{ __('l.role') }}</label>
                                        <select class="form-select" id="role" name="role">
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
                                                    <input class="form-check-input" type="checkbox" value="zarn" id="zarn" name="interests[]">
                                                    <label class="form-check-label" for="zarn">
                                                        <strong>{{ __('l.zarn') }}</strong>
                                                        - {{ __('l.ai_productivity_suite') }}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="reolyy" id="reolyy" name="interests[]">
                                                    <label class="form-check-label" for="reolyy">
                                                        <strong>{{ __('l.reolyy') }}</strong>
                                                        - {{ __('l.ai_video_editing') }}
                                                    </label>
                                                </div>
                                            </div>
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

    <!-- Get In Touch Section -->
    <section class="bg-white" style="padding: 80px 0">
        <div class="container">
            <div class="row g-4 mt-2">
                <div class="col-lg-6">
                    <div class="pe-lg-5">
                        <h2 class="display-6 fw-bold mb-3">{{ __('l.get_in_touch') }}</h2>
                        <p class="lead text-muted mb-4">
                            {{ __('l.have_questions') }}
                        </p>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-3">
                                <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-1 d-inline-flex me-3" style="width:44px; height: 44px;">
                                    <i class="bi bi-envelope-at text-color-z fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="m-0 p-0">{{ __('l.email_us') }}</h6>
                                    <span class="text-muted">support@zanite.inc</span>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-1 d-inline-flex me-3" style="width:44px; height: 44px;">
                                    <i class="bi bi-geo-alt text-color-z fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="m-0 p-0">{{ __('l.our_address') }}</h6>
                                    <span class="text-muted">1111B S Governors Ave STE 21630 Dover, DE, 19904 US</span>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-1 d-inline-flex me-3" style="width:44px; height: 44px;">
                                    <i class="bi bi-share text-color-z fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="m-0 p-0">{{ __('l.follow_us') }}</h6>
                                    <div class="d-flex gap-3">
                                        <a href="{{ config('app.link_instagram') }}" class="text-color-z" target="_blank">
                                            <i class="bi bi-instagram" style="font-size: 22px"></i>
                                        </a>

                                        <a href="{{ config('app.link_linkedin') }}" class="text-color-z" target="_blank">
                                            <i class="bi bi-linkedin" style="font-size: 22px"></i>
                                        </a>

                                        <a href="{{ config('app.link_facebook') }}" class="text-color-z" target="_blank">
                                            <i class="bi bi-facebook" style="font-size: 22px"></i>
                                        </a>

                                        <a href="{{ config('app.link_twitter') }}" class="text-color-z" target="_blank">
                                            <i class="bi bi-twitter-x" style="font-size: 22px"></i>
                                        </a>

                                        {{--<a href="{{ config('app.youtube') }}" class="text-color-z" target="_blank">
                                            <i class="bi bi-youtube" style="font-size: 22px"></i>
                                        </a>--}}

                                        <a href="{{ config('app.link_tiktok') }}" class="text-color-z" target="_blank">
                                            <i class="bi bi-tiktok" style="font-size: 22px"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-light">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4">{{ __('l.send_message') }}</h4>
                            <form id="earlyAccessForm">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">{{ __('l.first_name') }}</label>
                                        <input type="text" class="form-control form-control" id="firstName" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">{{ __('l.last_name') }}</label>
                                        <input type="text" class="form-control form-control" id="lastName" required="">
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">{{ __('l.email_address') }}</label>
                                        <input type="email" class="form-control form-control" id="email" required="">
                                    </div>
                                    <div class="col-12">
                                        <label for="company" class="form-label">{{ __('l.subject') }}</label>
                                        <input type="text" class="form-control form-control" id="company">
                                    </div>
                                    <div class="col-12">
                                        <label for="useCase" class="form-label">{{ __('l.message') }}</label>
                                        <textarea class="form-control" id="useCase" rows="4"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-lg w-100">
                                            <i class="bi bi-send me-2"></i>
                                            {{ __('l.send_message') }}
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

    <!-- News alert Section -->
    <section class="bg-light" style="padding: 80px 0">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">{{ __('l.stay_updated') }}</h2>
                <p class="lead text-muted">{{ __('l.subscribe_newsletter') }}</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="{{ __('l.enter_your_email') }}">
                        <button class="btn btn-primary" type="button">{{ __('l.subscribe') }}</button>
                    </div>
                    <p class="small text-muted mt-2">{{ __('l.respect_privacy') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnership Section -->
    <section class="py-5 bg-white">
        <div class="container py-2">
            <div class="bg-light rounded-4 p-5 text-center">
                <span class="badge bg-outline-primary mb-3">{{ __('l.partnership') }}</span>
                <h2 class="display-6 fw-bold mb-5">Zarnite {{ __('l.partnership') }}</h2>
                <div class="row mt-3">
                    <div class="col-lg-4 col-md-12 d-flex justify-content-center align-items-center" style="min-height: 155px">
                        <a href="https://elevenlabs.io/text-to-speech" class="theme-icon-light">
                            <img src="https://eleven-public-cdn.elevenlabs.io/payloadcms/pwsc4vchsqt-ElevenLabsGrants.webp" alt="Text to Speech" style="width:250px;">
                        </a>
                        <a href="https://elevenlabs.io/text-to-speech" class="theme-icon-dark d-none">
                            <img src="https://eleven-public-cdn.elevenlabs.io/payloadcms/cy7rxce8uki-IIElevenLabsGrants%201.webp" alt="Text to Speech" style="width:250px;">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 d-flex justify-content-center align-items-center" style="min-height: 155px">
                        <img src="{{ asset('images/microsoft_light.png') }}" style="width: 370px; margin-top: -20px;" class="theme-icon-light" />
                        <img src="{{ asset('images/microsoft_dark.png') }}" style="width: 370px; margin-top: -20px;" class="theme-icon-dark d-none" />
                    </div>
                    <div class="col-lg-4 col-md-12 d-flex justify-content-center align-items-center" style="min-height: 155px">
                        <div class="d-flex justify-content-center align-items-center gap-3">
                            <div>
                                <img src="{{ asset('images/nvidia-light.svg') }}" style="width: 150px" class="theme-icon-light" />
                                <img src="{{ asset('images/nvidia-dark.svg') }}" style="width: 150px" class="theme-icon-dark d-none" />
                            </div>
                            <div class="text-color-z" style="font-size: 26px; font-weight: bold; line-height:30px">
                                <div>Inception</div>
                                <div>Program</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#earlyAccessForm').on('submit', function (e) {
                e.preventDefault();

                let form = $(this);
                let actionUrl = form.attr('action');

                $.ajax({
                    url: actionUrl,
                    type: 'POST',
                    data: form.serialize(),
                    beforeSend: function () {
                        $('#formMessage').html('<div class="alert alert-info">@lang('l.submitting')</div>');
                    },
                    success: function (response) {
                        $('#formMessage').html('<div class="alert alert-success">@lang('l.thank_you_request_submitted')</div>');
                        form.trigger('reset');
                    },
                    error: function (xhr) {
                        if (xhr.status === 422) {
                            // Laravel validation errors
                            let errors = xhr.responseJSON.errors;
                            let errorHtml = '<div class="alert alert-danger"><ul>';
                            $.each(errors, function (key, value) {
                                errorHtml += '<li>' + value[0] + '</li>';
                            });
                            errorHtml += '</ul></div>';
                            $('#formMessage').html(errorHtml);
                        } else {
                            $('#formMessage').html('<div class="alert alert-danger">@lang('l.something_went_wrong')</div>');
                        }
                    }
                });
            });
        });
    </script>

@endsection
