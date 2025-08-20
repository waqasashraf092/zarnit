@extends('layout')

@section('title', __('l.contact_us_title'))

@section('content')
    @include('shared.page-header', [
        'tag' => __('l.contact_us_tag'),
        'title' => __('l.contact_zarnite'),
        'sub_title' => __('l.contact_subtitle'),
    ])

    <section class="bg-light" style="padding: 50px 0">
        <div class="container">
            <div class="row g-4 mt-2">
                <div class="col-lg-6">
                    <div class="pe-lg-5">
                        <h2 class="display-6 fw-bold mb-3">{{ __('l.contact_information') }}</h2>
                        <p class="lead text-muted mb-4">
                            {{ __('l.contact_information_description') }}
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
                                            <i class="bi bi-instagram"></i>
                                        </a>

                                        <a href="{{ config('app.link_linkedin') }}" class="text-color-z" target="_blank">
                                            <i class="bi bi-linkedin"></i>
                                        </a>

                                        <a href="{{ config('app.link_facebook') }}" class="text-color-z" target="_blank">
                                            <i class="bi bi-facebook"></i>
                                        </a>

                                        <a href="{{ config('app.link_twitter') }}" class="text-color-z" target="_blank">
                                            <i class="bi bi-twitter-x"></i>
                                        </a>

                                        {{--<a href="{{ config('app.youtube') }}" class="text-color-z" target="_blank">
                                            <i class="bi bi-youtube"></i>
                                        </a>--}}

                                        <a href="{{ config('app.link_tiktok') }}" class="text-color-z" target="_blank">
                                            <i class="bi bi-tiktok"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <iframe class="my-3 w-100 rounded shadow-lg" style="height: 300px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3096.9727044899513!2d-75.52651048879241!3d39.156872444986025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c764a9536e05e5%3A0x1a5d037d52c72b5a!2s1111%20S%20Governors%20Ave%2C%20Dover%2C%20DE%2019904%2C%20USA!5e0!3m2!1sen!2sus!4v1684331290379!5m2!1sen!2sus" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-white">
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
@endsection