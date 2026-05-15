<!DOCTYPE html>
@include('client.main.html')

<head>
    @include('client.main.head')
</head>

<body>
    @include('client.main.toast')
    @include('client.main.header')

    <main>

    <!-- Hero Banner -->
    <section class="pd-hero">
        <div class="pd-hero-img">
            <img src="{{ asset('client/assets/images/' . $product['image']) }}" alt="{{ $product['name'] }}">
        </div>
        <div class="pd-hero-overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-lg-8">
                    <div class="pd-hero-content">
                        <span class="pd-category-chip pd-chip-{{ $product['category'] }}">
                            {{ ucfirst($product['category']) }}
                        </span>
                        <h1 class="pd-hero-title">{{ __($product['name']) }}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pd-breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('client.homepage') }}">{{ __('Home') }}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('client.products') }}">{{ __('Products') }}</a>
                                </li>
                                <li class="breadcrumb-item active">{{ __($product['name']) }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Banner End -->

    <!-- Product Detail Body -->
    <section class="sec-padding pd-body">
        <div class="container">
            <div class="row gy-5">

                <!-- Left: Description + Features + Uses -->
                <div class="col-lg-8">

                    <!-- About this product -->
                    <div class="pd-block">
                        <span class="pd-label">{{ __('About This Product') }}</span>
                        <h2 class="pd-section-title">{{ __($product['name']) }}</h2>
                        <p class="pd-full-desc">{{ __($product['full_description']) }}</p>
                    </div>

                    <!-- Key Features -->
                    <div class="pd-block">
                        <span class="pd-label">{{ __('Key Features') }}</span>
                        <h3 class="pd-sub-title">{{ __('What Sets Our Product Apart') }}</h3>
                        <div class="pd-features-grid">
                            @foreach($product['features'] as $feature)
                            <div class="pd-feature-item">
                                <span class="pd-feature-icon"><i class="fa fa-check"></i></span>
                                <span>{{ __($feature) }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Applications / Uses -->
                    <div class="pd-block">
                        <span class="pd-label">{{ __('Applications') }}</span>
                        <h3 class="pd-sub-title">{{ __('Industry Uses') }}</h3>
                        <div class="pd-uses-grid">
                            @foreach($product['uses'] as $use)
                            <div class="pd-use-item">
                                <i class="fa fa-industry pd-use-icon"></i>
                                <span>{{ __($use) }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>

                <!-- Right: Specs Card + CTA -->
                <div class="col-lg-4">

                    <!-- Product Image Card -->
                    <div class="pd-img-card">
                        <img src="{{ asset('client/assets/images/' . $product['image']) }}" alt="{{ $product['name'] }}">
                    </div>

                    <!-- Specifications -->
                    <div class="pd-spec-card">
                        <h4 class="pd-spec-title">{{ __('Product Specifications') }}</h4>
                        <table class="pd-spec-table">
                            <tr>
                                <td>{{ __('Category') }}</td>
                                <td>{{ ucfirst(__($product['category'])) }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Origin') }}</td>
                                <td>{{ __($product['origin']) }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Available Form') }}</td>
                                <td>{{ __($product['form']) }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Quality Standard') }}</td>
                                <td>{{ __('Export Grade') }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Packaging') }}</td>
                                <td>{{ __('Custom on Request') }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Min. Order') }}</td>
                                <td>{{ __('Contact Us') }}</td>
                            </tr>
                        </table>
                    </div>

                    <!-- CTA Card -->
                    <div class="pd-cta-card">
                        <h4>{{ __('Request a Quote') }}</h4>
                        <p>{{ __('Ready to source') }} <strong>{{ __($product['name']) }}</strong>? {{ __('Contact our export team for specifications, pricing and samples.') }}</p>
                        <a href="{{ route('client.contact') }}" class="btn pd-cta-btn w-100">
                            {{ __('Get a Quote') }} <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                        <a href="{{ route('client.products') }}" class="pd-back-link">
                            <i class="fa fa-arrow-left me-1"></i>{{ __('Back to All Products') }}
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Product Detail Body End -->

    <!-- Related Category CTA -->
    <section class="pd-related-cta bg-shade sec-padding">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-8">
                    <span class="sub-title2 fadeInUp">{{ __('Explore More') }}</span>
                    <h2>{{ __('Browse Our Full Product Range') }}</h2>
                    <p class="mb-0">{{ __('We supply over 42 premium Egyptian herbs, spices and seeds to importers, manufacturers and distributors worldwide.') }}</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('client.products') }}" class="custom-btn">
                        <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>
                        {{ __('View All Products') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Category CTA End -->

    </main>

    @include('client.main.footer')
    @include('client.main.scripts')

</body>
</html>
