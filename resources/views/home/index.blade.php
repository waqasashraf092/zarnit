@extends('layout')

@section('title', 'Zarnite - Modern AI Technology Company')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="display-3 fw-bold lh-1 mb-4">
                            Empowering creators, builders,
                            <span class="text-primary">and businesses to reach new heights!</span>
                        </h1>
                        <p class="lead mb-4 text-muted">
                            Zarnite is a forward-thinking software company crafting smart, beautiful tools that bridge technology and everyday productivity.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <a href="{{ route('home.products') }}" class="btn btn-primary btn-lg align-content-center py-2">
                                Explore Products
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                            <a href="{{ route('home.early-access') }}" class="btn btn-outline-primary btn-lg py-2">Get Early Access</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="position: relative; display: inline-block;">
                        <img class="shadow" src="{{ asset('images/image_1.avif') }}" style="border-radius: 15px; width: 100%; display: block;" alt="image" />
                        <div style="position: absolute; bottom: 25px; left: 25px; width: auto;  color: #fff;">
                            <div class="mb-2" style="font-size: 14px; background-color: hsl(42 91% 62%); border-radius: 20px; padding: 5px 15px; width: fit-content; color: black; ">
                                AI-Powered Tools
                            </div>
                            <div class="mb-2" style="font-size: 1.2rem; line-height: 2rem; font-weight: 700">
                                Experience the Future of Productivity
                            </div>
                            <div style="font-size: 14px;">
                                Intelligent automation and seamless user experiences
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
                <h2 class="display-5 fw-bold mb-3">Experience the Future of Productivity</h2>
                <p class="lead text-muted">Intelligent automation and seamless user experiences</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4 border-0 shadow-lg bg-light">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-lightning-charge text-color-z fs-2"></i>
                            </div>
                            <h4 class="card-title">Fast Performance</h4>
                            <p class="card-text text-muted">Optimized software that keeps your workflow swift and responsive.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4 border-0 shadow-lg bg-light">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-lightbulb text-color-z fs-2"></i>
                            </div>
                            <h4 class="card-title">Smart Innovation</h4>
                            <p class="card-text text-muted">AI-powered tools that learn from your usage patterns to improve over time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4 border-0 shadow-lg bg-light">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-shield-check text-color-z fs-2"></i>
                            </div>
                            <h4 class="card-title">Enterprise Security</h4>
                            <p class="card-text text-muted">End-to-end encryption and robust security features to protect your data.</p>
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
                <h2 class="display-5 fw-bold mb-3">Why Choose Zarnite</h2>
                <p class="lead text-muted">Our technology bridges the gap between complex AI capabilities and intuitive user experiences.</p>
            </div>

            <div class="row g-5">
                <div class="col-md-4">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-bezier2 text-color-z fs-2"></i>
                            </div>
                            <h4 class="mb-3">Intelligent Automation</h4>
                            <p class="text-muted m-0">AI-driven tools that learn and adapt to your workflow, saving you time and effort.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-brush text-color-z fs-2"></i>
                            </div>
                            <h4 class="mb-3">Beautiful Design</h4>
                            <p class="text-muted m-0">Thoughtfully crafted interfaces that are both aesthetically pleasing and highly functional.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-shield-check text-color-z fs-2"></i>
                            </div>
                            <h4 class="mb-3">Enterprise Security</h4>
                            <p class="text-muted m-0">Built with privacy and security at the core, ensuring your data remains protected.</p>
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
                <span class="badge bg-primary mb-3">Our Products</span>
                <h2 class="display-5 fw-bold mb-3">AI-Powered Solutions</h2>
                <p class="lead text-muted">Cutting-edge tools designed to enhance your productivity and creativity.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card h-100 border-1 shadow-lg">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('images/image_2.avif') }}" class="card-img-top object-fit-cover" alt="Zarn">
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="card-title mb-0">Zarn</h4>
                                <span class="badge bg-outline-primary">Coming Soon</span>
                            </div>
                            <p class="card-text text-muted mb-3">An AI productivity suite that streamlines your workflow, automates repetitive tasks, and helps you focus on what truly matters.</p>
                            <div class="mb-3">
                                <span class="badge bg-secondary me-2">Productivity</span>
                                <span class="badge bg-secondary me-2">AI Assistant</span>
                                <span class="badge bg-secondary">Automation</span>
                            </div>
                            <a href="{{ route('home.early-access') }}" class="btn btn-primary w-100">Notify Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100 border-1 shadow-lg">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('images/image_3.avif') }}" class="card-img-top object-fit-cover" alt="Reolyy">
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="card-title mb-0">Reolyy</h4>
                                <span class="badge bg-outline-primary">Coming Soon</span>
                            </div>
                            <p class="card-text text-muted mb-3">An AI-enhanced video editing tool that transforms your raw footage into professional-quality content with minimal effort.</p>
                            <div class="mb-3">
                                <span class="badge bg-secondary me-2">Video Editing</span>
                                <span class="badge bg-secondary me-2">AI Enhancement</span>
                                <span class="badge bg-secondary">Creative Tools</span>
                            </div>
                            <a href="{{ route('home.early-access') }}" class="btn btn-primary w-100">Notify Me</a>
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
                <span class="badge bg-primary mb-3">About Us</span>
                <h2 class="display-5 fw-bold mb-3">Our Vision & Mission</h2>
                <p class="lead text-muted">Zarnite is a modern technology company creating AI-driven software tools for individuals and businesses.</p>
            </div>
            <div class="row g-4 mt-2">
                <div class="col-lg-6">
                    <div class="pe-lg-5">
                        <h2 class="display-6 fw-bold mb-1">About Us</h2>
                        <p class="lead text-muted mb-4">
                            Zarnite is a modern technology company creating AI-driven software tools for individuals and businesses. With a focus on intelligent automation, seamless user experiences, and cutting-edge design, Zarnite builds scalable digital solutions that empower users to work smarter, move faster, and achieve more.
                        </p>

                        <h4 class="fw-bold mb-1">Vision</h4>
                        <p class="lead text-muted mb-4">
                            To be a global leader in intelligent software, empowering the next generation of creators, builders, and businesses to reach new heights.
                        </p>

                        <h4 class="fw-bold mb-1">Mission</h4>
                        <p class="lead text-muted mb-4">
                            To continually push the boundaries of what software can do—delivering tools that are fast, intelligent, and built for the future.
                        </p>

                        <span class="badge bg-outline-primary text-color-z">Proudly supported by Microsoft Founders FundComing Soon</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/image_7.avif') }}" class="shadow-lg" style="width: 90%; border-radius: 15px" />
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="bg-white" style="padding: 80px 0">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-primary mb-3">Our Blog</span>
                <h2 class="display-5 fw-bold mb-3">Latest Insights</h2>
                <p class="lead text-muted">Explore our latest thoughts on technology, AI, and the future of productivity.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('images/image_4.avif') }}" class="card-img-top object-fit-cover" alt="Zarn">
                        </div>
                        <div class="card-body p-4">
                            <div class="text-muted small mb-3">Mar 15, 2025 • 5 min read</div>
                            <h5 class="card-title">The Future of AI in Everyday Software</h5>
                            <p class="card-text text-muted">Intelligent automation is reshaping tech interactions and boosting productivity.</p>
                            <a href="{{ route('blogs.show', 1) }}" class="btn btn-link p-0 text-primary">
                                Read More
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('images/image_5.avif') }}" class="card-img-top object-fit-cover" alt="Zarn">
                        </div>
                        <div class="card-body p-4">
                            <div class="text-muted small mb-3">Mar 8, 2025 • 4 min read</div>
                            <h5 class="card-title">Designing for the Next Generation</h5>
                            <p class="card-text text-muted">The principles behind creating intuitive, beautiful interfaces that stand the test of time.</p>
                            <a href="{{ route('blogs.show', 2) }}" class="btn btn-link p-0 text-primary">
                                Read More
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('images/image_6.avif') }}" class="card-img-top object-fit-cover" alt="Zarn">
                        </div>
                        <div class="card-body p-4">
                            <div class="text-muted small mb-3">Mar 1, 2025 • 6 min read</div>
                            <h5 class="card-title">Building Scalable AI Solutions</h5>
                            <p class="card-text text-muted">How we approach creating flexible, powerful AI systems that grow with your needs.</p>
                            <a href="{{ route('blogs.show', 3) }}" class="btn btn-link p-0 text-primary">
                                Read More
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('blogs.index') }}" class="btn btn-outline-primary">View All Articles</a>
            </div>
        </div>
    </section>

    <!-- Early Access Section -->
    <section class="bg-light" style="padding: 80px 0">
        <div class="container">
            <div class="row g-4 mt-2">
                <div class="col-lg-6">
                    <div class="pe-lg-5">
                        <h2 class="display-6 fw-bold mb-3">Join Our Premium Program</h2>
                        <p class="lead text-muted mb-4">
                            Be among the first to experience our upcoming products. Early supporters get exclusive benefits and lifetime priority access to all Zarnite products.
                        </p>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill fs-4 me-3" style="color:#29C763"></i>
                                <span class="text-muted">First access to all new product launches</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill fs-4 me-3" style="color:#29C763"></i>
                                <span class="text-muted">Exclusive premium features and priority support</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill fs-4 me-3" style="color:#29C763"></i>
                                <span class="text-muted">Influence product development with direct feedback</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill fs-4 me-3" style="color:#29C763"></i>
                                <span class="text-muted">Lock in early supporter pricing ($25 one-time fee)</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-white">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4">Get Early Access</h4>
                            <div id="formMessage" class="mt-3"></div>
                            <form id="earlyAccessForm" action="{{ route('home.early-access-save') }}" method="post">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">First Name *</label>
                                        <input type="text" class="form-control" id="firstName" name="first_name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Last Name *</label>
                                        <input type="text" class="form-control" id="lastName" name="last_name" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="company" class="form-label">Company</label>
                                        <input type="text" class="form-control" id="company" name="company">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="role" class="form-label">Role</label>
                                        <select class="form-select" id="role" name="role">
                                            <option value=""></option>
                                            <option value="entrepreneur">Entrepreneur</option>
                                            <option value="developer">Developer</option>
                                            <option value="designer">Designer</option>
                                            <option value="manager">Manager</option>
                                            <option value="student">Student</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="interests" class="form-label">Which products interest you? *</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="zarn" id="zarn" name="interests[]">
                                                    <label class="form-check-label" for="zarn">
                                                        <strong>Zarn</strong>
                                                        - AI Productivity Suite
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="reolyy" id="reolyy" name="interests[]">
                                                    <label class="form-check-label" for="reolyy">
                                                        <strong>Reolyy</strong>
                                                        - AI Video Editing
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-lg w-100">
                                            <i class="bi bi-rocket-takeoff me-2"></i>
                                            Secure My Early Access
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
                        <h2 class="display-6 fw-bold mb-3">Get In Touch</h2>
                        <p class="lead text-muted mb-4">
                            Have questions about our products or services? We'd love to hear from you. Fill out the form and our team will get back to you as soon as possible.
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
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-light">
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

    <!-- News alert Section -->
    <section class="bg-light" style="padding: 80px 0">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Stay Updated</h2>
                <p class="lead text-muted">Subscribe to our newsletter for the latest news, product updates, and exclusive content.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                    <p class="small text-muted mt-2">We respect your privacy. Unsubscribe at any time.</p>
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
                        $('#formMessage').html('<div class="alert alert-info">Submitting...</div>');
                    },
                    success: function (response) {
                        $('#formMessage').html('<div class="alert alert-success">Thank you! Your early access request has been submitted.</div>');
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
                            $('#formMessage').html('<div class="alert alert-danger">Something went wrong. Please try again.</div>');
                        }
                    }
                });
            });
        });
    </script>

@endsection
