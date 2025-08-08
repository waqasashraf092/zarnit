@extends('layout')

@section('title', 'Products')
@section('styles')
    <style>
        .feature-list ul, .feature-list li{
            list-style: circle !important;
            font-size: 16px !important;
            margin-left: 10px !important;
            line-height: 30px;
        }
    </style>
@endsection

@section('content')
    @include('includes.page_title', ["title" => "Products"])

    <div class="sidebar-page-container alternate">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="content-side col-lg-6 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <div class="news-detail_inner">
                            <div class="news-detail_content">
                                <!-- Post Date -->
                                <div class="blog-detail_date_outer">
                                    <div class="blog-detail_date" style="font-size: 14px; padding: 10px 20px">
                                        COMING SOON
                                    </div>
                                </div>
                                <div class="blog-detail_image">
                                    <img src="{{ asset('images/resource/news-8.jpg') }}" alt="">
                                    <img src="{{ asset('images/resource/news-8.jpg') }}" alt="">
                                </div>
                                <div class="blog-detail_content">
                                    <h3 class="blog-detail_title">Zarn</h3>
                                    <div class="blog-detail_text">
                                        Zarn is our flagship AI productivity suite designed to
                                        transform how you work. By combining intelligent automation
                                        with intuitive interfaces, Zarn helps you eliminate
                                        repetitive tasks, organize information efficiently,
                                        and focus on high-value work.
                                    </div>
                                    <blockquote  class="feature-list">
                                        <h4 class="mb-2">Key Features:</h4>
                                        <ul>
                                            <li>Smart automation of repetitive tasks and workflows</li>
                                            <li>Seamless integration with your existing tools and platforms</li>
                                            <li>AI that learns your behavior to give personalized suggestions.</li>
                                            <li>Clean, intuitive interface designed for focus and efficiency</li>
                                        </ul>
                                    </blockquote>
                                    <a href="#" class="theme-btn price-block_one-btn mt-0">Notify Me</a>
                                    <div class="post-share-options">
                                        <div class="post-tags">
                                            <strong>Tags:</strong>
                                            <a href="#">Productivity</a>
                                            <a href="#">AI Assistant</a>
                                            <a href="#">Automation</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="content-side col-lg-6 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <div class="news-detail_inner">
                            <div class="news-detail_content">
                                <!-- Post Date -->
                                <div class="blog-detail_date_outer">
                                    <div class="blog-detail_date" style="font-size: 14px; padding: 10px 20px">
                                        COMING SOON
                                    </div>
                                </div>
                                <div class="blog-detail_image">
                                    <img src="{{ asset('images/resource/news-8.jpg') }}" alt="">
                                    <img src="{{ asset('images/resource/news-8.jpg') }}" alt="">
                                </div>
                                <div class="blog-detail_content">
                                    <h3 class="blog-detail_title">Reolyy</h3>
                                    <div class="blog-detail_text">
                                        Reolyy leverages cutting-edge AI to revolutionize video editing.
                                        From automatic color correction to smart content analysis,
                                        Reolyy helps creators produce professional-quality videos in
                                        a fraction of the time. Its intuitive tools empower users
                                        of all skill levels to create stunning content with ease.
                                    </div>
                                    <blockquote class="feature-list">
                                        <h4 class="mb-2">Key Features:</h4>
                                        <ul>
                                            <li>AI-powered editing suggestions and automatic scene detection</li>
                                            <li>Intelligent enhancement of lighting, color, and audio quality</li>
                                            <li>Professional templates and styles for quick production</li>
                                            <li>Streamlined export and sharing capabilities</li>
                                        </ul>
                                    </blockquote>
                                    <a href="#" class="theme-btn price-block_one-btn mt-0">Notify Me</a>
                                    <div class="post-share-options">
                                        <div class="post-tags">
                                            <strong>Tags:</strong>
                                            <a href="#">Video Editing</a>
                                            <a href="#">AI Enhancement</a>
                                            <a href="#">Creative Tools</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>

    </script>
@endsection
