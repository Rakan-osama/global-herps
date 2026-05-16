<!DOCTYPE html>
@include('client.main.html')

<head>
    @include('client.main.head')
</head>

<body>
    @include('client.main.toast')
    @include('client.main.header')

    <main>

    <!-- Hero Section Start -->
    <section class="promo-sec bg-cover jarallax" data-jarallax data-speed=".4">
        <img src="{{ asset('client/assets/images/herbs/11.webp') }}" alt="" class="jarallax-img img-fluid">
        <div class="parallax-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="promo-wrap">
                        <h1 class="display-2 text-info">{{ __('Our Products') }}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('client.homepage') }}">{{ __('Home') }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('Products') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Products Section Start -->
    <section class="sec-padding">
        <div class="container">

            <!-- Section Header -->
            <div class="sec-intro mx-auto text-center mb-5">
                <span class="sub-title2 fadeInUp">{{ __('Premium Egyptian Products') }}</span>
                <h2>{{ __('Natural Herbs, Spices & Seeds from Egypt') }}</h2>
                <p class="col-lg-7 mx-auto">{{ __('Field-selected and export-grade processed — our full range of herbs, spices and seeds from Egypt\'s finest growing regions.') }}</p>
            </div>

            <!-- Filter Tabs -->
            <div class="prod-filter-wrap d-flex justify-content-center mb-5">
                <div class="prod-filter-tabs" role="tablist">
                    <button class="prod-tab-btn active" data-category="seeds" role="tab">
                        <span class="tab-icon">🌱</span>{{ __('Seeds') }}
                        <span class="tab-count">{{ count($seeds) }}</span>
                    </button>
                    <button class="prod-tab-btn" data-category="herbs" role="tab">
                        <span class="tab-icon">🌿</span>{{ __('Herbs') }}
                        <span class="tab-count">{{ count($herbs) }}</span>
                    </button>
                    <button class="prod-tab-btn" data-category="spices" role="tab">
                        <span class="tab-icon">🌶</span>{{ __('Spices') }}
                        <span class="tab-count">{{ count($spices) }}</span>
                    </button>
                </div>
            </div>

            <!-- Seeds Grid -->
            <div class="prod-grid" id="grid-seeds">
                <div class="row gy-4">
                    @foreach($seeds as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="{{ route('client.product', $product['slug']) }}" class="prod-card">
                            <div class="prod-card-img">
                                <img src="{{ asset('client/assets/images/' . $product['image']) }}" alt="{{ $product['name'] }}">
                                <span class="prod-category-badge">{{ __('Seed') }}</span>
                            </div>
                            <div class="prod-card-body">
                                <h3 class="prod-card-title">{{ __($product['name']) }}</h3>
                                <p class="prod-card-desc">{{ __($product['short_description']) }}</p>
                                <span class="prod-card-link">{{ __('View Details') }} <i class="fa fa-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Herbs Grid -->
            <div class="prod-grid d-none" id="grid-herbs">
                <div class="row gy-4">
                    @foreach($herbs as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="{{ route('client.product', $product['slug']) }}" class="prod-card">
                            <div class="prod-card-img">
                                <img src="{{ asset('client/assets/images/' . $product['image']) }}" alt="{{ $product['name'] }}">
                                <span class="prod-category-badge herbs">{{ __('Herb') }}</span>
                            </div>
                            <div class="prod-card-body">
                                <h3 class="prod-card-title">{{ __($product['name']) }}</h3>
                                <p class="prod-card-desc">{{ __($product['short_description']) }}</p>
                                <span class="prod-card-link">{{ __('View Details') }} <i class="fa fa-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Spices Grid -->
            <div class="prod-grid d-none" id="grid-spices">
                <div class="row gy-4">
                    @foreach($spices as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="{{ route('client.product', $product['slug']) }}" class="prod-card">
                            <div class="prod-card-img">
                                <img src="{{ asset('client/assets/images/' . $product['image']) }}" alt="{{ $product['name'] }}">
                                <span class="prod-category-badge spices">{{ __('Spice') }}</span>
                            </div>
                            <div class="prod-card-body">
                                <h3 class="prod-card-title">{{ __($product['name']) }}</h3>
                                <p class="prod-card-desc">{{ __($product['short_description']) }}</p>
                                <span class="prod-card-link">{{ __('View Details') }} <i class="fa fa-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <!-- Products Section End -->

    <!-- Quality Stats Start -->
    <section class="stat-sec" style="background-image: url('{{ asset('client/assets/images/stat-bg.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-stat fadeInUp" data-delay=".2">
                        <img src="{{ asset('client/assets/images/stat1_green.png') }}" alt="Stat">
                        <div class="stat-info">
                            <h3 class="display-3 text-white">42+</h3>
                            <p>{{ __('Products in Our Range') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-stat fadeInUp" data-delay=".4">
                        <img src="{{ asset('client/assets/images/sta2_green.png') }}" alt="Stat">
                        <div class="stat-info">
                            <h3 class="display-3 text-white">100%</h3>
                            <p>{{ __('Natural & Traceable') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-stat fadeInUp" data-delay=".6">
                        <img src="{{ asset('client/assets/images/stat3_green.png') }}" alt="Stat">
                        <div class="stat-info">
                            <h3 class="display-3 text-white">50+</h3>
                            <p>{{ __('Export Markets') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-stat fadeInUp" data-delay=".8">
                        <img src="{{ asset('client/assets/images/stat4_green.png') }}" alt="Stat">
                        <div class="stat-info">
                            <h3 class="display-3 text-white">100%</h3>
                            <p>{{ __('Export-Grade Standards') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Quality Stats End -->

    </main>

    @include('client.main.footer')
    @include('client.main.scripts')

</body>
</html>
