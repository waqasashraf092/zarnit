@extends('layout')

@section('title', 'Early Access')
@section('styles')
    <style>

    </style>
@endsection

@section('content')
    @include('includes.page_title', ["title" => "Early Access"])

    <section class="register-one">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <h3>Early Access Benefits</h3>
                    <div class="inner-column">

                        <!-- Contact Form -->
                        <div class="contact-form">
                            <div class="text mb-4">
                                Join our early supporters and get exclusive perks as we develop and launch our new AI-powered tools.
                            </div>
                            <ul>
                                <li>
                                    <span class="icon fa-solid fa-check-circle fa-fw" style="color: green"></span>
                                    <span class="text fw-bold ms-3">
                                        First access to all new product launches
                                    </span>
                                </li>
                                <li>
                                    <span class="icon fa-solid fa-check-circle fa-fw" style="color: green"></span>
                                    <span class="text fw-bold ms-3">
                                        Exclusive premium features and priority support
                                    </span>
                                </li>
                                <li>
                                    <span class="icon fa-solid fa-check-circle fa-fw" style="color: green"></span>
                                    <span class="text fw-bold ms-3">
                                        Influence product development with direct feedback
                                    </span>
                                </li>
                                <li>
                                    <span class="icon fa-solid fa-check-circle fa-fw" style="color: green"></span>
                                    <span class="text fw-bold ms-3">
                                        Lock in early supporter pricing ($25 one-time fee)
                                    </span>
                                </li>
                            </ul>
                            <div class="card mt-4">
                                <div class="card-body">
                                    <h4>Special Pricing</h4>
                                    <div class="d-flex align-items-baseline">
                                        <h3 class="me-3">$25</h3>
                                        <span>one-time fee</span>
                                    </div>
                                    <div class="fw-bold">
                                        Lock in early supporter status with lifetime benefits for all future Zarnite products.
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Default Form -->

                    </div>
                </div>

                <!-- Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <h3>Signup Now</h3>
                    <div class="inner-column">

                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="post" action="contact.html">

                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Full Name" required="">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="company" placeholder="Company Name">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email address" required="">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password" required="">
                                </div>

                                <div class="form-group">
                                    <div class="text mx-3">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our
                                        <a href="privacy.html">privacy policy.</a>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button Box -->
                                    <button type="submit" class="theme-btn btn-style-three">
										<span class="btn-wrap">
											<span class="text-one">Signup <i class="fas fa-arrow-right fa-fw"></i></span>
											<span class="text-two">Signup <i class="fas fa-arrow-right fa-fw"></i></span>
										</span>
                                    </button>
                                </div>

                            </form>
                        </div>
                        <!-- End Default Form -->

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

