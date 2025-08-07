<!-- Page Title -->
<section class="page-title">
    <div class="page-title_big-title">{{ $title }}</div>
    <div class="page-title_bg-image" style="background-image:url({{ asset('images/background/3.jpg') }})"></div>
    <div class="page-title_shape-one" style="background-image:url({{ asset('images/background/page-title-1.png') }})"></div>
    <div class="page-title_shape-two" style="background-image:url({{ asset('images/background/page-title-2.png') }})"></div>
    <div class="auto-container">
        <h1>{{ $title }}</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>{{ $title }}</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->
