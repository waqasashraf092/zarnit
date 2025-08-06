@extends('layout')

@section('title', 'Welcome to Your Laravel App')
@section('styles')
    <style>

    </style>
@endsection

@section('content')

    <!-- Slider Three -->
    <section class="slider-three">
        <div class="main-slider swiper-container">
            <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide">
                    <div class="slider-three_image-layer" style="background-image:url({{ asset('/images/main-slider/7.jpg') }})"></div>
                    <div class="auto-container">
                        <!-- Content Column -->
                        <div class="slider-three_content d-flex justify-content-end">
                            <div class="slider-three_content-inner">
                                <div class="slider-three_title">Consultings</div>
                                <h1 class="slider-three_heading">IT
                                    <span>Solution</span>
                                </h1>
                                <div class="slider-three_subtitle">Provide Technology</div>
                                <div class="slider-three_text">
                                    Zarnite is a forward-thinking software company crafting smart,
                                    beautiful tools that bridge technology and everyday productivity.
                                </div>
                                <div class="slider-three_button d-flex align-items-center flex-wrap">
                                    <a href="{{ route('home') }}" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Get Start Project</span>
											<span class="text-two">Get Start Project</span>
										</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <div class="slider-three_image-layer" style="background-image:url({{ asset('/images/main-slider/6.jpg') }})"></div>
                    <div class="auto-container">
                        <!-- Content Column -->
                        <div class="slider-three_content d-flex justify-content-end">
                            <div class="slider-three_content-inner">
                                <div class="slider-three_title">Consultings</div>
                                <h1 class="slider-three_heading">IT
                                    <span>Solution</span>
                                </h1>
                                <div class="slider-three_subtitle">Provide Technology</div>
                                <div class="slider-three_text">
                                    Zarnite is a forward-thinking software company crafting smart,
                                    beautiful tools that bridge technology and everyday productivity.
                                </div>
                                <div class="slider-three_button d-flex align-items-center flex-wrap">
                                    <a href="{{ route('home') }}" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Get Start Project</span>
											<span class="text-two">Get Start Project</span>
										</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <div class="slider-three_image-layer" style="background-image:url({{ asset('/images/main-slider/8.jpg') }})"></div>
                    <div class="auto-container">
                        <!-- Content Column -->
                        <div class="slider-three_content d-flex justify-content-end">
                            <div class="slider-three_content-inner">
                                <div class="slider-three_title">Consultings</div>
                                <h1 class="slider-three_heading">IT
                                    <span>Solution</span>
                                </h1>
                                <div class="slider-three_subtitle">Provide Technology</div>
                                <div class="slider-three_text">
                                    Zarnite is a forward-thinking software company crafting smart,
                                    beautiful tools that bridge technology and everyday productivity.
                                </div>
                                <div class="slider-three_button d-flex align-items-center flex-wrap">
                                    <a href="{{ route('home') }}" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Get Start Project</span>
											<span class="text-two">Get Start Project</span>
										</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- If we need pagination -->
            <div class="slider-one_pagination"></div>

        </div>
        <!-- Slider Three Options -->
        <div class="auto-container">
            <!-- Slider Three Options -->
            <div class="slider-three_options">
                <div class="slider-three_authors">
                    <ul>
                        <li>
                            <img src="{{ asset('images/main-slider/author-1.png') }}" alt="" />
                        </li>
                        <li>
                            <img src="{{ asset('images/main-slider/author-2.png') }}" alt="" />
                        </li>
                        <li>
                            <img src="{{ asset('images/main-slider/author-3.png') }}" alt="" />
                        </li>
                        <li>
                            <img src="{{ asset('images/main-slider/author-4.png') }}" alt="" />
                        </li>
                    </ul>
                    <div class="slider-three_reviews">
                        25k+
                        <br>
                        <span>Clients Review</span>
                    </div>
                </div>
            </div>
            <!-- End Slider Three Options -->
        </div>

    </section>
    <!-- End Slider Three -->

    <!-- Empower One -->
    <section class="empower-one">
        <div class="empower-shape-image" style="background-image: url({{ asset('images/background/price-one_bg.png') }});"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">
                    <div class="sec-title_dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    Empowering
                    <div class="sec-title_dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <h2 class="sec-title_heading">
                    Empowering businesses <br/>
                    to reach new heights!
                </h2>
            </div>
            <div class="clearfix">

                <!-- Empower Block One -->
                <div class="empower-block_one">
                    <div class="empower-block_one-inner">
                        <div class="empower-block_one-image">
                            <img src="{{asset('images/resource/empower-1.jpg') }}" alt="" />
                            <div class="empower-block_one-icon">
                                <img src="{{ asset('images/icons/service-1.svg') }}" alt="" />
                            </div>
                            <div class="empower-block_bg" style="background-image:url({{ asset('images/background/empower-bg.png') }})"></div>
                        </div>
                        <div class="empower-block_one-content">
                            <h4 class="empower-block_one-title">
                                <a href="javascript:void(0)">Technology Innovation</a>
                            </h4>
                            <div class="empower-block_one-text">AI-powered tools that learn from your usage patterns to improve over time.</div>
                        </div>
                    </div>
                </div>

                <!-- Empower Block One -->
                <div class="empower-block_one">
                    <div class="empower-block_one-inner">
                        <div class="empower-block_one-image">
                            <img src="{{ asset('images/resource/empower-2.jpg') }}" alt="" />
                            <div class="empower-block_one-icon">
                                <img src="{{ asset('images/icons/service-2.svg')}}" alt="" />
                            </div>
                            <div class="empower-block_bg" style="background-image:url({{ asset('images/background/empower-bg.png') }})"></div>
                        </div>
                        <div class="empower-block_one-content">
                            <h4 class="empower-block_one-title">
                                <a href="javascript:void(0)">Smart AI Innovation</a>
                            </h4>
                            <div class="empower-block_one-text">Optimized software that keeps your workflow swift and responsive.</div>
                        </div>
                    </div>
                </div>

                <!-- Empower Block One -->
                <div class="empower-block_one">
                    <div class="empower-block_one-inner">
                        <div class="empower-block_one-image">
                            <img src="{{ asset('images/resource/empower-3.jpg') }}" alt="" />
                            <div class="empower-block_one-icon">
                                <img src="{{ asset('images/icons/service-3.svg') }}" alt="" />
                            </div>
                            <div class="empower-block_bg" style="background-image:url({{ asset('images/background/empower-bg.png') }})"></div>
                        </div>
                        <div class="empower-block_one-content">
                            <h4 class="empower-block_one-title">
                                <a href="javascript:void(0)">Enterprise Security</a>
                            </h4>
                            <div class="empower-block_one-text">End-to-end encryption and robust security features to protect your data.</div>
                        </div>
                    </div>
                </div>

                <!-- Empower Block One -->
                <div class="empower-block_one">
                    <div class="empower-block_one-inner">
                        <div class="empower-block_one-image">
                            <img src="{{ asset('images/resource/empower-4.jpg') }}" alt="" />
                            <div class="empower-block_one-icon">
                                <img src="{{asset('images/icons/service-4.svg') }}" alt="" />
                            </div>
                            <div class="empower-block_bg" style="background-image:url({{ asset('images/background/empower-bg.png') }})"></div>
                        </div>
                        <div class="empower-block_one-content">
                            <h4 class="empower-block_one-title">
                                <a href="javascript:void(0)">Beautiful Design</a>
                            </h4>
                            <div class="empower-block_one-text">Beautiful and functional interfaces, thoughtfully designed.</div>
                        </div>
                    </div>
                </div>

                <!-- Empower Block One -->
                <div class="empower-block_one">
                    <div class="empower-block_one-inner">
                        <div class="empower-block_one-image">
                            <img src="{{ asset('images/resource/empower-5.jpg') }}" alt="" />
                            <div class="empower-block_one-icon">
                                <img src="{{ asset('images/icons/service-5.svg') }}" alt="" />
                            </div>
                            <div class="empower-block_bg" style="background-image:url({{ asset('images/background/empower-bg.png') }})"></div>
                        </div>
                        <div class="empower-block_one-content">
                            <h4 class="empower-block_one-title">
                                <a href="javascript:void(0)">Intelligent Automation</a>
                            </h4>
                            <div class="empower-block_one-text">AI-driven tools that learn and adapt to your workflow, saving you time and effort.</div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="lower-box text-center">
                <div class="empower-block_one-text">
                    Experience the Future of Productivity<br/>
                    Intelligent automation and seamless user experiences
                </div>
                <!-- Button Box -->
                <div class="empower-one_button">
                    <a href="javascript:void(0)" class="theme-btn btn-style-one">
						<span class="btn-wrap">
							<span class="text-one">competitive</span>
							<span class="text-two">competitive</span>
						</span>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- End Empower One -->

    <!-- About Three -->
    <section class="about-three">
        <div class="about-three_shadow" style="background-image:url({{ asset('images/background/pattern-19.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Column -->
                <div class="about-three_title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="about-three_title-outer">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="sec-title_title">
                                about us our company
                                <div class="sec-title_dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <h2 class="sec-title_heading">
                                You Choose Best Service For our
                                IT Company
                            </h2>
                        </div>

                        <div class="about-three_content">
                            <div class="about-three_experiance" style="background-image:url({{ asset('images/background/about.jpg')}})">
                                <strong>30</strong>
                                <span>Year Of Working <br> Experience</span>
                            </div>
                            <div class="about-three_title">Transform your online presence with IT website design.</div>
                            <div class="about-three_text">
                                Renowned as the premier IT services company in the city, our
                                organic nation stands out for its unparalleled expertise, commitment to excellence.
                            </div>
                            <!-- Button Box -->
                            <div class="about-three_button">
                                <a href="javascript:void(0)" class="theme-btn btn-style-one">
									<span class="btn-wrap">
										<span class="text-one">Discover more</span>
										<span class="text-two">Discover more</span>
									</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Column -->
                <div class="about-three_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="about-three_image-outer">
                        <div class="about-three_image">
                            <img src="{{ asset('images/resource/about-6.jpg') }}" alt="" />
                        </div>
                        <div class="about-three_image-two">
                            <img src="{{ asset('images/resource/about-7.jpg') }}" alt="" />
                        </div>

                        <!-- About Three Options -->
                        <div class="about-three_options">
                            <div class="about-three_authors">
                                <ul>
                                    <li>
                                        <img src="{{ asset('images/main-slider/author-1.png') }}" alt="" />
                                    </li>
                                    <li>
                                        <img src="{{ asset('images/main-slider/author-2.png') }}" alt="" />
                                    </li>
                                    <li>
                                        <img src="{{ asset('images/main-slider/author-3.png') }}" alt="" />
                                    </li>
                                    <li>
                                        <img src="{{ asset('images/main-slider/author-4.png') }}" alt="" />
                                    </li>
                                </ul>
                                <div class="about-three_reviews">
                                    25k+
                                    <br>
                                    <span>Clients Review</span>
                                </div>
                            </div>
                        </div>
                        <!-- End About Three Options -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Animation Mode -->
        <div class="animation_mode">
            <h1>AI-Powered Solutions</h1>
            <h1 class="light">AI-Powered Solutions</h1>
            <h1>AI-Powered Solutions</h1>
            <h1 class="light">AI-Powered Solutions</h1>
        </div>
    </section>
    <!-- End About Three -->

    <!-- Gallery Two -->
    <section class="gallery-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">
                    <div class="sec-title_dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    our capabilities
                    <div class="sec-title_dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <h2 class="sec-title_heading">
                    We Believe in the Power of
                    <br>Individual Contribution
                </h2>
            </div>
            <div class="gallery_carousel swiper-container">
                <div class="swiper-wrapper">

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Gallery Block One -->
                        <div class="gallery-block-one">
                            <div class="gallery-block-one_inner">
                                <div class="gallery-block_one-image">
                                    <img src="{{ asset('images/gallery/1.jpg') }}" alt="" />
                                    <div class="gallery-block_one-overlay">
                                        <div class="gallery-block_one-designation">Design / Ideas</div>
                                        <h4 class="gallery-block-one_title">
                                            <a href="javascript:void(0)">smart Visions</a>
                                        </h4>
                                    </div>
                                </div>
                                <a class="gallery-block_one-arrow" href="javascript:void(0)">
                                    <img src="{{ asset('images/icons/gallery-icon.svg') }}" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Gallery Block One -->
                        <div class="gallery-block-one">
                            <div class="gallery-block-one_inner">
                                <div class="gallery-block_one-image">
                                    <img src="{{ asset('images/gallery/2.jpg') }}" alt="" />
                                    <div class="gallery-block_one-overlay">
                                        <div class="gallery-block_one-designation">Design / Ideas</div>
                                        <h4 class="gallery-block-one_title">
                                            <a href="javascript:void(0)">
                                                Platform integration
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <a class="gallery-block_one-arrow" href="javascript:void(0)">
                                    <img src="{{ asset('images/icons/gallery-icon.svg') }}" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Gallery Block One -->
                        <div class="gallery-block-one">
                            <div class="gallery-block-one_inner">
                                <div class="gallery-block_one-image">
                                    <img src="{{ asset('images/gallery/4.jpg') }}" alt="" />
                                    <div class="gallery-block_one-overlay">
                                        <div class="gallery-block_one-designation">Marketing</div>
                                        <h4 class="gallery-block-one_title">
                                            <a href="javascript:void(0)">Viewers Recorder</a>
                                        </h4>
                                    </div>
                                </div>
                                <a class="gallery-block_one-arrow" href="javascript:void(0)">
                                    <img src="{{ asset('images/icons/gallery-icon.svg') }}" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Gallery Block One -->
                        <div class="gallery-block-one">
                            <div class="gallery-block-one_inner">
                                <div class="gallery-block_one-image">
                                    <img src="{{ asset('images/gallery/5.jpg') }}" alt="" />
                                    <div class="gallery-block_one-overlay">
                                        <div class="gallery-block_one-designation">Marketing</div>
                                        <h4 class="gallery-block-one_title">
                                            <a href="javascript:void(0)">Marketing Trading</a>
                                        </h4>
                                    </div>
                                </div>
                                <a class="gallery-block_one-arrow" href="javascript:void(0)">
                                    <img src="{{ asset('images/icons/gallery-icon.svg') }}" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Gallery Block One -->
                        <div class="gallery-block-one">
                            <div class="gallery-block-one_inner">
                                <div class="gallery-block_one-image">
                                    <img src="{{ asset('images/gallery/3.jpg') }}" alt="" />
                                    <div class="gallery-block_one-overlay">
                                        <div class="gallery-block_one-designation">Marketing</div>
                                        <h4 class="gallery-block-one_title">
                                            <a href="javascript:void(0)">Viewers Recorder</a>
                                        </h4>
                                    </div>
                                </div>
                                <a class="gallery-block_one-arrow" href="javascript:void(0)">
                                    <img src="{{ asset('images/icons/gallery-icon.svg') }}" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Two -->

    <!-- Inspire One -->
    <section class="inspire-one">
        <!-- Animation Mode -->
        <div class="animation_mode">
            <h1>Transform ideas into reality</h1>
            <h1 class="light">INSPIRED WITH CREATIVITY</h1>
            <h1>unlock the potential</h1>
            <h1 class="light">AI-Powered Solutions</h1>
        </div>
    </section>
    <!-- End Inspire One -->

    <!-- Clients One -->
    <section class="clients-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">
                    <div class="sec-title_dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    Used by 20M+ users around the world
                    <div class="sec-title_dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <h2 class="sec-title_heading">We’re happy to work with <br> largest brands</h2>
            </div>

            <div class="inner-container clearfix">

                <!-- Column -->
                <div class="column">
                    <div class="client-image">
                        <a href="#"><img src="{{ asset('images/clients/7.png') }}" alt="" /></a>
                    </div>
                </div>

                <!-- Column -->
                <div class="column">
                    <div class="client-image">
                        <a href="#"><img src="{{ asset('images/clients/8.png') }}" alt="" /></a>
                    </div>
                </div>

                <!-- Column -->
                <div class="column">
                    <div class="client-image">
                        <a href="#"><img src="{{ asset('images/clients/9.png') }}" alt="" /></a>
                    </div>
                </div>

                <!-- Column -->
                <div class="column">
                    <div class="client-image">
                        <a href="#"><img src="{{ asset('images/clients/10.png') }}" alt="" /></a>
                    </div>
                </div>

                <!-- Column -->
                <div class="column">
                    <div class="client-image">
                        <a href="#"><img src="{{ asset('images/clients/11.png') }}" alt="" /></a>
                    </div>
                </div>

                <!-- Column -->
                <div class="column">
                    <div class="client-image">
                        <a href="#"><img src="{{ asset('images/clients/12.png') }}" alt="" /></a>
                    </div>
                </div>

                <!-- Column -->
                <div class="column">
                    <div class="client-image">
                        <a href="#"><img src="{{ asset('images/clients/13.png') }}" alt="" /></a>
                    </div>
                </div>

                <!-- Column -->
                <div class="column">
                    <div class="client-image">
                        <a href="#"><img src="{{ asset('images/clients/14.png') }}" alt="" /></a>
                    </div>
                </div>

                <!-- Column -->
                <div class="column">
                    <div class="client-image">
                        <a href="#"><img src="{{ asset('images/clients/15.png') }}" alt="" /></a>
                    </div>
                </div>

                <!-- Column -->
                <div class="column">
                    <div class="client-image">
                        <a href="#"><img src="{{ asset('images/clients/16.png') }}" alt="" /></a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Clients Two -->

    <!-- Contact One --->
    <section class="contact-one">
        <div class="contact-one_shadow" style="background-image:url({{ asset('images/background/pattern-26.png') }})"></div>
        <div class="contact-one_vector" style="background-image:url({{ asset('images/icons/vector-7.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Contact One Form Column -->
                <div class="contact-one_form-column col-lg-5 col-md-12 col-sm-12">
                    <div class="contact-one_form-outer">
                        <div class="contact-one_form-title-box">
                            <h3 class="contact-one_form-title">Contact us</h3>
                            <div class="contact-one_form-text">We work with ambitious leaders who want to <br> define the future, not hide from it.</div>
                        </div>

                        <!-- Default Form -->
                        <div class="default-form">
                            <form method="post" action="">

                                <div class="form-group">
                                    <label>Name*</label>
                                    <input type="text" name="username" placeholder="Your Name" required>
                                </div>

                                <div class="form-group">
                                    <label>Mobile No*</label>
                                    <input type="text" name="text" placeholder="+1 (__) ___" required>
                                </div>

                                <div class="form-group">
                                    <label>Email address*</label>
                                    <input type="email" name="email" placeholder="abcd@gmail.com" required>
                                </div>

                                <div class="form-group">
                                    <!-- Button Box -->
                                    <button type="submit" class="theme-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Book now</span>
                                        <span class="text-two">Book now</span>
                                    </span>
                                    </button>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>

                <!-- Contact One Info Column -->
                <div class="contact-one_info-column col-lg-7 col-md-12 col-sm-12">
                    <div class="contact-one_info-outer">
                        <!-- Sec Title -->
                        <div class="sec-title light">
                            <div class="sec-title_title">
                                Contact Us
                                <div class="sec-title_dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <h2 class="sec-title_heading">Let’s Work <br> Togather</h2>
                        </div>

                        <ul class="contact-one_info">
                            <li>
                                <span class="icon"><img src="{{ asset('images/icons/send.svg') }}" alt="" /></span>
                                <strong>Mail Address:</strong>
                                <a href="mailto:support@zanite.inc">support@zanite.inc</a>
                            </li>
                            <li>
                                <span class="icon"><img src="{{ asset('images/icons/phone.svg') }}" alt="" /></span>
                                <strong>Phone No:</strong>
                                <a href="tel:+123-456-789-00">+(123) 456 789 00</a><br>
                                <a href="tel:+234-156-354-70">+(234) 156 354 70</a>
                            </li>
                            <li>
                                <span class="icon"><img src="{{ asset('images/icons/map.svg') }}" alt="" /></span>
                                <strong>Location</strong>
                                1111B S Governors Ave STE 21630<br/>
                                Dover, DE, 19904 US
                            </li>
                        </ul>

                    </div>
                </div>

            </div>

            <div class="contact-one_side-image">
                <img src="{{ asset('images/resource/contact.png') }}" alt="" />
            </div>

        </div>
    </section>
    <!-- End Contact One --->

    <!-- News Three -->
    {{--<section class="news-three">
        <div class="news-three_shadow" style="background-image:url({{ asset('images/background/pattern-27.png') }})"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="left-box">
                        <div class="sec-title_title">
                            Our Latest News
                            <div class="sec-title_dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <h2 class="sec-title_heading">the Freshest Trending Blog <br> and Articles Keep up</h2>
                    </div>
                    <div class="right-box">
                        <!-- Button Box -->
                        <div class="news-three_button">
                            <a href="blog.html" class="theme-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one">Get Started</span>
                                <span class="text-two">Get Started</span>
                            </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Block Two -->
            <div class="news-block_two">
                <div class="news-block_two-inner">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="news-block_two-content">
                            <ul class="news-block_two-meta">
                                <li><a href="#">By Admin</a></li>
                                <li><a href="#">22 Mar, 23</a></li>
                                <li><a href="#">Development</a></li>
                            </ul>
                            <h3 class="news-block_two-title"><a href="blog-detail.html">We Provide Google Workspace <br> Fromerly Know as Gsuite.</a></h3>
                        </div>
                        <div class="news-block_two-arrow">
                            <a href="blog-detail.html">
                                <img src="{{ asset('images/icons/blog-icon.svg') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="news-block_two-hover" style="background-image: url( {{ asset('images/resource/news-5.jpg') }})"></div>
                </div>
            </div>

            <!-- News Block Two -->
            <div class="news-block_two">
                <div class="news-block_two-inner">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="news-block_two-content">
                            <ul class="news-block_two-meta">
                                <li><a href="#">By Admin</a></li>
                                <li><a href="#">22 Mar, 23</a></li>
                                <li><a href="#">Development</a></li>
                            </ul>
                            <h3 class="news-block_two-title"><a href="blog-detail.html">How Managed IT Support a <br> Flexible Workspace</a></h3>
                        </div>
                        <div class="news-block_two-arrow">
                            <a href="blog-detail.html">
                                <img src="{{ asset('images/icons/blog-icon.svg') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="news-block_two-hover" style="background-image: url({{ asset('images/resource/news-6.jpg') }})"></div>
                </div>
            </div>

            <!-- News Block Two -->
            <div class="news-block_two">
                <div class="news-block_two-inner">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="news-block_two-content">
                            <ul class="news-block_two-meta">
                                <li><a href="#">By Admin</a></li>
                                <li><a href="#">22 Mar, 23</a></li>
                                <li><a href="#">Development</a></li>
                            </ul>
                            <h3 class="news-block_two-title"><a href="blog-detail.html">The Role of Business Ethics in <br> Building Customer Trust</a></h3>
                        </div>
                        <div class="news-block_two-arrow">
                            <a href="blog-detail.html">
                                <img src="{{ asset('images/icons/blog-icon.svg') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="news-block_two-hover" style="background-image: url( {{ asset('images/resource/news-7.jpg') }})"></div>
                </div>
            </div>

        </div>
    </section>--}}
    <!-- End News Three -->

    <!-- CTA One -->
    <section class="cta-one">
        <div class="auto-container">
            <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
                <div class="cta-one_content">
                    <div class="cta-one_title">Can You find Now</div>
                    <h3 class="cta-one_heading">Looking for the Best IT Business Solutions?</h3>
                </div>
                <div class="cta-one_btn">
                    <div class="news-three_button">
                        <a href="javascript:void(0)" class="theme-btn btn-style-one">
                        <span class="btn-wrap">
                            <span class="text-one">get a Quote</span>
                            <span class="text-two">get a Quote</span>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA One -->

    <!-- Main Footer -->
    <footer class="footer-style_three">
        <div class="footer-style_three-bg"></div>
        <div class="footer-style_three-bg_image" style="background-image: url( {{ asset('images/background/footer-three_bg.png') }})"></div>
        <div class="auto-container">
            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-three_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-three_widget logo-widget">
                                    <div class="footer-three_logo">
                                        <a href="javascript:void(0)">
                                            <img src="{{ asset('images/zarnite-logo.png') }}" style="height: 40px" alt="" title="">
                                        </a>
                                    </div>
                                    <div class="footer-three_text">
                                        We work with a passion of taking challenges and
                                        creating new ones in advertising sector.
                                    </div>
                                    <div class="footer-three_location-title">Location</div>
                                    <div class="footer-three_location-text">
                                        1111B S Governors Ave STE 21630 Dover, DE, 19904 US
                                    </div>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-three_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-three_widget gallery-widget">
                                    <h3 class="footer-three_title">Gallery</h3>
                                    <div class="gallery-outer d-flex flex-wrap clearfix">
                                        <!-- instagram Block One -->
                                        <div class="instagram-block_one">
                                            <div class="instagram-block_one-inner">
                                                <div class="instagram-block_one-image">
                                                    <img src="{{ asset('images/gallery/instagram-1.jpg') }}" alt="" />
                                                    <div class="instagram-block_one-overlay">
                                                        <a href="assets/images/gallery/instagram-1.jpg" class="lightbox-image instagram-block_one-icon">
                                                            <i class=""><img src="{{ asset('images/gallery/instagram.svg') }}" alt="" /></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- instagram Block One -->
                                        <div class="instagram-block_one">
                                            <div class="instagram-block_one-inner">
                                                <div class="instagram-block_one-image">
                                                    <img src="{{ asset('images/gallery/instagram-2.jpg') }}" alt="" />
                                                    <div class="instagram-block_one-overlay">
                                                        <a href="assets/images/gallery/instagram-2.jpg" class="lightbox-image instagram-block_one-icon">
                                                            <i class=""><img src="{{ asset('images/gallery/instagram.svg') }}" alt="" /></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- instagram Block One -->
                                        <div class="instagram-block_one">
                                            <div class="instagram-block_one-inner">
                                                <div class="instagram-block_one-image">
                                                    <img src="{{ asset('images/gallery/instagram-3.jpg') }}" alt="" />
                                                    <div class="instagram-block_one-overlay">
                                                        <a href="assets/images/gallery/instagram-3.jpg" class="lightbox-image instagram-block_one-icon">
                                                            <i class=""><img src="{{ asset('images/gallery/instagram.svg') }}" alt="" /></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- instagram Block One -->
                                        <div class="instagram-block_one">
                                            <div class="instagram-block_one-inner">
                                                <div class="instagram-block_one-image">
                                                    <img src="{{ asset('images/gallery/instagram-4.jpg') }}" alt="" />
                                                    <div class="instagram-block_one-overlay">
                                                        <a href="assets/images/gallery/instagram-4.jpg" class="lightbox-image instagram-block_one-icon">
                                                            <i class=""><img src="{{ asset('images/gallery/instagram.svg') }}" alt="" /></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- instagram Block One -->
                                        <div class="instagram-block_one">
                                            <div class="instagram-block_one-inner">
                                                <div class="instagram-block_one-image">
                                                    <img src="{{ asset('images/gallery/instagram-5.jpg') }}" alt="" />
                                                    <div class="instagram-block_one-overlay">
                                                        <a href="assets/images/gallery/instagram-5.jpg" class="lightbox-image instagram-block_one-icon">
                                                            <i class=""><img src="{{ asset('images/gallery/instagram.svg') }}" alt="" /></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- instagram Block One -->
                                        <div class="instagram-block_one">
                                            <div class="instagram-block_one-inner">
                                                <div class="instagram-block_one-image">
                                                    <img src="{{ asset('images/gallery/instagram-6.jpg') }}" alt="" />
                                                    <div class="instagram-block_one-overlay">
                                                        <a href="javascript:void(0)" class="lightbox-image instagram-block_one-icon">
                                                            <i class=""><img src="{{ asset('images/gallery/instagram.svg') }}" alt="" /></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="footer-three_location-title">Open Hours:</div>
                                    <div class="footer-three_location-text">Mon - Sat: 8 am - 5 pm,   Sunday: CLOSED</div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-three_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-three_widget links-widget">
                                    <h3 class="footer-three_title">Company</h3>
                                    <ul class="footer-three_list">
                                        <li><a href="#">UI Design</a></li>
                                        <li><a href="#">Web Design</a></li>
                                        <li><a href="#">Branding</a></li>
                                        <li><a href="#">Web Flow</a></li>
                                        <li><a href="#">SEO service</a></li>
                                        <li><a href="#">Social Marketing</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-three_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-three_widget appointment-widget">
                                    <h3 class="footer-three_appointment-title">Need an Appointment</h3>
                                    <div class="footer-three_appointment-subtitle">We build really better idea</div>
                                    <div class="footer-three_appointment-text">Subscribe for newsletter & get day news, service update</div>
                                    <div class="newsletter-box">
                                        <form method="post" action="">
                                            <div class="form-group">
                                                <input type="email" name="search-field" value="" placeholder="Enter Your Email" required>
                                                <button type="submit" class="theme-btn fa-solid fa-paper-plane fa-fw"></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Social Box -->
                                    <div class="footer-three_socials">
                                        <a href="https://www.facebook.com/Zanite"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/zarnite13889"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="https://www.tiktok.com/@zarn_it"><i class="fa-brands fa-youtube"></i></a>
                                        <a href="https://www.instagram.com/zarn_ite"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="footer-three_bottom">
                <!-- Copyright -->
                <div class="footer-three_copyright">Zarnit &copy; 2025. All Rights Reserved.</div>
            </div>

        </div>
    </footer>
    <!-- End Main Footer -->

    <!-- Color Palate / Color Switcher -->
    <div class="color-palate">
        <div class="color-trigger">
            <i class="fa fa-solid fa-gear fa-fw"></i>
        </div>
        <div class="color-palate-inner">
            <div class="color-palate-head">
                <h6>Choose Options</h6>
            </div>

            <!-- Colors -->
            <div class="various-color clearfix">
                <div class="colors-list">
                    <span class="palate default-color active" data-theme-file="assets/css/color-themes/default-color.html"></span>
                    <span class="palate blue-color" data-theme-file="assets/css/color-themes/blue-color.html"></span>
                    <span class="palate olive-color" data-theme-file="assets/css/color-themes/olive-color.html"></span>
                    <span class="palate orange-color" data-theme-file="assets/css/color-themes/orange-color.html"></span>
                    <span class="palate purple-color" data-theme-file="assets/css/color-themes/purple-color.html"></span>
                    <span class="palate green-color" data-theme-file="assets/css/color-themes/green-color.html"></span>
                    <span class="palate brown-color" data-theme-file="assets/css/color-themes/brown-color.html"></span>
                    <span class="palate yellow-color" data-theme-file="assets/css/color-themes/yellow-color.html"></span>
                </div>
            </div>

            <h6>RTL Version</h6>
            <ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>
            <h6>Want Sticky Header</h6>
            <ul class="header-version option-box"> <li class="box">No</li> <li>Yes</li></ul>
            <h6>Dark Verion</h6>
            <ul class="dark-version option-box"> <li class="box">Yes</li> <li>No</li></ul>
        </div>
    </div>
    <!-- End Color Palate / Color Switcher -->


    <!-- End PageWrapper -->

@endsection

@section('scripts')
    <script>

    </script>
@endsection
