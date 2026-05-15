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
        <img src="{{ asset('client/assets/images/herbs/11.jpg') }}" alt="" class="jarallax-img img-fluid">
        <div class="parallax-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="promo-wrap">
                        <h1 class="display-2 text-info">{{ _('Our Products') }}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('client.homepage') }}">{{ _('Home') }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{ _('Products') }}</li>
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
                <span class="sub-title2 fadeInUp">{{ _('Premium Egyptian Products') }}</span>
                <h2>{{ _('Natural Herbs, Spices & Seeds from Egypt') }}</h2>
                <p class="col-lg-7 mx-auto">{{ _('Field-selected and export-grade processed — our full range of herbs, spices and seeds from Egypt\'s finest growing regions.') }}</p>
            </div>

            <!-- Filter Tabs -->
            <div class="prod-filter-wrap d-flex justify-content-center mb-5">
                <div class="prod-filter-tabs" role="tablist">
                    <button class="prod-tab-btn active" data-category="seeds" role="tab">
                        <span class="tab-icon">🌱</span>{{ _('Seeds') }}
                        <span class="tab-count">{{ count($seeds) }}</span>
                    </button>
                    <button class="prod-tab-btn" data-category="herbs" role="tab">
                        <span class="tab-icon">🌿</span>{{ _('Herbs') }}
                        <span class="tab-count">{{ count($herbs) }}</span>
                    </button>
                    <button class="prod-tab-btn" data-category="spices" role="tab">
                        <span class="tab-icon">🌶</span>{{ _('Spices') }}
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
                                <img src="{{ asset('client/assets/images/herbs/' . $product['image']) }}" alt="{{ $product['name'] }}">
                                <span class="prod-category-badge">{{ _('Seed') }}</span>
                            </div>
                            <div class="prod-card-body">
                                <h3 class="prod-card-title">{{ _($product['name']) }}</h3>
                                <p class="prod-card-desc">{{ _($product['short_description']) }}</p>
                                <span class="prod-card-link">{{ _('View Details') }} <i class="fa fa-arrow-right"></i></span>
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
                                <img src="{{ asset('client/assets/images/herbs/' . $product['image']) }}" alt="{{ $product['name'] }}">
                                <span class="prod-category-badge herbs">{{ _('Herb') }}</span>
                            </div>
                            <div class="prod-card-body">
                                <h3 class="prod-card-title">{{ _($product['name']) }}</h3>
                                <p class="prod-card-desc">{{ _($product['short_description']) }}</p>
                                <span class="prod-card-link">{{ _('View Details') }} <i class="fa fa-arrow-right"></i></span>
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
                                <img src="{{ asset('client/assets/images/herbs/' . $product['image']) }}" alt="{{ $product['name'] }}">
                                <span class="prod-category-badge spices">{{ _('Spice') }}</span>
                            </div>
                            <div class="prod-card-body">
                                <h3 class="prod-card-title">{{ _($product['name']) }}</h3>
                                <p class="prod-card-desc">{{ _($product['short_description']) }}</p>
                                <span class="prod-card-link">{{ _('View Details') }} <i class="fa fa-arrow-right"></i></span>
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
    <section class="stat-sec" style="background-image: url('{{ asset('client/assets/images/herbs/11.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-stat fadeInUp" data-delay=".2">
                        <img src="{{ asset('client/assets/images/stat1_green.png') }}" alt="Stat">
                        <div class="stat-info">
                            <h3 class="display-3 text-white">42+</h3>
                            <p>{{ _('Products in Our Range') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-stat fadeInUp" data-delay=".4">
                        <img src="{{ asset('client/assets/images/sta2_green.png') }}" alt="Stat">
                        <div class="stat-info">
                            <h3 class="display-3 text-white">100%</h3>
                            <p>{{ _('Natural & Traceable') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-stat fadeInUp" data-delay=".6">
                        <img src="{{ asset('client/assets/images/stat3_green.png') }}" alt="Stat">
                        <div class="stat-info">
                            <h3 class="display-3 text-white">50+</h3>
                            <p>{{ _('Export Markets') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-stat fadeInUp" data-delay=".8">
                        <img src="{{ asset('client/assets/images/stat4_green.png') }}" alt="Stat">
                        <div class="stat-info">
                            <h3 class="display-3 text-white">100%</h3>
                            <p>{{ _('Export-Grade Standards') }}</p>
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

<style>
/* ── Filter tabs ──────────────────────────────── */
.prod-filter-wrap { padding: 0 10px; }

.prod-filter-tabs {
    display: inline-flex;
    gap: 0;
    background: #f1f5f0;
    border-radius: 50px;
    padding: 6px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.08);
}

.prod-tab-btn {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 12px 28px;
    border: none;
    background: transparent;
    border-radius: 50px;
    font-size: 15px;
    font-weight: 600;
    color: #606f7b;
    cursor: pointer;
    transition: background 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
    white-space: nowrap;
}

.prod-tab-btn .tab-icon { font-size: 16px; }

.prod-tab-btn .tab-count {
    background: rgba(0,0,0,0.08);
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    padding: 2px 8px;
    transition: background 0.3s ease, color 0.3s ease;
}

.prod-tab-btn.active {
    background: var(--primary, #2ea140);
    color: #fff;
    box-shadow: 0 4px 14px rgba(46,161,64,0.35);
}

.prod-tab-btn.active .tab-count {
    background: rgba(255,255,255,0.25);
    color: #fff;
}

.prod-tab-btn:not(.active):hover {
    background: #e4ede5;
    color: #2ea140;
}

/* ── Product card ─────────────────────────────── */
.prod-card {
    display: flex;
    flex-direction: column;
    height: 100%;
    border-radius: 14px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 2px 16px rgba(0,0,0,0.07);
    text-decoration: none;
    color: inherit;
    transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.prod-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 32px rgba(0,0,0,0.13);
    color: inherit;
    text-decoration: none;
}

/* Image — no overlay */
.prod-card-img {
    position: relative;
    width: 100%;
    height: 200px;
    overflow: hidden;
    flex-shrink: 0;
}

.prod-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    transition: transform 0.5s ease;
}

.prod-card:hover .prod-card-img img { transform: scale(1.06); }

/* Category badge */
.prod-category-badge {
    position: absolute;
    top: 12px;
    left: 12px;
    background: var(--primary, #2ea140);
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    padding: 4px 10px;
    border-radius: 20px;
}

.prod-category-badge.herbs  { background: #1a8a30; }
.prod-category-badge.spices { background: #c0392b; }

/* Card body — text below image */
.prod-card-body {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    padding: 18px 20px 20px;
    border-top: 2px solid #f1f5f0;
}

.prod-card-title {
    font-size: 17px;
    font-weight: 700;
    margin: 0 0 8px;
    color: #1a2e1a;
    line-height: 1.3;
}

.prod-card-desc {
    font-size: 13px;
    color: #606f7b;
    line-height: 1.6;
    flex-grow: 1;
    margin: 0 0 14px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.prod-card-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    font-weight: 700;
    color: var(--primary, #2ea140);
    transition: gap 0.2s ease;
}

.prod-card:hover .prod-card-link { gap: 10px; }

/* ── Grid transition ──────────────────────────── */
.prod-grid { animation: fadeInGrid 0.35s ease; }

@keyframes fadeInGrid {
    from { opacity: 0; transform: translateY(12px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* ── Responsive ───────────────────────────────── */
@media (max-width: 767px) {
    .prod-tab-btn { padding: 10px 18px; font-size: 14px; }
    .prod-card-img { height: 180px; }
}

@media (max-width: 480px) {
    .prod-filter-tabs { flex-direction: column; border-radius: 14px; width: 100%; }
    .prod-tab-btn { justify-content: center; border-radius: 10px; }
    .prod-card-img { height: 160px; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabs   = document.querySelectorAll('.prod-tab-btn');
    const grids  = document.querySelectorAll('.prod-grid');

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            tabs.forEach(function (t) { t.classList.remove('active'); });
            this.classList.add('active');

            var cat = this.dataset.category;

            grids.forEach(function (grid) {
                if (grid.id === 'grid-' + cat) {
                    grid.classList.remove('d-none');
                } else {
                    grid.classList.add('d-none');
                }
            });
        });
    });
});
</script>

</body>
</html>
