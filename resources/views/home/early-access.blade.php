@extends('layout')

@section('title', 'Early Access')

@section('content')
    @include('shared.page-header', [
        'tag' => 'Limited Early Access',
        'title' => 'Be the First to Experience',
        'sub_title' => 'Join our exclusive early access program and help shape the future of productivity software. Get priority access to Zarn and Reolyy before they launch to the public.',
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
                                    <h5 class="card-title">First Access</h5>
                                    <p class="card-text text-muted">Be among the first to use our AI-powered tools before public release.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card h-100 border-0 shadow-sm text-center p-4">
                                <div class="card-body">
                                    <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                        <i class="bi bi-percent text-color-z fs-2"></i>
                                    </div>
                                    <h5 class="card-title">Special Pricing</h5>
                                    <p class="card-text text-muted">Get exclusive discounts and special pricing on all our products.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card h-100 border-0 shadow-sm text-center p-4">
                                <div class="card-body">
                                    <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                        <i class="bi bi-chat-dots text-color-z fs-2"></i>
                                    </div>
                                    <h5 class="card-title">Direct Feedback</h5>
                                    <p class="card-text text-muted">Directly influence product development with your feedback and suggestions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card h-100 border-0 shadow-sm text-center p-4">
                                <div class="card-body">
                                    <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                        <i class="bi bi-headset text-color-z fs-2"></i>
                                    </div>
                                    <h5 class="card-title">Priority Support</h5>
                                    <p class="card-text text-muted">Get dedicated support and faster response times from our team.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card h-100 border-0 shadow-sm text-center p-4">
                                <div class="card-body">
                                    <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                        <i class="bi bi-people text-color-z fs-2"></i>
                                    </div>
                                    <h5 class="card-title">Exclusive Community</h5>
                                    <p class="card-text text-muted">Join our private community of early adopters and power users.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card h-100 border-0 shadow-sm text-center p-4">
                                <div class="card-body">
                                    <div class="feature-icon bg-primary bg-opacity-10 rounded-3 p-3 d-inline-flex mb-3">
                                        <i class="bi bi-trophy text-color-z fs-2"></i>
                                    </div>
                                    <h5 class="card-title">Beta Features</h5>
                                    <p class="card-text text-muted">Access cutting-edge features and experiments before anyone else.</p>
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
                                        <label for="firstName" class="form-label">First Name *</label>
                                        <input type="text" class="form-control form-control" id="firstName" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Last Name *</label>
                                        <input type="text" class="form-control form-control" id="lastName" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input type="email" class="form-control form-control" id="email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="company" class="form-label">Company</label>
                                        <input type="text" class="form-control form-control" id="company">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="role" class="form-label">Role</label>
                                        <select class="form-select form-select" id="role">
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
                                                    <input class="form-check-input" type="checkbox" value="zarn" id="zarn">
                                                    <label class="form-check-label" for="zarn">
                                                        <strong>Zarn</strong> - AI Productivity Suite
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="reolyy" id="reolyy">
                                                    <label class="form-check-label" for="reolyy">
                                                        <strong>Reolyy</strong> - AI Video Editing
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="useCase" class="form-label">Tell us about your use case</label>
                                        <textarea class="form-control" id="useCase" rows="5"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="newsletter" checked>
                                            <label class="form-check-label" for="newsletter">
                                                Keep me updated on product news and early access opportunities
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="terms" required>
                                            <label class="form-check-label" for="terms">
                                                I agree to the <a href="#" class="text-primary">Terms of Service</a> and <a href="#" class="text-primary">Privacy Policy</a> *
                                            </label>
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
@endsection

@section('scripts')
    <script>

    </script>
@endsection
