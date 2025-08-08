@extends('layout')

@section('title', 'Blog')
@section('styles')
    <style>

    </style>
@endsection



@section('content')
    @include('includes.page_title', ["title" => "Zarnite Blog"])

    <section class="news-four">
        <div class="auto-container">
            <div class="row clearfix">

                @foreach($blogs as $blog)
                    <div class="news-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="news-block_one-inner">
                            <!-- Post Date -->
                            <div class="news-block_one-date_outer">
                                <div class="news-block_one-date" style="font-size: 16px; margin-left: -60px; margin-top: -20px; padding: 8px 20px">
                                    {{ $blog['created_at'] }}
                                </div>
                            </div>
                            <div class="news-block_one-image">
                                <a href="{{ route('blogs.show', [ 'id' => $blog['id']]) }}">
                                    <img src="{{ $blog['image'] }}" alt="">
                                </a>
                                <img src="{{ $blog['image'] }}" alt="">
                            </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <ul class="news-block_one-meta">
                                    <li>
                                        <span class="icon fa-solid fa-tags fa-fw"></span>
                                        @foreach($blog['tags'] as $tag)
                                            {{ $tag }}
                                        @endforeach
                                    </li>
                                    <li>
                                        <span class="icon fa-solid fa-book fa-fw"></span>
                                        {{ $blog['reading_time'] }}
                                    </li>
                                </ul>
                                <a class="news-block_one-arrow" href="{{ route('blogs.show', [ 'id' => $blog['id']]) }}">
                                    <img src="{{ asset('images/icons/blog-arrow.svg') }}" alt="">
                                </a>
                            </div>
                            <div class="news-block_one-content mb-5" style="padding-top: unset;">
                                <h4 class="news-block_one-title">
                                    <a href="{{ route('blogs.show', [ 'id' => $blog['id']]) }}">
                                        {{ $blog['title'] }}
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Styled Pagination -->
            <ul class="styled-pagination text-center">
                <li class="prev">
                    <a href="#">
                        <i class="fa-solid fa-angle-left fa-fw"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="active">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li class="next">
                    <a href="#">
                        <i class="fa-solid fa-angle-right fa-fw"></i>
                    </a>
                </li>
            </ul>
            <!-- End Styled Pagination -->

        </div>
    </section>

@endsection

@section('scripts')
    <script>

    </script>
@endsection
