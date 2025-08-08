@extends('layout')

@section('title', 'Contact Us')
@section('styles')
    <style>

    </style>
@endsection

@section('content')
    @include('includes.page_title', ["title" => "Contact Zarnite"])

    <section class="contact-three">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">
                    <div class="sec-title_dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    Keep In Touch
                    <div class="sec-title_dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <h2 class="sec-title_heading">Send a Message</h2>
            </div>

            <div class="row clearfix">

                <!-- Column -->
                <div class="column col-lg-4 col-md-12 col-sm-12">

                    <!-- Info Block -->
                    <div class="contact-info_block">
                        <div class="contact-info_block-inner">
                            <div class="contact-info_block-icon">
                                <i class="fa-classic fa-solid fa-location-dot fa-fw"></i>
                            </div>
                            <h4>Location</h4>
                            <p>1111B S Governors Ave STE 21630<br/>
                               Dover, DE, 19904 US</p>
                        </div>
                    </div>

                    <!-- Info Block -->
                    <div class="contact-info_block">
                        <div class="contact-info_block-inner">
                            <div class="contact-info_block-icon">
                                <i class="fa-classic fa-solid fa-phone fa-fw"></i>
                            </div>
                            <h4>Phone</h4>
                            <p>+12 35 35783,     +23 586 2254 <br> support@zanite.inc</p>
                        </div>
                    </div>

                </div>

                <!-- Column -->
                <div class="column col-lg-8 col-md-12 col-sm-12">
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <form method="post" action="">
                            <div class="row clearfix">

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="username" placeholder="First Name" required="">
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="lastname" placeholder="Last Name" required="">
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="email" name="email" placeholder="Email address" required="">
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="services" placeholder="Services" required="">
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="" placeholder="Your Information Masage"></textarea>
                                </div>

                                <div class="form-group">
                                    <!-- Button Box -->
                                    <button type="submit" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Submit now</span>
											<span class="text-two">Submit now</span>
										</span>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-one">
        <div class="auto-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3096.9727044899513!2d-75.52651048879241!3d39.156872444986025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c764a9536e05e5%3A0x1a5d037d52c72b5a!2s1111%20S%20Governors%20Ave%2C%20Dover%2C%20DE%2019904%2C%20USA!5e0!3m2!1sen!2sus!4v1684331290379!5m2!1sen!2sus" allowfullscreen=""></iframe>
        </div>
    </section>

@endsection

@section('scripts')
    <script>

    </script>
@endsection
