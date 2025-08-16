<section class="py-4 bg-white">
    <div class="container py-5">
        <div class="text-center">
            <span class="badge bg-primary mb-3">
                {{ $tag }}
            </span>
            <h1 class="display-4 fw-bold mb-3">
                {{ $title }}
            </h1>
            @if(isset($sub_title))
                <p class="lead text-muted mx-auto" style="max-width: 600px;">
                    {{ $sub_title }}
                </p>
            @endif
            @if(isset($back_url))
                <a href="{{ $back_url }}" class="btn btn-outline-primary btn-lg py-2">
                    <i class="bi bi-arrow-left me-2"></i>
                    Back to List
                </a>
            @endif
        </div>
    </div>
</section>
