@extends('layout')

@section('title', 'Welcome to Your Laravel App')
@section('styles')
    <style>

    </style>
@endsection

@section('content')
    @include('includes.page_title', ["title" => "About Zarnite"])

    <section class="project-detail">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="sec-title_title">
                    Learn about our journey
                    <div class="sec-title_dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <h2 class="sec-title_heading">Our Story</h2>
                <div class="sec-title_text">
                    Zarnite was founded with a vision to make advanced AI accessible through beautiful,
                    intuitive software that solves real problems for both individuals and businesses.

                    Our team of engineers, designers, and AI specialists work together to build tools
                    that not only leverage cutting-edge technology but also provide exceptional user experiences.

                    We believe that technology should adapt to humans, not the other way around.
                    This philosophy guides everything we build, ensuring our products feel natural
                    and intuitive while delivering powerful capabilities.
                </div>
                <div class="project-detail_image" style="margin-top: 40px;">
                    <img src="{{ asset('images/resource/project-1.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="project-detail">
        <div class="auto-container">

            <div class="sec-title">
                <div class="sec-title_title">
                    The values that drive us
                    <div class="sec-title_dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <h2 class="sec-title_heading">Our Vision</h2>
                <div class="sec-title_text">
                    We aim to become a global leader in intelligent software, empowering the next generation of creators, innovators, and businesses to achieve more than ever before. By providing powerful, future-ready tools, we help our users build, scale, and thrive in a rapidly evolving digital world. Our focus is on enabling progress through smart, adaptable solutions that support innovation across industries.
                </div>
                <div class="sec-title_text">
                    We envision a world where AI-driven tools are not just utilities, but trusted partners in both professional and personal journeys. By simplifying complex tasks and removing barriers to productivity, we unlock human potential and free people to focus on what truly matters — creativity, growth, and meaningful impact.
                </div>
            </div>

            <div class="project-detail_lists">
                <div class="row clearfix">
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <ul class="project-detail_list">
                            <li>Continuous innovation at the intersection of AI</li>
                            <li>Making powerful technology accessible to everyone</li>
                        </ul>
                    </div>
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <ul class="project-detail_list">
                            <li>Empowering users to achieve more with less effort</li>
                            <li>Create intelligent tools for the future.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="project-detail">
        <div class="auto-container">

            <div class="sec-title">
                <div class="sec-title_title">
                    The values that drive us
                    <div class="sec-title_dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <h2 class="sec-title_heading">Our Mission</h2>
                <div class="sec-title_text">
                    We strive to continually push the boundaries of what software can achieve—delivering tools that are fast, intelligent, and future-ready. Our focus is on innovation, performance, and creating solutions that evolve alongside technology and user expectations.
                </div>
                <div class="sec-title_text">
                    Our mission is to build AI-powered tools that adapt to individual needs, learn from user behavior, and provide meaningful value through smart automation and intelligent assistance. We aim to make technology more intuitive, helpful, and seamlessly integrated into everyday tasks.
                </div>
            </div>

            <div class="project-detail_lists">
                <div class="row clearfix">
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <ul class="project-detail_list">
                            <li>Crafting durable, high-quality products.</li>
                            <li>Designing user experiences people love.</li>
                        </ul>
                    </div>
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <ul class="project-detail_list">
                            <li>Embracing emerging technologies for the future.</li>
                            <li>Building smart tools for tomorrow.</li>
                        </ul>
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
