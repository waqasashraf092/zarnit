@extends('layout')

@section('title', 'Contact Us')

@section('content')
    @include('shared.page-header', [
        'tag' => 'Contact Us',
        'title' => 'Contact Zarnite',
        'sub_title' => 'Get in touch with our team for questions, support, or partnership inquiries.',
    ])

    <section class="bg-light" style="padding: 50px 0">
        <div class="container">
            <div class="row g-4 mt-2">
                <div class="col-lg-6">
                    <div class="pe-lg-5">
                        <h2 class="display-6 fw-bold mb-3">Contact Information</h2>
                        <p class="lead text-muted mb-4">
                            We're here to help with any questions or feedback. Reach out to us using the contact form or through any of the methods below.
                        </p>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-3">
                                <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-1 d-inline-flex me-3" style="width:44px; height: 44px;">
                                    <i class="bi bi-envelope-at text-color-z fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="m-0 p-0">Email Us</h6>
                                    <span class="text-muted">support@zanite.inc</span>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-1 d-inline-flex me-3" style="width:44px; height: 44px;">
                                    <i class="bi bi-geo-alt text-color-z fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="m-0 p-0">Our Address</h6>
                                    <span class="text-muted">1111B S Governors Ave STE 21630 Dover, DE, 19904 US</span>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-1 d-inline-flex me-3" style="width:44px; height: 44px;">
                                    <i class="bi bi-share text-color-z fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="m-0 p-0">Follow Us</h6>
                                    <div class="d-flex gap-3">
                                        <a href="https://www.instagram.com/zarn_ite?igsh=MWNndWdrbzdiaTVweA==" class="text-color-z" target="_blank">
                                            <i class="bi bi-instagram"></i>
                                        </a>

                                        <a href="https://www.linkedin.com/company/zarnite/" class="text-color-z" target="_blank">
                                            <i class="bi bi-linkedin"></i>
                                        </a>

                                        {{--<a href="https://www.facebook.com/" class="text-color-z" target="_blank">
                                            <i class="bi bi-facebook"></i>
                                        </a>--}}

                                        <a href="https://x.com/zarnite13887?t=q05nWxEPPS94vKu7iP_-xg&s=09" class="text-color-z" target="_blank">
                                            <i class="bi bi-twitter-x"></i>
                                        </a>

                                        {{--<a href="https://www.youtube.com/" class="text-color-z" target="_blank">
                                            <i class="bi bi-youtube"></i>
                                        </a>--}}

                                        <a href="https://www.tiktok.com/@zarn_ite?_t=ZS-8yn8iZncxRI&_r=1" class="text-color-z" target="_blank">
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
                            <h4 class="fw-bold mb-4">Send a Message</h4>
                            <form id="earlyAccessForm">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">First Name *</label>
                                        <input type="text" class="form-control form-control" id="firstName" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Last Name *</label>
                                        <input type="text" class="form-control form-control" id="lastName" required="">
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input type="email" class="form-control form-control" id="email" required="">
                                    </div>
                                    <div class="col-12">
                                        <label for="company" class="form-label">Subject *</label>
                                        <input type="text" class="form-control form-control" id="company">
                                    </div>
                                    <div class="col-12">
                                        <label for="useCase" class="form-label">Message *</label>
                                        <textarea class="form-control" id="useCase" rows="4"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-lg w-100">
                                            <i class="bi bi-send me-2"></i>
                                            Send Message
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
