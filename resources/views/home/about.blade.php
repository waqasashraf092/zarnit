@extends('layout')

@section('title', 'About Us')

@section('content')
    @include('shared.page-header', [
        'tag' => 'About Us',
        'title' => 'About Zarnite',
        'sub_title' => 'Learn about our journey, vision, and the values that drive us to create intelligent tools for the future.',
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
                            <h4 class="card-title">Mission</h4>
                            <p class="card-text text-muted small">To continually push the boundaries of what software can do—delivering tools that are fast, intelligent, and built for the future.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center p-4 border-0 shadow-lg bg-white">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-eye fs-2 text-color-z"></i>
                            </div>
                            <h4 class="card-title">Vision</h4>
                            <p class="card-text text-muted small">To be a global leader in intelligent software, empowering the next generation of creators, builders, and businesses to reach new heights.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center p-4 border-0 shadow-lg bg-white">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-people fs-2 text-color-z"></i>
                            </div>
                            <h4 class="card-title">Team</h4>
                            <p class="card-text text-muted small">A diverse group of innovators, designers, and engineers passionate about creating technology that makes a difference.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center p-4 border-0 shadow-lg bg-white">
                        <div class="card-body">
                            <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                <i class="bi bi-award fs-2 text-color-z"></i>
                            </div>
                            <h4 class="card-title">Excellence</h4>
                            <p class="card-text text-muted small">We strive for excellence in everything we do, from code quality to user experience and customer support.</p>
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
                        <h2 class="display-6 fw-bold mb-4">Our Story</h2>
                        <p class="lead text-muted mb-4">
                            Zarnite was founded with a vision to make advanced AI accessible through beautiful, intuitive software that solves real problems for both individuals and businesses.
                        </p>
                        <p class="lead text-muted mb-4">
                            Our team of engineers, designers, and AI specialists work together to build tools that not only leverage cutting-edge technology but also provide exceptional user experiences.
                        </p>
                        <p class="lead text-muted mb-4">
                            We believe that technology should adapt to humans, not the other way around. This philosophy guides everything we build, ensuring our products feel natural and intuitive while delivering powerful capabilities.
                        </p>

                        <!-- Stats -->
                        <div class="row g-4 mt-4">
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="display-6 fw-bold text-primary mb-2">2024</div>
                                    <div class="small text-muted">Founded</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="display-6 fw-bold text-primary mb-2">10+</div>
                                    <div class="small text-muted">Team Members</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="display-6 fw-bold text-primary mb-2">2</div>
                                    <div class="small text-muted">Products in Development</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-center">
                                    <div class="display-6 fw-bold text-primary mb-2">∞</div>
                                    <div class="small text-muted">Possibilities</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/image_8.avif') }}" alt="" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-5 bg-light">
        <div class="container my-4">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="ps-lg-5">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <h2 class="display-6 fw-bold mb-0">Vision</h2>
                        </div>
                        <p class="lead text-muted mb-4">
                            To be a global leader in intelligent software, empowering the next generation of creators, builders, and businesses to reach new heights.
                        </p>
                        <p class="lead text-muted mb-4">
                            We envision a world where AI-driven tools become trusted partners in both professional and personal pursuits, making complex tasks simpler and unlocking human potential.
                        </p>

                        <!-- Features -->
                        <div class="mb-4">
                            <h4 class="mb-3">Key Features</h4>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center mb-2">
                                    <div class="bg-primary rounded-circle me-3" style="width: 8px; height: 8px;"></div>
                                    <span class="text-muted">
                                        Continuous innovation at the intersection of AI and user experience
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="bg-primary rounded-circle me-3" style="width: 8px; height: 8px;"></div>
                                    <span class="text-muted">
                                        Making powerful technology accessible to everyone
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="bg-primary rounded-circle me-3" style="width: 8px; height: 8px;"></div>
                                    <span class="text-muted">
                                        Empowering users to achieve more with less effort
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-5">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <h2 class="display-6 fw-bold mb-0">Mission</h2>
                        </div>
                        <p class="lead text-muted mb-4">
                            To continually push the boundaries of what software can do—delivering tools that are fast, intelligent, and built for the future.
                        </p>
                        <p class="lead text-muted mb-4">
                            Our mission is to develop AI-powered tools that adapt to users' needs, learn from their behaviors, and deliver value through thoughtful automation and intelligent assistance.
                        </p>

                        <!-- Features -->
                        <div class="mb-4">
                            <h4 class="mb-3">Key Features</h4>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center mb-2">
                                    <div class="bg-primary rounded-circle me-3" style="width: 8px; height: 8px;"></div>
                                    <span class="text-muted">
                                        Building high-quality products that stand the test of time
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="bg-primary rounded-circle me-3" style="width: 8px; height: 8px;"></div>
                                    <span class="text-muted">
                                        Creating delightful user experiences that people love
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <div class="bg-primary rounded-circle me-3" style="width: 8px; height: 8px;"></div>
                                    <span class="text-muted">
                                       Preparing for the future by embracing emerging technologies
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
                <span class="badge bg-outline-primary mb-3">Partnership</span>
                <h2 class="display-6 fw-bold mb-4">Proudly Supported by Microsoft Founders Fund</h2>
                <p class="lead text-muted mx-auto" style="max-width: 600px;">
                    We're honored to be backed by Microsoft Founders Fund, which validates our vision
                    and provides us with the resources to build world-class AI-powered solutions.
                </p>
            </div>
        </div>
    </section>

    <!-- Approach Section -->
    <section class="py-5 bg-light">
        <div class="container py-2">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold mb-3">Our Approach</h2>
                <p class="lead text-muted">We believe technology should be beautiful, intelligent, and accessible to everyone.</p>
            </div>

            <div class="row g-5">
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="feature-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <span class="display-6 fw-bold text-color-z">1</span>
                        </div>
                        <h4 class="mb-3">User-Centric Design</h4>
                        <p class="text-muted">Every feature we build starts with understanding our users' needs and challenges.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="feature-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <span class="display-6 fw-bold text-color-z">2</span>
                        </div>
                        <h4 class="mb-3">AI Integration</h4>
                        <p class="text-muted">We seamlessly integrate AI capabilities to enhance productivity without complexity.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="feature-icon bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <span class="display-6 fw-bold text-color-z">3</span>
                        </div>
                        <h4 class="mb-3">Continuous Innovation</h4>
                        <p class="text-muted">We constantly evolve our products based on user feedback and emerging technologies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnership Section -->
    <section class="py-5 bg-white">
        <div class="container py-2">
            <div class="bg-light rounded-4 p-5 text-center">
                <h2 class="display-6 fw-bold mb-4">Join Our Journey</h2>
                <p class="lead text-muted mx-auto" style="max-width: 600px;">
                    Be part of our mission to transform productivity and creativity with AI. Join our early access program and help shape the future of our products.
                </p>
                <a href="{{ route('home.early-access') }}" class="btn btn-primary btn-lg align-content-center py-2">
                    Get Early Access
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
