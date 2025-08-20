<footer class="bg-white border-top">
    <div class="container py-5">
        <!-- Footer Content -->
        <div class="row g-4">
            <div class="col-lg-3">
                <a href="{{ route('home.index') }}" class="text-decoration-none">
                    <h4 class="text-primary fw-bold">Zarnite</h4>
                </a>
                <p class="text-muted small">{{ __('l.app_desc') }}</p>
            </div>
            <div class="col-lg-3">
                <h6 class="fw-semibold mb-3">
                    {{ __('l.Products') }}
                </h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('home.products') }}" class="text-muted text-decoration-none">Zarn</a></li>
                    <li class="mb-2"><a href="{{ route('home.products') }}" class="text-muted text-decoration-none">Reolyy</a></li>
                    <li class="mb-2"><a href="{{ route('home.early-access') }}" class="text-muted text-decoration-none">{{ __('l.early_access_title') }}</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h6 class="fw-semibold mb-3">{{ __('l.Company') }}</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('home.about') }}" class="text-muted text-decoration-none">{{ __('l.Products') }}</a></li>
                    <li class="mb-2"><a href="{{ route('blogs.index') }}" class="text-muted text-decoration-none">{{ __('l.Blog') }}</a></li>
                    <li class="mb-2"><a href="{{ route('home.contact') }}" class="text-muted text-decoration-none">{{ __('l.Contact') }}</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h6 class="fw-semibold mb-3">{{ __('l.Support') }}</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="mailto:support@zanite.inc" class="text-muted text-decoration-none">
                            {{ __('l.Email Support') }}
                        </a>
                    </li>
                    <li class="mb-2">
                        <small class="text-muted">
                            1111B S Governors Ave STE 21630<br>
                            Dover, DE, 19904 US
                        </small>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <hr class="my-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
            <p class="text-muted mb-0">© {{ date('Y') }} Zarnite. {{ __('l.All rights reserved') }}</p>
            <div class="d-flex gap-4 mt-3 mt-md-0">
                <a href="{{ route('home.privacy-policy') }}" class="text-muted text-decoration-none small">{{ __('l.Privacy Policy') }}</a>
                <a href="{{ route('home.terms-of-service') }}" class="text-muted text-decoration-none small">{{ __('l.Terms of Service') }}</a>
        </div>
    </div>
</footer>
