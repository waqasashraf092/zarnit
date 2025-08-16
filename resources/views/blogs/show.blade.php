@extends('layout')

@section('title', 'Blogs')

@section('content')
    @include('shared.page-header', [
        'tag' => 'Our Blogs',
        'title' => 'Blog Article',
        'back_url' => route('blogs.index')
    ])

    <!-- Blog Post Content -->
    <main class="py-5">
        <div class="container py-2">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Article Header -->
                    <article class="mb-5">
                        <header class="mb-5">
                            <div class="text-muted small mb-3" id="articleMeta">
                                {{ $blog['created_at'] }} • {{ $blog['reading_time'] }}
                            </div>
                            <h1 class="display-5 fw-bold mb-4" id="articleTitle">
                                {{ $blog['title'] }}
                            </h1>
                            <p class="lead text-muted" id="articleExcerpt">
                                {{ $blog['description'] }}
                            </p>
                        </header>

                        <!-- Article Image -->
                        <div class="mb-5">
                            <img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}" class="img-fluid rounded shadow" id="articleImage">
                        </div>

                        <!-- Article Content -->
                        <div class="article-content" id="articleContent">
                            <p class="lead">Artificial Intelligence is no longer a futuristic concept—it's here, and it's revolutionizing how we work, create, and interact with technology every day.</p>

                            <p>From automated email responses to intelligent document processing, AI has quietly integrated into our daily workflows, making tasks that once took hours now complete in minutes. But this is just the beginning of a much larger transformation.</p>

                            <h2 class="h3 mt-5 mb-3">The Current State of AI Integration</h2>

                            <p>Today's AI tools are becoming increasingly sophisticated while remaining user-friendly. Modern software applications are embedding AI capabilities that:</p>

                            <ul>
                                <li>Predict user needs and automate routine tasks</li>
                                <li>Provide intelligent suggestions and recommendations</li>
                                <li>Learn from user behavior to improve over time</li>
                                <li>Handle complex data processing in real-time</li>
                            </ul>

                            <p>These capabilities are no longer limited to tech giants—they're becoming accessible to businesses and individuals of all sizes through innovative platforms and tools.</p>

                            <h2 class="h3 mt-5 mb-3">Transforming Industries</h2>

                            <p>AI's impact spans across numerous sectors:</p>

                            <h3 class="h4 mt-4 mb-3">Creative Industries</h3>
                            <p>Video editing, graphic design, and content creation are being enhanced with AI tools that can automate repetitive tasks while maintaining creative control for professionals.</p>

                            <h3 class="h4 mt-4 mb-3">Business Operations</h3>
                            <p>From customer service chatbots to predictive analytics, AI is helping businesses operate more efficiently and make data-driven decisions.</p>

                            <h3 class="h4 mt-4 mb-3">Personal Productivity</h3>
                            <p>Individual users are benefiting from AI-powered scheduling, task management, and communication tools that adapt to their working styles.</p>

                            <h2 class="h3 mt-5 mb-3">Looking Ahead</h2>

                            <p>The future of AI in software isn't about replacing human creativity or decision-making—it's about amplifying human capabilities. We're moving toward a world where:</p>

                            <blockquote class="blockquote border-start border-primary border-4 ps-4 my-4">
                                <p class="mb-0">"AI will become an invisible layer that makes all software more intelligent, more responsive, and more helpful—without getting in the way of what users want to accomplish."</p>
                            </blockquote>

                            <p>As we continue to develop tools like Zarn and Reolyy, we're focused on creating AI experiences that feel natural and empowering, not overwhelming or intrusive.</p>

                            <h2 class="h3 mt-5 mb-3">The Human-AI Partnership</h2>

                            <p>The most successful AI implementations will be those that strengthen the human-technology partnership. This means:</p>

                            <ul>
                                <li>Designing AI that augments human intelligence rather than replacing it</li>
                                <li>Creating transparent systems that users can understand and trust</li>
                                <li>Building tools that learn from user feedback and adapt accordingly</li>
                                <li>Maintaining human control over important decisions and creative processes</li>
                            </ul>

                            <p>At Zarnite, we believe the future belongs to software that makes AI accessible, useful, and delightful for everyone—not just technical experts.</p>

                            <div class="bg-light rounded-3 p-4 my-5">
                                <p class="mb-0">
                                    <strong>Want to be part of this future?</strong>
                                    Join our early access program to experience how AI can transform your productivity workflow.
                                    <a href="{{ route('home.early-access') }}" class="text-primary text-decoration-none">
                                        Get early access →
                                    </a>
                                </p>
                            </div>
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </main>
@endsection
