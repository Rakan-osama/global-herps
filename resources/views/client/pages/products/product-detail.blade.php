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
            <img src="{{ asset('client/assets/images/herbs/' . $product['image']) }}" alt="{{ $product['name'] }}">
        </div>
        <div class="pd-hero-overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-lg-8">
                    <div class="pd-hero-content">
                        <span class="pd-category-chip pd-chip-{{ $product['category'] }}">
                            {{ ucfirst($product['category']) }}
                        </span>
                        <h1 class="pd-hero-title">{{ _($product['name']) }}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pd-breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('client.homepage') }}">{{ _('Home') }}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('client.products') }}">{{ _('Products') }}</a>
                                </li>
                                <li class="breadcrumb-item active">{{ _($product['name']) }}</li>
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
                        <span class="pd-label">{{ _('About This Product') }}</span>
                        <h2 class="pd-section-title">{{ _($product['name']) }}</h2>
                        <p class="pd-full-desc">{{ _($product['full_description']) }}</p>
                    </div>

                    <!-- Key Features -->
                    <div class="pd-block">
                        <span class="pd-label">{{ _('Key Features') }}</span>
                        <h3 class="pd-sub-title">{{ _('What Sets Our Product Apart') }}</h3>
                        <div class="pd-features-grid">
                            @foreach($product['features'] as $feature)
                            <div class="pd-feature-item">
                                <span class="pd-feature-icon"><i class="fa fa-check"></i></span>
                                <span>{{ _($feature) }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Applications / Uses -->
                    <div class="pd-block">
                        <span class="pd-label">{{ _('Applications') }}</span>
                        <h3 class="pd-sub-title">{{ _('Industry Uses') }}</h3>
                        <div class="pd-uses-grid">
                            @foreach($product['uses'] as $use)
                            <div class="pd-use-item">
                                <i class="fa fa-industry pd-use-icon"></i>
                                <span>{{ _($use) }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>

                <!-- Right: Specs Card + CTA -->
                <div class="col-lg-4">

                    <!-- Product Image Card -->
                    <div class="pd-img-card">
                        <img src="{{ asset('client/assets/images/herbs/' . $product['image']) }}" alt="{{ $product['name'] }}">
                    </div>

                    <!-- Specifications -->
                    <div class="pd-spec-card">
                        <h4 class="pd-spec-title">{{ _('Product Specifications') }}</h4>
                        <table class="pd-spec-table">
                            <tr>
                                <td>{{ _('Category') }}</td>
                                <td>{{ ucfirst(_($product['category'])) }}</td>
                            </tr>
                            <tr>
                                <td>{{ _('Origin') }}</td>
                                <td>{{ $product['origin'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ _('Available Form') }}</td>
                                <td>{{ $product['form'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ _('Quality Standard') }}</td>
                                <td>{{ _('Export Grade') }}</td>
                            </tr>
                            <tr>
                                <td>{{ _('Packaging') }}</td>
                                <td>{{ _('Custom on Request') }}</td>
                            </tr>
                            <tr>
                                <td>{{ _('Min. Order') }}</td>
                                <td>{{ _('Contact Us') }}</td>
                            </tr>
                        </table>
                    </div>

                    <!-- CTA Card -->
                    <div class="pd-cta-card">
                        <h4>{{ _('Request a Quote') }}</h4>
                        <p>{{ _('Ready to source') }} <strong>{{ _($product['name']) }}</strong>? {{ _('Contact our export team for specifications, pricing and samples.') }}</p>
                        <a href="{{ route('client.contact') }}" class="btn pd-cta-btn w-100">
                            {{ _('Get a Quote') }} <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                        <a href="{{ route('client.products') }}" class="pd-back-link">
                            <i class="fa fa-arrow-left me-1"></i>{{ _('Back to All Products') }}
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
                    <span class="sub-title2 fadeInUp">{{ _('Explore More') }}</span>
                    <h2>{{ _('Browse Our Full Product Range') }}</h2>
                    <p class="mb-0">{{ _('We supply over 42 premium Egyptian herbs, spices and seeds to importers, manufacturers and distributors worldwide.') }}</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('client.products') }}" class="custom-btn">
                        <span class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>
                        {{ _('View All Products') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Category CTA End -->

    </main>

    @include('client.main.footer')
    @include('client.main.scripts')

<style>
/* ── Hero Banner ──────────────────────────────── */
.pd-hero {
    position: relative;
    height: 480px;
    display: flex;
    align-items: flex-end;
    overflow: hidden;
}

.pd-hero-img {
    position: absolute;
    inset: 0;
}

.pd-hero-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
}

.pd-hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(10,30,10,0.80) 0%, rgba(10,30,10,0.20) 60%, transparent 100%);
}

.pd-hero-content {
    position: relative;
    z-index: 2;
    padding-bottom: 48px;
}

.pd-category-chip {
    display: inline-block;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 5px 14px;
    border-radius: 20px;
    margin-bottom: 14px;
    background: var(--primary, #2ea140);
    color: #fff;
}

.pd-chip-herbs  { background: #1a8a30; }
.pd-chip-spices { background: #c0392b; }

.pd-hero-title {
    font-size: clamp(2rem, 5vw, 3.2rem);
    font-weight: 800;
    color: #fff;
    margin: 0 0 14px;
    line-height: 1.15;
}

.pd-breadcrumb .breadcrumb-item a { color: rgba(255,255,255,0.75); }
.pd-breadcrumb .breadcrumb-item.active { color: #fff; }
.pd-breadcrumb .breadcrumb-item + .breadcrumb-item::before { color: rgba(255,255,255,0.5); }

/* ── Body blocks ──────────────────────────────── */
.pd-block { margin-bottom: 42px; }

.pd-label {
    display: inline-block;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--primary, #2ea140);
    margin-bottom: 8px;
}

.pd-section-title {
    font-size: clamp(1.5rem, 3vw, 2rem);
    font-weight: 800;
    color: #1a2e1a;
    margin: 0 0 16px;
}

.pd-sub-title {
    font-size: 1.15rem;
    font-weight: 700;
    color: #1a2e1a;
    margin: 0 0 20px;
}

.pd-full-desc {
    font-size: 15.5px;
    line-height: 1.8;
    color: #4a5a4a;
    margin: 0;
}

/* ── Features grid ────────────────────────────── */
.pd-features-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
}

.pd-feature-item {
    display: flex;
    align-items: center;
    gap: 12px;
    background: #f7faf7;
    border: 1px solid #e4ede5;
    border-radius: 10px;
    padding: 14px 16px;
    font-size: 14px;
    font-weight: 600;
    color: #2a3a2a;
    transition: border-color 0.2s, background 0.2s;
}

.pd-feature-item:hover {
    background: #edf6ee;
    border-color: #2ea140;
}

.pd-feature-icon {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: var(--primary, #2ea140);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    flex-shrink: 0;
}

/* ── Uses grid ────────────────────────────────── */
.pd-uses-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
}

.pd-use-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 16px;
    background: #fff;
    border-radius: 10px;
    border-left: 3px solid var(--primary, #2ea140);
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    font-size: 14px;
    color: #2a3a2a;
}

.pd-use-icon {
    color: var(--primary, #2ea140);
    font-size: 14px;
    flex-shrink: 0;
}

/* ── Right column cards ───────────────────────── */
.pd-img-card {
    width: 100%;
    height: 260px;
    border-radius: 16px;
    overflow: hidden;
    margin-bottom: 24px;
    box-shadow: 0 8px 28px rgba(0,0,0,0.12);
}

.pd-img-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
}

.pd-spec-card {
    background: #fff;
    border-radius: 14px;
    border: 1px solid #e4ede5;
    padding: 24px;
    margin-bottom: 20px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.05);
}

.pd-spec-title {
    font-size: 16px;
    font-weight: 700;
    color: #1a2e1a;
    margin: 0 0 18px;
    padding-bottom: 12px;
    border-bottom: 2px solid #f1f5f0;
}

.pd-spec-table {
    width: 100%;
    border-collapse: collapse;
}

.pd-spec-table tr td {
    padding: 10px 0;
    font-size: 14px;
    border-bottom: 1px solid #f1f5f0;
    vertical-align: top;
}

.pd-spec-table tr:last-child td { border-bottom: none; }

.pd-spec-table tr td:first-child {
    color: #606f7b;
    font-weight: 600;
    width: 45%;
}

.pd-spec-table tr td:last-child {
    color: #1a2e1a;
    font-weight: 500;
}

/* CTA Card */
.pd-cta-card {
    background: linear-gradient(135deg, #1a8a30 0%, #2ea140 100%);
    border-radius: 14px;
    padding: 28px 24px;
    color: #fff;
}

.pd-cta-card h4 {
    font-size: 18px;
    font-weight: 700;
    color: #fff;
    margin: 0 0 10px;
}

.pd-cta-card p {
    font-size: 14px;
    color: rgba(255,255,255,0.85);
    margin: 0 0 20px;
    line-height: 1.6;
}

.pd-cta-btn {
    background: #fff;
    color: #1a8a30;
    font-weight: 700;
    font-size: 14px;
    border-radius: 50px;
    padding: 12px 20px;
    border: none;
    transition: background 0.2s, transform 0.2s;
    display: flex;
    align-items: center;
    justify-content: center;
}

.pd-cta-btn:hover {
    background: #f0fdf1;
    color: #1a8a30;
    transform: translateY(-2px);
}

.pd-back-link {
    display: block;
    text-align: center;
    margin-top: 14px;
    font-size: 13px;
    font-weight: 600;
    color: rgba(255,255,255,0.80);
    text-decoration: none;
    transition: color 0.2s;
}

.pd-back-link:hover { color: #fff; }

/* ── Responsive ───────────────────────────────── */
@media (max-width: 991px) {
    .pd-hero { height: 380px; }
    .pd-features-grid, .pd-uses-grid { grid-template-columns: 1fr 1fr; }
}

@media (max-width: 767px) {
    .pd-hero { height: 320px; }
    .pd-hero-content { padding-bottom: 32px; }
    .pd-features-grid { grid-template-columns: 1fr; }
    .pd-uses-grid { grid-template-columns: 1fr; }
    .pd-img-card { height: 220px; }
}

@media (max-width: 575px) {
    .pd-hero { height: 270px; }
    .pd-hero-title { font-size: 1.7rem; }
}
</style>

</body>
</html>
