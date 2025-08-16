@extends('layout')

@section('title', 'Blogs')

@section('content')
    @include('shared.page-header', [
        'tag' => 'Our Blogs',
        'title' => 'Zarnite Blogs',
        'sub_title' => 'Insights, updates, and thought leadership on AI, productivity, and technology trends.',
    ])

    <!-- Featured Article -->
    <section class="pt-5 bg-light">
        <div class="container py-3">
            <div class="card border-0 shadow-lg mb-5 bg-white">
                <div class="row g-0">
                    <div class="col-md-6 py-5 ps-5">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('images/image_9.jpg') }}" class="card-img object-fit-cover h-100" alt="Featured Article">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body p-5 d-flex flex-column justify-content-center h-100">
                            <span class="badge bg-primary mb-3 align-self-start">Featured</span>
                            <div class="text-muted small mb-3">Mar 15, 2025 • 5 min read</div>
                            <h3 class="card-title h2 mb-3">The Future of AI in Software</h3>
                            <p class="card-text text-muted mb-4">
                                How intelligent automation is transforming the way we interact with technology and enhancing productivity across industries. Explore the latest trends and innovations.
                            </p>
                            <a href="{{ route('blogs.show', 1) }}" class="btn btn-primary">
                                Read Article <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Posts Grid -->
    <section class="bg-light">
        <div class="container">
            <div class="row g-5">
                @foreach($blogs as $b)
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-lg bg-white">
                            <div class="ratio ratio-16x9">
                                <img src="{{ $b['image'] }}" class="card-img-top object-fit-cover" alt="{{ $b['title'] }}">
                            </div>
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="text-muted small mb-3">{{ $b['reading_time'] }}</div>
                                <h5 class="card-title">{{ $b['title'] }}</h5>
                                <p class="card-text text-muted flex-grow-1">
                                    {{ $b['description'] }}
                                </p>
                                <a href="{{ route('blogs.show', $b['id']) }}" class="btn btn-link p-0 text-primary mt-auto">
                                    Read More <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <nav aria-label="Blog pagination" class="">
                <ul class="pagination justify-content-center py-5 m-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
@endsection
